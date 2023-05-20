<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Repos;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListForks
{
    public const OPERATION_ID    = 'repos/list-forks';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/forks';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/forks';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Forks $hydrator)
    {
    }

    /**
     * @return PromiseInterface<mixed>
     **/
    public function call(string $owner, string $repo, string $sort = 'newest', int $perPage = 30, int $page = 1): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Repos\ListForks($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $sort, $perPage, $page);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): mixed {
            return $operation->createResponse($response);
        });
    }
}
