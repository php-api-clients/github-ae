<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Router\Post;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Hydrators;
use ApiClients\Client\GitHubAE\Operator;
use ApiClients\Client\GitHubAE\Schema\GitCommit;
use ApiClients\Client\GitHubAE\Schema\GitRef;
use ApiClients\Client\GitHubAE\Schema\GitTag;
use ApiClients\Client\GitHubAE\Schema\GitTree;
use ApiClients\Client\GitHubAE\Schema\ShortBlob;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Git
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
    public function createBlob(array $params): ShortBlob|array
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Git\Blobs::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Git\Blobs::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs();
        }

        $operator = new Operator\Git\CreateBlob($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Git\Blobs::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $params);
    }

    /** @return */
    public function createCommit(array $params): GitCommit|array
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Git\Commits::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Git\Commits::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits();
        }

        $operator = new Operator\Git\CreateCommit($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Git\Commits::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $params);
    }

    /** @return */
    public function createRef(array $params): GitRef|array
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Git\Refs::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Git\Refs::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs();
        }

        $operator = new Operator\Git\CreateRef($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Git\Refs::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $params);
    }

    /** @return */
    public function createTag(array $params): GitTag|array
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Git\Tags::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Git\Tags::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags();
        }

        $operator = new Operator\Git\CreateTag($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Git\Tags::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $params);
    }

    /** @return */
    public function createTree(array $params): GitTree|array
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Git\Trees::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Git\Trees::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees();
        }

        $operator = new Operator\Git\CreateTree($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Git\Trees::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $params);
    }
}
