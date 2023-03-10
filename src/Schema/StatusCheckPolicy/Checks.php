<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\StatusCheckPolicy;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Checks
{
    public const SCHEMA_JSON = '{"required":["context","app_id"],"type":"object","properties":{"context":{"type":"string","examples":["continuous-integration\\/travis-ci"]},"app_id":{"type":["integer","null"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"context":"continuous-integration\\/travis-ci","app_id":13}';
    public function __construct(public string $context, public ?int $app_id)
    {
    }
}
