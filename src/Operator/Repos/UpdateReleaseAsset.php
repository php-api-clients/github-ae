<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Repos;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema\ReleaseAsset;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class UpdateReleaseAsset
{
    public const OPERATION_ID    = 'repos/update-release-asset';
    public const OPERATION_MATCH = 'PATCH /repos/{owner}/{repo}/releases/assets/{asset_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Releases\Assets\AssetId $hydrator)
    {
    }

    /** @return */
    public function call(string $owner, string $repo, int $assetId, array $params): ReleaseAsset|array
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Repos\UpdateReleaseAsset($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $assetId);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ReleaseAsset|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
