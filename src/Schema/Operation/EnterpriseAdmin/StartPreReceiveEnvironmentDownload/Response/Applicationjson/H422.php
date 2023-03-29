<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownload\Response\Applicationjson;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class H422
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"message":{"type":"string"},"errors":{"type":"array","items":{"type":"object","properties":{"resource":{"type":"string"},"code":{"type":"string"},"message":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"message":"generated_message_null","errors":[{"resource":"generated_resource_null","code":"generated_code_null","message":"generated_message_null"}]}';
    /**
     * @param ?array<\ApiClients\Client\GitHubAE\Schema\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownload\Response\Applicationjson\H422\Errors> $errors
     */
    public function __construct(public ?string $message, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownload\Response\Applicationjson\H422\Errors::class)] public ?array $errors)
    {
    }
}
