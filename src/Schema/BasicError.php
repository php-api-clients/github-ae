<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class BasicError
{
    public const SCHEMA_JSON = '{"title":"Basic Error","type":"object","properties":{"message":{"type":"string"},"documentation_url":{"type":"string"},"url":{"type":"string"},"status":{"type":"string"}},"description":"Basic Error"}';
    public const SCHEMA_TITLE = 'Basic Error';
    public const SCHEMA_DESCRIPTION = 'Basic Error';
    public const SCHEMA_EXAMPLE_DATA = '{"message":"generated_message","documentation_url":"generated_documentation_url","url":"generated_url","status":"generated_status"}';
    public function __construct(public ?string $message, public ?string $documentation_url, public ?string $url, public ?string $status)
    {
    }
}
