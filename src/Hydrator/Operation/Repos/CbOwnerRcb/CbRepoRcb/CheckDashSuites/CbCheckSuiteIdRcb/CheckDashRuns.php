<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashSuites\CbCheckSuiteIdRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class CheckDashRuns implements ObjectMapper
{
    private array $hydrationStack = [];
    public function __construct() {}

    /**
     * @template T of object
     * @param class-string<T> $className
     * @return T
     */
    public function hydrateObject(string $className, array $payload): object
    {
        return match($className) {
            'ApiClients\Client\GitHubAE\Schema\Operation\Checks\ListForSuite\Response\Applicationjson\H200' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Operation⚡️Checks⚡️ListForSuite⚡️Response⚡️Applicationjson⚡️H200($payload),
                'ApiClients\Client\GitHubAE\Schema\CheckRun' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CheckRun($payload),
                'ApiClients\Client\GitHubAE\Schema\CheckRun\Output' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CheckRun⚡️Output($payload),
                'ApiClients\Client\GitHubAE\Schema\CheckRun\CheckSuite' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CheckRun⚡️CheckSuite($payload),
                'ApiClients\Client\GitHubAE\Schema\Integration' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Integration($payload),
                'ApiClients\Client\GitHubAE\Schema\SimpleUser' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️SimpleUser($payload),
                'ApiClients\Client\GitHubAE\Schema\Integration\Permissions' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Integration⚡️Permissions($payload),
                'ApiClients\Client\GitHubAE\Schema\PullRequestMinimal' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestMinimal($payload),
                'ApiClients\Client\GitHubAE\Schema\PullRequestMinimal\Head' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestMinimal⚡️Head($payload),
                'ApiClients\Client\GitHubAE\Schema\PullRequestMinimal\Head\Repo' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestMinimal⚡️Head⚡️Repo($payload),
                'ApiClients\Client\GitHubAE\Schema\DeploymentSimple' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️DeploymentSimple($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Operation⚡️Checks⚡️ListForSuite⚡️Response⚡️Applicationjson⚡️H200(array $payload): \ApiClients\Client\GitHubAE\Schema\Operation\Checks\ListForSuite\Response\Applicationjson\H200
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['total_count'] ?? null;
    
                if ($value === null) {
                    $properties['total_count'] = null;
                    goto after_total_count;
                }

                $properties['total_count'] = $value;
    
                after_total_count:

                $value = $payload['check_runs'] ?? null;
    
                if ($value === null) {
                    $properties['check_runs'] = null;
                    goto after_check_runs;
                }

                static $check_runsCaster1;
    
                if ($check_runsCaster1 === null) {
                    $check_runsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubAE\\Schema\\CheckRun',
));
                }
    
                $value = $check_runsCaster1->cast($value, $this);

                $properties['check_runs'] = $value;
    
                after_check_runs:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Operation\Checks\ListForSuite\Response\Applicationjson\H200', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\Operation\Checks\ListForSuite\Response\Applicationjson\H200::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\Operation\Checks\ListForSuite\Response\Applicationjson\H200(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Operation\Checks\ListForSuite\Response\Applicationjson\H200', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CheckRun(array $payload): \ApiClients\Client\GitHubAE\Schema\CheckRun
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $properties['id'] = null;
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['head_sha'] ?? null;
    
                if ($value === null) {
                    $properties['head_sha'] = null;
                    goto after_head_sha;
                }

                $properties['head_sha'] = $value;
    
                after_head_sha:

                $value = $payload['node_id'] ?? null;
    
                if ($value === null) {
                    $properties['node_id'] = null;
                    goto after_node_id;
                }

                $properties['node_id'] = $value;
    
                after_node_id:

                $value = $payload['external_id'] ?? null;
    
                if ($value === null) {
                    $properties['external_id'] = null;
                    goto after_external_id;
                }

                $properties['external_id'] = $value;
    
                after_external_id:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $properties['html_url'] = null;
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

                $value = $payload['details_url'] ?? null;
    
                if ($value === null) {
                    $properties['details_url'] = null;
                    goto after_details_url;
                }

                $properties['details_url'] = $value;
    
                after_details_url:

                $value = $payload['status'] ?? null;
    
                if ($value === null) {
                    $properties['status'] = null;
                    goto after_status;
                }

                $properties['status'] = $value;
    
                after_status:

                $value = $payload['conclusion'] ?? null;
    
                if ($value === null) {
                    $properties['conclusion'] = null;
                    goto after_conclusion;
                }

                $properties['conclusion'] = $value;
    
                after_conclusion:

                $value = $payload['started_at'] ?? null;
    
                if ($value === null) {
                    $properties['started_at'] = null;
                    goto after_started_at;
                }

                $properties['started_at'] = $value;
    
                after_started_at:

                $value = $payload['completed_at'] ?? null;
    
                if ($value === null) {
                    $properties['completed_at'] = null;
                    goto after_completed_at;
                }

                $properties['completed_at'] = $value;
    
                after_completed_at:

                $value = $payload['output'] ?? null;
    
                if ($value === null) {
                    $properties['output'] = null;
                    goto after_output;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'output';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CheckRun⚡️Output($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['output'] = $value;
    
                after_output:

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $properties['name'] = null;
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['check_suite'] ?? null;
    
                if ($value === null) {
                    $properties['check_suite'] = null;
                    goto after_check_suite;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'check_suite';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CheckRun⚡️CheckSuite($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['check_suite'] = $value;
    
                after_check_suite:

                $value = $payload['app'] ?? null;
    
                if ($value === null) {
                    $properties['app'] = null;
                    goto after_app;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'app';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Integration($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['app'] = $value;
    
                after_app:

                $value = $payload['pull_requests'] ?? null;
    
                if ($value === null) {
                    $properties['pull_requests'] = null;
                    goto after_pull_requests;
                }

                static $pull_requestsCaster1;
    
                if ($pull_requestsCaster1 === null) {
                    $pull_requestsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestMinimal',
));
                }
    
                $value = $pull_requestsCaster1->cast($value, $this);

                $properties['pull_requests'] = $value;
    
                after_pull_requests:

                $value = $payload['deployment'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'deployment';
                    goto after_deployment;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'deployment';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️DeploymentSimple($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['deployment'] = $value;
    
                after_deployment:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\CheckRun', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\CheckRun::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\CheckRun(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\CheckRun', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CheckRun⚡️Output(array $payload): \ApiClients\Client\GitHubAE\Schema\CheckRun\Output
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['title'] ?? null;
    
                if ($value === null) {
                    $properties['title'] = null;
                    goto after_title;
                }

                $properties['title'] = $value;
    
                after_title:

                $value = $payload['summary'] ?? null;
    
                if ($value === null) {
                    $properties['summary'] = null;
                    goto after_summary;
                }

                $properties['summary'] = $value;
    
                after_summary:

                $value = $payload['text'] ?? null;
    
                if ($value === null) {
                    $properties['text'] = null;
                    goto after_text;
                }

                $properties['text'] = $value;
    
                after_text:

                $value = $payload['annotations_count'] ?? null;
    
                if ($value === null) {
                    $properties['annotations_count'] = null;
                    goto after_annotations_count;
                }

                $properties['annotations_count'] = $value;
    
                after_annotations_count:

                $value = $payload['annotations_url'] ?? null;
    
                if ($value === null) {
                    $properties['annotations_url'] = null;
                    goto after_annotations_url;
                }

                $properties['annotations_url'] = $value;
    
                after_annotations_url:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\CheckRun\Output', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\CheckRun\Output::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\CheckRun\Output(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\CheckRun\Output', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CheckRun⚡️CheckSuite(array $payload): \ApiClients\Client\GitHubAE\Schema\CheckRun\CheckSuite
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $properties['id'] = null;
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\CheckRun\CheckSuite', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\CheckRun\CheckSuite::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\CheckRun\CheckSuite(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\CheckRun\CheckSuite', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Integration(array $payload): \ApiClients\Client\GitHubAE\Schema\Integration
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $properties['id'] = null;
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['slug'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'slug';
                    goto after_slug;
                }

                $properties['slug'] = $value;
    
                after_slug:

                $value = $payload['node_id'] ?? null;
    
                if ($value === null) {
                    $properties['node_id'] = null;
                    goto after_node_id;
                }

                $properties['node_id'] = $value;
    
                after_node_id:

                $value = $payload['owner'] ?? null;
    
                if ($value === null) {
                    $properties['owner'] = null;
                    goto after_owner;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'owner';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️SimpleUser($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['owner'] = $value;
    
                after_owner:

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $properties['name'] = null;
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['description'] ?? null;
    
                if ($value === null) {
                    $properties['description'] = null;
                    goto after_description;
                }

                $properties['description'] = $value;
    
                after_description:

                $value = $payload['external_url'] ?? null;
    
                if ($value === null) {
                    $properties['external_url'] = null;
                    goto after_external_url;
                }

                $properties['external_url'] = $value;
    
                after_external_url:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $properties['html_url'] = null;
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

                $value = $payload['created_at'] ?? null;
    
                if ($value === null) {
                    $properties['created_at'] = null;
                    goto after_created_at;
                }

                $properties['created_at'] = $value;
    
                after_created_at:

                $value = $payload['updated_at'] ?? null;
    
                if ($value === null) {
                    $properties['updated_at'] = null;
                    goto after_updated_at;
                }

                $properties['updated_at'] = $value;
    
                after_updated_at:

                $value = $payload['permissions'] ?? null;
    
                if ($value === null) {
                    $properties['permissions'] = null;
                    goto after_permissions;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'permissions';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Integration⚡️Permissions($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['permissions'] = $value;
    
                after_permissions:

                $value = $payload['events'] ?? null;
    
                if ($value === null) {
                    $properties['events'] = null;
                    goto after_events;
                }

                $properties['events'] = $value;
    
                after_events:

                $value = $payload['installations_count'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'installations_count';
                    goto after_installations_count;
                }

                $properties['installations_count'] = $value;
    
                after_installations_count:

                $value = $payload['client_id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'client_id';
                    goto after_client_id;
                }

                $properties['client_id'] = $value;
    
                after_client_id:

                $value = $payload['client_secret'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'client_secret';
                    goto after_client_secret;
                }

                $properties['client_secret'] = $value;
    
                after_client_secret:

                $value = $payload['webhook_secret'] ?? null;
    
                if ($value === null) {
                    $properties['webhook_secret'] = null;
                    goto after_webhook_secret;
                }

                $properties['webhook_secret'] = $value;
    
                after_webhook_secret:

                $value = $payload['pem'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'pem';
                    goto after_pem;
                }

                $properties['pem'] = $value;
    
                after_pem:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Integration', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\Integration::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\Integration(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Integration', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️SimpleUser(array $payload): \ApiClients\Client\GitHubAE\Schema\SimpleUser
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $properties['name'] = null;
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['email'] ?? null;
    
                if ($value === null) {
                    $properties['email'] = null;
                    goto after_email;
                }

                $properties['email'] = $value;
    
                after_email:

                $value = $payload['login'] ?? null;
    
                if ($value === null) {
                    $properties['login'] = null;
                    goto after_login;
                }

                $properties['login'] = $value;
    
                after_login:

                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $properties['id'] = null;
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['node_id'] ?? null;
    
                if ($value === null) {
                    $properties['node_id'] = null;
                    goto after_node_id;
                }

                $properties['node_id'] = $value;
    
                after_node_id:

                $value = $payload['avatar_url'] ?? null;
    
                if ($value === null) {
                    $properties['avatar_url'] = null;
                    goto after_avatar_url;
                }

                $properties['avatar_url'] = $value;
    
                after_avatar_url:

                $value = $payload['gravatar_id'] ?? null;
    
                if ($value === null) {
                    $properties['gravatar_id'] = null;
                    goto after_gravatar_id;
                }

                $properties['gravatar_id'] = $value;
    
                after_gravatar_id:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $properties['html_url'] = null;
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

                $value = $payload['followers_url'] ?? null;
    
                if ($value === null) {
                    $properties['followers_url'] = null;
                    goto after_followers_url;
                }

                $properties['followers_url'] = $value;
    
                after_followers_url:

                $value = $payload['following_url'] ?? null;
    
                if ($value === null) {
                    $properties['following_url'] = null;
                    goto after_following_url;
                }

                $properties['following_url'] = $value;
    
                after_following_url:

                $value = $payload['gists_url'] ?? null;
    
                if ($value === null) {
                    $properties['gists_url'] = null;
                    goto after_gists_url;
                }

                $properties['gists_url'] = $value;
    
                after_gists_url:

                $value = $payload['starred_url'] ?? null;
    
                if ($value === null) {
                    $properties['starred_url'] = null;
                    goto after_starred_url;
                }

                $properties['starred_url'] = $value;
    
                after_starred_url:

                $value = $payload['subscriptions_url'] ?? null;
    
                if ($value === null) {
                    $properties['subscriptions_url'] = null;
                    goto after_subscriptions_url;
                }

                $properties['subscriptions_url'] = $value;
    
                after_subscriptions_url:

                $value = $payload['organizations_url'] ?? null;
    
                if ($value === null) {
                    $properties['organizations_url'] = null;
                    goto after_organizations_url;
                }

                $properties['organizations_url'] = $value;
    
                after_organizations_url:

                $value = $payload['repos_url'] ?? null;
    
                if ($value === null) {
                    $properties['repos_url'] = null;
                    goto after_repos_url;
                }

                $properties['repos_url'] = $value;
    
                after_repos_url:

                $value = $payload['events_url'] ?? null;
    
                if ($value === null) {
                    $properties['events_url'] = null;
                    goto after_events_url;
                }

                $properties['events_url'] = $value;
    
                after_events_url:

                $value = $payload['received_events_url'] ?? null;
    
                if ($value === null) {
                    $properties['received_events_url'] = null;
                    goto after_received_events_url;
                }

                $properties['received_events_url'] = $value;
    
                after_received_events_url:

                $value = $payload['type'] ?? null;
    
                if ($value === null) {
                    $properties['type'] = null;
                    goto after_type;
                }

                $properties['type'] = $value;
    
                after_type:

                $value = $payload['site_admin'] ?? null;
    
                if ($value === null) {
                    $properties['site_admin'] = null;
                    goto after_site_admin;
                }

                $properties['site_admin'] = $value;
    
                after_site_admin:

                $value = $payload['starred_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'starred_at';
                    goto after_starred_at;
                }

                $properties['starred_at'] = $value;
    
                after_starred_at:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\SimpleUser', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\SimpleUser::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\SimpleUser(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\SimpleUser', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Integration⚡️Permissions(array $payload): \ApiClients\Client\GitHubAE\Schema\Integration\Permissions
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['issues'] ?? null;
    
                if ($value === null) {
                    $properties['issues'] = null;
                    goto after_issues;
                }

                $properties['issues'] = $value;
    
                after_issues:

                $value = $payload['checks'] ?? null;
    
                if ($value === null) {
                    $properties['checks'] = null;
                    goto after_checks;
                }

                $properties['checks'] = $value;
    
                after_checks:

                $value = $payload['metadata'] ?? null;
    
                if ($value === null) {
                    $properties['metadata'] = null;
                    goto after_metadata;
                }

                $properties['metadata'] = $value;
    
                after_metadata:

                $value = $payload['contents'] ?? null;
    
                if ($value === null) {
                    $properties['contents'] = null;
                    goto after_contents;
                }

                $properties['contents'] = $value;
    
                after_contents:

                $value = $payload['deployments'] ?? null;
    
                if ($value === null) {
                    $properties['deployments'] = null;
                    goto after_deployments;
                }

                $properties['deployments'] = $value;
    
                after_deployments:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Integration\Permissions', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\Integration\Permissions::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\Integration\Permissions(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Integration\Permissions', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestMinimal(array $payload): \ApiClients\Client\GitHubAE\Schema\PullRequestMinimal
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $properties['id'] = null;
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['number'] ?? null;
    
                if ($value === null) {
                    $properties['number'] = null;
                    goto after_number;
                }

                $properties['number'] = $value;
    
                after_number:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['head'] ?? null;
    
                if ($value === null) {
                    $properties['head'] = null;
                    goto after_head;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'head';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestMinimal⚡️Head($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['head'] = $value;
    
                after_head:

                $value = $payload['base'] ?? null;
    
                if ($value === null) {
                    $properties['base'] = null;
                    goto after_base;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'base';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestMinimal⚡️Head($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['base'] = $value;
    
                after_base:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\PullRequestMinimal', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\PullRequestMinimal::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\PullRequestMinimal(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\PullRequestMinimal', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestMinimal⚡️Head(array $payload): \ApiClients\Client\GitHubAE\Schema\PullRequestMinimal\Head
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['ref'] ?? null;
    
                if ($value === null) {
                    $properties['ref'] = null;
                    goto after_ref;
                }

                $properties['ref'] = $value;
    
                after_ref:

                $value = $payload['sha'] ?? null;
    
                if ($value === null) {
                    $properties['sha'] = null;
                    goto after_sha;
                }

                $properties['sha'] = $value;
    
                after_sha:

                $value = $payload['repo'] ?? null;
    
                if ($value === null) {
                    $properties['repo'] = null;
                    goto after_repo;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'repo';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestMinimal⚡️Head⚡️Repo($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['repo'] = $value;
    
                after_repo:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\PullRequestMinimal\Head', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\PullRequestMinimal\Head::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\PullRequestMinimal\Head(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\PullRequestMinimal\Head', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestMinimal⚡️Head⚡️Repo(array $payload): \ApiClients\Client\GitHubAE\Schema\PullRequestMinimal\Head\Repo
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $properties['id'] = null;
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $properties['name'] = null;
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\PullRequestMinimal\Head\Repo', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\PullRequestMinimal\Head\Repo::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\PullRequestMinimal\Head\Repo(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\PullRequestMinimal\Head\Repo', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️DeploymentSimple(array $payload): \ApiClients\Client\GitHubAE\Schema\DeploymentSimple
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $properties['id'] = null;
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['node_id'] ?? null;
    
                if ($value === null) {
                    $properties['node_id'] = null;
                    goto after_node_id;
                }

                $properties['node_id'] = $value;
    
                after_node_id:

                $value = $payload['task'] ?? null;
    
                if ($value === null) {
                    $properties['task'] = null;
                    goto after_task;
                }

                $properties['task'] = $value;
    
                after_task:

                $value = $payload['original_environment'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'original_environment';
                    goto after_original_environment;
                }

                $properties['original_environment'] = $value;
    
                after_original_environment:

                $value = $payload['environment'] ?? null;
    
                if ($value === null) {
                    $properties['environment'] = null;
                    goto after_environment;
                }

                $properties['environment'] = $value;
    
                after_environment:

                $value = $payload['description'] ?? null;
    
                if ($value === null) {
                    $properties['description'] = null;
                    goto after_description;
                }

                $properties['description'] = $value;
    
                after_description:

                $value = $payload['created_at'] ?? null;
    
                if ($value === null) {
                    $properties['created_at'] = null;
                    goto after_created_at;
                }

                $properties['created_at'] = $value;
    
                after_created_at:

                $value = $payload['updated_at'] ?? null;
    
                if ($value === null) {
                    $properties['updated_at'] = null;
                    goto after_updated_at;
                }

                $properties['updated_at'] = $value;
    
                after_updated_at:

                $value = $payload['statuses_url'] ?? null;
    
                if ($value === null) {
                    $properties['statuses_url'] = null;
                    goto after_statuses_url;
                }

                $properties['statuses_url'] = $value;
    
                after_statuses_url:

                $value = $payload['repository_url'] ?? null;
    
                if ($value === null) {
                    $properties['repository_url'] = null;
                    goto after_repository_url;
                }

                $properties['repository_url'] = $value;
    
                after_repository_url:

                $value = $payload['transient_environment'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'transient_environment';
                    goto after_transient_environment;
                }

                $properties['transient_environment'] = $value;
    
                after_transient_environment:

                $value = $payload['production_environment'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'production_environment';
                    goto after_production_environment;
                }

                $properties['production_environment'] = $value;
    
                after_production_environment:

                $value = $payload['performed_via_github_app'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'performed_via_github_app';
                    goto after_performed_via_github_app;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'performed_via_github_app';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Integration($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['performed_via_github_app'] = $value;
    
                after_performed_via_github_app:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\DeploymentSimple', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\DeploymentSimple::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\DeploymentSimple(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\DeploymentSimple', $exception, stack: $this->hydrationStack);
            }
        }
    
    public function serializeObject(object $object): mixed
    {
        try {
            $className = get_class($object);

            return match($className) {
                'array' => $this->serializeValuearray($object),
                'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
                'DateTime' => $this->serializeValueDateTime($object),
                'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
                'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
                'ApiClients\Client\GitHubAE\Schema\Operation\Checks\ListForSuite\Response\Applicationjson\H200' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Operation⚡️Checks⚡️ListForSuite⚡️Response⚡️Applicationjson⚡️H200($object),
                'ApiClients\Client\GitHubAE\Schema\CheckRun' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CheckRun($object),
                'ApiClients\Client\GitHubAE\Schema\CheckRun\Output' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CheckRun⚡️Output($object),
                'ApiClients\Client\GitHubAE\Schema\CheckRun\CheckSuite' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CheckRun⚡️CheckSuite($object),
                'ApiClients\Client\GitHubAE\Schema\Integration' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Integration($object),
                'ApiClients\Client\GitHubAE\Schema\SimpleUser' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️SimpleUser($object),
                'ApiClients\Client\GitHubAE\Schema\Integration\Permissions' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Integration⚡️Permissions($object),
                'ApiClients\Client\GitHubAE\Schema\PullRequestMinimal' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestMinimal($object),
                'ApiClients\Client\GitHubAE\Schema\PullRequestMinimal\Head' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestMinimal⚡️Head($object),
                'ApiClients\Client\GitHubAE\Schema\PullRequestMinimal\Head\Repo' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestMinimal⚡️Head⚡️Repo($object),
                'ApiClients\Client\GitHubAE\Schema\DeploymentSimple' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️DeploymentSimple($object),
                default => throw new \LogicException('No serialization defined for $className'),
            };
        } catch (\Throwable $exception) {
            throw UnableToSerializeObject::dueToError($className, $exception);
        }
    }
    
    
    private function serializeValuearray(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueRamsey⚡️Uuid⚡️UuidInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeUuidToString(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTime(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeImmutable(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Operation⚡️Checks⚡️ListForSuite⚡️Response⚡️Applicationjson⚡️H200(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\Operation\Checks\ListForSuite\Response\Applicationjson\H200);
        $result = [];
        
        $total_count = $object->total_count;

        if ($total_count === null) {
            goto after_total_count;
        }
        after_total_count:        $result['total_count'] = $total_count;

        
        $check_runs = $object->check_runs;

        if ($check_runs === null) {
            goto after_check_runs;
        }
        static $check_runsSerializer0;

        if ($check_runsSerializer0 === null) {
            $check_runsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubAE\\Schema\\CheckRun',
));
        }
        
        $check_runs = $check_runsSerializer0->serialize($check_runs, $this);
        after_check_runs:        $result['check_runs'] = $check_runs;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CheckRun(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\CheckRun);
        $result = [];
        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $head_sha = $object->head_sha;

        if ($head_sha === null) {
            goto after_head_sha;
        }
        after_head_sha:        $result['head_sha'] = $head_sha;

        
        $node_id = $object->node_id;

        if ($node_id === null) {
            goto after_node_id;
        }
        after_node_id:        $result['node_id'] = $node_id;

        
        $external_id = $object->external_id;

        if ($external_id === null) {
            goto after_external_id;
        }
        after_external_id:        $result['external_id'] = $external_id;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;

        
        $details_url = $object->details_url;

        if ($details_url === null) {
            goto after_details_url;
        }
        after_details_url:        $result['details_url'] = $details_url;

        
        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }
        after_status:        $result['status'] = $status;

        
        $conclusion = $object->conclusion;

        if ($conclusion === null) {
            goto after_conclusion;
        }
        after_conclusion:        $result['conclusion'] = $conclusion;

        
        $started_at = $object->started_at;

        if ($started_at === null) {
            goto after_started_at;
        }
        after_started_at:        $result['started_at'] = $started_at;

        
        $completed_at = $object->completed_at;

        if ($completed_at === null) {
            goto after_completed_at;
        }
        after_completed_at:        $result['completed_at'] = $completed_at;

        
        $output = $object->output;

        if ($output === null) {
            goto after_output;
        }
        $output = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CheckRun⚡️Output($output);
        after_output:        $result['output'] = $output;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $check_suite = $object->check_suite;

        if ($check_suite === null) {
            goto after_check_suite;
        }
        $check_suite = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CheckRun⚡️CheckSuite($check_suite);
        after_check_suite:        $result['check_suite'] = $check_suite;

        
        $app = $object->app;

        if ($app === null) {
            goto after_app;
        }
        $app = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Integration($app);
        after_app:        $result['app'] = $app;

        
        $pull_requests = $object->pull_requests;

        if ($pull_requests === null) {
            goto after_pull_requests;
        }
        static $pull_requestsSerializer0;

        if ($pull_requestsSerializer0 === null) {
            $pull_requestsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestMinimal',
));
        }
        
        $pull_requests = $pull_requestsSerializer0->serialize($pull_requests, $this);
        after_pull_requests:        $result['pull_requests'] = $pull_requests;

        
        $deployment = $object->deployment;
        $deployment = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️DeploymentSimple($deployment);
        after_deployment:        $result['deployment'] = $deployment;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CheckRun⚡️Output(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\CheckRun\Output);
        $result = [];
        
        $title = $object->title;

        if ($title === null) {
            goto after_title;
        }
        after_title:        $result['title'] = $title;

        
        $summary = $object->summary;

        if ($summary === null) {
            goto after_summary;
        }
        after_summary:        $result['summary'] = $summary;

        
        $text = $object->text;

        if ($text === null) {
            goto after_text;
        }
        after_text:        $result['text'] = $text;

        
        $annotations_count = $object->annotations_count;

        if ($annotations_count === null) {
            goto after_annotations_count;
        }
        after_annotations_count:        $result['annotations_count'] = $annotations_count;

        
        $annotations_url = $object->annotations_url;

        if ($annotations_url === null) {
            goto after_annotations_url;
        }
        after_annotations_url:        $result['annotations_url'] = $annotations_url;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CheckRun⚡️CheckSuite(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\CheckRun\CheckSuite);
        $result = [];
        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Integration(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\Integration);
        $result = [];
        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $slug = $object->slug;
        after_slug:        $result['slug'] = $slug;

        
        $node_id = $object->node_id;

        if ($node_id === null) {
            goto after_node_id;
        }
        after_node_id:        $result['node_id'] = $node_id;

        
        $owner = $object->owner;

        if ($owner === null) {
            goto after_owner;
        }
        $owner = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️SimpleUser($owner);
        after_owner:        $result['owner'] = $owner;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $external_url = $object->external_url;

        if ($external_url === null) {
            goto after_external_url;
        }
        after_external_url:        $result['external_url'] = $external_url;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;

        
        $created_at = $object->created_at;

        if ($created_at === null) {
            goto after_created_at;
        }
        after_created_at:        $result['created_at'] = $created_at;

        
        $updated_at = $object->updated_at;

        if ($updated_at === null) {
            goto after_updated_at;
        }
        after_updated_at:        $result['updated_at'] = $updated_at;

        
        $permissions = $object->permissions;

        if ($permissions === null) {
            goto after_permissions;
        }
        $permissions = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Integration⚡️Permissions($permissions);
        after_permissions:        $result['permissions'] = $permissions;

        
        $events = $object->events;

        if ($events === null) {
            goto after_events;
        }
        static $eventsSerializer0;

        if ($eventsSerializer0 === null) {
            $eventsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $events = $eventsSerializer0->serialize($events, $this);
        after_events:        $result['events'] = $events;

        
        $installations_count = $object->installations_count;
        after_installations_count:        $result['installations_count'] = $installations_count;

        
        $client_id = $object->client_id;
        after_client_id:        $result['client_id'] = $client_id;

        
        $client_secret = $object->client_secret;
        after_client_secret:        $result['client_secret'] = $client_secret;

        
        $webhook_secret = $object->webhook_secret;

        if ($webhook_secret === null) {
            goto after_webhook_secret;
        }
        after_webhook_secret:        $result['webhook_secret'] = $webhook_secret;

        
        $pem = $object->pem;
        after_pem:        $result['pem'] = $pem;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️SimpleUser(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\SimpleUser);
        $result = [];
        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $email = $object->email;

        if ($email === null) {
            goto after_email;
        }
        after_email:        $result['email'] = $email;

        
        $login = $object->login;

        if ($login === null) {
            goto after_login;
        }
        after_login:        $result['login'] = $login;

        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $node_id = $object->node_id;

        if ($node_id === null) {
            goto after_node_id;
        }
        after_node_id:        $result['node_id'] = $node_id;

        
        $avatar_url = $object->avatar_url;

        if ($avatar_url === null) {
            goto after_avatar_url;
        }
        after_avatar_url:        $result['avatar_url'] = $avatar_url;

        
        $gravatar_id = $object->gravatar_id;

        if ($gravatar_id === null) {
            goto after_gravatar_id;
        }
        after_gravatar_id:        $result['gravatar_id'] = $gravatar_id;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;

        
        $followers_url = $object->followers_url;

        if ($followers_url === null) {
            goto after_followers_url;
        }
        after_followers_url:        $result['followers_url'] = $followers_url;

        
        $following_url = $object->following_url;

        if ($following_url === null) {
            goto after_following_url;
        }
        after_following_url:        $result['following_url'] = $following_url;

        
        $gists_url = $object->gists_url;

        if ($gists_url === null) {
            goto after_gists_url;
        }
        after_gists_url:        $result['gists_url'] = $gists_url;

        
        $starred_url = $object->starred_url;

        if ($starred_url === null) {
            goto after_starred_url;
        }
        after_starred_url:        $result['starred_url'] = $starred_url;

        
        $subscriptions_url = $object->subscriptions_url;

        if ($subscriptions_url === null) {
            goto after_subscriptions_url;
        }
        after_subscriptions_url:        $result['subscriptions_url'] = $subscriptions_url;

        
        $organizations_url = $object->organizations_url;

        if ($organizations_url === null) {
            goto after_organizations_url;
        }
        after_organizations_url:        $result['organizations_url'] = $organizations_url;

        
        $repos_url = $object->repos_url;

        if ($repos_url === null) {
            goto after_repos_url;
        }
        after_repos_url:        $result['repos_url'] = $repos_url;

        
        $events_url = $object->events_url;

        if ($events_url === null) {
            goto after_events_url;
        }
        after_events_url:        $result['events_url'] = $events_url;

        
        $received_events_url = $object->received_events_url;

        if ($received_events_url === null) {
            goto after_received_events_url;
        }
        after_received_events_url:        $result['received_events_url'] = $received_events_url;

        
        $type = $object->type;

        if ($type === null) {
            goto after_type;
        }
        after_type:        $result['type'] = $type;

        
        $site_admin = $object->site_admin;

        if ($site_admin === null) {
            goto after_site_admin;
        }
        after_site_admin:        $result['site_admin'] = $site_admin;

        
        $starred_at = $object->starred_at;
        after_starred_at:        $result['starred_at'] = $starred_at;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Integration⚡️Permissions(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\Integration\Permissions);
        $result = [];
        
        $issues = $object->issues;

        if ($issues === null) {
            goto after_issues;
        }
        after_issues:        $result['issues'] = $issues;

        
        $checks = $object->checks;

        if ($checks === null) {
            goto after_checks;
        }
        after_checks:        $result['checks'] = $checks;

        
        $metadata = $object->metadata;

        if ($metadata === null) {
            goto after_metadata;
        }
        after_metadata:        $result['metadata'] = $metadata;

        
        $contents = $object->contents;

        if ($contents === null) {
            goto after_contents;
        }
        after_contents:        $result['contents'] = $contents;

        
        $deployments = $object->deployments;

        if ($deployments === null) {
            goto after_deployments;
        }
        after_deployments:        $result['deployments'] = $deployments;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestMinimal(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\PullRequestMinimal);
        $result = [];
        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $number = $object->number;

        if ($number === null) {
            goto after_number;
        }
        after_number:        $result['number'] = $number;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $head = $object->head;

        if ($head === null) {
            goto after_head;
        }
        $head = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestMinimal⚡️Head($head);
        after_head:        $result['head'] = $head;

        
        $base = $object->base;

        if ($base === null) {
            goto after_base;
        }
        $base = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestMinimal⚡️Head($base);
        after_base:        $result['base'] = $base;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestMinimal⚡️Head(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\PullRequestMinimal\Head);
        $result = [];
        
        $ref = $object->ref;

        if ($ref === null) {
            goto after_ref;
        }
        after_ref:        $result['ref'] = $ref;

        
        $sha = $object->sha;

        if ($sha === null) {
            goto after_sha;
        }
        after_sha:        $result['sha'] = $sha;

        
        $repo = $object->repo;

        if ($repo === null) {
            goto after_repo;
        }
        $repo = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestMinimal⚡️Head⚡️Repo($repo);
        after_repo:        $result['repo'] = $repo;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestMinimal⚡️Head⚡️Repo(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\PullRequestMinimal\Head\Repo);
        $result = [];
        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️DeploymentSimple(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\DeploymentSimple);
        $result = [];
        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $node_id = $object->node_id;

        if ($node_id === null) {
            goto after_node_id;
        }
        after_node_id:        $result['node_id'] = $node_id;

        
        $task = $object->task;

        if ($task === null) {
            goto after_task;
        }
        after_task:        $result['task'] = $task;

        
        $original_environment = $object->original_environment;
        after_original_environment:        $result['original_environment'] = $original_environment;

        
        $environment = $object->environment;

        if ($environment === null) {
            goto after_environment;
        }
        after_environment:        $result['environment'] = $environment;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $created_at = $object->created_at;

        if ($created_at === null) {
            goto after_created_at;
        }
        after_created_at:        $result['created_at'] = $created_at;

        
        $updated_at = $object->updated_at;

        if ($updated_at === null) {
            goto after_updated_at;
        }
        after_updated_at:        $result['updated_at'] = $updated_at;

        
        $statuses_url = $object->statuses_url;

        if ($statuses_url === null) {
            goto after_statuses_url;
        }
        after_statuses_url:        $result['statuses_url'] = $statuses_url;

        
        $repository_url = $object->repository_url;

        if ($repository_url === null) {
            goto after_repository_url;
        }
        after_repository_url:        $result['repository_url'] = $repository_url;

        
        $transient_environment = $object->transient_environment;
        after_transient_environment:        $result['transient_environment'] = $transient_environment;

        
        $production_environment = $object->production_environment;
        after_production_environment:        $result['production_environment'] = $production_environment;

        
        $performed_via_github_app = $object->performed_via_github_app;
        $performed_via_github_app = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Integration($performed_via_github_app);
        after_performed_via_github_app:        $result['performed_via_github_app'] = $performed_via_github_app;


        return $result;
    }
    
    

    /**
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToHydrateObject
     */
    public function hydrateObjects(string $className, iterable $payloads): IterableList
    {
        return new IterableList($this->doHydrateObjects($className, $payloads));
    }

    private function doHydrateObjects(string $className, iterable $payloads): Generator
    {
        foreach ($payloads as $index => $payload) {
            yield $index => $this->hydrateObject($className, $payload);
        }
    }

    /**
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToSerializeObject
     */
    public function serializeObjects(iterable $payloads): IterableList
    {
        return new IterableList($this->doSerializeObjects($payloads));
    }

    private function doSerializeObjects(iterable $objects): Generator
    {
        foreach ($objects as $index => $object) {
            yield $index => $this->serializeObject($object);
        }
    }
}
