<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class WebhookCheckRunCreatedFormEncoded
{
    public const SCHEMA_JSON = '{"title":"Check Run Created Event","required":["payload"],"type":"object","properties":{"payload":{"type":"string","description":"A URL-encoded string of the check_run.created JSON payload. The decoded payload is a JSON object."}},"description":"The check_run.created webhook encoded with URL encoding"}';
    public const SCHEMA_TITLE = 'Check Run Created Event';
    public const SCHEMA_DESCRIPTION = 'The check_run.created webhook encoded with URL encoding';
    public const SCHEMA_EXAMPLE_DATA = '{"payload":"generated_payload"}';
    /**
     * payload: A URL-encoded string of the check_run.created JSON payload. The decoded payload is a JSON object.
     */
    public function __construct(public string $payload)
    {
    }
}
