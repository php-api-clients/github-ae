<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Environments implements ObjectMapper
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
            'ApiClients\Client\GitHubAE\Schema\Operation\Repos\GetAllEnvironments\Response\Applicationjson\H200' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Operation⚡️Repos⚡️GetAllEnvironments⚡️Response⚡️Applicationjson⚡️H200($payload),
                'ApiClients\Client\GitHubAE\Schema\Environment' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Environment($payload),
                'ApiClients\Client\GitHubAE\Schema\Environment\ProtectionRules' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Environment⚡️ProtectionRules($payload),
                'ApiClients\Client\GitHubAE\Schema\DeploymentBranchPolicySettings' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️DeploymentBranchPolicySettings($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Operation⚡️Repos⚡️GetAllEnvironments⚡️Response⚡️Applicationjson⚡️H200(array $payload): \ApiClients\Client\GitHubAE\Schema\Operation\Repos\GetAllEnvironments\Response\Applicationjson\H200
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

                $value = $payload['environments'] ?? null;
    
                if ($value === null) {
                    $properties['environments'] = null;
                    goto after_environments;
                }

                static $environmentsCaster1;
    
                if ($environmentsCaster1 === null) {
                    $environmentsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubAE\\Schema\\Environment',
));
                }
    
                $value = $environmentsCaster1->cast($value, $this);

                $properties['environments'] = $value;
    
                after_environments:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Operation\Repos\GetAllEnvironments\Response\Applicationjson\H200', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\Operation\Repos\GetAllEnvironments\Response\Applicationjson\H200::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\Operation\Repos\GetAllEnvironments\Response\Applicationjson\H200(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Operation\Repos\GetAllEnvironments\Response\Applicationjson\H200', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Environment(array $payload): \ApiClients\Client\GitHubAE\Schema\Environment
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

                $value = $payload['node_id'] ?? null;
    
                if ($value === null) {
                    $properties['node_id'] = null;
                    goto after_node_id;
                }

                $properties['node_id'] = $value;
    
                after_node_id:

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $properties['name'] = null;
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

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

                $value = $payload['protection_rules'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'protection_rules';
                    goto after_protection_rules;
                }

                static $protection_rulesCaster1;
    
                if ($protection_rulesCaster1 === null) {
                    $protection_rulesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubAE\\Schema\\Environment\\ProtectionRules',
));
                }
    
                $value = $protection_rulesCaster1->cast($value, $this);

                $properties['protection_rules'] = $value;
    
                after_protection_rules:

                $value = $payload['deployment_branch_policy'] ?? null;
    
                if ($value === null) {
                    $properties['deployment_branch_policy'] = null;
                    goto after_deployment_branch_policy;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'deployment_branch_policy';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️DeploymentBranchPolicySettings($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['deployment_branch_policy'] = $value;
    
                after_deployment_branch_policy:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Environment', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\Environment::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\Environment(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Environment', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Environment⚡️ProtectionRules(array $payload): \ApiClients\Client\GitHubAE\Schema\Environment\ProtectionRules
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

                $value = $payload['node_id'] ?? null;
    
                if ($value === null) {
                    $properties['node_id'] = null;
                    goto after_node_id;
                }

                $properties['node_id'] = $value;
    
                after_node_id:

                $value = $payload['type'] ?? null;
    
                if ($value === null) {
                    $properties['type'] = null;
                    goto after_type;
                }

                $properties['type'] = $value;
    
                after_type:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Environment\ProtectionRules', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\Environment\ProtectionRules::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\Environment\ProtectionRules(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Environment\ProtectionRules', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️DeploymentBranchPolicySettings(array $payload): \ApiClients\Client\GitHubAE\Schema\DeploymentBranchPolicySettings
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['protected_branches'] ?? null;
    
                if ($value === null) {
                    $properties['protected_branches'] = null;
                    goto after_protected_branches;
                }

                $properties['protected_branches'] = $value;
    
                after_protected_branches:

                $value = $payload['custom_branch_policies'] ?? null;
    
                if ($value === null) {
                    $properties['custom_branch_policies'] = null;
                    goto after_custom_branch_policies;
                }

                $properties['custom_branch_policies'] = $value;
    
                after_custom_branch_policies:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\DeploymentBranchPolicySettings', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\DeploymentBranchPolicySettings::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\DeploymentBranchPolicySettings(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\DeploymentBranchPolicySettings', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubAE\Schema\Operation\Repos\GetAllEnvironments\Response\Applicationjson\H200' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Operation⚡️Repos⚡️GetAllEnvironments⚡️Response⚡️Applicationjson⚡️H200($object),
                'ApiClients\Client\GitHubAE\Schema\Environment' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Environment($object),
                'ApiClients\Client\GitHubAE\Schema\Environment\ProtectionRules' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Environment⚡️ProtectionRules($object),
                'ApiClients\Client\GitHubAE\Schema\DeploymentBranchPolicySettings' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️DeploymentBranchPolicySettings($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Operation⚡️Repos⚡️GetAllEnvironments⚡️Response⚡️Applicationjson⚡️H200(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\Operation\Repos\GetAllEnvironments\Response\Applicationjson\H200);
        $result = [];
        
        $total_count = $object->total_count;

        if ($total_count === null) {
            goto after_total_count;
        }
        after_total_count:        $result['total_count'] = $total_count;

        
        $environments = $object->environments;

        if ($environments === null) {
            goto after_environments;
        }
        static $environmentsSerializer0;

        if ($environmentsSerializer0 === null) {
            $environmentsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubAE\\Schema\\Environment',
));
        }
        
        $environments = $environmentsSerializer0->serialize($environments, $this);
        after_environments:        $result['environments'] = $environments;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Environment(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\Environment);
        $result = [];
        
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

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
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

        
        $protection_rules = $object->protection_rules;
        static $protection_rulesSerializer0;

        if ($protection_rulesSerializer0 === null) {
            $protection_rulesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubAE\\Schema\\Environment\\ProtectionRules',
));
        }
        
        $protection_rules = $protection_rulesSerializer0->serialize($protection_rules, $this);
        after_protection_rules:        $result['protection_rules'] = $protection_rules;

        
        $deployment_branch_policy = $object->deployment_branch_policy;

        if ($deployment_branch_policy === null) {
            goto after_deployment_branch_policy;
        }
        $deployment_branch_policy = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️DeploymentBranchPolicySettings($deployment_branch_policy);
        after_deployment_branch_policy:        $result['deployment_branch_policy'] = $deployment_branch_policy;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Environment⚡️ProtectionRules(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\Environment\ProtectionRules);
        $result = [];
        
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

        
        $type = $object->type;

        if ($type === null) {
            goto after_type;
        }
        after_type:        $result['type'] = $type;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️DeploymentBranchPolicySettings(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\DeploymentBranchPolicySettings);
        $result = [];
        
        $protected_branches = $object->protected_branches;

        if ($protected_branches === null) {
            goto after_protected_branches;
        }
        after_protected_branches:        $result['protected_branches'] = $protected_branches;

        
        $custom_branch_policies = $object->custom_branch_policies;

        if ($custom_branch_policies === null) {
            goto after_custom_branch_policies;
        }
        after_custom_branch_policies:        $result['custom_branch_policies'] = $custom_branch_policies;


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
