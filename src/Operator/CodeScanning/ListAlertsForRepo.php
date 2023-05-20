<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\CodeScanning;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListAlertsForRepo
{
    public const OPERATION_ID    = 'code-scanning/list-alerts-for-repo';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/code-scanning/alerts';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/code-scanning/alerts';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Alerts $hydrator)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(string $owner, string $repo, string $toolName, string|null $toolGuid, string $ref, string $state, int $page = 1, int $perPage = 30, string $direction = 'desc', string $sort = 'created'): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\CodeScanning\ListAlertsForRepo($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $toolName, $toolGuid, $ref, $state, $page, $perPage, $direction, $sort);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
