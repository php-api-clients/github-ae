<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Operator\Activity;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\Schema\ThreadSubscription;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetThreadSubscriptionForAuthenticatedUser
{
    public const OPERATION_ID    = 'activity/get-thread-subscription-for-authenticated-user';
    public const OPERATION_MATCH = 'GET /notifications/threads/{thread_id}/subscription';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Notifications\Threads\ThreadId\Subscription $hydrator)
    {
    }

    /** @return Schema\ThreadSubscription|array{code:int} */
    public function call(int $threadId): ThreadSubscription|array
    {
        $operation = new \ApiClients\Client\GitHubAE\Internal\Operation\Activity\GetThreadSubscriptionForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator, $threadId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ThreadSubscription|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
