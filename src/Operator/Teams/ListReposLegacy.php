<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Teams;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListReposLegacy
{
    public const OPERATION_ID    = 'teams/list-repos-legacy';
    public const OPERATION_MATCH = 'GET /teams/{team_id}/repos';
    private const METHOD         = 'GET';
    private const PATH           = '/teams/{team_id}/repos';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Teams\TeamId\Repos $hydrator)
    {
    }

    /** @return iterable<Schema\MinimalRepository> */
    public function call(int $teamId, int $perPage = 30, int $page = 1): iterable
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Teams\ListReposLegacy($this->responseSchemaValidator, $this->hydrator, $teamId, $perPage, $page);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
