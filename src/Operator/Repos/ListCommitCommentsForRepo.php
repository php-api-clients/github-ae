<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Repos;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListCommitCommentsForRepo
{
    public const OPERATION_ID    = 'repos/list-commit-comments-for-repo';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/comments';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/comments';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /**
     * @return PromiseInterface<ResponseInterface>
     **/
    public function call(string $owner, string $repo, int $perPage = 30, int $page = 1): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Repos\ListCommitCommentsForRepo($owner, $repo, $perPage, $page);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ResponseInterface {
            return $operation->createResponse($response);
        });
    }
}
