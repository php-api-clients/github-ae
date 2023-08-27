<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Router\Get;

use ApiClients\Client\GitHubAE\Hydrators;
use ApiClients\Client\GitHubAE\Operator;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\Schema\ApiOverview;
use ApiClients\Client\GitHubAE\Schema\Root;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;

use function array_key_exists;

final class Meta
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
    public function root(array $params): Root|array
    {
        $operator = new Operator\Meta\Root($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Root());

        return $operator->call();
    }

    /** @return Schema\ApiOverview|array{code:int} */
    public function get(array $params): ApiOverview|array
    {
        $operator = new Operator\Meta\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Meta());

        return $operator->call();
    }

    /** @return */
    public function getOctocat(array $params): ResponseInterface|array
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

    /** @return */
    public function getZen(array $params): string|array
    {
        $operator = new Operator\Meta\GetZen($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Zen());

        return $operator->call();
    }
}
