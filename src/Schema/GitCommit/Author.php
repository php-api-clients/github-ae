<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\GitCommit;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Author
{
    public const SCHEMA_JSON = '{"required":["email","name","date"],"type":"object","properties":{"date":{"type":"string","description":"Timestamp of the commit","format":"date-time","examples":["2014-08-09T08:02:04+12:00"]},"email":{"type":"string","description":"Git email address of the user","examples":["monalisa.octocat@example.com"]},"name":{"type":"string","description":"Name of the git user","examples":["Monalisa Octocat"]}},"description":"Identifying information for the git-user"}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Identifying information for the git-user';
    public const SCHEMA_EXAMPLE_DATA = '{"date":"2014-08-09T08:02:04+12:00","email":"monalisa.octocat@example.com","name":"Monalisa Octocat"}';
    /**
     * date: Timestamp of the commit
     * email: Git email address of the user
     * name: Name of the git user
     */
    public function __construct(public string $date, public string $email, public string $name)
    {
    }
}
