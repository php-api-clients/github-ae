<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\CheckSuitePreference;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Preferences
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"auto_trigger_checks":{"type":"array","items":{"required":["app_id","setting"],"type":"object","properties":{"app_id":{"type":"integer"},"setting":{"type":"boolean"}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"auto_trigger_checks":[{"app_id":13,"setting":false}]}';
    /**
     * @param ?array<\ApiClients\Client\GitHubAE\Schema\CheckSuitePreference\Preferences\AutoTriggerChecks> $autoTriggerChecks
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('auto_trigger_checks')] #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\CheckSuitePreference\Preferences\AutoTriggerChecks::class)] public ?array $autoTriggerChecks)
    {
    }
}
