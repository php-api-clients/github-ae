<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class OrganizationSecretScanningAlert
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"number":{"type":"integer","description":"The security alert number.","readOnly":true},"created_at":{"type":"string","description":"The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time","readOnly":true},"updated_at":{"anyOf":[{"type":"null"},{"type":"string","description":"The time that the alert was last updated in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time","readOnly":true}]},"url":{"type":"string","description":"The REST API URL of the alert resource.","format":"uri","readOnly":true},"html_url":{"type":"string","description":"The GitHub URL of the alert resource.","format":"uri","readOnly":true},"locations_url":{"type":"string","description":"The REST API URL of the code locations for this alert.","format":"uri"},"state":{"enum":["open","resolved"],"type":"string","description":"Sets the state of the secret scanning alert. You must provide `resolution` when you set the state to `resolved`."},"resolution":{"enum":[null,"false_positive","wont_fix","revoked","used_in_tests"],"type":["string","null"],"description":"**Required when the `state` is `resolved`.** The reason for resolving the alert."},"resolved_at":{"type":["string","null"],"description":"The time that the alert was resolved in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time"},"resolved_by":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"secret_type":{"type":"string","description":"The type of secret that secret scanning detected."},"secret_type_display_name":{"type":"string","description":"User-friendly name for the detected secret, matching the `secret_type`.\\nFor a list of built-in patterns, see \\"[Secret scanning patterns](https:\\/\\/docs.github.com\\/github-ae@latest\\/code-security\\/secret-scanning\\/secret-scanning-patterns#supported-secrets-for-advanced-security).\\""},"secret":{"type":"string","description":"The secret that was detected."},"repository":{"title":"Simple Repository","required":["archive_url","assignees_url","blobs_url","branches_url","collaborators_url","comments_url","commits_url","compare_url","contents_url","contributors_url","deployments_url","description","downloads_url","events_url","fork","forks_url","full_name","git_commits_url","git_refs_url","git_tags_url","hooks_url","html_url","id","node_id","issue_comment_url","issue_events_url","issues_url","keys_url","labels_url","languages_url","merges_url","milestones_url","name","notifications_url","owner","private","pulls_url","releases_url","stargazers_url","statuses_url","subscribers_url","subscription_url","tags_url","teams_url","trees_url","url"],"type":"object","properties":{"id":{"type":"integer","description":"A unique identifier of the repository.","examples":[1296269]},"node_id":{"type":"string","description":"The GraphQL identifier of the repository.","examples":["MDEwOlJlcG9zaXRvcnkxMjk2MjY5"]},"name":{"type":"string","description":"The name of the repository.","examples":["Hello-World"]},"full_name":{"type":"string","description":"The full, globally unique, name of the repository.","examples":["octocat\\/Hello-World"]},"owner":{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."},"private":{"type":"boolean","description":"Whether the repository is private."},"html_url":{"type":"string","description":"The URL to view the repository on GitHub.com.","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World"]},"description":{"type":["string","null"],"description":"The repository description.","examples":["This your first repo!"]},"fork":{"type":"boolean","description":"Whether the repository is a fork."},"url":{"type":"string","description":"The URL to get more information about the repository from the GitHub API.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World"]},"archive_url":{"type":"string","description":"A template for the API URL to download the repository as an archive.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/{archive_format}{\\/ref}"]},"assignees_url":{"type":"string","description":"A template for the API URL to list the available assignees for issues in the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/assignees{\\/user}"]},"blobs_url":{"type":"string","description":"A template for the API URL to create or retrieve a raw Git blob in the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/blobs{\\/sha}"]},"branches_url":{"type":"string","description":"A template for the API URL to get information about branches in the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches{\\/branch}"]},"collaborators_url":{"type":"string","description":"A template for the API URL to get information about collaborators of the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/collaborators{\\/collaborator}"]},"comments_url":{"type":"string","description":"A template for the API URL to get information about comments on the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/comments{\\/number}"]},"commits_url":{"type":"string","description":"A template for the API URL to get information about commits on the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits{\\/sha}"]},"compare_url":{"type":"string","description":"A template for the API URL to compare two commits or refs.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/compare\\/{base}...{head}"]},"contents_url":{"type":"string","description":"A template for the API URL to get the contents of the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contents\\/{+path}"]},"contributors_url":{"type":"string","description":"A template for the API URL to list the contributors to the repository.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contributors"]},"deployments_url":{"type":"string","description":"The API URL to list the deployments of the repository.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/deployments"]},"downloads_url":{"type":"string","description":"The API URL to list the downloads on the repository.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/downloads"]},"events_url":{"type":"string","description":"The API URL to list the events of the repository.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/events"]},"forks_url":{"type":"string","description":"The API URL to list the forks of the repository.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/forks"]},"git_commits_url":{"type":"string","description":"A template for the API URL to get information about Git commits of the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/commits{\\/sha}"]},"git_refs_url":{"type":"string","description":"A template for the API URL to get information about Git refs of the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/refs{\\/sha}"]},"git_tags_url":{"type":"string","description":"A template for the API URL to get information about Git tags of the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/tags{\\/sha}"]},"issue_comment_url":{"type":"string","description":"A template for the API URL to get information about issue comments on the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/comments{\\/number}"]},"issue_events_url":{"type":"string","description":"A template for the API URL to get information about issue events on the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/events{\\/number}"]},"issues_url":{"type":"string","description":"A template for the API URL to get information about issues on the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues{\\/number}"]},"keys_url":{"type":"string","description":"A template for the API URL to get information about deploy keys on the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/keys{\\/key_id}"]},"labels_url":{"type":"string","description":"A template for the API URL to get information about labels of the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/labels{\\/name}"]},"languages_url":{"type":"string","description":"The API URL to get information about the languages of the repository.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/languages"]},"merges_url":{"type":"string","description":"The API URL to merge branches in the repository.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/merges"]},"milestones_url":{"type":"string","description":"A template for the API URL to get information about milestones of the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/milestones{\\/number}"]},"notifications_url":{"type":"string","description":"A template for the API URL to get information about notifications on the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/notifications{?since,all,participating}"]},"pulls_url":{"type":"string","description":"A template for the API URL to get information about pull requests on the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls{\\/number}"]},"releases_url":{"type":"string","description":"A template for the API URL to get information about releases on the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/releases{\\/id}"]},"stargazers_url":{"type":"string","description":"The API URL to list the stargazers on the repository.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/stargazers"]},"statuses_url":{"type":"string","description":"A template for the API URL to get information about statuses of a commit.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/statuses\\/{sha}"]},"subscribers_url":{"type":"string","description":"The API URL to list the subscribers on the repository.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscribers"]},"subscription_url":{"type":"string","description":"The API URL to subscribe to notifications for this repository.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscription"]},"tags_url":{"type":"string","description":"The API URL to get information about tags on the repository.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/tags"]},"teams_url":{"type":"string","description":"The API URL to list the teams on the repository.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/teams"]},"trees_url":{"type":"string","description":"A template for the API URL to create or retrieve a raw Git tree of the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/trees{\\/sha}"]},"hooks_url":{"type":"string","description":"The API URL to list the hooks on the repository.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks"]}},"description":"A GitHub repository."},"push_protection_bypassed":{"type":["boolean","null"],"description":"Whether push protection was bypassed for the detected secret."},"push_protection_bypassed_by":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"push_protection_bypassed_at":{"type":["string","null"],"description":"The time that push protection was bypassed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time"},"resolution_comment":{"type":["string","null"],"description":"The comment that was optionally added when this alert was closed"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"number":13,"created_at":"generated_created_at","updated_at":"generated_updated_at","url":"generated_url","html_url":"generated_html_url","locations_url":"generated_locations_url","state":"generated_state","resolution":"generated_resolution","resolved_at":"generated_resolved_at","resolved_by":{"name":"generated_name","email":"generated_email","login":"octocat","id":1,"node_id":"MDQ6VXNlcjE=","avatar_url":"https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif","gravatar_id":"41d064eb2195891e12d0413f63227ea7","url":"https:\\/\\/api.github.com\\/users\\/octocat","html_url":"https:\\/\\/github.com\\/octocat","followers_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/followers","following_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}","gists_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}","starred_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}","subscriptions_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions","organizations_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/orgs","repos_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/repos","events_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}","received_events_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/received_events","type":"User","site_admin":false,"starred_at":"\\"2020-07-09T00:17:55Z\\""},"secret_type":"generated_secret_type","secret_type_display_name":"generated_secret_type_display_name","secret":"generated_secret","repository":{"id":1296269,"node_id":"MDEwOlJlcG9zaXRvcnkxMjk2MjY5","name":"Hello-World","full_name":"octocat\\/Hello-World","owner":{"name":"generated_name","email":"generated_email","login":"octocat","id":1,"node_id":"MDQ6VXNlcjE=","avatar_url":"https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif","gravatar_id":"41d064eb2195891e12d0413f63227ea7","url":"https:\\/\\/api.github.com\\/users\\/octocat","html_url":"https:\\/\\/github.com\\/octocat","followers_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/followers","following_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}","gists_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}","starred_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}","subscriptions_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions","organizations_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/orgs","repos_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/repos","events_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}","received_events_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/received_events","type":"User","site_admin":false,"starred_at":"\\"2020-07-09T00:17:55Z\\""},"private":false,"html_url":"https:\\/\\/github.com\\/octocat\\/Hello-World","description":"This your first repo!","fork":false,"url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World","archive_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/{archive_format}{\\/ref}","assignees_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/assignees{\\/user}","blobs_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/blobs{\\/sha}","branches_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches{\\/branch}","collaborators_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/collaborators{\\/collaborator}","comments_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/comments{\\/number}","commits_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits{\\/sha}","compare_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/compare\\/{base}...{head}","contents_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contents\\/{+path}","contributors_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contributors","deployments_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/deployments","downloads_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/downloads","events_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/events","forks_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/forks","git_commits_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/commits{\\/sha}","git_refs_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/refs{\\/sha}","git_tags_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/tags{\\/sha}","issue_comment_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/comments{\\/number}","issue_events_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/events{\\/number}","issues_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues{\\/number}","keys_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/keys{\\/key_id}","labels_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/labels{\\/name}","languages_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/languages","merges_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/merges","milestones_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/milestones{\\/number}","notifications_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/notifications{?since,all,participating}","pulls_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls{\\/number}","releases_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/releases{\\/id}","stargazers_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/stargazers","statuses_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/statuses\\/{sha}","subscribers_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscribers","subscription_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscription","tags_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/tags","teams_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/teams","trees_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/trees{\\/sha}","hooks_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks"},"push_protection_bypassed":false,"push_protection_bypassed_by":{"name":"generated_name","email":"generated_email","login":"octocat","id":1,"node_id":"MDQ6VXNlcjE=","avatar_url":"https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif","gravatar_id":"41d064eb2195891e12d0413f63227ea7","url":"https:\\/\\/api.github.com\\/users\\/octocat","html_url":"https:\\/\\/github.com\\/octocat","followers_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/followers","following_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}","gists_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}","starred_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}","subscriptions_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions","organizations_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/orgs","repos_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/repos","events_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}","received_events_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/received_events","type":"User","site_admin":false,"starred_at":"\\"2020-07-09T00:17:55Z\\""},"push_protection_bypassed_at":"generated_push_protection_bypassed_at","resolution_comment":"generated_resolution_comment"}';
    /**
    * number: The security alert number.
    * created_at: The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
    * url: The REST API URL of the alert resource.
    * html_url: The GitHub URL of the alert resource.
    * locations_url: The REST API URL of the code locations for this alert.
    * state: Sets the state of the secret scanning alert. You must provide `resolution` when you set the state to `resolved`.
    * resolution: **Required when the `state` is `resolved`.** The reason for resolving the alert.
    * resolved_at: The time that the alert was resolved in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
    * secret_type: The type of secret that secret scanning detected.
    * secret_type_display_name: User-friendly name for the detected secret, matching the `secret_type`.
    For a list of built-in patterns, see "[Secret scanning patterns](https://docs.github.com/github-ae@latest/code-security/secret-scanning/secret-scanning-patterns#supported-secrets-for-advanced-security)."
    * secret: The secret that was detected.
    * repository: A GitHub repository.
    * push_protection_bypassed: Whether push protection was bypassed for the detected secret.
    * push_protection_bypassed_at: The time that push protection was bypassed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
    * resolution_comment: The comment that was optionally added when this alert was closed
    */
    public function __construct(public ?int $number, public ?string $created_at, public ?string $updated_at, public ?string $url, public ?string $html_url, public ?string $locations_url, public ?string $state, public ?string $resolution, public ?string $resolved_at, public ?Schema\SimpleUser $resolved_by, public ?string $secret_type, public ?string $secret_type_display_name, public ?string $secret, public ?Schema\SimpleRepository $repository, public ?bool $push_protection_bypassed, public ?Schema\SimpleUser $push_protection_bypassed_by, public ?string $push_protection_bypassed_at, public ?string $resolution_comment)
    {
    }
}
