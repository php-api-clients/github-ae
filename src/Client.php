<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE;

use ApiClients\Client\GitHubAE\Schema\ActionsEnterprisePermissions;
use ApiClients\Client\GitHubAE\Schema\ActionsGetDefaultWorkflowPermissions;
use ApiClients\Client\GitHubAE\Schema\ActionsOrganizationPermissions;
use ApiClients\Client\GitHubAE\Schema\ActionsPublicKey;
use ApiClients\Client\GitHubAE\Schema\ActionsRepositoryPermissions;
use ApiClients\Client\GitHubAE\Schema\ActionsSecret;
use ApiClients\Client\GitHubAE\Schema\Announcement;
use ApiClients\Client\GitHubAE\Schema\ApiOverview;
use ApiClients\Client\GitHubAE\Schema\Artifact;
use ApiClients\Client\GitHubAE\Schema\AuthenticationToken;
use ApiClients\Client\GitHubAE\Schema\Authorization;
use ApiClients\Client\GitHubAE\Schema\Autolink;
use ApiClients\Client\GitHubAE\Schema\BaseGist;
use ApiClients\Client\GitHubAE\Schema\BasicError;
use ApiClients\Client\GitHubAE\Schema\Blob;
use ApiClients\Client\GitHubAE\Schema\BranchProtection;
use ApiClients\Client\GitHubAE\Schema\BranchRestrictionPolicy;
use ApiClients\Client\GitHubAE\Schema\BranchWithProtection;
use ApiClients\Client\GitHubAE\Schema\CheckRun;
use ApiClients\Client\GitHubAE\Schema\CheckSuite;
use ApiClients\Client\GitHubAE\Schema\CheckSuitePreference;
use ApiClients\Client\GitHubAE\Schema\CodeOfConduct;
use ApiClients\Client\GitHubAE\Schema\CodeownersErrors;
use ApiClients\Client\GitHubAE\Schema\CodeScanningAlert;
use ApiClients\Client\GitHubAE\Schema\CodeScanningAnalysis;
use ApiClients\Client\GitHubAE\Schema\CodeScanningAnalysisDeletion;
use ApiClients\Client\GitHubAE\Schema\CodeScanningSarifsReceipt;
use ApiClients\Client\GitHubAE\Schema\CodeScanningSarifsStatus;
use ApiClients\Client\GitHubAE\Schema\CombinedCommitStatus;
use ApiClients\Client\GitHubAE\Schema\Commit;
use ApiClients\Client\GitHubAE\Schema\CommitComment;
use ApiClients\Client\GitHubAE\Schema\CommitComparison;
use ApiClients\Client\GitHubAE\Schema\ContentDirectory;
use ApiClients\Client\GitHubAE\Schema\ContentFile;
use ApiClients\Client\GitHubAE\Schema\ContentSubmodule;
use ApiClients\Client\GitHubAE\Schema\ContentSymlink;
use ApiClients\Client\GitHubAE\Schema\DeployKey;
use ApiClients\Client\GitHubAE\Schema\Deployment;
use ApiClients\Client\GitHubAE\Schema\DeploymentBranchPolicy;
use ApiClients\Client\GitHubAE\Schema\DeploymentStatus;
use ApiClients\Client\GitHubAE\Schema\EmptyObject;
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
use ApiClients\Client\GitHubAE\Schema\Environment;
use ApiClients\Client\GitHubAE\Schema\ExternalGroup;
use ApiClients\Client\GitHubAE\Schema\ExternalGroups;
use ApiClients\Client\GitHubAE\Schema\Feed;
use ApiClients\Client\GitHubAE\Schema\FileCommit;
use ApiClients\Client\GitHubAE\Schema\FullRepository;
use ApiClients\Client\GitHubAE\Schema\GistComment;
use ApiClients\Client\GitHubAE\Schema\GistSimple;
use ApiClients\Client\GitHubAE\Schema\GitCommit;
use ApiClients\Client\GitHubAE\Schema\GitignoreTemplate;
use ApiClients\Client\GitHubAE\Schema\GitRef;
use ApiClients\Client\GitHubAE\Schema\GitTag;
use ApiClients\Client\GitHubAE\Schema\GitTree;
use ApiClients\Client\GitHubAE\Schema\GlobalHook;
use ApiClients\Client\GitHubAE\Schema\GlobalHook2;
use ApiClients\Client\GitHubAE\Schema\GpgKey;
use ApiClients\Client\GitHubAE\Schema\Hook;
use ApiClients\Client\GitHubAE\Schema\HookDelivery;
use ApiClients\Client\GitHubAE\Schema\Hovercard;
use ApiClients\Client\GitHubAE\Schema\Installation;
use ApiClients\Client\GitHubAE\Schema\InstallationToken;
use ApiClients\Client\GitHubAE\Schema\Integration;
use ApiClients\Client\GitHubAE\Schema\Issue;
use ApiClients\Client\GitHubAE\Schema\IssueComment;
use ApiClients\Client\GitHubAE\Schema\IssueEvent;
use ApiClients\Client\GitHubAE\Schema\Job;
use ApiClients\Client\GitHubAE\Schema\Key;
use ApiClients\Client\GitHubAE\Schema\Label;
use ApiClients\Client\GitHubAE\Schema\Language;
use ApiClients\Client\GitHubAE\Schema\License;
use ApiClients\Client\GitHubAE\Schema\LicenseContent;
use ApiClients\Client\GitHubAE\Schema\LicenseInfo;
use ApiClients\Client\GitHubAE\Schema\MergedUpstream;
use ApiClients\Client\GitHubAE\Schema\Migration;
use ApiClients\Client\GitHubAE\Schema\Milestone;
use ApiClients\Client\GitHubAE\Schema\MinimalRepository;
use ApiClients\Client\GitHubAE\Schema\Operations\Apps\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted\Application\Json;
use ApiClients\Client\GitHubAE\Schema\Operations\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHubAE\Schema\Operations\EnterpriseAdmin\UpdateOrgName\Response\ApplicationJson\Accepted;
use ApiClients\Client\GitHubAE\Schema\OrganizationActionsSecret;
use ApiClients\Client\GitHubAE\Schema\OrganizationFull;
use ApiClients\Client\GitHubAE\Schema\OrganizationSimple;
use ApiClients\Client\GitHubAE\Schema\OrgHook;
use ApiClients\Client\GitHubAE\Schema\OrgMembership;
use ApiClients\Client\GitHubAE\Schema\Page;
use ApiClients\Client\GitHubAE\Schema\PageBuild;
use ApiClients\Client\GitHubAE\Schema\PageBuildStatus;
use ApiClients\Client\GitHubAE\Schema\ParticipationStats;
use ApiClients\Client\GitHubAE\Schema\PreReceiveEnvironment;
use ApiClients\Client\GitHubAE\Schema\PreReceiveEnvironmentDownloadStatus;
use ApiClients\Client\GitHubAE\Schema\PrivateUser;
use ApiClients\Client\GitHubAE\Schema\Project;
use ApiClients\Client\GitHubAE\Schema\ProjectCard;
use ApiClients\Client\GitHubAE\Schema\ProjectCollaboratorPermission;
use ApiClients\Client\GitHubAE\Schema\ProjectColumn;
use ApiClients\Client\GitHubAE\Schema\ProtectedBranch;
use ApiClients\Client\GitHubAE\Schema\ProtectedBranchAdminEnforced;
use ApiClients\Client\GitHubAE\Schema\ProtectedBranchPullRequestReview;
use ApiClients\Client\GitHubAE\Schema\PublicUser;
use ApiClients\Client\GitHubAE\Schema\PullRequest;
use ApiClients\Client\GitHubAE\Schema\PullRequestMergeResult;
use ApiClients\Client\GitHubAE\Schema\PullRequestReview;
use ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment;
use ApiClients\Client\GitHubAE\Schema\PullRequestReviewRequest;
use ApiClients\Client\GitHubAE\Schema\PullRequestSimple;
use ApiClients\Client\GitHubAE\Schema\RateLimitOverview;
use ApiClients\Client\GitHubAE\Schema\Reaction;
use ApiClients\Client\GitHubAE\Schema\Release;
use ApiClients\Client\GitHubAE\Schema\ReleaseAsset;
use ApiClients\Client\GitHubAE\Schema\Repository;
use ApiClients\Client\GitHubAE\Schema\RepositoryCollaboratorPermission;
use ApiClients\Client\GitHubAE\Schema\RepositoryInvitation;
use ApiClients\Client\GitHubAE\Schema\RepositorySubscription;
use ApiClients\Client\GitHubAE\Schema\Root;
use ApiClients\Client\GitHubAE\Schema\Runner;
use ApiClients\Client\GitHubAE\Schema\RunnerGroupsEnterprise;
use ApiClients\Client\GitHubAE\Schema\RunnerGroupsOrg;
use ApiClients\Client\GitHubAE\Schema\SecretScanningAlert;
use ApiClients\Client\GitHubAE\Schema\SelectedActions;
use ApiClients\Client\GitHubAE\Schema\ShortBlob;
use ApiClients\Client\GitHubAE\Schema\SimpleUser;
use ApiClients\Client\GitHubAE\Schema\Stargazer;
use ApiClients\Client\GitHubAE\Schema\StarredRepository;
use ApiClients\Client\GitHubAE\Schema\Status;
use ApiClients\Client\GitHubAE\Schema\StatusCheckPolicy;
use ApiClients\Client\GitHubAE\Schema\TeamDiscussion;
use ApiClients\Client\GitHubAE\Schema\TeamDiscussionComment;
use ApiClients\Client\GitHubAE\Schema\TeamFull;
use ApiClients\Client\GitHubAE\Schema\TeamMembership;
use ApiClients\Client\GitHubAE\Schema\TeamProject;
use ApiClients\Client\GitHubAE\Schema\TeamRepository;
use ApiClients\Client\GitHubAE\Schema\Thread;
use ApiClients\Client\GitHubAE\Schema\ThreadSubscription;
use ApiClients\Client\GitHubAE\Schema\Topic;
use ApiClients\Client\GitHubAE\Schema\WebhookConfig;
use ApiClients\Client\GitHubAE\Schema\Workflow;
use ApiClients\Client\GitHubAE\Schema\WorkflowRun;
use ApiClients\Client\GitHubAE\Schema\WorkflowRunUsage;
use ApiClients\Client\GitHubAE\Schema\WorkflowUsage;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Contracts\OpenAPI\WebHooksInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;

use function array_key_exists;
use function count;
use function explode;

final class Client implements ClientInterface
{
    private readonly Browser $browser;
    private readonly SchemaValidator $requestSchemaValidator;
    private readonly SchemaValidator $responseSchemaValidator;
    private array $router = [];
    private readonly OperationsInterface $operations;
    private readonly WebHooks $webHooks;
    private readonly Hydrators $hydrators;

    public function __construct(private readonly AuthenticationInterface $authentication, Browser $browser)
    {
        $this->browser                 = $browser->withBase('https://{hostname}/api/v3')->withFollowRedirects(false);
        $this->requestSchemaValidator  = new SchemaValidator(SchemaValidator::VALIDATE_AS_REQUEST);
        $this->responseSchemaValidator = new SchemaValidator(SchemaValidator::VALIDATE_AS_RESPONSE);
        $this->hydrators               = new Hydrators();
        $this->operations              = new Operations(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        $this->webHooks                = new WebHooks($this->requestSchemaValidator, $this->hydrators);
    }

    // phpcs:disable
    /**
     * @return ($call is Operation\Meta\Root::OPERATION_MATCH ?  : ($call is Operation\EnterpriseAdmin\ListGlobalWebhooks::OPERATION_MATCH ? iterable<Schema\GlobalHook> : ($call is Operation\EnterpriseAdmin\CreateGlobalWebhook::OPERATION_MATCH ?  : ($call is Operation\EnterpriseAdmin\GetGlobalWebhook::OPERATION_MATCH ?  : ($call is Operation\EnterpriseAdmin\DeleteGlobalWebhook::OPERATION_MATCH ? array{code: int} : ($call is Operation\EnterpriseAdmin\UpdateGlobalWebhook::OPERATION_MATCH ?  : ($call is Operation\EnterpriseAdmin\PingGlobalWebhook::OPERATION_MATCH ? array{code: int} : ($call is Operation\EnterpriseAdmin\ListPublicKeys::OPERATION_MATCH ? iterable<Schema\PublicKeyFull> : ($call is Operation\EnterpriseAdmin\DeletePublicKey::OPERATION_MATCH ? array{code: int} : ($call is Operation\EnterpriseAdmin\CreateOrg::OPERATION_MATCH ?  : ($call is Operation\EnterpriseAdmin\UpdateOrgName::OPERATION_MATCH ?  : ($call is Operation\EnterpriseAdmin\ListPreReceiveEnvironments::OPERATION_MATCH ? iterable<Schema\PreReceiveEnvironment> : ($call is Operation\EnterpriseAdmin\CreatePreReceiveEnvironment::OPERATION_MATCH ?  : ($call is Operation\EnterpriseAdmin\GetPreReceiveEnvironment::OPERATION_MATCH ?  : ($call is Operation\EnterpriseAdmin\DeletePreReceiveEnvironment::OPERATION_MATCH ? array{code: int} : ($call is Operation\EnterpriseAdmin\UpdatePreReceiveEnvironment::OPERATION_MATCH ?  : ($call is Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownload::OPERATION_MATCH ?  : ($call is Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming::OPERATION_MATCH ?  : ($call is Operation\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironment::OPERATION_MATCH ?  : ($call is Operation\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironmentStreaming::OPERATION_MATCH ?  : ($call is Operation\EnterpriseAdmin\ListPersonalAccessTokens::OPERATION_MATCH ? iterable<Schema\Authorization> : ($call is Operation\EnterpriseAdmin\DeletePersonalAccessToken::OPERATION_MATCH ? array{code: int} : ($call is Operation\EnterpriseAdmin\DeleteUser::OPERATION_MATCH ? array{code: int} : ($call is Operation\EnterpriseAdmin\CreateImpersonationOAuthToken::OPERATION_MATCH ?  : ($call is Operation\EnterpriseAdmin\DeleteImpersonationOAuthToken::OPERATION_MATCH ? array{code: int} : ($call is Operation\Apps\GetAuthenticated::OPERATION_MATCH ?  : ($call is Operation\Apps\CreateFromManifest::OPERATION_MATCH ?  : ($call is Operation\Apps\GetWebhookConfigForApp::OPERATION_MATCH ?  : ($call is Operation\Apps\UpdateWebhookConfigForApp::OPERATION_MATCH ?  : ($call is Operation\Apps\ListWebhookDeliveries::OPERATION_MATCH ? iterable<Schema\HookDeliveryItem> : ($call is Operation\Apps\GetWebhookDelivery::OPERATION_MATCH ?  : ($call is Operation\Apps\RedeliverWebhookDelivery::OPERATION_MATCH ?  : ($call is Operation\Apps\ListInstallationRequestsForAuthenticatedApp::OPERATION_MATCH ? (iterable<Schema\IntegrationInstallationRequest> | array{code: int}) : ($call is Operation\Apps\ListInstallations::OPERATION_MATCH ? iterable<Schema\Installation> : ($call is Operation\Apps\GetInstallation::OPERATION_MATCH ?  : ($call is Operation\Apps\DeleteInstallation::OPERATION_MATCH ? array{code: int} : ($call is Operation\Apps\CreateInstallationAccessToken::OPERATION_MATCH ?  : ($call is Operation\Apps\SuspendInstallation::OPERATION_MATCH ? array{code: int} : ($call is Operation\Apps\UnsuspendInstallation::OPERATION_MATCH ? array{code: int} : ($call is Operation\Apps\DeleteAuthorization::OPERATION_MATCH ? array{code: int} : ($call is Operation\Apps\CheckToken::OPERATION_MATCH ?  : ($call is Operation\Apps\DeleteToken::OPERATION_MATCH ? array{code: int} : ($call is Operation\Apps\ResetToken::OPERATION_MATCH ?  : ($call is Operation\Apps\ResetAuthorization::OPERATION_MATCH ?  : ($call is Operation\Apps\GetBySlug::OPERATION_MATCH ?  : ($call is Operation\CodesOfConduct\GetAllCodesOfConduct::OPERATION_MATCH ? (iterable<Schema\CodeOfConduct> | array{code: int}) : ($call is Operation\CodesOfConduct\GetConductCode::OPERATION_MATCH ? (Schema\CodeOfConduct | array{code: int}) : ($call is Operation\Emojis\Get::OPERATION_MATCH ? (Schema\Operations\Emojis\Get\Response\ApplicationJson\Ok\Application\Json | array{code: int}) : ($call is Operation\EnterpriseAdmin\GetAnnouncement::OPERATION_MATCH ?  : ($call is Operation\EnterpriseAdmin\RemoveAnnouncement::OPERATION_MATCH ? array{code: int} : ($call is Operation\EnterpriseAdmin\SetAnnouncement::OPERATION_MATCH ?  : ($call is Operation\EnterpriseAdmin\GetLicenseInformation::OPERATION_MATCH ?  : ($call is Operation\EnterpriseAdmin\GetAllStats::OPERATION_MATCH ?  : ($call is Operation\EnterpriseAdmin\GetCommentStats::OPERATION_MATCH ?  : ($call is Operation\EnterpriseAdmin\GetGistStats::OPERATION_MATCH ?  : ($call is Operation\EnterpriseAdmin\GetHooksStats::OPERATION_MATCH ?  : ($call is Operation\EnterpriseAdmin\GetIssueStats::OPERATION_MATCH ?  : ($call is Operation\EnterpriseAdmin\GetMilestoneStats::OPERATION_MATCH ?  : ($call is Operation\EnterpriseAdmin\GetOrgStats::OPERATION_MATCH ?  : ($call is Operation\EnterpriseAdmin\GetPagesStats::OPERATION_MATCH ?  : ($call is Operation\EnterpriseAdmin\GetPullRequestStats::OPERATION_MATCH ?  : ($call is Operation\EnterpriseAdmin\GetRepoStats::OPERATION_MATCH ?  : ($call is Operation\EnterpriseAdmin\GetUserStats::OPERATION_MATCH ?  : ($call is Operation\EnterpriseAdmin\GetGithubActionsPermissionsEnterprise::OPERATION_MATCH ?  : ($call is Operation\EnterpriseAdmin\SetGithubActionsPermissionsEnterprise::OPERATION_MATCH ? array{code: int} : ($call is Operation\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise::OPERATION_MATCH ?  : ($call is Operation\EnterpriseAdmin\SetSelectedOrganizationsEnabledGithubActionsEnterprise::OPERATION_MATCH ? array{code: int} : ($call is Operation\EnterpriseAdmin\EnableSelectedOrganizationGithubActionsEnterprise::OPERATION_MATCH ? array{code: int} : ($call is Operation\EnterpriseAdmin\DisableSelectedOrganizationGithubActionsEnterprise::OPERATION_MATCH ? array{code: int} : ($call is Operation\EnterpriseAdmin\GetAllowedActionsEnterprise::OPERATION_MATCH ?  : ($call is Operation\EnterpriseAdmin\SetAllowedActionsEnterprise::OPERATION_MATCH ? array{code: int} : ($call is Operation\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise::OPERATION_MATCH ?  : ($call is Operation\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterprise::OPERATION_MATCH ?  : ($call is Operation\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterprise::OPERATION_MATCH ?  : ($call is Operation\EnterpriseAdmin\DeleteSelfHostedRunnerGroupFromEnterprise::OPERATION_MATCH ? array{code: int} : ($call is Operation\EnterpriseAdmin\UpdateSelfHostedRunnerGroupForEnterprise::OPERATION_MATCH ?  : ($call is Operation\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise::OPERATION_MATCH ?  : ($call is Operation\EnterpriseAdmin\SetSelfHostedRunnersInGroupForEnterprise::OPERATION_MATCH ? array{code: int} : ($call is Operation\EnterpriseAdmin\AddSelfHostedRunnerToGroupForEnterprise::OPERATION_MATCH ? array{code: int} : ($call is Operation\EnterpriseAdmin\RemoveSelfHostedRunnerFromGroupForEnterprise::OPERATION_MATCH ? array{code: int} : ($call is Operation\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise::OPERATION_MATCH ?  : ($call is Operation\EnterpriseAdmin\ListRunnerApplicationsForEnterprise::OPERATION_MATCH ? iterable<Schema\RunnerApplication> : ($call is Operation\EnterpriseAdmin\CreateRegistrationTokenForEnterprise::OPERATION_MATCH ?  : ($call is Operation\EnterpriseAdmin\CreateRemoveTokenForEnterprise::OPERATION_MATCH ?  : ($call is Operation\EnterpriseAdmin\GetSelfHostedRunnerForEnterprise::OPERATION_MATCH ?  : ($call is Operation\EnterpriseAdmin\DeleteSelfHostedRunnerFromEnterprise::OPERATION_MATCH ? array{code: int} : ($call is Operation\EnterpriseAdmin\GetAuditLog::OPERATION_MATCH ? iterable<Schema\AuditLogEvent> : ($call is Operation\SecretScanning\ListAlertsForEnterprise::OPERATION_MATCH ? iterable<Schema\OrganizationSecretScanningAlert> : ($call is Operation\Activity\GetFeeds::OPERATION_MATCH ?  : ($call is Operation\Gists\List_::OPERATION_MATCH ? (iterable<Schema\BaseGist> | array{code: int}) : ($call is Operation\Gists\Create::OPERATION_MATCH ? (Schema\GistSimple | array{code: int}) : ($call is Operation\Gists\ListPublic::OPERATION_MATCH ? (iterable<Schema\BaseGist> | array{code: int}) : ($call is Operation\Gists\ListStarred::OPERATION_MATCH ? (iterable<Schema\BaseGist> | array{code: int}) : ($call is Operation\Gists\Get::OPERATION_MATCH ? (Schema\GistSimple | array{code: int}) : ($call is Operation\Gists\Delete::OPERATION_MATCH ? array{code: int} : ($call is Operation\Gists\Update::OPERATION_MATCH ?  : ($call is Operation\Gists\ListComments::OPERATION_MATCH ? (iterable<Schema\GistComment> | array{code: int}) : ($call is Operation\Gists\CreateComment::OPERATION_MATCH ? (Schema\GistComment | array{code: int}) : ($call is Operation\Gists\GetComment::OPERATION_MATCH ? (Schema\GistComment | array{code: int}) : ($call is Operation\Gists\DeleteComment::OPERATION_MATCH ? array{code: int} : ($call is Operation\Gists\UpdateComment::OPERATION_MATCH ?  : ($call is Operation\Gists\ListCommits::OPERATION_MATCH ? (iterable<Schema\GistCommit> | array{code: int}) : ($call is Operation\Gists\ListForks::OPERATION_MATCH ? (iterable<Schema\GistSimple> | array{code: int}) : ($call is Operation\Gists\Fork::OPERATION_MATCH ? (Schema\BaseGist | array{code: int}) : ($call is Operation\Gists\CheckIsStarred::OPERATION_MATCH ? array{code: int} : ($call is Operation\Gists\Star::OPERATION_MATCH ? array{code: int} : ($call is Operation\Gists\Unstar::OPERATION_MATCH ? array{code: int} : ($call is Operation\Gists\GetRevision::OPERATION_MATCH ?  : ($call is Operation\Gitignore\GetAllTemplates::OPERATION_MATCH ? (iterable<string> | array{code: int}) : ($call is Operation\Gitignore\GetTemplate::OPERATION_MATCH ? (Schema\GitignoreTemplate | array{code: int}) : ($call is Operation\Apps\ListReposAccessibleToInstallation::OPERATION_MATCH ? (Schema\Operations\Apps\ListReposAccessibleToInstallation\Response\ApplicationJson\Ok | array{code: int}) : ($call is Operation\Apps\RevokeInstallationAccessToken::OPERATION_MATCH ? array{code: int} : ($call is Operation\Issues\List_::OPERATION_MATCH ? (iterable<Schema\Issue> | array{code: int}) : ($call is Operation\Licenses\GetAllCommonlyUsed::OPERATION_MATCH ? (iterable<Schema\LicenseSimple> | array{code: int}) : ($call is Operation\Licenses\Get::OPERATION_MATCH ? (Schema\License | array{code: int}) : ($call is Operation\Markdown\Render::OPERATION_MATCH ? (string | array{code: int}) : ($call is Operation\Markdown\RenderRaw::OPERATION_MATCH ? (string | array{code: int}) : ($call is Operation\Meta\Get::OPERATION_MATCH ? (Schema\ApiOverview | array{code: int}) : ($call is Operation\Activity\ListNotificationsForAuthenticatedUser::OPERATION_MATCH ? (iterable<Schema\Thread> | array{code: int}) : ($call is Operation\Activity\MarkNotificationsAsRead::OPERATION_MATCH ? (Schema\Operations\Activity\MarkNotificationsAsRead\Response\ApplicationJson\Accepted | array{code: int}) : ($call is Operation\Activity\GetThread::OPERATION_MATCH ? (Schema\Thread | array{code: int}) : ($call is Operation\Activity\MarkThreadAsRead::OPERATION_MATCH ? array{code: int} : ($call is Operation\Activity\GetThreadSubscriptionForAuthenticatedUser::OPERATION_MATCH ? (Schema\ThreadSubscription | array{code: int}) : ($call is Operation\Activity\SetThreadSubscription::OPERATION_MATCH ? (Schema\ThreadSubscription | array{code: int}) : ($call is Operation\Activity\DeleteThreadSubscription::OPERATION_MATCH ? array{code: int} : ($call is Operation\Meta\GetOctocat::OPERATION_MATCH ?  : ($call is Operation\Orgs\List_::OPERATION_MATCH ? (iterable<Schema\OrganizationSimple> | array{code: int}) : ($call is Operation\Orgs\Get::OPERATION_MATCH ?  : ($call is Operation\Orgs\Update::OPERATION_MATCH ? Schema\OrganizationFull : ($call is Operation\Actions\GetGithubActionsPermissionsOrganization::OPERATION_MATCH ?  : ($call is Operation\Actions\SetGithubActionsPermissionsOrganization::OPERATION_MATCH ? array{code: int} : ($call is Operation\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization::OPERATION_MATCH ?  : ($call is Operation\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization::OPERATION_MATCH ? array{code: int} : ($call is Operation\Actions\EnableSelectedRepositoryGithubActionsOrganization::OPERATION_MATCH ? array{code: int} : ($call is Operation\Actions\DisableSelectedRepositoryGithubActionsOrganization::OPERATION_MATCH ? array{code: int} : ($call is Operation\Actions\GetAllowedActionsOrganization::OPERATION_MATCH ?  : ($call is Operation\Actions\SetAllowedActionsOrganization::OPERATION_MATCH ? array{code: int} : ($call is Operation\Actions\GetGithubActionsDefaultWorkflowPermissionsOrganization::OPERATION_MATCH ?  : ($call is Operation\Actions\SetGithubActionsDefaultWorkflowPermissionsOrganization::OPERATION_MATCH ? array{code: int} : ($call is Operation\Actions\ListSelfHostedRunnerGroupsForOrg::OPERATION_MATCH ?  : ($call is Operation\Actions\CreateSelfHostedRunnerGroupForOrg::OPERATION_MATCH ?  : ($call is Operation\Actions\GetSelfHostedRunnerGroupForOrg::OPERATION_MATCH ?  : ($call is Operation\Actions\DeleteSelfHostedRunnerGroupFromOrg::OPERATION_MATCH ? array{code: int} : ($call is Operation\Actions\UpdateSelfHostedRunnerGroupForOrg::OPERATION_MATCH ?  : ($call is Operation\Actions\AddSelfHostedRunnerToGroupForOrg::OPERATION_MATCH ? array{code: int} : ($call is Operation\Actions\ListSelfHostedRunnersForOrg::OPERATION_MATCH ?  : ($call is Operation\Actions\ListRunnerApplicationsForOrg::OPERATION_MATCH ? iterable<Schema\RunnerApplication> : ($call is Operation\Actions\CreateRegistrationTokenForOrg::OPERATION_MATCH ?  : ($call is Operation\Actions\CreateRemoveTokenForOrg::OPERATION_MATCH ?  : ($call is Operation\Actions\GetSelfHostedRunnerForOrg::OPERATION_MATCH ?  : ($call is Operation\Actions\DeleteSelfHostedRunnerFromOrg::OPERATION_MATCH ? array{code: int} : ($call is Operation\Actions\ListOrgSecrets::OPERATION_MATCH ?  : ($call is Operation\Actions\GetOrgPublicKey::OPERATION_MATCH ?  : ($call is Operation\Actions\GetOrgSecret::OPERATION_MATCH ?  : ($call is Operation\Actions\CreateOrUpdateOrgSecret::OPERATION_MATCH ? (Schema\EmptyObject | array{code: int}) : ($call is Operation\Actions\DeleteOrgSecret::OPERATION_MATCH ? array{code: int} : ($call is Operation\Actions\ListSelectedReposForOrgSecret::OPERATION_MATCH ?  : ($call is Operation\Actions\SetSelectedReposForOrgSecret::OPERATION_MATCH ? array{code: int} : ($call is Operation\Actions\AddSelectedRepoToOrgSecret::OPERATION_MATCH ? array{code: int} : ($call is Operation\Actions\RemoveSelectedRepoFromOrgSecret::OPERATION_MATCH ? array{code: int} : ($call is Operation\Orgs\GetAuditLog::OPERATION_MATCH ? iterable<Schema\AuditLogEvent> : ($call is Operation\CodeScanning\ListAlertsForOrg::OPERATION_MATCH ? iterable<Schema\CodeScanningOrganizationAlertItems> : ($call is Operation\Teams\ExternalIdpGroupInfoForOrg::OPERATION_MATCH ?  : ($call is Operation\Teams\ListExternalIdpGroupsForOrg::OPERATION_MATCH ?  : ($call is Operation\Orgs\ListWebhooks::OPERATION_MATCH ? iterable<Schema\OrgHook> : ($call is Operation\Orgs\CreateWebhook::OPERATION_MATCH ?  : ($call is Operation\Orgs\GetWebhook::OPERATION_MATCH ?  : ($call is Operation\Orgs\DeleteWebhook::OPERATION_MATCH ? array{code: int} : ($call is Operation\Orgs\UpdateWebhook::OPERATION_MATCH ?  : ($call is Operation\Orgs\GetWebhookConfigForOrg::OPERATION_MATCH ?  : ($call is Operation\Orgs\UpdateWebhookConfigForOrg::OPERATION_MATCH ?  : ($call is Operation\Orgs\ListWebhookDeliveries::OPERATION_MATCH ? iterable<Schema\HookDeliveryItem> : ($call is Operation\Orgs\GetWebhookDelivery::OPERATION_MATCH ?  : ($call is Operation\Orgs\RedeliverWebhookDelivery::OPERATION_MATCH ?  : ($call is Operation\Orgs\PingWebhook::OPERATION_MATCH ? array{code: int} : ($call is Operation\Apps\GetOrgInstallation::OPERATION_MATCH ?  : ($call is Operation\Orgs\ListAppInstallations::OPERATION_MATCH ?  : ($call is Operation\Issues\ListForOrg::OPERATION_MATCH ? iterable<Schema\Issue> : ($call is Operation\Orgs\ListMembers::OPERATION_MATCH ? iterable<Schema\SimpleUser> : ($call is Operation\Orgs\CheckMembershipForUser::OPERATION_MATCH ? (array{code: int} | array{code: int, location: string}) : ($call is Operation\Orgs\RemoveMember::OPERATION_MATCH ? array{code: int} : ($call is Operation\Orgs\GetMembershipForUser::OPERATION_MATCH ?  : ($call is Operation\Orgs\SetMembershipForUser::OPERATION_MATCH ?  : ($call is Operation\Orgs\RemoveMembershipForUser::OPERATION_MATCH ? array{code: int} : ($call is Operation\Migrations\ListForOrg::OPERATION_MATCH ? iterable<Schema\Migration> : ($call is Operation\Migrations\StartForOrg::OPERATION_MATCH ?  : ($call is Operation\Migrations\GetStatusForOrg::OPERATION_MATCH ?  : ($call is Operation\Migrations\DownloadArchiveForOrg::OPERATION_MATCH ? array{code: int} : ($call is Operation\Migrations\DownloadArchiveForOrgStreaming::OPERATION_MATCH ? Observable<string> : ($call is Operation\Migrations\DeleteArchiveForOrg::OPERATION_MATCH ? array{code: int} : ($call is Operation\Migrations\UnlockRepoForOrg::OPERATION_MATCH ? array{code: int} : ($call is Operation\Migrations\ListReposForOrg::OPERATION_MATCH ? iterable<Schema\MinimalRepository> : ($call is Operation\Orgs\ListOutsideCollaborators::OPERATION_MATCH ? iterable<Schema\SimpleUser> : ($call is Operation\Orgs\ConvertMemberToOutsideCollaborator::OPERATION_MATCH ? (Schema\Operations\Orgs\ConvertMemberToOutsideCollaborator\Response\ApplicationJson\Accepted\Application\Json | array{code: int}) : ($call is Operation\Orgs\RemoveOutsideCollaborator::OPERATION_MATCH ? array{code: int} : ($call is Operation\Projects\ListForOrg::OPERATION_MATCH ? iterable<Schema\Project> : ($call is Operation\Projects\CreateForOrg::OPERATION_MATCH ?  : ($call is Operation\Repos\ListForOrg::OPERATION_MATCH ? iterable<Schema\MinimalRepository> : ($call is Operation\Repos\CreateInOrg::OPERATION_MATCH ?  : ($call is Operation\Teams\List_::OPERATION_MATCH ? iterable<Schema\Team> : ($call is Operation\Teams\Create::OPERATION_MATCH ?  : ($call is Operation\Teams\GetByName::OPERATION_MATCH ?  : ($call is Operation\Teams\DeleteInOrg::OPERATION_MATCH ? array{code: int} : ($call is Operation\Teams\UpdateInOrg::OPERATION_MATCH ?  : ($call is Operation\Teams\ListDiscussionsInOrg::OPERATION_MATCH ? iterable<Schema\TeamDiscussion> : ($call is Operation\Teams\CreateDiscussionInOrg::OPERATION_MATCH ?  : ($call is Operation\Teams\GetDiscussionInOrg::OPERATION_MATCH ?  : ($call is Operation\Teams\DeleteDiscussionInOrg::OPERATION_MATCH ? array{code: int} : ($call is Operation\Teams\UpdateDiscussionInOrg::OPERATION_MATCH ?  : ($call is Operation\Teams\ListDiscussionCommentsInOrg::OPERATION_MATCH ? iterable<Schema\TeamDiscussionComment> : ($call is Operation\Teams\CreateDiscussionCommentInOrg::OPERATION_MATCH ?  : ($call is Operation\Teams\GetDiscussionCommentInOrg::OPERATION_MATCH ?  : ($call is Operation\Teams\DeleteDiscussionCommentInOrg::OPERATION_MATCH ? array{code: int} : ($call is Operation\Teams\UpdateDiscussionCommentInOrg::OPERATION_MATCH ?  : ($call is Operation\Reactions\ListForTeamDiscussionCommentInOrg::OPERATION_MATCH ? iterable<Schema\Reaction> : ($call is Operation\Reactions\CreateForTeamDiscussionCommentInOrg::OPERATION_MATCH ?  : ($call is Operation\Reactions\DeleteForTeamDiscussionComment::OPERATION_MATCH ? array{code: int} : ($call is Operation\Reactions\ListForTeamDiscussionInOrg::OPERATION_MATCH ? iterable<Schema\Reaction> : ($call is Operation\Reactions\CreateForTeamDiscussionInOrg::OPERATION_MATCH ?  : ($call is Operation\Reactions\DeleteForTeamDiscussion::OPERATION_MATCH ? array{code: int} : ($call is Operation\Teams\UnlinkExternalIdpGroupFromTeamForOrg::OPERATION_MATCH ? array{code: int} : ($call is Operation\Teams\LinkExternalIdpGroupToTeamForOrg::OPERATION_MATCH ?  : ($call is Operation\Teams\ListMembersInOrg::OPERATION_MATCH ? iterable<Schema\SimpleUser> : ($call is Operation\Teams\GetMembershipForUserInOrg::OPERATION_MATCH ? (Schema\TeamMembership | array{code: int}) : ($call is Operation\Teams\AddOrUpdateMembershipForUserInOrg::OPERATION_MATCH ? (Schema\TeamMembership | array{code: int}) : ($call is Operation\Teams\RemoveMembershipForUserInOrg::OPERATION_MATCH ? array{code: int} : ($call is Operation\Teams\ListProjectsInOrg::OPERATION_MATCH ? iterable<Schema\TeamProject> : ($call is Operation\Teams\CheckPermissionsForProjectInOrg::OPERATION_MATCH ? (Schema\TeamProject | array{code: int}) : ($call is Operation\Teams\AddOrUpdateProjectPermissionsInOrg::OPERATION_MATCH ? array{code: int} : ($call is Operation\Teams\RemoveProjectInOrg::OPERATION_MATCH ? array{code: int} : ($call is Operation\Teams\ListReposInOrg::OPERATION_MATCH ? iterable<Schema\MinimalRepository> : ($call is Operation\Teams\CheckPermissionsForRepoInOrg::OPERATION_MATCH ? (Schema\TeamRepository | array{code: int}) : ($call is Operation\Teams\AddOrUpdateRepoPermissionsInOrg::OPERATION_MATCH ? array{code: int} : ($call is Operation\Teams\RemoveRepoInOrg::OPERATION_MATCH ? array{code: int} : ($call is Operation\Teams\ListChildInOrg::OPERATION_MATCH ? iterable<Schema\Team> : ($call is Operation\Projects\GetCard::OPERATION_MATCH ? (Schema\ProjectCard | array{code: int}) : ($call is Operation\Projects\DeleteCard::OPERATION_MATCH ? array{code: int} : ($call is Operation\Projects\UpdateCard::OPERATION_MATCH ? (Schema\ProjectCard | array{code: int}) : ($call is Operation\Projects\MoveCard::OPERATION_MATCH ? (Schema\Operations\Projects\MoveCard\Response\ApplicationJson\Created\Application\Json | array{code: int}) : ($call is Operation\Projects\GetColumn::OPERATION_MATCH ? (Schema\ProjectColumn | array{code: int}) : ($call is Operation\Projects\DeleteColumn::OPERATION_MATCH ? array{code: int} : ($call is Operation\Projects\UpdateColumn::OPERATION_MATCH ? (Schema\ProjectColumn | array{code: int}) : ($call is Operation\Projects\ListCards::OPERATION_MATCH ? (iterable<Schema\ProjectCard> | array{code: int}) : ($call is Operation\Projects\CreateCard::OPERATION_MATCH ? (Schema\ProjectCard | array{code: int}) : ($call is Operation\Projects\MoveColumn::OPERATION_MATCH ? (Schema\Operations\Projects\MoveColumn\Response\ApplicationJson\Created\Application\Json | array{code: int}) : ($call is Operation\Projects\Get::OPERATION_MATCH ? (Schema\Project | array{code: int}) : ($call is Operation\Projects\Delete::OPERATION_MATCH ? array{code: int} : ($call is Operation\Projects\Update::OPERATION_MATCH ? (Schema\Project | array{code: int}) : ($call is Operation\Projects\ListCollaborators::OPERATION_MATCH ? (iterable<Schema\SimpleUser> | array{code: int}) : ($call is Operation\Projects\AddCollaborator::OPERATION_MATCH ? array{code: int} : ($call is Operation\Projects\RemoveCollaborator::OPERATION_MATCH ? array{code: int} : ($call is Operation\Projects\GetPermissionForUser::OPERATION_MATCH ? (Schema\ProjectCollaboratorPermission | array{code: int}) : ($call is Operation\Projects\ListColumns::OPERATION_MATCH ? (iterable<Schema\ProjectColumn> | array{code: int}) : ($call is Operation\Projects\CreateColumn::OPERATION_MATCH ? (Schema\ProjectColumn | array{code: int}) : ($call is Operation\RateLimit\Get::OPERATION_MATCH ? (Schema\RateLimitOverview | array{code: int}) : ($call is Operation\Repos\Get::OPERATION_MATCH ?  : ($call is Operation\Repos\Delete::OPERATION_MATCH ? (Schema\BasicError | array{code: int}) : ($call is Operation\Repos\Update::OPERATION_MATCH ?  : ($call is Operation\Actions\ListArtifactsForRepo::OPERATION_MATCH ?  : ($call is Operation\Actions\GetArtifact::OPERATION_MATCH ?  : ($call is Operation\Actions\DeleteArtifact::OPERATION_MATCH ? array{code: int} : ($call is Operation\Actions\DownloadArtifact::OPERATION_MATCH ? array{code: int, location: string} : ($call is Operation\Actions\DownloadArtifactStreaming::OPERATION_MATCH ? Observable<string> : ($call is Operation\Actions\GetJobForWorkflowRun::OPERATION_MATCH ?  : ($call is Operation\Actions\DownloadJobLogsForWorkflowRun::OPERATION_MATCH ? array{code: int, location: string} : ($call is Operation\Actions\DownloadJobLogsForWorkflowRunStreaming::OPERATION_MATCH ? Observable<string> : ($call is Operation\Actions\ListRepoOrganizationSecrets::OPERATION_MATCH ?  : ($call is Operation\Actions\GetGithubActionsPermissionsRepository::OPERATION_MATCH ?  : ($call is Operation\Actions\SetGithubActionsPermissionsRepository::OPERATION_MATCH ? array{code: int} : ($call is Operation\Actions\GetAllowedActionsRepository::OPERATION_MATCH ?  : ($call is Operation\Actions\SetAllowedActionsRepository::OPERATION_MATCH ? array{code: int} : ($call is Operation\Actions\ListSelfHostedRunnersForRepo::OPERATION_MATCH ?  : ($call is Operation\Actions\ListRunnerApplicationsForRepo::OPERATION_MATCH ? iterable<Schema\RunnerApplication> : ($call is Operation\Actions\CreateRegistrationTokenForRepo::OPERATION_MATCH ?  : ($call is Operation\Actions\CreateRemoveTokenForRepo::OPERATION_MATCH ?  : ($call is Operation\Actions\GetSelfHostedRunnerForRepo::OPERATION_MATCH ?  : ($call is Operation\Actions\DeleteSelfHostedRunnerFromRepo::OPERATION_MATCH ? array{code: int} : ($call is Operation\Actions\ListWorkflowRunsForRepo::OPERATION_MATCH ?  : ($call is Operation\Actions\GetWorkflowRun::OPERATION_MATCH ?  : ($call is Operation\Actions\DeleteWorkflowRun::OPERATION_MATCH ? array{code: int} : ($call is Operation\Actions\ListWorkflowRunArtifacts::OPERATION_MATCH ?  : ($call is Operation\Actions\GetWorkflowRunAttempt::OPERATION_MATCH ?  : ($call is Operation\Actions\ListJobsForWorkflowRunAttempt::OPERATION_MATCH ?  : ($call is Operation\Actions\DownloadWorkflowRunAttemptLogs::OPERATION_MATCH ? array{code: int, location: string} : ($call is Operation\Actions\DownloadWorkflowRunAttemptLogsStreaming::OPERATION_MATCH ? Observable<string> : ($call is Operation\Actions\CancelWorkflowRun::OPERATION_MATCH ?  : ($call is Operation\Actions\ListJobsForWorkflowRun::OPERATION_MATCH ?  : ($call is Operation\Actions\DownloadWorkflowRunLogs::OPERATION_MATCH ? array{code: int, location: string} : ($call is Operation\Actions\DownloadWorkflowRunLogsStreaming::OPERATION_MATCH ? Observable<string> : ($call is Operation\Actions\DeleteWorkflowRunLogs::OPERATION_MATCH ? array{code: int} : ($call is Operation\Actions\ReRunWorkflow::OPERATION_MATCH ?  : ($call is Operation\Actions\GetWorkflowRunUsage::OPERATION_MATCH ?  : ($call is Operation\Actions\ListRepoSecrets::OPERATION_MATCH ?  : ($call is Operation\Actions\GetRepoPublicKey::OPERATION_MATCH ?  : ($call is Operation\Actions\GetRepoSecret::OPERATION_MATCH ?  : ($call is Operation\Actions\CreateOrUpdateRepoSecret::OPERATION_MATCH ? (Schema\EmptyObject | array{code: int}) : ($call is Operation\Actions\DeleteRepoSecret::OPERATION_MATCH ? array{code: int} : ($call is Operation\Actions\ListRepoWorkflows::OPERATION_MATCH ?  : ($call is Operation\Actions\GetWorkflow::OPERATION_MATCH ?  : ($call is Operation\Actions\DisableWorkflow::OPERATION_MATCH ? array{code: int} : ($call is Operation\Actions\CreateWorkflowDispatch::OPERATION_MATCH ? array{code: int} : ($call is Operation\Actions\EnableWorkflow::OPERATION_MATCH ? array{code: int} : ($call is Operation\Actions\ListWorkflowRuns::OPERATION_MATCH ?  : ($call is Operation\Actions\GetWorkflowUsage::OPERATION_MATCH ?  : ($call is Operation\Issues\ListAssignees::OPERATION_MATCH ? iterable<Schema\SimpleUser> : ($call is Operation\Issues\CheckUserCanBeAssigned::OPERATION_MATCH ? array{code: int} : ($call is Operation\Repos\ListAutolinks::OPERATION_MATCH ? iterable<Schema\Autolink> : ($call is Operation\Repos\CreateAutolink::OPERATION_MATCH ?  : ($call is Operation\Repos\GetAutolink::OPERATION_MATCH ?  : ($call is Operation\Repos\DeleteAutolink::OPERATION_MATCH ? array{code: int} : ($call is Operation\Repos\ListBranches::OPERATION_MATCH ? iterable<Schema\ShortBranch> : ($call is Operation\Repos\GetBranch::OPERATION_MATCH ?  : ($call is Operation\Repos\GetBranchProtection::OPERATION_MATCH ?  : ($call is Operation\Repos\UpdateBranchProtection::OPERATION_MATCH ?  : ($call is Operation\Repos\DeleteBranchProtection::OPERATION_MATCH ? array{code: int} : ($call is Operation\Repos\GetAdminBranchProtection::OPERATION_MATCH ?  : ($call is Operation\Repos\SetAdminBranchProtection::OPERATION_MATCH ?  : ($call is Operation\Repos\DeleteAdminBranchProtection::OPERATION_MATCH ? array{code: int} : ($call is Operation\Repos\GetPullRequestReviewProtection::OPERATION_MATCH ?  : ($call is Operation\Repos\DeletePullRequestReviewProtection::OPERATION_MATCH ? array{code: int} : ($call is Operation\Repos\UpdatePullRequestReviewProtection::OPERATION_MATCH ?  : ($call is Operation\Repos\GetCommitSignatureProtection::OPERATION_MATCH ?  : ($call is Operation\Repos\CreateCommitSignatureProtection::OPERATION_MATCH ?  : ($call is Operation\Repos\DeleteCommitSignatureProtection::OPERATION_MATCH ? array{code: int} : ($call is Operation\Repos\GetStatusChecksProtection::OPERATION_MATCH ?  : ($call is Operation\Repos\RemoveStatusCheckProtection::OPERATION_MATCH ? array{code: int} : ($call is Operation\Repos\UpdateStatusCheckProtection::OPERATION_MATCH ?  : ($call is Operation\Repos\GetAllStatusCheckContexts::OPERATION_MATCH ? iterable<string> : ($call is Operation\Repos\SetStatusCheckContexts::OPERATION_MATCH ? iterable<string> : ($call is Operation\Repos\AddStatusCheckContexts::OPERATION_MATCH ? iterable<string> : ($call is Operation\Repos\RemoveStatusCheckContexts::OPERATION_MATCH ? iterable<string> : ($call is Operation\Repos\GetAccessRestrictions::OPERATION_MATCH ?  : ($call is Operation\Repos\DeleteAccessRestrictions::OPERATION_MATCH ? array{code: int} : ($call is Operation\Repos\GetAppsWithAccessToProtectedBranch::OPERATION_MATCH ? iterable<Schema\Integration> : ($call is Operation\Repos\SetAppAccessRestrictions::OPERATION_MATCH ? iterable<Schema\Integration> : ($call is Operation\Repos\AddAppAccessRestrictions::OPERATION_MATCH ? iterable<Schema\Integration> : ($call is Operation\Repos\RemoveAppAccessRestrictions::OPERATION_MATCH ? iterable<Schema\Integration> : ($call is Operation\Repos\GetTeamsWithAccessToProtectedBranch::OPERATION_MATCH ? iterable<Schema\Team> : ($call is Operation\Repos\SetTeamAccessRestrictions::OPERATION_MATCH ? iterable<Schema\Team> : ($call is Operation\Repos\AddTeamAccessRestrictions::OPERATION_MATCH ? iterable<Schema\Team> : ($call is Operation\Repos\RemoveTeamAccessRestrictions::OPERATION_MATCH ? iterable<Schema\Team> : ($call is Operation\Repos\GetUsersWithAccessToProtectedBranch::OPERATION_MATCH ? iterable<Schema\SimpleUser> : ($call is Operation\Repos\SetUserAccessRestrictions::OPERATION_MATCH ? iterable<Schema\SimpleUser> : ($call is Operation\Repos\AddUserAccessRestrictions::OPERATION_MATCH ? iterable<Schema\SimpleUser> : ($call is Operation\Repos\RemoveUserAccessRestrictions::OPERATION_MATCH ? iterable<Schema\SimpleUser> : ($call is Operation\Checks\Create::OPERATION_MATCH ?  : ($call is Operation\Checks\Get::OPERATION_MATCH ?  : ($call is Operation\Checks\Update::OPERATION_MATCH ?  : ($call is Operation\Checks\ListAnnotations::OPERATION_MATCH ? iterable<Schema\CheckAnnotation> : ($call is Operation\Checks\RerequestRun::OPERATION_MATCH ?  : ($call is Operation\Checks\CreateSuite::OPERATION_MATCH ?  : ($call is Operation\Checks\SetSuitesPreferences::OPERATION_MATCH ?  : ($call is Operation\Checks\GetSuite::OPERATION_MATCH ?  : ($call is Operation\Checks\ListForSuite::OPERATION_MATCH ?  : ($call is Operation\Checks\RerequestSuite::OPERATION_MATCH ?  : ($call is Operation\CodeScanning\ListAlertsForRepo::OPERATION_MATCH ? (iterable<Schema\CodeScanningAlertItems> | array{code: int}) : ($call is Operation\CodeScanning\GetAlert::OPERATION_MATCH ? (Schema\CodeScanningAlert | array{code: int}) : ($call is Operation\CodeScanning\UpdateAlert::OPERATION_MATCH ?  : ($call is Operation\CodeScanning\ListAlertInstances::OPERATION_MATCH ? iterable<Schema\CodeScanningAlertInstance> : ($call is Operation\CodeScanning\ListRecentAnalyses::OPERATION_MATCH ? iterable<Schema\CodeScanningAnalysis> : ($call is Operation\CodeScanning\GetAnalysis::OPERATION_MATCH ?  : ($call is Operation\CodeScanning\DeleteAnalysis::OPERATION_MATCH ?  : ($call is Operation\CodeScanning\UploadSarif::OPERATION_MATCH ? (Schema\CodeScanningSarifsReceipt | array{code: int}) : ($call is Operation\CodeScanning\GetSarif::OPERATION_MATCH ? (Schema\CodeScanningSarifsStatus | array{code: int}) : ($call is Operation\Repos\CodeownersErrors::OPERATION_MATCH ? (Schema\CodeownersErrors | array{code: int}) : ($call is Operation\Repos\ListCollaborators::OPERATION_MATCH ? iterable<Schema\Collaborator> : ($call is Operation\Repos\CheckCollaborator::OPERATION_MATCH ? array{code: int} : ($call is Operation\Repos\AddCollaborator::OPERATION_MATCH ? (Schema\RepositoryInvitation | array{code: int}) : ($call is Operation\Repos\RemoveCollaborator::OPERATION_MATCH ? array{code: int} : ($call is Operation\Repos\GetCollaboratorPermissionLevel::OPERATION_MATCH ?  : ($call is Operation\Repos\ListCommitCommentsForRepo::OPERATION_MATCH ? iterable<Schema\CommitComment> : ($call is Operation\Repos\GetCommitComment::OPERATION_MATCH ?  : ($call is Operation\Repos\DeleteCommitComment::OPERATION_MATCH ? array{code: int} : ($call is Operation\Repos\UpdateCommitComment::OPERATION_MATCH ?  : ($call is Operation\Reactions\ListForCommitComment::OPERATION_MATCH ? iterable<Schema\Reaction> : ($call is Operation\Reactions\CreateForCommitComment::OPERATION_MATCH ?  : ($call is Operation\Reactions\DeleteForCommitComment::OPERATION_MATCH ? array{code: int} : ($call is Operation\Repos\ListCommits::OPERATION_MATCH ? iterable<Schema\Commit> : ($call is Operation\Repos\ListBranchesForHeadCommit::OPERATION_MATCH ? iterable<Schema\BranchShort> : ($call is Operation\Repos\ListCommentsForCommit::OPERATION_MATCH ? iterable<Schema\CommitComment> : ($call is Operation\Repos\CreateCommitComment::OPERATION_MATCH ?  : ($call is Operation\Repos\ListPullRequestsAssociatedWithCommit::OPERATION_MATCH ? iterable<Schema\PullRequestSimple> : ($call is Operation\Repos\GetCommit::OPERATION_MATCH ?  : ($call is Operation\Checks\ListForRef::OPERATION_MATCH ?  : ($call is Operation\Checks\ListSuitesForRef::OPERATION_MATCH ?  : ($call is Operation\Repos\GetCombinedStatusForRef::OPERATION_MATCH ?  : ($call is Operation\Repos\ListCommitStatusesForRef::OPERATION_MATCH ? (iterable<Schema\Status> | Schema\BasicError) : ($call is Operation\Repos\CompareCommits::OPERATION_MATCH ?  : ($call is Operation\Repos\GetContent::OPERATION_MATCH ? (Schema\ContentDirectory | Schema\ContentFile | Schema\ContentSymlink | Schema\ContentSubmodule | array{code: int}) : ($call is Operation\Repos\CreateOrUpdateFileContents::OPERATION_MATCH ?  : ($call is Operation\Repos\DeleteFile::OPERATION_MATCH ?  : ($call is Operation\Repos\ListContributors::OPERATION_MATCH ? (iterable<Schema\Contributor> | array{code: int}) : ($call is Operation\Repos\ListDeployments::OPERATION_MATCH ? iterable<Schema\Deployment> : ($call is Operation\Repos\CreateDeployment::OPERATION_MATCH ? (Schema\Deployment | Schema\Operations\Repos\CreateDeployment\Response\ApplicationJson\Accepted\Application\Json | array{code: int}) : ($call is Operation\Repos\GetDeployment::OPERATION_MATCH ?  : ($call is Operation\Repos\DeleteDeployment::OPERATION_MATCH ? array{code: int} : ($call is Operation\Repos\ListDeploymentStatuses::OPERATION_MATCH ? iterable<Schema\DeploymentStatus> : ($call is Operation\Repos\CreateDeploymentStatus::OPERATION_MATCH ?  : ($call is Operation\Repos\GetDeploymentStatus::OPERATION_MATCH ?  : ($call is Operation\Repos\CreateDispatchEvent::OPERATION_MATCH ? array{code: int} : ($call is Operation\Repos\GetAllEnvironments::OPERATION_MATCH ?  : ($call is Operation\Repos\GetEnvironment::OPERATION_MATCH ?  : ($call is Operation\Repos\CreateOrUpdateEnvironment::OPERATION_MATCH ?  : ($call is Operation\Repos\DeleteAnEnvironment::OPERATION_MATCH ? array{code: int} : ($call is Operation\Repos\ListDeploymentBranchPolicies::OPERATION_MATCH ?  : ($call is Operation\Repos\CreateDeploymentBranchPolicy::OPERATION_MATCH ? (Schema\DeploymentBranchPolicy | array{code: int}) : ($call is Operation\Repos\GetDeploymentBranchPolicy::OPERATION_MATCH ?  : ($call is Operation\Repos\UpdateDeploymentBranchPolicy::OPERATION_MATCH ?  : ($call is Operation\Repos\DeleteDeploymentBranchPolicy::OPERATION_MATCH ? array{code: int} : ($call is Operation\Activity\ListRepoEvents::OPERATION_MATCH ? iterable<Schema\Event> : ($call is Operation\Repos\ListForks::OPERATION_MATCH ? iterable<Schema\MinimalRepository> : ($call is Operation\Repos\CreateFork::OPERATION_MATCH ?  : ($call is Operation\Git\CreateBlob::OPERATION_MATCH ?  : ($call is Operation\Git\GetBlob::OPERATION_MATCH ?  : ($call is Operation\Git\CreateCommit::OPERATION_MATCH ?  : ($call is Operation\Git\GetCommit::OPERATION_MATCH ?  : ($call is Operation\Git\ListMatchingRefs::OPERATION_MATCH ? iterable<Schema\GitRef> : ($call is Operation\Git\GetRef::OPERATION_MATCH ?  : ($call is Operation\Git\CreateRef::OPERATION_MATCH ?  : ($call is Operation\Git\DeleteRef::OPERATION_MATCH ? array{code: int} : ($call is Operation\Git\UpdateRef::OPERATION_MATCH ? Schema\GitRef : ($call is Operation\Git\CreateTag::OPERATION_MATCH ?  : ($call is Operation\Git\GetTag::OPERATION_MATCH ?  : ($call is Operation\Git\CreateTree::OPERATION_MATCH ?  : ($call is Operation\Git\GetTree::OPERATION_MATCH ?  : ($call is Operation\Repos\ListWebhooks::OPERATION_MATCH ? iterable<Schema\Hook> : ($call is Operation\Repos\CreateWebhook::OPERATION_MATCH ?  : ($call is Operation\Repos\GetWebhook::OPERATION_MATCH ?  : ($call is Operation\Repos\DeleteWebhook::OPERATION_MATCH ? array{code: int} : ($call is Operation\Repos\UpdateWebhook::OPERATION_MATCH ?  : ($call is Operation\Repos\GetWebhookConfigForRepo::OPERATION_MATCH ?  : ($call is Operation\Repos\UpdateWebhookConfigForRepo::OPERATION_MATCH ?  : ($call is Operation\Repos\ListWebhookDeliveries::OPERATION_MATCH ? iterable<Schema\HookDeliveryItem> : ($call is Operation\Repos\GetWebhookDelivery::OPERATION_MATCH ?  : ($call is Operation\Repos\RedeliverWebhookDelivery::OPERATION_MATCH ?  : ($call is Operation\Repos\PingWebhook::OPERATION_MATCH ? array{code: int} : ($call is Operation\Repos\TestPushWebhook::OPERATION_MATCH ? array{code: int} : ($call is Operation\Apps\GetRepoInstallation::OPERATION_MATCH ?  : ($call is Operation\Repos\ListInvitations::OPERATION_MATCH ? iterable<Schema\RepositoryInvitation> : ($call is Operation\Repos\DeleteInvitation::OPERATION_MATCH ? array{code: int} : ($call is Operation\Repos\UpdateInvitation::OPERATION_MATCH ?  : ($call is Operation\Issues\ListForRepo::OPERATION_MATCH ? (iterable<Schema\Issue> | Schema\BasicError) : ($call is Operation\Issues\Create::OPERATION_MATCH ?  : ($call is Operation\Issues\ListCommentsForRepo::OPERATION_MATCH ? iterable<Schema\IssueComment> : ($call is Operation\Issues\GetComment::OPERATION_MATCH ?  : ($call is Operation\Issues\DeleteComment::OPERATION_MATCH ? array{code: int} : ($call is Operation\Issues\UpdateComment::OPERATION_MATCH ?  : ($call is Operation\Reactions\ListForIssueComment::OPERATION_MATCH ? iterable<Schema\Reaction> : ($call is Operation\Reactions\CreateForIssueComment::OPERATION_MATCH ?  : ($call is Operation\Reactions\DeleteForIssueComment::OPERATION_MATCH ? array{code: int} : ($call is Operation\Issues\ListEventsForRepo::OPERATION_MATCH ? iterable<Schema\IssueEvent> : ($call is Operation\Issues\GetEvent::OPERATION_MATCH ?  : ($call is Operation\Issues\Get::OPERATION_MATCH ? (Schema\Issue | Schema\BasicError | array{code: int}) : ($call is Operation\Issues\Update::OPERATION_MATCH ?  : ($call is Operation\Issues\AddAssignees::OPERATION_MATCH ?  : ($call is Operation\Issues\RemoveAssignees::OPERATION_MATCH ?  : ($call is Operation\Issues\CheckUserCanBeAssignedToIssue::OPERATION_MATCH ? array{code: int} : ($call is Operation\Issues\ListComments::OPERATION_MATCH ? iterable<Schema\IssueComment> : ($call is Operation\Issues\CreateComment::OPERATION_MATCH ?  : ($call is Operation\Issues\ListEvents::OPERATION_MATCH ? iterable<(Schema\LabeledIssueEvent | Schema\UnlabeledIssueEvent | Schema\AssignedIssueEvent | Schema\UnassignedIssueEvent | Schema\MilestonedIssueEvent | Schema\DemilestonedIssueEvent | Schema\RenamedIssueEvent | Schema\ReviewRequestedIssueEvent | Schema\ReviewRequestRemovedIssueEvent | Schema\ReviewDismissedIssueEvent | Schema\LockedIssueEvent | Schema\AddedToProjectIssueEvent | Schema\MovedColumnInProjectIssueEvent | Schema\RemovedFromProjectIssueEvent | Schema\ConvertedNoteToIssueIssueEvent)> : ($call is Operation\Issues\ListLabelsOnIssue::OPERATION_MATCH ? (iterable<Schema\Label> | Schema\BasicError) : ($call is Operation\Issues\SetLabels::OPERATION_MATCH ? (iterable<Schema\Label> | Schema\BasicError) : ($call is Operation\Issues\AddLabels::OPERATION_MATCH ? (iterable<Schema\Label> | Schema\BasicError) : ($call is Operation\Issues\RemoveAllLabels::OPERATION_MATCH ? (Schema\BasicError | array{code: int}) : ($call is Operation\Issues\RemoveLabel::OPERATION_MATCH ? (iterable<Schema\Label> | Schema\BasicError) : ($call is Operation\Issues\Lock::OPERATION_MATCH ? array{code: int} : ($call is Operation\Issues\Unlock::OPERATION_MATCH ? array{code: int} : ($call is Operation\Reactions\ListForIssue::OPERATION_MATCH ? iterable<Schema\Reaction> : ($call is Operation\Reactions\CreateForIssue::OPERATION_MATCH ?  : ($call is Operation\Reactions\DeleteForIssue::OPERATION_MATCH ? array{code: int} : ($call is Operation\Issues\ListEventsForTimeline::OPERATION_MATCH ? iterable<(Schema\LabeledIssueEvent | Schema\UnlabeledIssueEvent | Schema\MilestonedIssueEvent | Schema\DemilestonedIssueEvent | Schema\RenamedIssueEvent | Schema\ReviewRequestedIssueEvent | Schema\ReviewRequestRemovedIssueEvent | Schema\ReviewDismissedIssueEvent | Schema\LockedIssueEvent | Schema\AddedToProjectIssueEvent | Schema\MovedColumnInProjectIssueEvent | Schema\RemovedFromProjectIssueEvent | Schema\ConvertedNoteToIssueIssueEvent | Schema\TimelineCommentEvent | Schema\TimelineCrossReferencedEvent | Schema\TimelineCommittedEvent | Schema\TimelineReviewedEvent | Schema\TimelineLineCommentedEvent | Schema\TimelineCommitCommentedEvent | Schema\TimelineAssignedIssueEvent | Schema\TimelineUnassignedIssueEvent | Schema\StateChangeIssueEvent)> : ($call is Operation\Repos\ListDeployKeys::OPERATION_MATCH ? iterable<Schema\DeployKey> : ($call is Operation\Repos\CreateDeployKey::OPERATION_MATCH ?  : ($call is Operation\Repos\GetDeployKey::OPERATION_MATCH ?  : ($call is Operation\Repos\DeleteDeployKey::OPERATION_MATCH ? array{code: int} : ($call is Operation\Issues\ListLabelsForRepo::OPERATION_MATCH ? iterable<Schema\Label> : ($call is Operation\Issues\CreateLabel::OPERATION_MATCH ?  : ($call is Operation\Issues\GetLabel::OPERATION_MATCH ?  : ($call is Operation\Issues\DeleteLabel::OPERATION_MATCH ? array{code: int} : ($call is Operation\Issues\UpdateLabel::OPERATION_MATCH ?  : ($call is Operation\Repos\ListLanguages::OPERATION_MATCH ?  : ($call is Operation\Repos\EnableLfsForRepo::OPERATION_MATCH ? (Schema\Operations\Repos\EnableLfsForRepo\Response\ApplicationJson\Accepted\Application\Json | array{code: int}) : ($call is Operation\Repos\DisableLfsForRepo::OPERATION_MATCH ? array{code: int} : ($call is Operation\Licenses\GetForRepo::OPERATION_MATCH ?  : ($call is Operation\Repos\MergeUpstream::OPERATION_MATCH ? (Schema\MergedUpstream | array{code: int}) : ($call is Operation\Repos\Merge::OPERATION_MATCH ? (Schema\Commit | array{code: int}) : ($call is Operation\Issues\ListMilestones::OPERATION_MATCH ? iterable<Schema\Milestone> : ($call is Operation\Issues\CreateMilestone::OPERATION_MATCH ?  : ($call is Operation\Issues\GetMilestone::OPERATION_MATCH ?  : ($call is Operation\Issues\DeleteMilestone::OPERATION_MATCH ? array{code: int} : ($call is Operation\Issues\UpdateMilestone::OPERATION_MATCH ?  : ($call is Operation\Issues\ListLabelsForMilestone::OPERATION_MATCH ? iterable<Schema\Label> : ($call is Operation\Activity\ListRepoNotificationsForAuthenticatedUser::OPERATION_MATCH ? iterable<Schema\Thread> : ($call is Operation\Activity\MarkRepoNotificationsAsRead::OPERATION_MATCH ? (Schema\Operations\Activity\MarkRepoNotificationsAsRead\Response\ApplicationJson\Accepted\Application\Json | array{code: int}) : ($call is Operation\Repos\GetPages::OPERATION_MATCH ?  : ($call is Operation\Repos\UpdateInformationAboutPagesSite::OPERATION_MATCH ? array{code: int} : ($call is Operation\Repos\CreatePagesSite::OPERATION_MATCH ?  : ($call is Operation\Repos\DeletePagesSite::OPERATION_MATCH ? array{code: int} : ($call is Operation\Repos\ListPagesBuilds::OPERATION_MATCH ? iterable<Schema\PageBuild> : ($call is Operation\Repos\RequestPagesBuild::OPERATION_MATCH ?  : ($call is Operation\Repos\GetLatestPagesBuild::OPERATION_MATCH ?  : ($call is Operation\Repos\GetPagesBuild::OPERATION_MATCH ?  : ($call is Operation\Projects\ListForRepo::OPERATION_MATCH ? iterable<Schema\Project> : ($call is Operation\Projects\CreateForRepo::OPERATION_MATCH ?  : ($call is Operation\Pulls\List_::OPERATION_MATCH ? (iterable<Schema\PullRequestSimple> | array{code: int}) : ($call is Operation\Pulls\Create::OPERATION_MATCH ?  : ($call is Operation\Pulls\ListReviewCommentsForRepo::OPERATION_MATCH ? iterable<Schema\PullRequestReviewComment> : ($call is Operation\Pulls\GetReviewComment::OPERATION_MATCH ?  : ($call is Operation\Pulls\DeleteReviewComment::OPERATION_MATCH ? array{code: int} : ($call is Operation\Pulls\UpdateReviewComment::OPERATION_MATCH ?  : ($call is Operation\Reactions\ListForPullRequestReviewComment::OPERATION_MATCH ? iterable<Schema\Reaction> : ($call is Operation\Reactions\CreateForPullRequestReviewComment::OPERATION_MATCH ?  : ($call is Operation\Reactions\DeleteForPullRequestComment::OPERATION_MATCH ? array{code: int} : ($call is Operation\Pulls\Get::OPERATION_MATCH ? (Schema\PullRequest | array{code: int}) : ($call is Operation\Pulls\Update::OPERATION_MATCH ?  : ($call is Operation\Pulls\ListReviewComments::OPERATION_MATCH ? iterable<Schema\PullRequestReviewComment> : ($call is Operation\Pulls\CreateReviewComment::OPERATION_MATCH ?  : ($call is Operation\Pulls\CreateReplyForReviewComment::OPERATION_MATCH ?  : ($call is Operation\Pulls\ListCommits::OPERATION_MATCH ? iterable<Schema\Commit> : ($call is Operation\Pulls\ListFiles::OPERATION_MATCH ? iterable<Schema\DiffEntry> : ($call is Operation\Pulls\CheckIfMerged::OPERATION_MATCH ? array{code: int} : ($call is Operation\Pulls\Merge::OPERATION_MATCH ?  : ($call is Operation\Pulls\ListRequestedReviewers::OPERATION_MATCH ?  : ($call is Operation\Pulls\RequestReviewers::OPERATION_MATCH ? (Schema\PullRequestSimple | array{code: int}) : ($call is Operation\Pulls\RemoveRequestedReviewers::OPERATION_MATCH ?  : ($call is Operation\Pulls\ListReviews::OPERATION_MATCH ? iterable<Schema\PullRequestReview> : ($call is Operation\Pulls\CreateReview::OPERATION_MATCH ?  : ($call is Operation\Pulls\GetReview::OPERATION_MATCH ?  : ($call is Operation\Pulls\UpdateReview::OPERATION_MATCH ?  : ($call is Operation\Pulls\DeletePendingReview::OPERATION_MATCH ?  : ($call is Operation\Pulls\ListCommentsForReview::OPERATION_MATCH ? iterable<Schema\ReviewComment> : ($call is Operation\Pulls\DismissReview::OPERATION_MATCH ?  : ($call is Operation\Pulls\SubmitReview::OPERATION_MATCH ?  : ($call is Operation\Pulls\UpdateBranch::OPERATION_MATCH ?  : ($call is Operation\Repos\GetReadme::OPERATION_MATCH ?  : ($call is Operation\Repos\GetReadmeInDirectory::OPERATION_MATCH ?  : ($call is Operation\Repos\ListReleases::OPERATION_MATCH ? iterable<Schema\Release> : ($call is Operation\Repos\CreateRelease::OPERATION_MATCH ?  : ($call is Operation\Repos\GetReleaseAsset::OPERATION_MATCH ? (Schema\ReleaseAsset | array{code: int}) : ($call is Operation\Repos\DeleteReleaseAsset::OPERATION_MATCH ? array{code: int} : ($call is Operation\Repos\UpdateReleaseAsset::OPERATION_MATCH ?  : ($call is Operation\Repos\GetLatestRelease::OPERATION_MATCH ?  : ($call is Operation\Repos\GetReleaseByTag::OPERATION_MATCH ?  : ($call is Operation\Repos\GetRelease::OPERATION_MATCH ? (Schema\Release | array{code: int}) : ($call is Operation\Repos\DeleteRelease::OPERATION_MATCH ? array{code: int} : ($call is Operation\Repos\UpdateRelease::OPERATION_MATCH ?  : ($call is Operation\Repos\ListReleaseAssets::OPERATION_MATCH ? iterable<Schema\ReleaseAsset> : ($call is Operation\Repos\UploadReleaseAsset::OPERATION_MATCH ? (Schema\ReleaseAsset | array{code: int}) : ($call is Operation\Reactions\ListForRelease::OPERATION_MATCH ? iterable<Schema\Reaction> : ($call is Operation\Reactions\CreateForRelease::OPERATION_MATCH ?  : ($call is Operation\Reactions\DeleteForRelease::OPERATION_MATCH ? array{code: int} : ($call is Operation\SecretScanning\ListAlertsForRepo::OPERATION_MATCH ? (iterable<Schema\SecretScanningAlert> | array{code: int}) : ($call is Operation\SecretScanning\GetAlert::OPERATION_MATCH ? (Schema\SecretScanningAlert | array{code: int}) : ($call is Operation\SecretScanning\UpdateAlert::OPERATION_MATCH ? (Schema\SecretScanningAlert | array{code: int}) : ($call is Operation\SecretScanning\ListLocationsForAlert::OPERATION_MATCH ? (iterable<Schema\SecretScanningLocation> | array{code: int}) : ($call is Operation\Activity\ListStargazersForRepo::OPERATION_MATCH ? (Schema\SimpleUser | Schema\Stargazer) : ($call is Operation\Repos\GetCodeFrequencyStats::OPERATION_MATCH ? (iterable<int> | Schema\Operations\Repos\GetCodeFrequencyStats\Response\ApplicationJson\Accepted\Application\Json | array{code: int}) : ($call is Operation\Repos\GetCommitActivityStats::OPERATION_MATCH ? (iterable<Schema\CommitActivity> | Schema\Operations\Repos\GetCommitActivityStats\Response\ApplicationJson\Accepted\Application\Json | array{code: int}) : ($call is Operation\Repos\GetContributorsStats::OPERATION_MATCH ? (iterable<Schema\ContributorActivity> | Schema\Operations\Repos\GetContributorsStats\Response\ApplicationJson\Accepted\Application\Json | array{code: int}) : ($call is Operation\Repos\GetParticipationStats::OPERATION_MATCH ?  : ($call is Operation\Repos\GetPunchCardStats::OPERATION_MATCH ? (iterable<int> | array{code: int}) : ($call is Operation\Repos\CreateCommitStatus::OPERATION_MATCH ?  : ($call is Operation\Activity\ListWatchersForRepo::OPERATION_MATCH ? iterable<Schema\SimpleUser> : ($call is Operation\Activity\GetRepoSubscription::OPERATION_MATCH ? (Schema\RepositorySubscription | array{code: int}) : ($call is Operation\Activity\SetRepoSubscription::OPERATION_MATCH ?  : ($call is Operation\Activity\DeleteRepoSubscription::OPERATION_MATCH ? array{code: int} : ($call is Operation\Repos\ListTags::OPERATION_MATCH ? iterable<Schema\Tag> : ($call is Operation\Repos\DownloadTarballArchive::OPERATION_MATCH ? array{code: int, location: string} : ($call is Operation\Repos\DownloadTarballArchiveStreaming::OPERATION_MATCH ? Observable<string> : ($call is Operation\Repos\ListTeams::OPERATION_MATCH ? iterable<Schema\Team> : ($call is Operation\Repos\GetAllTopics::OPERATION_MATCH ?  : ($call is Operation\Repos\ReplaceAllTopics::OPERATION_MATCH ?  : ($call is Operation\Repos\Transfer::OPERATION_MATCH ?  : ($call is Operation\Repos\DownloadZipballArchive::OPERATION_MATCH ? array{code: int, location: string} : ($call is Operation\Repos\DownloadZipballArchiveStreaming::OPERATION_MATCH ? Observable<string> : ($call is Operation\Repos\CreateUsingTemplate::OPERATION_MATCH ?  : ($call is Operation\Search\Code::OPERATION_MATCH ? (Schema\Operations\Search\Code\Response\ApplicationJson\Ok | array{code: int}) : ($call is Operation\Search\Commits::OPERATION_MATCH ? (Schema\Operations\Search\Commits\Response\ApplicationJson\Ok | array{code: int}) : ($call is Operation\Search\IssuesAndPullRequests::OPERATION_MATCH ? (Schema\Operations\Search\IssuesAndPullRequests\Response\ApplicationJson\Ok | array{code: int}) : ($call is Operation\Search\Labels::OPERATION_MATCH ? (Schema\Operations\Search\Labels\Response\ApplicationJson\Ok | array{code: int}) : ($call is Operation\Search\Repos::OPERATION_MATCH ? (Schema\Operations\Search\Repos\Response\ApplicationJson\Ok | array{code: int}) : ($call is Operation\Search\Topics::OPERATION_MATCH ? (Schema\Operations\Search\Topics\Response\ApplicationJson\Ok | array{code: int}) : ($call is Operation\Search\Users::OPERATION_MATCH ? (Schema\Operations\Search\Users\Response\ApplicationJson\Ok | array{code: int}) : ($call is Operation\Teams\GetLegacy::OPERATION_MATCH ?  : ($call is Operation\Teams\DeleteLegacy::OPERATION_MATCH ? array{code: int} : ($call is Operation\Teams\UpdateLegacy::OPERATION_MATCH ?  : ($call is Operation\Teams\ListDiscussionsLegacy::OPERATION_MATCH ? iterable<Schema\TeamDiscussion> : ($call is Operation\Teams\CreateDiscussionLegacy::OPERATION_MATCH ?  : ($call is Operation\Teams\GetDiscussionLegacy::OPERATION_MATCH ?  : ($call is Operation\Teams\DeleteDiscussionLegacy::OPERATION_MATCH ? array{code: int} : ($call is Operation\Teams\UpdateDiscussionLegacy::OPERATION_MATCH ?  : ($call is Operation\Teams\ListDiscussionCommentsLegacy::OPERATION_MATCH ? iterable<Schema\TeamDiscussionComment> : ($call is Operation\Teams\CreateDiscussionCommentLegacy::OPERATION_MATCH ?  : ($call is Operation\Teams\GetDiscussionCommentLegacy::OPERATION_MATCH ?  : ($call is Operation\Teams\DeleteDiscussionCommentLegacy::OPERATION_MATCH ? array{code: int} : ($call is Operation\Teams\UpdateDiscussionCommentLegacy::OPERATION_MATCH ?  : ($call is Operation\Teams\ListMembersLegacy::OPERATION_MATCH ? iterable<Schema\SimpleUser> : ($call is Operation\Teams\GetMemberLegacy::OPERATION_MATCH ? array{code: int} : ($call is Operation\Teams\AddMemberLegacy::OPERATION_MATCH ? array{code: int} : ($call is Operation\Teams\RemoveMemberLegacy::OPERATION_MATCH ? array{code: int} : ($call is Operation\Teams\GetMembershipForUserLegacy::OPERATION_MATCH ?  : ($call is Operation\Teams\AddOrUpdateMembershipForUserLegacy::OPERATION_MATCH ? (Schema\TeamMembership | array{code: int}) : ($call is Operation\Teams\RemoveMembershipForUserLegacy::OPERATION_MATCH ? array{code: int} : ($call is Operation\Teams\ListProjectsLegacy::OPERATION_MATCH ? iterable<Schema\TeamProject> : ($call is Operation\Teams\CheckPermissionsForProjectLegacy::OPERATION_MATCH ? (Schema\TeamProject | array{code: int}) : ($call is Operation\Teams\AddOrUpdateProjectPermissionsLegacy::OPERATION_MATCH ? array{code: int} : ($call is Operation\Teams\RemoveProjectLegacy::OPERATION_MATCH ? array{code: int} : ($call is Operation\Teams\ListReposLegacy::OPERATION_MATCH ? iterable<Schema\MinimalRepository> : ($call is Operation\Teams\CheckPermissionsForRepoLegacy::OPERATION_MATCH ? (Schema\TeamRepository | array{code: int}) : ($call is Operation\Teams\AddOrUpdateRepoPermissionsLegacy::OPERATION_MATCH ? array{code: int} : ($call is Operation\Teams\RemoveRepoLegacy::OPERATION_MATCH ? array{code: int} : ($call is Operation\Teams\ListChildLegacy::OPERATION_MATCH ? iterable<Schema\Team> : ($call is Operation\Users\GetAuthenticated::OPERATION_MATCH ? (Schema\PrivateUser | Schema\PublicUser | array{code: int}) : ($call is Operation\Users\UpdateAuthenticated::OPERATION_MATCH ? (Schema\PrivateUser | array{code: int}) : ($call is Operation\Users\ListFollowersForAuthenticatedUser::OPERATION_MATCH ? (iterable<Schema\SimpleUser> | array{code: int}) : ($call is Operation\Users\ListFollowedByAuthenticatedUser::OPERATION_MATCH ? (iterable<Schema\SimpleUser> | array{code: int}) : ($call is Operation\Users\CheckPersonIsFollowedByAuthenticated::OPERATION_MATCH ? array{code: int} : ($call is Operation\Users\Follow::OPERATION_MATCH ? array{code: int} : ($call is Operation\Users\Unfollow::OPERATION_MATCH ? array{code: int} : ($call is Operation\Users\ListGpgKeysForAuthenticatedUser::OPERATION_MATCH ? (iterable<Schema\GpgKey> | array{code: int}) : ($call is Operation\Users\CreateGpgKeyForAuthenticatedUser::OPERATION_MATCH ? (Schema\GpgKey | array{code: int}) : ($call is Operation\Users\GetGpgKeyForAuthenticatedUser::OPERATION_MATCH ? (Schema\GpgKey | array{code: int}) : ($call is Operation\Users\DeleteGpgKeyForAuthenticatedUser::OPERATION_MATCH ? array{code: int} : ($call is Operation\Apps\ListInstallationsForAuthenticatedUser::OPERATION_MATCH ? (Schema\Operations\Apps\ListInstallationsForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json | array{code: int}) : ($call is Operation\Apps\ListInstallationReposForAuthenticatedUser::OPERATION_MATCH ? (Schema\Operations\Apps\ListInstallationReposForAuthenticatedUser\Response\ApplicationJson\Ok | array{code: int}) : ($call is Operation\Apps\AddRepoToInstallationForAuthenticatedUser::OPERATION_MATCH ? array{code: int} : ($call is Operation\Apps\RemoveRepoFromInstallationForAuthenticatedUser::OPERATION_MATCH ? array{code: int} : ($call is Operation\Issues\ListForAuthenticatedUser::OPERATION_MATCH ? (iterable<Schema\Issue> | array{code: int}) : ($call is Operation\Users\ListPublicSshKeysForAuthenticatedUser::OPERATION_MATCH ? (iterable<Schema\Key> | array{code: int}) : ($call is Operation\Users\CreatePublicSshKeyForAuthenticatedUser::OPERATION_MATCH ? (Schema\Key | array{code: int}) : ($call is Operation\Users\GetPublicSshKeyForAuthenticatedUser::OPERATION_MATCH ? (Schema\Key | array{code: int}) : ($call is Operation\Users\DeletePublicSshKeyForAuthenticatedUser::OPERATION_MATCH ? array{code: int} : ($call is Operation\Orgs\ListMembershipsForAuthenticatedUser::OPERATION_MATCH ? (iterable<Schema\OrgMembership> | array{code: int}) : ($call is Operation\Orgs\GetMembershipForAuthenticatedUser::OPERATION_MATCH ?  : ($call is Operation\Orgs\UpdateMembershipForAuthenticatedUser::OPERATION_MATCH ?  : ($call is Operation\Migrations\ListForAuthenticatedUser::OPERATION_MATCH ? (iterable<Schema\Migration> | array{code: int}) : ($call is Operation\Migrations\StartForAuthenticatedUser::OPERATION_MATCH ? (Schema\Migration | array{code: int}) : ($call is Operation\Migrations\GetArchiveForAuthenticatedUser::OPERATION_MATCH ? array{code: int} : ($call is Operation\Migrations\ListReposForAuthenticatedUser::OPERATION_MATCH ? iterable<Schema\MinimalRepository> : ($call is Operation\Orgs\ListForAuthenticatedUser::OPERATION_MATCH ? (iterable<Schema\OrganizationSimple> | array{code: int}) : ($call is Operation\Projects\CreateForAuthenticatedUser::OPERATION_MATCH ? (Schema\Project | array{code: int}) : ($call is Operation\Repos\ListForAuthenticatedUser::OPERATION_MATCH ? (iterable<Schema\Repository> | array{code: int}) : ($call is Operation\Repos\CreateForAuthenticatedUser::OPERATION_MATCH ? (Schema\Repository | array{code: int}) : ($call is Operation\Repos\ListInvitationsForAuthenticatedUser::OPERATION_MATCH ? (iterable<Schema\RepositoryInvitation> | array{code: int}) : ($call is Operation\Repos\DeclineInvitationForAuthenticatedUser::OPERATION_MATCH ? array{code: int} : ($call is Operation\Repos\AcceptInvitationForAuthenticatedUser::OPERATION_MATCH ? array{code: int} : ($call is Operation\Activity\ListReposStarredByAuthenticatedUser::OPERATION_MATCH ? (iterable<Schema\Repository> | array{code: int}) : ($call is Operation\Activity\CheckRepoIsStarredByAuthenticatedUser::OPERATION_MATCH ? array{code: int} : ($call is Operation\Activity\StarRepoForAuthenticatedUser::OPERATION_MATCH ? array{code: int} : ($call is Operation\Activity\UnstarRepoForAuthenticatedUser::OPERATION_MATCH ? array{code: int} : ($call is Operation\Activity\ListWatchedReposForAuthenticatedUser::OPERATION_MATCH ? (iterable<Schema\MinimalRepository> | array{code: int}) : ($call is Operation\Teams\ListForAuthenticatedUser::OPERATION_MATCH ? (iterable<Schema\TeamFull> | array{code: int}) : ($call is Operation\Users\List_::OPERATION_MATCH ? (iterable<Schema\SimpleUser> | array{code: int}) : ($call is Operation\Users\GetByUsername::OPERATION_MATCH ? (Schema\PrivateUser | Schema\PublicUser) : ($call is Operation\Activity\ListEventsForAuthenticatedUser::OPERATION_MATCH ? iterable<Schema\Event> : ($call is Operation\Activity\ListOrgEventsForAuthenticatedUser::OPERATION_MATCH ? iterable<Schema\Event> : ($call is Operation\Users\ListFollowersForUser::OPERATION_MATCH ? iterable<Schema\SimpleUser> : ($call is Operation\Users\ListFollowingForUser::OPERATION_MATCH ? iterable<Schema\SimpleUser> : ($call is Operation\Users\CheckFollowingForUser::OPERATION_MATCH ? array{code: int} : ($call is Operation\Gists\ListForUser::OPERATION_MATCH ? iterable<Schema\BaseGist> : ($call is Operation\Users\ListGpgKeysForUser::OPERATION_MATCH ? iterable<Schema\GpgKey> : ($call is Operation\Users\GetContextForUser::OPERATION_MATCH ?  : ($call is Operation\Apps\GetUserInstallation::OPERATION_MATCH ?  : ($call is Operation\Users\ListPublicKeysForUser::OPERATION_MATCH ? iterable<Schema\KeySimple> : ($call is Operation\Orgs\ListForUser::OPERATION_MATCH ? iterable<Schema\OrganizationSimple> : ($call is Operation\Projects\ListForUser::OPERATION_MATCH ? iterable<Schema\Project> : ($call is Operation\Repos\ListForUser::OPERATION_MATCH ? iterable<Schema\MinimalRepository> : ($call is Operation\Activity\ListReposStarredByUser::OPERATION_MATCH ? (Schema\StarredRepository | Schema\Repository) : ($call is Operation\Activity\ListReposWatchedByUser::OPERATION_MATCH ? iterable<Schema\MinimalRepository> : ($call is Operation\EnterpriseAdmin\SuspendUser::OPERATION_MATCH ? array{code: int} : ($call is Operation\EnterpriseAdmin\UnsuspendUser::OPERATION_MATCH ? array{code: int} : ))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))
     */
    // phpcs:enable
    public function call(string $call, array $params = []): Root|iterable|GlobalHook|GlobalHook2|OrganizationSimple|Accepted|PreReceiveEnvironment|PreReceiveEnvironmentDownloadStatus|Authorization|Integration|WebhookConfig|HookDelivery|Json|Installation|InstallationToken|CodeOfConduct|\ApiClients\Client\GitHubAE\Schema\Operations\Emojis\Get\Response\ApplicationJson\Ok\Application\Json|Announcement|LicenseInfo|EnterpriseOverview|EnterpriseCommentOverview|EnterpriseGistOverview|EnterpriseHookOverview|EnterpriseIssueOverview|EnterpriseMilestoneOverview|EnterpriseOrganizationOverview|EnterprisePageOverview|EnterprisePullRequestOverview|EnterpriseRepositoryOverview|EnterpriseUserOverview|ActionsEnterprisePermissions|Ok|SelectedActions|\ApiClients\Client\GitHubAE\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\ApplicationJson\Ok|RunnerGroupsEnterprise|\ApiClients\Client\GitHubAE\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise\Response\ApplicationJson\Ok|AuthenticationToken|Runner|Feed|GistSimple|GistComment|BaseGist|GitignoreTemplate|\ApiClients\Client\GitHubAE\Schema\Operations\Apps\ListReposAccessibleToInstallation\Response\ApplicationJson\Ok|License|string|ApiOverview|\ApiClients\Client\GitHubAE\Schema\Operations\Activity\MarkNotificationsAsRead\Response\ApplicationJson\Accepted|Thread|ThreadSubscription|ResponseInterface|OrganizationFull|ActionsOrganizationPermissions|\ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization\Response\ApplicationJson\Ok|ActionsGetDefaultWorkflowPermissions|\ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListSelfHostedRunnerGroupsForOrg\Response\ApplicationJson\Ok|RunnerGroupsOrg|\ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListSelfHostedRunnersForOrg\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListOrgSecrets\Response\ApplicationJson\Ok|ActionsPublicKey|OrganizationActionsSecret|EmptyObject|\ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok|ExternalGroup|ExternalGroups|OrgHook|\ApiClients\Client\GitHubAE\Schema\Operations\Orgs\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubAE\Schema\Operations\Orgs\ListAppInstallations\Response\ApplicationJson\Ok|OrgMembership|Migration|\ApiClients\Client\GitHubAE\Schema\Operations\Orgs\ConvertMemberToOutsideCollaborator\Response\ApplicationJson\Accepted\Application\Json|Project|Repository|TeamFull|TeamDiscussion|TeamDiscussionComment|Reaction|TeamMembership|TeamProject|TeamRepository|ProjectCard|\ApiClients\Client\GitHubAE\Schema\Operations\Projects\MoveCard\Response\ApplicationJson\Created\Application\Json|ProjectColumn|\ApiClients\Client\GitHubAE\Schema\Operations\Projects\MoveColumn\Response\ApplicationJson\Created\Application\Json|ProjectCollaboratorPermission|RateLimitOverview|FullRepository|BasicError|\ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListArtifactsForRepo\Response\ApplicationJson\Ok|Artifact|Job|\ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListRepoOrganizationSecrets\Response\ApplicationJson\Ok|ActionsRepositoryPermissions|\ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListSelfHostedRunnersForRepo\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListWorkflowRunsForRepo\Response\ApplicationJson\Ok|WorkflowRun|\ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListWorkflowRunArtifacts\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListJobsForWorkflowRunAttempt\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListJobsForWorkflowRun\Response\ApplicationJson\Ok\Application\Json|WorkflowRunUsage|\ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListRepoSecrets\Response\ApplicationJson\Ok\Application\Json|ActionsSecret|\ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListRepoWorkflows\Response\ApplicationJson\Ok|Workflow|\ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListWorkflowRuns\Response\ApplicationJson\Ok\Application\Json|WorkflowUsage|Autolink|BranchWithProtection|BranchProtection|ProtectedBranch|ProtectedBranchAdminEnforced|ProtectedBranchPullRequestReview|StatusCheckPolicy|BranchRestrictionPolicy|CheckRun|CheckSuite|CheckSuitePreference|\ApiClients\Client\GitHubAE\Schema\Operations\Checks\ListForSuite\Response\ApplicationJson\Ok|CodeScanningAlert|CodeScanningAnalysis|CodeScanningAnalysisDeletion|CodeScanningSarifsReceipt|CodeScanningSarifsStatus|CodeownersErrors|RepositoryInvitation|RepositoryCollaboratorPermission|CommitComment|Commit|\ApiClients\Client\GitHubAE\Schema\Operations\Checks\ListForRef\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubAE\Schema\Operations\Checks\ListSuitesForRef\Response\ApplicationJson\Ok|CombinedCommitStatus|CommitComparison|ContentDirectory|ContentFile|ContentSymlink|ContentSubmodule|FileCommit|Deployment|\ApiClients\Client\GitHubAE\Schema\Operations\Repos\CreateDeployment\Response\ApplicationJson\Accepted\Application\Json|DeploymentStatus|\ApiClients\Client\GitHubAE\Schema\Operations\Repos\GetAllEnvironments\Response\ApplicationJson\Ok|Environment|\ApiClients\Client\GitHubAE\Schema\Operations\Repos\ListDeploymentBranchPolicies\Response\ApplicationJson\Ok|DeploymentBranchPolicy|ShortBlob|Blob|GitCommit|GitRef|GitTag|GitTree|Hook|\ApiClients\Client\GitHubAE\Schema\Operations\Repos\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted\Application\Json|Issue|IssueComment|IssueEvent|DeployKey|Label|Language|\ApiClients\Client\GitHubAE\Schema\Operations\Repos\EnableLfsForRepo\Response\ApplicationJson\Accepted\Application\Json|LicenseContent|MergedUpstream|Milestone|\ApiClients\Client\GitHubAE\Schema\Operations\Activity\MarkRepoNotificationsAsRead\Response\ApplicationJson\Accepted\Application\Json|Page|PageBuildStatus|PageBuild|PullRequest|PullRequestReviewComment|PullRequestMergeResult|PullRequestReviewRequest|PullRequestSimple|PullRequestReview|\ApiClients\Client\GitHubAE\Schema\Operations\Pulls\UpdateBranch\Response\ApplicationJson\Accepted\Application\Json|Release|ReleaseAsset|SecretScanningAlert|SimpleUser|Stargazer|\ApiClients\Client\GitHubAE\Schema\Operations\Repos\GetCodeFrequencyStats\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubAE\Schema\Operations\Repos\GetCommitActivityStats\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubAE\Schema\Operations\Repos\GetContributorsStats\Response\ApplicationJson\Accepted\Application\Json|ParticipationStats|Status|RepositorySubscription|Topic|MinimalRepository|\ApiClients\Client\GitHubAE\Schema\Operations\Search\Code\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\Operations\Search\Commits\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\Operations\Search\IssuesAndPullRequests\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\Operations\Search\Labels\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\Operations\Search\Repos\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\Operations\Search\Topics\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\Operations\Search\Users\Response\ApplicationJson\Ok|PrivateUser|PublicUser|GpgKey|\ApiClients\Client\GitHubAE\Schema\Operations\Apps\ListInstallationsForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubAE\Schema\Operations\Apps\ListInstallationReposForAuthenticatedUser\Response\ApplicationJson\Ok|Key|Hovercard|StarredRepository
    {
        [$method, $path] = explode(' ', $call);
        $pathChunks      = explode('/', $path);
        $pathChunksCount = count($pathChunks);
        $matched         = false;
        if ($method === 'GET') {
            if ($pathChunksCount === 1) {
                $matched = true;
                if (array_key_exists(Router\Get\One::class, $this->router) === false) {
                    $this->router[Router\Get\One::class] = new Router\Get\One(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Get\One::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 3) {
                $matched = true;
                if (array_key_exists(Router\Get\Three::class, $this->router) === false) {
                    $this->router[Router\Get\Three::class] = new Router\Get\Three(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Get\Three::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 4) {
                $matched = true;
                if (array_key_exists(Router\Get\Four::class, $this->router) === false) {
                    $this->router[Router\Get\Four::class] = new Router\Get\Four(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Get\Four::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 6) {
                $matched = true;
                if (array_key_exists(Router\Get\Six::class, $this->router) === false) {
                    $this->router[Router\Get\Six::class] = new Router\Get\Six(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Get\Six::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 2) {
                $matched = true;
                if (array_key_exists(Router\Get\Two::class, $this->router) === false) {
                    $this->router[Router\Get\Two::class] = new Router\Get\Two(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Get\Two::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 5) {
                $matched = true;
                if (array_key_exists(Router\Get\Five::class, $this->router) === false) {
                    $this->router[Router\Get\Five::class] = new Router\Get\Five(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Get\Five::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 7) {
                $matched = true;
                if (array_key_exists(Router\Get\Seven::class, $this->router) === false) {
                    $this->router[Router\Get\Seven::class] = new Router\Get\Seven(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Get\Seven::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 8) {
                $matched = true;
                if (array_key_exists(Router\Get\Eight::class, $this->router) === false) {
                    $this->router[Router\Get\Eight::class] = new Router\Get\Eight(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Get\Eight::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 9) {
                $matched = true;
                if (array_key_exists(Router\Get\Nine::class, $this->router) === false) {
                    $this->router[Router\Get\Nine::class] = new Router\Get\Nine(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Get\Nine::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 10) {
                $matched = true;
                if (array_key_exists(Router\Get\Ten::class, $this->router) === false) {
                    $this->router[Router\Get\Ten::class] = new Router\Get\Ten(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Get\Ten::class]->call($call, $params, $pathChunks);
            }
        } elseif ($method === 'POST') {
            if ($pathChunksCount === 3) {
                $matched = true;
                if (array_key_exists(Router\Post\Three::class, $this->router) === false) {
                    $this->router[Router\Post\Three::class] = new Router\Post\Three(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Post\Three::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 5) {
                $matched = true;
                if (array_key_exists(Router\Post\Five::class, $this->router) === false) {
                    $this->router[Router\Post\Five::class] = new Router\Post\Five(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Post\Five::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 4) {
                $matched = true;
                if (array_key_exists(Router\Post\Four::class, $this->router) === false) {
                    $this->router[Router\Post\Four::class] = new Router\Post\Four(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Post\Four::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 6) {
                $matched = true;
                if (array_key_exists(Router\Post\Six::class, $this->router) === false) {
                    $this->router[Router\Post\Six::class] = new Router\Post\Six(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Post\Six::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 2) {
                $matched = true;
                if (array_key_exists(Router\Post\Two::class, $this->router) === false) {
                    $this->router[Router\Post\Two::class] = new Router\Post\Two(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Post\Two::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 8) {
                $matched = true;
                if (array_key_exists(Router\Post\Eight::class, $this->router) === false) {
                    $this->router[Router\Post\Eight::class] = new Router\Post\Eight(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Post\Eight::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 10) {
                $matched = true;
                if (array_key_exists(Router\Post\Ten::class, $this->router) === false) {
                    $this->router[Router\Post\Ten::class] = new Router\Post\Ten(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Post\Ten::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 7) {
                $matched = true;
                if (array_key_exists(Router\Post\Seven::class, $this->router) === false) {
                    $this->router[Router\Post\Seven::class] = new Router\Post\Seven(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Post\Seven::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 9) {
                $matched = true;
                if (array_key_exists(Router\Post\Nine::class, $this->router) === false) {
                    $this->router[Router\Post\Nine::class] = new Router\Post\Nine(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Post\Nine::class]->call($call, $params, $pathChunks);
            }
        } elseif ($method === 'DELETE') {
            if ($pathChunksCount === 4) {
                $matched = true;
                if (array_key_exists(Router\Delete\Four::class, $this->router) === false) {
                    $this->router[Router\Delete\Four::class] = new Router\Delete\Four(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Delete\Four::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 5) {
                $matched = true;
                if (array_key_exists(Router\Delete\Five::class, $this->router) === false) {
                    $this->router[Router\Delete\Five::class] = new Router\Delete\Five(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Delete\Five::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 3) {
                $matched = true;
                if (array_key_exists(Router\Delete\Three::class, $this->router) === false) {
                    $this->router[Router\Delete\Three::class] = new Router\Delete\Three(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Delete\Three::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 7) {
                $matched = true;
                if (array_key_exists(Router\Delete\Seven::class, $this->router) === false) {
                    $this->router[Router\Delete\Seven::class] = new Router\Delete\Seven(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Delete\Seven::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 6) {
                $matched = true;
                if (array_key_exists(Router\Delete\Six::class, $this->router) === false) {
                    $this->router[Router\Delete\Six::class] = new Router\Delete\Six(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Delete\Six::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 8) {
                $matched = true;
                if (array_key_exists(Router\Delete\Eight::class, $this->router) === false) {
                    $this->router[Router\Delete\Eight::class] = new Router\Delete\Eight(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Delete\Eight::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 9) {
                $matched = true;
                if (array_key_exists(Router\Delete\Nine::class, $this->router) === false) {
                    $this->router[Router\Delete\Nine::class] = new Router\Delete\Nine(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Delete\Nine::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 11) {
                $matched = true;
                if (array_key_exists(Router\Delete\Eleven::class, $this->router) === false) {
                    $this->router[Router\Delete\Eleven::class] = new Router\Delete\Eleven(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Delete\Eleven::class]->call($call, $params, $pathChunks);
            }
        } elseif ($method === 'PATCH') {
            if ($pathChunksCount === 4) {
                $matched = true;
                if (array_key_exists(Router\Patch\Four::class, $this->router) === false) {
                    $this->router[Router\Patch\Four::class] = new Router\Patch\Four(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Patch\Four::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 3) {
                $matched = true;
                if (array_key_exists(Router\Patch\Three::class, $this->router) === false) {
                    $this->router[Router\Patch\Three::class] = new Router\Patch\Three(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Patch\Three::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 6) {
                $matched = true;
                if (array_key_exists(Router\Patch\Six::class, $this->router) === false) {
                    $this->router[Router\Patch\Six::class] = new Router\Patch\Six(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Patch\Six::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 5) {
                $matched = true;
                if (array_key_exists(Router\Patch\Five::class, $this->router) === false) {
                    $this->router[Router\Patch\Five::class] = new Router\Patch\Five(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Patch\Five::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 7) {
                $matched = true;
                if (array_key_exists(Router\Patch\Seven::class, $this->router) === false) {
                    $this->router[Router\Patch\Seven::class] = new Router\Patch\Seven(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Patch\Seven::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 9) {
                $matched = true;
                if (array_key_exists(Router\Patch\Nine::class, $this->router) === false) {
                    $this->router[Router\Patch\Nine::class] = new Router\Patch\Nine(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Patch\Nine::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 8) {
                $matched = true;
                if (array_key_exists(Router\Patch\Eight::class, $this->router) === false) {
                    $this->router[Router\Patch\Eight::class] = new Router\Patch\Eight(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Patch\Eight::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 2) {
                $matched = true;
                if (array_key_exists(Router\Patch\Two::class, $this->router) === false) {
                    $this->router[Router\Patch\Two::class] = new Router\Patch\Two(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Patch\Two::class]->call($call, $params, $pathChunks);
            }
        } elseif ($method === 'STREAM') {
            if ($pathChunksCount === 5) {
                $matched = true;
                if (array_key_exists(Router\Stream\Five::class, $this->router) === false) {
                    $this->router[Router\Stream\Five::class] = new Router\Stream\Five(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Stream\Five::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 6) {
                $matched = true;
                if (array_key_exists(Router\Stream\Six::class, $this->router) === false) {
                    $this->router[Router\Stream\Six::class] = new Router\Stream\Six(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Stream\Six::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 8) {
                $matched = true;
                if (array_key_exists(Router\Stream\Eight::class, $this->router) === false) {
                    $this->router[Router\Stream\Eight::class] = new Router\Stream\Eight(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Stream\Eight::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 10) {
                $matched = true;
                if (array_key_exists(Router\Stream\Ten::class, $this->router) === false) {
                    $this->router[Router\Stream\Ten::class] = new Router\Stream\Ten(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Stream\Ten::class]->call($call, $params, $pathChunks);
            }
        } elseif ($method === 'PUT') {
            if ($pathChunksCount === 5) {
                $matched = true;
                if (array_key_exists(Router\Put\Five::class, $this->router) === false) {
                    $this->router[Router\Put\Five::class] = new Router\Put\Five(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Put\Five::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 6) {
                $matched = true;
                if (array_key_exists(Router\Put\Six::class, $this->router) === false) {
                    $this->router[Router\Put\Six::class] = new Router\Put\Six(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Put\Six::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 7) {
                $matched = true;
                if (array_key_exists(Router\Put\Seven::class, $this->router) === false) {
                    $this->router[Router\Put\Seven::class] = new Router\Put\Seven(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Put\Seven::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 8) {
                $matched = true;
                if (array_key_exists(Router\Put\Eight::class, $this->router) === false) {
                    $this->router[Router\Put\Eight::class] = new Router\Put\Eight(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Put\Eight::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 4) {
                $matched = true;
                if (array_key_exists(Router\Put\Four::class, $this->router) === false) {
                    $this->router[Router\Put\Four::class] = new Router\Put\Four(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Put\Four::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 2) {
                $matched = true;
                if (array_key_exists(Router\Put\Two::class, $this->router) === false) {
                    $this->router[Router\Put\Two::class] = new Router\Put\Two(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Put\Two::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 9) {
                $matched = true;
                if (array_key_exists(Router\Put\Nine::class, $this->router) === false) {
                    $this->router[Router\Put\Nine::class] = new Router\Put\Nine(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
                }

                return $this->router[Router\Put\Nine::class]->call($call, $params, $pathChunks);
            }
        }

        if ($matched === false) {
            throw new InvalidArgumentException();
        }
    }

    public function operations(): OperationsInterface
    {
        return $this->operations;
    }

    public function webHooks(): WebHooksInterface
    {
        return $this->webHooks;
    }
}
