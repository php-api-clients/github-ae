<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

final class Operators
{
    private Internal\Operator\Meta\Root|null $meta👷Root                                                                                                                             = null;
    private Internal\Operator\EnterpriseAdmin\ListGlobalWebhooks|null $enterpriseAdmin👷ListGlobalWebhooks                                                                           = null;
    private Internal\Operator\EnterpriseAdmin\ListGlobalWebhooksListing|null $enterpriseAdmin👷ListGlobalWebhooksListing                                                             = null;
    private Internal\Operator\EnterpriseAdmin\CreateGlobalWebhook|null $enterpriseAdmin👷CreateGlobalWebhook                                                                         = null;
    private Internal\Operator\EnterpriseAdmin\GetGlobalWebhook|null $enterpriseAdmin👷GetGlobalWebhook                                                                               = null;
    private Internal\Operator\EnterpriseAdmin\DeleteGlobalWebhook|null $enterpriseAdmin👷DeleteGlobalWebhook                                                                         = null;
    private Internal\Operator\EnterpriseAdmin\UpdateGlobalWebhook|null $enterpriseAdmin👷UpdateGlobalWebhook                                                                         = null;
    private Internal\Operator\EnterpriseAdmin\PingGlobalWebhook|null $enterpriseAdmin👷PingGlobalWebhook                                                                             = null;
    private Internal\Operator\EnterpriseAdmin\ListPublicKeys|null $enterpriseAdmin👷ListPublicKeys                                                                                   = null;
    private Internal\Operator\EnterpriseAdmin\ListPublicKeysListing|null $enterpriseAdmin👷ListPublicKeysListing                                                                     = null;
    private Internal\Operator\EnterpriseAdmin\DeletePublicKey|null $enterpriseAdmin👷DeletePublicKey                                                                                 = null;
    private Internal\Operator\EnterpriseAdmin\CreateOrg|null $enterpriseAdmin👷CreateOrg                                                                                             = null;
    private Internal\Operator\EnterpriseAdmin\UpdateOrgName|null $enterpriseAdmin👷UpdateOrgName                                                                                     = null;
    private Internal\Operator\EnterpriseAdmin\ListPreReceiveEnvironments|null $enterpriseAdmin👷ListPreReceiveEnvironments                                                           = null;
    private Internal\Operator\EnterpriseAdmin\ListPreReceiveEnvironmentsListing|null $enterpriseAdmin👷ListPreReceiveEnvironmentsListing                                             = null;
    private Internal\Operator\EnterpriseAdmin\CreatePreReceiveEnvironment|null $enterpriseAdmin👷CreatePreReceiveEnvironment                                                         = null;
    private Internal\Operator\EnterpriseAdmin\GetPreReceiveEnvironment|null $enterpriseAdmin👷GetPreReceiveEnvironment                                                               = null;
    private Internal\Operator\EnterpriseAdmin\DeletePreReceiveEnvironment|null $enterpriseAdmin👷DeletePreReceiveEnvironment                                                         = null;
    private Internal\Operator\EnterpriseAdmin\UpdatePreReceiveEnvironment|null $enterpriseAdmin👷UpdatePreReceiveEnvironment                                                         = null;
    private Internal\Operator\EnterpriseAdmin\StartPreReceiveEnvironmentDownload|null $enterpriseAdmin👷StartPreReceiveEnvironmentDownload                                           = null;
    private Internal\Operator\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming|null $enterpriseAdmin👷StartPreReceiveEnvironmentDownloadStreaming                         = null;
    private Internal\Operator\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironment|null $enterpriseAdmin👷GetDownloadStatusForPreReceiveEnvironment                             = null;
    private Internal\Operator\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironmentStreaming|null $enterpriseAdmin👷GetDownloadStatusForPreReceiveEnvironmentStreaming           = null;
    private Internal\Operator\EnterpriseAdmin\ListPersonalAccessTokens|null $enterpriseAdmin👷ListPersonalAccessTokens                                                               = null;
    private Internal\Operator\EnterpriseAdmin\ListPersonalAccessTokensListing|null $enterpriseAdmin👷ListPersonalAccessTokensListing                                                 = null;
    private Internal\Operator\EnterpriseAdmin\DeletePersonalAccessToken|null $enterpriseAdmin👷DeletePersonalAccessToken                                                             = null;
    private Internal\Operator\EnterpriseAdmin\DeleteUser|null $enterpriseAdmin👷DeleteUser                                                                                           = null;
    private Internal\Operator\EnterpriseAdmin\CreateImpersonationOAuthToken|null $enterpriseAdmin👷CreateImpersonationOAuthToken                                                     = null;
    private Internal\Operator\EnterpriseAdmin\DeleteImpersonationOAuthToken|null $enterpriseAdmin👷DeleteImpersonationOAuthToken                                                     = null;
    private Internal\Operator\Apps\GetAuthenticated|null $apps👷GetAuthenticated                                                                                                     = null;
    private Internal\Operator\Apps\CreateFromManifest|null $apps👷CreateFromManifest                                                                                                 = null;
    private Internal\Operator\Apps\GetWebhookConfigForApp|null $apps👷GetWebhookConfigForApp                                                                                         = null;
    private Internal\Operator\Apps\UpdateWebhookConfigForApp|null $apps👷UpdateWebhookConfigForApp                                                                                   = null;
    private Internal\Operator\Apps\ListWebhookDeliveries|null $apps👷ListWebhookDeliveries                                                                                           = null;
    private Internal\Operator\Apps\GetWebhookDelivery|null $apps👷GetWebhookDelivery                                                                                                 = null;
    private Internal\Operator\Apps\RedeliverWebhookDelivery|null $apps👷RedeliverWebhookDelivery                                                                                     = null;
    private Internal\Operator\Apps\ListInstallationRequestsForAuthenticatedApp|null $apps👷ListInstallationRequestsForAuthenticatedApp                                               = null;
    private Internal\Operator\Apps\ListInstallationRequestsForAuthenticatedAppListing|null $apps👷ListInstallationRequestsForAuthenticatedAppListing                                 = null;
    private Internal\Operator\Apps\ListInstallations|null $apps👷ListInstallations                                                                                                   = null;
    private Internal\Operator\Apps\ListInstallationsListing|null $apps👷ListInstallationsListing                                                                                     = null;
    private Internal\Operator\Apps\GetInstallation|null $apps👷GetInstallation                                                                                                       = null;
    private Internal\Operator\Apps\DeleteInstallation|null $apps👷DeleteInstallation                                                                                                 = null;
    private Internal\Operator\Apps\CreateInstallationAccessToken|null $apps👷CreateInstallationAccessToken                                                                           = null;
    private Internal\Operator\Apps\SuspendInstallation|null $apps👷SuspendInstallation                                                                                               = null;
    private Internal\Operator\Apps\UnsuspendInstallation|null $apps👷UnsuspendInstallation                                                                                           = null;
    private Internal\Operator\Apps\DeleteAuthorization|null $apps👷DeleteAuthorization                                                                                               = null;
    private Internal\Operator\Apps\CheckToken|null $apps👷CheckToken                                                                                                                 = null;
    private Internal\Operator\Apps\DeleteToken|null $apps👷DeleteToken                                                                                                               = null;
    private Internal\Operator\Apps\ResetToken|null $apps👷ResetToken                                                                                                                 = null;
    private Internal\Operator\Apps\ResetAuthorization|null $apps👷ResetAuthorization                                                                                                 = null;
    private Internal\Operator\Apps\GetBySlug|null $apps👷GetBySlug                                                                                                                   = null;
    private Internal\Operator\CodesOfConduct\GetAllCodesOfConduct|null $codesOfConduct👷GetAllCodesOfConduct                                                                         = null;
    private Internal\Operator\CodesOfConduct\GetConductCode|null $codesOfConduct👷GetConductCode                                                                                     = null;
    private Internal\Operator\Emojis\Get|null $emojis👷Get                                                                                                                           = null;
    private Internal\Operator\EnterpriseAdmin\GetAnnouncement|null $enterpriseAdmin👷GetAnnouncement                                                                                 = null;
    private Internal\Operator\EnterpriseAdmin\RemoveAnnouncement|null $enterpriseAdmin👷RemoveAnnouncement                                                                           = null;
    private Internal\Operator\EnterpriseAdmin\SetAnnouncement|null $enterpriseAdmin👷SetAnnouncement                                                                                 = null;
    private Internal\Operator\EnterpriseAdmin\GetLicenseInformation|null $enterpriseAdmin👷GetLicenseInformation                                                                     = null;
    private Internal\Operator\EnterpriseAdmin\GetAllStats|null $enterpriseAdmin👷GetAllStats                                                                                         = null;
    private Internal\Operator\EnterpriseAdmin\GetCommentStats|null $enterpriseAdmin👷GetCommentStats                                                                                 = null;
    private Internal\Operator\EnterpriseAdmin\GetGistStats|null $enterpriseAdmin👷GetGistStats                                                                                       = null;
    private Internal\Operator\EnterpriseAdmin\GetHooksStats|null $enterpriseAdmin👷GetHooksStats                                                                                     = null;
    private Internal\Operator\EnterpriseAdmin\GetIssueStats|null $enterpriseAdmin👷GetIssueStats                                                                                     = null;
    private Internal\Operator\EnterpriseAdmin\GetMilestoneStats|null $enterpriseAdmin👷GetMilestoneStats                                                                             = null;
    private Internal\Operator\EnterpriseAdmin\GetOrgStats|null $enterpriseAdmin👷GetOrgStats                                                                                         = null;
    private Internal\Operator\EnterpriseAdmin\GetPagesStats|null $enterpriseAdmin👷GetPagesStats                                                                                     = null;
    private Internal\Operator\EnterpriseAdmin\GetPullRequestStats|null $enterpriseAdmin👷GetPullRequestStats                                                                         = null;
    private Internal\Operator\EnterpriseAdmin\GetRepoStats|null $enterpriseAdmin👷GetRepoStats                                                                                       = null;
    private Internal\Operator\EnterpriseAdmin\GetUserStats|null $enterpriseAdmin👷GetUserStats                                                                                       = null;
    private Internal\Operator\EnterpriseAdmin\GetGithubActionsPermissionsEnterprise|null $enterpriseAdmin👷GetGithubActionsPermissionsEnterprise                                     = null;
    private Internal\Operator\EnterpriseAdmin\SetGithubActionsPermissionsEnterprise|null $enterpriseAdmin👷SetGithubActionsPermissionsEnterprise                                     = null;
    private Internal\Operator\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise|null $enterpriseAdmin👷ListSelectedOrganizationsEnabledGithubActionsEnterprise = null;
    private Internal\Operator\EnterpriseAdmin\SetSelectedOrganizationsEnabledGithubActionsEnterprise|null $enterpriseAdmin👷SetSelectedOrganizationsEnabledGithubActionsEnterprise   = null;
    private Internal\Operator\EnterpriseAdmin\EnableSelectedOrganizationGithubActionsEnterprise|null $enterpriseAdmin👷EnableSelectedOrganizationGithubActionsEnterprise             = null;
    private Internal\Operator\EnterpriseAdmin\DisableSelectedOrganizationGithubActionsEnterprise|null $enterpriseAdmin👷DisableSelectedOrganizationGithubActionsEnterprise           = null;
    private Internal\Operator\EnterpriseAdmin\GetAllowedActionsEnterprise|null $enterpriseAdmin👷GetAllowedActionsEnterprise                                                         = null;
    private Internal\Operator\EnterpriseAdmin\SetAllowedActionsEnterprise|null $enterpriseAdmin👷SetAllowedActionsEnterprise                                                         = null;
    private Internal\Operator\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise|null $enterpriseAdmin👷ListSelfHostedRunnerGroupsForEnterprise                                 = null;
    private Internal\Operator\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterprise|null $enterpriseAdmin👷CreateSelfHostedRunnerGroupForEnterprise                               = null;
    private Internal\Operator\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterprise|null $enterpriseAdmin👷GetSelfHostedRunnerGroupForEnterprise                                     = null;
    private Internal\Operator\EnterpriseAdmin\DeleteSelfHostedRunnerGroupFromEnterprise|null $enterpriseAdmin👷DeleteSelfHostedRunnerGroupFromEnterprise                             = null;
    private Internal\Operator\EnterpriseAdmin\UpdateSelfHostedRunnerGroupForEnterprise|null $enterpriseAdmin👷UpdateSelfHostedRunnerGroupForEnterprise                               = null;
    private Internal\Operator\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise|null $enterpriseAdmin👷ListSelfHostedRunnersInGroupForEnterprise                             = null;
    private Internal\Operator\EnterpriseAdmin\SetSelfHostedRunnersInGroupForEnterprise|null $enterpriseAdmin👷SetSelfHostedRunnersInGroupForEnterprise                               = null;
    private Internal\Operator\EnterpriseAdmin\AddSelfHostedRunnerToGroupForEnterprise|null $enterpriseAdmin👷AddSelfHostedRunnerToGroupForEnterprise                                 = null;
    private Internal\Operator\EnterpriseAdmin\RemoveSelfHostedRunnerFromGroupForEnterprise|null $enterpriseAdmin👷RemoveSelfHostedRunnerFromGroupForEnterprise                       = null;
    private Internal\Operator\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise|null $enterpriseAdmin👷ListSelfHostedRunnersForEnterprise                                           = null;
    private Internal\Operator\EnterpriseAdmin\ListRunnerApplicationsForEnterprise|null $enterpriseAdmin👷ListRunnerApplicationsForEnterprise                                         = null;
    private Internal\Operator\EnterpriseAdmin\CreateRegistrationTokenForEnterprise|null $enterpriseAdmin👷CreateRegistrationTokenForEnterprise                                       = null;
    private Internal\Operator\EnterpriseAdmin\CreateRemoveTokenForEnterprise|null $enterpriseAdmin👷CreateRemoveTokenForEnterprise                                                   = null;
    private Internal\Operator\EnterpriseAdmin\GetSelfHostedRunnerForEnterprise|null $enterpriseAdmin👷GetSelfHostedRunnerForEnterprise                                               = null;
    private Internal\Operator\EnterpriseAdmin\DeleteSelfHostedRunnerFromEnterprise|null $enterpriseAdmin👷DeleteSelfHostedRunnerFromEnterprise                                       = null;
    private Internal\Operator\EnterpriseAdmin\GetAuditLog|null $enterpriseAdmin👷GetAuditLog                                                                                         = null;
    private Internal\Operator\EnterpriseAdmin\GetAuditLogListing|null $enterpriseAdmin👷GetAuditLogListing                                                                           = null;
    private Internal\Operator\SecretScanning\ListAlertsForEnterprise|null $secretScanning👷ListAlertsForEnterprise                                                                   = null;
    private Internal\Operator\Activity\GetFeeds|null $activity👷GetFeeds                                                                                                             = null;
    private Internal\Operator\Gists\List_|null $gists👷List_                                                                                                                         = null;
    private Internal\Operator\Gists\ListListing|null $gists👷ListListing                                                                                                             = null;
    private Internal\Operator\Gists\Create|null $gists👷Create                                                                                                                       = null;
    private Internal\Operator\Gists\ListPublic|null $gists👷ListPublic                                                                                                               = null;
    private Internal\Operator\Gists\ListPublicListing|null $gists👷ListPublicListing                                                                                                 = null;
    private Internal\Operator\Gists\ListStarred|null $gists👷ListStarred                                                                                                             = null;
    private Internal\Operator\Gists\ListStarredListing|null $gists👷ListStarredListing                                                                                               = null;
    private Internal\Operator\Gists\Get|null $gists👷Get                                                                                                                             = null;
    private Internal\Operator\Gists\Delete|null $gists👷Delete                                                                                                                       = null;
    private Internal\Operator\Gists\Update|null $gists👷Update                                                                                                                       = null;
    private Internal\Operator\Gists\ListComments|null $gists👷ListComments                                                                                                           = null;
    private Internal\Operator\Gists\ListCommentsListing|null $gists👷ListCommentsListing                                                                                             = null;
    private Internal\Operator\Gists\CreateComment|null $gists👷CreateComment                                                                                                         = null;
    private Internal\Operator\Gists\GetComment|null $gists👷GetComment                                                                                                               = null;
    private Internal\Operator\Gists\DeleteComment|null $gists👷DeleteComment                                                                                                         = null;
    private Internal\Operator\Gists\UpdateComment|null $gists👷UpdateComment                                                                                                         = null;
    private Internal\Operator\Gists\ListCommits|null $gists👷ListCommits                                                                                                             = null;
    private Internal\Operator\Gists\ListCommitsListing|null $gists👷ListCommitsListing                                                                                               = null;
    private Internal\Operator\Gists\ListForks|null $gists👷ListForks                                                                                                                 = null;
    private Internal\Operator\Gists\ListForksListing|null $gists👷ListForksListing                                                                                                   = null;
    private Internal\Operator\Gists\Fork|null $gists👷Fork                                                                                                                           = null;
    private Internal\Operator\Gists\CheckIsStarred|null $gists👷CheckIsStarred                                                                                                       = null;
    private Internal\Operator\Gists\Star|null $gists👷Star                                                                                                                           = null;
    private Internal\Operator\Gists\Unstar|null $gists👷Unstar                                                                                                                       = null;
    private Internal\Operator\Gists\GetRevision|null $gists👷GetRevision                                                                                                             = null;
    private Internal\Operator\Gitignore\GetAllTemplates|null $gitignore👷GetAllTemplates                                                                                             = null;
    private Internal\Operator\Gitignore\GetTemplate|null $gitignore👷GetTemplate                                                                                                     = null;
    private Internal\Operator\Apps\ListReposAccessibleToInstallation|null $apps👷ListReposAccessibleToInstallation                                                                   = null;
    private Internal\Operator\Apps\RevokeInstallationAccessToken|null $apps👷RevokeInstallationAccessToken                                                                           = null;
    private Internal\Operator\Issues\List_|null $issues👷List_                                                                                                                       = null;
    private Internal\Operator\Issues\ListListing|null $issues👷ListListing                                                                                                           = null;
    private Internal\Operator\Licenses\GetAllCommonlyUsed|null $licenses👷GetAllCommonlyUsed                                                                                         = null;
    private Internal\Operator\Licenses\GetAllCommonlyUsedListing|null $licenses👷GetAllCommonlyUsedListing                                                                           = null;
    private Internal\Operator\Licenses\Get|null $licenses👷Get                                                                                                                       = null;
    private Internal\Operator\Markdown\Render|null $markdown👷Render                                                                                                                 = null;
    private Internal\Operator\Markdown\RenderRaw|null $markdown👷RenderRaw                                                                                                           = null;
    private Internal\Operator\Meta\Get|null $meta👷Get                                                                                                                               = null;
    private Internal\Operator\Activity\ListNotificationsForAuthenticatedUser|null $activity👷ListNotificationsForAuthenticatedUser                                                   = null;
    private Internal\Operator\Activity\ListNotificationsForAuthenticatedUserListing|null $activity👷ListNotificationsForAuthenticatedUserListing                                     = null;
    private Internal\Operator\Activity\MarkNotificationsAsRead|null $activity👷MarkNotificationsAsRead                                                                               = null;
    private Internal\Operator\Activity\GetThread|null $activity👷GetThread                                                                                                           = null;
    private Internal\Operator\Activity\MarkThreadAsDone|null $activity👷MarkThreadAsDone                                                                                             = null;
    private Internal\Operator\Activity\MarkThreadAsRead|null $activity👷MarkThreadAsRead                                                                                             = null;
    private Internal\Operator\Activity\GetThreadSubscriptionForAuthenticatedUser|null $activity👷GetThreadSubscriptionForAuthenticatedUser                                           = null;
    private Internal\Operator\Activity\SetThreadSubscription|null $activity👷SetThreadSubscription                                                                                   = null;
    private Internal\Operator\Activity\DeleteThreadSubscription|null $activity👷DeleteThreadSubscription                                                                             = null;
    private Internal\Operator\Meta\GetOctocat|null $meta👷GetOctocat                                                                                                                 = null;
    private Internal\Operator\Orgs\List_|null $orgs👷List_                                                                                                                           = null;
    private Internal\Operator\Orgs\Get|null $orgs👷Get                                                                                                                               = null;
    private Internal\Operator\Orgs\Update|null $orgs👷Update                                                                                                                         = null;
    private Internal\Operator\Actions\GetGithubActionsPermissionsOrganization|null $actions👷GetGithubActionsPermissionsOrganization                                                 = null;
    private Internal\Operator\Actions\SetGithubActionsPermissionsOrganization|null $actions👷SetGithubActionsPermissionsOrganization                                                 = null;
    private Internal\Operator\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization|null $actions👷ListSelectedRepositoriesEnabledGithubActionsOrganization               = null;
    private Internal\Operator\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization|null $actions👷SetSelectedRepositoriesEnabledGithubActionsOrganization                 = null;
    private Internal\Operator\Actions\EnableSelectedRepositoryGithubActionsOrganization|null $actions👷EnableSelectedRepositoryGithubActionsOrganization                             = null;
    private Internal\Operator\Actions\DisableSelectedRepositoryGithubActionsOrganization|null $actions👷DisableSelectedRepositoryGithubActionsOrganization                           = null;
    private Internal\Operator\Actions\GetAllowedActionsOrganization|null $actions👷GetAllowedActionsOrganization                                                                     = null;
    private Internal\Operator\Actions\SetAllowedActionsOrganization|null $actions👷SetAllowedActionsOrganization                                                                     = null;
    private Internal\Operator\Actions\GetGithubActionsDefaultWorkflowPermissionsOrganization|null $actions👷GetGithubActionsDefaultWorkflowPermissionsOrganization                   = null;
    private Internal\Operator\Actions\SetGithubActionsDefaultWorkflowPermissionsOrganization|null $actions👷SetGithubActionsDefaultWorkflowPermissionsOrganization                   = null;
    private Internal\Operator\Actions\ListSelfHostedRunnerGroupsForOrg|null $actions👷ListSelfHostedRunnerGroupsForOrg                                                               = null;
    private Internal\Operator\Actions\CreateSelfHostedRunnerGroupForOrg|null $actions👷CreateSelfHostedRunnerGroupForOrg                                                             = null;
    private Internal\Operator\Actions\GetSelfHostedRunnerGroupForOrg|null $actions👷GetSelfHostedRunnerGroupForOrg                                                                   = null;
    private Internal\Operator\Actions\DeleteSelfHostedRunnerGroupFromOrg|null $actions👷DeleteSelfHostedRunnerGroupFromOrg                                                           = null;
    private Internal\Operator\Actions\UpdateSelfHostedRunnerGroupForOrg|null $actions👷UpdateSelfHostedRunnerGroupForOrg                                                             = null;
    private Internal\Operator\Actions\AddSelfHostedRunnerToGroupForOrg|null $actions👷AddSelfHostedRunnerToGroupForOrg                                                               = null;
    private Internal\Operator\Actions\ListSelfHostedRunnersForOrg|null $actions👷ListSelfHostedRunnersForOrg                                                                         = null;
    private Internal\Operator\Actions\ListRunnerApplicationsForOrg|null $actions👷ListRunnerApplicationsForOrg                                                                       = null;
    private Internal\Operator\Actions\CreateRegistrationTokenForOrg|null $actions👷CreateRegistrationTokenForOrg                                                                     = null;
    private Internal\Operator\Actions\CreateRemoveTokenForOrg|null $actions👷CreateRemoveTokenForOrg                                                                                 = null;
    private Internal\Operator\Actions\GetSelfHostedRunnerForOrg|null $actions👷GetSelfHostedRunnerForOrg                                                                             = null;
    private Internal\Operator\Actions\DeleteSelfHostedRunnerFromOrg|null $actions👷DeleteSelfHostedRunnerFromOrg                                                                     = null;
    private Internal\Operator\Actions\ListOrgSecrets|null $actions👷ListOrgSecrets                                                                                                   = null;
    private Internal\Operator\Actions\GetOrgPublicKey|null $actions👷GetOrgPublicKey                                                                                                 = null;
    private Internal\Operator\Actions\GetOrgSecret|null $actions👷GetOrgSecret                                                                                                       = null;
    private Internal\Operator\Actions\CreateOrUpdateOrgSecret|null $actions👷CreateOrUpdateOrgSecret                                                                                 = null;
    private Internal\Operator\Actions\DeleteOrgSecret|null $actions👷DeleteOrgSecret                                                                                                 = null;
    private Internal\Operator\Actions\ListSelectedReposForOrgSecret|null $actions👷ListSelectedReposForOrgSecret                                                                     = null;
    private Internal\Operator\Actions\SetSelectedReposForOrgSecret|null $actions👷SetSelectedReposForOrgSecret                                                                       = null;
    private Internal\Operator\Actions\AddSelectedRepoToOrgSecret|null $actions👷AddSelectedRepoToOrgSecret                                                                           = null;
    private Internal\Operator\Actions\RemoveSelectedRepoFromOrgSecret|null $actions👷RemoveSelectedRepoFromOrgSecret                                                                 = null;
    private Internal\Operator\Orgs\GetAuditLog|null $orgs👷GetAuditLog                                                                                                               = null;
    private Internal\Operator\Orgs\GetAuditLogListing|null $orgs👷GetAuditLogListing                                                                                                 = null;
    private Internal\Operator\CodeScanning\ListAlertsForOrg|null $codeScanning👷ListAlertsForOrg                                                                                     = null;
    private Internal\Operator\CodeScanning\ListAlertsForOrgListing|null $codeScanning👷ListAlertsForOrgListing                                                                       = null;
    private Internal\Operator\Teams\ExternalIdpGroupInfoForOrg|null $teams👷ExternalIdpGroupInfoForOrg                                                                               = null;
    private Internal\Operator\Teams\ListExternalIdpGroupsForOrg|null $teams👷ListExternalIdpGroupsForOrg                                                                             = null;
    private Internal\Operator\Orgs\ListWebhooks|null $orgs👷ListWebhooks                                                                                                             = null;
    private Internal\Operator\Orgs\ListWebhooksListing|null $orgs👷ListWebhooksListing                                                                                               = null;
    private Internal\Operator\Orgs\CreateWebhook|null $orgs👷CreateWebhook                                                                                                           = null;
    private Internal\Operator\Orgs\GetWebhook|null $orgs👷GetWebhook                                                                                                                 = null;
    private Internal\Operator\Orgs\DeleteWebhook|null $orgs👷DeleteWebhook                                                                                                           = null;
    private Internal\Operator\Orgs\UpdateWebhook|null $orgs👷UpdateWebhook                                                                                                           = null;
    private Internal\Operator\Orgs\GetWebhookConfigForOrg|null $orgs👷GetWebhookConfigForOrg                                                                                         = null;
    private Internal\Operator\Orgs\UpdateWebhookConfigForOrg|null $orgs👷UpdateWebhookConfigForOrg                                                                                   = null;
    private Internal\Operator\Orgs\ListWebhookDeliveries|null $orgs👷ListWebhookDeliveries                                                                                           = null;
    private Internal\Operator\Orgs\GetWebhookDelivery|null $orgs👷GetWebhookDelivery                                                                                                 = null;
    private Internal\Operator\Orgs\RedeliverWebhookDelivery|null $orgs👷RedeliverWebhookDelivery                                                                                     = null;
    private Internal\Operator\Orgs\PingWebhook|null $orgs👷PingWebhook                                                                                                               = null;
    private Internal\Operator\Apps\GetOrgInstallation|null $apps👷GetOrgInstallation                                                                                                 = null;
    private Internal\Operator\Orgs\ListAppInstallations|null $orgs👷ListAppInstallations                                                                                             = null;
    private Internal\Operator\Issues\ListForOrg|null $issues👷ListForOrg                                                                                                             = null;
    private Internal\Operator\Issues\ListForOrgListing|null $issues👷ListForOrgListing                                                                                               = null;
    private Internal\Operator\Orgs\ListMembers|null $orgs👷ListMembers                                                                                                               = null;
    private Internal\Operator\Orgs\ListMembersListing|null $orgs👷ListMembersListing                                                                                                 = null;
    private Internal\Operator\Orgs\CheckMembershipForUser|null $orgs👷CheckMembershipForUser                                                                                         = null;
    private Internal\Operator\Orgs\RemoveMember|null $orgs👷RemoveMember                                                                                                             = null;
    private Internal\Operator\Orgs\GetMembershipForUser|null $orgs👷GetMembershipForUser                                                                                             = null;
    private Internal\Operator\Orgs\SetMembershipForUser|null $orgs👷SetMembershipForUser                                                                                             = null;
    private Internal\Operator\Orgs\RemoveMembershipForUser|null $orgs👷RemoveMembershipForUser                                                                                       = null;
    private Internal\Operator\Migrations\ListForOrg|null $migrations👷ListForOrg                                                                                                     = null;
    private Internal\Operator\Migrations\ListForOrgListing|null $migrations👷ListForOrgListing                                                                                       = null;
    private Internal\Operator\Migrations\StartForOrg|null $migrations👷StartForOrg                                                                                                   = null;
    private Internal\Operator\Migrations\GetStatusForOrg|null $migrations👷GetStatusForOrg                                                                                           = null;
    private Internal\Operator\Migrations\DownloadArchiveForOrg|null $migrations👷DownloadArchiveForOrg                                                                               = null;
    private Internal\Operator\Migrations\DownloadArchiveForOrgStreaming|null $migrations👷DownloadArchiveForOrgStreaming                                                             = null;
    private Internal\Operator\Migrations\DeleteArchiveForOrg|null $migrations👷DeleteArchiveForOrg                                                                                   = null;
    private Internal\Operator\Migrations\UnlockRepoForOrg|null $migrations👷UnlockRepoForOrg                                                                                         = null;
    private Internal\Operator\Migrations\ListReposForOrg|null $migrations👷ListReposForOrg                                                                                           = null;
    private Internal\Operator\Migrations\ListReposForOrgListing|null $migrations👷ListReposForOrgListing                                                                             = null;
    private Internal\Operator\Orgs\ListOutsideCollaborators|null $orgs👷ListOutsideCollaborators                                                                                     = null;
    private Internal\Operator\Orgs\ListOutsideCollaboratorsListing|null $orgs👷ListOutsideCollaboratorsListing                                                                       = null;
    private Internal\Operator\Orgs\ConvertMemberToOutsideCollaborator|null $orgs👷ConvertMemberToOutsideCollaborator                                                                 = null;
    private Internal\Operator\Orgs\RemoveOutsideCollaborator|null $orgs👷RemoveOutsideCollaborator                                                                                   = null;
    private Internal\Operator\Projects\ListForOrg|null $projects👷ListForOrg                                                                                                         = null;
    private Internal\Operator\Projects\ListForOrgListing|null $projects👷ListForOrgListing                                                                                           = null;
    private Internal\Operator\Projects\CreateForOrg|null $projects👷CreateForOrg                                                                                                     = null;
    private Internal\Operator\Repos\ListForOrg|null $repos👷ListForOrg                                                                                                               = null;
    private Internal\Operator\Repos\ListForOrgListing|null $repos👷ListForOrgListing                                                                                                 = null;
    private Internal\Operator\Repos\CreateInOrg|null $repos👷CreateInOrg                                                                                                             = null;
    private Internal\Operator\Teams\List_|null $teams👷List_                                                                                                                         = null;
    private Internal\Operator\Teams\ListListing|null $teams👷ListListing                                                                                                             = null;
    private Internal\Operator\Teams\Create|null $teams👷Create                                                                                                                       = null;
    private Internal\Operator\Teams\GetByName|null $teams👷GetByName                                                                                                                 = null;
    private Internal\Operator\Teams\DeleteInOrg|null $teams👷DeleteInOrg                                                                                                             = null;
    private Internal\Operator\Teams\UpdateInOrg|null $teams👷UpdateInOrg                                                                                                             = null;
    private Internal\Operator\Teams\ListDiscussionsInOrg|null $teams👷ListDiscussionsInOrg                                                                                           = null;
    private Internal\Operator\Teams\ListDiscussionsInOrgListing|null $teams👷ListDiscussionsInOrgListing                                                                             = null;
    private Internal\Operator\Teams\CreateDiscussionInOrg|null $teams👷CreateDiscussionInOrg                                                                                         = null;
    private Internal\Operator\Teams\GetDiscussionInOrg|null $teams👷GetDiscussionInOrg                                                                                               = null;
    private Internal\Operator\Teams\DeleteDiscussionInOrg|null $teams👷DeleteDiscussionInOrg                                                                                         = null;
    private Internal\Operator\Teams\UpdateDiscussionInOrg|null $teams👷UpdateDiscussionInOrg                                                                                         = null;
    private Internal\Operator\Teams\ListDiscussionCommentsInOrg|null $teams👷ListDiscussionCommentsInOrg                                                                             = null;
    private Internal\Operator\Teams\ListDiscussionCommentsInOrgListing|null $teams👷ListDiscussionCommentsInOrgListing                                                               = null;
    private Internal\Operator\Teams\CreateDiscussionCommentInOrg|null $teams👷CreateDiscussionCommentInOrg                                                                           = null;
    private Internal\Operator\Teams\GetDiscussionCommentInOrg|null $teams👷GetDiscussionCommentInOrg                                                                                 = null;
    private Internal\Operator\Teams\DeleteDiscussionCommentInOrg|null $teams👷DeleteDiscussionCommentInOrg                                                                           = null;
    private Internal\Operator\Teams\UpdateDiscussionCommentInOrg|null $teams👷UpdateDiscussionCommentInOrg                                                                           = null;
    private Internal\Operator\Reactions\ListForTeamDiscussionCommentInOrg|null $reactions👷ListForTeamDiscussionCommentInOrg                                                         = null;
    private Internal\Operator\Reactions\ListForTeamDiscussionCommentInOrgListing|null $reactions👷ListForTeamDiscussionCommentInOrgListing                                           = null;
    private Internal\Operator\Reactions\CreateForTeamDiscussionCommentInOrg|null $reactions👷CreateForTeamDiscussionCommentInOrg                                                     = null;
    private Internal\Operator\Reactions\DeleteForTeamDiscussionComment|null $reactions👷DeleteForTeamDiscussionComment                                                               = null;
    private Internal\Operator\Reactions\ListForTeamDiscussionInOrg|null $reactions👷ListForTeamDiscussionInOrg                                                                       = null;
    private Internal\Operator\Reactions\ListForTeamDiscussionInOrgListing|null $reactions👷ListForTeamDiscussionInOrgListing                                                         = null;
    private Internal\Operator\Reactions\CreateForTeamDiscussionInOrg|null $reactions👷CreateForTeamDiscussionInOrg                                                                   = null;
    private Internal\Operator\Reactions\DeleteForTeamDiscussion|null $reactions👷DeleteForTeamDiscussion                                                                             = null;
    private Internal\Operator\Teams\UnlinkExternalIdpGroupFromTeamForOrg|null $teams👷UnlinkExternalIdpGroupFromTeamForOrg                                                           = null;
    private Internal\Operator\Teams\LinkExternalIdpGroupToTeamForOrg|null $teams👷LinkExternalIdpGroupToTeamForOrg                                                                   = null;
    private Internal\Operator\Teams\ListMembersInOrg|null $teams👷ListMembersInOrg                                                                                                   = null;
    private Internal\Operator\Teams\ListMembersInOrgListing|null $teams👷ListMembersInOrgListing                                                                                     = null;
    private Internal\Operator\Teams\GetMembershipForUserInOrg|null $teams👷GetMembershipForUserInOrg                                                                                 = null;
    private Internal\Operator\Teams\AddOrUpdateMembershipForUserInOrg|null $teams👷AddOrUpdateMembershipForUserInOrg                                                                 = null;
    private Internal\Operator\Teams\RemoveMembershipForUserInOrg|null $teams👷RemoveMembershipForUserInOrg                                                                           = null;
    private Internal\Operator\Teams\ListProjectsInOrg|null $teams👷ListProjectsInOrg                                                                                                 = null;
    private Internal\Operator\Teams\ListProjectsInOrgListing|null $teams👷ListProjectsInOrgListing                                                                                   = null;
    private Internal\Operator\Teams\CheckPermissionsForProjectInOrg|null $teams👷CheckPermissionsForProjectInOrg                                                                     = null;
    private Internal\Operator\Teams\AddOrUpdateProjectPermissionsInOrg|null $teams👷AddOrUpdateProjectPermissionsInOrg                                                               = null;
    private Internal\Operator\Teams\RemoveProjectInOrg|null $teams👷RemoveProjectInOrg                                                                                               = null;
    private Internal\Operator\Teams\ListReposInOrg|null $teams👷ListReposInOrg                                                                                                       = null;
    private Internal\Operator\Teams\ListReposInOrgListing|null $teams👷ListReposInOrgListing                                                                                         = null;
    private Internal\Operator\Teams\CheckPermissionsForRepoInOrg|null $teams👷CheckPermissionsForRepoInOrg                                                                           = null;
    private Internal\Operator\Teams\AddOrUpdateRepoPermissionsInOrg|null $teams👷AddOrUpdateRepoPermissionsInOrg                                                                     = null;
    private Internal\Operator\Teams\RemoveRepoInOrg|null $teams👷RemoveRepoInOrg                                                                                                     = null;
    private Internal\Operator\Teams\ListChildInOrg|null $teams👷ListChildInOrg                                                                                                       = null;
    private Internal\Operator\Teams\ListChildInOrgListing|null $teams👷ListChildInOrgListing                                                                                         = null;
    private Internal\Operator\Projects\GetCard|null $projects👷GetCard                                                                                                               = null;
    private Internal\Operator\Projects\DeleteCard|null $projects👷DeleteCard                                                                                                         = null;
    private Internal\Operator\Projects\UpdateCard|null $projects👷UpdateCard                                                                                                         = null;
    private Internal\Operator\Projects\MoveCard|null $projects👷MoveCard                                                                                                             = null;
    private Internal\Operator\Projects\GetColumn|null $projects👷GetColumn                                                                                                           = null;
    private Internal\Operator\Projects\DeleteColumn|null $projects👷DeleteColumn                                                                                                     = null;
    private Internal\Operator\Projects\UpdateColumn|null $projects👷UpdateColumn                                                                                                     = null;
    private Internal\Operator\Projects\ListCards|null $projects👷ListCards                                                                                                           = null;
    private Internal\Operator\Projects\ListCardsListing|null $projects👷ListCardsListing                                                                                             = null;
    private Internal\Operator\Projects\CreateCard|null $projects👷CreateCard                                                                                                         = null;
    private Internal\Operator\Projects\MoveColumn|null $projects👷MoveColumn                                                                                                         = null;
    private Internal\Operator\Projects\Get|null $projects👷Get                                                                                                                       = null;
    private Internal\Operator\Projects\Delete|null $projects👷Delete                                                                                                                 = null;
    private Internal\Operator\Projects\Update|null $projects👷Update                                                                                                                 = null;
    private Internal\Operator\Projects\ListCollaborators|null $projects👷ListCollaborators                                                                                           = null;
    private Internal\Operator\Projects\ListCollaboratorsListing|null $projects👷ListCollaboratorsListing                                                                             = null;
    private Internal\Operator\Projects\AddCollaborator|null $projects👷AddCollaborator                                                                                               = null;
    private Internal\Operator\Projects\RemoveCollaborator|null $projects👷RemoveCollaborator                                                                                         = null;
    private Internal\Operator\Projects\GetPermissionForUser|null $projects👷GetPermissionForUser                                                                                     = null;
    private Internal\Operator\Projects\ListColumns|null $projects👷ListColumns                                                                                                       = null;
    private Internal\Operator\Projects\ListColumnsListing|null $projects👷ListColumnsListing                                                                                         = null;
    private Internal\Operator\Projects\CreateColumn|null $projects👷CreateColumn                                                                                                     = null;
    private Internal\Operator\RateLimit\Get|null $rateLimit👷Get                                                                                                                     = null;
    private Internal\Operator\Repos\Get|null $repos👷Get                                                                                                                             = null;
    private Internal\Operator\Repos\Delete|null $repos👷Delete                                                                                                                       = null;
    private Internal\Operator\Repos\Update|null $repos👷Update                                                                                                                       = null;
    private Internal\Operator\Actions\ListArtifactsForRepo|null $actions👷ListArtifactsForRepo                                                                                       = null;
    private Internal\Operator\Actions\GetArtifact|null $actions👷GetArtifact                                                                                                         = null;
    private Internal\Operator\Actions\DeleteArtifact|null $actions👷DeleteArtifact                                                                                                   = null;
    private Internal\Operator\Actions\DownloadArtifact|null $actions👷DownloadArtifact                                                                                               = null;
    private Internal\Operator\Actions\DownloadArtifactStreaming|null $actions👷DownloadArtifactStreaming                                                                             = null;
    private Internal\Operator\Actions\GetJobForWorkflowRun|null $actions👷GetJobForWorkflowRun                                                                                       = null;
    private Internal\Operator\Actions\DownloadJobLogsForWorkflowRun|null $actions👷DownloadJobLogsForWorkflowRun                                                                     = null;
    private Internal\Operator\Actions\DownloadJobLogsForWorkflowRunStreaming|null $actions👷DownloadJobLogsForWorkflowRunStreaming                                                   = null;
    private Internal\Operator\Actions\ListRepoOrganizationSecrets|null $actions👷ListRepoOrganizationSecrets                                                                         = null;
    private Internal\Operator\Actions\GetGithubActionsPermissionsRepository|null $actions👷GetGithubActionsPermissionsRepository                                                     = null;
    private Internal\Operator\Actions\SetGithubActionsPermissionsRepository|null $actions👷SetGithubActionsPermissionsRepository                                                     = null;
    private Internal\Operator\Actions\GetAllowedActionsRepository|null $actions👷GetAllowedActionsRepository                                                                         = null;
    private Internal\Operator\Actions\SetAllowedActionsRepository|null $actions👷SetAllowedActionsRepository                                                                         = null;
    private Internal\Operator\Actions\ListSelfHostedRunnersForRepo|null $actions👷ListSelfHostedRunnersForRepo                                                                       = null;
    private Internal\Operator\Actions\ListRunnerApplicationsForRepo|null $actions👷ListRunnerApplicationsForRepo                                                                     = null;
    private Internal\Operator\Actions\CreateRegistrationTokenForRepo|null $actions👷CreateRegistrationTokenForRepo                                                                   = null;
    private Internal\Operator\Actions\CreateRemoveTokenForRepo|null $actions👷CreateRemoveTokenForRepo                                                                               = null;
    private Internal\Operator\Actions\GetSelfHostedRunnerForRepo|null $actions👷GetSelfHostedRunnerForRepo                                                                           = null;
    private Internal\Operator\Actions\DeleteSelfHostedRunnerFromRepo|null $actions👷DeleteSelfHostedRunnerFromRepo                                                                   = null;
    private Internal\Operator\Actions\ListWorkflowRunsForRepo|null $actions👷ListWorkflowRunsForRepo                                                                                 = null;
    private Internal\Operator\Actions\GetWorkflowRun|null $actions👷GetWorkflowRun                                                                                                   = null;
    private Internal\Operator\Actions\DeleteWorkflowRun|null $actions👷DeleteWorkflowRun                                                                                             = null;
    private Internal\Operator\Actions\ListWorkflowRunArtifacts|null $actions👷ListWorkflowRunArtifacts                                                                               = null;
    private Internal\Operator\Actions\GetWorkflowRunAttempt|null $actions👷GetWorkflowRunAttempt                                                                                     = null;
    private Internal\Operator\Actions\ListJobsForWorkflowRunAttempt|null $actions👷ListJobsForWorkflowRunAttempt                                                                     = null;
    private Internal\Operator\Actions\DownloadWorkflowRunAttemptLogs|null $actions👷DownloadWorkflowRunAttemptLogs                                                                   = null;
    private Internal\Operator\Actions\DownloadWorkflowRunAttemptLogsStreaming|null $actions👷DownloadWorkflowRunAttemptLogsStreaming                                                 = null;
    private Internal\Operator\Actions\CancelWorkflowRun|null $actions👷CancelWorkflowRun                                                                                             = null;
    private Internal\Operator\Actions\ForceCancelWorkflowRun|null $actions👷ForceCancelWorkflowRun                                                                                   = null;
    private Internal\Operator\Actions\ListJobsForWorkflowRun|null $actions👷ListJobsForWorkflowRun                                                                                   = null;
    private Internal\Operator\Actions\DownloadWorkflowRunLogs|null $actions👷DownloadWorkflowRunLogs                                                                                 = null;
    private Internal\Operator\Actions\DownloadWorkflowRunLogsStreaming|null $actions👷DownloadWorkflowRunLogsStreaming                                                               = null;
    private Internal\Operator\Actions\DeleteWorkflowRunLogs|null $actions👷DeleteWorkflowRunLogs                                                                                     = null;
    private Internal\Operator\Actions\ReRunWorkflow|null $actions👷ReRunWorkflow                                                                                                     = null;
    private Internal\Operator\Actions\GetWorkflowRunUsage|null $actions👷GetWorkflowRunUsage                                                                                         = null;
    private Internal\Operator\Actions\ListRepoSecrets|null $actions👷ListRepoSecrets                                                                                                 = null;
    private Internal\Operator\Actions\GetRepoPublicKey|null $actions👷GetRepoPublicKey                                                                                               = null;
    private Internal\Operator\Actions\GetRepoSecret|null $actions👷GetRepoSecret                                                                                                     = null;
    private Internal\Operator\Actions\CreateOrUpdateRepoSecret|null $actions👷CreateOrUpdateRepoSecret                                                                               = null;
    private Internal\Operator\Actions\DeleteRepoSecret|null $actions👷DeleteRepoSecret                                                                                               = null;
    private Internal\Operator\Actions\ListRepoWorkflows|null $actions👷ListRepoWorkflows                                                                                             = null;
    private Internal\Operator\Actions\GetWorkflow|null $actions👷GetWorkflow                                                                                                         = null;
    private Internal\Operator\Actions\DisableWorkflow|null $actions👷DisableWorkflow                                                                                                 = null;
    private Internal\Operator\Actions\CreateWorkflowDispatch|null $actions👷CreateWorkflowDispatch                                                                                   = null;
    private Internal\Operator\Actions\EnableWorkflow|null $actions👷EnableWorkflow                                                                                                   = null;
    private Internal\Operator\Actions\ListWorkflowRuns|null $actions👷ListWorkflowRuns                                                                                               = null;
    private Internal\Operator\Actions\GetWorkflowUsage|null $actions👷GetWorkflowUsage                                                                                               = null;
    private Internal\Operator\Issues\ListAssignees|null $issues👷ListAssignees                                                                                                       = null;
    private Internal\Operator\Issues\ListAssigneesListing|null $issues👷ListAssigneesListing                                                                                         = null;
    private Internal\Operator\Issues\CheckUserCanBeAssigned|null $issues👷CheckUserCanBeAssigned                                                                                     = null;
    private Internal\Operator\Repos\ListAutolinks|null $repos👷ListAutolinks                                                                                                         = null;
    private Internal\Operator\Repos\CreateAutolink|null $repos👷CreateAutolink                                                                                                       = null;
    private Internal\Operator\Repos\GetAutolink|null $repos👷GetAutolink                                                                                                             = null;
    private Internal\Operator\Repos\DeleteAutolink|null $repos👷DeleteAutolink                                                                                                       = null;
    private Internal\Operator\Repos\ListBranches|null $repos👷ListBranches                                                                                                           = null;
    private Internal\Operator\Repos\ListBranchesListing|null $repos👷ListBranchesListing                                                                                             = null;
    private Internal\Operator\Repos\GetBranch|null $repos👷GetBranch                                                                                                                 = null;
    private Internal\Operator\Repos\GetBranchProtection|null $repos👷GetBranchProtection                                                                                             = null;
    private Internal\Operator\Repos\UpdateBranchProtection|null $repos👷UpdateBranchProtection                                                                                       = null;
    private Internal\Operator\Repos\DeleteBranchProtection|null $repos👷DeleteBranchProtection                                                                                       = null;
    private Internal\Operator\Repos\GetAdminBranchProtection|null $repos👷GetAdminBranchProtection                                                                                   = null;
    private Internal\Operator\Repos\SetAdminBranchProtection|null $repos👷SetAdminBranchProtection                                                                                   = null;
    private Internal\Operator\Repos\DeleteAdminBranchProtection|null $repos👷DeleteAdminBranchProtection                                                                             = null;
    private Internal\Operator\Repos\GetPullRequestReviewProtection|null $repos👷GetPullRequestReviewProtection                                                                       = null;
    private Internal\Operator\Repos\DeletePullRequestReviewProtection|null $repos👷DeletePullRequestReviewProtection                                                                 = null;
    private Internal\Operator\Repos\UpdatePullRequestReviewProtection|null $repos👷UpdatePullRequestReviewProtection                                                                 = null;
    private Internal\Operator\Repos\GetCommitSignatureProtection|null $repos👷GetCommitSignatureProtection                                                                           = null;
    private Internal\Operator\Repos\CreateCommitSignatureProtection|null $repos👷CreateCommitSignatureProtection                                                                     = null;
    private Internal\Operator\Repos\DeleteCommitSignatureProtection|null $repos👷DeleteCommitSignatureProtection                                                                     = null;
    private Internal\Operator\Repos\GetStatusChecksProtection|null $repos👷GetStatusChecksProtection                                                                                 = null;
    private Internal\Operator\Repos\RemoveStatusCheckProtection|null $repos👷RemoveStatusCheckProtection                                                                             = null;
    private Internal\Operator\Repos\UpdateStatusCheckProtection|null $repos👷UpdateStatusCheckProtection                                                                             = null;
    private Internal\Operator\Repos\GetAllStatusCheckContexts|null $repos👷GetAllStatusCheckContexts                                                                                 = null;
    private Internal\Operator\Repos\SetStatusCheckContexts|null $repos👷SetStatusCheckContexts                                                                                       = null;
    private Internal\Operator\Repos\AddStatusCheckContexts|null $repos👷AddStatusCheckContexts                                                                                       = null;
    private Internal\Operator\Repos\RemoveStatusCheckContexts|null $repos👷RemoveStatusCheckContexts                                                                                 = null;
    private Internal\Operator\Repos\GetAccessRestrictions|null $repos👷GetAccessRestrictions                                                                                         = null;
    private Internal\Operator\Repos\DeleteAccessRestrictions|null $repos👷DeleteAccessRestrictions                                                                                   = null;
    private Internal\Operator\Repos\GetAppsWithAccessToProtectedBranch|null $repos👷GetAppsWithAccessToProtectedBranch                                                               = null;
    private Internal\Operator\Repos\SetAppAccessRestrictions|null $repos👷SetAppAccessRestrictions                                                                                   = null;
    private Internal\Operator\Repos\AddAppAccessRestrictions|null $repos👷AddAppAccessRestrictions                                                                                   = null;
    private Internal\Operator\Repos\RemoveAppAccessRestrictions|null $repos👷RemoveAppAccessRestrictions                                                                             = null;
    private Internal\Operator\Repos\GetTeamsWithAccessToProtectedBranch|null $repos👷GetTeamsWithAccessToProtectedBranch                                                             = null;
    private Internal\Operator\Repos\SetTeamAccessRestrictions|null $repos👷SetTeamAccessRestrictions                                                                                 = null;
    private Internal\Operator\Repos\AddTeamAccessRestrictions|null $repos👷AddTeamAccessRestrictions                                                                                 = null;
    private Internal\Operator\Repos\RemoveTeamAccessRestrictions|null $repos👷RemoveTeamAccessRestrictions                                                                           = null;
    private Internal\Operator\Repos\GetUsersWithAccessToProtectedBranch|null $repos👷GetUsersWithAccessToProtectedBranch                                                             = null;
    private Internal\Operator\Repos\SetUserAccessRestrictions|null $repos👷SetUserAccessRestrictions                                                                                 = null;
    private Internal\Operator\Repos\AddUserAccessRestrictions|null $repos👷AddUserAccessRestrictions                                                                                 = null;
    private Internal\Operator\Repos\RemoveUserAccessRestrictions|null $repos👷RemoveUserAccessRestrictions                                                                           = null;
    private Internal\Operator\Checks\Create|null $checks👷Create                                                                                                                     = null;
    private Internal\Operator\Checks\Get|null $checks👷Get                                                                                                                           = null;
    private Internal\Operator\Checks\Update|null $checks👷Update                                                                                                                     = null;
    private Internal\Operator\Checks\ListAnnotations|null $checks👷ListAnnotations                                                                                                   = null;
    private Internal\Operator\Checks\ListAnnotationsListing|null $checks👷ListAnnotationsListing                                                                                     = null;
    private Internal\Operator\Checks\RerequestRun|null $checks👷RerequestRun                                                                                                         = null;
    private Internal\Operator\Checks\CreateSuite|null $checks👷CreateSuite                                                                                                           = null;
    private Internal\Operator\Checks\SetSuitesPreferences|null $checks👷SetSuitesPreferences                                                                                         = null;
    private Internal\Operator\Checks\GetSuite|null $checks👷GetSuite                                                                                                                 = null;
    private Internal\Operator\Checks\ListForSuite|null $checks👷ListForSuite                                                                                                         = null;
    private Internal\Operator\Checks\RerequestSuite|null $checks👷RerequestSuite                                                                                                     = null;
    private Internal\Operator\CodeScanning\ListAlertsForRepo|null $codeScanning👷ListAlertsForRepo                                                                                   = null;
    private Internal\Operator\CodeScanning\ListAlertsForRepoListing|null $codeScanning👷ListAlertsForRepoListing                                                                     = null;
    private Internal\Operator\CodeScanning\GetAlert|null $codeScanning👷GetAlert                                                                                                     = null;
    private Internal\Operator\CodeScanning\UpdateAlert|null $codeScanning👷UpdateAlert                                                                                               = null;
    private Internal\Operator\CodeScanning\ListAlertInstances|null $codeScanning👷ListAlertInstances                                                                                 = null;
    private Internal\Operator\CodeScanning\ListAlertInstancesListing|null $codeScanning👷ListAlertInstancesListing                                                                   = null;
    private Internal\Operator\CodeScanning\ListRecentAnalyses|null $codeScanning👷ListRecentAnalyses                                                                                 = null;
    private Internal\Operator\CodeScanning\ListRecentAnalysesListing|null $codeScanning👷ListRecentAnalysesListing                                                                   = null;
    private Internal\Operator\CodeScanning\GetAnalysis|null $codeScanning👷GetAnalysis                                                                                               = null;
    private Internal\Operator\CodeScanning\DeleteAnalysis|null $codeScanning👷DeleteAnalysis                                                                                         = null;
    private Internal\Operator\CodeScanning\UploadSarif|null $codeScanning👷UploadSarif                                                                                               = null;
    private Internal\Operator\CodeScanning\GetSarif|null $codeScanning👷GetSarif                                                                                                     = null;
    private Internal\Operator\Repos\CodeownersErrors|null $repos👷CodeownersErrors                                                                                                   = null;
    private Internal\Operator\Repos\ListCollaborators|null $repos👷ListCollaborators                                                                                                 = null;
    private Internal\Operator\Repos\ListCollaboratorsListing|null $repos👷ListCollaboratorsListing                                                                                   = null;
    private Internal\Operator\Repos\CheckCollaborator|null $repos👷CheckCollaborator                                                                                                 = null;
    private Internal\Operator\Repos\AddCollaborator|null $repos👷AddCollaborator                                                                                                     = null;
    private Internal\Operator\Repos\RemoveCollaborator|null $repos👷RemoveCollaborator                                                                                               = null;
    private Internal\Operator\Repos\GetCollaboratorPermissionLevel|null $repos👷GetCollaboratorPermissionLevel                                                                       = null;
    private Internal\Operator\Repos\ListCommitCommentsForRepo|null $repos👷ListCommitCommentsForRepo                                                                                 = null;
    private Internal\Operator\Repos\ListCommitCommentsForRepoListing|null $repos👷ListCommitCommentsForRepoListing                                                                   = null;
    private Internal\Operator\Repos\GetCommitComment|null $repos👷GetCommitComment                                                                                                   = null;
    private Internal\Operator\Repos\DeleteCommitComment|null $repos👷DeleteCommitComment                                                                                             = null;
    private Internal\Operator\Repos\UpdateCommitComment|null $repos👷UpdateCommitComment                                                                                             = null;
    private Internal\Operator\Reactions\ListForCommitComment|null $reactions👷ListForCommitComment                                                                                   = null;
    private Internal\Operator\Reactions\ListForCommitCommentListing|null $reactions👷ListForCommitCommentListing                                                                     = null;
    private Internal\Operator\Reactions\CreateForCommitComment|null $reactions👷CreateForCommitComment                                                                               = null;
    private Internal\Operator\Reactions\DeleteForCommitComment|null $reactions👷DeleteForCommitComment                                                                               = null;
    private Internal\Operator\Repos\ListCommits|null $repos👷ListCommits                                                                                                             = null;
    private Internal\Operator\Repos\ListCommitsListing|null $repos👷ListCommitsListing                                                                                               = null;
    private Internal\Operator\Repos\ListBranchesForHeadCommit|null $repos👷ListBranchesForHeadCommit                                                                                 = null;
    private Internal\Operator\Repos\ListCommentsForCommit|null $repos👷ListCommentsForCommit                                                                                         = null;
    private Internal\Operator\Repos\ListCommentsForCommitListing|null $repos👷ListCommentsForCommitListing                                                                           = null;
    private Internal\Operator\Repos\CreateCommitComment|null $repos👷CreateCommitComment                                                                                             = null;
    private Internal\Operator\Repos\ListPullRequestsAssociatedWithCommit|null $repos👷ListPullRequestsAssociatedWithCommit                                                           = null;
    private Internal\Operator\Repos\ListPullRequestsAssociatedWithCommitListing|null $repos👷ListPullRequestsAssociatedWithCommitListing                                             = null;
    private Internal\Operator\Repos\GetCommit|null $repos👷GetCommit                                                                                                                 = null;
    private Internal\Operator\Checks\ListForRef|null $checks👷ListForRef                                                                                                             = null;
    private Internal\Operator\Checks\ListSuitesForRef|null $checks👷ListSuitesForRef                                                                                                 = null;
    private Internal\Operator\Repos\GetCombinedStatusForRef|null $repos👷GetCombinedStatusForRef                                                                                     = null;
    private Internal\Operator\Repos\ListCommitStatusesForRef|null $repos👷ListCommitStatusesForRef                                                                                   = null;
    private Internal\Operator\Repos\ListCommitStatusesForRefListing|null $repos👷ListCommitStatusesForRefListing                                                                     = null;
    private Internal\Operator\Repos\CompareCommits|null $repos👷CompareCommits                                                                                                       = null;
    private Internal\Operator\Repos\GetContent|null $repos👷GetContent                                                                                                               = null;
    private Internal\Operator\Repos\CreateOrUpdateFileContents|null $repos👷CreateOrUpdateFileContents                                                                               = null;
    private Internal\Operator\Repos\DeleteFile|null $repos👷DeleteFile                                                                                                               = null;
    private Internal\Operator\Repos\ListContributors|null $repos👷ListContributors                                                                                                   = null;
    private Internal\Operator\Repos\ListContributorsListing|null $repos👷ListContributorsListing                                                                                     = null;
    private Internal\Operator\Repos\ListDeployments|null $repos👷ListDeployments                                                                                                     = null;
    private Internal\Operator\Repos\ListDeploymentsListing|null $repos👷ListDeploymentsListing                                                                                       = null;
    private Internal\Operator\Repos\CreateDeployment|null $repos👷CreateDeployment                                                                                                   = null;
    private Internal\Operator\Repos\GetDeployment|null $repos👷GetDeployment                                                                                                         = null;
    private Internal\Operator\Repos\DeleteDeployment|null $repos👷DeleteDeployment                                                                                                   = null;
    private Internal\Operator\Repos\ListDeploymentStatuses|null $repos👷ListDeploymentStatuses                                                                                       = null;
    private Internal\Operator\Repos\ListDeploymentStatusesListing|null $repos👷ListDeploymentStatusesListing                                                                         = null;
    private Internal\Operator\Repos\CreateDeploymentStatus|null $repos👷CreateDeploymentStatus                                                                                       = null;
    private Internal\Operator\Repos\GetDeploymentStatus|null $repos👷GetDeploymentStatus                                                                                             = null;
    private Internal\Operator\Repos\CreateDispatchEvent|null $repos👷CreateDispatchEvent                                                                                             = null;
    private Internal\Operator\Repos\GetAllEnvironments|null $repos👷GetAllEnvironments                                                                                               = null;
    private Internal\Operator\Repos\GetEnvironment|null $repos👷GetEnvironment                                                                                                       = null;
    private Internal\Operator\Repos\CreateOrUpdateEnvironment|null $repos👷CreateOrUpdateEnvironment                                                                                 = null;
    private Internal\Operator\Repos\DeleteAnEnvironment|null $repos👷DeleteAnEnvironment                                                                                             = null;
    private Internal\Operator\Repos\ListDeploymentBranchPolicies|null $repos👷ListDeploymentBranchPolicies                                                                           = null;
    private Internal\Operator\Repos\CreateDeploymentBranchPolicy|null $repos👷CreateDeploymentBranchPolicy                                                                           = null;
    private Internal\Operator\Repos\GetDeploymentBranchPolicy|null $repos👷GetDeploymentBranchPolicy                                                                                 = null;
    private Internal\Operator\Repos\UpdateDeploymentBranchPolicy|null $repos👷UpdateDeploymentBranchPolicy                                                                           = null;
    private Internal\Operator\Repos\DeleteDeploymentBranchPolicy|null $repos👷DeleteDeploymentBranchPolicy                                                                           = null;
    private Internal\Operator\Activity\ListRepoEvents|null $activity👷ListRepoEvents                                                                                                 = null;
    private Internal\Operator\Activity\ListRepoEventsListing|null $activity👷ListRepoEventsListing                                                                                   = null;
    private Internal\Operator\Repos\ListForks|null $repos👷ListForks                                                                                                                 = null;
    private Internal\Operator\Repos\ListForksListing|null $repos👷ListForksListing                                                                                                   = null;
    private Internal\Operator\Repos\CreateFork|null $repos👷CreateFork                                                                                                               = null;
    private Internal\Operator\Git\CreateBlob|null $git👷CreateBlob                                                                                                                   = null;
    private Internal\Operator\Git\GetBlob|null $git👷GetBlob                                                                                                                         = null;
    private Internal\Operator\Git\CreateCommit|null $git👷CreateCommit                                                                                                               = null;
    private Internal\Operator\Git\GetCommit|null $git👷GetCommit                                                                                                                     = null;
    private Internal\Operator\Git\ListMatchingRefs|null $git👷ListMatchingRefs                                                                                                       = null;
    private Internal\Operator\Git\GetRef|null $git👷GetRef                                                                                                                           = null;
    private Internal\Operator\Git\CreateRef|null $git👷CreateRef                                                                                                                     = null;
    private Internal\Operator\Git\DeleteRef|null $git👷DeleteRef                                                                                                                     = null;
    private Internal\Operator\Git\UpdateRef|null $git👷UpdateRef                                                                                                                     = null;
    private Internal\Operator\Git\CreateTag|null $git👷CreateTag                                                                                                                     = null;
    private Internal\Operator\Git\GetTag|null $git👷GetTag                                                                                                                           = null;
    private Internal\Operator\Git\CreateTree|null $git👷CreateTree                                                                                                                   = null;
    private Internal\Operator\Git\GetTree|null $git👷GetTree                                                                                                                         = null;
    private Internal\Operator\Repos\ListWebhooks|null $repos👷ListWebhooks                                                                                                           = null;
    private Internal\Operator\Repos\ListWebhooksListing|null $repos👷ListWebhooksListing                                                                                             = null;
    private Internal\Operator\Repos\CreateWebhook|null $repos👷CreateWebhook                                                                                                         = null;
    private Internal\Operator\Repos\GetWebhook|null $repos👷GetWebhook                                                                                                               = null;
    private Internal\Operator\Repos\DeleteWebhook|null $repos👷DeleteWebhook                                                                                                         = null;
    private Internal\Operator\Repos\UpdateWebhook|null $repos👷UpdateWebhook                                                                                                         = null;
    private Internal\Operator\Repos\GetWebhookConfigForRepo|null $repos👷GetWebhookConfigForRepo                                                                                     = null;
    private Internal\Operator\Repos\UpdateWebhookConfigForRepo|null $repos👷UpdateWebhookConfigForRepo                                                                               = null;
    private Internal\Operator\Repos\ListWebhookDeliveries|null $repos👷ListWebhookDeliveries                                                                                         = null;
    private Internal\Operator\Repos\GetWebhookDelivery|null $repos👷GetWebhookDelivery                                                                                               = null;
    private Internal\Operator\Repos\RedeliverWebhookDelivery|null $repos👷RedeliverWebhookDelivery                                                                                   = null;
    private Internal\Operator\Repos\PingWebhook|null $repos👷PingWebhook                                                                                                             = null;
    private Internal\Operator\Repos\TestPushWebhook|null $repos👷TestPushWebhook                                                                                                     = null;
    private Internal\Operator\Apps\GetRepoInstallation|null $apps👷GetRepoInstallation                                                                                               = null;
    private Internal\Operator\Repos\ListInvitations|null $repos👷ListInvitations                                                                                                     = null;
    private Internal\Operator\Repos\ListInvitationsListing|null $repos👷ListInvitationsListing                                                                                       = null;
    private Internal\Operator\Repos\DeleteInvitation|null $repos👷DeleteInvitation                                                                                                   = null;
    private Internal\Operator\Repos\UpdateInvitation|null $repos👷UpdateInvitation                                                                                                   = null;
    private Internal\Operator\Issues\ListForRepo|null $issues👷ListForRepo                                                                                                           = null;
    private Internal\Operator\Issues\ListForRepoListing|null $issues👷ListForRepoListing                                                                                             = null;
    private Internal\Operator\Issues\Create|null $issues👷Create                                                                                                                     = null;
    private Internal\Operator\Issues\ListCommentsForRepo|null $issues👷ListCommentsForRepo                                                                                           = null;
    private Internal\Operator\Issues\ListCommentsForRepoListing|null $issues👷ListCommentsForRepoListing                                                                             = null;
    private Internal\Operator\Issues\GetComment|null $issues👷GetComment                                                                                                             = null;
    private Internal\Operator\Issues\DeleteComment|null $issues👷DeleteComment                                                                                                       = null;
    private Internal\Operator\Issues\UpdateComment|null $issues👷UpdateComment                                                                                                       = null;
    private Internal\Operator\Reactions\ListForIssueComment|null $reactions👷ListForIssueComment                                                                                     = null;
    private Internal\Operator\Reactions\ListForIssueCommentListing|null $reactions👷ListForIssueCommentListing                                                                       = null;
    private Internal\Operator\Reactions\CreateForIssueComment|null $reactions👷CreateForIssueComment                                                                                 = null;
    private Internal\Operator\Reactions\DeleteForIssueComment|null $reactions👷DeleteForIssueComment                                                                                 = null;
    private Internal\Operator\Issues\ListEventsForRepo|null $issues👷ListEventsForRepo                                                                                               = null;
    private Internal\Operator\Issues\ListEventsForRepoListing|null $issues👷ListEventsForRepoListing                                                                                 = null;
    private Internal\Operator\Issues\GetEvent|null $issues👷GetEvent                                                                                                                 = null;
    private Internal\Operator\Issues\Get|null $issues👷Get                                                                                                                           = null;
    private Internal\Operator\Issues\Update|null $issues👷Update                                                                                                                     = null;
    private Internal\Operator\Issues\AddAssignees|null $issues👷AddAssignees                                                                                                         = null;
    private Internal\Operator\Issues\RemoveAssignees|null $issues👷RemoveAssignees                                                                                                   = null;
    private Internal\Operator\Issues\CheckUserCanBeAssignedToIssue|null $issues👷CheckUserCanBeAssignedToIssue                                                                       = null;
    private Internal\Operator\Issues\ListComments|null $issues👷ListComments                                                                                                         = null;
    private Internal\Operator\Issues\ListCommentsListing|null $issues👷ListCommentsListing                                                                                           = null;
    private Internal\Operator\Issues\CreateComment|null $issues👷CreateComment                                                                                                       = null;
    private Internal\Operator\Issues\ListEvents|null $issues👷ListEvents                                                                                                             = null;
    private Internal\Operator\Issues\ListEventsListing|null $issues👷ListEventsListing                                                                                               = null;
    private Internal\Operator\Issues\ListLabelsOnIssue|null $issues👷ListLabelsOnIssue                                                                                               = null;
    private Internal\Operator\Issues\ListLabelsOnIssueListing|null $issues👷ListLabelsOnIssueListing                                                                                 = null;
    private Internal\Operator\Issues\SetLabels|null $issues👷SetLabels                                                                                                               = null;
    private Internal\Operator\Issues\AddLabels|null $issues👷AddLabels                                                                                                               = null;
    private Internal\Operator\Issues\RemoveAllLabels|null $issues👷RemoveAllLabels                                                                                                   = null;
    private Internal\Operator\Issues\RemoveLabel|null $issues👷RemoveLabel                                                                                                           = null;
    private Internal\Operator\Issues\Lock|null $issues👷Lock                                                                                                                         = null;
    private Internal\Operator\Issues\Unlock|null $issues👷Unlock                                                                                                                     = null;
    private Internal\Operator\Reactions\ListForIssue|null $reactions👷ListForIssue                                                                                                   = null;
    private Internal\Operator\Reactions\ListForIssueListing|null $reactions👷ListForIssueListing                                                                                     = null;
    private Internal\Operator\Reactions\CreateForIssue|null $reactions👷CreateForIssue                                                                                               = null;
    private Internal\Operator\Reactions\DeleteForIssue|null $reactions👷DeleteForIssue                                                                                               = null;
    private Internal\Operator\Issues\ListEventsForTimeline|null $issues👷ListEventsForTimeline                                                                                       = null;
    private Internal\Operator\Issues\ListEventsForTimelineListing|null $issues👷ListEventsForTimelineListing                                                                         = null;
    private Internal\Operator\Repos\ListDeployKeys|null $repos👷ListDeployKeys                                                                                                       = null;
    private Internal\Operator\Repos\ListDeployKeysListing|null $repos👷ListDeployKeysListing                                                                                         = null;
    private Internal\Operator\Repos\CreateDeployKey|null $repos👷CreateDeployKey                                                                                                     = null;
    private Internal\Operator\Repos\GetDeployKey|null $repos👷GetDeployKey                                                                                                           = null;
    private Internal\Operator\Repos\DeleteDeployKey|null $repos👷DeleteDeployKey                                                                                                     = null;
    private Internal\Operator\Issues\ListLabelsForRepo|null $issues👷ListLabelsForRepo                                                                                               = null;
    private Internal\Operator\Issues\ListLabelsForRepoListing|null $issues👷ListLabelsForRepoListing                                                                                 = null;
    private Internal\Operator\Issues\CreateLabel|null $issues👷CreateLabel                                                                                                           = null;
    private Internal\Operator\Issues\GetLabel|null $issues👷GetLabel                                                                                                                 = null;
    private Internal\Operator\Issues\DeleteLabel|null $issues👷DeleteLabel                                                                                                           = null;
    private Internal\Operator\Issues\UpdateLabel|null $issues👷UpdateLabel                                                                                                           = null;
    private Internal\Operator\Repos\ListLanguages|null $repos👷ListLanguages                                                                                                         = null;
    private Internal\Operator\Repos\EnableLfsForRepo|null $repos👷EnableLfsForRepo                                                                                                   = null;
    private Internal\Operator\Repos\DisableLfsForRepo|null $repos👷DisableLfsForRepo                                                                                                 = null;
    private Internal\Operator\Licenses\GetForRepo|null $licenses👷GetForRepo                                                                                                         = null;
    private Internal\Operator\Repos\MergeUpstream|null $repos👷MergeUpstream                                                                                                         = null;
    private Internal\Operator\Repos\Merge|null $repos👷Merge                                                                                                                         = null;
    private Internal\Operator\Issues\ListMilestones|null $issues👷ListMilestones                                                                                                     = null;
    private Internal\Operator\Issues\ListMilestonesListing|null $issues👷ListMilestonesListing                                                                                       = null;
    private Internal\Operator\Issues\CreateMilestone|null $issues👷CreateMilestone                                                                                                   = null;
    private Internal\Operator\Issues\GetMilestone|null $issues👷GetMilestone                                                                                                         = null;
    private Internal\Operator\Issues\DeleteMilestone|null $issues👷DeleteMilestone                                                                                                   = null;
    private Internal\Operator\Issues\UpdateMilestone|null $issues👷UpdateMilestone                                                                                                   = null;
    private Internal\Operator\Issues\ListLabelsForMilestone|null $issues👷ListLabelsForMilestone                                                                                     = null;
    private Internal\Operator\Issues\ListLabelsForMilestoneListing|null $issues👷ListLabelsForMilestoneListing                                                                       = null;
    private Internal\Operator\Activity\ListRepoNotificationsForAuthenticatedUser|null $activity👷ListRepoNotificationsForAuthenticatedUser                                           = null;
    private Internal\Operator\Activity\ListRepoNotificationsForAuthenticatedUserListing|null $activity👷ListRepoNotificationsForAuthenticatedUserListing                             = null;
    private Internal\Operator\Activity\MarkRepoNotificationsAsRead|null $activity👷MarkRepoNotificationsAsRead                                                                       = null;
    private Internal\Operator\Repos\GetPages|null $repos👷GetPages                                                                                                                   = null;
    private Internal\Operator\Repos\UpdateInformationAboutPagesSite|null $repos👷UpdateInformationAboutPagesSite                                                                     = null;
    private Internal\Operator\Repos\CreatePagesSite|null $repos👷CreatePagesSite                                                                                                     = null;
    private Internal\Operator\Repos\DeletePagesSite|null $repos👷DeletePagesSite                                                                                                     = null;
    private Internal\Operator\Repos\ListPagesBuilds|null $repos👷ListPagesBuilds                                                                                                     = null;
    private Internal\Operator\Repos\ListPagesBuildsListing|null $repos👷ListPagesBuildsListing                                                                                       = null;
    private Internal\Operator\Repos\RequestPagesBuild|null $repos👷RequestPagesBuild                                                                                                 = null;
    private Internal\Operator\Repos\GetLatestPagesBuild|null $repos👷GetLatestPagesBuild                                                                                             = null;
    private Internal\Operator\Repos\GetPagesBuild|null $repos👷GetPagesBuild                                                                                                         = null;
    private Internal\Operator\Projects\ListForRepo|null $projects👷ListForRepo                                                                                                       = null;
    private Internal\Operator\Projects\ListForRepoListing|null $projects👷ListForRepoListing                                                                                         = null;
    private Internal\Operator\Projects\CreateForRepo|null $projects👷CreateForRepo                                                                                                   = null;
    private Internal\Operator\Pulls\List_|null $pulls👷List_                                                                                                                         = null;
    private Internal\Operator\Pulls\ListListing|null $pulls👷ListListing                                                                                                             = null;
    private Internal\Operator\Pulls\Create|null $pulls👷Create                                                                                                                       = null;
    private Internal\Operator\Pulls\ListReviewCommentsForRepo|null $pulls👷ListReviewCommentsForRepo                                                                                 = null;
    private Internal\Operator\Pulls\ListReviewCommentsForRepoListing|null $pulls👷ListReviewCommentsForRepoListing                                                                   = null;
    private Internal\Operator\Pulls\GetReviewComment|null $pulls👷GetReviewComment                                                                                                   = null;
    private Internal\Operator\Pulls\DeleteReviewComment|null $pulls👷DeleteReviewComment                                                                                             = null;
    private Internal\Operator\Pulls\UpdateReviewComment|null $pulls👷UpdateReviewComment                                                                                             = null;
    private Internal\Operator\Reactions\ListForPullRequestReviewComment|null $reactions👷ListForPullRequestReviewComment                                                             = null;
    private Internal\Operator\Reactions\ListForPullRequestReviewCommentListing|null $reactions👷ListForPullRequestReviewCommentListing                                               = null;
    private Internal\Operator\Reactions\CreateForPullRequestReviewComment|null $reactions👷CreateForPullRequestReviewComment                                                         = null;
    private Internal\Operator\Reactions\DeleteForPullRequestComment|null $reactions👷DeleteForPullRequestComment                                                                     = null;
    private Internal\Operator\Pulls\Get|null $pulls👷Get                                                                                                                             = null;
    private Internal\Operator\Pulls\Update|null $pulls👷Update                                                                                                                       = null;
    private Internal\Operator\Pulls\ListReviewComments|null $pulls👷ListReviewComments                                                                                               = null;
    private Internal\Operator\Pulls\ListReviewCommentsListing|null $pulls👷ListReviewCommentsListing                                                                                 = null;
    private Internal\Operator\Pulls\CreateReviewComment|null $pulls👷CreateReviewComment                                                                                             = null;
    private Internal\Operator\Pulls\CreateReplyForReviewComment|null $pulls👷CreateReplyForReviewComment                                                                             = null;
    private Internal\Operator\Pulls\ListCommits|null $pulls👷ListCommits                                                                                                             = null;
    private Internal\Operator\Pulls\ListCommitsListing|null $pulls👷ListCommitsListing                                                                                               = null;
    private Internal\Operator\Pulls\ListFiles|null $pulls👷ListFiles                                                                                                                 = null;
    private Internal\Operator\Pulls\ListFilesListing|null $pulls👷ListFilesListing                                                                                                   = null;
    private Internal\Operator\Pulls\CheckIfMerged|null $pulls👷CheckIfMerged                                                                                                         = null;
    private Internal\Operator\Pulls\Merge|null $pulls👷Merge                                                                                                                         = null;
    private Internal\Operator\Pulls\ListRequestedReviewers|null $pulls👷ListRequestedReviewers                                                                                       = null;
    private Internal\Operator\Pulls\RequestReviewers|null $pulls👷RequestReviewers                                                                                                   = null;
    private Internal\Operator\Pulls\RemoveRequestedReviewers|null $pulls👷RemoveRequestedReviewers                                                                                   = null;
    private Internal\Operator\Pulls\ListReviews|null $pulls👷ListReviews                                                                                                             = null;
    private Internal\Operator\Pulls\ListReviewsListing|null $pulls👷ListReviewsListing                                                                                               = null;
    private Internal\Operator\Pulls\CreateReview|null $pulls👷CreateReview                                                                                                           = null;
    private Internal\Operator\Pulls\GetReview|null $pulls👷GetReview                                                                                                                 = null;
    private Internal\Operator\Pulls\UpdateReview|null $pulls👷UpdateReview                                                                                                           = null;
    private Internal\Operator\Pulls\DeletePendingReview|null $pulls👷DeletePendingReview                                                                                             = null;
    private Internal\Operator\Pulls\ListCommentsForReview|null $pulls👷ListCommentsForReview                                                                                         = null;
    private Internal\Operator\Pulls\ListCommentsForReviewListing|null $pulls👷ListCommentsForReviewListing                                                                           = null;
    private Internal\Operator\Pulls\DismissReview|null $pulls👷DismissReview                                                                                                         = null;
    private Internal\Operator\Pulls\SubmitReview|null $pulls👷SubmitReview                                                                                                           = null;
    private Internal\Operator\Pulls\UpdateBranch|null $pulls👷UpdateBranch                                                                                                           = null;
    private Internal\Operator\Repos\GetReadme|null $repos👷GetReadme                                                                                                                 = null;
    private Internal\Operator\Repos\GetReadmeInDirectory|null $repos👷GetReadmeInDirectory                                                                                           = null;
    private Internal\Operator\Repos\ListReleases|null $repos👷ListReleases                                                                                                           = null;
    private Internal\Operator\Repos\ListReleasesListing|null $repos👷ListReleasesListing                                                                                             = null;
    private Internal\Operator\Repos\CreateRelease|null $repos👷CreateRelease                                                                                                         = null;
    private Internal\Operator\Repos\GetReleaseAsset|null $repos👷GetReleaseAsset                                                                                                     = null;
    private Internal\Operator\Repos\DeleteReleaseAsset|null $repos👷DeleteReleaseAsset                                                                                               = null;
    private Internal\Operator\Repos\UpdateReleaseAsset|null $repos👷UpdateReleaseAsset                                                                                               = null;
    private Internal\Operator\Repos\GetLatestRelease|null $repos👷GetLatestRelease                                                                                                   = null;
    private Internal\Operator\Repos\GetReleaseByTag|null $repos👷GetReleaseByTag                                                                                                     = null;
    private Internal\Operator\Repos\GetRelease|null $repos👷GetRelease                                                                                                               = null;
    private Internal\Operator\Repos\DeleteRelease|null $repos👷DeleteRelease                                                                                                         = null;
    private Internal\Operator\Repos\UpdateRelease|null $repos👷UpdateRelease                                                                                                         = null;
    private Internal\Operator\Repos\ListReleaseAssets|null $repos👷ListReleaseAssets                                                                                                 = null;
    private Internal\Operator\Repos\ListReleaseAssetsListing|null $repos👷ListReleaseAssetsListing                                                                                   = null;
    private Internal\Operator\Repos\UploadReleaseAsset|null $repos👷UploadReleaseAsset                                                                                               = null;
    private Internal\Operator\Reactions\ListForRelease|null $reactions👷ListForRelease                                                                                               = null;
    private Internal\Operator\Reactions\ListForReleaseListing|null $reactions👷ListForReleaseListing                                                                                 = null;
    private Internal\Operator\Reactions\CreateForRelease|null $reactions👷CreateForRelease                                                                                           = null;
    private Internal\Operator\Reactions\DeleteForRelease|null $reactions👷DeleteForRelease                                                                                           = null;
    private Internal\Operator\SecretScanning\ListAlertsForRepo|null $secretScanning👷ListAlertsForRepo                                                                               = null;
    private Internal\Operator\SecretScanning\ListAlertsForRepoListing|null $secretScanning👷ListAlertsForRepoListing                                                                 = null;
    private Internal\Operator\SecretScanning\GetAlert|null $secretScanning👷GetAlert                                                                                                 = null;
    private Internal\Operator\SecretScanning\UpdateAlert|null $secretScanning👷UpdateAlert                                                                                           = null;
    private Internal\Operator\SecretScanning\ListLocationsForAlert|null $secretScanning👷ListLocationsForAlert                                                                       = null;
    private Internal\Operator\SecretScanning\ListLocationsForAlertListing|null $secretScanning👷ListLocationsForAlertListing                                                         = null;
    private Internal\Operator\Activity\ListStargazersForRepo|null $activity👷ListStargazersForRepo                                                                                   = null;
    private Internal\Operator\Repos\GetCodeFrequencyStats|null $repos👷GetCodeFrequencyStats                                                                                         = null;
    private Internal\Operator\Repos\GetCommitActivityStats|null $repos👷GetCommitActivityStats                                                                                       = null;
    private Internal\Operator\Repos\GetContributorsStats|null $repos👷GetContributorsStats                                                                                           = null;
    private Internal\Operator\Repos\GetParticipationStats|null $repos👷GetParticipationStats                                                                                         = null;
    private Internal\Operator\Repos\GetPunchCardStats|null $repos👷GetPunchCardStats                                                                                                 = null;
    private Internal\Operator\Repos\CreateCommitStatus|null $repos👷CreateCommitStatus                                                                                               = null;
    private Internal\Operator\Activity\ListWatchersForRepo|null $activity👷ListWatchersForRepo                                                                                       = null;
    private Internal\Operator\Activity\ListWatchersForRepoListing|null $activity👷ListWatchersForRepoListing                                                                         = null;
    private Internal\Operator\Activity\GetRepoSubscription|null $activity👷GetRepoSubscription                                                                                       = null;
    private Internal\Operator\Activity\SetRepoSubscription|null $activity👷SetRepoSubscription                                                                                       = null;
    private Internal\Operator\Activity\DeleteRepoSubscription|null $activity👷DeleteRepoSubscription                                                                                 = null;
    private Internal\Operator\Repos\ListTags|null $repos👷ListTags                                                                                                                   = null;
    private Internal\Operator\Repos\ListTagsListing|null $repos👷ListTagsListing                                                                                                     = null;
    private Internal\Operator\Repos\DownloadTarballArchive|null $repos👷DownloadTarballArchive                                                                                       = null;
    private Internal\Operator\Repos\DownloadTarballArchiveStreaming|null $repos👷DownloadTarballArchiveStreaming                                                                     = null;
    private Internal\Operator\Repos\ListTeams|null $repos👷ListTeams                                                                                                                 = null;
    private Internal\Operator\Repos\ListTeamsListing|null $repos👷ListTeamsListing                                                                                                   = null;
    private Internal\Operator\Repos\GetAllTopics|null $repos👷GetAllTopics                                                                                                           = null;
    private Internal\Operator\Repos\ReplaceAllTopics|null $repos👷ReplaceAllTopics                                                                                                   = null;
    private Internal\Operator\Repos\Transfer|null $repos👷Transfer                                                                                                                   = null;
    private Internal\Operator\Repos\DownloadZipballArchive|null $repos👷DownloadZipballArchive                                                                                       = null;
    private Internal\Operator\Repos\DownloadZipballArchiveStreaming|null $repos👷DownloadZipballArchiveStreaming                                                                     = null;
    private Internal\Operator\Repos\CreateUsingTemplate|null $repos👷CreateUsingTemplate                                                                                             = null;
    private Internal\Operator\Search\Code|null $search👷Code                                                                                                                         = null;
    private Internal\Operator\Search\Commits|null $search👷Commits                                                                                                                   = null;
    private Internal\Operator\Search\IssuesAndPullRequests|null $search👷IssuesAndPullRequests                                                                                       = null;
    private Internal\Operator\Search\Labels|null $search👷Labels                                                                                                                     = null;
    private Internal\Operator\Search\Repos|null $search👷Repos                                                                                                                       = null;
    private Internal\Operator\Search\Topics|null $search👷Topics                                                                                                                     = null;
    private Internal\Operator\Search\Users|null $search👷Users                                                                                                                       = null;
    private Internal\Operator\Teams\GetLegacy|null $teams👷GetLegacy                                                                                                                 = null;
    private Internal\Operator\Teams\DeleteLegacy|null $teams👷DeleteLegacy                                                                                                           = null;
    private Internal\Operator\Teams\UpdateLegacy|null $teams👷UpdateLegacy                                                                                                           = null;
    private Internal\Operator\Teams\ListDiscussionsLegacy|null $teams👷ListDiscussionsLegacy                                                                                         = null;
    private Internal\Operator\Teams\ListDiscussionsLegacyListing|null $teams👷ListDiscussionsLegacyListing                                                                           = null;
    private Internal\Operator\Teams\CreateDiscussionLegacy|null $teams👷CreateDiscussionLegacy                                                                                       = null;
    private Internal\Operator\Teams\GetDiscussionLegacy|null $teams👷GetDiscussionLegacy                                                                                             = null;
    private Internal\Operator\Teams\DeleteDiscussionLegacy|null $teams👷DeleteDiscussionLegacy                                                                                       = null;
    private Internal\Operator\Teams\UpdateDiscussionLegacy|null $teams👷UpdateDiscussionLegacy                                                                                       = null;
    private Internal\Operator\Teams\ListDiscussionCommentsLegacy|null $teams👷ListDiscussionCommentsLegacy                                                                           = null;
    private Internal\Operator\Teams\ListDiscussionCommentsLegacyListing|null $teams👷ListDiscussionCommentsLegacyListing                                                             = null;
    private Internal\Operator\Teams\CreateDiscussionCommentLegacy|null $teams👷CreateDiscussionCommentLegacy                                                                         = null;
    private Internal\Operator\Teams\GetDiscussionCommentLegacy|null $teams👷GetDiscussionCommentLegacy                                                                               = null;
    private Internal\Operator\Teams\DeleteDiscussionCommentLegacy|null $teams👷DeleteDiscussionCommentLegacy                                                                         = null;
    private Internal\Operator\Teams\UpdateDiscussionCommentLegacy|null $teams👷UpdateDiscussionCommentLegacy                                                                         = null;
    private Internal\Operator\Teams\ListMembersLegacy|null $teams👷ListMembersLegacy                                                                                                 = null;
    private Internal\Operator\Teams\ListMembersLegacyListing|null $teams👷ListMembersLegacyListing                                                                                   = null;
    private Internal\Operator\Teams\GetMemberLegacy|null $teams👷GetMemberLegacy                                                                                                     = null;
    private Internal\Operator\Teams\AddMemberLegacy|null $teams👷AddMemberLegacy                                                                                                     = null;
    private Internal\Operator\Teams\RemoveMemberLegacy|null $teams👷RemoveMemberLegacy                                                                                               = null;
    private Internal\Operator\Teams\GetMembershipForUserLegacy|null $teams👷GetMembershipForUserLegacy                                                                               = null;
    private Internal\Operator\Teams\AddOrUpdateMembershipForUserLegacy|null $teams👷AddOrUpdateMembershipForUserLegacy                                                               = null;
    private Internal\Operator\Teams\RemoveMembershipForUserLegacy|null $teams👷RemoveMembershipForUserLegacy                                                                         = null;
    private Internal\Operator\Teams\ListProjectsLegacy|null $teams👷ListProjectsLegacy                                                                                               = null;
    private Internal\Operator\Teams\ListProjectsLegacyListing|null $teams👷ListProjectsLegacyListing                                                                                 = null;
    private Internal\Operator\Teams\CheckPermissionsForProjectLegacy|null $teams👷CheckPermissionsForProjectLegacy                                                                   = null;
    private Internal\Operator\Teams\AddOrUpdateProjectPermissionsLegacy|null $teams👷AddOrUpdateProjectPermissionsLegacy                                                             = null;
    private Internal\Operator\Teams\RemoveProjectLegacy|null $teams👷RemoveProjectLegacy                                                                                             = null;
    private Internal\Operator\Teams\ListReposLegacy|null $teams👷ListReposLegacy                                                                                                     = null;
    private Internal\Operator\Teams\ListReposLegacyListing|null $teams👷ListReposLegacyListing                                                                                       = null;
    private Internal\Operator\Teams\CheckPermissionsForRepoLegacy|null $teams👷CheckPermissionsForRepoLegacy                                                                         = null;
    private Internal\Operator\Teams\AddOrUpdateRepoPermissionsLegacy|null $teams👷AddOrUpdateRepoPermissionsLegacy                                                                   = null;
    private Internal\Operator\Teams\RemoveRepoLegacy|null $teams👷RemoveRepoLegacy                                                                                                   = null;
    private Internal\Operator\Teams\ListChildLegacy|null $teams👷ListChildLegacy                                                                                                     = null;
    private Internal\Operator\Teams\ListChildLegacyListing|null $teams👷ListChildLegacyListing                                                                                       = null;
    private Internal\Operator\Users\GetAuthenticated|null $users👷GetAuthenticated                                                                                                   = null;
    private Internal\Operator\Users\UpdateAuthenticated|null $users👷UpdateAuthenticated                                                                                             = null;
    private Internal\Operator\Users\ListFollowersForAuthenticatedUser|null $users👷ListFollowersForAuthenticatedUser                                                                 = null;
    private Internal\Operator\Users\ListFollowersForAuthenticatedUserListing|null $users👷ListFollowersForAuthenticatedUserListing                                                   = null;
    private Internal\Operator\Users\ListFollowedByAuthenticatedUser|null $users👷ListFollowedByAuthenticatedUser                                                                     = null;
    private Internal\Operator\Users\ListFollowedByAuthenticatedUserListing|null $users👷ListFollowedByAuthenticatedUserListing                                                       = null;
    private Internal\Operator\Users\CheckPersonIsFollowedByAuthenticated|null $users👷CheckPersonIsFollowedByAuthenticated                                                           = null;
    private Internal\Operator\Users\Follow|null $users👷Follow                                                                                                                       = null;
    private Internal\Operator\Users\Unfollow|null $users👷Unfollow                                                                                                                   = null;
    private Internal\Operator\Users\ListGpgKeysForAuthenticatedUser|null $users👷ListGpgKeysForAuthenticatedUser                                                                     = null;
    private Internal\Operator\Users\ListGpgKeysForAuthenticatedUserListing|null $users👷ListGpgKeysForAuthenticatedUserListing                                                       = null;
    private Internal\Operator\Users\CreateGpgKeyForAuthenticatedUser|null $users👷CreateGpgKeyForAuthenticatedUser                                                                   = null;
    private Internal\Operator\Users\GetGpgKeyForAuthenticatedUser|null $users👷GetGpgKeyForAuthenticatedUser                                                                         = null;
    private Internal\Operator\Users\DeleteGpgKeyForAuthenticatedUser|null $users👷DeleteGpgKeyForAuthenticatedUser                                                                   = null;
    private Internal\Operator\Apps\ListInstallationsForAuthenticatedUser|null $apps👷ListInstallationsForAuthenticatedUser                                                           = null;
    private Internal\Operator\Apps\ListInstallationReposForAuthenticatedUser|null $apps👷ListInstallationReposForAuthenticatedUser                                                   = null;
    private Internal\Operator\Apps\AddRepoToInstallationForAuthenticatedUser|null $apps👷AddRepoToInstallationForAuthenticatedUser                                                   = null;
    private Internal\Operator\Apps\RemoveRepoFromInstallationForAuthenticatedUser|null $apps👷RemoveRepoFromInstallationForAuthenticatedUser                                         = null;
    private Internal\Operator\Issues\ListForAuthenticatedUser|null $issues👷ListForAuthenticatedUser                                                                                 = null;
    private Internal\Operator\Issues\ListForAuthenticatedUserListing|null $issues👷ListForAuthenticatedUserListing                                                                   = null;
    private Internal\Operator\Users\ListPublicSshKeysForAuthenticatedUser|null $users👷ListPublicSshKeysForAuthenticatedUser                                                         = null;
    private Internal\Operator\Users\ListPublicSshKeysForAuthenticatedUserListing|null $users👷ListPublicSshKeysForAuthenticatedUserListing                                           = null;
    private Internal\Operator\Users\CreatePublicSshKeyForAuthenticatedUser|null $users👷CreatePublicSshKeyForAuthenticatedUser                                                       = null;
    private Internal\Operator\Users\GetPublicSshKeyForAuthenticatedUser|null $users👷GetPublicSshKeyForAuthenticatedUser                                                             = null;
    private Internal\Operator\Users\DeletePublicSshKeyForAuthenticatedUser|null $users👷DeletePublicSshKeyForAuthenticatedUser                                                       = null;
    private Internal\Operator\Orgs\ListMembershipsForAuthenticatedUser|null $orgs👷ListMembershipsForAuthenticatedUser                                                               = null;
    private Internal\Operator\Orgs\ListMembershipsForAuthenticatedUserListing|null $orgs👷ListMembershipsForAuthenticatedUserListing                                                 = null;
    private Internal\Operator\Orgs\GetMembershipForAuthenticatedUser|null $orgs👷GetMembershipForAuthenticatedUser                                                                   = null;
    private Internal\Operator\Orgs\UpdateMembershipForAuthenticatedUser|null $orgs👷UpdateMembershipForAuthenticatedUser                                                             = null;
    private Internal\Operator\Migrations\ListForAuthenticatedUser|null $migrations👷ListForAuthenticatedUser                                                                         = null;
    private Internal\Operator\Migrations\ListForAuthenticatedUserListing|null $migrations👷ListForAuthenticatedUserListing                                                           = null;
    private Internal\Operator\Migrations\StartForAuthenticatedUser|null $migrations👷StartForAuthenticatedUser                                                                       = null;
    private Internal\Operator\Migrations\GetArchiveForAuthenticatedUser|null $migrations👷GetArchiveForAuthenticatedUser                                                             = null;
    private Internal\Operator\Migrations\ListReposForAuthenticatedUser|null $migrations👷ListReposForAuthenticatedUser                                                               = null;
    private Internal\Operator\Migrations\ListReposForAuthenticatedUserListing|null $migrations👷ListReposForAuthenticatedUserListing                                                 = null;
    private Internal\Operator\Orgs\ListForAuthenticatedUser|null $orgs👷ListForAuthenticatedUser                                                                                     = null;
    private Internal\Operator\Orgs\ListForAuthenticatedUserListing|null $orgs👷ListForAuthenticatedUserListing                                                                       = null;
    private Internal\Operator\Projects\CreateForAuthenticatedUser|null $projects👷CreateForAuthenticatedUser                                                                         = null;
    private Internal\Operator\Repos\ListForAuthenticatedUser|null $repos👷ListForAuthenticatedUser                                                                                   = null;
    private Internal\Operator\Repos\ListForAuthenticatedUserListing|null $repos👷ListForAuthenticatedUserListing                                                                     = null;
    private Internal\Operator\Repos\CreateForAuthenticatedUser|null $repos👷CreateForAuthenticatedUser                                                                               = null;
    private Internal\Operator\Repos\ListInvitationsForAuthenticatedUser|null $repos👷ListInvitationsForAuthenticatedUser                                                             = null;
    private Internal\Operator\Repos\ListInvitationsForAuthenticatedUserListing|null $repos👷ListInvitationsForAuthenticatedUserListing                                               = null;
    private Internal\Operator\Repos\DeclineInvitationForAuthenticatedUser|null $repos👷DeclineInvitationForAuthenticatedUser                                                         = null;
    private Internal\Operator\Repos\AcceptInvitationForAuthenticatedUser|null $repos👷AcceptInvitationForAuthenticatedUser                                                           = null;
    private Internal\Operator\Activity\ListReposStarredByAuthenticatedUser|null $activity👷ListReposStarredByAuthenticatedUser                                                       = null;
    private Internal\Operator\Activity\ListReposStarredByAuthenticatedUserListing|null $activity👷ListReposStarredByAuthenticatedUserListing                                         = null;
    private Internal\Operator\Activity\CheckRepoIsStarredByAuthenticatedUser|null $activity👷CheckRepoIsStarredByAuthenticatedUser                                                   = null;
    private Internal\Operator\Activity\StarRepoForAuthenticatedUser|null $activity👷StarRepoForAuthenticatedUser                                                                     = null;
    private Internal\Operator\Activity\UnstarRepoForAuthenticatedUser|null $activity👷UnstarRepoForAuthenticatedUser                                                                 = null;
    private Internal\Operator\Activity\ListWatchedReposForAuthenticatedUser|null $activity👷ListWatchedReposForAuthenticatedUser                                                     = null;
    private Internal\Operator\Activity\ListWatchedReposForAuthenticatedUserListing|null $activity👷ListWatchedReposForAuthenticatedUserListing                                       = null;
    private Internal\Operator\Teams\ListForAuthenticatedUser|null $teams👷ListForAuthenticatedUser                                                                                   = null;
    private Internal\Operator\Teams\ListForAuthenticatedUserListing|null $teams👷ListForAuthenticatedUserListing                                                                     = null;
    private Internal\Operator\Users\List_|null $users👷List_                                                                                                                         = null;
    private Internal\Operator\Users\GetByUsername|null $users👷GetByUsername                                                                                                         = null;
    private Internal\Operator\Activity\ListEventsForAuthenticatedUser|null $activity👷ListEventsForAuthenticatedUser                                                                 = null;
    private Internal\Operator\Activity\ListEventsForAuthenticatedUserListing|null $activity👷ListEventsForAuthenticatedUserListing                                                   = null;
    private Internal\Operator\Activity\ListOrgEventsForAuthenticatedUser|null $activity👷ListOrgEventsForAuthenticatedUser                                                           = null;
    private Internal\Operator\Activity\ListOrgEventsForAuthenticatedUserListing|null $activity👷ListOrgEventsForAuthenticatedUserListing                                             = null;
    private Internal\Operator\Users\ListFollowersForUser|null $users👷ListFollowersForUser                                                                                           = null;
    private Internal\Operator\Users\ListFollowersForUserListing|null $users👷ListFollowersForUserListing                                                                             = null;
    private Internal\Operator\Users\ListFollowingForUser|null $users👷ListFollowingForUser                                                                                           = null;
    private Internal\Operator\Users\ListFollowingForUserListing|null $users👷ListFollowingForUserListing                                                                             = null;
    private Internal\Operator\Users\CheckFollowingForUser|null $users👷CheckFollowingForUser                                                                                         = null;
    private Internal\Operator\Gists\ListForUser|null $gists👷ListForUser                                                                                                             = null;
    private Internal\Operator\Gists\ListForUserListing|null $gists👷ListForUserListing                                                                                               = null;
    private Internal\Operator\Users\ListGpgKeysForUser|null $users👷ListGpgKeysForUser                                                                                               = null;
    private Internal\Operator\Users\ListGpgKeysForUserListing|null $users👷ListGpgKeysForUserListing                                                                                 = null;
    private Internal\Operator\Users\GetContextForUser|null $users👷GetContextForUser                                                                                                 = null;
    private Internal\Operator\Apps\GetUserInstallation|null $apps👷GetUserInstallation                                                                                               = null;
    private Internal\Operator\Users\ListPublicKeysForUser|null $users👷ListPublicKeysForUser                                                                                         = null;
    private Internal\Operator\Users\ListPublicKeysForUserListing|null $users👷ListPublicKeysForUserListing                                                                           = null;
    private Internal\Operator\Orgs\ListForUser|null $orgs👷ListForUser                                                                                                               = null;
    private Internal\Operator\Orgs\ListForUserListing|null $orgs👷ListForUserListing                                                                                                 = null;
    private Internal\Operator\Projects\ListForUser|null $projects👷ListForUser                                                                                                       = null;
    private Internal\Operator\Projects\ListForUserListing|null $projects👷ListForUserListing                                                                                         = null;
    private Internal\Operator\Repos\ListForUser|null $repos👷ListForUser                                                                                                             = null;
    private Internal\Operator\Repos\ListForUserListing|null $repos👷ListForUserListing                                                                                               = null;
    private Internal\Operator\Activity\ListReposStarredByUser|null $activity👷ListReposStarredByUser                                                                                 = null;
    private Internal\Operator\Activity\ListReposWatchedByUser|null $activity👷ListReposWatchedByUser                                                                                 = null;
    private Internal\Operator\Activity\ListReposWatchedByUserListing|null $activity👷ListReposWatchedByUserListing                                                                   = null;
    private Internal\Operator\EnterpriseAdmin\SuspendUser|null $enterpriseAdmin👷SuspendUser                                                                                         = null;
    private Internal\Operator\EnterpriseAdmin\UnsuspendUser|null $enterpriseAdmin👷UnsuspendUser                                                                                     = null;
    private Internal\Operator\Meta\GetZen|null $meta👷GetZen                                                                                                                         = null;

    public function __construct(private AuthenticationInterface $authentication, private Browser $browser, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrators $hydrators)
    {
    }

    public function meta👷Root(): Internal\Operator\Meta\Root
    {
        if ($this->meta👷Root instanceof Internal\Operator\Meta\Root === false) {
            $this->meta👷Root = new Internal\Operator\Meta\Root($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Root());
        }

        return $this->meta👷Root;
    }

    public function enterpriseAdmin👷ListGlobalWebhooks(): Internal\Operator\EnterpriseAdmin\ListGlobalWebhooks
    {
        if ($this->enterpriseAdmin👷ListGlobalWebhooks instanceof Internal\Operator\EnterpriseAdmin\ListGlobalWebhooks === false) {
            $this->enterpriseAdmin👷ListGlobalWebhooks = new Internal\Operator\EnterpriseAdmin\ListGlobalWebhooks($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Hooks());
        }

        return $this->enterpriseAdmin👷ListGlobalWebhooks;
    }

    public function enterpriseAdmin👷ListGlobalWebhooksListing(): Internal\Operator\EnterpriseAdmin\ListGlobalWebhooksListing
    {
        if ($this->enterpriseAdmin👷ListGlobalWebhooksListing instanceof Internal\Operator\EnterpriseAdmin\ListGlobalWebhooksListing === false) {
            $this->enterpriseAdmin👷ListGlobalWebhooksListing = new Internal\Operator\EnterpriseAdmin\ListGlobalWebhooksListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Hooks());
        }

        return $this->enterpriseAdmin👷ListGlobalWebhooksListing;
    }

    public function enterpriseAdmin👷CreateGlobalWebhook(): Internal\Operator\EnterpriseAdmin\CreateGlobalWebhook
    {
        if ($this->enterpriseAdmin👷CreateGlobalWebhook instanceof Internal\Operator\EnterpriseAdmin\CreateGlobalWebhook === false) {
            $this->enterpriseAdmin👷CreateGlobalWebhook = new Internal\Operator\EnterpriseAdmin\CreateGlobalWebhook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Hooks());
        }

        return $this->enterpriseAdmin👷CreateGlobalWebhook;
    }

    public function enterpriseAdmin👷GetGlobalWebhook(): Internal\Operator\EnterpriseAdmin\GetGlobalWebhook
    {
        if ($this->enterpriseAdmin👷GetGlobalWebhook instanceof Internal\Operator\EnterpriseAdmin\GetGlobalWebhook === false) {
            $this->enterpriseAdmin👷GetGlobalWebhook = new Internal\Operator\EnterpriseAdmin\GetGlobalWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Hooks🌀HookId());
        }

        return $this->enterpriseAdmin👷GetGlobalWebhook;
    }

    public function enterpriseAdmin👷DeleteGlobalWebhook(): Internal\Operator\EnterpriseAdmin\DeleteGlobalWebhook
    {
        if ($this->enterpriseAdmin👷DeleteGlobalWebhook instanceof Internal\Operator\EnterpriseAdmin\DeleteGlobalWebhook === false) {
            $this->enterpriseAdmin👷DeleteGlobalWebhook = new Internal\Operator\EnterpriseAdmin\DeleteGlobalWebhook($this->browser, $this->authentication);
        }

        return $this->enterpriseAdmin👷DeleteGlobalWebhook;
    }

    public function enterpriseAdmin👷UpdateGlobalWebhook(): Internal\Operator\EnterpriseAdmin\UpdateGlobalWebhook
    {
        if ($this->enterpriseAdmin👷UpdateGlobalWebhook instanceof Internal\Operator\EnterpriseAdmin\UpdateGlobalWebhook === false) {
            $this->enterpriseAdmin👷UpdateGlobalWebhook = new Internal\Operator\EnterpriseAdmin\UpdateGlobalWebhook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Hooks🌀HookId());
        }

        return $this->enterpriseAdmin👷UpdateGlobalWebhook;
    }

    public function enterpriseAdmin👷PingGlobalWebhook(): Internal\Operator\EnterpriseAdmin\PingGlobalWebhook
    {
        if ($this->enterpriseAdmin👷PingGlobalWebhook instanceof Internal\Operator\EnterpriseAdmin\PingGlobalWebhook === false) {
            $this->enterpriseAdmin👷PingGlobalWebhook = new Internal\Operator\EnterpriseAdmin\PingGlobalWebhook($this->browser, $this->authentication);
        }

        return $this->enterpriseAdmin👷PingGlobalWebhook;
    }

    public function enterpriseAdmin👷ListPublicKeys(): Internal\Operator\EnterpriseAdmin\ListPublicKeys
    {
        if ($this->enterpriseAdmin👷ListPublicKeys instanceof Internal\Operator\EnterpriseAdmin\ListPublicKeys === false) {
            $this->enterpriseAdmin👷ListPublicKeys = new Internal\Operator\EnterpriseAdmin\ListPublicKeys($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Keys());
        }

        return $this->enterpriseAdmin👷ListPublicKeys;
    }

    public function enterpriseAdmin👷ListPublicKeysListing(): Internal\Operator\EnterpriseAdmin\ListPublicKeysListing
    {
        if ($this->enterpriseAdmin👷ListPublicKeysListing instanceof Internal\Operator\EnterpriseAdmin\ListPublicKeysListing === false) {
            $this->enterpriseAdmin👷ListPublicKeysListing = new Internal\Operator\EnterpriseAdmin\ListPublicKeysListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Keys());
        }

        return $this->enterpriseAdmin👷ListPublicKeysListing;
    }

    public function enterpriseAdmin👷DeletePublicKey(): Internal\Operator\EnterpriseAdmin\DeletePublicKey
    {
        if ($this->enterpriseAdmin👷DeletePublicKey instanceof Internal\Operator\EnterpriseAdmin\DeletePublicKey === false) {
            $this->enterpriseAdmin👷DeletePublicKey = new Internal\Operator\EnterpriseAdmin\DeletePublicKey($this->browser, $this->authentication);
        }

        return $this->enterpriseAdmin👷DeletePublicKey;
    }

    public function enterpriseAdmin👷CreateOrg(): Internal\Operator\EnterpriseAdmin\CreateOrg
    {
        if ($this->enterpriseAdmin👷CreateOrg instanceof Internal\Operator\EnterpriseAdmin\CreateOrg === false) {
            $this->enterpriseAdmin👷CreateOrg = new Internal\Operator\EnterpriseAdmin\CreateOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Organizations());
        }

        return $this->enterpriseAdmin👷CreateOrg;
    }

    public function enterpriseAdmin👷UpdateOrgName(): Internal\Operator\EnterpriseAdmin\UpdateOrgName
    {
        if ($this->enterpriseAdmin👷UpdateOrgName instanceof Internal\Operator\EnterpriseAdmin\UpdateOrgName === false) {
            $this->enterpriseAdmin👷UpdateOrgName = new Internal\Operator\EnterpriseAdmin\UpdateOrgName($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Organizations🌀Org());
        }

        return $this->enterpriseAdmin👷UpdateOrgName;
    }

    public function enterpriseAdmin👷ListPreReceiveEnvironments(): Internal\Operator\EnterpriseAdmin\ListPreReceiveEnvironments
    {
        if ($this->enterpriseAdmin👷ListPreReceiveEnvironments instanceof Internal\Operator\EnterpriseAdmin\ListPreReceiveEnvironments === false) {
            $this->enterpriseAdmin👷ListPreReceiveEnvironments = new Internal\Operator\EnterpriseAdmin\ListPreReceiveEnvironments($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments());
        }

        return $this->enterpriseAdmin👷ListPreReceiveEnvironments;
    }

    public function enterpriseAdmin👷ListPreReceiveEnvironmentsListing(): Internal\Operator\EnterpriseAdmin\ListPreReceiveEnvironmentsListing
    {
        if ($this->enterpriseAdmin👷ListPreReceiveEnvironmentsListing instanceof Internal\Operator\EnterpriseAdmin\ListPreReceiveEnvironmentsListing === false) {
            $this->enterpriseAdmin👷ListPreReceiveEnvironmentsListing = new Internal\Operator\EnterpriseAdmin\ListPreReceiveEnvironmentsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments());
        }

        return $this->enterpriseAdmin👷ListPreReceiveEnvironmentsListing;
    }

    public function enterpriseAdmin👷CreatePreReceiveEnvironment(): Internal\Operator\EnterpriseAdmin\CreatePreReceiveEnvironment
    {
        if ($this->enterpriseAdmin👷CreatePreReceiveEnvironment instanceof Internal\Operator\EnterpriseAdmin\CreatePreReceiveEnvironment === false) {
            $this->enterpriseAdmin👷CreatePreReceiveEnvironment = new Internal\Operator\EnterpriseAdmin\CreatePreReceiveEnvironment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments());
        }

        return $this->enterpriseAdmin👷CreatePreReceiveEnvironment;
    }

    public function enterpriseAdmin👷GetPreReceiveEnvironment(): Internal\Operator\EnterpriseAdmin\GetPreReceiveEnvironment
    {
        if ($this->enterpriseAdmin👷GetPreReceiveEnvironment instanceof Internal\Operator\EnterpriseAdmin\GetPreReceiveEnvironment === false) {
            $this->enterpriseAdmin👷GetPreReceiveEnvironment = new Internal\Operator\EnterpriseAdmin\GetPreReceiveEnvironment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId());
        }

        return $this->enterpriseAdmin👷GetPreReceiveEnvironment;
    }

    public function enterpriseAdmin👷DeletePreReceiveEnvironment(): Internal\Operator\EnterpriseAdmin\DeletePreReceiveEnvironment
    {
        if ($this->enterpriseAdmin👷DeletePreReceiveEnvironment instanceof Internal\Operator\EnterpriseAdmin\DeletePreReceiveEnvironment === false) {
            $this->enterpriseAdmin👷DeletePreReceiveEnvironment = new Internal\Operator\EnterpriseAdmin\DeletePreReceiveEnvironment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId());
        }

        return $this->enterpriseAdmin👷DeletePreReceiveEnvironment;
    }

    public function enterpriseAdmin👷UpdatePreReceiveEnvironment(): Internal\Operator\EnterpriseAdmin\UpdatePreReceiveEnvironment
    {
        if ($this->enterpriseAdmin👷UpdatePreReceiveEnvironment instanceof Internal\Operator\EnterpriseAdmin\UpdatePreReceiveEnvironment === false) {
            $this->enterpriseAdmin👷UpdatePreReceiveEnvironment = new Internal\Operator\EnterpriseAdmin\UpdatePreReceiveEnvironment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId());
        }

        return $this->enterpriseAdmin👷UpdatePreReceiveEnvironment;
    }

    public function enterpriseAdmin👷StartPreReceiveEnvironmentDownload(): Internal\Operator\EnterpriseAdmin\StartPreReceiveEnvironmentDownload
    {
        if ($this->enterpriseAdmin👷StartPreReceiveEnvironmentDownload instanceof Internal\Operator\EnterpriseAdmin\StartPreReceiveEnvironmentDownload === false) {
            $this->enterpriseAdmin👷StartPreReceiveEnvironmentDownload = new Internal\Operator\EnterpriseAdmin\StartPreReceiveEnvironmentDownload($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId🌀Downloads());
        }

        return $this->enterpriseAdmin👷StartPreReceiveEnvironmentDownload;
    }

    public function enterpriseAdmin👷StartPreReceiveEnvironmentDownloadStreaming(): Internal\Operator\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming
    {
        if ($this->enterpriseAdmin👷StartPreReceiveEnvironmentDownloadStreaming instanceof Internal\Operator\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming === false) {
            $this->enterpriseAdmin👷StartPreReceiveEnvironmentDownloadStreaming = new Internal\Operator\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId🌀Downloads());
        }

        return $this->enterpriseAdmin👷StartPreReceiveEnvironmentDownloadStreaming;
    }

    public function enterpriseAdmin👷GetDownloadStatusForPreReceiveEnvironment(): Internal\Operator\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironment
    {
        if ($this->enterpriseAdmin👷GetDownloadStatusForPreReceiveEnvironment instanceof Internal\Operator\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironment === false) {
            $this->enterpriseAdmin👷GetDownloadStatusForPreReceiveEnvironment = new Internal\Operator\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId🌀Downloads🌀Latest());
        }

        return $this->enterpriseAdmin👷GetDownloadStatusForPreReceiveEnvironment;
    }

    public function enterpriseAdmin👷GetDownloadStatusForPreReceiveEnvironmentStreaming(): Internal\Operator\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironmentStreaming
    {
        if ($this->enterpriseAdmin👷GetDownloadStatusForPreReceiveEnvironmentStreaming instanceof Internal\Operator\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironmentStreaming === false) {
            $this->enterpriseAdmin👷GetDownloadStatusForPreReceiveEnvironmentStreaming = new Internal\Operator\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironmentStreaming($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId🌀Downloads🌀Latest());
        }

        return $this->enterpriseAdmin👷GetDownloadStatusForPreReceiveEnvironmentStreaming;
    }

    public function enterpriseAdmin👷ListPersonalAccessTokens(): Internal\Operator\EnterpriseAdmin\ListPersonalAccessTokens
    {
        if ($this->enterpriseAdmin👷ListPersonalAccessTokens instanceof Internal\Operator\EnterpriseAdmin\ListPersonalAccessTokens === false) {
            $this->enterpriseAdmin👷ListPersonalAccessTokens = new Internal\Operator\EnterpriseAdmin\ListPersonalAccessTokens($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Tokens());
        }

        return $this->enterpriseAdmin👷ListPersonalAccessTokens;
    }

    public function enterpriseAdmin👷ListPersonalAccessTokensListing(): Internal\Operator\EnterpriseAdmin\ListPersonalAccessTokensListing
    {
        if ($this->enterpriseAdmin👷ListPersonalAccessTokensListing instanceof Internal\Operator\EnterpriseAdmin\ListPersonalAccessTokensListing === false) {
            $this->enterpriseAdmin👷ListPersonalAccessTokensListing = new Internal\Operator\EnterpriseAdmin\ListPersonalAccessTokensListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Tokens());
        }

        return $this->enterpriseAdmin👷ListPersonalAccessTokensListing;
    }

    public function enterpriseAdmin👷DeletePersonalAccessToken(): Internal\Operator\EnterpriseAdmin\DeletePersonalAccessToken
    {
        if ($this->enterpriseAdmin👷DeletePersonalAccessToken instanceof Internal\Operator\EnterpriseAdmin\DeletePersonalAccessToken === false) {
            $this->enterpriseAdmin👷DeletePersonalAccessToken = new Internal\Operator\EnterpriseAdmin\DeletePersonalAccessToken($this->browser, $this->authentication);
        }

        return $this->enterpriseAdmin👷DeletePersonalAccessToken;
    }

    public function enterpriseAdmin👷DeleteUser(): Internal\Operator\EnterpriseAdmin\DeleteUser
    {
        if ($this->enterpriseAdmin👷DeleteUser instanceof Internal\Operator\EnterpriseAdmin\DeleteUser === false) {
            $this->enterpriseAdmin👷DeleteUser = new Internal\Operator\EnterpriseAdmin\DeleteUser($this->browser, $this->authentication);
        }

        return $this->enterpriseAdmin👷DeleteUser;
    }

    public function enterpriseAdmin👷CreateImpersonationOAuthToken(): Internal\Operator\EnterpriseAdmin\CreateImpersonationOAuthToken
    {
        if ($this->enterpriseAdmin👷CreateImpersonationOAuthToken instanceof Internal\Operator\EnterpriseAdmin\CreateImpersonationOAuthToken === false) {
            $this->enterpriseAdmin👷CreateImpersonationOAuthToken = new Internal\Operator\EnterpriseAdmin\CreateImpersonationOAuthToken($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Users🌀Username🌀Authorizations());
        }

        return $this->enterpriseAdmin👷CreateImpersonationOAuthToken;
    }

    public function enterpriseAdmin👷DeleteImpersonationOAuthToken(): Internal\Operator\EnterpriseAdmin\DeleteImpersonationOAuthToken
    {
        if ($this->enterpriseAdmin👷DeleteImpersonationOAuthToken instanceof Internal\Operator\EnterpriseAdmin\DeleteImpersonationOAuthToken === false) {
            $this->enterpriseAdmin👷DeleteImpersonationOAuthToken = new Internal\Operator\EnterpriseAdmin\DeleteImpersonationOAuthToken($this->browser, $this->authentication);
        }

        return $this->enterpriseAdmin👷DeleteImpersonationOAuthToken;
    }

    public function apps👷GetAuthenticated(): Internal\Operator\Apps\GetAuthenticated
    {
        if ($this->apps👷GetAuthenticated instanceof Internal\Operator\Apps\GetAuthenticated === false) {
            $this->apps👷GetAuthenticated = new Internal\Operator\Apps\GetAuthenticated($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App());
        }

        return $this->apps👷GetAuthenticated;
    }

    public function apps👷CreateFromManifest(): Internal\Operator\Apps\CreateFromManifest
    {
        if ($this->apps👷CreateFromManifest instanceof Internal\Operator\Apps\CreateFromManifest === false) {
            $this->apps👷CreateFromManifest = new Internal\Operator\Apps\CreateFromManifest($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀AppManifests🌀Code🌀Conversions());
        }

        return $this->apps👷CreateFromManifest;
    }

    public function apps👷GetWebhookConfigForApp(): Internal\Operator\Apps\GetWebhookConfigForApp
    {
        if ($this->apps👷GetWebhookConfigForApp instanceof Internal\Operator\Apps\GetWebhookConfigForApp === false) {
            $this->apps👷GetWebhookConfigForApp = new Internal\Operator\Apps\GetWebhookConfigForApp($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Config());
        }

        return $this->apps👷GetWebhookConfigForApp;
    }

    public function apps👷UpdateWebhookConfigForApp(): Internal\Operator\Apps\UpdateWebhookConfigForApp
    {
        if ($this->apps👷UpdateWebhookConfigForApp instanceof Internal\Operator\Apps\UpdateWebhookConfigForApp === false) {
            $this->apps👷UpdateWebhookConfigForApp = new Internal\Operator\Apps\UpdateWebhookConfigForApp($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Config());
        }

        return $this->apps👷UpdateWebhookConfigForApp;
    }

    public function apps👷ListWebhookDeliveries(): Internal\Operator\Apps\ListWebhookDeliveries
    {
        if ($this->apps👷ListWebhookDeliveries instanceof Internal\Operator\Apps\ListWebhookDeliveries === false) {
            $this->apps👷ListWebhookDeliveries = new Internal\Operator\Apps\ListWebhookDeliveries($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Deliveries());
        }

        return $this->apps👷ListWebhookDeliveries;
    }

    public function apps👷GetWebhookDelivery(): Internal\Operator\Apps\GetWebhookDelivery
    {
        if ($this->apps👷GetWebhookDelivery instanceof Internal\Operator\Apps\GetWebhookDelivery === false) {
            $this->apps👷GetWebhookDelivery = new Internal\Operator\Apps\GetWebhookDelivery($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀DeliveryId());
        }

        return $this->apps👷GetWebhookDelivery;
    }

    public function apps👷RedeliverWebhookDelivery(): Internal\Operator\Apps\RedeliverWebhookDelivery
    {
        if ($this->apps👷RedeliverWebhookDelivery instanceof Internal\Operator\Apps\RedeliverWebhookDelivery === false) {
            $this->apps👷RedeliverWebhookDelivery = new Internal\Operator\Apps\RedeliverWebhookDelivery($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀DeliveryId🌀Attempts());
        }

        return $this->apps👷RedeliverWebhookDelivery;
    }

    public function apps👷ListInstallationRequestsForAuthenticatedApp(): Internal\Operator\Apps\ListInstallationRequestsForAuthenticatedApp
    {
        if ($this->apps👷ListInstallationRequestsForAuthenticatedApp instanceof Internal\Operator\Apps\ListInstallationRequestsForAuthenticatedApp === false) {
            $this->apps👷ListInstallationRequestsForAuthenticatedApp = new Internal\Operator\Apps\ListInstallationRequestsForAuthenticatedApp($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀InstallationRequests());
        }

        return $this->apps👷ListInstallationRequestsForAuthenticatedApp;
    }

    public function apps👷ListInstallationRequestsForAuthenticatedAppListing(): Internal\Operator\Apps\ListInstallationRequestsForAuthenticatedAppListing
    {
        if ($this->apps👷ListInstallationRequestsForAuthenticatedAppListing instanceof Internal\Operator\Apps\ListInstallationRequestsForAuthenticatedAppListing === false) {
            $this->apps👷ListInstallationRequestsForAuthenticatedAppListing = new Internal\Operator\Apps\ListInstallationRequestsForAuthenticatedAppListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀InstallationRequests());
        }

        return $this->apps👷ListInstallationRequestsForAuthenticatedAppListing;
    }

    public function apps👷ListInstallations(): Internal\Operator\Apps\ListInstallations
    {
        if ($this->apps👷ListInstallations instanceof Internal\Operator\Apps\ListInstallations === false) {
            $this->apps👷ListInstallations = new Internal\Operator\Apps\ListInstallations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Installations());
        }

        return $this->apps👷ListInstallations;
    }

    public function apps👷ListInstallationsListing(): Internal\Operator\Apps\ListInstallationsListing
    {
        if ($this->apps👷ListInstallationsListing instanceof Internal\Operator\Apps\ListInstallationsListing === false) {
            $this->apps👷ListInstallationsListing = new Internal\Operator\Apps\ListInstallationsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Installations());
        }

        return $this->apps👷ListInstallationsListing;
    }

    public function apps👷GetInstallation(): Internal\Operator\Apps\GetInstallation
    {
        if ($this->apps👷GetInstallation instanceof Internal\Operator\Apps\GetInstallation === false) {
            $this->apps👷GetInstallation = new Internal\Operator\Apps\GetInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Installations🌀InstallationId());
        }

        return $this->apps👷GetInstallation;
    }

    public function apps👷DeleteInstallation(): Internal\Operator\Apps\DeleteInstallation
    {
        if ($this->apps👷DeleteInstallation instanceof Internal\Operator\Apps\DeleteInstallation === false) {
            $this->apps👷DeleteInstallation = new Internal\Operator\Apps\DeleteInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Installations🌀InstallationId());
        }

        return $this->apps👷DeleteInstallation;
    }

    public function apps👷CreateInstallationAccessToken(): Internal\Operator\Apps\CreateInstallationAccessToken
    {
        if ($this->apps👷CreateInstallationAccessToken instanceof Internal\Operator\Apps\CreateInstallationAccessToken === false) {
            $this->apps👷CreateInstallationAccessToken = new Internal\Operator\Apps\CreateInstallationAccessToken($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Installations🌀InstallationId🌀AccessTokens());
        }

        return $this->apps👷CreateInstallationAccessToken;
    }

    public function apps👷SuspendInstallation(): Internal\Operator\Apps\SuspendInstallation
    {
        if ($this->apps👷SuspendInstallation instanceof Internal\Operator\Apps\SuspendInstallation === false) {
            $this->apps👷SuspendInstallation = new Internal\Operator\Apps\SuspendInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Installations🌀InstallationId🌀Suspended());
        }

        return $this->apps👷SuspendInstallation;
    }

    public function apps👷UnsuspendInstallation(): Internal\Operator\Apps\UnsuspendInstallation
    {
        if ($this->apps👷UnsuspendInstallation instanceof Internal\Operator\Apps\UnsuspendInstallation === false) {
            $this->apps👷UnsuspendInstallation = new Internal\Operator\Apps\UnsuspendInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Installations🌀InstallationId🌀Suspended());
        }

        return $this->apps👷UnsuspendInstallation;
    }

    public function apps👷DeleteAuthorization(): Internal\Operator\Apps\DeleteAuthorization
    {
        if ($this->apps👷DeleteAuthorization instanceof Internal\Operator\Apps\DeleteAuthorization === false) {
            $this->apps👷DeleteAuthorization = new Internal\Operator\Apps\DeleteAuthorization($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Applications🌀ClientId🌀Grant());
        }

        return $this->apps👷DeleteAuthorization;
    }

    public function apps👷CheckToken(): Internal\Operator\Apps\CheckToken
    {
        if ($this->apps👷CheckToken instanceof Internal\Operator\Apps\CheckToken === false) {
            $this->apps👷CheckToken = new Internal\Operator\Apps\CheckToken($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Applications🌀ClientId🌀Token());
        }

        return $this->apps👷CheckToken;
    }

    public function apps👷DeleteToken(): Internal\Operator\Apps\DeleteToken
    {
        if ($this->apps👷DeleteToken instanceof Internal\Operator\Apps\DeleteToken === false) {
            $this->apps👷DeleteToken = new Internal\Operator\Apps\DeleteToken($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Applications🌀ClientId🌀Token());
        }

        return $this->apps👷DeleteToken;
    }

    public function apps👷ResetToken(): Internal\Operator\Apps\ResetToken
    {
        if ($this->apps👷ResetToken instanceof Internal\Operator\Apps\ResetToken === false) {
            $this->apps👷ResetToken = new Internal\Operator\Apps\ResetToken($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Applications🌀ClientId🌀Token());
        }

        return $this->apps👷ResetToken;
    }

    public function apps👷ResetAuthorization(): Internal\Operator\Apps\ResetAuthorization
    {
        if ($this->apps👷ResetAuthorization instanceof Internal\Operator\Apps\ResetAuthorization === false) {
            $this->apps👷ResetAuthorization = new Internal\Operator\Apps\ResetAuthorization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Applications🌀ClientId🌀Tokens🌀AccessToken());
        }

        return $this->apps👷ResetAuthorization;
    }

    public function apps👷GetBySlug(): Internal\Operator\Apps\GetBySlug
    {
        if ($this->apps👷GetBySlug instanceof Internal\Operator\Apps\GetBySlug === false) {
            $this->apps👷GetBySlug = new Internal\Operator\Apps\GetBySlug($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Apps🌀AppSlug());
        }

        return $this->apps👷GetBySlug;
    }

    public function codesOfConduct👷GetAllCodesOfConduct(): Internal\Operator\CodesOfConduct\GetAllCodesOfConduct
    {
        if ($this->codesOfConduct👷GetAllCodesOfConduct instanceof Internal\Operator\CodesOfConduct\GetAllCodesOfConduct === false) {
            $this->codesOfConduct👷GetAllCodesOfConduct = new Internal\Operator\CodesOfConduct\GetAllCodesOfConduct($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀CodesOfConduct());
        }

        return $this->codesOfConduct👷GetAllCodesOfConduct;
    }

    public function codesOfConduct👷GetConductCode(): Internal\Operator\CodesOfConduct\GetConductCode
    {
        if ($this->codesOfConduct👷GetConductCode instanceof Internal\Operator\CodesOfConduct\GetConductCode === false) {
            $this->codesOfConduct👷GetConductCode = new Internal\Operator\CodesOfConduct\GetConductCode($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀CodesOfConduct🌀Key());
        }

        return $this->codesOfConduct👷GetConductCode;
    }

    public function emojis👷Get(): Internal\Operator\Emojis\Get
    {
        if ($this->emojis👷Get instanceof Internal\Operator\Emojis\Get === false) {
            $this->emojis👷Get = new Internal\Operator\Emojis\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Emojis());
        }

        return $this->emojis👷Get;
    }

    public function enterpriseAdmin👷GetAnnouncement(): Internal\Operator\EnterpriseAdmin\GetAnnouncement
    {
        if ($this->enterpriseAdmin👷GetAnnouncement instanceof Internal\Operator\EnterpriseAdmin\GetAnnouncement === false) {
            $this->enterpriseAdmin👷GetAnnouncement = new Internal\Operator\EnterpriseAdmin\GetAnnouncement($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Announcement());
        }

        return $this->enterpriseAdmin👷GetAnnouncement;
    }

    public function enterpriseAdmin👷RemoveAnnouncement(): Internal\Operator\EnterpriseAdmin\RemoveAnnouncement
    {
        if ($this->enterpriseAdmin👷RemoveAnnouncement instanceof Internal\Operator\EnterpriseAdmin\RemoveAnnouncement === false) {
            $this->enterpriseAdmin👷RemoveAnnouncement = new Internal\Operator\EnterpriseAdmin\RemoveAnnouncement($this->browser, $this->authentication);
        }

        return $this->enterpriseAdmin👷RemoveAnnouncement;
    }

    public function enterpriseAdmin👷SetAnnouncement(): Internal\Operator\EnterpriseAdmin\SetAnnouncement
    {
        if ($this->enterpriseAdmin👷SetAnnouncement instanceof Internal\Operator\EnterpriseAdmin\SetAnnouncement === false) {
            $this->enterpriseAdmin👷SetAnnouncement = new Internal\Operator\EnterpriseAdmin\SetAnnouncement($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Announcement());
        }

        return $this->enterpriseAdmin👷SetAnnouncement;
    }

    public function enterpriseAdmin👷GetLicenseInformation(): Internal\Operator\EnterpriseAdmin\GetLicenseInformation
    {
        if ($this->enterpriseAdmin👷GetLicenseInformation instanceof Internal\Operator\EnterpriseAdmin\GetLicenseInformation === false) {
            $this->enterpriseAdmin👷GetLicenseInformation = new Internal\Operator\EnterpriseAdmin\GetLicenseInformation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Settings🌀License());
        }

        return $this->enterpriseAdmin👷GetLicenseInformation;
    }

    public function enterpriseAdmin👷GetAllStats(): Internal\Operator\EnterpriseAdmin\GetAllStats
    {
        if ($this->enterpriseAdmin👷GetAllStats instanceof Internal\Operator\EnterpriseAdmin\GetAllStats === false) {
            $this->enterpriseAdmin👷GetAllStats = new Internal\Operator\EnterpriseAdmin\GetAllStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀All());
        }

        return $this->enterpriseAdmin👷GetAllStats;
    }

    public function enterpriseAdmin👷GetCommentStats(): Internal\Operator\EnterpriseAdmin\GetCommentStats
    {
        if ($this->enterpriseAdmin👷GetCommentStats instanceof Internal\Operator\EnterpriseAdmin\GetCommentStats === false) {
            $this->enterpriseAdmin👷GetCommentStats = new Internal\Operator\EnterpriseAdmin\GetCommentStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Comments());
        }

        return $this->enterpriseAdmin👷GetCommentStats;
    }

    public function enterpriseAdmin👷GetGistStats(): Internal\Operator\EnterpriseAdmin\GetGistStats
    {
        if ($this->enterpriseAdmin👷GetGistStats instanceof Internal\Operator\EnterpriseAdmin\GetGistStats === false) {
            $this->enterpriseAdmin👷GetGistStats = new Internal\Operator\EnterpriseAdmin\GetGistStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Gists());
        }

        return $this->enterpriseAdmin👷GetGistStats;
    }

    public function enterpriseAdmin👷GetHooksStats(): Internal\Operator\EnterpriseAdmin\GetHooksStats
    {
        if ($this->enterpriseAdmin👷GetHooksStats instanceof Internal\Operator\EnterpriseAdmin\GetHooksStats === false) {
            $this->enterpriseAdmin👷GetHooksStats = new Internal\Operator\EnterpriseAdmin\GetHooksStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Hooks());
        }

        return $this->enterpriseAdmin👷GetHooksStats;
    }

    public function enterpriseAdmin👷GetIssueStats(): Internal\Operator\EnterpriseAdmin\GetIssueStats
    {
        if ($this->enterpriseAdmin👷GetIssueStats instanceof Internal\Operator\EnterpriseAdmin\GetIssueStats === false) {
            $this->enterpriseAdmin👷GetIssueStats = new Internal\Operator\EnterpriseAdmin\GetIssueStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Issues());
        }

        return $this->enterpriseAdmin👷GetIssueStats;
    }

    public function enterpriseAdmin👷GetMilestoneStats(): Internal\Operator\EnterpriseAdmin\GetMilestoneStats
    {
        if ($this->enterpriseAdmin👷GetMilestoneStats instanceof Internal\Operator\EnterpriseAdmin\GetMilestoneStats === false) {
            $this->enterpriseAdmin👷GetMilestoneStats = new Internal\Operator\EnterpriseAdmin\GetMilestoneStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Milestones());
        }

        return $this->enterpriseAdmin👷GetMilestoneStats;
    }

    public function enterpriseAdmin👷GetOrgStats(): Internal\Operator\EnterpriseAdmin\GetOrgStats
    {
        if ($this->enterpriseAdmin👷GetOrgStats instanceof Internal\Operator\EnterpriseAdmin\GetOrgStats === false) {
            $this->enterpriseAdmin👷GetOrgStats = new Internal\Operator\EnterpriseAdmin\GetOrgStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Orgs());
        }

        return $this->enterpriseAdmin👷GetOrgStats;
    }

    public function enterpriseAdmin👷GetPagesStats(): Internal\Operator\EnterpriseAdmin\GetPagesStats
    {
        if ($this->enterpriseAdmin👷GetPagesStats instanceof Internal\Operator\EnterpriseAdmin\GetPagesStats === false) {
            $this->enterpriseAdmin👷GetPagesStats = new Internal\Operator\EnterpriseAdmin\GetPagesStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Pages());
        }

        return $this->enterpriseAdmin👷GetPagesStats;
    }

    public function enterpriseAdmin👷GetPullRequestStats(): Internal\Operator\EnterpriseAdmin\GetPullRequestStats
    {
        if ($this->enterpriseAdmin👷GetPullRequestStats instanceof Internal\Operator\EnterpriseAdmin\GetPullRequestStats === false) {
            $this->enterpriseAdmin👷GetPullRequestStats = new Internal\Operator\EnterpriseAdmin\GetPullRequestStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Pulls());
        }

        return $this->enterpriseAdmin👷GetPullRequestStats;
    }

    public function enterpriseAdmin👷GetRepoStats(): Internal\Operator\EnterpriseAdmin\GetRepoStats
    {
        if ($this->enterpriseAdmin👷GetRepoStats instanceof Internal\Operator\EnterpriseAdmin\GetRepoStats === false) {
            $this->enterpriseAdmin👷GetRepoStats = new Internal\Operator\EnterpriseAdmin\GetRepoStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Repos());
        }

        return $this->enterpriseAdmin👷GetRepoStats;
    }

    public function enterpriseAdmin👷GetUserStats(): Internal\Operator\EnterpriseAdmin\GetUserStats
    {
        if ($this->enterpriseAdmin👷GetUserStats instanceof Internal\Operator\EnterpriseAdmin\GetUserStats === false) {
            $this->enterpriseAdmin👷GetUserStats = new Internal\Operator\EnterpriseAdmin\GetUserStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Users());
        }

        return $this->enterpriseAdmin👷GetUserStats;
    }

    public function enterpriseAdmin👷GetGithubActionsPermissionsEnterprise(): Internal\Operator\EnterpriseAdmin\GetGithubActionsPermissionsEnterprise
    {
        if ($this->enterpriseAdmin👷GetGithubActionsPermissionsEnterprise instanceof Internal\Operator\EnterpriseAdmin\GetGithubActionsPermissionsEnterprise === false) {
            $this->enterpriseAdmin👷GetGithubActionsPermissionsEnterprise = new Internal\Operator\EnterpriseAdmin\GetGithubActionsPermissionsEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions());
        }

        return $this->enterpriseAdmin👷GetGithubActionsPermissionsEnterprise;
    }

    public function enterpriseAdmin👷SetGithubActionsPermissionsEnterprise(): Internal\Operator\EnterpriseAdmin\SetGithubActionsPermissionsEnterprise
    {
        if ($this->enterpriseAdmin👷SetGithubActionsPermissionsEnterprise instanceof Internal\Operator\EnterpriseAdmin\SetGithubActionsPermissionsEnterprise === false) {
            $this->enterpriseAdmin👷SetGithubActionsPermissionsEnterprise = new Internal\Operator\EnterpriseAdmin\SetGithubActionsPermissionsEnterprise($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->enterpriseAdmin👷SetGithubActionsPermissionsEnterprise;
    }

    public function enterpriseAdmin👷ListSelectedOrganizationsEnabledGithubActionsEnterprise(): Internal\Operator\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise
    {
        if ($this->enterpriseAdmin👷ListSelectedOrganizationsEnabledGithubActionsEnterprise instanceof Internal\Operator\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise === false) {
            $this->enterpriseAdmin👷ListSelectedOrganizationsEnabledGithubActionsEnterprise = new Internal\Operator\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀Organizations());
        }

        return $this->enterpriseAdmin👷ListSelectedOrganizationsEnabledGithubActionsEnterprise;
    }

    public function enterpriseAdmin👷SetSelectedOrganizationsEnabledGithubActionsEnterprise(): Internal\Operator\EnterpriseAdmin\SetSelectedOrganizationsEnabledGithubActionsEnterprise
    {
        if ($this->enterpriseAdmin👷SetSelectedOrganizationsEnabledGithubActionsEnterprise instanceof Internal\Operator\EnterpriseAdmin\SetSelectedOrganizationsEnabledGithubActionsEnterprise === false) {
            $this->enterpriseAdmin👷SetSelectedOrganizationsEnabledGithubActionsEnterprise = new Internal\Operator\EnterpriseAdmin\SetSelectedOrganizationsEnabledGithubActionsEnterprise($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->enterpriseAdmin👷SetSelectedOrganizationsEnabledGithubActionsEnterprise;
    }

    public function enterpriseAdmin👷EnableSelectedOrganizationGithubActionsEnterprise(): Internal\Operator\EnterpriseAdmin\EnableSelectedOrganizationGithubActionsEnterprise
    {
        if ($this->enterpriseAdmin👷EnableSelectedOrganizationGithubActionsEnterprise instanceof Internal\Operator\EnterpriseAdmin\EnableSelectedOrganizationGithubActionsEnterprise === false) {
            $this->enterpriseAdmin👷EnableSelectedOrganizationGithubActionsEnterprise = new Internal\Operator\EnterpriseAdmin\EnableSelectedOrganizationGithubActionsEnterprise($this->browser, $this->authentication);
        }

        return $this->enterpriseAdmin👷EnableSelectedOrganizationGithubActionsEnterprise;
    }

    public function enterpriseAdmin👷DisableSelectedOrganizationGithubActionsEnterprise(): Internal\Operator\EnterpriseAdmin\DisableSelectedOrganizationGithubActionsEnterprise
    {
        if ($this->enterpriseAdmin👷DisableSelectedOrganizationGithubActionsEnterprise instanceof Internal\Operator\EnterpriseAdmin\DisableSelectedOrganizationGithubActionsEnterprise === false) {
            $this->enterpriseAdmin👷DisableSelectedOrganizationGithubActionsEnterprise = new Internal\Operator\EnterpriseAdmin\DisableSelectedOrganizationGithubActionsEnterprise($this->browser, $this->authentication);
        }

        return $this->enterpriseAdmin👷DisableSelectedOrganizationGithubActionsEnterprise;
    }

    public function enterpriseAdmin👷GetAllowedActionsEnterprise(): Internal\Operator\EnterpriseAdmin\GetAllowedActionsEnterprise
    {
        if ($this->enterpriseAdmin👷GetAllowedActionsEnterprise instanceof Internal\Operator\EnterpriseAdmin\GetAllowedActionsEnterprise === false) {
            $this->enterpriseAdmin👷GetAllowedActionsEnterprise = new Internal\Operator\EnterpriseAdmin\GetAllowedActionsEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀SelectedActions());
        }

        return $this->enterpriseAdmin👷GetAllowedActionsEnterprise;
    }

    public function enterpriseAdmin👷SetAllowedActionsEnterprise(): Internal\Operator\EnterpriseAdmin\SetAllowedActionsEnterprise
    {
        if ($this->enterpriseAdmin👷SetAllowedActionsEnterprise instanceof Internal\Operator\EnterpriseAdmin\SetAllowedActionsEnterprise === false) {
            $this->enterpriseAdmin👷SetAllowedActionsEnterprise = new Internal\Operator\EnterpriseAdmin\SetAllowedActionsEnterprise($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->enterpriseAdmin👷SetAllowedActionsEnterprise;
    }

    public function enterpriseAdmin👷ListSelfHostedRunnerGroupsForEnterprise(): Internal\Operator\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise
    {
        if ($this->enterpriseAdmin👷ListSelfHostedRunnerGroupsForEnterprise instanceof Internal\Operator\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise === false) {
            $this->enterpriseAdmin👷ListSelfHostedRunnerGroupsForEnterprise = new Internal\Operator\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups());
        }

        return $this->enterpriseAdmin👷ListSelfHostedRunnerGroupsForEnterprise;
    }

    public function enterpriseAdmin👷CreateSelfHostedRunnerGroupForEnterprise(): Internal\Operator\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterprise
    {
        if ($this->enterpriseAdmin👷CreateSelfHostedRunnerGroupForEnterprise instanceof Internal\Operator\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterprise === false) {
            $this->enterpriseAdmin👷CreateSelfHostedRunnerGroupForEnterprise = new Internal\Operator\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterprise($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups());
        }

        return $this->enterpriseAdmin👷CreateSelfHostedRunnerGroupForEnterprise;
    }

    public function enterpriseAdmin👷GetSelfHostedRunnerGroupForEnterprise(): Internal\Operator\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterprise
    {
        if ($this->enterpriseAdmin👷GetSelfHostedRunnerGroupForEnterprise instanceof Internal\Operator\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterprise === false) {
            $this->enterpriseAdmin👷GetSelfHostedRunnerGroupForEnterprise = new Internal\Operator\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId());
        }

        return $this->enterpriseAdmin👷GetSelfHostedRunnerGroupForEnterprise;
    }

    public function enterpriseAdmin👷DeleteSelfHostedRunnerGroupFromEnterprise(): Internal\Operator\EnterpriseAdmin\DeleteSelfHostedRunnerGroupFromEnterprise
    {
        if ($this->enterpriseAdmin👷DeleteSelfHostedRunnerGroupFromEnterprise instanceof Internal\Operator\EnterpriseAdmin\DeleteSelfHostedRunnerGroupFromEnterprise === false) {
            $this->enterpriseAdmin👷DeleteSelfHostedRunnerGroupFromEnterprise = new Internal\Operator\EnterpriseAdmin\DeleteSelfHostedRunnerGroupFromEnterprise($this->browser, $this->authentication);
        }

        return $this->enterpriseAdmin👷DeleteSelfHostedRunnerGroupFromEnterprise;
    }

    public function enterpriseAdmin👷UpdateSelfHostedRunnerGroupForEnterprise(): Internal\Operator\EnterpriseAdmin\UpdateSelfHostedRunnerGroupForEnterprise
    {
        if ($this->enterpriseAdmin👷UpdateSelfHostedRunnerGroupForEnterprise instanceof Internal\Operator\EnterpriseAdmin\UpdateSelfHostedRunnerGroupForEnterprise === false) {
            $this->enterpriseAdmin👷UpdateSelfHostedRunnerGroupForEnterprise = new Internal\Operator\EnterpriseAdmin\UpdateSelfHostedRunnerGroupForEnterprise($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId());
        }

        return $this->enterpriseAdmin👷UpdateSelfHostedRunnerGroupForEnterprise;
    }

    public function enterpriseAdmin👷ListSelfHostedRunnersInGroupForEnterprise(): Internal\Operator\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise
    {
        if ($this->enterpriseAdmin👷ListSelfHostedRunnersInGroupForEnterprise instanceof Internal\Operator\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise === false) {
            $this->enterpriseAdmin👷ListSelfHostedRunnersInGroupForEnterprise = new Internal\Operator\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners());
        }

        return $this->enterpriseAdmin👷ListSelfHostedRunnersInGroupForEnterprise;
    }

    public function enterpriseAdmin👷SetSelfHostedRunnersInGroupForEnterprise(): Internal\Operator\EnterpriseAdmin\SetSelfHostedRunnersInGroupForEnterprise
    {
        if ($this->enterpriseAdmin👷SetSelfHostedRunnersInGroupForEnterprise instanceof Internal\Operator\EnterpriseAdmin\SetSelfHostedRunnersInGroupForEnterprise === false) {
            $this->enterpriseAdmin👷SetSelfHostedRunnersInGroupForEnterprise = new Internal\Operator\EnterpriseAdmin\SetSelfHostedRunnersInGroupForEnterprise($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->enterpriseAdmin👷SetSelfHostedRunnersInGroupForEnterprise;
    }

    public function enterpriseAdmin👷AddSelfHostedRunnerToGroupForEnterprise(): Internal\Operator\EnterpriseAdmin\AddSelfHostedRunnerToGroupForEnterprise
    {
        if ($this->enterpriseAdmin👷AddSelfHostedRunnerToGroupForEnterprise instanceof Internal\Operator\EnterpriseAdmin\AddSelfHostedRunnerToGroupForEnterprise === false) {
            $this->enterpriseAdmin👷AddSelfHostedRunnerToGroupForEnterprise = new Internal\Operator\EnterpriseAdmin\AddSelfHostedRunnerToGroupForEnterprise($this->browser, $this->authentication);
        }

        return $this->enterpriseAdmin👷AddSelfHostedRunnerToGroupForEnterprise;
    }

    public function enterpriseAdmin👷RemoveSelfHostedRunnerFromGroupForEnterprise(): Internal\Operator\EnterpriseAdmin\RemoveSelfHostedRunnerFromGroupForEnterprise
    {
        if ($this->enterpriseAdmin👷RemoveSelfHostedRunnerFromGroupForEnterprise instanceof Internal\Operator\EnterpriseAdmin\RemoveSelfHostedRunnerFromGroupForEnterprise === false) {
            $this->enterpriseAdmin👷RemoveSelfHostedRunnerFromGroupForEnterprise = new Internal\Operator\EnterpriseAdmin\RemoveSelfHostedRunnerFromGroupForEnterprise($this->browser, $this->authentication);
        }

        return $this->enterpriseAdmin👷RemoveSelfHostedRunnerFromGroupForEnterprise;
    }

    public function enterpriseAdmin👷ListSelfHostedRunnersForEnterprise(): Internal\Operator\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise
    {
        if ($this->enterpriseAdmin👷ListSelfHostedRunnersForEnterprise instanceof Internal\Operator\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise === false) {
            $this->enterpriseAdmin👷ListSelfHostedRunnersForEnterprise = new Internal\Operator\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners());
        }

        return $this->enterpriseAdmin👷ListSelfHostedRunnersForEnterprise;
    }

    public function enterpriseAdmin👷ListRunnerApplicationsForEnterprise(): Internal\Operator\EnterpriseAdmin\ListRunnerApplicationsForEnterprise
    {
        if ($this->enterpriseAdmin👷ListRunnerApplicationsForEnterprise instanceof Internal\Operator\EnterpriseAdmin\ListRunnerApplicationsForEnterprise === false) {
            $this->enterpriseAdmin👷ListRunnerApplicationsForEnterprise = new Internal\Operator\EnterpriseAdmin\ListRunnerApplicationsForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀Downloads());
        }

        return $this->enterpriseAdmin👷ListRunnerApplicationsForEnterprise;
    }

    public function enterpriseAdmin👷CreateRegistrationTokenForEnterprise(): Internal\Operator\EnterpriseAdmin\CreateRegistrationTokenForEnterprise
    {
        if ($this->enterpriseAdmin👷CreateRegistrationTokenForEnterprise instanceof Internal\Operator\EnterpriseAdmin\CreateRegistrationTokenForEnterprise === false) {
            $this->enterpriseAdmin👷CreateRegistrationTokenForEnterprise = new Internal\Operator\EnterpriseAdmin\CreateRegistrationTokenForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RegistrationToken());
        }

        return $this->enterpriseAdmin👷CreateRegistrationTokenForEnterprise;
    }

    public function enterpriseAdmin👷CreateRemoveTokenForEnterprise(): Internal\Operator\EnterpriseAdmin\CreateRemoveTokenForEnterprise
    {
        if ($this->enterpriseAdmin👷CreateRemoveTokenForEnterprise instanceof Internal\Operator\EnterpriseAdmin\CreateRemoveTokenForEnterprise === false) {
            $this->enterpriseAdmin👷CreateRemoveTokenForEnterprise = new Internal\Operator\EnterpriseAdmin\CreateRemoveTokenForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RemoveToken());
        }

        return $this->enterpriseAdmin👷CreateRemoveTokenForEnterprise;
    }

    public function enterpriseAdmin👷GetSelfHostedRunnerForEnterprise(): Internal\Operator\EnterpriseAdmin\GetSelfHostedRunnerForEnterprise
    {
        if ($this->enterpriseAdmin👷GetSelfHostedRunnerForEnterprise instanceof Internal\Operator\EnterpriseAdmin\GetSelfHostedRunnerForEnterprise === false) {
            $this->enterpriseAdmin👷GetSelfHostedRunnerForEnterprise = new Internal\Operator\EnterpriseAdmin\GetSelfHostedRunnerForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RunnerId());
        }

        return $this->enterpriseAdmin👷GetSelfHostedRunnerForEnterprise;
    }

    public function enterpriseAdmin👷DeleteSelfHostedRunnerFromEnterprise(): Internal\Operator\EnterpriseAdmin\DeleteSelfHostedRunnerFromEnterprise
    {
        if ($this->enterpriseAdmin👷DeleteSelfHostedRunnerFromEnterprise instanceof Internal\Operator\EnterpriseAdmin\DeleteSelfHostedRunnerFromEnterprise === false) {
            $this->enterpriseAdmin👷DeleteSelfHostedRunnerFromEnterprise = new Internal\Operator\EnterpriseAdmin\DeleteSelfHostedRunnerFromEnterprise($this->browser, $this->authentication);
        }

        return $this->enterpriseAdmin👷DeleteSelfHostedRunnerFromEnterprise;
    }

    public function enterpriseAdmin👷GetAuditLog(): Internal\Operator\EnterpriseAdmin\GetAuditLog
    {
        if ($this->enterpriseAdmin👷GetAuditLog instanceof Internal\Operator\EnterpriseAdmin\GetAuditLog === false) {
            $this->enterpriseAdmin👷GetAuditLog = new Internal\Operator\EnterpriseAdmin\GetAuditLog($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀AuditLog());
        }

        return $this->enterpriseAdmin👷GetAuditLog;
    }

    public function enterpriseAdmin👷GetAuditLogListing(): Internal\Operator\EnterpriseAdmin\GetAuditLogListing
    {
        if ($this->enterpriseAdmin👷GetAuditLogListing instanceof Internal\Operator\EnterpriseAdmin\GetAuditLogListing === false) {
            $this->enterpriseAdmin👷GetAuditLogListing = new Internal\Operator\EnterpriseAdmin\GetAuditLogListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀AuditLog());
        }

        return $this->enterpriseAdmin👷GetAuditLogListing;
    }

    public function secretScanning👷ListAlertsForEnterprise(): Internal\Operator\SecretScanning\ListAlertsForEnterprise
    {
        if ($this->secretScanning👷ListAlertsForEnterprise instanceof Internal\Operator\SecretScanning\ListAlertsForEnterprise === false) {
            $this->secretScanning👷ListAlertsForEnterprise = new Internal\Operator\SecretScanning\ListAlertsForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀SecretScanning🌀Alerts());
        }

        return $this->secretScanning👷ListAlertsForEnterprise;
    }

    public function activity👷GetFeeds(): Internal\Operator\Activity\GetFeeds
    {
        if ($this->activity👷GetFeeds instanceof Internal\Operator\Activity\GetFeeds === false) {
            $this->activity👷GetFeeds = new Internal\Operator\Activity\GetFeeds($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Feeds());
        }

        return $this->activity👷GetFeeds;
    }

    public function gists👷List_(): Internal\Operator\Gists\List_
    {
        if ($this->gists👷List_ instanceof Internal\Operator\Gists\List_ === false) {
            $this->gists👷List_ = new Internal\Operator\Gists\List_($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists());
        }

        return $this->gists👷List_;
    }

    public function gists👷ListListing(): Internal\Operator\Gists\ListListing
    {
        if ($this->gists👷ListListing instanceof Internal\Operator\Gists\ListListing === false) {
            $this->gists👷ListListing = new Internal\Operator\Gists\ListListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists());
        }

        return $this->gists👷ListListing;
    }

    public function gists👷Create(): Internal\Operator\Gists\Create
    {
        if ($this->gists👷Create instanceof Internal\Operator\Gists\Create === false) {
            $this->gists👷Create = new Internal\Operator\Gists\Create($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists());
        }

        return $this->gists👷Create;
    }

    public function gists👷ListPublic(): Internal\Operator\Gists\ListPublic
    {
        if ($this->gists👷ListPublic instanceof Internal\Operator\Gists\ListPublic === false) {
            $this->gists👷ListPublic = new Internal\Operator\Gists\ListPublic($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀Public_());
        }

        return $this->gists👷ListPublic;
    }

    public function gists👷ListPublicListing(): Internal\Operator\Gists\ListPublicListing
    {
        if ($this->gists👷ListPublicListing instanceof Internal\Operator\Gists\ListPublicListing === false) {
            $this->gists👷ListPublicListing = new Internal\Operator\Gists\ListPublicListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀Public_());
        }

        return $this->gists👷ListPublicListing;
    }

    public function gists👷ListStarred(): Internal\Operator\Gists\ListStarred
    {
        if ($this->gists👷ListStarred instanceof Internal\Operator\Gists\ListStarred === false) {
            $this->gists👷ListStarred = new Internal\Operator\Gists\ListStarred($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀Starred());
        }

        return $this->gists👷ListStarred;
    }

    public function gists👷ListStarredListing(): Internal\Operator\Gists\ListStarredListing
    {
        if ($this->gists👷ListStarredListing instanceof Internal\Operator\Gists\ListStarredListing === false) {
            $this->gists👷ListStarredListing = new Internal\Operator\Gists\ListStarredListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀Starred());
        }

        return $this->gists👷ListStarredListing;
    }

    public function gists👷Get(): Internal\Operator\Gists\Get
    {
        if ($this->gists👷Get instanceof Internal\Operator\Gists\Get === false) {
            $this->gists👷Get = new Internal\Operator\Gists\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId());
        }

        return $this->gists👷Get;
    }

    public function gists👷Delete(): Internal\Operator\Gists\Delete
    {
        if ($this->gists👷Delete instanceof Internal\Operator\Gists\Delete === false) {
            $this->gists👷Delete = new Internal\Operator\Gists\Delete($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId());
        }

        return $this->gists👷Delete;
    }

    public function gists👷Update(): Internal\Operator\Gists\Update
    {
        if ($this->gists👷Update instanceof Internal\Operator\Gists\Update === false) {
            $this->gists👷Update = new Internal\Operator\Gists\Update($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId());
        }

        return $this->gists👷Update;
    }

    public function gists👷ListComments(): Internal\Operator\Gists\ListComments
    {
        if ($this->gists👷ListComments instanceof Internal\Operator\Gists\ListComments === false) {
            $this->gists👷ListComments = new Internal\Operator\Gists\ListComments($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Comments());
        }

        return $this->gists👷ListComments;
    }

    public function gists👷ListCommentsListing(): Internal\Operator\Gists\ListCommentsListing
    {
        if ($this->gists👷ListCommentsListing instanceof Internal\Operator\Gists\ListCommentsListing === false) {
            $this->gists👷ListCommentsListing = new Internal\Operator\Gists\ListCommentsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Comments());
        }

        return $this->gists👷ListCommentsListing;
    }

    public function gists👷CreateComment(): Internal\Operator\Gists\CreateComment
    {
        if ($this->gists👷CreateComment instanceof Internal\Operator\Gists\CreateComment === false) {
            $this->gists👷CreateComment = new Internal\Operator\Gists\CreateComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Comments());
        }

        return $this->gists👷CreateComment;
    }

    public function gists👷GetComment(): Internal\Operator\Gists\GetComment
    {
        if ($this->gists👷GetComment instanceof Internal\Operator\Gists\GetComment === false) {
            $this->gists👷GetComment = new Internal\Operator\Gists\GetComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Comments🌀CommentId());
        }

        return $this->gists👷GetComment;
    }

    public function gists👷DeleteComment(): Internal\Operator\Gists\DeleteComment
    {
        if ($this->gists👷DeleteComment instanceof Internal\Operator\Gists\DeleteComment === false) {
            $this->gists👷DeleteComment = new Internal\Operator\Gists\DeleteComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Comments🌀CommentId());
        }

        return $this->gists👷DeleteComment;
    }

    public function gists👷UpdateComment(): Internal\Operator\Gists\UpdateComment
    {
        if ($this->gists👷UpdateComment instanceof Internal\Operator\Gists\UpdateComment === false) {
            $this->gists👷UpdateComment = new Internal\Operator\Gists\UpdateComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Comments🌀CommentId());
        }

        return $this->gists👷UpdateComment;
    }

    public function gists👷ListCommits(): Internal\Operator\Gists\ListCommits
    {
        if ($this->gists👷ListCommits instanceof Internal\Operator\Gists\ListCommits === false) {
            $this->gists👷ListCommits = new Internal\Operator\Gists\ListCommits($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Commits());
        }

        return $this->gists👷ListCommits;
    }

    public function gists👷ListCommitsListing(): Internal\Operator\Gists\ListCommitsListing
    {
        if ($this->gists👷ListCommitsListing instanceof Internal\Operator\Gists\ListCommitsListing === false) {
            $this->gists👷ListCommitsListing = new Internal\Operator\Gists\ListCommitsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Commits());
        }

        return $this->gists👷ListCommitsListing;
    }

    public function gists👷ListForks(): Internal\Operator\Gists\ListForks
    {
        if ($this->gists👷ListForks instanceof Internal\Operator\Gists\ListForks === false) {
            $this->gists👷ListForks = new Internal\Operator\Gists\ListForks($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Forks());
        }

        return $this->gists👷ListForks;
    }

    public function gists👷ListForksListing(): Internal\Operator\Gists\ListForksListing
    {
        if ($this->gists👷ListForksListing instanceof Internal\Operator\Gists\ListForksListing === false) {
            $this->gists👷ListForksListing = new Internal\Operator\Gists\ListForksListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Forks());
        }

        return $this->gists👷ListForksListing;
    }

    public function gists👷Fork(): Internal\Operator\Gists\Fork
    {
        if ($this->gists👷Fork instanceof Internal\Operator\Gists\Fork === false) {
            $this->gists👷Fork = new Internal\Operator\Gists\Fork($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Forks());
        }

        return $this->gists👷Fork;
    }

    public function gists👷CheckIsStarred(): Internal\Operator\Gists\CheckIsStarred
    {
        if ($this->gists👷CheckIsStarred instanceof Internal\Operator\Gists\CheckIsStarred === false) {
            $this->gists👷CheckIsStarred = new Internal\Operator\Gists\CheckIsStarred($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Star());
        }

        return $this->gists👷CheckIsStarred;
    }

    public function gists👷Star(): Internal\Operator\Gists\Star
    {
        if ($this->gists👷Star instanceof Internal\Operator\Gists\Star === false) {
            $this->gists👷Star = new Internal\Operator\Gists\Star($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Star());
        }

        return $this->gists👷Star;
    }

    public function gists👷Unstar(): Internal\Operator\Gists\Unstar
    {
        if ($this->gists👷Unstar instanceof Internal\Operator\Gists\Unstar === false) {
            $this->gists👷Unstar = new Internal\Operator\Gists\Unstar($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Star());
        }

        return $this->gists👷Unstar;
    }

    public function gists👷GetRevision(): Internal\Operator\Gists\GetRevision
    {
        if ($this->gists👷GetRevision instanceof Internal\Operator\Gists\GetRevision === false) {
            $this->gists👷GetRevision = new Internal\Operator\Gists\GetRevision($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Sha());
        }

        return $this->gists👷GetRevision;
    }

    public function gitignore👷GetAllTemplates(): Internal\Operator\Gitignore\GetAllTemplates
    {
        if ($this->gitignore👷GetAllTemplates instanceof Internal\Operator\Gitignore\GetAllTemplates === false) {
            $this->gitignore👷GetAllTemplates = new Internal\Operator\Gitignore\GetAllTemplates($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gitignore🌀Templates());
        }

        return $this->gitignore👷GetAllTemplates;
    }

    public function gitignore👷GetTemplate(): Internal\Operator\Gitignore\GetTemplate
    {
        if ($this->gitignore👷GetTemplate instanceof Internal\Operator\Gitignore\GetTemplate === false) {
            $this->gitignore👷GetTemplate = new Internal\Operator\Gitignore\GetTemplate($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gitignore🌀Templates🌀Name());
        }

        return $this->gitignore👷GetTemplate;
    }

    public function apps👷ListReposAccessibleToInstallation(): Internal\Operator\Apps\ListReposAccessibleToInstallation
    {
        if ($this->apps👷ListReposAccessibleToInstallation instanceof Internal\Operator\Apps\ListReposAccessibleToInstallation === false) {
            $this->apps👷ListReposAccessibleToInstallation = new Internal\Operator\Apps\ListReposAccessibleToInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Installation🌀Repositories());
        }

        return $this->apps👷ListReposAccessibleToInstallation;
    }

    public function apps👷RevokeInstallationAccessToken(): Internal\Operator\Apps\RevokeInstallationAccessToken
    {
        if ($this->apps👷RevokeInstallationAccessToken instanceof Internal\Operator\Apps\RevokeInstallationAccessToken === false) {
            $this->apps👷RevokeInstallationAccessToken = new Internal\Operator\Apps\RevokeInstallationAccessToken($this->browser, $this->authentication);
        }

        return $this->apps👷RevokeInstallationAccessToken;
    }

    public function issues👷List_(): Internal\Operator\Issues\List_
    {
        if ($this->issues👷List_ instanceof Internal\Operator\Issues\List_ === false) {
            $this->issues👷List_ = new Internal\Operator\Issues\List_($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Issues());
        }

        return $this->issues👷List_;
    }

    public function issues👷ListListing(): Internal\Operator\Issues\ListListing
    {
        if ($this->issues👷ListListing instanceof Internal\Operator\Issues\ListListing === false) {
            $this->issues👷ListListing = new Internal\Operator\Issues\ListListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Issues());
        }

        return $this->issues👷ListListing;
    }

    public function licenses👷GetAllCommonlyUsed(): Internal\Operator\Licenses\GetAllCommonlyUsed
    {
        if ($this->licenses👷GetAllCommonlyUsed instanceof Internal\Operator\Licenses\GetAllCommonlyUsed === false) {
            $this->licenses👷GetAllCommonlyUsed = new Internal\Operator\Licenses\GetAllCommonlyUsed($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Licenses());
        }

        return $this->licenses👷GetAllCommonlyUsed;
    }

    public function licenses👷GetAllCommonlyUsedListing(): Internal\Operator\Licenses\GetAllCommonlyUsedListing
    {
        if ($this->licenses👷GetAllCommonlyUsedListing instanceof Internal\Operator\Licenses\GetAllCommonlyUsedListing === false) {
            $this->licenses👷GetAllCommonlyUsedListing = new Internal\Operator\Licenses\GetAllCommonlyUsedListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Licenses());
        }

        return $this->licenses👷GetAllCommonlyUsedListing;
    }

    public function licenses👷Get(): Internal\Operator\Licenses\Get
    {
        if ($this->licenses👷Get instanceof Internal\Operator\Licenses\Get === false) {
            $this->licenses👷Get = new Internal\Operator\Licenses\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Licenses🌀License());
        }

        return $this->licenses👷Get;
    }

    public function markdown👷Render(): Internal\Operator\Markdown\Render
    {
        if ($this->markdown👷Render instanceof Internal\Operator\Markdown\Render === false) {
            $this->markdown👷Render = new Internal\Operator\Markdown\Render($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Markdown());
        }

        return $this->markdown👷Render;
    }

    public function markdown👷RenderRaw(): Internal\Operator\Markdown\RenderRaw
    {
        if ($this->markdown👷RenderRaw instanceof Internal\Operator\Markdown\RenderRaw === false) {
            $this->markdown👷RenderRaw = new Internal\Operator\Markdown\RenderRaw($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Markdown🌀Raw());
        }

        return $this->markdown👷RenderRaw;
    }

    public function meta👷Get(): Internal\Operator\Meta\Get
    {
        if ($this->meta👷Get instanceof Internal\Operator\Meta\Get === false) {
            $this->meta👷Get = new Internal\Operator\Meta\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Meta());
        }

        return $this->meta👷Get;
    }

    public function activity👷ListNotificationsForAuthenticatedUser(): Internal\Operator\Activity\ListNotificationsForAuthenticatedUser
    {
        if ($this->activity👷ListNotificationsForAuthenticatedUser instanceof Internal\Operator\Activity\ListNotificationsForAuthenticatedUser === false) {
            $this->activity👷ListNotificationsForAuthenticatedUser = new Internal\Operator\Activity\ListNotificationsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Notifications());
        }

        return $this->activity👷ListNotificationsForAuthenticatedUser;
    }

    public function activity👷ListNotificationsForAuthenticatedUserListing(): Internal\Operator\Activity\ListNotificationsForAuthenticatedUserListing
    {
        if ($this->activity👷ListNotificationsForAuthenticatedUserListing instanceof Internal\Operator\Activity\ListNotificationsForAuthenticatedUserListing === false) {
            $this->activity👷ListNotificationsForAuthenticatedUserListing = new Internal\Operator\Activity\ListNotificationsForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Notifications());
        }

        return $this->activity👷ListNotificationsForAuthenticatedUserListing;
    }

    public function activity👷MarkNotificationsAsRead(): Internal\Operator\Activity\MarkNotificationsAsRead
    {
        if ($this->activity👷MarkNotificationsAsRead instanceof Internal\Operator\Activity\MarkNotificationsAsRead === false) {
            $this->activity👷MarkNotificationsAsRead = new Internal\Operator\Activity\MarkNotificationsAsRead($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Notifications());
        }

        return $this->activity👷MarkNotificationsAsRead;
    }

    public function activity👷GetThread(): Internal\Operator\Activity\GetThread
    {
        if ($this->activity👷GetThread instanceof Internal\Operator\Activity\GetThread === false) {
            $this->activity👷GetThread = new Internal\Operator\Activity\GetThread($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId());
        }

        return $this->activity👷GetThread;
    }

    public function activity👷MarkThreadAsDone(): Internal\Operator\Activity\MarkThreadAsDone
    {
        if ($this->activity👷MarkThreadAsDone instanceof Internal\Operator\Activity\MarkThreadAsDone === false) {
            $this->activity👷MarkThreadAsDone = new Internal\Operator\Activity\MarkThreadAsDone($this->browser, $this->authentication);
        }

        return $this->activity👷MarkThreadAsDone;
    }

    public function activity👷MarkThreadAsRead(): Internal\Operator\Activity\MarkThreadAsRead
    {
        if ($this->activity👷MarkThreadAsRead instanceof Internal\Operator\Activity\MarkThreadAsRead === false) {
            $this->activity👷MarkThreadAsRead = new Internal\Operator\Activity\MarkThreadAsRead($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId());
        }

        return $this->activity👷MarkThreadAsRead;
    }

    public function activity👷GetThreadSubscriptionForAuthenticatedUser(): Internal\Operator\Activity\GetThreadSubscriptionForAuthenticatedUser
    {
        if ($this->activity👷GetThreadSubscriptionForAuthenticatedUser instanceof Internal\Operator\Activity\GetThreadSubscriptionForAuthenticatedUser === false) {
            $this->activity👷GetThreadSubscriptionForAuthenticatedUser = new Internal\Operator\Activity\GetThreadSubscriptionForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId🌀Subscription());
        }

        return $this->activity👷GetThreadSubscriptionForAuthenticatedUser;
    }

    public function activity👷SetThreadSubscription(): Internal\Operator\Activity\SetThreadSubscription
    {
        if ($this->activity👷SetThreadSubscription instanceof Internal\Operator\Activity\SetThreadSubscription === false) {
            $this->activity👷SetThreadSubscription = new Internal\Operator\Activity\SetThreadSubscription($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId🌀Subscription());
        }

        return $this->activity👷SetThreadSubscription;
    }

    public function activity👷DeleteThreadSubscription(): Internal\Operator\Activity\DeleteThreadSubscription
    {
        if ($this->activity👷DeleteThreadSubscription instanceof Internal\Operator\Activity\DeleteThreadSubscription === false) {
            $this->activity👷DeleteThreadSubscription = new Internal\Operator\Activity\DeleteThreadSubscription($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId🌀Subscription());
        }

        return $this->activity👷DeleteThreadSubscription;
    }

    public function meta👷GetOctocat(): Internal\Operator\Meta\GetOctocat
    {
        if ($this->meta👷GetOctocat instanceof Internal\Operator\Meta\GetOctocat === false) {
            $this->meta👷GetOctocat = new Internal\Operator\Meta\GetOctocat($this->browser, $this->authentication);
        }

        return $this->meta👷GetOctocat;
    }

    public function orgs👷List_(): Internal\Operator\Orgs\List_
    {
        if ($this->orgs👷List_ instanceof Internal\Operator\Orgs\List_ === false) {
            $this->orgs👷List_ = new Internal\Operator\Orgs\List_($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Organizations());
        }

        return $this->orgs👷List_;
    }

    public function orgs👷Get(): Internal\Operator\Orgs\Get
    {
        if ($this->orgs👷Get instanceof Internal\Operator\Orgs\Get === false) {
            $this->orgs👷Get = new Internal\Operator\Orgs\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org());
        }

        return $this->orgs👷Get;
    }

    public function orgs👷Update(): Internal\Operator\Orgs\Update
    {
        if ($this->orgs👷Update instanceof Internal\Operator\Orgs\Update === false) {
            $this->orgs👷Update = new Internal\Operator\Orgs\Update($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org());
        }

        return $this->orgs👷Update;
    }

    public function actions👷GetGithubActionsPermissionsOrganization(): Internal\Operator\Actions\GetGithubActionsPermissionsOrganization
    {
        if ($this->actions👷GetGithubActionsPermissionsOrganization instanceof Internal\Operator\Actions\GetGithubActionsPermissionsOrganization === false) {
            $this->actions👷GetGithubActionsPermissionsOrganization = new Internal\Operator\Actions\GetGithubActionsPermissionsOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions());
        }

        return $this->actions👷GetGithubActionsPermissionsOrganization;
    }

    public function actions👷SetGithubActionsPermissionsOrganization(): Internal\Operator\Actions\SetGithubActionsPermissionsOrganization
    {
        if ($this->actions👷SetGithubActionsPermissionsOrganization instanceof Internal\Operator\Actions\SetGithubActionsPermissionsOrganization === false) {
            $this->actions👷SetGithubActionsPermissionsOrganization = new Internal\Operator\Actions\SetGithubActionsPermissionsOrganization($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷SetGithubActionsPermissionsOrganization;
    }

    public function actions👷ListSelectedRepositoriesEnabledGithubActionsOrganization(): Internal\Operator\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization
    {
        if ($this->actions👷ListSelectedRepositoriesEnabledGithubActionsOrganization instanceof Internal\Operator\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization === false) {
            $this->actions👷ListSelectedRepositoriesEnabledGithubActionsOrganization = new Internal\Operator\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories());
        }

        return $this->actions👷ListSelectedRepositoriesEnabledGithubActionsOrganization;
    }

    public function actions👷SetSelectedRepositoriesEnabledGithubActionsOrganization(): Internal\Operator\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization
    {
        if ($this->actions👷SetSelectedRepositoriesEnabledGithubActionsOrganization instanceof Internal\Operator\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization === false) {
            $this->actions👷SetSelectedRepositoriesEnabledGithubActionsOrganization = new Internal\Operator\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷SetSelectedRepositoriesEnabledGithubActionsOrganization;
    }

    public function actions👷EnableSelectedRepositoryGithubActionsOrganization(): Internal\Operator\Actions\EnableSelectedRepositoryGithubActionsOrganization
    {
        if ($this->actions👷EnableSelectedRepositoryGithubActionsOrganization instanceof Internal\Operator\Actions\EnableSelectedRepositoryGithubActionsOrganization === false) {
            $this->actions👷EnableSelectedRepositoryGithubActionsOrganization = new Internal\Operator\Actions\EnableSelectedRepositoryGithubActionsOrganization($this->browser, $this->authentication);
        }

        return $this->actions👷EnableSelectedRepositoryGithubActionsOrganization;
    }

    public function actions👷DisableSelectedRepositoryGithubActionsOrganization(): Internal\Operator\Actions\DisableSelectedRepositoryGithubActionsOrganization
    {
        if ($this->actions👷DisableSelectedRepositoryGithubActionsOrganization instanceof Internal\Operator\Actions\DisableSelectedRepositoryGithubActionsOrganization === false) {
            $this->actions👷DisableSelectedRepositoryGithubActionsOrganization = new Internal\Operator\Actions\DisableSelectedRepositoryGithubActionsOrganization($this->browser, $this->authentication);
        }

        return $this->actions👷DisableSelectedRepositoryGithubActionsOrganization;
    }

    public function actions👷GetAllowedActionsOrganization(): Internal\Operator\Actions\GetAllowedActionsOrganization
    {
        if ($this->actions👷GetAllowedActionsOrganization instanceof Internal\Operator\Actions\GetAllowedActionsOrganization === false) {
            $this->actions👷GetAllowedActionsOrganization = new Internal\Operator\Actions\GetAllowedActionsOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀SelectedActions());
        }

        return $this->actions👷GetAllowedActionsOrganization;
    }

    public function actions👷SetAllowedActionsOrganization(): Internal\Operator\Actions\SetAllowedActionsOrganization
    {
        if ($this->actions👷SetAllowedActionsOrganization instanceof Internal\Operator\Actions\SetAllowedActionsOrganization === false) {
            $this->actions👷SetAllowedActionsOrganization = new Internal\Operator\Actions\SetAllowedActionsOrganization($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷SetAllowedActionsOrganization;
    }

    public function actions👷GetGithubActionsDefaultWorkflowPermissionsOrganization(): Internal\Operator\Actions\GetGithubActionsDefaultWorkflowPermissionsOrganization
    {
        if ($this->actions👷GetGithubActionsDefaultWorkflowPermissionsOrganization instanceof Internal\Operator\Actions\GetGithubActionsDefaultWorkflowPermissionsOrganization === false) {
            $this->actions👷GetGithubActionsDefaultWorkflowPermissionsOrganization = new Internal\Operator\Actions\GetGithubActionsDefaultWorkflowPermissionsOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Workflow());
        }

        return $this->actions👷GetGithubActionsDefaultWorkflowPermissionsOrganization;
    }

    public function actions👷SetGithubActionsDefaultWorkflowPermissionsOrganization(): Internal\Operator\Actions\SetGithubActionsDefaultWorkflowPermissionsOrganization
    {
        if ($this->actions👷SetGithubActionsDefaultWorkflowPermissionsOrganization instanceof Internal\Operator\Actions\SetGithubActionsDefaultWorkflowPermissionsOrganization === false) {
            $this->actions👷SetGithubActionsDefaultWorkflowPermissionsOrganization = new Internal\Operator\Actions\SetGithubActionsDefaultWorkflowPermissionsOrganization($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷SetGithubActionsDefaultWorkflowPermissionsOrganization;
    }

    public function actions👷ListSelfHostedRunnerGroupsForOrg(): Internal\Operator\Actions\ListSelfHostedRunnerGroupsForOrg
    {
        if ($this->actions👷ListSelfHostedRunnerGroupsForOrg instanceof Internal\Operator\Actions\ListSelfHostedRunnerGroupsForOrg === false) {
            $this->actions👷ListSelfHostedRunnerGroupsForOrg = new Internal\Operator\Actions\ListSelfHostedRunnerGroupsForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups());
        }

        return $this->actions👷ListSelfHostedRunnerGroupsForOrg;
    }

    public function actions👷CreateSelfHostedRunnerGroupForOrg(): Internal\Operator\Actions\CreateSelfHostedRunnerGroupForOrg
    {
        if ($this->actions👷CreateSelfHostedRunnerGroupForOrg instanceof Internal\Operator\Actions\CreateSelfHostedRunnerGroupForOrg === false) {
            $this->actions👷CreateSelfHostedRunnerGroupForOrg = new Internal\Operator\Actions\CreateSelfHostedRunnerGroupForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups());
        }

        return $this->actions👷CreateSelfHostedRunnerGroupForOrg;
    }

    public function actions👷GetSelfHostedRunnerGroupForOrg(): Internal\Operator\Actions\GetSelfHostedRunnerGroupForOrg
    {
        if ($this->actions👷GetSelfHostedRunnerGroupForOrg instanceof Internal\Operator\Actions\GetSelfHostedRunnerGroupForOrg === false) {
            $this->actions👷GetSelfHostedRunnerGroupForOrg = new Internal\Operator\Actions\GetSelfHostedRunnerGroupForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId());
        }

        return $this->actions👷GetSelfHostedRunnerGroupForOrg;
    }

    public function actions👷DeleteSelfHostedRunnerGroupFromOrg(): Internal\Operator\Actions\DeleteSelfHostedRunnerGroupFromOrg
    {
        if ($this->actions👷DeleteSelfHostedRunnerGroupFromOrg instanceof Internal\Operator\Actions\DeleteSelfHostedRunnerGroupFromOrg === false) {
            $this->actions👷DeleteSelfHostedRunnerGroupFromOrg = new Internal\Operator\Actions\DeleteSelfHostedRunnerGroupFromOrg($this->browser, $this->authentication);
        }

        return $this->actions👷DeleteSelfHostedRunnerGroupFromOrg;
    }

    public function actions👷UpdateSelfHostedRunnerGroupForOrg(): Internal\Operator\Actions\UpdateSelfHostedRunnerGroupForOrg
    {
        if ($this->actions👷UpdateSelfHostedRunnerGroupForOrg instanceof Internal\Operator\Actions\UpdateSelfHostedRunnerGroupForOrg === false) {
            $this->actions👷UpdateSelfHostedRunnerGroupForOrg = new Internal\Operator\Actions\UpdateSelfHostedRunnerGroupForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId());
        }

        return $this->actions👷UpdateSelfHostedRunnerGroupForOrg;
    }

    public function actions👷AddSelfHostedRunnerToGroupForOrg(): Internal\Operator\Actions\AddSelfHostedRunnerToGroupForOrg
    {
        if ($this->actions👷AddSelfHostedRunnerToGroupForOrg instanceof Internal\Operator\Actions\AddSelfHostedRunnerToGroupForOrg === false) {
            $this->actions👷AddSelfHostedRunnerToGroupForOrg = new Internal\Operator\Actions\AddSelfHostedRunnerToGroupForOrg($this->browser, $this->authentication);
        }

        return $this->actions👷AddSelfHostedRunnerToGroupForOrg;
    }

    public function actions👷ListSelfHostedRunnersForOrg(): Internal\Operator\Actions\ListSelfHostedRunnersForOrg
    {
        if ($this->actions👷ListSelfHostedRunnersForOrg instanceof Internal\Operator\Actions\ListSelfHostedRunnersForOrg === false) {
            $this->actions👷ListSelfHostedRunnersForOrg = new Internal\Operator\Actions\ListSelfHostedRunnersForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners());
        }

        return $this->actions👷ListSelfHostedRunnersForOrg;
    }

    public function actions👷ListRunnerApplicationsForOrg(): Internal\Operator\Actions\ListRunnerApplicationsForOrg
    {
        if ($this->actions👷ListRunnerApplicationsForOrg instanceof Internal\Operator\Actions\ListRunnerApplicationsForOrg === false) {
            $this->actions👷ListRunnerApplicationsForOrg = new Internal\Operator\Actions\ListRunnerApplicationsForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀Downloads());
        }

        return $this->actions👷ListRunnerApplicationsForOrg;
    }

    public function actions👷CreateRegistrationTokenForOrg(): Internal\Operator\Actions\CreateRegistrationTokenForOrg
    {
        if ($this->actions👷CreateRegistrationTokenForOrg instanceof Internal\Operator\Actions\CreateRegistrationTokenForOrg === false) {
            $this->actions👷CreateRegistrationTokenForOrg = new Internal\Operator\Actions\CreateRegistrationTokenForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RegistrationToken());
        }

        return $this->actions👷CreateRegistrationTokenForOrg;
    }

    public function actions👷CreateRemoveTokenForOrg(): Internal\Operator\Actions\CreateRemoveTokenForOrg
    {
        if ($this->actions👷CreateRemoveTokenForOrg instanceof Internal\Operator\Actions\CreateRemoveTokenForOrg === false) {
            $this->actions👷CreateRemoveTokenForOrg = new Internal\Operator\Actions\CreateRemoveTokenForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RemoveToken());
        }

        return $this->actions👷CreateRemoveTokenForOrg;
    }

    public function actions👷GetSelfHostedRunnerForOrg(): Internal\Operator\Actions\GetSelfHostedRunnerForOrg
    {
        if ($this->actions👷GetSelfHostedRunnerForOrg instanceof Internal\Operator\Actions\GetSelfHostedRunnerForOrg === false) {
            $this->actions👷GetSelfHostedRunnerForOrg = new Internal\Operator\Actions\GetSelfHostedRunnerForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId());
        }

        return $this->actions👷GetSelfHostedRunnerForOrg;
    }

    public function actions👷DeleteSelfHostedRunnerFromOrg(): Internal\Operator\Actions\DeleteSelfHostedRunnerFromOrg
    {
        if ($this->actions👷DeleteSelfHostedRunnerFromOrg instanceof Internal\Operator\Actions\DeleteSelfHostedRunnerFromOrg === false) {
            $this->actions👷DeleteSelfHostedRunnerFromOrg = new Internal\Operator\Actions\DeleteSelfHostedRunnerFromOrg($this->browser, $this->authentication);
        }

        return $this->actions👷DeleteSelfHostedRunnerFromOrg;
    }

    public function actions👷ListOrgSecrets(): Internal\Operator\Actions\ListOrgSecrets
    {
        if ($this->actions👷ListOrgSecrets instanceof Internal\Operator\Actions\ListOrgSecrets === false) {
            $this->actions👷ListOrgSecrets = new Internal\Operator\Actions\ListOrgSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets());
        }

        return $this->actions👷ListOrgSecrets;
    }

    public function actions👷GetOrgPublicKey(): Internal\Operator\Actions\GetOrgPublicKey
    {
        if ($this->actions👷GetOrgPublicKey instanceof Internal\Operator\Actions\GetOrgPublicKey === false) {
            $this->actions👷GetOrgPublicKey = new Internal\Operator\Actions\GetOrgPublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀PublicKey());
        }

        return $this->actions👷GetOrgPublicKey;
    }

    public function actions👷GetOrgSecret(): Internal\Operator\Actions\GetOrgSecret
    {
        if ($this->actions👷GetOrgSecret instanceof Internal\Operator\Actions\GetOrgSecret === false) {
            $this->actions👷GetOrgSecret = new Internal\Operator\Actions\GetOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName());
        }

        return $this->actions👷GetOrgSecret;
    }

    public function actions👷CreateOrUpdateOrgSecret(): Internal\Operator\Actions\CreateOrUpdateOrgSecret
    {
        if ($this->actions👷CreateOrUpdateOrgSecret instanceof Internal\Operator\Actions\CreateOrUpdateOrgSecret === false) {
            $this->actions👷CreateOrUpdateOrgSecret = new Internal\Operator\Actions\CreateOrUpdateOrgSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName());
        }

        return $this->actions👷CreateOrUpdateOrgSecret;
    }

    public function actions👷DeleteOrgSecret(): Internal\Operator\Actions\DeleteOrgSecret
    {
        if ($this->actions👷DeleteOrgSecret instanceof Internal\Operator\Actions\DeleteOrgSecret === false) {
            $this->actions👷DeleteOrgSecret = new Internal\Operator\Actions\DeleteOrgSecret($this->browser, $this->authentication);
        }

        return $this->actions👷DeleteOrgSecret;
    }

    public function actions👷ListSelectedReposForOrgSecret(): Internal\Operator\Actions\ListSelectedReposForOrgSecret
    {
        if ($this->actions👷ListSelectedReposForOrgSecret instanceof Internal\Operator\Actions\ListSelectedReposForOrgSecret === false) {
            $this->actions👷ListSelectedReposForOrgSecret = new Internal\Operator\Actions\ListSelectedReposForOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories());
        }

        return $this->actions👷ListSelectedReposForOrgSecret;
    }

    public function actions👷SetSelectedReposForOrgSecret(): Internal\Operator\Actions\SetSelectedReposForOrgSecret
    {
        if ($this->actions👷SetSelectedReposForOrgSecret instanceof Internal\Operator\Actions\SetSelectedReposForOrgSecret === false) {
            $this->actions👷SetSelectedReposForOrgSecret = new Internal\Operator\Actions\SetSelectedReposForOrgSecret($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷SetSelectedReposForOrgSecret;
    }

    public function actions👷AddSelectedRepoToOrgSecret(): Internal\Operator\Actions\AddSelectedRepoToOrgSecret
    {
        if ($this->actions👷AddSelectedRepoToOrgSecret instanceof Internal\Operator\Actions\AddSelectedRepoToOrgSecret === false) {
            $this->actions👷AddSelectedRepoToOrgSecret = new Internal\Operator\Actions\AddSelectedRepoToOrgSecret($this->browser, $this->authentication);
        }

        return $this->actions👷AddSelectedRepoToOrgSecret;
    }

    public function actions👷RemoveSelectedRepoFromOrgSecret(): Internal\Operator\Actions\RemoveSelectedRepoFromOrgSecret
    {
        if ($this->actions👷RemoveSelectedRepoFromOrgSecret instanceof Internal\Operator\Actions\RemoveSelectedRepoFromOrgSecret === false) {
            $this->actions👷RemoveSelectedRepoFromOrgSecret = new Internal\Operator\Actions\RemoveSelectedRepoFromOrgSecret($this->browser, $this->authentication);
        }

        return $this->actions👷RemoveSelectedRepoFromOrgSecret;
    }

    public function orgs👷GetAuditLog(): Internal\Operator\Orgs\GetAuditLog
    {
        if ($this->orgs👷GetAuditLog instanceof Internal\Operator\Orgs\GetAuditLog === false) {
            $this->orgs👷GetAuditLog = new Internal\Operator\Orgs\GetAuditLog($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀AuditLog());
        }

        return $this->orgs👷GetAuditLog;
    }

    public function orgs👷GetAuditLogListing(): Internal\Operator\Orgs\GetAuditLogListing
    {
        if ($this->orgs👷GetAuditLogListing instanceof Internal\Operator\Orgs\GetAuditLogListing === false) {
            $this->orgs👷GetAuditLogListing = new Internal\Operator\Orgs\GetAuditLogListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀AuditLog());
        }

        return $this->orgs👷GetAuditLogListing;
    }

    public function codeScanning👷ListAlertsForOrg(): Internal\Operator\CodeScanning\ListAlertsForOrg
    {
        if ($this->codeScanning👷ListAlertsForOrg instanceof Internal\Operator\CodeScanning\ListAlertsForOrg === false) {
            $this->codeScanning👷ListAlertsForOrg = new Internal\Operator\CodeScanning\ListAlertsForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀CodeScanning🌀Alerts());
        }

        return $this->codeScanning👷ListAlertsForOrg;
    }

    public function codeScanning👷ListAlertsForOrgListing(): Internal\Operator\CodeScanning\ListAlertsForOrgListing
    {
        if ($this->codeScanning👷ListAlertsForOrgListing instanceof Internal\Operator\CodeScanning\ListAlertsForOrgListing === false) {
            $this->codeScanning👷ListAlertsForOrgListing = new Internal\Operator\CodeScanning\ListAlertsForOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀CodeScanning🌀Alerts());
        }

        return $this->codeScanning👷ListAlertsForOrgListing;
    }

    public function teams👷ExternalIdpGroupInfoForOrg(): Internal\Operator\Teams\ExternalIdpGroupInfoForOrg
    {
        if ($this->teams👷ExternalIdpGroupInfoForOrg instanceof Internal\Operator\Teams\ExternalIdpGroupInfoForOrg === false) {
            $this->teams👷ExternalIdpGroupInfoForOrg = new Internal\Operator\Teams\ExternalIdpGroupInfoForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀ExternalGroup🌀GroupId());
        }

        return $this->teams👷ExternalIdpGroupInfoForOrg;
    }

    public function teams👷ListExternalIdpGroupsForOrg(): Internal\Operator\Teams\ListExternalIdpGroupsForOrg
    {
        if ($this->teams👷ListExternalIdpGroupsForOrg instanceof Internal\Operator\Teams\ListExternalIdpGroupsForOrg === false) {
            $this->teams👷ListExternalIdpGroupsForOrg = new Internal\Operator\Teams\ListExternalIdpGroupsForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀ExternalGroups());
        }

        return $this->teams👷ListExternalIdpGroupsForOrg;
    }

    public function orgs👷ListWebhooks(): Internal\Operator\Orgs\ListWebhooks
    {
        if ($this->orgs👷ListWebhooks instanceof Internal\Operator\Orgs\ListWebhooks === false) {
            $this->orgs👷ListWebhooks = new Internal\Operator\Orgs\ListWebhooks($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks());
        }

        return $this->orgs👷ListWebhooks;
    }

    public function orgs👷ListWebhooksListing(): Internal\Operator\Orgs\ListWebhooksListing
    {
        if ($this->orgs👷ListWebhooksListing instanceof Internal\Operator\Orgs\ListWebhooksListing === false) {
            $this->orgs👷ListWebhooksListing = new Internal\Operator\Orgs\ListWebhooksListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks());
        }

        return $this->orgs👷ListWebhooksListing;
    }

    public function orgs👷CreateWebhook(): Internal\Operator\Orgs\CreateWebhook
    {
        if ($this->orgs👷CreateWebhook instanceof Internal\Operator\Orgs\CreateWebhook === false) {
            $this->orgs👷CreateWebhook = new Internal\Operator\Orgs\CreateWebhook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks());
        }

        return $this->orgs👷CreateWebhook;
    }

    public function orgs👷GetWebhook(): Internal\Operator\Orgs\GetWebhook
    {
        if ($this->orgs👷GetWebhook instanceof Internal\Operator\Orgs\GetWebhook === false) {
            $this->orgs👷GetWebhook = new Internal\Operator\Orgs\GetWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId());
        }

        return $this->orgs👷GetWebhook;
    }

    public function orgs👷DeleteWebhook(): Internal\Operator\Orgs\DeleteWebhook
    {
        if ($this->orgs👷DeleteWebhook instanceof Internal\Operator\Orgs\DeleteWebhook === false) {
            $this->orgs👷DeleteWebhook = new Internal\Operator\Orgs\DeleteWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId());
        }

        return $this->orgs👷DeleteWebhook;
    }

    public function orgs👷UpdateWebhook(): Internal\Operator\Orgs\UpdateWebhook
    {
        if ($this->orgs👷UpdateWebhook instanceof Internal\Operator\Orgs\UpdateWebhook === false) {
            $this->orgs👷UpdateWebhook = new Internal\Operator\Orgs\UpdateWebhook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId());
        }

        return $this->orgs👷UpdateWebhook;
    }

    public function orgs👷GetWebhookConfigForOrg(): Internal\Operator\Orgs\GetWebhookConfigForOrg
    {
        if ($this->orgs👷GetWebhookConfigForOrg instanceof Internal\Operator\Orgs\GetWebhookConfigForOrg === false) {
            $this->orgs👷GetWebhookConfigForOrg = new Internal\Operator\Orgs\GetWebhookConfigForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Config());
        }

        return $this->orgs👷GetWebhookConfigForOrg;
    }

    public function orgs👷UpdateWebhookConfigForOrg(): Internal\Operator\Orgs\UpdateWebhookConfigForOrg
    {
        if ($this->orgs👷UpdateWebhookConfigForOrg instanceof Internal\Operator\Orgs\UpdateWebhookConfigForOrg === false) {
            $this->orgs👷UpdateWebhookConfigForOrg = new Internal\Operator\Orgs\UpdateWebhookConfigForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Config());
        }

        return $this->orgs👷UpdateWebhookConfigForOrg;
    }

    public function orgs👷ListWebhookDeliveries(): Internal\Operator\Orgs\ListWebhookDeliveries
    {
        if ($this->orgs👷ListWebhookDeliveries instanceof Internal\Operator\Orgs\ListWebhookDeliveries === false) {
            $this->orgs👷ListWebhookDeliveries = new Internal\Operator\Orgs\ListWebhookDeliveries($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries());
        }

        return $this->orgs👷ListWebhookDeliveries;
    }

    public function orgs👷GetWebhookDelivery(): Internal\Operator\Orgs\GetWebhookDelivery
    {
        if ($this->orgs👷GetWebhookDelivery instanceof Internal\Operator\Orgs\GetWebhookDelivery === false) {
            $this->orgs👷GetWebhookDelivery = new Internal\Operator\Orgs\GetWebhookDelivery($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId());
        }

        return $this->orgs👷GetWebhookDelivery;
    }

    public function orgs👷RedeliverWebhookDelivery(): Internal\Operator\Orgs\RedeliverWebhookDelivery
    {
        if ($this->orgs👷RedeliverWebhookDelivery instanceof Internal\Operator\Orgs\RedeliverWebhookDelivery === false) {
            $this->orgs👷RedeliverWebhookDelivery = new Internal\Operator\Orgs\RedeliverWebhookDelivery($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId🌀Attempts());
        }

        return $this->orgs👷RedeliverWebhookDelivery;
    }

    public function orgs👷PingWebhook(): Internal\Operator\Orgs\PingWebhook
    {
        if ($this->orgs👷PingWebhook instanceof Internal\Operator\Orgs\PingWebhook === false) {
            $this->orgs👷PingWebhook = new Internal\Operator\Orgs\PingWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Pings());
        }

        return $this->orgs👷PingWebhook;
    }

    public function apps👷GetOrgInstallation(): Internal\Operator\Apps\GetOrgInstallation
    {
        if ($this->apps👷GetOrgInstallation instanceof Internal\Operator\Apps\GetOrgInstallation === false) {
            $this->apps👷GetOrgInstallation = new Internal\Operator\Apps\GetOrgInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Installation());
        }

        return $this->apps👷GetOrgInstallation;
    }

    public function orgs👷ListAppInstallations(): Internal\Operator\Orgs\ListAppInstallations
    {
        if ($this->orgs👷ListAppInstallations instanceof Internal\Operator\Orgs\ListAppInstallations === false) {
            $this->orgs👷ListAppInstallations = new Internal\Operator\Orgs\ListAppInstallations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Installations());
        }

        return $this->orgs👷ListAppInstallations;
    }

    public function issues👷ListForOrg(): Internal\Operator\Issues\ListForOrg
    {
        if ($this->issues👷ListForOrg instanceof Internal\Operator\Issues\ListForOrg === false) {
            $this->issues👷ListForOrg = new Internal\Operator\Issues\ListForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Issues());
        }

        return $this->issues👷ListForOrg;
    }

    public function issues👷ListForOrgListing(): Internal\Operator\Issues\ListForOrgListing
    {
        if ($this->issues👷ListForOrgListing instanceof Internal\Operator\Issues\ListForOrgListing === false) {
            $this->issues👷ListForOrgListing = new Internal\Operator\Issues\ListForOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Issues());
        }

        return $this->issues👷ListForOrgListing;
    }

    public function orgs👷ListMembers(): Internal\Operator\Orgs\ListMembers
    {
        if ($this->orgs👷ListMembers instanceof Internal\Operator\Orgs\ListMembers === false) {
            $this->orgs👷ListMembers = new Internal\Operator\Orgs\ListMembers($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Members());
        }

        return $this->orgs👷ListMembers;
    }

    public function orgs👷ListMembersListing(): Internal\Operator\Orgs\ListMembersListing
    {
        if ($this->orgs👷ListMembersListing instanceof Internal\Operator\Orgs\ListMembersListing === false) {
            $this->orgs👷ListMembersListing = new Internal\Operator\Orgs\ListMembersListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Members());
        }

        return $this->orgs👷ListMembersListing;
    }

    public function orgs👷CheckMembershipForUser(): Internal\Operator\Orgs\CheckMembershipForUser
    {
        if ($this->orgs👷CheckMembershipForUser instanceof Internal\Operator\Orgs\CheckMembershipForUser === false) {
            $this->orgs👷CheckMembershipForUser = new Internal\Operator\Orgs\CheckMembershipForUser($this->browser, $this->authentication);
        }

        return $this->orgs👷CheckMembershipForUser;
    }

    public function orgs👷RemoveMember(): Internal\Operator\Orgs\RemoveMember
    {
        if ($this->orgs👷RemoveMember instanceof Internal\Operator\Orgs\RemoveMember === false) {
            $this->orgs👷RemoveMember = new Internal\Operator\Orgs\RemoveMember($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username());
        }

        return $this->orgs👷RemoveMember;
    }

    public function orgs👷GetMembershipForUser(): Internal\Operator\Orgs\GetMembershipForUser
    {
        if ($this->orgs👷GetMembershipForUser instanceof Internal\Operator\Orgs\GetMembershipForUser === false) {
            $this->orgs👷GetMembershipForUser = new Internal\Operator\Orgs\GetMembershipForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Memberships🌀Username());
        }

        return $this->orgs👷GetMembershipForUser;
    }

    public function orgs👷SetMembershipForUser(): Internal\Operator\Orgs\SetMembershipForUser
    {
        if ($this->orgs👷SetMembershipForUser instanceof Internal\Operator\Orgs\SetMembershipForUser === false) {
            $this->orgs👷SetMembershipForUser = new Internal\Operator\Orgs\SetMembershipForUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Memberships🌀Username());
        }

        return $this->orgs👷SetMembershipForUser;
    }

    public function orgs👷RemoveMembershipForUser(): Internal\Operator\Orgs\RemoveMembershipForUser
    {
        if ($this->orgs👷RemoveMembershipForUser instanceof Internal\Operator\Orgs\RemoveMembershipForUser === false) {
            $this->orgs👷RemoveMembershipForUser = new Internal\Operator\Orgs\RemoveMembershipForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Memberships🌀Username());
        }

        return $this->orgs👷RemoveMembershipForUser;
    }

    public function migrations👷ListForOrg(): Internal\Operator\Migrations\ListForOrg
    {
        if ($this->migrations👷ListForOrg instanceof Internal\Operator\Migrations\ListForOrg === false) {
            $this->migrations👷ListForOrg = new Internal\Operator\Migrations\ListForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations());
        }

        return $this->migrations👷ListForOrg;
    }

    public function migrations👷ListForOrgListing(): Internal\Operator\Migrations\ListForOrgListing
    {
        if ($this->migrations👷ListForOrgListing instanceof Internal\Operator\Migrations\ListForOrgListing === false) {
            $this->migrations👷ListForOrgListing = new Internal\Operator\Migrations\ListForOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations());
        }

        return $this->migrations👷ListForOrgListing;
    }

    public function migrations👷StartForOrg(): Internal\Operator\Migrations\StartForOrg
    {
        if ($this->migrations👷StartForOrg instanceof Internal\Operator\Migrations\StartForOrg === false) {
            $this->migrations👷StartForOrg = new Internal\Operator\Migrations\StartForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations());
        }

        return $this->migrations👷StartForOrg;
    }

    public function migrations👷GetStatusForOrg(): Internal\Operator\Migrations\GetStatusForOrg
    {
        if ($this->migrations👷GetStatusForOrg instanceof Internal\Operator\Migrations\GetStatusForOrg === false) {
            $this->migrations👷GetStatusForOrg = new Internal\Operator\Migrations\GetStatusForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId());
        }

        return $this->migrations👷GetStatusForOrg;
    }

    public function migrations👷DownloadArchiveForOrg(): Internal\Operator\Migrations\DownloadArchiveForOrg
    {
        if ($this->migrations👷DownloadArchiveForOrg instanceof Internal\Operator\Migrations\DownloadArchiveForOrg === false) {
            $this->migrations👷DownloadArchiveForOrg = new Internal\Operator\Migrations\DownloadArchiveForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Archive());
        }

        return $this->migrations👷DownloadArchiveForOrg;
    }

    public function migrations👷DownloadArchiveForOrgStreaming(): Internal\Operator\Migrations\DownloadArchiveForOrgStreaming
    {
        if ($this->migrations👷DownloadArchiveForOrgStreaming instanceof Internal\Operator\Migrations\DownloadArchiveForOrgStreaming === false) {
            $this->migrations👷DownloadArchiveForOrgStreaming = new Internal\Operator\Migrations\DownloadArchiveForOrgStreaming($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Archive());
        }

        return $this->migrations👷DownloadArchiveForOrgStreaming;
    }

    public function migrations👷DeleteArchiveForOrg(): Internal\Operator\Migrations\DeleteArchiveForOrg
    {
        if ($this->migrations👷DeleteArchiveForOrg instanceof Internal\Operator\Migrations\DeleteArchiveForOrg === false) {
            $this->migrations👷DeleteArchiveForOrg = new Internal\Operator\Migrations\DeleteArchiveForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Archive());
        }

        return $this->migrations👷DeleteArchiveForOrg;
    }

    public function migrations👷UnlockRepoForOrg(): Internal\Operator\Migrations\UnlockRepoForOrg
    {
        if ($this->migrations👷UnlockRepoForOrg instanceof Internal\Operator\Migrations\UnlockRepoForOrg === false) {
            $this->migrations👷UnlockRepoForOrg = new Internal\Operator\Migrations\UnlockRepoForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Repos🌀RepoName🌀Lock());
        }

        return $this->migrations👷UnlockRepoForOrg;
    }

    public function migrations👷ListReposForOrg(): Internal\Operator\Migrations\ListReposForOrg
    {
        if ($this->migrations👷ListReposForOrg instanceof Internal\Operator\Migrations\ListReposForOrg === false) {
            $this->migrations👷ListReposForOrg = new Internal\Operator\Migrations\ListReposForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Repositories());
        }

        return $this->migrations👷ListReposForOrg;
    }

    public function migrations👷ListReposForOrgListing(): Internal\Operator\Migrations\ListReposForOrgListing
    {
        if ($this->migrations👷ListReposForOrgListing instanceof Internal\Operator\Migrations\ListReposForOrgListing === false) {
            $this->migrations👷ListReposForOrgListing = new Internal\Operator\Migrations\ListReposForOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Repositories());
        }

        return $this->migrations👷ListReposForOrgListing;
    }

    public function orgs👷ListOutsideCollaborators(): Internal\Operator\Orgs\ListOutsideCollaborators
    {
        if ($this->orgs👷ListOutsideCollaborators instanceof Internal\Operator\Orgs\ListOutsideCollaborators === false) {
            $this->orgs👷ListOutsideCollaborators = new Internal\Operator\Orgs\ListOutsideCollaborators($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OutsideCollaborators());
        }

        return $this->orgs👷ListOutsideCollaborators;
    }

    public function orgs👷ListOutsideCollaboratorsListing(): Internal\Operator\Orgs\ListOutsideCollaboratorsListing
    {
        if ($this->orgs👷ListOutsideCollaboratorsListing instanceof Internal\Operator\Orgs\ListOutsideCollaboratorsListing === false) {
            $this->orgs👷ListOutsideCollaboratorsListing = new Internal\Operator\Orgs\ListOutsideCollaboratorsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OutsideCollaborators());
        }

        return $this->orgs👷ListOutsideCollaboratorsListing;
    }

    public function orgs👷ConvertMemberToOutsideCollaborator(): Internal\Operator\Orgs\ConvertMemberToOutsideCollaborator
    {
        if ($this->orgs👷ConvertMemberToOutsideCollaborator instanceof Internal\Operator\Orgs\ConvertMemberToOutsideCollaborator === false) {
            $this->orgs👷ConvertMemberToOutsideCollaborator = new Internal\Operator\Orgs\ConvertMemberToOutsideCollaborator($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OutsideCollaborators🌀Username());
        }

        return $this->orgs👷ConvertMemberToOutsideCollaborator;
    }

    public function orgs👷RemoveOutsideCollaborator(): Internal\Operator\Orgs\RemoveOutsideCollaborator
    {
        if ($this->orgs👷RemoveOutsideCollaborator instanceof Internal\Operator\Orgs\RemoveOutsideCollaborator === false) {
            $this->orgs👷RemoveOutsideCollaborator = new Internal\Operator\Orgs\RemoveOutsideCollaborator($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OutsideCollaborators🌀Username());
        }

        return $this->orgs👷RemoveOutsideCollaborator;
    }

    public function projects👷ListForOrg(): Internal\Operator\Projects\ListForOrg
    {
        if ($this->projects👷ListForOrg instanceof Internal\Operator\Projects\ListForOrg === false) {
            $this->projects👷ListForOrg = new Internal\Operator\Projects\ListForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Projects());
        }

        return $this->projects👷ListForOrg;
    }

    public function projects👷ListForOrgListing(): Internal\Operator\Projects\ListForOrgListing
    {
        if ($this->projects👷ListForOrgListing instanceof Internal\Operator\Projects\ListForOrgListing === false) {
            $this->projects👷ListForOrgListing = new Internal\Operator\Projects\ListForOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Projects());
        }

        return $this->projects👷ListForOrgListing;
    }

    public function projects👷CreateForOrg(): Internal\Operator\Projects\CreateForOrg
    {
        if ($this->projects👷CreateForOrg instanceof Internal\Operator\Projects\CreateForOrg === false) {
            $this->projects👷CreateForOrg = new Internal\Operator\Projects\CreateForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Projects());
        }

        return $this->projects👷CreateForOrg;
    }

    public function repos👷ListForOrg(): Internal\Operator\Repos\ListForOrg
    {
        if ($this->repos👷ListForOrg instanceof Internal\Operator\Repos\ListForOrg === false) {
            $this->repos👷ListForOrg = new Internal\Operator\Repos\ListForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Repos());
        }

        return $this->repos👷ListForOrg;
    }

    public function repos👷ListForOrgListing(): Internal\Operator\Repos\ListForOrgListing
    {
        if ($this->repos👷ListForOrgListing instanceof Internal\Operator\Repos\ListForOrgListing === false) {
            $this->repos👷ListForOrgListing = new Internal\Operator\Repos\ListForOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Repos());
        }

        return $this->repos👷ListForOrgListing;
    }

    public function repos👷CreateInOrg(): Internal\Operator\Repos\CreateInOrg
    {
        if ($this->repos👷CreateInOrg instanceof Internal\Operator\Repos\CreateInOrg === false) {
            $this->repos👷CreateInOrg = new Internal\Operator\Repos\CreateInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Repos());
        }

        return $this->repos👷CreateInOrg;
    }

    public function teams👷List_(): Internal\Operator\Teams\List_
    {
        if ($this->teams👷List_ instanceof Internal\Operator\Teams\List_ === false) {
            $this->teams👷List_ = new Internal\Operator\Teams\List_($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams());
        }

        return $this->teams👷List_;
    }

    public function teams👷ListListing(): Internal\Operator\Teams\ListListing
    {
        if ($this->teams👷ListListing instanceof Internal\Operator\Teams\ListListing === false) {
            $this->teams👷ListListing = new Internal\Operator\Teams\ListListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams());
        }

        return $this->teams👷ListListing;
    }

    public function teams👷Create(): Internal\Operator\Teams\Create
    {
        if ($this->teams👷Create instanceof Internal\Operator\Teams\Create === false) {
            $this->teams👷Create = new Internal\Operator\Teams\Create($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams());
        }

        return $this->teams👷Create;
    }

    public function teams👷GetByName(): Internal\Operator\Teams\GetByName
    {
        if ($this->teams👷GetByName instanceof Internal\Operator\Teams\GetByName === false) {
            $this->teams👷GetByName = new Internal\Operator\Teams\GetByName($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug());
        }

        return $this->teams👷GetByName;
    }

    public function teams👷DeleteInOrg(): Internal\Operator\Teams\DeleteInOrg
    {
        if ($this->teams👷DeleteInOrg instanceof Internal\Operator\Teams\DeleteInOrg === false) {
            $this->teams👷DeleteInOrg = new Internal\Operator\Teams\DeleteInOrg($this->browser, $this->authentication);
        }

        return $this->teams👷DeleteInOrg;
    }

    public function teams👷UpdateInOrg(): Internal\Operator\Teams\UpdateInOrg
    {
        if ($this->teams👷UpdateInOrg instanceof Internal\Operator\Teams\UpdateInOrg === false) {
            $this->teams👷UpdateInOrg = new Internal\Operator\Teams\UpdateInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug());
        }

        return $this->teams👷UpdateInOrg;
    }

    public function teams👷ListDiscussionsInOrg(): Internal\Operator\Teams\ListDiscussionsInOrg
    {
        if ($this->teams👷ListDiscussionsInOrg instanceof Internal\Operator\Teams\ListDiscussionsInOrg === false) {
            $this->teams👷ListDiscussionsInOrg = new Internal\Operator\Teams\ListDiscussionsInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions());
        }

        return $this->teams👷ListDiscussionsInOrg;
    }

    public function teams👷ListDiscussionsInOrgListing(): Internal\Operator\Teams\ListDiscussionsInOrgListing
    {
        if ($this->teams👷ListDiscussionsInOrgListing instanceof Internal\Operator\Teams\ListDiscussionsInOrgListing === false) {
            $this->teams👷ListDiscussionsInOrgListing = new Internal\Operator\Teams\ListDiscussionsInOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions());
        }

        return $this->teams👷ListDiscussionsInOrgListing;
    }

    public function teams👷CreateDiscussionInOrg(): Internal\Operator\Teams\CreateDiscussionInOrg
    {
        if ($this->teams👷CreateDiscussionInOrg instanceof Internal\Operator\Teams\CreateDiscussionInOrg === false) {
            $this->teams👷CreateDiscussionInOrg = new Internal\Operator\Teams\CreateDiscussionInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions());
        }

        return $this->teams👷CreateDiscussionInOrg;
    }

    public function teams👷GetDiscussionInOrg(): Internal\Operator\Teams\GetDiscussionInOrg
    {
        if ($this->teams👷GetDiscussionInOrg instanceof Internal\Operator\Teams\GetDiscussionInOrg === false) {
            $this->teams👷GetDiscussionInOrg = new Internal\Operator\Teams\GetDiscussionInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber());
        }

        return $this->teams👷GetDiscussionInOrg;
    }

    public function teams👷DeleteDiscussionInOrg(): Internal\Operator\Teams\DeleteDiscussionInOrg
    {
        if ($this->teams👷DeleteDiscussionInOrg instanceof Internal\Operator\Teams\DeleteDiscussionInOrg === false) {
            $this->teams👷DeleteDiscussionInOrg = new Internal\Operator\Teams\DeleteDiscussionInOrg($this->browser, $this->authentication);
        }

        return $this->teams👷DeleteDiscussionInOrg;
    }

    public function teams👷UpdateDiscussionInOrg(): Internal\Operator\Teams\UpdateDiscussionInOrg
    {
        if ($this->teams👷UpdateDiscussionInOrg instanceof Internal\Operator\Teams\UpdateDiscussionInOrg === false) {
            $this->teams👷UpdateDiscussionInOrg = new Internal\Operator\Teams\UpdateDiscussionInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber());
        }

        return $this->teams👷UpdateDiscussionInOrg;
    }

    public function teams👷ListDiscussionCommentsInOrg(): Internal\Operator\Teams\ListDiscussionCommentsInOrg
    {
        if ($this->teams👷ListDiscussionCommentsInOrg instanceof Internal\Operator\Teams\ListDiscussionCommentsInOrg === false) {
            $this->teams👷ListDiscussionCommentsInOrg = new Internal\Operator\Teams\ListDiscussionCommentsInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments());
        }

        return $this->teams👷ListDiscussionCommentsInOrg;
    }

    public function teams👷ListDiscussionCommentsInOrgListing(): Internal\Operator\Teams\ListDiscussionCommentsInOrgListing
    {
        if ($this->teams👷ListDiscussionCommentsInOrgListing instanceof Internal\Operator\Teams\ListDiscussionCommentsInOrgListing === false) {
            $this->teams👷ListDiscussionCommentsInOrgListing = new Internal\Operator\Teams\ListDiscussionCommentsInOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments());
        }

        return $this->teams👷ListDiscussionCommentsInOrgListing;
    }

    public function teams👷CreateDiscussionCommentInOrg(): Internal\Operator\Teams\CreateDiscussionCommentInOrg
    {
        if ($this->teams👷CreateDiscussionCommentInOrg instanceof Internal\Operator\Teams\CreateDiscussionCommentInOrg === false) {
            $this->teams👷CreateDiscussionCommentInOrg = new Internal\Operator\Teams\CreateDiscussionCommentInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments());
        }

        return $this->teams👷CreateDiscussionCommentInOrg;
    }

    public function teams👷GetDiscussionCommentInOrg(): Internal\Operator\Teams\GetDiscussionCommentInOrg
    {
        if ($this->teams👷GetDiscussionCommentInOrg instanceof Internal\Operator\Teams\GetDiscussionCommentInOrg === false) {
            $this->teams👷GetDiscussionCommentInOrg = new Internal\Operator\Teams\GetDiscussionCommentInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber());
        }

        return $this->teams👷GetDiscussionCommentInOrg;
    }

    public function teams👷DeleteDiscussionCommentInOrg(): Internal\Operator\Teams\DeleteDiscussionCommentInOrg
    {
        if ($this->teams👷DeleteDiscussionCommentInOrg instanceof Internal\Operator\Teams\DeleteDiscussionCommentInOrg === false) {
            $this->teams👷DeleteDiscussionCommentInOrg = new Internal\Operator\Teams\DeleteDiscussionCommentInOrg($this->browser, $this->authentication);
        }

        return $this->teams👷DeleteDiscussionCommentInOrg;
    }

    public function teams👷UpdateDiscussionCommentInOrg(): Internal\Operator\Teams\UpdateDiscussionCommentInOrg
    {
        if ($this->teams👷UpdateDiscussionCommentInOrg instanceof Internal\Operator\Teams\UpdateDiscussionCommentInOrg === false) {
            $this->teams👷UpdateDiscussionCommentInOrg = new Internal\Operator\Teams\UpdateDiscussionCommentInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber());
        }

        return $this->teams👷UpdateDiscussionCommentInOrg;
    }

    public function reactions👷ListForTeamDiscussionCommentInOrg(): Internal\Operator\Reactions\ListForTeamDiscussionCommentInOrg
    {
        if ($this->reactions👷ListForTeamDiscussionCommentInOrg instanceof Internal\Operator\Reactions\ListForTeamDiscussionCommentInOrg === false) {
            $this->reactions👷ListForTeamDiscussionCommentInOrg = new Internal\Operator\Reactions\ListForTeamDiscussionCommentInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions());
        }

        return $this->reactions👷ListForTeamDiscussionCommentInOrg;
    }

    public function reactions👷ListForTeamDiscussionCommentInOrgListing(): Internal\Operator\Reactions\ListForTeamDiscussionCommentInOrgListing
    {
        if ($this->reactions👷ListForTeamDiscussionCommentInOrgListing instanceof Internal\Operator\Reactions\ListForTeamDiscussionCommentInOrgListing === false) {
            $this->reactions👷ListForTeamDiscussionCommentInOrgListing = new Internal\Operator\Reactions\ListForTeamDiscussionCommentInOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions());
        }

        return $this->reactions👷ListForTeamDiscussionCommentInOrgListing;
    }

    public function reactions👷CreateForTeamDiscussionCommentInOrg(): Internal\Operator\Reactions\CreateForTeamDiscussionCommentInOrg
    {
        if ($this->reactions👷CreateForTeamDiscussionCommentInOrg instanceof Internal\Operator\Reactions\CreateForTeamDiscussionCommentInOrg === false) {
            $this->reactions👷CreateForTeamDiscussionCommentInOrg = new Internal\Operator\Reactions\CreateForTeamDiscussionCommentInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions());
        }

        return $this->reactions👷CreateForTeamDiscussionCommentInOrg;
    }

    public function reactions👷DeleteForTeamDiscussionComment(): Internal\Operator\Reactions\DeleteForTeamDiscussionComment
    {
        if ($this->reactions👷DeleteForTeamDiscussionComment instanceof Internal\Operator\Reactions\DeleteForTeamDiscussionComment === false) {
            $this->reactions👷DeleteForTeamDiscussionComment = new Internal\Operator\Reactions\DeleteForTeamDiscussionComment($this->browser, $this->authentication);
        }

        return $this->reactions👷DeleteForTeamDiscussionComment;
    }

    public function reactions👷ListForTeamDiscussionInOrg(): Internal\Operator\Reactions\ListForTeamDiscussionInOrg
    {
        if ($this->reactions👷ListForTeamDiscussionInOrg instanceof Internal\Operator\Reactions\ListForTeamDiscussionInOrg === false) {
            $this->reactions👷ListForTeamDiscussionInOrg = new Internal\Operator\Reactions\ListForTeamDiscussionInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions());
        }

        return $this->reactions👷ListForTeamDiscussionInOrg;
    }

    public function reactions👷ListForTeamDiscussionInOrgListing(): Internal\Operator\Reactions\ListForTeamDiscussionInOrgListing
    {
        if ($this->reactions👷ListForTeamDiscussionInOrgListing instanceof Internal\Operator\Reactions\ListForTeamDiscussionInOrgListing === false) {
            $this->reactions👷ListForTeamDiscussionInOrgListing = new Internal\Operator\Reactions\ListForTeamDiscussionInOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions());
        }

        return $this->reactions👷ListForTeamDiscussionInOrgListing;
    }

    public function reactions👷CreateForTeamDiscussionInOrg(): Internal\Operator\Reactions\CreateForTeamDiscussionInOrg
    {
        if ($this->reactions👷CreateForTeamDiscussionInOrg instanceof Internal\Operator\Reactions\CreateForTeamDiscussionInOrg === false) {
            $this->reactions👷CreateForTeamDiscussionInOrg = new Internal\Operator\Reactions\CreateForTeamDiscussionInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions());
        }

        return $this->reactions👷CreateForTeamDiscussionInOrg;
    }

    public function reactions👷DeleteForTeamDiscussion(): Internal\Operator\Reactions\DeleteForTeamDiscussion
    {
        if ($this->reactions👷DeleteForTeamDiscussion instanceof Internal\Operator\Reactions\DeleteForTeamDiscussion === false) {
            $this->reactions👷DeleteForTeamDiscussion = new Internal\Operator\Reactions\DeleteForTeamDiscussion($this->browser, $this->authentication);
        }

        return $this->reactions👷DeleteForTeamDiscussion;
    }

    public function teams👷UnlinkExternalIdpGroupFromTeamForOrg(): Internal\Operator\Teams\UnlinkExternalIdpGroupFromTeamForOrg
    {
        if ($this->teams👷UnlinkExternalIdpGroupFromTeamForOrg instanceof Internal\Operator\Teams\UnlinkExternalIdpGroupFromTeamForOrg === false) {
            $this->teams👷UnlinkExternalIdpGroupFromTeamForOrg = new Internal\Operator\Teams\UnlinkExternalIdpGroupFromTeamForOrg($this->browser, $this->authentication);
        }

        return $this->teams👷UnlinkExternalIdpGroupFromTeamForOrg;
    }

    public function teams👷LinkExternalIdpGroupToTeamForOrg(): Internal\Operator\Teams\LinkExternalIdpGroupToTeamForOrg
    {
        if ($this->teams👷LinkExternalIdpGroupToTeamForOrg instanceof Internal\Operator\Teams\LinkExternalIdpGroupToTeamForOrg === false) {
            $this->teams👷LinkExternalIdpGroupToTeamForOrg = new Internal\Operator\Teams\LinkExternalIdpGroupToTeamForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀ExternalGroups());
        }

        return $this->teams👷LinkExternalIdpGroupToTeamForOrg;
    }

    public function teams👷ListMembersInOrg(): Internal\Operator\Teams\ListMembersInOrg
    {
        if ($this->teams👷ListMembersInOrg instanceof Internal\Operator\Teams\ListMembersInOrg === false) {
            $this->teams👷ListMembersInOrg = new Internal\Operator\Teams\ListMembersInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Members());
        }

        return $this->teams👷ListMembersInOrg;
    }

    public function teams👷ListMembersInOrgListing(): Internal\Operator\Teams\ListMembersInOrgListing
    {
        if ($this->teams👷ListMembersInOrgListing instanceof Internal\Operator\Teams\ListMembersInOrgListing === false) {
            $this->teams👷ListMembersInOrgListing = new Internal\Operator\Teams\ListMembersInOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Members());
        }

        return $this->teams👷ListMembersInOrgListing;
    }

    public function teams👷GetMembershipForUserInOrg(): Internal\Operator\Teams\GetMembershipForUserInOrg
    {
        if ($this->teams👷GetMembershipForUserInOrg instanceof Internal\Operator\Teams\GetMembershipForUserInOrg === false) {
            $this->teams👷GetMembershipForUserInOrg = new Internal\Operator\Teams\GetMembershipForUserInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Memberships🌀Username());
        }

        return $this->teams👷GetMembershipForUserInOrg;
    }

    public function teams👷AddOrUpdateMembershipForUserInOrg(): Internal\Operator\Teams\AddOrUpdateMembershipForUserInOrg
    {
        if ($this->teams👷AddOrUpdateMembershipForUserInOrg instanceof Internal\Operator\Teams\AddOrUpdateMembershipForUserInOrg === false) {
            $this->teams👷AddOrUpdateMembershipForUserInOrg = new Internal\Operator\Teams\AddOrUpdateMembershipForUserInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Memberships🌀Username());
        }

        return $this->teams👷AddOrUpdateMembershipForUserInOrg;
    }

    public function teams👷RemoveMembershipForUserInOrg(): Internal\Operator\Teams\RemoveMembershipForUserInOrg
    {
        if ($this->teams👷RemoveMembershipForUserInOrg instanceof Internal\Operator\Teams\RemoveMembershipForUserInOrg === false) {
            $this->teams👷RemoveMembershipForUserInOrg = new Internal\Operator\Teams\RemoveMembershipForUserInOrg($this->browser, $this->authentication);
        }

        return $this->teams👷RemoveMembershipForUserInOrg;
    }

    public function teams👷ListProjectsInOrg(): Internal\Operator\Teams\ListProjectsInOrg
    {
        if ($this->teams👷ListProjectsInOrg instanceof Internal\Operator\Teams\ListProjectsInOrg === false) {
            $this->teams👷ListProjectsInOrg = new Internal\Operator\Teams\ListProjectsInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects());
        }

        return $this->teams👷ListProjectsInOrg;
    }

    public function teams👷ListProjectsInOrgListing(): Internal\Operator\Teams\ListProjectsInOrgListing
    {
        if ($this->teams👷ListProjectsInOrgListing instanceof Internal\Operator\Teams\ListProjectsInOrgListing === false) {
            $this->teams👷ListProjectsInOrgListing = new Internal\Operator\Teams\ListProjectsInOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects());
        }

        return $this->teams👷ListProjectsInOrgListing;
    }

    public function teams👷CheckPermissionsForProjectInOrg(): Internal\Operator\Teams\CheckPermissionsForProjectInOrg
    {
        if ($this->teams👷CheckPermissionsForProjectInOrg instanceof Internal\Operator\Teams\CheckPermissionsForProjectInOrg === false) {
            $this->teams👷CheckPermissionsForProjectInOrg = new Internal\Operator\Teams\CheckPermissionsForProjectInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects🌀ProjectId());
        }

        return $this->teams👷CheckPermissionsForProjectInOrg;
    }

    public function teams👷AddOrUpdateProjectPermissionsInOrg(): Internal\Operator\Teams\AddOrUpdateProjectPermissionsInOrg
    {
        if ($this->teams👷AddOrUpdateProjectPermissionsInOrg instanceof Internal\Operator\Teams\AddOrUpdateProjectPermissionsInOrg === false) {
            $this->teams👷AddOrUpdateProjectPermissionsInOrg = new Internal\Operator\Teams\AddOrUpdateProjectPermissionsInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects🌀ProjectId());
        }

        return $this->teams👷AddOrUpdateProjectPermissionsInOrg;
    }

    public function teams👷RemoveProjectInOrg(): Internal\Operator\Teams\RemoveProjectInOrg
    {
        if ($this->teams👷RemoveProjectInOrg instanceof Internal\Operator\Teams\RemoveProjectInOrg === false) {
            $this->teams👷RemoveProjectInOrg = new Internal\Operator\Teams\RemoveProjectInOrg($this->browser, $this->authentication);
        }

        return $this->teams👷RemoveProjectInOrg;
    }

    public function teams👷ListReposInOrg(): Internal\Operator\Teams\ListReposInOrg
    {
        if ($this->teams👷ListReposInOrg instanceof Internal\Operator\Teams\ListReposInOrg === false) {
            $this->teams👷ListReposInOrg = new Internal\Operator\Teams\ListReposInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos());
        }

        return $this->teams👷ListReposInOrg;
    }

    public function teams👷ListReposInOrgListing(): Internal\Operator\Teams\ListReposInOrgListing
    {
        if ($this->teams👷ListReposInOrgListing instanceof Internal\Operator\Teams\ListReposInOrgListing === false) {
            $this->teams👷ListReposInOrgListing = new Internal\Operator\Teams\ListReposInOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos());
        }

        return $this->teams👷ListReposInOrgListing;
    }

    public function teams👷CheckPermissionsForRepoInOrg(): Internal\Operator\Teams\CheckPermissionsForRepoInOrg
    {
        if ($this->teams👷CheckPermissionsForRepoInOrg instanceof Internal\Operator\Teams\CheckPermissionsForRepoInOrg === false) {
            $this->teams👷CheckPermissionsForRepoInOrg = new Internal\Operator\Teams\CheckPermissionsForRepoInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos🌀Owner🌀Repo());
        }

        return $this->teams👷CheckPermissionsForRepoInOrg;
    }

    public function teams👷AddOrUpdateRepoPermissionsInOrg(): Internal\Operator\Teams\AddOrUpdateRepoPermissionsInOrg
    {
        if ($this->teams👷AddOrUpdateRepoPermissionsInOrg instanceof Internal\Operator\Teams\AddOrUpdateRepoPermissionsInOrg === false) {
            $this->teams👷AddOrUpdateRepoPermissionsInOrg = new Internal\Operator\Teams\AddOrUpdateRepoPermissionsInOrg($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->teams👷AddOrUpdateRepoPermissionsInOrg;
    }

    public function teams👷RemoveRepoInOrg(): Internal\Operator\Teams\RemoveRepoInOrg
    {
        if ($this->teams👷RemoveRepoInOrg instanceof Internal\Operator\Teams\RemoveRepoInOrg === false) {
            $this->teams👷RemoveRepoInOrg = new Internal\Operator\Teams\RemoveRepoInOrg($this->browser, $this->authentication);
        }

        return $this->teams👷RemoveRepoInOrg;
    }

    public function teams👷ListChildInOrg(): Internal\Operator\Teams\ListChildInOrg
    {
        if ($this->teams👷ListChildInOrg instanceof Internal\Operator\Teams\ListChildInOrg === false) {
            $this->teams👷ListChildInOrg = new Internal\Operator\Teams\ListChildInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Teams());
        }

        return $this->teams👷ListChildInOrg;
    }

    public function teams👷ListChildInOrgListing(): Internal\Operator\Teams\ListChildInOrgListing
    {
        if ($this->teams👷ListChildInOrgListing instanceof Internal\Operator\Teams\ListChildInOrgListing === false) {
            $this->teams👷ListChildInOrgListing = new Internal\Operator\Teams\ListChildInOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Teams());
        }

        return $this->teams👷ListChildInOrgListing;
    }

    public function projects👷GetCard(): Internal\Operator\Projects\GetCard
    {
        if ($this->projects👷GetCard instanceof Internal\Operator\Projects\GetCard === false) {
            $this->projects👷GetCard = new Internal\Operator\Projects\GetCard($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CardId());
        }

        return $this->projects👷GetCard;
    }

    public function projects👷DeleteCard(): Internal\Operator\Projects\DeleteCard
    {
        if ($this->projects👷DeleteCard instanceof Internal\Operator\Projects\DeleteCard === false) {
            $this->projects👷DeleteCard = new Internal\Operator\Projects\DeleteCard($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CardId());
        }

        return $this->projects👷DeleteCard;
    }

    public function projects👷UpdateCard(): Internal\Operator\Projects\UpdateCard
    {
        if ($this->projects👷UpdateCard instanceof Internal\Operator\Projects\UpdateCard === false) {
            $this->projects👷UpdateCard = new Internal\Operator\Projects\UpdateCard($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CardId());
        }

        return $this->projects👷UpdateCard;
    }

    public function projects👷MoveCard(): Internal\Operator\Projects\MoveCard
    {
        if ($this->projects👷MoveCard instanceof Internal\Operator\Projects\MoveCard === false) {
            $this->projects👷MoveCard = new Internal\Operator\Projects\MoveCard($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CardId🌀Moves());
        }

        return $this->projects👷MoveCard;
    }

    public function projects👷GetColumn(): Internal\Operator\Projects\GetColumn
    {
        if ($this->projects👷GetColumn instanceof Internal\Operator\Projects\GetColumn === false) {
            $this->projects👷GetColumn = new Internal\Operator\Projects\GetColumn($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId());
        }

        return $this->projects👷GetColumn;
    }

    public function projects👷DeleteColumn(): Internal\Operator\Projects\DeleteColumn
    {
        if ($this->projects👷DeleteColumn instanceof Internal\Operator\Projects\DeleteColumn === false) {
            $this->projects👷DeleteColumn = new Internal\Operator\Projects\DeleteColumn($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId());
        }

        return $this->projects👷DeleteColumn;
    }

    public function projects👷UpdateColumn(): Internal\Operator\Projects\UpdateColumn
    {
        if ($this->projects👷UpdateColumn instanceof Internal\Operator\Projects\UpdateColumn === false) {
            $this->projects👷UpdateColumn = new Internal\Operator\Projects\UpdateColumn($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId());
        }

        return $this->projects👷UpdateColumn;
    }

    public function projects👷ListCards(): Internal\Operator\Projects\ListCards
    {
        if ($this->projects👷ListCards instanceof Internal\Operator\Projects\ListCards === false) {
            $this->projects👷ListCards = new Internal\Operator\Projects\ListCards($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId🌀Cards());
        }

        return $this->projects👷ListCards;
    }

    public function projects👷ListCardsListing(): Internal\Operator\Projects\ListCardsListing
    {
        if ($this->projects👷ListCardsListing instanceof Internal\Operator\Projects\ListCardsListing === false) {
            $this->projects👷ListCardsListing = new Internal\Operator\Projects\ListCardsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId🌀Cards());
        }

        return $this->projects👷ListCardsListing;
    }

    public function projects👷CreateCard(): Internal\Operator\Projects\CreateCard
    {
        if ($this->projects👷CreateCard instanceof Internal\Operator\Projects\CreateCard === false) {
            $this->projects👷CreateCard = new Internal\Operator\Projects\CreateCard($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId🌀Cards());
        }

        return $this->projects👷CreateCard;
    }

    public function projects👷MoveColumn(): Internal\Operator\Projects\MoveColumn
    {
        if ($this->projects👷MoveColumn instanceof Internal\Operator\Projects\MoveColumn === false) {
            $this->projects👷MoveColumn = new Internal\Operator\Projects\MoveColumn($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId🌀Moves());
        }

        return $this->projects👷MoveColumn;
    }

    public function projects👷Get(): Internal\Operator\Projects\Get
    {
        if ($this->projects👷Get instanceof Internal\Operator\Projects\Get === false) {
            $this->projects👷Get = new Internal\Operator\Projects\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId());
        }

        return $this->projects👷Get;
    }

    public function projects👷Delete(): Internal\Operator\Projects\Delete
    {
        if ($this->projects👷Delete instanceof Internal\Operator\Projects\Delete === false) {
            $this->projects👷Delete = new Internal\Operator\Projects\Delete($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId());
        }

        return $this->projects👷Delete;
    }

    public function projects👷Update(): Internal\Operator\Projects\Update
    {
        if ($this->projects👷Update instanceof Internal\Operator\Projects\Update === false) {
            $this->projects👷Update = new Internal\Operator\Projects\Update($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId());
        }

        return $this->projects👷Update;
    }

    public function projects👷ListCollaborators(): Internal\Operator\Projects\ListCollaborators
    {
        if ($this->projects👷ListCollaborators instanceof Internal\Operator\Projects\ListCollaborators === false) {
            $this->projects👷ListCollaborators = new Internal\Operator\Projects\ListCollaborators($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId🌀Collaborators());
        }

        return $this->projects👷ListCollaborators;
    }

    public function projects👷ListCollaboratorsListing(): Internal\Operator\Projects\ListCollaboratorsListing
    {
        if ($this->projects👷ListCollaboratorsListing instanceof Internal\Operator\Projects\ListCollaboratorsListing === false) {
            $this->projects👷ListCollaboratorsListing = new Internal\Operator\Projects\ListCollaboratorsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId🌀Collaborators());
        }

        return $this->projects👷ListCollaboratorsListing;
    }

    public function projects👷AddCollaborator(): Internal\Operator\Projects\AddCollaborator
    {
        if ($this->projects👷AddCollaborator instanceof Internal\Operator\Projects\AddCollaborator === false) {
            $this->projects👷AddCollaborator = new Internal\Operator\Projects\AddCollaborator($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId🌀Collaborators🌀Username());
        }

        return $this->projects👷AddCollaborator;
    }

    public function projects👷RemoveCollaborator(): Internal\Operator\Projects\RemoveCollaborator
    {
        if ($this->projects👷RemoveCollaborator instanceof Internal\Operator\Projects\RemoveCollaborator === false) {
            $this->projects👷RemoveCollaborator = new Internal\Operator\Projects\RemoveCollaborator($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId🌀Collaborators🌀Username());
        }

        return $this->projects👷RemoveCollaborator;
    }

    public function projects👷GetPermissionForUser(): Internal\Operator\Projects\GetPermissionForUser
    {
        if ($this->projects👷GetPermissionForUser instanceof Internal\Operator\Projects\GetPermissionForUser === false) {
            $this->projects👷GetPermissionForUser = new Internal\Operator\Projects\GetPermissionForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId🌀Collaborators🌀Username🌀Permission());
        }

        return $this->projects👷GetPermissionForUser;
    }

    public function projects👷ListColumns(): Internal\Operator\Projects\ListColumns
    {
        if ($this->projects👷ListColumns instanceof Internal\Operator\Projects\ListColumns === false) {
            $this->projects👷ListColumns = new Internal\Operator\Projects\ListColumns($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId🌀Columns());
        }

        return $this->projects👷ListColumns;
    }

    public function projects👷ListColumnsListing(): Internal\Operator\Projects\ListColumnsListing
    {
        if ($this->projects👷ListColumnsListing instanceof Internal\Operator\Projects\ListColumnsListing === false) {
            $this->projects👷ListColumnsListing = new Internal\Operator\Projects\ListColumnsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId🌀Columns());
        }

        return $this->projects👷ListColumnsListing;
    }

    public function projects👷CreateColumn(): Internal\Operator\Projects\CreateColumn
    {
        if ($this->projects👷CreateColumn instanceof Internal\Operator\Projects\CreateColumn === false) {
            $this->projects👷CreateColumn = new Internal\Operator\Projects\CreateColumn($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId🌀Columns());
        }

        return $this->projects👷CreateColumn;
    }

    public function rateLimit👷Get(): Internal\Operator\RateLimit\Get
    {
        if ($this->rateLimit👷Get instanceof Internal\Operator\RateLimit\Get === false) {
            $this->rateLimit👷Get = new Internal\Operator\RateLimit\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀RateLimit());
        }

        return $this->rateLimit👷Get;
    }

    public function repos👷Get(): Internal\Operator\Repos\Get
    {
        if ($this->repos👷Get instanceof Internal\Operator\Repos\Get === false) {
            $this->repos👷Get = new Internal\Operator\Repos\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo());
        }

        return $this->repos👷Get;
    }

    public function repos👷Delete(): Internal\Operator\Repos\Delete
    {
        if ($this->repos👷Delete instanceof Internal\Operator\Repos\Delete === false) {
            $this->repos👷Delete = new Internal\Operator\Repos\Delete($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo());
        }

        return $this->repos👷Delete;
    }

    public function repos👷Update(): Internal\Operator\Repos\Update
    {
        if ($this->repos👷Update instanceof Internal\Operator\Repos\Update === false) {
            $this->repos👷Update = new Internal\Operator\Repos\Update($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo());
        }

        return $this->repos👷Update;
    }

    public function actions👷ListArtifactsForRepo(): Internal\Operator\Actions\ListArtifactsForRepo
    {
        if ($this->actions👷ListArtifactsForRepo instanceof Internal\Operator\Actions\ListArtifactsForRepo === false) {
            $this->actions👷ListArtifactsForRepo = new Internal\Operator\Actions\ListArtifactsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts());
        }

        return $this->actions👷ListArtifactsForRepo;
    }

    public function actions👷GetArtifact(): Internal\Operator\Actions\GetArtifact
    {
        if ($this->actions👷GetArtifact instanceof Internal\Operator\Actions\GetArtifact === false) {
            $this->actions👷GetArtifact = new Internal\Operator\Actions\GetArtifact($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId());
        }

        return $this->actions👷GetArtifact;
    }

    public function actions👷DeleteArtifact(): Internal\Operator\Actions\DeleteArtifact
    {
        if ($this->actions👷DeleteArtifact instanceof Internal\Operator\Actions\DeleteArtifact === false) {
            $this->actions👷DeleteArtifact = new Internal\Operator\Actions\DeleteArtifact($this->browser, $this->authentication);
        }

        return $this->actions👷DeleteArtifact;
    }

    public function actions👷DownloadArtifact(): Internal\Operator\Actions\DownloadArtifact
    {
        if ($this->actions👷DownloadArtifact instanceof Internal\Operator\Actions\DownloadArtifact === false) {
            $this->actions👷DownloadArtifact = new Internal\Operator\Actions\DownloadArtifact($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId🌀ArchiveFormat());
        }

        return $this->actions👷DownloadArtifact;
    }

    public function actions👷DownloadArtifactStreaming(): Internal\Operator\Actions\DownloadArtifactStreaming
    {
        if ($this->actions👷DownloadArtifactStreaming instanceof Internal\Operator\Actions\DownloadArtifactStreaming === false) {
            $this->actions👷DownloadArtifactStreaming = new Internal\Operator\Actions\DownloadArtifactStreaming($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId🌀ArchiveFormat());
        }

        return $this->actions👷DownloadArtifactStreaming;
    }

    public function actions👷GetJobForWorkflowRun(): Internal\Operator\Actions\GetJobForWorkflowRun
    {
        if ($this->actions👷GetJobForWorkflowRun instanceof Internal\Operator\Actions\GetJobForWorkflowRun === false) {
            $this->actions👷GetJobForWorkflowRun = new Internal\Operator\Actions\GetJobForWorkflowRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId());
        }

        return $this->actions👷GetJobForWorkflowRun;
    }

    public function actions👷DownloadJobLogsForWorkflowRun(): Internal\Operator\Actions\DownloadJobLogsForWorkflowRun
    {
        if ($this->actions👷DownloadJobLogsForWorkflowRun instanceof Internal\Operator\Actions\DownloadJobLogsForWorkflowRun === false) {
            $this->actions👷DownloadJobLogsForWorkflowRun = new Internal\Operator\Actions\DownloadJobLogsForWorkflowRun($this->browser, $this->authentication);
        }

        return $this->actions👷DownloadJobLogsForWorkflowRun;
    }

    public function actions👷DownloadJobLogsForWorkflowRunStreaming(): Internal\Operator\Actions\DownloadJobLogsForWorkflowRunStreaming
    {
        if ($this->actions👷DownloadJobLogsForWorkflowRunStreaming instanceof Internal\Operator\Actions\DownloadJobLogsForWorkflowRunStreaming === false) {
            $this->actions👷DownloadJobLogsForWorkflowRunStreaming = new Internal\Operator\Actions\DownloadJobLogsForWorkflowRunStreaming($this->browser, $this->authentication);
        }

        return $this->actions👷DownloadJobLogsForWorkflowRunStreaming;
    }

    public function actions👷ListRepoOrganizationSecrets(): Internal\Operator\Actions\ListRepoOrganizationSecrets
    {
        if ($this->actions👷ListRepoOrganizationSecrets instanceof Internal\Operator\Actions\ListRepoOrganizationSecrets === false) {
            $this->actions👷ListRepoOrganizationSecrets = new Internal\Operator\Actions\ListRepoOrganizationSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀OrganizationSecrets());
        }

        return $this->actions👷ListRepoOrganizationSecrets;
    }

    public function actions👷GetGithubActionsPermissionsRepository(): Internal\Operator\Actions\GetGithubActionsPermissionsRepository
    {
        if ($this->actions👷GetGithubActionsPermissionsRepository instanceof Internal\Operator\Actions\GetGithubActionsPermissionsRepository === false) {
            $this->actions👷GetGithubActionsPermissionsRepository = new Internal\Operator\Actions\GetGithubActionsPermissionsRepository($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions());
        }

        return $this->actions👷GetGithubActionsPermissionsRepository;
    }

    public function actions👷SetGithubActionsPermissionsRepository(): Internal\Operator\Actions\SetGithubActionsPermissionsRepository
    {
        if ($this->actions👷SetGithubActionsPermissionsRepository instanceof Internal\Operator\Actions\SetGithubActionsPermissionsRepository === false) {
            $this->actions👷SetGithubActionsPermissionsRepository = new Internal\Operator\Actions\SetGithubActionsPermissionsRepository($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷SetGithubActionsPermissionsRepository;
    }

    public function actions👷GetAllowedActionsRepository(): Internal\Operator\Actions\GetAllowedActionsRepository
    {
        if ($this->actions👷GetAllowedActionsRepository instanceof Internal\Operator\Actions\GetAllowedActionsRepository === false) {
            $this->actions👷GetAllowedActionsRepository = new Internal\Operator\Actions\GetAllowedActionsRepository($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀SelectedActions());
        }

        return $this->actions👷GetAllowedActionsRepository;
    }

    public function actions👷SetAllowedActionsRepository(): Internal\Operator\Actions\SetAllowedActionsRepository
    {
        if ($this->actions👷SetAllowedActionsRepository instanceof Internal\Operator\Actions\SetAllowedActionsRepository === false) {
            $this->actions👷SetAllowedActionsRepository = new Internal\Operator\Actions\SetAllowedActionsRepository($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷SetAllowedActionsRepository;
    }

    public function actions👷ListSelfHostedRunnersForRepo(): Internal\Operator\Actions\ListSelfHostedRunnersForRepo
    {
        if ($this->actions👷ListSelfHostedRunnersForRepo instanceof Internal\Operator\Actions\ListSelfHostedRunnersForRepo === false) {
            $this->actions👷ListSelfHostedRunnersForRepo = new Internal\Operator\Actions\ListSelfHostedRunnersForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners());
        }

        return $this->actions👷ListSelfHostedRunnersForRepo;
    }

    public function actions👷ListRunnerApplicationsForRepo(): Internal\Operator\Actions\ListRunnerApplicationsForRepo
    {
        if ($this->actions👷ListRunnerApplicationsForRepo instanceof Internal\Operator\Actions\ListRunnerApplicationsForRepo === false) {
            $this->actions👷ListRunnerApplicationsForRepo = new Internal\Operator\Actions\ListRunnerApplicationsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀Downloads());
        }

        return $this->actions👷ListRunnerApplicationsForRepo;
    }

    public function actions👷CreateRegistrationTokenForRepo(): Internal\Operator\Actions\CreateRegistrationTokenForRepo
    {
        if ($this->actions👷CreateRegistrationTokenForRepo instanceof Internal\Operator\Actions\CreateRegistrationTokenForRepo === false) {
            $this->actions👷CreateRegistrationTokenForRepo = new Internal\Operator\Actions\CreateRegistrationTokenForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RegistrationToken());
        }

        return $this->actions👷CreateRegistrationTokenForRepo;
    }

    public function actions👷CreateRemoveTokenForRepo(): Internal\Operator\Actions\CreateRemoveTokenForRepo
    {
        if ($this->actions👷CreateRemoveTokenForRepo instanceof Internal\Operator\Actions\CreateRemoveTokenForRepo === false) {
            $this->actions👷CreateRemoveTokenForRepo = new Internal\Operator\Actions\CreateRemoveTokenForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RemoveToken());
        }

        return $this->actions👷CreateRemoveTokenForRepo;
    }

    public function actions👷GetSelfHostedRunnerForRepo(): Internal\Operator\Actions\GetSelfHostedRunnerForRepo
    {
        if ($this->actions👷GetSelfHostedRunnerForRepo instanceof Internal\Operator\Actions\GetSelfHostedRunnerForRepo === false) {
            $this->actions👷GetSelfHostedRunnerForRepo = new Internal\Operator\Actions\GetSelfHostedRunnerForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId());
        }

        return $this->actions👷GetSelfHostedRunnerForRepo;
    }

    public function actions👷DeleteSelfHostedRunnerFromRepo(): Internal\Operator\Actions\DeleteSelfHostedRunnerFromRepo
    {
        if ($this->actions👷DeleteSelfHostedRunnerFromRepo instanceof Internal\Operator\Actions\DeleteSelfHostedRunnerFromRepo === false) {
            $this->actions👷DeleteSelfHostedRunnerFromRepo = new Internal\Operator\Actions\DeleteSelfHostedRunnerFromRepo($this->browser, $this->authentication);
        }

        return $this->actions👷DeleteSelfHostedRunnerFromRepo;
    }

    public function actions👷ListWorkflowRunsForRepo(): Internal\Operator\Actions\ListWorkflowRunsForRepo
    {
        if ($this->actions👷ListWorkflowRunsForRepo instanceof Internal\Operator\Actions\ListWorkflowRunsForRepo === false) {
            $this->actions👷ListWorkflowRunsForRepo = new Internal\Operator\Actions\ListWorkflowRunsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs());
        }

        return $this->actions👷ListWorkflowRunsForRepo;
    }

    public function actions👷GetWorkflowRun(): Internal\Operator\Actions\GetWorkflowRun
    {
        if ($this->actions👷GetWorkflowRun instanceof Internal\Operator\Actions\GetWorkflowRun === false) {
            $this->actions👷GetWorkflowRun = new Internal\Operator\Actions\GetWorkflowRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId());
        }

        return $this->actions👷GetWorkflowRun;
    }

    public function actions👷DeleteWorkflowRun(): Internal\Operator\Actions\DeleteWorkflowRun
    {
        if ($this->actions👷DeleteWorkflowRun instanceof Internal\Operator\Actions\DeleteWorkflowRun === false) {
            $this->actions👷DeleteWorkflowRun = new Internal\Operator\Actions\DeleteWorkflowRun($this->browser, $this->authentication);
        }

        return $this->actions👷DeleteWorkflowRun;
    }

    public function actions👷ListWorkflowRunArtifacts(): Internal\Operator\Actions\ListWorkflowRunArtifacts
    {
        if ($this->actions👷ListWorkflowRunArtifacts instanceof Internal\Operator\Actions\ListWorkflowRunArtifacts === false) {
            $this->actions👷ListWorkflowRunArtifacts = new Internal\Operator\Actions\ListWorkflowRunArtifacts($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Artifacts());
        }

        return $this->actions👷ListWorkflowRunArtifacts;
    }

    public function actions👷GetWorkflowRunAttempt(): Internal\Operator\Actions\GetWorkflowRunAttempt
    {
        if ($this->actions👷GetWorkflowRunAttempt instanceof Internal\Operator\Actions\GetWorkflowRunAttempt === false) {
            $this->actions👷GetWorkflowRunAttempt = new Internal\Operator\Actions\GetWorkflowRunAttempt($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber());
        }

        return $this->actions👷GetWorkflowRunAttempt;
    }

    public function actions👷ListJobsForWorkflowRunAttempt(): Internal\Operator\Actions\ListJobsForWorkflowRunAttempt
    {
        if ($this->actions👷ListJobsForWorkflowRunAttempt instanceof Internal\Operator\Actions\ListJobsForWorkflowRunAttempt === false) {
            $this->actions👷ListJobsForWorkflowRunAttempt = new Internal\Operator\Actions\ListJobsForWorkflowRunAttempt($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber🌀Jobs());
        }

        return $this->actions👷ListJobsForWorkflowRunAttempt;
    }

    public function actions👷DownloadWorkflowRunAttemptLogs(): Internal\Operator\Actions\DownloadWorkflowRunAttemptLogs
    {
        if ($this->actions👷DownloadWorkflowRunAttemptLogs instanceof Internal\Operator\Actions\DownloadWorkflowRunAttemptLogs === false) {
            $this->actions👷DownloadWorkflowRunAttemptLogs = new Internal\Operator\Actions\DownloadWorkflowRunAttemptLogs($this->browser, $this->authentication);
        }

        return $this->actions👷DownloadWorkflowRunAttemptLogs;
    }

    public function actions👷DownloadWorkflowRunAttemptLogsStreaming(): Internal\Operator\Actions\DownloadWorkflowRunAttemptLogsStreaming
    {
        if ($this->actions👷DownloadWorkflowRunAttemptLogsStreaming instanceof Internal\Operator\Actions\DownloadWorkflowRunAttemptLogsStreaming === false) {
            $this->actions👷DownloadWorkflowRunAttemptLogsStreaming = new Internal\Operator\Actions\DownloadWorkflowRunAttemptLogsStreaming($this->browser, $this->authentication);
        }

        return $this->actions👷DownloadWorkflowRunAttemptLogsStreaming;
    }

    public function actions👷CancelWorkflowRun(): Internal\Operator\Actions\CancelWorkflowRun
    {
        if ($this->actions👷CancelWorkflowRun instanceof Internal\Operator\Actions\CancelWorkflowRun === false) {
            $this->actions👷CancelWorkflowRun = new Internal\Operator\Actions\CancelWorkflowRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Cancel());
        }

        return $this->actions👷CancelWorkflowRun;
    }

    public function actions👷ForceCancelWorkflowRun(): Internal\Operator\Actions\ForceCancelWorkflowRun
    {
        if ($this->actions👷ForceCancelWorkflowRun instanceof Internal\Operator\Actions\ForceCancelWorkflowRun === false) {
            $this->actions👷ForceCancelWorkflowRun = new Internal\Operator\Actions\ForceCancelWorkflowRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀ForceCancel());
        }

        return $this->actions👷ForceCancelWorkflowRun;
    }

    public function actions👷ListJobsForWorkflowRun(): Internal\Operator\Actions\ListJobsForWorkflowRun
    {
        if ($this->actions👷ListJobsForWorkflowRun instanceof Internal\Operator\Actions\ListJobsForWorkflowRun === false) {
            $this->actions👷ListJobsForWorkflowRun = new Internal\Operator\Actions\ListJobsForWorkflowRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Jobs());
        }

        return $this->actions👷ListJobsForWorkflowRun;
    }

    public function actions👷DownloadWorkflowRunLogs(): Internal\Operator\Actions\DownloadWorkflowRunLogs
    {
        if ($this->actions👷DownloadWorkflowRunLogs instanceof Internal\Operator\Actions\DownloadWorkflowRunLogs === false) {
            $this->actions👷DownloadWorkflowRunLogs = new Internal\Operator\Actions\DownloadWorkflowRunLogs($this->browser, $this->authentication);
        }

        return $this->actions👷DownloadWorkflowRunLogs;
    }

    public function actions👷DownloadWorkflowRunLogsStreaming(): Internal\Operator\Actions\DownloadWorkflowRunLogsStreaming
    {
        if ($this->actions👷DownloadWorkflowRunLogsStreaming instanceof Internal\Operator\Actions\DownloadWorkflowRunLogsStreaming === false) {
            $this->actions👷DownloadWorkflowRunLogsStreaming = new Internal\Operator\Actions\DownloadWorkflowRunLogsStreaming($this->browser, $this->authentication);
        }

        return $this->actions👷DownloadWorkflowRunLogsStreaming;
    }

    public function actions👷DeleteWorkflowRunLogs(): Internal\Operator\Actions\DeleteWorkflowRunLogs
    {
        if ($this->actions👷DeleteWorkflowRunLogs instanceof Internal\Operator\Actions\DeleteWorkflowRunLogs === false) {
            $this->actions👷DeleteWorkflowRunLogs = new Internal\Operator\Actions\DeleteWorkflowRunLogs($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Logs());
        }

        return $this->actions👷DeleteWorkflowRunLogs;
    }

    public function actions👷ReRunWorkflow(): Internal\Operator\Actions\ReRunWorkflow
    {
        if ($this->actions👷ReRunWorkflow instanceof Internal\Operator\Actions\ReRunWorkflow === false) {
            $this->actions👷ReRunWorkflow = new Internal\Operator\Actions\ReRunWorkflow($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Rerun());
        }

        return $this->actions👷ReRunWorkflow;
    }

    public function actions👷GetWorkflowRunUsage(): Internal\Operator\Actions\GetWorkflowRunUsage
    {
        if ($this->actions👷GetWorkflowRunUsage instanceof Internal\Operator\Actions\GetWorkflowRunUsage === false) {
            $this->actions👷GetWorkflowRunUsage = new Internal\Operator\Actions\GetWorkflowRunUsage($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Timing());
        }

        return $this->actions👷GetWorkflowRunUsage;
    }

    public function actions👷ListRepoSecrets(): Internal\Operator\Actions\ListRepoSecrets
    {
        if ($this->actions👷ListRepoSecrets instanceof Internal\Operator\Actions\ListRepoSecrets === false) {
            $this->actions👷ListRepoSecrets = new Internal\Operator\Actions\ListRepoSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets());
        }

        return $this->actions👷ListRepoSecrets;
    }

    public function actions👷GetRepoPublicKey(): Internal\Operator\Actions\GetRepoPublicKey
    {
        if ($this->actions👷GetRepoPublicKey instanceof Internal\Operator\Actions\GetRepoPublicKey === false) {
            $this->actions👷GetRepoPublicKey = new Internal\Operator\Actions\GetRepoPublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀PublicKey());
        }

        return $this->actions👷GetRepoPublicKey;
    }

    public function actions👷GetRepoSecret(): Internal\Operator\Actions\GetRepoSecret
    {
        if ($this->actions👷GetRepoSecret instanceof Internal\Operator\Actions\GetRepoSecret === false) {
            $this->actions👷GetRepoSecret = new Internal\Operator\Actions\GetRepoSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀SecretName());
        }

        return $this->actions👷GetRepoSecret;
    }

    public function actions👷CreateOrUpdateRepoSecret(): Internal\Operator\Actions\CreateOrUpdateRepoSecret
    {
        if ($this->actions👷CreateOrUpdateRepoSecret instanceof Internal\Operator\Actions\CreateOrUpdateRepoSecret === false) {
            $this->actions👷CreateOrUpdateRepoSecret = new Internal\Operator\Actions\CreateOrUpdateRepoSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀SecretName());
        }

        return $this->actions👷CreateOrUpdateRepoSecret;
    }

    public function actions👷DeleteRepoSecret(): Internal\Operator\Actions\DeleteRepoSecret
    {
        if ($this->actions👷DeleteRepoSecret instanceof Internal\Operator\Actions\DeleteRepoSecret === false) {
            $this->actions👷DeleteRepoSecret = new Internal\Operator\Actions\DeleteRepoSecret($this->browser, $this->authentication);
        }

        return $this->actions👷DeleteRepoSecret;
    }

    public function actions👷ListRepoWorkflows(): Internal\Operator\Actions\ListRepoWorkflows
    {
        if ($this->actions👷ListRepoWorkflows instanceof Internal\Operator\Actions\ListRepoWorkflows === false) {
            $this->actions👷ListRepoWorkflows = new Internal\Operator\Actions\ListRepoWorkflows($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows());
        }

        return $this->actions👷ListRepoWorkflows;
    }

    public function actions👷GetWorkflow(): Internal\Operator\Actions\GetWorkflow
    {
        if ($this->actions👷GetWorkflow instanceof Internal\Operator\Actions\GetWorkflow === false) {
            $this->actions👷GetWorkflow = new Internal\Operator\Actions\GetWorkflow($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId());
        }

        return $this->actions👷GetWorkflow;
    }

    public function actions👷DisableWorkflow(): Internal\Operator\Actions\DisableWorkflow
    {
        if ($this->actions👷DisableWorkflow instanceof Internal\Operator\Actions\DisableWorkflow === false) {
            $this->actions👷DisableWorkflow = new Internal\Operator\Actions\DisableWorkflow($this->browser, $this->authentication);
        }

        return $this->actions👷DisableWorkflow;
    }

    public function actions👷CreateWorkflowDispatch(): Internal\Operator\Actions\CreateWorkflowDispatch
    {
        if ($this->actions👷CreateWorkflowDispatch instanceof Internal\Operator\Actions\CreateWorkflowDispatch === false) {
            $this->actions👷CreateWorkflowDispatch = new Internal\Operator\Actions\CreateWorkflowDispatch($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷CreateWorkflowDispatch;
    }

    public function actions👷EnableWorkflow(): Internal\Operator\Actions\EnableWorkflow
    {
        if ($this->actions👷EnableWorkflow instanceof Internal\Operator\Actions\EnableWorkflow === false) {
            $this->actions👷EnableWorkflow = new Internal\Operator\Actions\EnableWorkflow($this->browser, $this->authentication);
        }

        return $this->actions👷EnableWorkflow;
    }

    public function actions👷ListWorkflowRuns(): Internal\Operator\Actions\ListWorkflowRuns
    {
        if ($this->actions👷ListWorkflowRuns instanceof Internal\Operator\Actions\ListWorkflowRuns === false) {
            $this->actions👷ListWorkflowRuns = new Internal\Operator\Actions\ListWorkflowRuns($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Runs());
        }

        return $this->actions👷ListWorkflowRuns;
    }

    public function actions👷GetWorkflowUsage(): Internal\Operator\Actions\GetWorkflowUsage
    {
        if ($this->actions👷GetWorkflowUsage instanceof Internal\Operator\Actions\GetWorkflowUsage === false) {
            $this->actions👷GetWorkflowUsage = new Internal\Operator\Actions\GetWorkflowUsage($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Timing());
        }

        return $this->actions👷GetWorkflowUsage;
    }

    public function issues👷ListAssignees(): Internal\Operator\Issues\ListAssignees
    {
        if ($this->issues👷ListAssignees instanceof Internal\Operator\Issues\ListAssignees === false) {
            $this->issues👷ListAssignees = new Internal\Operator\Issues\ListAssignees($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Assignees());
        }

        return $this->issues👷ListAssignees;
    }

    public function issues👷ListAssigneesListing(): Internal\Operator\Issues\ListAssigneesListing
    {
        if ($this->issues👷ListAssigneesListing instanceof Internal\Operator\Issues\ListAssigneesListing === false) {
            $this->issues👷ListAssigneesListing = new Internal\Operator\Issues\ListAssigneesListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Assignees());
        }

        return $this->issues👷ListAssigneesListing;
    }

    public function issues👷CheckUserCanBeAssigned(): Internal\Operator\Issues\CheckUserCanBeAssigned
    {
        if ($this->issues👷CheckUserCanBeAssigned instanceof Internal\Operator\Issues\CheckUserCanBeAssigned === false) {
            $this->issues👷CheckUserCanBeAssigned = new Internal\Operator\Issues\CheckUserCanBeAssigned($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Assignees🌀Assignee());
        }

        return $this->issues👷CheckUserCanBeAssigned;
    }

    public function repos👷ListAutolinks(): Internal\Operator\Repos\ListAutolinks
    {
        if ($this->repos👷ListAutolinks instanceof Internal\Operator\Repos\ListAutolinks === false) {
            $this->repos👷ListAutolinks = new Internal\Operator\Repos\ListAutolinks($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Autolinks());
        }

        return $this->repos👷ListAutolinks;
    }

    public function repos👷CreateAutolink(): Internal\Operator\Repos\CreateAutolink
    {
        if ($this->repos👷CreateAutolink instanceof Internal\Operator\Repos\CreateAutolink === false) {
            $this->repos👷CreateAutolink = new Internal\Operator\Repos\CreateAutolink($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Autolinks());
        }

        return $this->repos👷CreateAutolink;
    }

    public function repos👷GetAutolink(): Internal\Operator\Repos\GetAutolink
    {
        if ($this->repos👷GetAutolink instanceof Internal\Operator\Repos\GetAutolink === false) {
            $this->repos👷GetAutolink = new Internal\Operator\Repos\GetAutolink($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Autolinks🌀AutolinkId());
        }

        return $this->repos👷GetAutolink;
    }

    public function repos👷DeleteAutolink(): Internal\Operator\Repos\DeleteAutolink
    {
        if ($this->repos👷DeleteAutolink instanceof Internal\Operator\Repos\DeleteAutolink === false) {
            $this->repos👷DeleteAutolink = new Internal\Operator\Repos\DeleteAutolink($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Autolinks🌀AutolinkId());
        }

        return $this->repos👷DeleteAutolink;
    }

    public function repos👷ListBranches(): Internal\Operator\Repos\ListBranches
    {
        if ($this->repos👷ListBranches instanceof Internal\Operator\Repos\ListBranches === false) {
            $this->repos👷ListBranches = new Internal\Operator\Repos\ListBranches($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches());
        }

        return $this->repos👷ListBranches;
    }

    public function repos👷ListBranchesListing(): Internal\Operator\Repos\ListBranchesListing
    {
        if ($this->repos👷ListBranchesListing instanceof Internal\Operator\Repos\ListBranchesListing === false) {
            $this->repos👷ListBranchesListing = new Internal\Operator\Repos\ListBranchesListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches());
        }

        return $this->repos👷ListBranchesListing;
    }

    public function repos👷GetBranch(): Internal\Operator\Repos\GetBranch
    {
        if ($this->repos👷GetBranch instanceof Internal\Operator\Repos\GetBranch === false) {
            $this->repos👷GetBranch = new Internal\Operator\Repos\GetBranch($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch());
        }

        return $this->repos👷GetBranch;
    }

    public function repos👷GetBranchProtection(): Internal\Operator\Repos\GetBranchProtection
    {
        if ($this->repos👷GetBranchProtection instanceof Internal\Operator\Repos\GetBranchProtection === false) {
            $this->repos👷GetBranchProtection = new Internal\Operator\Repos\GetBranchProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection());
        }

        return $this->repos👷GetBranchProtection;
    }

    public function repos👷UpdateBranchProtection(): Internal\Operator\Repos\UpdateBranchProtection
    {
        if ($this->repos👷UpdateBranchProtection instanceof Internal\Operator\Repos\UpdateBranchProtection === false) {
            $this->repos👷UpdateBranchProtection = new Internal\Operator\Repos\UpdateBranchProtection($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection());
        }

        return $this->repos👷UpdateBranchProtection;
    }

    public function repos👷DeleteBranchProtection(): Internal\Operator\Repos\DeleteBranchProtection
    {
        if ($this->repos👷DeleteBranchProtection instanceof Internal\Operator\Repos\DeleteBranchProtection === false) {
            $this->repos👷DeleteBranchProtection = new Internal\Operator\Repos\DeleteBranchProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection());
        }

        return $this->repos👷DeleteBranchProtection;
    }

    public function repos👷GetAdminBranchProtection(): Internal\Operator\Repos\GetAdminBranchProtection
    {
        if ($this->repos👷GetAdminBranchProtection instanceof Internal\Operator\Repos\GetAdminBranchProtection === false) {
            $this->repos👷GetAdminBranchProtection = new Internal\Operator\Repos\GetAdminBranchProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀EnforceAdmins());
        }

        return $this->repos👷GetAdminBranchProtection;
    }

    public function repos👷SetAdminBranchProtection(): Internal\Operator\Repos\SetAdminBranchProtection
    {
        if ($this->repos👷SetAdminBranchProtection instanceof Internal\Operator\Repos\SetAdminBranchProtection === false) {
            $this->repos👷SetAdminBranchProtection = new Internal\Operator\Repos\SetAdminBranchProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀EnforceAdmins());
        }

        return $this->repos👷SetAdminBranchProtection;
    }

    public function repos👷DeleteAdminBranchProtection(): Internal\Operator\Repos\DeleteAdminBranchProtection
    {
        if ($this->repos👷DeleteAdminBranchProtection instanceof Internal\Operator\Repos\DeleteAdminBranchProtection === false) {
            $this->repos👷DeleteAdminBranchProtection = new Internal\Operator\Repos\DeleteAdminBranchProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀EnforceAdmins());
        }

        return $this->repos👷DeleteAdminBranchProtection;
    }

    public function repos👷GetPullRequestReviewProtection(): Internal\Operator\Repos\GetPullRequestReviewProtection
    {
        if ($this->repos👷GetPullRequestReviewProtection instanceof Internal\Operator\Repos\GetPullRequestReviewProtection === false) {
            $this->repos👷GetPullRequestReviewProtection = new Internal\Operator\Repos\GetPullRequestReviewProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredPullRequestReviews());
        }

        return $this->repos👷GetPullRequestReviewProtection;
    }

    public function repos👷DeletePullRequestReviewProtection(): Internal\Operator\Repos\DeletePullRequestReviewProtection
    {
        if ($this->repos👷DeletePullRequestReviewProtection instanceof Internal\Operator\Repos\DeletePullRequestReviewProtection === false) {
            $this->repos👷DeletePullRequestReviewProtection = new Internal\Operator\Repos\DeletePullRequestReviewProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredPullRequestReviews());
        }

        return $this->repos👷DeletePullRequestReviewProtection;
    }

    public function repos👷UpdatePullRequestReviewProtection(): Internal\Operator\Repos\UpdatePullRequestReviewProtection
    {
        if ($this->repos👷UpdatePullRequestReviewProtection instanceof Internal\Operator\Repos\UpdatePullRequestReviewProtection === false) {
            $this->repos👷UpdatePullRequestReviewProtection = new Internal\Operator\Repos\UpdatePullRequestReviewProtection($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredPullRequestReviews());
        }

        return $this->repos👷UpdatePullRequestReviewProtection;
    }

    public function repos👷GetCommitSignatureProtection(): Internal\Operator\Repos\GetCommitSignatureProtection
    {
        if ($this->repos👷GetCommitSignatureProtection instanceof Internal\Operator\Repos\GetCommitSignatureProtection === false) {
            $this->repos👷GetCommitSignatureProtection = new Internal\Operator\Repos\GetCommitSignatureProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredSignatures());
        }

        return $this->repos👷GetCommitSignatureProtection;
    }

    public function repos👷CreateCommitSignatureProtection(): Internal\Operator\Repos\CreateCommitSignatureProtection
    {
        if ($this->repos👷CreateCommitSignatureProtection instanceof Internal\Operator\Repos\CreateCommitSignatureProtection === false) {
            $this->repos👷CreateCommitSignatureProtection = new Internal\Operator\Repos\CreateCommitSignatureProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredSignatures());
        }

        return $this->repos👷CreateCommitSignatureProtection;
    }

    public function repos👷DeleteCommitSignatureProtection(): Internal\Operator\Repos\DeleteCommitSignatureProtection
    {
        if ($this->repos👷DeleteCommitSignatureProtection instanceof Internal\Operator\Repos\DeleteCommitSignatureProtection === false) {
            $this->repos👷DeleteCommitSignatureProtection = new Internal\Operator\Repos\DeleteCommitSignatureProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredSignatures());
        }

        return $this->repos👷DeleteCommitSignatureProtection;
    }

    public function repos👷GetStatusChecksProtection(): Internal\Operator\Repos\GetStatusChecksProtection
    {
        if ($this->repos👷GetStatusChecksProtection instanceof Internal\Operator\Repos\GetStatusChecksProtection === false) {
            $this->repos👷GetStatusChecksProtection = new Internal\Operator\Repos\GetStatusChecksProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks());
        }

        return $this->repos👷GetStatusChecksProtection;
    }

    public function repos👷RemoveStatusCheckProtection(): Internal\Operator\Repos\RemoveStatusCheckProtection
    {
        if ($this->repos👷RemoveStatusCheckProtection instanceof Internal\Operator\Repos\RemoveStatusCheckProtection === false) {
            $this->repos👷RemoveStatusCheckProtection = new Internal\Operator\Repos\RemoveStatusCheckProtection($this->browser, $this->authentication);
        }

        return $this->repos👷RemoveStatusCheckProtection;
    }

    public function repos👷UpdateStatusCheckProtection(): Internal\Operator\Repos\UpdateStatusCheckProtection
    {
        if ($this->repos👷UpdateStatusCheckProtection instanceof Internal\Operator\Repos\UpdateStatusCheckProtection === false) {
            $this->repos👷UpdateStatusCheckProtection = new Internal\Operator\Repos\UpdateStatusCheckProtection($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks());
        }

        return $this->repos👷UpdateStatusCheckProtection;
    }

    public function repos👷GetAllStatusCheckContexts(): Internal\Operator\Repos\GetAllStatusCheckContexts
    {
        if ($this->repos👷GetAllStatusCheckContexts instanceof Internal\Operator\Repos\GetAllStatusCheckContexts === false) {
            $this->repos👷GetAllStatusCheckContexts = new Internal\Operator\Repos\GetAllStatusCheckContexts($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks🌀Contexts());
        }

        return $this->repos👷GetAllStatusCheckContexts;
    }

    public function repos👷SetStatusCheckContexts(): Internal\Operator\Repos\SetStatusCheckContexts
    {
        if ($this->repos👷SetStatusCheckContexts instanceof Internal\Operator\Repos\SetStatusCheckContexts === false) {
            $this->repos👷SetStatusCheckContexts = new Internal\Operator\Repos\SetStatusCheckContexts($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks🌀Contexts());
        }

        return $this->repos👷SetStatusCheckContexts;
    }

    public function repos👷AddStatusCheckContexts(): Internal\Operator\Repos\AddStatusCheckContexts
    {
        if ($this->repos👷AddStatusCheckContexts instanceof Internal\Operator\Repos\AddStatusCheckContexts === false) {
            $this->repos👷AddStatusCheckContexts = new Internal\Operator\Repos\AddStatusCheckContexts($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks🌀Contexts());
        }

        return $this->repos👷AddStatusCheckContexts;
    }

    public function repos👷RemoveStatusCheckContexts(): Internal\Operator\Repos\RemoveStatusCheckContexts
    {
        if ($this->repos👷RemoveStatusCheckContexts instanceof Internal\Operator\Repos\RemoveStatusCheckContexts === false) {
            $this->repos👷RemoveStatusCheckContexts = new Internal\Operator\Repos\RemoveStatusCheckContexts($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks🌀Contexts());
        }

        return $this->repos👷RemoveStatusCheckContexts;
    }

    public function repos👷GetAccessRestrictions(): Internal\Operator\Repos\GetAccessRestrictions
    {
        if ($this->repos👷GetAccessRestrictions instanceof Internal\Operator\Repos\GetAccessRestrictions === false) {
            $this->repos👷GetAccessRestrictions = new Internal\Operator\Repos\GetAccessRestrictions($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions());
        }

        return $this->repos👷GetAccessRestrictions;
    }

    public function repos👷DeleteAccessRestrictions(): Internal\Operator\Repos\DeleteAccessRestrictions
    {
        if ($this->repos👷DeleteAccessRestrictions instanceof Internal\Operator\Repos\DeleteAccessRestrictions === false) {
            $this->repos👷DeleteAccessRestrictions = new Internal\Operator\Repos\DeleteAccessRestrictions($this->browser, $this->authentication);
        }

        return $this->repos👷DeleteAccessRestrictions;
    }

    public function repos👷GetAppsWithAccessToProtectedBranch(): Internal\Operator\Repos\GetAppsWithAccessToProtectedBranch
    {
        if ($this->repos👷GetAppsWithAccessToProtectedBranch instanceof Internal\Operator\Repos\GetAppsWithAccessToProtectedBranch === false) {
            $this->repos👷GetAppsWithAccessToProtectedBranch = new Internal\Operator\Repos\GetAppsWithAccessToProtectedBranch($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Apps());
        }

        return $this->repos👷GetAppsWithAccessToProtectedBranch;
    }

    public function repos👷SetAppAccessRestrictions(): Internal\Operator\Repos\SetAppAccessRestrictions
    {
        if ($this->repos👷SetAppAccessRestrictions instanceof Internal\Operator\Repos\SetAppAccessRestrictions === false) {
            $this->repos👷SetAppAccessRestrictions = new Internal\Operator\Repos\SetAppAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Apps());
        }

        return $this->repos👷SetAppAccessRestrictions;
    }

    public function repos👷AddAppAccessRestrictions(): Internal\Operator\Repos\AddAppAccessRestrictions
    {
        if ($this->repos👷AddAppAccessRestrictions instanceof Internal\Operator\Repos\AddAppAccessRestrictions === false) {
            $this->repos👷AddAppAccessRestrictions = new Internal\Operator\Repos\AddAppAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Apps());
        }

        return $this->repos👷AddAppAccessRestrictions;
    }

    public function repos👷RemoveAppAccessRestrictions(): Internal\Operator\Repos\RemoveAppAccessRestrictions
    {
        if ($this->repos👷RemoveAppAccessRestrictions instanceof Internal\Operator\Repos\RemoveAppAccessRestrictions === false) {
            $this->repos👷RemoveAppAccessRestrictions = new Internal\Operator\Repos\RemoveAppAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Apps());
        }

        return $this->repos👷RemoveAppAccessRestrictions;
    }

    public function repos👷GetTeamsWithAccessToProtectedBranch(): Internal\Operator\Repos\GetTeamsWithAccessToProtectedBranch
    {
        if ($this->repos👷GetTeamsWithAccessToProtectedBranch instanceof Internal\Operator\Repos\GetTeamsWithAccessToProtectedBranch === false) {
            $this->repos👷GetTeamsWithAccessToProtectedBranch = new Internal\Operator\Repos\GetTeamsWithAccessToProtectedBranch($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Teams());
        }

        return $this->repos👷GetTeamsWithAccessToProtectedBranch;
    }

    public function repos👷SetTeamAccessRestrictions(): Internal\Operator\Repos\SetTeamAccessRestrictions
    {
        if ($this->repos👷SetTeamAccessRestrictions instanceof Internal\Operator\Repos\SetTeamAccessRestrictions === false) {
            $this->repos👷SetTeamAccessRestrictions = new Internal\Operator\Repos\SetTeamAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Teams());
        }

        return $this->repos👷SetTeamAccessRestrictions;
    }

    public function repos👷AddTeamAccessRestrictions(): Internal\Operator\Repos\AddTeamAccessRestrictions
    {
        if ($this->repos👷AddTeamAccessRestrictions instanceof Internal\Operator\Repos\AddTeamAccessRestrictions === false) {
            $this->repos👷AddTeamAccessRestrictions = new Internal\Operator\Repos\AddTeamAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Teams());
        }

        return $this->repos👷AddTeamAccessRestrictions;
    }

    public function repos👷RemoveTeamAccessRestrictions(): Internal\Operator\Repos\RemoveTeamAccessRestrictions
    {
        if ($this->repos👷RemoveTeamAccessRestrictions instanceof Internal\Operator\Repos\RemoveTeamAccessRestrictions === false) {
            $this->repos👷RemoveTeamAccessRestrictions = new Internal\Operator\Repos\RemoveTeamAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Teams());
        }

        return $this->repos👷RemoveTeamAccessRestrictions;
    }

    public function repos👷GetUsersWithAccessToProtectedBranch(): Internal\Operator\Repos\GetUsersWithAccessToProtectedBranch
    {
        if ($this->repos👷GetUsersWithAccessToProtectedBranch instanceof Internal\Operator\Repos\GetUsersWithAccessToProtectedBranch === false) {
            $this->repos👷GetUsersWithAccessToProtectedBranch = new Internal\Operator\Repos\GetUsersWithAccessToProtectedBranch($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Users());
        }

        return $this->repos👷GetUsersWithAccessToProtectedBranch;
    }

    public function repos👷SetUserAccessRestrictions(): Internal\Operator\Repos\SetUserAccessRestrictions
    {
        if ($this->repos👷SetUserAccessRestrictions instanceof Internal\Operator\Repos\SetUserAccessRestrictions === false) {
            $this->repos👷SetUserAccessRestrictions = new Internal\Operator\Repos\SetUserAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Users());
        }

        return $this->repos👷SetUserAccessRestrictions;
    }

    public function repos👷AddUserAccessRestrictions(): Internal\Operator\Repos\AddUserAccessRestrictions
    {
        if ($this->repos👷AddUserAccessRestrictions instanceof Internal\Operator\Repos\AddUserAccessRestrictions === false) {
            $this->repos👷AddUserAccessRestrictions = new Internal\Operator\Repos\AddUserAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Users());
        }

        return $this->repos👷AddUserAccessRestrictions;
    }

    public function repos👷RemoveUserAccessRestrictions(): Internal\Operator\Repos\RemoveUserAccessRestrictions
    {
        if ($this->repos👷RemoveUserAccessRestrictions instanceof Internal\Operator\Repos\RemoveUserAccessRestrictions === false) {
            $this->repos👷RemoveUserAccessRestrictions = new Internal\Operator\Repos\RemoveUserAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Users());
        }

        return $this->repos👷RemoveUserAccessRestrictions;
    }

    public function checks👷Create(): Internal\Operator\Checks\Create
    {
        if ($this->checks👷Create instanceof Internal\Operator\Checks\Create === false) {
            $this->checks👷Create = new Internal\Operator\Checks\Create($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns());
        }

        return $this->checks👷Create;
    }

    public function checks👷Get(): Internal\Operator\Checks\Get
    {
        if ($this->checks👷Get instanceof Internal\Operator\Checks\Get === false) {
            $this->checks👷Get = new Internal\Operator\Checks\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId());
        }

        return $this->checks👷Get;
    }

    public function checks👷Update(): Internal\Operator\Checks\Update
    {
        if ($this->checks👷Update instanceof Internal\Operator\Checks\Update === false) {
            $this->checks👷Update = new Internal\Operator\Checks\Update($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId());
        }

        return $this->checks👷Update;
    }

    public function checks👷ListAnnotations(): Internal\Operator\Checks\ListAnnotations
    {
        if ($this->checks👷ListAnnotations instanceof Internal\Operator\Checks\ListAnnotations === false) {
            $this->checks👷ListAnnotations = new Internal\Operator\Checks\ListAnnotations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId🌀Annotations());
        }

        return $this->checks👷ListAnnotations;
    }

    public function checks👷ListAnnotationsListing(): Internal\Operator\Checks\ListAnnotationsListing
    {
        if ($this->checks👷ListAnnotationsListing instanceof Internal\Operator\Checks\ListAnnotationsListing === false) {
            $this->checks👷ListAnnotationsListing = new Internal\Operator\Checks\ListAnnotationsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId🌀Annotations());
        }

        return $this->checks👷ListAnnotationsListing;
    }

    public function checks👷RerequestRun(): Internal\Operator\Checks\RerequestRun
    {
        if ($this->checks👷RerequestRun instanceof Internal\Operator\Checks\RerequestRun === false) {
            $this->checks👷RerequestRun = new Internal\Operator\Checks\RerequestRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId🌀Rerequest());
        }

        return $this->checks👷RerequestRun;
    }

    public function checks👷CreateSuite(): Internal\Operator\Checks\CreateSuite
    {
        if ($this->checks👷CreateSuite instanceof Internal\Operator\Checks\CreateSuite === false) {
            $this->checks👷CreateSuite = new Internal\Operator\Checks\CreateSuite($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites());
        }

        return $this->checks👷CreateSuite;
    }

    public function checks👷SetSuitesPreferences(): Internal\Operator\Checks\SetSuitesPreferences
    {
        if ($this->checks👷SetSuitesPreferences instanceof Internal\Operator\Checks\SetSuitesPreferences === false) {
            $this->checks👷SetSuitesPreferences = new Internal\Operator\Checks\SetSuitesPreferences($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀Preferences());
        }

        return $this->checks👷SetSuitesPreferences;
    }

    public function checks👷GetSuite(): Internal\Operator\Checks\GetSuite
    {
        if ($this->checks👷GetSuite instanceof Internal\Operator\Checks\GetSuite === false) {
            $this->checks👷GetSuite = new Internal\Operator\Checks\GetSuite($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId());
        }

        return $this->checks👷GetSuite;
    }

    public function checks👷ListForSuite(): Internal\Operator\Checks\ListForSuite
    {
        if ($this->checks👷ListForSuite instanceof Internal\Operator\Checks\ListForSuite === false) {
            $this->checks👷ListForSuite = new Internal\Operator\Checks\ListForSuite($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀CheckRuns());
        }

        return $this->checks👷ListForSuite;
    }

    public function checks👷RerequestSuite(): Internal\Operator\Checks\RerequestSuite
    {
        if ($this->checks👷RerequestSuite instanceof Internal\Operator\Checks\RerequestSuite === false) {
            $this->checks👷RerequestSuite = new Internal\Operator\Checks\RerequestSuite($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀Rerequest());
        }

        return $this->checks👷RerequestSuite;
    }

    public function codeScanning👷ListAlertsForRepo(): Internal\Operator\CodeScanning\ListAlertsForRepo
    {
        if ($this->codeScanning👷ListAlertsForRepo instanceof Internal\Operator\CodeScanning\ListAlertsForRepo === false) {
            $this->codeScanning👷ListAlertsForRepo = new Internal\Operator\CodeScanning\ListAlertsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts());
        }

        return $this->codeScanning👷ListAlertsForRepo;
    }

    public function codeScanning👷ListAlertsForRepoListing(): Internal\Operator\CodeScanning\ListAlertsForRepoListing
    {
        if ($this->codeScanning👷ListAlertsForRepoListing instanceof Internal\Operator\CodeScanning\ListAlertsForRepoListing === false) {
            $this->codeScanning👷ListAlertsForRepoListing = new Internal\Operator\CodeScanning\ListAlertsForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts());
        }

        return $this->codeScanning👷ListAlertsForRepoListing;
    }

    public function codeScanning👷GetAlert(): Internal\Operator\CodeScanning\GetAlert
    {
        if ($this->codeScanning👷GetAlert instanceof Internal\Operator\CodeScanning\GetAlert === false) {
            $this->codeScanning👷GetAlert = new Internal\Operator\CodeScanning\GetAlert($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber());
        }

        return $this->codeScanning👷GetAlert;
    }

    public function codeScanning👷UpdateAlert(): Internal\Operator\CodeScanning\UpdateAlert
    {
        if ($this->codeScanning👷UpdateAlert instanceof Internal\Operator\CodeScanning\UpdateAlert === false) {
            $this->codeScanning👷UpdateAlert = new Internal\Operator\CodeScanning\UpdateAlert($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber());
        }

        return $this->codeScanning👷UpdateAlert;
    }

    public function codeScanning👷ListAlertInstances(): Internal\Operator\CodeScanning\ListAlertInstances
    {
        if ($this->codeScanning👷ListAlertInstances instanceof Internal\Operator\CodeScanning\ListAlertInstances === false) {
            $this->codeScanning👷ListAlertInstances = new Internal\Operator\CodeScanning\ListAlertInstances($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber🌀Instances());
        }

        return $this->codeScanning👷ListAlertInstances;
    }

    public function codeScanning👷ListAlertInstancesListing(): Internal\Operator\CodeScanning\ListAlertInstancesListing
    {
        if ($this->codeScanning👷ListAlertInstancesListing instanceof Internal\Operator\CodeScanning\ListAlertInstancesListing === false) {
            $this->codeScanning👷ListAlertInstancesListing = new Internal\Operator\CodeScanning\ListAlertInstancesListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber🌀Instances());
        }

        return $this->codeScanning👷ListAlertInstancesListing;
    }

    public function codeScanning👷ListRecentAnalyses(): Internal\Operator\CodeScanning\ListRecentAnalyses
    {
        if ($this->codeScanning👷ListRecentAnalyses instanceof Internal\Operator\CodeScanning\ListRecentAnalyses === false) {
            $this->codeScanning👷ListRecentAnalyses = new Internal\Operator\CodeScanning\ListRecentAnalyses($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses());
        }

        return $this->codeScanning👷ListRecentAnalyses;
    }

    public function codeScanning👷ListRecentAnalysesListing(): Internal\Operator\CodeScanning\ListRecentAnalysesListing
    {
        if ($this->codeScanning👷ListRecentAnalysesListing instanceof Internal\Operator\CodeScanning\ListRecentAnalysesListing === false) {
            $this->codeScanning👷ListRecentAnalysesListing = new Internal\Operator\CodeScanning\ListRecentAnalysesListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses());
        }

        return $this->codeScanning👷ListRecentAnalysesListing;
    }

    public function codeScanning👷GetAnalysis(): Internal\Operator\CodeScanning\GetAnalysis
    {
        if ($this->codeScanning👷GetAnalysis instanceof Internal\Operator\CodeScanning\GetAnalysis === false) {
            $this->codeScanning👷GetAnalysis = new Internal\Operator\CodeScanning\GetAnalysis($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses🌀AnalysisId());
        }

        return $this->codeScanning👷GetAnalysis;
    }

    public function codeScanning👷DeleteAnalysis(): Internal\Operator\CodeScanning\DeleteAnalysis
    {
        if ($this->codeScanning👷DeleteAnalysis instanceof Internal\Operator\CodeScanning\DeleteAnalysis === false) {
            $this->codeScanning👷DeleteAnalysis = new Internal\Operator\CodeScanning\DeleteAnalysis($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses🌀AnalysisId());
        }

        return $this->codeScanning👷DeleteAnalysis;
    }

    public function codeScanning👷UploadSarif(): Internal\Operator\CodeScanning\UploadSarif
    {
        if ($this->codeScanning👷UploadSarif instanceof Internal\Operator\CodeScanning\UploadSarif === false) {
            $this->codeScanning👷UploadSarif = new Internal\Operator\CodeScanning\UploadSarif($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs());
        }

        return $this->codeScanning👷UploadSarif;
    }

    public function codeScanning👷GetSarif(): Internal\Operator\CodeScanning\GetSarif
    {
        if ($this->codeScanning👷GetSarif instanceof Internal\Operator\CodeScanning\GetSarif === false) {
            $this->codeScanning👷GetSarif = new Internal\Operator\CodeScanning\GetSarif($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs🌀SarifId());
        }

        return $this->codeScanning👷GetSarif;
    }

    public function repos👷CodeownersErrors(): Internal\Operator\Repos\CodeownersErrors
    {
        if ($this->repos👷CodeownersErrors instanceof Internal\Operator\Repos\CodeownersErrors === false) {
            $this->repos👷CodeownersErrors = new Internal\Operator\Repos\CodeownersErrors($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codeowners🌀Errors());
        }

        return $this->repos👷CodeownersErrors;
    }

    public function repos👷ListCollaborators(): Internal\Operator\Repos\ListCollaborators
    {
        if ($this->repos👷ListCollaborators instanceof Internal\Operator\Repos\ListCollaborators === false) {
            $this->repos👷ListCollaborators = new Internal\Operator\Repos\ListCollaborators($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators());
        }

        return $this->repos👷ListCollaborators;
    }

    public function repos👷ListCollaboratorsListing(): Internal\Operator\Repos\ListCollaboratorsListing
    {
        if ($this->repos👷ListCollaboratorsListing instanceof Internal\Operator\Repos\ListCollaboratorsListing === false) {
            $this->repos👷ListCollaboratorsListing = new Internal\Operator\Repos\ListCollaboratorsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators());
        }

        return $this->repos👷ListCollaboratorsListing;
    }

    public function repos👷CheckCollaborator(): Internal\Operator\Repos\CheckCollaborator
    {
        if ($this->repos👷CheckCollaborator instanceof Internal\Operator\Repos\CheckCollaborator === false) {
            $this->repos👷CheckCollaborator = new Internal\Operator\Repos\CheckCollaborator($this->browser, $this->authentication);
        }

        return $this->repos👷CheckCollaborator;
    }

    public function repos👷AddCollaborator(): Internal\Operator\Repos\AddCollaborator
    {
        if ($this->repos👷AddCollaborator instanceof Internal\Operator\Repos\AddCollaborator === false) {
            $this->repos👷AddCollaborator = new Internal\Operator\Repos\AddCollaborator($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username());
        }

        return $this->repos👷AddCollaborator;
    }

    public function repos👷RemoveCollaborator(): Internal\Operator\Repos\RemoveCollaborator
    {
        if ($this->repos👷RemoveCollaborator instanceof Internal\Operator\Repos\RemoveCollaborator === false) {
            $this->repos👷RemoveCollaborator = new Internal\Operator\Repos\RemoveCollaborator($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username());
        }

        return $this->repos👷RemoveCollaborator;
    }

    public function repos👷GetCollaboratorPermissionLevel(): Internal\Operator\Repos\GetCollaboratorPermissionLevel
    {
        if ($this->repos👷GetCollaboratorPermissionLevel instanceof Internal\Operator\Repos\GetCollaboratorPermissionLevel === false) {
            $this->repos👷GetCollaboratorPermissionLevel = new Internal\Operator\Repos\GetCollaboratorPermissionLevel($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username🌀Permission());
        }

        return $this->repos👷GetCollaboratorPermissionLevel;
    }

    public function repos👷ListCommitCommentsForRepo(): Internal\Operator\Repos\ListCommitCommentsForRepo
    {
        if ($this->repos👷ListCommitCommentsForRepo instanceof Internal\Operator\Repos\ListCommitCommentsForRepo === false) {
            $this->repos👷ListCommitCommentsForRepo = new Internal\Operator\Repos\ListCommitCommentsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments());
        }

        return $this->repos👷ListCommitCommentsForRepo;
    }

    public function repos👷ListCommitCommentsForRepoListing(): Internal\Operator\Repos\ListCommitCommentsForRepoListing
    {
        if ($this->repos👷ListCommitCommentsForRepoListing instanceof Internal\Operator\Repos\ListCommitCommentsForRepoListing === false) {
            $this->repos👷ListCommitCommentsForRepoListing = new Internal\Operator\Repos\ListCommitCommentsForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments());
        }

        return $this->repos👷ListCommitCommentsForRepoListing;
    }

    public function repos👷GetCommitComment(): Internal\Operator\Repos\GetCommitComment
    {
        if ($this->repos👷GetCommitComment instanceof Internal\Operator\Repos\GetCommitComment === false) {
            $this->repos👷GetCommitComment = new Internal\Operator\Repos\GetCommitComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId());
        }

        return $this->repos👷GetCommitComment;
    }

    public function repos👷DeleteCommitComment(): Internal\Operator\Repos\DeleteCommitComment
    {
        if ($this->repos👷DeleteCommitComment instanceof Internal\Operator\Repos\DeleteCommitComment === false) {
            $this->repos👷DeleteCommitComment = new Internal\Operator\Repos\DeleteCommitComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId());
        }

        return $this->repos👷DeleteCommitComment;
    }

    public function repos👷UpdateCommitComment(): Internal\Operator\Repos\UpdateCommitComment
    {
        if ($this->repos👷UpdateCommitComment instanceof Internal\Operator\Repos\UpdateCommitComment === false) {
            $this->repos👷UpdateCommitComment = new Internal\Operator\Repos\UpdateCommitComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId());
        }

        return $this->repos👷UpdateCommitComment;
    }

    public function reactions👷ListForCommitComment(): Internal\Operator\Reactions\ListForCommitComment
    {
        if ($this->reactions👷ListForCommitComment instanceof Internal\Operator\Reactions\ListForCommitComment === false) {
            $this->reactions👷ListForCommitComment = new Internal\Operator\Reactions\ListForCommitComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions());
        }

        return $this->reactions👷ListForCommitComment;
    }

    public function reactions👷ListForCommitCommentListing(): Internal\Operator\Reactions\ListForCommitCommentListing
    {
        if ($this->reactions👷ListForCommitCommentListing instanceof Internal\Operator\Reactions\ListForCommitCommentListing === false) {
            $this->reactions👷ListForCommitCommentListing = new Internal\Operator\Reactions\ListForCommitCommentListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions());
        }

        return $this->reactions👷ListForCommitCommentListing;
    }

    public function reactions👷CreateForCommitComment(): Internal\Operator\Reactions\CreateForCommitComment
    {
        if ($this->reactions👷CreateForCommitComment instanceof Internal\Operator\Reactions\CreateForCommitComment === false) {
            $this->reactions👷CreateForCommitComment = new Internal\Operator\Reactions\CreateForCommitComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions());
        }

        return $this->reactions👷CreateForCommitComment;
    }

    public function reactions👷DeleteForCommitComment(): Internal\Operator\Reactions\DeleteForCommitComment
    {
        if ($this->reactions👷DeleteForCommitComment instanceof Internal\Operator\Reactions\DeleteForCommitComment === false) {
            $this->reactions👷DeleteForCommitComment = new Internal\Operator\Reactions\DeleteForCommitComment($this->browser, $this->authentication);
        }

        return $this->reactions👷DeleteForCommitComment;
    }

    public function repos👷ListCommits(): Internal\Operator\Repos\ListCommits
    {
        if ($this->repos👷ListCommits instanceof Internal\Operator\Repos\ListCommits === false) {
            $this->repos👷ListCommits = new Internal\Operator\Repos\ListCommits($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits());
        }

        return $this->repos👷ListCommits;
    }

    public function repos👷ListCommitsListing(): Internal\Operator\Repos\ListCommitsListing
    {
        if ($this->repos👷ListCommitsListing instanceof Internal\Operator\Repos\ListCommitsListing === false) {
            $this->repos👷ListCommitsListing = new Internal\Operator\Repos\ListCommitsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits());
        }

        return $this->repos👷ListCommitsListing;
    }

    public function repos👷ListBranchesForHeadCommit(): Internal\Operator\Repos\ListBranchesForHeadCommit
    {
        if ($this->repos👷ListBranchesForHeadCommit instanceof Internal\Operator\Repos\ListBranchesForHeadCommit === false) {
            $this->repos👷ListBranchesForHeadCommit = new Internal\Operator\Repos\ListBranchesForHeadCommit($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀BranchesWhereHead());
        }

        return $this->repos👷ListBranchesForHeadCommit;
    }

    public function repos👷ListCommentsForCommit(): Internal\Operator\Repos\ListCommentsForCommit
    {
        if ($this->repos👷ListCommentsForCommit instanceof Internal\Operator\Repos\ListCommentsForCommit === false) {
            $this->repos👷ListCommentsForCommit = new Internal\Operator\Repos\ListCommentsForCommit($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Comments());
        }

        return $this->repos👷ListCommentsForCommit;
    }

    public function repos👷ListCommentsForCommitListing(): Internal\Operator\Repos\ListCommentsForCommitListing
    {
        if ($this->repos👷ListCommentsForCommitListing instanceof Internal\Operator\Repos\ListCommentsForCommitListing === false) {
            $this->repos👷ListCommentsForCommitListing = new Internal\Operator\Repos\ListCommentsForCommitListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Comments());
        }

        return $this->repos👷ListCommentsForCommitListing;
    }

    public function repos👷CreateCommitComment(): Internal\Operator\Repos\CreateCommitComment
    {
        if ($this->repos👷CreateCommitComment instanceof Internal\Operator\Repos\CreateCommitComment === false) {
            $this->repos👷CreateCommitComment = new Internal\Operator\Repos\CreateCommitComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Comments());
        }

        return $this->repos👷CreateCommitComment;
    }

    public function repos👷ListPullRequestsAssociatedWithCommit(): Internal\Operator\Repos\ListPullRequestsAssociatedWithCommit
    {
        if ($this->repos👷ListPullRequestsAssociatedWithCommit instanceof Internal\Operator\Repos\ListPullRequestsAssociatedWithCommit === false) {
            $this->repos👷ListPullRequestsAssociatedWithCommit = new Internal\Operator\Repos\ListPullRequestsAssociatedWithCommit($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Pulls());
        }

        return $this->repos👷ListPullRequestsAssociatedWithCommit;
    }

    public function repos👷ListPullRequestsAssociatedWithCommitListing(): Internal\Operator\Repos\ListPullRequestsAssociatedWithCommitListing
    {
        if ($this->repos👷ListPullRequestsAssociatedWithCommitListing instanceof Internal\Operator\Repos\ListPullRequestsAssociatedWithCommitListing === false) {
            $this->repos👷ListPullRequestsAssociatedWithCommitListing = new Internal\Operator\Repos\ListPullRequestsAssociatedWithCommitListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Pulls());
        }

        return $this->repos👷ListPullRequestsAssociatedWithCommitListing;
    }

    public function repos👷GetCommit(): Internal\Operator\Repos\GetCommit
    {
        if ($this->repos👷GetCommit instanceof Internal\Operator\Repos\GetCommit === false) {
            $this->repos👷GetCommit = new Internal\Operator\Repos\GetCommit($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref());
        }

        return $this->repos👷GetCommit;
    }

    public function checks👷ListForRef(): Internal\Operator\Checks\ListForRef
    {
        if ($this->checks👷ListForRef instanceof Internal\Operator\Checks\ListForRef === false) {
            $this->checks👷ListForRef = new Internal\Operator\Checks\ListForRef($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckRuns());
        }

        return $this->checks👷ListForRef;
    }

    public function checks👷ListSuitesForRef(): Internal\Operator\Checks\ListSuitesForRef
    {
        if ($this->checks👷ListSuitesForRef instanceof Internal\Operator\Checks\ListSuitesForRef === false) {
            $this->checks👷ListSuitesForRef = new Internal\Operator\Checks\ListSuitesForRef($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckSuites());
        }

        return $this->checks👷ListSuitesForRef;
    }

    public function repos👷GetCombinedStatusForRef(): Internal\Operator\Repos\GetCombinedStatusForRef
    {
        if ($this->repos👷GetCombinedStatusForRef instanceof Internal\Operator\Repos\GetCombinedStatusForRef === false) {
            $this->repos👷GetCombinedStatusForRef = new Internal\Operator\Repos\GetCombinedStatusForRef($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Status());
        }

        return $this->repos👷GetCombinedStatusForRef;
    }

    public function repos👷ListCommitStatusesForRef(): Internal\Operator\Repos\ListCommitStatusesForRef
    {
        if ($this->repos👷ListCommitStatusesForRef instanceof Internal\Operator\Repos\ListCommitStatusesForRef === false) {
            $this->repos👷ListCommitStatusesForRef = new Internal\Operator\Repos\ListCommitStatusesForRef($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Statuses());
        }

        return $this->repos👷ListCommitStatusesForRef;
    }

    public function repos👷ListCommitStatusesForRefListing(): Internal\Operator\Repos\ListCommitStatusesForRefListing
    {
        if ($this->repos👷ListCommitStatusesForRefListing instanceof Internal\Operator\Repos\ListCommitStatusesForRefListing === false) {
            $this->repos👷ListCommitStatusesForRefListing = new Internal\Operator\Repos\ListCommitStatusesForRefListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Statuses());
        }

        return $this->repos👷ListCommitStatusesForRefListing;
    }

    public function repos👷CompareCommits(): Internal\Operator\Repos\CompareCommits
    {
        if ($this->repos👷CompareCommits instanceof Internal\Operator\Repos\CompareCommits === false) {
            $this->repos👷CompareCommits = new Internal\Operator\Repos\CompareCommits($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Compare🌀Basehead());
        }

        return $this->repos👷CompareCommits;
    }

    public function repos👷GetContent(): Internal\Operator\Repos\GetContent
    {
        if ($this->repos👷GetContent instanceof Internal\Operator\Repos\GetContent === false) {
            $this->repos👷GetContent = new Internal\Operator\Repos\GetContent($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Contents🌀Path());
        }

        return $this->repos👷GetContent;
    }

    public function repos👷CreateOrUpdateFileContents(): Internal\Operator\Repos\CreateOrUpdateFileContents
    {
        if ($this->repos👷CreateOrUpdateFileContents instanceof Internal\Operator\Repos\CreateOrUpdateFileContents === false) {
            $this->repos👷CreateOrUpdateFileContents = new Internal\Operator\Repos\CreateOrUpdateFileContents($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Contents🌀Path());
        }

        return $this->repos👷CreateOrUpdateFileContents;
    }

    public function repos👷DeleteFile(): Internal\Operator\Repos\DeleteFile
    {
        if ($this->repos👷DeleteFile instanceof Internal\Operator\Repos\DeleteFile === false) {
            $this->repos👷DeleteFile = new Internal\Operator\Repos\DeleteFile($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Contents🌀Path());
        }

        return $this->repos👷DeleteFile;
    }

    public function repos👷ListContributors(): Internal\Operator\Repos\ListContributors
    {
        if ($this->repos👷ListContributors instanceof Internal\Operator\Repos\ListContributors === false) {
            $this->repos👷ListContributors = new Internal\Operator\Repos\ListContributors($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Contributors());
        }

        return $this->repos👷ListContributors;
    }

    public function repos👷ListContributorsListing(): Internal\Operator\Repos\ListContributorsListing
    {
        if ($this->repos👷ListContributorsListing instanceof Internal\Operator\Repos\ListContributorsListing === false) {
            $this->repos👷ListContributorsListing = new Internal\Operator\Repos\ListContributorsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Contributors());
        }

        return $this->repos👷ListContributorsListing;
    }

    public function repos👷ListDeployments(): Internal\Operator\Repos\ListDeployments
    {
        if ($this->repos👷ListDeployments instanceof Internal\Operator\Repos\ListDeployments === false) {
            $this->repos👷ListDeployments = new Internal\Operator\Repos\ListDeployments($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments());
        }

        return $this->repos👷ListDeployments;
    }

    public function repos👷ListDeploymentsListing(): Internal\Operator\Repos\ListDeploymentsListing
    {
        if ($this->repos👷ListDeploymentsListing instanceof Internal\Operator\Repos\ListDeploymentsListing === false) {
            $this->repos👷ListDeploymentsListing = new Internal\Operator\Repos\ListDeploymentsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments());
        }

        return $this->repos👷ListDeploymentsListing;
    }

    public function repos👷CreateDeployment(): Internal\Operator\Repos\CreateDeployment
    {
        if ($this->repos👷CreateDeployment instanceof Internal\Operator\Repos\CreateDeployment === false) {
            $this->repos👷CreateDeployment = new Internal\Operator\Repos\CreateDeployment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments());
        }

        return $this->repos👷CreateDeployment;
    }

    public function repos👷GetDeployment(): Internal\Operator\Repos\GetDeployment
    {
        if ($this->repos👷GetDeployment instanceof Internal\Operator\Repos\GetDeployment === false) {
            $this->repos👷GetDeployment = new Internal\Operator\Repos\GetDeployment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId());
        }

        return $this->repos👷GetDeployment;
    }

    public function repos👷DeleteDeployment(): Internal\Operator\Repos\DeleteDeployment
    {
        if ($this->repos👷DeleteDeployment instanceof Internal\Operator\Repos\DeleteDeployment === false) {
            $this->repos👷DeleteDeployment = new Internal\Operator\Repos\DeleteDeployment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId());
        }

        return $this->repos👷DeleteDeployment;
    }

    public function repos👷ListDeploymentStatuses(): Internal\Operator\Repos\ListDeploymentStatuses
    {
        if ($this->repos👷ListDeploymentStatuses instanceof Internal\Operator\Repos\ListDeploymentStatuses === false) {
            $this->repos👷ListDeploymentStatuses = new Internal\Operator\Repos\ListDeploymentStatuses($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses());
        }

        return $this->repos👷ListDeploymentStatuses;
    }

    public function repos👷ListDeploymentStatusesListing(): Internal\Operator\Repos\ListDeploymentStatusesListing
    {
        if ($this->repos👷ListDeploymentStatusesListing instanceof Internal\Operator\Repos\ListDeploymentStatusesListing === false) {
            $this->repos👷ListDeploymentStatusesListing = new Internal\Operator\Repos\ListDeploymentStatusesListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses());
        }

        return $this->repos👷ListDeploymentStatusesListing;
    }

    public function repos👷CreateDeploymentStatus(): Internal\Operator\Repos\CreateDeploymentStatus
    {
        if ($this->repos👷CreateDeploymentStatus instanceof Internal\Operator\Repos\CreateDeploymentStatus === false) {
            $this->repos👷CreateDeploymentStatus = new Internal\Operator\Repos\CreateDeploymentStatus($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses());
        }

        return $this->repos👷CreateDeploymentStatus;
    }

    public function repos👷GetDeploymentStatus(): Internal\Operator\Repos\GetDeploymentStatus
    {
        if ($this->repos👷GetDeploymentStatus instanceof Internal\Operator\Repos\GetDeploymentStatus === false) {
            $this->repos👷GetDeploymentStatus = new Internal\Operator\Repos\GetDeploymentStatus($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses🌀StatusId());
        }

        return $this->repos👷GetDeploymentStatus;
    }

    public function repos👷CreateDispatchEvent(): Internal\Operator\Repos\CreateDispatchEvent
    {
        if ($this->repos👷CreateDispatchEvent instanceof Internal\Operator\Repos\CreateDispatchEvent === false) {
            $this->repos👷CreateDispatchEvent = new Internal\Operator\Repos\CreateDispatchEvent($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dispatches());
        }

        return $this->repos👷CreateDispatchEvent;
    }

    public function repos👷GetAllEnvironments(): Internal\Operator\Repos\GetAllEnvironments
    {
        if ($this->repos👷GetAllEnvironments instanceof Internal\Operator\Repos\GetAllEnvironments === false) {
            $this->repos👷GetAllEnvironments = new Internal\Operator\Repos\GetAllEnvironments($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments());
        }

        return $this->repos👷GetAllEnvironments;
    }

    public function repos👷GetEnvironment(): Internal\Operator\Repos\GetEnvironment
    {
        if ($this->repos👷GetEnvironment instanceof Internal\Operator\Repos\GetEnvironment === false) {
            $this->repos👷GetEnvironment = new Internal\Operator\Repos\GetEnvironment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName());
        }

        return $this->repos👷GetEnvironment;
    }

    public function repos👷CreateOrUpdateEnvironment(): Internal\Operator\Repos\CreateOrUpdateEnvironment
    {
        if ($this->repos👷CreateOrUpdateEnvironment instanceof Internal\Operator\Repos\CreateOrUpdateEnvironment === false) {
            $this->repos👷CreateOrUpdateEnvironment = new Internal\Operator\Repos\CreateOrUpdateEnvironment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName());
        }

        return $this->repos👷CreateOrUpdateEnvironment;
    }

    public function repos👷DeleteAnEnvironment(): Internal\Operator\Repos\DeleteAnEnvironment
    {
        if ($this->repos👷DeleteAnEnvironment instanceof Internal\Operator\Repos\DeleteAnEnvironment === false) {
            $this->repos👷DeleteAnEnvironment = new Internal\Operator\Repos\DeleteAnEnvironment($this->browser, $this->authentication);
        }

        return $this->repos👷DeleteAnEnvironment;
    }

    public function repos👷ListDeploymentBranchPolicies(): Internal\Operator\Repos\ListDeploymentBranchPolicies
    {
        if ($this->repos👷ListDeploymentBranchPolicies instanceof Internal\Operator\Repos\ListDeploymentBranchPolicies === false) {
            $this->repos👷ListDeploymentBranchPolicies = new Internal\Operator\Repos\ListDeploymentBranchPolicies($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies());
        }

        return $this->repos👷ListDeploymentBranchPolicies;
    }

    public function repos👷CreateDeploymentBranchPolicy(): Internal\Operator\Repos\CreateDeploymentBranchPolicy
    {
        if ($this->repos👷CreateDeploymentBranchPolicy instanceof Internal\Operator\Repos\CreateDeploymentBranchPolicy === false) {
            $this->repos👷CreateDeploymentBranchPolicy = new Internal\Operator\Repos\CreateDeploymentBranchPolicy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies());
        }

        return $this->repos👷CreateDeploymentBranchPolicy;
    }

    public function repos👷GetDeploymentBranchPolicy(): Internal\Operator\Repos\GetDeploymentBranchPolicy
    {
        if ($this->repos👷GetDeploymentBranchPolicy instanceof Internal\Operator\Repos\GetDeploymentBranchPolicy === false) {
            $this->repos👷GetDeploymentBranchPolicy = new Internal\Operator\Repos\GetDeploymentBranchPolicy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies🌀BranchPolicyId());
        }

        return $this->repos👷GetDeploymentBranchPolicy;
    }

    public function repos👷UpdateDeploymentBranchPolicy(): Internal\Operator\Repos\UpdateDeploymentBranchPolicy
    {
        if ($this->repos👷UpdateDeploymentBranchPolicy instanceof Internal\Operator\Repos\UpdateDeploymentBranchPolicy === false) {
            $this->repos👷UpdateDeploymentBranchPolicy = new Internal\Operator\Repos\UpdateDeploymentBranchPolicy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies🌀BranchPolicyId());
        }

        return $this->repos👷UpdateDeploymentBranchPolicy;
    }

    public function repos👷DeleteDeploymentBranchPolicy(): Internal\Operator\Repos\DeleteDeploymentBranchPolicy
    {
        if ($this->repos👷DeleteDeploymentBranchPolicy instanceof Internal\Operator\Repos\DeleteDeploymentBranchPolicy === false) {
            $this->repos👷DeleteDeploymentBranchPolicy = new Internal\Operator\Repos\DeleteDeploymentBranchPolicy($this->browser, $this->authentication);
        }

        return $this->repos👷DeleteDeploymentBranchPolicy;
    }

    public function activity👷ListRepoEvents(): Internal\Operator\Activity\ListRepoEvents
    {
        if ($this->activity👷ListRepoEvents instanceof Internal\Operator\Activity\ListRepoEvents === false) {
            $this->activity👷ListRepoEvents = new Internal\Operator\Activity\ListRepoEvents($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Events());
        }

        return $this->activity👷ListRepoEvents;
    }

    public function activity👷ListRepoEventsListing(): Internal\Operator\Activity\ListRepoEventsListing
    {
        if ($this->activity👷ListRepoEventsListing instanceof Internal\Operator\Activity\ListRepoEventsListing === false) {
            $this->activity👷ListRepoEventsListing = new Internal\Operator\Activity\ListRepoEventsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Events());
        }

        return $this->activity👷ListRepoEventsListing;
    }

    public function repos👷ListForks(): Internal\Operator\Repos\ListForks
    {
        if ($this->repos👷ListForks instanceof Internal\Operator\Repos\ListForks === false) {
            $this->repos👷ListForks = new Internal\Operator\Repos\ListForks($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Forks());
        }

        return $this->repos👷ListForks;
    }

    public function repos👷ListForksListing(): Internal\Operator\Repos\ListForksListing
    {
        if ($this->repos👷ListForksListing instanceof Internal\Operator\Repos\ListForksListing === false) {
            $this->repos👷ListForksListing = new Internal\Operator\Repos\ListForksListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Forks());
        }

        return $this->repos👷ListForksListing;
    }

    public function repos👷CreateFork(): Internal\Operator\Repos\CreateFork
    {
        if ($this->repos👷CreateFork instanceof Internal\Operator\Repos\CreateFork === false) {
            $this->repos👷CreateFork = new Internal\Operator\Repos\CreateFork($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Forks());
        }

        return $this->repos👷CreateFork;
    }

    public function git👷CreateBlob(): Internal\Operator\Git\CreateBlob
    {
        if ($this->git👷CreateBlob instanceof Internal\Operator\Git\CreateBlob === false) {
            $this->git👷CreateBlob = new Internal\Operator\Git\CreateBlob($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs());
        }

        return $this->git👷CreateBlob;
    }

    public function git👷GetBlob(): Internal\Operator\Git\GetBlob
    {
        if ($this->git👷GetBlob instanceof Internal\Operator\Git\GetBlob === false) {
            $this->git👷GetBlob = new Internal\Operator\Git\GetBlob($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs🌀FileSha());
        }

        return $this->git👷GetBlob;
    }

    public function git👷CreateCommit(): Internal\Operator\Git\CreateCommit
    {
        if ($this->git👷CreateCommit instanceof Internal\Operator\Git\CreateCommit === false) {
            $this->git👷CreateCommit = new Internal\Operator\Git\CreateCommit($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits());
        }

        return $this->git👷CreateCommit;
    }

    public function git👷GetCommit(): Internal\Operator\Git\GetCommit
    {
        if ($this->git👷GetCommit instanceof Internal\Operator\Git\GetCommit === false) {
            $this->git👷GetCommit = new Internal\Operator\Git\GetCommit($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits🌀CommitSha());
        }

        return $this->git👷GetCommit;
    }

    public function git👷ListMatchingRefs(): Internal\Operator\Git\ListMatchingRefs
    {
        if ($this->git👷ListMatchingRefs instanceof Internal\Operator\Git\ListMatchingRefs === false) {
            $this->git👷ListMatchingRefs = new Internal\Operator\Git\ListMatchingRefs($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀MatchingRefs🌀Ref());
        }

        return $this->git👷ListMatchingRefs;
    }

    public function git👷GetRef(): Internal\Operator\Git\GetRef
    {
        if ($this->git👷GetRef instanceof Internal\Operator\Git\GetRef === false) {
            $this->git👷GetRef = new Internal\Operator\Git\GetRef($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Ref🌀Ref());
        }

        return $this->git👷GetRef;
    }

    public function git👷CreateRef(): Internal\Operator\Git\CreateRef
    {
        if ($this->git👷CreateRef instanceof Internal\Operator\Git\CreateRef === false) {
            $this->git👷CreateRef = new Internal\Operator\Git\CreateRef($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs());
        }

        return $this->git👷CreateRef;
    }

    public function git👷DeleteRef(): Internal\Operator\Git\DeleteRef
    {
        if ($this->git👷DeleteRef instanceof Internal\Operator\Git\DeleteRef === false) {
            $this->git👷DeleteRef = new Internal\Operator\Git\DeleteRef($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs🌀Ref());
        }

        return $this->git👷DeleteRef;
    }

    public function git👷UpdateRef(): Internal\Operator\Git\UpdateRef
    {
        if ($this->git👷UpdateRef instanceof Internal\Operator\Git\UpdateRef === false) {
            $this->git👷UpdateRef = new Internal\Operator\Git\UpdateRef($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs🌀Ref());
        }

        return $this->git👷UpdateRef;
    }

    public function git👷CreateTag(): Internal\Operator\Git\CreateTag
    {
        if ($this->git👷CreateTag instanceof Internal\Operator\Git\CreateTag === false) {
            $this->git👷CreateTag = new Internal\Operator\Git\CreateTag($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags());
        }

        return $this->git👷CreateTag;
    }

    public function git👷GetTag(): Internal\Operator\Git\GetTag
    {
        if ($this->git👷GetTag instanceof Internal\Operator\Git\GetTag === false) {
            $this->git👷GetTag = new Internal\Operator\Git\GetTag($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags🌀TagSha());
        }

        return $this->git👷GetTag;
    }

    public function git👷CreateTree(): Internal\Operator\Git\CreateTree
    {
        if ($this->git👷CreateTree instanceof Internal\Operator\Git\CreateTree === false) {
            $this->git👷CreateTree = new Internal\Operator\Git\CreateTree($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees());
        }

        return $this->git👷CreateTree;
    }

    public function git👷GetTree(): Internal\Operator\Git\GetTree
    {
        if ($this->git👷GetTree instanceof Internal\Operator\Git\GetTree === false) {
            $this->git👷GetTree = new Internal\Operator\Git\GetTree($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees🌀TreeSha());
        }

        return $this->git👷GetTree;
    }

    public function repos👷ListWebhooks(): Internal\Operator\Repos\ListWebhooks
    {
        if ($this->repos👷ListWebhooks instanceof Internal\Operator\Repos\ListWebhooks === false) {
            $this->repos👷ListWebhooks = new Internal\Operator\Repos\ListWebhooks($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks());
        }

        return $this->repos👷ListWebhooks;
    }

    public function repos👷ListWebhooksListing(): Internal\Operator\Repos\ListWebhooksListing
    {
        if ($this->repos👷ListWebhooksListing instanceof Internal\Operator\Repos\ListWebhooksListing === false) {
            $this->repos👷ListWebhooksListing = new Internal\Operator\Repos\ListWebhooksListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks());
        }

        return $this->repos👷ListWebhooksListing;
    }

    public function repos👷CreateWebhook(): Internal\Operator\Repos\CreateWebhook
    {
        if ($this->repos👷CreateWebhook instanceof Internal\Operator\Repos\CreateWebhook === false) {
            $this->repos👷CreateWebhook = new Internal\Operator\Repos\CreateWebhook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks());
        }

        return $this->repos👷CreateWebhook;
    }

    public function repos👷GetWebhook(): Internal\Operator\Repos\GetWebhook
    {
        if ($this->repos👷GetWebhook instanceof Internal\Operator\Repos\GetWebhook === false) {
            $this->repos👷GetWebhook = new Internal\Operator\Repos\GetWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId());
        }

        return $this->repos👷GetWebhook;
    }

    public function repos👷DeleteWebhook(): Internal\Operator\Repos\DeleteWebhook
    {
        if ($this->repos👷DeleteWebhook instanceof Internal\Operator\Repos\DeleteWebhook === false) {
            $this->repos👷DeleteWebhook = new Internal\Operator\Repos\DeleteWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId());
        }

        return $this->repos👷DeleteWebhook;
    }

    public function repos👷UpdateWebhook(): Internal\Operator\Repos\UpdateWebhook
    {
        if ($this->repos👷UpdateWebhook instanceof Internal\Operator\Repos\UpdateWebhook === false) {
            $this->repos👷UpdateWebhook = new Internal\Operator\Repos\UpdateWebhook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId());
        }

        return $this->repos👷UpdateWebhook;
    }

    public function repos👷GetWebhookConfigForRepo(): Internal\Operator\Repos\GetWebhookConfigForRepo
    {
        if ($this->repos👷GetWebhookConfigForRepo instanceof Internal\Operator\Repos\GetWebhookConfigForRepo === false) {
            $this->repos👷GetWebhookConfigForRepo = new Internal\Operator\Repos\GetWebhookConfigForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Config());
        }

        return $this->repos👷GetWebhookConfigForRepo;
    }

    public function repos👷UpdateWebhookConfigForRepo(): Internal\Operator\Repos\UpdateWebhookConfigForRepo
    {
        if ($this->repos👷UpdateWebhookConfigForRepo instanceof Internal\Operator\Repos\UpdateWebhookConfigForRepo === false) {
            $this->repos👷UpdateWebhookConfigForRepo = new Internal\Operator\Repos\UpdateWebhookConfigForRepo($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Config());
        }

        return $this->repos👷UpdateWebhookConfigForRepo;
    }

    public function repos👷ListWebhookDeliveries(): Internal\Operator\Repos\ListWebhookDeliveries
    {
        if ($this->repos👷ListWebhookDeliveries instanceof Internal\Operator\Repos\ListWebhookDeliveries === false) {
            $this->repos👷ListWebhookDeliveries = new Internal\Operator\Repos\ListWebhookDeliveries($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries());
        }

        return $this->repos👷ListWebhookDeliveries;
    }

    public function repos👷GetWebhookDelivery(): Internal\Operator\Repos\GetWebhookDelivery
    {
        if ($this->repos👷GetWebhookDelivery instanceof Internal\Operator\Repos\GetWebhookDelivery === false) {
            $this->repos👷GetWebhookDelivery = new Internal\Operator\Repos\GetWebhookDelivery($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId());
        }

        return $this->repos👷GetWebhookDelivery;
    }

    public function repos👷RedeliverWebhookDelivery(): Internal\Operator\Repos\RedeliverWebhookDelivery
    {
        if ($this->repos👷RedeliverWebhookDelivery instanceof Internal\Operator\Repos\RedeliverWebhookDelivery === false) {
            $this->repos👷RedeliverWebhookDelivery = new Internal\Operator\Repos\RedeliverWebhookDelivery($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId🌀Attempts());
        }

        return $this->repos👷RedeliverWebhookDelivery;
    }

    public function repos👷PingWebhook(): Internal\Operator\Repos\PingWebhook
    {
        if ($this->repos👷PingWebhook instanceof Internal\Operator\Repos\PingWebhook === false) {
            $this->repos👷PingWebhook = new Internal\Operator\Repos\PingWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Pings());
        }

        return $this->repos👷PingWebhook;
    }

    public function repos👷TestPushWebhook(): Internal\Operator\Repos\TestPushWebhook
    {
        if ($this->repos👷TestPushWebhook instanceof Internal\Operator\Repos\TestPushWebhook === false) {
            $this->repos👷TestPushWebhook = new Internal\Operator\Repos\TestPushWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Tests());
        }

        return $this->repos👷TestPushWebhook;
    }

    public function apps👷GetRepoInstallation(): Internal\Operator\Apps\GetRepoInstallation
    {
        if ($this->apps👷GetRepoInstallation instanceof Internal\Operator\Apps\GetRepoInstallation === false) {
            $this->apps👷GetRepoInstallation = new Internal\Operator\Apps\GetRepoInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Installation());
        }

        return $this->apps👷GetRepoInstallation;
    }

    public function repos👷ListInvitations(): Internal\Operator\Repos\ListInvitations
    {
        if ($this->repos👷ListInvitations instanceof Internal\Operator\Repos\ListInvitations === false) {
            $this->repos👷ListInvitations = new Internal\Operator\Repos\ListInvitations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Invitations());
        }

        return $this->repos👷ListInvitations;
    }

    public function repos👷ListInvitationsListing(): Internal\Operator\Repos\ListInvitationsListing
    {
        if ($this->repos👷ListInvitationsListing instanceof Internal\Operator\Repos\ListInvitationsListing === false) {
            $this->repos👷ListInvitationsListing = new Internal\Operator\Repos\ListInvitationsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Invitations());
        }

        return $this->repos👷ListInvitationsListing;
    }

    public function repos👷DeleteInvitation(): Internal\Operator\Repos\DeleteInvitation
    {
        if ($this->repos👷DeleteInvitation instanceof Internal\Operator\Repos\DeleteInvitation === false) {
            $this->repos👷DeleteInvitation = new Internal\Operator\Repos\DeleteInvitation($this->browser, $this->authentication);
        }

        return $this->repos👷DeleteInvitation;
    }

    public function repos👷UpdateInvitation(): Internal\Operator\Repos\UpdateInvitation
    {
        if ($this->repos👷UpdateInvitation instanceof Internal\Operator\Repos\UpdateInvitation === false) {
            $this->repos👷UpdateInvitation = new Internal\Operator\Repos\UpdateInvitation($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Invitations🌀InvitationId());
        }

        return $this->repos👷UpdateInvitation;
    }

    public function issues👷ListForRepo(): Internal\Operator\Issues\ListForRepo
    {
        if ($this->issues👷ListForRepo instanceof Internal\Operator\Issues\ListForRepo === false) {
            $this->issues👷ListForRepo = new Internal\Operator\Issues\ListForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues());
        }

        return $this->issues👷ListForRepo;
    }

    public function issues👷ListForRepoListing(): Internal\Operator\Issues\ListForRepoListing
    {
        if ($this->issues👷ListForRepoListing instanceof Internal\Operator\Issues\ListForRepoListing === false) {
            $this->issues👷ListForRepoListing = new Internal\Operator\Issues\ListForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues());
        }

        return $this->issues👷ListForRepoListing;
    }

    public function issues👷Create(): Internal\Operator\Issues\Create
    {
        if ($this->issues👷Create instanceof Internal\Operator\Issues\Create === false) {
            $this->issues👷Create = new Internal\Operator\Issues\Create($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues());
        }

        return $this->issues👷Create;
    }

    public function issues👷ListCommentsForRepo(): Internal\Operator\Issues\ListCommentsForRepo
    {
        if ($this->issues👷ListCommentsForRepo instanceof Internal\Operator\Issues\ListCommentsForRepo === false) {
            $this->issues👷ListCommentsForRepo = new Internal\Operator\Issues\ListCommentsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments());
        }

        return $this->issues👷ListCommentsForRepo;
    }

    public function issues👷ListCommentsForRepoListing(): Internal\Operator\Issues\ListCommentsForRepoListing
    {
        if ($this->issues👷ListCommentsForRepoListing instanceof Internal\Operator\Issues\ListCommentsForRepoListing === false) {
            $this->issues👷ListCommentsForRepoListing = new Internal\Operator\Issues\ListCommentsForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments());
        }

        return $this->issues👷ListCommentsForRepoListing;
    }

    public function issues👷GetComment(): Internal\Operator\Issues\GetComment
    {
        if ($this->issues👷GetComment instanceof Internal\Operator\Issues\GetComment === false) {
            $this->issues👷GetComment = new Internal\Operator\Issues\GetComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId());
        }

        return $this->issues👷GetComment;
    }

    public function issues👷DeleteComment(): Internal\Operator\Issues\DeleteComment
    {
        if ($this->issues👷DeleteComment instanceof Internal\Operator\Issues\DeleteComment === false) {
            $this->issues👷DeleteComment = new Internal\Operator\Issues\DeleteComment($this->browser, $this->authentication);
        }

        return $this->issues👷DeleteComment;
    }

    public function issues👷UpdateComment(): Internal\Operator\Issues\UpdateComment
    {
        if ($this->issues👷UpdateComment instanceof Internal\Operator\Issues\UpdateComment === false) {
            $this->issues👷UpdateComment = new Internal\Operator\Issues\UpdateComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId());
        }

        return $this->issues👷UpdateComment;
    }

    public function reactions👷ListForIssueComment(): Internal\Operator\Reactions\ListForIssueComment
    {
        if ($this->reactions👷ListForIssueComment instanceof Internal\Operator\Reactions\ListForIssueComment === false) {
            $this->reactions👷ListForIssueComment = new Internal\Operator\Reactions\ListForIssueComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions());
        }

        return $this->reactions👷ListForIssueComment;
    }

    public function reactions👷ListForIssueCommentListing(): Internal\Operator\Reactions\ListForIssueCommentListing
    {
        if ($this->reactions👷ListForIssueCommentListing instanceof Internal\Operator\Reactions\ListForIssueCommentListing === false) {
            $this->reactions👷ListForIssueCommentListing = new Internal\Operator\Reactions\ListForIssueCommentListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions());
        }

        return $this->reactions👷ListForIssueCommentListing;
    }

    public function reactions👷CreateForIssueComment(): Internal\Operator\Reactions\CreateForIssueComment
    {
        if ($this->reactions👷CreateForIssueComment instanceof Internal\Operator\Reactions\CreateForIssueComment === false) {
            $this->reactions👷CreateForIssueComment = new Internal\Operator\Reactions\CreateForIssueComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions());
        }

        return $this->reactions👷CreateForIssueComment;
    }

    public function reactions👷DeleteForIssueComment(): Internal\Operator\Reactions\DeleteForIssueComment
    {
        if ($this->reactions👷DeleteForIssueComment instanceof Internal\Operator\Reactions\DeleteForIssueComment === false) {
            $this->reactions👷DeleteForIssueComment = new Internal\Operator\Reactions\DeleteForIssueComment($this->browser, $this->authentication);
        }

        return $this->reactions👷DeleteForIssueComment;
    }

    public function issues👷ListEventsForRepo(): Internal\Operator\Issues\ListEventsForRepo
    {
        if ($this->issues👷ListEventsForRepo instanceof Internal\Operator\Issues\ListEventsForRepo === false) {
            $this->issues👷ListEventsForRepo = new Internal\Operator\Issues\ListEventsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events());
        }

        return $this->issues👷ListEventsForRepo;
    }

    public function issues👷ListEventsForRepoListing(): Internal\Operator\Issues\ListEventsForRepoListing
    {
        if ($this->issues👷ListEventsForRepoListing instanceof Internal\Operator\Issues\ListEventsForRepoListing === false) {
            $this->issues👷ListEventsForRepoListing = new Internal\Operator\Issues\ListEventsForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events());
        }

        return $this->issues👷ListEventsForRepoListing;
    }

    public function issues👷GetEvent(): Internal\Operator\Issues\GetEvent
    {
        if ($this->issues👷GetEvent instanceof Internal\Operator\Issues\GetEvent === false) {
            $this->issues👷GetEvent = new Internal\Operator\Issues\GetEvent($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events🌀EventId());
        }

        return $this->issues👷GetEvent;
    }

    public function issues👷Get(): Internal\Operator\Issues\Get
    {
        if ($this->issues👷Get instanceof Internal\Operator\Issues\Get === false) {
            $this->issues👷Get = new Internal\Operator\Issues\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber());
        }

        return $this->issues👷Get;
    }

    public function issues👷Update(): Internal\Operator\Issues\Update
    {
        if ($this->issues👷Update instanceof Internal\Operator\Issues\Update === false) {
            $this->issues👷Update = new Internal\Operator\Issues\Update($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber());
        }

        return $this->issues👷Update;
    }

    public function issues👷AddAssignees(): Internal\Operator\Issues\AddAssignees
    {
        if ($this->issues👷AddAssignees instanceof Internal\Operator\Issues\AddAssignees === false) {
            $this->issues👷AddAssignees = new Internal\Operator\Issues\AddAssignees($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Assignees());
        }

        return $this->issues👷AddAssignees;
    }

    public function issues👷RemoveAssignees(): Internal\Operator\Issues\RemoveAssignees
    {
        if ($this->issues👷RemoveAssignees instanceof Internal\Operator\Issues\RemoveAssignees === false) {
            $this->issues👷RemoveAssignees = new Internal\Operator\Issues\RemoveAssignees($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Assignees());
        }

        return $this->issues👷RemoveAssignees;
    }

    public function issues👷CheckUserCanBeAssignedToIssue(): Internal\Operator\Issues\CheckUserCanBeAssignedToIssue
    {
        if ($this->issues👷CheckUserCanBeAssignedToIssue instanceof Internal\Operator\Issues\CheckUserCanBeAssignedToIssue === false) {
            $this->issues👷CheckUserCanBeAssignedToIssue = new Internal\Operator\Issues\CheckUserCanBeAssignedToIssue($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Assignees🌀Assignee());
        }

        return $this->issues👷CheckUserCanBeAssignedToIssue;
    }

    public function issues👷ListComments(): Internal\Operator\Issues\ListComments
    {
        if ($this->issues👷ListComments instanceof Internal\Operator\Issues\ListComments === false) {
            $this->issues👷ListComments = new Internal\Operator\Issues\ListComments($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Comments());
        }

        return $this->issues👷ListComments;
    }

    public function issues👷ListCommentsListing(): Internal\Operator\Issues\ListCommentsListing
    {
        if ($this->issues👷ListCommentsListing instanceof Internal\Operator\Issues\ListCommentsListing === false) {
            $this->issues👷ListCommentsListing = new Internal\Operator\Issues\ListCommentsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Comments());
        }

        return $this->issues👷ListCommentsListing;
    }

    public function issues👷CreateComment(): Internal\Operator\Issues\CreateComment
    {
        if ($this->issues👷CreateComment instanceof Internal\Operator\Issues\CreateComment === false) {
            $this->issues👷CreateComment = new Internal\Operator\Issues\CreateComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Comments());
        }

        return $this->issues👷CreateComment;
    }

    public function issues👷ListEvents(): Internal\Operator\Issues\ListEvents
    {
        if ($this->issues👷ListEvents instanceof Internal\Operator\Issues\ListEvents === false) {
            $this->issues👷ListEvents = new Internal\Operator\Issues\ListEvents($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Events());
        }

        return $this->issues👷ListEvents;
    }

    public function issues👷ListEventsListing(): Internal\Operator\Issues\ListEventsListing
    {
        if ($this->issues👷ListEventsListing instanceof Internal\Operator\Issues\ListEventsListing === false) {
            $this->issues👷ListEventsListing = new Internal\Operator\Issues\ListEventsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Events());
        }

        return $this->issues👷ListEventsListing;
    }

    public function issues👷ListLabelsOnIssue(): Internal\Operator\Issues\ListLabelsOnIssue
    {
        if ($this->issues👷ListLabelsOnIssue instanceof Internal\Operator\Issues\ListLabelsOnIssue === false) {
            $this->issues👷ListLabelsOnIssue = new Internal\Operator\Issues\ListLabelsOnIssue($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels());
        }

        return $this->issues👷ListLabelsOnIssue;
    }

    public function issues👷ListLabelsOnIssueListing(): Internal\Operator\Issues\ListLabelsOnIssueListing
    {
        if ($this->issues👷ListLabelsOnIssueListing instanceof Internal\Operator\Issues\ListLabelsOnIssueListing === false) {
            $this->issues👷ListLabelsOnIssueListing = new Internal\Operator\Issues\ListLabelsOnIssueListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels());
        }

        return $this->issues👷ListLabelsOnIssueListing;
    }

    public function issues👷SetLabels(): Internal\Operator\Issues\SetLabels
    {
        if ($this->issues👷SetLabels instanceof Internal\Operator\Issues\SetLabels === false) {
            $this->issues👷SetLabels = new Internal\Operator\Issues\SetLabels($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels());
        }

        return $this->issues👷SetLabels;
    }

    public function issues👷AddLabels(): Internal\Operator\Issues\AddLabels
    {
        if ($this->issues👷AddLabels instanceof Internal\Operator\Issues\AddLabels === false) {
            $this->issues👷AddLabels = new Internal\Operator\Issues\AddLabels($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels());
        }

        return $this->issues👷AddLabels;
    }

    public function issues👷RemoveAllLabels(): Internal\Operator\Issues\RemoveAllLabels
    {
        if ($this->issues👷RemoveAllLabels instanceof Internal\Operator\Issues\RemoveAllLabels === false) {
            $this->issues👷RemoveAllLabels = new Internal\Operator\Issues\RemoveAllLabels($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels());
        }

        return $this->issues👷RemoveAllLabels;
    }

    public function issues👷RemoveLabel(): Internal\Operator\Issues\RemoveLabel
    {
        if ($this->issues👷RemoveLabel instanceof Internal\Operator\Issues\RemoveLabel === false) {
            $this->issues👷RemoveLabel = new Internal\Operator\Issues\RemoveLabel($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels🌀Name());
        }

        return $this->issues👷RemoveLabel;
    }

    public function issues👷Lock(): Internal\Operator\Issues\Lock
    {
        if ($this->issues👷Lock instanceof Internal\Operator\Issues\Lock === false) {
            $this->issues👷Lock = new Internal\Operator\Issues\Lock($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Lock());
        }

        return $this->issues👷Lock;
    }

    public function issues👷Unlock(): Internal\Operator\Issues\Unlock
    {
        if ($this->issues👷Unlock instanceof Internal\Operator\Issues\Unlock === false) {
            $this->issues👷Unlock = new Internal\Operator\Issues\Unlock($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Lock());
        }

        return $this->issues👷Unlock;
    }

    public function reactions👷ListForIssue(): Internal\Operator\Reactions\ListForIssue
    {
        if ($this->reactions👷ListForIssue instanceof Internal\Operator\Reactions\ListForIssue === false) {
            $this->reactions👷ListForIssue = new Internal\Operator\Reactions\ListForIssue($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions());
        }

        return $this->reactions👷ListForIssue;
    }

    public function reactions👷ListForIssueListing(): Internal\Operator\Reactions\ListForIssueListing
    {
        if ($this->reactions👷ListForIssueListing instanceof Internal\Operator\Reactions\ListForIssueListing === false) {
            $this->reactions👷ListForIssueListing = new Internal\Operator\Reactions\ListForIssueListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions());
        }

        return $this->reactions👷ListForIssueListing;
    }

    public function reactions👷CreateForIssue(): Internal\Operator\Reactions\CreateForIssue
    {
        if ($this->reactions👷CreateForIssue instanceof Internal\Operator\Reactions\CreateForIssue === false) {
            $this->reactions👷CreateForIssue = new Internal\Operator\Reactions\CreateForIssue($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions());
        }

        return $this->reactions👷CreateForIssue;
    }

    public function reactions👷DeleteForIssue(): Internal\Operator\Reactions\DeleteForIssue
    {
        if ($this->reactions👷DeleteForIssue instanceof Internal\Operator\Reactions\DeleteForIssue === false) {
            $this->reactions👷DeleteForIssue = new Internal\Operator\Reactions\DeleteForIssue($this->browser, $this->authentication);
        }

        return $this->reactions👷DeleteForIssue;
    }

    public function issues👷ListEventsForTimeline(): Internal\Operator\Issues\ListEventsForTimeline
    {
        if ($this->issues👷ListEventsForTimeline instanceof Internal\Operator\Issues\ListEventsForTimeline === false) {
            $this->issues👷ListEventsForTimeline = new Internal\Operator\Issues\ListEventsForTimeline($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Timeline());
        }

        return $this->issues👷ListEventsForTimeline;
    }

    public function issues👷ListEventsForTimelineListing(): Internal\Operator\Issues\ListEventsForTimelineListing
    {
        if ($this->issues👷ListEventsForTimelineListing instanceof Internal\Operator\Issues\ListEventsForTimelineListing === false) {
            $this->issues👷ListEventsForTimelineListing = new Internal\Operator\Issues\ListEventsForTimelineListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Timeline());
        }

        return $this->issues👷ListEventsForTimelineListing;
    }

    public function repos👷ListDeployKeys(): Internal\Operator\Repos\ListDeployKeys
    {
        if ($this->repos👷ListDeployKeys instanceof Internal\Operator\Repos\ListDeployKeys === false) {
            $this->repos👷ListDeployKeys = new Internal\Operator\Repos\ListDeployKeys($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Keys());
        }

        return $this->repos👷ListDeployKeys;
    }

    public function repos👷ListDeployKeysListing(): Internal\Operator\Repos\ListDeployKeysListing
    {
        if ($this->repos👷ListDeployKeysListing instanceof Internal\Operator\Repos\ListDeployKeysListing === false) {
            $this->repos👷ListDeployKeysListing = new Internal\Operator\Repos\ListDeployKeysListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Keys());
        }

        return $this->repos👷ListDeployKeysListing;
    }

    public function repos👷CreateDeployKey(): Internal\Operator\Repos\CreateDeployKey
    {
        if ($this->repos👷CreateDeployKey instanceof Internal\Operator\Repos\CreateDeployKey === false) {
            $this->repos👷CreateDeployKey = new Internal\Operator\Repos\CreateDeployKey($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Keys());
        }

        return $this->repos👷CreateDeployKey;
    }

    public function repos👷GetDeployKey(): Internal\Operator\Repos\GetDeployKey
    {
        if ($this->repos👷GetDeployKey instanceof Internal\Operator\Repos\GetDeployKey === false) {
            $this->repos👷GetDeployKey = new Internal\Operator\Repos\GetDeployKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Keys🌀KeyId());
        }

        return $this->repos👷GetDeployKey;
    }

    public function repos👷DeleteDeployKey(): Internal\Operator\Repos\DeleteDeployKey
    {
        if ($this->repos👷DeleteDeployKey instanceof Internal\Operator\Repos\DeleteDeployKey === false) {
            $this->repos👷DeleteDeployKey = new Internal\Operator\Repos\DeleteDeployKey($this->browser, $this->authentication);
        }

        return $this->repos👷DeleteDeployKey;
    }

    public function issues👷ListLabelsForRepo(): Internal\Operator\Issues\ListLabelsForRepo
    {
        if ($this->issues👷ListLabelsForRepo instanceof Internal\Operator\Issues\ListLabelsForRepo === false) {
            $this->issues👷ListLabelsForRepo = new Internal\Operator\Issues\ListLabelsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Labels());
        }

        return $this->issues👷ListLabelsForRepo;
    }

    public function issues👷ListLabelsForRepoListing(): Internal\Operator\Issues\ListLabelsForRepoListing
    {
        if ($this->issues👷ListLabelsForRepoListing instanceof Internal\Operator\Issues\ListLabelsForRepoListing === false) {
            $this->issues👷ListLabelsForRepoListing = new Internal\Operator\Issues\ListLabelsForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Labels());
        }

        return $this->issues👷ListLabelsForRepoListing;
    }

    public function issues👷CreateLabel(): Internal\Operator\Issues\CreateLabel
    {
        if ($this->issues👷CreateLabel instanceof Internal\Operator\Issues\CreateLabel === false) {
            $this->issues👷CreateLabel = new Internal\Operator\Issues\CreateLabel($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Labels());
        }

        return $this->issues👷CreateLabel;
    }

    public function issues👷GetLabel(): Internal\Operator\Issues\GetLabel
    {
        if ($this->issues👷GetLabel instanceof Internal\Operator\Issues\GetLabel === false) {
            $this->issues👷GetLabel = new Internal\Operator\Issues\GetLabel($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Labels🌀Name());
        }

        return $this->issues👷GetLabel;
    }

    public function issues👷DeleteLabel(): Internal\Operator\Issues\DeleteLabel
    {
        if ($this->issues👷DeleteLabel instanceof Internal\Operator\Issues\DeleteLabel === false) {
            $this->issues👷DeleteLabel = new Internal\Operator\Issues\DeleteLabel($this->browser, $this->authentication);
        }

        return $this->issues👷DeleteLabel;
    }

    public function issues👷UpdateLabel(): Internal\Operator\Issues\UpdateLabel
    {
        if ($this->issues👷UpdateLabel instanceof Internal\Operator\Issues\UpdateLabel === false) {
            $this->issues👷UpdateLabel = new Internal\Operator\Issues\UpdateLabel($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Labels🌀Name());
        }

        return $this->issues👷UpdateLabel;
    }

    public function repos👷ListLanguages(): Internal\Operator\Repos\ListLanguages
    {
        if ($this->repos👷ListLanguages instanceof Internal\Operator\Repos\ListLanguages === false) {
            $this->repos👷ListLanguages = new Internal\Operator\Repos\ListLanguages($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Languages());
        }

        return $this->repos👷ListLanguages;
    }

    public function repos👷EnableLfsForRepo(): Internal\Operator\Repos\EnableLfsForRepo
    {
        if ($this->repos👷EnableLfsForRepo instanceof Internal\Operator\Repos\EnableLfsForRepo === false) {
            $this->repos👷EnableLfsForRepo = new Internal\Operator\Repos\EnableLfsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Lfs());
        }

        return $this->repos👷EnableLfsForRepo;
    }

    public function repos👷DisableLfsForRepo(): Internal\Operator\Repos\DisableLfsForRepo
    {
        if ($this->repos👷DisableLfsForRepo instanceof Internal\Operator\Repos\DisableLfsForRepo === false) {
            $this->repos👷DisableLfsForRepo = new Internal\Operator\Repos\DisableLfsForRepo($this->browser, $this->authentication);
        }

        return $this->repos👷DisableLfsForRepo;
    }

    public function licenses👷GetForRepo(): Internal\Operator\Licenses\GetForRepo
    {
        if ($this->licenses👷GetForRepo instanceof Internal\Operator\Licenses\GetForRepo === false) {
            $this->licenses👷GetForRepo = new Internal\Operator\Licenses\GetForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀License());
        }

        return $this->licenses👷GetForRepo;
    }

    public function repos👷MergeUpstream(): Internal\Operator\Repos\MergeUpstream
    {
        if ($this->repos👷MergeUpstream instanceof Internal\Operator\Repos\MergeUpstream === false) {
            $this->repos👷MergeUpstream = new Internal\Operator\Repos\MergeUpstream($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀MergeUpstream());
        }

        return $this->repos👷MergeUpstream;
    }

    public function repos👷Merge(): Internal\Operator\Repos\Merge
    {
        if ($this->repos👷Merge instanceof Internal\Operator\Repos\Merge === false) {
            $this->repos👷Merge = new Internal\Operator\Repos\Merge($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Merges());
        }

        return $this->repos👷Merge;
    }

    public function issues👷ListMilestones(): Internal\Operator\Issues\ListMilestones
    {
        if ($this->issues👷ListMilestones instanceof Internal\Operator\Issues\ListMilestones === false) {
            $this->issues👷ListMilestones = new Internal\Operator\Issues\ListMilestones($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones());
        }

        return $this->issues👷ListMilestones;
    }

    public function issues👷ListMilestonesListing(): Internal\Operator\Issues\ListMilestonesListing
    {
        if ($this->issues👷ListMilestonesListing instanceof Internal\Operator\Issues\ListMilestonesListing === false) {
            $this->issues👷ListMilestonesListing = new Internal\Operator\Issues\ListMilestonesListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones());
        }

        return $this->issues👷ListMilestonesListing;
    }

    public function issues👷CreateMilestone(): Internal\Operator\Issues\CreateMilestone
    {
        if ($this->issues👷CreateMilestone instanceof Internal\Operator\Issues\CreateMilestone === false) {
            $this->issues👷CreateMilestone = new Internal\Operator\Issues\CreateMilestone($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones());
        }

        return $this->issues👷CreateMilestone;
    }

    public function issues👷GetMilestone(): Internal\Operator\Issues\GetMilestone
    {
        if ($this->issues👷GetMilestone instanceof Internal\Operator\Issues\GetMilestone === false) {
            $this->issues👷GetMilestone = new Internal\Operator\Issues\GetMilestone($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber());
        }

        return $this->issues👷GetMilestone;
    }

    public function issues👷DeleteMilestone(): Internal\Operator\Issues\DeleteMilestone
    {
        if ($this->issues👷DeleteMilestone instanceof Internal\Operator\Issues\DeleteMilestone === false) {
            $this->issues👷DeleteMilestone = new Internal\Operator\Issues\DeleteMilestone($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber());
        }

        return $this->issues👷DeleteMilestone;
    }

    public function issues👷UpdateMilestone(): Internal\Operator\Issues\UpdateMilestone
    {
        if ($this->issues👷UpdateMilestone instanceof Internal\Operator\Issues\UpdateMilestone === false) {
            $this->issues👷UpdateMilestone = new Internal\Operator\Issues\UpdateMilestone($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber());
        }

        return $this->issues👷UpdateMilestone;
    }

    public function issues👷ListLabelsForMilestone(): Internal\Operator\Issues\ListLabelsForMilestone
    {
        if ($this->issues👷ListLabelsForMilestone instanceof Internal\Operator\Issues\ListLabelsForMilestone === false) {
            $this->issues👷ListLabelsForMilestone = new Internal\Operator\Issues\ListLabelsForMilestone($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber🌀Labels());
        }

        return $this->issues👷ListLabelsForMilestone;
    }

    public function issues👷ListLabelsForMilestoneListing(): Internal\Operator\Issues\ListLabelsForMilestoneListing
    {
        if ($this->issues👷ListLabelsForMilestoneListing instanceof Internal\Operator\Issues\ListLabelsForMilestoneListing === false) {
            $this->issues👷ListLabelsForMilestoneListing = new Internal\Operator\Issues\ListLabelsForMilestoneListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber🌀Labels());
        }

        return $this->issues👷ListLabelsForMilestoneListing;
    }

    public function activity👷ListRepoNotificationsForAuthenticatedUser(): Internal\Operator\Activity\ListRepoNotificationsForAuthenticatedUser
    {
        if ($this->activity👷ListRepoNotificationsForAuthenticatedUser instanceof Internal\Operator\Activity\ListRepoNotificationsForAuthenticatedUser === false) {
            $this->activity👷ListRepoNotificationsForAuthenticatedUser = new Internal\Operator\Activity\ListRepoNotificationsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Notifications());
        }

        return $this->activity👷ListRepoNotificationsForAuthenticatedUser;
    }

    public function activity👷ListRepoNotificationsForAuthenticatedUserListing(): Internal\Operator\Activity\ListRepoNotificationsForAuthenticatedUserListing
    {
        if ($this->activity👷ListRepoNotificationsForAuthenticatedUserListing instanceof Internal\Operator\Activity\ListRepoNotificationsForAuthenticatedUserListing === false) {
            $this->activity👷ListRepoNotificationsForAuthenticatedUserListing = new Internal\Operator\Activity\ListRepoNotificationsForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Notifications());
        }

        return $this->activity👷ListRepoNotificationsForAuthenticatedUserListing;
    }

    public function activity👷MarkRepoNotificationsAsRead(): Internal\Operator\Activity\MarkRepoNotificationsAsRead
    {
        if ($this->activity👷MarkRepoNotificationsAsRead instanceof Internal\Operator\Activity\MarkRepoNotificationsAsRead === false) {
            $this->activity👷MarkRepoNotificationsAsRead = new Internal\Operator\Activity\MarkRepoNotificationsAsRead($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Notifications());
        }

        return $this->activity👷MarkRepoNotificationsAsRead;
    }

    public function repos👷GetPages(): Internal\Operator\Repos\GetPages
    {
        if ($this->repos👷GetPages instanceof Internal\Operator\Repos\GetPages === false) {
            $this->repos👷GetPages = new Internal\Operator\Repos\GetPages($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages());
        }

        return $this->repos👷GetPages;
    }

    public function repos👷UpdateInformationAboutPagesSite(): Internal\Operator\Repos\UpdateInformationAboutPagesSite
    {
        if ($this->repos👷UpdateInformationAboutPagesSite instanceof Internal\Operator\Repos\UpdateInformationAboutPagesSite === false) {
            $this->repos👷UpdateInformationAboutPagesSite = new Internal\Operator\Repos\UpdateInformationAboutPagesSite($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages());
        }

        return $this->repos👷UpdateInformationAboutPagesSite;
    }

    public function repos👷CreatePagesSite(): Internal\Operator\Repos\CreatePagesSite
    {
        if ($this->repos👷CreatePagesSite instanceof Internal\Operator\Repos\CreatePagesSite === false) {
            $this->repos👷CreatePagesSite = new Internal\Operator\Repos\CreatePagesSite($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages());
        }

        return $this->repos👷CreatePagesSite;
    }

    public function repos👷DeletePagesSite(): Internal\Operator\Repos\DeletePagesSite
    {
        if ($this->repos👷DeletePagesSite instanceof Internal\Operator\Repos\DeletePagesSite === false) {
            $this->repos👷DeletePagesSite = new Internal\Operator\Repos\DeletePagesSite($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages());
        }

        return $this->repos👷DeletePagesSite;
    }

    public function repos👷ListPagesBuilds(): Internal\Operator\Repos\ListPagesBuilds
    {
        if ($this->repos👷ListPagesBuilds instanceof Internal\Operator\Repos\ListPagesBuilds === false) {
            $this->repos👷ListPagesBuilds = new Internal\Operator\Repos\ListPagesBuilds($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds());
        }

        return $this->repos👷ListPagesBuilds;
    }

    public function repos👷ListPagesBuildsListing(): Internal\Operator\Repos\ListPagesBuildsListing
    {
        if ($this->repos👷ListPagesBuildsListing instanceof Internal\Operator\Repos\ListPagesBuildsListing === false) {
            $this->repos👷ListPagesBuildsListing = new Internal\Operator\Repos\ListPagesBuildsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds());
        }

        return $this->repos👷ListPagesBuildsListing;
    }

    public function repos👷RequestPagesBuild(): Internal\Operator\Repos\RequestPagesBuild
    {
        if ($this->repos👷RequestPagesBuild instanceof Internal\Operator\Repos\RequestPagesBuild === false) {
            $this->repos👷RequestPagesBuild = new Internal\Operator\Repos\RequestPagesBuild($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds());
        }

        return $this->repos👷RequestPagesBuild;
    }

    public function repos👷GetLatestPagesBuild(): Internal\Operator\Repos\GetLatestPagesBuild
    {
        if ($this->repos👷GetLatestPagesBuild instanceof Internal\Operator\Repos\GetLatestPagesBuild === false) {
            $this->repos👷GetLatestPagesBuild = new Internal\Operator\Repos\GetLatestPagesBuild($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀Latest());
        }

        return $this->repos👷GetLatestPagesBuild;
    }

    public function repos👷GetPagesBuild(): Internal\Operator\Repos\GetPagesBuild
    {
        if ($this->repos👷GetPagesBuild instanceof Internal\Operator\Repos\GetPagesBuild === false) {
            $this->repos👷GetPagesBuild = new Internal\Operator\Repos\GetPagesBuild($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀BuildId());
        }

        return $this->repos👷GetPagesBuild;
    }

    public function projects👷ListForRepo(): Internal\Operator\Projects\ListForRepo
    {
        if ($this->projects👷ListForRepo instanceof Internal\Operator\Projects\ListForRepo === false) {
            $this->projects👷ListForRepo = new Internal\Operator\Projects\ListForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Projects());
        }

        return $this->projects👷ListForRepo;
    }

    public function projects👷ListForRepoListing(): Internal\Operator\Projects\ListForRepoListing
    {
        if ($this->projects👷ListForRepoListing instanceof Internal\Operator\Projects\ListForRepoListing === false) {
            $this->projects👷ListForRepoListing = new Internal\Operator\Projects\ListForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Projects());
        }

        return $this->projects👷ListForRepoListing;
    }

    public function projects👷CreateForRepo(): Internal\Operator\Projects\CreateForRepo
    {
        if ($this->projects👷CreateForRepo instanceof Internal\Operator\Projects\CreateForRepo === false) {
            $this->projects👷CreateForRepo = new Internal\Operator\Projects\CreateForRepo($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Projects());
        }

        return $this->projects👷CreateForRepo;
    }

    public function pulls👷List_(): Internal\Operator\Pulls\List_
    {
        if ($this->pulls👷List_ instanceof Internal\Operator\Pulls\List_ === false) {
            $this->pulls👷List_ = new Internal\Operator\Pulls\List_($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls());
        }

        return $this->pulls👷List_;
    }

    public function pulls👷ListListing(): Internal\Operator\Pulls\ListListing
    {
        if ($this->pulls👷ListListing instanceof Internal\Operator\Pulls\ListListing === false) {
            $this->pulls👷ListListing = new Internal\Operator\Pulls\ListListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls());
        }

        return $this->pulls👷ListListing;
    }

    public function pulls👷Create(): Internal\Operator\Pulls\Create
    {
        if ($this->pulls👷Create instanceof Internal\Operator\Pulls\Create === false) {
            $this->pulls👷Create = new Internal\Operator\Pulls\Create($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls());
        }

        return $this->pulls👷Create;
    }

    public function pulls👷ListReviewCommentsForRepo(): Internal\Operator\Pulls\ListReviewCommentsForRepo
    {
        if ($this->pulls👷ListReviewCommentsForRepo instanceof Internal\Operator\Pulls\ListReviewCommentsForRepo === false) {
            $this->pulls👷ListReviewCommentsForRepo = new Internal\Operator\Pulls\ListReviewCommentsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments());
        }

        return $this->pulls👷ListReviewCommentsForRepo;
    }

    public function pulls👷ListReviewCommentsForRepoListing(): Internal\Operator\Pulls\ListReviewCommentsForRepoListing
    {
        if ($this->pulls👷ListReviewCommentsForRepoListing instanceof Internal\Operator\Pulls\ListReviewCommentsForRepoListing === false) {
            $this->pulls👷ListReviewCommentsForRepoListing = new Internal\Operator\Pulls\ListReviewCommentsForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments());
        }

        return $this->pulls👷ListReviewCommentsForRepoListing;
    }

    public function pulls👷GetReviewComment(): Internal\Operator\Pulls\GetReviewComment
    {
        if ($this->pulls👷GetReviewComment instanceof Internal\Operator\Pulls\GetReviewComment === false) {
            $this->pulls👷GetReviewComment = new Internal\Operator\Pulls\GetReviewComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId());
        }

        return $this->pulls👷GetReviewComment;
    }

    public function pulls👷DeleteReviewComment(): Internal\Operator\Pulls\DeleteReviewComment
    {
        if ($this->pulls👷DeleteReviewComment instanceof Internal\Operator\Pulls\DeleteReviewComment === false) {
            $this->pulls👷DeleteReviewComment = new Internal\Operator\Pulls\DeleteReviewComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId());
        }

        return $this->pulls👷DeleteReviewComment;
    }

    public function pulls👷UpdateReviewComment(): Internal\Operator\Pulls\UpdateReviewComment
    {
        if ($this->pulls👷UpdateReviewComment instanceof Internal\Operator\Pulls\UpdateReviewComment === false) {
            $this->pulls👷UpdateReviewComment = new Internal\Operator\Pulls\UpdateReviewComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId());
        }

        return $this->pulls👷UpdateReviewComment;
    }

    public function reactions👷ListForPullRequestReviewComment(): Internal\Operator\Reactions\ListForPullRequestReviewComment
    {
        if ($this->reactions👷ListForPullRequestReviewComment instanceof Internal\Operator\Reactions\ListForPullRequestReviewComment === false) {
            $this->reactions👷ListForPullRequestReviewComment = new Internal\Operator\Reactions\ListForPullRequestReviewComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions());
        }

        return $this->reactions👷ListForPullRequestReviewComment;
    }

    public function reactions👷ListForPullRequestReviewCommentListing(): Internal\Operator\Reactions\ListForPullRequestReviewCommentListing
    {
        if ($this->reactions👷ListForPullRequestReviewCommentListing instanceof Internal\Operator\Reactions\ListForPullRequestReviewCommentListing === false) {
            $this->reactions👷ListForPullRequestReviewCommentListing = new Internal\Operator\Reactions\ListForPullRequestReviewCommentListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions());
        }

        return $this->reactions👷ListForPullRequestReviewCommentListing;
    }

    public function reactions👷CreateForPullRequestReviewComment(): Internal\Operator\Reactions\CreateForPullRequestReviewComment
    {
        if ($this->reactions👷CreateForPullRequestReviewComment instanceof Internal\Operator\Reactions\CreateForPullRequestReviewComment === false) {
            $this->reactions👷CreateForPullRequestReviewComment = new Internal\Operator\Reactions\CreateForPullRequestReviewComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions());
        }

        return $this->reactions👷CreateForPullRequestReviewComment;
    }

    public function reactions👷DeleteForPullRequestComment(): Internal\Operator\Reactions\DeleteForPullRequestComment
    {
        if ($this->reactions👷DeleteForPullRequestComment instanceof Internal\Operator\Reactions\DeleteForPullRequestComment === false) {
            $this->reactions👷DeleteForPullRequestComment = new Internal\Operator\Reactions\DeleteForPullRequestComment($this->browser, $this->authentication);
        }

        return $this->reactions👷DeleteForPullRequestComment;
    }

    public function pulls👷Get(): Internal\Operator\Pulls\Get
    {
        if ($this->pulls👷Get instanceof Internal\Operator\Pulls\Get === false) {
            $this->pulls👷Get = new Internal\Operator\Pulls\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber());
        }

        return $this->pulls👷Get;
    }

    public function pulls👷Update(): Internal\Operator\Pulls\Update
    {
        if ($this->pulls👷Update instanceof Internal\Operator\Pulls\Update === false) {
            $this->pulls👷Update = new Internal\Operator\Pulls\Update($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber());
        }

        return $this->pulls👷Update;
    }

    public function pulls👷ListReviewComments(): Internal\Operator\Pulls\ListReviewComments
    {
        if ($this->pulls👷ListReviewComments instanceof Internal\Operator\Pulls\ListReviewComments === false) {
            $this->pulls👷ListReviewComments = new Internal\Operator\Pulls\ListReviewComments($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments());
        }

        return $this->pulls👷ListReviewComments;
    }

    public function pulls👷ListReviewCommentsListing(): Internal\Operator\Pulls\ListReviewCommentsListing
    {
        if ($this->pulls👷ListReviewCommentsListing instanceof Internal\Operator\Pulls\ListReviewCommentsListing === false) {
            $this->pulls👷ListReviewCommentsListing = new Internal\Operator\Pulls\ListReviewCommentsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments());
        }

        return $this->pulls👷ListReviewCommentsListing;
    }

    public function pulls👷CreateReviewComment(): Internal\Operator\Pulls\CreateReviewComment
    {
        if ($this->pulls👷CreateReviewComment instanceof Internal\Operator\Pulls\CreateReviewComment === false) {
            $this->pulls👷CreateReviewComment = new Internal\Operator\Pulls\CreateReviewComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments());
        }

        return $this->pulls👷CreateReviewComment;
    }

    public function pulls👷CreateReplyForReviewComment(): Internal\Operator\Pulls\CreateReplyForReviewComment
    {
        if ($this->pulls👷CreateReplyForReviewComment instanceof Internal\Operator\Pulls\CreateReplyForReviewComment === false) {
            $this->pulls👷CreateReplyForReviewComment = new Internal\Operator\Pulls\CreateReplyForReviewComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments🌀CommentId🌀Replies());
        }

        return $this->pulls👷CreateReplyForReviewComment;
    }

    public function pulls👷ListCommits(): Internal\Operator\Pulls\ListCommits
    {
        if ($this->pulls👷ListCommits instanceof Internal\Operator\Pulls\ListCommits === false) {
            $this->pulls👷ListCommits = new Internal\Operator\Pulls\ListCommits($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Commits());
        }

        return $this->pulls👷ListCommits;
    }

    public function pulls👷ListCommitsListing(): Internal\Operator\Pulls\ListCommitsListing
    {
        if ($this->pulls👷ListCommitsListing instanceof Internal\Operator\Pulls\ListCommitsListing === false) {
            $this->pulls👷ListCommitsListing = new Internal\Operator\Pulls\ListCommitsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Commits());
        }

        return $this->pulls👷ListCommitsListing;
    }

    public function pulls👷ListFiles(): Internal\Operator\Pulls\ListFiles
    {
        if ($this->pulls👷ListFiles instanceof Internal\Operator\Pulls\ListFiles === false) {
            $this->pulls👷ListFiles = new Internal\Operator\Pulls\ListFiles($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Files());
        }

        return $this->pulls👷ListFiles;
    }

    public function pulls👷ListFilesListing(): Internal\Operator\Pulls\ListFilesListing
    {
        if ($this->pulls👷ListFilesListing instanceof Internal\Operator\Pulls\ListFilesListing === false) {
            $this->pulls👷ListFilesListing = new Internal\Operator\Pulls\ListFilesListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Files());
        }

        return $this->pulls👷ListFilesListing;
    }

    public function pulls👷CheckIfMerged(): Internal\Operator\Pulls\CheckIfMerged
    {
        if ($this->pulls👷CheckIfMerged instanceof Internal\Operator\Pulls\CheckIfMerged === false) {
            $this->pulls👷CheckIfMerged = new Internal\Operator\Pulls\CheckIfMerged($this->browser, $this->authentication);
        }

        return $this->pulls👷CheckIfMerged;
    }

    public function pulls👷Merge(): Internal\Operator\Pulls\Merge
    {
        if ($this->pulls👷Merge instanceof Internal\Operator\Pulls\Merge === false) {
            $this->pulls👷Merge = new Internal\Operator\Pulls\Merge($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Merge());
        }

        return $this->pulls👷Merge;
    }

    public function pulls👷ListRequestedReviewers(): Internal\Operator\Pulls\ListRequestedReviewers
    {
        if ($this->pulls👷ListRequestedReviewers instanceof Internal\Operator\Pulls\ListRequestedReviewers === false) {
            $this->pulls👷ListRequestedReviewers = new Internal\Operator\Pulls\ListRequestedReviewers($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀RequestedReviewers());
        }

        return $this->pulls👷ListRequestedReviewers;
    }

    public function pulls👷RequestReviewers(): Internal\Operator\Pulls\RequestReviewers
    {
        if ($this->pulls👷RequestReviewers instanceof Internal\Operator\Pulls\RequestReviewers === false) {
            $this->pulls👷RequestReviewers = new Internal\Operator\Pulls\RequestReviewers($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀RequestedReviewers());
        }

        return $this->pulls👷RequestReviewers;
    }

    public function pulls👷RemoveRequestedReviewers(): Internal\Operator\Pulls\RemoveRequestedReviewers
    {
        if ($this->pulls👷RemoveRequestedReviewers instanceof Internal\Operator\Pulls\RemoveRequestedReviewers === false) {
            $this->pulls👷RemoveRequestedReviewers = new Internal\Operator\Pulls\RemoveRequestedReviewers($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀RequestedReviewers());
        }

        return $this->pulls👷RemoveRequestedReviewers;
    }

    public function pulls👷ListReviews(): Internal\Operator\Pulls\ListReviews
    {
        if ($this->pulls👷ListReviews instanceof Internal\Operator\Pulls\ListReviews === false) {
            $this->pulls👷ListReviews = new Internal\Operator\Pulls\ListReviews($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews());
        }

        return $this->pulls👷ListReviews;
    }

    public function pulls👷ListReviewsListing(): Internal\Operator\Pulls\ListReviewsListing
    {
        if ($this->pulls👷ListReviewsListing instanceof Internal\Operator\Pulls\ListReviewsListing === false) {
            $this->pulls👷ListReviewsListing = new Internal\Operator\Pulls\ListReviewsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews());
        }

        return $this->pulls👷ListReviewsListing;
    }

    public function pulls👷CreateReview(): Internal\Operator\Pulls\CreateReview
    {
        if ($this->pulls👷CreateReview instanceof Internal\Operator\Pulls\CreateReview === false) {
            $this->pulls👷CreateReview = new Internal\Operator\Pulls\CreateReview($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews());
        }

        return $this->pulls👷CreateReview;
    }

    public function pulls👷GetReview(): Internal\Operator\Pulls\GetReview
    {
        if ($this->pulls👷GetReview instanceof Internal\Operator\Pulls\GetReview === false) {
            $this->pulls👷GetReview = new Internal\Operator\Pulls\GetReview($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId());
        }

        return $this->pulls👷GetReview;
    }

    public function pulls👷UpdateReview(): Internal\Operator\Pulls\UpdateReview
    {
        if ($this->pulls👷UpdateReview instanceof Internal\Operator\Pulls\UpdateReview === false) {
            $this->pulls👷UpdateReview = new Internal\Operator\Pulls\UpdateReview($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId());
        }

        return $this->pulls👷UpdateReview;
    }

    public function pulls👷DeletePendingReview(): Internal\Operator\Pulls\DeletePendingReview
    {
        if ($this->pulls👷DeletePendingReview instanceof Internal\Operator\Pulls\DeletePendingReview === false) {
            $this->pulls👷DeletePendingReview = new Internal\Operator\Pulls\DeletePendingReview($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId());
        }

        return $this->pulls👷DeletePendingReview;
    }

    public function pulls👷ListCommentsForReview(): Internal\Operator\Pulls\ListCommentsForReview
    {
        if ($this->pulls👷ListCommentsForReview instanceof Internal\Operator\Pulls\ListCommentsForReview === false) {
            $this->pulls👷ListCommentsForReview = new Internal\Operator\Pulls\ListCommentsForReview($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Comments());
        }

        return $this->pulls👷ListCommentsForReview;
    }

    public function pulls👷ListCommentsForReviewListing(): Internal\Operator\Pulls\ListCommentsForReviewListing
    {
        if ($this->pulls👷ListCommentsForReviewListing instanceof Internal\Operator\Pulls\ListCommentsForReviewListing === false) {
            $this->pulls👷ListCommentsForReviewListing = new Internal\Operator\Pulls\ListCommentsForReviewListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Comments());
        }

        return $this->pulls👷ListCommentsForReviewListing;
    }

    public function pulls👷DismissReview(): Internal\Operator\Pulls\DismissReview
    {
        if ($this->pulls👷DismissReview instanceof Internal\Operator\Pulls\DismissReview === false) {
            $this->pulls👷DismissReview = new Internal\Operator\Pulls\DismissReview($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Dismissals());
        }

        return $this->pulls👷DismissReview;
    }

    public function pulls👷SubmitReview(): Internal\Operator\Pulls\SubmitReview
    {
        if ($this->pulls👷SubmitReview instanceof Internal\Operator\Pulls\SubmitReview === false) {
            $this->pulls👷SubmitReview = new Internal\Operator\Pulls\SubmitReview($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Events());
        }

        return $this->pulls👷SubmitReview;
    }

    public function pulls👷UpdateBranch(): Internal\Operator\Pulls\UpdateBranch
    {
        if ($this->pulls👷UpdateBranch instanceof Internal\Operator\Pulls\UpdateBranch === false) {
            $this->pulls👷UpdateBranch = new Internal\Operator\Pulls\UpdateBranch($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀UpdateBranch());
        }

        return $this->pulls👷UpdateBranch;
    }

    public function repos👷GetReadme(): Internal\Operator\Repos\GetReadme
    {
        if ($this->repos👷GetReadme instanceof Internal\Operator\Repos\GetReadme === false) {
            $this->repos👷GetReadme = new Internal\Operator\Repos\GetReadme($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Readme());
        }

        return $this->repos👷GetReadme;
    }

    public function repos👷GetReadmeInDirectory(): Internal\Operator\Repos\GetReadmeInDirectory
    {
        if ($this->repos👷GetReadmeInDirectory instanceof Internal\Operator\Repos\GetReadmeInDirectory === false) {
            $this->repos👷GetReadmeInDirectory = new Internal\Operator\Repos\GetReadmeInDirectory($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Readme🌀Dir());
        }

        return $this->repos👷GetReadmeInDirectory;
    }

    public function repos👷ListReleases(): Internal\Operator\Repos\ListReleases
    {
        if ($this->repos👷ListReleases instanceof Internal\Operator\Repos\ListReleases === false) {
            $this->repos👷ListReleases = new Internal\Operator\Repos\ListReleases($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases());
        }

        return $this->repos👷ListReleases;
    }

    public function repos👷ListReleasesListing(): Internal\Operator\Repos\ListReleasesListing
    {
        if ($this->repos👷ListReleasesListing instanceof Internal\Operator\Repos\ListReleasesListing === false) {
            $this->repos👷ListReleasesListing = new Internal\Operator\Repos\ListReleasesListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases());
        }

        return $this->repos👷ListReleasesListing;
    }

    public function repos👷CreateRelease(): Internal\Operator\Repos\CreateRelease
    {
        if ($this->repos👷CreateRelease instanceof Internal\Operator\Repos\CreateRelease === false) {
            $this->repos👷CreateRelease = new Internal\Operator\Repos\CreateRelease($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases());
        }

        return $this->repos👷CreateRelease;
    }

    public function repos👷GetReleaseAsset(): Internal\Operator\Repos\GetReleaseAsset
    {
        if ($this->repos👷GetReleaseAsset instanceof Internal\Operator\Repos\GetReleaseAsset === false) {
            $this->repos👷GetReleaseAsset = new Internal\Operator\Repos\GetReleaseAsset($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀Assets🌀AssetId());
        }

        return $this->repos👷GetReleaseAsset;
    }

    public function repos👷DeleteReleaseAsset(): Internal\Operator\Repos\DeleteReleaseAsset
    {
        if ($this->repos👷DeleteReleaseAsset instanceof Internal\Operator\Repos\DeleteReleaseAsset === false) {
            $this->repos👷DeleteReleaseAsset = new Internal\Operator\Repos\DeleteReleaseAsset($this->browser, $this->authentication);
        }

        return $this->repos👷DeleteReleaseAsset;
    }

    public function repos👷UpdateReleaseAsset(): Internal\Operator\Repos\UpdateReleaseAsset
    {
        if ($this->repos👷UpdateReleaseAsset instanceof Internal\Operator\Repos\UpdateReleaseAsset === false) {
            $this->repos👷UpdateReleaseAsset = new Internal\Operator\Repos\UpdateReleaseAsset($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀Assets🌀AssetId());
        }

        return $this->repos👷UpdateReleaseAsset;
    }

    public function repos👷GetLatestRelease(): Internal\Operator\Repos\GetLatestRelease
    {
        if ($this->repos👷GetLatestRelease instanceof Internal\Operator\Repos\GetLatestRelease === false) {
            $this->repos👷GetLatestRelease = new Internal\Operator\Repos\GetLatestRelease($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀Latest());
        }

        return $this->repos👷GetLatestRelease;
    }

    public function repos👷GetReleaseByTag(): Internal\Operator\Repos\GetReleaseByTag
    {
        if ($this->repos👷GetReleaseByTag instanceof Internal\Operator\Repos\GetReleaseByTag === false) {
            $this->repos👷GetReleaseByTag = new Internal\Operator\Repos\GetReleaseByTag($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀Tags🌀Tag());
        }

        return $this->repos👷GetReleaseByTag;
    }

    public function repos👷GetRelease(): Internal\Operator\Repos\GetRelease
    {
        if ($this->repos👷GetRelease instanceof Internal\Operator\Repos\GetRelease === false) {
            $this->repos👷GetRelease = new Internal\Operator\Repos\GetRelease($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId());
        }

        return $this->repos👷GetRelease;
    }

    public function repos👷DeleteRelease(): Internal\Operator\Repos\DeleteRelease
    {
        if ($this->repos👷DeleteRelease instanceof Internal\Operator\Repos\DeleteRelease === false) {
            $this->repos👷DeleteRelease = new Internal\Operator\Repos\DeleteRelease($this->browser, $this->authentication);
        }

        return $this->repos👷DeleteRelease;
    }

    public function repos👷UpdateRelease(): Internal\Operator\Repos\UpdateRelease
    {
        if ($this->repos👷UpdateRelease instanceof Internal\Operator\Repos\UpdateRelease === false) {
            $this->repos👷UpdateRelease = new Internal\Operator\Repos\UpdateRelease($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId());
        }

        return $this->repos👷UpdateRelease;
    }

    public function repos👷ListReleaseAssets(): Internal\Operator\Repos\ListReleaseAssets
    {
        if ($this->repos👷ListReleaseAssets instanceof Internal\Operator\Repos\ListReleaseAssets === false) {
            $this->repos👷ListReleaseAssets = new Internal\Operator\Repos\ListReleaseAssets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Assets());
        }

        return $this->repos👷ListReleaseAssets;
    }

    public function repos👷ListReleaseAssetsListing(): Internal\Operator\Repos\ListReleaseAssetsListing
    {
        if ($this->repos👷ListReleaseAssetsListing instanceof Internal\Operator\Repos\ListReleaseAssetsListing === false) {
            $this->repos👷ListReleaseAssetsListing = new Internal\Operator\Repos\ListReleaseAssetsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Assets());
        }

        return $this->repos👷ListReleaseAssetsListing;
    }

    public function repos👷UploadReleaseAsset(): Internal\Operator\Repos\UploadReleaseAsset
    {
        if ($this->repos👷UploadReleaseAsset instanceof Internal\Operator\Repos\UploadReleaseAsset === false) {
            $this->repos👷UploadReleaseAsset = new Internal\Operator\Repos\UploadReleaseAsset($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Assets());
        }

        return $this->repos👷UploadReleaseAsset;
    }

    public function reactions👷ListForRelease(): Internal\Operator\Reactions\ListForRelease
    {
        if ($this->reactions👷ListForRelease instanceof Internal\Operator\Reactions\ListForRelease === false) {
            $this->reactions👷ListForRelease = new Internal\Operator\Reactions\ListForRelease($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Reactions());
        }

        return $this->reactions👷ListForRelease;
    }

    public function reactions👷ListForReleaseListing(): Internal\Operator\Reactions\ListForReleaseListing
    {
        if ($this->reactions👷ListForReleaseListing instanceof Internal\Operator\Reactions\ListForReleaseListing === false) {
            $this->reactions👷ListForReleaseListing = new Internal\Operator\Reactions\ListForReleaseListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Reactions());
        }

        return $this->reactions👷ListForReleaseListing;
    }

    public function reactions👷CreateForRelease(): Internal\Operator\Reactions\CreateForRelease
    {
        if ($this->reactions👷CreateForRelease instanceof Internal\Operator\Reactions\CreateForRelease === false) {
            $this->reactions👷CreateForRelease = new Internal\Operator\Reactions\CreateForRelease($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Reactions());
        }

        return $this->reactions👷CreateForRelease;
    }

    public function reactions👷DeleteForRelease(): Internal\Operator\Reactions\DeleteForRelease
    {
        if ($this->reactions👷DeleteForRelease instanceof Internal\Operator\Reactions\DeleteForRelease === false) {
            $this->reactions👷DeleteForRelease = new Internal\Operator\Reactions\DeleteForRelease($this->browser, $this->authentication);
        }

        return $this->reactions👷DeleteForRelease;
    }

    public function secretScanning👷ListAlertsForRepo(): Internal\Operator\SecretScanning\ListAlertsForRepo
    {
        if ($this->secretScanning👷ListAlertsForRepo instanceof Internal\Operator\SecretScanning\ListAlertsForRepo === false) {
            $this->secretScanning👷ListAlertsForRepo = new Internal\Operator\SecretScanning\ListAlertsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts());
        }

        return $this->secretScanning👷ListAlertsForRepo;
    }

    public function secretScanning👷ListAlertsForRepoListing(): Internal\Operator\SecretScanning\ListAlertsForRepoListing
    {
        if ($this->secretScanning👷ListAlertsForRepoListing instanceof Internal\Operator\SecretScanning\ListAlertsForRepoListing === false) {
            $this->secretScanning👷ListAlertsForRepoListing = new Internal\Operator\SecretScanning\ListAlertsForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts());
        }

        return $this->secretScanning👷ListAlertsForRepoListing;
    }

    public function secretScanning👷GetAlert(): Internal\Operator\SecretScanning\GetAlert
    {
        if ($this->secretScanning👷GetAlert instanceof Internal\Operator\SecretScanning\GetAlert === false) {
            $this->secretScanning👷GetAlert = new Internal\Operator\SecretScanning\GetAlert($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber());
        }

        return $this->secretScanning👷GetAlert;
    }

    public function secretScanning👷UpdateAlert(): Internal\Operator\SecretScanning\UpdateAlert
    {
        if ($this->secretScanning👷UpdateAlert instanceof Internal\Operator\SecretScanning\UpdateAlert === false) {
            $this->secretScanning👷UpdateAlert = new Internal\Operator\SecretScanning\UpdateAlert($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber());
        }

        return $this->secretScanning👷UpdateAlert;
    }

    public function secretScanning👷ListLocationsForAlert(): Internal\Operator\SecretScanning\ListLocationsForAlert
    {
        if ($this->secretScanning👷ListLocationsForAlert instanceof Internal\Operator\SecretScanning\ListLocationsForAlert === false) {
            $this->secretScanning👷ListLocationsForAlert = new Internal\Operator\SecretScanning\ListLocationsForAlert($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber🌀Locations());
        }

        return $this->secretScanning👷ListLocationsForAlert;
    }

    public function secretScanning👷ListLocationsForAlertListing(): Internal\Operator\SecretScanning\ListLocationsForAlertListing
    {
        if ($this->secretScanning👷ListLocationsForAlertListing instanceof Internal\Operator\SecretScanning\ListLocationsForAlertListing === false) {
            $this->secretScanning👷ListLocationsForAlertListing = new Internal\Operator\SecretScanning\ListLocationsForAlertListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber🌀Locations());
        }

        return $this->secretScanning👷ListLocationsForAlertListing;
    }

    public function activity👷ListStargazersForRepo(): Internal\Operator\Activity\ListStargazersForRepo
    {
        if ($this->activity👷ListStargazersForRepo instanceof Internal\Operator\Activity\ListStargazersForRepo === false) {
            $this->activity👷ListStargazersForRepo = new Internal\Operator\Activity\ListStargazersForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stargazers());
        }

        return $this->activity👷ListStargazersForRepo;
    }

    public function repos👷GetCodeFrequencyStats(): Internal\Operator\Repos\GetCodeFrequencyStats
    {
        if ($this->repos👷GetCodeFrequencyStats instanceof Internal\Operator\Repos\GetCodeFrequencyStats === false) {
            $this->repos👷GetCodeFrequencyStats = new Internal\Operator\Repos\GetCodeFrequencyStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀CodeFrequency());
        }

        return $this->repos👷GetCodeFrequencyStats;
    }

    public function repos👷GetCommitActivityStats(): Internal\Operator\Repos\GetCommitActivityStats
    {
        if ($this->repos👷GetCommitActivityStats instanceof Internal\Operator\Repos\GetCommitActivityStats === false) {
            $this->repos👷GetCommitActivityStats = new Internal\Operator\Repos\GetCommitActivityStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀CommitActivity());
        }

        return $this->repos👷GetCommitActivityStats;
    }

    public function repos👷GetContributorsStats(): Internal\Operator\Repos\GetContributorsStats
    {
        if ($this->repos👷GetContributorsStats instanceof Internal\Operator\Repos\GetContributorsStats === false) {
            $this->repos👷GetContributorsStats = new Internal\Operator\Repos\GetContributorsStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀Contributors());
        }

        return $this->repos👷GetContributorsStats;
    }

    public function repos👷GetParticipationStats(): Internal\Operator\Repos\GetParticipationStats
    {
        if ($this->repos👷GetParticipationStats instanceof Internal\Operator\Repos\GetParticipationStats === false) {
            $this->repos👷GetParticipationStats = new Internal\Operator\Repos\GetParticipationStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀Participation());
        }

        return $this->repos👷GetParticipationStats;
    }

    public function repos👷GetPunchCardStats(): Internal\Operator\Repos\GetPunchCardStats
    {
        if ($this->repos👷GetPunchCardStats instanceof Internal\Operator\Repos\GetPunchCardStats === false) {
            $this->repos👷GetPunchCardStats = new Internal\Operator\Repos\GetPunchCardStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀PunchCard());
        }

        return $this->repos👷GetPunchCardStats;
    }

    public function repos👷CreateCommitStatus(): Internal\Operator\Repos\CreateCommitStatus
    {
        if ($this->repos👷CreateCommitStatus instanceof Internal\Operator\Repos\CreateCommitStatus === false) {
            $this->repos👷CreateCommitStatus = new Internal\Operator\Repos\CreateCommitStatus($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Statuses🌀Sha());
        }

        return $this->repos👷CreateCommitStatus;
    }

    public function activity👷ListWatchersForRepo(): Internal\Operator\Activity\ListWatchersForRepo
    {
        if ($this->activity👷ListWatchersForRepo instanceof Internal\Operator\Activity\ListWatchersForRepo === false) {
            $this->activity👷ListWatchersForRepo = new Internal\Operator\Activity\ListWatchersForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Subscribers());
        }

        return $this->activity👷ListWatchersForRepo;
    }

    public function activity👷ListWatchersForRepoListing(): Internal\Operator\Activity\ListWatchersForRepoListing
    {
        if ($this->activity👷ListWatchersForRepoListing instanceof Internal\Operator\Activity\ListWatchersForRepoListing === false) {
            $this->activity👷ListWatchersForRepoListing = new Internal\Operator\Activity\ListWatchersForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Subscribers());
        }

        return $this->activity👷ListWatchersForRepoListing;
    }

    public function activity👷GetRepoSubscription(): Internal\Operator\Activity\GetRepoSubscription
    {
        if ($this->activity👷GetRepoSubscription instanceof Internal\Operator\Activity\GetRepoSubscription === false) {
            $this->activity👷GetRepoSubscription = new Internal\Operator\Activity\GetRepoSubscription($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Subscription());
        }

        return $this->activity👷GetRepoSubscription;
    }

    public function activity👷SetRepoSubscription(): Internal\Operator\Activity\SetRepoSubscription
    {
        if ($this->activity👷SetRepoSubscription instanceof Internal\Operator\Activity\SetRepoSubscription === false) {
            $this->activity👷SetRepoSubscription = new Internal\Operator\Activity\SetRepoSubscription($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Subscription());
        }

        return $this->activity👷SetRepoSubscription;
    }

    public function activity👷DeleteRepoSubscription(): Internal\Operator\Activity\DeleteRepoSubscription
    {
        if ($this->activity👷DeleteRepoSubscription instanceof Internal\Operator\Activity\DeleteRepoSubscription === false) {
            $this->activity👷DeleteRepoSubscription = new Internal\Operator\Activity\DeleteRepoSubscription($this->browser, $this->authentication);
        }

        return $this->activity👷DeleteRepoSubscription;
    }

    public function repos👷ListTags(): Internal\Operator\Repos\ListTags
    {
        if ($this->repos👷ListTags instanceof Internal\Operator\Repos\ListTags === false) {
            $this->repos👷ListTags = new Internal\Operator\Repos\ListTags($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Tags());
        }

        return $this->repos👷ListTags;
    }

    public function repos👷ListTagsListing(): Internal\Operator\Repos\ListTagsListing
    {
        if ($this->repos👷ListTagsListing instanceof Internal\Operator\Repos\ListTagsListing === false) {
            $this->repos👷ListTagsListing = new Internal\Operator\Repos\ListTagsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Tags());
        }

        return $this->repos👷ListTagsListing;
    }

    public function repos👷DownloadTarballArchive(): Internal\Operator\Repos\DownloadTarballArchive
    {
        if ($this->repos👷DownloadTarballArchive instanceof Internal\Operator\Repos\DownloadTarballArchive === false) {
            $this->repos👷DownloadTarballArchive = new Internal\Operator\Repos\DownloadTarballArchive($this->browser, $this->authentication);
        }

        return $this->repos👷DownloadTarballArchive;
    }

    public function repos👷DownloadTarballArchiveStreaming(): Internal\Operator\Repos\DownloadTarballArchiveStreaming
    {
        if ($this->repos👷DownloadTarballArchiveStreaming instanceof Internal\Operator\Repos\DownloadTarballArchiveStreaming === false) {
            $this->repos👷DownloadTarballArchiveStreaming = new Internal\Operator\Repos\DownloadTarballArchiveStreaming($this->browser, $this->authentication);
        }

        return $this->repos👷DownloadTarballArchiveStreaming;
    }

    public function repos👷ListTeams(): Internal\Operator\Repos\ListTeams
    {
        if ($this->repos👷ListTeams instanceof Internal\Operator\Repos\ListTeams === false) {
            $this->repos👷ListTeams = new Internal\Operator\Repos\ListTeams($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Teams());
        }

        return $this->repos👷ListTeams;
    }

    public function repos👷ListTeamsListing(): Internal\Operator\Repos\ListTeamsListing
    {
        if ($this->repos👷ListTeamsListing instanceof Internal\Operator\Repos\ListTeamsListing === false) {
            $this->repos👷ListTeamsListing = new Internal\Operator\Repos\ListTeamsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Teams());
        }

        return $this->repos👷ListTeamsListing;
    }

    public function repos👷GetAllTopics(): Internal\Operator\Repos\GetAllTopics
    {
        if ($this->repos👷GetAllTopics instanceof Internal\Operator\Repos\GetAllTopics === false) {
            $this->repos👷GetAllTopics = new Internal\Operator\Repos\GetAllTopics($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Topics());
        }

        return $this->repos👷GetAllTopics;
    }

    public function repos👷ReplaceAllTopics(): Internal\Operator\Repos\ReplaceAllTopics
    {
        if ($this->repos👷ReplaceAllTopics instanceof Internal\Operator\Repos\ReplaceAllTopics === false) {
            $this->repos👷ReplaceAllTopics = new Internal\Operator\Repos\ReplaceAllTopics($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Topics());
        }

        return $this->repos👷ReplaceAllTopics;
    }

    public function repos👷Transfer(): Internal\Operator\Repos\Transfer
    {
        if ($this->repos👷Transfer instanceof Internal\Operator\Repos\Transfer === false) {
            $this->repos👷Transfer = new Internal\Operator\Repos\Transfer($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Transfer());
        }

        return $this->repos👷Transfer;
    }

    public function repos👷DownloadZipballArchive(): Internal\Operator\Repos\DownloadZipballArchive
    {
        if ($this->repos👷DownloadZipballArchive instanceof Internal\Operator\Repos\DownloadZipballArchive === false) {
            $this->repos👷DownloadZipballArchive = new Internal\Operator\Repos\DownloadZipballArchive($this->browser, $this->authentication);
        }

        return $this->repos👷DownloadZipballArchive;
    }

    public function repos👷DownloadZipballArchiveStreaming(): Internal\Operator\Repos\DownloadZipballArchiveStreaming
    {
        if ($this->repos👷DownloadZipballArchiveStreaming instanceof Internal\Operator\Repos\DownloadZipballArchiveStreaming === false) {
            $this->repos👷DownloadZipballArchiveStreaming = new Internal\Operator\Repos\DownloadZipballArchiveStreaming($this->browser, $this->authentication);
        }

        return $this->repos👷DownloadZipballArchiveStreaming;
    }

    public function repos👷CreateUsingTemplate(): Internal\Operator\Repos\CreateUsingTemplate
    {
        if ($this->repos👷CreateUsingTemplate instanceof Internal\Operator\Repos\CreateUsingTemplate === false) {
            $this->repos👷CreateUsingTemplate = new Internal\Operator\Repos\CreateUsingTemplate($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀TemplateOwner🌀TemplateRepo🌀Generate());
        }

        return $this->repos👷CreateUsingTemplate;
    }

    public function search👷Code(): Internal\Operator\Search\Code
    {
        if ($this->search👷Code instanceof Internal\Operator\Search\Code === false) {
            $this->search👷Code = new Internal\Operator\Search\Code($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Search🌀Code());
        }

        return $this->search👷Code;
    }

    public function search👷Commits(): Internal\Operator\Search\Commits
    {
        if ($this->search👷Commits instanceof Internal\Operator\Search\Commits === false) {
            $this->search👷Commits = new Internal\Operator\Search\Commits($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Search🌀Commits());
        }

        return $this->search👷Commits;
    }

    public function search👷IssuesAndPullRequests(): Internal\Operator\Search\IssuesAndPullRequests
    {
        if ($this->search👷IssuesAndPullRequests instanceof Internal\Operator\Search\IssuesAndPullRequests === false) {
            $this->search👷IssuesAndPullRequests = new Internal\Operator\Search\IssuesAndPullRequests($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Search🌀Issues());
        }

        return $this->search👷IssuesAndPullRequests;
    }

    public function search👷Labels(): Internal\Operator\Search\Labels
    {
        if ($this->search👷Labels instanceof Internal\Operator\Search\Labels === false) {
            $this->search👷Labels = new Internal\Operator\Search\Labels($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Search🌀Labels());
        }

        return $this->search👷Labels;
    }

    public function search👷Repos(): Internal\Operator\Search\Repos
    {
        if ($this->search👷Repos instanceof Internal\Operator\Search\Repos === false) {
            $this->search👷Repos = new Internal\Operator\Search\Repos($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Search🌀Repositories());
        }

        return $this->search👷Repos;
    }

    public function search👷Topics(): Internal\Operator\Search\Topics
    {
        if ($this->search👷Topics instanceof Internal\Operator\Search\Topics === false) {
            $this->search👷Topics = new Internal\Operator\Search\Topics($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Search🌀Topics());
        }

        return $this->search👷Topics;
    }

    public function search👷Users(): Internal\Operator\Search\Users
    {
        if ($this->search👷Users instanceof Internal\Operator\Search\Users === false) {
            $this->search👷Users = new Internal\Operator\Search\Users($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Search🌀Users());
        }

        return $this->search👷Users;
    }

    public function teams👷GetLegacy(): Internal\Operator\Teams\GetLegacy
    {
        if ($this->teams👷GetLegacy instanceof Internal\Operator\Teams\GetLegacy === false) {
            $this->teams👷GetLegacy = new Internal\Operator\Teams\GetLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId());
        }

        return $this->teams👷GetLegacy;
    }

    public function teams👷DeleteLegacy(): Internal\Operator\Teams\DeleteLegacy
    {
        if ($this->teams👷DeleteLegacy instanceof Internal\Operator\Teams\DeleteLegacy === false) {
            $this->teams👷DeleteLegacy = new Internal\Operator\Teams\DeleteLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId());
        }

        return $this->teams👷DeleteLegacy;
    }

    public function teams👷UpdateLegacy(): Internal\Operator\Teams\UpdateLegacy
    {
        if ($this->teams👷UpdateLegacy instanceof Internal\Operator\Teams\UpdateLegacy === false) {
            $this->teams👷UpdateLegacy = new Internal\Operator\Teams\UpdateLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId());
        }

        return $this->teams👷UpdateLegacy;
    }

    public function teams👷ListDiscussionsLegacy(): Internal\Operator\Teams\ListDiscussionsLegacy
    {
        if ($this->teams👷ListDiscussionsLegacy instanceof Internal\Operator\Teams\ListDiscussionsLegacy === false) {
            $this->teams👷ListDiscussionsLegacy = new Internal\Operator\Teams\ListDiscussionsLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions());
        }

        return $this->teams👷ListDiscussionsLegacy;
    }

    public function teams👷ListDiscussionsLegacyListing(): Internal\Operator\Teams\ListDiscussionsLegacyListing
    {
        if ($this->teams👷ListDiscussionsLegacyListing instanceof Internal\Operator\Teams\ListDiscussionsLegacyListing === false) {
            $this->teams👷ListDiscussionsLegacyListing = new Internal\Operator\Teams\ListDiscussionsLegacyListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions());
        }

        return $this->teams👷ListDiscussionsLegacyListing;
    }

    public function teams👷CreateDiscussionLegacy(): Internal\Operator\Teams\CreateDiscussionLegacy
    {
        if ($this->teams👷CreateDiscussionLegacy instanceof Internal\Operator\Teams\CreateDiscussionLegacy === false) {
            $this->teams👷CreateDiscussionLegacy = new Internal\Operator\Teams\CreateDiscussionLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions());
        }

        return $this->teams👷CreateDiscussionLegacy;
    }

    public function teams👷GetDiscussionLegacy(): Internal\Operator\Teams\GetDiscussionLegacy
    {
        if ($this->teams👷GetDiscussionLegacy instanceof Internal\Operator\Teams\GetDiscussionLegacy === false) {
            $this->teams👷GetDiscussionLegacy = new Internal\Operator\Teams\GetDiscussionLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber());
        }

        return $this->teams👷GetDiscussionLegacy;
    }

    public function teams👷DeleteDiscussionLegacy(): Internal\Operator\Teams\DeleteDiscussionLegacy
    {
        if ($this->teams👷DeleteDiscussionLegacy instanceof Internal\Operator\Teams\DeleteDiscussionLegacy === false) {
            $this->teams👷DeleteDiscussionLegacy = new Internal\Operator\Teams\DeleteDiscussionLegacy($this->browser, $this->authentication);
        }

        return $this->teams👷DeleteDiscussionLegacy;
    }

    public function teams👷UpdateDiscussionLegacy(): Internal\Operator\Teams\UpdateDiscussionLegacy
    {
        if ($this->teams👷UpdateDiscussionLegacy instanceof Internal\Operator\Teams\UpdateDiscussionLegacy === false) {
            $this->teams👷UpdateDiscussionLegacy = new Internal\Operator\Teams\UpdateDiscussionLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber());
        }

        return $this->teams👷UpdateDiscussionLegacy;
    }

    public function teams👷ListDiscussionCommentsLegacy(): Internal\Operator\Teams\ListDiscussionCommentsLegacy
    {
        if ($this->teams👷ListDiscussionCommentsLegacy instanceof Internal\Operator\Teams\ListDiscussionCommentsLegacy === false) {
            $this->teams👷ListDiscussionCommentsLegacy = new Internal\Operator\Teams\ListDiscussionCommentsLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments());
        }

        return $this->teams👷ListDiscussionCommentsLegacy;
    }

    public function teams👷ListDiscussionCommentsLegacyListing(): Internal\Operator\Teams\ListDiscussionCommentsLegacyListing
    {
        if ($this->teams👷ListDiscussionCommentsLegacyListing instanceof Internal\Operator\Teams\ListDiscussionCommentsLegacyListing === false) {
            $this->teams👷ListDiscussionCommentsLegacyListing = new Internal\Operator\Teams\ListDiscussionCommentsLegacyListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments());
        }

        return $this->teams👷ListDiscussionCommentsLegacyListing;
    }

    public function teams👷CreateDiscussionCommentLegacy(): Internal\Operator\Teams\CreateDiscussionCommentLegacy
    {
        if ($this->teams👷CreateDiscussionCommentLegacy instanceof Internal\Operator\Teams\CreateDiscussionCommentLegacy === false) {
            $this->teams👷CreateDiscussionCommentLegacy = new Internal\Operator\Teams\CreateDiscussionCommentLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments());
        }

        return $this->teams👷CreateDiscussionCommentLegacy;
    }

    public function teams👷GetDiscussionCommentLegacy(): Internal\Operator\Teams\GetDiscussionCommentLegacy
    {
        if ($this->teams👷GetDiscussionCommentLegacy instanceof Internal\Operator\Teams\GetDiscussionCommentLegacy === false) {
            $this->teams👷GetDiscussionCommentLegacy = new Internal\Operator\Teams\GetDiscussionCommentLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber());
        }

        return $this->teams👷GetDiscussionCommentLegacy;
    }

    public function teams👷DeleteDiscussionCommentLegacy(): Internal\Operator\Teams\DeleteDiscussionCommentLegacy
    {
        if ($this->teams👷DeleteDiscussionCommentLegacy instanceof Internal\Operator\Teams\DeleteDiscussionCommentLegacy === false) {
            $this->teams👷DeleteDiscussionCommentLegacy = new Internal\Operator\Teams\DeleteDiscussionCommentLegacy($this->browser, $this->authentication);
        }

        return $this->teams👷DeleteDiscussionCommentLegacy;
    }

    public function teams👷UpdateDiscussionCommentLegacy(): Internal\Operator\Teams\UpdateDiscussionCommentLegacy
    {
        if ($this->teams👷UpdateDiscussionCommentLegacy instanceof Internal\Operator\Teams\UpdateDiscussionCommentLegacy === false) {
            $this->teams👷UpdateDiscussionCommentLegacy = new Internal\Operator\Teams\UpdateDiscussionCommentLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber());
        }

        return $this->teams👷UpdateDiscussionCommentLegacy;
    }

    public function teams👷ListMembersLegacy(): Internal\Operator\Teams\ListMembersLegacy
    {
        if ($this->teams👷ListMembersLegacy instanceof Internal\Operator\Teams\ListMembersLegacy === false) {
            $this->teams👷ListMembersLegacy = new Internal\Operator\Teams\ListMembersLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Members());
        }

        return $this->teams👷ListMembersLegacy;
    }

    public function teams👷ListMembersLegacyListing(): Internal\Operator\Teams\ListMembersLegacyListing
    {
        if ($this->teams👷ListMembersLegacyListing instanceof Internal\Operator\Teams\ListMembersLegacyListing === false) {
            $this->teams👷ListMembersLegacyListing = new Internal\Operator\Teams\ListMembersLegacyListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Members());
        }

        return $this->teams👷ListMembersLegacyListing;
    }

    public function teams👷GetMemberLegacy(): Internal\Operator\Teams\GetMemberLegacy
    {
        if ($this->teams👷GetMemberLegacy instanceof Internal\Operator\Teams\GetMemberLegacy === false) {
            $this->teams👷GetMemberLegacy = new Internal\Operator\Teams\GetMemberLegacy($this->browser, $this->authentication);
        }

        return $this->teams👷GetMemberLegacy;
    }

    public function teams👷AddMemberLegacy(): Internal\Operator\Teams\AddMemberLegacy
    {
        if ($this->teams👷AddMemberLegacy instanceof Internal\Operator\Teams\AddMemberLegacy === false) {
            $this->teams👷AddMemberLegacy = new Internal\Operator\Teams\AddMemberLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Members🌀Username());
        }

        return $this->teams👷AddMemberLegacy;
    }

    public function teams👷RemoveMemberLegacy(): Internal\Operator\Teams\RemoveMemberLegacy
    {
        if ($this->teams👷RemoveMemberLegacy instanceof Internal\Operator\Teams\RemoveMemberLegacy === false) {
            $this->teams👷RemoveMemberLegacy = new Internal\Operator\Teams\RemoveMemberLegacy($this->browser, $this->authentication);
        }

        return $this->teams👷RemoveMemberLegacy;
    }

    public function teams👷GetMembershipForUserLegacy(): Internal\Operator\Teams\GetMembershipForUserLegacy
    {
        if ($this->teams👷GetMembershipForUserLegacy instanceof Internal\Operator\Teams\GetMembershipForUserLegacy === false) {
            $this->teams👷GetMembershipForUserLegacy = new Internal\Operator\Teams\GetMembershipForUserLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Memberships🌀Username());
        }

        return $this->teams👷GetMembershipForUserLegacy;
    }

    public function teams👷AddOrUpdateMembershipForUserLegacy(): Internal\Operator\Teams\AddOrUpdateMembershipForUserLegacy
    {
        if ($this->teams👷AddOrUpdateMembershipForUserLegacy instanceof Internal\Operator\Teams\AddOrUpdateMembershipForUserLegacy === false) {
            $this->teams👷AddOrUpdateMembershipForUserLegacy = new Internal\Operator\Teams\AddOrUpdateMembershipForUserLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Memberships🌀Username());
        }

        return $this->teams👷AddOrUpdateMembershipForUserLegacy;
    }

    public function teams👷RemoveMembershipForUserLegacy(): Internal\Operator\Teams\RemoveMembershipForUserLegacy
    {
        if ($this->teams👷RemoveMembershipForUserLegacy instanceof Internal\Operator\Teams\RemoveMembershipForUserLegacy === false) {
            $this->teams👷RemoveMembershipForUserLegacy = new Internal\Operator\Teams\RemoveMembershipForUserLegacy($this->browser, $this->authentication);
        }

        return $this->teams👷RemoveMembershipForUserLegacy;
    }

    public function teams👷ListProjectsLegacy(): Internal\Operator\Teams\ListProjectsLegacy
    {
        if ($this->teams👷ListProjectsLegacy instanceof Internal\Operator\Teams\ListProjectsLegacy === false) {
            $this->teams👷ListProjectsLegacy = new Internal\Operator\Teams\ListProjectsLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Projects());
        }

        return $this->teams👷ListProjectsLegacy;
    }

    public function teams👷ListProjectsLegacyListing(): Internal\Operator\Teams\ListProjectsLegacyListing
    {
        if ($this->teams👷ListProjectsLegacyListing instanceof Internal\Operator\Teams\ListProjectsLegacyListing === false) {
            $this->teams👷ListProjectsLegacyListing = new Internal\Operator\Teams\ListProjectsLegacyListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Projects());
        }

        return $this->teams👷ListProjectsLegacyListing;
    }

    public function teams👷CheckPermissionsForProjectLegacy(): Internal\Operator\Teams\CheckPermissionsForProjectLegacy
    {
        if ($this->teams👷CheckPermissionsForProjectLegacy instanceof Internal\Operator\Teams\CheckPermissionsForProjectLegacy === false) {
            $this->teams👷CheckPermissionsForProjectLegacy = new Internal\Operator\Teams\CheckPermissionsForProjectLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Projects🌀ProjectId());
        }

        return $this->teams👷CheckPermissionsForProjectLegacy;
    }

    public function teams👷AddOrUpdateProjectPermissionsLegacy(): Internal\Operator\Teams\AddOrUpdateProjectPermissionsLegacy
    {
        if ($this->teams👷AddOrUpdateProjectPermissionsLegacy instanceof Internal\Operator\Teams\AddOrUpdateProjectPermissionsLegacy === false) {
            $this->teams👷AddOrUpdateProjectPermissionsLegacy = new Internal\Operator\Teams\AddOrUpdateProjectPermissionsLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Projects🌀ProjectId());
        }

        return $this->teams👷AddOrUpdateProjectPermissionsLegacy;
    }

    public function teams👷RemoveProjectLegacy(): Internal\Operator\Teams\RemoveProjectLegacy
    {
        if ($this->teams👷RemoveProjectLegacy instanceof Internal\Operator\Teams\RemoveProjectLegacy === false) {
            $this->teams👷RemoveProjectLegacy = new Internal\Operator\Teams\RemoveProjectLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Projects🌀ProjectId());
        }

        return $this->teams👷RemoveProjectLegacy;
    }

    public function teams👷ListReposLegacy(): Internal\Operator\Teams\ListReposLegacy
    {
        if ($this->teams👷ListReposLegacy instanceof Internal\Operator\Teams\ListReposLegacy === false) {
            $this->teams👷ListReposLegacy = new Internal\Operator\Teams\ListReposLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Repos());
        }

        return $this->teams👷ListReposLegacy;
    }

    public function teams👷ListReposLegacyListing(): Internal\Operator\Teams\ListReposLegacyListing
    {
        if ($this->teams👷ListReposLegacyListing instanceof Internal\Operator\Teams\ListReposLegacyListing === false) {
            $this->teams👷ListReposLegacyListing = new Internal\Operator\Teams\ListReposLegacyListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Repos());
        }

        return $this->teams👷ListReposLegacyListing;
    }

    public function teams👷CheckPermissionsForRepoLegacy(): Internal\Operator\Teams\CheckPermissionsForRepoLegacy
    {
        if ($this->teams👷CheckPermissionsForRepoLegacy instanceof Internal\Operator\Teams\CheckPermissionsForRepoLegacy === false) {
            $this->teams👷CheckPermissionsForRepoLegacy = new Internal\Operator\Teams\CheckPermissionsForRepoLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Repos🌀Owner🌀Repo());
        }

        return $this->teams👷CheckPermissionsForRepoLegacy;
    }

    public function teams👷AddOrUpdateRepoPermissionsLegacy(): Internal\Operator\Teams\AddOrUpdateRepoPermissionsLegacy
    {
        if ($this->teams👷AddOrUpdateRepoPermissionsLegacy instanceof Internal\Operator\Teams\AddOrUpdateRepoPermissionsLegacy === false) {
            $this->teams👷AddOrUpdateRepoPermissionsLegacy = new Internal\Operator\Teams\AddOrUpdateRepoPermissionsLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Repos🌀Owner🌀Repo());
        }

        return $this->teams👷AddOrUpdateRepoPermissionsLegacy;
    }

    public function teams👷RemoveRepoLegacy(): Internal\Operator\Teams\RemoveRepoLegacy
    {
        if ($this->teams👷RemoveRepoLegacy instanceof Internal\Operator\Teams\RemoveRepoLegacy === false) {
            $this->teams👷RemoveRepoLegacy = new Internal\Operator\Teams\RemoveRepoLegacy($this->browser, $this->authentication);
        }

        return $this->teams👷RemoveRepoLegacy;
    }

    public function teams👷ListChildLegacy(): Internal\Operator\Teams\ListChildLegacy
    {
        if ($this->teams👷ListChildLegacy instanceof Internal\Operator\Teams\ListChildLegacy === false) {
            $this->teams👷ListChildLegacy = new Internal\Operator\Teams\ListChildLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Teams());
        }

        return $this->teams👷ListChildLegacy;
    }

    public function teams👷ListChildLegacyListing(): Internal\Operator\Teams\ListChildLegacyListing
    {
        if ($this->teams👷ListChildLegacyListing instanceof Internal\Operator\Teams\ListChildLegacyListing === false) {
            $this->teams👷ListChildLegacyListing = new Internal\Operator\Teams\ListChildLegacyListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Teams());
        }

        return $this->teams👷ListChildLegacyListing;
    }

    public function users👷GetAuthenticated(): Internal\Operator\Users\GetAuthenticated
    {
        if ($this->users👷GetAuthenticated instanceof Internal\Operator\Users\GetAuthenticated === false) {
            $this->users👷GetAuthenticated = new Internal\Operator\Users\GetAuthenticated($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User());
        }

        return $this->users👷GetAuthenticated;
    }

    public function users👷UpdateAuthenticated(): Internal\Operator\Users\UpdateAuthenticated
    {
        if ($this->users👷UpdateAuthenticated instanceof Internal\Operator\Users\UpdateAuthenticated === false) {
            $this->users👷UpdateAuthenticated = new Internal\Operator\Users\UpdateAuthenticated($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User());
        }

        return $this->users👷UpdateAuthenticated;
    }

    public function users👷ListFollowersForAuthenticatedUser(): Internal\Operator\Users\ListFollowersForAuthenticatedUser
    {
        if ($this->users👷ListFollowersForAuthenticatedUser instanceof Internal\Operator\Users\ListFollowersForAuthenticatedUser === false) {
            $this->users👷ListFollowersForAuthenticatedUser = new Internal\Operator\Users\ListFollowersForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Followers());
        }

        return $this->users👷ListFollowersForAuthenticatedUser;
    }

    public function users👷ListFollowersForAuthenticatedUserListing(): Internal\Operator\Users\ListFollowersForAuthenticatedUserListing
    {
        if ($this->users👷ListFollowersForAuthenticatedUserListing instanceof Internal\Operator\Users\ListFollowersForAuthenticatedUserListing === false) {
            $this->users👷ListFollowersForAuthenticatedUserListing = new Internal\Operator\Users\ListFollowersForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Followers());
        }

        return $this->users👷ListFollowersForAuthenticatedUserListing;
    }

    public function users👷ListFollowedByAuthenticatedUser(): Internal\Operator\Users\ListFollowedByAuthenticatedUser
    {
        if ($this->users👷ListFollowedByAuthenticatedUser instanceof Internal\Operator\Users\ListFollowedByAuthenticatedUser === false) {
            $this->users👷ListFollowedByAuthenticatedUser = new Internal\Operator\Users\ListFollowedByAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Following());
        }

        return $this->users👷ListFollowedByAuthenticatedUser;
    }

    public function users👷ListFollowedByAuthenticatedUserListing(): Internal\Operator\Users\ListFollowedByAuthenticatedUserListing
    {
        if ($this->users👷ListFollowedByAuthenticatedUserListing instanceof Internal\Operator\Users\ListFollowedByAuthenticatedUserListing === false) {
            $this->users👷ListFollowedByAuthenticatedUserListing = new Internal\Operator\Users\ListFollowedByAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Following());
        }

        return $this->users👷ListFollowedByAuthenticatedUserListing;
    }

    public function users👷CheckPersonIsFollowedByAuthenticated(): Internal\Operator\Users\CheckPersonIsFollowedByAuthenticated
    {
        if ($this->users👷CheckPersonIsFollowedByAuthenticated instanceof Internal\Operator\Users\CheckPersonIsFollowedByAuthenticated === false) {
            $this->users👷CheckPersonIsFollowedByAuthenticated = new Internal\Operator\Users\CheckPersonIsFollowedByAuthenticated($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Following🌀Username());
        }

        return $this->users👷CheckPersonIsFollowedByAuthenticated;
    }

    public function users👷Follow(): Internal\Operator\Users\Follow
    {
        if ($this->users👷Follow instanceof Internal\Operator\Users\Follow === false) {
            $this->users👷Follow = new Internal\Operator\Users\Follow($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Following🌀Username());
        }

        return $this->users👷Follow;
    }

    public function users👷Unfollow(): Internal\Operator\Users\Unfollow
    {
        if ($this->users👷Unfollow instanceof Internal\Operator\Users\Unfollow === false) {
            $this->users👷Unfollow = new Internal\Operator\Users\Unfollow($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Following🌀Username());
        }

        return $this->users👷Unfollow;
    }

    public function users👷ListGpgKeysForAuthenticatedUser(): Internal\Operator\Users\ListGpgKeysForAuthenticatedUser
    {
        if ($this->users👷ListGpgKeysForAuthenticatedUser instanceof Internal\Operator\Users\ListGpgKeysForAuthenticatedUser === false) {
            $this->users👷ListGpgKeysForAuthenticatedUser = new Internal\Operator\Users\ListGpgKeysForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀GpgKeys());
        }

        return $this->users👷ListGpgKeysForAuthenticatedUser;
    }

    public function users👷ListGpgKeysForAuthenticatedUserListing(): Internal\Operator\Users\ListGpgKeysForAuthenticatedUserListing
    {
        if ($this->users👷ListGpgKeysForAuthenticatedUserListing instanceof Internal\Operator\Users\ListGpgKeysForAuthenticatedUserListing === false) {
            $this->users👷ListGpgKeysForAuthenticatedUserListing = new Internal\Operator\Users\ListGpgKeysForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀GpgKeys());
        }

        return $this->users👷ListGpgKeysForAuthenticatedUserListing;
    }

    public function users👷CreateGpgKeyForAuthenticatedUser(): Internal\Operator\Users\CreateGpgKeyForAuthenticatedUser
    {
        if ($this->users👷CreateGpgKeyForAuthenticatedUser instanceof Internal\Operator\Users\CreateGpgKeyForAuthenticatedUser === false) {
            $this->users👷CreateGpgKeyForAuthenticatedUser = new Internal\Operator\Users\CreateGpgKeyForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀GpgKeys());
        }

        return $this->users👷CreateGpgKeyForAuthenticatedUser;
    }

    public function users👷GetGpgKeyForAuthenticatedUser(): Internal\Operator\Users\GetGpgKeyForAuthenticatedUser
    {
        if ($this->users👷GetGpgKeyForAuthenticatedUser instanceof Internal\Operator\Users\GetGpgKeyForAuthenticatedUser === false) {
            $this->users👷GetGpgKeyForAuthenticatedUser = new Internal\Operator\Users\GetGpgKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀GpgKeys🌀GpgKeyId());
        }

        return $this->users👷GetGpgKeyForAuthenticatedUser;
    }

    public function users👷DeleteGpgKeyForAuthenticatedUser(): Internal\Operator\Users\DeleteGpgKeyForAuthenticatedUser
    {
        if ($this->users👷DeleteGpgKeyForAuthenticatedUser instanceof Internal\Operator\Users\DeleteGpgKeyForAuthenticatedUser === false) {
            $this->users👷DeleteGpgKeyForAuthenticatedUser = new Internal\Operator\Users\DeleteGpgKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀GpgKeys🌀GpgKeyId());
        }

        return $this->users👷DeleteGpgKeyForAuthenticatedUser;
    }

    public function apps👷ListInstallationsForAuthenticatedUser(): Internal\Operator\Apps\ListInstallationsForAuthenticatedUser
    {
        if ($this->apps👷ListInstallationsForAuthenticatedUser instanceof Internal\Operator\Apps\ListInstallationsForAuthenticatedUser === false) {
            $this->apps👷ListInstallationsForAuthenticatedUser = new Internal\Operator\Apps\ListInstallationsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Installations());
        }

        return $this->apps👷ListInstallationsForAuthenticatedUser;
    }

    public function apps👷ListInstallationReposForAuthenticatedUser(): Internal\Operator\Apps\ListInstallationReposForAuthenticatedUser
    {
        if ($this->apps👷ListInstallationReposForAuthenticatedUser instanceof Internal\Operator\Apps\ListInstallationReposForAuthenticatedUser === false) {
            $this->apps👷ListInstallationReposForAuthenticatedUser = new Internal\Operator\Apps\ListInstallationReposForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Installations🌀InstallationId🌀Repositories());
        }

        return $this->apps👷ListInstallationReposForAuthenticatedUser;
    }

    public function apps👷AddRepoToInstallationForAuthenticatedUser(): Internal\Operator\Apps\AddRepoToInstallationForAuthenticatedUser
    {
        if ($this->apps👷AddRepoToInstallationForAuthenticatedUser instanceof Internal\Operator\Apps\AddRepoToInstallationForAuthenticatedUser === false) {
            $this->apps👷AddRepoToInstallationForAuthenticatedUser = new Internal\Operator\Apps\AddRepoToInstallationForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Installations🌀InstallationId🌀Repositories🌀RepositoryId());
        }

        return $this->apps👷AddRepoToInstallationForAuthenticatedUser;
    }

    public function apps👷RemoveRepoFromInstallationForAuthenticatedUser(): Internal\Operator\Apps\RemoveRepoFromInstallationForAuthenticatedUser
    {
        if ($this->apps👷RemoveRepoFromInstallationForAuthenticatedUser instanceof Internal\Operator\Apps\RemoveRepoFromInstallationForAuthenticatedUser === false) {
            $this->apps👷RemoveRepoFromInstallationForAuthenticatedUser = new Internal\Operator\Apps\RemoveRepoFromInstallationForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Installations🌀InstallationId🌀Repositories🌀RepositoryId());
        }

        return $this->apps👷RemoveRepoFromInstallationForAuthenticatedUser;
    }

    public function issues👷ListForAuthenticatedUser(): Internal\Operator\Issues\ListForAuthenticatedUser
    {
        if ($this->issues👷ListForAuthenticatedUser instanceof Internal\Operator\Issues\ListForAuthenticatedUser === false) {
            $this->issues👷ListForAuthenticatedUser = new Internal\Operator\Issues\ListForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Issues());
        }

        return $this->issues👷ListForAuthenticatedUser;
    }

    public function issues👷ListForAuthenticatedUserListing(): Internal\Operator\Issues\ListForAuthenticatedUserListing
    {
        if ($this->issues👷ListForAuthenticatedUserListing instanceof Internal\Operator\Issues\ListForAuthenticatedUserListing === false) {
            $this->issues👷ListForAuthenticatedUserListing = new Internal\Operator\Issues\ListForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Issues());
        }

        return $this->issues👷ListForAuthenticatedUserListing;
    }

    public function users👷ListPublicSshKeysForAuthenticatedUser(): Internal\Operator\Users\ListPublicSshKeysForAuthenticatedUser
    {
        if ($this->users👷ListPublicSshKeysForAuthenticatedUser instanceof Internal\Operator\Users\ListPublicSshKeysForAuthenticatedUser === false) {
            $this->users👷ListPublicSshKeysForAuthenticatedUser = new Internal\Operator\Users\ListPublicSshKeysForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Keys());
        }

        return $this->users👷ListPublicSshKeysForAuthenticatedUser;
    }

    public function users👷ListPublicSshKeysForAuthenticatedUserListing(): Internal\Operator\Users\ListPublicSshKeysForAuthenticatedUserListing
    {
        if ($this->users👷ListPublicSshKeysForAuthenticatedUserListing instanceof Internal\Operator\Users\ListPublicSshKeysForAuthenticatedUserListing === false) {
            $this->users👷ListPublicSshKeysForAuthenticatedUserListing = new Internal\Operator\Users\ListPublicSshKeysForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Keys());
        }

        return $this->users👷ListPublicSshKeysForAuthenticatedUserListing;
    }

    public function users👷CreatePublicSshKeyForAuthenticatedUser(): Internal\Operator\Users\CreatePublicSshKeyForAuthenticatedUser
    {
        if ($this->users👷CreatePublicSshKeyForAuthenticatedUser instanceof Internal\Operator\Users\CreatePublicSshKeyForAuthenticatedUser === false) {
            $this->users👷CreatePublicSshKeyForAuthenticatedUser = new Internal\Operator\Users\CreatePublicSshKeyForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Keys());
        }

        return $this->users👷CreatePublicSshKeyForAuthenticatedUser;
    }

    public function users👷GetPublicSshKeyForAuthenticatedUser(): Internal\Operator\Users\GetPublicSshKeyForAuthenticatedUser
    {
        if ($this->users👷GetPublicSshKeyForAuthenticatedUser instanceof Internal\Operator\Users\GetPublicSshKeyForAuthenticatedUser === false) {
            $this->users👷GetPublicSshKeyForAuthenticatedUser = new Internal\Operator\Users\GetPublicSshKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Keys🌀KeyId());
        }

        return $this->users👷GetPublicSshKeyForAuthenticatedUser;
    }

    public function users👷DeletePublicSshKeyForAuthenticatedUser(): Internal\Operator\Users\DeletePublicSshKeyForAuthenticatedUser
    {
        if ($this->users👷DeletePublicSshKeyForAuthenticatedUser instanceof Internal\Operator\Users\DeletePublicSshKeyForAuthenticatedUser === false) {
            $this->users👷DeletePublicSshKeyForAuthenticatedUser = new Internal\Operator\Users\DeletePublicSshKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Keys🌀KeyId());
        }

        return $this->users👷DeletePublicSshKeyForAuthenticatedUser;
    }

    public function orgs👷ListMembershipsForAuthenticatedUser(): Internal\Operator\Orgs\ListMembershipsForAuthenticatedUser
    {
        if ($this->orgs👷ListMembershipsForAuthenticatedUser instanceof Internal\Operator\Orgs\ListMembershipsForAuthenticatedUser === false) {
            $this->orgs👷ListMembershipsForAuthenticatedUser = new Internal\Operator\Orgs\ListMembershipsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Memberships🌀Orgs());
        }

        return $this->orgs👷ListMembershipsForAuthenticatedUser;
    }

    public function orgs👷ListMembershipsForAuthenticatedUserListing(): Internal\Operator\Orgs\ListMembershipsForAuthenticatedUserListing
    {
        if ($this->orgs👷ListMembershipsForAuthenticatedUserListing instanceof Internal\Operator\Orgs\ListMembershipsForAuthenticatedUserListing === false) {
            $this->orgs👷ListMembershipsForAuthenticatedUserListing = new Internal\Operator\Orgs\ListMembershipsForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Memberships🌀Orgs());
        }

        return $this->orgs👷ListMembershipsForAuthenticatedUserListing;
    }

    public function orgs👷GetMembershipForAuthenticatedUser(): Internal\Operator\Orgs\GetMembershipForAuthenticatedUser
    {
        if ($this->orgs👷GetMembershipForAuthenticatedUser instanceof Internal\Operator\Orgs\GetMembershipForAuthenticatedUser === false) {
            $this->orgs👷GetMembershipForAuthenticatedUser = new Internal\Operator\Orgs\GetMembershipForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Memberships🌀Orgs🌀Org());
        }

        return $this->orgs👷GetMembershipForAuthenticatedUser;
    }

    public function orgs👷UpdateMembershipForAuthenticatedUser(): Internal\Operator\Orgs\UpdateMembershipForAuthenticatedUser
    {
        if ($this->orgs👷UpdateMembershipForAuthenticatedUser instanceof Internal\Operator\Orgs\UpdateMembershipForAuthenticatedUser === false) {
            $this->orgs👷UpdateMembershipForAuthenticatedUser = new Internal\Operator\Orgs\UpdateMembershipForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Memberships🌀Orgs🌀Org());
        }

        return $this->orgs👷UpdateMembershipForAuthenticatedUser;
    }

    public function migrations👷ListForAuthenticatedUser(): Internal\Operator\Migrations\ListForAuthenticatedUser
    {
        if ($this->migrations👷ListForAuthenticatedUser instanceof Internal\Operator\Migrations\ListForAuthenticatedUser === false) {
            $this->migrations👷ListForAuthenticatedUser = new Internal\Operator\Migrations\ListForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Migrations());
        }

        return $this->migrations👷ListForAuthenticatedUser;
    }

    public function migrations👷ListForAuthenticatedUserListing(): Internal\Operator\Migrations\ListForAuthenticatedUserListing
    {
        if ($this->migrations👷ListForAuthenticatedUserListing instanceof Internal\Operator\Migrations\ListForAuthenticatedUserListing === false) {
            $this->migrations👷ListForAuthenticatedUserListing = new Internal\Operator\Migrations\ListForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Migrations());
        }

        return $this->migrations👷ListForAuthenticatedUserListing;
    }

    public function migrations👷StartForAuthenticatedUser(): Internal\Operator\Migrations\StartForAuthenticatedUser
    {
        if ($this->migrations👷StartForAuthenticatedUser instanceof Internal\Operator\Migrations\StartForAuthenticatedUser === false) {
            $this->migrations👷StartForAuthenticatedUser = new Internal\Operator\Migrations\StartForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Migrations());
        }

        return $this->migrations👷StartForAuthenticatedUser;
    }

    public function migrations👷GetArchiveForAuthenticatedUser(): Internal\Operator\Migrations\GetArchiveForAuthenticatedUser
    {
        if ($this->migrations👷GetArchiveForAuthenticatedUser instanceof Internal\Operator\Migrations\GetArchiveForAuthenticatedUser === false) {
            $this->migrations👷GetArchiveForAuthenticatedUser = new Internal\Operator\Migrations\GetArchiveForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Migrations🌀MigrationId🌀Archive());
        }

        return $this->migrations👷GetArchiveForAuthenticatedUser;
    }

    public function migrations👷ListReposForAuthenticatedUser(): Internal\Operator\Migrations\ListReposForAuthenticatedUser
    {
        if ($this->migrations👷ListReposForAuthenticatedUser instanceof Internal\Operator\Migrations\ListReposForAuthenticatedUser === false) {
            $this->migrations👷ListReposForAuthenticatedUser = new Internal\Operator\Migrations\ListReposForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Migrations🌀MigrationId🌀Repositories());
        }

        return $this->migrations👷ListReposForAuthenticatedUser;
    }

    public function migrations👷ListReposForAuthenticatedUserListing(): Internal\Operator\Migrations\ListReposForAuthenticatedUserListing
    {
        if ($this->migrations👷ListReposForAuthenticatedUserListing instanceof Internal\Operator\Migrations\ListReposForAuthenticatedUserListing === false) {
            $this->migrations👷ListReposForAuthenticatedUserListing = new Internal\Operator\Migrations\ListReposForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Migrations🌀MigrationId🌀Repositories());
        }

        return $this->migrations👷ListReposForAuthenticatedUserListing;
    }

    public function orgs👷ListForAuthenticatedUser(): Internal\Operator\Orgs\ListForAuthenticatedUser
    {
        if ($this->orgs👷ListForAuthenticatedUser instanceof Internal\Operator\Orgs\ListForAuthenticatedUser === false) {
            $this->orgs👷ListForAuthenticatedUser = new Internal\Operator\Orgs\ListForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Orgs());
        }

        return $this->orgs👷ListForAuthenticatedUser;
    }

    public function orgs👷ListForAuthenticatedUserListing(): Internal\Operator\Orgs\ListForAuthenticatedUserListing
    {
        if ($this->orgs👷ListForAuthenticatedUserListing instanceof Internal\Operator\Orgs\ListForAuthenticatedUserListing === false) {
            $this->orgs👷ListForAuthenticatedUserListing = new Internal\Operator\Orgs\ListForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Orgs());
        }

        return $this->orgs👷ListForAuthenticatedUserListing;
    }

    public function projects👷CreateForAuthenticatedUser(): Internal\Operator\Projects\CreateForAuthenticatedUser
    {
        if ($this->projects👷CreateForAuthenticatedUser instanceof Internal\Operator\Projects\CreateForAuthenticatedUser === false) {
            $this->projects👷CreateForAuthenticatedUser = new Internal\Operator\Projects\CreateForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Projects());
        }

        return $this->projects👷CreateForAuthenticatedUser;
    }

    public function repos👷ListForAuthenticatedUser(): Internal\Operator\Repos\ListForAuthenticatedUser
    {
        if ($this->repos👷ListForAuthenticatedUser instanceof Internal\Operator\Repos\ListForAuthenticatedUser === false) {
            $this->repos👷ListForAuthenticatedUser = new Internal\Operator\Repos\ListForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Repos());
        }

        return $this->repos👷ListForAuthenticatedUser;
    }

    public function repos👷ListForAuthenticatedUserListing(): Internal\Operator\Repos\ListForAuthenticatedUserListing
    {
        if ($this->repos👷ListForAuthenticatedUserListing instanceof Internal\Operator\Repos\ListForAuthenticatedUserListing === false) {
            $this->repos👷ListForAuthenticatedUserListing = new Internal\Operator\Repos\ListForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Repos());
        }

        return $this->repos👷ListForAuthenticatedUserListing;
    }

    public function repos👷CreateForAuthenticatedUser(): Internal\Operator\Repos\CreateForAuthenticatedUser
    {
        if ($this->repos👷CreateForAuthenticatedUser instanceof Internal\Operator\Repos\CreateForAuthenticatedUser === false) {
            $this->repos👷CreateForAuthenticatedUser = new Internal\Operator\Repos\CreateForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Repos());
        }

        return $this->repos👷CreateForAuthenticatedUser;
    }

    public function repos👷ListInvitationsForAuthenticatedUser(): Internal\Operator\Repos\ListInvitationsForAuthenticatedUser
    {
        if ($this->repos👷ListInvitationsForAuthenticatedUser instanceof Internal\Operator\Repos\ListInvitationsForAuthenticatedUser === false) {
            $this->repos👷ListInvitationsForAuthenticatedUser = new Internal\Operator\Repos\ListInvitationsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀RepositoryInvitations());
        }

        return $this->repos👷ListInvitationsForAuthenticatedUser;
    }

    public function repos👷ListInvitationsForAuthenticatedUserListing(): Internal\Operator\Repos\ListInvitationsForAuthenticatedUserListing
    {
        if ($this->repos👷ListInvitationsForAuthenticatedUserListing instanceof Internal\Operator\Repos\ListInvitationsForAuthenticatedUserListing === false) {
            $this->repos👷ListInvitationsForAuthenticatedUserListing = new Internal\Operator\Repos\ListInvitationsForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀RepositoryInvitations());
        }

        return $this->repos👷ListInvitationsForAuthenticatedUserListing;
    }

    public function repos👷DeclineInvitationForAuthenticatedUser(): Internal\Operator\Repos\DeclineInvitationForAuthenticatedUser
    {
        if ($this->repos👷DeclineInvitationForAuthenticatedUser instanceof Internal\Operator\Repos\DeclineInvitationForAuthenticatedUser === false) {
            $this->repos👷DeclineInvitationForAuthenticatedUser = new Internal\Operator\Repos\DeclineInvitationForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀RepositoryInvitations🌀InvitationId());
        }

        return $this->repos👷DeclineInvitationForAuthenticatedUser;
    }

    public function repos👷AcceptInvitationForAuthenticatedUser(): Internal\Operator\Repos\AcceptInvitationForAuthenticatedUser
    {
        if ($this->repos👷AcceptInvitationForAuthenticatedUser instanceof Internal\Operator\Repos\AcceptInvitationForAuthenticatedUser === false) {
            $this->repos👷AcceptInvitationForAuthenticatedUser = new Internal\Operator\Repos\AcceptInvitationForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀RepositoryInvitations🌀InvitationId());
        }

        return $this->repos👷AcceptInvitationForAuthenticatedUser;
    }

    public function activity👷ListReposStarredByAuthenticatedUser(): Internal\Operator\Activity\ListReposStarredByAuthenticatedUser
    {
        if ($this->activity👷ListReposStarredByAuthenticatedUser instanceof Internal\Operator\Activity\ListReposStarredByAuthenticatedUser === false) {
            $this->activity👷ListReposStarredByAuthenticatedUser = new Internal\Operator\Activity\ListReposStarredByAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Starred());
        }

        return $this->activity👷ListReposStarredByAuthenticatedUser;
    }

    public function activity👷ListReposStarredByAuthenticatedUserListing(): Internal\Operator\Activity\ListReposStarredByAuthenticatedUserListing
    {
        if ($this->activity👷ListReposStarredByAuthenticatedUserListing instanceof Internal\Operator\Activity\ListReposStarredByAuthenticatedUserListing === false) {
            $this->activity👷ListReposStarredByAuthenticatedUserListing = new Internal\Operator\Activity\ListReposStarredByAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Starred());
        }

        return $this->activity👷ListReposStarredByAuthenticatedUserListing;
    }

    public function activity👷CheckRepoIsStarredByAuthenticatedUser(): Internal\Operator\Activity\CheckRepoIsStarredByAuthenticatedUser
    {
        if ($this->activity👷CheckRepoIsStarredByAuthenticatedUser instanceof Internal\Operator\Activity\CheckRepoIsStarredByAuthenticatedUser === false) {
            $this->activity👷CheckRepoIsStarredByAuthenticatedUser = new Internal\Operator\Activity\CheckRepoIsStarredByAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Starred🌀Owner🌀Repo());
        }

        return $this->activity👷CheckRepoIsStarredByAuthenticatedUser;
    }

    public function activity👷StarRepoForAuthenticatedUser(): Internal\Operator\Activity\StarRepoForAuthenticatedUser
    {
        if ($this->activity👷StarRepoForAuthenticatedUser instanceof Internal\Operator\Activity\StarRepoForAuthenticatedUser === false) {
            $this->activity👷StarRepoForAuthenticatedUser = new Internal\Operator\Activity\StarRepoForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Starred🌀Owner🌀Repo());
        }

        return $this->activity👷StarRepoForAuthenticatedUser;
    }

    public function activity👷UnstarRepoForAuthenticatedUser(): Internal\Operator\Activity\UnstarRepoForAuthenticatedUser
    {
        if ($this->activity👷UnstarRepoForAuthenticatedUser instanceof Internal\Operator\Activity\UnstarRepoForAuthenticatedUser === false) {
            $this->activity👷UnstarRepoForAuthenticatedUser = new Internal\Operator\Activity\UnstarRepoForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Starred🌀Owner🌀Repo());
        }

        return $this->activity👷UnstarRepoForAuthenticatedUser;
    }

    public function activity👷ListWatchedReposForAuthenticatedUser(): Internal\Operator\Activity\ListWatchedReposForAuthenticatedUser
    {
        if ($this->activity👷ListWatchedReposForAuthenticatedUser instanceof Internal\Operator\Activity\ListWatchedReposForAuthenticatedUser === false) {
            $this->activity👷ListWatchedReposForAuthenticatedUser = new Internal\Operator\Activity\ListWatchedReposForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Subscriptions());
        }

        return $this->activity👷ListWatchedReposForAuthenticatedUser;
    }

    public function activity👷ListWatchedReposForAuthenticatedUserListing(): Internal\Operator\Activity\ListWatchedReposForAuthenticatedUserListing
    {
        if ($this->activity👷ListWatchedReposForAuthenticatedUserListing instanceof Internal\Operator\Activity\ListWatchedReposForAuthenticatedUserListing === false) {
            $this->activity👷ListWatchedReposForAuthenticatedUserListing = new Internal\Operator\Activity\ListWatchedReposForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Subscriptions());
        }

        return $this->activity👷ListWatchedReposForAuthenticatedUserListing;
    }

    public function teams👷ListForAuthenticatedUser(): Internal\Operator\Teams\ListForAuthenticatedUser
    {
        if ($this->teams👷ListForAuthenticatedUser instanceof Internal\Operator\Teams\ListForAuthenticatedUser === false) {
            $this->teams👷ListForAuthenticatedUser = new Internal\Operator\Teams\ListForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Teams());
        }

        return $this->teams👷ListForAuthenticatedUser;
    }

    public function teams👷ListForAuthenticatedUserListing(): Internal\Operator\Teams\ListForAuthenticatedUserListing
    {
        if ($this->teams👷ListForAuthenticatedUserListing instanceof Internal\Operator\Teams\ListForAuthenticatedUserListing === false) {
            $this->teams👷ListForAuthenticatedUserListing = new Internal\Operator\Teams\ListForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Teams());
        }

        return $this->teams👷ListForAuthenticatedUserListing;
    }

    public function users👷List_(): Internal\Operator\Users\List_
    {
        if ($this->users👷List_ instanceof Internal\Operator\Users\List_ === false) {
            $this->users👷List_ = new Internal\Operator\Users\List_($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users());
        }

        return $this->users👷List_;
    }

    public function users👷GetByUsername(): Internal\Operator\Users\GetByUsername
    {
        if ($this->users👷GetByUsername instanceof Internal\Operator\Users\GetByUsername === false) {
            $this->users👷GetByUsername = new Internal\Operator\Users\GetByUsername($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username());
        }

        return $this->users👷GetByUsername;
    }

    public function activity👷ListEventsForAuthenticatedUser(): Internal\Operator\Activity\ListEventsForAuthenticatedUser
    {
        if ($this->activity👷ListEventsForAuthenticatedUser instanceof Internal\Operator\Activity\ListEventsForAuthenticatedUser === false) {
            $this->activity👷ListEventsForAuthenticatedUser = new Internal\Operator\Activity\ListEventsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Events());
        }

        return $this->activity👷ListEventsForAuthenticatedUser;
    }

    public function activity👷ListEventsForAuthenticatedUserListing(): Internal\Operator\Activity\ListEventsForAuthenticatedUserListing
    {
        if ($this->activity👷ListEventsForAuthenticatedUserListing instanceof Internal\Operator\Activity\ListEventsForAuthenticatedUserListing === false) {
            $this->activity👷ListEventsForAuthenticatedUserListing = new Internal\Operator\Activity\ListEventsForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Events());
        }

        return $this->activity👷ListEventsForAuthenticatedUserListing;
    }

    public function activity👷ListOrgEventsForAuthenticatedUser(): Internal\Operator\Activity\ListOrgEventsForAuthenticatedUser
    {
        if ($this->activity👷ListOrgEventsForAuthenticatedUser instanceof Internal\Operator\Activity\ListOrgEventsForAuthenticatedUser === false) {
            $this->activity👷ListOrgEventsForAuthenticatedUser = new Internal\Operator\Activity\ListOrgEventsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Events🌀Orgs🌀Org());
        }

        return $this->activity👷ListOrgEventsForAuthenticatedUser;
    }

    public function activity👷ListOrgEventsForAuthenticatedUserListing(): Internal\Operator\Activity\ListOrgEventsForAuthenticatedUserListing
    {
        if ($this->activity👷ListOrgEventsForAuthenticatedUserListing instanceof Internal\Operator\Activity\ListOrgEventsForAuthenticatedUserListing === false) {
            $this->activity👷ListOrgEventsForAuthenticatedUserListing = new Internal\Operator\Activity\ListOrgEventsForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Events🌀Orgs🌀Org());
        }

        return $this->activity👷ListOrgEventsForAuthenticatedUserListing;
    }

    public function users👷ListFollowersForUser(): Internal\Operator\Users\ListFollowersForUser
    {
        if ($this->users👷ListFollowersForUser instanceof Internal\Operator\Users\ListFollowersForUser === false) {
            $this->users👷ListFollowersForUser = new Internal\Operator\Users\ListFollowersForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Followers());
        }

        return $this->users👷ListFollowersForUser;
    }

    public function users👷ListFollowersForUserListing(): Internal\Operator\Users\ListFollowersForUserListing
    {
        if ($this->users👷ListFollowersForUserListing instanceof Internal\Operator\Users\ListFollowersForUserListing === false) {
            $this->users👷ListFollowersForUserListing = new Internal\Operator\Users\ListFollowersForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Followers());
        }

        return $this->users👷ListFollowersForUserListing;
    }

    public function users👷ListFollowingForUser(): Internal\Operator\Users\ListFollowingForUser
    {
        if ($this->users👷ListFollowingForUser instanceof Internal\Operator\Users\ListFollowingForUser === false) {
            $this->users👷ListFollowingForUser = new Internal\Operator\Users\ListFollowingForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Following());
        }

        return $this->users👷ListFollowingForUser;
    }

    public function users👷ListFollowingForUserListing(): Internal\Operator\Users\ListFollowingForUserListing
    {
        if ($this->users👷ListFollowingForUserListing instanceof Internal\Operator\Users\ListFollowingForUserListing === false) {
            $this->users👷ListFollowingForUserListing = new Internal\Operator\Users\ListFollowingForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Following());
        }

        return $this->users👷ListFollowingForUserListing;
    }

    public function users👷CheckFollowingForUser(): Internal\Operator\Users\CheckFollowingForUser
    {
        if ($this->users👷CheckFollowingForUser instanceof Internal\Operator\Users\CheckFollowingForUser === false) {
            $this->users👷CheckFollowingForUser = new Internal\Operator\Users\CheckFollowingForUser($this->browser, $this->authentication);
        }

        return $this->users👷CheckFollowingForUser;
    }

    public function gists👷ListForUser(): Internal\Operator\Gists\ListForUser
    {
        if ($this->gists👷ListForUser instanceof Internal\Operator\Gists\ListForUser === false) {
            $this->gists👷ListForUser = new Internal\Operator\Gists\ListForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Gists());
        }

        return $this->gists👷ListForUser;
    }

    public function gists👷ListForUserListing(): Internal\Operator\Gists\ListForUserListing
    {
        if ($this->gists👷ListForUserListing instanceof Internal\Operator\Gists\ListForUserListing === false) {
            $this->gists👷ListForUserListing = new Internal\Operator\Gists\ListForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Gists());
        }

        return $this->gists👷ListForUserListing;
    }

    public function users👷ListGpgKeysForUser(): Internal\Operator\Users\ListGpgKeysForUser
    {
        if ($this->users👷ListGpgKeysForUser instanceof Internal\Operator\Users\ListGpgKeysForUser === false) {
            $this->users👷ListGpgKeysForUser = new Internal\Operator\Users\ListGpgKeysForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀GpgKeys());
        }

        return $this->users👷ListGpgKeysForUser;
    }

    public function users👷ListGpgKeysForUserListing(): Internal\Operator\Users\ListGpgKeysForUserListing
    {
        if ($this->users👷ListGpgKeysForUserListing instanceof Internal\Operator\Users\ListGpgKeysForUserListing === false) {
            $this->users👷ListGpgKeysForUserListing = new Internal\Operator\Users\ListGpgKeysForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀GpgKeys());
        }

        return $this->users👷ListGpgKeysForUserListing;
    }

    public function users👷GetContextForUser(): Internal\Operator\Users\GetContextForUser
    {
        if ($this->users👷GetContextForUser instanceof Internal\Operator\Users\GetContextForUser === false) {
            $this->users👷GetContextForUser = new Internal\Operator\Users\GetContextForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Hovercard());
        }

        return $this->users👷GetContextForUser;
    }

    public function apps👷GetUserInstallation(): Internal\Operator\Apps\GetUserInstallation
    {
        if ($this->apps👷GetUserInstallation instanceof Internal\Operator\Apps\GetUserInstallation === false) {
            $this->apps👷GetUserInstallation = new Internal\Operator\Apps\GetUserInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Installation());
        }

        return $this->apps👷GetUserInstallation;
    }

    public function users👷ListPublicKeysForUser(): Internal\Operator\Users\ListPublicKeysForUser
    {
        if ($this->users👷ListPublicKeysForUser instanceof Internal\Operator\Users\ListPublicKeysForUser === false) {
            $this->users👷ListPublicKeysForUser = new Internal\Operator\Users\ListPublicKeysForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Keys());
        }

        return $this->users👷ListPublicKeysForUser;
    }

    public function users👷ListPublicKeysForUserListing(): Internal\Operator\Users\ListPublicKeysForUserListing
    {
        if ($this->users👷ListPublicKeysForUserListing instanceof Internal\Operator\Users\ListPublicKeysForUserListing === false) {
            $this->users👷ListPublicKeysForUserListing = new Internal\Operator\Users\ListPublicKeysForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Keys());
        }

        return $this->users👷ListPublicKeysForUserListing;
    }

    public function orgs👷ListForUser(): Internal\Operator\Orgs\ListForUser
    {
        if ($this->orgs👷ListForUser instanceof Internal\Operator\Orgs\ListForUser === false) {
            $this->orgs👷ListForUser = new Internal\Operator\Orgs\ListForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Orgs());
        }

        return $this->orgs👷ListForUser;
    }

    public function orgs👷ListForUserListing(): Internal\Operator\Orgs\ListForUserListing
    {
        if ($this->orgs👷ListForUserListing instanceof Internal\Operator\Orgs\ListForUserListing === false) {
            $this->orgs👷ListForUserListing = new Internal\Operator\Orgs\ListForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Orgs());
        }

        return $this->orgs👷ListForUserListing;
    }

    public function projects👷ListForUser(): Internal\Operator\Projects\ListForUser
    {
        if ($this->projects👷ListForUser instanceof Internal\Operator\Projects\ListForUser === false) {
            $this->projects👷ListForUser = new Internal\Operator\Projects\ListForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Projects());
        }

        return $this->projects👷ListForUser;
    }

    public function projects👷ListForUserListing(): Internal\Operator\Projects\ListForUserListing
    {
        if ($this->projects👷ListForUserListing instanceof Internal\Operator\Projects\ListForUserListing === false) {
            $this->projects👷ListForUserListing = new Internal\Operator\Projects\ListForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Projects());
        }

        return $this->projects👷ListForUserListing;
    }

    public function repos👷ListForUser(): Internal\Operator\Repos\ListForUser
    {
        if ($this->repos👷ListForUser instanceof Internal\Operator\Repos\ListForUser === false) {
            $this->repos👷ListForUser = new Internal\Operator\Repos\ListForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Repos());
        }

        return $this->repos👷ListForUser;
    }

    public function repos👷ListForUserListing(): Internal\Operator\Repos\ListForUserListing
    {
        if ($this->repos👷ListForUserListing instanceof Internal\Operator\Repos\ListForUserListing === false) {
            $this->repos👷ListForUserListing = new Internal\Operator\Repos\ListForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Repos());
        }

        return $this->repos👷ListForUserListing;
    }

    public function activity👷ListReposStarredByUser(): Internal\Operator\Activity\ListReposStarredByUser
    {
        if ($this->activity👷ListReposStarredByUser instanceof Internal\Operator\Activity\ListReposStarredByUser === false) {
            $this->activity👷ListReposStarredByUser = new Internal\Operator\Activity\ListReposStarredByUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Starred());
        }

        return $this->activity👷ListReposStarredByUser;
    }

    public function activity👷ListReposWatchedByUser(): Internal\Operator\Activity\ListReposWatchedByUser
    {
        if ($this->activity👷ListReposWatchedByUser instanceof Internal\Operator\Activity\ListReposWatchedByUser === false) {
            $this->activity👷ListReposWatchedByUser = new Internal\Operator\Activity\ListReposWatchedByUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Subscriptions());
        }

        return $this->activity👷ListReposWatchedByUser;
    }

    public function activity👷ListReposWatchedByUserListing(): Internal\Operator\Activity\ListReposWatchedByUserListing
    {
        if ($this->activity👷ListReposWatchedByUserListing instanceof Internal\Operator\Activity\ListReposWatchedByUserListing === false) {
            $this->activity👷ListReposWatchedByUserListing = new Internal\Operator\Activity\ListReposWatchedByUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Subscriptions());
        }

        return $this->activity👷ListReposWatchedByUserListing;
    }

    public function enterpriseAdmin👷SuspendUser(): Internal\Operator\EnterpriseAdmin\SuspendUser
    {
        if ($this->enterpriseAdmin👷SuspendUser instanceof Internal\Operator\EnterpriseAdmin\SuspendUser === false) {
            $this->enterpriseAdmin👷SuspendUser = new Internal\Operator\EnterpriseAdmin\SuspendUser($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->enterpriseAdmin👷SuspendUser;
    }

    public function enterpriseAdmin👷UnsuspendUser(): Internal\Operator\EnterpriseAdmin\UnsuspendUser
    {
        if ($this->enterpriseAdmin👷UnsuspendUser instanceof Internal\Operator\EnterpriseAdmin\UnsuspendUser === false) {
            $this->enterpriseAdmin👷UnsuspendUser = new Internal\Operator\EnterpriseAdmin\UnsuspendUser($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->enterpriseAdmin👷UnsuspendUser;
    }

    public function meta👷GetZen(): Internal\Operator\Meta\GetZen
    {
        if ($this->meta👷GetZen instanceof Internal\Operator\Meta\GetZen === false) {
            $this->meta👷GetZen = new Internal\Operator\Meta\GetZen($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Zen());
        }

        return $this->meta👷GetZen;
    }
}
