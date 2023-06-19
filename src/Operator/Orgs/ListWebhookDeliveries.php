<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Orgs;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListWebhookDeliveries
{
    public const OPERATION_ID    = 'orgs/list-webhook-deliveries';
    public const OPERATION_MATCH = 'GET /orgs/{org}/hooks/{hook_id}/deliveries';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/hooks/{hook_id}/deliveries';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Hooks\HookId\Deliveries $hydrator)
    {
    }

    /** @return PromiseInterface<mixed> **/
    public function call(string $org, int $hookId, string $cursor, bool $redelivery, int $perPage = 30): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Orgs\ListWebhookDeliveries($this->responseSchemaValidator, $this->hydrator, $org, $hookId, $cursor, $redelivery, $perPage);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): mixed {
            return $operation->createResponse($response);
        });
    }
}
