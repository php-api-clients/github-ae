<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operation\Reactions;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;
use Rx\Observable;
use Rx\Scheduler\ImmediateScheduler;

use function explode;
use function json_decode;
use function str_replace;

final class ListForIssue
{
    public const OPERATION_ID    = 'reactions/list-for-issue';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/issues/{issue_number}/reactions';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/issues/{issue_number}/reactions';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The number that identifies the issue.**/
    private int $issueNumber;
    /**Returns a single [reaction type](https://docs.github.com/github-ae@latest/rest/reference/reactions#reaction-types). Omit this parameter to list all reactions to an issue.**/
    private string $content;
    /**The number of results per page (max 100).**/
    private int $perPage;
    /**Page number of the results to fetch.**/
    private int $page;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Reactions $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Reactions $hydrator, string $owner, string $repo, int $issueNumber, string $content, int $perPage = 30, int $page = 1)
    {
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->issueNumber             = $issueNumber;
        $this->content                 = $content;
        $this->perPage                 = $perPage;
        $this->page                    = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{issue_number}', '{content}', '{per_page}', '{page}'], [$this->owner, $this->repo, $this->issueNumber, $this->content, $this->perPage, $this->page], self::PATH . '?content={content}&per_page={per_page}&page={page}'));
    }

    /**
     * @return Observable<Schema\Reaction>
     */
    public function createResponse(ResponseInterface $response): Observable
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response
                    **/
                    case 200:
                        foreach ($body as $bodyItem) {
                            $this->responseSchemaValidator->validate($bodyItem, Reader::readFromJson(Schema\Reaction::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        }

                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\Reaction {
                            return $this->hydrator->hydrateObject(Schema\Reaction::class, $body);
                        });
                    /**
                     * Resource not found
                    **/

                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                    /**
                     * Gone
                    **/

                    case 410:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        throw new ErrorSchemas\BasicError(410, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
