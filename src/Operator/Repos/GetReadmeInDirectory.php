<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Repos;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema\ContentFile;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetReadmeInDirectory
{
    public const OPERATION_ID    = 'repos/get-readme-in-directory';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/readme/{dir}';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/readme/{dir}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Readme\Dir $hydrator)
    {
    }

    /** @return PromiseInterface<ContentFile> **/
    public function call(string $owner, string $repo, string $dir, string $ref): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Repos\GetReadmeInDirectory($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $dir, $ref);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ContentFile {
            return $operation->createResponse($response);
        });
    }
}
