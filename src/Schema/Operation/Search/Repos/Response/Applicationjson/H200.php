<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Operation\Search\Repos\Response\Applicationjson;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class H200
{
    public const SCHEMA_JSON = '{"required":["total_count","incomplete_results","items"],"type":"object","properties":{"total_count":{"type":"integer"},"incomplete_results":{"type":"boolean"},"items":{"type":"array","items":{"title":"Repo Search Result Item","required":["archive_url","assignees_url","blobs_url","branches_url","collaborators_url","comments_url","commits_url","compare_url","contents_url","contributors_url","deployments_url","description","downloads_url","events_url","fork","forks_url","full_name","git_commits_url","git_refs_url","git_tags_url","hooks_url","html_url","id","node_id","issue_comment_url","issue_events_url","issues_url","keys_url","labels_url","languages_url","merges_url","milestones_url","name","notifications_url","owner","private","pulls_url","releases_url","stargazers_url","statuses_url","subscribers_url","subscription_url","tags_url","teams_url","trees_url","url","clone_url","default_branch","forks","forks_count","git_url","has_downloads","has_issues","has_projects","has_wiki","has_pages","homepage","language","archived","disabled","mirror_url","open_issues","open_issues_count","license","pushed_at","size","ssh_url","stargazers_count","svn_url","watchers","watchers_count","created_at","updated_at","score"],"type":"object","properties":{"id":{"type":"integer"},"node_id":{"type":"string"},"name":{"type":"string"},"full_name":{"type":"string"},"owner":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"private":{"type":"boolean"},"html_url":{"type":"string","format":"uri"},"description":{"type":["string","null"]},"fork":{"type":"boolean"},"url":{"type":"string","format":"uri"},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"},"pushed_at":{"type":"string","format":"date-time"},"homepage":{"type":["string","null"],"format":"uri"},"size":{"type":"integer"},"stargazers_count":{"type":"integer"},"watchers_count":{"type":"integer"},"language":{"type":["string","null"]},"forks_count":{"type":"integer"},"open_issues_count":{"type":"integer"},"master_branch":{"type":"string"},"default_branch":{"type":"string"},"score":{"type":"number"},"forks_url":{"type":"string","format":"uri"},"keys_url":{"type":"string"},"collaborators_url":{"type":"string"},"teams_url":{"type":"string","format":"uri"},"hooks_url":{"type":"string","format":"uri"},"issue_events_url":{"type":"string"},"events_url":{"type":"string","format":"uri"},"assignees_url":{"type":"string"},"branches_url":{"type":"string"},"tags_url":{"type":"string","format":"uri"},"blobs_url":{"type":"string"},"git_tags_url":{"type":"string"},"git_refs_url":{"type":"string"},"trees_url":{"type":"string"},"statuses_url":{"type":"string"},"languages_url":{"type":"string","format":"uri"},"stargazers_url":{"type":"string","format":"uri"},"contributors_url":{"type":"string","format":"uri"},"subscribers_url":{"type":"string","format":"uri"},"subscription_url":{"type":"string","format":"uri"},"commits_url":{"type":"string"},"git_commits_url":{"type":"string"},"comments_url":{"type":"string"},"issue_comment_url":{"type":"string"},"contents_url":{"type":"string"},"compare_url":{"type":"string"},"merges_url":{"type":"string","format":"uri"},"archive_url":{"type":"string"},"downloads_url":{"type":"string","format":"uri"},"issues_url":{"type":"string"},"pulls_url":{"type":"string"},"milestones_url":{"type":"string"},"notifications_url":{"type":"string"},"labels_url":{"type":"string"},"releases_url":{"type":"string"},"deployments_url":{"type":"string","format":"uri"},"git_url":{"type":"string"},"ssh_url":{"type":"string"},"clone_url":{"type":"string"},"svn_url":{"type":"string","format":"uri"},"forks":{"type":"integer"},"open_issues":{"type":"integer"},"watchers":{"type":"integer"},"topics":{"type":"array","items":{"type":"string"}},"mirror_url":{"type":["string","null"],"format":"uri"},"has_issues":{"type":"boolean"},"has_projects":{"type":"boolean"},"has_pages":{"type":"boolean"},"has_wiki":{"type":"boolean"},"has_downloads":{"type":"boolean"},"has_discussions":{"type":"boolean"},"archived":{"type":"boolean"},"disabled":{"type":"boolean","description":"Returns whether or not this repository disabled."},"visibility":{"type":"string","description":"The repository visibility: public, private, or internal."},"license":{"anyOf":[{"type":"null"},{"title":"License Simple","required":["key","name","url","spdx_id","node_id"],"type":"object","properties":{"key":{"type":"string","examples":["mit"]},"name":{"type":"string","examples":["MIT License"]},"url":{"type":["string","null"],"format":"uri","examples":["https:\\/\\/api.github.com\\/licenses\\/mit"]},"spdx_id":{"type":["string","null"],"examples":["MIT"]},"node_id":{"type":"string","examples":["MDc6TGljZW5zZW1pdA=="]},"html_url":{"type":"string","format":"uri"}},"description":"License Simple"}]},"permissions":{"required":["admin","pull","push"],"type":"object","properties":{"admin":{"type":"boolean"},"maintain":{"type":"boolean"},"push":{"type":"boolean"},"triage":{"type":"boolean"},"pull":{"type":"boolean"}}},"text_matches":{"title":"Search Result Text Matches","type":"array","items":{"type":"object","properties":{"object_url":{"type":"string"},"object_type":{"type":["string","null"]},"property":{"type":"string"},"fragment":{"type":"string"},"matches":{"type":"array","items":{"type":"object","properties":{"text":{"type":"string"},"indices":{"type":"array","items":{"type":"integer"}}}}}}}},"temp_clone_token":{"type":"string"},"allow_merge_commit":{"type":"boolean"},"allow_squash_merge":{"type":"boolean"},"allow_rebase_merge":{"type":"boolean"},"allow_auto_merge":{"type":"boolean"},"delete_branch_on_merge":{"type":"boolean"},"allow_forking":{"type":"boolean"},"is_template":{"type":"boolean"},"web_commit_signoff_required":{"type":"boolean","examples":[false]}},"description":"Repo Search Result Item"}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_count":13,"incomplete_results":false,"items":[{"id":13,"node_id":"generated_node_id","name":"generated_name","full_name":"generated_full_name","owner":null,"private":false,"html_url":"generated_html_url","description":"generated_description","fork":false,"url":"generated_url","created_at":"generated_created_at","updated_at":"generated_updated_at","pushed_at":"generated_pushed_at","homepage":"generated_homepage","size":13,"stargazers_count":13,"watchers_count":13,"language":"generated_language","forks_count":13,"open_issues_count":13,"master_branch":"generated_master_branch","default_branch":"generated_default_branch","score":13,"forks_url":"generated_forks_url","keys_url":"generated_keys_url","collaborators_url":"generated_collaborators_url","teams_url":"generated_teams_url","hooks_url":"generated_hooks_url","issue_events_url":"generated_issue_events_url","events_url":"generated_events_url","assignees_url":"generated_assignees_url","branches_url":"generated_branches_url","tags_url":"generated_tags_url","blobs_url":"generated_blobs_url","git_tags_url":"generated_git_tags_url","git_refs_url":"generated_git_refs_url","trees_url":"generated_trees_url","statuses_url":"generated_statuses_url","languages_url":"generated_languages_url","stargazers_url":"generated_stargazers_url","contributors_url":"generated_contributors_url","subscribers_url":"generated_subscribers_url","subscription_url":"generated_subscription_url","commits_url":"generated_commits_url","git_commits_url":"generated_git_commits_url","comments_url":"generated_comments_url","issue_comment_url":"generated_issue_comment_url","contents_url":"generated_contents_url","compare_url":"generated_compare_url","merges_url":"generated_merges_url","archive_url":"generated_archive_url","downloads_url":"generated_downloads_url","issues_url":"generated_issues_url","pulls_url":"generated_pulls_url","milestones_url":"generated_milestones_url","notifications_url":"generated_notifications_url","labels_url":"generated_labels_url","releases_url":"generated_releases_url","deployments_url":"generated_deployments_url","git_url":"generated_git_url","ssh_url":"generated_ssh_url","clone_url":"generated_clone_url","svn_url":"generated_svn_url","forks":13,"open_issues":13,"watchers":13,"topics":["generated_topics"],"mirror_url":"generated_mirror_url","has_issues":false,"has_projects":false,"has_pages":false,"has_wiki":false,"has_downloads":false,"has_discussions":false,"archived":false,"disabled":false,"visibility":"generated_visibility","license":null,"permissions":{"admin":false,"maintain":false,"push":false,"triage":false,"pull":false},"text_matches":[{"object_url":"generated_object_url","object_type":"generated_object_type","property":"generated_property","fragment":"generated_fragment","matches":[{"text":"generated_text","indices":[13]}]}],"temp_clone_token":"generated_temp_clone_token","allow_merge_commit":false,"allow_squash_merge":false,"allow_rebase_merge":false,"allow_auto_merge":false,"delete_branch_on_merge":false,"allow_forking":false,"is_template":false,"web_commit_signoff_required":false}]}';
    /**
     * @param array<\ApiClients\Client\GitHubAE\Schema\RepoSearchResultItem> $items
     */
    public function __construct(public int $total_count, public bool $incomplete_results, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\RepoSearchResultItem::class)] public array $items)
    {
    }
}
