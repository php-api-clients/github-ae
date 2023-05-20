<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Pulls;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class List_
{
    public const OPERATION_ID    = 'pulls/list';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/pulls';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/pulls';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Pulls $hydrator)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(string $owner, string $repo, string $head, string $base, string $direction, string $state = 'open', string $sort = 'created', int $perPage = 30, int $page = 1): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Pulls\List_($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $head, $base, $direction, $state, $sort, $perPage, $page);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
