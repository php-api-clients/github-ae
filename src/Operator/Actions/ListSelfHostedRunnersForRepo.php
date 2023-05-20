<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Actions;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListSelfHostedRunnersForOrg\Response\ApplicationJson\Ok;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListSelfHostedRunnersForRepo
{
    public const OPERATION_ID    = 'actions/list-self-hosted-runners-for-repo';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/actions/runners';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/actions/runners';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Actions\Runners $hydrator)
    {
    }

    /**
     * @return PromiseInterface<Ok>
     **/
    public function call(string $owner, string $repo, int $perPage = 30, int $page = 1): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Actions\ListSelfHostedRunnersForRepo($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $perPage, $page);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Ok {
            return $operation->createResponse($response);
        });
    }
}
