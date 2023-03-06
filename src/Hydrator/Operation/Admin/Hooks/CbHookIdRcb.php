<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Hydrator\Operation\Admin\Hooks;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class CbHookIdRcb implements ObjectMapper
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
            'ApiClients\Client\GitHubAE\Schema\GlobalHook' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️GlobalHook($payload),
                'ApiClients\Client\GitHubAE\Schema\GlobalHook\Config' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️GlobalHook⚡️Config($payload),
                'ApiClients\Client\GitHubAE\Schema\GlobalHook2' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️GlobalHook2($payload),
                'ApiClients\Client\GitHubAE\Schema\GlobalHook2\Config' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️GlobalHook2⚡️Config($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️GlobalHook(array $payload): \ApiClients\Client\GitHubAE\Schema\GlobalHook
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

                $value = $payload['active'] ?? null;
    
                if ($value === null) {
                    $properties['active'] = null;
                    goto after_active;
                }

                $properties['active'] = $value;
    
                after_active:

                $value = $payload['events'] ?? null;
    
                if ($value === null) {
                    $properties['events'] = null;
                    goto after_events;
                }

                $properties['events'] = $value;
    
                after_events:

                $value = $payload['config'] ?? null;
    
                if ($value === null) {
                    $properties['config'] = null;
                    goto after_config;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'config';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️GlobalHook⚡️Config($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['config'] = $value;
    
                after_config:

                $value = $payload['updated_at'] ?? null;
    
                if ($value === null) {
                    $properties['updated_at'] = null;
                    goto after_updated_at;
                }

                $properties['updated_at'] = $value;
    
                after_updated_at:

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

                $value = $payload['ping_url'] ?? null;
    
                if ($value === null) {
                    $properties['ping_url'] = null;
                    goto after_ping_url;
                }

                $properties['ping_url'] = $value;
    
                after_ping_url:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\GlobalHook', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\GlobalHook::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\GlobalHook(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\GlobalHook', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️GlobalHook⚡️Config(array $payload): \ApiClients\Client\GitHubAE\Schema\GlobalHook\Config
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

                $value = $payload['content_type'] ?? null;
    
                if ($value === null) {
                    $properties['content_type'] = null;
                    goto after_content_type;
                }

                $properties['content_type'] = $value;
    
                after_content_type:

                $value = $payload['insecure_ssl'] ?? null;
    
                if ($value === null) {
                    $properties['insecure_ssl'] = null;
                    goto after_insecure_ssl;
                }

                $properties['insecure_ssl'] = $value;
    
                after_insecure_ssl:

                $value = $payload['secret'] ?? null;
    
                if ($value === null) {
                    $properties['secret'] = null;
                    goto after_secret;
                }

                $properties['secret'] = $value;
    
                after_secret:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\GlobalHook\Config', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\GlobalHook\Config::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\GlobalHook\Config(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\GlobalHook\Config', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️GlobalHook2(array $payload): \ApiClients\Client\GitHubAE\Schema\GlobalHook2
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

                $value = $payload['active'] ?? null;
    
                if ($value === null) {
                    $properties['active'] = null;
                    goto after_active;
                }

                $properties['active'] = $value;
    
                after_active:

                $value = $payload['events'] ?? null;
    
                if ($value === null) {
                    $properties['events'] = null;
                    goto after_events;
                }

                $properties['events'] = $value;
    
                after_events:

                $value = $payload['config'] ?? null;
    
                if ($value === null) {
                    $properties['config'] = null;
                    goto after_config;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'config';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️GlobalHook2⚡️Config($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['config'] = $value;
    
                after_config:

                $value = $payload['updated_at'] ?? null;
    
                if ($value === null) {
                    $properties['updated_at'] = null;
                    goto after_updated_at;
                }

                $properties['updated_at'] = $value;
    
                after_updated_at:

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

                $value = $payload['ping_url'] ?? null;
    
                if ($value === null) {
                    $properties['ping_url'] = null;
                    goto after_ping_url;
                }

                $properties['ping_url'] = $value;
    
                after_ping_url:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\GlobalHook2', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\GlobalHook2::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\GlobalHook2(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\GlobalHook2', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️GlobalHook2⚡️Config(array $payload): \ApiClients\Client\GitHubAE\Schema\GlobalHook2\Config
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

                $value = $payload['content_type'] ?? null;
    
                if ($value === null) {
                    $properties['content_type'] = null;
                    goto after_content_type;
                }

                $properties['content_type'] = $value;
    
                after_content_type:

                $value = $payload['insecure_ssl'] ?? null;
    
                if ($value === null) {
                    $properties['insecure_ssl'] = null;
                    goto after_insecure_ssl;
                }

                $properties['insecure_ssl'] = $value;
    
                after_insecure_ssl:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\GlobalHook2\Config', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\GlobalHook2\Config::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\GlobalHook2\Config(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\GlobalHook2\Config', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubAE\Schema\GlobalHook' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️GlobalHook($object),
                'ApiClients\Client\GitHubAE\Schema\GlobalHook\Config' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️GlobalHook⚡️Config($object),
                'ApiClients\Client\GitHubAE\Schema\GlobalHook2' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️GlobalHook2($object),
                'ApiClients\Client\GitHubAE\Schema\GlobalHook2\Config' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️GlobalHook2⚡️Config($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️GlobalHook(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\GlobalHook);
        $result = [];
        
        $type = $object->type;

        if ($type === null) {
            goto after_type;
        }
        after_type:        $result['type'] = $type;

        
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

        
        $active = $object->active;

        if ($active === null) {
            goto after_active;
        }
        after_active:        $result['active'] = $active;

        
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

        
        $config = $object->config;

        if ($config === null) {
            goto after_config;
        }
        $config = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️GlobalHook⚡️Config($config);
        after_config:        $result['config'] = $config;

        
        $updated_at = $object->updated_at;

        if ($updated_at === null) {
            goto after_updated_at;
        }
        after_updated_at:        $result['updated_at'] = $updated_at;

        
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

        
        $ping_url = $object->ping_url;

        if ($ping_url === null) {
            goto after_ping_url;
        }
        after_ping_url:        $result['ping_url'] = $ping_url;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️GlobalHook⚡️Config(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\GlobalHook\Config);
        $result = [];
        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $content_type = $object->content_type;

        if ($content_type === null) {
            goto after_content_type;
        }
        after_content_type:        $result['content_type'] = $content_type;

        
        $insecure_ssl = $object->insecure_ssl;

        if ($insecure_ssl === null) {
            goto after_insecure_ssl;
        }
        after_insecure_ssl:        $result['insecure_ssl'] = $insecure_ssl;

        
        $secret = $object->secret;

        if ($secret === null) {
            goto after_secret;
        }
        after_secret:        $result['secret'] = $secret;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️GlobalHook2(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\GlobalHook2);
        $result = [];
        
        $type = $object->type;

        if ($type === null) {
            goto after_type;
        }
        after_type:        $result['type'] = $type;

        
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

        
        $active = $object->active;

        if ($active === null) {
            goto after_active;
        }
        after_active:        $result['active'] = $active;

        
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

        
        $config = $object->config;

        if ($config === null) {
            goto after_config;
        }
        $config = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️GlobalHook2⚡️Config($config);
        after_config:        $result['config'] = $config;

        
        $updated_at = $object->updated_at;

        if ($updated_at === null) {
            goto after_updated_at;
        }
        after_updated_at:        $result['updated_at'] = $updated_at;

        
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

        
        $ping_url = $object->ping_url;

        if ($ping_url === null) {
            goto after_ping_url;
        }
        after_ping_url:        $result['ping_url'] = $ping_url;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️GlobalHook2⚡️Config(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\GlobalHook2\Config);
        $result = [];
        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $content_type = $object->content_type;

        if ($content_type === null) {
            goto after_content_type;
        }
        after_content_type:        $result['content_type'] = $content_type;

        
        $insecure_ssl = $object->insecure_ssl;

        if ($insecure_ssl === null) {
            goto after_insecure_ssl;
        }
        after_insecure_ssl:        $result['insecure_ssl'] = $insecure_ssl;


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
