<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\EnterpriseAdmin;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetAuditLog
{
    public const OPERATION_ID    = 'enterprise-admin/get-audit-log';
    public const OPERATION_MATCH = 'GET /enterprises/{enterprise}/audit-log';
    private const METHOD         = 'GET';
    private const PATH           = '/enterprises/{enterprise}/audit-log';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Enterprises\Enterprise\AuditLog $hydrator)
    {
    }

    /** @return Observable<Schema\AuditLogEvent> */
    public function call(string $enterprise, string $phrase, string $after, string $before, string $order, int $page = 1, int $perPage = 30): iterable
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\EnterpriseAdmin\GetAuditLog($this->responseSchemaValidator, $this->hydrator, $enterprise, $phrase, $after, $before, $order, $page, $perPage);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
