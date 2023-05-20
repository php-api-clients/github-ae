<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Gists;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema\GistSimple;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class Create
{
    public const OPERATION_ID    = 'gists/create';
    public const OPERATION_MATCH = 'POST /gists';
    private const METHOD         = 'POST';
    private const PATH           = '/gists';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Gists $hydrator)
    {
    }

    /**
     * @return PromiseInterface<(GistSimple|array)>
     **/
    public function call(array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Gists\Create($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): GistSimple|array {
            return $operation->createResponse($response);
        });
    }
}
