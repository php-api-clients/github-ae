<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Orgs;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListMembershipsForAuthenticatedUser
{
    public const OPERATION_ID    = 'orgs/list-memberships-for-authenticated-user';
    public const OPERATION_MATCH = 'GET /user/memberships/orgs';
    private const METHOD         = 'GET';
    private const PATH           = '/user/memberships/orgs';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\User\Memberships\Orgs $hydrator)
    {
    }

    /** @return PromiseInterface<array> **/
    public function call(string $state, int $perPage = 30, int $page = 1): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Orgs\ListMembershipsForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator, $state, $perPage, $page);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
