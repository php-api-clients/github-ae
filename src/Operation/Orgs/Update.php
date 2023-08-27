<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operation\Orgs;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;
use Throwable;

use function explode;
use function json_decode;
use function json_encode;
use function str_replace;

final class Update
{
    public const OPERATION_ID    = 'orgs/update';
    public const OPERATION_MATCH = 'PATCH /orgs/{org}';
    private const METHOD         = 'PATCH';
    private const PATH           = '/orgs/{org}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;

    public function __construct(private readonly SchemaValidator $requestSchemaValidator, private readonly SchemaValidator $responseSchemaValidator, private readonly Hydrator\Operation\Orgs\Org $hydrator, string $org)
    {
        $this->org = $org;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\Orgs\Update\Request\ApplicationJson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request(self::METHOD, str_replace(['{org}'], [$this->org], self::PATH), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): Schema\OrganizationFull
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\OrganizationFull::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\OrganizationFull::class, $body);
                    /**
                     * Validation failed
                     **/

                    case 422:
                        $error = new RuntimeException();
                        try {
                            $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ValidationError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                            return $this->hydrators->hydrateObject(Schema\ValidationError::class, $body);
                        } catch (Throwable) {
                            goto items_application_json_four_hundred_twenty_two_aaaaa;
                        }

                        items_application_json_four_hundred_twenty_two_aaaaa:
                        try {
                            $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ValidationErrorSimple::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                            return $this->hydrators->hydrateObject(Schema\ValidationErrorSimple::class, $body);
                        } catch (Throwable) {
                            goto items_application_json_four_hundred_twenty_two_aaaab;
                        }

                        items_application_json_four_hundred_twenty_two_aaaab:
                        throw $error;
                    /**
                     * Conflict
                     **/
                    case 409:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(409, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
