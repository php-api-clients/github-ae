<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookRegistryPackageUpdated\RegistryPackage;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class PackageVersion
{
    public const SCHEMA_JSON = '{"required":["id","version","name","description","summary","body","body_html","html_url","target_commitish","target_oid","created_at","updated_at","metadata","package_files","author","installation_command","package_url"],"type":"object","properties":{"author":{"required":["login","id","node_id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin"],"type":"object","properties":{"avatar_url":{"type":"string"},"events_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"}}},"body":{"type":"string"},"body_html":{"type":"string"},"created_at":{"type":"string"},"description":{"type":"string"},"docker_metadata":{"type":"array","items":{"type":["null"]}},"draft":{"type":"boolean"},"html_url":{"type":"string"},"id":{"type":"integer"},"installation_command":{"type":"string"},"manifest":{"type":"string"},"metadata":{"type":"array","items":{}},"name":{"type":"string"},"package_files":{"type":"array","items":{"type":"object","properties":{"content_type":{"type":"string"},"created_at":{"type":"string"},"download_url":{"type":"string"},"id":{"type":"integer"},"md5":{"type":["string","null"]},"name":{"type":"string"},"sha1":{"type":["string","null"]},"sha256":{"type":"string"},"size":{"type":"integer"},"state":{"type":"string"},"updated_at":{"type":"string"}}}},"package_url":{"type":"string"},"prerelease":{"type":"boolean"},"release":{"required":["url","html_url","id","tag_name","target_commitish","name","draft","author","prerelease","created_at","published_at"],"type":"object","properties":{"author":{"required":["login","id","node_id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin"],"type":"object","properties":{"avatar_url":{"type":"string"},"events_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"}}},"created_at":{"type":"string"},"draft":{"type":"boolean"},"html_url":{"type":"string"},"id":{"type":"integer"},"name":{"type":"string"},"prerelease":{"type":"boolean"},"published_at":{"type":"string"},"tag_name":{"type":"string"},"target_commitish":{"type":"string"},"url":{"type":"string"}}},"rubygems_metadata":{"type":"array","items":{}},"summary":{"type":"string"},"tag_name":{"type":"string"},"target_commitish":{"type":"string"},"target_oid":{"type":"string"},"updated_at":{"type":"string"},"version":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"author":{"avatar_url":"generated_avatar_url","events_url":"generated_events_url","followers_url":"generated_followers_url","following_url":"generated_following_url","gists_url":"generated_gists_url","gravatar_id":"generated_gravatar_id","html_url":"generated_html_url","id":13,"login":"generated_login","node_id":"generated_node_id","organizations_url":"generated_organizations_url","received_events_url":"generated_received_events_url","repos_url":"generated_repos_url","site_admin":false,"starred_url":"generated_starred_url","subscriptions_url":"generated_subscriptions_url","type":"generated_type","url":"generated_url"},"body":"generated_body","body_html":"generated_body_html","created_at":"generated_created_at","description":"generated_description","docker_metadata":[null],"draft":false,"html_url":"generated_html_url","id":13,"installation_command":"generated_installation_command","manifest":"generated_manifest","metadata":[null],"name":"generated_name","package_files":[{"content_type":"generated_content_type","created_at":"generated_created_at","download_url":"generated_download_url","id":13,"md5":"generated_md5","name":"generated_name","sha1":"generated_sha1","sha256":"generated_sha256","size":13,"state":"generated_state","updated_at":"generated_updated_at"}],"package_url":"generated_package_url","prerelease":false,"release":{"author":{"avatar_url":"generated_avatar_url","events_url":"generated_events_url","followers_url":"generated_followers_url","following_url":"generated_following_url","gists_url":"generated_gists_url","gravatar_id":"generated_gravatar_id","html_url":"generated_html_url","id":13,"login":"generated_login","node_id":"generated_node_id","organizations_url":"generated_organizations_url","received_events_url":"generated_received_events_url","repos_url":"generated_repos_url","site_admin":false,"starred_url":"generated_starred_url","subscriptions_url":"generated_subscriptions_url","type":"generated_type","url":"generated_url"},"created_at":"generated_created_at","draft":false,"html_url":"generated_html_url","id":13,"name":"generated_name","prerelease":false,"published_at":"generated_published_at","tag_name":"generated_tag_name","target_commitish":"generated_target_commitish","url":"generated_url"},"rubygems_metadata":[null],"summary":"generated_summary","tag_name":"generated_tag_name","target_commitish":"generated_target_commitish","target_oid":"generated_target_oid","updated_at":"generated_updated_at","version":"generated_version"}';
    /**
     * @param array<mixed> $docker_metadata
     * @param ?array<mixed> $metadata
     * @param ?array<\ApiClients\Client\GitHubAE\Schema\WebhookRegistryPackageUpdated\RegistryPackage\PackageVersion\PackageFiles> $package_files
     * @param array<mixed> $rubygems_metadata
     */
    public function __construct(public ?Schema\WebhookRegistryPackagePublished\RegistryPackage\Owner $author, public ?string $body, public ?string $body_html, public ?string $created_at, public ?string $description, public array $docker_metadata, public bool $draft, public ?string $html_url, public ?int $id, public ?string $installation_command, public string $manifest, public ?array $metadata, public ?string $name, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\WebhookRegistryPackageUpdated\RegistryPackage\PackageVersion\PackageFiles::class)] public ?array $package_files, public ?string $package_url, public bool $prerelease, public Schema\WebhookRegistryPackageUpdated\RegistryPackage\PackageVersion\Release $release, public array $rubygems_metadata, public ?string $summary, public string $tag_name, public ?string $target_commitish, public ?string $target_oid, public ?string $updated_at, public ?string $version)
    {
    }
}
