<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Router\Post;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
use ApiClients\Client\GitHubAE\Router;
use ApiClients\Client\GitHubAE\ChunkSize;
final class Migrations
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
    public function startForAuthenticatedUser(array $params)
    {
        $arguments = array();
        if (\array_key_exists(Hydrator\Operation\User\Migrations::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\User\Migrations::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Migrations();
        }
        $operation = new Operation\Migrations\StartForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Migrations::class]);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHubAE\Schema\Migration {
            return $operation->createResponse($response);
        });
    }
    public function startForOrg(array $params)
    {
        $arguments = array();
        if (array_key_exists('org', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: org');
        }
        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Migrations::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Migrations::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Migrations();
        }
        $operation = new Operation\Migrations\StartForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Migrations::class], $arguments['org']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHubAE\Schema\Migration {
            return $operation->createResponse($response);
        });
    }
}
