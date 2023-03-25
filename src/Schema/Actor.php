<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Actor
{
    public const SCHEMA_JSON = '{"title":"Actor","required":["id","login","gravatar_id","url","avatar_url"],"type":"object","properties":{"id":{"type":"integer"},"login":{"type":"string"},"display_login":{"type":"string"},"gravatar_id":{"type":["string","null"]},"url":{"type":"string","format":"uri"},"avatar_url":{"type":"string","format":"uri"}},"description":"Actor"}';
    public const SCHEMA_TITLE = 'Actor';
    public const SCHEMA_DESCRIPTION = 'Actor';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"login":"generated_login_null","displayLogin":"generated_display_login_null","gravatarId":"generated_gravatar_id_null","url":"https:\\/\\/example.com\\/","avatarUrl":"https:\\/\\/example.com\\/"}';
    public function __construct(public int $id, public string $login, #[\EventSauce\ObjectHydrator\MapFrom('display_login')] public ?string $displayLogin, #[\EventSauce\ObjectHydrator\MapFrom('gravatar_id')] public ?string $gravatarId, public string $url, #[\EventSauce\ObjectHydrator\MapFrom('avatar_url')] public string $avatarUrl)
    {
    }
}
