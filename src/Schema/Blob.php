<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Blob
{
    public const SCHEMA_JSON = '{"title":"Blob","required":["sha","url","node_id","size","content","encoding"],"type":"object","properties":{"content":{"type":"string"},"encoding":{"type":"string"},"url":{"type":"string","format":"uri"},"sha":{"type":"string"},"size":{"type":["integer","null"]},"node_id":{"type":"string"},"highlighted_content":{"type":"string"}},"description":"Blob"}';
    public const SCHEMA_TITLE = 'Blob';
    public const SCHEMA_DESCRIPTION = 'Blob';
    public const SCHEMA_EXAMPLE_DATA = '{"content":"generated_content_null","encoding":"generated_encoding_null","url":"https:\\/\\/example.com\\/","sha":"generated_sha_null","size":13,"nodeId":"generated_node_id_null","highlightedContent":"generated_highlighted_content_null"}';
    public function __construct(public string $content, public string $encoding, public string $url, public string $sha, public ?int $size, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, #[\EventSauce\ObjectHydrator\MapFrom('highlighted_content')] public ?string $highlightedContent)
    {
    }
}
