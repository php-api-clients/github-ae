<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Schema\AliasAbstract;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Abstractf9f083e1067c6dcb2fb6ac3ddb318be9
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"avatar_url":{"type":"string"},"events_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"avatar_url":"generated_avatar_url_null","events_url":"generated_events_url_null","followers_url":"generated_followers_url_null","following_url":"generated_following_url_null","gists_url":"generated_gists_url_null","gravatar_id":"generated_gravatar_id_null","html_url":"generated_html_url_null","id":13,"login":"generated_login_null","node_id":"generated_node_id_null","organizations_url":"generated_organizations_url_null","received_events_url":"generated_received_events_url_null","repos_url":"generated_repos_url_null","site_admin":false,"starred_url":"generated_starred_url_null","subscriptions_url":"generated_subscriptions_url_null","type":"generated_type_null","url":"generated_url_null"}';

    public function __construct(#[MapFrom('avatar_url')] public ?string $avatarUrl, #[MapFrom('events_url')] public ?string $eventsUrl, #[MapFrom('followers_url')] public ?string $followersUrl, #[MapFrom('following_url')] public ?string $followingUrl, #[MapFrom('gists_url')] public ?string $gistsUrl, #[MapFrom('gravatar_id')] public ?string $gravatarId, #[MapFrom('html_url')] public ?string $htmlUrl, public ?int $id, public ?string $login, #[MapFrom('node_id')] public ?string $nodeId, #[MapFrom('organizations_url')] public ?string $organizationsUrl, #[MapFrom('received_events_url')] public ?string $receivedEventsUrl, #[MapFrom('repos_url')] public ?string $reposUrl, #[MapFrom('site_admin')] public ?bool $siteAdmin, #[MapFrom('starred_url')] public ?string $starredUrl, #[MapFrom('subscriptions_url')] public ?string $subscriptionsUrl, public ?string $type, public ?string $url)
    {
    }
}
