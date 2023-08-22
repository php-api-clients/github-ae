<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Router\Get;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Hydrators;
use ApiClients\Client\GitHubAE\Operator;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\Schema\CodeOfConduct;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class CodesOfConduct
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return (Schema\CodeOfConduct | array{code: int}) */
    public function getConductCode(array $params): CodeOfConduct|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('key', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: key');
        }

        $arguments['key'] = $params['key'];
        unset($params['key']);
        if (array_key_exists(Hydrator\Operation\CodesOfConduct\Key::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\CodesOfConduct\Key::class] = $this->hydrators->getObjectMapperOperation🌀CodesOfConduct🌀Key();
        }

        $operator = new Operator\CodesOfConduct\GetConductCode($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\CodesOfConduct\Key::class]);

        return $operator->call($arguments['key']);
    }

    /** @return (Observable<Schema\CodeOfConduct> | array{code: int}) */
    public function getAllCodesOfConduct(array $params): iterable
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\CodesOfConduct::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\CodesOfConduct::class] = $this->hydrators->getObjectMapperOperation🌀CodesOfConduct();
        }

        $operator = new Operator\CodesOfConduct\GetAllCodesOfConduct($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\CodesOfConduct::class]);

        return $operator->call();
    }
}
