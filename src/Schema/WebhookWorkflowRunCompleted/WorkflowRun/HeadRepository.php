<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookWorkflowRunCompleted\WorkflowRun;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class HeadRepository
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"archive_url":{"type":"string"},"assignees_url":{"type":"string"},"blobs_url":{"type":"string"},"branches_url":{"type":"string"},"collaborators_url":{"type":"string"},"comments_url":{"type":"string"},"commits_url":{"type":"string"},"compare_url":{"type":"string"},"contents_url":{"type":"string"},"contributors_url":{"type":"string"},"deployments_url":{"type":"string"},"description":{"type":["string","null"]},"downloads_url":{"type":"string"},"events_url":{"type":"string"},"fork":{"type":"boolean"},"forks_url":{"type":"string"},"full_name":{"type":"string"},"git_commits_url":{"type":"string"},"git_refs_url":{"type":"string"},"git_tags_url":{"type":"string"},"hooks_url":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"issue_comment_url":{"type":"string"},"issue_events_url":{"type":"string"},"issues_url":{"type":"string"},"keys_url":{"type":"string"},"labels_url":{"type":"string"},"languages_url":{"type":"string"},"merges_url":{"type":"string"},"milestones_url":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"notifications_url":{"type":"string"},"owner":{"type":"object","properties":{"avatar_url":{"type":"string"},"events_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"}}},"private":{"type":"boolean"},"pulls_url":{"type":"string"},"releases_url":{"type":"string"},"stargazers_url":{"type":"string"},"statuses_url":{"type":"string"},"subscribers_url":{"type":"string"},"subscription_url":{"type":"string"},"tags_url":{"type":"string"},"teams_url":{"type":"string"},"trees_url":{"type":"string"},"url":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"archive_url":"generated_archive_url","assignees_url":"generated_assignees_url","blobs_url":"generated_blobs_url","branches_url":"generated_branches_url","collaborators_url":"generated_collaborators_url","comments_url":"generated_comments_url","commits_url":"generated_commits_url","compare_url":"generated_compare_url","contents_url":"generated_contents_url","contributors_url":"generated_contributors_url","deployments_url":"generated_deployments_url","description":"generated_description","downloads_url":"generated_downloads_url","events_url":"generated_events_url","fork":false,"forks_url":"generated_forks_url","full_name":"generated_full_name","git_commits_url":"generated_git_commits_url","git_refs_url":"generated_git_refs_url","git_tags_url":"generated_git_tags_url","hooks_url":"generated_hooks_url","html_url":"generated_html_url","id":13,"issue_comment_url":"generated_issue_comment_url","issue_events_url":"generated_issue_events_url","issues_url":"generated_issues_url","keys_url":"generated_keys_url","labels_url":"generated_labels_url","languages_url":"generated_languages_url","merges_url":"generated_merges_url","milestones_url":"generated_milestones_url","name":"generated_name","node_id":"generated_node_id","notifications_url":"generated_notifications_url","owner":{"avatar_url":"generated_avatar_url","events_url":"generated_events_url","followers_url":"generated_followers_url","following_url":"generated_following_url","gists_url":"generated_gists_url","gravatar_id":"generated_gravatar_id","html_url":"generated_html_url","id":13,"login":"generated_login","node_id":"generated_node_id","organizations_url":"generated_organizations_url","received_events_url":"generated_received_events_url","repos_url":"generated_repos_url","site_admin":false,"starred_url":"generated_starred_url","subscriptions_url":"generated_subscriptions_url","type":"generated_type","url":"generated_url"},"private":false,"pulls_url":"generated_pulls_url","releases_url":"generated_releases_url","stargazers_url":"generated_stargazers_url","statuses_url":"generated_statuses_url","subscribers_url":"generated_subscribers_url","subscription_url":"generated_subscription_url","tags_url":"generated_tags_url","teams_url":"generated_teams_url","trees_url":"generated_trees_url","url":"generated_url"}';
    public function __construct(public ?string $archive_url, public ?string $assignees_url, public ?string $blobs_url, public ?string $branches_url, public ?string $collaborators_url, public ?string $comments_url, public ?string $commits_url, public ?string $compare_url, public ?string $contents_url, public ?string $contributors_url, public ?string $deployments_url, public ?string $description, public ?string $downloads_url, public ?string $events_url, public ?bool $fork, public ?string $forks_url, public ?string $full_name, public ?string $git_commits_url, public ?string $git_refs_url, public ?string $git_tags_url, public ?string $hooks_url, public ?string $html_url, public ?int $id, public ?string $issue_comment_url, public ?string $issue_events_url, public ?string $issues_url, public ?string $keys_url, public ?string $labels_url, public ?string $languages_url, public ?string $merges_url, public ?string $milestones_url, public ?string $name, public ?string $node_id, public ?string $notifications_url, public ?Schema\WebhookDeploymentCreated\WorkflowRun\HeadRepository\Owner $owner, public ?bool $private, public ?string $pulls_url, public ?string $releases_url, public ?string $stargazers_url, public ?string $statuses_url, public ?string $subscribers_url, public ?string $subscription_url, public ?string $tags_url, public ?string $teams_url, public ?string $trees_url, public ?string $url)
    {
    }
}
