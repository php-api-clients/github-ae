<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\CodeScanning\UpdateAlert\Request;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["state"],"type":"object","properties":{"state":{"enum":["open","dismissed"],"type":"string","description":"Sets the state of the code scanning alert. You must provide `dismissed_reason` when you set the state to `dismissed`."},"dismissed_reason":{"enum":[null,"false positive","won\'t fix","used in tests"],"type":["string","null"],"description":"**Required when the state is dismissed.** The reason for dismissing or closing the alert."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"state":"open","dismissed_reason":"generated_dismissed_reason_null"}';
    /**
     * state: Sets the state of the code scanning alert. You must provide `dismissed_reason` when you set the state to `dismissed`.
     * dismissedReason: **Required when the state is dismissed.** The reason for dismissing or closing the alert.
     */
    public function __construct(public string $state, #[\EventSauce\ObjectHydrator\MapFrom('dismissed_reason')] public ?string $dismissedReason)
    {
    }
}
