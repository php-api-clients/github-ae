<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Teams;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class UnlinkExternalIdpGroupFromTeamForOrg
{
    public const OPERATION_ID    = 'teams/unlink-external-idp-group-from-team-for-org';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/teams/{team_slug}/external-groups';
    private const METHOD         = 'DELETE';
    private const PATH           = '/orgs/{org}/teams/{team_slug}/external-groups';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(string $org, string $teamSlug): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Teams\UnlinkExternalIdpGroupFromTeamForOrg($org, $teamSlug);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
