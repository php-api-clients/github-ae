<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Orgs;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema\WebhookConfig;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class UpdateWebhookConfigForOrg
{
    public const OPERATION_ID    = 'orgs/update-webhook-config-for-org';
    public const OPERATION_MATCH = 'PATCH /orgs/{org}/hooks/{hook_id}/config';
    private const METHOD         = 'PATCH';
    private const PATH           = '/orgs/{org}/hooks/{hook_id}/config';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Hooks\HookId\Config $hydrator)
    {
    }

    /**
     * @return PromiseInterface<WebhookConfig>
     **/
    public function call(string $org, int $hookId, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Orgs\UpdateWebhookConfigForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $hookId);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): WebhookConfig {
            return $operation->createResponse($response);
        });
    }
}
