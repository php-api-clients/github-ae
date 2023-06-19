<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operation\Teams;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class RemoveRepoLegacy
{
    public const OPERATION_ID    = 'teams/remove-repo-legacy';
    public const OPERATION_MATCH = 'DELETE /teams/{team_id}/repos/{owner}/{repo}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/teams/{team_id}/repos/{owner}/{repo}';
    /**The unique identifier of the team. **/
    private int $teamId;
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;

    public function __construct(int $teamId, string $owner, string $repo)
    {
        $this->teamId = $teamId;
        $this->owner  = $owner;
        $this->repo   = $repo;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{team_id}', '{owner}', '{repo}'], [$this->teamId, $this->owner, $this->repo], self::PATH));
    }

    /** @return array{code: int} */
    public function createResponse(ResponseInterface $response): array
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Response
             **/
            case 204:
                return ['code' => 204];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
