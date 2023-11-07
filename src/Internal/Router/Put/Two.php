<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Router\Put;

use ApiClients\Client\GitHubAE\Internal\Routers;
use ApiClients\Client\GitHubAE\Schema\Operations\Activity\MarkNotificationsAsRead\Response\ApplicationJson\Accepted;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Two
{
    public function __construct(private Routers $routers)
    {
    }

    public function call(string $call, array $params, array $pathChunks): Accepted|WithoutBody
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'notifications') {
                if ($call === 'PUT /notifications') {
                    return $this->routers->internal🔀Router🔀Put🔀Activity()->markNotificationsAsRead($params);
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
