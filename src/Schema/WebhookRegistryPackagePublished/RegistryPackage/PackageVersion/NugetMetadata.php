<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class NugetMetadata
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":["null","string","object","integer"],"oneOf":[{"type":"string"},{"type":"object"},{"type":"integer"}]},"name":{"type":"string"},"value":{"oneOf":[{"type":"boolean"},{"type":"string"},{"type":"integer"},{"type":"object","properties":{"url":{"type":"string"},"branch":{"type":"string"},"commit":{"type":"string"},"type":{"type":"string"}}}]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"name":"generated_name","value":{"url":"generated_url","branch":"generated_branch","commit":"generated_commit","type":"generated_type"}}';
    public function __construct(public ?int $id, public ?string $name, public ?Schema\WebhookPackagePublished\Package\PackageVersion\NugetMetadata\Value $value)
    {
    }
}
