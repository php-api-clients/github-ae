<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\OrganizationFull;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Plan
{
    public const SCHEMA_JSON = '{"required":["name","space","private_repos"],"type":"object","properties":{"name":{"type":"string"},"space":{"type":"integer"},"private_repos":{"type":"integer"},"filled_seats":{"type":"integer"},"seats":{"type":"integer"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name","space":13,"private_repos":13,"filled_seats":13,"seats":13}';
    public function __construct(public string $name, public int $space, public int $private_repos, public ?int $filled_seats, public ?int $seats)
    {
    }
}
