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
final class Cc3
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
            if ($pathChunks[1] == 'enterprise') {
                if ($pathChunks[2] == 'announcement') {
                    if ($call == 'DELETE /enterprise/announcement') {
                        if (\array_key_exists(Router\Delete\EnterpriseAdmin::class, $this->router) == false) {
                            $this->router[Router\Delete\EnterpriseAdmin::class] = new Router\Delete\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }
                        return $this->router[Router\Delete\EnterpriseAdmin::class]->removeAnnouncement($params);
                    }
                }
            } elseif ($pathChunks[1] == 'gists') {
                if ($pathChunks[2] == '{gist_id}') {
                    if ($call == 'DELETE /gists/{gist_id}') {
                        if (\array_key_exists(Router\Delete\Gists::class, $this->router) == false) {
                            $this->router[Router\Delete\Gists::class] = new Router\Delete\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }
                        return $this->router[Router\Delete\Gists::class]->delete($params);
                    }
                }
            } elseif ($pathChunks[1] == 'installation') {
                if ($pathChunks[2] == 'token') {
                    if ($call == 'DELETE /installation/token') {
                        if (\array_key_exists(Router\Delete\Apps::class, $this->router) == false) {
                            $this->router[Router\Delete\Apps::class] = new Router\Delete\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }
                        return $this->router[Router\Delete\Apps::class]->revokeInstallationAccessToken($params);
                    }
                }
            } elseif ($pathChunks[1] == 'projects') {
                if ($pathChunks[2] == '{project_id}') {
                    if ($call == 'DELETE /projects/{project_id}') {
                        if (\array_key_exists(Router\Delete\Projects::class, $this->router) == false) {
                            $this->router[Router\Delete\Projects::class] = new Router\Delete\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }
                        return $this->router[Router\Delete\Projects::class]->delete($params);
                    }
                }
            } elseif ($pathChunks[1] == 'teams') {
                if ($pathChunks[2] == '{team_id}') {
                    if ($call == 'DELETE /teams/{team_id}') {
                        if (\array_key_exists(Router\Delete\Teams::class, $this->router) == false) {
                            $this->router[Router\Delete\Teams::class] = new Router\Delete\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }
                        return $this->router[Router\Delete\Teams::class]->deleteLegacy($params);
                    }
                }
            }
        }
        throw new \InvalidArgumentException();
    }
}
