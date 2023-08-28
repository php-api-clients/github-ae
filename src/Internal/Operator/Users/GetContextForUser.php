<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Operator\Users;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\Schema\Hovercard;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetContextForUser
{
    public const OPERATION_ID    = 'users/get-context-for-user';
    public const OPERATION_MATCH = 'GET /users/{username}/hovercard';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Users\Username\Hovercard $hydrator)
    {
    }

    /** @return Schema\Hovercard */
    public function call(string $username, string $subjectType, string $subjectId): Hovercard|array
    {
        $operation = new \ApiClients\Client\GitHubAE\Internal\Operation\Users\GetContextForUser($this->responseSchemaValidator, $this->hydrator, $username, $subjectType, $subjectId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Hovercard|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
