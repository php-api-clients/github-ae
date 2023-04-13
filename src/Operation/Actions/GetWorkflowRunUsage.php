<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Operation\Actions;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final class GetWorkflowRunUsage
{
    public const OPERATION_ID = 'actions/get-workflow-run-usage';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/actions/runs/{run_id}/timing';
    private const METHOD = 'GET';
    private const PATH = '/repos/{owner}/{repo}/actions/runs/{run_id}/timing';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The unique identifier of the workflow run.**/
    private int $runId;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Timing $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Timing $hydrator, string $owner, string $repo, int $runId)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->runId = $runId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{run_id}'), array($this->owner, $this->repo, $this->runId), self::PATH));
    }
    /**
     * @return Schema\WorkflowRunUsage
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\WorkflowRunUsage
    {
        $code = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response
                    **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\WorkflowRunUsage::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\WorkflowRunUsage::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
