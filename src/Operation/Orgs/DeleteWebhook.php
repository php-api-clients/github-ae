<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Operation\Orgs;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final class DeleteWebhook
{
    public const OPERATION_ID = 'orgs/delete-webhook';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/hooks/{hook_id}';
    private const METHOD = 'DELETE';
    private const PATH = '/orgs/{org}/hooks/{hook_id}';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The unique identifier of the hook.**/
    private int $hook_id;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\CbOrgRcb\Hooks\CbHookIdRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\CbOrgRcb\Hooks\CbHookIdRcb $hydrator, string $org, int $hook_id)
    {
        $this->org = $org;
        $this->hook_id = $hook_id;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{hook_id}'), array($this->org, $this->hook_id), self::PATH));
    }
    /**
     * @return Schema\BasicError
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\BasicError
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Resource not found**/
            case 404:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\BasicError::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
