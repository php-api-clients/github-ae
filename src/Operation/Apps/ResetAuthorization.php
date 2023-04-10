<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Apps;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class ResetAuthorization
{
    public const OPERATION_ID = 'apps/reset-authorization';
    public const OPERATION_MATCH = 'POST /applications/{client_id}/tokens/{access_token}';
    private const METHOD = 'POST';
    private const PATH = '/applications/{client_id}/tokens/{access_token}';
    /**The client ID of the GitHub app.**/
    private string $clientId;
    private string $accessToken;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Applications\CbClientIdRcb\Tokens\CbAccessTokenRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Applications\CbClientIdRcb\Tokens\CbAccessTokenRcb $hydrator, string $clientId, string $accessToken)
    {
        $this->clientId = $clientId;
        $this->accessToken = $accessToken;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{client_id}', '{access_token}'), array($this->clientId, $this->accessToken), self::PATH));
    }
    /**
     * @return Schema\Authorization
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\Authorization
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Authorization::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\Authorization::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
