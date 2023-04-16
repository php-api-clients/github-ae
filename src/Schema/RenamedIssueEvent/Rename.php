<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\RenamedIssueEvent;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
use ApiClients\Client\GitHubAE\Router;
use ApiClients\Client\GitHubAE\ChunkSize;
final readonly class Rename
{
    public const SCHEMA_JSON = '{"required":["from","to"],"type":"object","properties":{"from":{"type":"string"},"to":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"from":"generated_from_null","to":"generated_to_null"}';
    public function __construct(public string $from, public string $to)
    {
    }
}
