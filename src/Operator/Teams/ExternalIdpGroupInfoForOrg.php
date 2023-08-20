<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Teams;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema\ExternalGroup;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ExternalIdpGroupInfoForOrg
{
    public const OPERATION_ID    = 'teams/external-idp-group-info-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/external-group/{group_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/external-group/{group_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\ExternalGroup\GroupId $hydrator)
    {
    }

    /** @return */
    public function call(string $org, int $groupId): ExternalGroup|array
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Teams\ExternalIdpGroupInfoForOrg($this->responseSchemaValidator, $this->hydrator, $org, $groupId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ExternalGroup|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
