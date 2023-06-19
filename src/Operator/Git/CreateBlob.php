<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Git;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema\ShortBlob;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class CreateBlob
{
    public const OPERATION_ID    = 'git/create-blob';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/git/blobs';
    private const METHOD         = 'POST';
    private const PATH           = '/repos/{owner}/{repo}/git/blobs';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Git\Blobs $hydrator)
    {
    }

    /** @return PromiseInterface<ShortBlob> **/
    public function call(string $owner, string $repo, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Git\CreateBlob($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ShortBlob {
            return $operation->createResponse($response);
        });
    }
}
