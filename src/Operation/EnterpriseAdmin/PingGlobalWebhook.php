<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\EnterpriseAdmin;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class PingGlobalWebhook
{
    public const OPERATION_ID = 'enterprise-admin/ping-global-webhook';
    public const OPERATION_MATCH = 'POST /admin/hooks/{hook_id}/pings';
    private const METHOD = 'POST';
    private const PATH = '/admin/hooks/{hook_id}/pings';
    /**The unique identifier of the hook.**/
    private int $hookId;
    public function __construct(int $hookId)
    {
        $this->hookId = $hookId;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{hook_id}'), array($this->hookId), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
