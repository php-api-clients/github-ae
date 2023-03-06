<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookIssuesMilestoned;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Issue
{
    public const SCHEMA_JSON = '{"required":["milestone"],"type":"object","properties":{"active_lock_reason":{"type":["string","null"]},"assignee":{"type":["object","null"]},"assignees":{"type":"array","items":{"type":["object","null"]}},"author_association":{"type":"string"},"body":{"type":["string","null"]},"closed_at":{"type":["string","null"]},"comments":{"type":"integer"},"comments_url":{"type":"string"},"created_at":{"type":"string"},"events_url":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"labels":{"type":"array","items":{"type":["object","null"]}},"labels_url":{"type":"string"},"locked":{"type":"boolean"},"milestone":{"title":"Milestone","required":["url","html_url","labels_url","id","node_id","number","title","description","creator","open_issues","closed_issues","state","created_at","updated_at","due_on","closed_at"],"type":"object","properties":{"closed_at":{"type":["string","null"],"format":"date-time"},"closed_issues":{"type":"integer"},"created_at":{"type":"string","format":"date-time"},"creator":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization","Mannequin"],"type":"string"},"url":{"type":"string","format":"uri"}}},"description":{"type":["string","null"]},"due_on":{"type":["string","null"],"format":"date-time"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"labels_url":{"type":"string","format":"uri"},"node_id":{"type":"string"},"number":{"type":"integer","description":"The number of the milestone."},"open_issues":{"type":"integer"},"state":{"enum":["open","closed"],"type":"string","description":"The state of the milestone."},"title":{"type":"string","description":"The title of the milestone."},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","format":"uri"}},"description":"A collection of related issues and pull requests."},"node_id":{"type":"string"},"number":{"type":"integer"},"performed_via_github_app":{"type":["object","null"]},"reactions":{"type":"object","properties":{"+1":{"type":"integer"},"-1":{"type":"integer"},"confused":{"type":"integer"},"eyes":{"type":"integer"},"heart":{"type":"integer"},"hooray":{"type":"integer"},"laugh":{"type":"integer"},"rocket":{"type":"integer"},"total_count":{"type":"integer"},"url":{"type":"string"}}},"repository_url":{"type":"string"},"state":{"type":"string"},"timeline_url":{"type":"string"},"title":{"type":"string"},"updated_at":{"type":"string"},"url":{"type":"string"},"user":{"type":"object","properties":{"avatar_url":{"type":"string"},"events_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"active_lock_reason":"generated_active_lock_reason","assignee":null,"assignees":[[]],"author_association":"generated_author_association","body":"generated_body","closed_at":"generated_closed_at","comments":13,"comments_url":"generated_comments_url","created_at":"generated_created_at","events_url":"generated_events_url","html_url":"generated_html_url","id":13,"labels":[[]],"labels_url":"generated_labels_url","locked":false,"milestone":{"closed_at":"generated_closed_at","closed_issues":13,"created_at":"generated_created_at","creator":{"avatar_url":"generated_avatar_url","deleted":false,"email":"generated_email","events_url":"generated_events_url","followers_url":"generated_followers_url","following_url":"generated_following_url","gists_url":"generated_gists_url","gravatar_id":"generated_gravatar_id","html_url":"generated_html_url","id":13,"login":"generated_login","name":"generated_name","node_id":"generated_node_id","organizations_url":"generated_organizations_url","received_events_url":"generated_received_events_url","repos_url":"generated_repos_url","site_admin":false,"starred_url":"generated_starred_url","subscriptions_url":"generated_subscriptions_url","type":"generated_type","url":"generated_url"},"description":"generated_description","due_on":"generated_due_on","html_url":"generated_html_url","id":13,"labels_url":"generated_labels_url","node_id":"generated_node_id","number":13,"open_issues":13,"state":"generated_state","title":"generated_title","updated_at":"generated_updated_at","url":"generated_url"},"node_id":"generated_node_id","number":13,"performed_via_github_app":null,"reactions":{"_PLUSES_1":13,"_MINUS_1":13,"confused":13,"eyes":13,"heart":13,"hooray":13,"laugh":13,"rocket":13,"total_count":13,"url":"generated_url"},"repository_url":"generated_repository_url","state":"generated_state","timeline_url":"generated_timeline_url","title":"generated_title","updated_at":"generated_updated_at","url":"generated_url","user":{"avatar_url":"generated_avatar_url","events_url":"generated_events_url","followers_url":"generated_followers_url","following_url":"generated_following_url","gists_url":"generated_gists_url","gravatar_id":"generated_gravatar_id","html_url":"generated_html_url","id":13,"login":"generated_login","node_id":"generated_node_id","organizations_url":"generated_organizations_url","received_events_url":"generated_received_events_url","repos_url":"generated_repos_url","site_admin":false,"starred_url":"generated_starred_url","subscriptions_url":"generated_subscriptions_url","type":"generated_type","url":"generated_url"}}';
    /**
     * @param array<\ApiClients\Client\GitHubAE\Schema\WebhookCheckSuiteCompleted\ActionsMeta> $assignees
     * @param array<\ApiClients\Client\GitHubAE\Schema\WebhookCheckSuiteCompleted\ActionsMeta> $labels
     * milestone: A collection of related issues and pull requests.
     */
    public function __construct(public ?string $active_lock_reason, public mixed $assignee, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\WebhookCheckSuiteCompleted\ActionsMeta::class)] public array $assignees, public string $author_association, public ?string $body, public ?string $closed_at, public int $comments, public string $comments_url, public string $created_at, public string $events_url, public string $html_url, public int $id, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\WebhookCheckSuiteCompleted\ActionsMeta::class)] public array $labels, public string $labels_url, public bool $locked, public ?Schema\WebhookIssuesDemilestoned\Milestone $milestone, public string $node_id, public int $number, public mixed $performed_via_github_app, public Schema\WebhookDiscussionCreated\Discussion\Reactions $reactions, public string $repository_url, public string $state, public string $timeline_url, public string $title, public string $updated_at, public string $url, public Schema\WebhookDeploymentCreated\WorkflowRun\HeadRepository\Owner $user)
    {
    }
}
