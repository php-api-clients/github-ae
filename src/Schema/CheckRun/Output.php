<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\CheckRun;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Output
{
    public const SCHEMA_JSON = '{"required":["title","summary","text","annotations_count","annotations_url"],"type":"object","properties":{"title":{"type":["string","null"]},"summary":{"type":["string","null"]},"text":{"type":["string","null"]},"annotations_count":{"type":"integer"},"annotations_url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"title":"generated_title_null","summary":"generated_summary_null","text":"generated_text_null","annotationsCount":13,"annotationsUrl":"https:\\/\\/example.com\\/"}';
    public function __construct(public ?string $title, public ?string $summary, public ?string $text, #[\EventSauce\ObjectHydrator\MapFrom('annotations_count')] public int $annotationsCount, #[\EventSauce\ObjectHydrator\MapFrom('annotations_url')] public string $annotationsUrl)
    {
    }
}
