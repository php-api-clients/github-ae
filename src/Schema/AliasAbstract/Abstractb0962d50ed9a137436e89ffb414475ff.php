<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Schema\AliasAbstract;

use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\Schema\Operation\EnterpriseAdmin\DeletePreReceiveEnvironment\Response\Applicationjson\H422\Errors;
use EventSauce\ObjectHydrator\PropertyCasters\CastListToType;

abstract readonly class Abstractb0962d50ed9a137436e89ffb414475ff
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"message":{"type":"string"},"errors":{"type":"array","items":{"type":"object","properties":{"resource":{"type":"string"},"code":{"type":"string"},"message":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"message":"generated_message_null","errors":[{"resource":"generated_resource_null","code":"generated_code_null","message":"generated_message_null"}]}';

    /**
     * @param ?array<Errors> $errors
     */
    public function __construct(public ?string $message, #[CastListToType(Schema\Operation\EnterpriseAdmin\DeletePreReceiveEnvironment\Response\Applicationjson\H422\Errors::class)] public ?array $errors)
    {
    }
}
