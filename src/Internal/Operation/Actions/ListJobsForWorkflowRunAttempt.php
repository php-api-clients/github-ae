<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Operation\Actions;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function str_replace;

final class ListJobsForWorkflowRunAttempt
{
    public const OPERATION_ID    = 'actions/list-jobs-for-workflow-run-attempt';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/actions/runs/{run_id}/attempts/{attempt_number}/jobs';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The unique identifier of the workflow run. **/
    private int $runId;
    /**The attempt number of the workflow run. **/
    private int $attemptNumber;
    /**The number of results per page (max 100). For more information, see "[Using pagination in the REST API](https://docs.github.com/github-ae@latest/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $perPage;
    /**The page number of the results to fetch. For more information, see "[Using pagination in the REST API](https://docs.github.com/github-ae@latest/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $page;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Attempts\AttemptNumber\Jobs $hydrator, string $owner, string $repo, int $runId, int $attemptNumber, int $perPage = 30, int $page = 1)
    {
        $this->owner         = $owner;
        $this->repo          = $repo;
        $this->runId         = $runId;
        $this->attemptNumber = $attemptNumber;
        $this->perPage       = $perPage;
        $this->page          = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{owner}', '{repo}', '{run_id}', '{attempt_number}', '{per_page}', '{page}'], [$this->owner, $this->repo, $this->runId, $this->attemptNumber, $this->perPage, $this->page], '/repos/{owner}/{repo}/actions/runs/{run_id}/attempts/{attempt_number}/jobs' . '?per_page={per_page}&page={page}'));
    }

    public function createResponse(ResponseInterface $response): Schema\Operations\Actions\ListJobsForWorkflowRunAttempt\Response\ApplicationJson\Ok
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operations\Actions\ListJobsForWorkflowRunAttempt\Response\ApplicationJson\Ok::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\Operations\Actions\ListJobsForWorkflowRunAttempt\Response\ApplicationJson\Ok::class, $body);
                    /**
                     * Resource not found
                     **/

                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
