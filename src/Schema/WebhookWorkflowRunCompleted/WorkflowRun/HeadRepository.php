<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookWorkflowRunCompleted\WorkflowRun;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class HeadRepository
{
    public const SCHEMA_JSON = '{"title":"Repository Lite","required":["archive_url","assignees_url","blobs_url","branches_url","collaborators_url","comments_url","commits_url","compare_url","contents_url","contributors_url","deployments_url","description","downloads_url","events_url","fork","forks_url","full_name","git_commits_url","git_refs_url","git_tags_url","hooks_url","html_url","id","issue_comment_url","issue_events_url","issues_url","keys_url","labels_url","languages_url","merges_url","milestones_url","name","node_id","notifications_url","owner","private","pulls_url","releases_url","stargazers_url","statuses_url","subscribers_url","subscription_url","tags_url","teams_url","trees_url","url"],"type":"object","properties":{"archive_url":{"type":"string","format":"uri-template"},"assignees_url":{"type":"string","format":"uri-template"},"blobs_url":{"type":"string","format":"uri-template"},"branches_url":{"type":"string","format":"uri-template"},"collaborators_url":{"type":"string","format":"uri-template"},"comments_url":{"type":"string","format":"uri-template"},"commits_url":{"type":"string","format":"uri-template"},"compare_url":{"type":"string","format":"uri-template"},"contents_url":{"type":"string","format":"uri-template"},"contributors_url":{"type":"string","format":"uri"},"deployments_url":{"type":"string","format":"uri"},"description":{"type":["string","null"]},"downloads_url":{"type":"string","format":"uri"},"events_url":{"type":"string","format":"uri"},"fork":{"type":"boolean"},"forks_url":{"type":"string","format":"uri"},"full_name":{"type":"string"},"git_commits_url":{"type":"string","format":"uri-template"},"git_refs_url":{"type":"string","format":"uri-template"},"git_tags_url":{"type":"string","format":"uri-template"},"hooks_url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer","description":"Unique identifier of the repository"},"issue_comment_url":{"type":"string","format":"uri-template"},"issue_events_url":{"type":"string","format":"uri-template"},"issues_url":{"type":"string","format":"uri-template"},"keys_url":{"type":"string","format":"uri-template"},"labels_url":{"type":"string","format":"uri-template"},"languages_url":{"type":"string","format":"uri"},"merges_url":{"type":"string","format":"uri"},"milestones_url":{"type":"string","format":"uri-template"},"name":{"type":"string","description":"The name of the repository."},"node_id":{"type":"string"},"notifications_url":{"type":"string","format":"uri-template"},"owner":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"private":{"type":"boolean","description":"Whether the repository is private or public."},"pulls_url":{"type":"string","format":"uri-template"},"releases_url":{"type":"string","format":"uri-template"},"stargazers_url":{"type":"string","format":"uri"},"statuses_url":{"type":"string","format":"uri-template"},"subscribers_url":{"type":"string","format":"uri"},"subscription_url":{"type":"string","format":"uri"},"tags_url":{"type":"string","format":"uri"},"teams_url":{"type":"string","format":"uri"},"trees_url":{"type":"string","format":"uri-template"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'Repository Lite';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"archive_url":"generated_archive_url","assignees_url":"generated_assignees_url","blobs_url":"generated_blobs_url","branches_url":"generated_branches_url","collaborators_url":"generated_collaborators_url","comments_url":"generated_comments_url","commits_url":"generated_commits_url","compare_url":"generated_compare_url","contents_url":"generated_contents_url","contributors_url":"generated_contributors_url","deployments_url":"generated_deployments_url","description":"generated_description","downloads_url":"generated_downloads_url","events_url":"generated_events_url","fork":false,"forks_url":"generated_forks_url","full_name":"generated_full_name","git_commits_url":"generated_git_commits_url","git_refs_url":"generated_git_refs_url","git_tags_url":"generated_git_tags_url","hooks_url":"generated_hooks_url","html_url":"generated_html_url","id":13,"issue_comment_url":"generated_issue_comment_url","issue_events_url":"generated_issue_events_url","issues_url":"generated_issues_url","keys_url":"generated_keys_url","labels_url":"generated_labels_url","languages_url":"generated_languages_url","merges_url":"generated_merges_url","milestones_url":"generated_milestones_url","name":"generated_name","node_id":"generated_node_id","notifications_url":"generated_notifications_url","owner":{"avatar_url":"generated_avatar_url","deleted":false,"email":"generated_email","events_url":"generated_events_url","followers_url":"generated_followers_url","following_url":"generated_following_url","gists_url":"generated_gists_url","gravatar_id":"generated_gravatar_id","html_url":"generated_html_url","id":13,"login":"generated_login","name":"generated_name","node_id":"generated_node_id","organizations_url":"generated_organizations_url","received_events_url":"generated_received_events_url","repos_url":"generated_repos_url","site_admin":false,"starred_url":"generated_starred_url","subscriptions_url":"generated_subscriptions_url","type":"generated_type","url":"generated_url"},"private":false,"pulls_url":"generated_pulls_url","releases_url":"generated_releases_url","stargazers_url":"generated_stargazers_url","statuses_url":"generated_statuses_url","subscribers_url":"generated_subscribers_url","subscription_url":"generated_subscription_url","tags_url":"generated_tags_url","teams_url":"generated_teams_url","trees_url":"generated_trees_url","url":"generated_url"}';
    /**
     * id: Unique identifier of the repository
     * name: The name of the repository.
     * private: Whether the repository is private or public.
     */
    public function __construct(public ?string $archive_url, public ?string $assignees_url, public ?string $blobs_url, public ?string $branches_url, public ?string $collaborators_url, public ?string $comments_url, public ?string $commits_url, public ?string $compare_url, public ?string $contents_url, public ?string $contributors_url, public ?string $deployments_url, public ?string $description, public ?string $downloads_url, public ?string $events_url, public ?bool $fork, public ?string $forks_url, public ?string $full_name, public ?string $git_commits_url, public ?string $git_refs_url, public ?string $git_tags_url, public ?string $hooks_url, public ?string $html_url, public ?int $id, public ?string $issue_comment_url, public ?string $issue_events_url, public ?string $issues_url, public ?string $keys_url, public ?string $labels_url, public ?string $languages_url, public ?string $merges_url, public ?string $milestones_url, public ?string $name, public ?string $node_id, public ?string $notifications_url, public ?Schema\Discussion\AnswerChosenBy $owner, public ?bool $private, public ?string $pulls_url, public ?string $releases_url, public ?string $stargazers_url, public ?string $statuses_url, public ?string $subscribers_url, public ?string $subscription_url, public ?string $tags_url, public ?string $teams_url, public ?string $trees_url, public ?string $url)
    {
    }
}
