<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookPullRequestReviewThreadResolved;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Thread
{
    public const SCHEMA_JSON = '{"required":["node_id","comments"],"type":"object","properties":{"comments":{"type":"array","items":{"title":"Pull Request Review Comment","required":["url","pull_request_review_id","id","node_id","diff_hunk","path","position","original_position","commit_id","original_commit_id","user","body","created_at","updated_at","html_url","pull_request_url","author_association","_links","start_line","original_start_line","original_line","line","start_side","side","reactions"],"type":"object","properties":{"_links":{"required":["self","html","pull_request"],"type":"object","properties":{"html":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"pull_request":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"self":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}}}},"author_association":{"title":"AuthorAssociation","enum":["COLLABORATOR","CONTRIBUTOR","FIRST_TIMER","FIRST_TIME_CONTRIBUTOR","MANNEQUIN","MEMBER","NONE","OWNER"],"type":"string","description":"How the author is associated with the repository."},"body":{"type":"string","description":"The text of the comment."},"commit_id":{"type":"string","description":"The SHA of the commit to which the comment applies."},"created_at":{"type":"string","format":"date-time"},"diff_hunk":{"type":"string","description":"The diff of the line that the comment refers to."},"html_url":{"type":"string","description":"HTML URL for the pull request review comment.","format":"uri"},"id":{"type":"integer","description":"The ID of the pull request review comment."},"in_reply_to_id":{"type":"integer","description":"The comment ID to reply to."},"line":{"type":["integer","null"],"description":"The line of the blob to which the comment applies. The last line of the range for a multi-line comment"},"node_id":{"type":"string","description":"The node ID of the pull request review comment."},"original_commit_id":{"type":"string","description":"The SHA of the original commit to which the comment applies."},"original_line":{"type":["integer","null"],"description":"The line of the blob to which the comment applies. The last line of the range for a multi-line comment"},"original_position":{"type":"integer","description":"The index of the original line in the diff to which the comment applies."},"original_start_line":{"type":["integer","null"],"description":"The first line of the range for a multi-line comment."},"path":{"type":"string","description":"The relative path of the file to which the comment applies."},"position":{"type":["integer","null"],"description":"The line index in the diff to which the comment applies."},"pull_request_review_id":{"type":["integer","null"],"description":"The ID of the pull request review to which the comment belongs."},"pull_request_url":{"type":"string","description":"URL for the pull request that the review comment belongs to.","format":"uri"},"reactions":{"title":"Reactions","required":["url","total_count","+1","-1","laugh","confused","heart","hooray","eyes","rocket"],"type":"object","properties":{"+1":{"type":"integer"},"-1":{"type":"integer"},"confused":{"type":"integer"},"eyes":{"type":"integer"},"heart":{"type":"integer"},"hooray":{"type":"integer"},"laugh":{"type":"integer"},"rocket":{"type":"integer"},"total_count":{"type":"integer"},"url":{"type":"string","format":"uri"}}},"side":{"enum":["LEFT","RIGHT"],"type":"string","description":"The side of the first line of the range for a multi-line comment."},"start_line":{"type":["integer","null"],"description":"The first line of the range for a multi-line comment."},"start_side":{"enum":["LEFT","RIGHT",null],"type":["string","null"],"description":"The side of the first line of the range for a multi-line comment.","default":"RIGHT"},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","description":"URL for the pull request review comment","format":"uri"},"user":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization","Mannequin"],"type":"string"},"url":{"type":"string","format":"uri"}}}},"description":"The [comment](https:\\/\\/docs.github.com\\/github-ae@latest\\/rest\\/reference\\/pulls#comments) itself."}},"node_id":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"comments":[{"_links":{"html":{"href":"generated_href"},"pull_request":{"href":"generated_href"},"self":{"href":"generated_href"}},"author_association":"generated_author_association","body":"generated_body","commit_id":"generated_commit_id","created_at":"generated_created_at","diff_hunk":"generated_diff_hunk","html_url":"generated_html_url","id":13,"in_reply_to_id":13,"line":13,"node_id":"generated_node_id","original_commit_id":"generated_original_commit_id","original_line":13,"original_position":13,"original_start_line":13,"path":"generated_path","position":13,"pull_request_review_id":13,"pull_request_url":"generated_pull_request_url","reactions":{"_PLUSES_1":13,"_MINUS_1":13,"confused":13,"eyes":13,"heart":13,"hooray":13,"laugh":13,"rocket":13,"total_count":13,"url":"generated_url"},"side":"generated_side","start_line":13,"start_side":"generated_start_side","updated_at":"generated_updated_at","url":"generated_url","user":{"avatar_url":"generated_avatar_url","deleted":false,"email":"generated_email","events_url":"generated_events_url","followers_url":"generated_followers_url","following_url":"generated_following_url","gists_url":"generated_gists_url","gravatar_id":"generated_gravatar_id","html_url":"generated_html_url","id":13,"login":"generated_login","name":"generated_name","node_id":"generated_node_id","organizations_url":"generated_organizations_url","received_events_url":"generated_received_events_url","repos_url":"generated_repos_url","site_admin":false,"starred_url":"generated_starred_url","subscriptions_url":"generated_subscriptions_url","type":"generated_type","url":"generated_url"}}],"node_id":"generated_node_id"}';
    /**
     * @param ?array<\ApiClients\Client\GitHubAE\Schema\WebhookPullRequestReviewThreadResolved\Thread\Comments> $comments
     */
    public function __construct(#[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\WebhookPullRequestReviewThreadResolved\Thread\Comments::class)] public ?array $comments, public ?string $node_id)
    {
    }
}
