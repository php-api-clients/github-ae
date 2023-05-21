<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function str_replace;

final class StartPreReceiveEnvironmentDownloadStreaming
{
    public const OPERATION_ID    = 'enterprise-admin/start-pre-receive-environment-download';
    public const OPERATION_MATCH = 'STREAM /admin/pre-receive-environments/{pre_receive_environment_id}/downloads';
    private const METHOD         = 'POST';
    private const PATH           = '/admin/pre-receive-environments/{pre_receive_environment_id}/downloads';
    /**The unique identifier of the pre-receive environment. **/
    private int $preReceiveEnvironmentId;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Admin\PreReceiveEnvironments\PreReceiveEnvironmentId\Downloads $hydrator;
    private readonly Browser $browser;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Admin\PreReceiveEnvironments\PreReceiveEnvironmentId\Downloads $hydrator, Browser $browser, int $preReceiveEnvironmentId)
    {
        $this->preReceiveEnvironmentId = $preReceiveEnvironmentId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
        $this->browser                 = $browser;
    }

    public function createRequest(): RequestInterface
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
                    case 202:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\PreReceiveEnvironmentDownloadStatus::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\PreReceiveEnvironmentDownloadStatus::class, $body);
                    /**
                     * Client Errors
                     **/

                    case 422:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operations\EnterpriseAdmin\DeletePreReceiveEnvironment\Response\ApplicationJson\UnprocessableEntity::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\Operations\EnterpriseAdmin\DeletePreReceiveEnvironment\Response\ApplicationJson\UnprocessableEntity(422, $this->hydrator->hydrateObject(Schema\Operations\EnterpriseAdmin\DeletePreReceiveEnvironment\Response\ApplicationJson\UnprocessableEntity::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
