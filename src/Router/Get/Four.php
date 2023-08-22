<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Router\Get;

use ApiClients\Client\GitHubAE\Hydrators;
use ApiClients\Client\GitHubAE\Router;
use ApiClients\Client\GitHubAE\Schema\BasicError;
use ApiClients\Client\GitHubAE\Schema\EnterpriseCommentOverview;
use ApiClients\Client\GitHubAE\Schema\EnterpriseGistOverview;
use ApiClients\Client\GitHubAE\Schema\EnterpriseHookOverview;
use ApiClients\Client\GitHubAE\Schema\EnterpriseIssueOverview;
use ApiClients\Client\GitHubAE\Schema\EnterpriseMilestoneOverview;
use ApiClients\Client\GitHubAE\Schema\EnterpriseOrganizationOverview;
use ApiClients\Client\GitHubAE\Schema\EnterpriseOverview;
use ApiClients\Client\GitHubAE\Schema\EnterprisePageOverview;
use ApiClients\Client\GitHubAE\Schema\EnterprisePullRequestOverview;
use ApiClients\Client\GitHubAE\Schema\EnterpriseRepositoryOverview;
use ApiClients\Client\GitHubAE\Schema\EnterpriseUserOverview;
use ApiClients\Client\GitHubAE\Schema\ExternalGroups;
use ApiClients\Client\GitHubAE\Schema\FullRepository;
use ApiClients\Client\GitHubAE\Schema\GistSimple;
use ApiClients\Client\GitHubAE\Schema\GitignoreTemplate;
use ApiClients\Client\GitHubAE\Schema\GlobalHook;
use ApiClients\Client\GitHubAE\Schema\GpgKey;
use ApiClients\Client\GitHubAE\Schema\Hovercard;
use ApiClients\Client\GitHubAE\Schema\Installation;
use ApiClients\Client\GitHubAE\Schema\Key;
use ApiClients\Client\GitHubAE\Schema\LicenseInfo;
use ApiClients\Client\GitHubAE\Schema\Operations\Orgs\ListAppInstallations\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHubAE\Schema\PreReceiveEnvironment;
use ApiClients\Client\GitHubAE\Schema\ProjectColumn;
use ApiClients\Client\GitHubAE\Schema\Repository;
use ApiClients\Client\GitHubAE\Schema\StarredRepository;
use ApiClients\Client\GitHubAE\Schema\Thread;
use ApiClients\Client\GitHubAE\Schema\WebhookConfig;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Four
{
    private array $router = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return |Observable<Schema\HookDeliveryItem>|Observable<Schema\AuditLogEvent>|(Observable<Schema\GistComment>|array{code: int})|(Observable<Schema\GistCommit>|(Observable<Schema\GistSimple>|array{code: int}|(Schema\GitignoreTemplate|(Schema\Thread|Observable<Schema\OrgHook>|Observable<Schema\Issue>|Observable<Schema\SimpleUser>|Observable<Schema\Migration>|Observable<Schema\Project>|Observable<Schema\MinimalRepository>|Observable<Schema\Team>|(Schema\ProjectColumn|(Observable<Schema\SimpleUser>|(Observable<Schema\ProjectColumn>|Observable<Schema\TeamDiscussion>|Observable<Schema\TeamProject>|(Schema\GpgKey|(Schema\Key|(Observable<Schema\OrgMembership>|Observable<Schema\Event>|Observable<Schema\BaseGist>|Observable<Schema\GpgKey>|Observable<Schema\KeySimple>|Observable<Schema\OrganizationSimple> */
    public function call(string $call, array $params, array $pathChunks): GlobalHook|PreReceiveEnvironment|WebhookConfig|iterable|Installation|LicenseInfo|EnterpriseOverview|EnterpriseCommentOverview|EnterpriseGistOverview|EnterpriseHookOverview|EnterpriseIssueOverview|EnterpriseMilestoneOverview|EnterpriseOrganizationOverview|EnterprisePageOverview|EnterprisePullRequestOverview|EnterpriseRepositoryOverview|EnterpriseUserOverview|GistSimple|GitignoreTemplate|Thread|ExternalGroups|Ok|ProjectColumn|FullRepository|BasicError|GpgKey|Key|Hovercard|StarredRepository|Repository
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'admin') {
                if ($pathChunks[2] === 'hooks') {
                    if ($pathChunks[3] === '{hook_id}') {
                        if ($call === 'GET /admin/hooks/{hook_id}') {
                            $matched = true;
                            if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\EnterpriseAdmin::class]->GetGlobalWebhook($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'pre-receive-environments') {
                    if ($pathChunks[3] === '{pre_receive_environment_id}') {
                        if ($call === 'GET /admin/pre-receive-environments/{pre_receive_environment_id}') {
                            $matched = true;
                            if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\EnterpriseAdmin::class]->GetPreReceiveEnvironment($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'app') {
                if ($pathChunks[2] === 'hook') {
                    if ($pathChunks[3] === 'config') {
                        if ($call === 'GET /app/hook/config') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                                $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Apps::class]->GetWebhookConfigForApp($params);
                        }
                    } elseif ($pathChunks[3] === 'deliveries') {
                        if ($call === 'GET /app/hook/deliveries') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                                $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Apps::class]->ListWebhookDeliveries($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'installations') {
                    if ($pathChunks[3] === '{installation_id}') {
                        if ($call === 'GET /app/installations/{installation_id}') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                                $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Apps::class]->GetInstallation($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'enterprise') {
                if ($pathChunks[2] === 'settings') {
                    if ($pathChunks[3] === 'license') {
                        if ($call === 'GET /enterprise/settings/license') {
                            $matched = true;
                            if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\EnterpriseAdmin::class]->GetLicenseInformation($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'stats') {
                    if ($pathChunks[3] === 'all') {
                        if ($call === 'GET /enterprise/stats/all') {
                            $matched = true;
                            if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\EnterpriseAdmin::class]->GetAllStats($params);
                        }
                    } elseif ($pathChunks[3] === 'comments') {
                        if ($call === 'GET /enterprise/stats/comments') {
                            $matched = true;
                            if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\EnterpriseAdmin::class]->GetCommentStats($params);
                        }
                    } elseif ($pathChunks[3] === 'gists') {
                        if ($call === 'GET /enterprise/stats/gists') {
                            $matched = true;
                            if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\EnterpriseAdmin::class]->GetGistStats($params);
                        }
                    } elseif ($pathChunks[3] === 'hooks') {
                        if ($call === 'GET /enterprise/stats/hooks') {
                            $matched = true;
                            if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\EnterpriseAdmin::class]->GetHooksStats($params);
                        }
                    } elseif ($pathChunks[3] === 'issues') {
                        if ($call === 'GET /enterprise/stats/issues') {
                            $matched = true;
                            if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\EnterpriseAdmin::class]->GetIssueStats($params);
                        }
                    } elseif ($pathChunks[3] === 'milestones') {
                        if ($call === 'GET /enterprise/stats/milestones') {
                            $matched = true;
                            if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\EnterpriseAdmin::class]->GetMilestoneStats($params);
                        }
                    } elseif ($pathChunks[3] === 'orgs') {
                        if ($call === 'GET /enterprise/stats/orgs') {
                            $matched = true;
                            if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\EnterpriseAdmin::class]->GetOrgStats($params);
                        }
                    } elseif ($pathChunks[3] === 'pages') {
                        if ($call === 'GET /enterprise/stats/pages') {
                            $matched = true;
                            if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\EnterpriseAdmin::class]->GetPagesStats($params);
                        }
                    } elseif ($pathChunks[3] === 'pulls') {
                        if ($call === 'GET /enterprise/stats/pulls') {
                            $matched = true;
                            if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\EnterpriseAdmin::class]->GetPullRequestStats($params);
                        }
                    } elseif ($pathChunks[3] === 'repos') {
                        if ($call === 'GET /enterprise/stats/repos') {
                            $matched = true;
                            if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\EnterpriseAdmin::class]->GetRepoStats($params);
                        }
                    } elseif ($pathChunks[3] === 'users') {
                        if ($call === 'GET /enterprise/stats/users') {
                            $matched = true;
                            if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\EnterpriseAdmin::class]->GetUserStats($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'enterprises') {
                if ($pathChunks[2] === '{enterprise}') {
                    if ($pathChunks[3] === 'audit-log') {
                        if ($call === 'GET /enterprises/{enterprise}/audit-log') {
                            $matched = true;
                            if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\EnterpriseAdmin::class]->GetAuditLog($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === '{gist_id}') {
                    if ($pathChunks[3] === 'comments') {
                        if ($call === 'GET /gists/{gist_id}/comments') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Gists::class, $this->router) === false) {
                                $this->router[Router\Get\Gists::class] = new Router\Get\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Gists::class]->ListComments($params);
                        }
                    } elseif ($pathChunks[3] === 'commits') {
                        if ($call === 'GET /gists/{gist_id}/commits') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Gists::class, $this->router) === false) {
                                $this->router[Router\Get\Gists::class] = new Router\Get\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Gists::class]->ListCommits($params);
                        }
                    } elseif ($pathChunks[3] === 'forks') {
                        if ($call === 'GET /gists/{gist_id}/forks') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Gists::class, $this->router) === false) {
                                $this->router[Router\Get\Gists::class] = new Router\Get\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Gists::class]->ListForks($params);
                        }
                    } elseif ($pathChunks[3] === 'star') {
                        if ($call === 'GET /gists/{gist_id}/star') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Gists::class, $this->router) === false) {
                                $this->router[Router\Get\Gists::class] = new Router\Get\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Gists::class]->CheckIsStarred($params);
                        }
                    } elseif ($pathChunks[3] === '{sha}') {
                        if ($call === 'GET /gists/{gist_id}/{sha}') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Gists::class, $this->router) === false) {
                                $this->router[Router\Get\Gists::class] = new Router\Get\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Gists::class]->GetRevision($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'gitignore') {
                if ($pathChunks[2] === 'templates') {
                    if ($pathChunks[3] === '{name}') {
                        if ($call === 'GET /gitignore/templates/{name}') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Gitignore::class, $this->router) === false) {
                                $this->router[Router\Get\Gitignore::class] = new Router\Get\Gitignore($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Gitignore::class]->GetTemplate($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'notifications') {
                if ($pathChunks[2] === 'threads') {
                    if ($pathChunks[3] === '{thread_id}') {
                        if ($call === 'GET /notifications/threads/{thread_id}') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                                $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Activity::class]->GetThread($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'audit-log') {
                        if ($call === 'GET /orgs/{org}/audit-log') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->GetAuditLog($params);
                        }
                    } elseif ($pathChunks[3] === 'external-groups') {
                        if ($call === 'GET /orgs/{org}/external-groups') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Teams::class]->ListExternalIdpGroupsForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'hooks') {
                        if ($call === 'GET /orgs/{org}/hooks') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->ListWebhooks($params);
                        }
                    } elseif ($pathChunks[3] === 'installation') {
                        if ($call === 'GET /orgs/{org}/installation') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                                $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Apps::class]->GetOrgInstallation($params);
                        }
                    } elseif ($pathChunks[3] === 'installations') {
                        if ($call === 'GET /orgs/{org}/installations') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->ListAppInstallations($params);
                        }
                    } elseif ($pathChunks[3] === 'issues') {
                        if ($call === 'GET /orgs/{org}/issues') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Issues::class, $this->router) === false) {
                                $this->router[Router\Get\Issues::class] = new Router\Get\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Issues::class]->ListForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'members') {
                        if ($call === 'GET /orgs/{org}/members') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->ListMembers($params);
                        }
                    } elseif ($pathChunks[3] === 'migrations') {
                        if ($call === 'GET /orgs/{org}/migrations') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Migrations::class, $this->router) === false) {
                                $this->router[Router\Get\Migrations::class] = new Router\Get\Migrations($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Migrations::class]->ListForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'outside_collaborators') {
                        if ($call === 'GET /orgs/{org}/outside_collaborators') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->ListOutsideCollaborators($params);
                        }
                    } elseif ($pathChunks[3] === 'projects') {
                        if ($call === 'GET /orgs/{org}/projects') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Projects::class, $this->router) === false) {
                                $this->router[Router\Get\Projects::class] = new Router\Get\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Projects::class]->ListForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'repos') {
                        if ($call === 'GET /orgs/{org}/repos') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Repos::class]->ListForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($call === 'GET /orgs/{org}/teams') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Teams::class]->List($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === 'columns') {
                    if ($pathChunks[3] === '{column_id}') {
                        if ($call === 'GET /projects/columns/{column_id}') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Projects::class, $this->router) === false) {
                                $this->router[Router\Get\Projects::class] = new Router\Get\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Projects::class]->GetColumn($params);
                        }
                    }
                } elseif ($pathChunks[2] === '{project_id}') {
                    if ($pathChunks[3] === 'collaborators') {
                        if ($call === 'GET /projects/{project_id}/collaborators') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Projects::class, $this->router) === false) {
                                $this->router[Router\Get\Projects::class] = new Router\Get\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Projects::class]->ListCollaborators($params);
                        }
                    } elseif ($pathChunks[3] === 'columns') {
                        if ($call === 'GET /projects/{project_id}/columns') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Projects::class, $this->router) === false) {
                                $this->router[Router\Get\Projects::class] = new Router\Get\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Projects::class]->ListColumns($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($call === 'GET /repos/{owner}/{repo}') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Repos::class]->Get($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($pathChunks[3] === 'discussions') {
                        if ($call === 'GET /teams/{team_id}/discussions') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Teams::class]->ListDiscussionsLegacy($params);
                        }
                    } elseif ($pathChunks[3] === 'members') {
                        if ($call === 'GET /teams/{team_id}/members') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Teams::class]->ListMembersLegacy($params);
                        }
                    } elseif ($pathChunks[3] === 'projects') {
                        if ($call === 'GET /teams/{team_id}/projects') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Teams::class]->ListProjectsLegacy($params);
                        }
                    } elseif ($pathChunks[3] === 'repos') {
                        if ($call === 'GET /teams/{team_id}/repos') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Teams::class]->ListReposLegacy($params);
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($call === 'GET /teams/{team_id}/teams') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Teams::class]->ListChildLegacy($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'following') {
                    if ($pathChunks[3] === '{username}') {
                        if ($call === 'GET /user/following/{username}') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Users::class]->CheckPersonIsFollowedByAuthenticated($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'gpg_keys') {
                    if ($pathChunks[3] === '{gpg_key_id}') {
                        if ($call === 'GET /user/gpg_keys/{gpg_key_id}') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Users::class]->GetGpgKeyForAuthenticatedUser($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'keys') {
                    if ($pathChunks[3] === '{key_id}') {
                        if ($call === 'GET /user/keys/{key_id}') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Users::class]->GetPublicSshKeyForAuthenticatedUser($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'memberships') {
                    if ($pathChunks[3] === 'orgs') {
                        if ($call === 'GET /user/memberships/orgs') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->ListMembershipsForAuthenticatedUser($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'users') {
                if ($pathChunks[2] === '{username}') {
                    if ($pathChunks[3] === 'events') {
                        if ($call === 'GET /users/{username}/events') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                                $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Activity::class]->ListEventsForAuthenticatedUser($params);
                        }
                    } elseif ($pathChunks[3] === 'followers') {
                        if ($call === 'GET /users/{username}/followers') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Users::class]->ListFollowersForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'following') {
                        if ($call === 'GET /users/{username}/following') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Users::class]->ListFollowingForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'gists') {
                        if ($call === 'GET /users/{username}/gists') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Gists::class, $this->router) === false) {
                                $this->router[Router\Get\Gists::class] = new Router\Get\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Gists::class]->ListForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'gpg_keys') {
                        if ($call === 'GET /users/{username}/gpg_keys') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Users::class]->ListGpgKeysForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'hovercard') {
                        if ($call === 'GET /users/{username}/hovercard') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Users::class]->GetContextForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'installation') {
                        if ($call === 'GET /users/{username}/installation') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                                $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Apps::class]->GetUserInstallation($params);
                        }
                    } elseif ($pathChunks[3] === 'keys') {
                        if ($call === 'GET /users/{username}/keys') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Users::class]->ListPublicKeysForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'orgs') {
                        if ($call === 'GET /users/{username}/orgs') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->ListForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'projects') {
                        if ($call === 'GET /users/{username}/projects') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Projects::class, $this->router) === false) {
                                $this->router[Router\Get\Projects::class] = new Router\Get\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Projects::class]->ListForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'repos') {
                        if ($call === 'GET /users/{username}/repos') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Repos::class]->ListForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'starred') {
                        if ($call === 'GET /users/{username}/starred') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                                $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Activity::class]->ListReposStarredByUser($params);
                        }
                    } elseif ($pathChunks[3] === 'subscriptions') {
                        if ($call === 'GET /users/{username}/subscriptions') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                                $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Activity::class]->ListReposWatchedByUser($params);
                        }
                    }
                }
            }
        }

        if ($matched === false) {
            throw new InvalidArgumentException();
        }
    }
}
