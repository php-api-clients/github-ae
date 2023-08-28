<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Operator\Teams;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListMembersLegacyListing
{
    public const OPERATION_ID    = 'teams/list-members-legacy';
    public const OPERATION_MATCH = 'LIST /teams/{team_id}/members';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Teams\TeamId\Members $hydrator)
    {
    }

    /** @return iterable<Schema\SimpleUser> */
    public function call(int $teamId, string $role = 'all', int $perPage = 30, int $page = 1): iterable
    {
        $operation = new \ApiClients\Client\GitHubAE\Internal\Operation\Teams\ListMembersLegacyListing($this->responseSchemaValidator, $this->hydrator, $teamId, $role, $perPage, $page);
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
