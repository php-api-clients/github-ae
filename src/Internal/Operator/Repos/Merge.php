<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Operator\Repos;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\Schema\Commit;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class Merge
{
    public const OPERATION_ID    = 'repos/merge';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/merges';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\Merges $hydrator)
    {
    }

    /** @return Schema\Commit|array{code:int} */
    public function call(string $owner, string $repo, array $params): Commit|array
    {
        $operation = new \ApiClients\Client\GitHubAE\Internal\Operation\Repos\Merge($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Commit|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
