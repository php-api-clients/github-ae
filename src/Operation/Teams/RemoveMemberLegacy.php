<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Operation\Teams;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final class RemoveMemberLegacy
{
    public const OPERATION_ID = 'teams/remove-member-legacy';
    public const OPERATION_MATCH = 'DELETE /teams/{team_id}/members/{username}';
    private const METHOD = 'DELETE';
    private const PATH = '/teams/{team_id}/members/{username}';
    /**The unique identifier of the team.**/
    private int $team_id;
    /**The handle for the GitHub user account.**/
    private string $username;
    public function __construct(int $team_id, string $username)
    {
        $this->team_id = $team_id;
        $this->username = $username;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{team_id}', '{username}'), array($this->team_id, $this->username), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
