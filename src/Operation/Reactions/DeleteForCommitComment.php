<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Operation\Reactions;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final class DeleteForCommitComment
{
    public const OPERATION_ID = 'reactions/delete-for-commit-comment';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/comments/{comment_id}/reactions/{reaction_id}';
    private const METHOD = 'DELETE';
    private const PATH = '/repos/{owner}/{repo}/comments/{comment_id}/reactions/{reaction_id}';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The unique identifier of the comment.**/
    private int $comment_id;
    /**The unique identifier of the reaction.**/
    private int $reaction_id;
    public function __construct(string $owner, string $repo, int $comment_id, int $reaction_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->comment_id = $comment_id;
        $this->reaction_id = $reaction_id;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{comment_id}', '{reaction_id}'), array($this->owner, $this->repo, $this->comment_id, $this->reaction_id), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
