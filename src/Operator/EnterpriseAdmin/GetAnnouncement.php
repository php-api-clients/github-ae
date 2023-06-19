<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\EnterpriseAdmin;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema\Announcement;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetAnnouncement
{
    public const OPERATION_ID    = 'enterprise-admin/get-announcement';
    public const OPERATION_MATCH = 'GET /enterprise/announcement';
    private const METHOD         = 'GET';
    private const PATH           = '/enterprise/announcement';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Enterprise\Announcement $hydrator)
    {
    }

    /** @return PromiseInterface<Announcement> **/
    public function call(): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\EnterpriseAdmin\GetAnnouncement($this->responseSchemaValidator, $this->hydrator);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Announcement {
            return $operation->createResponse($response);
        });
    }
}
