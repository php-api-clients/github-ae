<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\EnterpriseAdmin;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class DeleteSelfHostedRunnerFromEnterprise
{
    public const OPERATION_ID    = 'enterprise-admin/delete-self-hosted-runner-from-enterprise';
    public const OPERATION_MATCH = 'DELETE /enterprises/{enterprise}/actions/runners/{runner_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/enterprises/{enterprise}/actions/runners/{runner_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return PromiseInterface<array> **/
    public function call(string $enterprise, int $runnerId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerFromEnterprise($enterprise, $runnerId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
