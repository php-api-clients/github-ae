<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Operation\Actions;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final class DownloadJobLogsForWorkflowRunStreaming
{
    public const OPERATION_ID = 'actions/download-job-logs-for-workflow-run';
    public const OPERATION_MATCH = 'STREAM /repos/{owner}/{repo}/actions/jobs/{job_id}/logs';
    private const METHOD = 'GET';
    private const PATH = '/repos/{owner}/{repo}/actions/jobs/{job_id}/logs';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The unique identifier of the job.**/
    private int $job_id;
    private readonly \React\Http\Browser $browser;
    public function __construct(\React\Http\Browser $browser, string $owner, string $repo, int $job_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->job_id = $job_id;
        $this->browser = $browser;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{job_id}'), array($this->owner, $this->repo, $this->job_id), self::PATH));
    }
    /**
     * @return \Rx\Observable<string>
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Rx\Observable
    {
        switch ($response->getStatusCode()) {
            /**Response**/
            case 302:
                $stream = new \Rx\Subject\Subject();
                $this->browser->requestStreaming('GET', $response->getHeaderLine('location'))->then(static function (\Psr\Http\Message\ResponseInterface $response) use($stream) : void {
                    $body = $response->getBody();
                    if (!($body instanceof \Psr\Http\Message\StreamInterface && $body instanceof \React\Stream\ReadableStreamInterface)) {
                        $stream->onError(new \RuntimeException());
                        return;
                    }
                    $body->on('data', static function (string $data) use($stream) : void {
                        $stream->onNext($data);
                    });
                    $body->on('close', static function () use($stream) : void {
                        $stream->onCompleted();
                    });
                    $body->on('error', static function (\Throwable $error) use($stream) : void {
                        $stream->onError($error);
                    });
                });
                return $stream;
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
