<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Operation\Repos;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function json_encode;
use function str_replace;

final class CreateDeploymentBranchPolicy
{
    public const OPERATION_ID    = 'repos/create-deployment-branch-policy';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies';
    private const METHOD         = 'POST';
    private const PATH           = '/repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The name of the environment. **/
    private string $environmentName;

    public function __construct(private readonly SchemaValidator $requestSchemaValidator, private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\DeploymentBranchPolicies $hydrator, string $owner, string $repo, string $environmentName)
    {
        $this->owner           = $owner;
        $this->repo            = $repo;
        $this->environmentName = $environmentName;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\DeploymentBranchPolicyNamePatternWithType::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{environment_name}'], [$this->owner, $this->repo, $this->environmentName], self::PATH), ['Content-Type' => 'application/json'], json_encode($data));
    }

    /** @return Schema\DeploymentBranchPolicy|array{code: int} */
    public function createResponse(ResponseInterface $response): Schema\DeploymentBranchPolicy|array
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response
                     **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\DeploymentBranchPolicy::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\DeploymentBranchPolicy::class, $body);
                }

                break;
        }

        switch ($code) {
            /**
             * Not Found or `deployment_branch_policy.custom_branch_policies` property for the environment is set to false
             **/
            case 404:
                return ['code' => 404];
            /**
             * Response if the same branch name pattern already exists
             **/

            case 303:
                return ['code' => 303];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
