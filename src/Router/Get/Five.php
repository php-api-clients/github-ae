<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Router\Get;

use ApiClients\Client\GitHubAE\Routers;
use ApiClients\Client\GitHubAE\Schema\ActionsEnterprisePermissions;
use ApiClients\Client\GitHubAE\Schema\ActionsOrganizationPermissions;
use ApiClients\Client\GitHubAE\Schema\BasicError;
use ApiClients\Client\GitHubAE\Schema\ContentFile;
use ApiClients\Client\GitHubAE\Schema\ExternalGroup;
use ApiClients\Client\GitHubAE\Schema\GistComment;
use ApiClients\Client\GitHubAE\Schema\HookDelivery;
use ApiClients\Client\GitHubAE\Schema\Installation;
use ApiClients\Client\GitHubAE\Schema\Language;
use ApiClients\Client\GitHubAE\Schema\LicenseContent;
use ApiClients\Client\GitHubAE\Schema\Migration;
use ApiClients\Client\GitHubAE\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHubAE\Schema\OrgHook;
use ApiClients\Client\GitHubAE\Schema\OrgMembership;
use ApiClients\Client\GitHubAE\Schema\Page;
use ApiClients\Client\GitHubAE\Schema\ProjectCard;
use ApiClients\Client\GitHubAE\Schema\RepositorySubscription;
use ApiClients\Client\GitHubAE\Schema\SimpleUser;
use ApiClients\Client\GitHubAE\Schema\Stargazer;
use ApiClients\Client\GitHubAE\Schema\TeamDiscussion;
use ApiClients\Client\GitHubAE\Schema\TeamFull;
use ApiClients\Client\GitHubAE\Schema\TeamMembership;
use ApiClients\Client\GitHubAE\Schema\TeamProject;
use ApiClients\Client\GitHubAE\Schema\ThreadSubscription;
use ApiClients\Client\GitHubAE\Schema\Topic;
use InvalidArgumentException;

final class Five
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return |iterable<Schema\OrganizationSecretScanningAlert>|Schema\GistComment|array{code:int}|Schema\ThreadSubscription|iterable<Schema\CodeScanningOrganizationAlertItems>|array{code:int,location:string}|Schema\ProjectCard|iterable<Schema\ProjectCard>|iterable<Schema\SimpleUser>|iterable<Schema\Autolink>|iterable<Schema\ShortBranch>|iterable<Schema\Collaborator>|iterable<Schema\CommitComment>|iterable<Schema\Commit>|iterable<Schema\Contributor>|iterable<Schema\Deployment>|iterable<Schema\Event>|iterable<Schema\MinimalRepository>|iterable<Schema\Hook>|iterable<Schema\RepositoryInvitation>|iterable<Schema\Issue>|Schema\BasicError|iterable<Schema\DeployKey>|iterable<Schema\Label>|iterable<Schema\Milestone>|iterable<Schema\Thread>|iterable<Schema\Project>|iterable<Schema\PullRequestSimple>|iterable<Schema\Release>|Schema\SimpleUser|Schema\Stargazer|Schema\RepositorySubscription|iterable<Schema\Tag>|iterable<Schema\Team>|Schema\TeamProject|Schema\Operations\Apps\ListInstallationReposForAuthenticatedUser\Response\ApplicationJson\Ok */
    public function call(string $call, array $params, array $pathChunks): HookDelivery|ActionsEnterprisePermissions|Ok|\ApiClients\Client\GitHubAE\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise\Response\ApplicationJson\Ok|iterable|GistComment|ThreadSubscription|ActionsOrganizationPermissions|\ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListSelfHostedRunnerGroupsForOrg\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListSelfHostedRunnersForOrg\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListOrgSecrets\Response\ApplicationJson\Ok|ExternalGroup|OrgHook|OrgMembership|Migration|TeamFull|ProjectCard|\ApiClients\Client\GitHubAE\Schema\Operations\Repos\GetAllEnvironments\Response\ApplicationJson\Ok|Installation|BasicError|Language|LicenseContent|Page|ContentFile|SimpleUser|Stargazer|RepositorySubscription|Topic|TeamDiscussion|TeamMembership|TeamProject|\ApiClients\Client\GitHubAE\Schema\Operations\Apps\ListInstallationReposForAuthenticatedUser\Response\ApplicationJson\Ok
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'app') {
                if ($pathChunks[2] === 'hook') {
                    if ($pathChunks[3] === 'deliveries') {
                        if ($pathChunks[4] === '{delivery_id}') {
                            if ($call === 'GET /app/hook/deliveries/{delivery_id}') {
                                return $this->routers->router🔀Get🔀Apps()->getWebhookDelivery($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'enterprises') {
                if ($pathChunks[2] === '{enterprise}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'permissions') {
                            if ($call === 'GET /enterprises/{enterprise}/actions/permissions') {
                                return $this->routers->router🔀Get🔀EnterpriseAdmin()->getGithubActionsPermissionsEnterprise($params);
                            }
                        } elseif ($pathChunks[4] === 'runner-groups') {
                            if ($call === 'GET /enterprises/{enterprise}/actions/runner-groups') {
                                return $this->routers->router🔀Get🔀EnterpriseAdmin()->listSelfHostedRunnerGroupsForEnterprise($params);
                            }
                        } elseif ($pathChunks[4] === 'runners') {
                            if ($call === 'GET /enterprises/{enterprise}/actions/runners') {
                                return $this->routers->router🔀Get🔀EnterpriseAdmin()->listSelfHostedRunnersForEnterprise($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'secret-scanning') {
                        if ($pathChunks[4] === 'alerts') {
                            if ($call === 'GET /enterprises/{enterprise}/secret-scanning/alerts') {
                                return $this->routers->router🔀Get🔀SecretScanning()->listAlertsForEnterprise($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === '{gist_id}') {
                    if ($pathChunks[3] === 'comments') {
                        if ($pathChunks[4] === '{comment_id}') {
                            if ($call === 'GET /gists/{gist_id}/comments/{comment_id}') {
                                return $this->routers->router🔀Get🔀Gists()->getComment($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'notifications') {
                if ($pathChunks[2] === 'threads') {
                    if ($pathChunks[3] === '{thread_id}') {
                        if ($pathChunks[4] === 'subscription') {
                            if ($call === 'GET /notifications/threads/{thread_id}/subscription') {
                                return $this->routers->router🔀Get🔀Activity()->getThreadSubscriptionForAuthenticatedUser($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'permissions') {
                            if ($call === 'GET /orgs/{org}/actions/permissions') {
                                return $this->routers->router🔀Get🔀Actions()->getGithubActionsPermissionsOrganization($params);
                            }
                        } elseif ($pathChunks[4] === 'runner-groups') {
                            if ($call === 'GET /orgs/{org}/actions/runner-groups') {
                                return $this->routers->router🔀Get🔀Actions()->listSelfHostedRunnerGroupsForOrg($params);
                            }
                        } elseif ($pathChunks[4] === 'runners') {
                            if ($call === 'GET /orgs/{org}/actions/runners') {
                                return $this->routers->router🔀Get🔀Actions()->listSelfHostedRunnersForOrg($params);
                            }
                        } elseif ($pathChunks[4] === 'secrets') {
                            if ($call === 'GET /orgs/{org}/actions/secrets') {
                                return $this->routers->router🔀Get🔀Actions()->listOrgSecrets($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'code-scanning') {
                        if ($pathChunks[4] === 'alerts') {
                            if ($call === 'GET /orgs/{org}/code-scanning/alerts') {
                                return $this->routers->router🔀Get🔀CodeScanning()->listAlertsForOrg($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'external-group') {
                        if ($pathChunks[4] === '{group_id}') {
                            if ($call === 'GET /orgs/{org}/external-group/{group_id}') {
                                return $this->routers->router🔀Get🔀Teams()->externalIdpGroupInfoForOrg($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'hooks') {
                        if ($pathChunks[4] === '{hook_id}') {
                            if ($call === 'GET /orgs/{org}/hooks/{hook_id}') {
                                return $this->routers->router🔀Get🔀Orgs()->getWebhook($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'members') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'GET /orgs/{org}/members/{username}') {
                                return $this->routers->router🔀Get🔀Orgs()->checkMembershipForUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'memberships') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'GET /orgs/{org}/memberships/{username}') {
                                return $this->routers->router🔀Get🔀Orgs()->getMembershipForUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'migrations') {
                        if ($pathChunks[4] === '{migration_id}') {
                            if ($call === 'GET /orgs/{org}/migrations/{migration_id}') {
                                return $this->routers->router🔀Get🔀Migrations()->getStatusForOrg($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_slug}') {
                            if ($call === 'GET /orgs/{org}/teams/{team_slug}') {
                                return $this->routers->router🔀Get🔀Teams()->getByName($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === 'columns') {
                    if ($pathChunks[3] === 'cards') {
                        if ($pathChunks[4] === '{card_id}') {
                            if ($call === 'GET /projects/columns/cards/{card_id}') {
                                return $this->routers->router🔀Get🔀Projects()->getCard($params);
                            }
                        }
                    } elseif ($pathChunks[3] === '{column_id}') {
                        if ($pathChunks[4] === 'cards') {
                            if ($call === 'GET /projects/columns/{column_id}/cards') {
                                return $this->routers->router🔀Get🔀Projects()->listCards($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'assignees') {
                            if ($call === 'GET /repos/{owner}/{repo}/assignees') {
                                return $this->routers->router🔀Get🔀Issues()->listAssignees($params);
                            }
                        } elseif ($pathChunks[4] === 'autolinks') {
                            if ($call === 'GET /repos/{owner}/{repo}/autolinks') {
                                return $this->routers->router🔀Get🔀Repos()->listAutolinks($params);
                            }
                        } elseif ($pathChunks[4] === 'branches') {
                            if ($call === 'GET /repos/{owner}/{repo}/branches') {
                                return $this->routers->router🔀Get🔀Repos()->listBranches($params);
                            }
                        } elseif ($pathChunks[4] === 'collaborators') {
                            if ($call === 'GET /repos/{owner}/{repo}/collaborators') {
                                return $this->routers->router🔀Get🔀Repos()->listCollaborators($params);
                            }
                        } elseif ($pathChunks[4] === 'comments') {
                            if ($call === 'GET /repos/{owner}/{repo}/comments') {
                                return $this->routers->router🔀Get🔀Repos()->listCommitCommentsForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'commits') {
                            if ($call === 'GET /repos/{owner}/{repo}/commits') {
                                return $this->routers->router🔀Get🔀Repos()->listCommits($params);
                            }
                        } elseif ($pathChunks[4] === 'contributors') {
                            if ($call === 'GET /repos/{owner}/{repo}/contributors') {
                                return $this->routers->router🔀Get🔀Repos()->listContributors($params);
                            }
                        } elseif ($pathChunks[4] === 'deployments') {
                            if ($call === 'GET /repos/{owner}/{repo}/deployments') {
                                return $this->routers->router🔀Get🔀Repos()->listDeployments($params);
                            }
                        } elseif ($pathChunks[4] === 'environments') {
                            if ($call === 'GET /repos/{owner}/{repo}/environments') {
                                return $this->routers->router🔀Get🔀Repos()->getAllEnvironments($params);
                            }
                        } elseif ($pathChunks[4] === 'events') {
                            if ($call === 'GET /repos/{owner}/{repo}/events') {
                                return $this->routers->router🔀Get🔀Activity()->listRepoEvents($params);
                            }
                        } elseif ($pathChunks[4] === 'forks') {
                            if ($call === 'GET /repos/{owner}/{repo}/forks') {
                                return $this->routers->router🔀Get🔀Repos()->listForks($params);
                            }
                        } elseif ($pathChunks[4] === 'hooks') {
                            if ($call === 'GET /repos/{owner}/{repo}/hooks') {
                                return $this->routers->router🔀Get🔀Repos()->listWebhooks($params);
                            }
                        } elseif ($pathChunks[4] === 'installation') {
                            if ($call === 'GET /repos/{owner}/{repo}/installation') {
                                return $this->routers->router🔀Get🔀Apps()->getRepoInstallation($params);
                            }
                        } elseif ($pathChunks[4] === 'invitations') {
                            if ($call === 'GET /repos/{owner}/{repo}/invitations') {
                                return $this->routers->router🔀Get🔀Repos()->listInvitations($params);
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($call === 'GET /repos/{owner}/{repo}/issues') {
                                return $this->routers->router🔀Get🔀Issues()->listForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'keys') {
                            if ($call === 'GET /repos/{owner}/{repo}/keys') {
                                return $this->routers->router🔀Get🔀Repos()->listDeployKeys($params);
                            }
                        } elseif ($pathChunks[4] === 'labels') {
                            if ($call === 'GET /repos/{owner}/{repo}/labels') {
                                return $this->routers->router🔀Get🔀Issues()->listLabelsForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'languages') {
                            if ($call === 'GET /repos/{owner}/{repo}/languages') {
                                return $this->routers->router🔀Get🔀Repos()->listLanguages($params);
                            }
                        } elseif ($pathChunks[4] === 'license') {
                            if ($call === 'GET /repos/{owner}/{repo}/license') {
                                return $this->routers->router🔀Get🔀Licenses()->getForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'milestones') {
                            if ($call === 'GET /repos/{owner}/{repo}/milestones') {
                                return $this->routers->router🔀Get🔀Issues()->listMilestones($params);
                            }
                        } elseif ($pathChunks[4] === 'notifications') {
                            if ($call === 'GET /repos/{owner}/{repo}/notifications') {
                                return $this->routers->router🔀Get🔀Activity()->listRepoNotificationsForAuthenticatedUser($params);
                            }
                        } elseif ($pathChunks[4] === 'pages') {
                            if ($call === 'GET /repos/{owner}/{repo}/pages') {
                                return $this->routers->router🔀Get🔀Repos()->getPages($params);
                            }
                        } elseif ($pathChunks[4] === 'projects') {
                            if ($call === 'GET /repos/{owner}/{repo}/projects') {
                                return $this->routers->router🔀Get🔀Projects()->listForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($call === 'GET /repos/{owner}/{repo}/pulls') {
                                return $this->routers->router🔀Get🔀Pulls()->list($params);
                            }
                        } elseif ($pathChunks[4] === 'readme') {
                            if ($call === 'GET /repos/{owner}/{repo}/readme') {
                                return $this->routers->router🔀Get🔀Repos()->getReadme($params);
                            }
                        } elseif ($pathChunks[4] === 'releases') {
                            if ($call === 'GET /repos/{owner}/{repo}/releases') {
                                return $this->routers->router🔀Get🔀Repos()->listReleases($params);
                            }
                        } elseif ($pathChunks[4] === 'stargazers') {
                            if ($call === 'GET /repos/{owner}/{repo}/stargazers') {
                                return $this->routers->router🔀Get🔀Activity()->listStargazersForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'subscribers') {
                            if ($call === 'GET /repos/{owner}/{repo}/subscribers') {
                                return $this->routers->router🔀Get🔀Activity()->listWatchersForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'subscription') {
                            if ($call === 'GET /repos/{owner}/{repo}/subscription') {
                                return $this->routers->router🔀Get🔀Activity()->getRepoSubscription($params);
                            }
                        } elseif ($pathChunks[4] === 'tags') {
                            if ($call === 'GET /repos/{owner}/{repo}/tags') {
                                return $this->routers->router🔀Get🔀Repos()->listTags($params);
                            }
                        } elseif ($pathChunks[4] === 'teams') {
                            if ($call === 'GET /repos/{owner}/{repo}/teams') {
                                return $this->routers->router🔀Get🔀Repos()->listTeams($params);
                            }
                        } elseif ($pathChunks[4] === 'topics') {
                            if ($call === 'GET /repos/{owner}/{repo}/topics') {
                                return $this->routers->router🔀Get🔀Repos()->getAllTopics($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($pathChunks[3] === 'discussions') {
                        if ($pathChunks[4] === '{discussion_number}') {
                            if ($call === 'GET /teams/{team_id}/discussions/{discussion_number}') {
                                return $this->routers->router🔀Get🔀Teams()->getDiscussionLegacy($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'members') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'GET /teams/{team_id}/members/{username}') {
                                return $this->routers->router🔀Get🔀Teams()->getMemberLegacy($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'memberships') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'GET /teams/{team_id}/memberships/{username}') {
                                return $this->routers->router🔀Get🔀Teams()->getMembershipForUserLegacy($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'projects') {
                        if ($pathChunks[4] === '{project_id}') {
                            if ($call === 'GET /teams/{team_id}/projects/{project_id}') {
                                return $this->routers->router🔀Get🔀Teams()->checkPermissionsForProjectLegacy($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'installations') {
                    if ($pathChunks[3] === '{installation_id}') {
                        if ($pathChunks[4] === 'repositories') {
                            if ($call === 'GET /user/installations/{installation_id}/repositories') {
                                return $this->routers->router🔀Get🔀Apps()->listInstallationReposForAuthenticatedUser($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] === 'memberships') {
                    if ($pathChunks[3] === 'orgs') {
                        if ($pathChunks[4] === '{org}') {
                            if ($call === 'GET /user/memberships/orgs/{org}') {
                                return $this->routers->router🔀Get🔀Orgs()->getMembershipForAuthenticatedUser($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] === 'migrations') {
                    if ($pathChunks[3] === '{migration_id}') {
                        if ($pathChunks[4] === 'archive') {
                            if ($call === 'GET /user/migrations/{migration_id}/archive') {
                                return $this->routers->router🔀Get🔀Migrations()->getArchiveForAuthenticatedUser($params);
                            }
                        } elseif ($pathChunks[4] === 'repositories') {
                            if ($call === 'GET /user/migrations/{migration_id}/repositories') {
                                return $this->routers->router🔀Get🔀Migrations()->listReposForAuthenticatedUser($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] === 'starred') {
                    if ($pathChunks[3] === '{owner}') {
                        if ($pathChunks[4] === '{repo}') {
                            if ($call === 'GET /user/starred/{owner}/{repo}') {
                                return $this->routers->router🔀Get🔀Activity()->checkRepoIsStarredByAuthenticatedUser($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'users') {
                if ($pathChunks[2] === '{username}') {
                    if ($pathChunks[3] === 'following') {
                        if ($pathChunks[4] === '{target_user}') {
                            if ($call === 'GET /users/{username}/following/{target_user}') {
                                return $this->routers->router🔀Get🔀Users()->checkFollowingForUser($params);
                            }
                        }
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
