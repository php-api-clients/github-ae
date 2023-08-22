<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Users;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListPublicKeysForUserListing
{
    public const OPERATION_ID    = 'users/list-public-keys-for-user';
    public const OPERATION_MATCH = 'LIST /users/{username}/keys';
    private const METHOD         = 'GET';
    private const PATH           = '/users/{username}/keys';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Users\Username\Keys $hydrator)
    {
    }

    /** @return iterable<Schema\KeySimple> */
    public function call(string $username, int $perPage = 30, int $page = 1): iterable
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Users\ListPublicKeysForUserListing($this->responseSchemaValidator, $this->hydrator, $username, $perPage, $page);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
