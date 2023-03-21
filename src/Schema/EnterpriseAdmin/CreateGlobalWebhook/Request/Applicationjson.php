<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\EnterpriseAdmin\CreateGlobalWebhook\Request;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["name","config"],"type":"object","properties":{"name":{"type":"string","description":"Must be passed as \\"web\\"."},"config":{"required":["url"],"type":"object","properties":{"url":{"type":"string","description":"The URL to which the payloads will be delivered."},"content_type":{"type":"string","description":"The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`."},"secret":{"type":"string","description":"If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value in the [`X-Hub-Signature`](https:\\/\\/docs.github.com\\/github-ae@latest\\/webhooks\\/event-payloads\\/#delivery-headers) header."},"insecure_ssl":{"type":"string","description":"Determines whether the SSL certificate of the host for `url` will be verified when delivering payloads. Supported values include `0` (verification is performed) and `1` (verification is not performed). The default is `0`. **We strongly recommend not setting this to `1` as you are subject to man-in-the-middle and other attacks.**"}},"description":"Key\\/value pairs to provide settings for this webhook."},"events":{"type":"array","items":{"type":"string"},"description":"The [events](https:\\/\\/docs.github.com\\/github-ae@latest\\/webhooks\\/event-payloads) that trigger this webhook. A global webhook can be triggered by `user` and `organization` events. Default: `user` and `organization`."},"active":{"type":"boolean","description":"Determines if notifications are sent when the webhook is triggered. Set to `true` to send notifications.","default":true}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name_null","config":{"url":"generated_url_null","content_type":"generated_content_type_null","secret":"generated_secret_null","insecure_ssl":"generated_insecure_ssl_null"},"events":["generated_events_null"],"active":false}';
    /**
     * name: Must be passed as "web".
     * config: Key/value pairs to provide settings for this webhook.
     * events: The [events](https://docs.github.com/github-ae@latest/webhooks/event-payloads) that trigger this webhook. A global webhook can be triggered by `user` and `organization` events. Default: `user` and `organization`.
     * @param ?array<string> $events
     * active: Determines if notifications are sent when the webhook is triggered. Set to `true` to send notifications.
     */
    public function __construct(public string $name, public Schema\EnterpriseAdmin\CreateGlobalWebhook\Request\Applicationjson\Config $config, public ?array $events, public ?bool $active)
    {
    }
}
