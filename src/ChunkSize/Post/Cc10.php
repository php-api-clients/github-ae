<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\ChunkSize\Post;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
use ApiClients\Client\GitHubAE\Router;
use ApiClients\Client\GitHubAE\ChunkSize;
final class Cc10
{
    private array $router = array();
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\GitHubAE\Hydrators $hydrators;
    private readonly \React\Http\Browser $browser;
    private readonly \ApiClients\Contracts\HTTP\Headers\AuthenticationInterface $authentication;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\GitHubAE\Hydrators $hydrators, \React\Http\Browser $browser, \ApiClients\Contracts\HTTP\Headers\AuthenticationInterface $authentication)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrators = $hydrators;
        $this->browser = $browser;
        $this->authentication = $authentication;
    }
    public function call(string $call, array $params, array $pathChunks)
    {
        if ($pathChunks[0] == '') {
            if ($pathChunks[1] == 'orgs') {
                if ($pathChunks[2] == '{org}') {
                    if ($pathChunks[3] == 'teams') {
                        if ($pathChunks[4] == '{team_slug}') {
                            if ($pathChunks[5] == 'discussions') {
                                if ($pathChunks[6] == '{discussion_number}') {
                                    if ($pathChunks[7] == 'comments') {
                                        if ($pathChunks[8] == '{comment_number}') {
                                            if ($pathChunks[9] == 'reactions') {
                                                if ($call == 'POST /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}/reactions') {
                                                    if (\array_key_exists(Router\Post\Reactions::class, $this->router) == false) {
                                                        $this->router[Router\Post\Reactions::class] = new Router\Post\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                                    }
                                                    return $this->router[Router\Post\Reactions::class]->createForTeamDiscussionCommentInOrg($params);
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        throw new \InvalidArgumentException();
    }
}
