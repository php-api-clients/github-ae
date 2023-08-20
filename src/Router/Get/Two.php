<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Router\Get;

use ApiClients\Client\GitHubAE\Hydrators;
use ApiClients\Client\GitHubAE\Router;
use ApiClients\Client\GitHubAE\Schema\ApiOverview;
use ApiClients\Client\GitHubAE\Schema\Feed;
use ApiClients\Client\GitHubAE\Schema\Integration;
use ApiClients\Client\GitHubAE\Schema\Operations\Emojis\Get\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHubAE\Schema\PrivateUser;
use ApiClients\Client\GitHubAE\Schema\PublicUser;
use ApiClients\Client\GitHubAE\Schema\RateLimitOverview;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;

use function array_key_exists;

final class Two
{
    private array $router = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return |(iterable<Schema\CodeOfConduct>|array{code: int})|(Schema\Operations\Emojis\Get\Response\ApplicationJson\Ok\Application\Json|(iterable<Schema\BaseGist>|(iterable<Schema\Issue>|(iterable<Schema\LicenseSimple>|(Schema\ApiOverview|(iterable<Schema\Thread>|(iterable<Schema\OrganizationSimple>|(Schema\RateLimitOverview|(Schema\PrivateUser|Schema\PublicUser|(iterable<Schema\SimpleUser> */
    public function call(string $call, array $params, array $pathChunks): Integration|iterable|Json|Feed|ApiOverview|ResponseInterface|RateLimitOverview|PrivateUser|PublicUser|string
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'app') {
                if ($call === 'GET /app') {
                    $matched = true;
                    if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                        $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                    }

                    return $this->router[Router\Get\Apps::class]->getAuthenticated($params);
                }
            } elseif ($pathChunks[1] === 'codes_of_conduct') {
                if ($call === 'GET /codes_of_conduct') {
                    $matched = true;
                    if (array_key_exists(Router\Get\CodesOfConduct::class, $this->router) === false) {
                        $this->router[Router\Get\CodesOfConduct::class] = new Router\Get\CodesOfConduct($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                    }

                    return $this->router[Router\Get\CodesOfConduct::class]->getAllCodesOfConduct($params);
                }
            } elseif ($pathChunks[1] === 'emojis') {
                if ($call === 'GET /emojis') {
                    $matched = true;
                    if (array_key_exists(Router\Get\Emojis::class, $this->router) === false) {
                        $this->router[Router\Get\Emojis::class] = new Router\Get\Emojis($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                    }

                    return $this->router[Router\Get\Emojis::class]->get($params);
                }
            } elseif ($pathChunks[1] === 'feeds') {
                if ($call === 'GET /feeds') {
                    $matched = true;
                    if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                        $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                    }

                    return $this->router[Router\Get\Activity::class]->getFeeds($params);
                }
            } elseif ($pathChunks[1] === 'gists') {
                if ($call === 'GET /gists') {
                    $matched = true;
                    if (array_key_exists(Router\Get\Gists::class, $this->router) === false) {
                        $this->router[Router\Get\Gists::class] = new Router\Get\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                    }

                    return $this->router[Router\Get\Gists::class]->list_($params);
                }
            } elseif ($pathChunks[1] === 'issues') {
                if ($call === 'GET /issues') {
                    $matched = true;
                    if (array_key_exists(Router\Get\Issues::class, $this->router) === false) {
                        $this->router[Router\Get\Issues::class] = new Router\Get\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                    }

                    return $this->router[Router\Get\Issues::class]->list_($params);
                }
            } elseif ($pathChunks[1] === 'licenses') {
                if ($call === 'GET /licenses') {
                    $matched = true;
                    if (array_key_exists(Router\Get\Licenses::class, $this->router) === false) {
                        $this->router[Router\Get\Licenses::class] = new Router\Get\Licenses($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                    }

                    return $this->router[Router\Get\Licenses::class]->getAllCommonlyUsed($params);
                }
            } elseif ($pathChunks[1] === 'meta') {
                if ($call === 'GET /meta') {
                    $matched = true;
                    if (array_key_exists(Router\Get\Meta::class, $this->router) === false) {
                        $this->router[Router\Get\Meta::class] = new Router\Get\Meta($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                    }

                    return $this->router[Router\Get\Meta::class]->get($params);
                }
            } elseif ($pathChunks[1] === 'notifications') {
                if ($call === 'GET /notifications') {
                    $matched = true;
                    if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                        $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                    }

                    return $this->router[Router\Get\Activity::class]->listNotificationsForAuthenticatedUser($params);
                }
            } elseif ($pathChunks[1] === 'octocat') {
                if ($call === 'GET /octocat') {
                    $matched = true;
                    if (array_key_exists(Router\Get\Meta::class, $this->router) === false) {
                        $this->router[Router\Get\Meta::class] = new Router\Get\Meta($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                    }

                    return $this->router[Router\Get\Meta::class]->getOctocat($params);
                }
            } elseif ($pathChunks[1] === 'organizations') {
                if ($call === 'GET /organizations') {
                    $matched = true;
                    if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                        $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                    }

                    return $this->router[Router\Get\Orgs::class]->list_($params);
                }
            } elseif ($pathChunks[1] === 'rate_limit') {
                if ($call === 'GET /rate_limit') {
                    $matched = true;
                    if (array_key_exists(Router\Get\RateLimit::class, $this->router) === false) {
                        $this->router[Router\Get\RateLimit::class] = new Router\Get\RateLimit($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                    }

                    return $this->router[Router\Get\RateLimit::class]->get($params);
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($call === 'GET /user') {
                    $matched = true;
                    if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                        $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                    }

                    return $this->router[Router\Get\Users::class]->getAuthenticated($params);
                }
            } elseif ($pathChunks[1] === 'users') {
                if ($call === 'GET /users') {
                    $matched = true;
                    if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                        $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                    }

                    return $this->router[Router\Get\Users::class]->list_($params);
                }
            } elseif ($pathChunks[1] === 'zen') {
                if ($call === 'GET /zen') {
                    $matched = true;
                    if (array_key_exists(Router\Get\Meta::class, $this->router) === false) {
                        $this->router[Router\Get\Meta::class] = new Router\Get\Meta($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                    }

                    return $this->router[Router\Get\Meta::class]->getZen($params);
                }
            }
        }

        if ($matched === false) {
            throw new InvalidArgumentException();
        }
    }
}
