<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operation\Repos;

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

final class GetWebhookConfigForRepo
{
    public const OPERATION_ID    = 'repos/get-webhook-config-for-repo';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/hooks/{hook_id}/config';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/hooks/{hook_id}/config';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository. The name is not case sensitive. **/
    private string $repo;
    /**The unique identifier of the hook. **/
    private int $hookId;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Config $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Config $hydrator, string $owner, string $repo, int $hookId)
    {
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->hookId                  = $hookId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{hook_id}'], [$this->owner, $this->repo, $this->hookId], self::PATH));
    }

    public function createResponse(ResponseInterface $response): Schema\WebhookConfig
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\WebhookConfig::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\WebhookConfig::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
