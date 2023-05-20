<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Schema\RateLimitOverview;

use ApiClients\Client\GitHubAE\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Resources
{
    public const SCHEMA_JSON         = '{"required":["core","search"],"type":"object","properties":{"core":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"graphql":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"search":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"source_import":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"integration_manifest":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"code_scanning_upload":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"actions_runner_registration":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"scim":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"core":{"limit":5,"remaining":9,"reset":5,"used":4},"graphql":{"limit":5,"remaining":9,"reset":5,"used":4},"search":{"limit":5,"remaining":9,"reset":5,"used":4},"source_import":{"limit":5,"remaining":9,"reset":5,"used":4},"integration_manifest":{"limit":5,"remaining":9,"reset":5,"used":4},"code_scanning_upload":{"limit":5,"remaining":9,"reset":5,"used":4},"actions_runner_registration":{"limit":5,"remaining":9,"reset":5,"used":4},"scim":{"limit":5,"remaining":9,"reset":5,"used":4}}';

    public function __construct(public Schema\RateLimit $core, public ?Schema\RateLimit $graphql, public Schema\RateLimit $search, #[MapFrom('source_import')] public ?Schema\RateLimit $sourceImport, #[MapFrom('integration_manifest')] public ?Schema\RateLimit $integrationManifest, #[MapFrom('code_scanning_upload')] public ?Schema\RateLimit $codeScanningUpload, #[MapFrom('actions_runner_registration')] public ?Schema\RateLimit $actionsRunnerRegistration, public ?Schema\RateLimit $scim)
    {
    }
}
