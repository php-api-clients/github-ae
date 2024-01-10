<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operation;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\Schema\SecretScanningAlert;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class SecretScanning
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return Observable<Schema\OrganizationSecretScanningAlert> */
    public function listAlertsForEnterprise(string $enterprise, string $state, string $secretType, string $resolution, string $before, string $after, string $validity, string $sort, string $direction, int $perPage): iterable
    {
        return $this->operators->secretScanning👷ListAlertsForEnterprise()->call($enterprise, $state, $secretType, $resolution, $before, $after, $validity, $sort, $direction, $perPage);
    }

    /** @return Observable<Schema\SecretScanningAlert>|WithoutBody */
    public function listAlertsForRepo(string $owner, string $repo, string $state, string $secretType, string $resolution, int $page, int $perPage): iterable|WithoutBody
    {
        return $this->operators->secretScanning👷ListAlertsForRepo()->call($owner, $repo, $state, $secretType, $resolution, $page, $perPage);
    }

    /** @return Observable<Schema\SecretScanningAlert>|WithoutBody */
    public function listAlertsForRepoListing(string $owner, string $repo, string $state, string $secretType, string $resolution, int $page, int $perPage): iterable|WithoutBody
    {
        return $this->operators->secretScanning👷ListAlertsForRepoListing()->call($owner, $repo, $state, $secretType, $resolution, $page, $perPage);
    }

    /** @return */
    public function getAlert(string $owner, string $repo, int $alertNumber): SecretScanningAlert|WithoutBody
    {
        return $this->operators->secretScanning👷GetAlert()->call($owner, $repo, $alertNumber);
    }

    /** @return */
    public function updateAlert(string $owner, string $repo, int $alertNumber, array $params): SecretScanningAlert|WithoutBody
    {
        return $this->operators->secretScanning👷UpdateAlert()->call($owner, $repo, $alertNumber, $params);
    }

    /** @return Observable<Schema\SecretScanningLocation>|WithoutBody */
    public function listLocationsForAlert(string $owner, string $repo, int $alertNumber, int $page, int $perPage): iterable|WithoutBody
    {
        return $this->operators->secretScanning👷ListLocationsForAlert()->call($owner, $repo, $alertNumber, $page, $perPage);
    }

    /** @return Observable<Schema\SecretScanningLocation>|WithoutBody */
    public function listLocationsForAlertListing(string $owner, string $repo, int $alertNumber, int $page, int $perPage): iterable|WithoutBody
    {
        return $this->operators->secretScanning👷ListLocationsForAlertListing()->call($owner, $repo, $alertNumber, $page, $perPage);
    }
}
