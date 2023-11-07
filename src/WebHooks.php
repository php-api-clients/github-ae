<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE;

use ApiClients\Contracts\OpenAPI\WebHooksInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use RuntimeException;
use Throwable;

use function strtolower;

final class WebHooks implements WebHooksInterface
{
    private Internal\WebHook\BranchProtectionRule|null $branchProtectionRule               = null;
    private Internal\WebHook\CheckRun|null $checkRun                                       = null;
    private Internal\WebHook\CheckSuite|null $checkSuite                                   = null;
    private Internal\WebHook\CodeScanningAlert|null $codeScanningAlert                     = null;
    private Internal\WebHook\CommitComment|null $commitComment                             = null;
    private Internal\WebHook\Create|null $create                                           = null;
    private Internal\WebHook\Delete|null $delete                                           = null;
    private Internal\WebHook\DependabotAlert|null $dependabotAlert                         = null;
    private Internal\WebHook\DeployKey|null $deployKey                                     = null;
    private Internal\WebHook\Deployment|null $deployment                                   = null;
    private Internal\WebHook\DeploymentProtectionRule|null $deploymentProtectionRule       = null;
    private Internal\WebHook\DeploymentReview|null $deploymentReview                       = null;
    private Internal\WebHook\DeploymentStatus|null $deploymentStatus                       = null;
    private Internal\WebHook\Discussion|null $discussion                                   = null;
    private Internal\WebHook\DiscussionComment|null $discussionComment                     = null;
    private Internal\WebHook\Fork|null $fork                                               = null;
    private Internal\WebHook\GithubAppAuthorization|null $githubAppAuthorization           = null;
    private Internal\WebHook\Gollum|null $gollum                                           = null;
    private Internal\WebHook\Installation|null $installation                               = null;
    private Internal\WebHook\InstallationRepositories|null $installationRepositories       = null;
    private Internal\WebHook\InstallationTarget|null $installationTarget                   = null;
    private Internal\WebHook\IssueComment|null $issueComment                               = null;
    private Internal\WebHook\Issues|null $issues                                           = null;
    private Internal\WebHook\Label|null $label                                             = null;
    private Internal\WebHook\Member|null $member                                           = null;
    private Internal\WebHook\Membership|null $membership                                   = null;
    private Internal\WebHook\Meta|null $meta                                               = null;
    private Internal\WebHook\Milestone|null $milestone                                     = null;
    private Internal\WebHook\Organization|null $organization                               = null;
    private Internal\WebHook\Package|null $package                                         = null;
    private Internal\WebHook\PageBuild|null $pageBuild                                     = null;
    private Internal\WebHook\Ping|null $ping                                               = null;
    private Internal\WebHook\ProjectCard|null $projectCard                                 = null;
    private Internal\WebHook\Project|null $project                                         = null;
    private Internal\WebHook\ProjectColumn|null $projectColumn                             = null;
    private Internal\WebHook\ProjectsV2|null $projectsV2                                   = null;
    private Internal\WebHook\Public_|null $public                                          = null;
    private Internal\WebHook\PullRequest|null $pullRequest                                 = null;
    private Internal\WebHook\PullRequestReviewComment|null $pullRequestReviewComment       = null;
    private Internal\WebHook\PullRequestReview|null $pullRequestReview                     = null;
    private Internal\WebHook\PullRequestReviewThread|null $pullRequestReviewThread         = null;
    private Internal\WebHook\Push|null $push                                               = null;
    private Internal\WebHook\RegistryPackage|null $registryPackage                         = null;
    private Internal\WebHook\Release|null $release                                         = null;
    private Internal\WebHook\Repository|null $repository                                   = null;
    private Internal\WebHook\RepositoryDispatch|null $repositoryDispatch                   = null;
    private Internal\WebHook\SecretScanningAlert|null $secretScanningAlert                 = null;
    private Internal\WebHook\SecretScanningAlertLocation|null $secretScanningAlertLocation = null;
    private Internal\WebHook\SecurityAndAnalysis|null $securityAndAnalysis                 = null;
    private Internal\WebHook\Sponsorship|null $sponsorship                                 = null;
    private Internal\WebHook\Star|null $star                                               = null;
    private Internal\WebHook\Status|null $status                                           = null;
    private Internal\WebHook\TeamAdd|null $teamAdd                                         = null;
    private Internal\WebHook\Team|null $team                                               = null;
    private Internal\WebHook\User|null $user                                               = null;
    private Internal\WebHook\Watch|null $watch                                             = null;
    private Internal\WebHook\WorkflowDispatch|null $workflowDispatch                       = null;
    private Internal\WebHook\WorkflowJob|null $workflowJob                                 = null;
    private Internal\WebHook\WorkflowRun|null $workflowRun                                 = null;

    public function __construct(private readonly SchemaValidator $requestSchemaValidator, private readonly Internal\Hydrators $hydrator)
    {
    }

    /**
     * @param class-string<H> $className
     *
     * @return H
     *
     * @template H
     */
    public function hydrateWebHook(string $className, array $data): object
    {
        return $this->hydrator->hydrateObject($className, $data);
    }

    /** @return array{className: class-string, data: mixed} */
    public function serializeWebHook(object $object): array
    {
        return ['className' => $object::class, 'data' => $this->hydrator->serializeObject($object)];
    }

    /** @return Schema\WebhookBranchProtectionRuleCreated|Schema\WebhookBranchProtectionRuleDeleted|Schema\WebhookBranchProtectionRuleEdited|Schema\WebhookCheckRunCompleted|Schema\WebhookCheckRunCompletedFormEncoded|Schema\WebhookCheckRunCreated|Schema\WebhookCheckRunCreatedFormEncoded|Schema\WebhookCheckRunRequestedAction|Schema\WebhookCheckRunRequestedActionFormEncoded|Schema\WebhookCheckRunRerequested|Schema\WebhookCheckRunRerequestedFormEncoded|Schema\WebhookCheckSuiteCompleted|Schema\WebhookCheckSuiteRequested|Schema\WebhookCheckSuiteRerequested|Schema\WebhookCodeScanningAlertAppearedInBranch|Schema\WebhookCodeScanningAlertClosedByUser|Schema\WebhookCodeScanningAlertCreated|Schema\WebhookCodeScanningAlertFixed|Schema\WebhookCodeScanningAlertReopened|Schema\WebhookCodeScanningAlertReopenedByUser|Schema\WebhookCommitCommentCreated|Schema\WebhookCreate|Schema\WebhookDelete|Schema\WebhookDependabotAlertAutoDismissed|Schema\WebhookDependabotAlertAutoReopened|Schema\WebhookDependabotAlertCreated|Schema\WebhookDependabotAlertDismissed|Schema\WebhookDependabotAlertFixed|Schema\WebhookDependabotAlertReintroduced|Schema\WebhookDependabotAlertReopened|Schema\WebhookDeployKeyCreated|Schema\WebhookDeployKeyDeleted|Schema\WebhookDeploymentCreated|Schema\WebhookDeploymentProtectionRuleRequested|Schema\WebhookDeploymentReviewApproved|Schema\WebhookDeploymentReviewRejected|Schema\WebhookDeploymentReviewRequested|Schema\WebhookDeploymentStatusCreated|Schema\WebhookDiscussionAnswered|Schema\WebhookDiscussionCategoryChanged|Schema\WebhookDiscussionCreated|Schema\WebhookDiscussionDeleted|Schema\WebhookDiscussionEdited|Schema\WebhookDiscussionLabeled|Schema\WebhookDiscussionLocked|Schema\WebhookDiscussionPinned|Schema\WebhookDiscussionTransferred|Schema\WebhookDiscussionUnanswered|Schema\WebhookDiscussionUnlabeled|Schema\WebhookDiscussionUnlocked|Schema\WebhookDiscussionUnpinned|Schema\WebhookDiscussionCommentCreated|Schema\WebhookDiscussionCommentDeleted|Schema\WebhookDiscussionCommentEdited|Schema\WebhookFork|Schema\WebhookGithubAppAuthorizationRevoked|Schema\WebhookGollum|Schema\WebhookInstallationCreated|Schema\WebhookInstallationDeleted|Schema\WebhookInstallationNewPermissionsAccepted|Schema\WebhookInstallationSuspend|Schema\WebhookInstallationUnsuspend|Schema\WebhookInstallationRepositoriesAdded|Schema\WebhookInstallationRepositoriesRemoved|Schema\WebhookInstallationTargetRenamed|Schema\WebhookIssueCommentCreated|Schema\WebhookIssueCommentDeleted|Schema\WebhookIssueCommentEdited|Schema\WebhookIssuesAssigned|Schema\WebhookIssuesClosed|Schema\WebhookIssuesDeleted|Schema\WebhookIssuesDemilestoned|Schema\WebhookIssuesEdited|Schema\WebhookIssuesLabeled|Schema\WebhookIssuesLocked|Schema\WebhookIssuesMilestoned|Schema\WebhookIssuesOpened|Schema\WebhookIssuesPinned|Schema\WebhookIssuesReopened|Schema\WebhookIssuesTransferred|Schema\WebhookIssuesUnassigned|Schema\WebhookIssuesUnlabeled|Schema\WebhookIssuesUnlocked|Schema\WebhookIssuesUnpinned|Schema\WebhookLabelCreated|Schema\WebhookLabelDeleted|Schema\WebhookLabelEdited|Schema\WebhookMemberAdded|Schema\WebhookMemberEdited|Schema\WebhookMemberRemoved|Schema\WebhookMembershipAdded|Schema\WebhookMembershipRemoved|Schema\WebhookMetaDeleted|Schema\WebhookMilestoneClosed|Schema\WebhookMilestoneCreated|Schema\WebhookMilestoneDeleted|Schema\WebhookMilestoneEdited|Schema\WebhookMilestoneOpened|Schema\WebhookOrganizationDeleted|Schema\WebhookOrganizationMemberAdded|Schema\WebhookOrganizationMemberInvited|Schema\WebhookOrganizationMemberRemoved|Schema\WebhookOrganizationRenamed|Schema\WebhookPackagePublished|Schema\WebhookPackageUpdated|Schema\WebhookPageBuild|Schema\WebhookPing|Schema\WebhookPingFormEncoded|Schema\WebhookProjectCardConverted|Schema\WebhookProjectCardCreated|Schema\WebhookProjectCardDeleted|Schema\WebhookProjectCardEdited|Schema\WebhookProjectCardMoved|Schema\WebhookProjectClosed|Schema\WebhookProjectCreated|Schema\WebhookProjectDeleted|Schema\WebhookProjectEdited|Schema\WebhookProjectReopened|Schema\WebhookProjectColumnCreated|Schema\WebhookProjectColumnDeleted|Schema\WebhookProjectColumnEdited|Schema\WebhookProjectColumnMoved|Schema\WebhookProjectsV2ProjectClosed|Schema\WebhookProjectsV2ProjectCreated|Schema\WebhookProjectsV2ProjectDeleted|Schema\WebhookProjectsV2ProjectEdited|Schema\WebhookProjectsV2ProjectReopened|Schema\WebhookPublic|Schema\WebhookPullRequestAssigned|Schema\WebhookPullRequestAutoMergeDisabled|Schema\WebhookPullRequestAutoMergeEnabled|Schema\WebhookPullRequestClosed|Schema\WebhookPullRequestConvertedToDraft|Schema\WebhookPullRequestDemilestoned|Schema\WebhookPullRequestEdited|Schema\WebhookPullRequestLabeled|Schema\WebhookPullRequestLocked|Schema\WebhookPullRequestMilestoned|Schema\WebhookPullRequestOpened|Schema\WebhookPullRequestReadyForReview|Schema\WebhookPullRequestReopened|Schema\WebhookPullRequestReviewRequestRemoved|Schema\WebhookPullRequestReviewRequested|Schema\WebhookPullRequestSynchronize|Schema\WebhookPullRequestUnassigned|Schema\WebhookPullRequestUnlabeled|Schema\WebhookPullRequestUnlocked|Schema\WebhookPullRequestReviewCommentCreated|Schema\WebhookPullRequestReviewCommentDeleted|Schema\WebhookPullRequestReviewCommentEdited|Schema\WebhookPullRequestReviewDismissed|Schema\WebhookPullRequestReviewEdited|Schema\WebhookPullRequestReviewSubmitted|Schema\WebhookPullRequestReviewThreadResolved|Schema\WebhookPullRequestReviewThreadUnresolved|Schema\WebhookPush|Schema\WebhookRegistryPackagePublished|Schema\WebhookRegistryPackageUpdated|Schema\WebhookReleaseCreated|Schema\WebhookReleaseDeleted|Schema\WebhookReleaseEdited|Schema\WebhookReleasePrereleased|Schema\WebhookReleasePublished|Schema\WebhookReleaseReleased|Schema\WebhookReleaseUnpublished|Schema\WebhookRepositoryAnonymousAccessDisabled|Schema\WebhookRepositoryAnonymousAccessEnabled|Schema\WebhookRepositoryArchived|Schema\WebhookRepositoryCreated|Schema\WebhookRepositoryDeleted|Schema\WebhookRepositoryEdited|Schema\WebhookRepositoryPrivatized|Schema\WebhookRepositoryPublicized|Schema\WebhookRepositoryRenamed|Schema\WebhookRepositoryTransferred|Schema\WebhookRepositoryUnarchived|Schema\WebhookRepositoryDispatchSample|Schema\WebhookSecretScanningAlertCreated|Schema\WebhookSecretScanningAlertReopened|Schema\WebhookSecretScanningAlertResolved|Schema\WebhookSecretScanningAlertRevoked|Schema\WebhookSecretScanningAlertLocationCreated|Schema\WebhookSecretScanningAlertLocationCreatedFormEncoded|Schema\WebhookSecurityAndAnalysis|Schema\WebhookSponsorshipCancelled|Schema\WebhookSponsorshipCreated|Schema\WebhookSponsorshipEdited|Schema\WebhookSponsorshipPendingCancellation|Schema\WebhookSponsorshipPendingTierChange|Schema\WebhookSponsorshipTierChanged|Schema\WebhookStarCreated|Schema\WebhookStarDeleted|Schema\WebhookStatus|Schema\WebhookTeamAdd|Schema\WebhookTeamAddedToRepository|Schema\WebhookTeamCreated|Schema\WebhookTeamDeleted|Schema\WebhookTeamEdited|Schema\WebhookTeamRemovedFromRepository|Schema\WebhookUserCreated|Schema\WebhookUserDeleted|Schema\WebhookWatchStarted|Schema\WebhookWorkflowDispatch|Schema\WebhookWorkflowJobCompleted|Schema\WebhookWorkflowJobInProgress|Schema\WebhookWorkflowJobQueued|Schema\WebhookWorkflowRunCompleted|Schema\WebhookWorkflowRunInProgress|Schema\WebhookWorkflowRunRequested */
    public function resolve(array $headers, array $data): object
    {
        $headers = (static function ($headers): array {
            $flatHeaders = [];
            foreach ($headers as $key => $value) {
                $flatHeaders[strtolower($key)] = $value;
            }

            return $flatHeaders;
        })($headers);
        $error   = new RuntimeException('No event matching given headers and data');
        try {
            if ($this->branchProtectionRule instanceof Internal\WebHook\BranchProtectionRule === false) {
                $this->branchProtectionRule = new Internal\WebHook\BranchProtectionRule($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝BranchProtectionRule());
            }

            return $this->branchProtectionRule->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaaaa;
        }

        webhooks_aaaaa:
        try {
            if ($this->checkRun instanceof Internal\WebHook\CheckRun === false) {
                $this->checkRun = new Internal\WebHook\CheckRun($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝CheckRun());
            }

            return $this->checkRun->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaaab;
        }

        webhooks_aaaab:
        try {
            if ($this->checkSuite instanceof Internal\WebHook\CheckSuite === false) {
                $this->checkSuite = new Internal\WebHook\CheckSuite($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝CheckSuite());
            }

            return $this->checkSuite->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaaac;
        }

        webhooks_aaaac:
        try {
            if ($this->codeScanningAlert instanceof Internal\WebHook\CodeScanningAlert === false) {
                $this->codeScanningAlert = new Internal\WebHook\CodeScanningAlert($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝CodeScanningAlert());
            }

            return $this->codeScanningAlert->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaaad;
        }

        webhooks_aaaad:
        try {
            if ($this->commitComment instanceof Internal\WebHook\CommitComment === false) {
                $this->commitComment = new Internal\WebHook\CommitComment($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝CommitComment());
            }

            return $this->commitComment->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaaae;
        }

        webhooks_aaaae:
        try {
            if ($this->create instanceof Internal\WebHook\Create === false) {
                $this->create = new Internal\WebHook\Create($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Create());
            }

            return $this->create->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaaaf;
        }

        webhooks_aaaaf:
        try {
            if ($this->delete instanceof Internal\WebHook\Delete === false) {
                $this->delete = new Internal\WebHook\Delete($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Delete());
            }

            return $this->delete->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaaag;
        }

        webhooks_aaaag:
        try {
            if ($this->dependabotAlert instanceof Internal\WebHook\DependabotAlert === false) {
                $this->dependabotAlert = new Internal\WebHook\DependabotAlert($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝DependabotAlert());
            }

            return $this->dependabotAlert->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaaah;
        }

        webhooks_aaaah:
        try {
            if ($this->deployKey instanceof Internal\WebHook\DeployKey === false) {
                $this->deployKey = new Internal\WebHook\DeployKey($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝DeployKey());
            }

            return $this->deployKey->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaaai;
        }

        webhooks_aaaai:
        try {
            if ($this->deployment instanceof Internal\WebHook\Deployment === false) {
                $this->deployment = new Internal\WebHook\Deployment($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Deployment());
            }

            return $this->deployment->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaaaj;
        }

        webhooks_aaaaj:
        try {
            if ($this->deploymentProtectionRule instanceof Internal\WebHook\DeploymentProtectionRule === false) {
                $this->deploymentProtectionRule = new Internal\WebHook\DeploymentProtectionRule($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝DeploymentProtectionRule());
            }

            return $this->deploymentProtectionRule->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaaak;
        }

        webhooks_aaaak:
        try {
            if ($this->deploymentReview instanceof Internal\WebHook\DeploymentReview === false) {
                $this->deploymentReview = new Internal\WebHook\DeploymentReview($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝DeploymentReview());
            }

            return $this->deploymentReview->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaaal;
        }

        webhooks_aaaal:
        try {
            if ($this->deploymentStatus instanceof Internal\WebHook\DeploymentStatus === false) {
                $this->deploymentStatus = new Internal\WebHook\DeploymentStatus($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝DeploymentStatus());
            }

            return $this->deploymentStatus->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaaam;
        }

        webhooks_aaaam:
        try {
            if ($this->discussion instanceof Internal\WebHook\Discussion === false) {
                $this->discussion = new Internal\WebHook\Discussion($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Discussion());
            }

            return $this->discussion->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaaan;
        }

        webhooks_aaaan:
        try {
            if ($this->discussionComment instanceof Internal\WebHook\DiscussionComment === false) {
                $this->discussionComment = new Internal\WebHook\DiscussionComment($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝DiscussionComment());
            }

            return $this->discussionComment->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaaao;
        }

        webhooks_aaaao:
        try {
            if ($this->fork instanceof Internal\WebHook\Fork === false) {
                $this->fork = new Internal\WebHook\Fork($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Fork());
            }

            return $this->fork->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaaap;
        }

        webhooks_aaaap:
        try {
            if ($this->githubAppAuthorization instanceof Internal\WebHook\GithubAppAuthorization === false) {
                $this->githubAppAuthorization = new Internal\WebHook\GithubAppAuthorization($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝GithubAppAuthorization());
            }

            return $this->githubAppAuthorization->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaaaq;
        }

        webhooks_aaaaq:
        try {
            if ($this->gollum instanceof Internal\WebHook\Gollum === false) {
                $this->gollum = new Internal\WebHook\Gollum($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Gollum());
            }

            return $this->gollum->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaaar;
        }

        webhooks_aaaar:
        try {
            if ($this->installation instanceof Internal\WebHook\Installation === false) {
                $this->installation = new Internal\WebHook\Installation($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Installation());
            }

            return $this->installation->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaaas;
        }

        webhooks_aaaas:
        try {
            if ($this->installationRepositories instanceof Internal\WebHook\InstallationRepositories === false) {
                $this->installationRepositories = new Internal\WebHook\InstallationRepositories($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝InstallationRepositories());
            }

            return $this->installationRepositories->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaaat;
        }

        webhooks_aaaat:
        try {
            if ($this->installationTarget instanceof Internal\WebHook\InstallationTarget === false) {
                $this->installationTarget = new Internal\WebHook\InstallationTarget($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝InstallationTarget());
            }

            return $this->installationTarget->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaaau;
        }

        webhooks_aaaau:
        try {
            if ($this->issueComment instanceof Internal\WebHook\IssueComment === false) {
                $this->issueComment = new Internal\WebHook\IssueComment($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝IssueComment());
            }

            return $this->issueComment->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaaav;
        }

        webhooks_aaaav:
        try {
            if ($this->issues instanceof Internal\WebHook\Issues === false) {
                $this->issues = new Internal\WebHook\Issues($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Issues());
            }

            return $this->issues->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaaaw;
        }

        webhooks_aaaaw:
        try {
            if ($this->label instanceof Internal\WebHook\Label === false) {
                $this->label = new Internal\WebHook\Label($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Label());
            }

            return $this->label->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaaax;
        }

        webhooks_aaaax:
        try {
            if ($this->member instanceof Internal\WebHook\Member === false) {
                $this->member = new Internal\WebHook\Member($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Member());
            }

            return $this->member->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaaay;
        }

        webhooks_aaaay:
        try {
            if ($this->membership instanceof Internal\WebHook\Membership === false) {
                $this->membership = new Internal\WebHook\Membership($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Membership());
            }

            return $this->membership->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaaaz;
        }

        webhooks_aaaaz:
        try {
            if ($this->meta instanceof Internal\WebHook\Meta === false) {
                $this->meta = new Internal\WebHook\Meta($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Meta());
            }

            return $this->meta->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaaba;
        }

        webhooks_aaaba:
        try {
            if ($this->milestone instanceof Internal\WebHook\Milestone === false) {
                $this->milestone = new Internal\WebHook\Milestone($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Milestone());
            }

            return $this->milestone->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaabb;
        }

        webhooks_aaabb:
        try {
            if ($this->organization instanceof Internal\WebHook\Organization === false) {
                $this->organization = new Internal\WebHook\Organization($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Organization());
            }

            return $this->organization->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaabc;
        }

        webhooks_aaabc:
        try {
            if ($this->package instanceof Internal\WebHook\Package === false) {
                $this->package = new Internal\WebHook\Package($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Package());
            }

            return $this->package->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaabd;
        }

        webhooks_aaabd:
        try {
            if ($this->pageBuild instanceof Internal\WebHook\PageBuild === false) {
                $this->pageBuild = new Internal\WebHook\PageBuild($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝PageBuild());
            }

            return $this->pageBuild->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaabe;
        }

        webhooks_aaabe:
        try {
            if ($this->ping instanceof Internal\WebHook\Ping === false) {
                $this->ping = new Internal\WebHook\Ping($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Ping());
            }

            return $this->ping->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaabf;
        }

        webhooks_aaabf:
        try {
            if ($this->projectCard instanceof Internal\WebHook\ProjectCard === false) {
                $this->projectCard = new Internal\WebHook\ProjectCard($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝ProjectCard());
            }

            return $this->projectCard->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaabg;
        }

        webhooks_aaabg:
        try {
            if ($this->project instanceof Internal\WebHook\Project === false) {
                $this->project = new Internal\WebHook\Project($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Project());
            }

            return $this->project->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaabh;
        }

        webhooks_aaabh:
        try {
            if ($this->projectColumn instanceof Internal\WebHook\ProjectColumn === false) {
                $this->projectColumn = new Internal\WebHook\ProjectColumn($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝ProjectColumn());
            }

            return $this->projectColumn->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaabi;
        }

        webhooks_aaabi:
        try {
            if ($this->projectsV2 instanceof Internal\WebHook\ProjectsV2 === false) {
                $this->projectsV2 = new Internal\WebHook\ProjectsV2($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝ProjectsV2());
            }

            return $this->projectsV2->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaabj;
        }

        webhooks_aaabj:
        try {
            if ($this->public instanceof Internal\WebHook\Public_ === false) {
                $this->public = new Internal\WebHook\Public_($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Public_());
            }

            return $this->public->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaabk;
        }

        webhooks_aaabk:
        try {
            if ($this->pullRequest instanceof Internal\WebHook\PullRequest === false) {
                $this->pullRequest = new Internal\WebHook\PullRequest($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝PullRequest());
            }

            return $this->pullRequest->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaabl;
        }

        webhooks_aaabl:
        try {
            if ($this->pullRequestReviewComment instanceof Internal\WebHook\PullRequestReviewComment === false) {
                $this->pullRequestReviewComment = new Internal\WebHook\PullRequestReviewComment($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝PullRequestReviewComment());
            }

            return $this->pullRequestReviewComment->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaabm;
        }

        webhooks_aaabm:
        try {
            if ($this->pullRequestReview instanceof Internal\WebHook\PullRequestReview === false) {
                $this->pullRequestReview = new Internal\WebHook\PullRequestReview($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝PullRequestReview());
            }

            return $this->pullRequestReview->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaabn;
        }

        webhooks_aaabn:
        try {
            if ($this->pullRequestReviewThread instanceof Internal\WebHook\PullRequestReviewThread === false) {
                $this->pullRequestReviewThread = new Internal\WebHook\PullRequestReviewThread($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝PullRequestReviewThread());
            }

            return $this->pullRequestReviewThread->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaabo;
        }

        webhooks_aaabo:
        try {
            if ($this->push instanceof Internal\WebHook\Push === false) {
                $this->push = new Internal\WebHook\Push($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Push());
            }

            return $this->push->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaabp;
        }

        webhooks_aaabp:
        try {
            if ($this->registryPackage instanceof Internal\WebHook\RegistryPackage === false) {
                $this->registryPackage = new Internal\WebHook\RegistryPackage($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝RegistryPackage());
            }

            return $this->registryPackage->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaabq;
        }

        webhooks_aaabq:
        try {
            if ($this->release instanceof Internal\WebHook\Release === false) {
                $this->release = new Internal\WebHook\Release($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Release());
            }

            return $this->release->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaabr;
        }

        webhooks_aaabr:
        try {
            if ($this->repository instanceof Internal\WebHook\Repository === false) {
                $this->repository = new Internal\WebHook\Repository($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Repository());
            }

            return $this->repository->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaabs;
        }

        webhooks_aaabs:
        try {
            if ($this->repositoryDispatch instanceof Internal\WebHook\RepositoryDispatch === false) {
                $this->repositoryDispatch = new Internal\WebHook\RepositoryDispatch($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝RepositoryDispatch());
            }

            return $this->repositoryDispatch->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaabt;
        }

        webhooks_aaabt:
        try {
            if ($this->secretScanningAlert instanceof Internal\WebHook\SecretScanningAlert === false) {
                $this->secretScanningAlert = new Internal\WebHook\SecretScanningAlert($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝SecretScanningAlert());
            }

            return $this->secretScanningAlert->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaabu;
        }

        webhooks_aaabu:
        try {
            if ($this->secretScanningAlertLocation instanceof Internal\WebHook\SecretScanningAlertLocation === false) {
                $this->secretScanningAlertLocation = new Internal\WebHook\SecretScanningAlertLocation($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝SecretScanningAlertLocation());
            }

            return $this->secretScanningAlertLocation->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaabv;
        }

        webhooks_aaabv:
        try {
            if ($this->securityAndAnalysis instanceof Internal\WebHook\SecurityAndAnalysis === false) {
                $this->securityAndAnalysis = new Internal\WebHook\SecurityAndAnalysis($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝SecurityAndAnalysis());
            }

            return $this->securityAndAnalysis->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaabw;
        }

        webhooks_aaabw:
        try {
            if ($this->sponsorship instanceof Internal\WebHook\Sponsorship === false) {
                $this->sponsorship = new Internal\WebHook\Sponsorship($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Sponsorship());
            }

            return $this->sponsorship->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaabx;
        }

        webhooks_aaabx:
        try {
            if ($this->star instanceof Internal\WebHook\Star === false) {
                $this->star = new Internal\WebHook\Star($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Star());
            }

            return $this->star->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaaby;
        }

        webhooks_aaaby:
        try {
            if ($this->status instanceof Internal\WebHook\Status === false) {
                $this->status = new Internal\WebHook\Status($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Status());
            }

            return $this->status->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaabz;
        }

        webhooks_aaabz:
        try {
            if ($this->teamAdd instanceof Internal\WebHook\TeamAdd === false) {
                $this->teamAdd = new Internal\WebHook\TeamAdd($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝TeamAdd());
            }

            return $this->teamAdd->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaaca;
        }

        webhooks_aaaca:
        try {
            if ($this->team instanceof Internal\WebHook\Team === false) {
                $this->team = new Internal\WebHook\Team($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Team());
            }

            return $this->team->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaacb;
        }

        webhooks_aaacb:
        try {
            if ($this->user instanceof Internal\WebHook\User === false) {
                $this->user = new Internal\WebHook\User($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝User());
            }

            return $this->user->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaacc;
        }

        webhooks_aaacc:
        try {
            if ($this->watch instanceof Internal\WebHook\Watch === false) {
                $this->watch = new Internal\WebHook\Watch($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Watch());
            }

            return $this->watch->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaacd;
        }

        webhooks_aaacd:
        try {
            if ($this->workflowDispatch instanceof Internal\WebHook\WorkflowDispatch === false) {
                $this->workflowDispatch = new Internal\WebHook\WorkflowDispatch($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝WorkflowDispatch());
            }

            return $this->workflowDispatch->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaace;
        }

        webhooks_aaace:
        try {
            if ($this->workflowJob instanceof Internal\WebHook\WorkflowJob === false) {
                $this->workflowJob = new Internal\WebHook\WorkflowJob($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝WorkflowJob());
            }

            return $this->workflowJob->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaacf;
        }

        webhooks_aaacf:
        try {
            if ($this->workflowRun instanceof Internal\WebHook\WorkflowRun === false) {
                $this->workflowRun = new Internal\WebHook\WorkflowRun($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝WorkflowRun());
            }

            return $this->workflowRun->resolve($headers, $data);
        } catch (Throwable $error) {
            goto webhooks_aaacg;
        }

        webhooks_aaacg:
        throw $error;
    }
}
