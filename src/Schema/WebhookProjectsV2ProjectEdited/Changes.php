<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookProjectsV2ProjectEdited;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"description":{"type":"object","properties":{"from":{"type":["string","null"]},"to":{"type":["string","null"]}}},"public":{"type":"object","properties":{"from":{"type":"boolean"},"to":{"type":"boolean"}}},"short_description":{"type":"object","properties":{"from":{"type":["string","null"]},"to":{"type":["string","null"]}}},"title":{"type":"object","properties":{"from":{"type":"string"},"to":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"description":{"from":"generated_from","to":"generated_to"},"public":{"from":false,"to":false},"short_description":{"from":"generated_from","to":"generated_to"},"title":{"from":"generated_from","to":"generated_to"}}';
    public function __construct(public ?Schema\WebhookMemberEdited\Changes\Permission $description, public ?Schema\WebhookProjectsV2ProjectEdited\Changes\Public_ $public, public ?Schema\WebhookMemberEdited\Changes\Permission $short_description, public ?Schema\WebhookProjectsV2ProjectEdited\Changes\Title $title)
    {
    }
}
