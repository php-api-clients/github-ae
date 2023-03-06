<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Hovercard
{
    public const SCHEMA_JSON = '{"title":"Hovercard","required":["contexts"],"type":"object","properties":{"contexts":{"type":"array","items":{"required":["message","octicon"],"type":"object","properties":{"message":{"type":"string"},"octicon":{"type":"string"}}}}},"description":"Hovercard"}';
    public const SCHEMA_TITLE = 'Hovercard';
    public const SCHEMA_DESCRIPTION = 'Hovercard';
    public const SCHEMA_EXAMPLE_DATA = '{"contexts":[{"message":"generated_message","octicon":"generated_octicon"}]}';
    /**
     * @param ?array<\ApiClients\Client\GitHubAE\Schema\Hovercard\Contexts> $contexts
     */
    public function __construct(#[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\Hovercard\Contexts::class)] public ?array $contexts)
    {
    }
}
