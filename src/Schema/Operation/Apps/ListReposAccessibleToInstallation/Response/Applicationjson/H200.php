<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Operation\Apps\ListReposAccessibleToInstallation\Response\Applicationjson;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class H200
{
    public const SCHEMA_JSON = '{"required":["total_count","repositories"],"type":"object","properties":{"total_count":{"type":"integer"},"repositories":{"type":"array","items":{"title":"Repository","required":["archive_url","assignees_url","blobs_url","branches_url","collaborators_url","comments_url","commits_url","compare_url","contents_url","contributors_url","deployments_url","description","downloads_url","events_url","fork","forks_url","full_name","git_commits_url","git_refs_url","git_tags_url","hooks_url","html_url","id","node_id","issue_comment_url","issue_events_url","issues_url","keys_url","labels_url","languages_url","merges_url","milestones_url","name","notifications_url","owner","private","pulls_url","releases_url","stargazers_url","statuses_url","subscribers_url","subscription_url","tags_url","teams_url","trees_url","url","clone_url","default_branch","forks","forks_count","git_url","has_downloads","has_issues","has_projects","has_wiki","has_pages","homepage","language","archived","disabled","mirror_url","open_issues","open_issues_count","license","pushed_at","size","ssh_url","stargazers_count","svn_url","watchers","watchers_count","created_at","updated_at"],"type":"object","properties":{"id":{"type":"integer","description":"Unique identifier of the repository","examples":[42]},"node_id":{"type":"string","examples":["MDEwOlJlcG9zaXRvcnkxMjk2MjY5"]},"name":{"type":"string","description":"The name of the repository.","examples":["Team Environment"]},"full_name":{"type":"string","examples":["octocat\\/Hello-World"]},"license":{"anyOf":[{"type":"null"},{"title":"License Simple","required":["key","name","url","spdx_id","node_id"],"type":"object","properties":{"key":{"type":"string","examples":["mit"]},"name":{"type":"string","examples":["MIT License"]},"url":{"type":["string","null"],"format":"uri","examples":["https:\\/\\/api.github.com\\/licenses\\/mit"]},"spdx_id":{"type":["string","null"],"examples":["MIT"]},"node_id":{"type":"string","examples":["MDc6TGljZW5zZW1pdA=="]},"html_url":{"type":"string","format":"uri"}},"description":"License Simple"}]},"organization":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"forks":{"type":"integer"},"permissions":{"required":["admin","pull","push"],"type":"object","properties":{"admin":{"type":"boolean"},"pull":{"type":"boolean"},"triage":{"type":"boolean"},"push":{"type":"boolean"},"maintain":{"type":"boolean"}}},"owner":{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."},"private":{"type":"boolean","description":"Whether the repository is private or public.","default":false},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World"]},"description":{"type":["string","null"],"examples":["This your first repo!"]},"fork":{"type":"boolean"},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World"]},"archive_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/{archive_format}{\\/ref}"]},"assignees_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/assignees{\\/user}"]},"blobs_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/blobs{\\/sha}"]},"branches_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches{\\/branch}"]},"collaborators_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/collaborators{\\/collaborator}"]},"comments_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/comments{\\/number}"]},"commits_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits{\\/sha}"]},"compare_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/compare\\/{base}...{head}"]},"contents_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contents\\/{+path}"]},"contributors_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contributors"]},"deployments_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/deployments"]},"downloads_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/downloads"]},"events_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/events"]},"forks_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/forks"]},"git_commits_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/commits{\\/sha}"]},"git_refs_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/refs{\\/sha}"]},"git_tags_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/tags{\\/sha}"]},"git_url":{"type":"string","examples":["git:github.com\\/octocat\\/Hello-World.git"]},"issue_comment_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/comments{\\/number}"]},"issue_events_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/events{\\/number}"]},"issues_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues{\\/number}"]},"keys_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/keys{\\/key_id}"]},"labels_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/labels{\\/name}"]},"languages_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/languages"]},"merges_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/merges"]},"milestones_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/milestones{\\/number}"]},"notifications_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/notifications{?since,all,participating}"]},"pulls_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls{\\/number}"]},"releases_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/releases{\\/id}"]},"ssh_url":{"type":"string","examples":["git@github.com:octocat\\/Hello-World.git"]},"stargazers_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/stargazers"]},"statuses_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/statuses\\/{sha}"]},"subscribers_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscribers"]},"subscription_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscription"]},"tags_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/tags"]},"teams_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/teams"]},"trees_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/trees{\\/sha}"]},"clone_url":{"type":"string","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World.git"]},"mirror_url":{"type":["string","null"],"format":"uri","examples":["git:git.example.com\\/octocat\\/Hello-World"]},"hooks_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks"]},"svn_url":{"type":"string","format":"uri","examples":["https:\\/\\/svn.github.com\\/octocat\\/Hello-World"]},"homepage":{"type":["string","null"],"format":"uri","examples":["https:\\/\\/github.com"]},"language":{"type":["string","null"]},"forks_count":{"type":"integer","examples":[9]},"stargazers_count":{"type":"integer","examples":[80]},"watchers_count":{"type":"integer","examples":[80]},"size":{"type":"integer","description":"The size of the repository. Size is calculated hourly. When a repository is initially created, the size is 0.","examples":[108]},"default_branch":{"type":"string","description":"The default branch of the repository.","examples":["master"]},"open_issues_count":{"type":"integer","examples":[0]},"is_template":{"type":"boolean","description":"Whether this repository acts as a template that can be used to generate new repositories.","default":false,"examples":[true]},"topics":{"type":"array","items":{"type":"string"}},"has_issues":{"type":"boolean","description":"Whether issues are enabled.","default":true,"examples":[true]},"has_projects":{"type":"boolean","description":"Whether projects are enabled.","default":true,"examples":[true]},"has_wiki":{"type":"boolean","description":"Whether the wiki is enabled.","default":true,"examples":[true]},"has_pages":{"type":"boolean"},"has_downloads":{"type":"boolean","description":"Whether downloads are enabled.","default":true,"examples":[true]},"archived":{"type":"boolean","description":"Whether the repository is archived.","default":false},"disabled":{"type":"boolean","description":"Returns whether or not this repository disabled."},"visibility":{"type":"string","description":"The repository visibility: public, private, or internal.","default":"public"},"pushed_at":{"type":["string","null"],"format":"date-time","examples":["2011-01-26T19:06:43Z"]},"created_at":{"type":["string","null"],"format":"date-time","examples":["2011-01-26T19:01:12Z"]},"updated_at":{"type":["string","null"],"format":"date-time","examples":["2011-01-26T19:14:43Z"]},"allow_rebase_merge":{"type":"boolean","description":"Whether to allow rebase merges for pull requests.","default":true,"examples":[true]},"template_repository":{"type":["object","null"],"properties":{"id":{"type":"integer"},"node_id":{"type":"string"},"name":{"type":"string"},"full_name":{"type":"string"},"owner":{"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"avatar_url":{"type":"string"},"gravatar_id":{"type":"string"},"url":{"type":"string"},"html_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"organizations_url":{"type":"string"},"repos_url":{"type":"string"},"events_url":{"type":"string"},"received_events_url":{"type":"string"},"type":{"type":"string"},"site_admin":{"type":"boolean"}}},"private":{"type":"boolean"},"html_url":{"type":"string"},"description":{"type":"string"},"fork":{"type":"boolean"},"url":{"type":"string"},"archive_url":{"type":"string"},"assignees_url":{"type":"string"},"blobs_url":{"type":"string"},"branches_url":{"type":"string"},"collaborators_url":{"type":"string"},"comments_url":{"type":"string"},"commits_url":{"type":"string"},"compare_url":{"type":"string"},"contents_url":{"type":"string"},"contributors_url":{"type":"string"},"deployments_url":{"type":"string"},"downloads_url":{"type":"string"},"events_url":{"type":"string"},"forks_url":{"type":"string"},"git_commits_url":{"type":"string"},"git_refs_url":{"type":"string"},"git_tags_url":{"type":"string"},"git_url":{"type":"string"},"issue_comment_url":{"type":"string"},"issue_events_url":{"type":"string"},"issues_url":{"type":"string"},"keys_url":{"type":"string"},"labels_url":{"type":"string"},"languages_url":{"type":"string"},"merges_url":{"type":"string"},"milestones_url":{"type":"string"},"notifications_url":{"type":"string"},"pulls_url":{"type":"string"},"releases_url":{"type":"string"},"ssh_url":{"type":"string"},"stargazers_url":{"type":"string"},"statuses_url":{"type":"string"},"subscribers_url":{"type":"string"},"subscription_url":{"type":"string"},"tags_url":{"type":"string"},"teams_url":{"type":"string"},"trees_url":{"type":"string"},"clone_url":{"type":"string"},"mirror_url":{"type":"string"},"hooks_url":{"type":"string"},"svn_url":{"type":"string"},"homepage":{"type":"string"},"language":{"type":"string"},"forks_count":{"type":"integer"},"stargazers_count":{"type":"integer"},"watchers_count":{"type":"integer"},"size":{"type":"integer"},"default_branch":{"type":"string"},"open_issues_count":{"type":"integer"},"is_template":{"type":"boolean"},"topics":{"type":"array","items":{"type":"string"}},"has_issues":{"type":"boolean"},"has_projects":{"type":"boolean"},"has_wiki":{"type":"boolean"},"has_pages":{"type":"boolean"},"has_downloads":{"type":"boolean"},"archived":{"type":"boolean"},"disabled":{"type":"boolean"},"visibility":{"type":"string"},"pushed_at":{"type":"string"},"created_at":{"type":"string"},"updated_at":{"type":"string"},"permissions":{"type":"object","properties":{"admin":{"type":"boolean"},"maintain":{"type":"boolean"},"push":{"type":"boolean"},"triage":{"type":"boolean"},"pull":{"type":"boolean"}}},"allow_rebase_merge":{"type":"boolean"},"temp_clone_token":{"type":"string"},"allow_squash_merge":{"type":"boolean"},"allow_auto_merge":{"type":"boolean"},"delete_branch_on_merge":{"type":"boolean"},"allow_update_branch":{"type":"boolean"},"allow_merge_commit":{"type":"boolean"},"subscribers_count":{"type":"integer"},"network_count":{"type":"integer"}}},"temp_clone_token":{"type":"string"},"allow_squash_merge":{"type":"boolean","description":"Whether to allow squash merges for pull requests.","default":true,"examples":[true]},"allow_auto_merge":{"type":"boolean","description":"Whether to allow Auto-merge to be used on pull requests.","default":false,"examples":[false]},"delete_branch_on_merge":{"type":"boolean","description":"Whether to delete head branches when pull requests are merged","default":false,"examples":[false]},"allow_update_branch":{"type":"boolean","description":"Whether or not a pull request head branch that is behind its base branch can always be updated even if it is not required to be up to date before merging.","default":false,"examples":[false]},"allow_merge_commit":{"type":"boolean","description":"Whether to allow merge commits for pull requests.","default":true,"examples":[true]},"allow_forking":{"type":"boolean","description":"Whether to allow forking this repo"},"web_commit_signoff_required":{"type":"boolean","description":"Whether to require contributors to sign off on web-based commits","default":false},"subscribers_count":{"type":"integer"},"network_count":{"type":"integer"},"open_issues":{"type":"integer"},"watchers":{"type":"integer"},"master_branch":{"type":"string"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:42Z\\""]},"anonymous_access_enabled":{"type":"boolean","description":"Whether anonymous git access is enabled for this repository"}},"description":"A repository on GitHub."}},"repository_selection":{"type":"string","examples":["selected"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_count":13,"repositories":[{"id":42,"node_id":"MDEwOlJlcG9zaXRvcnkxMjk2MjY5","name":"Team Environment","full_name":"octocat\\/Hello-World","license":null,"organization":null,"forks":13,"permissions":{"admin":false,"pull":false,"triage":false,"push":false,"maintain":false},"owner":{"name":"generated_name","email":"generated_email","login":"octocat","id":1,"node_id":"MDQ6VXNlcjE=","avatar_url":"https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif","gravatar_id":"41d064eb2195891e12d0413f63227ea7","url":"https:\\/\\/api.github.com\\/users\\/octocat","html_url":"https:\\/\\/github.com\\/octocat","followers_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/followers","following_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}","gists_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}","starred_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}","subscriptions_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions","organizations_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/orgs","repos_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/repos","events_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}","received_events_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/received_events","type":"User","site_admin":false,"starred_at":"\\"2020-07-09T00:17:55Z\\""},"private":false,"html_url":"https:\\/\\/github.com\\/octocat\\/Hello-World","description":"This your first repo!","fork":false,"url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World","archive_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/{archive_format}{\\/ref}","assignees_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/assignees{\\/user}","blobs_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/blobs{\\/sha}","branches_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches{\\/branch}","collaborators_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/collaborators{\\/collaborator}","comments_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/comments{\\/number}","commits_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits{\\/sha}","compare_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/compare\\/{base}...{head}","contents_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contents\\/{+path}","contributors_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contributors","deployments_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/deployments","downloads_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/downloads","events_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/events","forks_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/forks","git_commits_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/commits{\\/sha}","git_refs_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/refs{\\/sha}","git_tags_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/tags{\\/sha}","git_url":"git:github.com\\/octocat\\/Hello-World.git","issue_comment_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/comments{\\/number}","issue_events_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/events{\\/number}","issues_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues{\\/number}","keys_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/keys{\\/key_id}","labels_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/labels{\\/name}","languages_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/languages","merges_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/merges","milestones_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/milestones{\\/number}","notifications_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/notifications{?since,all,participating}","pulls_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls{\\/number}","releases_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/releases{\\/id}","ssh_url":"git@github.com:octocat\\/Hello-World.git","stargazers_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/stargazers","statuses_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/statuses\\/{sha}","subscribers_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscribers","subscription_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscription","tags_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/tags","teams_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/teams","trees_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/trees{\\/sha}","clone_url":"https:\\/\\/github.com\\/octocat\\/Hello-World.git","mirror_url":"git:git.example.com\\/octocat\\/Hello-World","hooks_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks","svn_url":"https:\\/\\/svn.github.com\\/octocat\\/Hello-World","homepage":"https:\\/\\/github.com","language":"generated_language","forks_count":9,"stargazers_count":80,"watchers_count":80,"size":108,"default_branch":"master","open_issues_count":0,"is_template":true,"topics":["generated_topics"],"has_issues":true,"has_projects":true,"has_wiki":true,"has_pages":false,"has_downloads":true,"archived":false,"disabled":false,"visibility":"generated_visibility","pushed_at":"2011-01-26T19:06:43Z","created_at":"2011-01-26T19:01:12Z","updated_at":"2011-01-26T19:14:43Z","allow_rebase_merge":true,"template_repository":{"id":13,"node_id":"generated_node_id","name":"generated_name","full_name":"generated_full_name","owner":{"login":"generated_login","id":13,"node_id":"generated_node_id","avatar_url":"generated_avatar_url","gravatar_id":"generated_gravatar_id","url":"generated_url","html_url":"generated_html_url","followers_url":"generated_followers_url","following_url":"generated_following_url","gists_url":"generated_gists_url","starred_url":"generated_starred_url","subscriptions_url":"generated_subscriptions_url","organizations_url":"generated_organizations_url","repos_url":"generated_repos_url","events_url":"generated_events_url","received_events_url":"generated_received_events_url","type":"generated_type","site_admin":false},"private":false,"html_url":"generated_html_url","description":"generated_description","fork":false,"url":"generated_url","archive_url":"generated_archive_url","assignees_url":"generated_assignees_url","blobs_url":"generated_blobs_url","branches_url":"generated_branches_url","collaborators_url":"generated_collaborators_url","comments_url":"generated_comments_url","commits_url":"generated_commits_url","compare_url":"generated_compare_url","contents_url":"generated_contents_url","contributors_url":"generated_contributors_url","deployments_url":"generated_deployments_url","downloads_url":"generated_downloads_url","events_url":"generated_events_url","forks_url":"generated_forks_url","git_commits_url":"generated_git_commits_url","git_refs_url":"generated_git_refs_url","git_tags_url":"generated_git_tags_url","git_url":"generated_git_url","issue_comment_url":"generated_issue_comment_url","issue_events_url":"generated_issue_events_url","issues_url":"generated_issues_url","keys_url":"generated_keys_url","labels_url":"generated_labels_url","languages_url":"generated_languages_url","merges_url":"generated_merges_url","milestones_url":"generated_milestones_url","notifications_url":"generated_notifications_url","pulls_url":"generated_pulls_url","releases_url":"generated_releases_url","ssh_url":"generated_ssh_url","stargazers_url":"generated_stargazers_url","statuses_url":"generated_statuses_url","subscribers_url":"generated_subscribers_url","subscription_url":"generated_subscription_url","tags_url":"generated_tags_url","teams_url":"generated_teams_url","trees_url":"generated_trees_url","clone_url":"generated_clone_url","mirror_url":"generated_mirror_url","hooks_url":"generated_hooks_url","svn_url":"generated_svn_url","homepage":"generated_homepage","language":"generated_language","forks_count":13,"stargazers_count":13,"watchers_count":13,"size":13,"default_branch":"generated_default_branch","open_issues_count":13,"is_template":false,"topics":["generated_topics"],"has_issues":false,"has_projects":false,"has_wiki":false,"has_pages":false,"has_downloads":false,"archived":false,"disabled":false,"visibility":"generated_visibility","pushed_at":"generated_pushed_at","created_at":"generated_created_at","updated_at":"generated_updated_at","permissions":{"admin":false,"maintain":false,"push":false,"triage":false,"pull":false},"allow_rebase_merge":false,"temp_clone_token":"generated_temp_clone_token","allow_squash_merge":false,"allow_auto_merge":false,"delete_branch_on_merge":false,"allow_update_branch":false,"allow_merge_commit":false,"subscribers_count":13,"network_count":13},"temp_clone_token":"generated_temp_clone_token","allow_squash_merge":true,"allow_auto_merge":false,"delete_branch_on_merge":false,"allow_update_branch":false,"allow_merge_commit":true,"allow_forking":false,"web_commit_signoff_required":false,"subscribers_count":13,"network_count":13,"open_issues":13,"watchers":13,"master_branch":"generated_master_branch","starred_at":"\\"2020-07-09T00:17:42Z\\"","anonymous_access_enabled":false}],"repository_selection":"selected"}';
    /**
     * @param ?array<\ApiClients\Client\GitHubAE\Schema\Repository> $repositories
     */
    public function __construct(public ?int $total_count, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\Repository::class)] public ?array $repositories, public string $repository_selection)
    {
    }
}
