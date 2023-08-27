<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Router\List;

use ApiClients\Client\GitHubAE\Routers;
use ApiClients\Client\GitHubAE\Schema;
use InvalidArgumentException;

final class Three
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return iterable<Schema\GlobalHook>|iterable<Schema\PublicKeyFull>|iterable<Schema\PreReceiveEnvironment>|iterable<Schema\Authorization>|iterable<Schema\IntegrationInstallationRequest>|array{code:int}|iterable<Schema\Installation>|iterable<Schema\BaseGist>|iterable<Schema\SimpleUser>|iterable<Schema\GpgKey>|iterable<Schema\Issue>|iterable<Schema\Key>|iterable<Schema\Migration>|iterable<Schema\OrganizationSimple>|iterable<Schema\Repository>|iterable<Schema\RepositoryInvitation>|iterable<Schema\MinimalRepository>|iterable<Schema\TeamFull> */
    public function call(string $call, array $params, array $pathChunks): iterable
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'admin') {
                if ($pathChunks[2] === 'hooks') {
                    if ($call === 'LIST /admin/hooks') {
                        return $this->routers->router🔀List🔀EnterpriseAdmin()->listGlobalWebhooksListing($params);
                    }
                } elseif ($pathChunks[2] === 'keys') {
                    if ($call === 'LIST /admin/keys') {
                        return $this->routers->router🔀List🔀EnterpriseAdmin()->listPublicKeysListing($params);
                    }
                } elseif ($pathChunks[2] === 'pre-receive-environments') {
                    if ($call === 'LIST /admin/pre-receive-environments') {
                        return $this->routers->router🔀List🔀EnterpriseAdmin()->listPreReceiveEnvironmentsListing($params);
                    }
                } elseif ($pathChunks[2] === 'tokens') {
                    if ($call === 'LIST /admin/tokens') {
                        return $this->routers->router🔀List🔀EnterpriseAdmin()->listPersonalAccessTokensListing($params);
                    }
                }
            } elseif ($pathChunks[1] === 'app') {
                if ($pathChunks[2] === 'installation-requests') {
                    if ($call === 'LIST /app/installation-requests') {
                        return $this->routers->router🔀List🔀Apps()->listInstallationRequestsForAuthenticatedAppListing($params);
                    }
                } elseif ($pathChunks[2] === 'installations') {
                    if ($call === 'LIST /app/installations') {
                        return $this->routers->router🔀List🔀Apps()->listInstallationsListing($params);
                    }
                }
            } elseif ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === 'public') {
                    if ($call === 'LIST /gists/public') {
                        return $this->routers->router🔀List🔀Gists()->listPublicListing($params);
                    }
                } elseif ($pathChunks[2] === 'starred') {
                    if ($call === 'LIST /gists/starred') {
                        return $this->routers->router🔀List🔀Gists()->listStarredListing($params);
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'followers') {
                    if ($call === 'LIST /user/followers') {
                        return $this->routers->router🔀List🔀Users()->listFollowersForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'following') {
                    if ($call === 'LIST /user/following') {
                        return $this->routers->router🔀List🔀Users()->listFollowedByAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'gpg_keys') {
                    if ($call === 'LIST /user/gpg_keys') {
                        return $this->routers->router🔀List🔀Users()->listGpgKeysForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'issues') {
                    if ($call === 'LIST /user/issues') {
                        return $this->routers->router🔀List🔀Issues()->listForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'keys') {
                    if ($call === 'LIST /user/keys') {
                        return $this->routers->router🔀List🔀Users()->listPublicSshKeysForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'migrations') {
                    if ($call === 'LIST /user/migrations') {
                        return $this->routers->router🔀List🔀Migrations()->listForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'orgs') {
                    if ($call === 'LIST /user/orgs') {
                        return $this->routers->router🔀List🔀Orgs()->listForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'repos') {
                    if ($call === 'LIST /user/repos') {
                        return $this->routers->router🔀List🔀Repos()->listForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'repository_invitations') {
                    if ($call === 'LIST /user/repository_invitations') {
                        return $this->routers->router🔀List🔀Repos()->listInvitationsForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'starred') {
                    if ($call === 'LIST /user/starred') {
                        return $this->routers->router🔀List🔀Activity()->listReposStarredByAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'subscriptions') {
                    if ($call === 'LIST /user/subscriptions') {
                        return $this->routers->router🔀List🔀Activity()->listWatchedReposForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'teams') {
                    if ($call === 'LIST /user/teams') {
                        return $this->routers->router🔀List🔀Teams()->listForAuthenticatedUserListing($params);
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
