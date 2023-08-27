<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Apps;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class RevokeInstallationAccessToken
{
    public const OPERATION_ID    = 'apps/revoke-installation-access-token';
    public const OPERATION_MATCH = 'DELETE /installation/token';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return array{code:int} */
    public function call(): array
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Apps\RevokeInstallationAccessToken();
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
