<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\AliasAbstract;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
use ApiClients\Client\GitHubAE\Router;
use ApiClients\Client\GitHubAE\ChunkSize;
abstract readonly class Abstractd9dfa38ed9136d28d1296a44a1883f7a
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"topic_relation":{"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"topic_id":{"type":"integer"},"relation_type":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"topic_relation":{"id":13,"name":"generated_name_null","topic_id":13,"relation_type":"generated_relation_type_null"}}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('topic_relation')] public ?Schema\TopicSearchResultItem\Related\TopicRelation $topicRelation)
    {
    }
}
