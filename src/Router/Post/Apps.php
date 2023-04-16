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
final class Apps
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
    public function createInstallationAccessToken(array $params)
    {
        $arguments = array();
        if (array_key_exists('installation_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: installation_id');
        }
        $arguments['installation_id'] = $params['installation_id'];
        unset($params['installation_id']);
        if (\array_key_exists(Hydrator\Operation\App\Installations\CbInstallationIdRcb\AccessTokens::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\App\Installations\CbInstallationIdRcb\AccessTokens::class] = $this->hydrators->getObjectMapperOperation🌀App🌀Installations🌀CbInstallationIdRcb🌀AccessTokens();
        }
        $operation = new Operation\Apps\CreateInstallationAccessToken($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\App\Installations\CbInstallationIdRcb\AccessTokens::class], $arguments['installation_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHubAE\Schema\InstallationToken {
            return $operation->createResponse($response);
        });
    }
    public function resetAuthorization(array $params)
    {
        $arguments = array();
        if (array_key_exists('client_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: client_id');
        }
        $arguments['client_id'] = $params['client_id'];
        unset($params['client_id']);
        if (array_key_exists('access_token', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: access_token');
        }
        $arguments['access_token'] = $params['access_token'];
        unset($params['access_token']);
        if (\array_key_exists(Hydrator\Operation\Applications\CbClientIdRcb\Tokens\CbAccessTokenRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Applications\CbClientIdRcb\Tokens\CbAccessTokenRcb::class] = $this->hydrators->getObjectMapperOperation🌀Applications🌀CbClientIdRcb🌀Tokens🌀CbAccessTokenRcb();
        }
        $operation = new Operation\Apps\ResetAuthorization($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Applications\CbClientIdRcb\Tokens\CbAccessTokenRcb::class], $arguments['client_id'], $arguments['access_token']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHubAE\Schema\Authorization {
            return $operation->createResponse($response);
        });
    }
    public function createFromManifest(array $params)
    {
        $arguments = array();
        if (array_key_exists('code', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: code');
        }
        $arguments['code'] = $params['code'];
        unset($params['code']);
        if (\array_key_exists(Hydrator\Operation\AppManifests\CbCodeRcb\Conversions::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\AppManifests\CbCodeRcb\Conversions::class] = $this->hydrators->getObjectMapperOperation🌀AppManifests🌀CbCodeRcb🌀Conversions();
        }
        $operation = new Operation\Apps\CreateFromManifest($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\AppManifests\CbCodeRcb\Conversions::class], $arguments['code']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHubAE\Schema\Operation\Apps\CreateFromManifest\Response\Applicationjson\H201 {
            return $operation->createResponse($response);
        });
    }
    public function checkToken(array $params)
    {
        $arguments = array();
        if (array_key_exists('client_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: client_id');
        }
        $arguments['client_id'] = $params['client_id'];
        unset($params['client_id']);
        if (\array_key_exists(Hydrator\Operation\Applications\CbClientIdRcb\Token::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Applications\CbClientIdRcb\Token::class] = $this->hydrators->getObjectMapperOperation🌀Applications🌀CbClientIdRcb🌀Token();
        }
        $operation = new Operation\Apps\CheckToken($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Applications\CbClientIdRcb\Token::class], $arguments['client_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHubAE\Schema\Authorization {
            return $operation->createResponse($response);
        });
    }
    public function redeliverWebhookDelivery(array $params)
    {
        $arguments = array();
        if (array_key_exists('delivery_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: delivery_id');
        }
        $arguments['delivery_id'] = $params['delivery_id'];
        unset($params['delivery_id']);
        if (\array_key_exists(Hydrator\Operation\App\Hook\Deliveries\CbDeliveryIdRcb\Attempts::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\App\Hook\Deliveries\CbDeliveryIdRcb\Attempts::class] = $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts();
        }
        $operation = new Operation\Apps\RedeliverWebhookDelivery($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\App\Hook\Deliveries\CbDeliveryIdRcb\Attempts::class], $arguments['delivery_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHubAE\Schema\Operation\Apps\RedeliverWebhookDelivery\Response\Applicationjson\H202 {
            return $operation->createResponse($response);
        });
    }
}
