<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
use ApiClients\Client\GitHubAE\Router;
use ApiClients\Client\GitHubAE\ChunkSize;
final readonly class Release
{
    public const SCHEMA_JSON = '{"title":"Release","required":["assets_url","upload_url","tarball_url","zipball_url","created_at","published_at","draft","id","node_id","author","html_url","name","prerelease","tag_name","target_commitish","assets","url"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"assets_url":{"type":"string","format":"uri"},"upload_url":{"type":"string"},"tarball_url":{"type":["string","null"],"format":"uri"},"zipball_url":{"type":["string","null"],"format":"uri"},"id":{"type":"integer"},"node_id":{"type":"string"},"tag_name":{"type":"string","description":"The name of the tag.","examples":["v1.0.0"]},"target_commitish":{"type":"string","description":"Specifies the commitish value that determines where the Git tag is created from.","examples":["master"]},"name":{"type":["string","null"]},"body":{"type":["string","null"]},"draft":{"type":"boolean","description":"true to create a draft (unpublished) release, false to create a published one.","examples":[false]},"prerelease":{"type":"boolean","description":"Whether to identify the release as a prerelease or a full release.","examples":[false]},"created_at":{"type":"string","format":"date-time"},"published_at":{"type":["string","null"],"format":"date-time"},"author":{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."},"assets":{"type":"array","items":{"title":"Release Asset","required":["id","name","content_type","size","state","url","node_id","download_count","label","uploader","browser_download_url","created_at","updated_at"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"browser_download_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"node_id":{"type":"string"},"name":{"type":"string","description":"The file name of the asset.","examples":["Team Environment"]},"label":{"type":["string","null"]},"state":{"enum":["uploaded","open"],"type":"string","description":"State of the release asset."},"content_type":{"type":"string"},"size":{"type":"integer"},"download_count":{"type":"integer"},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"},"uploader":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]}},"description":"Data related to a release."}},"body_html":{"type":"string"},"body_text":{"type":"string"},"mentions_count":{"type":"integer"},"discussion_url":{"type":"string","description":"The URL of the release discussion.","format":"uri"},"reactions":{"title":"Reaction Rollup","required":["url","total_count","+1","-1","laugh","confused","heart","hooray","eyes","rocket"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"total_count":{"type":"integer"},"+1":{"type":"integer"},"-1":{"type":"integer"},"laugh":{"type":"integer"},"confused":{"type":"integer"},"heart":{"type":"integer"},"hooray":{"type":"integer"},"eyes":{"type":"integer"},"rocket":{"type":"integer"}}}},"description":"A release."}';
    public const SCHEMA_TITLE = 'Release';
    public const SCHEMA_DESCRIPTION = 'A release.';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"https:\\/\\/example.com\\/","html_url":"https:\\/\\/example.com\\/","assets_url":"https:\\/\\/example.com\\/","upload_url":"generated_upload_url_null","tarball_url":"https:\\/\\/example.com\\/","zipball_url":"https:\\/\\/example.com\\/","id":13,"node_id":"generated_node_id_null","tag_name":"v1.0.0","target_commitish":"master","name":"generated_name_null","body":"generated_body_null","draft":false,"prerelease":false,"created_at":"1970-01-01T00:00:00+00:00","published_at":"1970-01-01T00:00:00+00:00","author":{"name":"generated_name_null","email":"generated_email_null","login":"octocat","id":1,"node_id":"MDQ6VXNlcjE=","avatar_url":"https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif","gravatar_id":"41d064eb2195891e12d0413f63227ea7","url":"https:\\/\\/api.github.com\\/users\\/octocat","html_url":"https:\\/\\/github.com\\/octocat","followers_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/followers","following_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}","gists_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}","starred_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}","subscriptions_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions","organizations_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/orgs","repos_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/repos","events_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}","received_events_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/received_events","type":"User","site_admin":false,"starred_at":"\\"2020-07-09T00:17:55Z\\""},"assets":[{"url":"https:\\/\\/example.com\\/","browser_download_url":"https:\\/\\/example.com\\/","id":13,"node_id":"generated_node_id_null","name":"Team Environment","label":"generated_label_null","state":"uploaded","content_type":"generated_content_type_null","size":13,"download_count":13,"created_at":"1970-01-01T00:00:00+00:00","updated_at":"1970-01-01T00:00:00+00:00","uploader":{"name":"generated_name_null","email":"generated_email_null","login":"octocat","id":1,"node_id":"MDQ6VXNlcjE=","avatar_url":"https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif","gravatar_id":"41d064eb2195891e12d0413f63227ea7","url":"https:\\/\\/api.github.com\\/users\\/octocat","html_url":"https:\\/\\/github.com\\/octocat","followers_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/followers","following_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}","gists_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}","starred_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}","subscriptions_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions","organizations_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/orgs","repos_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/repos","events_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}","received_events_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/received_events","type":"User","site_admin":false,"starred_at":"\\"2020-07-09T00:17:55Z\\""}}],"body_html":"generated_body_html_null","body_text":"generated_body_text_null","mentions_count":13,"discussion_url":"https:\\/\\/example.com\\/","reactions":{"url":"https:\\/\\/example.com\\/","total_count":13,"_PLUSES_1":13,"_MINUS_1":13,"laugh":13,"confused":13,"heart":13,"hooray":13,"eyes":13,"rocket":13}}';
    /**
     * tagName: The name of the tag.
     * targetCommitish: Specifies the commitish value that determines where the Git tag is created from.
     * draft: true to create a draft (unpublished) release, false to create a published one.
     * prerelease: Whether to identify the release as a prerelease or a full release.
     * author: A GitHub user.
     * @param array<\ApiClients\Client\GitHubAE\Schema\ReleaseAsset> $assets
     * discussionUrl: The URL of the release discussion.
     */
    public function __construct(public string $url, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public string $htmlUrl, #[\EventSauce\ObjectHydrator\MapFrom('assets_url')] public string $assetsUrl, #[\EventSauce\ObjectHydrator\MapFrom('upload_url')] public string $uploadUrl, #[\EventSauce\ObjectHydrator\MapFrom('tarball_url')] public ?string $tarballUrl, #[\EventSauce\ObjectHydrator\MapFrom('zipball_url')] public ?string $zipballUrl, public int $id, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, #[\EventSauce\ObjectHydrator\MapFrom('tag_name')] public string $tagName, #[\EventSauce\ObjectHydrator\MapFrom('target_commitish')] public string $targetCommitish, public ?string $name, public ?string $body, public bool $draft, public bool $prerelease, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public string $createdAt, #[\EventSauce\ObjectHydrator\MapFrom('published_at')] public ?string $publishedAt, public Schema\SimpleUser $author, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\ReleaseAsset::class)] public array $assets, #[\EventSauce\ObjectHydrator\MapFrom('body_html')] public ?string $bodyHtml, #[\EventSauce\ObjectHydrator\MapFrom('body_text')] public ?string $bodyText, #[\EventSauce\ObjectHydrator\MapFrom('mentions_count')] public ?int $mentionsCount, #[\EventSauce\ObjectHydrator\MapFrom('discussion_url')] public ?string $discussionUrl, public ?Schema\ReactionRollup $reactions)
    {
    }
}
