<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class CodeScanningAlertRuleSummary
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "id": {
            "type": [
                "string",
                "null"
            ],
            "description": "A unique identifier for the rule used to detect the alert."
        },
        "name": {
            "type": "string",
            "description": "The name of the rule used to detect the alert."
        },
        "severity": {
            "enum": [
                "none",
                "note",
                "warning",
                "error",
                null
            ],
            "type": [
                "string",
                "null"
            ],
            "description": "The severity of the alert."
        },
        "security_severity_level": {
            "enum": [
                "low",
                "medium",
                "high",
                "critical",
                null
            ],
            "type": [
                "string",
                "null"
            ],
            "description": "The security severity of the alert."
        },
        "description": {
            "type": "string",
            "description": "A short description of the rule used to detect the alert."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": "generated",
    "name": "generated",
    "severity": "error",
    "security_severity_level": "low",
    "description": "generated"
}';

    /**
     * id: A unique identifier for the rule used to detect the alert.
     * name: The name of the rule used to detect the alert.
     * severity: The severity of the alert.
     * securitySeverityLevel: The security severity of the alert.
     * description: A short description of the rule used to detect the alert.
     */
    public function __construct(public string|null $id, public string|null $name, public string|null $severity, #[MapFrom('security_severity_level')]
    public string|null $securitySeverityLevel, public string|null $description,)
    {
    }
}
