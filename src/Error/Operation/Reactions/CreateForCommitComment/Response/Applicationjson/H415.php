<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Error\Operation\Reactions\CreateForCommitComment\Response\Applicationjson;

use ApiClients\Client\GitHubAE\Schema;
use Error;

final class H415 extends Error
{
    public function __construct(public int $status, public Schema\Operation\Reactions\CreateForCommitComment\Response\Applicationjson\H415 $error)
    {
    }
}
