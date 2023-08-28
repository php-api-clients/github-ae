<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Operator\Projects;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class DeleteColumn
{
    public const OPERATION_ID    = 'projects/delete-column';
    public const OPERATION_MATCH = 'DELETE /projects/columns/{column_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Projects\Columns\ColumnId $hydrator)
    {
    }

    /** @return array{code:int} */
    public function call(int $columnId): array
    {
        $operation = new \ApiClients\Client\GitHubAE\Internal\Operation\Projects\DeleteColumn($this->responseSchemaValidator, $this->hydrator, $columnId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
