<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Operator\Orgs;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class PingWebhook
{
    public const OPERATION_ID    = 'orgs/ping-webhook';
    public const OPERATION_MATCH = 'POST /orgs/{org}/hooks/{hook_id}/pings';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId\Pings $hydrator)
    {
    }

    /** @return */
    public function call(string $org, int $hookId): WithoutBody
    {
        $operation = new \ApiClients\Client\GitHubAE\Internal\Operation\Orgs\PingWebhook($this->responseSchemaValidator, $this->hydrator, $org, $hookId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): WithoutBody {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
