<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Repos\UpdateStatusCheckProtection\Request;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"strict":{"type":"boolean","description":"Require branches to be up to date before merging."},"contexts":{"type":"array","items":{"type":"string"},"description":"**Deprecated**: The list of status checks to require in order to merge into this branch. If any of these checks have recently been set by a particular GitHub App, they will be required to come from that app in future for the branch to merge. Use `checks` instead of `contexts` for more fine-grained control.\\n","deprecated":true},"checks":{"type":"array","items":{"required":["context"],"type":"object","properties":{"context":{"type":"string","description":"The name of the required check"},"app_id":{"type":"integer","description":"The ID of the GitHub App that must provide this check. Omit this field to automatically select the GitHub App that has recently provided this check, or any app if it was not set by a GitHub App. Pass -1 to explicitly allow any app to set the status."}}},"description":"The list of status checks to require in order to merge into this branch."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"strict":false,"contexts":["generated_contexts"],"checks":[{"context":"generated_context","app_id":13}]}';
    /**
     * strict: Require branches to be up to date before merging.
     * contexts: **Deprecated**: The list of status checks to require in order to merge into this branch. If any of these checks have recently been set by a particular GitHub App, they will be required to come from that app in future for the branch to merge. Use `checks` instead of `contexts` for more fine-grained control.
     * @param ?array<string> $contexts
     * checks: The list of status checks to require in order to merge into this branch.
     * @param ?array<\ApiClients\Client\GitHubAE\Schema\Repos\UpdateBranchProtection\Request\Applicationjson\RequiredStatusChecks\Checks> $checks
     */
    public function __construct(public ?bool $strict, public ?array $contexts, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\Repos\UpdateBranchProtection\Request\Applicationjson\RequiredStatusChecks\Checks::class)] public ?array $checks)
    {
    }
}
