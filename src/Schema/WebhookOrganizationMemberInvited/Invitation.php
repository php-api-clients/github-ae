<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookOrganizationMemberInvited;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Invitation
{
    public const SCHEMA_JSON = '{"required":["id","node_id","login","email","role","created_at","failed_at","failed_reason","inviter","team_count","invitation_teams_url"],"type":"object","properties":{"created_at":{"type":"string","format":"date-time"},"email":{"type":["string","null"]},"failed_at":{"type":["string","null"],"format":"date-time"},"failed_reason":{"type":["string","null"]},"id":{"type":"number"},"invitation_teams_url":{"type":"string","format":"uri"},"inviter":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"login":{"type":["string","null"]},"node_id":{"type":"string"},"role":{"type":"string"},"team_count":{"type":"number"},"invitation_source":{"type":"string"}},"description":"The invitation for the user or email if the action is `member_invited`."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The invitation for the user or email if the action is `member_invited`.';
    public const SCHEMA_EXAMPLE_DATA = '{"createdAt":"1970-01-01T00:00:00+00:00","email":"generated_email_null","failedAt":"1970-01-01T00:00:00+00:00","failedReason":"generated_failed_reason_null","id":13,"invitationTeamsUrl":"https:\\/\\/example.com\\/","inviter":{"avatarUrl":"https:\\/\\/example.com\\/","deleted":false,"email":"generated_email_null","eventsUrl":"generated_events_url_uri-template","followersUrl":"https:\\/\\/example.com\\/","followingUrl":"generated_following_url_uri-template","gistsUrl":"generated_gists_url_uri-template","gravatarId":"generated_gravatar_id_null","htmlUrl":"https:\\/\\/example.com\\/","id":13,"login":"generated_login_null","name":"generated_name_null","nodeId":"generated_node_id_null","organizationsUrl":"https:\\/\\/example.com\\/","receivedEventsUrl":"https:\\/\\/example.com\\/","reposUrl":"https:\\/\\/example.com\\/","siteAdmin":false,"starredUrl":"generated_starred_url_uri-template","subscriptionsUrl":"https:\\/\\/example.com\\/","type":"Bot","url":"https:\\/\\/example.com\\/"},"login":"generated_login_null","nodeId":"generated_node_id_null","role":"generated_role_null","teamCount":13,"invitationSource":"generated_invitation_source_null"}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('created_at')] public string $createdAt, public ?string $email, #[\EventSauce\ObjectHydrator\MapFrom('failed_at')] public ?string $failedAt, #[\EventSauce\ObjectHydrator\MapFrom('failed_reason')] public ?string $failedReason, public int $id, #[\EventSauce\ObjectHydrator\MapFrom('invitation_teams_url')] public string $invitationTeamsUrl, public ?Schema\Discussion\AnswerChosenBy $inviter, public ?string $login, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, public string $role, #[\EventSauce\ObjectHydrator\MapFrom('team_count')] public int $teamCount, #[\EventSauce\ObjectHydrator\MapFrom('invitation_source')] public ?string $invitationSource)
    {
    }
}
