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
use function str_replace;

final class GetSelfHostedRunnerForEnterprise
{
    public const OPERATION_ID    = 'enterprise-admin/get-self-hosted-runner-for-enterprise';
    public const OPERATION_MATCH = 'GET /enterprises/{enterprise}/actions/runners/{runner_id}';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id. **/
    private string $enterprise;
    /**Unique identifier of the self-hosted runner. **/
    private int $runnerId;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Enterprises\Enterprise\Actions\Runners\RunnerId $hydrator, string $enterprise, int $runnerId)
    {
        $this->enterprise = $enterprise;
        $this->runnerId   = $runnerId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{enterprise}', '{runner_id}'], [$this->enterprise, $this->runnerId], '/enterprises/{enterprise}/actions/runners/{runner_id}'));
    }

    public function createResponse(ResponseInterface $response): Schema\Runner
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Runner::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\Runner::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
