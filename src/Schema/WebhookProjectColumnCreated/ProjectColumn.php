<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookProjectColumnCreated;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class ProjectColumn
{
    public const SCHEMA_JSON = '{"title":"Project Column","required":["url","project_url","cards_url","id","node_id","name","created_at","updated_at"],"type":"object","properties":{"after_id":{"type":["integer","null"]},"cards_url":{"type":"string","format":"uri"},"created_at":{"type":"string","format":"date-time"},"id":{"type":"integer","description":"The unique identifier of the project column"},"name":{"type":"string","description":"Name of the project column"},"node_id":{"type":"string"},"project_url":{"type":"string","format":"uri"},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'Project Column';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"after_id":13,"cards_url":"https:\\/\\/example.com\\/","created_at":"1970-01-01T00:00:00+00:00","id":13,"name":"generated_name_null","node_id":"generated_node_id_null","project_url":"https:\\/\\/example.com\\/","updated_at":"1970-01-01T00:00:00+00:00","url":"https:\\/\\/example.com\\/"}';
    /**
     * id: The unique identifier of the project column
     * name: Name of the project column
     */
    public function __construct(public ?int $after_id, public string $cards_url, public string $created_at, public int $id, public string $name, public string $node_id, public string $project_url, public string $updated_at, public string $url)
    {
    }
}
