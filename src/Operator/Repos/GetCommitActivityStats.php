<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Repos;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\Schema\Operations\Repos\GetCommitActivityStats\Response\ApplicationJson\Accepted\Application\Json;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetCommitActivityStats
{
    public const OPERATION_ID    = 'repos/get-commit-activity-stats';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/stats/commit_activity';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/stats/commit_activity';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Stats\CommitActivity $hydrator)
    {
    }

    /** @return (Observable<Schema\CommitActivity> | Schema\Operations\Repos\GetCommitActivityStats\Response\ApplicationJson\Accepted\Application\Json | array{code: int}) */
    public function call(string $owner, string $repo): iterable|Json
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Repos\GetCommitActivityStats($this->responseSchemaValidator, $this->hydrator, $owner, $repo);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable|Json|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
