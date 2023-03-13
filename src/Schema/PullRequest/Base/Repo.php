<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\PullRequest\Base;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Repo
{
    public const SCHEMA_JSON = '{"required":["archive_url","assignees_url","blobs_url","branches_url","collaborators_url","comments_url","commits_url","compare_url","contents_url","contributors_url","deployments_url","description","downloads_url","events_url","fork","forks_url","full_name","git_commits_url","git_refs_url","git_tags_url","hooks_url","html_url","id","node_id","issue_comment_url","issue_events_url","issues_url","keys_url","labels_url","languages_url","merges_url","milestones_url","name","notifications_url","owner","private","pulls_url","releases_url","stargazers_url","statuses_url","subscribers_url","subscription_url","tags_url","teams_url","trees_url","url","clone_url","default_branch","forks","forks_count","git_url","has_downloads","has_issues","has_projects","has_wiki","has_pages","has_discussions","homepage","language","archived","disabled","mirror_url","open_issues","open_issues_count","license","pushed_at","size","ssh_url","stargazers_count","svn_url","watchers","watchers_count","created_at","updated_at"],"type":"object","properties":{"archive_url":{"type":"string"},"assignees_url":{"type":"string"},"blobs_url":{"type":"string"},"branches_url":{"type":"string"},"collaborators_url":{"type":"string"},"comments_url":{"type":"string"},"commits_url":{"type":"string"},"compare_url":{"type":"string"},"contents_url":{"type":"string"},"contributors_url":{"type":"string","format":"uri"},"deployments_url":{"type":"string","format":"uri"},"description":{"type":["string","null"]},"downloads_url":{"type":"string","format":"uri"},"events_url":{"type":"string","format":"uri"},"fork":{"type":"boolean"},"forks_url":{"type":"string","format":"uri"},"full_name":{"type":"string"},"git_commits_url":{"type":"string"},"git_refs_url":{"type":"string"},"git_tags_url":{"type":"string"},"hooks_url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"is_template":{"type":"boolean"},"node_id":{"type":"string"},"issue_comment_url":{"type":"string"},"issue_events_url":{"type":"string"},"issues_url":{"type":"string"},"keys_url":{"type":"string"},"labels_url":{"type":"string"},"languages_url":{"type":"string","format":"uri"},"merges_url":{"type":"string","format":"uri"},"milestones_url":{"type":"string"},"name":{"type":"string"},"notifications_url":{"type":"string"},"owner":{"required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"avatar_url":{"type":"string","format":"uri"},"events_url":{"type":"string"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":["string","null"]},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"node_id":{"type":"string"},"login":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"type":"string"},"url":{"type":"string","format":"uri"}}},"private":{"type":"boolean"},"pulls_url":{"type":"string"},"releases_url":{"type":"string"},"stargazers_url":{"type":"string","format":"uri"},"statuses_url":{"type":"string"},"subscribers_url":{"type":"string","format":"uri"},"subscription_url":{"type":"string","format":"uri"},"tags_url":{"type":"string","format":"uri"},"teams_url":{"type":"string","format":"uri"},"trees_url":{"type":"string"},"url":{"type":"string","format":"uri"},"clone_url":{"type":"string"},"default_branch":{"type":"string"},"forks":{"type":"integer"},"forks_count":{"type":"integer"},"git_url":{"type":"string"},"has_downloads":{"type":"boolean"},"has_issues":{"type":"boolean"},"has_projects":{"type":"boolean"},"has_wiki":{"type":"boolean"},"has_pages":{"type":"boolean"},"has_discussions":{"type":"boolean"},"homepage":{"type":["string","null"],"format":"uri"},"language":{"type":["string","null"]},"master_branch":{"type":"string"},"archived":{"type":"boolean"},"disabled":{"type":"boolean"},"visibility":{"type":"string","description":"The repository visibility: public, private, or internal."},"mirror_url":{"type":["string","null"],"format":"uri"},"open_issues":{"type":"integer"},"open_issues_count":{"type":"integer"},"permissions":{"required":["admin","pull","push"],"type":"object","properties":{"admin":{"type":"boolean"},"maintain":{"type":"boolean"},"push":{"type":"boolean"},"triage":{"type":"boolean"},"pull":{"type":"boolean"}}},"temp_clone_token":{"type":"string"},"allow_merge_commit":{"type":"boolean"},"allow_squash_merge":{"type":"boolean"},"allow_rebase_merge":{"type":"boolean"},"license":{"anyOf":[{"type":"null"},{"title":"License Simple","required":["key","name","url","spdx_id","node_id"],"type":"object","properties":{"key":{"type":"string","examples":["mit"]},"name":{"type":"string","examples":["MIT License"]},"url":{"type":["string","null"],"format":"uri","examples":["https:\\/\\/api.github.com\\/licenses\\/mit"]},"spdx_id":{"type":["string","null"],"examples":["MIT"]},"node_id":{"type":"string","examples":["MDc6TGljZW5zZW1pdA=="]},"html_url":{"type":"string","format":"uri"}},"description":"License Simple"}]},"pushed_at":{"type":"string","format":"date-time"},"size":{"type":"integer"},"ssh_url":{"type":"string"},"stargazers_count":{"type":"integer"},"svn_url":{"type":"string","format":"uri"},"topics":{"type":"array","items":{"type":"string"}},"watchers":{"type":"integer"},"watchers_count":{"type":"integer"},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"},"allow_forking":{"type":"boolean"},"web_commit_signoff_required":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"archive_url":"generated_archive_url","assignees_url":"generated_assignees_url","blobs_url":"generated_blobs_url","branches_url":"generated_branches_url","collaborators_url":"generated_collaborators_url","comments_url":"generated_comments_url","commits_url":"generated_commits_url","compare_url":"generated_compare_url","contents_url":"generated_contents_url","contributors_url":"generated_contributors_url","deployments_url":"generated_deployments_url","description":"generated_description","downloads_url":"generated_downloads_url","events_url":"generated_events_url","fork":false,"forks_url":"generated_forks_url","full_name":"generated_full_name","git_commits_url":"generated_git_commits_url","git_refs_url":"generated_git_refs_url","git_tags_url":"generated_git_tags_url","hooks_url":"generated_hooks_url","html_url":"generated_html_url","id":13,"is_template":false,"node_id":"generated_node_id","issue_comment_url":"generated_issue_comment_url","issue_events_url":"generated_issue_events_url","issues_url":"generated_issues_url","keys_url":"generated_keys_url","labels_url":"generated_labels_url","languages_url":"generated_languages_url","merges_url":"generated_merges_url","milestones_url":"generated_milestones_url","name":"generated_name","notifications_url":"generated_notifications_url","owner":{"avatar_url":"generated_avatar_url","events_url":"generated_events_url","followers_url":"generated_followers_url","following_url":"generated_following_url","gists_url":"generated_gists_url","gravatar_id":"generated_gravatar_id","html_url":"generated_html_url","id":13,"node_id":"generated_node_id","login":"generated_login","organizations_url":"generated_organizations_url","received_events_url":"generated_received_events_url","repos_url":"generated_repos_url","site_admin":false,"starred_url":"generated_starred_url","subscriptions_url":"generated_subscriptions_url","type":"generated_type","url":"generated_url"},"private":false,"pulls_url":"generated_pulls_url","releases_url":"generated_releases_url","stargazers_url":"generated_stargazers_url","statuses_url":"generated_statuses_url","subscribers_url":"generated_subscribers_url","subscription_url":"generated_subscription_url","tags_url":"generated_tags_url","teams_url":"generated_teams_url","trees_url":"generated_trees_url","url":"generated_url","clone_url":"generated_clone_url","default_branch":"generated_default_branch","forks":13,"forks_count":13,"git_url":"generated_git_url","has_downloads":false,"has_issues":false,"has_projects":false,"has_wiki":false,"has_pages":false,"has_discussions":false,"homepage":"generated_homepage","language":"generated_language","master_branch":"generated_master_branch","archived":false,"disabled":false,"visibility":"generated_visibility","mirror_url":"generated_mirror_url","open_issues":13,"open_issues_count":13,"permissions":{"admin":false,"maintain":false,"push":false,"triage":false,"pull":false},"temp_clone_token":"generated_temp_clone_token","allow_merge_commit":false,"allow_squash_merge":false,"allow_rebase_merge":false,"license":null,"pushed_at":"generated_pushed_at","size":13,"ssh_url":"generated_ssh_url","stargazers_count":13,"svn_url":"generated_svn_url","topics":["generated_topics"],"watchers":13,"watchers_count":13,"created_at":"generated_created_at","updated_at":"generated_updated_at","allow_forking":false,"web_commit_signoff_required":false}';
    /**
     * visibility: The repository visibility: public, private, or internal.
     * @param ?array<string> $topics
     */
    public function __construct(public string $archive_url, public string $assignees_url, public string $blobs_url, public string $branches_url, public string $collaborators_url, public string $comments_url, public string $commits_url, public string $compare_url, public string $contents_url, public string $contributors_url, public string $deployments_url, public ?string $description, public string $downloads_url, public string $events_url, public bool $fork, public string $forks_url, public string $full_name, public string $git_commits_url, public string $git_refs_url, public string $git_tags_url, public string $hooks_url, public string $html_url, public int $id, public ?bool $is_template, public string $node_id, public string $issue_comment_url, public string $issue_events_url, public string $issues_url, public string $keys_url, public string $labels_url, public string $languages_url, public string $merges_url, public string $milestones_url, public string $name, public string $notifications_url, public Schema\PullRequest\Head\Repo\Owner $owner, public bool $private, public string $pulls_url, public string $releases_url, public string $stargazers_url, public string $statuses_url, public string $subscribers_url, public string $subscription_url, public string $tags_url, public string $teams_url, public string $trees_url, public string $url, public string $clone_url, public string $default_branch, public int $forks, public int $forks_count, public string $git_url, public bool $has_downloads, public bool $has_issues, public bool $has_projects, public bool $has_wiki, public bool $has_pages, public bool $has_discussions, public ?string $homepage, public ?string $language, public ?string $master_branch, public bool $archived, public bool $disabled, public ?string $visibility, public ?string $mirror_url, public int $open_issues, public int $open_issues_count, public ?Schema\FullRepository\Permissions $permissions, public ?string $temp_clone_token, public ?bool $allow_merge_commit, public ?bool $allow_squash_merge, public ?bool $allow_rebase_merge, public mixed $license, public string $pushed_at, public int $size, public string $ssh_url, public int $stargazers_count, public string $svn_url, public ?array $topics, public int $watchers, public int $watchers_count, public string $created_at, public string $updated_at, public ?bool $allow_forking, public ?bool $web_commit_signoff_required)
    {
    }
}
