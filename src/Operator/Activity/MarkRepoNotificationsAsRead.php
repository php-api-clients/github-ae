<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Activity;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema\Operations\Activity\MarkRepoNotificationsAsRead\Response\ApplicationJson\Accepted\Application\Json;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class MarkRepoNotificationsAsRead
{
    public const OPERATION_ID    = 'activity/mark-repo-notifications-as-read';
    public const OPERATION_MATCH = 'PUT /repos/{owner}/{repo}/notifications';
    private const METHOD         = 'PUT';
    private const PATH           = '/repos/{owner}/{repo}/notifications';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Notifications $hydrator)
    {
    }

    /** @return PromiseInterface<(Json|array)> **/
    public function call(string $owner, string $repo, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Activity\MarkRepoNotificationsAsRead($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Json|array {
            return $operation->createResponse($response);
        });
    }
}
