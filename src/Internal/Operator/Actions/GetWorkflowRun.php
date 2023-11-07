<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Operator\Actions;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema\WorkflowRun;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetWorkflowRun
{
    public const OPERATION_ID    = 'actions/get-workflow-run';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/actions/runs/{run_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId $hydrator)
    {
    }

    public function call(string $owner, string $repo, int $runId, bool $excludePullRequests = false): WorkflowRun
    {
        $operation = new \ApiClients\Client\GitHubAE\Internal\Operation\Actions\GetWorkflowRun($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $runId, $excludePullRequests);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): WorkflowRun {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
