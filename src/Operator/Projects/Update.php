<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Projects;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\Schema\Project;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class Update
{
    public const OPERATION_ID    = 'projects/update';
    public const OPERATION_MATCH = 'PATCH /projects/{project_id}';
    private const METHOD         = 'PATCH';
    private const PATH           = '/projects/{project_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Projects\ProjectId $hydrator)
    {
    }

    /** @return (Schema\Project | array{code: int}) */
    public function call(int $projectId, array $params): Project|array
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Projects\Update($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $projectId);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Project|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
