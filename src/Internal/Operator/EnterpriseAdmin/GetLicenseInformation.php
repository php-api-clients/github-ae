<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Operator\EnterpriseAdmin;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema\LicenseInfo;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetLicenseInformation
{
    public const OPERATION_ID    = 'enterprise-admin/get-license-information';
    public const OPERATION_MATCH = 'GET /enterprise/settings/license';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Enterprise\Settings\License $hydrator)
    {
    }

    /** @return */
    public function call(): LicenseInfo
    {
        $operation = new \ApiClients\Client\GitHubAE\Internal\Operation\EnterpriseAdmin\GetLicenseInformation($this->responseSchemaValidator, $this->hydrator);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): LicenseInfo {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
