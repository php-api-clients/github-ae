<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Repository;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class TemplateRepository
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"id":{"type":"integer"},"node_id":{"type":"string"},"name":{"type":"string"},"full_name":{"type":"string"},"owner":{"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"avatar_url":{"type":"string"},"gravatar_id":{"type":"string"},"url":{"type":"string"},"html_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"organizations_url":{"type":"string"},"repos_url":{"type":"string"},"events_url":{"type":"string"},"received_events_url":{"type":"string"},"type":{"type":"string"},"site_admin":{"type":"boolean"}}},"private":{"type":"boolean"},"html_url":{"type":"string"},"description":{"type":"string"},"fork":{"type":"boolean"},"url":{"type":"string"},"archive_url":{"type":"string"},"assignees_url":{"type":"string"},"blobs_url":{"type":"string"},"branches_url":{"type":"string"},"collaborators_url":{"type":"string"},"comments_url":{"type":"string"},"commits_url":{"type":"string"},"compare_url":{"type":"string"},"contents_url":{"type":"string"},"contributors_url":{"type":"string"},"deployments_url":{"type":"string"},"downloads_url":{"type":"string"},"events_url":{"type":"string"},"forks_url":{"type":"string"},"git_commits_url":{"type":"string"},"git_refs_url":{"type":"string"},"git_tags_url":{"type":"string"},"git_url":{"type":"string"},"issue_comment_url":{"type":"string"},"issue_events_url":{"type":"string"},"issues_url":{"type":"string"},"keys_url":{"type":"string"},"labels_url":{"type":"string"},"languages_url":{"type":"string"},"merges_url":{"type":"string"},"milestones_url":{"type":"string"},"notifications_url":{"type":"string"},"pulls_url":{"type":"string"},"releases_url":{"type":"string"},"ssh_url":{"type":"string"},"stargazers_url":{"type":"string"},"statuses_url":{"type":"string"},"subscribers_url":{"type":"string"},"subscription_url":{"type":"string"},"tags_url":{"type":"string"},"teams_url":{"type":"string"},"trees_url":{"type":"string"},"clone_url":{"type":"string"},"mirror_url":{"type":"string"},"hooks_url":{"type":"string"},"svn_url":{"type":"string"},"homepage":{"type":"string"},"language":{"type":"string"},"forks_count":{"type":"integer"},"stargazers_count":{"type":"integer"},"watchers_count":{"type":"integer"},"size":{"type":"integer"},"default_branch":{"type":"string"},"open_issues_count":{"type":"integer"},"is_template":{"type":"boolean"},"topics":{"type":"array","items":{"type":"string"}},"has_issues":{"type":"boolean"},"has_projects":{"type":"boolean"},"has_wiki":{"type":"boolean"},"has_pages":{"type":"boolean"},"has_downloads":{"type":"boolean"},"archived":{"type":"boolean"},"disabled":{"type":"boolean"},"visibility":{"type":"string"},"pushed_at":{"type":"string"},"created_at":{"type":"string"},"updated_at":{"type":"string"},"permissions":{"type":"object","properties":{"admin":{"type":"boolean"},"maintain":{"type":"boolean"},"push":{"type":"boolean"},"triage":{"type":"boolean"},"pull":{"type":"boolean"}}},"allow_rebase_merge":{"type":"boolean"},"temp_clone_token":{"type":"string"},"allow_squash_merge":{"type":"boolean"},"allow_auto_merge":{"type":"boolean"},"delete_branch_on_merge":{"type":"boolean"},"allow_update_branch":{"type":"boolean"},"allow_merge_commit":{"type":"boolean"},"subscribers_count":{"type":"integer"},"network_count":{"type":"integer"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"nodeId":"generated_node_id_null","name":"generated_name_null","fullName":"generated_full_name_null","owner":{"login":"generated_login_null","id":13,"nodeId":"generated_node_id_null","avatarUrl":"generated_avatar_url_null","gravatarId":"generated_gravatar_id_null","url":"generated_url_null","htmlUrl":"generated_html_url_null","followersUrl":"generated_followers_url_null","followingUrl":"generated_following_url_null","gistsUrl":"generated_gists_url_null","starredUrl":"generated_starred_url_null","subscriptionsUrl":"generated_subscriptions_url_null","organizationsUrl":"generated_organizations_url_null","reposUrl":"generated_repos_url_null","eventsUrl":"generated_events_url_null","receivedEventsUrl":"generated_received_events_url_null","type":"generated_type_null","siteAdmin":false},"private":false,"htmlUrl":"generated_html_url_null","description":"generated_description_null","fork":false,"url":"generated_url_null","archiveUrl":"generated_archive_url_null","assigneesUrl":"generated_assignees_url_null","blobsUrl":"generated_blobs_url_null","branchesUrl":"generated_branches_url_null","collaboratorsUrl":"generated_collaborators_url_null","commentsUrl":"generated_comments_url_null","commitsUrl":"generated_commits_url_null","compareUrl":"generated_compare_url_null","contentsUrl":"generated_contents_url_null","contributorsUrl":"generated_contributors_url_null","deploymentsUrl":"generated_deployments_url_null","downloadsUrl":"generated_downloads_url_null","eventsUrl":"generated_events_url_null","forksUrl":"generated_forks_url_null","gitCommitsUrl":"generated_git_commits_url_null","gitRefsUrl":"generated_git_refs_url_null","gitTagsUrl":"generated_git_tags_url_null","gitUrl":"generated_git_url_null","issueCommentUrl":"generated_issue_comment_url_null","issueEventsUrl":"generated_issue_events_url_null","issuesUrl":"generated_issues_url_null","keysUrl":"generated_keys_url_null","labelsUrl":"generated_labels_url_null","languagesUrl":"generated_languages_url_null","mergesUrl":"generated_merges_url_null","milestonesUrl":"generated_milestones_url_null","notificationsUrl":"generated_notifications_url_null","pullsUrl":"generated_pulls_url_null","releasesUrl":"generated_releases_url_null","sshUrl":"generated_ssh_url_null","stargazersUrl":"generated_stargazers_url_null","statusesUrl":"generated_statuses_url_null","subscribersUrl":"generated_subscribers_url_null","subscriptionUrl":"generated_subscription_url_null","tagsUrl":"generated_tags_url_null","teamsUrl":"generated_teams_url_null","treesUrl":"generated_trees_url_null","cloneUrl":"generated_clone_url_null","mirrorUrl":"generated_mirror_url_null","hooksUrl":"generated_hooks_url_null","svnUrl":"generated_svn_url_null","homepage":"generated_homepage_null","language":"generated_language_null","forksCount":13,"stargazersCount":13,"watchersCount":13,"size":13,"defaultBranch":"generated_default_branch_null","openIssuesCount":13,"isTemplate":false,"topics":["generated_topics_null"],"hasIssues":false,"hasProjects":false,"hasWiki":false,"hasPages":false,"hasDownloads":false,"archived":false,"disabled":false,"visibility":"generated_visibility_null","pushedAt":"generated_pushed_at_null","createdAt":"generated_created_at_null","updatedAt":"generated_updated_at_null","permissions":{"admin":false,"maintain":false,"push":false,"triage":false,"pull":false},"allowRebaseMerge":false,"tempCloneToken":"generated_temp_clone_token_null","allowSquashMerge":false,"allowAutoMerge":false,"deleteBranchOnMerge":false,"allowUpdateBranch":false,"allowMergeCommit":false,"subscribersCount":13,"networkCount":13}';
    /**
     * @param ?array<string> $topics
     */
    public function __construct(public ?int $id, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public ?string $nodeId, public ?string $name, #[\EventSauce\ObjectHydrator\MapFrom('full_name')] public ?string $fullName, public ?Schema\Repository\TemplateRepository\Owner $owner, public ?bool $private, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public ?string $htmlUrl, public ?string $description, public ?bool $fork, public ?string $url, #[\EventSauce\ObjectHydrator\MapFrom('archive_url')] public ?string $archiveUrl, #[\EventSauce\ObjectHydrator\MapFrom('assignees_url')] public ?string $assigneesUrl, #[\EventSauce\ObjectHydrator\MapFrom('blobs_url')] public ?string $blobsUrl, #[\EventSauce\ObjectHydrator\MapFrom('branches_url')] public ?string $branchesUrl, #[\EventSauce\ObjectHydrator\MapFrom('collaborators_url')] public ?string $collaboratorsUrl, #[\EventSauce\ObjectHydrator\MapFrom('comments_url')] public ?string $commentsUrl, #[\EventSauce\ObjectHydrator\MapFrom('commits_url')] public ?string $commitsUrl, #[\EventSauce\ObjectHydrator\MapFrom('compare_url')] public ?string $compareUrl, #[\EventSauce\ObjectHydrator\MapFrom('contents_url')] public ?string $contentsUrl, #[\EventSauce\ObjectHydrator\MapFrom('contributors_url')] public ?string $contributorsUrl, #[\EventSauce\ObjectHydrator\MapFrom('deployments_url')] public ?string $deploymentsUrl, #[\EventSauce\ObjectHydrator\MapFrom('downloads_url')] public ?string $downloadsUrl, #[\EventSauce\ObjectHydrator\MapFrom('events_url')] public ?string $eventsUrl, #[\EventSauce\ObjectHydrator\MapFrom('forks_url')] public ?string $forksUrl, #[\EventSauce\ObjectHydrator\MapFrom('git_commits_url')] public ?string $gitCommitsUrl, #[\EventSauce\ObjectHydrator\MapFrom('git_refs_url')] public ?string $gitRefsUrl, #[\EventSauce\ObjectHydrator\MapFrom('git_tags_url')] public ?string $gitTagsUrl, #[\EventSauce\ObjectHydrator\MapFrom('git_url')] public ?string $gitUrl, #[\EventSauce\ObjectHydrator\MapFrom('issue_comment_url')] public ?string $issueCommentUrl, #[\EventSauce\ObjectHydrator\MapFrom('issue_events_url')] public ?string $issueEventsUrl, #[\EventSauce\ObjectHydrator\MapFrom('issues_url')] public ?string $issuesUrl, #[\EventSauce\ObjectHydrator\MapFrom('keys_url')] public ?string $keysUrl, #[\EventSauce\ObjectHydrator\MapFrom('labels_url')] public ?string $labelsUrl, #[\EventSauce\ObjectHydrator\MapFrom('languages_url')] public ?string $languagesUrl, #[\EventSauce\ObjectHydrator\MapFrom('merges_url')] public ?string $mergesUrl, #[\EventSauce\ObjectHydrator\MapFrom('milestones_url')] public ?string $milestonesUrl, #[\EventSauce\ObjectHydrator\MapFrom('notifications_url')] public ?string $notificationsUrl, #[\EventSauce\ObjectHydrator\MapFrom('pulls_url')] public ?string $pullsUrl, #[\EventSauce\ObjectHydrator\MapFrom('releases_url')] public ?string $releasesUrl, #[\EventSauce\ObjectHydrator\MapFrom('ssh_url')] public ?string $sshUrl, #[\EventSauce\ObjectHydrator\MapFrom('stargazers_url')] public ?string $stargazersUrl, #[\EventSauce\ObjectHydrator\MapFrom('statuses_url')] public ?string $statusesUrl, #[\EventSauce\ObjectHydrator\MapFrom('subscribers_url')] public ?string $subscribersUrl, #[\EventSauce\ObjectHydrator\MapFrom('subscription_url')] public ?string $subscriptionUrl, #[\EventSauce\ObjectHydrator\MapFrom('tags_url')] public ?string $tagsUrl, #[\EventSauce\ObjectHydrator\MapFrom('teams_url')] public ?string $teamsUrl, #[\EventSauce\ObjectHydrator\MapFrom('trees_url')] public ?string $treesUrl, #[\EventSauce\ObjectHydrator\MapFrom('clone_url')] public ?string $cloneUrl, #[\EventSauce\ObjectHydrator\MapFrom('mirror_url')] public ?string $mirrorUrl, #[\EventSauce\ObjectHydrator\MapFrom('hooks_url')] public ?string $hooksUrl, #[\EventSauce\ObjectHydrator\MapFrom('svn_url')] public ?string $svnUrl, public ?string $homepage, public ?string $language, #[\EventSauce\ObjectHydrator\MapFrom('forks_count')] public ?int $forksCount, #[\EventSauce\ObjectHydrator\MapFrom('stargazers_count')] public ?int $stargazersCount, #[\EventSauce\ObjectHydrator\MapFrom('watchers_count')] public ?int $watchersCount, public ?int $size, #[\EventSauce\ObjectHydrator\MapFrom('default_branch')] public ?string $defaultBranch, #[\EventSauce\ObjectHydrator\MapFrom('open_issues_count')] public ?int $openIssuesCount, #[\EventSauce\ObjectHydrator\MapFrom('is_template')] public ?bool $isTemplate, public ?array $topics, #[\EventSauce\ObjectHydrator\MapFrom('has_issues')] public ?bool $hasIssues, #[\EventSauce\ObjectHydrator\MapFrom('has_projects')] public ?bool $hasProjects, #[\EventSauce\ObjectHydrator\MapFrom('has_wiki')] public ?bool $hasWiki, #[\EventSauce\ObjectHydrator\MapFrom('has_pages')] public ?bool $hasPages, #[\EventSauce\ObjectHydrator\MapFrom('has_downloads')] public ?bool $hasDownloads, public ?bool $archived, public ?bool $disabled, public ?string $visibility, #[\EventSauce\ObjectHydrator\MapFrom('pushed_at')] public ?string $pushedAt, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public ?string $createdAt, #[\EventSauce\ObjectHydrator\MapFrom('updated_at')] public ?string $updatedAt, public ?Schema\Repository\TemplateRepository\Permissions $permissions, #[\EventSauce\ObjectHydrator\MapFrom('allow_rebase_merge')] public ?bool $allowRebaseMerge, #[\EventSauce\ObjectHydrator\MapFrom('temp_clone_token')] public ?string $tempCloneToken, #[\EventSauce\ObjectHydrator\MapFrom('allow_squash_merge')] public ?bool $allowSquashMerge, #[\EventSauce\ObjectHydrator\MapFrom('allow_auto_merge')] public ?bool $allowAutoMerge, #[\EventSauce\ObjectHydrator\MapFrom('delete_branch_on_merge')] public ?bool $deleteBranchOnMerge, #[\EventSauce\ObjectHydrator\MapFrom('allow_update_branch')] public ?bool $allowUpdateBranch, #[\EventSauce\ObjectHydrator\MapFrom('allow_merge_commit')] public ?bool $allowMergeCommit, #[\EventSauce\ObjectHydrator\MapFrom('subscribers_count')] public ?int $subscribersCount, #[\EventSauce\ObjectHydrator\MapFrom('network_count')] public ?int $networkCount)
    {
    }
}
