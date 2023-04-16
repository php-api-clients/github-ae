<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Schema\AliasAbstract;

abstract readonly class Abstract0fce66a671ecc1b1c3d362cad6e970b8
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"email":{"type":"string"},"verified":{"type":"boolean"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"email":"generated_email_null","verified":false}';

    public function __construct(public ?string $email, public ?bool $verified)
    {
    }
}
