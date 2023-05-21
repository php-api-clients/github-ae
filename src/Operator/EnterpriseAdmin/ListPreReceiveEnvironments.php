<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\EnterpriseAdmin;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListPreReceiveEnvironments
{
    public const OPERATION_ID    = 'enterprise-admin/list-pre-receive-environments';
    public const OPERATION_MATCH = 'GET /admin/pre-receive-environments';
    private const METHOD         = 'GET';
    private const PATH           = '/admin/pre-receive-environments';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /**
     * @return PromiseInterface<ResponseInterface>
     **/
    public function call(int $perPage = 30, int $page = 1, string $direction = 'desc', string $sort = 'created'): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\EnterpriseAdmin\ListPreReceiveEnvironments($perPage, $page, $direction, $sort);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ResponseInterface {
            return $operation->createResponse($response);
        });
    }
}
