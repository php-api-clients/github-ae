<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class ProjectCard
{
    public const SCHEMA_JSON = '{"title":"Project Card","required":["id","node_id","note","url","column_url","project_url","creator","created_at","updated_at"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/projects\\/columns\\/cards\\/1478"]},"id":{"type":"integer","description":"The project card\'s ID","examples":[42]},"node_id":{"type":"string","examples":["MDExOlByb2plY3RDYXJkMTQ3OA=="]},"note":{"type":["string","null"],"examples":["Add payload for delete Project column"]},"creator":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"created_at":{"type":"string","format":"date-time","examples":["2016-09-05T14:21:06Z"]},"updated_at":{"type":"string","format":"date-time","examples":["2016-09-05T14:20:22Z"]},"archived":{"type":"boolean","description":"Whether or not the card is archived","examples":[false]},"column_name":{"type":"string"},"project_id":{"type":"string"},"column_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/projects\\/columns\\/367"]},"content_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/api-playground\\/projects-test\\/issues\\/3"]},"project_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/projects\\/120"]}},"description":"Project cards represent a scope of work."}';
    public const SCHEMA_TITLE = 'Project Card';
    public const SCHEMA_DESCRIPTION = 'Project cards represent a scope of work.';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"https:\\/\\/api.github.com\\/projects\\/columns\\/cards\\/1478","id":42,"nodeId":"MDExOlByb2plY3RDYXJkMTQ3OA==","note":"Add payload for delete Project column","creator":null,"createdAt":"2016-09-05T14:21:06Z","updatedAt":"2016-09-05T14:20:22Z","archived":false,"columnName":"generated_column_name_null","projectId":"generated_project_id_null","columnUrl":"https:\\/\\/api.github.com\\/projects\\/columns\\/367","contentUrl":"https:\\/\\/api.github.com\\/repos\\/api-playground\\/projects-test\\/issues\\/3","projectUrl":"https:\\/\\/api.github.com\\/projects\\/120"}';
    /**
     * id: The project card's ID
     * archived: Whether or not the card is archived
     */
    public function __construct(public string $url, public int $id, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, public ?string $note, public mixed $creator, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public string $createdAt, #[\EventSauce\ObjectHydrator\MapFrom('updated_at')] public string $updatedAt, public ?bool $archived, #[\EventSauce\ObjectHydrator\MapFrom('column_name')] public ?string $columnName, #[\EventSauce\ObjectHydrator\MapFrom('project_id')] public ?string $projectId, #[\EventSauce\ObjectHydrator\MapFrom('column_url')] public string $columnUrl, #[\EventSauce\ObjectHydrator\MapFrom('content_url')] public ?string $contentUrl, #[\EventSauce\ObjectHydrator\MapFrom('project_url')] public string $projectUrl)
    {
    }
}
