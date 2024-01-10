<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Operator\Reactions;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListForCommitCommentListing
{
    public const OPERATION_ID    = 'reactions/list-for-commit-comment';
    public const OPERATION_MATCH = 'LIST /repos/{owner}/{repo}/comments/{comment_id}/reactions';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId\Reactions $hydrator)
    {
    }

    /** @return Observable<Schema\Reaction> */
    public function call(string $owner, string $repo, int $commentId, string $content, int $perPage = 30, int $page = 1): iterable
    {
        $operation = new \ApiClients\Client\GitHubAE\Internal\Operation\Reactions\ListForCommitCommentListing($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $commentId, $content, $perPage, $page);
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
