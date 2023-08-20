<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Router\Delete;

use ApiClients\Client\GitHubAE\Hydrators;
use ApiClients\Client\GitHubAE\Operator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Reactions
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return array{code: int} */
    public function deleteForCommitComment(array $params): array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('comment_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: comment_id');
        }

        $arguments['comment_id'] = $params['comment_id'];
        unset($params['comment_id']);
        if (array_key_exists('reaction_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: reaction_id');
        }

        $arguments['reaction_id'] = $params['reaction_id'];
        unset($params['reaction_id']);
        $operator = new Operator\Reactions\DeleteForCommitComment($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['comment_id'], $arguments['reaction_id']);
    }

    /** @return array{code: int} */
    public function deleteForIssue(array $params): array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('issue_number', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: issue_number');
        }

        $arguments['issue_number'] = $params['issue_number'];
        unset($params['issue_number']);
        if (array_key_exists('reaction_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: reaction_id');
        }

        $arguments['reaction_id'] = $params['reaction_id'];
        unset($params['reaction_id']);
        $operator = new Operator\Reactions\DeleteForIssue($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['issue_number'], $arguments['reaction_id']);
    }

    /** @return array{code: int} */
    public function deleteForRelease(array $params): array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('release_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: release_id');
        }

        $arguments['release_id'] = $params['release_id'];
        unset($params['release_id']);
        if (array_key_exists('reaction_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: reaction_id');
        }

        $arguments['reaction_id'] = $params['reaction_id'];
        unset($params['reaction_id']);
        $operator = new Operator\Reactions\DeleteForRelease($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['release_id'], $arguments['reaction_id']);
    }

    /** @return array{code: int} */
    public function deleteForTeamDiscussion(array $params): array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('team_slug', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: team_slug');
        }

        $arguments['team_slug'] = $params['team_slug'];
        unset($params['team_slug']);
        if (array_key_exists('discussion_number', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: discussion_number');
        }

        $arguments['discussion_number'] = $params['discussion_number'];
        unset($params['discussion_number']);
        if (array_key_exists('reaction_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: reaction_id');
        }

        $arguments['reaction_id'] = $params['reaction_id'];
        unset($params['reaction_id']);
        $operator = new Operator\Reactions\DeleteForTeamDiscussion($this->browser, $this->authentication);

        return $operator->call($arguments['org'], $arguments['team_slug'], $arguments['discussion_number'], $arguments['reaction_id']);
    }

    /** @return array{code: int} */
    public function deleteForIssueComment(array $params): array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('comment_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: comment_id');
        }

        $arguments['comment_id'] = $params['comment_id'];
        unset($params['comment_id']);
        if (array_key_exists('reaction_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: reaction_id');
        }

        $arguments['reaction_id'] = $params['reaction_id'];
        unset($params['reaction_id']);
        $operator = new Operator\Reactions\DeleteForIssueComment($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['comment_id'], $arguments['reaction_id']);
    }

    /** @return array{code: int} */
    public function deleteForPullRequestComment(array $params): array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('comment_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: comment_id');
        }

        $arguments['comment_id'] = $params['comment_id'];
        unset($params['comment_id']);
        if (array_key_exists('reaction_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: reaction_id');
        }

        $arguments['reaction_id'] = $params['reaction_id'];
        unset($params['reaction_id']);
        $operator = new Operator\Reactions\DeleteForPullRequestComment($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['comment_id'], $arguments['reaction_id']);
    }

    /** @return array{code: int} */
    public function deleteForTeamDiscussionComment(array $params): array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('team_slug', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: team_slug');
        }

        $arguments['team_slug'] = $params['team_slug'];
        unset($params['team_slug']);
        if (array_key_exists('discussion_number', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: discussion_number');
        }

        $arguments['discussion_number'] = $params['discussion_number'];
        unset($params['discussion_number']);
        if (array_key_exists('comment_number', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: comment_number');
        }

        $arguments['comment_number'] = $params['comment_number'];
        unset($params['comment_number']);
        if (array_key_exists('reaction_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: reaction_id');
        }

        $arguments['reaction_id'] = $params['reaction_id'];
        unset($params['reaction_id']);
        $operator = new Operator\Reactions\DeleteForTeamDiscussionComment($this->browser, $this->authentication);

        return $operator->call($arguments['org'], $arguments['team_slug'], $arguments['discussion_number'], $arguments['comment_number'], $arguments['reaction_id']);
    }
}
