<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Git\CreateRef\Request;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["ref","sha"],"type":"object","properties":{"ref":{"type":"string","description":"The name of the fully qualified reference (ie: `refs\\/heads\\/master`). If it doesn\'t start with \'refs\' and have at least two slashes, it will be rejected."},"sha":{"type":"string","description":"The SHA1 value for this reference."},"key":{"type":"string","examples":["\\"refs\\/heads\\/newbranch\\""]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"ref":"generated_ref","sha":"generated_sha","key":"\\"refs\\/heads\\/newbranch\\""}';
    /**
     * ref: The name of the fully qualified reference (ie: `refs/heads/master`). If it doesn't start with 'refs' and have at least two slashes, it will be rejected.
     * sha: The SHA1 value for this reference.
     */
    public function __construct(public ?string $ref, public ?string $sha, public string $key)
    {
    }
}
