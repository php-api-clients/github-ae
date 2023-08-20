<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operation;

use ApiClients\Client\GitHubAE\Hydrators;
use ApiClients\Client\GitHubAE\Operator;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;

use function array_key_exists;

final class EnterpriseAdmin
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function listGlobalWebhooks(int $perPage, int $page): Schema\GlobalHook
    {
        if (array_key_exists(Operator\EnterpriseAdmin\ListGlobalWebhooks::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\ListGlobalWebhooks::class] = new Operator\EnterpriseAdmin\ListGlobalWebhooks($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Hooks());
        }

        return $this->operator[Operator\EnterpriseAdmin\ListGlobalWebhooks::class]->call($perPage, $page);
    }

    public function createGlobalWebhook(array $params): Schema\GlobalHook
    {
        if (array_key_exists(Operator\EnterpriseAdmin\CreateGlobalWebhook::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\CreateGlobalWebhook::class] = new Operator\EnterpriseAdmin\CreateGlobalWebhook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Hooks());
        }

        return $this->operator[Operator\EnterpriseAdmin\CreateGlobalWebhook::class]->call($params);
    }

    public function getGlobalWebhook(int $hookId): Schema\GlobalHook
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetGlobalWebhook::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetGlobalWebhook::class] = new Operator\EnterpriseAdmin\GetGlobalWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Hooks🌀HookId());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetGlobalWebhook::class]->call($hookId);
    }

    public function deleteGlobalWebhook(int $hookId): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\DeleteGlobalWebhook::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\DeleteGlobalWebhook::class] = new Operator\EnterpriseAdmin\DeleteGlobalWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Hooks🌀HookId());
        }

        return $this->operator[Operator\EnterpriseAdmin\DeleteGlobalWebhook::class]->call($hookId);
    }

    public function updateGlobalWebhook(int $hookId, array $params): Schema\GlobalHook2
    {
        if (array_key_exists(Operator\EnterpriseAdmin\UpdateGlobalWebhook::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\UpdateGlobalWebhook::class] = new Operator\EnterpriseAdmin\UpdateGlobalWebhook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Hooks🌀HookId());
        }

        return $this->operator[Operator\EnterpriseAdmin\UpdateGlobalWebhook::class]->call($hookId, $params);
    }

    public function pingGlobalWebhook(int $hookId): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\PingGlobalWebhook::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\PingGlobalWebhook::class] = new Operator\EnterpriseAdmin\PingGlobalWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Hooks🌀HookId🌀Pings());
        }

        return $this->operator[Operator\EnterpriseAdmin\PingGlobalWebhook::class]->call($hookId);
    }

    public function listPublicKeys(string $since, int $perPage, int $page, string $direction, string $sort): Schema\PublicKeyFull
    {
        if (array_key_exists(Operator\EnterpriseAdmin\ListPublicKeys::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\ListPublicKeys::class] = new Operator\EnterpriseAdmin\ListPublicKeys($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Keys());
        }

        return $this->operator[Operator\EnterpriseAdmin\ListPublicKeys::class]->call($since, $perPage, $page, $direction, $sort);
    }

    public function deletePublicKey(string $keyIds): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\DeletePublicKey::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\DeletePublicKey::class] = new Operator\EnterpriseAdmin\DeletePublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Keys🌀KeyIds());
        }

        return $this->operator[Operator\EnterpriseAdmin\DeletePublicKey::class]->call($keyIds);
    }

    public function createOrg(array $params): Schema\OrganizationSimple
    {
        if (array_key_exists(Operator\EnterpriseAdmin\CreateOrg::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\CreateOrg::class] = new Operator\EnterpriseAdmin\CreateOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Organizations());
        }

        return $this->operator[Operator\EnterpriseAdmin\CreateOrg::class]->call($params);
    }

    public function updateOrgName(string $org, array $params): Schema\Operations\EnterpriseAdmin\UpdateOrgName\Response\ApplicationJson\Accepted
    {
        if (array_key_exists(Operator\EnterpriseAdmin\UpdateOrgName::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\UpdateOrgName::class] = new Operator\EnterpriseAdmin\UpdateOrgName($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Organizations🌀Org());
        }

        return $this->operator[Operator\EnterpriseAdmin\UpdateOrgName::class]->call($org, $params);
    }

    public function listPreReceiveEnvironments(int $perPage, int $page, string $direction, string $sort): Schema\PreReceiveEnvironment
    {
        if (array_key_exists(Operator\EnterpriseAdmin\ListPreReceiveEnvironments::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\ListPreReceiveEnvironments::class] = new Operator\EnterpriseAdmin\ListPreReceiveEnvironments($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments());
        }

        return $this->operator[Operator\EnterpriseAdmin\ListPreReceiveEnvironments::class]->call($perPage, $page, $direction, $sort);
    }

    public function createPreReceiveEnvironment(array $params): Schema\PreReceiveEnvironment
    {
        if (array_key_exists(Operator\EnterpriseAdmin\CreatePreReceiveEnvironment::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\CreatePreReceiveEnvironment::class] = new Operator\EnterpriseAdmin\CreatePreReceiveEnvironment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments());
        }

        return $this->operator[Operator\EnterpriseAdmin\CreatePreReceiveEnvironment::class]->call($params);
    }

    public function getPreReceiveEnvironment(int $preReceiveEnvironmentId): Schema\PreReceiveEnvironment
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetPreReceiveEnvironment::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetPreReceiveEnvironment::class] = new Operator\EnterpriseAdmin\GetPreReceiveEnvironment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetPreReceiveEnvironment::class]->call($preReceiveEnvironmentId);
    }

    public function deletePreReceiveEnvironment(int $preReceiveEnvironmentId): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\DeletePreReceiveEnvironment::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\DeletePreReceiveEnvironment::class] = new Operator\EnterpriseAdmin\DeletePreReceiveEnvironment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId());
        }

        return $this->operator[Operator\EnterpriseAdmin\DeletePreReceiveEnvironment::class]->call($preReceiveEnvironmentId);
    }

    public function updatePreReceiveEnvironment(int $preReceiveEnvironmentId, array $params): Schema\PreReceiveEnvironment
    {
        if (array_key_exists(Operator\EnterpriseAdmin\UpdatePreReceiveEnvironment::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\UpdatePreReceiveEnvironment::class] = new Operator\EnterpriseAdmin\UpdatePreReceiveEnvironment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId());
        }

        return $this->operator[Operator\EnterpriseAdmin\UpdatePreReceiveEnvironment::class]->call($preReceiveEnvironmentId, $params);
    }

    public function startPreReceiveEnvironmentDownload(int $preReceiveEnvironmentId): Schema\PreReceiveEnvironmentDownloadStatus
    {
        if (array_key_exists(Operator\EnterpriseAdmin\StartPreReceiveEnvironmentDownload::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\StartPreReceiveEnvironmentDownload::class] = new Operator\EnterpriseAdmin\StartPreReceiveEnvironmentDownload($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId🌀Downloads());
        }

        return $this->operator[Operator\EnterpriseAdmin\StartPreReceiveEnvironmentDownload::class]->call($preReceiveEnvironmentId);
    }

    public function startPreReceiveEnvironmentDownloadStreaming(int $preReceiveEnvironmentId): Schema\PreReceiveEnvironmentDownloadStatus
    {
        if (array_key_exists(Operator\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming::class] = new Operator\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId🌀Downloads());
        }

        return $this->operator[Operator\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming::class]->call($preReceiveEnvironmentId);
    }

    public function getDownloadStatusForPreReceiveEnvironment(int $preReceiveEnvironmentId): Schema\PreReceiveEnvironmentDownloadStatus
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironment::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironment::class] = new Operator\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId🌀Downloads🌀Latest());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironment::class]->call($preReceiveEnvironmentId);
    }

    public function getDownloadStatusForPreReceiveEnvironmentStreaming(int $preReceiveEnvironmentId): Schema\PreReceiveEnvironmentDownloadStatus
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironmentStreaming::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironmentStreaming::class] = new Operator\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironmentStreaming($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId🌀Downloads🌀Latest());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironmentStreaming::class]->call($preReceiveEnvironmentId);
    }

    public function listPersonalAccessTokens(int $perPage, int $page): Schema\Authorization
    {
        if (array_key_exists(Operator\EnterpriseAdmin\ListPersonalAccessTokens::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\ListPersonalAccessTokens::class] = new Operator\EnterpriseAdmin\ListPersonalAccessTokens($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Tokens());
        }

        return $this->operator[Operator\EnterpriseAdmin\ListPersonalAccessTokens::class]->call($perPage, $page);
    }

    public function deletePersonalAccessToken(int $tokenId): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\DeletePersonalAccessToken::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\DeletePersonalAccessToken::class] = new Operator\EnterpriseAdmin\DeletePersonalAccessToken($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Tokens🌀TokenId());
        }

        return $this->operator[Operator\EnterpriseAdmin\DeletePersonalAccessToken::class]->call($tokenId);
    }

    public function deleteUser(string $username): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\DeleteUser::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\DeleteUser::class] = new Operator\EnterpriseAdmin\DeleteUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Users🌀Username());
        }

        return $this->operator[Operator\EnterpriseAdmin\DeleteUser::class]->call($username);
    }

    public function createImpersonationOAuthToken(string $username, array $params): Schema\Authorization
    {
        if (array_key_exists(Operator\EnterpriseAdmin\CreateImpersonationOAuthToken::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\CreateImpersonationOAuthToken::class] = new Operator\EnterpriseAdmin\CreateImpersonationOAuthToken($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Users🌀Username🌀Authorizations());
        }

        return $this->operator[Operator\EnterpriseAdmin\CreateImpersonationOAuthToken::class]->call($username, $params);
    }

    public function deleteImpersonationOAuthToken(string $username): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\DeleteImpersonationOAuthToken::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\DeleteImpersonationOAuthToken::class] = new Operator\EnterpriseAdmin\DeleteImpersonationOAuthToken($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Users🌀Username🌀Authorizations());
        }

        return $this->operator[Operator\EnterpriseAdmin\DeleteImpersonationOAuthToken::class]->call($username);
    }

    public function getAnnouncement(): Schema\Announcement
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetAnnouncement::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetAnnouncement::class] = new Operator\EnterpriseAdmin\GetAnnouncement($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Announcement());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetAnnouncement::class]->call();
    }

    public function removeAnnouncement(): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\RemoveAnnouncement::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\RemoveAnnouncement::class] = new Operator\EnterpriseAdmin\RemoveAnnouncement($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Announcement());
        }

        return $this->operator[Operator\EnterpriseAdmin\RemoveAnnouncement::class]->call();
    }

    public function setAnnouncement(array $params): Schema\Announcement
    {
        if (array_key_exists(Operator\EnterpriseAdmin\SetAnnouncement::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\SetAnnouncement::class] = new Operator\EnterpriseAdmin\SetAnnouncement($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Announcement());
        }

        return $this->operator[Operator\EnterpriseAdmin\SetAnnouncement::class]->call($params);
    }

    public function getLicenseInformation(): Schema\LicenseInfo
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetLicenseInformation::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetLicenseInformation::class] = new Operator\EnterpriseAdmin\GetLicenseInformation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Settings🌀License());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetLicenseInformation::class]->call();
    }

    public function getAllStats(): Schema\EnterpriseOverview
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetAllStats::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetAllStats::class] = new Operator\EnterpriseAdmin\GetAllStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀All());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetAllStats::class]->call();
    }

    public function getCommentStats(): Schema\EnterpriseCommentOverview
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetCommentStats::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetCommentStats::class] = new Operator\EnterpriseAdmin\GetCommentStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Comments());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetCommentStats::class]->call();
    }

    public function getGistStats(): Schema\EnterpriseGistOverview
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetGistStats::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetGistStats::class] = new Operator\EnterpriseAdmin\GetGistStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Gists());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetGistStats::class]->call();
    }

    public function getHooksStats(): Schema\EnterpriseHookOverview
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetHooksStats::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetHooksStats::class] = new Operator\EnterpriseAdmin\GetHooksStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Hooks());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetHooksStats::class]->call();
    }

    public function getIssueStats(): Schema\EnterpriseIssueOverview
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetIssueStats::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetIssueStats::class] = new Operator\EnterpriseAdmin\GetIssueStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Issues());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetIssueStats::class]->call();
    }

    public function getMilestoneStats(): Schema\EnterpriseMilestoneOverview
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetMilestoneStats::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetMilestoneStats::class] = new Operator\EnterpriseAdmin\GetMilestoneStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Milestones());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetMilestoneStats::class]->call();
    }

    public function getOrgStats(): Schema\EnterpriseOrganizationOverview
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetOrgStats::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetOrgStats::class] = new Operator\EnterpriseAdmin\GetOrgStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Orgs());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetOrgStats::class]->call();
    }

    public function getPagesStats(): Schema\EnterprisePageOverview
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetPagesStats::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetPagesStats::class] = new Operator\EnterpriseAdmin\GetPagesStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Pages());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetPagesStats::class]->call();
    }

    public function getPullRequestStats(): Schema\EnterprisePullRequestOverview
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetPullRequestStats::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetPullRequestStats::class] = new Operator\EnterpriseAdmin\GetPullRequestStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Pulls());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetPullRequestStats::class]->call();
    }

    public function getRepoStats(): Schema\EnterpriseRepositoryOverview
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetRepoStats::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetRepoStats::class] = new Operator\EnterpriseAdmin\GetRepoStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Repos());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetRepoStats::class]->call();
    }

    public function getUserStats(): Schema\EnterpriseUserOverview
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetUserStats::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetUserStats::class] = new Operator\EnterpriseAdmin\GetUserStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Users());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetUserStats::class]->call();
    }

    public function getGithubActionsPermissionsEnterprise(string $enterprise): Schema\ActionsEnterprisePermissions
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetGithubActionsPermissionsEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetGithubActionsPermissionsEnterprise::class] = new Operator\EnterpriseAdmin\GetGithubActionsPermissionsEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetGithubActionsPermissionsEnterprise::class]->call($enterprise);
    }

    public function setGithubActionsPermissionsEnterprise(string $enterprise, array $params): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\SetGithubActionsPermissionsEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\SetGithubActionsPermissionsEnterprise::class] = new Operator\EnterpriseAdmin\SetGithubActionsPermissionsEnterprise($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions());
        }

        return $this->operator[Operator\EnterpriseAdmin\SetGithubActionsPermissionsEnterprise::class]->call($enterprise, $params);
    }

    public function listSelectedOrganizationsEnabledGithubActionsEnterprise(string $enterprise, int $perPage, int $page): Schema\Operations\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise::class] = new Operator\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀Organizations());
        }

        return $this->operator[Operator\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise::class]->call($enterprise, $perPage, $page);
    }

    public function setSelectedOrganizationsEnabledGithubActionsEnterprise(string $enterprise, array $params): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\SetSelectedOrganizationsEnabledGithubActionsEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\SetSelectedOrganizationsEnabledGithubActionsEnterprise::class] = new Operator\EnterpriseAdmin\SetSelectedOrganizationsEnabledGithubActionsEnterprise($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀Organizations());
        }

        return $this->operator[Operator\EnterpriseAdmin\SetSelectedOrganizationsEnabledGithubActionsEnterprise::class]->call($enterprise, $params);
    }

    public function enableSelectedOrganizationGithubActionsEnterprise(string $enterprise, int $orgId): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\EnableSelectedOrganizationGithubActionsEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\EnableSelectedOrganizationGithubActionsEnterprise::class] = new Operator\EnterpriseAdmin\EnableSelectedOrganizationGithubActionsEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀Organizations🌀OrgId());
        }

        return $this->operator[Operator\EnterpriseAdmin\EnableSelectedOrganizationGithubActionsEnterprise::class]->call($enterprise, $orgId);
    }

    public function disableSelectedOrganizationGithubActionsEnterprise(string $enterprise, int $orgId): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\DisableSelectedOrganizationGithubActionsEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\DisableSelectedOrganizationGithubActionsEnterprise::class] = new Operator\EnterpriseAdmin\DisableSelectedOrganizationGithubActionsEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀Organizations🌀OrgId());
        }

        return $this->operator[Operator\EnterpriseAdmin\DisableSelectedOrganizationGithubActionsEnterprise::class]->call($enterprise, $orgId);
    }

    public function getAllowedActionsEnterprise(string $enterprise): Schema\SelectedActions
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetAllowedActionsEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetAllowedActionsEnterprise::class] = new Operator\EnterpriseAdmin\GetAllowedActionsEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀SelectedActions());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetAllowedActionsEnterprise::class]->call($enterprise);
    }

    public function setAllowedActionsEnterprise(string $enterprise, array $params): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\SetAllowedActionsEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\SetAllowedActionsEnterprise::class] = new Operator\EnterpriseAdmin\SetAllowedActionsEnterprise($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀SelectedActions());
        }

        return $this->operator[Operator\EnterpriseAdmin\SetAllowedActionsEnterprise::class]->call($enterprise, $params);
    }

    public function listSelfHostedRunnerGroupsForEnterprise(string $enterprise, string $visibleToOrganization, int $perPage, int $page): Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise::class] = new Operator\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups());
        }

        return $this->operator[Operator\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise::class]->call($enterprise, $visibleToOrganization, $perPage, $page);
    }

    public function createSelfHostedRunnerGroupForEnterprise(string $enterprise, array $params): Schema\RunnerGroupsEnterprise
    {
        if (array_key_exists(Operator\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterprise::class] = new Operator\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterprise($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups());
        }

        return $this->operator[Operator\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterprise::class]->call($enterprise, $params);
    }

    public function getSelfHostedRunnerGroupForEnterprise(string $enterprise, int $runnerGroupId): Schema\RunnerGroupsEnterprise
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterprise::class] = new Operator\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterprise::class]->call($enterprise, $runnerGroupId);
    }

    public function deleteSelfHostedRunnerGroupFromEnterprise(string $enterprise, int $runnerGroupId): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\DeleteSelfHostedRunnerGroupFromEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\DeleteSelfHostedRunnerGroupFromEnterprise::class] = new Operator\EnterpriseAdmin\DeleteSelfHostedRunnerGroupFromEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId());
        }

        return $this->operator[Operator\EnterpriseAdmin\DeleteSelfHostedRunnerGroupFromEnterprise::class]->call($enterprise, $runnerGroupId);
    }

    public function updateSelfHostedRunnerGroupForEnterprise(string $enterprise, int $runnerGroupId, array $params): Schema\RunnerGroupsEnterprise
    {
        if (array_key_exists(Operator\EnterpriseAdmin\UpdateSelfHostedRunnerGroupForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\UpdateSelfHostedRunnerGroupForEnterprise::class] = new Operator\EnterpriseAdmin\UpdateSelfHostedRunnerGroupForEnterprise($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId());
        }

        return $this->operator[Operator\EnterpriseAdmin\UpdateSelfHostedRunnerGroupForEnterprise::class]->call($enterprise, $runnerGroupId, $params);
    }

    public function listSelfHostedRunnersInGroupForEnterprise(string $enterprise, int $runnerGroupId, int $perPage, int $page): Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise::class] = new Operator\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners());
        }

        return $this->operator[Operator\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise::class]->call($enterprise, $runnerGroupId, $perPage, $page);
    }

    public function setSelfHostedRunnersInGroupForEnterprise(string $enterprise, int $runnerGroupId, array $params): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\SetSelfHostedRunnersInGroupForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\SetSelfHostedRunnersInGroupForEnterprise::class] = new Operator\EnterpriseAdmin\SetSelfHostedRunnersInGroupForEnterprise($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners());
        }

        return $this->operator[Operator\EnterpriseAdmin\SetSelfHostedRunnersInGroupForEnterprise::class]->call($enterprise, $runnerGroupId, $params);
    }

    public function addSelfHostedRunnerToGroupForEnterprise(string $enterprise, int $runnerGroupId, int $runnerId): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\AddSelfHostedRunnerToGroupForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\AddSelfHostedRunnerToGroupForEnterprise::class] = new Operator\EnterpriseAdmin\AddSelfHostedRunnerToGroupForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners🌀RunnerId());
        }

        return $this->operator[Operator\EnterpriseAdmin\AddSelfHostedRunnerToGroupForEnterprise::class]->call($enterprise, $runnerGroupId, $runnerId);
    }

    public function removeSelfHostedRunnerFromGroupForEnterprise(string $enterprise, int $runnerGroupId, int $runnerId): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\RemoveSelfHostedRunnerFromGroupForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\RemoveSelfHostedRunnerFromGroupForEnterprise::class] = new Operator\EnterpriseAdmin\RemoveSelfHostedRunnerFromGroupForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners🌀RunnerId());
        }

        return $this->operator[Operator\EnterpriseAdmin\RemoveSelfHostedRunnerFromGroupForEnterprise::class]->call($enterprise, $runnerGroupId, $runnerId);
    }

    public function listSelfHostedRunnersForEnterprise(string $enterprise, int $perPage, int $page): Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise::class] = new Operator\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners());
        }

        return $this->operator[Operator\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise::class]->call($enterprise, $perPage, $page);
    }

    public function listRunnerApplicationsForEnterprise(string $enterprise): Schema\RunnerApplication
    {
        if (array_key_exists(Operator\EnterpriseAdmin\ListRunnerApplicationsForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\ListRunnerApplicationsForEnterprise::class] = new Operator\EnterpriseAdmin\ListRunnerApplicationsForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀Downloads());
        }

        return $this->operator[Operator\EnterpriseAdmin\ListRunnerApplicationsForEnterprise::class]->call($enterprise);
    }

    public function createRegistrationTokenForEnterprise(string $enterprise): Schema\AuthenticationToken
    {
        if (array_key_exists(Operator\EnterpriseAdmin\CreateRegistrationTokenForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\CreateRegistrationTokenForEnterprise::class] = new Operator\EnterpriseAdmin\CreateRegistrationTokenForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RegistrationToken());
        }

        return $this->operator[Operator\EnterpriseAdmin\CreateRegistrationTokenForEnterprise::class]->call($enterprise);
    }

    public function createRemoveTokenForEnterprise(string $enterprise): Schema\AuthenticationToken
    {
        if (array_key_exists(Operator\EnterpriseAdmin\CreateRemoveTokenForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\CreateRemoveTokenForEnterprise::class] = new Operator\EnterpriseAdmin\CreateRemoveTokenForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RemoveToken());
        }

        return $this->operator[Operator\EnterpriseAdmin\CreateRemoveTokenForEnterprise::class]->call($enterprise);
    }

    public function getSelfHostedRunnerForEnterprise(string $enterprise, int $runnerId): Schema\Runner
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetSelfHostedRunnerForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetSelfHostedRunnerForEnterprise::class] = new Operator\EnterpriseAdmin\GetSelfHostedRunnerForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RunnerId());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetSelfHostedRunnerForEnterprise::class]->call($enterprise, $runnerId);
    }

    public function deleteSelfHostedRunnerFromEnterprise(string $enterprise, int $runnerId): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\DeleteSelfHostedRunnerFromEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\DeleteSelfHostedRunnerFromEnterprise::class] = new Operator\EnterpriseAdmin\DeleteSelfHostedRunnerFromEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RunnerId());
        }

        return $this->operator[Operator\EnterpriseAdmin\DeleteSelfHostedRunnerFromEnterprise::class]->call($enterprise, $runnerId);
    }

    public function getAuditLog(string $enterprise, string $phrase, string $after, string $before, string $order, int $page, int $perPage): Schema\AuditLogEvent
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetAuditLog::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetAuditLog::class] = new Operator\EnterpriseAdmin\GetAuditLog($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀AuditLog());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetAuditLog::class]->call($enterprise, $phrase, $after, $before, $order, $page, $perPage);
    }

    public function suspendUser(string $username, array $params): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\SuspendUser::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\SuspendUser::class] = new Operator\EnterpriseAdmin\SuspendUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Suspended());
        }

        return $this->operator[Operator\EnterpriseAdmin\SuspendUser::class]->call($username, $params);
    }

    public function unsuspendUser(string $username, array $params): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\UnsuspendUser::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\UnsuspendUser::class] = new Operator\EnterpriseAdmin\UnsuspendUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Suspended());
        }

        return $this->operator[Operator\EnterpriseAdmin\UnsuspendUser::class]->call($username, $params);
    }
}
