<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Operator\Projects;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\Schema\ProjectColumn;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class CreateColumn
{
    public const OPERATION_ID    = 'projects/create-column';
    public const OPERATION_MATCH = 'POST /projects/{project_id}/columns';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Projects\ProjectId\Columns $hydrator)
    {
    }

    /** @return Schema\ProjectColumn|array{code:int} */
    public function call(int $projectId, array $params): ProjectColumn|array
    {
        $operation = new \ApiClients\Client\GitHubAE\Internal\Operation\Projects\CreateColumn($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $projectId);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ProjectColumn|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
