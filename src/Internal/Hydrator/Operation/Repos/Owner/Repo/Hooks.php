<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Hydrator\Operation\Repos\Owner\Repo;

use ApiClients\Client\GitHubAE\Schema\BasicError;
use ApiClients\Client\GitHubAE\Schema\Hook;
use ApiClients\Client\GitHubAE\Schema\Hook\Config;
use ApiClients\Client\GitHubAE\Schema\HookResponse;
use ApiClients\Client\GitHubAE\Schema\ValidationError;
use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeUuidToString;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;
use LogicException;
use Throwable;

use function array_pop;
use function assert;
use function count;
use function is_a;
use function is_array;

class Hooks implements ObjectMapper
{
    private array $hydrationStack = [];

    public function __construct()
    {
    }

    /**
     * @param class-string<T> $className
     *
     * @return T
     *
     * @template T of object
     */
    public function hydrateObject(string $className, array $payload): object
    {
        return match ($className) {
            'ApiClients\Client\GitHubAE\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\GitHubAE\Schema\Hook' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Hook($payload),
                'ApiClients\Client\GitHubAE\Schema\Hook\Config' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Hook⚡️Config($payload),
                'ApiClients\Client\GitHubAE\Schema\HookResponse' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️HookResponse($payload),
                'ApiClients\Client\GitHubAE\Schema\ValidationError' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ValidationError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BasicError(array $payload): BasicError
    {
        $properties    = [];
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
                $properties['documentationUrl'] = null;
                goto after_documentationUrl;
            }

            $properties['documentationUrl'] = $value;

            after_documentationUrl:

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
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(BasicError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new BasicError(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Hook(array $payload): Hook
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['type'] ?? null;

            if ($value === null) {
                $missingFields[] = 'type';
                goto after_type;
            }

            $properties['type'] = $value;

            after_type:

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

            $value = $payload['active'] ?? null;

            if ($value === null) {
                $missingFields[] = 'active';
                goto after_active;
            }

            $properties['active'] = $value;

            after_active:

            $value = $payload['events'] ?? null;

            if ($value === null) {
                $missingFields[] = 'events';
                goto after_events;
            }

            $properties['events'] = $value;

            after_events:

            $value = $payload['config'] ?? null;

            if ($value === null) {
                $missingFields[] = 'config';
                goto after_config;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'config';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Hook⚡️Config($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['config'] = $value;

            after_config:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'updated_at';
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['test_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'test_url';
                goto after_testUrl;
            }

            $properties['testUrl'] = $value;

            after_testUrl:

            $value = $payload['ping_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'ping_url';
                goto after_pingUrl;
            }

            $properties['pingUrl'] = $value;

            after_pingUrl:

            $value = $payload['deliveries_url'] ?? null;

            if ($value === null) {
                $properties['deliveriesUrl'] = null;
                goto after_deliveriesUrl;
            }

            $properties['deliveriesUrl'] = $value;

            after_deliveriesUrl:

            $value = $payload['last_response'] ?? null;

            if ($value === null) {
                $missingFields[] = 'last_response';
                goto after_lastResponse;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'lastResponse';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️HookResponse($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['lastResponse'] = $value;

            after_lastResponse:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Hook', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Hook::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Hook(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Hook', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Hook⚡️Config(array $payload): Config
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['email'] ?? null;

            if ($value === null) {
                $properties['email'] = null;
                goto after_email;
            }

            $properties['email'] = $value;

            after_email:

            $value = $payload['password'] ?? null;

            if ($value === null) {
                $properties['password'] = null;
                goto after_password;
            }

            $properties['password'] = $value;

            after_password:

            $value = $payload['room'] ?? null;

            if ($value === null) {
                $properties['room'] = null;
                goto after_room;
            }

            $properties['room'] = $value;

            after_room:

            $value = $payload['subdomain'] ?? null;

            if ($value === null) {
                $properties['subdomain'] = null;
                goto after_subdomain;
            }

            $properties['subdomain'] = $value;

            after_subdomain:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['insecure_ssl'] ?? null;

            if ($value === null) {
                $properties['insecureSsl'] = null;
                goto after_insecureSsl;
            }

            $properties['insecureSsl'] = $value;

            after_insecureSsl:

            $value = $payload['content_type'] ?? null;

            if ($value === null) {
                $properties['contentType'] = null;
                goto after_contentType;
            }

            $properties['contentType'] = $value;

            after_contentType:

            $value = $payload['digest'] ?? null;

            if ($value === null) {
                $properties['digest'] = null;
                goto after_digest;
            }

            $properties['digest'] = $value;

            after_digest:

            $value = $payload['secret'] ?? null;

            if ($value === null) {
                $properties['secret'] = null;
                goto after_secret;
            }

            $properties['secret'] = $value;

            after_secret:

            $value = $payload['token'] ?? null;

            if ($value === null) {
                $properties['token'] = null;
                goto after_token;
            }

            $properties['token'] = $value;

            after_token:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Hook\Config', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Config::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Config(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Hook\Config', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️HookResponse(array $payload): HookResponse
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['code'] ?? null;

            if ($value === null) {
                $properties['code'] = null;
                goto after_code;
            }

            $properties['code'] = $value;

            after_code:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $properties['status'] = null;
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\HookResponse', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(HookResponse::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new HookResponse(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\HookResponse', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ValidationError(array $payload): ValidationError
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['message'] ?? null;

            if ($value === null) {
                $missingFields[] = 'message';
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['documentation_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'documentation_url';
                goto after_documentationUrl;
            }

            $properties['documentationUrl'] = $value;

            after_documentationUrl:

            $value = $payload['errors'] ?? null;

            if ($value === null) {
                $properties['errors'] = null;
                goto after_errors;
            }

            $properties['errors'] = $value;

            after_errors:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ValidationError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ValidationError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ValidationError(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ValidationError', $exception, stack: $this->hydrationStack);
        }
    }

    private function serializeViaTypeMap(string $accessor, object $object, array $payloadToTypeMap): array
    {
        foreach ($payloadToTypeMap as $payloadType => [$valueType, $method]) {
            if (is_a($object, $valueType)) {
                return [$accessor => $payloadType] + $this->{$method}($object);
            }
        }

        throw new LogicException('No type mapped for object of class: ' . $object::class);
    }

    public function serializeObject(object $object): mixed
    {
        return $this->serializeObjectOfType($object, $object::class);
    }

    /**
     * @param T               $object
     * @param class-string<T> $className
     *
     * @template T
     */
    public function serializeObjectOfType(object $object, string $className): mixed
    {
        try {
            return match ($className) {
                'array' => $this->serializeValuearray($object),
                'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
                'DateTime' => $this->serializeValueDateTime($object),
                'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
                'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
                'ApiClients\Client\GitHubAE\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BasicError($object),
                'ApiClients\Client\GitHubAE\Schema\Hook' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Hook($object),
                'ApiClients\Client\GitHubAE\Schema\Hook\Config' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Hook⚡️Config($object),
                'ApiClients\Client\GitHubAE\Schema\HookResponse' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️HookResponse($object),
                'ApiClients\Client\GitHubAE\Schema\ValidationError' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ValidationError($object),
                default => throw new LogicException('No serialization defined for $className'),
            };
        } catch (Throwable $exception) {
            throw UnableToSerializeObject::dueToError($className, $exception);
        }
    }

    private function serializeValuearray(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeArrayItems(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueRamsey⚡️Uuid⚡️UuidInterface(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeUuidToString(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTime(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTimeImmutable(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTimeInterface(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        assert($object instanceof BasicError);
        $result = [];

        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }

        after_message:        $result['message'] = $message;

        $documentationUrl = $object->documentationUrl;

        if ($documentationUrl === null) {
            goto after_documentationUrl;
        }

        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;

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

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Hook(mixed $object): mixed
    {
        assert($object instanceof Hook);
        $result = [];

        $type                              = $object->type;
        after_type:        $result['type'] = $type;

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $name                              = $object->name;
        after_name:        $result['name'] = $name;

        $active                                = $object->active;
        after_active:        $result['active'] = $active;

        $events = $object->events;
        static $eventsSerializer0;

        if ($eventsSerializer0 === null) {
            $eventsSerializer0 = new SerializeArrayItems(...[]);
        }

        $events                                = $eventsSerializer0->serialize($events, $this);
        after_events:        $result['events'] = $events;

        $config                                = $object->config;
        $config                                = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Hook⚡️Config($config);
        after_config:        $result['config'] = $config;

        $updatedAt                                    = $object->updatedAt;
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        $createdAt                                    = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $testUrl                                  = $object->testUrl;
        after_testUrl:        $result['test_url'] = $testUrl;

        $pingUrl                                  = $object->pingUrl;
        after_pingUrl:        $result['ping_url'] = $pingUrl;

        $deliveriesUrl = $object->deliveriesUrl;

        if ($deliveriesUrl === null) {
            goto after_deliveriesUrl;
        }

        after_deliveriesUrl:        $result['deliveries_url'] = $deliveriesUrl;

        $lastResponse                                       = $object->lastResponse;
        $lastResponse                                       = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️HookResponse($lastResponse);
        after_lastResponse:        $result['last_response'] = $lastResponse;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Hook⚡️Config(mixed $object): mixed
    {
        assert($object instanceof Config);
        $result = [];

        $email = $object->email;

        if ($email === null) {
            goto after_email;
        }

        after_email:        $result['email'] = $email;

        $password = $object->password;

        if ($password === null) {
            goto after_password;
        }

        after_password:        $result['password'] = $password;

        $room = $object->room;

        if ($room === null) {
            goto after_room;
        }

        after_room:        $result['room'] = $room;

        $subdomain = $object->subdomain;

        if ($subdomain === null) {
            goto after_subdomain;
        }

        after_subdomain:        $result['subdomain'] = $subdomain;

        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }

        after_url:        $result['url'] = $url;

        $insecureSsl = $object->insecureSsl;

        if ($insecureSsl === null) {
            goto after_insecureSsl;
        }

        after_insecureSsl:        $result['insecure_ssl'] = $insecureSsl;

        $contentType = $object->contentType;

        if ($contentType === null) {
            goto after_contentType;
        }

        after_contentType:        $result['content_type'] = $contentType;

        $digest = $object->digest;

        if ($digest === null) {
            goto after_digest;
        }

        after_digest:        $result['digest'] = $digest;

        $secret = $object->secret;

        if ($secret === null) {
            goto after_secret;
        }

        after_secret:        $result['secret'] = $secret;

        $token = $object->token;

        if ($token === null) {
            goto after_token;
        }

        after_token:        $result['token'] = $token;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️HookResponse(mixed $object): mixed
    {
        assert($object instanceof HookResponse);
        $result = [];

        $code = $object->code;

        if ($code === null) {
            goto after_code;
        }

        after_code:        $result['code'] = $code;

        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }

        after_status:        $result['status'] = $status;

        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }

        after_message:        $result['message'] = $message;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ValidationError(mixed $object): mixed
    {
        assert($object instanceof ValidationError);
        $result = [];

        $message                                 = $object->message;
        after_message:        $result['message'] = $message;

        $documentationUrl                                           = $object->documentationUrl;
        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;

        $errors = $object->errors;

        if ($errors === null) {
            goto after_errors;
        }

        static $errorsSerializer0;

        if ($errorsSerializer0 === null) {
            $errorsSerializer0 = new SerializeArrayItems(...[]);
        }

        $errors                                = $errorsSerializer0->serialize($errors, $this);
        after_errors:        $result['errors'] = $errors;

        return $result;
    }

    /**
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToHydrateObject
     *
     * @template T
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
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToSerializeObject
     *
     * @template T
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
