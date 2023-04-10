<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookSecretScanningAlertResolved;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Alert
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"created_at":{"type":"string","description":"The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time","readOnly":true},"html_url":{"type":"string","description":"The GitHub URL of the alert resource.","format":"uri","readOnly":true},"locations_url":{"type":"string","description":"The REST API URL of the code locations for this alert.","format":"uri"},"number":{"type":"integer","description":"The security alert number.","readOnly":true},"push_protection_bypassed":{"type":["boolean","null"],"description":"Whether push protection was bypassed for the detected secret."},"push_protection_bypassed_at":{"type":["string","null"],"description":"The time that push protection was bypassed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time"},"push_protection_bypassed_by":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"resolution":{"enum":[null,"false_positive","wont_fix","revoked","used_in_tests","pattern_deleted","pattern_edited"],"type":["string","null"],"description":"**Required when the `state` is `resolved`.** The reason for resolving the alert."},"resolved_at":{"type":["string","null"],"description":"The time that the alert was resolved in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time"},"resolved_by":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"resolution_comment":{"type":["string","null"],"description":"An optional comment to resolve an alert."},"secret":{"type":"string","description":"The secret that was detected."},"secret_type":{"type":"string","description":"The type of secret that secret scanning detected."},"secret_type_display_name":{"type":"string","description":"User-friendly name for the detected secret, matching the `secret_type`.\\nFor a list of built-in patterns, see \\"[Secret scanning patterns](https:\\/\\/docs.github.com\\/github-ae@latest\\/code-security\\/secret-scanning\\/secret-scanning-patterns#supported-secrets-for-advanced-security).\\""},"state":{"enum":["open","resolved"],"type":"string","description":"Sets the state of the secret scanning alert. You must provide `resolution` when you set the state to `resolved`."},"updated_at":{"type":"string","description":"The time that the alert was last updated in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time","readOnly":true},"url":{"type":"string","description":"The REST API URL of the alert resource.","format":"uri","readOnly":true}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"created_at":"1970-01-01T00:00:00+00:00","html_url":"https:\\/\\/example.com\\/","locations_url":"https:\\/\\/example.com\\/","number":13,"push_protection_bypassed":false,"push_protection_bypassed_at":"1970-01-01T00:00:00+00:00","push_protection_bypassed_by":null,"resolution":"generated_resolution_null","resolved_at":"1970-01-01T00:00:00+00:00","resolved_by":null,"resolution_comment":"generated_resolution_comment_null","secret":"generated_secret_null","secret_type":"generated_secret_type_null","secret_type_display_name":"generated_secret_type_display_name_null","state":"open","updated_at":"1970-01-01T00:00:00+00:00","url":"https:\\/\\/example.com\\/"}';
    /**
    * createdAt: The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
    * htmlUrl: The GitHub URL of the alert resource.
    * locationsUrl: The REST API URL of the code locations for this alert.
    * number: The security alert number.
    * pushProtectionBypassed: Whether push protection was bypassed for the detected secret.
    * pushProtectionBypassedAt: The time that push protection was bypassed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
    * resolution: **Required when the `state` is `resolved`.** The reason for resolving the alert.
    * resolvedAt: The time that the alert was resolved in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
    * resolutionComment: An optional comment to resolve an alert.
    * secret: The secret that was detected.
    * secretType: The type of secret that secret scanning detected.
    * secretTypeDisplayName: User-friendly name for the detected secret, matching the `secret_type`.
    For a list of built-in patterns, see "[Secret scanning patterns](https://docs.github.com/github-ae@latest/code-security/secret-scanning/secret-scanning-patterns#supported-secrets-for-advanced-security)."
    * state: Sets the state of the secret scanning alert. You must provide `resolution` when you set the state to `resolved`.
    * updatedAt: The time that the alert was last updated in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
    * url: The REST API URL of the alert resource.
    */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('created_at')] public ?string $createdAt, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public ?string $htmlUrl, #[\EventSauce\ObjectHydrator\MapFrom('locations_url')] public ?string $locationsUrl, public ?int $number, #[\EventSauce\ObjectHydrator\MapFrom('push_protection_bypassed')] public ?bool $pushProtectionBypassed, #[\EventSauce\ObjectHydrator\MapFrom('push_protection_bypassed_at')] public ?string $pushProtectionBypassedAt, #[\EventSauce\ObjectHydrator\MapFrom('push_protection_bypassed_by')] public mixed $pushProtectionBypassedBy, public ?string $resolution, #[\EventSauce\ObjectHydrator\MapFrom('resolved_at')] public ?string $resolvedAt, #[\EventSauce\ObjectHydrator\MapFrom('resolved_by')] public mixed $resolvedBy, #[\EventSauce\ObjectHydrator\MapFrom('resolution_comment')] public ?string $resolutionComment, public ?string $secret, #[\EventSauce\ObjectHydrator\MapFrom('secret_type')] public ?string $secretType, #[\EventSauce\ObjectHydrator\MapFrom('secret_type_display_name')] public ?string $secretTypeDisplayName, public ?string $state, #[\EventSauce\ObjectHydrator\MapFrom('updated_at')] public ?string $updatedAt, public ?string $url)
    {
    }
}
