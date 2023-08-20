<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Router\Patch;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Hydrators;
use ApiClients\Client\GitHubAE\Operator;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\Schema\Project;
use ApiClients\Client\GitHubAE\Schema\ProjectCard;
use ApiClients\Client\GitHubAE\Schema\ProjectColumn;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Projects
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return (Schema\ProjectColumn | array{code: int}) */
    public function updateColumn(array $params): ProjectColumn|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('column_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: column_id');
        }

        $arguments['column_id'] = $params['column_id'];
        unset($params['column_id']);
        if (array_key_exists(Hydrator\Operation\Projects\Columns\ColumnId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Projects\Columns\ColumnId::class] = $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId();
        }

        $operator = new Operator\Projects\UpdateColumn($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Projects\Columns\ColumnId::class]);

        return $operator->call($arguments['column_id'], $params);
    }

    /** @return (Schema\Project | array{code: int}) */
    public function update(array $params): Project|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('project_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: project_id');
        }

        $arguments['project_id'] = $params['project_id'];
        unset($params['project_id']);
        if (array_key_exists(Hydrator\Operation\Projects\ProjectId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Projects\ProjectId::class] = $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId();
        }

        $operator = new Operator\Projects\Update($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Projects\ProjectId::class]);

        return $operator->call($arguments['project_id'], $params);
    }

    /** @return (Schema\ProjectCard | array{code: int}) */
    public function updateCard(array $params): ProjectCard|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('card_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: card_id');
        }

        $arguments['card_id'] = $params['card_id'];
        unset($params['card_id']);
        if (array_key_exists(Hydrator\Operation\Projects\Columns\Cards\CardId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Projects\Columns\Cards\CardId::class] = $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CardId();
        }

        $operator = new Operator\Projects\UpdateCard($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Projects\Columns\Cards\CardId::class]);

        return $operator->call($arguments['card_id'], $params);
    }
}
