<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Schema\Commit;

final readonly class Stats
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"additions":{"type":"integer"},"deletions":{"type":"integer"},"total":{"type":"integer"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"additions":9,"deletions":9,"total":5}';

    public function __construct(public ?int $additions, public ?int $deletions, public ?int $total)
    {
    }
}
