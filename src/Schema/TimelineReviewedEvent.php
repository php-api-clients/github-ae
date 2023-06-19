<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class TimelineReviewedEvent
{
    public const SCHEMA_JSON         = '{"title":"Timeline Reviewed Event","required":["event","id","node_id","user","body","state","commit_id","html_url","pull_request_url","_links","author_association"],"type":"object","properties":{"event":{"type":"string"},"id":{"type":"integer","description":"Unique identifier of the review","examples":[42]},"node_id":{"type":"string","examples":["MDE3OlB1bGxSZXF1ZXN0UmV2aWV3ODA="]},"user":{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."},"body":{"type":["string","null"],"description":"The text of the review.","examples":["This looks great."]},"state":{"type":"string","examples":["CHANGES_REQUESTED"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/pull\\/12#pullrequestreview-80"]},"pull_request_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/12"]},"_links":{"required":["html","pull_request"],"type":"object","properties":{"html":{"required":["href"],"type":"object","properties":{"href":{"type":"string"}}},"pull_request":{"required":["href"],"type":"object","properties":{"href":{"type":"string"}}}}},"submitted_at":{"type":"string","format":"date-time"},"commit_id":{"type":"string","description":"A commit SHA for the review.","examples":["54bb654c9e6025347f57900a4a5c2313a96b8035"]},"body_html":{"type":"string"},"body_text":{"type":"string"},"author_association":{"title":"author_association","enum":["COLLABORATOR","CONTRIBUTOR","FIRST_TIMER","FIRST_TIME_CONTRIBUTOR","MANNEQUIN","MEMBER","NONE","OWNER"],"type":"string","description":"How the author is associated with the repository.","examples":["OWNER"]}},"description":"Timeline Reviewed Event"}';
    public const SCHEMA_TITLE        = 'Timeline Reviewed Event';
    public const SCHEMA_DESCRIPTION  = 'Timeline Reviewed Event';
    public const SCHEMA_EXAMPLE_DATA = '{"event":"generated","id":42,"node_id":"MDE3OlB1bGxSZXF1ZXN0UmV2aWV3ODA=","user":{"name":"generated","email":"generated","login":"octocat","id":1,"node_id":"MDQ6VXNlcjE=","avatar_url":"https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif","gravatar_id":"41d064eb2195891e12d0413f63227ea7","url":"https:\\/\\/api.github.com\\/users\\/octocat","html_url":"https:\\/\\/github.com\\/octocat","followers_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/followers","following_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}","gists_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}","starred_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}","subscriptions_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions","organizations_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/orgs","repos_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/repos","events_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}","received_events_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/received_events","type":"User","site_admin":false,"starred_at":"\\"2020-07-09T00:17:55Z\\""},"body":"This looks great.","state":"CHANGES_REQUESTED","html_url":"https:\\/\\/github.com\\/octocat\\/Hello-World\\/pull\\/12#pullrequestreview-80","pull_request_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/12","_links":{"html":{"href":"generated"},"pull_request":{"href":"generated"}},"submitted_at":"1970-01-01T00:00:00+00:00","commit_id":"54bb654c9e6025347f57900a4a5c2313a96b8035","body_html":"generated","body_text":"generated","author_association":"OWNER"}';

    /**
     * id: Unique identifier of the review
     * user: A GitHub user.
     * body: The text of the review.
     * commitId: A commit SHA for the review.
     * authorAssociation: How the author is associated with the repository.
     */
    public function __construct(public string $event, public int $id, #[MapFrom('node_id')]
    public string $nodeId, public Schema\SimpleUser $user, public string|null $body, public string $state, #[MapFrom('html_url')]
    public string $htmlUrl, #[MapFrom('pull_request_url')]
    public string $pullRequestUrl, #[MapFrom('_links')]
    public Schema\TimelineReviewedEvent\Links $links, #[MapFrom('submitted_at')]
    public string|null $submittedAt, #[MapFrom('commit_id')]
    public string $commitId, #[MapFrom('body_html')]
    public string|null $bodyHtml, #[MapFrom('body_text')]
    public string|null $bodyText, #[MapFrom('author_association')]
    public string $authorAssociation,)
    {
    }
}
