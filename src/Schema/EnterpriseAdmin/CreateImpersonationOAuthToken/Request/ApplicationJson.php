<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Schema\EnterpriseAdmin\CreateImpersonationOAuthToken\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "scopes"
    ],
    "type": "object",
    "properties": {
        "scopes": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "A list of [scopes](https:\\/\\/docs.github.com\\/github-ae@latest\\/apps\\/building-oauth-apps\\/understanding-scopes-for-oauth-apps\\/)."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "scopes": [
        "generated",
        "generated"
    ]
}';

    /**
     * scopes: A list of [scopes](https://docs.github.com/github-ae@latest/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
     */
    public function __construct(public array $scopes)
    {
    }
}
