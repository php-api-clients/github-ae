<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookWorkflowJobQueued;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class WorkflowJob
{
    public const SCHEMA_JSON = '{"required":["id","run_id","run_url","run_attempt","node_id","head_sha","url","html_url","status","conclusion","started_at","completed_at","name","steps","check_run_url","labels","runner_id","runner_name","runner_group_id","runner_group_name","workflow_name","head_branch","created_at"],"type":"object","properties":{"check_run_url":{"type":"string","format":"uri"},"completed_at":{"type":["string","null"]},"conclusion":{"type":["string","null"]},"created_at":{"type":"string","description":"The time that the job created."},"head_sha":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"labels":{"type":"array","items":{"type":"string"}},"name":{"type":"string"},"node_id":{"type":"string"},"run_attempt":{"type":"integer"},"run_id":{"type":"number"},"run_url":{"type":"string","format":"uri"},"runner_group_id":{"type":["integer","null"]},"runner_group_name":{"type":["string","null"]},"runner_id":{"type":["integer","null"]},"runner_name":{"type":["string","null"]},"started_at":{"type":"string","format":"date-time"},"status":{"enum":["queued","in_progress","completed","waiting"],"type":"string"},"head_branch":{"type":["string","null"],"description":"The name of the current branch."},"workflow_name":{"type":["string","null"],"description":"The name of the workflow."},"steps":{"type":"array","items":{"title":"Workflow Step","required":["name","status","conclusion","number","started_at","completed_at"],"type":"object","properties":{"completed_at":{"type":["string","null"]},"conclusion":{"enum":["failure","skipped","success","cancelled",null],"type":["string","null"]},"name":{"type":"string"},"number":{"type":"integer"},"started_at":{"type":["string","null"]},"status":{"enum":["completed","in_progress","queued","pending"],"type":"string"}}}},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"check_run_url":"generated_check_run_url","completed_at":"generated_completed_at","conclusion":"generated_conclusion","created_at":"generated_created_at","head_sha":"generated_head_sha","html_url":"generated_html_url","id":13,"labels":["generated_labels"],"name":"generated_name","node_id":"generated_node_id","run_attempt":13,"run_id":13,"run_url":"generated_run_url","runner_group_id":13,"runner_group_name":"generated_runner_group_name","runner_id":13,"runner_name":"generated_runner_name","started_at":"generated_started_at","status":"generated_status","head_branch":"generated_head_branch","workflow_name":"generated_workflow_name","steps":[{"completed_at":"generated_completed_at","conclusion":"generated_conclusion","name":"generated_name","number":13,"started_at":"generated_started_at","status":"generated_status"}],"url":"generated_url"}';
    /**
     * created_at: The time that the job created.
     * @param array<string> $labels
     * head_branch: The name of the current branch.
     * workflow_name: The name of the workflow.
     * @param array<\ApiClients\Client\GitHubAE\Schema\WebhookWorkflowJobQueued\WorkflowJob\Steps> $steps
     */
    public function __construct(public string $check_run_url, public ?string $completed_at, public ?string $conclusion, public string $created_at, public string $head_sha, public string $html_url, public int $id, public array $labels, public string $name, public string $node_id, public int $run_attempt, public int $run_id, public string $run_url, public ?int $runner_group_id, public ?string $runner_group_name, public ?int $runner_id, public ?string $runner_name, public string $started_at, public string $status, public ?string $head_branch, public ?string $workflow_name, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\WebhookWorkflowJobQueued\WorkflowJob\Steps::class)] public array $steps, public string $url)
    {
    }
}
