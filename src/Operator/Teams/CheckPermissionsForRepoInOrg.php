<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Teams;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema\TeamRepository;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class CheckPermissionsForRepoInOrg
{
    public const OPERATION_ID    = 'teams/check-permissions-for-repo-in-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Repos\Owner\Repo $hydrator)
    {
    }

    /**
     * @return PromiseInterface<(TeamRepository|array)>
     **/
    public function call(string $org, string $teamSlug, string $owner, string $repo): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Teams\CheckPermissionsForRepoInOrg($this->responseSchemaValidator, $this->hydrator, $org, $teamSlug, $owner, $repo);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): TeamRepository|array {
            return $operation->createResponse($response);
        });
    }
}
