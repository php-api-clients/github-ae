<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Router\Put;

use ApiClients\Client\GitHubAE\Routers;
use ApiClients\Client\GitHubAE\Schema\EmptyObject;
use ApiClients\Client\GitHubAE\Schema\Environment;
use ApiClients\Client\GitHubAE\Schema\FileCommit;
use ApiClients\Client\GitHubAE\Schema\RepositoryInvitation;
use InvalidArgumentException;

final class Six
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return array{code:int}|Schema\EmptyObject|Schema\RepositoryInvitation| */
    public function call(string $call, array $params, array $pathChunks): EmptyObject|RepositoryInvitation|FileCommit|Environment|array
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'enterprises') {
                if ($pathChunks[2] === '{enterprise}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'permissions') {
                            if ($pathChunks[5] === 'organizations') {
                                if ($call === 'PUT /enterprises/{enterprise}/actions/permissions/organizations') {
                                    return $this->routers->router🔀Put🔀EnterpriseAdmin()->setSelectedOrganizationsEnabledGithubActionsEnterprise($params);
                                }
                            } elseif ($pathChunks[5] === 'selected-actions') {
                                if ($call === 'PUT /enterprises/{enterprise}/actions/permissions/selected-actions') {
                                    return $this->routers->router🔀Put🔀EnterpriseAdmin()->setAllowedActionsEnterprise($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'permissions') {
                            if ($pathChunks[5] === 'repositories') {
                                if ($call === 'PUT /orgs/{org}/actions/permissions/repositories') {
                                    return $this->routers->router🔀Put🔀Actions()->setSelectedRepositoriesEnabledGithubActionsOrganization($params);
                                }
                            } elseif ($pathChunks[5] === 'selected-actions') {
                                if ($call === 'PUT /orgs/{org}/actions/permissions/selected-actions') {
                                    return $this->routers->router🔀Put🔀Actions()->setAllowedActionsOrganization($params);
                                }
                            } elseif ($pathChunks[5] === 'workflow') {
                                if ($call === 'PUT /orgs/{org}/actions/permissions/workflow') {
                                    return $this->routers->router🔀Put🔀Actions()->setGithubActionsDefaultWorkflowPermissionsOrganization($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'secrets') {
                            if ($pathChunks[5] === '{secret_name}') {
                                if ($call === 'PUT /orgs/{org}/actions/secrets/{secret_name}') {
                                    return $this->routers->router🔀Put🔀Actions()->createOrUpdateOrgSecret($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'actions') {
                            if ($pathChunks[5] === 'permissions') {
                                if ($call === 'PUT /repos/{owner}/{repo}/actions/permissions') {
                                    return $this->routers->router🔀Put🔀Actions()->setGithubActionsPermissionsRepository($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'collaborators') {
                            if ($pathChunks[5] === '{username}') {
                                if ($call === 'PUT /repos/{owner}/{repo}/collaborators/{username}') {
                                    return $this->routers->router🔀Put🔀Repos()->addCollaborator($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'contents') {
                            if ($pathChunks[5] === '{path}') {
                                if ($call === 'PUT /repos/{owner}/{repo}/contents/{path}') {
                                    return $this->routers->router🔀Put🔀Repos()->createOrUpdateFileContents($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'environments') {
                            if ($pathChunks[5] === '{environment_name}') {
                                if ($call === 'PUT /repos/{owner}/{repo}/environments/{environment_name}') {
                                    return $this->routers->router🔀Put🔀Repos()->createOrUpdateEnvironment($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($pathChunks[3] === 'repos') {
                        if ($pathChunks[4] === '{owner}') {
                            if ($pathChunks[5] === '{repo}') {
                                if ($call === 'PUT /teams/{team_id}/repos/{owner}/{repo}') {
                                    return $this->routers->router🔀Put🔀Teams()->addOrUpdateRepoPermissionsLegacy($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'installations') {
                    if ($pathChunks[3] === '{installation_id}') {
                        if ($pathChunks[4] === 'repositories') {
                            if ($pathChunks[5] === '{repository_id}') {
                                if ($call === 'PUT /user/installations/{installation_id}/repositories/{repository_id}') {
                                    return $this->routers->router🔀Put🔀Apps()->addRepoToInstallationForAuthenticatedUser($params);
                                }
                            }
                        }
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
