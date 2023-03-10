<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class RunnerLabel
{
    public const SCHEMA_JSON = '{"title":"Self hosted runner label","required":["name"],"type":"object","properties":{"id":{"type":"integer","description":"Unique identifier of the label."},"name":{"type":"string","description":"Name of the label."},"type":{"enum":["read-only","custom"],"type":"string","description":"The type of label. Read-only labels are applied automatically when the runner is configured."}},"description":"A label for a self hosted runner"}';
    public const SCHEMA_TITLE = 'Self hosted runner label';
    public const SCHEMA_DESCRIPTION = 'A label for a self hosted runner';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"name":"generated_name","type":"generated_type"}';
    /**
     * id: Unique identifier of the label.
     * name: Name of the label.
     * type: The type of label. Read-only labels are applied automatically when the runner is configured.
     */
    public function __construct(public ?int $id, public string $name, public ?string $type)
    {
    }
}
