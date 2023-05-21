<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Migrations;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetArchiveForAuthenticatedUser
{
    public const OPERATION_ID    = 'migrations/get-archive-for-authenticated-user';
    public const OPERATION_MATCH = 'GET /user/migrations/{migration_id}/archive';
    private const METHOD         = 'GET';
    private const PATH           = '/user/migrations/{migration_id}/archive';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\User\Migrations\MigrationId\Archive $hydrator)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(int $migrationId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Migrations\GetArchiveForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator, $migrationId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
