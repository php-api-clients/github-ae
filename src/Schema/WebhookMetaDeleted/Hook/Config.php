<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookMetaDeleted\Hook;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Config
{
    public const SCHEMA_JSON = '{"required":["content_type","insecure_ssl","url"],"type":"object","properties":{"content_type":{"enum":["json","form"],"type":"string"},"insecure_ssl":{"type":"string"},"secret":{"type":"string"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"contentType":"json","insecureSsl":"generated_insecure_ssl_null","secret":"generated_secret_null","url":"https:\\/\\/example.com\\/"}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('content_type')] public string $contentType, #[\EventSauce\ObjectHydrator\MapFrom('insecure_ssl')] public string $insecureSsl, public ?string $secret, public string $url)
    {
    }
}
