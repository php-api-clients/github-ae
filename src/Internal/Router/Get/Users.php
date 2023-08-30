<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Router\Get;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\Schema\GpgKey;
use ApiClients\Client\GitHubAE\Schema\Hovercard;
use ApiClients\Client\GitHubAE\Schema\Key;
use ApiClients\Client\GitHubAE\Schema\PrivateUser;
use ApiClients\Client\GitHubAE\Schema\PublicUser;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Users
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return Observable<Schema\SimpleUser>|array{code:int} */
    public function listFollowersForAuthenticatedUser(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        $operator = new Internal\Operator\Users\ListFollowersForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Followers());

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    /** @return Observable<Schema\SimpleUser>|array{code:int} */
    public function listFollowedByAuthenticatedUser(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        $operator = new Internal\Operator\Users\ListFollowedByAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Following());

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    /** @return Observable<Schema\GpgKey>|array{code:int} */
    public function listGpgKeysForAuthenticatedUser(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        $operator = new Internal\Operator\Users\ListGpgKeysForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀GpgKeys());

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    /** @return Observable<Schema\Key>|array{code:int} */
    public function listPublicSshKeysForAuthenticatedUser(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        $operator = new Internal\Operator\Users\ListPublicSshKeysForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Keys());

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function getByUsername(array $params): PrivateUser|PublicUser|array
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        $operator = new Internal\Operator\Users\GetByUsername($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username());

        return $operator->call($arguments['username']);
    }

    /** @return array{code:int} */
    public function checkPersonIsFollowedByAuthenticated(array $params): array
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        $operator = new Internal\Operator\Users\CheckPersonIsFollowedByAuthenticated($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Following🌀Username());

        return $operator->call($arguments['username']);
    }

    /** @return Schema\GpgKey|array{code:int} */
    public function getGpgKeyForAuthenticatedUser(array $params): GpgKey|array
    {
        $arguments = [];
        if (array_key_exists('gpg_key_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: gpg_key_id');
        }

        $arguments['gpg_key_id'] = $params['gpg_key_id'];
        unset($params['gpg_key_id']);
        $operator = new Internal\Operator\Users\GetGpgKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀GpgKeys🌀GpgKeyId());

        return $operator->call($arguments['gpg_key_id']);
    }

    /** @return Schema\Key|array{code:int} */
    public function getPublicSshKeyForAuthenticatedUser(array $params): Key|array
    {
        $arguments = [];
        if (array_key_exists('key_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: key_id');
        }

        $arguments['key_id'] = $params['key_id'];
        unset($params['key_id']);
        $operator = new Internal\Operator\Users\GetPublicSshKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Keys🌀KeyId());

        return $operator->call($arguments['key_id']);
    }

    /** @return Observable<Schema\SimpleUser> */
    public function listFollowersForUser(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        $operator = new Internal\Operator\Users\ListFollowersForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Followers());

        return $operator->call($arguments['username'], $arguments['per_page'], $arguments['page']);
    }

    /** @return Observable<Schema\SimpleUser> */
    public function listFollowingForUser(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        $operator = new Internal\Operator\Users\ListFollowingForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Following());

        return $operator->call($arguments['username'], $arguments['per_page'], $arguments['page']);
    }

    /** @return Observable<Schema\GpgKey> */
    public function listGpgKeysForUser(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        $operator = new Internal\Operator\Users\ListGpgKeysForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀GpgKeys());

        return $operator->call($arguments['username'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function getContextForUser(array $params): Hovercard|array
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists('subject_type', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: subject_type');
        }

        $arguments['subject_type'] = $params['subject_type'];
        unset($params['subject_type']);
        if (array_key_exists('subject_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: subject_id');
        }

        $arguments['subject_id'] = $params['subject_id'];
        unset($params['subject_id']);
        $operator = new Internal\Operator\Users\GetContextForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Hovercard());

        return $operator->call($arguments['username'], $arguments['subject_type'], $arguments['subject_id']);
    }

    /** @return Observable<Schema\KeySimple> */
    public function listPublicKeysForUser(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        $operator = new Internal\Operator\Users\ListPublicKeysForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Keys());

        return $operator->call($arguments['username'], $arguments['per_page'], $arguments['page']);
    }

    /** @return Schema\PrivateUser|Schema\PublicUser|array{code:int} */
    public function getAuthenticated(array $params): PrivateUser|PublicUser|array
    {
        $operator = new Internal\Operator\Users\GetAuthenticated($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User());

        return $operator->call();
    }

    /** @return Observable<Schema\SimpleUser>|array{code:int} */
    public function list(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('since', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: since');
        }

        $arguments['since'] = $params['since'];
        unset($params['since']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        $operator = new Internal\Operator\Users\List_($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users());

        return $operator->call($arguments['since'], $arguments['per_page']);
    }

    /** @return array{code:int} */
    public function checkFollowingForUser(array $params): array
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists('target_user', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: target_user');
        }

        $arguments['target_user'] = $params['target_user'];
        unset($params['target_user']);
        $operator = new Internal\Operator\Users\CheckFollowingForUser($this->browser, $this->authentication);

        return $operator->call($arguments['username'], $arguments['target_user']);
    }
}
