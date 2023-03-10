<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Hydrator\Operation\App\Hook\Deliveries;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class CbDeliveryIdRcb implements ObjectMapper
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
            'ApiClients\Client\GitHubAE\Schema\HookDelivery' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️HookDelivery($payload),
                'ApiClients\Client\GitHubAE\Schema\HookDelivery\Request' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️HookDelivery⚡️Request($payload),
                'ApiClients\Client\GitHubAE\Schema\HookDelivery\Response' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️HookDelivery⚡️Response($payload),
                'ApiClients\Client\GitHubAE\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\GitHubAE\Schema\ScimError' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ScimError($payload),
                'ApiClients\Client\GitHubAE\Schema\ValidationError' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ValidationError($payload),
                'ApiClients\Client\GitHubAE\Schema\ValidationError\Errors' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ValidationError⚡️Errors($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️HookDelivery(array $payload): \ApiClients\Client\GitHubAE\Schema\HookDelivery
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

            $value = $payload['guid'] ?? null;

            if ($value === null) {
                $missingFields[] = 'guid';
                goto after_guid;
            }

            $properties['guid'] = $value;

            after_guid:

            $value = $payload['delivered_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'delivered_at';
                goto after_delivered_at;
            }

            $properties['delivered_at'] = $value;

            after_delivered_at:

            $value = $payload['redelivery'] ?? null;

            if ($value === null) {
                $missingFields[] = 'redelivery';
                goto after_redelivery;
            }

            $properties['redelivery'] = $value;

            after_redelivery:

            $value = $payload['duration'] ?? null;

            if ($value === null) {
                $missingFields[] = 'duration';
                goto after_duration;
            }

            $properties['duration'] = $value;

            after_duration:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $missingFields[] = 'status';
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

            $value = $payload['status_code'] ?? null;

            if ($value === null) {
                $missingFields[] = 'status_code';
                goto after_status_code;
            }

            $properties['status_code'] = $value;

            after_status_code:

            $value = $payload['event'] ?? null;

            if ($value === null) {
                $missingFields[] = 'event';
                goto after_event;
            }

            $properties['event'] = $value;

            after_event:

            $value = $payload['action'] ?? null;

            if ($value === null) {
                $properties['action'] = null;
                goto after_action;
            }

            $properties['action'] = $value;

            after_action:

            $value = $payload['installation_id'] ?? null;

            if ($value === null) {
                $properties['installation_id'] = null;
                goto after_installation_id;
            }

            $properties['installation_id'] = $value;

            after_installation_id:

            $value = $payload['repository_id'] ?? null;

            if ($value === null) {
                $properties['repository_id'] = null;
                goto after_repository_id;
            }

            $properties['repository_id'] = $value;

            after_repository_id:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['request'] ?? null;

            if ($value === null) {
                $missingFields[] = 'request';
                goto after_request;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'request';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️HookDelivery⚡️Request($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['request'] = $value;

            after_request:

            $value = $payload['response'] ?? null;

            if ($value === null) {
                $missingFields[] = 'response';
                goto after_response;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'response';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️HookDelivery⚡️Response($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['response'] = $value;

            after_response:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\HookDelivery', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\HookDelivery::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubAE\Schema\HookDelivery(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\HookDelivery', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️HookDelivery⚡️Request(array $payload): \ApiClients\Client\GitHubAE\Schema\HookDelivery\Request
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['headers'] ?? null;

            if ($value === null) {
                $properties['headers'] = null;
                goto after_headers;
            }

            $properties['headers'] = $value;

            after_headers:

            $value = $payload['payload'] ?? null;

            if ($value === null) {
                $properties['payload'] = null;
                goto after_payload;
            }

            $properties['payload'] = $value;

            after_payload:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\HookDelivery\Request', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\HookDelivery\Request::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubAE\Schema\HookDelivery\Request(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\HookDelivery\Request', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️HookDelivery⚡️Response(array $payload): \ApiClients\Client\GitHubAE\Schema\HookDelivery\Response
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['headers'] ?? null;

            if ($value === null) {
                $properties['headers'] = null;
                goto after_headers;
            }

            $properties['headers'] = $value;

            after_headers:

            $value = $payload['payload'] ?? null;

            if ($value === null) {
                $properties['payload'] = null;
                goto after_payload;
            }

            $properties['payload'] = $value;

            after_payload:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\HookDelivery\Response', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\HookDelivery\Response::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubAE\Schema\HookDelivery\Response(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\HookDelivery\Response', $exception, stack: $this->hydrationStack);
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

        
    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ScimError(array $payload): \ApiClients\Client\GitHubAE\Schema\ScimError
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

            $value = $payload['detail'] ?? null;

            if ($value === null) {
                $properties['detail'] = null;
                goto after_detail;
            }

            $properties['detail'] = $value;

            after_detail:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $properties['status'] = null;
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

            $value = $payload['scim_type'] ?? null;

            if ($value === null) {
                $properties['scimType'] = null;
                goto after_scimType;
            }

            $properties['scimType'] = $value;

            after_scimType:

            $value = $payload['schemas'] ?? null;

            if ($value === null) {
                $properties['schemas'] = null;
                goto after_schemas;
            }

            $properties['schemas'] = $value;

            after_schemas:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ScimError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\ScimError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubAE\Schema\ScimError(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ScimError', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ValidationError(array $payload): \ApiClients\Client\GitHubAE\Schema\ValidationError
    {
        $properties = []; 
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
                goto after_documentation_url;
            }

            $properties['documentation_url'] = $value;

            after_documentation_url:

            $value = $payload['errors'] ?? null;

            if ($value === null) {
                $properties['errors'] = null;
                goto after_errors;
            }

            static $errorsCaster1;

            if ($errorsCaster1 === null) {
                $errorsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubAE\\Schema\\ValidationError\\Errors',
));
            }

            $value = $errorsCaster1->cast($value, $this);

            $properties['errors'] = $value;

            after_errors:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ValidationError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\ValidationError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubAE\Schema\ValidationError(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ValidationError', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ValidationError⚡️Errors(array $payload): \ApiClients\Client\GitHubAE\Schema\ValidationError\Errors
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['resource'] ?? null;

            if ($value === null) {
                $properties['resource'] = null;
                goto after_resource;
            }

            $properties['resource'] = $value;

            after_resource:

            $value = $payload['field'] ?? null;

            if ($value === null) {
                $properties['field'] = null;
                goto after_field;
            }

            $properties['field'] = $value;

            after_field:

            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['code'] ?? null;

            if ($value === null) {
                $missingFields[] = 'code';
                goto after_code;
            }

            $properties['code'] = $value;

            after_code:

            $value = $payload['index'] ?? null;

            if ($value === null) {
                $properties['index'] = null;
                goto after_index;
            }

            $properties['index'] = $value;

            after_index:

            $value = $payload['value'] ?? null;

            if ($value === null) {
                $properties['value'] = null;
                goto after_value;
            }

            $properties['value'] = $value;

            after_value:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ValidationError\Errors', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\ValidationError\Errors::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubAE\Schema\ValidationError\Errors(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ValidationError\Errors', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\GitHubAE\Schema\HookDelivery' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️HookDelivery($object),
            'ApiClients\Client\GitHubAE\Schema\HookDelivery\Request' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️HookDelivery⚡️Request($object),
            'ApiClients\Client\GitHubAE\Schema\HookDelivery\Response' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️HookDelivery⚡️Response($object),
            'ApiClients\Client\GitHubAE\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BasicError($object),
            'ApiClients\Client\GitHubAE\Schema\ScimError' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ScimError($object),
            'ApiClients\Client\GitHubAE\Schema\ValidationError' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ValidationError($object),
            'ApiClients\Client\GitHubAE\Schema\ValidationError\Errors' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ValidationError⚡️Errors($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️HookDelivery(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\HookDelivery);
        $result = [];

        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $guid = $object->guid;
        after_guid:        $result['guid'] = $guid;

        
        $delivered_at = $object->delivered_at;
        after_delivered_at:        $result['delivered_at'] = $delivered_at;

        
        $redelivery = $object->redelivery;
        after_redelivery:        $result['redelivery'] = $redelivery;

        
        $duration = $object->duration;
        after_duration:        $result['duration'] = $duration;

        
        $status = $object->status;
        after_status:        $result['status'] = $status;

        
        $status_code = $object->status_code;
        after_status_code:        $result['status_code'] = $status_code;

        
        $event = $object->event;
        after_event:        $result['event'] = $event;

        
        $action = $object->action;

        if ($action === null) {
            goto after_action;
        }
        after_action:        $result['action'] = $action;

        
        $installation_id = $object->installation_id;

        if ($installation_id === null) {
            goto after_installation_id;
        }
        after_installation_id:        $result['installation_id'] = $installation_id;

        
        $repository_id = $object->repository_id;

        if ($repository_id === null) {
            goto after_repository_id;
        }
        after_repository_id:        $result['repository_id'] = $repository_id;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $request = $object->request;
        $request = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️HookDelivery⚡️Request($request);
        after_request:        $result['request'] = $request;

        
        $response = $object->response;
        $response = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️HookDelivery⚡️Response($response);
        after_response:        $result['response'] = $response;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️HookDelivery⚡️Request(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\HookDelivery\Request);
        $result = [];

        $headers = $object->headers;

        if ($headers === null) {
            goto after_headers;
        }
        after_headers:        $result['headers'] = $headers;

        
        $payload = $object->payload;

        if ($payload === null) {
            goto after_payload;
        }
        after_payload:        $result['payload'] = $payload;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️HookDelivery⚡️Response(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\HookDelivery\Response);
        $result = [];

        $headers = $object->headers;

        if ($headers === null) {
            goto after_headers;
        }
        after_headers:        $result['headers'] = $headers;

        
        $payload = $object->payload;

        if ($payload === null) {
            goto after_payload;
        }
        after_payload:        $result['payload'] = $payload;


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


    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ScimError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\ScimError);
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

        
        $detail = $object->detail;

        if ($detail === null) {
            goto after_detail;
        }
        after_detail:        $result['detail'] = $detail;

        
        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }
        after_status:        $result['status'] = $status;

        
        $scimType = $object->scimType;

        if ($scimType === null) {
            goto after_scimType;
        }
        after_scimType:        $result['scim_type'] = $scimType;

        
        $schemas = $object->schemas;

        if ($schemas === null) {
            goto after_schemas;
        }
        static $schemasSerializer0;

        if ($schemasSerializer0 === null) {
            $schemasSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $schemas = $schemasSerializer0->serialize($schemas, $this);
        after_schemas:        $result['schemas'] = $schemas;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ValidationError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\ValidationError);
        $result = [];

        $message = $object->message;
        after_message:        $result['message'] = $message;

        
        $documentation_url = $object->documentation_url;
        after_documentation_url:        $result['documentation_url'] = $documentation_url;

        
        $errors = $object->errors;

        if ($errors === null) {
            goto after_errors;
        }
        static $errorsSerializer0;

        if ($errorsSerializer0 === null) {
            $errorsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubAE\\Schema\\ValidationError\\Errors',
));
        }
        
        $errors = $errorsSerializer0->serialize($errors, $this);
        after_errors:        $result['errors'] = $errors;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ValidationError⚡️Errors(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\ValidationError\Errors);
        $result = [];

        $resource = $object->resource;

        if ($resource === null) {
            goto after_resource;
        }
        after_resource:        $result['resource'] = $resource;

        
        $field = $object->field;

        if ($field === null) {
            goto after_field;
        }
        after_field:        $result['field'] = $field;

        
        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;

        
        $code = $object->code;
        after_code:        $result['code'] = $code;

        
        $index = $object->index;

        if ($index === null) {
            goto after_index;
        }
        after_index:        $result['index'] = $index;

        
        $value = $object->value;

        if ($value === null) {
            goto after_value;
        }
        after_value:        $result['value'] = $value;


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
