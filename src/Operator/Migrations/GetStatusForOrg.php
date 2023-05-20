<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Migrations;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema\Migration;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetStatusForOrg
{
    public const OPERATION_ID    = 'migrations/get-status-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/migrations/{migration_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/migrations/{migration_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Migrations\MigrationId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<Migration>
     **/
    public function call(string $org, int $migrationId, array $exclude): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Migrations\GetStatusForOrg($this->responseSchemaValidator, $this->hydrator, $org, $migrationId, $exclude);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Migration {
            return $operation->createResponse($response);
        });
    }
}
