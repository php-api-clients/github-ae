<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookIssuesTransferred;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"required":["new_issue","new_repository"],"type":"object","properties":{"new_issue":{"title":"Issue","required":["url","repository_url","labels_url","comments_url","events_url","html_url","id","node_id","number","title","user","assignees","milestone","comments","created_at","updated_at","closed_at","author_association","active_lock_reason","body","reactions"],"type":"object","properties":{"active_lock_reason":{"enum":["resolved","off-topic","too heated","spam",null],"type":["string","null"]},"assignee":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"assignees":{"type":"array","items":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}}},"author_association":{"title":"AuthorAssociation","enum":["COLLABORATOR","CONTRIBUTOR","FIRST_TIMER","FIRST_TIME_CONTRIBUTOR","MANNEQUIN","MEMBER","NONE","OWNER"],"type":"string","description":"How the author is associated with the repository."},"body":{"type":["string","null"],"description":"Contents of the issue"},"closed_at":{"type":["string","null"],"format":"date-time"},"comments":{"type":"integer"},"comments_url":{"type":"string","format":"uri"},"created_at":{"type":"string","format":"date-time"},"draft":{"type":"boolean"},"events_url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"labels":{"type":"array","items":{"title":"Label","required":["id","node_id","url","name","color","default","description"],"type":"object","properties":{"color":{"type":"string","description":"6-character hex code, without the leading #, identifying the color"},"default":{"type":"boolean"},"description":{"type":["string","null"]},"id":{"type":"integer"},"name":{"type":"string","description":"The name of the label."},"node_id":{"type":"string"},"url":{"type":"string","description":"URL for the label","format":"uri"}}}},"labels_url":{"type":"string","format":"uri-template"},"locked":{"type":"boolean"},"milestone":{"title":"Milestone","required":["url","html_url","labels_url","id","node_id","number","title","description","creator","open_issues","closed_issues","state","created_at","updated_at","due_on","closed_at"],"type":["object","null"],"properties":{"closed_at":{"type":["string","null"],"format":"date-time"},"closed_issues":{"type":"integer"},"created_at":{"type":"string","format":"date-time"},"creator":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"description":{"type":["string","null"]},"due_on":{"type":["string","null"],"format":"date-time"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"labels_url":{"type":"string","format":"uri"},"node_id":{"type":"string"},"number":{"type":"integer","description":"The number of the milestone."},"open_issues":{"type":"integer"},"state":{"enum":["open","closed"],"type":"string","description":"The state of the milestone."},"title":{"type":"string","description":"The title of the milestone."},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","format":"uri"}},"description":"A collection of related issues and pull requests."},"node_id":{"type":"string"},"number":{"type":"integer"},"performed_via_github_app":{"title":"App","required":["id","node_id","owner","name","description","external_url","html_url","created_at","updated_at"],"type":["object","null"],"properties":{"created_at":{"type":["string","null"],"format":"date-time"},"description":{"type":["string","null"]},"events":{"type":"array","items":{"enum":["branch_protection_rule","check_run","check_suite","code_scanning_alert","commit_comment","content_reference","create","delete","deployment","deployment_review","deployment_status","deploy_key","discussion","discussion_comment","fork","gollum","issues","issue_comment","label","member","membership","milestone","organization","org_block","page_build","project","project_card","project_column","public","pull_request","pull_request_review","pull_request_review_comment","push","registry_package","release","repository","repository_dispatch","secret_scanning_alert","star","status","team","team_add","watch","workflow_dispatch","workflow_run"],"type":"string"},"description":"The list of events for the GitHub app"},"external_url":{"type":["string","null"],"format":"uri"},"html_url":{"type":"string","format":"uri"},"id":{"type":["integer","null"],"description":"Unique identifier of the GitHub app"},"name":{"type":"string","description":"The name of the GitHub app"},"node_id":{"type":"string"},"owner":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"permissions":{"type":"object","properties":{"actions":{"enum":["read","write"],"type":"string"},"administration":{"enum":["read","write"],"type":"string"},"checks":{"enum":["read","write"],"type":"string"},"content_references":{"enum":["read","write"],"type":"string"},"contents":{"enum":["read","write"],"type":"string"},"deployments":{"enum":["read","write"],"type":"string"},"discussions":{"enum":["read","write"],"type":"string"},"emails":{"enum":["read","write"],"type":"string"},"environments":{"enum":["read","write"],"type":"string"},"issues":{"enum":["read","write"],"type":"string"},"keys":{"enum":["read","write"],"type":"string"},"members":{"enum":["read","write"],"type":"string"},"metadata":{"enum":["read","write"],"type":"string"},"organization_administration":{"enum":["read","write"],"type":"string"},"organization_hooks":{"enum":["read","write"],"type":"string"},"organization_packages":{"enum":["read","write"],"type":"string"},"organization_plan":{"enum":["read","write"],"type":"string"},"organization_projects":{"enum":["read","write"],"type":"string"},"organization_secrets":{"enum":["read","write"],"type":"string"},"organization_self_hosted_runners":{"enum":["read","write"],"type":"string"},"organization_user_blocking":{"enum":["read","write"],"type":"string"},"packages":{"enum":["read","write"],"type":"string"},"pages":{"enum":["read","write"],"type":"string"},"pull_requests":{"enum":["read","write"],"type":"string"},"repository_hooks":{"enum":["read","write"],"type":"string"},"repository_projects":{"enum":["read","write"],"type":"string"},"secret_scanning_alerts":{"enum":["read","write"],"type":"string"},"secrets":{"enum":["read","write"],"type":"string"},"security_events":{"enum":["read","write"],"type":"string"},"security_scanning_alert":{"enum":["read","write"],"type":"string"},"single_file":{"enum":["read","write"],"type":"string"},"statuses":{"enum":["read","write"],"type":"string"},"team_discussions":{"enum":["read","write"],"type":"string"},"vulnerability_alerts":{"enum":["read","write"],"type":"string"},"workflows":{"enum":["read","write"],"type":"string"}},"description":"The set of permissions for the GitHub app"},"slug":{"type":"string","description":"The slug name of the GitHub app"},"updated_at":{"type":["string","null"],"format":"date-time"}},"description":"GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub."},"pull_request":{"type":"object","properties":{"diff_url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"merged_at":{"type":["string","null"],"format":"date-time"},"patch_url":{"type":"string","format":"uri"},"url":{"type":"string","format":"uri"}}},"reactions":{"title":"Reactions","required":["url","total_count","+1","-1","laugh","confused","heart","hooray","eyes","rocket"],"type":"object","properties":{"+1":{"type":"integer"},"-1":{"type":"integer"},"confused":{"type":"integer"},"eyes":{"type":"integer"},"heart":{"type":"integer"},"hooray":{"type":"integer"},"laugh":{"type":"integer"},"rocket":{"type":"integer"},"total_count":{"type":"integer"},"url":{"type":"string","format":"uri"}}},"repository_url":{"type":"string","format":"uri"},"state":{"enum":["open","closed"],"type":"string","description":"State of the issue; either \'open\' or \'closed\'"},"state_reason":{"type":["string","null"]},"timeline_url":{"type":"string","format":"uri"},"title":{"type":"string","description":"Title of the issue"},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","description":"URL for the issue","format":"uri"},"user":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}}},"description":"The [issue](https:\\/\\/docs.github.com\\/github-ae@latest\\/rest\\/reference\\/issues) itself."},"new_repository":{"title":"Repository","required":["id","node_id","name","full_name","private","owner","html_url","description","fork","url","forks_url","keys_url","collaborators_url","teams_url","hooks_url","issue_events_url","events_url","assignees_url","branches_url","tags_url","blobs_url","git_tags_url","git_refs_url","trees_url","statuses_url","languages_url","stargazers_url","contributors_url","subscribers_url","subscription_url","commits_url","git_commits_url","comments_url","issue_comment_url","contents_url","compare_url","merges_url","archive_url","downloads_url","issues_url","pulls_url","milestones_url","notifications_url","labels_url","releases_url","deployments_url","created_at","updated_at","pushed_at","git_url","ssh_url","clone_url","svn_url","homepage","size","stargazers_count","watchers_count","language","has_issues","has_projects","has_downloads","has_wiki","has_pages","has_discussions","forks_count","mirror_url","archived","open_issues_count","license","forks","open_issues","watchers","default_branch","topics","visibility"],"type":"object","properties":{"allow_auto_merge":{"type":"boolean","description":"Whether to allow auto-merge for pull requests.","default":false},"allow_forking":{"type":"boolean","description":"Whether to allow private forks"},"allow_merge_commit":{"type":"boolean","description":"Whether to allow merge commits for pull requests.","default":true},"allow_rebase_merge":{"type":"boolean","description":"Whether to allow rebase merges for pull requests.","default":true},"allow_squash_merge":{"type":"boolean","description":"Whether to allow squash merges for pull requests.","default":true},"allow_update_branch":{"type":"boolean"},"archive_url":{"type":"string","format":"uri-template"},"archived":{"type":"boolean","description":"Whether the repository is archived.","default":false},"assignees_url":{"type":"string","format":"uri-template"},"blobs_url":{"type":"string","format":"uri-template"},"branches_url":{"type":"string","format":"uri-template"},"clone_url":{"type":"string","format":"uri"},"collaborators_url":{"type":"string","format":"uri-template"},"comments_url":{"type":"string","format":"uri-template"},"commits_url":{"type":"string","format":"uri-template"},"compare_url":{"type":"string","format":"uri-template"},"contents_url":{"type":"string","format":"uri-template"},"contributors_url":{"type":"string","format":"uri"},"created_at":{"oneOf":[{"type":"integer"},{"type":"string","format":"date-time"}]},"default_branch":{"type":"string","description":"The default branch of the repository."},"delete_branch_on_merge":{"type":"boolean","description":"Whether to delete head branches when pull requests are merged","default":false},"deployments_url":{"type":"string","format":"uri"},"description":{"type":["string","null"]},"disabled":{"type":"boolean","description":"Returns whether or not this repository is disabled."},"downloads_url":{"type":"string","format":"uri"},"events_url":{"type":"string","format":"uri"},"fork":{"type":"boolean"},"forks":{"type":"integer"},"forks_count":{"type":"integer"},"forks_url":{"type":"string","format":"uri"},"full_name":{"type":"string"},"git_commits_url":{"type":"string","format":"uri-template"},"git_refs_url":{"type":"string","format":"uri-template"},"git_tags_url":{"type":"string","format":"uri-template"},"git_url":{"type":"string","format":"uri"},"has_downloads":{"type":"boolean","description":"Whether downloads are enabled.","default":true},"has_issues":{"type":"boolean","description":"Whether issues are enabled.","default":true},"has_pages":{"type":"boolean"},"has_projects":{"type":"boolean","description":"Whether projects are enabled.","default":true},"has_wiki":{"type":"boolean","description":"Whether the wiki is enabled.","default":true},"has_discussions":{"type":"boolean","description":"Whether discussions are enabled.","default":false},"homepage":{"type":["string","null"]},"hooks_url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer","description":"Unique identifier of the repository"},"is_template":{"type":"boolean"},"issue_comment_url":{"type":"string","format":"uri-template"},"issue_events_url":{"type":"string","format":"uri-template"},"issues_url":{"type":"string","format":"uri-template"},"keys_url":{"type":"string","format":"uri-template"},"labels_url":{"type":"string","format":"uri-template"},"language":{"type":["string","null"]},"languages_url":{"type":"string","format":"uri"},"license":{"title":"License","required":["key","name","spdx_id","url","node_id"],"type":["object","null"],"properties":{"key":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"spdx_id":{"type":"string"},"url":{"type":["string","null"],"format":"uri"}}},"master_branch":{"type":"string"},"merges_url":{"type":"string","format":"uri"},"milestones_url":{"type":"string","format":"uri-template"},"mirror_url":{"type":["string","null"],"format":"uri"},"name":{"type":"string","description":"The name of the repository."},"node_id":{"type":"string"},"notifications_url":{"type":"string","format":"uri-template"},"open_issues":{"type":"integer"},"open_issues_count":{"type":"integer"},"organization":{"type":"string"},"owner":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"permissions":{"required":["pull","push","admin"],"type":"object","properties":{"admin":{"type":"boolean"},"maintain":{"type":"boolean"},"pull":{"type":"boolean"},"push":{"type":"boolean"},"triage":{"type":"boolean"}}},"private":{"type":"boolean","description":"Whether the repository is private or public."},"public":{"type":"boolean"},"pulls_url":{"type":"string","format":"uri-template"},"pushed_at":{"type":["null","integer","string"],"oneOf":[{"type":"integer"},{"type":"string","format":"date-time"}]},"releases_url":{"type":"string","format":"uri-template"},"role_name":{"type":["string","null"]},"size":{"type":"integer"},"ssh_url":{"type":"string"},"stargazers":{"type":"integer"},"stargazers_count":{"type":"integer"},"stargazers_url":{"type":"string","format":"uri"},"statuses_url":{"type":"string","format":"uri-template"},"subscribers_url":{"type":"string","format":"uri"},"subscription_url":{"type":"string","format":"uri"},"svn_url":{"type":"string","format":"uri"},"tags_url":{"type":"string","format":"uri"},"teams_url":{"type":"string","format":"uri"},"topics":{"type":"array","items":{"type":"string"}},"trees_url":{"type":"string","format":"uri-template"},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","format":"uri"},"visibility":{"enum":["public","private","internal"],"type":"string"},"watchers":{"type":"integer"},"watchers_count":{"type":"integer"},"web_commit_signoff_required":{"type":"boolean","description":"Whether to require contributors to sign off on web-based commits"}},"description":"A git repository"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"new_issue":{"active_lock_reason":"generated_active_lock_reason","assignee":{"avatar_url":"generated_avatar_url","deleted":false,"email":"generated_email","events_url":"generated_events_url","followers_url":"generated_followers_url","following_url":"generated_following_url","gists_url":"generated_gists_url","gravatar_id":"generated_gravatar_id","html_url":"generated_html_url","id":13,"login":"generated_login","name":"generated_name","node_id":"generated_node_id","organizations_url":"generated_organizations_url","received_events_url":"generated_received_events_url","repos_url":"generated_repos_url","site_admin":false,"starred_url":"generated_starred_url","subscriptions_url":"generated_subscriptions_url","type":"generated_type","url":"generated_url"},"assignees":[{"avatar_url":"generated_avatar_url","deleted":false,"email":"generated_email","events_url":"generated_events_url","followers_url":"generated_followers_url","following_url":"generated_following_url","gists_url":"generated_gists_url","gravatar_id":"generated_gravatar_id","html_url":"generated_html_url","id":13,"login":"generated_login","name":"generated_name","node_id":"generated_node_id","organizations_url":"generated_organizations_url","received_events_url":"generated_received_events_url","repos_url":"generated_repos_url","site_admin":false,"starred_url":"generated_starred_url","subscriptions_url":"generated_subscriptions_url","type":"generated_type","url":"generated_url"}],"author_association":"generated_author_association","body":"generated_body","closed_at":"generated_closed_at","comments":13,"comments_url":"generated_comments_url","created_at":"generated_created_at","draft":false,"events_url":"generated_events_url","html_url":"generated_html_url","id":13,"labels":[{"color":"generated_color","default":false,"description":"generated_description","id":13,"name":"generated_name","node_id":"generated_node_id","url":"generated_url"}],"labels_url":"generated_labels_url","locked":false,"milestone":{"closed_at":"generated_closed_at","closed_issues":13,"created_at":"generated_created_at","creator":{"avatar_url":"generated_avatar_url","deleted":false,"email":"generated_email","events_url":"generated_events_url","followers_url":"generated_followers_url","following_url":"generated_following_url","gists_url":"generated_gists_url","gravatar_id":"generated_gravatar_id","html_url":"generated_html_url","id":13,"login":"generated_login","name":"generated_name","node_id":"generated_node_id","organizations_url":"generated_organizations_url","received_events_url":"generated_received_events_url","repos_url":"generated_repos_url","site_admin":false,"starred_url":"generated_starred_url","subscriptions_url":"generated_subscriptions_url","type":"generated_type","url":"generated_url"},"description":"generated_description","due_on":"generated_due_on","html_url":"generated_html_url","id":13,"labels_url":"generated_labels_url","node_id":"generated_node_id","number":13,"open_issues":13,"state":"generated_state","title":"generated_title","updated_at":"generated_updated_at","url":"generated_url"},"node_id":"generated_node_id","number":13,"performed_via_github_app":{"created_at":"generated_created_at","description":"generated_description","events":["generated_events"],"external_url":"generated_external_url","html_url":"generated_html_url","id":13,"name":"generated_name","node_id":"generated_node_id","owner":{"avatar_url":"generated_avatar_url","deleted":false,"email":"generated_email","events_url":"generated_events_url","followers_url":"generated_followers_url","following_url":"generated_following_url","gists_url":"generated_gists_url","gravatar_id":"generated_gravatar_id","html_url":"generated_html_url","id":13,"login":"generated_login","name":"generated_name","node_id":"generated_node_id","organizations_url":"generated_organizations_url","received_events_url":"generated_received_events_url","repos_url":"generated_repos_url","site_admin":false,"starred_url":"generated_starred_url","subscriptions_url":"generated_subscriptions_url","type":"generated_type","url":"generated_url"},"permissions":{"actions":"generated_actions","administration":"generated_administration","checks":"generated_checks","content_references":"generated_content_references","contents":"generated_contents","deployments":"generated_deployments","discussions":"generated_discussions","emails":"generated_emails","environments":"generated_environments","issues":"generated_issues","keys":"generated_keys","members":"generated_members","metadata":"generated_metadata","organization_administration":"generated_organization_administration","organization_hooks":"generated_organization_hooks","organization_packages":"generated_organization_packages","organization_plan":"generated_organization_plan","organization_projects":"generated_organization_projects","organization_secrets":"generated_organization_secrets","organization_self_hosted_runners":"generated_organization_self_hosted_runners","organization_user_blocking":"generated_organization_user_blocking","packages":"generated_packages","pages":"generated_pages","pull_requests":"generated_pull_requests","repository_hooks":"generated_repository_hooks","repository_projects":"generated_repository_projects","secret_scanning_alerts":"generated_secret_scanning_alerts","secrets":"generated_secrets","security_events":"generated_security_events","security_scanning_alert":"generated_security_scanning_alert","single_file":"generated_single_file","statuses":"generated_statuses","team_discussions":"generated_team_discussions","vulnerability_alerts":"generated_vulnerability_alerts","workflows":"generated_workflows"},"slug":"generated_slug","updated_at":"generated_updated_at"},"pull_request":{"diff_url":"generated_diff_url","html_url":"generated_html_url","merged_at":"generated_merged_at","patch_url":"generated_patch_url","url":"generated_url"},"reactions":{"_PLUSES_1":13,"_MINUS_1":13,"confused":13,"eyes":13,"heart":13,"hooray":13,"laugh":13,"rocket":13,"total_count":13,"url":"generated_url"},"repository_url":"generated_repository_url","state":"generated_state","state_reason":"generated_state_reason","timeline_url":"generated_timeline_url","title":"generated_title","updated_at":"generated_updated_at","url":"generated_url","user":{"avatar_url":"generated_avatar_url","deleted":false,"email":"generated_email","events_url":"generated_events_url","followers_url":"generated_followers_url","following_url":"generated_following_url","gists_url":"generated_gists_url","gravatar_id":"generated_gravatar_id","html_url":"generated_html_url","id":13,"login":"generated_login","name":"generated_name","node_id":"generated_node_id","organizations_url":"generated_organizations_url","received_events_url":"generated_received_events_url","repos_url":"generated_repos_url","site_admin":false,"starred_url":"generated_starred_url","subscriptions_url":"generated_subscriptions_url","type":"generated_type","url":"generated_url"}},"new_repository":{"allow_auto_merge":false,"allow_forking":false,"allow_merge_commit":false,"allow_rebase_merge":false,"allow_squash_merge":false,"allow_update_branch":false,"archive_url":"generated_archive_url","archived":false,"assignees_url":"generated_assignees_url","blobs_url":"generated_blobs_url","branches_url":"generated_branches_url","clone_url":"generated_clone_url","collaborators_url":"generated_collaborators_url","comments_url":"generated_comments_url","commits_url":"generated_commits_url","compare_url":"generated_compare_url","contents_url":"generated_contents_url","contributors_url":"generated_contributors_url","created_at":13,"default_branch":"generated_default_branch","delete_branch_on_merge":false,"deployments_url":"generated_deployments_url","description":"generated_description","disabled":false,"downloads_url":"generated_downloads_url","events_url":"generated_events_url","fork":false,"forks":13,"forks_count":13,"forks_url":"generated_forks_url","full_name":"generated_full_name","git_commits_url":"generated_git_commits_url","git_refs_url":"generated_git_refs_url","git_tags_url":"generated_git_tags_url","git_url":"generated_git_url","has_downloads":false,"has_issues":false,"has_pages":false,"has_projects":false,"has_wiki":false,"has_discussions":false,"homepage":"generated_homepage","hooks_url":"generated_hooks_url","html_url":"generated_html_url","id":13,"is_template":false,"issue_comment_url":"generated_issue_comment_url","issue_events_url":"generated_issue_events_url","issues_url":"generated_issues_url","keys_url":"generated_keys_url","labels_url":"generated_labels_url","language":"generated_language","languages_url":"generated_languages_url","license":{"key":"generated_key","name":"generated_name","node_id":"generated_node_id","spdx_id":"generated_spdx_id","url":"generated_url"},"master_branch":"generated_master_branch","merges_url":"generated_merges_url","milestones_url":"generated_milestones_url","mirror_url":"generated_mirror_url","name":"generated_name","node_id":"generated_node_id","notifications_url":"generated_notifications_url","open_issues":13,"open_issues_count":13,"organization":"generated_organization","owner":{"avatar_url":"generated_avatar_url","deleted":false,"email":"generated_email","events_url":"generated_events_url","followers_url":"generated_followers_url","following_url":"generated_following_url","gists_url":"generated_gists_url","gravatar_id":"generated_gravatar_id","html_url":"generated_html_url","id":13,"login":"generated_login","name":"generated_name","node_id":"generated_node_id","organizations_url":"generated_organizations_url","received_events_url":"generated_received_events_url","repos_url":"generated_repos_url","site_admin":false,"starred_url":"generated_starred_url","subscriptions_url":"generated_subscriptions_url","type":"generated_type","url":"generated_url"},"permissions":{"admin":false,"maintain":false,"pull":false,"push":false,"triage":false},"private":false,"public":false,"pulls_url":"generated_pulls_url","pushed_at":13,"releases_url":"generated_releases_url","role_name":"generated_role_name","size":13,"ssh_url":"generated_ssh_url","stargazers":13,"stargazers_count":13,"stargazers_url":"generated_stargazers_url","statuses_url":"generated_statuses_url","subscribers_url":"generated_subscribers_url","subscription_url":"generated_subscription_url","svn_url":"generated_svn_url","tags_url":"generated_tags_url","teams_url":"generated_teams_url","topics":["generated_topics"],"trees_url":"generated_trees_url","updated_at":"generated_updated_at","url":"generated_url","visibility":"generated_visibility","watchers":13,"watchers_count":13,"web_commit_signoff_required":false}}';
    /**
     * new_issue: The [issue](https://docs.github.com/github-ae@latest/rest/reference/issues) itself.
     * new_repository: A git repository
     */
    public function __construct(public ?Schema\WebhookIssuesPinned\Issue $new_issue, public ?Schema\WebhookIssuesTransferred\Changes\NewRepository $new_repository)
    {
    }
}
