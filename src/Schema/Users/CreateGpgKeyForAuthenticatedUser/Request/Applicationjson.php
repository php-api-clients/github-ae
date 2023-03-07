<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Users\CreateGpgKeyForAuthenticatedUser\Request;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["armored_public_key"],"type":"object","properties":{"armored_public_key":{"type":"string","description":"A GPG key in ASCII-armored format."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"armored_public_key":"generated_armored_public_key"}';
    /**
     * armored_public_key: A GPG key in ASCII-armored format.
     */
    public function __construct(public ?string $armored_public_key)
    {
    }
}
