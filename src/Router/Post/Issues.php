<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Router\Post;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Hydrators;
use ApiClients\Client\GitHubAE\Operator;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\Schema\BasicError;
use ApiClients\Client\GitHubAE\Schema\Issue;
use ApiClients\Client\GitHubAE\Schema\IssueComment;
use ApiClients\Client\GitHubAE\Schema\Label;
use ApiClients\Client\GitHubAE\Schema\Milestone;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Issues
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
    public function create(array $params): Issue|array
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Issues::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Issues::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues();
        }

        $operator = new Operator\Issues\Create($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Issues::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $params);
    }

    /** @return */
    public function createLabel(array $params): Label|array
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Labels::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Labels::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Labels();
        }

        $operator = new Operator\Issues\CreateLabel($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Labels::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $params);
    }

    /** @return */
    public function createMilestone(array $params): Milestone|array
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Milestones::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Milestones::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones();
        }

        $operator = new Operator\Issues\CreateMilestone($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Milestones::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $params);
    }

    /** @return */
    public function addAssignees(array $params): Issue|array
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Assignees::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Assignees::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Assignees();
        }

        $operator = new Operator\Issues\AddAssignees($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Assignees::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['issue_number'], $params);
    }

    /** @return */
    public function createComment(array $params): IssueComment|array
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Comments::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Comments::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Comments();
        }

        $operator = new Operator\Issues\CreateComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Comments::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['issue_number'], $params);
    }

    /** @return (iterable<Schema\Label> | Schema\BasicError) */
    public function addLabels(array $params): iterable|BasicError
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Labels::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Labels::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels();
        }

        $operator = new Operator\Issues\AddLabels($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Labels::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['issue_number'], $params);
    }
}
