<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class BranchRestrictionPolicy
{
    public const SCHEMA_JSON = '{"title":"Branch Restriction Policy","required":["url","users_url","teams_url","apps_url","users","teams","apps"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"users_url":{"type":"string","format":"uri"},"teams_url":{"type":"string","format":"uri"},"apps_url":{"type":"string","format":"uri"},"users":{"type":"array","items":{"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"avatar_url":{"type":"string"},"gravatar_id":{"type":"string"},"url":{"type":"string"},"html_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"organizations_url":{"type":"string"},"repos_url":{"type":"string"},"events_url":{"type":"string"},"received_events_url":{"type":"string"},"type":{"type":"string"},"site_admin":{"type":"boolean"}}}},"teams":{"type":"array","items":{"type":"object","properties":{"id":{"type":"integer"},"node_id":{"type":"string"},"url":{"type":"string"},"html_url":{"type":"string"},"name":{"type":"string"},"slug":{"type":"string"},"description":{"type":["string","null"]},"privacy":{"type":"string"},"permission":{"type":"string"},"members_url":{"type":"string"},"repositories_url":{"type":"string"},"parent":{"type":["string","null"]}}}},"apps":{"type":"array","items":{"type":"object","properties":{"id":{"type":"integer"},"slug":{"type":"string"},"node_id":{"type":"string"},"owner":{"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"url":{"type":"string"},"repos_url":{"type":"string"},"events_url":{"type":"string"},"hooks_url":{"type":"string"},"issues_url":{"type":"string"},"members_url":{"type":"string"},"public_members_url":{"type":"string"},"avatar_url":{"type":"string"},"description":{"type":"string"},"gravatar_id":{"type":"string","examples":["\\"\\""]},"html_url":{"type":"string","examples":["\\"https:\\/\\/github.com\\/testorg-ea8ec76d71c3af4b\\""]},"followers_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/followers\\""]},"following_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/following{\\/other_user}\\""]},"gists_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/gists{\\/gist_id}\\""]},"starred_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/starred{\\/owner}{\\/repo}\\""]},"subscriptions_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/subscriptions\\""]},"organizations_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/orgs\\""]},"received_events_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/received_events\\""]},"type":{"type":"string","examples":["\\"Organization\\""]},"site_admin":{"type":"boolean","examples":[false]}}},"name":{"type":"string"},"description":{"type":"string"},"external_url":{"type":"string"},"html_url":{"type":"string"},"created_at":{"type":"string"},"updated_at":{"type":"string"},"permissions":{"type":"object","properties":{"metadata":{"type":"string"},"contents":{"type":"string"},"issues":{"type":"string"},"single_file":{"type":"string"}}},"events":{"type":"array","items":{"type":"string"}}}}}},"description":"Branch Restriction Policy"}';
    public const SCHEMA_TITLE = 'Branch Restriction Policy';
    public const SCHEMA_DESCRIPTION = 'Branch Restriction Policy';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"generated_url","users_url":"generated_users_url","teams_url":"generated_teams_url","apps_url":"generated_apps_url","users":[{"login":"generated_login","id":13,"node_id":"generated_node_id","avatar_url":"generated_avatar_url","gravatar_id":"generated_gravatar_id","url":"generated_url","html_url":"generated_html_url","followers_url":"generated_followers_url","following_url":"generated_following_url","gists_url":"generated_gists_url","starred_url":"generated_starred_url","subscriptions_url":"generated_subscriptions_url","organizations_url":"generated_organizations_url","repos_url":"generated_repos_url","events_url":"generated_events_url","received_events_url":"generated_received_events_url","type":"generated_type","site_admin":false}],"teams":[{"id":13,"node_id":"generated_node_id","url":"generated_url","html_url":"generated_html_url","name":"generated_name","slug":"generated_slug","description":"generated_description","privacy":"generated_privacy","permission":"generated_permission","members_url":"generated_members_url","repositories_url":"generated_repositories_url","parent":"generated_parent"}],"apps":[{"id":13,"slug":"generated_slug","node_id":"generated_node_id","owner":{"login":"generated_login","id":13,"node_id":"generated_node_id","url":"generated_url","repos_url":"generated_repos_url","events_url":"generated_events_url","hooks_url":"generated_hooks_url","issues_url":"generated_issues_url","members_url":"generated_members_url","public_members_url":"generated_public_members_url","avatar_url":"generated_avatar_url","description":"generated_description","gravatar_id":"\\"\\"","html_url":"\\"https:\\/\\/github.com\\/testorg-ea8ec76d71c3af4b\\"","followers_url":"\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/followers\\"","following_url":"\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/following{\\/other_user}\\"","gists_url":"\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/gists{\\/gist_id}\\"","starred_url":"\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/starred{\\/owner}{\\/repo}\\"","subscriptions_url":"\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/subscriptions\\"","organizations_url":"\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/orgs\\"","received_events_url":"\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/received_events\\"","type":"\\"Organization\\"","site_admin":false},"name":"generated_name","description":"generated_description","external_url":"generated_external_url","html_url":"generated_html_url","created_at":"generated_created_at","updated_at":"generated_updated_at","permissions":{"metadata":"generated_metadata","contents":"generated_contents","issues":"generated_issues","single_file":"generated_single_file"},"events":["generated_events"]}]}';
    /**
     * @param ?array<\ApiClients\Client\GitHubAE\Schema\Repository\TemplateRepository\Owner> $users
     * @param ?array<\ApiClients\Client\GitHubAE\Schema\BranchRestrictionPolicy\Teams> $teams
     * @param ?array<\ApiClients\Client\GitHubAE\Schema\BranchRestrictionPolicy\Apps> $apps
     */
    public function __construct(public ?string $url, public ?string $users_url, public ?string $teams_url, public ?string $apps_url, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\Repository\TemplateRepository\Owner::class)] public ?array $users, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\BranchRestrictionPolicy\Teams::class)] public ?array $teams, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\BranchRestrictionPolicy\Apps::class)] public ?array $apps)
    {
    }
}
