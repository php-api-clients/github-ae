<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Operator\SecretScanning;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\Schema\SecretScanningAlert;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class UpdateAlert
{
    public const OPERATION_ID    = 'secret-scanning/update-alert';
    public const OPERATION_MATCH = 'PATCH /repos/{owner}/{repo}/secret-scanning/alerts/{alert_number}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts\AlertNumber $hydrator)
    {
    }

    /** @return Schema\SecretScanningAlert|array{code:int} */
    public function call(string $owner, string $repo, int $alertNumber, array $params): SecretScanningAlert|array
    {
        $operation = new \ApiClients\Client\GitHubAE\Internal\Operation\SecretScanning\UpdateAlert($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $alertNumber);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): SecretScanningAlert|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
