<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListReleaseAssets
{
    public const OPERATION_ID    = 'repos/list-release-assets';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/releases/{release_id}/assets';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/releases/{release_id}/assets';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository. The name is not case sensitive. **/
    private string $repo;
    /**The unique identifier of the release. **/
    private int $releaseId;
    /**The number of results per page (max 100). **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;

    public function __construct(string $owner, string $repo, int $releaseId, int $perPage = 30, int $page = 1)
    {
        $this->owner     = $owner;
        $this->repo      = $repo;
        $this->releaseId = $releaseId;
        $this->perPage   = $perPage;
        $this->page      = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{release_id}', '{per_page}', '{page}'], [$this->owner, $this->repo, $this->releaseId, $this->perPage, $this->page], self::PATH . '?per_page={per_page}&page={page}'));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
