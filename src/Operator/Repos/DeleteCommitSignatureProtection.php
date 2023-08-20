<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Repos;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class DeleteCommitSignatureProtection
{
    public const OPERATION_ID    = 'repos/delete-commit-signature-protection';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/required_signatures';
    private const METHOD         = 'DELETE';
    private const PATH           = '/repos/{owner}/{repo}/branches/{branch}/protection/required_signatures';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredSignatures $hydrator)
    {
    }

    /** @return array{code: int} */
    public function call(string $owner, string $repo, string $branch): array
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Repos\DeleteCommitSignatureProtection($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $branch);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
