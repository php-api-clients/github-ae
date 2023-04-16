<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Schema\AliasAbstract;

abstract readonly class Abstract21cc71140adfe32b7431f2079176dee1
{
    public const SCHEMA_JSON         = '{"required":["name","email"],"type":["object","null"],"properties":{"name":{"type":"string"},"email":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name_null","email":"generated_email_null"}';

    public function __construct(public string $name, public string $email)
    {
    }
}
