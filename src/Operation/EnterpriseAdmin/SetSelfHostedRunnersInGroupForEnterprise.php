<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final class SetSelfHostedRunnersInGroupForEnterprise
{
    public const OPERATION_ID = 'enterprise-admin/set-self-hosted-runners-in-group-for-enterprise';
    public const OPERATION_MATCH = 'PUT /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/runners';
    private const METHOD = 'PUT';
    private const PATH = '/enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/runners';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    private string $enterprise;
    /**Unique identifier of the self-hosted runner group.**/
    private int $runnerGroupId;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, string $enterprise, int $runnerGroupId)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->enterprise = $enterprise;
        $this->runnerGroupId = $runnerGroupId;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(Schema\EnterpriseAdmin\SetSelfHostedRunnersInGroupForEnterprise\Request\Applicationjson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{enterprise}', '{runner_group_id}'), array($this->enterprise, $this->runnerGroupId), self::PATH), array('Content-Type' => 'application/json'), json_encode($data));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
