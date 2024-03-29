<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function json_encode;
use function str_replace;

final class SetAnnouncement
{
    public const OPERATION_ID    = 'enterprise-admin/set-announcement';
    public const OPERATION_MATCH = 'PATCH /enterprise/announcement';

    public function __construct(private readonly SchemaValidator $requestSchemaValidator, private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Enterprise\Announcement $hydrator)
    {
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\Announcement::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request('PATCH', str_replace([], [], '/enterprise/announcement'), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): Schema\Announcement
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Announcement::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\Announcement::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
