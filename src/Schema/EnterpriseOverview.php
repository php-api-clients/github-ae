<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Schema;

final readonly class EnterpriseOverview
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "repos": {
            "title": "Repository Enterprise Stats",
            "required": [
                "total_repos",
                "root_repos",
                "fork_repos",
                "org_repos",
                "total_pushes",
                "total_wikis"
            ],
            "type": "object",
            "properties": {
                "total_repos": {
                    "type": "integer"
                },
                "root_repos": {
                    "type": "integer"
                },
                "fork_repos": {
                    "type": "integer"
                },
                "org_repos": {
                    "type": "integer"
                },
                "total_pushes": {
                    "type": "integer"
                },
                "total_wikis": {
                    "type": "integer"
                }
            }
        },
        "hooks": {
            "title": "Hooks Enterprise Stats",
            "required": [
                "total_hooks",
                "active_hooks",
                "inactive_hooks"
            ],
            "type": "object",
            "properties": {
                "total_hooks": {
                    "type": "integer"
                },
                "active_hooks": {
                    "type": "integer"
                },
                "inactive_hooks": {
                    "type": "integer"
                }
            }
        },
        "pages": {
            "title": "Enterprise Pages Stats",
            "required": [
                "total_pages"
            ],
            "type": "object",
            "properties": {
                "total_pages": {
                    "type": "integer"
                }
            }
        },
        "orgs": {
            "title": "Enterprise Organization Stats",
            "required": [
                "total_orgs",
                "disabled_orgs",
                "total_teams",
                "total_team_members"
            ],
            "type": "object",
            "properties": {
                "total_orgs": {
                    "type": "integer"
                },
                "disabled_orgs": {
                    "type": "integer"
                },
                "total_teams": {
                    "type": "integer"
                },
                "total_team_members": {
                    "type": "integer"
                }
            }
        },
        "users": {
            "title": "Enterprise User Stats",
            "required": [
                "total_users",
                "admin_users",
                "suspended_users"
            ],
            "type": "object",
            "properties": {
                "total_users": {
                    "type": "integer"
                },
                "admin_users": {
                    "type": "integer"
                },
                "suspended_users": {
                    "type": "integer"
                }
            }
        },
        "pulls": {
            "title": "Enterprise Pull Request Stats",
            "required": [
                "total_pulls",
                "merged_pulls",
                "mergeable_pulls",
                "unmergeable_pulls"
            ],
            "type": "object",
            "properties": {
                "total_pulls": {
                    "type": "integer"
                },
                "merged_pulls": {
                    "type": "integer"
                },
                "mergeable_pulls": {
                    "type": "integer"
                },
                "unmergeable_pulls": {
                    "type": "integer"
                }
            }
        },
        "issues": {
            "title": "Enterprise Issue Stats",
            "required": [
                "total_issues",
                "open_issues",
                "closed_issues"
            ],
            "type": "object",
            "properties": {
                "total_issues": {
                    "type": "integer"
                },
                "open_issues": {
                    "type": "integer"
                },
                "closed_issues": {
                    "type": "integer"
                }
            }
        },
        "milestones": {
            "title": "Enterprise Milestone Stats",
            "required": [
                "total_milestones",
                "open_milestones",
                "closed_milestones"
            ],
            "type": "object",
            "properties": {
                "total_milestones": {
                    "type": "integer"
                },
                "open_milestones": {
                    "type": "integer"
                },
                "closed_milestones": {
                    "type": "integer"
                }
            }
        },
        "gists": {
            "title": "Enterprise Gist Stats",
            "required": [
                "total_gists",
                "private_gists",
                "public_gists"
            ],
            "type": "object",
            "properties": {
                "total_gists": {
                    "type": "integer"
                },
                "private_gists": {
                    "type": "integer"
                },
                "public_gists": {
                    "type": "integer"
                }
            }
        },
        "comments": {
            "title": "Enterprise Comment Stats",
            "required": [
                "total_commit_comments",
                "total_gist_comments",
                "total_issue_comments",
                "total_pull_request_comments"
            ],
            "type": "object",
            "properties": {
                "total_commit_comments": {
                    "type": "integer"
                },
                "total_gist_comments": {
                    "type": "integer"
                },
                "total_issue_comments": {
                    "type": "integer"
                },
                "total_pull_request_comments": {
                    "type": "integer"
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "repos": {
        "total_repos": 11,
        "root_repos": 10,
        "fork_repos": 10,
        "org_repos": 9,
        "total_pushes": 12,
        "total_wikis": 11
    },
    "hooks": {
        "total_hooks": 11,
        "active_hooks": 12,
        "inactive_hooks": 14
    },
    "pages": {
        "total_pages": 11
    },
    "orgs": {
        "total_orgs": 10,
        "disabled_orgs": 13,
        "total_teams": 11,
        "total_team_members": 18
    },
    "users": {
        "total_users": 11,
        "admin_users": 11,
        "suspended_users": 15
    },
    "pulls": {
        "total_pulls": 11,
        "merged_pulls": 12,
        "mergeable_pulls": 15,
        "unmergeable_pulls": 17
    },
    "issues": {
        "total_issues": 12,
        "open_issues": 11,
        "closed_issues": 13
    },
    "milestones": {
        "total_milestones": 16,
        "open_milestones": 15,
        "closed_milestones": 17
    },
    "gists": {
        "total_gists": 11,
        "private_gists": 13,
        "public_gists": 12
    },
    "comments": {
        "total_commit_comments": 21,
        "total_gist_comments": 19,
        "total_issue_comments": 20,
        "total_pull_request_comments": 27
    }
}';

    public function __construct(public Schema\EnterpriseRepositoryOverview|null $repos, public Schema\EnterpriseHookOverview|null $hooks, public Schema\EnterprisePageOverview|null $pages, public Schema\EnterpriseOrganizationOverview|null $orgs, public Schema\EnterpriseUserOverview|null $users, public Schema\EnterprisePullRequestOverview|null $pulls, public Schema\EnterpriseIssueOverview|null $issues, public Schema\EnterpriseMilestoneOverview|null $milestones, public Schema\EnterpriseGistOverview|null $gists, public Schema\EnterpriseCommentOverview|null $comments)
    {
    }
}
