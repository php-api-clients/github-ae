<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Router\Put;

use ApiClients\Client\GitHubAE\Hydrators;
use ApiClients\Client\GitHubAE\Router;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Two
{
    private array $router = [];
    private readonly SchemaValidator $requestSchemaValidator;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrators $hydrators;
    private readonly Browser $browser;
    private readonly AuthenticationInterface $authentication;

    public function __construct(SchemaValidator $requestSchemaValidator, SchemaValidator $responseSchemaValidator, Hydrators $hydrators, Browser $browser, AuthenticationInterface $authentication)
    {
        $this->requestSchemaValidator  = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrators               = $hydrators;
        $this->browser                 = $browser;
        $this->authentication          = $authentication;
    }

    public function call(string $call, array $params, array $pathChunks)
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'notifications') {
                if ($call === 'PUT /notifications') {
                    if (array_key_exists(Router\Put\Activity::class, $this->router) === false) {
                        $this->router[Router\Put\Activity::class] = new Router\Put\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                    }

                    return $this->router[Router\Put\Activity::class]->markNotificationsAsRead($params);
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
