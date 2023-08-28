<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Router\Get;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\Schema\RateLimitOverview;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

final class RateLimit
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return Schema\RateLimitOverview|array{code:int} */
    public function get(array $params): RateLimitOverview|array
    {
        $operator = new Internal\Operator\RateLimit\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀RateLimit());

        return $operator->call();
    }
}
