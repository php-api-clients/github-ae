<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookCheckSuiteRequested\CheckSuite;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class App
{
    public const SCHEMA_JSON = '{"title":"App","required":["id","node_id","owner","name","description","external_url","html_url","created_at","updated_at"],"type":"object","properties":{"created_at":{"type":["string","null"],"format":"date-time"},"description":{"type":["string","null"]},"events":{"type":"array","items":{"enum":["branch_protection_rule","check_run","check_suite","code_scanning_alert","commit_comment","content_reference","create","delete","deployment","deployment_review","deployment_status","deploy_key","discussion","discussion_comment","fork","gollum","issues","issue_comment","label","member","membership","milestone","organization","org_block","page_build","project","project_card","project_column","public","pull_request","pull_request_review","pull_request_review_comment","push","registry_package","release","repository","repository_dispatch","secret_scanning_alert","star","status","team","team_add","watch","workflow_dispatch","workflow_run","pull_request_review_thread","workflow_job","merge_queue_entry","security_and_analysis","secret_scanning_alert_location","projects_v2_item","merge_group","repository_import"],"type":"string"},"description":"The list of events for the GitHub app"},"external_url":{"type":["string","null"],"format":"uri"},"html_url":{"type":"string","format":"uri"},"id":{"type":["integer","null"],"description":"Unique identifier of the GitHub app"},"name":{"type":"string","description":"The name of the GitHub app"},"node_id":{"type":"string"},"owner":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"permissions":{"type":"object","properties":{"actions":{"enum":["read","write"],"type":"string"},"administration":{"enum":["read","write"],"type":"string"},"checks":{"enum":["read","write"],"type":"string"},"content_references":{"enum":["read","write"],"type":"string"},"contents":{"enum":["read","write"],"type":"string"},"deployments":{"enum":["read","write"],"type":"string"},"discussions":{"enum":["read","write"],"type":"string"},"emails":{"enum":["read","write"],"type":"string"},"environments":{"enum":["read","write"],"type":"string"},"issues":{"enum":["read","write"],"type":"string"},"keys":{"enum":["read","write"],"type":"string"},"members":{"enum":["read","write"],"type":"string"},"metadata":{"enum":["read","write"],"type":"string"},"organization_administration":{"enum":["read","write"],"type":"string"},"organization_hooks":{"enum":["read","write"],"type":"string"},"organization_packages":{"enum":["read","write"],"type":"string"},"organization_plan":{"enum":["read","write"],"type":"string"},"organization_projects":{"enum":["read","write","admin"],"type":"string"},"organization_secrets":{"enum":["read","write"],"type":"string"},"organization_self_hosted_runners":{"enum":["read","write"],"type":"string"},"organization_user_blocking":{"enum":["read","write"],"type":"string"},"packages":{"enum":["read","write"],"type":"string"},"pages":{"enum":["read","write"],"type":"string"},"pull_requests":{"enum":["read","write"],"type":"string"},"repository_hooks":{"enum":["read","write"],"type":"string"},"repository_projects":{"enum":["read","write","admin"],"type":"string"},"secret_scanning_alerts":{"enum":["read","write"],"type":"string"},"secrets":{"enum":["read","write"],"type":"string"},"security_events":{"enum":["read","write"],"type":"string"},"security_scanning_alert":{"enum":["read","write"],"type":"string"},"single_file":{"enum":["read","write"],"type":"string"},"statuses":{"enum":["read","write"],"type":"string"},"team_discussions":{"enum":["read","write"],"type":"string"},"vulnerability_alerts":{"enum":["read","write"],"type":"string"},"workflows":{"enum":["read","write"],"type":"string"}},"description":"The set of permissions for the GitHub app"},"slug":{"type":"string","description":"The slug name of the GitHub app"},"updated_at":{"type":["string","null"],"format":"date-time"}},"description":"GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub."}';
    public const SCHEMA_TITLE = 'App';
    public const SCHEMA_DESCRIPTION = 'GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub.';
    public const SCHEMA_EXAMPLE_DATA = '{"created_at":"1970-01-01T00:00:00+00:00","description":"generated_description_null","events":["generated_events_null"],"external_url":"https:\\/\\/example.com\\/","html_url":"https:\\/\\/example.com\\/","id":13,"name":"generated_name_null","node_id":"generated_node_id_null","owner":{"avatar_url":"https:\\/\\/example.com\\/","deleted":false,"email":"generated_email_null","events_url":"generated_events_url_uri-template","followers_url":"https:\\/\\/example.com\\/","following_url":"generated_following_url_uri-template","gists_url":"generated_gists_url_uri-template","gravatar_id":"generated_gravatar_id_null","html_url":"https:\\/\\/example.com\\/","id":13,"login":"generated_login_null","name":"generated_name_null","node_id":"generated_node_id_null","organizations_url":"https:\\/\\/example.com\\/","received_events_url":"https:\\/\\/example.com\\/","repos_url":"https:\\/\\/example.com\\/","site_admin":false,"starred_url":"generated_starred_url_uri-template","subscriptions_url":"https:\\/\\/example.com\\/","type":"Bot","url":"https:\\/\\/example.com\\/"},"permissions":{"actions":"read","administration":"read","checks":"read","content_references":"read","contents":"read","deployments":"read","discussions":"read","emails":"read","environments":"read","issues":"read","keys":"read","members":"read","metadata":"read","organization_administration":"read","organization_hooks":"read","organization_packages":"read","organization_plan":"read","organization_projects":"read","organization_secrets":"read","organization_self_hosted_runners":"read","organization_user_blocking":"read","packages":"read","pages":"read","pull_requests":"read","repository_hooks":"read","repository_projects":"read","secret_scanning_alerts":"read","secrets":"read","security_events":"read","security_scanning_alert":"read","single_file":"read","statuses":"read","team_discussions":"read","vulnerability_alerts":"read","workflows":"read"},"slug":"generated_slug_null","updated_at":"1970-01-01T00:00:00+00:00"}';
    /**
     * events: The list of events for the GitHub app
     * @param ?array<string> $events
     * id: Unique identifier of the GitHub app
     * name: The name of the GitHub app
     * permissions: The set of permissions for the GitHub app
     * slug: The slug name of the GitHub app
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('created_at')] public ?string $createdAt, public ?string $description, public ?array $events, #[\EventSauce\ObjectHydrator\MapFrom('external_url')] public ?string $externalUrl, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public string $htmlUrl, public ?int $id, public string $name, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, public ?Schema\Discussion\AnswerChosenBy $owner, public ?Schema\WebhookCheckSuiteCompleted\CheckSuite\App\Permissions $permissions, public ?string $slug, #[\EventSauce\ObjectHydrator\MapFrom('updated_at')] public ?string $updatedAt)
    {
    }
}
