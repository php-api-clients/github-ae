<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Repos\AddCollaborator\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"permission":{"type":"string","description":"The permission to grant the collaborator. **Only valid on organization-owned repositories.**","default":"push"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"permission":"generated_permission_null"}';
    /**
     * permission: The permission to grant the collaborator. **Only valid on organization-owned repositories.**
     */
    public function __construct(public ?string $permission)
    {
    }
}
