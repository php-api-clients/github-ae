<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class PullRequestReviewComment
{
    public const SCHEMA_JSON = '{"title":"Pull Request Review Comment","required":["url","id","node_id","pull_request_review_id","diff_hunk","path","position","original_position","commit_id","original_commit_id","user","body","created_at","updated_at","html_url","pull_request_url","author_association","_links"],"type":"object","properties":{"url":{"type":"string","description":"URL for the pull request review comment","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/comments\\/1"]},"pull_request_review_id":{"type":["integer","null"],"description":"The ID of the pull request review to which the comment belongs.","examples":[42]},"id":{"type":"integer","description":"The ID of the pull request review comment.","examples":[1]},"node_id":{"type":"string","description":"The node ID of the pull request review comment.","examples":["MDI0OlB1bGxSZXF1ZXN0UmV2aWV3Q29tbWVudDEw"]},"diff_hunk":{"type":"string","description":"The diff of the line that the comment refers to.","examples":["@@ -16,33 +16,40 @@ public class Connection : IConnection..."]},"path":{"type":"string","description":"The relative path of the file to which the comment applies.","examples":["config\\/database.yaml"]},"position":{"type":"integer","description":"The line index in the diff to which the comment applies. This field is deprecated; use `line` instead.","examples":[1]},"original_position":{"type":"integer","description":"The index of the original line in the diff to which the comment applies. This field is deprecated; use `original_line` instead.","examples":[4]},"commit_id":{"type":"string","description":"The SHA of the commit to which the comment applies.","examples":["6dcb09b5b57875f334f61aebed695e2e4193db5e"]},"original_commit_id":{"type":"string","description":"The SHA of the original commit to which the comment applies.","examples":["9c48853fa3dc5c1c3d6f1f1cd1f2743e72652840"]},"in_reply_to_id":{"type":"integer","description":"The comment ID to reply to.","examples":[8]},"user":{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."},"body":{"type":"string","description":"The text of the comment.","examples":["We should probably include a check for null values here."]},"created_at":{"type":"string","format":"date-time","examples":["2011-04-14T16:00:49Z"]},"updated_at":{"type":"string","format":"date-time","examples":["2011-04-14T16:00:49Z"]},"html_url":{"type":"string","description":"HTML URL for the pull request review comment.","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/pull\\/1#discussion-diff-1"]},"pull_request_url":{"type":"string","description":"URL for the pull request that the review comment belongs to.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/1"]},"author_association":{"title":"author_association","enum":["COLLABORATOR","CONTRIBUTOR","FIRST_TIMER","FIRST_TIME_CONTRIBUTOR","MANNEQUIN","MEMBER","NONE","OWNER"],"type":"string","description":"How the author is associated with the repository.","examples":["OWNER"]},"_links":{"required":["self","html","pull_request"],"type":"object","properties":{"self":{"required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/comments\\/1"]}}},"html":{"required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/pull\\/1#discussion-diff-1"]}}},"pull_request":{"required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/1"]}}}}},"start_line":{"type":["integer","null"],"description":"The first line of the range for a multi-line comment.","examples":[2]},"original_start_line":{"type":["integer","null"],"description":"The first line of the range for a multi-line comment.","examples":[2]},"start_side":{"enum":["LEFT","RIGHT",null],"type":["string","null"],"description":"The side of the first line of the range for a multi-line comment.","default":"RIGHT"},"line":{"type":"integer","description":"The line of the blob to which the comment applies. The last line of the range for a multi-line comment","examples":[2]},"original_line":{"type":"integer","description":"The line of the blob to which the comment applies. The last line of the range for a multi-line comment","examples":[2]},"side":{"enum":["LEFT","RIGHT"],"type":"string","description":"The side of the diff to which the comment applies. The side of the last line of the range for a multi-line comment","default":"RIGHT"},"reactions":{"title":"Reaction Rollup","required":["url","total_count","+1","-1","laugh","confused","heart","hooray","eyes","rocket"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"total_count":{"type":"integer"},"+1":{"type":"integer"},"-1":{"type":"integer"},"laugh":{"type":"integer"},"confused":{"type":"integer"},"heart":{"type":"integer"},"hooray":{"type":"integer"},"eyes":{"type":"integer"},"rocket":{"type":"integer"}}},"body_html":{"type":"string","examples":["\\"<p>comment body<\\/p>\\""]},"body_text":{"type":"string","examples":["\\"comment body\\""]}},"description":"Pull Request Review Comments are comments on a portion of the Pull Request\'s diff."}';
    public const SCHEMA_TITLE = 'Pull Request Review Comment';
    public const SCHEMA_DESCRIPTION = 'Pull Request Review Comments are comments on a portion of the Pull Request\'s diff.';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/comments\\/1","pull_request_review_id":42,"id":1,"node_id":"MDI0OlB1bGxSZXF1ZXN0UmV2aWV3Q29tbWVudDEw","diff_hunk":"@@ -16,33 +16,40 @@ public class Connection : IConnection...","path":"config\\/database.yaml","position":1,"original_position":4,"commit_id":"6dcb09b5b57875f334f61aebed695e2e4193db5e","original_commit_id":"9c48853fa3dc5c1c3d6f1f1cd1f2743e72652840","in_reply_to_id":8,"user":{"name":"generated_name","email":"generated_email","login":"octocat","id":1,"node_id":"MDQ6VXNlcjE=","avatar_url":"https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif","gravatar_id":"41d064eb2195891e12d0413f63227ea7","url":"https:\\/\\/api.github.com\\/users\\/octocat","html_url":"https:\\/\\/github.com\\/octocat","followers_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/followers","following_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}","gists_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}","starred_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}","subscriptions_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions","organizations_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/orgs","repos_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/repos","events_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}","received_events_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/received_events","type":"User","site_admin":false,"starred_at":"\\"2020-07-09T00:17:55Z\\""},"body":"We should probably include a check for null values here.","created_at":"2011-04-14T16:00:49Z","updated_at":"2011-04-14T16:00:49Z","html_url":"https:\\/\\/github.com\\/octocat\\/Hello-World\\/pull\\/1#discussion-diff-1","pull_request_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/1","author_association":"OWNER","_links":{"self":{"href":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/comments\\/1"},"html":{"href":"https:\\/\\/github.com\\/octocat\\/Hello-World\\/pull\\/1#discussion-diff-1"},"pull_request":{"href":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/1"}},"start_line":2,"original_start_line":2,"start_side":"generated_start_side","line":2,"original_line":2,"side":"generated_side","reactions":{"url":"generated_url","total_count":13,"_PLUSES_1":13,"_MINUS_1":13,"laugh":13,"confused":13,"heart":13,"hooray":13,"eyes":13,"rocket":13},"body_html":"\\"<p>comment body<\\/p>\\"","body_text":"\\"comment body\\""}';
    /**
     * url: URL for the pull request review comment
     * pull_request_review_id: The ID of the pull request review to which the comment belongs.
     * id: The ID of the pull request review comment.
     * node_id: The node ID of the pull request review comment.
     * diff_hunk: The diff of the line that the comment refers to.
     * path: The relative path of the file to which the comment applies.
     * position: The line index in the diff to which the comment applies. This field is deprecated; use `line` instead.
     * original_position: The index of the original line in the diff to which the comment applies. This field is deprecated; use `original_line` instead.
     * commit_id: The SHA of the commit to which the comment applies.
     * original_commit_id: The SHA of the original commit to which the comment applies.
     * in_reply_to_id: The comment ID to reply to.
     * user: A GitHub user.
     * body: The text of the comment.
     * html_url: HTML URL for the pull request review comment.
     * pull_request_url: URL for the pull request that the review comment belongs to.
     * author_association: How the author is associated with the repository.
     * start_line: The first line of the range for a multi-line comment.
     * original_start_line: The first line of the range for a multi-line comment.
     * start_side: The side of the first line of the range for a multi-line comment.
     * line: The line of the blob to which the comment applies. The last line of the range for a multi-line comment
     * original_line: The line of the blob to which the comment applies. The last line of the range for a multi-line comment
     * side: The side of the diff to which the comment applies. The side of the last line of the range for a multi-line comment
     */
    public function __construct(public string $url, public ?int $pull_request_review_id, public int $id, public string $node_id, public string $diff_hunk, public string $path, public int $position, public int $original_position, public string $commit_id, public string $original_commit_id, public ?int $in_reply_to_id, public Schema\SimpleUser $user, public string $body, public string $created_at, public string $updated_at, public string $html_url, public string $pull_request_url, public string $author_association, public Schema\PullRequestReviewComment\Links $_links, public ?int $start_line, public ?int $original_start_line, public ?string $start_side, public ?int $line, public ?int $original_line, public ?string $side, public ?Schema\ReactionRollup $reactions, public ?string $body_html, public ?string $body_text)
    {
    }
}
