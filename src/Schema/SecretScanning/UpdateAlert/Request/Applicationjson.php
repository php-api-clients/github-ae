<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\SecretScanning\UpdateAlert\Request;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["state"],"type":"object","properties":{"state":{"enum":["open","resolved"],"type":"string","description":"Sets the state of the secret scanning alert. You must provide `resolution` when you set the state to `resolved`."},"resolution":{"enum":["false_positive","wont_fix","revoked","used_in_tests",null],"type":["string","null"],"description":"**Required when the `state` is `resolved`.** The reason for resolving the alert."},"resolution_comment":{"type":["string","null"],"description":"An optional comment when closing an alert. Cannot be updated or deleted. Must be `null` when changing `state` to `open`."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"state":"open","resolution":"false_positive","resolution_comment":"generated_resolution_comment_null"}';
    /**
     * state: Sets the state of the secret scanning alert. You must provide `resolution` when you set the state to `resolved`.
     * resolution: **Required when the `state` is `resolved`.** The reason for resolving the alert.
     * resolutionComment: An optional comment when closing an alert. Cannot be updated or deleted. Must be `null` when changing `state` to `open`.
     */
    public function __construct(public string $state, public ?string $resolution, #[\EventSauce\ObjectHydrator\MapFrom('resolution_comment')] public ?string $resolutionComment)
    {
    }
}
