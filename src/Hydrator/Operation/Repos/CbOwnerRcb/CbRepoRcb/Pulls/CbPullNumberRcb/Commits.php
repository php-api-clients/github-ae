<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Commits implements ObjectMapper
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
            'ApiClients\Client\GitHubAE\Schema\Commit' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Commit($payload),
                'ApiClients\Client\GitHubAE\Schema\Commit\Commit' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Commit⚡️Commit($payload),
                'ApiClients\Client\GitHubAE\Schema\Commit\Commit\Tree' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Commit⚡️Commit⚡️Tree($payload),
                'ApiClients\Client\GitHubAE\Schema\Verification' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Verification($payload),
                'ApiClients\Client\GitHubAE\Schema\Commit\Parents' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Commit⚡️Parents($payload),
                'ApiClients\Client\GitHubAE\Schema\Commit\Stats' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Commit⚡️Stats($payload),
                'ApiClients\Client\GitHubAE\Schema\DiffEntry' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️DiffEntry($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Commit(array $payload): \ApiClients\Client\GitHubAE\Schema\Commit
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['sha'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sha';
                goto after_sha;
            }

            $properties['sha'] = $value;

            after_sha:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_node_id;
            }

            $properties['node_id'] = $value;

            after_node_id:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_html_url;
            }

            $properties['html_url'] = $value;

            after_html_url:

            $value = $payload['comments_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'comments_url';
                goto after_comments_url;
            }

            $properties['comments_url'] = $value;

            after_comments_url:

            $value = $payload['commit'] ?? null;

            if ($value === null) {
                $missingFields[] = 'commit';
                goto after_commit;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'commit';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Commit⚡️Commit($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['commit'] = $value;

            after_commit:

            $value = $payload['author'] ?? null;

            if ($value === null) {
                $properties['author'] = null;
                goto after_author;
            }

            $properties['author'] = $value;

            after_author:

            $value = $payload['committer'] ?? null;

            if ($value === null) {
                $properties['committer'] = null;
                goto after_committer;
            }

            $properties['committer'] = $value;

            after_committer:

            $value = $payload['parents'] ?? null;

            if ($value === null) {
                $missingFields[] = 'parents';
                goto after_parents;
            }

            static $parentsCaster1;

            if ($parentsCaster1 === null) {
                $parentsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubAE\\Schema\\Commit\\Parents',
));
            }

            $value = $parentsCaster1->cast($value, $this);

            $properties['parents'] = $value;

            after_parents:

            $value = $payload['stats'] ?? null;

            if ($value === null) {
                $properties['stats'] = null;
                goto after_stats;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'stats';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Commit⚡️Stats($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['stats'] = $value;

            after_stats:

            $value = $payload['files'] ?? null;

            if ($value === null) {
                $properties['files'] = null;
                goto after_files;
            }

            static $filesCaster1;

            if ($filesCaster1 === null) {
                $filesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubAE\\Schema\\DiffEntry',
));
            }

            $value = $filesCaster1->cast($value, $this);

            $properties['files'] = $value;

            after_files:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Commit', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\Commit::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubAE\Schema\Commit(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Commit', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Commit⚡️Commit(array $payload): \ApiClients\Client\GitHubAE\Schema\Commit\Commit
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['author'] ?? null;

            if ($value === null) {
                $properties['author'] = null;
                goto after_author;
            }

            $properties['author'] = $value;

            after_author:

            $value = $payload['committer'] ?? null;

            if ($value === null) {
                $properties['committer'] = null;
                goto after_committer;
            }

            $properties['committer'] = $value;

            after_committer:

            $value = $payload['message'] ?? null;

            if ($value === null) {
                $missingFields[] = 'message';
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['comment_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'comment_count';
                goto after_comment_count;
            }

            $properties['comment_count'] = $value;

            after_comment_count:

            $value = $payload['tree'] ?? null;

            if ($value === null) {
                $missingFields[] = 'tree';
                goto after_tree;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'tree';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Commit⚡️Commit⚡️Tree($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['tree'] = $value;

            after_tree:

            $value = $payload['verification'] ?? null;

            if ($value === null) {
                $properties['verification'] = null;
                goto after_verification;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'verification';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Verification($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['verification'] = $value;

            after_verification:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Commit\Commit', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\Commit\Commit::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubAE\Schema\Commit\Commit(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Commit\Commit', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Commit⚡️Commit⚡️Tree(array $payload): \ApiClients\Client\GitHubAE\Schema\Commit\Commit\Tree
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['sha'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sha';
                goto after_sha;
            }

            $properties['sha'] = $value;

            after_sha:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Commit\Commit\Tree', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\Commit\Commit\Tree::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubAE\Schema\Commit\Commit\Tree(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Commit\Commit\Tree', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Verification(array $payload): \ApiClients\Client\GitHubAE\Schema\Verification
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['verified'] ?? null;

            if ($value === null) {
                $missingFields[] = 'verified';
                goto after_verified;
            }

            $properties['verified'] = $value;

            after_verified:

            $value = $payload['reason'] ?? null;

            if ($value === null) {
                $missingFields[] = 'reason';
                goto after_reason;
            }

            $properties['reason'] = $value;

            after_reason:

            $value = $payload['payload'] ?? null;

            if ($value === null) {
                $properties['payload'] = null;
                goto after_payload;
            }

            $properties['payload'] = $value;

            after_payload:

            $value = $payload['signature'] ?? null;

            if ($value === null) {
                $properties['signature'] = null;
                goto after_signature;
            }

            $properties['signature'] = $value;

            after_signature:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Verification', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\Verification::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubAE\Schema\Verification(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Verification', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Commit⚡️Parents(array $payload): \ApiClients\Client\GitHubAE\Schema\Commit\Parents
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['sha'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sha';
                goto after_sha;
            }

            $properties['sha'] = $value;

            after_sha:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
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

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Commit\Parents', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\Commit\Parents::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubAE\Schema\Commit\Parents(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Commit\Parents', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Commit⚡️Stats(array $payload): \ApiClients\Client\GitHubAE\Schema\Commit\Stats
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['additions'] ?? null;

            if ($value === null) {
                $properties['additions'] = null;
                goto after_additions;
            }

            $properties['additions'] = $value;

            after_additions:

            $value = $payload['deletions'] ?? null;

            if ($value === null) {
                $properties['deletions'] = null;
                goto after_deletions;
            }

            $properties['deletions'] = $value;

            after_deletions:

            $value = $payload['total'] ?? null;

            if ($value === null) {
                $properties['total'] = null;
                goto after_total;
            }

            $properties['total'] = $value;

            after_total:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Commit\Stats', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\Commit\Stats::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubAE\Schema\Commit\Stats(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Commit\Stats', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️DiffEntry(array $payload): \ApiClients\Client\GitHubAE\Schema\DiffEntry
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['sha'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sha';
                goto after_sha;
            }

            $properties['sha'] = $value;

            after_sha:

            $value = $payload['filename'] ?? null;

            if ($value === null) {
                $missingFields[] = 'filename';
                goto after_filename;
            }

            $properties['filename'] = $value;

            after_filename:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $missingFields[] = 'status';
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

            $value = $payload['additions'] ?? null;

            if ($value === null) {
                $missingFields[] = 'additions';
                goto after_additions;
            }

            $properties['additions'] = $value;

            after_additions:

            $value = $payload['deletions'] ?? null;

            if ($value === null) {
                $missingFields[] = 'deletions';
                goto after_deletions;
            }

            $properties['deletions'] = $value;

            after_deletions:

            $value = $payload['changes'] ?? null;

            if ($value === null) {
                $missingFields[] = 'changes';
                goto after_changes;
            }

            $properties['changes'] = $value;

            after_changes:

            $value = $payload['blob_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'blob_url';
                goto after_blob_url;
            }

            $properties['blob_url'] = $value;

            after_blob_url:

            $value = $payload['raw_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'raw_url';
                goto after_raw_url;
            }

            $properties['raw_url'] = $value;

            after_raw_url:

            $value = $payload['contents_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'contents_url';
                goto after_contents_url;
            }

            $properties['contents_url'] = $value;

            after_contents_url:

            $value = $payload['patch'] ?? null;

            if ($value === null) {
                $properties['patch'] = null;
                goto after_patch;
            }

            $properties['patch'] = $value;

            after_patch:

            $value = $payload['previous_filename'] ?? null;

            if ($value === null) {
                $properties['previous_filename'] = null;
                goto after_previous_filename;
            }

            $properties['previous_filename'] = $value;

            after_previous_filename:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\DiffEntry', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\DiffEntry::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubAE\Schema\DiffEntry(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\DiffEntry', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\GitHubAE\Schema\Commit' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Commit($object),
            'ApiClients\Client\GitHubAE\Schema\Commit\Commit' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Commit⚡️Commit($object),
            'ApiClients\Client\GitHubAE\Schema\Commit\Commit\Tree' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Commit⚡️Commit⚡️Tree($object),
            'ApiClients\Client\GitHubAE\Schema\Verification' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Verification($object),
            'ApiClients\Client\GitHubAE\Schema\Commit\Parents' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Commit⚡️Parents($object),
            'ApiClients\Client\GitHubAE\Schema\Commit\Stats' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Commit⚡️Stats($object),
            'ApiClients\Client\GitHubAE\Schema\DiffEntry' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️DiffEntry($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Commit(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\Commit);
        $result = [];

        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $sha = $object->sha;
        after_sha:        $result['sha'] = $sha;

        
        $node_id = $object->node_id;
        after_node_id:        $result['node_id'] = $node_id;

        
        $html_url = $object->html_url;
        after_html_url:        $result['html_url'] = $html_url;

        
        $comments_url = $object->comments_url;
        after_comments_url:        $result['comments_url'] = $comments_url;

        
        $commit = $object->commit;
        $commit = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Commit⚡️Commit($commit);
        after_commit:        $result['commit'] = $commit;

        
        $author = $object->author;

        if ($author === null) {
            goto after_author;
        }
        after_author:        $result['author'] = $author;

        
        $committer = $object->committer;

        if ($committer === null) {
            goto after_committer;
        }
        after_committer:        $result['committer'] = $committer;

        
        $parents = $object->parents;
        static $parentsSerializer0;

        if ($parentsSerializer0 === null) {
            $parentsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubAE\\Schema\\Commit\\Parents',
));
        }
        
        $parents = $parentsSerializer0->serialize($parents, $this);
        after_parents:        $result['parents'] = $parents;

        
        $stats = $object->stats;

        if ($stats === null) {
            goto after_stats;
        }
        $stats = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Commit⚡️Stats($stats);
        after_stats:        $result['stats'] = $stats;

        
        $files = $object->files;

        if ($files === null) {
            goto after_files;
        }
        static $filesSerializer0;

        if ($filesSerializer0 === null) {
            $filesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubAE\\Schema\\DiffEntry',
));
        }
        
        $files = $filesSerializer0->serialize($files, $this);
        after_files:        $result['files'] = $files;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Commit⚡️Commit(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\Commit\Commit);
        $result = [];

        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $author = $object->author;

        if ($author === null) {
            goto after_author;
        }
        after_author:        $result['author'] = $author;

        
        $committer = $object->committer;

        if ($committer === null) {
            goto after_committer;
        }
        after_committer:        $result['committer'] = $committer;

        
        $message = $object->message;
        after_message:        $result['message'] = $message;

        
        $comment_count = $object->comment_count;
        after_comment_count:        $result['comment_count'] = $comment_count;

        
        $tree = $object->tree;
        $tree = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Commit⚡️Commit⚡️Tree($tree);
        after_tree:        $result['tree'] = $tree;

        
        $verification = $object->verification;

        if ($verification === null) {
            goto after_verification;
        }
        $verification = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Verification($verification);
        after_verification:        $result['verification'] = $verification;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Commit⚡️Commit⚡️Tree(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\Commit\Commit\Tree);
        $result = [];

        $sha = $object->sha;
        after_sha:        $result['sha'] = $sha;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Verification(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\Verification);
        $result = [];

        $verified = $object->verified;
        after_verified:        $result['verified'] = $verified;

        
        $reason = $object->reason;
        after_reason:        $result['reason'] = $reason;

        
        $payload = $object->payload;

        if ($payload === null) {
            goto after_payload;
        }
        after_payload:        $result['payload'] = $payload;

        
        $signature = $object->signature;

        if ($signature === null) {
            goto after_signature;
        }
        after_signature:        $result['signature'] = $signature;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Commit⚡️Parents(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\Commit\Parents);
        $result = [];

        $sha = $object->sha;
        after_sha:        $result['sha'] = $sha;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Commit⚡️Stats(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\Commit\Stats);
        $result = [];

        $additions = $object->additions;

        if ($additions === null) {
            goto after_additions;
        }
        after_additions:        $result['additions'] = $additions;

        
        $deletions = $object->deletions;

        if ($deletions === null) {
            goto after_deletions;
        }
        after_deletions:        $result['deletions'] = $deletions;

        
        $total = $object->total;

        if ($total === null) {
            goto after_total;
        }
        after_total:        $result['total'] = $total;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️DiffEntry(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\DiffEntry);
        $result = [];

        $sha = $object->sha;
        after_sha:        $result['sha'] = $sha;

        
        $filename = $object->filename;
        after_filename:        $result['filename'] = $filename;

        
        $status = $object->status;
        after_status:        $result['status'] = $status;

        
        $additions = $object->additions;
        after_additions:        $result['additions'] = $additions;

        
        $deletions = $object->deletions;
        after_deletions:        $result['deletions'] = $deletions;

        
        $changes = $object->changes;
        after_changes:        $result['changes'] = $changes;

        
        $blob_url = $object->blob_url;
        after_blob_url:        $result['blob_url'] = $blob_url;

        
        $raw_url = $object->raw_url;
        after_raw_url:        $result['raw_url'] = $raw_url;

        
        $contents_url = $object->contents_url;
        after_contents_url:        $result['contents_url'] = $contents_url;

        
        $patch = $object->patch;

        if ($patch === null) {
            goto after_patch;
        }
        after_patch:        $result['patch'] = $patch;

        
        $previous_filename = $object->previous_filename;

        if ($previous_filename === null) {
            goto after_previous_filename;
        }
        after_previous_filename:        $result['previous_filename'] = $previous_filename;


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
