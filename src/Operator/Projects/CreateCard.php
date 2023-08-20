<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Projects;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\Schema\ProjectCard;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class CreateCard
{
    public const OPERATION_ID    = 'projects/create-card';
    public const OPERATION_MATCH = 'POST /projects/columns/{column_id}/cards';
    private const METHOD         = 'POST';
    private const PATH           = '/projects/columns/{column_id}/cards';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Projects\Columns\ColumnId\Cards $hydrator)
    {
    }

    /** @return (Schema\ProjectCard | array{code: int}) */
    public function call(int $columnId, array $params): ProjectCard|array
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Projects\CreateCard($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $columnId);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ProjectCard|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
