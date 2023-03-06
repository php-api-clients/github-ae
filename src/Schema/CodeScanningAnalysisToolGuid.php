<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class CodeScanningAnalysisToolGuid
{
    public const SCHEMA_JSON = '{"type":["string","null"],"description":"The GUID of the tool used to generate the code scanning analysis, if provided in the uploaded SARIF data."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The GUID of the tool used to generate the code scanning analysis, if provided in the uploaded SARIF data.';
    public const SCHEMA_EXAMPLE_DATA = '[]';
    public function __construct()
    {
    }
}
