<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Repos\DeleteFile\Request;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["message","sha"],"type":"object","properties":{"message":{"type":"string","description":"The commit message."},"sha":{"type":"string","description":"The blob SHA of the file being deleted."},"branch":{"type":"string","description":"The branch name. Default: the repository\\u2019s default branch (usually `master`)"},"committer":{"type":"object","properties":{"name":{"type":"string","description":"The name of the author (or committer) of the commit"},"email":{"type":"string","description":"The email of the author (or committer) of the commit"}},"description":"object containing information about the committer."},"author":{"type":"object","properties":{"name":{"type":"string","description":"The name of the author (or committer) of the commit"},"email":{"type":"string","description":"The email of the author (or committer) of the commit"}},"description":"object containing information about the author."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"message":"generated_message","sha":"generated_sha","branch":"generated_branch","committer":{"name":"generated_name","email":"generated_email"},"author":{"name":"generated_name","email":"generated_email"}}';
    /**
     * message: The commit message.
     * sha: The blob SHA of the file being deleted.
     * branch: The branch name. Default: the repository’s default branch (usually `master`)
     * committer: object containing information about the committer.
     * author: object containing information about the author.
     */
    public function __construct(public string $message, public string $sha, public ?string $branch, public ?Schema\Repos\DeleteFile\Request\Applicationjson\Committer $committer, public ?Schema\Repos\DeleteFile\Request\Applicationjson\Author $author)
    {
    }
}
