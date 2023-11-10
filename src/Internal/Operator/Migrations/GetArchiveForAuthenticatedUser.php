<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Operator\Migrations;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetArchiveForAuthenticatedUser
{
    public const OPERATION_ID    = 'migrations/get-archive-for-authenticated-user';
    public const OPERATION_MATCH = 'GET /user/migrations/{migration_id}/archive';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\User\Migrations\MigrationId\Archive $hydrator)
    {
    }

    /** @return */
    public function call(int $migrationId): WithoutBody
    {
        $operation = new \ApiClients\Client\GitHubAE\Internal\Operation\Migrations\GetArchiveForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator, $migrationId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): WithoutBody {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
