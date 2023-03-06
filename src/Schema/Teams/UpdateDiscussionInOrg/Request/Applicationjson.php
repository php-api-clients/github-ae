<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Teams\UpdateDiscussionInOrg\Request;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"title":{"type":"string","description":"The discussion post\'s title."},"body":{"type":"string","description":"The discussion post\'s body text."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"title":"generated_title","body":"generated_body"}';
    /**
     * title: The discussion post's title.
     * body: The discussion post's body text.
     */
    public function __construct(public ?string $title, public ?string $body)
    {
    }
}
