<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Checks\SetSuitesPreferences\Request;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"auto_trigger_checks":{"type":"array","items":{"required":["app_id","setting"],"type":"object","properties":{"app_id":{"type":"integer","description":"The `id` of the GitHub App."},"setting":{"type":"boolean","description":"Set to `true` to enable automatic creation of CheckSuite events upon pushes to the repository, or `false` to disable them.","default":true}}},"description":"Enables or disables automatic creation of CheckSuite events upon pushes to the repository. Enabled by default."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"auto_trigger_checks":[{"app_id":13,"setting":false}]}';
    /**
     * autoTriggerChecks: Enables or disables automatic creation of CheckSuite events upon pushes to the repository. Enabled by default.
     * @param ?array<\ApiClients\Client\GitHubAE\Schema\Checks\SetSuitesPreferences\Request\Applicationjson\AutoTriggerChecks> $autoTriggerChecks
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('auto_trigger_checks')] #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\Checks\SetSuitesPreferences\Request\Applicationjson\AutoTriggerChecks::class)] public ?array $autoTriggerChecks)
    {
    }
}
