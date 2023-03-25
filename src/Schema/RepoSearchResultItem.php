<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class RepoSearchResultItem
{
    public const SCHEMA_JSON = '{"title":"Repo Search Result Item","required":["archive_url","assignees_url","blobs_url","branches_url","collaborators_url","comments_url","commits_url","compare_url","contents_url","contributors_url","deployments_url","description","downloads_url","events_url","fork","forks_url","full_name","git_commits_url","git_refs_url","git_tags_url","hooks_url","html_url","id","node_id","issue_comment_url","issue_events_url","issues_url","keys_url","labels_url","languages_url","merges_url","milestones_url","name","notifications_url","owner","private","pulls_url","releases_url","stargazers_url","statuses_url","subscribers_url","subscription_url","tags_url","teams_url","trees_url","url","clone_url","default_branch","forks","forks_count","git_url","has_downloads","has_issues","has_projects","has_wiki","has_pages","homepage","language","archived","disabled","mirror_url","open_issues","open_issues_count","license","pushed_at","size","ssh_url","stargazers_count","svn_url","watchers","watchers_count","created_at","updated_at","score"],"type":"object","properties":{"id":{"type":"integer"},"node_id":{"type":"string"},"name":{"type":"string"},"full_name":{"type":"string"},"owner":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"private":{"type":"boolean"},"html_url":{"type":"string","format":"uri"},"description":{"type":["string","null"]},"fork":{"type":"boolean"},"url":{"type":"string","format":"uri"},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"},"pushed_at":{"type":"string","format":"date-time"},"homepage":{"type":["string","null"],"format":"uri"},"size":{"type":"integer"},"stargazers_count":{"type":"integer"},"watchers_count":{"type":"integer"},"language":{"type":["string","null"]},"forks_count":{"type":"integer"},"open_issues_count":{"type":"integer"},"master_branch":{"type":"string"},"default_branch":{"type":"string"},"score":{"type":"number"},"forks_url":{"type":"string","format":"uri"},"keys_url":{"type":"string"},"collaborators_url":{"type":"string"},"teams_url":{"type":"string","format":"uri"},"hooks_url":{"type":"string","format":"uri"},"issue_events_url":{"type":"string"},"events_url":{"type":"string","format":"uri"},"assignees_url":{"type":"string"},"branches_url":{"type":"string"},"tags_url":{"type":"string","format":"uri"},"blobs_url":{"type":"string"},"git_tags_url":{"type":"string"},"git_refs_url":{"type":"string"},"trees_url":{"type":"string"},"statuses_url":{"type":"string"},"languages_url":{"type":"string","format":"uri"},"stargazers_url":{"type":"string","format":"uri"},"contributors_url":{"type":"string","format":"uri"},"subscribers_url":{"type":"string","format":"uri"},"subscription_url":{"type":"string","format":"uri"},"commits_url":{"type":"string"},"git_commits_url":{"type":"string"},"comments_url":{"type":"string"},"issue_comment_url":{"type":"string"},"contents_url":{"type":"string"},"compare_url":{"type":"string"},"merges_url":{"type":"string","format":"uri"},"archive_url":{"type":"string"},"downloads_url":{"type":"string","format":"uri"},"issues_url":{"type":"string"},"pulls_url":{"type":"string"},"milestones_url":{"type":"string"},"notifications_url":{"type":"string"},"labels_url":{"type":"string"},"releases_url":{"type":"string"},"deployments_url":{"type":"string","format":"uri"},"git_url":{"type":"string"},"ssh_url":{"type":"string"},"clone_url":{"type":"string"},"svn_url":{"type":"string","format":"uri"},"forks":{"type":"integer"},"open_issues":{"type":"integer"},"watchers":{"type":"integer"},"topics":{"type":"array","items":{"type":"string"}},"mirror_url":{"type":["string","null"],"format":"uri"},"has_issues":{"type":"boolean"},"has_projects":{"type":"boolean"},"has_pages":{"type":"boolean"},"has_wiki":{"type":"boolean"},"has_downloads":{"type":"boolean"},"has_discussions":{"type":"boolean"},"archived":{"type":"boolean"},"disabled":{"type":"boolean","description":"Returns whether or not this repository disabled."},"visibility":{"type":"string","description":"The repository visibility: public, private, or internal."},"license":{"anyOf":[{"type":"null"},{"title":"License Simple","required":["key","name","url","spdx_id","node_id"],"type":"object","properties":{"key":{"type":"string","examples":["mit"]},"name":{"type":"string","examples":["MIT License"]},"url":{"type":["string","null"],"format":"uri","examples":["https:\\/\\/api.github.com\\/licenses\\/mit"]},"spdx_id":{"type":["string","null"],"examples":["MIT"]},"node_id":{"type":"string","examples":["MDc6TGljZW5zZW1pdA=="]},"html_url":{"type":"string","format":"uri"}},"description":"License Simple"}]},"permissions":{"required":["admin","pull","push"],"type":"object","properties":{"admin":{"type":"boolean"},"maintain":{"type":"boolean"},"push":{"type":"boolean"},"triage":{"type":"boolean"},"pull":{"type":"boolean"}}},"text_matches":{"title":"Search Result Text Matches","type":"array","items":{"type":"object","properties":{"object_url":{"type":"string"},"object_type":{"type":["string","null"]},"property":{"type":"string"},"fragment":{"type":"string"},"matches":{"type":"array","items":{"type":"object","properties":{"text":{"type":"string"},"indices":{"type":"array","items":{"type":"integer"}}}}}}}},"temp_clone_token":{"type":"string"},"allow_merge_commit":{"type":"boolean"},"allow_squash_merge":{"type":"boolean"},"allow_rebase_merge":{"type":"boolean"},"allow_auto_merge":{"type":"boolean"},"delete_branch_on_merge":{"type":"boolean"},"allow_forking":{"type":"boolean"},"is_template":{"type":"boolean"},"web_commit_signoff_required":{"type":"boolean","examples":[false]}},"description":"Repo Search Result Item"}';
    public const SCHEMA_TITLE = 'Repo Search Result Item';
    public const SCHEMA_DESCRIPTION = 'Repo Search Result Item';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"nodeId":"generated_node_id_null","name":"generated_name_null","fullName":"generated_full_name_null","owner":null,"private":false,"htmlUrl":"https:\\/\\/example.com\\/","description":"generated_description_null","fork":false,"url":"https:\\/\\/example.com\\/","createdAt":"1970-01-01T00:00:00+00:00","updatedAt":"1970-01-01T00:00:00+00:00","pushedAt":"1970-01-01T00:00:00+00:00","homepage":"https:\\/\\/example.com\\/","size":13,"stargazersCount":13,"watchersCount":13,"language":"generated_language_null","forksCount":13,"openIssuesCount":13,"masterBranch":"generated_master_branch_null","defaultBranch":"generated_default_branch_null","score":13,"forksUrl":"https:\\/\\/example.com\\/","keysUrl":"generated_keys_url_null","collaboratorsUrl":"generated_collaborators_url_null","teamsUrl":"https:\\/\\/example.com\\/","hooksUrl":"https:\\/\\/example.com\\/","issueEventsUrl":"generated_issue_events_url_null","eventsUrl":"https:\\/\\/example.com\\/","assigneesUrl":"generated_assignees_url_null","branchesUrl":"generated_branches_url_null","tagsUrl":"https:\\/\\/example.com\\/","blobsUrl":"generated_blobs_url_null","gitTagsUrl":"generated_git_tags_url_null","gitRefsUrl":"generated_git_refs_url_null","treesUrl":"generated_trees_url_null","statusesUrl":"generated_statuses_url_null","languagesUrl":"https:\\/\\/example.com\\/","stargazersUrl":"https:\\/\\/example.com\\/","contributorsUrl":"https:\\/\\/example.com\\/","subscribersUrl":"https:\\/\\/example.com\\/","subscriptionUrl":"https:\\/\\/example.com\\/","commitsUrl":"generated_commits_url_null","gitCommitsUrl":"generated_git_commits_url_null","commentsUrl":"generated_comments_url_null","issueCommentUrl":"generated_issue_comment_url_null","contentsUrl":"generated_contents_url_null","compareUrl":"generated_compare_url_null","mergesUrl":"https:\\/\\/example.com\\/","archiveUrl":"generated_archive_url_null","downloadsUrl":"https:\\/\\/example.com\\/","issuesUrl":"generated_issues_url_null","pullsUrl":"generated_pulls_url_null","milestonesUrl":"generated_milestones_url_null","notificationsUrl":"generated_notifications_url_null","labelsUrl":"generated_labels_url_null","releasesUrl":"generated_releases_url_null","deploymentsUrl":"https:\\/\\/example.com\\/","gitUrl":"generated_git_url_null","sshUrl":"generated_ssh_url_null","cloneUrl":"generated_clone_url_null","svnUrl":"https:\\/\\/example.com\\/","forks":13,"openIssues":13,"watchers":13,"topics":["generated_topics_null"],"mirrorUrl":"https:\\/\\/example.com\\/","hasIssues":false,"hasProjects":false,"hasPages":false,"hasWiki":false,"hasDownloads":false,"hasDiscussions":false,"archived":false,"disabled":false,"visibility":"generated_visibility_null","license":null,"permissions":{"admin":false,"maintain":false,"push":false,"triage":false,"pull":false},"textMatches":[{"objectUrl":"generated_object_url_null","objectType":"generated_object_type_null","property":"generated_property_null","fragment":"generated_fragment_null","matches":[{"text":"generated_text_null","indices":[13]}]}],"tempCloneToken":"generated_temp_clone_token_null","allowMergeCommit":false,"allowSquashMerge":false,"allowRebaseMerge":false,"allowAutoMerge":false,"deleteBranchOnMerge":false,"allowForking":false,"isTemplate":false,"webCommitSignoffRequired":false}';
    /**
     * @param ?array<string> $topics
     * disabled: Returns whether or not this repository disabled.
     * visibility: The repository visibility: public, private, or internal.
     * @param ?array<\ApiClients\Client\GitHubAE\Schema\SearchResultTextMatches> $textMatches
     */
    public function __construct(public int $id, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, public string $name, #[\EventSauce\ObjectHydrator\MapFrom('full_name')] public string $fullName, public mixed $owner, public bool $private, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public string $htmlUrl, public ?string $description, public bool $fork, public string $url, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public string $createdAt, #[\EventSauce\ObjectHydrator\MapFrom('updated_at')] public string $updatedAt, #[\EventSauce\ObjectHydrator\MapFrom('pushed_at')] public string $pushedAt, public ?string $homepage, public int $size, #[\EventSauce\ObjectHydrator\MapFrom('stargazers_count')] public int $stargazersCount, #[\EventSauce\ObjectHydrator\MapFrom('watchers_count')] public int $watchersCount, public ?string $language, #[\EventSauce\ObjectHydrator\MapFrom('forks_count')] public int $forksCount, #[\EventSauce\ObjectHydrator\MapFrom('open_issues_count')] public int $openIssuesCount, #[\EventSauce\ObjectHydrator\MapFrom('master_branch')] public ?string $masterBranch, #[\EventSauce\ObjectHydrator\MapFrom('default_branch')] public string $defaultBranch, public int $score, #[\EventSauce\ObjectHydrator\MapFrom('forks_url')] public string $forksUrl, #[\EventSauce\ObjectHydrator\MapFrom('keys_url')] public string $keysUrl, #[\EventSauce\ObjectHydrator\MapFrom('collaborators_url')] public string $collaboratorsUrl, #[\EventSauce\ObjectHydrator\MapFrom('teams_url')] public string $teamsUrl, #[\EventSauce\ObjectHydrator\MapFrom('hooks_url')] public string $hooksUrl, #[\EventSauce\ObjectHydrator\MapFrom('issue_events_url')] public string $issueEventsUrl, #[\EventSauce\ObjectHydrator\MapFrom('events_url')] public string $eventsUrl, #[\EventSauce\ObjectHydrator\MapFrom('assignees_url')] public string $assigneesUrl, #[\EventSauce\ObjectHydrator\MapFrom('branches_url')] public string $branchesUrl, #[\EventSauce\ObjectHydrator\MapFrom('tags_url')] public string $tagsUrl, #[\EventSauce\ObjectHydrator\MapFrom('blobs_url')] public string $blobsUrl, #[\EventSauce\ObjectHydrator\MapFrom('git_tags_url')] public string $gitTagsUrl, #[\EventSauce\ObjectHydrator\MapFrom('git_refs_url')] public string $gitRefsUrl, #[\EventSauce\ObjectHydrator\MapFrom('trees_url')] public string $treesUrl, #[\EventSauce\ObjectHydrator\MapFrom('statuses_url')] public string $statusesUrl, #[\EventSauce\ObjectHydrator\MapFrom('languages_url')] public string $languagesUrl, #[\EventSauce\ObjectHydrator\MapFrom('stargazers_url')] public string $stargazersUrl, #[\EventSauce\ObjectHydrator\MapFrom('contributors_url')] public string $contributorsUrl, #[\EventSauce\ObjectHydrator\MapFrom('subscribers_url')] public string $subscribersUrl, #[\EventSauce\ObjectHydrator\MapFrom('subscription_url')] public string $subscriptionUrl, #[\EventSauce\ObjectHydrator\MapFrom('commits_url')] public string $commitsUrl, #[\EventSauce\ObjectHydrator\MapFrom('git_commits_url')] public string $gitCommitsUrl, #[\EventSauce\ObjectHydrator\MapFrom('comments_url')] public string $commentsUrl, #[\EventSauce\ObjectHydrator\MapFrom('issue_comment_url')] public string $issueCommentUrl, #[\EventSauce\ObjectHydrator\MapFrom('contents_url')] public string $contentsUrl, #[\EventSauce\ObjectHydrator\MapFrom('compare_url')] public string $compareUrl, #[\EventSauce\ObjectHydrator\MapFrom('merges_url')] public string $mergesUrl, #[\EventSauce\ObjectHydrator\MapFrom('archive_url')] public string $archiveUrl, #[\EventSauce\ObjectHydrator\MapFrom('downloads_url')] public string $downloadsUrl, #[\EventSauce\ObjectHydrator\MapFrom('issues_url')] public string $issuesUrl, #[\EventSauce\ObjectHydrator\MapFrom('pulls_url')] public string $pullsUrl, #[\EventSauce\ObjectHydrator\MapFrom('milestones_url')] public string $milestonesUrl, #[\EventSauce\ObjectHydrator\MapFrom('notifications_url')] public string $notificationsUrl, #[\EventSauce\ObjectHydrator\MapFrom('labels_url')] public string $labelsUrl, #[\EventSauce\ObjectHydrator\MapFrom('releases_url')] public string $releasesUrl, #[\EventSauce\ObjectHydrator\MapFrom('deployments_url')] public string $deploymentsUrl, #[\EventSauce\ObjectHydrator\MapFrom('git_url')] public string $gitUrl, #[\EventSauce\ObjectHydrator\MapFrom('ssh_url')] public string $sshUrl, #[\EventSauce\ObjectHydrator\MapFrom('clone_url')] public string $cloneUrl, #[\EventSauce\ObjectHydrator\MapFrom('svn_url')] public string $svnUrl, public int $forks, #[\EventSauce\ObjectHydrator\MapFrom('open_issues')] public int $openIssues, public int $watchers, public ?array $topics, #[\EventSauce\ObjectHydrator\MapFrom('mirror_url')] public ?string $mirrorUrl, #[\EventSauce\ObjectHydrator\MapFrom('has_issues')] public bool $hasIssues, #[\EventSauce\ObjectHydrator\MapFrom('has_projects')] public bool $hasProjects, #[\EventSauce\ObjectHydrator\MapFrom('has_pages')] public bool $hasPages, #[\EventSauce\ObjectHydrator\MapFrom('has_wiki')] public bool $hasWiki, #[\EventSauce\ObjectHydrator\MapFrom('has_downloads')] public bool $hasDownloads, #[\EventSauce\ObjectHydrator\MapFrom('has_discussions')] public ?bool $hasDiscussions, public bool $archived, public bool $disabled, public ?string $visibility, public mixed $license, public ?Schema\FullRepository\Permissions $permissions, #[\EventSauce\ObjectHydrator\MapFrom('text_matches')] #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\SearchResultTextMatches::class)] public ?array $textMatches, #[\EventSauce\ObjectHydrator\MapFrom('temp_clone_token')] public ?string $tempCloneToken, #[\EventSauce\ObjectHydrator\MapFrom('allow_merge_commit')] public ?bool $allowMergeCommit, #[\EventSauce\ObjectHydrator\MapFrom('allow_squash_merge')] public ?bool $allowSquashMerge, #[\EventSauce\ObjectHydrator\MapFrom('allow_rebase_merge')] public ?bool $allowRebaseMerge, #[\EventSauce\ObjectHydrator\MapFrom('allow_auto_merge')] public ?bool $allowAutoMerge, #[\EventSauce\ObjectHydrator\MapFrom('delete_branch_on_merge')] public ?bool $deleteBranchOnMerge, #[\EventSauce\ObjectHydrator\MapFrom('allow_forking')] public ?bool $allowForking, #[\EventSauce\ObjectHydrator\MapFrom('is_template')] public ?bool $isTemplate, #[\EventSauce\ObjectHydrator\MapFrom('web_commit_signoff_required')] public ?bool $webCommitSignoffRequired)
    {
    }
}
