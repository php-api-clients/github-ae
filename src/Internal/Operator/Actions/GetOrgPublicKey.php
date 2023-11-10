<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Operator\Actions;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema\ActionsPublicKey;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetOrgPublicKey
{
    public const OPERATION_ID    = 'actions/get-org-public-key';
    public const OPERATION_MATCH = 'GET /orgs/{org}/actions/secrets/public-key';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\Actions\Secrets\PublicKey $hydrator)
    {
    }

    /** @return */
    public function call(string $org): ActionsPublicKey
    {
        $operation = new \ApiClients\Client\GitHubAE\Internal\Operation\Actions\GetOrgPublicKey($this->responseSchemaValidator, $this->hydrator, $org);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ActionsPublicKey {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
