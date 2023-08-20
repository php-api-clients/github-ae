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

final readonly class DeleteArchiveForOrg
{
    public const OPERATION_ID    = 'migrations/delete-archive-for-org';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/migrations/{migration_id}/archive';
    private const METHOD         = 'DELETE';
    private const PATH           = '/orgs/{org}/migrations/{migration_id}/archive';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Migrations\MigrationId\Archive $hydrator)
    {
    }

    /** @return array{code: int} */
    public function call(string $org, int $migrationId): array
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Migrations\DeleteArchiveForOrg($this->responseSchemaValidator, $this->hydrator, $org, $migrationId);
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
