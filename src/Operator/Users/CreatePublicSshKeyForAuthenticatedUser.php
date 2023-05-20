<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Users;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema\Key;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class CreatePublicSshKeyForAuthenticatedUser
{
    public const OPERATION_ID    = 'users/create-public-ssh-key-for-authenticated-user';
    public const OPERATION_MATCH = 'POST /user/keys';
    private const METHOD         = 'POST';
    private const PATH           = '/user/keys';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\User\Keys $hydrator)
    {
    }

    /**
     * @return PromiseInterface<(Key|array)>
     **/
    public function call(array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Users\CreatePublicSshKeyForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Key|array {
            return $operation->createResponse($response);
        });
    }
}
