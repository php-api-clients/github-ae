<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Router\Get;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
use ApiClients\Client\GitHubAE\Router;
use ApiClients\Client\GitHubAE\ChunkSize;
final class Gitignore
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
    public function getAllTemplates(array $params)
    {
        $arguments = array();
        if (\array_key_exists(Hydrator\Operation\Gitignore\Templates::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Gitignore\Templates::class] = $this->hydrators->getObjectMapperOperation🌀Gitignore🌀Templates();
        }
        $operation = new Operation\Gitignore\GetAllTemplates($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Gitignore\Templates::class]);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function getTemplate(array $params)
    {
        $arguments = array();
        if (array_key_exists('name', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: name');
        }
        $arguments['name'] = $params['name'];
        unset($params['name']);
        if (\array_key_exists(Hydrator\Operation\Gitignore\Templates\CbNameRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Gitignore\Templates\CbNameRcb::class] = $this->hydrators->getObjectMapperOperation🌀Gitignore🌀Templates🌀CbNameRcb();
        }
        $operation = new Operation\Gitignore\GetTemplate($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Gitignore\Templates\CbNameRcb::class], $arguments['name']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHubAE\Schema\GitignoreTemplate {
            return $operation->createResponse($response);
        });
    }
}
