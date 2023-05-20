<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Users;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema\GpgKey;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class CreateGpgKeyForAuthenticatedUser
{
    public const OPERATION_ID    = 'users/create-gpg-key-for-authenticated-user';
    public const OPERATION_MATCH = 'POST /user/gpg_keys';
    private const METHOD         = 'POST';
    private const PATH           = '/user/gpg_keys';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\User\GpgKeys $hydrator)
    {
    }

    /**
     * @return PromiseInterface<(GpgKey|array)>
     **/
    public function call(array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Users\CreateGpgKeyForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): GpgKey|array {
            return $operation->createResponse($response);
        });
    }
}
