<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Operator\Repos;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\Schema\ContentDirectory;
use ApiClients\Client\GitHubAE\Schema\ContentFile;
use ApiClients\Client\GitHubAE\Schema\ContentSubmodule;
use ApiClients\Client\GitHubAE\Schema\ContentSymlink;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetContent
{
    public const OPERATION_ID    = 'repos/get-content';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/contents/{path}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\Contents\Path $hydrator)
    {
    }

    /** @return Schema\ContentDirectory|Schema\ContentFile|Schema\ContentSymlink|Schema\ContentSubmodule|array{code:int} */
    public function call(string $owner, string $repo, string $path, string $ref): ContentDirectory|ContentFile|ContentSymlink|ContentSubmodule|array
    {
        $operation = new \ApiClients\Client\GitHubAE\Internal\Operation\Repos\GetContent($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $path, $ref);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ContentDirectory|ContentFile|ContentSymlink|ContentSubmodule|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
