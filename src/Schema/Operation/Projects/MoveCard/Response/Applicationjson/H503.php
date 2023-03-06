<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Operation\Projects\MoveCard\Response\Applicationjson;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class H503
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"code":{"type":"string"},"message":{"type":"string"},"documentation_url":{"type":"string"},"errors":{"type":"array","items":{"type":"object","properties":{"code":{"type":"string"},"message":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"code":"generated_code","message":"generated_message","documentation_url":"generated_documentation_url","errors":[{"code":"generated_code","message":"generated_message"}]}';
    /**
     * @param ?array<\ApiClients\Client\GitHubAE\Schema\Operation\Projects\MoveCard\Response\Applicationjson\H503\Errors> $errors
     */
    public function __construct(public ?string $code, public ?string $message, public ?string $documentation_url, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\Operation\Projects\MoveCard\Response\Applicationjson\H503\Errors::class)] public ?array $errors)
    {
    }
}
