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

final readonly class Update
{
    public const OPERATION_ID    = 'gists/update';
    public const OPERATION_MATCH = 'PATCH /gists/{gist_id}';
    private const METHOD         = 'PATCH';
    private const PATH           = '/gists/{gist_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Gists\GistId $hydrator)
    {
    }

    /** @return PromiseInterface<GistSimple> **/
    public function call(string $gistId, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Gists\Update($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $gistId);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): GistSimple {
            return $operation->createResponse($response);
        });
    }
}
