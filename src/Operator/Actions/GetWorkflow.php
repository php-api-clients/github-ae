<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Actions;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema\Workflow;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetWorkflow
{
    public const OPERATION_ID    = 'actions/get-workflow';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/actions/workflows/{workflow_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/actions/workflows/{workflow_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId $hydrator)
    {
    }

    /** @return */
    public function call(string $owner, string $repo, $workflowId): Workflow|array
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Actions\GetWorkflow($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $workflowId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Workflow|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
