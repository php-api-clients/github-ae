<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookIssueCommentCreated;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Issue
{
    public const SCHEMA_JSON = '{"title":"Issue","required":["url","repository_url","labels_url","comments_url","events_url","html_url","id","node_id","number","title","user","assignees","milestone","comments","created_at","updated_at","closed_at","author_association","active_lock_reason","body","reactions"],"type":"object","properties":{"active_lock_reason":{"enum":["resolved","off-topic","too heated","spam",null],"type":["string","null"]},"assignee":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization","Mannequin"],"type":"string"},"url":{"type":"string","format":"uri"}}},"assignees":{"type":"array","items":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization","Mannequin"],"type":"string"},"url":{"type":"string","format":"uri"}}}},"author_association":{"title":"AuthorAssociation","enum":["COLLABORATOR","CONTRIBUTOR","FIRST_TIMER","FIRST_TIME_CONTRIBUTOR","MANNEQUIN","MEMBER","NONE","OWNER"],"type":"string","description":"How the author is associated with the repository."},"body":{"type":["string","null"],"description":"Contents of the issue"},"closed_at":{"type":["string","null"],"format":"date-time"},"comments":{"type":"integer"},"comments_url":{"type":"string","format":"uri"},"created_at":{"type":"string","format":"date-time"},"draft":{"type":"boolean"},"events_url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"labels":{"type":"array","items":{"title":"Label","required":["id","node_id","url","name","color","default","description"],"type":"object","properties":{"color":{"type":"string","description":"6-character hex code, without the leading #, identifying the color"},"default":{"type":"boolean"},"description":{"type":["string","null"]},"id":{"type":"integer"},"name":{"type":"string","description":"The name of the label."},"node_id":{"type":"string"},"url":{"type":"string","description":"URL for the label","format":"uri"}}}},"labels_url":{"type":"string","format":"uri-template"},"locked":{"type":"boolean"},"milestone":{"title":"Milestone","required":["url","html_url","labels_url","id","node_id","number","title","description","creator","open_issues","closed_issues","state","created_at","updated_at","due_on","closed_at"],"type":["object","null"],"properties":{"closed_at":{"type":["string","null"],"format":"date-time"},"closed_issues":{"type":"integer"},"created_at":{"type":"string","format":"date-time"},"creator":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization","Mannequin"],"type":"string"},"url":{"type":"string","format":"uri"}}},"description":{"type":["string","null"]},"due_on":{"type":["string","null"],"format":"date-time"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"labels_url":{"type":"string","format":"uri"},"node_id":{"type":"string"},"number":{"type":"integer","description":"The number of the milestone."},"open_issues":{"type":"integer"},"state":{"enum":["open","closed"],"type":"string","description":"The state of the milestone."},"title":{"type":"string","description":"The title of the milestone."},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","format":"uri"}},"description":"A collection of related issues and pull requests."},"node_id":{"type":"string"},"number":{"type":"integer"},"performed_via_github_app":{"title":"App","required":["id","node_id","owner","name","description","external_url","html_url","created_at","updated_at"],"type":["object","null"],"properties":{"created_at":{"type":["string","null"],"format":"date-time"},"description":{"type":["string","null"]},"events":{"type":"array","items":{"enum":["branch_protection_rule","check_run","check_suite","code_scanning_alert","commit_comment","content_reference","create","delete","deployment","deployment_review","deployment_status","deploy_key","discussion","discussion_comment","fork","gollum","issues","issue_comment","label","member","membership","milestone","organization","org_block","page_build","project","project_card","project_column","public","pull_request","pull_request_review","pull_request_review_comment","push","registry_package","release","repository","repository_dispatch","secret_scanning_alert","star","status","team","team_add","watch","workflow_dispatch","workflow_run","reminder","pull_request_review_thread"],"type":"string"},"description":"The list of events for the GitHub app"},"external_url":{"type":["string","null"],"format":"uri"},"html_url":{"type":"string","format":"uri"},"id":{"type":["integer","null"],"description":"Unique identifier of the GitHub app"},"name":{"type":"string","description":"The name of the GitHub app"},"node_id":{"type":"string"},"owner":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"permissions":{"type":"object","properties":{"actions":{"enum":["read","write"],"type":"string"},"administration":{"enum":["read","write"],"type":"string"},"checks":{"enum":["read","write"],"type":"string"},"content_references":{"enum":["read","write"],"type":"string"},"contents":{"enum":["read","write"],"type":"string"},"deployments":{"enum":["read","write"],"type":"string"},"discussions":{"enum":["read","write"],"type":"string"},"emails":{"enum":["read","write"],"type":"string"},"environments":{"enum":["read","write"],"type":"string"},"issues":{"enum":["read","write"],"type":"string"},"keys":{"enum":["read","write"],"type":"string"},"members":{"enum":["read","write"],"type":"string"},"metadata":{"enum":["read","write"],"type":"string"},"organization_administration":{"enum":["read","write"],"type":"string"},"organization_hooks":{"enum":["read","write"],"type":"string"},"organization_packages":{"enum":["read","write"],"type":"string"},"organization_plan":{"enum":["read","write"],"type":"string"},"organization_projects":{"enum":["read","write","admin"],"type":"string"},"organization_secrets":{"enum":["read","write"],"type":"string"},"organization_self_hosted_runners":{"enum":["read","write"],"type":"string"},"organization_user_blocking":{"enum":["read","write"],"type":"string"},"packages":{"enum":["read","write"],"type":"string"},"pages":{"enum":["read","write"],"type":"string"},"pull_requests":{"enum":["read","write"],"type":"string"},"repository_hooks":{"enum":["read","write"],"type":"string"},"repository_projects":{"enum":["read","write","admin"],"type":"string"},"secret_scanning_alerts":{"enum":["read","write"],"type":"string"},"secrets":{"enum":["read","write"],"type":"string"},"security_events":{"enum":["read","write"],"type":"string"},"security_scanning_alert":{"enum":["read","write"],"type":"string"},"single_file":{"enum":["read","write"],"type":"string"},"statuses":{"enum":["read","write"],"type":"string"},"team_discussions":{"enum":["read","write"],"type":"string"},"vulnerability_alerts":{"enum":["read","write"],"type":"string"},"workflows":{"enum":["read","write"],"type":"string"}},"description":"The set of permissions for the GitHub app"},"slug":{"type":"string","description":"The slug name of the GitHub app"},"updated_at":{"type":["string","null"],"format":"date-time"}},"description":"GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub."},"pull_request":{"type":"object","properties":{"diff_url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"merged_at":{"type":["string","null"],"format":"date-time"},"patch_url":{"type":"string","format":"uri"},"url":{"type":"string","format":"uri"}}},"reactions":{"title":"Reactions","required":["url","total_count","+1","-1","laugh","confused","heart","hooray","eyes","rocket"],"type":"object","properties":{"+1":{"type":"integer"},"-1":{"type":"integer"},"confused":{"type":"integer"},"eyes":{"type":"integer"},"heart":{"type":"integer"},"hooray":{"type":"integer"},"laugh":{"type":"integer"},"rocket":{"type":"integer"},"total_count":{"type":"integer"},"url":{"type":"string","format":"uri"}}},"repository_url":{"type":"string","format":"uri"},"state":{"enum":["open","closed"],"type":"string","description":"State of the issue; either \'open\' or \'closed\'"},"state_reason":{"type":["string","null"]},"timeline_url":{"type":"string","format":"uri"},"title":{"type":"string","description":"Title of the issue"},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","description":"URL for the issue","format":"uri"},"user":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization","Mannequin"],"type":"string"},"url":{"type":"string","format":"uri"}}}},"description":"The [issue](https:\\/\\/docs.github.com\\/github-ae@latest\\/rest\\/reference\\/issues) itself."}';
    public const SCHEMA_TITLE = 'Issue';
    public const SCHEMA_DESCRIPTION = 'The [issue](https://docs.github.com/github-ae@latest/rest/reference/issues) itself.';
    public const SCHEMA_EXAMPLE_DATA = '{"activeLockReason":"resolved","assignee":{"avatarUrl":"https:\\/\\/example.com\\/","deleted":false,"email":"generated_email_null","eventsUrl":"generated_events_url_uri-template","followersUrl":"https:\\/\\/example.com\\/","followingUrl":"generated_following_url_uri-template","gistsUrl":"generated_gists_url_uri-template","gravatarId":"generated_gravatar_id_null","htmlUrl":"https:\\/\\/example.com\\/","id":13,"login":"generated_login_null","name":"generated_name_null","nodeId":"generated_node_id_null","organizationsUrl":"https:\\/\\/example.com\\/","receivedEventsUrl":"https:\\/\\/example.com\\/","reposUrl":"https:\\/\\/example.com\\/","siteAdmin":false,"starredUrl":"generated_starred_url_uri-template","subscriptionsUrl":"https:\\/\\/example.com\\/","type":"Bot","url":"https:\\/\\/example.com\\/"},"assignees":[{"avatarUrl":"https:\\/\\/example.com\\/","deleted":false,"email":"generated_email_null","eventsUrl":"generated_events_url_uri-template","followersUrl":"https:\\/\\/example.com\\/","followingUrl":"generated_following_url_uri-template","gistsUrl":"generated_gists_url_uri-template","gravatarId":"generated_gravatar_id_null","htmlUrl":"https:\\/\\/example.com\\/","id":13,"login":"generated_login_null","name":"generated_name_null","nodeId":"generated_node_id_null","organizationsUrl":"https:\\/\\/example.com\\/","receivedEventsUrl":"https:\\/\\/example.com\\/","reposUrl":"https:\\/\\/example.com\\/","siteAdmin":false,"starredUrl":"generated_starred_url_uri-template","subscriptionsUrl":"https:\\/\\/example.com\\/","type":"Bot","url":"https:\\/\\/example.com\\/"}],"authorAssociation":"COLLABORATOR","body":"generated_body_null","closedAt":"1970-01-01T00:00:00+00:00","comments":13,"commentsUrl":"https:\\/\\/example.com\\/","createdAt":"1970-01-01T00:00:00+00:00","draft":false,"eventsUrl":"https:\\/\\/example.com\\/","htmlUrl":"https:\\/\\/example.com\\/","id":13,"labels":[{"color":"generated_color_null","default":false,"description":"generated_description_null","id":13,"name":"generated_name_null","nodeId":"generated_node_id_null","url":"https:\\/\\/example.com\\/"}],"labelsUrl":"generated_labels_url_uri-template","locked":false,"milestone":{"closedAt":"1970-01-01T00:00:00+00:00","closedIssues":13,"createdAt":"1970-01-01T00:00:00+00:00","creator":{"avatarUrl":"https:\\/\\/example.com\\/","deleted":false,"email":"generated_email_null","eventsUrl":"generated_events_url_uri-template","followersUrl":"https:\\/\\/example.com\\/","followingUrl":"generated_following_url_uri-template","gistsUrl":"generated_gists_url_uri-template","gravatarId":"generated_gravatar_id_null","htmlUrl":"https:\\/\\/example.com\\/","id":13,"login":"generated_login_null","name":"generated_name_null","nodeId":"generated_node_id_null","organizationsUrl":"https:\\/\\/example.com\\/","receivedEventsUrl":"https:\\/\\/example.com\\/","reposUrl":"https:\\/\\/example.com\\/","siteAdmin":false,"starredUrl":"generated_starred_url_uri-template","subscriptionsUrl":"https:\\/\\/example.com\\/","type":"Bot","url":"https:\\/\\/example.com\\/"},"description":"generated_description_null","dueOn":"1970-01-01T00:00:00+00:00","htmlUrl":"https:\\/\\/example.com\\/","id":13,"labelsUrl":"https:\\/\\/example.com\\/","nodeId":"generated_node_id_null","number":13,"openIssues":13,"state":"open","title":"generated_title_null","updatedAt":"1970-01-01T00:00:00+00:00","url":"https:\\/\\/example.com\\/"},"nodeId":"generated_node_id_null","number":13,"performedViaGithubApp":{"createdAt":"1970-01-01T00:00:00+00:00","description":"generated_description_null","events":["generated_events_null"],"externalUrl":"https:\\/\\/example.com\\/","htmlUrl":"https:\\/\\/example.com\\/","id":13,"name":"generated_name_null","nodeId":"generated_node_id_null","owner":{"avatarUrl":"https:\\/\\/example.com\\/","deleted":false,"email":"generated_email_null","eventsUrl":"generated_events_url_uri-template","followersUrl":"https:\\/\\/example.com\\/","followingUrl":"generated_following_url_uri-template","gistsUrl":"generated_gists_url_uri-template","gravatarId":"generated_gravatar_id_null","htmlUrl":"https:\\/\\/example.com\\/","id":13,"login":"generated_login_null","name":"generated_name_null","nodeId":"generated_node_id_null","organizationsUrl":"https:\\/\\/example.com\\/","receivedEventsUrl":"https:\\/\\/example.com\\/","reposUrl":"https:\\/\\/example.com\\/","siteAdmin":false,"starredUrl":"generated_starred_url_uri-template","subscriptionsUrl":"https:\\/\\/example.com\\/","type":"Bot","url":"https:\\/\\/example.com\\/"},"permissions":{"actions":"read","administration":"read","checks":"read","contentReferences":"read","contents":"read","deployments":"read","discussions":"read","emails":"read","environments":"read","issues":"read","keys":"read","members":"read","metadata":"read","organizationAdministration":"read","organizationHooks":"read","organizationPackages":"read","organizationPlan":"read","organizationProjects":"read","organizationSecrets":"read","organizationSelfHostedRunners":"read","organizationUserBlocking":"read","packages":"read","pages":"read","pullRequests":"read","repositoryHooks":"read","repositoryProjects":"read","secretScanningAlerts":"read","secrets":"read","securityEvents":"read","securityScanningAlert":"read","singleFile":"read","statuses":"read","teamDiscussions":"read","vulnerabilityAlerts":"read","workflows":"read"},"slug":"generated_slug_null","updatedAt":"1970-01-01T00:00:00+00:00"},"pullRequest":{"diffUrl":"https:\\/\\/example.com\\/","htmlUrl":"https:\\/\\/example.com\\/","mergedAt":"1970-01-01T00:00:00+00:00","patchUrl":"https:\\/\\/example.com\\/","url":"https:\\/\\/example.com\\/"},"reactions":{"pluses1":13,"minus1":13,"confused":13,"eyes":13,"heart":13,"hooray":13,"laugh":13,"rocket":13,"totalCount":13,"url":"https:\\/\\/example.com\\/"},"repositoryUrl":"https:\\/\\/example.com\\/","state":"open","stateReason":"generated_state_reason_null","timelineUrl":"https:\\/\\/example.com\\/","title":"generated_title_null","updatedAt":"1970-01-01T00:00:00+00:00","url":"https:\\/\\/example.com\\/","user":{"avatarUrl":"https:\\/\\/example.com\\/","deleted":false,"email":"generated_email_null","eventsUrl":"generated_events_url_uri-template","followersUrl":"https:\\/\\/example.com\\/","followingUrl":"generated_following_url_uri-template","gistsUrl":"generated_gists_url_uri-template","gravatarId":"generated_gravatar_id_null","htmlUrl":"https:\\/\\/example.com\\/","id":13,"login":"generated_login_null","name":"generated_name_null","nodeId":"generated_node_id_null","organizationsUrl":"https:\\/\\/example.com\\/","receivedEventsUrl":"https:\\/\\/example.com\\/","reposUrl":"https:\\/\\/example.com\\/","siteAdmin":false,"starredUrl":"generated_starred_url_uri-template","subscriptionsUrl":"https:\\/\\/example.com\\/","type":"Bot","url":"https:\\/\\/example.com\\/"}}';
    /**
     * @param array<\ApiClients\Client\GitHubAE\Schema\WebhookIssueCommentCreated\Issue\Assignee> $assignees
     * authorAssociation: How the author is associated with the repository.
     * body: Contents of the issue
     * @param ?array<\ApiClients\Client\GitHubAE\Schema\WebhookDiscussionLabeled\Label> $labels
     * milestone: A collection of related issues and pull requests.
     * performedViaGithubApp: GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub.
     * state: State of the issue; either 'open' or 'closed'
     * title: Title of the issue
     * url: URL for the issue
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('active_lock_reason')] public ?string $activeLockReason, public ?Schema\WebhookIssueCommentCreated\Issue\Assignee $assignee, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\WebhookIssueCommentCreated\Issue\Assignee::class)] public array $assignees, #[\EventSauce\ObjectHydrator\MapFrom('author_association')] public string $authorAssociation, public ?string $body, #[\EventSauce\ObjectHydrator\MapFrom('closed_at')] public ?string $closedAt, public int $comments, #[\EventSauce\ObjectHydrator\MapFrom('comments_url')] public string $commentsUrl, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public string $createdAt, public ?bool $draft, #[\EventSauce\ObjectHydrator\MapFrom('events_url')] public string $eventsUrl, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public string $htmlUrl, public int $id, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\WebhookDiscussionLabeled\Label::class)] public ?array $labels, #[\EventSauce\ObjectHydrator\MapFrom('labels_url')] public string $labelsUrl, public ?bool $locked, public ?Schema\WebhookIssueCommentCreated\Issue\Milestone $milestone, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, public int $number, #[\EventSauce\ObjectHydrator\MapFrom('performed_via_github_app')] public ?Schema\WebhookIssueCommentCreated\Issue\PerformedViaGithubApp $performedViaGithubApp, #[\EventSauce\ObjectHydrator\MapFrom('pull_request')] public ?Schema\WebhookIssueCommentCreated\Issue\PullRequest $pullRequest, public Schema\Discussion\Reactions $reactions, #[\EventSauce\ObjectHydrator\MapFrom('repository_url')] public string $repositoryUrl, public ?string $state, #[\EventSauce\ObjectHydrator\MapFrom('state_reason')] public ?string $stateReason, #[\EventSauce\ObjectHydrator\MapFrom('timeline_url')] public ?string $timelineUrl, public string $title, #[\EventSauce\ObjectHydrator\MapFrom('updated_at')] public string $updatedAt, public string $url, public ?Schema\WebhookIssueCommentCreated\Issue\Assignee $user)
    {
    }
}
