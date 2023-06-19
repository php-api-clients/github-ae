<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Schema\AliasAbstract\TietD3470C77\TietF10F907C\Tiet22620E8B;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Tiet8EB96E8E
{
    public const SCHEMA_JSON         = '{"required":["id","key","url","title","verified","created_at","read_only"],"type":"object","properties":{"added_by":{"type":["string","null"]},"created_at":{"type":"string"},"id":{"type":"integer"},"key":{"type":"string"},"last_used":{"type":["string","null"]},"read_only":{"type":"boolean"},"title":{"type":"string"},"url":{"type":"string","format":"uri"},"verified":{"type":"boolean"}},"description":"The [`deploy key`](https:\\/\\/docs.github.com\\/github-ae@latest\\/rest\\/reference\\/deployments#get-a-deploy-key) resource."}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The [`deploy key`](https://docs.github.com/github-ae@latest/rest/reference/deployments#get-a-deploy-key) resource.';
    public const SCHEMA_EXAMPLE_DATA = '{"added_by":"generated","created_at":"generated","id":2,"key":"generated","last_used":"generated","read_only":false,"title":"generated","url":"https:\\/\\/example.com\\/","verified":false}';

    public function __construct(#[MapFrom('added_by')]
    public string|null $addedBy, #[MapFrom('created_at')]
    public string $createdAt, public int $id, public string $key, #[MapFrom('last_used')]
    public string|null $lastUsed, #[MapFrom('read_only')]
    public bool $readOnly, public string $title, public string $url, public bool $verified,)
    {
    }
}
