<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\MatchingRefs;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class CbRefRcb implements ObjectMapper
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
            'ApiClients\Client\GitHubAE\Schema\GitRef' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️GitRef($payload),
                'ApiClients\Client\GitHubAE\Schema\GitRef\Object_' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️GitRef⚡️Object_($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️GitRef(array $payload): \ApiClients\Client\GitHubAE\Schema\GitRef
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

                $value = $payload['node_id'] ?? null;
    
                if ($value === null) {
                    $properties['node_id'] = null;
                    goto after_node_id;
                }

                $properties['node_id'] = $value;
    
                after_node_id:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['object'] ?? null;
    
                if ($value === null) {
                    $properties['object'] = null;
                    goto after_object;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'object';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️GitRef⚡️Object_($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['object'] = $value;
    
                after_object:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\GitRef', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\GitRef::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\GitRef(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\GitRef', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️GitRef⚡️Object_(array $payload): \ApiClients\Client\GitHubAE\Schema\GitRef\Object_
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['type'] ?? null;
    
                if ($value === null) {
                    $properties['type'] = null;
                    goto after_type;
                }

                $properties['type'] = $value;
    
                after_type:

                $value = $payload['sha'] ?? null;
    
                if ($value === null) {
                    $properties['sha'] = null;
                    goto after_sha;
                }

                $properties['sha'] = $value;
    
                after_sha:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\GitRef\Object_', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\GitRef\Object_::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\GitRef\Object_(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\GitRef\Object_', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubAE\Schema\GitRef' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️GitRef($object),
                'ApiClients\Client\GitHubAE\Schema\GitRef\Object_' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️GitRef⚡️Object_($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️GitRef(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\GitRef);
        $result = [];
        
        $ref = $object->ref;

        if ($ref === null) {
            goto after_ref;
        }
        after_ref:        $result['ref'] = $ref;

        
        $node_id = $object->node_id;

        if ($node_id === null) {
            goto after_node_id;
        }
        after_node_id:        $result['node_id'] = $node_id;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $object = $object->object;

        if ($object === null) {
            goto after_object;
        }
        $object = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️GitRef⚡️Object_($object);
        after_object:        $result['object'] = $object;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️GitRef⚡️Object_(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\GitRef\Object_);
        $result = [];
        
        $type = $object->type;

        if ($type === null) {
            goto after_type;
        }
        after_type:        $result['type'] = $type;

        
        $sha = $object->sha;

        if ($sha === null) {
            goto after_sha;
        }
        after_sha:        $result['sha'] = $sha;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;


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
