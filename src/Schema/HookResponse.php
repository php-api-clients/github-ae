<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class HookResponse
{
    public const SCHEMA_JSON = '{"title":"Hook Response","required":["code","status","message"],"type":"object","properties":{"code":{"type":["integer","null"]},"status":{"type":["string","null"]},"message":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = 'Hook Response';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"code":13,"status":"generated_status","message":"generated_message"}';
    public function __construct(public ?int $code, public ?string $status, public ?string $message)
    {
    }
}
