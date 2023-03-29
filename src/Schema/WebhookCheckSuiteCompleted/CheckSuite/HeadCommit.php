<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookCheckSuiteCompleted\CheckSuite;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class HeadCommit
{
    public const SCHEMA_JSON = '{"title":"SimpleCommit","required":["id","tree_id","message","timestamp","author","committer"],"type":"object","properties":{"author":{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},"committer":{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},"id":{"type":"string"},"message":{"type":"string"},"timestamp":{"type":"string"},"tree_id":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'SimpleCommit';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"author":{"date":"1970-01-01T00:00:00+00:00","email":"generated_email_email","name":"generated_name_null","username":"generated_username_null"},"committer":{"date":"1970-01-01T00:00:00+00:00","email":"generated_email_email","name":"generated_name_null","username":"generated_username_null"},"id":"generated_id_null","message":"generated_message_null","timestamp":"generated_timestamp_null","tree_id":"generated_tree_id_null"}';
    /**
     * author: Metaproperties for Git author/committer information.
     * committer: Metaproperties for Git author/committer information.
     */
    public function __construct(public Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit\Author $author, public Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit\Committer $committer, public string $id, public string $message, public string $timestamp, #[\EventSauce\ObjectHydrator\MapFrom('tree_id')] public string $treeId)
    {
    }
}
