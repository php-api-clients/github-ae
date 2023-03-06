<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookCheckSuiteCompleted\CheckSuite\App;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Permissions
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"actions":{"enum":["read","write"],"type":"string"},"administration":{"enum":["read","write"],"type":"string"},"checks":{"enum":["read","write"],"type":"string"},"content_references":{"enum":["read","write"],"type":"string"},"contents":{"enum":["read","write"],"type":"string"},"deployments":{"enum":["read","write"],"type":"string"},"discussions":{"enum":["read","write"],"type":"string"},"emails":{"enum":["read","write"],"type":"string"},"environments":{"enum":["read","write"],"type":"string"},"issues":{"enum":["read","write"],"type":"string"},"keys":{"enum":["read","write"],"type":"string"},"members":{"enum":["read","write"],"type":"string"},"metadata":{"enum":["read","write"],"type":"string"},"organization_administration":{"enum":["read","write"],"type":"string"},"organization_hooks":{"enum":["read","write"],"type":"string"},"organization_packages":{"enum":["read","write"],"type":"string"},"organization_plan":{"enum":["read","write"],"type":"string"},"organization_projects":{"enum":["read","write","admin"],"type":"string"},"organization_secrets":{"enum":["read","write"],"type":"string"},"organization_self_hosted_runners":{"enum":["read","write"],"type":"string"},"organization_user_blocking":{"enum":["read","write"],"type":"string"},"packages":{"enum":["read","write"],"type":"string"},"pages":{"enum":["read","write"],"type":"string"},"pull_requests":{"enum":["read","write"],"type":"string"},"repository_hooks":{"enum":["read","write"],"type":"string"},"repository_projects":{"enum":["read","write","admin"],"type":"string"},"secret_scanning_alerts":{"enum":["read","write"],"type":"string"},"secrets":{"enum":["read","write"],"type":"string"},"security_events":{"enum":["read","write"],"type":"string"},"security_scanning_alert":{"enum":["read","write"],"type":"string"},"single_file":{"enum":["read","write"],"type":"string"},"statuses":{"enum":["read","write"],"type":"string"},"team_discussions":{"enum":["read","write"],"type":"string"},"vulnerability_alerts":{"enum":["read","write"],"type":"string"},"workflows":{"enum":["read","write"],"type":"string"}},"description":"The set of permissions for the GitHub app"}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The set of permissions for the GitHub app';
    public const SCHEMA_EXAMPLE_DATA = '{"actions":"generated_actions","administration":"generated_administration","checks":"generated_checks","content_references":"generated_content_references","contents":"generated_contents","deployments":"generated_deployments","discussions":"generated_discussions","emails":"generated_emails","environments":"generated_environments","issues":"generated_issues","keys":"generated_keys","members":"generated_members","metadata":"generated_metadata","organization_administration":"generated_organization_administration","organization_hooks":"generated_organization_hooks","organization_packages":"generated_organization_packages","organization_plan":"generated_organization_plan","organization_projects":"generated_organization_projects","organization_secrets":"generated_organization_secrets","organization_self_hosted_runners":"generated_organization_self_hosted_runners","organization_user_blocking":"generated_organization_user_blocking","packages":"generated_packages","pages":"generated_pages","pull_requests":"generated_pull_requests","repository_hooks":"generated_repository_hooks","repository_projects":"generated_repository_projects","secret_scanning_alerts":"generated_secret_scanning_alerts","secrets":"generated_secrets","security_events":"generated_security_events","security_scanning_alert":"generated_security_scanning_alert","single_file":"generated_single_file","statuses":"generated_statuses","team_discussions":"generated_team_discussions","vulnerability_alerts":"generated_vulnerability_alerts","workflows":"generated_workflows"}';
    public function __construct(public ?string $actions, public ?string $administration, public ?string $checks, public ?string $content_references, public ?string $contents, public ?string $deployments, public ?string $discussions, public ?string $emails, public ?string $environments, public ?string $issues, public ?string $keys, public ?string $members, public ?string $metadata, public ?string $organization_administration, public ?string $organization_hooks, public ?string $organization_packages, public ?string $organization_plan, public ?string $organization_projects, public ?string $organization_secrets, public ?string $organization_self_hosted_runners, public ?string $organization_user_blocking, public ?string $packages, public ?string $pages, public ?string $pull_requests, public ?string $repository_hooks, public ?string $repository_projects, public ?string $secret_scanning_alerts, public ?string $secrets, public ?string $security_events, public ?string $security_scanning_alert, public ?string $single_file, public ?string $statuses, public ?string $team_discussions, public ?string $vulnerability_alerts, public ?string $workflows)
    {
    }
}
