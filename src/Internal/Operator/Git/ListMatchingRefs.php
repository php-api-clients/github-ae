<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Operator\Git;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListMatchingRefs
{
    public const OPERATION_ID    = 'git/list-matching-refs';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/git/matching-refs/{ref}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\Git\MatchingRefs\Ref $hydrator)
    {
    }

    /** @return Observable<Schema\GitRef> */
    public function call(string $owner, string $repo, string $ref): iterable
    {
        $operation = new \ApiClients\Client\GitHubAE\Internal\Operation\Git\ListMatchingRefs($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $ref);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
