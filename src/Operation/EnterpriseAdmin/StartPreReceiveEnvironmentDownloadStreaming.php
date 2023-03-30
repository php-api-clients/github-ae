<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final class StartPreReceiveEnvironmentDownloadStreaming
{
    public const OPERATION_ID = 'enterprise-admin/start-pre-receive-environment-download';
    public const OPERATION_MATCH = 'STREAM /admin/pre-receive-environments/{pre_receive_environment_id}/downloads';
    private const METHOD = 'POST';
    private const PATH = '/admin/pre-receive-environments/{pre_receive_environment_id}/downloads';
    /**The unique identifier of the pre-receive environment.**/
    private int $preReceiveEnvironmentId;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb\Downloads $hydrator;
    private readonly \React\Http\Browser $browser;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb\Downloads $hydrator, \React\Http\Browser $browser, int $preReceiveEnvironmentId)
    {
        $this->preReceiveEnvironmentId = $preReceiveEnvironmentId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
        $this->browser = $browser;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{pre_receive_environment_id}'), array($this->preReceiveEnvironmentId), self::PATH));
    }
    /**
     * @return Schema\PreReceiveEnvironmentDownloadStatus
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\PreReceiveEnvironmentDownloadStatus
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 202:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\PreReceiveEnvironmentDownloadStatus::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\PreReceiveEnvironmentDownloadStatus::class, $body);
                }
                break;
            /**Client Errors**/
            case 422:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming\Response\Applicationjson\H422::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming\Response\Applicationjson\H422(422, $this->hydrator->hydrateObject(Schema\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming\Response\Applicationjson\H422::class, $body));
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
