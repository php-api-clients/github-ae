<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Operator\Users;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\Schema\Key;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class CreatePublicSshKeyForAuthenticatedUser
{
    public const OPERATION_ID    = 'users/create-public-ssh-key-for-authenticated-user';
    public const OPERATION_MATCH = 'POST /user/keys';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\User\Keys $hydrator)
    {
    }

    /** @return Schema\Key|array{code:int} */
    public function call(array $params): Key|array
    {
        $operation = new \ApiClients\Client\GitHubAE\Internal\Operation\Users\CreatePublicSshKeyForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Key|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
