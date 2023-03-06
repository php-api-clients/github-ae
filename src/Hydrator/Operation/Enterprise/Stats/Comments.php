<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Hydrator\Operation\Enterprise\Stats;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Comments implements ObjectMapper
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
            'ApiClients\Client\GitHubAE\Schema\EnterpriseCommentOverview' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseCommentOverview($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseCommentOverview(array $payload): \ApiClients\Client\GitHubAE\Schema\EnterpriseCommentOverview
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['total_commit_comments'] ?? null;
    
                if ($value === null) {
                    $properties['total_commit_comments'] = null;
                    goto after_total_commit_comments;
                }

                $properties['total_commit_comments'] = $value;
    
                after_total_commit_comments:

                $value = $payload['total_gist_comments'] ?? null;
    
                if ($value === null) {
                    $properties['total_gist_comments'] = null;
                    goto after_total_gist_comments;
                }

                $properties['total_gist_comments'] = $value;
    
                after_total_gist_comments:

                $value = $payload['total_issue_comments'] ?? null;
    
                if ($value === null) {
                    $properties['total_issue_comments'] = null;
                    goto after_total_issue_comments;
                }

                $properties['total_issue_comments'] = $value;
    
                after_total_issue_comments:

                $value = $payload['total_pull_request_comments'] ?? null;
    
                if ($value === null) {
                    $properties['total_pull_request_comments'] = null;
                    goto after_total_pull_request_comments;
                }

                $properties['total_pull_request_comments'] = $value;
    
                after_total_pull_request_comments:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\EnterpriseCommentOverview', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\EnterpriseCommentOverview::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\EnterpriseCommentOverview(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\EnterpriseCommentOverview', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubAE\Schema\EnterpriseCommentOverview' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseCommentOverview($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseCommentOverview(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\EnterpriseCommentOverview);
        $result = [];
        
        $total_commit_comments = $object->total_commit_comments;

        if ($total_commit_comments === null) {
            goto after_total_commit_comments;
        }
        after_total_commit_comments:        $result['total_commit_comments'] = $total_commit_comments;

        
        $total_gist_comments = $object->total_gist_comments;

        if ($total_gist_comments === null) {
            goto after_total_gist_comments;
        }
        after_total_gist_comments:        $result['total_gist_comments'] = $total_gist_comments;

        
        $total_issue_comments = $object->total_issue_comments;

        if ($total_issue_comments === null) {
            goto after_total_issue_comments;
        }
        after_total_issue_comments:        $result['total_issue_comments'] = $total_issue_comments;

        
        $total_pull_request_comments = $object->total_pull_request_comments;

        if ($total_pull_request_comments === null) {
            goto after_total_pull_request_comments;
        }
        after_total_pull_request_comments:        $result['total_pull_request_comments'] = $total_pull_request_comments;


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
