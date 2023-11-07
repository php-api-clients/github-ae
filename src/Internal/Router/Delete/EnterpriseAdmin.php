<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Router\Delete;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class EnterpriseAdmin
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    public function deleteGlobalWebhook(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('hook_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: hook_id');
        }

        $arguments['hook_id'] = $params['hook_id'];
        unset($params['hook_id']);
        $operator = new Internal\Operator\EnterpriseAdmin\DeleteGlobalWebhook($this->browser, $this->authentication);

        return $operator->call($arguments['hook_id']);
    }

    public function deletePublicKey(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('key_ids', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: key_ids');
        }

        $arguments['key_ids'] = $params['key_ids'];
        unset($params['key_ids']);
        $operator = new Internal\Operator\EnterpriseAdmin\DeletePublicKey($this->browser, $this->authentication);

        return $operator->call($arguments['key_ids']);
    }

    public function deletePreReceiveEnvironment(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('pre_receive_environment_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pre_receive_environment_id');
        }

        $arguments['pre_receive_environment_id'] = $params['pre_receive_environment_id'];
        unset($params['pre_receive_environment_id']);
        $operator = new Internal\Operator\EnterpriseAdmin\DeletePreReceiveEnvironment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId());

        return $operator->call($arguments['pre_receive_environment_id']);
    }

    public function deletePersonalAccessToken(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('token_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: token_id');
        }

        $arguments['token_id'] = $params['token_id'];
        unset($params['token_id']);
        $operator = new Internal\Operator\EnterpriseAdmin\DeletePersonalAccessToken($this->browser, $this->authentication);

        return $operator->call($arguments['token_id']);
    }

    public function deleteUser(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        $operator = new Internal\Operator\EnterpriseAdmin\DeleteUser($this->browser, $this->authentication);

        return $operator->call($arguments['username']);
    }

    public function unsuspendUser(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        $operator = new Internal\Operator\EnterpriseAdmin\UnsuspendUser($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($arguments['username'], $params);
    }

    public function deleteImpersonationOAuthToken(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        $operator = new Internal\Operator\EnterpriseAdmin\DeleteImpersonationOAuthToken($this->browser, $this->authentication);

        return $operator->call($arguments['username']);
    }

    public function removeAnnouncement(array $params): WithoutBody
    {
        $operator = new Internal\Operator\EnterpriseAdmin\RemoveAnnouncement($this->browser, $this->authentication);

        return $operator->call();
    }

    public function disableSelectedOrganizationGithubActionsEnterprise(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists('org_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org_id');
        }

        $arguments['org_id'] = $params['org_id'];
        unset($params['org_id']);
        $operator = new Internal\Operator\EnterpriseAdmin\DisableSelectedOrganizationGithubActionsEnterprise($this->browser, $this->authentication);

        return $operator->call($arguments['enterprise'], $arguments['org_id']);
    }

    public function deleteSelfHostedRunnerGroupFromEnterprise(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists('runner_group_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: runner_group_id');
        }

        $arguments['runner_group_id'] = $params['runner_group_id'];
        unset($params['runner_group_id']);
        $operator = new Internal\Operator\EnterpriseAdmin\DeleteSelfHostedRunnerGroupFromEnterprise($this->browser, $this->authentication);

        return $operator->call($arguments['enterprise'], $arguments['runner_group_id']);
    }

    public function deleteSelfHostedRunnerFromEnterprise(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists('runner_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: runner_id');
        }

        $arguments['runner_id'] = $params['runner_id'];
        unset($params['runner_id']);
        $operator = new Internal\Operator\EnterpriseAdmin\DeleteSelfHostedRunnerFromEnterprise($this->browser, $this->authentication);

        return $operator->call($arguments['enterprise'], $arguments['runner_id']);
    }

    public function removeSelfHostedRunnerFromGroupForEnterprise(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists('runner_group_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: runner_group_id');
        }

        $arguments['runner_group_id'] = $params['runner_group_id'];
        unset($params['runner_group_id']);
        if (array_key_exists('runner_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: runner_id');
        }

        $arguments['runner_id'] = $params['runner_id'];
        unset($params['runner_id']);
        $operator = new Internal\Operator\EnterpriseAdmin\RemoveSelfHostedRunnerFromGroupForEnterprise($this->browser, $this->authentication);

        return $operator->call($arguments['enterprise'], $arguments['runner_group_id'], $arguments['runner_id']);
    }
}
