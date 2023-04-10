<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Discussion
{
    public const SCHEMA_JSON = '{"title":"Discussion","required":["repository_url","category","answer_html_url","answer_chosen_at","answer_chosen_by","html_url","id","node_id","number","title","user","state","state_reason","locked","comments","created_at","updated_at","author_association","active_lock_reason","body"],"type":"object","properties":{"active_lock_reason":{"type":["string","null"]},"answer_chosen_at":{"type":["string","null"]},"answer_chosen_by":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"answer_html_url":{"type":["string","null"]},"author_association":{"title":"AuthorAssociation","enum":["COLLABORATOR","CONTRIBUTOR","FIRST_TIMER","FIRST_TIME_CONTRIBUTOR","MANNEQUIN","MEMBER","NONE","OWNER"],"type":"string","description":"How the author is associated with the repository."},"body":{"type":"string"},"category":{"required":["id","repository_id","emoji","name","description","created_at","updated_at","slug","is_answerable"],"type":"object","properties":{"created_at":{"type":"string","format":"date-time"},"description":{"type":"string"},"emoji":{"type":"string"},"id":{"type":"integer"},"is_answerable":{"type":"boolean"},"name":{"type":"string"},"node_id":{"type":"string"},"repository_id":{"type":"integer"},"slug":{"type":"string"},"updated_at":{"type":"string"}}},"comments":{"type":"integer"},"created_at":{"type":"string","format":"date-time"},"html_url":{"type":"string"},"id":{"type":"integer"},"locked":{"type":"boolean"},"node_id":{"type":"string"},"number":{"type":"integer"},"reactions":{"title":"Reactions","required":["url","total_count","+1","-1","laugh","confused","heart","hooray","eyes","rocket"],"type":"object","properties":{"+1":{"type":"integer"},"-1":{"type":"integer"},"confused":{"type":"integer"},"eyes":{"type":"integer"},"heart":{"type":"integer"},"hooray":{"type":"integer"},"laugh":{"type":"integer"},"rocket":{"type":"integer"},"total_count":{"type":"integer"},"url":{"type":"string","format":"uri"}}},"repository_url":{"type":"string"},"state":{"enum":["open","closed","locked","converting","transferring"],"type":"string","description":"The current state of the discussion.\\n`converting` means that the discussion is being converted from an issue.\\n`transferring` means that the discussion is being transferred from another repository."},"state_reason":{"enum":["resolved","outdated","duplicate","reopened",null],"type":["string","null"],"description":"The reason for the current state","examples":["resolved"]},"timeline_url":{"type":"string"},"title":{"type":"string"},"updated_at":{"type":"string","format":"date-time"},"user":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}}},"description":"A Discussion in a repository."}';
    public const SCHEMA_TITLE = 'Discussion';
    public const SCHEMA_DESCRIPTION = 'A Discussion in a repository.';
    public const SCHEMA_EXAMPLE_DATA = '{"active_lock_reason":"generated_active_lock_reason_null","answer_chosen_at":"generated_answer_chosen_at_null","answer_chosen_by":{"avatar_url":"https:\\/\\/example.com\\/","deleted":false,"email":"generated_email_null","events_url":"generated_events_url_uri-template","followers_url":"https:\\/\\/example.com\\/","following_url":"generated_following_url_uri-template","gists_url":"generated_gists_url_uri-template","gravatar_id":"generated_gravatar_id_null","html_url":"https:\\/\\/example.com\\/","id":13,"login":"generated_login_null","name":"generated_name_null","node_id":"generated_node_id_null","organizations_url":"https:\\/\\/example.com\\/","received_events_url":"https:\\/\\/example.com\\/","repos_url":"https:\\/\\/example.com\\/","site_admin":false,"starred_url":"generated_starred_url_uri-template","subscriptions_url":"https:\\/\\/example.com\\/","type":"Bot","url":"https:\\/\\/example.com\\/"},"answer_html_url":"generated_answer_html_url_null","author_association":"COLLABORATOR","body":"generated_body_null","category":{"created_at":"1970-01-01T00:00:00+00:00","description":"generated_description_null","emoji":"generated_emoji_null","id":13,"is_answerable":false,"name":"generated_name_null","node_id":"generated_node_id_null","repository_id":13,"slug":"generated_slug_null","updated_at":"generated_updated_at_null"},"comments":13,"created_at":"1970-01-01T00:00:00+00:00","html_url":"generated_html_url_null","id":13,"locked":false,"node_id":"generated_node_id_null","number":13,"reactions":{"_PLUSES_1":13,"_MINUS_1":13,"confused":13,"eyes":13,"heart":13,"hooray":13,"laugh":13,"rocket":13,"total_count":13,"url":"https:\\/\\/example.com\\/"},"repository_url":"generated_repository_url_null","state":"open","state_reason":"resolved","timeline_url":"generated_timeline_url_null","title":"generated_title_null","updated_at":"1970-01-01T00:00:00+00:00","user":{"avatar_url":"https:\\/\\/example.com\\/","deleted":false,"email":"generated_email_null","events_url":"generated_events_url_uri-template","followers_url":"https:\\/\\/example.com\\/","following_url":"generated_following_url_uri-template","gists_url":"generated_gists_url_uri-template","gravatar_id":"generated_gravatar_id_null","html_url":"https:\\/\\/example.com\\/","id":13,"login":"generated_login_null","name":"generated_name_null","node_id":"generated_node_id_null","organizations_url":"https:\\/\\/example.com\\/","received_events_url":"https:\\/\\/example.com\\/","repos_url":"https:\\/\\/example.com\\/","site_admin":false,"starred_url":"generated_starred_url_uri-template","subscriptions_url":"https:\\/\\/example.com\\/","type":"Bot","url":"https:\\/\\/example.com\\/"}}';
    /**
    * authorAssociation: How the author is associated with the repository.
    * state: The current state of the discussion.
    `converting` means that the discussion is being converted from an issue.
    `transferring` means that the discussion is being transferred from another repository.
    * stateReason: The reason for the current state
    */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('active_lock_reason')] public ?string $activeLockReason, #[\EventSauce\ObjectHydrator\MapFrom('answer_chosen_at')] public ?string $answerChosenAt, #[\EventSauce\ObjectHydrator\MapFrom('answer_chosen_by')] public ?Schema\Discussion\AnswerChosenBy $answerChosenBy, #[\EventSauce\ObjectHydrator\MapFrom('answer_html_url')] public ?string $answerHtmlUrl, #[\EventSauce\ObjectHydrator\MapFrom('author_association')] public string $authorAssociation, public string $body, public Schema\Discussion\Category $category, public int $comments, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public string $createdAt, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public string $htmlUrl, public int $id, public bool $locked, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, public int $number, public ?Schema\Discussion\Reactions $reactions, #[\EventSauce\ObjectHydrator\MapFrom('repository_url')] public string $repositoryUrl, public string $state, #[\EventSauce\ObjectHydrator\MapFrom('state_reason')] public ?string $stateReason, #[\EventSauce\ObjectHydrator\MapFrom('timeline_url')] public ?string $timelineUrl, public string $title, #[\EventSauce\ObjectHydrator\MapFrom('updated_at')] public string $updatedAt, public ?Schema\Discussion\User $user)
    {
    }
}
