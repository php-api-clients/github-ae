<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Operator\Actions;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListSelectedReposForOrgSecret
{
    public const OPERATION_ID    = 'actions/list-selected-repos-for-org-secret';
    public const OPERATION_MATCH = 'GET /orgs/{org}/actions/secrets/{secret_name}/repositories';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName\Repositories $hydrator)
    {
    }

    /** @return Schema\Operations\Actions\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok */
    public function call(string $org, string $secretName, int $page = 1, int $perPage = 30): Ok|array
    {
        $operation = new \ApiClients\Client\GitHubAE\Internal\Operation\Actions\ListSelectedReposForOrgSecret($this->responseSchemaValidator, $this->hydrator, $org, $secretName, $page, $perPage);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Ok|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
