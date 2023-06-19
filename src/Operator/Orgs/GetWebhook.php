<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Orgs;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema\OrgHook;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetWebhook
{
    public const OPERATION_ID    = 'orgs/get-webhook';
    public const OPERATION_MATCH = 'GET /orgs/{org}/hooks/{hook_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/hooks/{hook_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Hooks\HookId $hydrator)
    {
    }

    /** @return PromiseInterface<OrgHook> **/
    public function call(string $org, int $hookId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Orgs\GetWebhook($this->responseSchemaValidator, $this->hydrator, $org, $hookId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): OrgHook {
            return $operation->createResponse($response);
        });
    }
}
