<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Issues;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema\BasicError;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListForRepo
{
    public const OPERATION_ID    = 'issues/list-for-repo';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/issues';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/issues';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Issues $hydrator)
    {
    }

    /** @return PromiseInterface<BasicError> **/
    public function call(string $owner, string $repo, string $milestone, string $assignee, string $creator, string $mentioned, string $labels, string $since, string $state = 'open', string $sort = 'created', string $direction = 'desc', int $perPage = 30, int $page = 1): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Issues\ListForRepo($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $milestone, $assignee, $creator, $mentioned, $labels, $since, $state, $sort, $direction, $perPage, $page);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): BasicError {
            return $operation->createResponse($response);
        });
    }
}
