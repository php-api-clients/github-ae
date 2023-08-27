<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Activity;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\Schema\ThreadSubscription;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class SetThreadSubscription
{
    public const OPERATION_ID    = 'activity/set-thread-subscription';
    public const OPERATION_MATCH = 'PUT /notifications/threads/{thread_id}/subscription';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Notifications\Threads\ThreadId\Subscription $hydrator)
    {
    }

    /** @return Schema\ThreadSubscription|array{code:int} */
    public function call(int $threadId, array $params): ThreadSubscription|array
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Activity\SetThreadSubscription($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $threadId);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ThreadSubscription|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
