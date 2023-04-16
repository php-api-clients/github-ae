<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Schema;

final readonly class CodeScanningAlertState
{
    public const SCHEMA_JSON         = '{"enum":["open","closed","dismissed","fixed"],"type":"string","description":"State of a code scanning alert."}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'State of a code scanning alert.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
