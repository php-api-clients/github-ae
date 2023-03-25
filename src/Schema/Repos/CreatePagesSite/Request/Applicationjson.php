<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Repos\CreatePagesSite\Request;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":["object","null"],"anyOf":[{"required":["source"]},{"required":["build_type"]}],"properties":{"build_type":{"enum":["legacy","workflow"],"type":"string","description":"The process in which the Page will be built. Possible values are `\\"legacy\\"` and `\\"workflow\\"`."},"source":{"required":["branch"],"type":"object","properties":{"branch":{"type":"string","description":"The repository branch used to publish your site\'s source files."},"path":{"enum":["\\/","\\/docs"],"type":"string","description":"The repository directory that includes the source files for the Pages site. Allowed paths are `\\/` or `\\/docs`. Default: `\\/`","default":"\\/"}},"description":"The source branch and directory used to publish your Pages site."}},"description":"The source branch and directory used to publish your Pages site."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The source branch and directory used to publish your Pages site.';
    public const SCHEMA_EXAMPLE_DATA = '{"buildType":"legacy","source":{"branch":"generated_branch_null","path":"\\/"}}';
    /**
     * buildType: The process in which the Page will be built. Possible values are `"legacy"` and `"workflow"`.
     * source: The source branch and directory used to publish your Pages site.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('build_type')] public ?string $buildType, public ?Schema\Repos\CreatePagesSite\Request\Applicationjson\Source $source)
    {
    }
}
