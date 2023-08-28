<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Operator\Reactions;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\Schema\Reaction;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class CreateForIssueComment
{
    public const OPERATION_ID    = 'reactions/create-for-issue-comment';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/issues/comments/{comment_id}/reactions';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Comments\CommentId\Reactions $hydrator)
    {
    }

    /** @return Schema\Reaction */
    public function call(string $owner, string $repo, int $commentId, array $params): Reaction|array
    {
        $operation = new \ApiClients\Client\GitHubAE\Internal\Operation\Reactions\CreateForIssueComment($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $commentId);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Reaction|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
