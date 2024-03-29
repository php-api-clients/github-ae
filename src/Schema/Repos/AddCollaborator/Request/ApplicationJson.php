<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Schema\Repos\AddCollaborator\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "permission": {
            "type": "string",
            "description": "The permission to grant the collaborator. **Only valid on organization-owned repositories.**",
            "default": "push"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "permission": "generated"
}';

    /**
     * permission: The permission to grant the collaborator. **Only valid on organization-owned repositories.**
     */
    public function __construct(public string|null $permission)
    {
    }
}
