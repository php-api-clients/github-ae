<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Schema\BranchRestrictionPolicy;

use ApiClients\Client\GitHubAE\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Apps
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"id":{"type":"integer"},"slug":{"type":"string"},"node_id":{"type":"string"},"owner":{"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"url":{"type":"string"},"repos_url":{"type":"string"},"events_url":{"type":"string"},"hooks_url":{"type":"string"},"issues_url":{"type":"string"},"members_url":{"type":"string"},"public_members_url":{"type":"string"},"avatar_url":{"type":"string"},"description":{"type":"string"},"gravatar_id":{"type":"string","examples":["\\"\\""]},"html_url":{"type":"string","examples":["\\"https:\\/\\/github.com\\/testorg-ea8ec76d71c3af4b\\""]},"followers_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/followers\\""]},"following_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/following{\\/other_user}\\""]},"gists_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/gists{\\/gist_id}\\""]},"starred_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/starred{\\/owner}{\\/repo}\\""]},"subscriptions_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/subscriptions\\""]},"organizations_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/orgs\\""]},"received_events_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/received_events\\""]},"type":{"type":"string","examples":["\\"Organization\\""]},"site_admin":{"type":"boolean","examples":[false]}}},"name":{"type":"string"},"description":{"type":"string"},"external_url":{"type":"string"},"html_url":{"type":"string"},"created_at":{"type":"string"},"updated_at":{"type":"string"},"permissions":{"type":"object","properties":{"metadata":{"type":"string"},"contents":{"type":"string"},"issues":{"type":"string"},"single_file":{"type":"string"}}},"events":{"type":"array","items":{"type":"string"}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"slug":"generated_slug_null","node_id":"generated_node_id_null","owner":{"login":"generated_login_null","id":13,"node_id":"generated_node_id_null","url":"generated_url_null","repos_url":"generated_repos_url_null","events_url":"generated_events_url_null","hooks_url":"generated_hooks_url_null","issues_url":"generated_issues_url_null","members_url":"generated_members_url_null","public_members_url":"generated_public_members_url_null","avatar_url":"generated_avatar_url_null","description":"generated_description_null","gravatar_id":"\\"\\"","html_url":"\\"https:\\/\\/github.com\\/testorg-ea8ec76d71c3af4b\\"","followers_url":"\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/followers\\"","following_url":"\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/following{\\/other_user}\\"","gists_url":"\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/gists{\\/gist_id}\\"","starred_url":"\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/starred{\\/owner}{\\/repo}\\"","subscriptions_url":"\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/subscriptions\\"","organizations_url":"\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/orgs\\"","received_events_url":"\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/received_events\\"","type":"\\"Organization\\"","site_admin":false},"name":"generated_name_null","description":"generated_description_null","external_url":"generated_external_url_null","html_url":"generated_html_url_null","created_at":"generated_created_at_null","updated_at":"generated_updated_at_null","permissions":{"metadata":"generated_metadata_null","contents":"generated_contents_null","issues":"generated_issues_null","single_file":"generated_single_file_null"},"events":["generated_events_null"]}';

    /**
     * @param ?array<string> $events
     */
    public function __construct(public ?int $id, public ?string $slug, #[MapFrom('node_id')] public ?string $nodeId, public ?Schema\BranchRestrictionPolicy\Apps\Owner $owner, public ?string $name, public ?string $description, #[MapFrom('external_url')] public ?string $externalUrl, #[MapFrom('html_url')] public ?string $htmlUrl, #[MapFrom('created_at')] public ?string $createdAt, #[MapFrom('updated_at')] public ?string $updatedAt, public ?Schema\BranchRestrictionPolicy\Apps\Permissions $permissions, public ?array $events)
    {
    }
}
