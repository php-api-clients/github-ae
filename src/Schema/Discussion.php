<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Discussion
{
    public const SCHEMA_JSON = '{"title":"Discussion","required":["repository_url","category","answer_html_url","answer_chosen_at","answer_chosen_by","html_url","id","node_id","number","title","user","state","state_reason","locked","comments","created_at","updated_at","author_association","active_lock_reason","body"],"type":"object","properties":{"active_lock_reason":{"type":["string","null"]},"answer_chosen_at":{"type":["string","null"]},"answer_chosen_by":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"answer_html_url":{"type":["string","null"]},"author_association":{"title":"AuthorAssociation","enum":["COLLABORATOR","CONTRIBUTOR","FIRST_TIMER","FIRST_TIME_CONTRIBUTOR","MANNEQUIN","MEMBER","NONE","OWNER"],"type":"string","description":"How the author is associated with the repository."},"body":{"type":"string"},"category":{"required":["id","repository_id","emoji","name","description","created_at","updated_at","slug","is_answerable"],"type":"object","properties":{"created_at":{"type":"string","format":"date-time"},"description":{"type":"string"},"emoji":{"type":"string"},"id":{"type":"integer"},"is_answerable":{"type":"boolean"},"name":{"type":"string"},"node_id":{"type":"string"},"repository_id":{"type":"integer"},"slug":{"type":"string"},"updated_at":{"type":"string"}}},"comments":{"type":"integer"},"created_at":{"type":"string","format":"date-time"},"html_url":{"type":"string"},"id":{"type":"integer"},"locked":{"type":"boolean"},"node_id":{"type":"string"},"number":{"type":"integer"},"reactions":{"title":"Reactions","required":["url","total_count","+1","-1","laugh","confused","heart","hooray","eyes","rocket"],"type":"object","properties":{"+1":{"type":"integer"},"-1":{"type":"integer"},"confused":{"type":"integer"},"eyes":{"type":"integer"},"heart":{"type":"integer"},"hooray":{"type":"integer"},"laugh":{"type":"integer"},"rocket":{"type":"integer"},"total_count":{"type":"integer"},"url":{"type":"string","format":"uri"}}},"repository_url":{"type":"string"},"state":{"enum":["open","closed","locked","converting","transferring"],"type":"string","description":"The current state of the discussion.\\n`converting` means that the discussion is being converted from an issue.\\n`transferring` means that the discussion is being transferred from another repository."},"state_reason":{"enum":["resolved","outdated","duplicate","reopened",null],"type":["string","null"],"description":"The reason for the current state","examples":["resolved"]},"timeline_url":{"type":"string"},"title":{"type":"string"},"updated_at":{"type":"string","format":"date-time"},"user":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}}},"description":"A Discussion in a repository."}';
    public const SCHEMA_TITLE = 'Discussion';
    public const SCHEMA_DESCRIPTION = 'A Discussion in a repository.';
    public const SCHEMA_EXAMPLE_DATA = '{"active_lock_reason":"generated_active_lock_reason","answer_chosen_at":"generated_answer_chosen_at","answer_chosen_by":{"avatar_url":"generated_avatar_url","deleted":false,"email":"generated_email","events_url":"generated_events_url","followers_url":"generated_followers_url","following_url":"generated_following_url","gists_url":"generated_gists_url","gravatar_id":"generated_gravatar_id","html_url":"generated_html_url","id":13,"login":"generated_login","name":"generated_name","node_id":"generated_node_id","organizations_url":"generated_organizations_url","received_events_url":"generated_received_events_url","repos_url":"generated_repos_url","site_admin":false,"starred_url":"generated_starred_url","subscriptions_url":"generated_subscriptions_url","type":"generated_type","url":"generated_url"},"answer_html_url":"generated_answer_html_url","author_association":"generated_author_association","body":"generated_body","category":{"created_at":"generated_created_at","description":"generated_description","emoji":"generated_emoji","id":13,"is_answerable":false,"name":"generated_name","node_id":"generated_node_id","repository_id":13,"slug":"generated_slug","updated_at":"generated_updated_at"},"comments":13,"created_at":"generated_created_at","html_url":"generated_html_url","id":13,"locked":false,"node_id":"generated_node_id","number":13,"reactions":{"_PLUSES_1":13,"_MINUS_1":13,"confused":13,"eyes":13,"heart":13,"hooray":13,"laugh":13,"rocket":13,"total_count":13,"url":"generated_url"},"repository_url":"generated_repository_url","state":"generated_state","state_reason":"resolved","timeline_url":"generated_timeline_url","title":"generated_title","updated_at":"generated_updated_at","user":{"avatar_url":"generated_avatar_url","deleted":false,"email":"generated_email","events_url":"generated_events_url","followers_url":"generated_followers_url","following_url":"generated_following_url","gists_url":"generated_gists_url","gravatar_id":"generated_gravatar_id","html_url":"generated_html_url","id":13,"login":"generated_login","name":"generated_name","node_id":"generated_node_id","organizations_url":"generated_organizations_url","received_events_url":"generated_received_events_url","repos_url":"generated_repos_url","site_admin":false,"starred_url":"generated_starred_url","subscriptions_url":"generated_subscriptions_url","type":"generated_type","url":"generated_url"}}';
    /**
    * author_association: How the author is associated with the repository.
    * state: The current state of the discussion.
    `converting` means that the discussion is being converted from an issue.
    `transferring` means that the discussion is being transferred from another repository.
    * state_reason: The reason for the current state
    */
    public function __construct(public ?string $active_lock_reason, public ?string $answer_chosen_at, public ?Schema\Discussion\AnswerChosenBy $answer_chosen_by, public ?string $answer_html_url, public ?string $author_association, public ?string $body, public ?Schema\Discussion\Category $category, public ?int $comments, public ?string $created_at, public ?string $html_url, public ?int $id, public ?bool $locked, public ?string $node_id, public ?int $number, public Schema\Discussion\Reactions $reactions, public ?string $repository_url, public ?string $state, public ?string $state_reason, public string $timeline_url, public ?string $title, public ?string $updated_at, public ?Schema\Discussion\AnswerChosenBy $user)
    {
    }
}
