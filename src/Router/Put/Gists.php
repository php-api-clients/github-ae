<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Router\Put;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
use ApiClients\Client\GitHubAE\Router;
use ApiClients\Client\GitHubAE\ChunkSize;
final class Gists
{
    /**
     * @var array<class-string, \EventSauce\ObjectHydrator\ObjectMapper>
     */
    private array $hydrator = array();
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\GitHubAE\Hydrators $hydrators;
    private readonly \React\Http\Browser $browser;
    private readonly \ApiClients\Contracts\HTTP\Headers\AuthenticationInterface $authentication;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\GitHubAE\Hydrators $hydrators, \React\Http\Browser $browser, \ApiClients\Contracts\HTTP\Headers\AuthenticationInterface $authentication)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrators = $hydrators;
        $this->browser = $browser;
        $this->authentication = $authentication;
    }
    public function star(array $params)
    {
        $arguments = array();
        if (array_key_exists('gist_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: gist_id');
        }
        $arguments['gist_id'] = $params['gist_id'];
        unset($params['gist_id']);
        if (\array_key_exists(Hydrator\Operation\Gists\CbGistIdRcb\Star::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Gists\CbGistIdRcb\Star::class] = $this->hydrators->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Star();
        }
        $operation = new Operation\Gists\Star($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Gists\CbGistIdRcb\Star::class], $arguments['gist_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : mixed {
            return $operation->createResponse($response);
        });
    }
}
