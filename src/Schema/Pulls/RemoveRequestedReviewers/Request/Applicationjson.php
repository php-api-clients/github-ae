<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Pulls\RemoveRequestedReviewers\Request;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["reviewers"],"type":"object","properties":{"reviewers":{"type":"array","items":{"type":"string"},"description":"An array of user `login`s that will be removed."},"team_reviewers":{"type":"array","items":{"type":"string"},"description":"An array of team `slug`s that will be removed."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"reviewers":["generated_reviewers_null"],"team_reviewers":["generated_team_reviewers_null"]}';
    /**
     * reviewers: An array of user `login`s that will be removed.
     * @param array<string> $reviewers
     * team_reviewers: An array of team `slug`s that will be removed.
     * @param ?array<string> $team_reviewers
     */
    public function __construct(public array $reviewers, public ?array $team_reviewers)
    {
    }
}
