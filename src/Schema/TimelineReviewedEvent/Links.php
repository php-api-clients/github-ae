<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\TimelineReviewedEvent;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Links
{
    public const SCHEMA_JSON = '{"required":["html","pull_request"],"type":"object","properties":{"html":{"required":["href"],"type":"object","properties":{"href":{"type":"string"}}},"pull_request":{"required":["href"],"type":"object","properties":{"href":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"html":{"href":"generated_href"},"pull_request":{"href":"generated_href"}}';
    public function __construct(public Schema\TimelineReviewedEvent\Links\Html $html, public Schema\TimelineReviewedEvent\Links\Html $pull_request)
    {
    }
}
