<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WorkflowRunUsage\Billable;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Ubuntu
{
    public const SCHEMA_JSON = '{"required":["total_ms","jobs"],"type":"object","properties":{"total_ms":{"type":"integer"},"jobs":{"type":"integer"},"job_runs":{"type":"array","items":{"required":["job_id","duration_ms"],"type":"object","properties":{"job_id":{"type":"integer"},"duration_ms":{"type":"integer"}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_ms":13,"jobs":13,"job_runs":[{"job_id":13,"duration_ms":13}]}';
    /**
     * @param ?array<\ApiClients\Client\GitHubAE\Schema\WorkflowRunUsage\Billable\Ubuntu\JobRuns> $job_runs
     */
    public function __construct(public int $total_ms, public int $jobs, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\WorkflowRunUsage\Billable\Ubuntu\JobRuns::class)] public ?array $job_runs)
    {
    }
}
