<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\AddedToProjectIssueEvent;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class ProjectCard
{
    public const SCHEMA_JSON = '{"required":["id","url","project_id","project_url","column_name"],"type":"object","properties":{"id":{"type":"integer"},"url":{"type":"string","format":"uri"},"project_id":{"type":"integer"},"project_url":{"type":"string","format":"uri"},"column_name":{"type":"string"},"previous_column_name":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"url":"generated_url","project_id":13,"project_url":"generated_project_url","column_name":"generated_column_name","previous_column_name":"generated_previous_column_name"}';
    public function __construct(public int $id, public string $url, public int $project_id, public string $project_url, public string $column_name, public ?string $previous_column_name)
    {
    }
}
