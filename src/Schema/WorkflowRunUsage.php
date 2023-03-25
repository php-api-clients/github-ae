<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class WorkflowRunUsage
{
    public const SCHEMA_JSON = '{"title":"Workflow Run Usage","required":["billable"],"type":"object","properties":{"billable":{"type":"object","properties":{"UBUNTU":{"required":["total_ms","jobs"],"type":"object","properties":{"total_ms":{"type":"integer"},"jobs":{"type":"integer"},"job_runs":{"type":"array","items":{"required":["job_id","duration_ms"],"type":"object","properties":{"job_id":{"type":"integer"},"duration_ms":{"type":"integer"}}}}}},"MACOS":{"required":["total_ms","jobs"],"type":"object","properties":{"total_ms":{"type":"integer"},"jobs":{"type":"integer"},"job_runs":{"type":"array","items":{"required":["job_id","duration_ms"],"type":"object","properties":{"job_id":{"type":"integer"},"duration_ms":{"type":"integer"}}}}}},"WINDOWS":{"required":["total_ms","jobs"],"type":"object","properties":{"total_ms":{"type":"integer"},"jobs":{"type":"integer"},"job_runs":{"type":"array","items":{"required":["job_id","duration_ms"],"type":"object","properties":{"job_id":{"type":"integer"},"duration_ms":{"type":"integer"}}}}}}}},"run_duration_ms":{"type":"integer"}},"description":"Workflow Run Usage"}';
    public const SCHEMA_TITLE = 'Workflow Run Usage';
    public const SCHEMA_DESCRIPTION = 'Workflow Run Usage';
    public const SCHEMA_EXAMPLE_DATA = '{"billable":{"ubuntu":{"totalMs":13,"jobs":13,"jobRuns":[{"jobId":13,"durationMs":13}]},"macos":{"totalMs":13,"jobs":13,"jobRuns":[{"jobId":13,"durationMs":13}]},"windows":{"totalMs":13,"jobs":13,"jobRuns":[{"jobId":13,"durationMs":13}]}},"runDurationMs":13}';
    public function __construct(public Schema\WorkflowRunUsage\Billable $billable, #[\EventSauce\ObjectHydrator\MapFrom('run_duration_ms')] public ?int $runDurationMs)
    {
    }
}
