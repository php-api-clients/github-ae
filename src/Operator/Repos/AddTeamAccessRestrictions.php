<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Repos;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class AddTeamAccessRestrictions
{
    public const OPERATION_ID    = 'repos/add-team-access-restrictions';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/teams';
    private const METHOD         = 'POST';
    private const PATH           = '/repos/{owner}/{repo}/branches/{branch}/protection/restrictions/teams';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Teams $hydrator)
    {
    }

    /**
     * @return PromiseInterface<mixed>
     **/
    public function call(string $owner, string $repo, string $branch, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Repos\AddTeamAccessRestrictions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $branch);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): mixed {
            return $operation->createResponse($response);
        });
    }
}
