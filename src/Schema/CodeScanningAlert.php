<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class CodeScanningAlert
{
    public const SCHEMA_JSON = '{"required":["number","created_at","url","html_url","instances_url","state","dismissed_by","dismissed_at","dismissed_reason","rule","tool","most_recent_instance"],"type":"object","properties":{"number":{"type":"integer","description":"The security alert number.","readOnly":true},"created_at":{"type":"string","description":"The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time","readOnly":true},"url":{"type":"string","description":"The REST API URL of the alert resource.","format":"uri","readOnly":true},"html_url":{"type":"string","description":"The GitHub URL of the alert resource.","format":"uri","readOnly":true},"instances_url":{"type":"string","description":"The REST API URL for fetching the list of instances for an alert.","format":"uri","readOnly":true},"state":{"enum":["open","closed","dismissed","fixed"],"type":"string","description":"State of a code scanning alert."},"dismissed_by":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"dismissed_at":{"type":["string","null"],"description":"The time that the alert was dismissed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time","readOnly":true},"dismissed_reason":{"enum":[null,"false positive","won\'t fix","used in tests"],"type":["string","null"],"description":"**Required when the state is dismissed.** The reason for dismissing or closing the alert."},"rule":{"type":"object","properties":{"id":{"type":["string","null"],"description":"A unique identifier for the rule used to detect the alert."},"name":{"type":"string","description":"The name of the rule used to detect the alert."},"severity":{"enum":["none","note","warning","error",null],"type":["string","null"],"description":"The severity of the alert."},"security_severity_level":{"enum":["low","medium","high","critical",null],"type":["string","null"],"description":"The security severity of the alert."},"description":{"type":"string","description":"A short description of the rule used to detect the alert."},"full_description":{"type":"string","description":"description of the rule used to detect the alert."},"tags":{"type":["array","null"],"items":{"type":"string"},"description":"A set of tags applicable for the rule."},"help":{"type":["string","null"],"description":"Detailed documentation for the rule as GitHub Flavored Markdown."},"help_uri":{"type":["string","null"],"description":"A link to the documentation for the rule used to detect the alert."}}},"tool":{"type":"object","properties":{"name":{"type":"string","description":"The name of the tool used to generate the code scanning analysis."},"version":{"type":["string","null"],"description":"The version of the tool used to generate the code scanning analysis."},"guid":{"type":["string","null"],"description":"The GUID of the tool used to generate the code scanning analysis, if provided in the uploaded SARIF data."}}},"most_recent_instance":{"type":"object","properties":{"ref":{"type":"string","description":"The full Git reference, formatted as `refs\\/heads\\/<branch name>`,\\n`refs\\/pull\\/<number>\\/merge`, or `refs\\/pull\\/<number>\\/head`."},"analysis_key":{"type":"string","description":"Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name."},"environment":{"type":"string","description":"Identifies the variable values associated with the environment in which the analysis that generated this alert instance was performed, such as the language that was analyzed."},"category":{"type":"string","description":"Identifies the configuration under which the analysis was executed. Used to distinguish between multiple analyses for the same tool and commit, but performed on different languages or different parts of the code."},"state":{"enum":["open","closed","dismissed","fixed"],"type":"string","description":"State of a code scanning alert."},"commit_sha":{"type":"string"},"message":{"type":"object","properties":{"text":{"type":"string"}}},"location":{"type":"object","properties":{"path":{"type":"string"},"start_line":{"type":"integer"},"end_line":{"type":"integer"},"start_column":{"type":"integer"},"end_column":{"type":"integer"}},"description":"Describe a region within a file for the alert."},"html_url":{"type":"string"},"classifications":{"type":"array","items":{"enum":["source","generated","test","library",null],"type":["string","null"],"description":"A classification of the file. For example to identify it as generated."},"description":"Classifications that have been applied to the file that triggered the alert.\\nFor example identifying it as documentation, or a generated file."}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"number":13,"created_at":"1970-01-01T00:00:00+00:00","url":"https:\\/\\/example.com\\/","html_url":"https:\\/\\/example.com\\/","instances_url":"https:\\/\\/example.com\\/","state":"open","dismissed_by":null,"dismissed_at":"1970-01-01T00:00:00+00:00","dismissed_reason":"generated_dismissed_reason_null","rule":{"id":"generated_id_null","name":"generated_name_null","severity":"none","security_severity_level":"low","description":"generated_description_null","full_description":"generated_full_description_null","tags":["generated_tags_null"],"help":"generated_help_null","help_uri":"generated_help_uri_null"},"tool":{"name":"generated_name_null","version":"generated_version_null","guid":"generated_guid_null"},"most_recent_instance":{"ref":"generated_ref_null","analysis_key":"generated_analysis_key_null","environment":"generated_environment_null","category":"generated_category_null","state":"open","commit_sha":"generated_commit_sha_null","message":{"text":"generated_text_null"},"location":{"path":"generated_path_null","start_line":13,"end_line":13,"start_column":13,"end_column":13},"html_url":"generated_html_url_null","classifications":["generated_classifications_null"]}}';
    /**
     * number: The security alert number.
     * createdAt: The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     * url: The REST API URL of the alert resource.
     * htmlUrl: The GitHub URL of the alert resource.
     * instancesUrl: The REST API URL for fetching the list of instances for an alert.
     * state: State of a code scanning alert.
     * dismissedAt: The time that the alert was dismissed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     * dismissedReason: **Required when the state is dismissed.** The reason for dismissing or closing the alert.
     */
    public function __construct(public int $number, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public string $createdAt, public string $url, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public string $htmlUrl, #[\EventSauce\ObjectHydrator\MapFrom('instances_url')] public string $instancesUrl, public string $state, #[\EventSauce\ObjectHydrator\MapFrom('dismissed_by')] public mixed $dismissedBy, #[\EventSauce\ObjectHydrator\MapFrom('dismissed_at')] public ?string $dismissedAt, #[\EventSauce\ObjectHydrator\MapFrom('dismissed_reason')] public ?string $dismissedReason, public Schema\CodeScanningAlertRule $rule, public Schema\CodeScanningAnalysisTool $tool, #[\EventSauce\ObjectHydrator\MapFrom('most_recent_instance')] public Schema\CodeScanningAlertInstance $mostRecentInstance)
    {
    }
}
