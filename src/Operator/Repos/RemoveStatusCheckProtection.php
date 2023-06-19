<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Repos;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class RemoveStatusCheckProtection
{
    public const OPERATION_ID    = 'repos/remove-status-check-protection';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks';
    private const METHOD         = 'DELETE';
    private const PATH           = '/repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return PromiseInterface<array> **/
    public function call(string $owner, string $repo, string $branch): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Repos\RemoveStatusCheckProtection($owner, $repo, $branch);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
