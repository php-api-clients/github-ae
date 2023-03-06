<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookIssuesLocked;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Issue
{
    public const SCHEMA_JSON = '{"required":["locked","active_lock_reason"],"type":"object","properties":{"active_lock_reason":{"enum":["resolved","off-topic","too heated","spam",null],"type":["string","null"]},"assignee":{"type":["object","null"]},"assignees":{"type":"array","items":{"type":["object","null"]}},"author_association":{"type":"string"},"body":{"type":["string","null"]},"closed_at":{"type":["string","null"]},"comments":{"type":"integer"},"comments_url":{"type":"string"},"created_at":{"type":"string"},"events_url":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"labels":{"type":"array","items":{"type":["object","null"]}},"labels_url":{"type":"string"},"locked":{"enum":[true],"type":"boolean"},"milestone":{"type":["object","null"]},"node_id":{"type":"string"},"number":{"type":"integer"},"performed_via_github_app":{"type":["object","null"]},"reactions":{"type":"object","properties":{"+1":{"type":"integer"},"-1":{"type":"integer"},"confused":{"type":"integer"},"eyes":{"type":"integer"},"heart":{"type":"integer"},"hooray":{"type":"integer"},"laugh":{"type":"integer"},"rocket":{"type":"integer"},"total_count":{"type":"integer"},"url":{"type":"string"}}},"repository_url":{"type":"string"},"state":{"type":"string"},"timeline_url":{"type":"string"},"title":{"type":"string"},"updated_at":{"type":"string"},"url":{"type":"string"},"user":{"type":"object","properties":{"avatar_url":{"type":"string"},"events_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"active_lock_reason":"generated_active_lock_reason","assignee":null,"assignees":null,"author_association":"generated_author_association","body":"generated_body","closed_at":"generated_closed_at","comments":13,"comments_url":"generated_comments_url","created_at":"generated_created_at","events_url":"generated_events_url","html_url":"generated_html_url","id":13,"labels":null,"labels_url":"generated_labels_url","locked":false,"milestone":null,"node_id":"generated_node_id","number":13,"performed_via_github_app":null,"reactions":{"_PLUSES_1":13,"_MINUS_1":13,"confused":13,"eyes":13,"heart":13,"hooray":13,"laugh":13,"rocket":13,"total_count":13,"url":"generated_url"},"repository_url":"generated_repository_url","state":"generated_state","timeline_url":"generated_timeline_url","title":"generated_title","updated_at":"generated_updated_at","url":"generated_url","user":{"avatar_url":"generated_avatar_url","events_url":"generated_events_url","followers_url":"generated_followers_url","following_url":"generated_following_url","gists_url":"generated_gists_url","gravatar_id":"generated_gravatar_id","html_url":"generated_html_url","id":13,"login":"generated_login","node_id":"generated_node_id","organizations_url":"generated_organizations_url","received_events_url":"generated_received_events_url","repos_url":"generated_repos_url","site_admin":false,"starred_url":"generated_starred_url","subscriptions_url":"generated_subscriptions_url","type":"generated_type","url":"generated_url"}}';
    public function __construct(public ?string $active_lock_reason, public mixed $assignee, public mixed $assignees, public string $author_association, public ?string $body, public ?string $closed_at, public int $comments, public string $comments_url, public string $created_at, public string $events_url, public string $html_url, public int $id, public mixed $labels, public string $labels_url, public ?bool $locked, public mixed $milestone, public string $node_id, public int $number, public mixed $performed_via_github_app, public Schema\WebhookDiscussionCreated\Discussion\Reactions $reactions, public string $repository_url, public string $state, public string $timeline_url, public string $title, public string $updated_at, public string $url, public Schema\WebhookDeploymentCreated\WorkflowRun\HeadRepository\Owner $user)
    {
    }
}
