<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\PullRequest\Head\Repo;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class License
{
    public const SCHEMA_JSON = '{"required":["key","name","url","spdx_id","node_id"],"type":["object","null"],"properties":{"key":{"type":"string"},"name":{"type":"string"},"url":{"type":["string","null"],"format":"uri"},"spdx_id":{"type":["string","null"]},"node_id":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"key":"generated_key","name":"generated_name","url":"generated_url","spdx_id":"generated_spdx_id","node_id":"generated_node_id"}';
    public function __construct(public ?string $key, public ?string $name, public ?string $url, public ?string $spdx_id, public ?string $node_id)
    {
    }
}
