<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operation;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\Schema\CheckRun;
use ApiClients\Client\GitHubAE\Schema\CheckSuite;
use ApiClients\Client\GitHubAE\Schema\CheckSuitePreference;
use ApiClients\Client\GitHubAE\Schema\EmptyObject;
use ApiClients\Client\GitHubAE\Schema\Operations\Checks\ListForRef\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHubAE\Schema\Operations\Checks\ListForSuite\Response\ApplicationJson\Ok;

final class Checks
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return */
    public function create(string $owner, string $repo, array $params): CheckRun
    {
        return $this->operators->checks👷Create()->call($owner, $repo, $params);
    }

    /** @return */
    public function get(string $owner, string $repo, int $checkRunId): CheckRun
    {
        return $this->operators->checks👷Get()->call($owner, $repo, $checkRunId);
    }

    /** @return */
    public function update(string $owner, string $repo, int $checkRunId, array $params): CheckRun
    {
        return $this->operators->checks👷Update()->call($owner, $repo, $checkRunId, $params);
    }

    /** @return Observable<Schema\CheckAnnotation> */
    public function listAnnotations(string $owner, string $repo, int $checkRunId, int $perPage, int $page): iterable
    {
        return $this->operators->checks👷ListAnnotations()->call($owner, $repo, $checkRunId, $perPage, $page);
    }

    /** @return Observable<Schema\CheckAnnotation> */
    public function listAnnotationsListing(string $owner, string $repo, int $checkRunId, int $perPage, int $page): iterable
    {
        return $this->operators->checks👷ListAnnotationsListing()->call($owner, $repo, $checkRunId, $perPage, $page);
    }

    /** @return */
    public function rerequestRun(string $owner, string $repo, int $checkRunId): EmptyObject
    {
        return $this->operators->checks👷RerequestRun()->call($owner, $repo, $checkRunId);
    }

    /** @return */
    public function createSuite(string $owner, string $repo, array $params): CheckSuite
    {
        return $this->operators->checks👷CreateSuite()->call($owner, $repo, $params);
    }

    /** @return */
    public function setSuitesPreferences(string $owner, string $repo, array $params): CheckSuitePreference
    {
        return $this->operators->checks👷SetSuitesPreferences()->call($owner, $repo, $params);
    }

    /** @return */
    public function getSuite(string $owner, string $repo, int $checkSuiteId): CheckSuite
    {
        return $this->operators->checks👷GetSuite()->call($owner, $repo, $checkSuiteId);
    }

    /** @return */
    public function listForSuite(string $owner, string $repo, int $checkSuiteId, string $checkName, string $status, string $filter, int $perPage, int $page): Ok
    {
        return $this->operators->checks👷ListForSuite()->call($owner, $repo, $checkSuiteId, $checkName, $status, $filter, $perPage, $page);
    }

    /** @return */
    public function rerequestSuite(string $owner, string $repo, int $checkSuiteId): EmptyObject
    {
        return $this->operators->checks👷RerequestSuite()->call($owner, $repo, $checkSuiteId);
    }

    /** @return */
    public function listForRef(string $owner, string $repo, string $ref, string $checkName, string $status, int $appId, string $filter, int $perPage, int $page): Json
    {
        return $this->operators->checks👷ListForRef()->call($owner, $repo, $ref, $checkName, $status, $appId, $filter, $perPage, $page);
    }

    /** @return */
    public function listSuitesForRef(string $owner, string $repo, string $ref, int $appId, string $checkName, int $perPage, int $page): \ApiClients\Client\GitHubAE\Schema\Operations\Checks\ListSuitesForRef\Response\ApplicationJson\Ok
    {
        return $this->operators->checks👷ListSuitesForRef()->call($owner, $repo, $ref, $appId, $checkName, $perPage, $page);
    }
}
