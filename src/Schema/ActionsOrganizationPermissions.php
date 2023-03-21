<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class ActionsOrganizationPermissions
{
    public const SCHEMA_JSON = '{"required":["enabled_repositories"],"type":"object","properties":{"enabled_repositories":{"enum":["all","none","selected"],"type":"string","description":"The policy that controls the repositories in the organization that are allowed to run GitHub Actions."},"selected_repositories_url":{"type":"string","description":"The API URL to use to get or set the selected repositories that are allowed to run GitHub Actions, when `enabled_repositories` is set to `selected`."},"allowed_actions":{"enum":["all","local_only","selected"],"type":"string","description":"The permissions policy that controls the actions that are allowed to run."},"selected_actions_url":{"type":"string","description":"The API URL to use to get or set the actions that are allowed to run, when `allowed_actions` is set to `selected`."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"enabled_repositories":"generated_enabled_repositories_null","selected_repositories_url":"generated_selected_repositories_url_null","allowed_actions":"generated_allowed_actions_null","selected_actions_url":"generated_selected_actions_url_null"}';
    /**
     * enabled_repositories: The policy that controls the repositories in the organization that are allowed to run GitHub Actions.
     * selected_repositories_url: The API URL to use to get or set the selected repositories that are allowed to run GitHub Actions, when `enabled_repositories` is set to `selected`.
     * allowed_actions: The permissions policy that controls the actions that are allowed to run.
     * selected_actions_url: The API URL to use to get or set the actions that are allowed to run, when `allowed_actions` is set to `selected`.
     */
    public function __construct(public string $enabled_repositories, public ?string $selected_repositories_url, public ?string $allowed_actions, public ?string $selected_actions_url)
    {
    }
}
