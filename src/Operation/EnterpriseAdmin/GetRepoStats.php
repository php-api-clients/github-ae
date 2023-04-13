<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final class GetRepoStats
{
    public const OPERATION_ID = 'enterprise-admin/get-repo-stats';
    public const OPERATION_MATCH = 'GET /enterprise/stats/repos';
    private const METHOD = 'GET';
    private const PATH = '/enterprise/stats/repos';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Enterprise\Stats\Repos $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Enterprise\Stats\Repos $hydrator)
    {
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array(), array(), self::PATH));
    }
    /**
     * @return Schema\EnterpriseRepositoryOverview
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\EnterpriseRepositoryOverview
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
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\EnterpriseRepositoryOverview::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\EnterpriseRepositoryOverview::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
