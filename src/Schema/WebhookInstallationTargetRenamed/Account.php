<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookInstallationTargetRenamed;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Account
{
    public const SCHEMA_JSON = '{"required":["id","node_id","avatar_url","html_url"],"type":"object","properties":{"avatar_url":{"type":"string"},"created_at":{"type":"string"},"description":{"type":["null"]},"events_url":{"type":"string"},"followers":{"type":"integer"},"followers_url":{"type":"string"},"following":{"type":"integer"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"has_organization_projects":{"type":"boolean"},"has_repository_projects":{"type":"boolean"},"hooks_url":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"is_verified":{"type":"boolean"},"issues_url":{"type":"string"},"login":{"type":"string"},"members_url":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"public_gists":{"type":"integer"},"public_members_url":{"type":"string"},"public_repos":{"type":"integer"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"slug":{"type":"string"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"updated_at":{"type":"string"},"url":{"type":"string"},"website_url":{"type":["null"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"avatar_url":"generated_avatar_url_null","created_at":"generated_created_at_null","description":null,"events_url":"generated_events_url_null","followers":13,"followers_url":"generated_followers_url_null","following":13,"following_url":"generated_following_url_null","gists_url":"generated_gists_url_null","gravatar_id":"generated_gravatar_id_null","has_organization_projects":false,"has_repository_projects":false,"hooks_url":"generated_hooks_url_null","html_url":"generated_html_url_null","id":13,"is_verified":false,"issues_url":"generated_issues_url_null","login":"generated_login_null","members_url":"generated_members_url_null","name":"generated_name_null","node_id":"generated_node_id_null","organizations_url":"generated_organizations_url_null","public_gists":13,"public_members_url":"generated_public_members_url_null","public_repos":13,"received_events_url":"generated_received_events_url_null","repos_url":"generated_repos_url_null","site_admin":false,"slug":"generated_slug_null","starred_url":"generated_starred_url_null","subscriptions_url":"generated_subscriptions_url_null","type":"generated_type_null","updated_at":"generated_updated_at_null","url":"generated_url_null","website_url":null}';
    public function __construct(public string $avatar_url, public ?string $created_at, public mixed $description, public ?string $events_url, public ?int $followers, public ?string $followers_url, public ?int $following, public ?string $following_url, public ?string $gists_url, public ?string $gravatar_id, public ?bool $has_organization_projects, public ?bool $has_repository_projects, public ?string $hooks_url, public string $html_url, public int $id, public ?bool $is_verified, public ?string $issues_url, public ?string $login, public ?string $members_url, public ?string $name, public string $node_id, public ?string $organizations_url, public ?int $public_gists, public ?string $public_members_url, public ?int $public_repos, public ?string $received_events_url, public ?string $repos_url, public ?bool $site_admin, public ?string $slug, public ?string $starred_url, public ?string $subscriptions_url, public ?string $type, public ?string $updated_at, public ?string $url, public mixed $website_url)
    {
    }
}
