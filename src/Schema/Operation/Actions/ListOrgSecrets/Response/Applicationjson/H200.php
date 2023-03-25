<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Operation\Actions\ListOrgSecrets\Response\Applicationjson;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class H200
{
    public const SCHEMA_JSON = '{"required":["total_count","secrets"],"type":"object","properties":{"total_count":{"type":"integer"},"secrets":{"type":"array","items":{"title":"Actions Secret for an Organization","required":["name","created_at","updated_at","visibility"],"type":"object","properties":{"name":{"type":"string","description":"The name of the secret.","examples":["SECRET_TOKEN"]},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"},"visibility":{"enum":["all","private","selected"],"type":"string","description":"Visibility of a secret"},"selected_repositories_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/organizations\\/org\\/secrets\\/my_secret\\/repositories"]}},"description":"Secrets for GitHub Actions for an organization."}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"totalCount":13,"secrets":[{"name":"SECRET_TOKEN","createdAt":"1970-01-01T00:00:00+00:00","updatedAt":"1970-01-01T00:00:00+00:00","visibility":"all","selectedRepositoriesUrl":"https:\\/\\/api.github.com\\/organizations\\/org\\/secrets\\/my_secret\\/repositories"}]}';
    /**
     * @param array<\ApiClients\Client\GitHubAE\Schema\OrganizationActionsSecret> $secrets
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('total_count')] public int $totalCount, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\OrganizationActionsSecret::class)] public array $secrets)
    {
    }
}
