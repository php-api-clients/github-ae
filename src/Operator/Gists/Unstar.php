<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Gists;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class Unstar
{
    public const OPERATION_ID    = 'gists/unstar';
    public const OPERATION_MATCH = 'DELETE /gists/{gist_id}/star';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Gists\GistId\Star $hydrator)
    {
    }

    /** @return array{code:int} */
    public function call(string $gistId): array
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Gists\Unstar($this->responseSchemaValidator, $this->hydrator, $gistId);
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
