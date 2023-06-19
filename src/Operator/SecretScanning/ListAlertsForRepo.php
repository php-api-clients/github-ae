<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\SecretScanning;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListAlertsForRepo
{
    public const OPERATION_ID    = 'secret-scanning/list-alerts-for-repo';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/secret-scanning/alerts';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/secret-scanning/alerts';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts $hydrator)
    {
    }

    /** @return PromiseInterface<array> **/
    public function call(string $owner, string $repo, string $state, string $secretType, string $resolution, int $page = 1, int $perPage = 30): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\SecretScanning\ListAlertsForRepo($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $state, $secretType, $resolution, $page, $perPage);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
