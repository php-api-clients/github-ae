<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Pulls\Update\Request;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"title":{"type":"string","description":"The title of the pull request."},"body":{"type":"string","description":"The contents of the pull request."},"state":{"enum":["open","closed"],"type":"string","description":"State of this Pull Request. Either `open` or `closed`."},"base":{"type":"string","description":"The name of the branch you want your changes pulled into. This should be an existing branch on the current repository. You cannot update the base branch on a pull request to point to another repository."},"maintainer_can_modify":{"type":"boolean","description":"Indicates whether [maintainers can modify](https:\\/\\/docs.github.com\\/github-ae@latest\\/articles\\/allowing-changes-to-a-pull-request-branch-created-from-a-fork\\/) the pull request."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"title":"generated_title","body":"generated_body","state":"generated_state","base":"generated_base","maintainer_can_modify":false}';
    /**
     * title: The title of the pull request.
     * body: The contents of the pull request.
     * state: State of this Pull Request. Either `open` or `closed`.
     * base: The name of the branch you want your changes pulled into. This should be an existing branch on the current repository. You cannot update the base branch on a pull request to point to another repository.
     * maintainer_can_modify: Indicates whether [maintainers can modify](https://docs.github.com/github-ae@latest/articles/allowing-changes-to-a-pull-request-branch-created-from-a-fork/) the pull request.
     */
    public function __construct(public ?string $title, public ?string $body, public ?string $state, public ?string $base, public ?bool $maintainer_can_modify)
    {
    }
}
