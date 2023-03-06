<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Hydrator\Operation;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class RateLimit implements ObjectMapper
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
            'ApiClients\Client\GitHubAE\Schema\RateLimitOverview' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️RateLimitOverview($payload),
                'ApiClients\Client\GitHubAE\Schema\RateLimitOverview\Resources' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️RateLimitOverview⚡️Resources($payload),
                'ApiClients\Client\GitHubAE\Schema\RateLimit' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️RateLimit($payload),
                'ApiClients\Client\GitHubAE\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BasicError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️RateLimitOverview(array $payload): \ApiClients\Client\GitHubAE\Schema\RateLimitOverview
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['resources'] ?? null;
    
                if ($value === null) {
                    $properties['resources'] = null;
                    goto after_resources;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'resources';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️RateLimitOverview⚡️Resources($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['resources'] = $value;
    
                after_resources:

                $value = $payload['rate'] ?? null;
    
                if ($value === null) {
                    $properties['rate'] = null;
                    goto after_rate;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'rate';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️RateLimit($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['rate'] = $value;
    
                after_rate:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\RateLimitOverview', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\RateLimitOverview::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\RateLimitOverview(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\RateLimitOverview', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️RateLimitOverview⚡️Resources(array $payload): \ApiClients\Client\GitHubAE\Schema\RateLimitOverview\Resources
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['core'] ?? null;
    
                if ($value === null) {
                    $properties['core'] = null;
                    goto after_core;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'core';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️RateLimit($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['core'] = $value;
    
                after_core:

                $value = $payload['graphql'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'graphql';
                    goto after_graphql;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'graphql';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️RateLimit($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['graphql'] = $value;
    
                after_graphql:

                $value = $payload['search'] ?? null;
    
                if ($value === null) {
                    $properties['search'] = null;
                    goto after_search;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'search';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️RateLimit($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['search'] = $value;
    
                after_search:

                $value = $payload['source_import'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'source_import';
                    goto after_source_import;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'source_import';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️RateLimit($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['source_import'] = $value;
    
                after_source_import:

                $value = $payload['integration_manifest'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'integration_manifest';
                    goto after_integration_manifest;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'integration_manifest';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️RateLimit($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['integration_manifest'] = $value;
    
                after_integration_manifest:

                $value = $payload['code_scanning_upload'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'code_scanning_upload';
                    goto after_code_scanning_upload;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'code_scanning_upload';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️RateLimit($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['code_scanning_upload'] = $value;
    
                after_code_scanning_upload:

                $value = $payload['actions_runner_registration'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'actions_runner_registration';
                    goto after_actions_runner_registration;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'actions_runner_registration';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️RateLimit($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['actions_runner_registration'] = $value;
    
                after_actions_runner_registration:

                $value = $payload['scim'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'scim';
                    goto after_scim;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'scim';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️RateLimit($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['scim'] = $value;
    
                after_scim:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\RateLimitOverview\Resources', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\RateLimitOverview\Resources::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\RateLimitOverview\Resources(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\RateLimitOverview\Resources', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️RateLimit(array $payload): \ApiClients\Client\GitHubAE\Schema\RateLimit
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['limit'] ?? null;
    
                if ($value === null) {
                    $properties['limit'] = null;
                    goto after_limit;
                }

                $properties['limit'] = $value;
    
                after_limit:

                $value = $payload['remaining'] ?? null;
    
                if ($value === null) {
                    $properties['remaining'] = null;
                    goto after_remaining;
                }

                $properties['remaining'] = $value;
    
                after_remaining:

                $value = $payload['reset'] ?? null;
    
                if ($value === null) {
                    $properties['reset'] = null;
                    goto after_reset;
                }

                $properties['reset'] = $value;
    
                after_reset:

                $value = $payload['used'] ?? null;
    
                if ($value === null) {
                    $properties['used'] = null;
                    goto after_used;
                }

                $properties['used'] = $value;
    
                after_used:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\RateLimit', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\RateLimit::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\RateLimit(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\RateLimit', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubAE\Schema\RateLimitOverview' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️RateLimitOverview($object),
                'ApiClients\Client\GitHubAE\Schema\RateLimitOverview\Resources' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️RateLimitOverview⚡️Resources($object),
                'ApiClients\Client\GitHubAE\Schema\RateLimit' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️RateLimit($object),
                'ApiClients\Client\GitHubAE\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BasicError($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️RateLimitOverview(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\RateLimitOverview);
        $result = [];
        
        $resources = $object->resources;

        if ($resources === null) {
            goto after_resources;
        }
        $resources = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️RateLimitOverview⚡️Resources($resources);
        after_resources:        $result['resources'] = $resources;

        
        $rate = $object->rate;

        if ($rate === null) {
            goto after_rate;
        }
        $rate = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️RateLimit($rate);
        after_rate:        $result['rate'] = $rate;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️RateLimitOverview⚡️Resources(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\RateLimitOverview\Resources);
        $result = [];
        
        $core = $object->core;

        if ($core === null) {
            goto after_core;
        }
        $core = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️RateLimit($core);
        after_core:        $result['core'] = $core;

        
        $graphql = $object->graphql;
        $graphql = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️RateLimit($graphql);
        after_graphql:        $result['graphql'] = $graphql;

        
        $search = $object->search;

        if ($search === null) {
            goto after_search;
        }
        $search = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️RateLimit($search);
        after_search:        $result['search'] = $search;

        
        $source_import = $object->source_import;
        $source_import = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️RateLimit($source_import);
        after_source_import:        $result['source_import'] = $source_import;

        
        $integration_manifest = $object->integration_manifest;
        $integration_manifest = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️RateLimit($integration_manifest);
        after_integration_manifest:        $result['integration_manifest'] = $integration_manifest;

        
        $code_scanning_upload = $object->code_scanning_upload;
        $code_scanning_upload = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️RateLimit($code_scanning_upload);
        after_code_scanning_upload:        $result['code_scanning_upload'] = $code_scanning_upload;

        
        $actions_runner_registration = $object->actions_runner_registration;
        $actions_runner_registration = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️RateLimit($actions_runner_registration);
        after_actions_runner_registration:        $result['actions_runner_registration'] = $actions_runner_registration;

        
        $scim = $object->scim;
        $scim = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️RateLimit($scim);
        after_scim:        $result['scim'] = $scim;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️RateLimit(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\RateLimit);
        $result = [];
        
        $limit = $object->limit;

        if ($limit === null) {
            goto after_limit;
        }
        after_limit:        $result['limit'] = $limit;

        
        $remaining = $object->remaining;

        if ($remaining === null) {
            goto after_remaining;
        }
        after_remaining:        $result['remaining'] = $remaining;

        
        $reset = $object->reset;

        if ($reset === null) {
            goto after_reset;
        }
        after_reset:        $result['reset'] = $reset;

        
        $used = $object->used;

        if ($used === null) {
            goto after_used;
        }
        after_used:        $result['used'] = $used;


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
