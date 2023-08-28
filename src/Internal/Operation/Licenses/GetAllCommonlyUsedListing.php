<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Operation\Licenses;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;
use Rx\Observable;
use Rx\Scheduler\ImmediateScheduler;
use Throwable;

use function explode;
use function json_decode;
use function str_replace;

final class GetAllCommonlyUsedListing
{
    public const OPERATION_ID    = 'licenses/get-all-commonly-used';
    public const OPERATION_MATCH = 'LIST /licenses';
    private const METHOD         = 'GET';
    private const PATH           = '/licenses';
    /**The number of results per page (max 100). **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Licenses $hydrator, private bool $featured, int $perPage = 30, int $page = 1)
    {
        $this->perPage = $perPage;
        $this->page    = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{featured}', '{per_page}', '{page}'], [$this->featured, $this->perPage, $this->page], self::PATH . '?featured={featured}&per_page={per_page}&page={page}'));
    }

    /** @return Observable<Schema\LicenseSimple>|array{code: int} */
    public function createResponse(ResponseInterface $response): Observable|array
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\LicenseSimple {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\LicenseSimple::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrators->hydrateObject(Schema\LicenseSimple::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaaa;
                            }

                            items_application_json_two_hundred_aaaaa:
                            throw $error;
                        });
                }

                break;
        }

        switch ($code) {
            /**
             * Not modified
             **/
            case 304:
                return ['code' => 304];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
