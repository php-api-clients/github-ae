<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final class RemoveSelfHostedRunnerFromGroupForEnterprise
{
    public const OPERATION_ID = 'enterprise-admin/remove-self-hosted-runner-from-group-for-enterprise';
    public const OPERATION_MATCH = 'DELETE /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/runners/{runner_id}';
    private const METHOD = 'DELETE';
    private const PATH = '/enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/runners/{runner_id}';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    private string $enterprise;
    /**Unique identifier of the self-hosted runner group.**/
    private int $runnerGroupId;
    /**Unique identifier of the self-hosted runner.**/
    private int $runnerId;
    public function __construct(string $enterprise, int $runnerGroupId, int $runnerId)
    {
        $this->enterprise = $enterprise;
        $this->runnerGroupId = $runnerGroupId;
        $this->runnerId = $runnerId;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{enterprise}', '{runner_group_id}', '{runner_id}'), array($this->enterprise, $this->runnerGroupId, $this->runnerId), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
