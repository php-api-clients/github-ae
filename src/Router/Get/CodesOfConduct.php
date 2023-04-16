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
final class CodesOfConduct
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
    public function getConductCode(array $params)
    {
        $arguments = array();
        if (array_key_exists('key', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: key');
        }
        $arguments['key'] = $params['key'];
        unset($params['key']);
        if (\array_key_exists(Hydrator\Operation\CodesOfConduct\CbKeyRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\CodesOfConduct\CbKeyRcb::class] = $this->hydrators->getObjectMapperOperation🌀CodesOfConduct🌀CbKeyRcb();
        }
        $operation = new Operation\CodesOfConduct\GetConductCode($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\CodesOfConduct\CbKeyRcb::class], $arguments['key']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHubAE\Schema\CodeOfConduct {
            return $operation->createResponse($response);
        });
    }
    public function getAllCodesOfConduct(array $params)
    {
        $arguments = array();
        if (\array_key_exists(Hydrator\Operation\CodesOfConduct::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\CodesOfConduct::class] = $this->hydrators->getObjectMapperOperation🌀CodesOfConduct();
        }
        $operation = new Operation\CodesOfConduct\GetAllCodesOfConduct($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\CodesOfConduct::class]);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
}
