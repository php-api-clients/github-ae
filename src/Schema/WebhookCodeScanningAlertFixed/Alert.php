<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Schema\WebhookCodeScanningAlertFixed;

use ApiClients\Client\GitHubAE\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Alert
{
    public const SCHEMA_JSON         = '{"required":["number","created_at","url","html_url","state","dismissed_by","dismissed_at","dismissed_reason","rule","tool"],"type":"object","properties":{"created_at":{"type":"string","description":"The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ.`","format":"date-time"},"dismissed_at":{"type":["string","null"],"description":"The time that the alert was dismissed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time"},"dismissed_by":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"dismissed_reason":{"enum":["false positive","won\'t fix","used in tests",null],"type":["string","null"],"description":"The reason for dismissing or closing the alert. Can be one of: `false positive`, `won\'t fix`, and `used in tests`."},"html_url":{"type":"string","description":"The GitHub URL of the alert resource.","format":"uri"},"instances_url":{"type":"string","format":"uri"},"most_recent_instance":{"title":"Alert Instance","required":["ref","analysis_key","environment","state"],"type":["object","null"],"properties":{"analysis_key":{"type":"string","description":"Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name."},"category":{"type":"string","description":"Identifies the configuration under which the analysis was executed."},"classifications":{"type":"array","items":{"type":"string"}},"commit_sha":{"type":"string"},"environment":{"type":"string","description":"Identifies the variable values associated with the environment in which the analysis that generated this alert instance was performed, such as the language that was analyzed."},"location":{"type":"object","properties":{"end_column":{"type":"integer"},"end_line":{"type":"integer"},"path":{"type":"string"},"start_column":{"type":"integer"},"start_line":{"type":"integer"}}},"message":{"type":"object","properties":{"text":{"type":"string"}}},"ref":{"type":"string","description":"The full Git reference, formatted as `refs\\/heads\\/<branch name>`."},"state":{"enum":["open","dismissed","fixed"],"type":"string","description":"State of a code scanning alert."}}},"number":{"type":"integer","description":"The code scanning alert number."},"rule":{"required":["id","severity","description"],"type":"object","properties":{"description":{"type":"string","description":"A short description of the rule used to detect the alert."},"full_description":{"type":"string"},"help":{"type":["string","null"]},"help_uri":{"type":["string","null"],"description":"A link to the documentation for the rule used to detect the alert."},"id":{"type":"string","description":"A unique identifier for the rule used to detect the alert."},"name":{"type":"string"},"severity":{"enum":["none","note","warning","error",null],"type":["string","null"],"description":"The severity of the alert."},"tags":{"type":["array","null"],"items":{"type":"string"}}}},"state":{"enum":["fixed"],"type":"string","description":"State of a code scanning alert."},"tool":{"required":["name","version"],"type":"object","properties":{"guid":{"type":["string","null"]},"name":{"type":"string","description":"The name of the tool used to generate the code scanning analysis alert."},"version":{"type":["string","null"],"description":"The version of the tool used to detect the alert."}}},"url":{"type":"string","format":"uri"}},"description":"The code scanning alert involved in the event."}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The code scanning alert involved in the event.';
    public const SCHEMA_EXAMPLE_DATA = '{"created_at":"1970-01-01T00:00:00+00:00","dismissed_at":"1970-01-01T00:00:00+00:00","dismissed_by":{"avatar_url":"https:\\/\\/example.com\\/","deleted":false,"email":"generated_email_null","events_url":"generated_events_url_uri-template","followers_url":"https:\\/\\/example.com\\/","following_url":"generated_following_url_uri-template","gists_url":"generated_gists_url_uri-template","gravatar_id":"generated_gravatar_id_null","html_url":"https:\\/\\/example.com\\/","id":13,"login":"generated_login_null","name":"generated_name_null","node_id":"generated_node_id_null","organizations_url":"https:\\/\\/example.com\\/","received_events_url":"https:\\/\\/example.com\\/","repos_url":"https:\\/\\/example.com\\/","site_admin":false,"starred_url":"generated_starred_url_uri-template","subscriptions_url":"https:\\/\\/example.com\\/","type":"Bot","url":"https:\\/\\/example.com\\/"},"dismissed_reason":"false positive","html_url":"https:\\/\\/example.com\\/","instances_url":"https:\\/\\/example.com\\/","most_recent_instance":{"analysis_key":"generated_analysis_key_null","category":"generated_category_null","classifications":["generated_classifications_null"],"commit_sha":"generated_commit_sha_null","environment":"generated_environment_null","location":{"end_column":13,"end_line":13,"path":"generated_path_null","start_column":13,"start_line":13},"message":{"text":"generated_text_null"},"ref":"generated_ref_null","state":"open"},"number":13,"rule":{"description":"generated_description_null","full_description":"generated_full_description_null","help":"generated_help_null","help_uri":"generated_help_uri_null","id":"generated_id_null","name":"generated_name_null","severity":"none","tags":["generated_tags_null"]},"state":"fixed","tool":{"guid":"generated_guid_null","name":"generated_name_null","version":"generated_version_null"},"url":"https:\\/\\/example.com\\/"}';

    /**
     * createdAt: The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ.`
     * dismissedAt: The time that the alert was dismissed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     * dismissedReason: The reason for dismissing or closing the alert. Can be one of: `false positive`, `won't fix`, and `used in tests`.
     * htmlUrl: The GitHub URL of the alert resource.
     * number: The code scanning alert number.
     * state: State of a code scanning alert.
     */
    public function __construct(#[MapFrom('created_at')] public string $createdAt, #[MapFrom('dismissed_at')] public ?string $dismissedAt, #[MapFrom('dismissed_by')] public ?Schema\WebhookCodeScanningAlertFixed\Alert\DismissedBy $dismissedBy, #[MapFrom('dismissed_reason')] public ?string $dismissedReason, #[MapFrom('html_url')] public string $htmlUrl, #[MapFrom('instances_url')] public ?string $instancesUrl, #[MapFrom('most_recent_instance')] public ?Schema\WebhookCodeScanningAlertFixed\Alert\MostRecentInstance $mostRecentInstance, public int $number, public Schema\WebhookCodeScanningAlertFixed\Alert\Rule $rule, public string $state, public Schema\WebhookCodeScanningAlertFixed\Alert\Tool $tool, public string $url)
    {
    }
}
