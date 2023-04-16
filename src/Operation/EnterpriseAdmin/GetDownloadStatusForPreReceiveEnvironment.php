<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubAE\Hydrator;
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

final class GetDownloadStatusForPreReceiveEnvironment
{
    public const OPERATION_ID    = 'enterprise-admin/get-download-status-for-pre-receive-environment';
    public const OPERATION_MATCH = 'GET /admin/pre-receive-environments/{pre_receive_environment_id}/downloads/latest';
    private const METHOD         = 'GET';
    private const PATH           = '/admin/pre-receive-environments/{pre_receive_environment_id}/downloads/latest';
    /**The unique identifier of the pre-receive environment.**/
    private int $preReceiveEnvironmentId;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb\Downloads\Latest $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb\Downloads\Latest $hydrator, int $preReceiveEnvironmentId)
    {
        $this->preReceiveEnvironmentId = $preReceiveEnvironmentId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{pre_receive_environment_id}'], [$this->preReceiveEnvironmentId], self::PATH));
    }

    public function createResponse(ResponseInterface $response): Schema\PreReceiveEnvironmentDownloadStatus
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\PreReceiveEnvironmentDownloadStatus::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject(Schema\PreReceiveEnvironmentDownloadStatus::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
