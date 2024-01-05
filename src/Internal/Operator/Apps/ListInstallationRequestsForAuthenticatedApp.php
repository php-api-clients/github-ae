<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Operator\Apps;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListInstallationRequestsForAuthenticatedApp
{
    public const OPERATION_ID    = 'apps/list-installation-requests-for-authenticated-app';
    public const OPERATION_MATCH = 'GET /app/installation-requests';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\App\InstallationRequests $hydrator)
    {
    }

    /** @return iterable<int,Schema\IntegrationInstallationRequest>|WithoutBody */
    public function call(int $perPage = 30, int $page = 1): iterable|WithoutBody
    {
        $operation = new \ApiClients\Client\GitHubAE\Internal\Operation\Apps\ListInstallationRequestsForAuthenticatedApp($this->responseSchemaValidator, $this->hydrator, $perPage, $page);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable|WithoutBody {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
