<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\CodesOfConduct;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema\CodeOfConduct;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetConductCode
{
    public const OPERATION_ID    = 'codes-of-conduct/get-conduct-code';
    public const OPERATION_MATCH = 'GET /codes_of_conduct/{key}';
    private const METHOD         = 'GET';
    private const PATH           = '/codes_of_conduct/{key}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\CodesOfConduct\Key $hydrator)
    {
    }

    /**
     * @return PromiseInterface<(CodeOfConduct|array)>
     **/
    public function call(string $key): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\CodesOfConduct\GetConductCode($this->responseSchemaValidator, $this->hydrator, $key);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): CodeOfConduct|array {
            return $operation->createResponse($response);
        });
    }
}
