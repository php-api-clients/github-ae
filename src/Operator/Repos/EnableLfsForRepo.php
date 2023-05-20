<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Repos;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema\AuditLogEvent\Config;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class EnableLfsForRepo
{
    public const OPERATION_ID    = 'repos/enable-lfs-for-repo';
    public const OPERATION_MATCH = 'PUT /repos/{owner}/{repo}/lfs';
    private const METHOD         = 'PUT';
    private const PATH           = '/repos/{owner}/{repo}/lfs';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Lfs $hydrator)
    {
    }

    /**
     * @return PromiseInterface<(Config|array)>
     **/
    public function call(string $owner, string $repo): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Repos\EnableLfsForRepo($this->responseSchemaValidator, $this->hydrator, $owner, $repo);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Config|array {
            return $operation->createResponse($response);
        });
    }
}
