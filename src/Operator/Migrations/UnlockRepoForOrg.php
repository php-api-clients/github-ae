<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Migrations;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class UnlockRepoForOrg
{
    public const OPERATION_ID    = 'migrations/unlock-repo-for-org';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/migrations/{migration_id}/repos/{repo_name}/lock';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Migrations\MigrationId\Repos\RepoName\Lock $hydrator)
    {
    }

    /** @return array{code:int} */
    public function call(string $org, int $migrationId, string $repoName): array
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Migrations\UnlockRepoForOrg($this->responseSchemaValidator, $this->hydrator, $org, $migrationId, $repoName);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
