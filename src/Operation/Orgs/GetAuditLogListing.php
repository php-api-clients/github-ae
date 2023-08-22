<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operation\Orgs;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;
use Rx\Observable;
use Rx\Scheduler\ImmediateScheduler;
use Throwable;

use function explode;
use function json_decode;
use function str_replace;

final class GetAuditLogListing
{
    public const OPERATION_ID    = 'orgs/get-audit-log';
    public const OPERATION_MATCH = 'LIST /orgs/{org}/audit-log';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/audit-log';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**A search phrase. For more information, see [Searching the audit log](https://docs.github.com/github-ae@latest/github/setting-up-and-managing-organizations-and-teams/reviewing-the-audit-log-for-your-organization#searching-the-audit-log). **/
    private string $phrase;
    /**A cursor, as given in the [Link header](https://docs.github.com/github-ae@latest/rest/guides/using-pagination-in-the-rest-api#using-link-headers). If specified, the query only searches for events after this cursor. **/
    private string $after;
    /**A cursor, as given in the [Link header](https://docs.github.com/github-ae@latest/rest/guides/using-pagination-in-the-rest-api#using-link-headers). If specified, the query only searches for events before this cursor. **/
    private string $before;
    /**The order of audit log events. To list newest events first, specify `desc`. To list oldest events first, specify `asc`.

    The default is `desc`. **/
    private string $order;
    /**The number of results per page (max 100). **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Hydrator\Operation\Orgs\Org\AuditLog $hydrator, string $org, string $phrase, string $after, string $before, string $order, int $perPage = 30, int $page = 1)
    {
        $this->org     = $org;
        $this->phrase  = $phrase;
        $this->after   = $after;
        $this->before  = $before;
        $this->order   = $order;
        $this->perPage = $perPage;
        $this->page    = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{phrase}', '{after}', '{before}', '{order}', '{per_page}', '{page}'], [$this->org, $this->phrase, $this->after, $this->before, $this->order, $this->perPage, $this->page], self::PATH . '?phrase={phrase}&after={after}&before={before}&order={order}&per_page={per_page}&page={page}'));
    }

    /** @return Observable<Schema\AuditLogEvent> */
    public function createResponse(ResponseInterface $response): Observable
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\AuditLogEvent {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\AuditLogEvent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\AuditLogEvent::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaaa;
                            }

                            items_application_json_two_hundred_aaaaa:
                            throw $error;
                        });
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
