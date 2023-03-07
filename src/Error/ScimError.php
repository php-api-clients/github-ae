<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Error;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final class ScimError extends \Error
{
    public function __construct(public Schema\ScimError $error)
    {
    }
}
