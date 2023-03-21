<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookCheckSuiteCompleted;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class CheckSuite
{
    public const SCHEMA_JSON = '{"required":["id","node_id","head_branch","head_sha","status","conclusion","url","before","after","pull_requests","app","created_at","updated_at","latest_check_runs_count","check_runs_url","head_commit"],"type":"object","properties":{"after":{"type":["string","null"]},"app":{"title":"App","required":["id","node_id","owner","name","description","external_url","html_url","created_at","updated_at"],"type":"object","properties":{"created_at":{"type":["string","null"],"format":"date-time"},"description":{"type":["string","null"]},"events":{"type":"array","items":{"enum":["branch_protection_rule","check_run","check_suite","code_scanning_alert","commit_comment","content_reference","create","delete","deployment","deployment_review","deployment_status","deploy_key","discussion","discussion_comment","fork","gollum","issues","issue_comment","label","member","membership","milestone","organization","org_block","page_build","project","project_card","project_column","public","pull_request","pull_request_review","pull_request_review_comment","push","registry_package","release","repository","repository_dispatch","secret_scanning_alert","star","status","team","team_add","watch","workflow_dispatch","workflow_run","merge_group","pull_request_review_thread","workflow_job","merge_queue_entry","security_and_analysis","projects_v2_item","secret_scanning_alert_location"],"type":"string"},"description":"The list of events for the GitHub app"},"external_url":{"type":["string","null"],"format":"uri"},"html_url":{"type":"string","format":"uri"},"id":{"type":["integer","null"],"description":"Unique identifier of the GitHub app"},"name":{"type":"string","description":"The name of the GitHub app"},"node_id":{"type":"string"},"owner":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"permissions":{"type":"object","properties":{"actions":{"enum":["read","write"],"type":"string"},"administration":{"enum":["read","write"],"type":"string"},"checks":{"enum":["read","write"],"type":"string"},"content_references":{"enum":["read","write"],"type":"string"},"contents":{"enum":["read","write"],"type":"string"},"deployments":{"enum":["read","write"],"type":"string"},"discussions":{"enum":["read","write"],"type":"string"},"emails":{"enum":["read","write"],"type":"string"},"environments":{"enum":["read","write"],"type":"string"},"issues":{"enum":["read","write"],"type":"string"},"keys":{"enum":["read","write"],"type":"string"},"members":{"enum":["read","write"],"type":"string"},"metadata":{"enum":["read","write"],"type":"string"},"organization_administration":{"enum":["read","write"],"type":"string"},"organization_hooks":{"enum":["read","write"],"type":"string"},"organization_packages":{"enum":["read","write"],"type":"string"},"organization_plan":{"enum":["read","write"],"type":"string"},"organization_projects":{"enum":["read","write","admin"],"type":"string"},"organization_secrets":{"enum":["read","write"],"type":"string"},"organization_self_hosted_runners":{"enum":["read","write"],"type":"string"},"organization_user_blocking":{"enum":["read","write"],"type":"string"},"packages":{"enum":["read","write"],"type":"string"},"pages":{"enum":["read","write"],"type":"string"},"pull_requests":{"enum":["read","write"],"type":"string"},"repository_hooks":{"enum":["read","write"],"type":"string"},"repository_projects":{"enum":["read","write","admin"],"type":"string"},"secret_scanning_alerts":{"enum":["read","write"],"type":"string"},"secrets":{"enum":["read","write"],"type":"string"},"security_events":{"enum":["read","write"],"type":"string"},"security_scanning_alert":{"enum":["read","write"],"type":"string"},"single_file":{"enum":["read","write"],"type":"string"},"statuses":{"enum":["read","write"],"type":"string"},"team_discussions":{"enum":["read","write"],"type":"string"},"vulnerability_alerts":{"enum":["read","write"],"type":"string"},"workflows":{"enum":["read","write"],"type":"string"}},"description":"The set of permissions for the GitHub app"},"slug":{"type":"string","description":"The slug name of the GitHub app"},"updated_at":{"type":["string","null"],"format":"date-time"}},"description":"GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub."},"before":{"type":["string","null"]},"check_runs_url":{"type":"string","format":"uri"},"conclusion":{"enum":["success","failure","neutral","cancelled","timed_out","action_required","stale",null,"skipped","startup_failure"],"type":["string","null"],"description":"The summary conclusion for all check runs that are part of the check suite. Can be one of `success`, `failure`, `neutral`, `cancelled`, `timed_out`, `action_required` or `stale`. This value will be `null` until the check run has `completed`."},"created_at":{"type":"string","format":"date-time"},"head_branch":{"type":["string","null"],"description":"The head branch name the changes are on."},"head_commit":{"title":"SimpleCommit","required":["id","tree_id","message","timestamp","author","committer"],"type":"object","properties":{"author":{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},"committer":{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},"id":{"type":"string"},"message":{"type":"string"},"timestamp":{"type":"string"},"tree_id":{"type":"string"}}},"head_sha":{"type":"string","description":"The SHA of the head commit that is being checked."},"id":{"type":"integer"},"latest_check_runs_count":{"type":"integer"},"node_id":{"type":"string"},"pull_requests":{"type":"array","items":{"title":"Check Run Pull Request","required":["url","id","number","head","base"],"type":"object","properties":{"base":{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"repo":{"title":"Repo Ref","required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}},"sha":{"type":"string"}}},"head":{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"repo":{"title":"Repo Ref","required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}},"sha":{"type":"string"}}},"id":{"type":"integer"},"number":{"type":"integer"},"url":{"type":"string","format":"uri"}}},"description":"An array of pull requests that match this check suite. A pull request matches a check suite if they have the same `head_sha` and `head_branch`. When the check suite\'s `head_branch` is in a forked repository it will be `null` and the `pull_requests` array will be empty."},"rerequestable":{"type":"boolean"},"runs_rerequestable":{"type":"boolean"},"status":{"enum":["requested","in_progress","completed","queued",null,"pending"],"type":["string","null"],"description":"The summary status for all check runs that are part of the check suite. Can be `requested`, `in_progress`, or `completed`."},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","description":"URL that points to the check suite API resource.","format":"uri"}},"description":"The [check_suite](https:\\/\\/docs.github.com\\/github-ae@latest\\/rest\\/reference\\/checks#suites)."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The [check_suite](https://docs.github.com/github-ae@latest/rest/reference/checks#suites).';
    public const SCHEMA_EXAMPLE_DATA = '{"after":"generated_after_null","app":{"created_at":"1970-01-01T00:00:00+00:00","description":"generated_description_null","events":["generated_events_null"],"external_url":"https:\\/\\/example.com\\/","html_url":"https:\\/\\/example.com\\/","id":13,"name":"generated_name_null","node_id":"generated_node_id_null","owner":{"avatar_url":"https:\\/\\/example.com\\/","deleted":false,"email":"generated_email_null","events_url":"generated_events_url_uri-template","followers_url":"https:\\/\\/example.com\\/","following_url":"generated_following_url_uri-template","gists_url":"generated_gists_url_uri-template","gravatar_id":"generated_gravatar_id_null","html_url":"https:\\/\\/example.com\\/","id":13,"login":"generated_login_null","name":"generated_name_null","node_id":"generated_node_id_null","organizations_url":"https:\\/\\/example.com\\/","received_events_url":"https:\\/\\/example.com\\/","repos_url":"https:\\/\\/example.com\\/","site_admin":false,"starred_url":"generated_starred_url_uri-template","subscriptions_url":"https:\\/\\/example.com\\/","type":"generated_type_null","url":"https:\\/\\/example.com\\/"},"permissions":{"actions":"generated_actions_null","administration":"generated_administration_null","checks":"generated_checks_null","content_references":"generated_content_references_null","contents":"generated_contents_null","deployments":"generated_deployments_null","discussions":"generated_discussions_null","emails":"generated_emails_null","environments":"generated_environments_null","issues":"generated_issues_null","keys":"generated_keys_null","members":"generated_members_null","metadata":"generated_metadata_null","organization_administration":"generated_organization_administration_null","organization_hooks":"generated_organization_hooks_null","organization_packages":"generated_organization_packages_null","organization_plan":"generated_organization_plan_null","organization_projects":"generated_organization_projects_null","organization_secrets":"generated_organization_secrets_null","organization_self_hosted_runners":"generated_organization_self_hosted_runners_null","organization_user_blocking":"generated_organization_user_blocking_null","packages":"generated_packages_null","pages":"generated_pages_null","pull_requests":"generated_pull_requests_null","repository_hooks":"generated_repository_hooks_null","repository_projects":"generated_repository_projects_null","secret_scanning_alerts":"generated_secret_scanning_alerts_null","secrets":"generated_secrets_null","security_events":"generated_security_events_null","security_scanning_alert":"generated_security_scanning_alert_null","single_file":"generated_single_file_null","statuses":"generated_statuses_null","team_discussions":"generated_team_discussions_null","vulnerability_alerts":"generated_vulnerability_alerts_null","workflows":"generated_workflows_null"},"slug":"generated_slug_null","updated_at":"1970-01-01T00:00:00+00:00"},"before":"generated_before_null","check_runs_url":"https:\\/\\/example.com\\/","conclusion":"generated_conclusion_null","created_at":"1970-01-01T00:00:00+00:00","head_branch":"generated_head_branch_null","head_commit":{"author":{"date":"1970-01-01T00:00:00+00:00","email":"generated_email_email","name":"generated_name_null","username":"generated_username_null"},"committer":{"date":"1970-01-01T00:00:00+00:00","email":"generated_email_email","name":"generated_name_null","username":"generated_username_null"},"id":"generated_id_null","message":"generated_message_null","timestamp":"generated_timestamp_null","tree_id":"generated_tree_id_null"},"head_sha":"generated_head_sha_null","id":13,"latest_check_runs_count":13,"node_id":"generated_node_id_null","pull_requests":[{"base":{"ref":"generated_ref_null","repo":{"id":13,"name":"generated_name_null","url":"https:\\/\\/example.com\\/"},"sha":"generated_sha_null"},"head":{"ref":"generated_ref_null","repo":{"id":13,"name":"generated_name_null","url":"https:\\/\\/example.com\\/"},"sha":"generated_sha_null"},"id":13,"number":13,"url":"https:\\/\\/example.com\\/"}],"rerequestable":false,"runs_rerequestable":false,"status":"generated_status_null","updated_at":"1970-01-01T00:00:00+00:00","url":"https:\\/\\/example.com\\/"}';
    /**
     * app: GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub.
     * conclusion: The summary conclusion for all check runs that are part of the check suite. Can be one of `success`, `failure`, `neutral`, `cancelled`, `timed_out`, `action_required` or `stale`. This value will be `null` until the check run has `completed`.
     * head_branch: The head branch name the changes are on.
     * head_sha: The SHA of the head commit that is being checked.
     * pull_requests: An array of pull requests that match this check suite. A pull request matches a check suite if they have the same `head_sha` and `head_branch`. When the check suite's `head_branch` is in a forked repository it will be `null` and the `pull_requests` array will be empty.
     * @param array<\ApiClients\Client\GitHubAE\Schema\WebhookCheckSuiteCompleted\CheckSuite\PullRequests> $pull_requests
     * status: The summary status for all check runs that are part of the check suite. Can be `requested`, `in_progress`, or `completed`.
     * url: URL that points to the check suite API resource.
     */
    public function __construct(public ?string $after, public Schema\WebhookCheckSuiteCompleted\CheckSuite\App $app, public ?string $before, public string $check_runs_url, public ?string $conclusion, public string $created_at, public ?string $head_branch, public Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit $head_commit, public string $head_sha, public int $id, public int $latest_check_runs_count, public string $node_id, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\WebhookCheckSuiteCompleted\CheckSuite\PullRequests::class)] public array $pull_requests, public ?bool $rerequestable, public ?bool $runs_rerequestable, public ?string $status, public string $updated_at, public string $url)
    {
    }
}
