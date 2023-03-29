<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookPullRequestAutoMergeDisabled\PullRequest;

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
    public const SCHEMA_EXAMPLE_DATA = '{"comments":{"href":"generated_href_uri-template"},"commits":{"href":"generated_href_uri-template"},"html":{"href":"generated_href_uri-template"},"issue":{"href":"generated_href_uri-template"},"review_comment":{"href":"generated_href_uri-template"},"review_comments":{"href":"generated_href_uri-template"},"self":{"href":"generated_href_uri-template"},"statuses":{"href":"generated_href_uri-template"}}';
    public function __construct(public Schema\WebhookPullRequestAutoMergeDisabled\PullRequest\Links\Comments $comments, public Schema\WebhookPullRequestAutoMergeDisabled\PullRequest\Links\Commits $commits, public Schema\WebhookPullRequestAutoMergeDisabled\PullRequest\Links\Html $html, public Schema\WebhookPullRequestAutoMergeDisabled\PullRequest\Links\Issue $issue, #[\EventSauce\ObjectHydrator\MapFrom('review_comment')] public Schema\WebhookPullRequestAutoMergeDisabled\PullRequest\Links\ReviewComment $reviewComment, #[\EventSauce\ObjectHydrator\MapFrom('review_comments')] public Schema\WebhookPullRequestAutoMergeDisabled\PullRequest\Links\ReviewComments $reviewComments, public Schema\WebhookPullRequestAutoMergeDisabled\PullRequest\Links\Self_ $self, public Schema\WebhookPullRequestAutoMergeDisabled\PullRequest\Links\Statuses $statuses)
    {
    }
}
