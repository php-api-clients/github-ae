<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookWorkflowJobInProgress;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class WorkflowJob
{
    public const SCHEMA_JSON = '{"title":"Workflow Job","required":["id","run_id","run_url","run_attempt","node_id","head_sha","url","html_url","status","conclusion","started_at","completed_at","name","steps","check_run_url","labels","runner_id","runner_name","runner_group_id","runner_group_name","workflow_name","head_branch","created_at"],"type":"object","properties":{"check_run_url":{"type":"string","format":"uri"},"completed_at":{"type":["string","null"]},"conclusion":{"enum":["success","failure",null,"cancelled","neutral"],"type":["string","null"]},"created_at":{"type":"string","description":"The time that the job created."},"head_sha":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"labels":{"type":"array","items":{"type":"string"},"description":"Custom labels for the job. Specified by the [`\\"runs-on\\"` attribute](https:\\/\\/docs.github.com\\/github-ae@latest\\/actions\\/reference\\/workflow-syntax-for-github-actions#jobsjob_idruns-on) in the workflow YAML."},"name":{"type":"string"},"node_id":{"type":"string"},"run_attempt":{"type":"integer"},"run_id":{"type":"number"},"run_url":{"type":"string","format":"uri"},"runner_group_id":{"type":["integer","null"],"description":"The ID of the runner group that is running this job. This will be `null` as long as `workflow_job[status]` is `queued`."},"runner_group_name":{"type":["string","null"],"description":"The name of the runner group that is running this job. This will be `null` as long as `workflow_job[status]` is `queued`."},"runner_id":{"type":["integer","null"],"description":"The ID of the runner that is running this job. This will be `null` as long as `workflow_job[status]` is `queued`."},"runner_name":{"type":["string","null"],"description":"The name of the runner that is running this job. This will be `null` as long as `workflow_job[status]` is `queued`."},"started_at":{"type":"string"},"status":{"enum":["queued","in_progress","completed"],"type":"string","description":"The current status of the job. Can be `queued`, `in_progress`, or `completed`."},"head_branch":{"type":["string","null"],"description":"The name of the current branch."},"workflow_name":{"type":["string","null"],"description":"The name of the workflow."},"steps":{"type":"array","items":{"title":"Workflow Step","required":["name","status","conclusion","number","started_at","completed_at"],"type":"object","properties":{"completed_at":{"type":["string","null"]},"conclusion":{"enum":["failure","skipped","success",null,"cancelled"],"type":["string","null"]},"name":{"type":"string"},"number":{"type":"integer"},"started_at":{"type":["string","null"]},"status":{"enum":["in_progress","completed","queued","pending"],"type":"string"}}}},"url":{"type":"string","format":"uri"}},"description":"The workflow job. Many `workflow_job` keys, such as `head_sha`, `conclusion`, and `started_at` are the same as those in a [`check_run`](#check_run) object."}';
    public const SCHEMA_TITLE = 'Workflow Job';
    public const SCHEMA_DESCRIPTION = 'The workflow job. Many `workflow_job` keys, such as `head_sha`, `conclusion`, and `started_at` are the same as those in a [`check_run`](#check_run) object.';
    public const SCHEMA_EXAMPLE_DATA = '{"checkRunUrl":"https:\\/\\/example.com\\/","completedAt":"generated_completed_at_null","conclusion":"success","createdAt":"generated_created_at_null","headSha":"generated_head_sha_null","htmlUrl":"https:\\/\\/example.com\\/","id":13,"labels":["generated_labels_null"],"name":"generated_name_null","nodeId":"generated_node_id_null","runAttempt":13,"runId":13,"runUrl":"https:\\/\\/example.com\\/","runnerGroupId":13,"runnerGroupName":"generated_runner_group_name_null","runnerId":13,"runnerName":"generated_runner_name_null","startedAt":"generated_started_at_null","status":"queued","headBranch":"generated_head_branch_null","workflowName":"generated_workflow_name_null","steps":[{"completedAt":"generated_completed_at_null","conclusion":"failure","name":"generated_name_null","number":13,"startedAt":"generated_started_at_null","status":"in_progress"}],"url":"https:\\/\\/example.com\\/"}';
    /**
     * createdAt: The time that the job created.
     * labels: Custom labels for the job. Specified by the [`"runs-on"` attribute](https://docs.github.com/github-ae@latest/actions/reference/workflow-syntax-for-github-actions#jobsjob_idruns-on) in the workflow YAML.
     * @param array<string> $labels
     * runnerGroupId: The ID of the runner group that is running this job. This will be `null` as long as `workflow_job[status]` is `queued`.
     * runnerGroupName: The name of the runner group that is running this job. This will be `null` as long as `workflow_job[status]` is `queued`.
     * runnerId: The ID of the runner that is running this job. This will be `null` as long as `workflow_job[status]` is `queued`.
     * runnerName: The name of the runner that is running this job. This will be `null` as long as `workflow_job[status]` is `queued`.
     * status: The current status of the job. Can be `queued`, `in_progress`, or `completed`.
     * headBranch: The name of the current branch.
     * workflowName: The name of the workflow.
     * @param array<\ApiClients\Client\GitHubAE\Schema\WebhookWorkflowJobInProgress\WorkflowJob\Steps> $steps
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('check_run_url')] public string $checkRunUrl, #[\EventSauce\ObjectHydrator\MapFrom('completed_at')] public ?string $completedAt, public ?string $conclusion, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public string $createdAt, #[\EventSauce\ObjectHydrator\MapFrom('head_sha')] public string $headSha, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public string $htmlUrl, public int $id, public array $labels, public string $name, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, #[\EventSauce\ObjectHydrator\MapFrom('run_attempt')] public int $runAttempt, #[\EventSauce\ObjectHydrator\MapFrom('run_id')] public int $runId, #[\EventSauce\ObjectHydrator\MapFrom('run_url')] public string $runUrl, #[\EventSauce\ObjectHydrator\MapFrom('runner_group_id')] public ?int $runnerGroupId, #[\EventSauce\ObjectHydrator\MapFrom('runner_group_name')] public ?string $runnerGroupName, #[\EventSauce\ObjectHydrator\MapFrom('runner_id')] public ?int $runnerId, #[\EventSauce\ObjectHydrator\MapFrom('runner_name')] public ?string $runnerName, #[\EventSauce\ObjectHydrator\MapFrom('started_at')] public string $startedAt, public string $status, #[\EventSauce\ObjectHydrator\MapFrom('head_branch')] public ?string $headBranch, #[\EventSauce\ObjectHydrator\MapFrom('workflow_name')] public ?string $workflowName, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\WebhookWorkflowJobInProgress\WorkflowJob\Steps::class)] public array $steps, public string $url)
    {
    }
}
