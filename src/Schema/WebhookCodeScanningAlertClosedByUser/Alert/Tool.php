<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Schema\WebhookCodeScanningAlertClosedByUser\Alert;

final readonly class Tool
{
    public const SCHEMA_JSON         = '{"required":["name","version"],"type":"object","properties":{"guid":{"type":["string","null"]},"name":{"type":"string","description":"The name of the tool used to generate the code scanning analysis alert."},"version":{"type":["string","null"],"description":"The version of the tool used to detect the alert."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"guid":"generated","name":"generated","version":"generated"}';

    /**
     * name: The name of the tool used to generate the code scanning analysis alert.
     * version: The version of the tool used to detect the alert.
     */
    public function __construct(public ?string $guid, public string $name, public ?string $version)
    {
    }
}
