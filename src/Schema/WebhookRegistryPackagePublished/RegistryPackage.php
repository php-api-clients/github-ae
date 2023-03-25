<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookRegistryPackagePublished;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class RegistryPackage
{
    public const SCHEMA_JSON = '{"required":["id","name","namespace","description","ecosystem","package_type","html_url","created_at","updated_at","owner","package_version","registry"],"type":"object","properties":{"created_at":{"type":["string","null"]},"description":{"type":["string","null"]},"ecosystem":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"name":{"type":"string"},"namespace":{"type":"string"},"owner":{"required":["login","id","node_id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin"],"type":"object","properties":{"avatar_url":{"type":"string"},"events_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"}}},"package_type":{"type":"string"},"package_version":{"required":["id","version","name","description","summary","html_url","metadata","package_files","installation_command","package_url"],"type":["object","null"],"properties":{"author":{"required":["login","id","node_id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin"],"type":"object","properties":{"avatar_url":{"type":"string"},"events_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"}}},"body":{"oneOf":[{"type":"string"},{"type":"object"}]},"body_html":{"type":"string"},"container_metadata":{"type":"object","properties":{"labels":{"type":["object","null"]},"manifest":{"type":["object","null"]},"tag":{"type":"object","properties":{"digest":{"type":"string"},"name":{"type":"string"}}}}},"created_at":{"type":"string"},"description":{"type":"string"},"docker_metadata":{"type":"array","items":{}},"draft":{"type":"boolean"},"html_url":{"type":"string"},"id":{"type":"integer"},"installation_command":{"type":"string"},"manifest":{"type":"string"},"metadata":{"type":"array","items":{"type":"object","additionalProperties":true}},"name":{"type":"string"},"npm_metadata":{"type":["object","null"],"properties":{"name":{"type":"string"},"version":{"type":"string"},"npm_user":{"type":"string"},"author":{"type":["null","string","object"],"oneOf":[{"type":"string"},{"type":"object"}]},"bugs":{"type":["null","string","object"],"oneOf":[{"type":"string"},{"type":"object"}]},"dependencies":{"type":"object"},"dev_dependencies":{"type":"object"},"peer_dependencies":{"type":"object"},"optional_dependencies":{"type":"object"},"description":{"type":"string"},"dist":{"type":["null","string","object"],"oneOf":[{"type":"string"},{"type":"object"}]},"git_head":{"type":"string"},"homepage":{"type":"string"},"license":{"type":"string"},"main":{"type":"string"},"repository":{"type":["null","string","object"],"oneOf":[{"type":"string"},{"type":"object"}]},"scripts":{"type":"object"},"id":{"type":"string"},"node_version":{"type":"string"},"npm_version":{"type":"string"},"has_shrinkwrap":{"type":"boolean"},"maintainers":{"type":"array","items":{"type":"string"}},"contributors":{"type":"array","items":{"type":"string"}},"engines":{"type":"object"},"keywords":{"type":"array","items":{"type":"string"}},"files":{"type":"array","items":{"type":"string"}},"bin":{"type":"object"},"man":{"type":"object"},"directories":{"type":["null","string","object"],"oneOf":[{"type":"string"},{"type":"object"}]},"os":{"type":"array","items":{"type":"string"}},"cpu":{"type":"array","items":{"type":"string"}},"readme":{"type":"string"},"installation_command":{"type":"string"},"release_id":{"type":"integer"},"commit_oid":{"type":"string"},"published_via_actions":{"type":"boolean"},"deleted_by_id":{"type":"integer"}}},"nuget_metadata":{"type":["array","null"],"items":{"type":"object","properties":{"id":{"type":["null","string","object","integer"],"oneOf":[{"type":"string"},{"type":"object"},{"type":"integer"}]},"name":{"type":"string"},"value":{"oneOf":[{"type":"boolean"},{"type":"string"},{"type":"integer"},{"type":"object","properties":{"url":{"type":"string"},"branch":{"type":"string"},"commit":{"type":"string"},"type":{"type":"string"}}}]}}}},"package_files":{"type":"array","items":{"required":["download_url","id","name","sha256","sha1","md5","content_type","state","size","created_at","updated_at"],"type":"object","properties":{"content_type":{"type":"string"},"created_at":{"type":"string"},"download_url":{"type":"string"},"id":{"type":"integer"},"md5":{"type":["string","null"]},"name":{"type":"string"},"sha1":{"type":["string","null"]},"sha256":{"type":["string","null"]},"size":{"type":"integer"},"state":{"type":["string","null"]},"updated_at":{"type":"string"}}}},"package_url":{"type":"string"},"prerelease":{"type":"boolean"},"release":{"type":"object","properties":{"author":{"type":"object","properties":{"avatar_url":{"type":"string"},"events_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"}}},"created_at":{"type":"string"},"draft":{"type":"boolean"},"html_url":{"type":"string"},"id":{"type":"integer"},"name":{"type":["string","null"]},"prerelease":{"type":"boolean"},"published_at":{"type":"string"},"tag_name":{"type":"string"},"target_commitish":{"type":"string"},"url":{"type":"string"}}},"rubygems_metadata":{"type":"array","items":{}},"summary":{"type":"string"},"tag_name":{"type":"string"},"target_commitish":{"type":"string"},"target_oid":{"type":"string"},"updated_at":{"type":"string"},"version":{"type":"string"}}},"registry":{"type":["object","null"],"properties":{"about_url":{"type":"string"},"name":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"},"vendor":{"type":"string"}}},"updated_at":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"createdAt":"generated_created_at_null","description":"generated_description_null","ecosystem":"generated_ecosystem_null","htmlUrl":"generated_html_url_null","id":13,"name":"generated_name_null","namespace":"generated_namespace_null","owner":{"avatarUrl":"generated_avatar_url_null","eventsUrl":"generated_events_url_null","followersUrl":"generated_followers_url_null","followingUrl":"generated_following_url_null","gistsUrl":"generated_gists_url_null","gravatarId":"generated_gravatar_id_null","htmlUrl":"generated_html_url_null","id":13,"login":"generated_login_null","nodeId":"generated_node_id_null","organizationsUrl":"generated_organizations_url_null","receivedEventsUrl":"generated_received_events_url_null","reposUrl":"generated_repos_url_null","siteAdmin":false,"starredUrl":"generated_starred_url_null","subscriptionsUrl":"generated_subscriptions_url_null","type":"generated_type_null","url":"generated_url_null"},"packageType":"generated_package_type_null","packageVersion":{"author":{"avatarUrl":"generated_avatar_url_null","eventsUrl":"generated_events_url_null","followersUrl":"generated_followers_url_null","followingUrl":"generated_following_url_null","gistsUrl":"generated_gists_url_null","gravatarId":"generated_gravatar_id_null","htmlUrl":"generated_html_url_null","id":13,"login":"generated_login_null","nodeId":"generated_node_id_null","organizationsUrl":"generated_organizations_url_null","receivedEventsUrl":"generated_received_events_url_null","reposUrl":"generated_repos_url_null","siteAdmin":false,"starredUrl":"generated_starred_url_null","subscriptionsUrl":"generated_subscriptions_url_null","type":"generated_type_null","url":"generated_url_null"},"body":"generated_body_null","bodyHtml":"generated_body_html_null","containerMetadata":{"labels":null,"manifest":null,"tag":{"digest":"generated_digest_null","name":"generated_name_null"}},"createdAt":"generated_created_at_null","description":"generated_description_null","dockerMetadata":[null],"draft":false,"htmlUrl":"generated_html_url_null","id":13,"installationCommand":"generated_installation_command_null","manifest":"generated_manifest_null","metadata":null,"name":"generated_name_null","npmMetadata":{"name":"generated_name_null","version":"generated_version_null","npmUser":"generated_npm_user_null","author":"generated_author_null","bugs":"generated_bugs_null","dependencies":null,"devDependencies":null,"peerDependencies":null,"optionalDependencies":null,"description":"generated_description_null","dist":"generated_dist_null","gitHead":"generated_git_head_null","homepage":"generated_homepage_null","license":"generated_license_null","main":"generated_main_null","repository":"generated_repository_null","scripts":null,"id":"generated_id_null","nodeVersion":"generated_node_version_null","npmVersion":"generated_npm_version_null","hasShrinkwrap":false,"maintainers":["generated_maintainers_null"],"contributors":["generated_contributors_null"],"engines":null,"keywords":["generated_keywords_null"],"files":["generated_files_null"],"bin":null,"man":null,"directories":"generated_directories_null","os":["generated_os_null"],"cpu":["generated_cpu_null"],"readme":"generated_readme_null","installationCommand":"generated_installation_command_null","releaseId":13,"commitOid":"generated_commit_oid_null","publishedViaActions":false,"deletedById":13},"nugetMetadata":[{"id":"generated_id_null","name":"generated_name_null","value":false}],"packageFiles":[{"contentType":"generated_content_type_null","createdAt":"generated_created_at_null","downloadUrl":"generated_download_url_null","id":13,"md5":"generated_md5_null","name":"generated_name_null","sha1":"generated_sha1_null","sha256":"generated_sha256_null","size":13,"state":"generated_state_null","updatedAt":"generated_updated_at_null"}],"packageUrl":"generated_package_url_null","prerelease":false,"release":{"author":{"avatarUrl":"generated_avatar_url_null","eventsUrl":"generated_events_url_null","followersUrl":"generated_followers_url_null","followingUrl":"generated_following_url_null","gistsUrl":"generated_gists_url_null","gravatarId":"generated_gravatar_id_null","htmlUrl":"generated_html_url_null","id":13,"login":"generated_login_null","nodeId":"generated_node_id_null","organizationsUrl":"generated_organizations_url_null","receivedEventsUrl":"generated_received_events_url_null","reposUrl":"generated_repos_url_null","siteAdmin":false,"starredUrl":"generated_starred_url_null","subscriptionsUrl":"generated_subscriptions_url_null","type":"generated_type_null","url":"generated_url_null"},"createdAt":"generated_created_at_null","draft":false,"htmlUrl":"generated_html_url_null","id":13,"name":"generated_name_null","prerelease":false,"publishedAt":"generated_published_at_null","tagName":"generated_tag_name_null","targetCommitish":"generated_target_commitish_null","url":"generated_url_null"},"rubygemsMetadata":[null],"summary":"generated_summary_null","tagName":"generated_tag_name_null","targetCommitish":"generated_target_commitish_null","targetOid":"generated_target_oid_null","updatedAt":"generated_updated_at_null","version":"generated_version_null"},"registry":{"aboutUrl":"generated_about_url_null","name":"generated_name_null","type":"generated_type_null","url":"generated_url_null","vendor":"generated_vendor_null"},"updatedAt":"generated_updated_at_null"}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('created_at')] public ?string $createdAt, public ?string $description, public string $ecosystem, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public string $htmlUrl, public int $id, public string $name, public string $namespace, public Schema\WebhookRegistryPackagePublished\RegistryPackage\Owner $owner, #[\EventSauce\ObjectHydrator\MapFrom('package_type')] public string $packageType, #[\EventSauce\ObjectHydrator\MapFrom('package_version')] public ?Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion $packageVersion, public ?Schema\WebhookRegistryPackagePublished\RegistryPackage\Registry $registry, #[\EventSauce\ObjectHydrator\MapFrom('updated_at')] public ?string $updatedAt)
    {
    }
}
