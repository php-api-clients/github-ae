<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Repos;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema\RepositoryInvitation;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class UpdateInvitation
{
    public const OPERATION_ID    = 'repos/update-invitation';
    public const OPERATION_MATCH = 'PATCH /repos/{owner}/{repo}/invitations/{invitation_id}';
    private const METHOD         = 'PATCH';
    private const PATH           = '/repos/{owner}/{repo}/invitations/{invitation_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Invitations\InvitationId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<RepositoryInvitation>
     **/
    public function call(string $owner, string $repo, int $invitationId, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Repos\UpdateInvitation($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $invitationId);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): RepositoryInvitation {
            return $operation->createResponse($response);
        });
    }
}
