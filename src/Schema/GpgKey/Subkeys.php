<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Schema\GpgKey;

use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\Schema\GpgKey\Subkeys\Emails;
use EventSauce\ObjectHydrator\MapFrom;
use EventSauce\ObjectHydrator\PropertyCasters\CastListToType;

final readonly class Subkeys
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"id":{"type":"integer"},"primary_key_id":{"type":"integer"},"key_id":{"type":"string"},"public_key":{"type":"string"},"emails":{"type":"array","items":{"type":"object","properties":{"email":{"type":"string"},"verified":{"type":"boolean"}}}},"subkeys":{"type":"array","items":{}},"can_sign":{"type":"boolean"},"can_encrypt_comms":{"type":"boolean"},"can_encrypt_storage":{"type":"boolean"},"can_certify":{"type":"boolean"},"created_at":{"type":"string"},"expires_at":{"type":["string","null"]},"raw_key":{"type":["string","null"]},"revoked":{"type":"boolean"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"primary_key_id":13,"key_id":"generated_key_id_null","public_key":"generated_public_key_null","emails":[{"email":"generated_email_null","verified":false}],"subkeys":[null],"can_sign":false,"can_encrypt_comms":false,"can_encrypt_storage":false,"can_certify":false,"created_at":"generated_created_at_null","expires_at":"generated_expires_at_null","raw_key":"generated_raw_key_null","revoked":false}';

    /**
     * @param ?array<Emails> $emails
     * @param ?array<mixed>  $subkeys
     */
    public function __construct(public ?int $id, #[MapFrom('primary_key_id')] public ?int $primaryKeyId, #[MapFrom('key_id')] public ?string $keyId, #[MapFrom('public_key')] public ?string $publicKey, #[CastListToType(Schema\GpgKey\Subkeys\Emails::class)] public ?array $emails, public ?array $subkeys, #[MapFrom('can_sign')] public ?bool $canSign, #[MapFrom('can_encrypt_comms')] public ?bool $canEncryptComms, #[MapFrom('can_encrypt_storage')] public ?bool $canEncryptStorage, #[MapFrom('can_certify')] public ?bool $canCertify, #[MapFrom('created_at')] public ?string $createdAt, #[MapFrom('expires_at')] public ?string $expiresAt, #[MapFrom('raw_key')] public ?string $rawKey, public ?bool $revoked)
    {
    }
}
