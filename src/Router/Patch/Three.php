<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Router\Patch;

use ApiClients\Client\GitHubAE\Hydrators;
use ApiClients\Client\GitHubAE\Router;
use ApiClients\Client\GitHubAE\Schema\Announcement;
use ApiClients\Client\GitHubAE\Schema\GistSimple;
use ApiClients\Client\GitHubAE\Schema\OrganizationFull;
use ApiClients\Client\GitHubAE\Schema\Project;
use ApiClients\Client\GitHubAE\Schema\TeamFull;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Three
{
    private array $router = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return |(Schema\Project|array{code: int}) */
    public function call(string $call, array $params, array $pathChunks): Announcement|GistSimple|OrganizationFull|Project|TeamFull|array
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'enterprise') {
                if ($pathChunks[2] === 'announcement') {
                    if ($call === 'PATCH /enterprise/announcement') {
                        $matched = true;
                        if (array_key_exists(Router\Patch\EnterpriseAdmin::class, $this->router) === false) {
                            $this->router[Router\Patch\EnterpriseAdmin::class] = new Router\Patch\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Patch\EnterpriseAdmin::class]->SetAnnouncement($params);
                    }
                }
            } elseif ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === '{gist_id}') {
                    if ($call === 'PATCH /gists/{gist_id}') {
                        $matched = true;
                        if (array_key_exists(Router\Patch\Gists::class, $this->router) === false) {
                            $this->router[Router\Patch\Gists::class] = new Router\Patch\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Patch\Gists::class]->Update($params);
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($call === 'PATCH /orgs/{org}') {
                        $matched = true;
                        if (array_key_exists(Router\Patch\Orgs::class, $this->router) === false) {
                            $this->router[Router\Patch\Orgs::class] = new Router\Patch\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Patch\Orgs::class]->Update($params);
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === '{project_id}') {
                    if ($call === 'PATCH /projects/{project_id}') {
                        $matched = true;
                        if (array_key_exists(Router\Patch\Projects::class, $this->router) === false) {
                            $this->router[Router\Patch\Projects::class] = new Router\Patch\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Patch\Projects::class]->Update($params);
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($call === 'PATCH /teams/{team_id}') {
                        $matched = true;
                        if (array_key_exists(Router\Patch\Teams::class, $this->router) === false) {
                            $this->router[Router\Patch\Teams::class] = new Router\Patch\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Patch\Teams::class]->UpdateLegacy($params);
                    }
                }
            }
        }

        if ($matched === false) {
            throw new InvalidArgumentException();
        }
    }
}
