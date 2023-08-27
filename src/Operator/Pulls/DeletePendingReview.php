<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Pulls;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema\PullRequestReview;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class DeletePendingReview
{
    public const OPERATION_ID    = 'pulls/delete-pending-review';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId $hydrator)
    {
    }

    /** @return */
    public function call(string $owner, string $repo, int $pullNumber, int $reviewId): PullRequestReview|array
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Pulls\DeletePendingReview($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $pullNumber, $reviewId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): PullRequestReview|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
