<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookPullRequestEdited\Changes;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Base
{
    public const SCHEMA_JSON = '{"required":["ref","sha"],"type":"object","properties":{"ref":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}},"sha":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"ref":{"from":"generated_from"},"sha":{"from":"generated_from"}}';
    public function __construct(public Schema\WebhookDiscussionCommentEdited\Changes\Body $ref, public Schema\WebhookDiscussionCommentEdited\Changes\Body $sha)
    {
    }
}
