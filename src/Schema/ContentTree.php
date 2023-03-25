<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class ContentTree
{
    public const SCHEMA_JSON = '{"title":"Content Tree","required":["_links","git_url","html_url","download_url","name","path","sha","size","type","url","content","encoding"],"type":"object","properties":{"type":{"type":"string"},"size":{"type":"integer"},"name":{"type":"string"},"path":{"type":"string"},"sha":{"type":"string"},"url":{"type":"string","format":"uri"},"git_url":{"type":["string","null"],"format":"uri"},"html_url":{"type":["string","null"],"format":"uri"},"download_url":{"type":["string","null"],"format":"uri"},"entries":{"type":"array","items":{"required":["_links","git_url","html_url","download_url","name","path","sha","size","type","url"],"type":"object","properties":{"type":{"type":"string"},"size":{"type":"integer"},"name":{"type":"string"},"path":{"type":"string"},"content":{"type":"string"},"sha":{"type":"string"},"url":{"type":"string","format":"uri"},"git_url":{"type":["string","null"],"format":"uri"},"html_url":{"type":["string","null"],"format":"uri"},"download_url":{"type":["string","null"],"format":"uri"},"_links":{"required":["git","html","self"],"type":"object","properties":{"git":{"type":["string","null"],"format":"uri"},"html":{"type":["string","null"],"format":"uri"},"self":{"type":"string","format":"uri"}}}}}},"_links":{"required":["git","html","self"],"type":"object","properties":{"git":{"type":["string","null"],"format":"uri"},"html":{"type":["string","null"],"format":"uri"},"self":{"type":"string","format":"uri"}}}},"description":"Content Tree"}';
    public const SCHEMA_TITLE = 'Content Tree';
    public const SCHEMA_DESCRIPTION = 'Content Tree';
    public const SCHEMA_EXAMPLE_DATA = '{"type":"generated_type_null","size":13,"name":"generated_name_null","path":"generated_path_null","sha":"generated_sha_null","url":"https:\\/\\/example.com\\/","gitUrl":"https:\\/\\/example.com\\/","htmlUrl":"https:\\/\\/example.com\\/","downloadUrl":"https:\\/\\/example.com\\/","entries":[{"type":"generated_type_null","size":13,"name":"generated_name_null","path":"generated_path_null","content":"generated_content_null","sha":"generated_sha_null","url":"https:\\/\\/example.com\\/","gitUrl":"https:\\/\\/example.com\\/","htmlUrl":"https:\\/\\/example.com\\/","downloadUrl":"https:\\/\\/example.com\\/","links":{"git":"https:\\/\\/example.com\\/","html":"https:\\/\\/example.com\\/","self":"https:\\/\\/example.com\\/"}}],"links":{"git":"https:\\/\\/example.com\\/","html":"https:\\/\\/example.com\\/","self":"https:\\/\\/example.com\\/"}}';
    /**
     * @param ?array<\ApiClients\Client\GitHubAE\Schema\ContentTree\Entries> $entries
     */
    public function __construct(public string $type, public int $size, public string $name, public string $path, public string $sha, public string $url, #[\EventSauce\ObjectHydrator\MapFrom('git_url')] public ?string $gitUrl, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public ?string $htmlUrl, #[\EventSauce\ObjectHydrator\MapFrom('download_url')] public ?string $downloadUrl, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\ContentTree\Entries::class)] public ?array $entries, #[\EventSauce\ObjectHydrator\MapFrom('_links')] public Schema\ContentTree\Entries\Links $links)
    {
    }
}
