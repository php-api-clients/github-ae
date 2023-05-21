<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class DeleteImpersonationOAuthToken
{
    public const OPERATION_ID    = 'enterprise-admin/delete-impersonation-o-auth-token';
    public const OPERATION_MATCH = 'DELETE /admin/users/{username}/authorizations';
    private const METHOD         = 'DELETE';
    private const PATH           = '/admin/users/{username}/authorizations';
    /**The handle for the GitHub user account. **/
    private string $username;

    public function __construct(string $username)
    {
        $this->username = $username;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{username}'], [$this->username], self::PATH));
    }

    /**
     * @return array{code: int}
     */
    public function createResponse(ResponseInterface $response): array
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Response
             **/
            case 204:
                return ['code' => 204];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
