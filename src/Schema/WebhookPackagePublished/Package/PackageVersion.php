<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookPackagePublished\Package;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class PackageVersion
{
    public const SCHEMA_JSON = '{"required":["id","version","summary","name","description","html_url","metadata","package_files","installation_command"],"type":["object","null"],"properties":{"author":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"body":{"oneOf":[{"type":"string"},{"type":"object"}]},"body_html":{"type":"string"},"container_metadata":{"type":["object","null"],"properties":{"labels":{"type":["object","null"]},"manifest":{"type":["object","null"]},"tag":{"type":"object","properties":{"digest":{"type":"string"},"name":{"type":"string"}}}}},"created_at":{"type":"string"},"description":{"type":"string"},"docker_metadata":{"type":"array","items":{}},"draft":{"type":"boolean"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"installation_command":{"type":"string"},"manifest":{"type":"string"},"metadata":{"type":"array","items":{"type":"object","additionalProperties":true}},"name":{"type":"string"},"npm_metadata":{"type":["object","null"],"properties":{"name":{"type":"string"},"version":{"type":"string"},"npm_user":{"type":"string"},"author":{"type":["object","null"]},"bugs":{"type":["object","null"]},"dependencies":{"type":"object"},"dev_dependencies":{"type":"object"},"peer_dependencies":{"type":"object"},"optional_dependencies":{"type":"object"},"description":{"type":"string"},"dist":{"type":["object","null"]},"git_head":{"type":"string"},"homepage":{"type":"string"},"license":{"type":"string"},"main":{"type":"string"},"repository":{"type":["object","null"]},"scripts":{"type":"object"},"id":{"type":"string"},"node_version":{"type":"string"},"npm_version":{"type":"string"},"has_shrinkwrap":{"type":"boolean"},"maintainers":{"type":"array","items":{"type":"object"}},"contributors":{"type":"array","items":{"type":"object"}},"engines":{"type":"object"},"keywords":{"type":"array","items":{"type":"string"}},"files":{"type":"array","items":{"type":"string"}},"bin":{"type":"object"},"man":{"type":"object"},"directories":{"type":["object","null"]},"os":{"type":"array","items":{"type":"string"}},"cpu":{"type":"array","items":{"type":"string"}},"readme":{"type":"string"},"installation_command":{"type":"string"},"release_id":{"type":"integer"},"commit_oid":{"type":"string"},"published_via_actions":{"type":"boolean"},"deleted_by_id":{"type":"integer"}}},"nuget_metadata":{"type":["array","null"],"items":{"type":"object","properties":{"id":{"oneOf":[{"type":"integer"},{"type":"string"}]},"name":{"type":"string"},"value":{"oneOf":[{"type":"boolean"},{"type":"string"},{"type":"integer"},{"type":"object","properties":{"url":{"type":"string"},"branch":{"type":"string"},"commit":{"type":"string"},"type":{"type":"string"}}}]}}}},"package_files":{"type":"array","items":{"required":["download_url","id","name","sha256","sha1","md5","content_type","state","size","created_at","updated_at"],"type":"object","properties":{"content_type":{"type":"string"},"created_at":{"type":"string"},"download_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"md5":{"type":["string","null"]},"name":{"type":"string"},"sha1":{"type":["string","null"]},"sha256":{"type":["string","null"]},"size":{"type":"integer"},"state":{"type":["string","null"]},"updated_at":{"type":"string"}}}},"package_url":{"type":"string"},"prerelease":{"type":"boolean"},"release":{"required":["url","html_url","id","tag_name","target_commitish","name","draft","author","prerelease","created_at","published_at"],"type":"object","properties":{"author":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"created_at":{"type":"string"},"draft":{"type":"boolean"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"name":{"type":["string","null"]},"prerelease":{"type":"boolean"},"published_at":{"type":"string"},"tag_name":{"type":"string"},"target_commitish":{"type":"string"},"url":{"type":"string","format":"uri"}}},"rubygems_metadata":{"type":"array","items":{}},"source_url":{"type":"string"},"summary":{"type":"string"},"tag_name":{"type":"string"},"target_commitish":{"type":"string"},"target_oid":{"type":"string"},"updated_at":{"type":"string"},"version":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"author":{"avatar_url":"https:\\/\\/example.com\\/","deleted":false,"email":"generated_email_null","events_url":"generated_events_url_uri-template","followers_url":"https:\\/\\/example.com\\/","following_url":"generated_following_url_uri-template","gists_url":"generated_gists_url_uri-template","gravatar_id":"generated_gravatar_id_null","html_url":"https:\\/\\/example.com\\/","id":13,"login":"generated_login_null","name":"generated_name_null","node_id":"generated_node_id_null","organizations_url":"https:\\/\\/example.com\\/","received_events_url":"https:\\/\\/example.com\\/","repos_url":"https:\\/\\/example.com\\/","site_admin":false,"starred_url":"generated_starred_url_uri-template","subscriptions_url":"https:\\/\\/example.com\\/","type":"Bot","url":"https:\\/\\/example.com\\/"},"body":"generated_body_null","body_html":"generated_body_html_null","container_metadata":{"labels":null,"manifest":null,"tag":{"digest":"generated_digest_null","name":"generated_name_null"}},"created_at":"generated_created_at_null","description":"generated_description_null","docker_metadata":[null],"draft":false,"html_url":"https:\\/\\/example.com\\/","id":13,"installation_command":"generated_installation_command_null","manifest":"generated_manifest_null","metadata":null,"name":"generated_name_null","npm_metadata":{"name":"generated_name_null","version":"generated_version_null","npm_user":"generated_npm_user_null","author":null,"bugs":null,"dependencies":null,"dev_dependencies":null,"peer_dependencies":null,"optional_dependencies":null,"description":"generated_description_null","dist":null,"git_head":"generated_git_head_null","homepage":"generated_homepage_null","license":"generated_license_null","main":"generated_main_null","repository":null,"scripts":null,"id":"generated_id_null","node_version":"generated_node_version_null","npm_version":"generated_npm_version_null","has_shrinkwrap":false,"maintainers":null,"contributors":null,"engines":null,"keywords":["generated_keywords_null"],"files":["generated_files_null"],"bin":null,"man":null,"directories":null,"os":["generated_os_null"],"cpu":["generated_cpu_null"],"readme":"generated_readme_null","installation_command":"generated_installation_command_null","release_id":13,"commit_oid":"generated_commit_oid_null","published_via_actions":false,"deleted_by_id":13},"nuget_metadata":[{"id":13,"name":"generated_name_null","value":false}],"package_files":[{"content_type":"generated_content_type_null","created_at":"generated_created_at_null","download_url":"https:\\/\\/example.com\\/","id":13,"md5":"generated_md5_null","name":"generated_name_null","sha1":"generated_sha1_null","sha256":"generated_sha256_null","size":13,"state":"generated_state_null","updated_at":"generated_updated_at_null"}],"package_url":"generated_package_url_null","prerelease":false,"release":{"author":{"avatar_url":"https:\\/\\/example.com\\/","deleted":false,"email":"generated_email_null","events_url":"generated_events_url_uri-template","followers_url":"https:\\/\\/example.com\\/","following_url":"generated_following_url_uri-template","gists_url":"generated_gists_url_uri-template","gravatar_id":"generated_gravatar_id_null","html_url":"https:\\/\\/example.com\\/","id":13,"login":"generated_login_null","name":"generated_name_null","node_id":"generated_node_id_null","organizations_url":"https:\\/\\/example.com\\/","received_events_url":"https:\\/\\/example.com\\/","repos_url":"https:\\/\\/example.com\\/","site_admin":false,"starred_url":"generated_starred_url_uri-template","subscriptions_url":"https:\\/\\/example.com\\/","type":"Bot","url":"https:\\/\\/example.com\\/"},"created_at":"generated_created_at_null","draft":false,"html_url":"https:\\/\\/example.com\\/","id":13,"name":"generated_name_null","prerelease":false,"published_at":"generated_published_at_null","tag_name":"generated_tag_name_null","target_commitish":"generated_target_commitish_null","url":"https:\\/\\/example.com\\/"},"rubygems_metadata":[null],"source_url":"generated_source_url_null","summary":"generated_summary_null","tag_name":"generated_tag_name_null","target_commitish":"generated_target_commitish_null","target_oid":"generated_target_oid_null","updated_at":"generated_updated_at_null","version":"generated_version_null"}';
    /**
     * @param ?array<mixed> $dockerMetadata
     * @param ?array<\ApiClients\Client\GitHubAE\Schema\WebhookPackagePublished\Package\PackageVersion\NugetMetadata> $nugetMetadata
     * @param array<\ApiClients\Client\GitHubAE\Schema\WebhookPackagePublished\Package\PackageVersion\PackageFiles> $packageFiles
     * @param ?array<mixed> $rubygemsMetadata
     */
    public function __construct(public ?Schema\Discussion\AnswerChosenBy $author, public ?string $body, #[\EventSauce\ObjectHydrator\MapFrom('body_html')] public ?string $bodyHtml, #[\EventSauce\ObjectHydrator\MapFrom('container_metadata')] public ?Schema\WebhookPackagePublished\Package\PackageVersion\ContainerMetadata $containerMetadata, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public ?string $createdAt, public string $description, #[\EventSauce\ObjectHydrator\MapFrom('docker_metadata')] public ?array $dockerMetadata, public ?bool $draft, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public string $htmlUrl, public int $id, #[\EventSauce\ObjectHydrator\MapFrom('installation_command')] public string $installationCommand, public ?string $manifest, public mixed $metadata, public string $name, #[\EventSauce\ObjectHydrator\MapFrom('npm_metadata')] public ?Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata $npmMetadata, #[\EventSauce\ObjectHydrator\MapFrom('nuget_metadata')] #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\WebhookPackagePublished\Package\PackageVersion\NugetMetadata::class)] public ?array $nugetMetadata, #[\EventSauce\ObjectHydrator\MapFrom('package_files')] #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\WebhookPackagePublished\Package\PackageVersion\PackageFiles::class)] public array $packageFiles, #[\EventSauce\ObjectHydrator\MapFrom('package_url')] public ?string $packageUrl, public ?bool $prerelease, public ?Schema\WebhookPackagePublished\Package\PackageVersion\Release $release, #[\EventSauce\ObjectHydrator\MapFrom('rubygems_metadata')] public ?array $rubygemsMetadata, #[\EventSauce\ObjectHydrator\MapFrom('source_url')] public ?string $sourceUrl, public string $summary, #[\EventSauce\ObjectHydrator\MapFrom('tag_name')] public ?string $tagName, #[\EventSauce\ObjectHydrator\MapFrom('target_commitish')] public ?string $targetCommitish, #[\EventSauce\ObjectHydrator\MapFrom('target_oid')] public ?string $targetOid, #[\EventSauce\ObjectHydrator\MapFrom('updated_at')] public ?string $updatedAt, public string $version)
    {
    }
}
