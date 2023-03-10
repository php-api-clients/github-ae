<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookPullRequestAssigned\PullRequest;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Links
{
    public const SCHEMA_JSON = '{"required":["self","html","issue","comments","review_comments","review_comment","commits","statuses"],"type":"object","properties":{"comments":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"commits":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"html":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"issue":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"review_comment":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"review_comments":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"self":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"statuses":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"comments":{"href":"generated_href"},"commits":{"href":"generated_href"},"html":{"href":"generated_href"},"issue":{"href":"generated_href"},"review_comment":{"href":"generated_href"},"review_comments":{"href":"generated_href"},"self":{"href":"generated_href"},"statuses":{"href":"generated_href"}}';
    public function __construct(public Schema\WebhookPullRequestAssigned\PullRequest\Links\Comments $comments, public Schema\WebhookPullRequestAssigned\PullRequest\Links\Comments $commits, public Schema\WebhookPullRequestAssigned\PullRequest\Links\Comments $html, public Schema\WebhookPullRequestAssigned\PullRequest\Links\Comments $issue, public Schema\WebhookPullRequestAssigned\PullRequest\Links\Comments $review_comment, public Schema\WebhookPullRequestAssigned\PullRequest\Links\Comments $review_comments, public Schema\WebhookPullRequestAssigned\PullRequest\Links\Comments $self, public Schema\WebhookPullRequestAssigned\PullRequest\Links\Comments $statuses)
    {
    }
}
