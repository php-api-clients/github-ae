<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Gists;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema\GistComment;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class UpdateComment
{
    public const OPERATION_ID    = 'gists/update-comment';
    public const OPERATION_MATCH = 'PATCH /gists/{gist_id}/comments/{comment_id}';
    private const METHOD         = 'PATCH';
    private const PATH           = '/gists/{gist_id}/comments/{comment_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Gists\GistId\Comments\CommentId $hydrator)
    {
    }

    /** @return */
    public function call(string $gistId, int $commentId, array $params): GistComment|array
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Gists\UpdateComment($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $gistId, $commentId);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): GistComment|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
