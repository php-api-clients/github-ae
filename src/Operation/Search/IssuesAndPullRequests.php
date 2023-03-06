<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Operation\Search;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final class IssuesAndPullRequests
{
    public const OPERATION_ID = 'search/issues-and-pull-requests';
    public const OPERATION_MATCH = 'GET /search/issues';
    private const METHOD = 'GET';
    private const PATH = '/search/issues';
    /**The query contains one or more search keywords and qualifiers. Qualifiers allow you to limit your search to specific areas of GitHub AE. The REST API supports the same qualifiers as the web interface for GitHub AE. To learn more about the format of the query, see [Constructing a search query](https://docs.github.com/github-ae@latest/rest/reference/search#constructing-a-search-query). See "[Searching issues and pull requests](https://docs.github.com/github-ae@latest/search-github/searching-on-github/searching-issues-and-pull-requests)" for a detailed list of qualifiers.**/
    private string $q;
    /**Sorts the results of your query by the number of `comments`, `reactions`, `reactions-+1`, `reactions--1`, `reactions-smile`, `reactions-thinking_face`, `reactions-heart`, `reactions-tada`, or `interactions`. You can also sort results by how recently the items were `created` or `updated`, Default: [best match](https://docs.github.com/github-ae@latest/rest/reference/search#ranking-search-results)**/
    private string $sort;
    /**Determines whether the first search result returned is the highest number of matches (`desc`) or lowest number of matches (`asc`). This parameter is ignored unless you provide `sort`.**/
    private string $order;
    /**The number of results per page (max 100).**/
    private int $per_page;
    /**Page number of the results to fetch.**/
    private int $page;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Search\Issues $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Search\Issues $hydrator, string $q, string $sort, string $order = 'desc', int $per_page = 30, int $page = 1)
    {
        $this->q = $q;
        $this->sort = $sort;
        $this->order = $order;
        $this->per_page = $per_page;
        $this->page = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{q}', '{sort}', '{order}', '{per_page}', '{page}'), array($this->q, $this->sort, $this->order, $this->per_page, $this->page), self::PATH . '?q={q}&sort={sort}&order={order}&per_page={per_page}&page={page}'));
    }
    /**
     * @return Schema\Operation\Search\IssuesAndPullRequests\Response\Applicationjson\H200|Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503|Schema\ValidationError|Schema\BasicError
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\Operation\Search\IssuesAndPullRequests\Response\Applicationjson\H200|Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503|Schema\ValidationError|Schema\BasicError
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Forbidden**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Operation\Search\IssuesAndPullRequests\Response\Applicationjson\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\Operation\Search\IssuesAndPullRequests\Response\Applicationjson\H200::class, $body);
                }
                break;
            /**Forbidden**/
            case 503:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503::class, $body);
                }
                break;
            /**Forbidden**/
            case 422:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\ValidationError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\ValidationError::class, $body);
                }
                break;
            /**Forbidden**/
            case 403:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\BasicError::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
