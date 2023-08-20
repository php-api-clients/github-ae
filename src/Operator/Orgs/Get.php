<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Orgs;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema\OrganizationFull;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class Get
{
    public const OPERATION_ID    = 'orgs/get';
    public const OPERATION_MATCH = 'GET /orgs/{org}';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org $hydrator)
    {
    }

    /** @return */
    public function call(string $org): OrganizationFull|array
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Orgs\Get($this->responseSchemaValidator, $this->hydrator, $org);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): OrganizationFull|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
