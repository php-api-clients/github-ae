<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operation;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\Schema\Feed;
use ApiClients\Client\GitHubAE\Schema\Operations\Activity\MarkNotificationsAsRead\Response\ApplicationJson\Accepted;
use ApiClients\Client\GitHubAE\Schema\Operations\Activity\MarkRepoNotificationsAsRead\Response\ApplicationJson\Accepted\Application\Json;
use ApiClients\Client\GitHubAE\Schema\Repository;
use ApiClients\Client\GitHubAE\Schema\RepositorySubscription;
use ApiClients\Client\GitHubAE\Schema\SimpleUser;
use ApiClients\Client\GitHubAE\Schema\Stargazer;
use ApiClients\Client\GitHubAE\Schema\StarredRepository;
use ApiClients\Client\GitHubAE\Schema\Thread;
use ApiClients\Client\GitHubAE\Schema\ThreadSubscription;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class Activity
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return */
    public function getFeeds(): Feed
    {
        return $this->operators->activity👷GetFeeds()->call();
    }

    /** @return Observable<Schema\Thread>|WithoutBody */
    public function listNotificationsForAuthenticatedUser(string $since, string $before, bool $all, bool $participating, int $page, int $perPage): iterable|WithoutBody
    {
        return $this->operators->activity👷ListNotificationsForAuthenticatedUser()->call($since, $before, $all, $participating, $page, $perPage);
    }

    /** @return Observable<Schema\Thread>|WithoutBody */
    public function listNotificationsForAuthenticatedUserListing(string $since, string $before, bool $all, bool $participating, int $page, int $perPage): iterable|WithoutBody
    {
        return $this->operators->activity👷ListNotificationsForAuthenticatedUserListing()->call($since, $before, $all, $participating, $page, $perPage);
    }

    /** @return */
    public function markNotificationsAsRead(array $params): Accepted|WithoutBody
    {
        return $this->operators->activity👷MarkNotificationsAsRead()->call($params);
    }

    /** @return */
    public function getThread(int $threadId): Thread|WithoutBody
    {
        return $this->operators->activity👷GetThread()->call($threadId);
    }

    public function markThreadAsDone(int $threadId): WithoutBody
    {
        return $this->operators->activity👷MarkThreadAsDone()->call($threadId);
    }

    /** @return */
    public function markThreadAsRead(int $threadId): WithoutBody
    {
        return $this->operators->activity👷MarkThreadAsRead()->call($threadId);
    }

    /** @return */
    public function getThreadSubscriptionForAuthenticatedUser(int $threadId): ThreadSubscription|WithoutBody
    {
        return $this->operators->activity👷GetThreadSubscriptionForAuthenticatedUser()->call($threadId);
    }

    /** @return */
    public function setThreadSubscription(int $threadId, array $params): ThreadSubscription|WithoutBody
    {
        return $this->operators->activity👷SetThreadSubscription()->call($threadId, $params);
    }

    /** @return */
    public function deleteThreadSubscription(int $threadId): WithoutBody
    {
        return $this->operators->activity👷DeleteThreadSubscription()->call($threadId);
    }

    /** @return Observable<Schema\Event> */
    public function listRepoEvents(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->activity👷ListRepoEvents()->call($owner, $repo, $perPage, $page);
    }

    /** @return Observable<Schema\Event> */
    public function listRepoEventsListing(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->activity👷ListRepoEventsListing()->call($owner, $repo, $perPage, $page);
    }

    /** @return Observable<Schema\Thread> */
    public function listRepoNotificationsForAuthenticatedUser(string $owner, string $repo, string $since, string $before, bool $all, bool $participating, int $perPage, int $page): iterable
    {
        return $this->operators->activity👷ListRepoNotificationsForAuthenticatedUser()->call($owner, $repo, $since, $before, $all, $participating, $perPage, $page);
    }

    /** @return Observable<Schema\Thread> */
    public function listRepoNotificationsForAuthenticatedUserListing(string $owner, string $repo, string $since, string $before, bool $all, bool $participating, int $perPage, int $page): iterable
    {
        return $this->operators->activity👷ListRepoNotificationsForAuthenticatedUserListing()->call($owner, $repo, $since, $before, $all, $participating, $perPage, $page);
    }

    /** @return */
    public function markRepoNotificationsAsRead(string $owner, string $repo, array $params): Json|WithoutBody
    {
        return $this->operators->activity👷MarkRepoNotificationsAsRead()->call($owner, $repo, $params);
    }

    /** @return */
    public function listStargazersForRepo(string $owner, string $repo, int $perPage, int $page): SimpleUser|Stargazer
    {
        return $this->operators->activity👷ListStargazersForRepo()->call($owner, $repo, $perPage, $page);
    }

    /** @return Observable<Schema\SimpleUser> */
    public function listWatchersForRepo(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->activity👷ListWatchersForRepo()->call($owner, $repo, $perPage, $page);
    }

    /** @return Observable<Schema\SimpleUser> */
    public function listWatchersForRepoListing(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->activity👷ListWatchersForRepoListing()->call($owner, $repo, $perPage, $page);
    }

    /** @return */
    public function getRepoSubscription(string $owner, string $repo): RepositorySubscription|WithoutBody
    {
        return $this->operators->activity👷GetRepoSubscription()->call($owner, $repo);
    }

    /** @return */
    public function setRepoSubscription(string $owner, string $repo, array $params): RepositorySubscription
    {
        return $this->operators->activity👷SetRepoSubscription()->call($owner, $repo, $params);
    }

    /** @return */
    public function deleteRepoSubscription(string $owner, string $repo): WithoutBody
    {
        return $this->operators->activity👷DeleteRepoSubscription()->call($owner, $repo);
    }

    /** @return Observable<Schema\Repository>|WithoutBody */
    public function listReposStarredByAuthenticatedUser(string $sort, string $direction, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->activity👷ListReposStarredByAuthenticatedUser()->call($sort, $direction, $perPage, $page);
    }

    /** @return Observable<Schema\Repository>|WithoutBody */
    public function listReposStarredByAuthenticatedUserListing(string $sort, string $direction, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->activity👷ListReposStarredByAuthenticatedUserListing()->call($sort, $direction, $perPage, $page);
    }

    /** @return */
    public function checkRepoIsStarredByAuthenticatedUser(string $owner, string $repo): WithoutBody
    {
        return $this->operators->activity👷CheckRepoIsStarredByAuthenticatedUser()->call($owner, $repo);
    }

    /** @return */
    public function starRepoForAuthenticatedUser(string $owner, string $repo): WithoutBody
    {
        return $this->operators->activity👷StarRepoForAuthenticatedUser()->call($owner, $repo);
    }

    /** @return */
    public function unstarRepoForAuthenticatedUser(string $owner, string $repo): WithoutBody
    {
        return $this->operators->activity👷UnstarRepoForAuthenticatedUser()->call($owner, $repo);
    }

    /** @return Observable<Schema\MinimalRepository>|WithoutBody */
    public function listWatchedReposForAuthenticatedUser(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->activity👷ListWatchedReposForAuthenticatedUser()->call($perPage, $page);
    }

    /** @return Observable<Schema\MinimalRepository>|WithoutBody */
    public function listWatchedReposForAuthenticatedUserListing(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->activity👷ListWatchedReposForAuthenticatedUserListing()->call($perPage, $page);
    }

    /** @return Observable<Schema\Event> */
    public function listEventsForAuthenticatedUser(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->activity👷ListEventsForAuthenticatedUser()->call($username, $perPage, $page);
    }

    /** @return Observable<Schema\Event> */
    public function listEventsForAuthenticatedUserListing(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->activity👷ListEventsForAuthenticatedUserListing()->call($username, $perPage, $page);
    }

    /** @return Observable<Schema\Event> */
    public function listOrgEventsForAuthenticatedUser(string $username, string $org, int $perPage, int $page): iterable
    {
        return $this->operators->activity👷ListOrgEventsForAuthenticatedUser()->call($username, $org, $perPage, $page);
    }

    /** @return Observable<Schema\Event> */
    public function listOrgEventsForAuthenticatedUserListing(string $username, string $org, int $perPage, int $page): iterable
    {
        return $this->operators->activity👷ListOrgEventsForAuthenticatedUserListing()->call($username, $org, $perPage, $page);
    }

    /** @return */
    public function listReposStarredByUser(string $username, string $sort, string $direction, int $perPage, int $page): StarredRepository|Repository
    {
        return $this->operators->activity👷ListReposStarredByUser()->call($username, $sort, $direction, $perPage, $page);
    }

    /** @return Observable<Schema\MinimalRepository> */
    public function listReposWatchedByUser(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->activity👷ListReposWatchedByUser()->call($username, $perPage, $page);
    }

    /** @return Observable<Schema\MinimalRepository> */
    public function listReposWatchedByUserListing(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->activity👷ListReposWatchedByUserListing()->call($username, $perPage, $page);
    }
}
