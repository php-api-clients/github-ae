<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Users\UpdateAuthenticated\Request;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"name":{"type":"string","description":"The new name of the user.","examples":["Omar Jahandar"]},"email":{"type":"string","description":"The publicly visible email address of the user.","examples":["omar@example.com"]},"blog":{"type":"string","description":"The new blog URL of the user.","examples":["blog.example.com"]},"twitter_username":{"type":["string","null"],"description":"The new Twitter username of the user.","examples":["therealomarj"]},"company":{"type":"string","description":"The new company of the user.","examples":["Acme corporation"]},"location":{"type":"string","description":"The new location of the user.","examples":["Berlin, Germany"]},"hireable":{"type":"boolean","description":"The new hiring availability of the user."},"bio":{"type":"string","description":"The new short biography of the user."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"Omar Jahandar","email":"omar@example.com","blog":"blog.example.com","twitter_username":"therealomarj","company":"Acme corporation","location":"Berlin, Germany","hireable":false,"bio":"generated_bio"}';
    /**
     * name: The new name of the user.
     * email: The publicly visible email address of the user.
     * blog: The new blog URL of the user.
     * twitter_username: The new Twitter username of the user.
     * company: The new company of the user.
     * location: The new location of the user.
     * hireable: The new hiring availability of the user.
     * bio: The new short biography of the user.
     */
    public function __construct(public ?string $name, public ?string $email, public ?string $blog, public ?string $twitter_username, public ?string $company, public ?string $location, public ?bool $hireable, public ?string $bio)
    {
    }
}
