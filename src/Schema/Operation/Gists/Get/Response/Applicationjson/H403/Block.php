<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Operation\Gists\Get\Response\Applicationjson\H403;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Block
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"reason":{"type":"string"},"created_at":{"type":"string"},"html_url":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"reason":"generated_reason","created_at":"generated_created_at","html_url":"generated_html_url"}';
    public function __construct(public ?string $reason, public ?string $created_at, public ?string $html_url)
    {
    }
}
