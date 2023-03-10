<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class CodeScanningAnalysisDeletion
{
    public const SCHEMA_JSON = '{"title":"Analysis deletion","required":["next_analysis_url","confirm_delete_url"],"type":"object","properties":{"next_analysis_url":{"type":["string","null"],"description":"Next deletable analysis in chain, without last analysis deletion confirmation","format":"uri","readOnly":true},"confirm_delete_url":{"type":["string","null"],"description":"Next deletable analysis in chain, with last analysis deletion confirmation","format":"uri","readOnly":true}},"description":"Successful deletion of a code scanning analysis"}';
    public const SCHEMA_TITLE = 'Analysis deletion';
    public const SCHEMA_DESCRIPTION = 'Successful deletion of a code scanning analysis';
    public const SCHEMA_EXAMPLE_DATA = '{"next_analysis_url":"generated_next_analysis_url","confirm_delete_url":"generated_confirm_delete_url"}';
    /**
     * next_analysis_url: Next deletable analysis in chain, without last analysis deletion confirmation
     * confirm_delete_url: Next deletable analysis in chain, with last analysis deletion confirmation
     */
    public function __construct(public ?string $next_analysis_url, public ?string $confirm_delete_url)
    {
    }
}
