<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Error\Operation\Projects\MoveCard\Response\Applicationjson;

use ApiClients\Client\GitHubAE\Schema;
use Error;

final class H503 extends Error
{
    public function __construct(public int $status, public Schema\Operation\Projects\MoveCard\Response\Applicationjson\H503 $error)
    {
    }
}
