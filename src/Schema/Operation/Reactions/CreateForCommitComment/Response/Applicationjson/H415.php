<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Operation\Reactions\CreateForCommitComment\Response\Applicationjson;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class H415
{
    public const SCHEMA_JSON = '{"required":["message","documentation_url"],"type":"object","properties":{"message":{"type":"string"},"documentation_url":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"message":"generated_message_null","documentation_url":"generated_documentation_url_null"}';
    public function __construct(public string $message, #[\EventSauce\ObjectHydrator\MapFrom('documentation_url')] public string $documentationUrl)
    {
    }
}
