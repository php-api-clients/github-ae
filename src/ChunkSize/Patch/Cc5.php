<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\ChunkSize\Patch;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
use ApiClients\Client\GitHubAE\Router;
use ApiClients\Client\GitHubAE\ChunkSize;
final class Cc5
{
    private array $router = array();
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
    public function call(string $call, array $params, array $pathChunks)
    {
        if ($pathChunks[0] == '') {
            if ($pathChunks[1] == 'gists') {
                if ($pathChunks[2] == '{gist_id}') {
                    if ($pathChunks[3] == 'comments') {
                        if ($pathChunks[4] == '{comment_id}') {
                            if ($call == 'PATCH /gists/{gist_id}/comments/{comment_id}') {
                                if (\array_key_exists(Router\Patch\Gists::class, $this->router) == false) {
                                    $this->router[Router\Patch\Gists::class] = new Router\Patch\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }
                                return $this->router[Router\Patch\Gists::class]->updateComment($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'orgs') {
                if ($pathChunks[2] == '{org}') {
                    if ($pathChunks[3] == 'hooks') {
                        if ($pathChunks[4] == '{hook_id}') {
                            if ($call == 'PATCH /orgs/{org}/hooks/{hook_id}') {
                                if (\array_key_exists(Router\Patch\Orgs::class, $this->router) == false) {
                                    $this->router[Router\Patch\Orgs::class] = new Router\Patch\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }
                                return $this->router[Router\Patch\Orgs::class]->updateWebhook($params);
                            }
                        }
                    } elseif ($pathChunks[3] == 'teams') {
                        if ($pathChunks[4] == '{team_slug}') {
                            if ($call == 'PATCH /orgs/{org}/teams/{team_slug}') {
                                if (\array_key_exists(Router\Patch\Teams::class, $this->router) == false) {
                                    $this->router[Router\Patch\Teams::class] = new Router\Patch\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }
                                return $this->router[Router\Patch\Teams::class]->updateInOrg($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'projects') {
                if ($pathChunks[2] == 'columns') {
                    if ($pathChunks[3] == 'cards') {
                        if ($pathChunks[4] == '{card_id}') {
                            if ($call == 'PATCH /projects/columns/cards/{card_id}') {
                                if (\array_key_exists(Router\Patch\Projects::class, $this->router) == false) {
                                    $this->router[Router\Patch\Projects::class] = new Router\Patch\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }
                                return $this->router[Router\Patch\Projects::class]->updateCard($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'teams') {
                if ($pathChunks[2] == '{team_id}') {
                    if ($pathChunks[3] == 'discussions') {
                        if ($pathChunks[4] == '{discussion_number}') {
                            if ($call == 'PATCH /teams/{team_id}/discussions/{discussion_number}') {
                                if (\array_key_exists(Router\Patch\Teams::class, $this->router) == false) {
                                    $this->router[Router\Patch\Teams::class] = new Router\Patch\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }
                                return $this->router[Router\Patch\Teams::class]->updateDiscussionLegacy($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'user') {
                if ($pathChunks[2] == 'memberships') {
                    if ($pathChunks[3] == 'orgs') {
                        if ($pathChunks[4] == '{org}') {
                            if ($call == 'PATCH /user/memberships/orgs/{org}') {
                                if (\array_key_exists(Router\Patch\Orgs::class, $this->router) == false) {
                                    $this->router[Router\Patch\Orgs::class] = new Router\Patch\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }
                                return $this->router[Router\Patch\Orgs::class]->updateMembershipForAuthenticatedUser($params);
                            }
                        }
                    }
                }
            }
        }
        throw new \InvalidArgumentException();
    }
}
