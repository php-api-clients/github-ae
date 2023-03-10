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
    public const SCHEMA_EXAMPLE_DATA = '{"build_type":"generated_build_type","source":{"branch":"generated_branch","path":"generated_path"}}';
    /**
     * build_type: The process in which the Page will be built. Possible values are `"legacy"` and `"workflow"`.
     * source: The source branch and directory used to publish your Pages site.
     */
    public function __construct(public ?string $build_type, public ?Schema\Repos\CreatePagesSite\Request\Applicationjson\Source $source)
    {
    }
}
