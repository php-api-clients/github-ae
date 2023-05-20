<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Apps;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class UnsuspendInstallation
{
    public const OPERATION_ID    = 'apps/unsuspend-installation';
    public const OPERATION_MATCH = 'DELETE /app/installations/{installation_id}/suspended';
    private const METHOD         = 'DELETE';
    private const PATH           = '/app/installations/{installation_id}/suspended';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\App\Installations\InstallationId\Suspended $hydrator)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(int $installationId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Apps\UnsuspendInstallation($this->responseSchemaValidator, $this->hydrator, $installationId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
