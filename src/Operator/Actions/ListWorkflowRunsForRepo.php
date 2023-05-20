<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Actions;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListWorkflowRunsForRepo\Response\ApplicationJson\Ok;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListWorkflowRunsForRepo
{
    public const OPERATION_ID    = 'actions/list-workflow-runs-for-repo';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/actions/runs';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/actions/runs';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Actions\Runs $hydrator)
    {
    }

    /**
     * @return PromiseInterface<Ok>
     **/
    public function call(string $owner, string $repo, string $actor, string $branch, string $event, string $status, string $created, int $checkSuiteId, string $headSha, int $perPage = 30, int $page = 1, bool $excludePullRequests = false): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Actions\ListWorkflowRunsForRepo($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $actor, $branch, $event, $status, $created, $checkSuiteId, $headSha, $perPage, $page, $excludePullRequests);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Ok {
            return $operation->createResponse($response);
        });
    }
}
