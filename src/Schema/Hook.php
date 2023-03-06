<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Hook
{
    public const SCHEMA_JSON = '{"title":"Webhook","required":["id","url","type","name","active","events","config","ping_url","created_at","updated_at","last_response","test_url"],"type":"object","properties":{"type":{"type":"string"},"id":{"type":"integer","description":"Unique identifier of the webhook.","examples":[42]},"name":{"type":"string","description":"The name of a valid service, use \'web\' for a webhook.","examples":["web"]},"active":{"type":"boolean","description":"Determines whether the hook is actually triggered on pushes.","examples":[true]},"events":{"type":"array","items":{"type":"string"},"description":"Determines what events the hook is triggered for. Default: [\'push\'].","examples":["push","pull_request"]},"config":{"type":"object","properties":{"email":{"type":"string","examples":["\\"foo@bar.com\\""]},"password":{"type":"string","examples":["\\"foo\\""]},"room":{"type":"string","examples":["\\"roomer\\""]},"subdomain":{"type":"string","examples":["\\"foo\\""]},"url":{"type":"string","description":"The URL to which the payloads will be delivered.","format":"uri","examples":["https:\\/\\/example.com\\/webhook"]},"insecure_ssl":{"oneOf":[{"type":"string","description":"Determines whether the SSL certificate of the host for `url` will be verified when delivering payloads. Supported values include `0` (verification is performed) and `1` (verification is not performed). The default is `0`. **We strongly recommend not setting this to `1` as you are subject to man-in-the-middle and other attacks.**","examples":["\\"0\\""]},{"type":"number"}]},"content_type":{"type":"string","description":"The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.","examples":["\\"json\\""]},"digest":{"type":"string","examples":["\\"sha256\\""]},"secret":{"type":"string","description":"If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https:\\/\\/docs.github.com\\/github-ae@latest\\/webhooks\\/event-payloads\\/#delivery-headers).","examples":["\\"********\\""]},"token":{"type":"string","examples":["\\"abc\\""]}}},"updated_at":{"type":"string","format":"date-time","examples":["2011-09-06T20:39:23Z"]},"created_at":{"type":"string","format":"date-time","examples":["2011-09-06T17:26:27Z"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks\\/1"]},"test_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks\\/1\\/test"]},"ping_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks\\/1\\/pings"]},"deliveries_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks\\/1\\/deliveries"]},"last_response":{"title":"Hook Response","required":["code","status","message"],"type":"object","properties":{"code":{"type":["integer","null"]},"status":{"type":["string","null"]},"message":{"type":["string","null"]}}}},"description":"Webhooks for repositories."}';
    public const SCHEMA_TITLE = 'Webhook';
    public const SCHEMA_DESCRIPTION = 'Webhooks for repositories.';
    public const SCHEMA_EXAMPLE_DATA = '{"type":"generated_type","id":42,"name":"web","active":true,"events":["push"],"config":{"email":"\\"foo@bar.com\\"","password":"\\"foo\\"","room":"\\"roomer\\"","subdomain":"\\"foo\\"","url":"https:\\/\\/example.com\\/webhook","insecure_ssl":13,"content_type":"\\"json\\"","digest":"\\"sha256\\"","secret":"\\"********\\"","token":"\\"abc\\""},"updated_at":"2011-09-06T20:39:23Z","created_at":"2011-09-06T17:26:27Z","url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks\\/1","test_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks\\/1\\/test","ping_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks\\/1\\/pings","deliveries_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks\\/1\\/deliveries","last_response":{"code":13,"status":"generated_status","message":"generated_message"}}';
    /**
     * id: Unique identifier of the webhook.
     * name: The name of a valid service, use 'web' for a webhook.
     * active: Determines whether the hook is actually triggered on pushes.
     * events: Determines what events the hook is triggered for. Default: ['push'].
     * @param ?array<string> $events
     */
    public function __construct(public ?string $type, public ?int $id, public ?string $name, public ?bool $active, public ?array $events, public ?Schema\Hook\Config $config, public ?string $updated_at, public ?string $created_at, public ?string $url, public ?string $test_url, public ?string $ping_url, public string $deliveries_url, public ?Schema\HookResponse $last_response)
    {
    }
}
