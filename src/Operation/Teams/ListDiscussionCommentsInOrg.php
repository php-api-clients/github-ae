<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Operation\Teams;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final class ListDiscussionCommentsInOrg
{
    public const OPERATION_ID = 'teams/list-discussion-comments-in-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments';
    private const METHOD = 'GET';
    private const PATH = '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The slug of the team name.**/
    private string $teamSlug;
    /**The number that identifies the discussion.**/
    private int $discussionNumber;
    /**The direction to sort the results by.**/
    private string $direction;
    /**The number of results per page (max 100).**/
    private int $perPage;
    /**Page number of the results to fetch.**/
    private int $page;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments $hydrator, string $org, string $teamSlug, int $discussionNumber, string $direction = 'desc', int $perPage = 30, int $page = 1)
    {
        $this->org = $org;
        $this->teamSlug = $teamSlug;
        $this->discussionNumber = $discussionNumber;
        $this->direction = $direction;
        $this->perPage = $perPage;
        $this->page = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{team_slug}', '{discussion_number}', '{direction}', '{per_page}', '{page}'), array($this->org, $this->teamSlug, $this->discussionNumber, $this->direction, $this->perPage, $this->page), self::PATH . '?direction={direction}&per_page={per_page}&page={page}'));
    }
    /**
     * @return \Rx\Observable<Schema\TeamDiscussionComment>
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Rx\Observable
    {
        $code = $response->getStatusCode();
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
                            $this->responseSchemaValidator->validate($bodyItem, \cebe\openapi\Reader::readFromJson(Schema\TeamDiscussionComment::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        }
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : Schema\TeamDiscussionComment {
                            return $this->hydrator->hydrateObject(Schema\TeamDiscussionComment::class, $body);
                        });
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
