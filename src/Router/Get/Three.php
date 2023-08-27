<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Router\Get;

use ApiClients\Client\GitHubAE\Routers;
use ApiClients\Client\GitHubAE\Schema\Announcement;
use ApiClients\Client\GitHubAE\Schema\CodeOfConduct;
use ApiClients\Client\GitHubAE\Schema\GistSimple;
use ApiClients\Client\GitHubAE\Schema\Integration;
use ApiClients\Client\GitHubAE\Schema\License;
use ApiClients\Client\GitHubAE\Schema\Operations\Apps\ListInstallationsForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHubAE\Schema\Operations\Apps\ListReposAccessibleToInstallation\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHubAE\Schema\OrganizationFull;
use ApiClients\Client\GitHubAE\Schema\PrivateUser;
use ApiClients\Client\GitHubAE\Schema\Project;
use ApiClients\Client\GitHubAE\Schema\PublicUser;
use ApiClients\Client\GitHubAE\Schema\TeamFull;
use InvalidArgumentException;

final class Three
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return iterable<Schema\GlobalHook>|iterable<Schema\PublicKeyFull>|iterable<Schema\PreReceiveEnvironment>|iterable<Schema\Authorization>|iterable<Schema\IntegrationInstallationRequest>|array{code:int}|iterable<Schema\Installation>||Schema\CodeOfConduct|iterable<Schema\BaseGist>|Schema\GistSimple|Observable<string>|Schema\Operations\Apps\ListReposAccessibleToInstallation\Response\ApplicationJson\Ok|Schema\License|Schema\Project|Schema\Operations\Search\Code\Response\ApplicationJson\Ok|Schema\Operations\Search\Commits\Response\ApplicationJson\Ok|Schema\Operations\Search\IssuesAndPullRequests\Response\ApplicationJson\Ok|Schema\Operations\Search\Labels\Response\ApplicationJson\Ok|Schema\Operations\Search\Repos\Response\ApplicationJson\Ok|Schema\Operations\Search\Topics\Response\ApplicationJson\Ok|Schema\Operations\Search\Users\Response\ApplicationJson\Ok|iterable<Schema\SimpleUser>|iterable<Schema\GpgKey>|Schema\Operations\Apps\ListInstallationsForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|iterable<Schema\Issue>|iterable<Schema\Key>|iterable<Schema\Migration>|iterable<Schema\OrganizationSimple>|iterable<Schema\Repository>|iterable<Schema\RepositoryInvitation>|iterable<Schema\MinimalRepository>|iterable<Schema\TeamFull>|Schema\PrivateUser|Schema\PublicUser */
    public function call(string $call, array $params, array $pathChunks): iterable|Integration|CodeOfConduct|Announcement|GistSimple|Ok|License|OrganizationFull|Project|\ApiClients\Client\GitHubAE\Schema\Operations\Search\Code\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\Operations\Search\Commits\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\Operations\Search\IssuesAndPullRequests\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\Operations\Search\Labels\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\Operations\Search\Repos\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\Operations\Search\Topics\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\Operations\Search\Users\Response\ApplicationJson\Ok|TeamFull|Json|PrivateUser|PublicUser
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'admin') {
                if ($pathChunks[2] === 'hooks') {
                    if ($call === 'GET /admin/hooks') {
                        return $this->routers->router🔀Get🔀EnterpriseAdmin()->listGlobalWebhooks($params);
                    }
                } elseif ($pathChunks[2] === 'keys') {
                    if ($call === 'GET /admin/keys') {
                        return $this->routers->router🔀Get🔀EnterpriseAdmin()->listPublicKeys($params);
                    }
                } elseif ($pathChunks[2] === 'pre-receive-environments') {
                    if ($call === 'GET /admin/pre-receive-environments') {
                        return $this->routers->router🔀Get🔀EnterpriseAdmin()->listPreReceiveEnvironments($params);
                    }
                } elseif ($pathChunks[2] === 'tokens') {
                    if ($call === 'GET /admin/tokens') {
                        return $this->routers->router🔀Get🔀EnterpriseAdmin()->listPersonalAccessTokens($params);
                    }
                }
            } elseif ($pathChunks[1] === 'app') {
                if ($pathChunks[2] === 'installation-requests') {
                    if ($call === 'GET /app/installation-requests') {
                        return $this->routers->router🔀Get🔀Apps()->listInstallationRequestsForAuthenticatedApp($params);
                    }
                } elseif ($pathChunks[2] === 'installations') {
                    if ($call === 'GET /app/installations') {
                        return $this->routers->router🔀Get🔀Apps()->listInstallations($params);
                    }
                }
            } elseif ($pathChunks[1] === 'apps') {
                if ($pathChunks[2] === '{app_slug}') {
                    if ($call === 'GET /apps/{app_slug}') {
                        return $this->routers->router🔀Get🔀Apps()->getBySlug($params);
                    }
                }
            } elseif ($pathChunks[1] === 'codes_of_conduct') {
                if ($pathChunks[2] === '{key}') {
                    if ($call === 'GET /codes_of_conduct/{key}') {
                        return $this->routers->router🔀Get🔀CodesOfConduct()->getConductCode($params);
                    }
                }
            } elseif ($pathChunks[1] === 'enterprise') {
                if ($pathChunks[2] === 'announcement') {
                    if ($call === 'GET /enterprise/announcement') {
                        return $this->routers->router🔀Get🔀EnterpriseAdmin()->getAnnouncement($params);
                    }
                }
            } elseif ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === 'public') {
                    if ($call === 'GET /gists/public') {
                        return $this->routers->router🔀Get🔀Gists()->listPublic($params);
                    }
                } elseif ($pathChunks[2] === 'starred') {
                    if ($call === 'GET /gists/starred') {
                        return $this->routers->router🔀Get🔀Gists()->listStarred($params);
                    }
                } elseif ($pathChunks[2] === '{gist_id}') {
                    if ($call === 'GET /gists/{gist_id}') {
                        return $this->routers->router🔀Get🔀Gists()->get($params);
                    }
                }
            } elseif ($pathChunks[1] === 'gitignore') {
                if ($pathChunks[2] === 'templates') {
                    if ($call === 'GET /gitignore/templates') {
                        return $this->routers->router🔀Get🔀Gitignore()->getAllTemplates($params);
                    }
                }
            } elseif ($pathChunks[1] === 'installation') {
                if ($pathChunks[2] === 'repositories') {
                    if ($call === 'GET /installation/repositories') {
                        return $this->routers->router🔀Get🔀Apps()->listReposAccessibleToInstallation($params);
                    }
                }
            } elseif ($pathChunks[1] === 'licenses') {
                if ($pathChunks[2] === '{license}') {
                    if ($call === 'GET /licenses/{license}') {
                        return $this->routers->router🔀Get🔀Licenses()->get($params);
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($call === 'GET /orgs/{org}') {
                        return $this->routers->router🔀Get🔀Orgs()->get($params);
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === '{project_id}') {
                    if ($call === 'GET /projects/{project_id}') {
                        return $this->routers->router🔀Get🔀Projects()->get($params);
                    }
                }
            } elseif ($pathChunks[1] === 'search') {
                if ($pathChunks[2] === 'code') {
                    if ($call === 'GET /search/code') {
                        return $this->routers->router🔀Get🔀Search()->code($params);
                    }
                } elseif ($pathChunks[2] === 'commits') {
                    if ($call === 'GET /search/commits') {
                        return $this->routers->router🔀Get🔀Search()->commits($params);
                    }
                } elseif ($pathChunks[2] === 'issues') {
                    if ($call === 'GET /search/issues') {
                        return $this->routers->router🔀Get🔀Search()->issuesAndPullRequests($params);
                    }
                } elseif ($pathChunks[2] === 'labels') {
                    if ($call === 'GET /search/labels') {
                        return $this->routers->router🔀Get🔀Search()->labels($params);
                    }
                } elseif ($pathChunks[2] === 'repositories') {
                    if ($call === 'GET /search/repositories') {
                        return $this->routers->router🔀Get🔀Search()->repos($params);
                    }
                } elseif ($pathChunks[2] === 'topics') {
                    if ($call === 'GET /search/topics') {
                        return $this->routers->router🔀Get🔀Search()->topics($params);
                    }
                } elseif ($pathChunks[2] === 'users') {
                    if ($call === 'GET /search/users') {
                        return $this->routers->router🔀Get🔀Search()->users($params);
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($call === 'GET /teams/{team_id}') {
                        return $this->routers->router🔀Get🔀Teams()->getLegacy($params);
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'followers') {
                    if ($call === 'GET /user/followers') {
                        return $this->routers->router🔀Get🔀Users()->listFollowersForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'following') {
                    if ($call === 'GET /user/following') {
                        return $this->routers->router🔀Get🔀Users()->listFollowedByAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'gpg_keys') {
                    if ($call === 'GET /user/gpg_keys') {
                        return $this->routers->router🔀Get🔀Users()->listGpgKeysForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'installations') {
                    if ($call === 'GET /user/installations') {
                        return $this->routers->router🔀Get🔀Apps()->listInstallationsForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'issues') {
                    if ($call === 'GET /user/issues') {
                        return $this->routers->router🔀Get🔀Issues()->listForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'keys') {
                    if ($call === 'GET /user/keys') {
                        return $this->routers->router🔀Get🔀Users()->listPublicSshKeysForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'migrations') {
                    if ($call === 'GET /user/migrations') {
                        return $this->routers->router🔀Get🔀Migrations()->listForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'orgs') {
                    if ($call === 'GET /user/orgs') {
                        return $this->routers->router🔀Get🔀Orgs()->listForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'repos') {
                    if ($call === 'GET /user/repos') {
                        return $this->routers->router🔀Get🔀Repos()->listForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'repository_invitations') {
                    if ($call === 'GET /user/repository_invitations') {
                        return $this->routers->router🔀Get🔀Repos()->listInvitationsForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'starred') {
                    if ($call === 'GET /user/starred') {
                        return $this->routers->router🔀Get🔀Activity()->listReposStarredByAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'subscriptions') {
                    if ($call === 'GET /user/subscriptions') {
                        return $this->routers->router🔀Get🔀Activity()->listWatchedReposForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'teams') {
                    if ($call === 'GET /user/teams') {
                        return $this->routers->router🔀Get🔀Teams()->listForAuthenticatedUser($params);
                    }
                }
            } elseif ($pathChunks[1] === 'users') {
                if ($pathChunks[2] === '{username}') {
                    if ($call === 'GET /users/{username}') {
                        return $this->routers->router🔀Get🔀Users()->getByUsername($params);
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
