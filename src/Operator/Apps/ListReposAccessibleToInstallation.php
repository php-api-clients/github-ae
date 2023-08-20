<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Apps;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\Schema\Operations\Apps\ListReposAccessibleToInstallation\Response\ApplicationJson\Ok;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListReposAccessibleToInstallation
{
    public const OPERATION_ID    = 'apps/list-repos-accessible-to-installation';
    public const OPERATION_MATCH = 'GET /installation/repositories';
    private const METHOD         = 'GET';
    private const PATH           = '/installation/repositories';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Installation\Repositories $hydrator)
    {
    }

    /** @return (Schema\Operations\Apps\ListReposAccessibleToInstallation\Response\ApplicationJson\Ok | array{code: int}) */
    public function call(int $perPage = 30, int $page = 1): Ok|array
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Apps\ListReposAccessibleToInstallation($this->responseSchemaValidator, $this->hydrator, $perPage, $page);
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
