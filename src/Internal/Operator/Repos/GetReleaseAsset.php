<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Operator\Repos;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema\ReleaseAsset;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetReleaseAsset
{
    public const OPERATION_ID    = 'repos/get-release-asset';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/releases/assets/{asset_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\Assets\AssetId $hydrator)
    {
    }

    public function call(string $owner, string $repo, int $assetId): ReleaseAsset|WithoutBody
    {
        $operation = new \ApiClients\Client\GitHubAE\Internal\Operation\Repos\GetReleaseAsset($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $assetId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ReleaseAsset|WithoutBody {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
