<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Contributor
{
    public const SCHEMA_JSON = '{"title":"Contributor","required":["contributions","type"],"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"avatar_url":{"type":"string","format":"uri"},"gravatar_id":{"type":["string","null"]},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string","format":"uri"},"organizations_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"events_url":{"type":"string"},"received_events_url":{"type":"string","format":"uri"},"type":{"type":"string"},"site_admin":{"type":"boolean"},"contributions":{"type":"integer"},"email":{"type":"string"},"name":{"type":"string"}},"description":"Contributor"}';
    public const SCHEMA_TITLE = 'Contributor';
    public const SCHEMA_DESCRIPTION = 'Contributor';
    public const SCHEMA_EXAMPLE_DATA = '{"login":"generated_login_null","id":13,"node_id":"generated_node_id_null","avatar_url":"https:\\/\\/example.com\\/","gravatar_id":"generated_gravatar_id_null","url":"https:\\/\\/example.com\\/","html_url":"https:\\/\\/example.com\\/","followers_url":"https:\\/\\/example.com\\/","following_url":"generated_following_url_null","gists_url":"generated_gists_url_null","starred_url":"generated_starred_url_null","subscriptions_url":"https:\\/\\/example.com\\/","organizations_url":"https:\\/\\/example.com\\/","repos_url":"https:\\/\\/example.com\\/","events_url":"generated_events_url_null","received_events_url":"https:\\/\\/example.com\\/","type":"generated_type_null","site_admin":false,"contributions":13,"email":"generated_email_null","name":"generated_name_null"}';
    public function __construct(public ?string $login, public ?int $id, public ?string $node_id, public ?string $avatar_url, public ?string $gravatar_id, public ?string $url, public ?string $html_url, public ?string $followers_url, public ?string $following_url, public ?string $gists_url, public ?string $starred_url, public ?string $subscriptions_url, public ?string $organizations_url, public ?string $repos_url, public ?string $events_url, public ?string $received_events_url, public string $type, public ?bool $site_admin, public int $contributions, public ?string $email, public ?string $name)
    {
    }
}
