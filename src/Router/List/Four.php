<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Router\List;

use ApiClients\Client\GitHubAE\Routers;
use ApiClients\Client\GitHubAE\Schema;
use InvalidArgumentException;

final class Four
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return iterable<Schema\AuditLogEvent>|iterable<Schema\GistComment>|array{code:int}|iterable<Schema\GistCommit>|iterable<Schema\GistSimple>|iterable<Schema\OrgHook>|iterable<Schema\Issue>|iterable<Schema\SimpleUser>|iterable<Schema\Migration>|iterable<Schema\Project>|iterable<Schema\MinimalRepository>|iterable<Schema\Team>|iterable<Schema\ProjectColumn>|iterable<Schema\TeamDiscussion>|iterable<Schema\TeamProject>|iterable<Schema\OrgMembership>|iterable<Schema\Event>|iterable<Schema\BaseGist>|iterable<Schema\GpgKey>|iterable<Schema\KeySimple>|iterable<Schema\OrganizationSimple> */
    public function call(string $call, array $params, array $pathChunks): iterable
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'enterprises') {
                if ($pathChunks[2] === '{enterprise}') {
                    if ($pathChunks[3] === 'audit-log') {
                        if ($call === 'LIST /enterprises/{enterprise}/audit-log') {
                            return $this->routers->router🔀List🔀EnterpriseAdmin()->getAuditLogListing($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === '{gist_id}') {
                    if ($pathChunks[3] === 'comments') {
                        if ($call === 'LIST /gists/{gist_id}/comments') {
                            return $this->routers->router🔀List🔀Gists()->listCommentsListing($params);
                        }
                    } elseif ($pathChunks[3] === 'commits') {
                        if ($call === 'LIST /gists/{gist_id}/commits') {
                            return $this->routers->router🔀List🔀Gists()->listCommitsListing($params);
                        }
                    } elseif ($pathChunks[3] === 'forks') {
                        if ($call === 'LIST /gists/{gist_id}/forks') {
                            return $this->routers->router🔀List🔀Gists()->listForksListing($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'audit-log') {
                        if ($call === 'LIST /orgs/{org}/audit-log') {
                            return $this->routers->router🔀List🔀Orgs()->getAuditLogListing($params);
                        }
                    } elseif ($pathChunks[3] === 'hooks') {
                        if ($call === 'LIST /orgs/{org}/hooks') {
                            return $this->routers->router🔀List🔀Orgs()->listWebhooksListing($params);
                        }
                    } elseif ($pathChunks[3] === 'issues') {
                        if ($call === 'LIST /orgs/{org}/issues') {
                            return $this->routers->router🔀List🔀Issues()->listForOrgListing($params);
                        }
                    } elseif ($pathChunks[3] === 'members') {
                        if ($call === 'LIST /orgs/{org}/members') {
                            return $this->routers->router🔀List🔀Orgs()->listMembersListing($params);
                        }
                    } elseif ($pathChunks[3] === 'migrations') {
                        if ($call === 'LIST /orgs/{org}/migrations') {
                            return $this->routers->router🔀List🔀Migrations()->listForOrgListing($params);
                        }
                    } elseif ($pathChunks[3] === 'outside_collaborators') {
                        if ($call === 'LIST /orgs/{org}/outside_collaborators') {
                            return $this->routers->router🔀List🔀Orgs()->listOutsideCollaboratorsListing($params);
                        }
                    } elseif ($pathChunks[3] === 'projects') {
                        if ($call === 'LIST /orgs/{org}/projects') {
                            return $this->routers->router🔀List🔀Projects()->listForOrgListing($params);
                        }
                    } elseif ($pathChunks[3] === 'repos') {
                        if ($call === 'LIST /orgs/{org}/repos') {
                            return $this->routers->router🔀List🔀Repos()->listForOrgListing($params);
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($call === 'LIST /orgs/{org}/teams') {
                            return $this->routers->router🔀List🔀Teams()->listListing($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === '{project_id}') {
                    if ($pathChunks[3] === 'collaborators') {
                        if ($call === 'LIST /projects/{project_id}/collaborators') {
                            return $this->routers->router🔀List🔀Projects()->listCollaboratorsListing($params);
                        }
                    } elseif ($pathChunks[3] === 'columns') {
                        if ($call === 'LIST /projects/{project_id}/columns') {
                            return $this->routers->router🔀List🔀Projects()->listColumnsListing($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($pathChunks[3] === 'discussions') {
                        if ($call === 'LIST /teams/{team_id}/discussions') {
                            return $this->routers->router🔀List🔀Teams()->listDiscussionsLegacyListing($params);
                        }
                    } elseif ($pathChunks[3] === 'members') {
                        if ($call === 'LIST /teams/{team_id}/members') {
                            return $this->routers->router🔀List🔀Teams()->listMembersLegacyListing($params);
                        }
                    } elseif ($pathChunks[3] === 'projects') {
                        if ($call === 'LIST /teams/{team_id}/projects') {
                            return $this->routers->router🔀List🔀Teams()->listProjectsLegacyListing($params);
                        }
                    } elseif ($pathChunks[3] === 'repos') {
                        if ($call === 'LIST /teams/{team_id}/repos') {
                            return $this->routers->router🔀List🔀Teams()->listReposLegacyListing($params);
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($call === 'LIST /teams/{team_id}/teams') {
                            return $this->routers->router🔀List🔀Teams()->listChildLegacyListing($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'memberships') {
                    if ($pathChunks[3] === 'orgs') {
                        if ($call === 'LIST /user/memberships/orgs') {
                            return $this->routers->router🔀List🔀Orgs()->listMembershipsForAuthenticatedUserListing($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'users') {
                if ($pathChunks[2] === '{username}') {
                    if ($pathChunks[3] === 'events') {
                        if ($call === 'LIST /users/{username}/events') {
                            return $this->routers->router🔀List🔀Activity()->listEventsForAuthenticatedUserListing($params);
                        }
                    } elseif ($pathChunks[3] === 'followers') {
                        if ($call === 'LIST /users/{username}/followers') {
                            return $this->routers->router🔀List🔀Users()->listFollowersForUserListing($params);
                        }
                    } elseif ($pathChunks[3] === 'following') {
                        if ($call === 'LIST /users/{username}/following') {
                            return $this->routers->router🔀List🔀Users()->listFollowingForUserListing($params);
                        }
                    } elseif ($pathChunks[3] === 'gists') {
                        if ($call === 'LIST /users/{username}/gists') {
                            return $this->routers->router🔀List🔀Gists()->listForUserListing($params);
                        }
                    } elseif ($pathChunks[3] === 'gpg_keys') {
                        if ($call === 'LIST /users/{username}/gpg_keys') {
                            return $this->routers->router🔀List🔀Users()->listGpgKeysForUserListing($params);
                        }
                    } elseif ($pathChunks[3] === 'keys') {
                        if ($call === 'LIST /users/{username}/keys') {
                            return $this->routers->router🔀List🔀Users()->listPublicKeysForUserListing($params);
                        }
                    } elseif ($pathChunks[3] === 'orgs') {
                        if ($call === 'LIST /users/{username}/orgs') {
                            return $this->routers->router🔀List🔀Orgs()->listForUserListing($params);
                        }
                    } elseif ($pathChunks[3] === 'projects') {
                        if ($call === 'LIST /users/{username}/projects') {
                            return $this->routers->router🔀List🔀Projects()->listForUserListing($params);
                        }
                    } elseif ($pathChunks[3] === 'repos') {
                        if ($call === 'LIST /users/{username}/repos') {
                            return $this->routers->router🔀List🔀Repos()->listForUserListing($params);
                        }
                    } elseif ($pathChunks[3] === 'subscriptions') {
                        if ($call === 'LIST /users/{username}/subscriptions') {
                            return $this->routers->router🔀List🔀Activity()->listReposWatchedByUserListing($params);
                        }
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
