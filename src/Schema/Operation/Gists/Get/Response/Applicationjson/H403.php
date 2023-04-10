<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Operation\Gists\Get\Response\Applicationjson;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class H403
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"block":{"type":"object","properties":{"reason":{"type":"string"},"created_at":{"type":"string"},"html_url":{"type":["string","null"]}}},"message":{"type":"string"},"documentation_url":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"block":{"reason":"generated_reason_null","created_at":"generated_created_at_null","html_url":"generated_html_url_null"},"message":"generated_message_null","documentation_url":"generated_documentation_url_null"}';
    public function __construct(public ?Schema\Operation\Gists\Get\Response\Applicationjson\H403\Block $block, public ?string $message, #[\EventSauce\ObjectHydrator\MapFrom('documentation_url')] public ?string $documentationUrl)
    {
    }
}
