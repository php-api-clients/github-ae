<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Alerts;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class CbAlertNumberRcb implements ObjectMapper
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
            'ApiClients\Client\GitHubAE\Schema\CodeScanningAlert' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlert($payload),
                'ApiClients\Client\GitHubAE\Schema\CodeScanningAlertRule' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertRule($payload),
                'ApiClients\Client\GitHubAE\Schema\CodeScanningAnalysisTool' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAnalysisTool($payload),
                'ApiClients\Client\GitHubAE\Schema\CodeScanningAlertInstance' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertInstance($payload),
                'ApiClients\Client\GitHubAE\Schema\CodeScanningAlertInstance\Message' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertInstance⚡️Message($payload),
                'ApiClients\Client\GitHubAE\Schema\CodeScanningAlertLocation' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertLocation($payload),
                'ApiClients\Client\GitHubAE\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\GitHubAE\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Operation⚡️SecretScanning⚡️ListAlertsForEnterprise⚡️Response⚡️Applicationjson⚡️H503($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlert(array $payload): \ApiClients\Client\GitHubAE\Schema\CodeScanningAlert
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['number'] ?? null;
    
                if ($value === null) {
                    $properties['number'] = null;
                    goto after_number;
                }

                $properties['number'] = $value;
    
                after_number:

                $value = $payload['created_at'] ?? null;
    
                if ($value === null) {
                    $properties['created_at'] = null;
                    goto after_created_at;
                }

                $properties['created_at'] = $value;
    
                after_created_at:

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

                $value = $payload['instances_url'] ?? null;
    
                if ($value === null) {
                    $properties['instances_url'] = null;
                    goto after_instances_url;
                }

                $properties['instances_url'] = $value;
    
                after_instances_url:

                $value = $payload['state'] ?? null;
    
                if ($value === null) {
                    $properties['state'] = null;
                    goto after_state;
                }

                $properties['state'] = $value;
    
                after_state:

                $value = $payload['dismissed_by'] ?? null;
    
                if ($value === null) {
                    $properties['dismissed_by'] = null;
                    goto after_dismissed_by;
                }

                $properties['dismissed_by'] = $value;
    
                after_dismissed_by:

                $value = $payload['dismissed_at'] ?? null;
    
                if ($value === null) {
                    $properties['dismissed_at'] = null;
                    goto after_dismissed_at;
                }

                $properties['dismissed_at'] = $value;
    
                after_dismissed_at:

                $value = $payload['dismissed_reason'] ?? null;
    
                if ($value === null) {
                    $properties['dismissed_reason'] = null;
                    goto after_dismissed_reason;
                }

                $properties['dismissed_reason'] = $value;
    
                after_dismissed_reason:

                $value = $payload['rule'] ?? null;
    
                if ($value === null) {
                    $properties['rule'] = null;
                    goto after_rule;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'rule';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertRule($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['rule'] = $value;
    
                after_rule:

                $value = $payload['tool'] ?? null;
    
                if ($value === null) {
                    $properties['tool'] = null;
                    goto after_tool;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'tool';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAnalysisTool($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['tool'] = $value;
    
                after_tool:

                $value = $payload['most_recent_instance'] ?? null;
    
                if ($value === null) {
                    $properties['most_recent_instance'] = null;
                    goto after_most_recent_instance;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'most_recent_instance';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertInstance($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['most_recent_instance'] = $value;
    
                after_most_recent_instance:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\CodeScanningAlert', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\CodeScanningAlert::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\CodeScanningAlert(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\CodeScanningAlert', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertRule(array $payload): \ApiClients\Client\GitHubAE\Schema\CodeScanningAlertRule
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

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $properties['name'] = null;
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['severity'] ?? null;
    
                if ($value === null) {
                    $properties['severity'] = null;
                    goto after_severity;
                }

                $properties['severity'] = $value;
    
                after_severity:

                $value = $payload['security_severity_level'] ?? null;
    
                if ($value === null) {
                    $properties['security_severity_level'] = null;
                    goto after_security_severity_level;
                }

                $properties['security_severity_level'] = $value;
    
                after_security_severity_level:

                $value = $payload['description'] ?? null;
    
                if ($value === null) {
                    $properties['description'] = null;
                    goto after_description;
                }

                $properties['description'] = $value;
    
                after_description:

                $value = $payload['full_description'] ?? null;
    
                if ($value === null) {
                    $properties['full_description'] = null;
                    goto after_full_description;
                }

                $properties['full_description'] = $value;
    
                after_full_description:

                $value = $payload['tags'] ?? null;
    
                if ($value === null) {
                    $properties['tags'] = null;
                    goto after_tags;
                }

                $properties['tags'] = $value;
    
                after_tags:

                $value = $payload['help'] ?? null;
    
                if ($value === null) {
                    $properties['help'] = null;
                    goto after_help;
                }

                $properties['help'] = $value;
    
                after_help:

                $value = $payload['help_uri'] ?? null;
    
                if ($value === null) {
                    $properties['help_uri'] = null;
                    goto after_help_uri;
                }

                $properties['help_uri'] = $value;
    
                after_help_uri:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\CodeScanningAlertRule', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\CodeScanningAlertRule::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\CodeScanningAlertRule(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\CodeScanningAlertRule', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAnalysisTool(array $payload): \ApiClients\Client\GitHubAE\Schema\CodeScanningAnalysisTool
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

                $value = $payload['version'] ?? null;
    
                if ($value === null) {
                    $properties['version'] = null;
                    goto after_version;
                }

                $properties['version'] = $value;
    
                after_version:

                $value = $payload['guid'] ?? null;
    
                if ($value === null) {
                    $properties['guid'] = null;
                    goto after_guid;
                }

                $properties['guid'] = $value;
    
                after_guid:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\CodeScanningAnalysisTool', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\CodeScanningAnalysisTool::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\CodeScanningAnalysisTool(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\CodeScanningAnalysisTool', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertInstance(array $payload): \ApiClients\Client\GitHubAE\Schema\CodeScanningAlertInstance
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

                $value = $payload['analysis_key'] ?? null;
    
                if ($value === null) {
                    $properties['analysis_key'] = null;
                    goto after_analysis_key;
                }

                $properties['analysis_key'] = $value;
    
                after_analysis_key:

                $value = $payload['environment'] ?? null;
    
                if ($value === null) {
                    $properties['environment'] = null;
                    goto after_environment;
                }

                $properties['environment'] = $value;
    
                after_environment:

                $value = $payload['category'] ?? null;
    
                if ($value === null) {
                    $properties['category'] = null;
                    goto after_category;
                }

                $properties['category'] = $value;
    
                after_category:

                $value = $payload['state'] ?? null;
    
                if ($value === null) {
                    $properties['state'] = null;
                    goto after_state;
                }

                $properties['state'] = $value;
    
                after_state:

                $value = $payload['commit_sha'] ?? null;
    
                if ($value === null) {
                    $properties['commit_sha'] = null;
                    goto after_commit_sha;
                }

                $properties['commit_sha'] = $value;
    
                after_commit_sha:

                $value = $payload['message'] ?? null;
    
                if ($value === null) {
                    $properties['message'] = null;
                    goto after_message;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'message';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertInstance⚡️Message($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['message'] = $value;
    
                after_message:

                $value = $payload['location'] ?? null;
    
                if ($value === null) {
                    $properties['location'] = null;
                    goto after_location;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'location';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertLocation($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['location'] = $value;
    
                after_location:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $properties['html_url'] = null;
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

                $value = $payload['classifications'] ?? null;
    
                if ($value === null) {
                    $properties['classifications'] = null;
                    goto after_classifications;
                }

                $properties['classifications'] = $value;
    
                after_classifications:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\CodeScanningAlertInstance', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\CodeScanningAlertInstance::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\CodeScanningAlertInstance(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\CodeScanningAlertInstance', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertInstance⚡️Message(array $payload): \ApiClients\Client\GitHubAE\Schema\CodeScanningAlertInstance\Message
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['text'] ?? null;
    
                if ($value === null) {
                    $properties['text'] = null;
                    goto after_text;
                }

                $properties['text'] = $value;
    
                after_text:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\CodeScanningAlertInstance\Message', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\CodeScanningAlertInstance\Message::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\CodeScanningAlertInstance\Message(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\CodeScanningAlertInstance\Message', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertLocation(array $payload): \ApiClients\Client\GitHubAE\Schema\CodeScanningAlertLocation
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['path'] ?? null;
    
                if ($value === null) {
                    $properties['path'] = null;
                    goto after_path;
                }

                $properties['path'] = $value;
    
                after_path:

                $value = $payload['start_line'] ?? null;
    
                if ($value === null) {
                    $properties['start_line'] = null;
                    goto after_start_line;
                }

                $properties['start_line'] = $value;
    
                after_start_line:

                $value = $payload['end_line'] ?? null;
    
                if ($value === null) {
                    $properties['end_line'] = null;
                    goto after_end_line;
                }

                $properties['end_line'] = $value;
    
                after_end_line:

                $value = $payload['start_column'] ?? null;
    
                if ($value === null) {
                    $properties['start_column'] = null;
                    goto after_start_column;
                }

                $properties['start_column'] = $value;
    
                after_start_column:

                $value = $payload['end_column'] ?? null;
    
                if ($value === null) {
                    $properties['end_column'] = null;
                    goto after_end_column;
                }

                $properties['end_column'] = $value;
    
                after_end_column:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\CodeScanningAlertLocation', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\CodeScanningAlertLocation::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\CodeScanningAlertLocation(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\CodeScanningAlertLocation', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BasicError(array $payload): \ApiClients\Client\GitHubAE\Schema\BasicError
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['message'] ?? null;
    
                if ($value === null) {
                    $properties['message'] = null;
                    goto after_message;
                }

                $properties['message'] = $value;
    
                after_message:

                $value = $payload['documentation_url'] ?? null;
    
                if ($value === null) {
                    $properties['documentation_url'] = null;
                    goto after_documentation_url;
                }

                $properties['documentation_url'] = $value;
    
                after_documentation_url:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['status'] ?? null;
    
                if ($value === null) {
                    $properties['status'] = null;
                    goto after_status;
                }

                $properties['status'] = $value;
    
                after_status:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\BasicError', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\BasicError::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\BasicError(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\BasicError', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Operation⚡️SecretScanning⚡️ListAlertsForEnterprise⚡️Response⚡️Applicationjson⚡️H503(array $payload): \ApiClients\Client\GitHubAE\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['code'] ?? null;
    
                if ($value === null) {
                    $properties['code'] = null;
                    goto after_code;
                }

                $properties['code'] = $value;
    
                after_code:

                $value = $payload['message'] ?? null;
    
                if ($value === null) {
                    $properties['message'] = null;
                    goto after_message;
                }

                $properties['message'] = $value;
    
                after_message:

                $value = $payload['documentation_url'] ?? null;
    
                if ($value === null) {
                    $properties['documentation_url'] = null;
                    goto after_documentation_url;
                }

                $properties['documentation_url'] = $value;
    
                after_documentation_url:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubAE\Schema\CodeScanningAlert' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlert($object),
                'ApiClients\Client\GitHubAE\Schema\CodeScanningAlertRule' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertRule($object),
                'ApiClients\Client\GitHubAE\Schema\CodeScanningAnalysisTool' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAnalysisTool($object),
                'ApiClients\Client\GitHubAE\Schema\CodeScanningAlertInstance' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertInstance($object),
                'ApiClients\Client\GitHubAE\Schema\CodeScanningAlertInstance\Message' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertInstance⚡️Message($object),
                'ApiClients\Client\GitHubAE\Schema\CodeScanningAlertLocation' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertLocation($object),
                'ApiClients\Client\GitHubAE\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BasicError($object),
                'ApiClients\Client\GitHubAE\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Operation⚡️SecretScanning⚡️ListAlertsForEnterprise⚡️Response⚡️Applicationjson⚡️H503($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlert(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\CodeScanningAlert);
        $result = [];
        
        $number = $object->number;

        if ($number === null) {
            goto after_number;
        }
        after_number:        $result['number'] = $number;

        
        $created_at = $object->created_at;

        if ($created_at === null) {
            goto after_created_at;
        }
        after_created_at:        $result['created_at'] = $created_at;

        
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

        
        $instances_url = $object->instances_url;

        if ($instances_url === null) {
            goto after_instances_url;
        }
        after_instances_url:        $result['instances_url'] = $instances_url;

        
        $state = $object->state;

        if ($state === null) {
            goto after_state;
        }
        after_state:        $result['state'] = $state;

        
        $dismissed_by = $object->dismissed_by;

        if ($dismissed_by === null) {
            goto after_dismissed_by;
        }
        after_dismissed_by:        $result['dismissed_by'] = $dismissed_by;

        
        $dismissed_at = $object->dismissed_at;

        if ($dismissed_at === null) {
            goto after_dismissed_at;
        }
        after_dismissed_at:        $result['dismissed_at'] = $dismissed_at;

        
        $dismissed_reason = $object->dismissed_reason;

        if ($dismissed_reason === null) {
            goto after_dismissed_reason;
        }
        after_dismissed_reason:        $result['dismissed_reason'] = $dismissed_reason;

        
        $rule = $object->rule;

        if ($rule === null) {
            goto after_rule;
        }
        $rule = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertRule($rule);
        after_rule:        $result['rule'] = $rule;

        
        $tool = $object->tool;

        if ($tool === null) {
            goto after_tool;
        }
        $tool = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAnalysisTool($tool);
        after_tool:        $result['tool'] = $tool;

        
        $most_recent_instance = $object->most_recent_instance;

        if ($most_recent_instance === null) {
            goto after_most_recent_instance;
        }
        $most_recent_instance = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertInstance($most_recent_instance);
        after_most_recent_instance:        $result['most_recent_instance'] = $most_recent_instance;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertRule(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\CodeScanningAlertRule);
        $result = [];
        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $severity = $object->severity;

        if ($severity === null) {
            goto after_severity;
        }
        after_severity:        $result['severity'] = $severity;

        
        $security_severity_level = $object->security_severity_level;

        if ($security_severity_level === null) {
            goto after_security_severity_level;
        }
        after_security_severity_level:        $result['security_severity_level'] = $security_severity_level;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $full_description = $object->full_description;

        if ($full_description === null) {
            goto after_full_description;
        }
        after_full_description:        $result['full_description'] = $full_description;

        
        $tags = $object->tags;

        if ($tags === null) {
            goto after_tags;
        }
        static $tagsSerializer0;

        if ($tagsSerializer0 === null) {
            $tagsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $tags = $tagsSerializer0->serialize($tags, $this);
        after_tags:        $result['tags'] = $tags;

        
        $help = $object->help;

        if ($help === null) {
            goto after_help;
        }
        after_help:        $result['help'] = $help;

        
        $help_uri = $object->help_uri;

        if ($help_uri === null) {
            goto after_help_uri;
        }
        after_help_uri:        $result['help_uri'] = $help_uri;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAnalysisTool(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\CodeScanningAnalysisTool);
        $result = [];
        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $version = $object->version;

        if ($version === null) {
            goto after_version;
        }
        after_version:        $result['version'] = $version;

        
        $guid = $object->guid;

        if ($guid === null) {
            goto after_guid;
        }
        after_guid:        $result['guid'] = $guid;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertInstance(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\CodeScanningAlertInstance);
        $result = [];
        
        $ref = $object->ref;

        if ($ref === null) {
            goto after_ref;
        }
        after_ref:        $result['ref'] = $ref;

        
        $analysis_key = $object->analysis_key;

        if ($analysis_key === null) {
            goto after_analysis_key;
        }
        after_analysis_key:        $result['analysis_key'] = $analysis_key;

        
        $environment = $object->environment;

        if ($environment === null) {
            goto after_environment;
        }
        after_environment:        $result['environment'] = $environment;

        
        $category = $object->category;

        if ($category === null) {
            goto after_category;
        }
        after_category:        $result['category'] = $category;

        
        $state = $object->state;

        if ($state === null) {
            goto after_state;
        }
        after_state:        $result['state'] = $state;

        
        $commit_sha = $object->commit_sha;

        if ($commit_sha === null) {
            goto after_commit_sha;
        }
        after_commit_sha:        $result['commit_sha'] = $commit_sha;

        
        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        $message = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertInstance⚡️Message($message);
        after_message:        $result['message'] = $message;

        
        $location = $object->location;

        if ($location === null) {
            goto after_location;
        }
        $location = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertLocation($location);
        after_location:        $result['location'] = $location;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;

        
        $classifications = $object->classifications;

        if ($classifications === null) {
            goto after_classifications;
        }
        static $classificationsSerializer0;

        if ($classificationsSerializer0 === null) {
            $classificationsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $classifications = $classificationsSerializer0->serialize($classifications, $this);
        after_classifications:        $result['classifications'] = $classifications;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertInstance⚡️Message(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\CodeScanningAlertInstance\Message);
        $result = [];
        
        $text = $object->text;

        if ($text === null) {
            goto after_text;
        }
        after_text:        $result['text'] = $text;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertLocation(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\CodeScanningAlertLocation);
        $result = [];
        
        $path = $object->path;

        if ($path === null) {
            goto after_path;
        }
        after_path:        $result['path'] = $path;

        
        $start_line = $object->start_line;

        if ($start_line === null) {
            goto after_start_line;
        }
        after_start_line:        $result['start_line'] = $start_line;

        
        $end_line = $object->end_line;

        if ($end_line === null) {
            goto after_end_line;
        }
        after_end_line:        $result['end_line'] = $end_line;

        
        $start_column = $object->start_column;

        if ($start_column === null) {
            goto after_start_column;
        }
        after_start_column:        $result['start_column'] = $start_column;

        
        $end_column = $object->end_column;

        if ($end_column === null) {
            goto after_end_column;
        }
        after_end_column:        $result['end_column'] = $end_column;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\BasicError);
        $result = [];
        
        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;

        
        $documentation_url = $object->documentation_url;

        if ($documentation_url === null) {
            goto after_documentation_url;
        }
        after_documentation_url:        $result['documentation_url'] = $documentation_url;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }
        after_status:        $result['status'] = $status;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Operation⚡️SecretScanning⚡️ListAlertsForEnterprise⚡️Response⚡️Applicationjson⚡️H503(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503);
        $result = [];
        
        $code = $object->code;

        if ($code === null) {
            goto after_code;
        }
        after_code:        $result['code'] = $code;

        
        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;

        
        $documentation_url = $object->documentation_url;

        if ($documentation_url === null) {
            goto after_documentation_url;
        }
        after_documentation_url:        $result['documentation_url'] = $documentation_url;


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
