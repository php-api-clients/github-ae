<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookPullRequestReviewCommentCreated\Comment;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Links
{
    public const SCHEMA_JSON = '{"required":["self","html","pull_request"],"type":"object","properties":{"html":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"pull_request":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"self":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"html":{"href":"generated_href"},"pull_request":{"href":"generated_href"},"self":{"href":"generated_href"}}';
    public function __construct(public Schema\WebhookPullRequestAssigned\PullRequest\Links\Comments $html, public Schema\WebhookPullRequestAssigned\PullRequest\Links\Comments $pull_request, public Schema\WebhookPullRequestAssigned\PullRequest\Links\Comments $self)
    {
    }
}
