<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\TopicSearchResultItem\Related;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class TopicRelation
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"topic_id":{"type":"integer"},"relation_type":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"name":"generated_name","topic_id":13,"relation_type":"generated_relation_type"}';
    public function __construct(public ?int $id, public ?string $name, public ?int $topic_id, public ?string $relation_type)
    {
    }
}
