<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Apps;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListInstallationRequestsForAuthenticatedApp
{
    public const OPERATION_ID    = 'apps/list-installation-requests-for-authenticated-app';
    public const OPERATION_MATCH = 'GET /app/installation-requests';
    private const METHOD         = 'GET';
    private const PATH           = '/app/installation-requests';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\App\InstallationRequests $hydrator)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(int $perPage = 30, int $page = 1): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Apps\ListInstallationRequestsForAuthenticatedApp($this->responseSchemaValidator, $this->hydrator, $perPage, $page);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
