<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Router\Delete;

use ApiClients\Client\GitHubAE\Hydrators;
use ApiClients\Client\GitHubAE\Router;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\Schema\BasicError;
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

    /** @return array{code: int}|(Schema\BasicError|array{code: int}) */
    public function call(string $call, array $params, array $pathChunks): BasicError|array
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'admin') {
                if ($pathChunks[2] === 'hooks') {
                    if ($pathChunks[3] === '{hook_id}') {
                        if ($call === 'DELETE /admin/hooks/{hook_id}') {
                            $matched = true;
                            if (array_key_exists(Router\Delete\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Delete\EnterpriseAdmin::class] = new Router\Delete\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Delete\EnterpriseAdmin::class]->deleteGlobalWebhook($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'keys') {
                    if ($pathChunks[3] === '{key_ids}') {
                        if ($call === 'DELETE /admin/keys/{key_ids}') {
                            $matched = true;
                            if (array_key_exists(Router\Delete\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Delete\EnterpriseAdmin::class] = new Router\Delete\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Delete\EnterpriseAdmin::class]->deletePublicKey($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'pre-receive-environments') {
                    if ($pathChunks[3] === '{pre_receive_environment_id}') {
                        if ($call === 'DELETE /admin/pre-receive-environments/{pre_receive_environment_id}') {
                            $matched = true;
                            if (array_key_exists(Router\Delete\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Delete\EnterpriseAdmin::class] = new Router\Delete\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Delete\EnterpriseAdmin::class]->deletePreReceiveEnvironment($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'tokens') {
                    if ($pathChunks[3] === '{token_id}') {
                        if ($call === 'DELETE /admin/tokens/{token_id}') {
                            $matched = true;
                            if (array_key_exists(Router\Delete\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Delete\EnterpriseAdmin::class] = new Router\Delete\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Delete\EnterpriseAdmin::class]->deletePersonalAccessToken($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'users') {
                    if ($pathChunks[3] === '{username}') {
                        if ($call === 'DELETE /admin/users/{username}') {
                            $matched = true;
                            if (array_key_exists(Router\Delete\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Delete\EnterpriseAdmin::class] = new Router\Delete\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Delete\EnterpriseAdmin::class]->deleteUser($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'app') {
                if ($pathChunks[2] === 'installations') {
                    if ($pathChunks[3] === '{installation_id}') {
                        if ($call === 'DELETE /app/installations/{installation_id}') {
                            $matched = true;
                            if (array_key_exists(Router\Delete\Apps::class, $this->router) === false) {
                                $this->router[Router\Delete\Apps::class] = new Router\Delete\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Delete\Apps::class]->deleteInstallation($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'applications') {
                if ($pathChunks[2] === '{client_id}') {
                    if ($pathChunks[3] === 'grant') {
                        if ($call === 'DELETE /applications/{client_id}/grant') {
                            $matched = true;
                            if (array_key_exists(Router\Delete\Apps::class, $this->router) === false) {
                                $this->router[Router\Delete\Apps::class] = new Router\Delete\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Delete\Apps::class]->deleteAuthorization($params);
                        }
                    } elseif ($pathChunks[3] === 'token') {
                        if ($call === 'DELETE /applications/{client_id}/token') {
                            $matched = true;
                            if (array_key_exists(Router\Delete\Apps::class, $this->router) === false) {
                                $this->router[Router\Delete\Apps::class] = new Router\Delete\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Delete\Apps::class]->deleteToken($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === '{gist_id}') {
                    if ($pathChunks[3] === 'star') {
                        if ($call === 'DELETE /gists/{gist_id}/star') {
                            $matched = true;
                            if (array_key_exists(Router\Delete\Gists::class, $this->router) === false) {
                                $this->router[Router\Delete\Gists::class] = new Router\Delete\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Delete\Gists::class]->unstar($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === 'columns') {
                    if ($pathChunks[3] === '{column_id}') {
                        if ($call === 'DELETE /projects/columns/{column_id}') {
                            $matched = true;
                            if (array_key_exists(Router\Delete\Projects::class, $this->router) === false) {
                                $this->router[Router\Delete\Projects::class] = new Router\Delete\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Delete\Projects::class]->deleteColumn($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($call === 'DELETE /repos/{owner}/{repo}') {
                            $matched = true;
                            if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Delete\Repos::class]->delete($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'following') {
                    if ($pathChunks[3] === '{username}') {
                        if ($call === 'DELETE /user/following/{username}') {
                            $matched = true;
                            if (array_key_exists(Router\Delete\Users::class, $this->router) === false) {
                                $this->router[Router\Delete\Users::class] = new Router\Delete\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Delete\Users::class]->unfollow($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'gpg_keys') {
                    if ($pathChunks[3] === '{gpg_key_id}') {
                        if ($call === 'DELETE /user/gpg_keys/{gpg_key_id}') {
                            $matched = true;
                            if (array_key_exists(Router\Delete\Users::class, $this->router) === false) {
                                $this->router[Router\Delete\Users::class] = new Router\Delete\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Delete\Users::class]->deleteGpgKeyForAuthenticatedUser($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'keys') {
                    if ($pathChunks[3] === '{key_id}') {
                        if ($call === 'DELETE /user/keys/{key_id}') {
                            $matched = true;
                            if (array_key_exists(Router\Delete\Users::class, $this->router) === false) {
                                $this->router[Router\Delete\Users::class] = new Router\Delete\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Delete\Users::class]->deletePublicSshKeyForAuthenticatedUser($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'repository_invitations') {
                    if ($pathChunks[3] === '{invitation_id}') {
                        if ($call === 'DELETE /user/repository_invitations/{invitation_id}') {
                            $matched = true;
                            if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Delete\Repos::class]->declineInvitationForAuthenticatedUser($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'users') {
                if ($pathChunks[2] === '{username}') {
                    if ($pathChunks[3] === 'suspended') {
                        if ($call === 'DELETE /users/{username}/suspended') {
                            $matched = true;
                            if (array_key_exists(Router\Delete\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Delete\EnterpriseAdmin::class] = new Router\Delete\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Delete\EnterpriseAdmin::class]->unsuspendUser($params);
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
