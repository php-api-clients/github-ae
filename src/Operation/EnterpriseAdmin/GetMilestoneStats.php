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

final class GetMilestoneStats
{
    public const OPERATION_ID    = 'enterprise-admin/get-milestone-stats';
    public const OPERATION_MATCH = 'GET /enterprise/stats/milestones';
    private const METHOD         = 'GET';
    private const PATH           = '/enterprise/stats/milestones';
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Enterprise\Stats\Milestones $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Enterprise\Stats\Milestones $hydrator)
    {
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace([], [], self::PATH));
    }

    public function createResponse(ResponseInterface $response): Schema\EnterpriseMilestoneOverview
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\EnterpriseMilestoneOverview::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject(Schema\EnterpriseMilestoneOverview::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
