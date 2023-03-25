<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Checks\CreateSuite\Request;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["head_sha"],"type":"object","properties":{"head_sha":{"type":"string","description":"The sha of the head commit."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"headSha":"generated_head_sha_null"}';
    /**
     * headSha: The sha of the head commit.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('head_sha')] public string $headSha)
    {
    }
}
