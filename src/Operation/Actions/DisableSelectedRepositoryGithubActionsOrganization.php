<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Operation\Actions;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final class DisableSelectedRepositoryGithubActionsOrganization
{
    public const OPERATION_ID = 'actions/disable-selected-repository-github-actions-organization';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/actions/permissions/repositories/{repository_id}';
    private const METHOD = 'DELETE';
    private const PATH = '/orgs/{org}/actions/permissions/repositories/{repository_id}';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The unique identifier of the repository.**/
    private int $repositoryId;
    public function __construct(string $org, int $repositoryId)
    {
        $this->org = $org;
        $this->repositoryId = $repositoryId;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{repository_id}'), array($this->org, $this->repositoryId), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
