<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Router\Get;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Hydrators;
use ApiClients\Client\GitHubAE\Operator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Meta
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private readonly SchemaValidator $requestSchemaValidator, private readonly SchemaValidator $responseSchemaValidator, private readonly Hydrators $hydrators, private readonly Browser $browser, private readonly AuthenticationInterface $authentication)
    {
    }

    public function root(array $params)
    {
        if (array_key_exists(Hydrator\Operation\Root::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Root::class] = $this->hydrators->getObjectMapperOperation🌀Root();
        }

        $operator = new Operator\Meta\Root($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Root::class]);

        return $operator->call();
    }

    public function get(array $params)
    {
        if (array_key_exists(Hydrator\Operation\Meta::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Meta::class] = $this->hydrators->getObjectMapperOperation🌀Meta();
        }

        $operator = new Operator\Meta\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Meta::class]);

        return $operator->call();
    }

    public function getOctocat(array $params)
    {
        $arguments = [];
        if (array_key_exists('s', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: s');
        }

        $arguments['s'] = $params['s'];
        unset($params['s']);
        $operator = new Operator\Meta\GetOctocat($this->browser, $this->authentication);

        return $operator->call($arguments['s']);
    }

    public function getZen(array $params)
    {
        if (array_key_exists(Hydrator\Operation\Zen::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Zen::class] = $this->hydrators->getObjectMapperOperation🌀Zen();
        }

        $operator = new Operator\Meta\GetZen($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Zen::class]);

        return $operator->call();
    }
}
