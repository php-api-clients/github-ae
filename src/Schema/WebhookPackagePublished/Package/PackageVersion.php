<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookPackagePublished\Package;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class PackageVersion
{
    public const SCHEMA_JSON = '{"required":["id","version","summary","name","description","html_url","metadata","package_files","installation_command"],"type":["object","null"],"properties":{"author":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"body":{"oneOf":[{"type":"string"},{"type":"object"}]},"body_html":{"type":"string"},"container_metadata":{"type":["object","null"],"properties":{"labels":{"type":["object","null"]},"manifest":{"type":["object","null"]},"tag":{"type":"object","properties":{"digest":{"type":"string"},"name":{"type":"string"}}}}},"created_at":{"type":"string"},"description":{"type":"string"},"docker_metadata":{"type":"array","items":{}},"draft":{"type":"boolean"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"installation_command":{"type":"string"},"manifest":{"type":"string"},"metadata":{"type":"array","items":{"type":"object","additionalProperties":true}},"name":{"type":"string"},"npm_metadata":{"type":["object","null"],"properties":{"name":{"type":"string"},"version":{"type":"string"},"npm_user":{"type":"string"},"author":{"type":["object","null"]},"bugs":{"type":["object","null"]},"dependencies":{"type":"object"},"dev_dependencies":{"type":"object"},"peer_dependencies":{"type":"object"},"optional_dependencies":{"type":"object"},"description":{"type":"string"},"dist":{"type":["object","null"]},"git_head":{"type":"string"},"homepage":{"type":"string"},"license":{"type":"string"},"main":{"type":"string"},"repository":{"type":["object","null"]},"scripts":{"type":"object"},"id":{"type":"string"},"node_version":{"type":"string"},"npm_version":{"type":"string"},"has_shrinkwrap":{"type":"boolean"},"maintainers":{"type":"array","items":{"type":"object"}},"contributors":{"type":"array","items":{"type":"object"}},"engines":{"type":"object"},"keywords":{"type":"array","items":{"type":"string"}},"files":{"type":"array","items":{"type":"string"}},"bin":{"type":"object"},"man":{"type":"object"},"directories":{"type":["object","null"]},"os":{"type":"array","items":{"type":"string"}},"cpu":{"type":"array","items":{"type":"string"}},"readme":{"type":"string"},"installation_command":{"type":"string"},"release_id":{"type":"integer"},"commit_oid":{"type":"string"},"published_via_actions":{"type":"boolean"},"deleted_by_id":{"type":"integer"}}},"nuget_metadata":{"type":["array","null"],"items":{"type":"object","properties":{"id":{"oneOf":[{"type":"integer"},{"type":"string"}]},"name":{"type":"string"},"value":{"oneOf":[{"type":"boolean"},{"type":"string"},{"type":"integer"},{"type":"object","properties":{"url":{"type":"string"},"branch":{"type":"string"},"commit":{"type":"string"},"type":{"type":"string"}}}]}}}},"package_files":{"type":"array","items":{"required":["download_url","id","name","sha256","sha1","md5","content_type","state","size","created_at","updated_at"],"type":"object","properties":{"content_type":{"type":"string"},"created_at":{"type":"string"},"download_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"md5":{"type":["string","null"]},"name":{"type":"string"},"sha1":{"type":["string","null"]},"sha256":{"type":["string","null"]},"size":{"type":"integer"},"state":{"type":["string","null"]},"updated_at":{"type":"string"}}}},"package_url":{"type":"string"},"prerelease":{"type":"boolean"},"release":{"required":["url","html_url","id","tag_name","target_commitish","name","draft","author","prerelease","created_at","published_at"],"type":"object","properties":{"author":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"created_at":{"type":"string"},"draft":{"type":"boolean"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"name":{"type":["string","null"]},"prerelease":{"type":"boolean"},"published_at":{"type":"string"},"tag_name":{"type":"string"},"target_commitish":{"type":"string"},"url":{"type":"string","format":"uri"}}},"rubygems_metadata":{"type":"array","items":{}},"source_url":{"type":"string"},"summary":{"type":"string"},"tag_name":{"type":"string"},"target_commitish":{"type":"string"},"target_oid":{"type":"string"},"updated_at":{"type":"string"},"version":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"author":{"avatar_url":"generated_avatar_url","deleted":false,"email":"generated_email","events_url":"generated_events_url","followers_url":"generated_followers_url","following_url":"generated_following_url","gists_url":"generated_gists_url","gravatar_id":"generated_gravatar_id","html_url":"generated_html_url","id":13,"login":"generated_login","name":"generated_name","node_id":"generated_node_id","organizations_url":"generated_organizations_url","received_events_url":"generated_received_events_url","repos_url":"generated_repos_url","site_admin":false,"starred_url":"generated_starred_url","subscriptions_url":"generated_subscriptions_url","type":"generated_type","url":"generated_url"},"body":null,"body_html":"generated_body_html","container_metadata":{"labels":null,"manifest":null,"tag":{"digest":"generated_digest","name":"generated_name"}},"created_at":"generated_created_at","description":"generated_description","docker_metadata":[null],"draft":false,"html_url":"generated_html_url","id":13,"installation_command":"generated_installation_command","manifest":"generated_manifest","metadata":null,"name":"generated_name","npm_metadata":{"name":"generated_name","version":"generated_version","npm_user":"generated_npm_user","author":null,"bugs":null,"dependencies":null,"dev_dependencies":null,"peer_dependencies":null,"optional_dependencies":null,"description":"generated_description","dist":null,"git_head":"generated_git_head","homepage":"generated_homepage","license":"generated_license","main":"generated_main","repository":null,"scripts":null,"id":"generated_id","node_version":"generated_node_version","npm_version":"generated_npm_version","has_shrinkwrap":false,"maintainers":null,"contributors":null,"engines":null,"keywords":["generated_keywords"],"files":["generated_files"],"bin":null,"man":null,"directories":null,"os":["generated_os"],"cpu":["generated_cpu"],"readme":"generated_readme","installation_command":"generated_installation_command","release_id":13,"commit_oid":"generated_commit_oid","published_via_actions":false,"deleted_by_id":13},"nuget_metadata":[{"id":"generated_id","name":"generated_name","value":{"url":"generated_url","branch":"generated_branch","commit":"generated_commit","type":"generated_type"}}],"package_files":[{"content_type":"generated_content_type","created_at":"generated_created_at","download_url":"generated_download_url","id":13,"md5":"generated_md5","name":"generated_name","sha1":"generated_sha1","sha256":"generated_sha256","size":13,"state":"generated_state","updated_at":"generated_updated_at"}],"package_url":"generated_package_url","prerelease":false,"release":{"author":{"avatar_url":"generated_avatar_url","deleted":false,"email":"generated_email","events_url":"generated_events_url","followers_url":"generated_followers_url","following_url":"generated_following_url","gists_url":"generated_gists_url","gravatar_id":"generated_gravatar_id","html_url":"generated_html_url","id":13,"login":"generated_login","name":"generated_name","node_id":"generated_node_id","organizations_url":"generated_organizations_url","received_events_url":"generated_received_events_url","repos_url":"generated_repos_url","site_admin":false,"starred_url":"generated_starred_url","subscriptions_url":"generated_subscriptions_url","type":"generated_type","url":"generated_url"},"created_at":"generated_created_at","draft":false,"html_url":"generated_html_url","id":13,"name":"generated_name","prerelease":false,"published_at":"generated_published_at","tag_name":"generated_tag_name","target_commitish":"generated_target_commitish","url":"generated_url"},"rubygems_metadata":[null],"source_url":"generated_source_url","summary":"generated_summary","tag_name":"generated_tag_name","target_commitish":"generated_target_commitish","target_oid":"generated_target_oid","updated_at":"generated_updated_at","version":"generated_version"}';
    /**
     * @param array<mixed> $docker_metadata
     * @param ?array<\ApiClients\Client\GitHubAE\Schema\WebhookPackagePublished\Package\PackageVersion\NugetMetadata> $nuget_metadata
     * @param ?array<\ApiClients\Client\GitHubAE\Schema\WebhookPackagePublished\Package\PackageVersion\PackageFiles> $package_files
     * @param array<mixed> $rubygems_metadata
     */
    public function __construct(public ?Schema\Discussion\AnswerChosenBy $author, public mixed $body, public string $body_html, public ?Schema\WebhookPackagePublished\Package\PackageVersion\ContainerMetadata $container_metadata, public string $created_at, public ?string $description, public array $docker_metadata, public bool $draft, public ?string $html_url, public ?int $id, public ?string $installation_command, public string $manifest, public mixed $metadata, public ?string $name, public ?Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata $npm_metadata, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\WebhookPackagePublished\Package\PackageVersion\NugetMetadata::class)] public ?array $nuget_metadata, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\WebhookPackagePublished\Package\PackageVersion\PackageFiles::class)] public ?array $package_files, public string $package_url, public bool $prerelease, public Schema\WebhookPackagePublished\Package\PackageVersion\Release $release, public array $rubygems_metadata, public string $source_url, public ?string $summary, public string $tag_name, public string $target_commitish, public string $target_oid, public string $updated_at, public ?string $version)
    {
    }
}
