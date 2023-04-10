<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Root
{
    public const SCHEMA_JSON = '{"required":["current_user_url","current_user_authorizations_html_url","authorizations_url","code_search_url","commit_search_url","emails_url","emojis_url","events_url","feeds_url","followers_url","following_url","gists_url","hub_url","issue_search_url","issues_url","keys_url","label_search_url","notifications_url","organization_url","organization_repositories_url","organization_teams_url","public_gists_url","rate_limit_url","repository_url","repository_search_url","current_user_repositories_url","starred_url","starred_gists_url","user_url","user_organizations_url","user_repositories_url","user_search_url"],"type":"object","properties":{"current_user_url":{"type":"string","format":"uri-template"},"current_user_authorizations_html_url":{"type":"string","format":"uri-template"},"authorizations_url":{"type":"string","format":"uri-template"},"code_search_url":{"type":"string","format":"uri-template"},"commit_search_url":{"type":"string","format":"uri-template"},"emails_url":{"type":"string","format":"uri-template"},"emojis_url":{"type":"string","format":"uri-template"},"events_url":{"type":"string","format":"uri-template"},"feeds_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri-template"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"hub_url":{"type":"string","format":"uri-template"},"issue_search_url":{"type":"string","format":"uri-template"},"issues_url":{"type":"string","format":"uri-template"},"keys_url":{"type":"string","format":"uri-template"},"label_search_url":{"type":"string","format":"uri-template"},"notifications_url":{"type":"string","format":"uri-template"},"organization_url":{"type":"string","format":"uri-template"},"organization_repositories_url":{"type":"string","format":"uri-template"},"organization_teams_url":{"type":"string","format":"uri-template"},"public_gists_url":{"type":"string","format":"uri-template"},"rate_limit_url":{"type":"string","format":"uri-template"},"repository_url":{"type":"string","format":"uri-template"},"repository_search_url":{"type":"string","format":"uri-template"},"current_user_repositories_url":{"type":"string","format":"uri-template"},"starred_url":{"type":"string","format":"uri-template"},"starred_gists_url":{"type":"string","format":"uri-template"},"topic_search_url":{"type":"string","format":"uri-template"},"user_url":{"type":"string","format":"uri-template"},"user_organizations_url":{"type":"string","format":"uri-template"},"user_repositories_url":{"type":"string","format":"uri-template"},"user_search_url":{"type":"string","format":"uri-template"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"current_user_url":"generated_current_user_url_uri-template","current_user_authorizations_html_url":"generated_current_user_authorizations_html_url_uri-template","authorizations_url":"generated_authorizations_url_uri-template","code_search_url":"generated_code_search_url_uri-template","commit_search_url":"generated_commit_search_url_uri-template","emails_url":"generated_emails_url_uri-template","emojis_url":"generated_emojis_url_uri-template","events_url":"generated_events_url_uri-template","feeds_url":"generated_feeds_url_uri-template","followers_url":"generated_followers_url_uri-template","following_url":"generated_following_url_uri-template","gists_url":"generated_gists_url_uri-template","hub_url":"generated_hub_url_uri-template","issue_search_url":"generated_issue_search_url_uri-template","issues_url":"generated_issues_url_uri-template","keys_url":"generated_keys_url_uri-template","label_search_url":"generated_label_search_url_uri-template","notifications_url":"generated_notifications_url_uri-template","organization_url":"generated_organization_url_uri-template","organization_repositories_url":"generated_organization_repositories_url_uri-template","organization_teams_url":"generated_organization_teams_url_uri-template","public_gists_url":"generated_public_gists_url_uri-template","rate_limit_url":"generated_rate_limit_url_uri-template","repository_url":"generated_repository_url_uri-template","repository_search_url":"generated_repository_search_url_uri-template","current_user_repositories_url":"generated_current_user_repositories_url_uri-template","starred_url":"generated_starred_url_uri-template","starred_gists_url":"generated_starred_gists_url_uri-template","topic_search_url":"generated_topic_search_url_uri-template","user_url":"generated_user_url_uri-template","user_organizations_url":"generated_user_organizations_url_uri-template","user_repositories_url":"generated_user_repositories_url_uri-template","user_search_url":"generated_user_search_url_uri-template"}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('current_user_url')] public string $currentUserUrl, #[\EventSauce\ObjectHydrator\MapFrom('current_user_authorizations_html_url')] public string $currentUserAuthorizationsHtmlUrl, #[\EventSauce\ObjectHydrator\MapFrom('authorizations_url')] public string $authorizationsUrl, #[\EventSauce\ObjectHydrator\MapFrom('code_search_url')] public string $codeSearchUrl, #[\EventSauce\ObjectHydrator\MapFrom('commit_search_url')] public string $commitSearchUrl, #[\EventSauce\ObjectHydrator\MapFrom('emails_url')] public string $emailsUrl, #[\EventSauce\ObjectHydrator\MapFrom('emojis_url')] public string $emojisUrl, #[\EventSauce\ObjectHydrator\MapFrom('events_url')] public string $eventsUrl, #[\EventSauce\ObjectHydrator\MapFrom('feeds_url')] public string $feedsUrl, #[\EventSauce\ObjectHydrator\MapFrom('followers_url')] public string $followersUrl, #[\EventSauce\ObjectHydrator\MapFrom('following_url')] public string $followingUrl, #[\EventSauce\ObjectHydrator\MapFrom('gists_url')] public string $gistsUrl, #[\EventSauce\ObjectHydrator\MapFrom('hub_url')] public string $hubUrl, #[\EventSauce\ObjectHydrator\MapFrom('issue_search_url')] public string $issueSearchUrl, #[\EventSauce\ObjectHydrator\MapFrom('issues_url')] public string $issuesUrl, #[\EventSauce\ObjectHydrator\MapFrom('keys_url')] public string $keysUrl, #[\EventSauce\ObjectHydrator\MapFrom('label_search_url')] public string $labelSearchUrl, #[\EventSauce\ObjectHydrator\MapFrom('notifications_url')] public string $notificationsUrl, #[\EventSauce\ObjectHydrator\MapFrom('organization_url')] public string $organizationUrl, #[\EventSauce\ObjectHydrator\MapFrom('organization_repositories_url')] public string $organizationRepositoriesUrl, #[\EventSauce\ObjectHydrator\MapFrom('organization_teams_url')] public string $organizationTeamsUrl, #[\EventSauce\ObjectHydrator\MapFrom('public_gists_url')] public string $publicGistsUrl, #[\EventSauce\ObjectHydrator\MapFrom('rate_limit_url')] public string $rateLimitUrl, #[\EventSauce\ObjectHydrator\MapFrom('repository_url')] public string $repositoryUrl, #[\EventSauce\ObjectHydrator\MapFrom('repository_search_url')] public string $repositorySearchUrl, #[\EventSauce\ObjectHydrator\MapFrom('current_user_repositories_url')] public string $currentUserRepositoriesUrl, #[\EventSauce\ObjectHydrator\MapFrom('starred_url')] public string $starredUrl, #[\EventSauce\ObjectHydrator\MapFrom('starred_gists_url')] public string $starredGistsUrl, #[\EventSauce\ObjectHydrator\MapFrom('topic_search_url')] public ?string $topicSearchUrl, #[\EventSauce\ObjectHydrator\MapFrom('user_url')] public string $userUrl, #[\EventSauce\ObjectHydrator\MapFrom('user_organizations_url')] public string $userOrganizationsUrl, #[\EventSauce\ObjectHydrator\MapFrom('user_repositories_url')] public string $userRepositoriesUrl, #[\EventSauce\ObjectHydrator\MapFrom('user_search_url')] public string $userSearchUrl)
    {
    }
}
