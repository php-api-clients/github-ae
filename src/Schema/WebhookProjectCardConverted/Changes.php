<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Schema\WebhookProjectCardConverted;

use ApiClients\Client\GitHubAE\Schema;

final readonly class Changes
{
    public const SCHEMA_JSON         = '{"required":["note"],"type":"object","properties":{"note":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"note":{"from":"generated"}}';

    public function __construct(public Schema\WebhookProjectCardConverted\Changes\Note $note)
    {
    }
}
