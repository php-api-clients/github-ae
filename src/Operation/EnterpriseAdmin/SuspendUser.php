<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\EnterpriseAdmin;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class SuspendUser
{
    public const OPERATION_ID = 'enterprise-admin/suspend-user';
    public const OPERATION_MATCH = 'PUT /users/{username}/suspended';
    private const METHOD = 'PUT';
    private const PATH = '/users/{username}/suspended';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    /**The handle for the GitHub user account.**/
    private string $username;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, string $username)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->username = $username;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(Schema\EnterpriseAdmin\SuspendUser\Request\Applicationjson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{username}'), array($this->username), self::PATH), array('Content-Type' => 'application/json'), json_encode($data));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
