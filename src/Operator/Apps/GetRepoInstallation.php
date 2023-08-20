<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Apps;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema\BasicError;
use ApiClients\Client\GitHubAE\Schema\Installation;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetRepoInstallation
{
    public const OPERATION_ID    = 'apps/get-repo-installation';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/installation';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/installation';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Installation $hydrator)
    {
    }

    /** @return */
    public function call(string $owner, string $repo): Installation|BasicError|array
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Apps\GetRepoInstallation($this->responseSchemaValidator, $this->hydrator, $owner, $repo);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Installation|BasicError|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
