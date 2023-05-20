<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Apps;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema\HookDelivery;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetWebhookDelivery
{
    public const OPERATION_ID    = 'apps/get-webhook-delivery';
    public const OPERATION_MATCH = 'GET /app/hook/deliveries/{delivery_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/app/hook/deliveries/{delivery_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\App\Hook\Deliveries\DeliveryId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<HookDelivery>
     **/
    public function call(int $deliveryId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Apps\GetWebhookDelivery($this->responseSchemaValidator, $this->hydrator, $deliveryId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): HookDelivery {
            return $operation->createResponse($response);
        });
    }
}
