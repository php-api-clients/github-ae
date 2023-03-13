<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class RunnerGroups implements ObjectMapper
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
            'ApiClients\Client\GitHubAE\Schema\Operation\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\Applicationjson\H200' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Operation⚡️EnterpriseAdmin⚡️ListSelfHostedRunnerGroupsForEnterprise⚡️Response⚡️Applicationjson⚡️H200($payload),
                'ApiClients\Client\GitHubAE\Schema\RunnerGroupsEnterprise' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️RunnerGroupsEnterprise($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Operation⚡️EnterpriseAdmin⚡️ListSelfHostedRunnerGroupsForEnterprise⚡️Response⚡️Applicationjson⚡️H200(array $payload): \ApiClients\Client\GitHubAE\Schema\Operation\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\Applicationjson\H200
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['total_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'total_count';
                goto after_total_count;
            }

            $properties['total_count'] = $value;

            after_total_count:

            $value = $payload['runner_groups'] ?? null;

            if ($value === null) {
                $missingFields[] = 'runner_groups';
                goto after_runner_groups;
            }

            static $runner_groupsCaster1;

            if ($runner_groupsCaster1 === null) {
                $runner_groupsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubAE\\Schema\\RunnerGroupsEnterprise',
));
            }

            $value = $runner_groupsCaster1->cast($value, $this);

            $properties['runner_groups'] = $value;

            after_runner_groups:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Operation\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\Applicationjson\H200', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\Operation\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\Applicationjson\H200::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubAE\Schema\Operation\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\Applicationjson\H200(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Operation\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\Applicationjson\H200', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️RunnerGroupsEnterprise(array $payload): \ApiClients\Client\GitHubAE\Schema\RunnerGroupsEnterprise
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['visibility'] ?? null;

            if ($value === null) {
                $missingFields[] = 'visibility';
                goto after_visibility;
            }

            $properties['visibility'] = $value;

            after_visibility:

            $value = $payload['default'] ?? null;

            if ($value === null) {
                $missingFields[] = 'default';
                goto after_default;
            }

            $properties['default'] = $value;

            after_default:

            $value = $payload['selected_organizations_url'] ?? null;

            if ($value === null) {
                $properties['selected_organizations_url'] = null;
                goto after_selected_organizations_url;
            }

            $properties['selected_organizations_url'] = $value;

            after_selected_organizations_url:

            $value = $payload['runners_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'runners_url';
                goto after_runners_url;
            }

            $properties['runners_url'] = $value;

            after_runners_url:

            $value = $payload['allows_public_repositories'] ?? null;

            if ($value === null) {
                $missingFields[] = 'allows_public_repositories';
                goto after_allows_public_repositories;
            }

            $properties['allows_public_repositories'] = $value;

            after_allows_public_repositories:

            $value = $payload['workflow_restrictions_read_only'] ?? null;

            if ($value === null) {
                $properties['workflow_restrictions_read_only'] = null;
                goto after_workflow_restrictions_read_only;
            }

            $properties['workflow_restrictions_read_only'] = $value;

            after_workflow_restrictions_read_only:

            $value = $payload['restricted_to_workflows'] ?? null;

            if ($value === null) {
                $properties['restricted_to_workflows'] = null;
                goto after_restricted_to_workflows;
            }

            $properties['restricted_to_workflows'] = $value;

            after_restricted_to_workflows:

            $value = $payload['selected_workflows'] ?? null;

            if ($value === null) {
                $properties['selected_workflows'] = null;
                goto after_selected_workflows;
            }

            $properties['selected_workflows'] = $value;

            after_selected_workflows:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\RunnerGroupsEnterprise', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\RunnerGroupsEnterprise::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubAE\Schema\RunnerGroupsEnterprise(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\RunnerGroupsEnterprise', $exception, stack: $this->hydrationStack);
        }
    }
    
    private function serializeViaTypeMap(string $accessor, object $object, array $payloadToTypeMap): array
    {
        foreach ($payloadToTypeMap as $payloadType => [$valueType, $method]) {
            if (is_a($object, $valueType)) {
                return [$accessor => $payloadType] + $this->{$method}($object);
            }
        }

        throw new \LogicException('No type mapped for object of class: ' . get_class($object));
    }

    public function serializeObject(object $object): mixed
    {
        return $this->serializeObjectOfType($object, get_class($object));
    }

    /**
     * @template T
     *
     * @param T               $object
     * @param class-string<T> $className
     */
    public function serializeObjectOfType(object $object, string $className): mixed
    {
        try {
            return match($className) {
                'array' => $this->serializeValuearray($object),
            'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
            'DateTime' => $this->serializeValueDateTime($object),
            'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
            'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
            'ApiClients\Client\GitHubAE\Schema\Operation\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\Applicationjson\H200' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Operation⚡️EnterpriseAdmin⚡️ListSelfHostedRunnerGroupsForEnterprise⚡️Response⚡️Applicationjson⚡️H200($object),
            'ApiClients\Client\GitHubAE\Schema\RunnerGroupsEnterprise' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️RunnerGroupsEnterprise($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Operation⚡️EnterpriseAdmin⚡️ListSelfHostedRunnerGroupsForEnterprise⚡️Response⚡️Applicationjson⚡️H200(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\Operation\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\Applicationjson\H200);
        $result = [];

        $total_count = $object->total_count;
        after_total_count:        $result['total_count'] = $total_count;

        
        $runner_groups = $object->runner_groups;
        static $runner_groupsSerializer0;

        if ($runner_groupsSerializer0 === null) {
            $runner_groupsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubAE\\Schema\\RunnerGroupsEnterprise',
));
        }
        
        $runner_groups = $runner_groupsSerializer0->serialize($runner_groups, $this);
        after_runner_groups:        $result['runner_groups'] = $runner_groups;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️RunnerGroupsEnterprise(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\RunnerGroupsEnterprise);
        $result = [];

        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $visibility = $object->visibility;
        after_visibility:        $result['visibility'] = $visibility;

        
        $default = $object->default;
        after_default:        $result['default'] = $default;

        
        $selected_organizations_url = $object->selected_organizations_url;

        if ($selected_organizations_url === null) {
            goto after_selected_organizations_url;
        }
        after_selected_organizations_url:        $result['selected_organizations_url'] = $selected_organizations_url;

        
        $runners_url = $object->runners_url;
        after_runners_url:        $result['runners_url'] = $runners_url;

        
        $allows_public_repositories = $object->allows_public_repositories;
        after_allows_public_repositories:        $result['allows_public_repositories'] = $allows_public_repositories;

        
        $workflow_restrictions_read_only = $object->workflow_restrictions_read_only;

        if ($workflow_restrictions_read_only === null) {
            goto after_workflow_restrictions_read_only;
        }
        after_workflow_restrictions_read_only:        $result['workflow_restrictions_read_only'] = $workflow_restrictions_read_only;

        
        $restricted_to_workflows = $object->restricted_to_workflows;

        if ($restricted_to_workflows === null) {
            goto after_restricted_to_workflows;
        }
        after_restricted_to_workflows:        $result['restricted_to_workflows'] = $restricted_to_workflows;

        
        $selected_workflows = $object->selected_workflows;

        if ($selected_workflows === null) {
            goto after_selected_workflows;
        }
        static $selected_workflowsSerializer0;

        if ($selected_workflowsSerializer0 === null) {
            $selected_workflowsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $selected_workflows = $selected_workflowsSerializer0->serialize($selected_workflows, $this);
        after_selected_workflows:        $result['selected_workflows'] = $selected_workflows;


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
