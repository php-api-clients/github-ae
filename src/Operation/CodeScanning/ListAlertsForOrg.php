<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Operation\CodeScanning;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final class ListAlertsForOrg
{
    public const OPERATION_ID = 'code-scanning/list-alerts-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/code-scanning/alerts';
    private const METHOD = 'GET';
    private const PATH = '/orgs/{org}/code-scanning/alerts';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The name of a code scanning tool. Only results by this tool will be listed. You can specify the tool by using either `tool_name` or `tool_guid`, but not both.**/
    private string $toolName;
    /**The GUID of a code scanning tool. Only results by this tool will be listed. Note that some code scanning tools may not include a GUID in their analysis data. You can specify the tool by using either `tool_guid` or `tool_name`, but not both.**/
    private string|null $toolGuid;
    /**A cursor, as given in the [Link header](https://docs.github.com/github-ae@latest/rest/guides/using-pagination-in-the-rest-api#using-link-headers). If specified, the query only searches for results before this cursor.**/
    private string $before;
    /**A cursor, as given in the [Link header](https://docs.github.com/github-ae@latest/rest/guides/using-pagination-in-the-rest-api#using-link-headers). If specified, the query only searches for results after this cursor.**/
    private string $after;
    /**If specified, only code scanning alerts with this state will be returned.**/
    private string $state;
    /**Page number of the results to fetch.**/
    private int $page;
    /**The number of results per page (max 100).**/
    private int $perPage;
    /**The direction to sort the results by.**/
    private string $direction;
    /**The property by which to sort the results.**/
    private string $sort;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\CbOrgRcb\CodeScanning\Alerts $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\CbOrgRcb\CodeScanning\Alerts $hydrator, string $org, string $toolName, string|null $toolGuid, string $before, string $after, string $state, int $page = 1, int $perPage = 30, string $direction = 'desc', string $sort = 'created')
    {
        $this->org = $org;
        $this->toolName = $toolName;
        $this->toolGuid = $toolGuid;
        $this->before = $before;
        $this->after = $after;
        $this->state = $state;
        $this->page = $page;
        $this->perPage = $perPage;
        $this->direction = $direction;
        $this->sort = $sort;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{tool_name}', '{tool_guid}', '{before}', '{after}', '{state}', '{page}', '{per_page}', '{direction}', '{sort}'), array($this->org, $this->toolName, $this->toolGuid, $this->before, $this->after, $this->state, $this->page, $this->perPage, $this->direction, $this->sort), self::PATH . '?tool_name={tool_name}&tool_guid={tool_guid}&before={before}&after={after}&state={state}&page={page}&per_page={per_page}&direction={direction}&sort={sort}'));
    }
    /**
     * @return \Rx\Observable<Schema\CodeScanningOrganizationAlertItems>
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Rx\Observable
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
                        foreach ($body as $bodyItem) {
                            $this->responseSchemaValidator->validate($bodyItem, \cebe\openapi\Reader::readFromJson(Schema\CodeScanningOrganizationAlertItems::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        }
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : Schema\CodeScanningOrganizationAlertItems {
                            return $this->hydrator->hydrateObject(Schema\CodeScanningOrganizationAlertItems::class, $body);
                        });
                    /**
                     * Resource not found
                    **/
                    case 404:
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                    /**
                     * Service unavailable
                    **/
                    case 503:
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503(503, $this->hydrator->hydrateObject(Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503::class, $body));
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
