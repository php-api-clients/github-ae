<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
use ApiClients\Client\GitHubAE\Router;
use ApiClients\Client\GitHubAE\ChunkSize;
final readonly class CodeScanningAlertRuleSummary
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":["string","null"],"description":"A unique identifier for the rule used to detect the alert."},"name":{"type":"string","description":"The name of the rule used to detect the alert."},"severity":{"enum":["none","note","warning","error",null],"type":["string","null"],"description":"The severity of the alert."},"description":{"type":"string","description":"A short description of the rule used to detect the alert."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":"generated_id_null","name":"generated_name_null","severity":"none","description":"generated_description_null"}';
    /**
     * id: A unique identifier for the rule used to detect the alert.
     * name: The name of the rule used to detect the alert.
     * severity: The severity of the alert.
     * description: A short description of the rule used to detect the alert.
     */
    public function __construct(public ?string $id, public ?string $name, public ?string $severity, public ?string $description)
    {
    }
}
