<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Actions;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema\AuthenticationToken;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class CreateRemoveTokenForRepo
{
    public const OPERATION_ID    = 'actions/create-remove-token-for-repo';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/actions/runners/remove-token';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RemoveToken $hydrator)
    {
    }

    /** @return */
    public function call(string $owner, string $repo): AuthenticationToken|array
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Actions\CreateRemoveTokenForRepo($this->responseSchemaValidator, $this->hydrator, $owner, $repo);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): AuthenticationToken|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
