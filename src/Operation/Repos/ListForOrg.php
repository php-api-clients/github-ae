<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Operation\Repos;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final class ListForOrg
{
    public const OPERATION_ID = 'repos/list-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/repos';
    private const METHOD = 'GET';
    private const PATH = '/orgs/{org}/repos';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**Specifies the types of repositories you want returned. `internal` is not yet supported when a GitHub App calls this endpoint with an installation access token.**/
    private string $type;
    /**The order to sort by. Default: `asc` when using `full_name`, otherwise `desc`.**/
    private string $direction;
    /**The property to sort the results by.**/
    private string $sort;
    /**The number of results per page (max 100).**/
    private int $per_page;
    /**Page number of the results to fetch.**/
    private int $page;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\CbOrgRcb\Repos $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\CbOrgRcb\Repos $hydrator, string $org, string $type, string $direction, string $sort = 'created', int $per_page = 30, int $page = 1)
    {
        $this->org = $org;
        $this->type = $type;
        $this->direction = $direction;
        $this->sort = $sort;
        $this->per_page = $per_page;
        $this->page = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{type}', '{direction}', '{sort}', '{per_page}', '{page}'), array($this->org, $this->type, $this->direction, $this->sort, $this->per_page, $this->page), self::PATH . '?type={type}&direction={direction}&sort={sort}&per_page={per_page}&page={page}'));
    }
    /**
     * @return \Rx\Observable<Schema\MinimalRepository>
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Rx\Observable
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\MinimalRepository::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : Schema\MinimalRepository {
                            return $this->hydrator->hydrateObject(Schema\MinimalRepository::class, $body);
                        });
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
