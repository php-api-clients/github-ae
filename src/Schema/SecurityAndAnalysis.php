<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class SecurityAndAnalysis
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"advanced_security":{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}},"secret_scanning":{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}},"secret_scanning_push_protection":{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"advanced_security":{"status":"generated_status"},"secret_scanning":{"status":"generated_status"},"secret_scanning_push_protection":{"status":"generated_status"}}';
    public function __construct(public ?Schema\SecurityAndAnalysis\AdvancedSecurity $advanced_security, public ?Schema\SecurityAndAnalysis\AdvancedSecurity $secret_scanning, public ?Schema\SecurityAndAnalysis\AdvancedSecurity $secret_scanning_push_protection)
    {
    }
}
