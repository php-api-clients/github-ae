<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Feed
{
    public const SCHEMA_JSON = '{"title":"Feed","required":["_links","timeline_url","user_url"],"type":"object","properties":{"timeline_url":{"type":"string","examples":["https:\\/\\/github.com\\/timeline"]},"user_url":{"type":"string","examples":["https:\\/\\/github.com\\/{user}"]},"current_user_public_url":{"type":"string","examples":["https:\\/\\/github.com\\/octocat"]},"current_user_url":{"type":"string","examples":["https:\\/\\/github.com\\/octocat.private?token=abc123"]},"current_user_actor_url":{"type":"string","examples":["https:\\/\\/github.com\\/octocat.private.actor?token=abc123"]},"current_user_organization_url":{"type":"string","examples":["https:\\/\\/github.com\\/octocat-org"]},"current_user_organization_urls":{"type":"array","items":{"type":"string","format":"uri"},"examples":["https:\\/\\/github.com\\/organizations\\/github\\/octocat.private.atom?token=abc123"]},"security_advisories_url":{"type":"string","examples":["https:\\/\\/github.com\\/security-advisories"]},"repository_discussions_url":{"type":"string","description":"A feed of discussions for a given repository.","examples":["https:\\/\\/github.com\\/{user}\\/{repo}\\/discussions"]},"repository_discussions_category_url":{"type":"string","description":"A feed of discussions for a given repository and category.","examples":["https:\\/\\/github.com\\/{user}\\/{repo}\\/discussions\\/categories\\/{category}"]},"_links":{"required":["timeline","user"],"type":"object","properties":{"timeline":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"user":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"security_advisories":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"current_user":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"current_user_public":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"current_user_actor":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"current_user_organization":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"current_user_organizations":{"type":"array","items":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"}},"repository_discussions":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"repository_discussions_category":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"}}}},"description":"Feed"}';
    public const SCHEMA_TITLE = 'Feed';
    public const SCHEMA_DESCRIPTION = 'Feed';
    public const SCHEMA_EXAMPLE_DATA = '{"timelineUrl":"https:\\/\\/github.com\\/timeline","userUrl":"https:\\/\\/github.com\\/{user}","currentUserPublicUrl":"https:\\/\\/github.com\\/octocat","currentUserUrl":"https:\\/\\/github.com\\/octocat.private?token=abc123","currentUserActorUrl":"https:\\/\\/github.com\\/octocat.private.actor?token=abc123","currentUserOrganizationUrl":"https:\\/\\/github.com\\/octocat-org","currentUserOrganizationUrls":["https:\\/\\/github.com\\/organizations\\/github\\/octocat.private.atom?token=abc123"],"securityAdvisoriesUrl":"https:\\/\\/github.com\\/security-advisories","repositoryDiscussionsUrl":"https:\\/\\/github.com\\/{user}\\/{repo}\\/discussions","repositoryDiscussionsCategoryUrl":"https:\\/\\/github.com\\/{user}\\/{repo}\\/discussions\\/categories\\/{category}","links":{"timeline":{"href":"generated_href_null","type":"generated_type_null"},"user":{"href":"generated_href_null","type":"generated_type_null"},"securityAdvisories":{"href":"generated_href_null","type":"generated_type_null"},"currentUser":{"href":"generated_href_null","type":"generated_type_null"},"currentUserPublic":{"href":"generated_href_null","type":"generated_type_null"},"currentUserActor":{"href":"generated_href_null","type":"generated_type_null"},"currentUserOrganization":{"href":"generated_href_null","type":"generated_type_null"},"currentUserOrganizations":[{"href":"generated_href_null","type":"generated_type_null"}],"repositoryDiscussions":{"href":"generated_href_null","type":"generated_type_null"},"repositoryDiscussionsCategory":{"href":"generated_href_null","type":"generated_type_null"}}}';
    /**
     * @param ?array<string> $currentUserOrganizationUrls
     * repositoryDiscussionsUrl: A feed of discussions for a given repository.
     * repositoryDiscussionsCategoryUrl: A feed of discussions for a given repository and category.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('timeline_url')] public string $timelineUrl, #[\EventSauce\ObjectHydrator\MapFrom('user_url')] public string $userUrl, #[\EventSauce\ObjectHydrator\MapFrom('current_user_public_url')] public ?string $currentUserPublicUrl, #[\EventSauce\ObjectHydrator\MapFrom('current_user_url')] public ?string $currentUserUrl, #[\EventSauce\ObjectHydrator\MapFrom('current_user_actor_url')] public ?string $currentUserActorUrl, #[\EventSauce\ObjectHydrator\MapFrom('current_user_organization_url')] public ?string $currentUserOrganizationUrl, #[\EventSauce\ObjectHydrator\MapFrom('current_user_organization_urls')] public ?array $currentUserOrganizationUrls, #[\EventSauce\ObjectHydrator\MapFrom('security_advisories_url')] public ?string $securityAdvisoriesUrl, #[\EventSauce\ObjectHydrator\MapFrom('repository_discussions_url')] public ?string $repositoryDiscussionsUrl, #[\EventSauce\ObjectHydrator\MapFrom('repository_discussions_category_url')] public ?string $repositoryDiscussionsCategoryUrl, #[\EventSauce\ObjectHydrator\MapFrom('_links')] public Schema\Feed\Links $links)
    {
    }
}
