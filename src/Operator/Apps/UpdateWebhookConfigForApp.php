<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Apps;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema\WebhookConfig;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class UpdateWebhookConfigForApp
{
    public const OPERATION_ID    = 'apps/update-webhook-config-for-app';
    public const OPERATION_MATCH = 'PATCH /app/hook/config';
    private const METHOD         = 'PATCH';
    private const PATH           = '/app/hook/config';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\App\Hook\Config $hydrator)
    {
    }

    /** @return PromiseInterface<WebhookConfig> **/
    public function call(array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Apps\UpdateWebhookConfigForApp($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): WebhookConfig {
            return $operation->createResponse($response);
        });
    }
}
