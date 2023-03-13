<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Links
{
    public const SCHEMA_JSON = '{"required":["self","html","pull_request"],"type":"object","properties":{"self":{"required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/comments\\/1"]}}},"html":{"required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/pull\\/1#discussion-diff-1"]}}},"pull_request":{"required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/1"]}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"self":{"href":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/comments\\/1"},"html":{"href":"https:\\/\\/github.com\\/octocat\\/Hello-World\\/pull\\/1#discussion-diff-1"},"pull_request":{"href":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/1"}}';
    public function __construct(public Schema\PullRequestReviewComment\Links\Self_ $self, public Schema\PullRequestReviewComment\Links\Html $html, public Schema\PullRequestReviewComment\Links\PullRequest $pull_request)
    {
    }
}
