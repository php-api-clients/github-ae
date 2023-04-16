<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ActionsOrganizationPermissions
{
    public const SCHEMA_JSON         = '{"required":["enabled_repositories"],"type":"object","properties":{"enabled_repositories":{"enum":["all","none","selected"],"type":"string","description":"The policy that controls the repositories in the organization that are allowed to run GitHub Actions."},"selected_repositories_url":{"type":"string","description":"The API URL to use to get or set the selected repositories that are allowed to run GitHub Actions, when `enabled_repositories` is set to `selected`."},"allowed_actions":{"enum":["all","local_only","selected"],"type":"string","description":"The permissions policy that controls the actions that are allowed to run."},"selected_actions_url":{"type":"string","description":"The API URL to use to get or set the actions that are allowed to run, when `allowed_actions` is set to `selected`."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"enabled_repositories":"all","selected_repositories_url":"generated_selected_repositories_url_null","allowed_actions":"all","selected_actions_url":"generated_selected_actions_url_null"}';

    /**
     * enabledRepositories: The policy that controls the repositories in the organization that are allowed to run GitHub Actions.
     * selectedRepositoriesUrl: The API URL to use to get or set the selected repositories that are allowed to run GitHub Actions, when `enabled_repositories` is set to `selected`.
     * allowedActions: The permissions policy that controls the actions that are allowed to run.
     * selectedActionsUrl: The API URL to use to get or set the actions that are allowed to run, when `allowed_actions` is set to `selected`.
     */
    public function __construct(#[MapFrom('enabled_repositories')] public string $enabledRepositories, #[MapFrom('selected_repositories_url')] public ?string $selectedRepositoriesUrl, #[MapFrom('allowed_actions')] public ?string $allowedActions, #[MapFrom('selected_actions_url')] public ?string $selectedActionsUrl)
    {
    }
}
