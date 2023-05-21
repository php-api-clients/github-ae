<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\EnterpriseAdmin;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema\PreReceiveEnvironment;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class UpdatePreReceiveEnvironment
{
    public const OPERATION_ID    = 'enterprise-admin/update-pre-receive-environment';
    public const OPERATION_MATCH = 'PATCH /admin/pre-receive-environments/{pre_receive_environment_id}';
    private const METHOD         = 'PATCH';
    private const PATH           = '/admin/pre-receive-environments/{pre_receive_environment_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Admin\PreReceiveEnvironments\PreReceiveEnvironmentId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<PreReceiveEnvironment>
     **/
    public function call(int $preReceiveEnvironmentId, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\EnterpriseAdmin\UpdatePreReceiveEnvironment($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $preReceiveEnvironmentId);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): PreReceiveEnvironment {
            return $operation->createResponse($response);
        });
    }
}
