<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Projects;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListForOrgListing
{
    public const OPERATION_ID    = 'projects/list-for-org';
    public const OPERATION_MATCH = 'LIST /orgs/{org}/projects';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/projects';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Projects $hydrator)
    {
    }

    /** @return Observable<Schema\Project> */
    public function call(string $org, string $state = 'open', int $perPage = 30, int $page = 1): iterable
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Projects\ListForOrgListing($this->responseSchemaValidator, $this->hydrator, $org, $state, $perPage, $page);
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
