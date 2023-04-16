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
final class Cc6
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
            if ($pathChunks[1] == 'enterprises') {
                if ($pathChunks[2] == '{enterprise}') {
                    if ($pathChunks[3] == 'actions') {
                        if ($pathChunks[4] == 'runner-groups') {
                            if ($pathChunks[5] == '{runner_group_id}') {
                                if ($call == 'PATCH /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}') {
                                    if (\array_key_exists(Router\Patch\EnterpriseAdmin::class, $this->router) == false) {
                                        $this->router[Router\Patch\EnterpriseAdmin::class] = new Router\Patch\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Patch\EnterpriseAdmin::class]->updateSelfHostedRunnerGroupForEnterprise($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'orgs') {
                if ($pathChunks[2] == '{org}') {
                    if ($pathChunks[3] == 'actions') {
                        if ($pathChunks[4] == 'runner-groups') {
                            if ($pathChunks[5] == '{runner_group_id}') {
                                if ($call == 'PATCH /orgs/{org}/actions/runner-groups/{runner_group_id}') {
                                    if (\array_key_exists(Router\Patch\Actions::class, $this->router) == false) {
                                        $this->router[Router\Patch\Actions::class] = new Router\Patch\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Patch\Actions::class]->updateSelfHostedRunnerGroupForOrg($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] == 'hooks') {
                        if ($pathChunks[4] == '{hook_id}') {
                            if ($pathChunks[5] == 'config') {
                                if ($call == 'PATCH /orgs/{org}/hooks/{hook_id}/config') {
                                    if (\array_key_exists(Router\Patch\Orgs::class, $this->router) == false) {
                                        $this->router[Router\Patch\Orgs::class] = new Router\Patch\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Patch\Orgs::class]->updateWebhookConfigForOrg($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] == 'teams') {
                        if ($pathChunks[4] == '{team_slug}') {
                            if ($pathChunks[5] == 'external-groups') {
                                if ($call == 'PATCH /orgs/{org}/teams/{team_slug}/external-groups') {
                                    if (\array_key_exists(Router\Patch\Teams::class, $this->router) == false) {
                                        $this->router[Router\Patch\Teams::class] = new Router\Patch\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Patch\Teams::class]->linkExternalIdpGroupToTeamForOrg($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'repos') {
                if ($pathChunks[2] == '{owner}') {
                    if ($pathChunks[3] == '{repo}') {
                        if ($pathChunks[4] == 'check-runs') {
                            if ($pathChunks[5] == '{check_run_id}') {
                                if ($call == 'PATCH /repos/{owner}/{repo}/check-runs/{check_run_id}') {
                                    if (\array_key_exists(Router\Patch\Checks::class, $this->router) == false) {
                                        $this->router[Router\Patch\Checks::class] = new Router\Patch\Checks($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Patch\Checks::class]->update($params);
                                }
                            }
                        } elseif ($pathChunks[4] == 'check-suites') {
                            if ($pathChunks[5] == 'preferences') {
                                if ($call == 'PATCH /repos/{owner}/{repo}/check-suites/preferences') {
                                    if (\array_key_exists(Router\Patch\Checks::class, $this->router) == false) {
                                        $this->router[Router\Patch\Checks::class] = new Router\Patch\Checks($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Patch\Checks::class]->setSuitesPreferences($params);
                                }
                            }
                        } elseif ($pathChunks[4] == 'comments') {
                            if ($pathChunks[5] == '{comment_id}') {
                                if ($call == 'PATCH /repos/{owner}/{repo}/comments/{comment_id}') {
                                    if (\array_key_exists(Router\Patch\Repos::class, $this->router) == false) {
                                        $this->router[Router\Patch\Repos::class] = new Router\Patch\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Patch\Repos::class]->updateCommitComment($params);
                                }
                            }
                        } elseif ($pathChunks[4] == 'hooks') {
                            if ($pathChunks[5] == '{hook_id}') {
                                if ($call == 'PATCH /repos/{owner}/{repo}/hooks/{hook_id}') {
                                    if (\array_key_exists(Router\Patch\Repos::class, $this->router) == false) {
                                        $this->router[Router\Patch\Repos::class] = new Router\Patch\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Patch\Repos::class]->updateWebhook($params);
                                }
                            }
                        } elseif ($pathChunks[4] == 'invitations') {
                            if ($pathChunks[5] == '{invitation_id}') {
                                if ($call == 'PATCH /repos/{owner}/{repo}/invitations/{invitation_id}') {
                                    if (\array_key_exists(Router\Patch\Repos::class, $this->router) == false) {
                                        $this->router[Router\Patch\Repos::class] = new Router\Patch\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Patch\Repos::class]->updateInvitation($params);
                                }
                            }
                        } elseif ($pathChunks[4] == 'issues') {
                            if ($pathChunks[5] == '{issue_number}') {
                                if ($call == 'PATCH /repos/{owner}/{repo}/issues/{issue_number}') {
                                    if (\array_key_exists(Router\Patch\Issues::class, $this->router) == false) {
                                        $this->router[Router\Patch\Issues::class] = new Router\Patch\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Patch\Issues::class]->update($params);
                                }
                            }
                        } elseif ($pathChunks[4] == 'labels') {
                            if ($pathChunks[5] == '{name}') {
                                if ($call == 'PATCH /repos/{owner}/{repo}/labels/{name}') {
                                    if (\array_key_exists(Router\Patch\Issues::class, $this->router) == false) {
                                        $this->router[Router\Patch\Issues::class] = new Router\Patch\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Patch\Issues::class]->updateLabel($params);
                                }
                            }
                        } elseif ($pathChunks[4] == 'milestones') {
                            if ($pathChunks[5] == '{milestone_number}') {
                                if ($call == 'PATCH /repos/{owner}/{repo}/milestones/{milestone_number}') {
                                    if (\array_key_exists(Router\Patch\Issues::class, $this->router) == false) {
                                        $this->router[Router\Patch\Issues::class] = new Router\Patch\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Patch\Issues::class]->updateMilestone($params);
                                }
                            }
                        } elseif ($pathChunks[4] == 'pulls') {
                            if ($pathChunks[5] == '{pull_number}') {
                                if ($call == 'PATCH /repos/{owner}/{repo}/pulls/{pull_number}') {
                                    if (\array_key_exists(Router\Patch\Pulls::class, $this->router) == false) {
                                        $this->router[Router\Patch\Pulls::class] = new Router\Patch\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Patch\Pulls::class]->update($params);
                                }
                            }
                        } elseif ($pathChunks[4] == 'releases') {
                            if ($pathChunks[5] == '{release_id}') {
                                if ($call == 'PATCH /repos/{owner}/{repo}/releases/{release_id}') {
                                    if (\array_key_exists(Router\Patch\Repos::class, $this->router) == false) {
                                        $this->router[Router\Patch\Repos::class] = new Router\Patch\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Patch\Repos::class]->updateRelease($params);
                                }
                            }
                        }
                    }
                }
            }
        }
        throw new \InvalidArgumentException();
    }
}
