<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Operation\Actions;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final class DisableWorkflow
{
    public const OPERATION_ID = 'actions/disable-workflow';
    public const OPERATION_MATCH = 'PUT /repos/{owner}/{repo}/actions/workflows/{workflow_id}/disable';
    private const METHOD = 'PUT';
    private const PATH = '/repos/{owner}/{repo}/actions/workflows/{workflow_id}/disable';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The ID of the workflow. You can also pass the workflow file name as a string.**/
    private $workflowId;
    public function __construct(string $owner, string $repo, $workflowId)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->workflowId = $workflowId;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{workflow_id}'), array($this->owner, $this->repo, $this->workflowId), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
