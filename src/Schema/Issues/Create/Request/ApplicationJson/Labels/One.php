<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Schema\Issues\Create\Request\ApplicationJson\Labels;

final readonly class One
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"description":{"type":["string","null"]},"color":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":2,"name":"generated","description":"generated","color":"generated"}';

    public function __construct(public ?int $id, public ?string $name, public ?string $description, public ?string $color)
    {
    }
}
