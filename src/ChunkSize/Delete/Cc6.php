<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\ChunkSize\Delete;

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
                                if ($call == 'DELETE /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}') {
                                    if (\array_key_exists(Router\Delete\EnterpriseAdmin::class, $this->router) == false) {
                                        $this->router[Router\Delete\EnterpriseAdmin::class] = new Router\Delete\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Delete\EnterpriseAdmin::class]->deleteSelfHostedRunnerGroupFromEnterprise($params);
                                }
                            }
                        } elseif ($pathChunks[4] == 'runners') {
                            if ($pathChunks[5] == '{runner_id}') {
                                if ($call == 'DELETE /enterprises/{enterprise}/actions/runners/{runner_id}') {
                                    if (\array_key_exists(Router\Delete\EnterpriseAdmin::class, $this->router) == false) {
                                        $this->router[Router\Delete\EnterpriseAdmin::class] = new Router\Delete\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Delete\EnterpriseAdmin::class]->deleteSelfHostedRunnerFromEnterprise($params);
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
                                if ($call == 'DELETE /orgs/{org}/actions/runner-groups/{runner_group_id}') {
                                    if (\array_key_exists(Router\Delete\Actions::class, $this->router) == false) {
                                        $this->router[Router\Delete\Actions::class] = new Router\Delete\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Delete\Actions::class]->deleteSelfHostedRunnerGroupFromOrg($params);
                                }
                            }
                        } elseif ($pathChunks[4] == 'runners') {
                            if ($pathChunks[5] == '{runner_id}') {
                                if ($call == 'DELETE /orgs/{org}/actions/runners/{runner_id}') {
                                    if (\array_key_exists(Router\Delete\Actions::class, $this->router) == false) {
                                        $this->router[Router\Delete\Actions::class] = new Router\Delete\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Delete\Actions::class]->deleteSelfHostedRunnerFromOrg($params);
                                }
                            }
                        } elseif ($pathChunks[4] == 'secrets') {
                            if ($pathChunks[5] == '{secret_name}') {
                                if ($call == 'DELETE /orgs/{org}/actions/secrets/{secret_name}') {
                                    if (\array_key_exists(Router\Delete\Actions::class, $this->router) == false) {
                                        $this->router[Router\Delete\Actions::class] = new Router\Delete\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Delete\Actions::class]->deleteOrgSecret($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] == 'migrations') {
                        if ($pathChunks[4] == '{migration_id}') {
                            if ($pathChunks[5] == 'archive') {
                                if ($call == 'DELETE /orgs/{org}/migrations/{migration_id}/archive') {
                                    if (\array_key_exists(Router\Delete\Migrations::class, $this->router) == false) {
                                        $this->router[Router\Delete\Migrations::class] = new Router\Delete\Migrations($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Delete\Migrations::class]->deleteArchiveForOrg($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] == 'teams') {
                        if ($pathChunks[4] == '{team_slug}') {
                            if ($pathChunks[5] == 'external-groups') {
                                if ($call == 'DELETE /orgs/{org}/teams/{team_slug}/external-groups') {
                                    if (\array_key_exists(Router\Delete\Teams::class, $this->router) == false) {
                                        $this->router[Router\Delete\Teams::class] = new Router\Delete\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Delete\Teams::class]->unlinkExternalIdpGroupFromTeamForOrg($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'repos') {
                if ($pathChunks[2] == '{owner}') {
                    if ($pathChunks[3] == '{repo}') {
                        if ($pathChunks[4] == 'autolinks') {
                            if ($pathChunks[5] == '{autolink_id}') {
                                if ($call == 'DELETE /repos/{owner}/{repo}/autolinks/{autolink_id}') {
                                    if (\array_key_exists(Router\Delete\Repos::class, $this->router) == false) {
                                        $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Delete\Repos::class]->deleteAutolink($params);
                                }
                            }
                        } elseif ($pathChunks[4] == 'collaborators') {
                            if ($pathChunks[5] == '{username}') {
                                if ($call == 'DELETE /repos/{owner}/{repo}/collaborators/{username}') {
                                    if (\array_key_exists(Router\Delete\Repos::class, $this->router) == false) {
                                        $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Delete\Repos::class]->removeCollaborator($params);
                                }
                            }
                        } elseif ($pathChunks[4] == 'comments') {
                            if ($pathChunks[5] == '{comment_id}') {
                                if ($call == 'DELETE /repos/{owner}/{repo}/comments/{comment_id}') {
                                    if (\array_key_exists(Router\Delete\Repos::class, $this->router) == false) {
                                        $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Delete\Repos::class]->deleteCommitComment($params);
                                }
                            }
                        } elseif ($pathChunks[4] == 'contents') {
                            if ($pathChunks[5] == '{path}') {
                                if ($call == 'DELETE /repos/{owner}/{repo}/contents/{path}') {
                                    if (\array_key_exists(Router\Delete\Repos::class, $this->router) == false) {
                                        $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Delete\Repos::class]->deleteFile($params);
                                }
                            }
                        } elseif ($pathChunks[4] == 'deployments') {
                            if ($pathChunks[5] == '{deployment_id}') {
                                if ($call == 'DELETE /repos/{owner}/{repo}/deployments/{deployment_id}') {
                                    if (\array_key_exists(Router\Delete\Repos::class, $this->router) == false) {
                                        $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Delete\Repos::class]->deleteDeployment($params);
                                }
                            }
                        } elseif ($pathChunks[4] == 'environments') {
                            if ($pathChunks[5] == '{environment_name}') {
                                if ($call == 'DELETE /repos/{owner}/{repo}/environments/{environment_name}') {
                                    if (\array_key_exists(Router\Delete\Repos::class, $this->router) == false) {
                                        $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Delete\Repos::class]->deleteAnEnvironment($params);
                                }
                            }
                        } elseif ($pathChunks[4] == 'hooks') {
                            if ($pathChunks[5] == '{hook_id}') {
                                if ($call == 'DELETE /repos/{owner}/{repo}/hooks/{hook_id}') {
                                    if (\array_key_exists(Router\Delete\Repos::class, $this->router) == false) {
                                        $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Delete\Repos::class]->deleteWebhook($params);
                                }
                            }
                        } elseif ($pathChunks[4] == 'invitations') {
                            if ($pathChunks[5] == '{invitation_id}') {
                                if ($call == 'DELETE /repos/{owner}/{repo}/invitations/{invitation_id}') {
                                    if (\array_key_exists(Router\Delete\Repos::class, $this->router) == false) {
                                        $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Delete\Repos::class]->deleteInvitation($params);
                                }
                            }
                        } elseif ($pathChunks[4] == 'keys') {
                            if ($pathChunks[5] == '{key_id}') {
                                if ($call == 'DELETE /repos/{owner}/{repo}/keys/{key_id}') {
                                    if (\array_key_exists(Router\Delete\Repos::class, $this->router) == false) {
                                        $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Delete\Repos::class]->deleteDeployKey($params);
                                }
                            }
                        } elseif ($pathChunks[4] == 'labels') {
                            if ($pathChunks[5] == '{name}') {
                                if ($call == 'DELETE /repos/{owner}/{repo}/labels/{name}') {
                                    if (\array_key_exists(Router\Delete\Issues::class, $this->router) == false) {
                                        $this->router[Router\Delete\Issues::class] = new Router\Delete\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Delete\Issues::class]->deleteLabel($params);
                                }
                            }
                        } elseif ($pathChunks[4] == 'milestones') {
                            if ($pathChunks[5] == '{milestone_number}') {
                                if ($call == 'DELETE /repos/{owner}/{repo}/milestones/{milestone_number}') {
                                    if (\array_key_exists(Router\Delete\Issues::class, $this->router) == false) {
                                        $this->router[Router\Delete\Issues::class] = new Router\Delete\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Delete\Issues::class]->deleteMilestone($params);
                                }
                            }
                        } elseif ($pathChunks[4] == 'releases') {
                            if ($pathChunks[5] == '{release_id}') {
                                if ($call == 'DELETE /repos/{owner}/{repo}/releases/{release_id}') {
                                    if (\array_key_exists(Router\Delete\Repos::class, $this->router) == false) {
                                        $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Delete\Repos::class]->deleteRelease($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'teams') {
                if ($pathChunks[2] == '{team_id}') {
                    if ($pathChunks[3] == 'repos') {
                        if ($pathChunks[4] == '{owner}') {
                            if ($pathChunks[5] == '{repo}') {
                                if ($call == 'DELETE /teams/{team_id}/repos/{owner}/{repo}') {
                                    if (\array_key_exists(Router\Delete\Teams::class, $this->router) == false) {
                                        $this->router[Router\Delete\Teams::class] = new Router\Delete\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Delete\Teams::class]->removeRepoLegacy($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'user') {
                if ($pathChunks[2] == 'installations') {
                    if ($pathChunks[3] == '{installation_id}') {
                        if ($pathChunks[4] == 'repositories') {
                            if ($pathChunks[5] == '{repository_id}') {
                                if ($call == 'DELETE /user/installations/{installation_id}/repositories/{repository_id}') {
                                    if (\array_key_exists(Router\Delete\Apps::class, $this->router) == false) {
                                        $this->router[Router\Delete\Apps::class] = new Router\Delete\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Delete\Apps::class]->removeRepoFromInstallationForAuthenticatedUser($params);
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
