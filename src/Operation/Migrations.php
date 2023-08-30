<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operation;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\Schema\Migration;

final class Migrations
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return Observable<Schema\Migration> */
    public function listForOrg(string $org, array $exclude, int $perPage, int $page): iterable
    {
        return $this->operators->migrations👷ListForOrg()->call($org, $exclude, $perPage, $page);
    }

    /** @return Observable<Schema\Migration> */
    public function listForOrgListing(string $org, array $exclude, int $perPage, int $page): iterable
    {
        return $this->operators->migrations👷ListForOrgListing()->call($org, $exclude, $perPage, $page);
    }

    /** @return */
    public function startForOrg(string $org, array $params): Migration|array
    {
        return $this->operators->migrations👷StartForOrg()->call($org, $params);
    }

    /** @return */
    public function getStatusForOrg(string $org, int $migrationId, array $exclude): Migration|array
    {
        return $this->operators->migrations👷GetStatusForOrg()->call($org, $migrationId, $exclude);
    }

    /** @return array{code:int} */
    public function downloadArchiveForOrg(string $org, int $migrationId): array
    {
        return $this->operators->migrations👷DownloadArchiveForOrg()->call($org, $migrationId);
    }

    /** @return Observable<string> */
    public function downloadArchiveForOrgStreaming(string $org, int $migrationId): iterable
    {
        return $this->operators->migrations👷DownloadArchiveForOrgStreaming()->call($org, $migrationId);
    }

    /** @return array{code:int} */
    public function deleteArchiveForOrg(string $org, int $migrationId): array
    {
        return $this->operators->migrations👷DeleteArchiveForOrg()->call($org, $migrationId);
    }

    /** @return array{code:int} */
    public function unlockRepoForOrg(string $org, int $migrationId, string $repoName): array
    {
        return $this->operators->migrations👷UnlockRepoForOrg()->call($org, $migrationId, $repoName);
    }

    /** @return Observable<Schema\MinimalRepository> */
    public function listReposForOrg(string $org, int $migrationId, int $perPage, int $page): iterable
    {
        return $this->operators->migrations👷ListReposForOrg()->call($org, $migrationId, $perPage, $page);
    }

    /** @return Observable<Schema\MinimalRepository> */
    public function listReposForOrgListing(string $org, int $migrationId, int $perPage, int $page): iterable
    {
        return $this->operators->migrations👷ListReposForOrgListing()->call($org, $migrationId, $perPage, $page);
    }

    /** @return Observable<Schema\Migration>|array{code:int} */
    public function listForAuthenticatedUser(int $perPage, int $page): iterable
    {
        return $this->operators->migrations👷ListForAuthenticatedUser()->call($perPage, $page);
    }

    /** @return Observable<Schema\Migration>|array{code:int} */
    public function listForAuthenticatedUserListing(int $perPage, int $page): iterable
    {
        return $this->operators->migrations👷ListForAuthenticatedUserListing()->call($perPage, $page);
    }

    /** @return Schema\Migration|array{code:int} */
    public function startForAuthenticatedUser(array $params): Migration|array
    {
        return $this->operators->migrations👷StartForAuthenticatedUser()->call($params);
    }

    /** @return array{code:int} */
    public function getArchiveForAuthenticatedUser(int $migrationId): array
    {
        return $this->operators->migrations👷GetArchiveForAuthenticatedUser()->call($migrationId);
    }

    /** @return Observable<Schema\MinimalRepository> */
    public function listReposForAuthenticatedUser(int $migrationId, int $perPage, int $page): iterable
    {
        return $this->operators->migrations👷ListReposForAuthenticatedUser()->call($migrationId, $perPage, $page);
    }

    /** @return Observable<Schema\MinimalRepository> */
    public function listReposForAuthenticatedUserListing(int $migrationId, int $perPage, int $page): iterable
    {
        return $this->operators->migrations👷ListReposForAuthenticatedUserListing()->call($migrationId, $perPage, $page);
    }
}
