<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Router\Put;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Apps
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return array{code:int} */
    public function suspendInstallation(array $params): array
    {
        $arguments = [];
        if (array_key_exists('installation_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: installation_id');
        }

        $arguments['installation_id'] = $params['installation_id'];
        unset($params['installation_id']);
        $operator = new Internal\Operator\Apps\SuspendInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Installations🌀InstallationId🌀Suspended());

        return $operator->call($arguments['installation_id']);
    }

    /** @return array{code:int} */
    public function addRepoToInstallationForAuthenticatedUser(array $params): array
    {
        $arguments = [];
        if (array_key_exists('installation_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: installation_id');
        }

        $arguments['installation_id'] = $params['installation_id'];
        unset($params['installation_id']);
        if (array_key_exists('repository_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repository_id');
        }

        $arguments['repository_id'] = $params['repository_id'];
        unset($params['repository_id']);
        $operator = new Internal\Operator\Apps\AddRepoToInstallationForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Installations🌀InstallationId🌀Repositories🌀RepositoryId());

        return $operator->call($arguments['installation_id'], $arguments['repository_id']);
    }
}
