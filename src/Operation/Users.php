<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operation;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\Schema\GpgKey;
use ApiClients\Client\GitHubAE\Schema\Hovercard;
use ApiClients\Client\GitHubAE\Schema\Key;
use ApiClients\Client\GitHubAE\Schema\PrivateUser;
use ApiClients\Client\GitHubAE\Schema\PublicUser;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class Users
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    public function getAuthenticated(): PrivateUser|PublicUser|WithoutBody
    {
        return $this->operators->users👷GetAuthenticated()->call();
    }

    public function updateAuthenticated(array $params): PrivateUser|WithoutBody
    {
        return $this->operators->users👷UpdateAuthenticated()->call($params);
    }

    /** @return iterable<int,Schema\SimpleUser>|WithoutBody */
    public function listFollowersForAuthenticatedUser(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->users👷ListFollowersForAuthenticatedUser()->call($perPage, $page);
    }

    /** @return iterable<int,Schema\SimpleUser>|WithoutBody */
    public function listFollowersForAuthenticatedUserListing(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->users👷ListFollowersForAuthenticatedUserListing()->call($perPage, $page);
    }

    /** @return iterable<int,Schema\SimpleUser>|WithoutBody */
    public function listFollowedByAuthenticatedUser(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->users👷ListFollowedByAuthenticatedUser()->call($perPage, $page);
    }

    /** @return iterable<int,Schema\SimpleUser>|WithoutBody */
    public function listFollowedByAuthenticatedUserListing(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->users👷ListFollowedByAuthenticatedUserListing()->call($perPage, $page);
    }

    public function checkPersonIsFollowedByAuthenticated(string $username): WithoutBody
    {
        return $this->operators->users👷CheckPersonIsFollowedByAuthenticated()->call($username);
    }

    public function follow(string $username): WithoutBody
    {
        return $this->operators->users👷Follow()->call($username);
    }

    public function unfollow(string $username): WithoutBody
    {
        return $this->operators->users👷Unfollow()->call($username);
    }

    /** @return iterable<int,Schema\GpgKey>|WithoutBody */
    public function listGpgKeysForAuthenticatedUser(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->users👷ListGpgKeysForAuthenticatedUser()->call($perPage, $page);
    }

    /** @return iterable<int,Schema\GpgKey>|WithoutBody */
    public function listGpgKeysForAuthenticatedUserListing(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->users👷ListGpgKeysForAuthenticatedUserListing()->call($perPage, $page);
    }

    public function createGpgKeyForAuthenticatedUser(array $params): GpgKey|WithoutBody
    {
        return $this->operators->users👷CreateGpgKeyForAuthenticatedUser()->call($params);
    }

    public function getGpgKeyForAuthenticatedUser(int $gpgKeyId): GpgKey|WithoutBody
    {
        return $this->operators->users👷GetGpgKeyForAuthenticatedUser()->call($gpgKeyId);
    }

    public function deleteGpgKeyForAuthenticatedUser(int $gpgKeyId): WithoutBody
    {
        return $this->operators->users👷DeleteGpgKeyForAuthenticatedUser()->call($gpgKeyId);
    }

    /** @return iterable<int,Schema\Key>|WithoutBody */
    public function listPublicSshKeysForAuthenticatedUser(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->users👷ListPublicSshKeysForAuthenticatedUser()->call($perPage, $page);
    }

    /** @return iterable<int,Schema\Key>|WithoutBody */
    public function listPublicSshKeysForAuthenticatedUserListing(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->users👷ListPublicSshKeysForAuthenticatedUserListing()->call($perPage, $page);
    }

    public function createPublicSshKeyForAuthenticatedUser(array $params): Key|WithoutBody
    {
        return $this->operators->users👷CreatePublicSshKeyForAuthenticatedUser()->call($params);
    }

    public function getPublicSshKeyForAuthenticatedUser(int $keyId): Key|WithoutBody
    {
        return $this->operators->users👷GetPublicSshKeyForAuthenticatedUser()->call($keyId);
    }

    public function deletePublicSshKeyForAuthenticatedUser(int $keyId): WithoutBody
    {
        return $this->operators->users👷DeletePublicSshKeyForAuthenticatedUser()->call($keyId);
    }

    /** @return iterable<int,Schema\SimpleUser>|WithoutBody */
    public function list(int $since, int $perPage): iterable|WithoutBody
    {
        return $this->operators->users👷List_()->call($since, $perPage);
    }

    public function getByUsername(string $username): PrivateUser|PublicUser
    {
        return $this->operators->users👷GetByUsername()->call($username);
    }

    /** @return iterable<int,Schema\SimpleUser> */
    public function listFollowersForUser(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->users👷ListFollowersForUser()->call($username, $perPage, $page);
    }

    /** @return iterable<int,Schema\SimpleUser> */
    public function listFollowersForUserListing(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->users👷ListFollowersForUserListing()->call($username, $perPage, $page);
    }

    /** @return iterable<int,Schema\SimpleUser> */
    public function listFollowingForUser(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->users👷ListFollowingForUser()->call($username, $perPage, $page);
    }

    /** @return iterable<int,Schema\SimpleUser> */
    public function listFollowingForUserListing(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->users👷ListFollowingForUserListing()->call($username, $perPage, $page);
    }

    public function checkFollowingForUser(string $username, string $targetUser): WithoutBody
    {
        return $this->operators->users👷CheckFollowingForUser()->call($username, $targetUser);
    }

    /** @return iterable<int,Schema\GpgKey> */
    public function listGpgKeysForUser(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->users👷ListGpgKeysForUser()->call($username, $perPage, $page);
    }

    /** @return iterable<int,Schema\GpgKey> */
    public function listGpgKeysForUserListing(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->users👷ListGpgKeysForUserListing()->call($username, $perPage, $page);
    }

    public function getContextForUser(string $username, string $subjectType, string $subjectId): Hovercard
    {
        return $this->operators->users👷GetContextForUser()->call($username, $subjectType, $subjectId);
    }

    /** @return iterable<int,Schema\KeySimple> */
    public function listPublicKeysForUser(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->users👷ListPublicKeysForUser()->call($username, $perPage, $page);
    }

    /** @return iterable<int,Schema\KeySimple> */
    public function listPublicKeysForUserListing(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->users👷ListPublicKeysForUserListing()->call($username, $perPage, $page);
    }
}
