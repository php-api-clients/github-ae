<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class MostRecentInstance
{
    public const SCHEMA_JSON = '{"title":"Alert Instance","required":["ref","analysis_key","environment","state"],"type":["object","null"],"properties":{"analysis_key":{"type":"string","description":"Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name."},"classifications":{"type":"array","items":{"type":"string"}},"commit_sha":{"type":"string"},"environment":{"type":"string","description":"Identifies the variable values associated with the environment in which the analysis that generated this alert instance was performed, such as the language that was analyzed."},"location":{"type":"object","properties":{"end_column":{"type":"integer"},"end_line":{"type":"integer"},"path":{"type":"string"},"start_column":{"type":"integer"},"start_line":{"type":"integer"}}},"message":{"type":"object","properties":{"text":{"type":"string"}}},"ref":{"type":"string","description":"The full Git reference, formatted as `refs\\/heads\\/<branch name>`."},"state":{"enum":["open","dismissed","fixed"],"type":"string","description":"State of a code scanning alert."}}}';
    public const SCHEMA_TITLE = 'Alert Instance';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"analysisKey":"generated_analysis_key_null","classifications":["generated_classifications_null"],"commitSha":"generated_commit_sha_null","environment":"generated_environment_null","location":{"endColumn":13,"endLine":13,"path":"generated_path_null","startColumn":13,"startLine":13},"message":{"text":"generated_text_null"},"ref":"generated_ref_null","state":"open"}';
    /**
     * analysisKey: Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name.
     * @param ?array<string> $classifications
     * environment: Identifies the variable values associated with the environment in which the analysis that generated this alert instance was performed, such as the language that was analyzed.
     * ref: The full Git reference, formatted as `refs/heads/<branch name>`.
     * state: State of a code scanning alert.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('analysis_key')] public string $analysisKey, public ?array $classifications, #[\EventSauce\ObjectHydrator\MapFrom('commit_sha')] public ?string $commitSha, public string $environment, public ?Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\MostRecentInstance\Location $location, public ?Schema\CodeScanningAlertInstance\Message $message, public string $ref, public string $state)
    {
    }
}
