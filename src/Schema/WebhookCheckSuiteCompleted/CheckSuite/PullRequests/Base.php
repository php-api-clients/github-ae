<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookCheckSuiteCompleted\CheckSuite\PullRequests;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Base
{
    public const SCHEMA_JSON = '{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"repo":{"title":"Repo Ref","required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}},"sha":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"ref":"generated_ref","repo":{"id":13,"name":"generated_name","url":"generated_url"},"sha":"generated_sha"}';
    public function __construct(public string $ref, public Schema\WebhookCheckSuiteCompleted\CheckSuite\PullRequests\Base\Repo $repo, public string $sha)
    {
    }
}
