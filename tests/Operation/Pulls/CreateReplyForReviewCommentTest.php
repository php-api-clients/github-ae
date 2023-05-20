<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHubAE\Operation\Pulls;

use ApiClients\Client\GitHubAE\Client;
use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function React\Async\await;
use function React\Promise\resolve;

final class CreateReplyForReviewCommentTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function call_httpCode_201_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        $response = new Response(201, ['Content-Type' => 'application/json'], Schema\PullRequestReviewComment::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated/generated/pulls/11/comments/10/replies', Argument::type('array'), Schema\Pulls\CreateReplyForReviewComment\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\Pulls\CreateReplyForReviewComment::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']       = 'generated';
            $data['repo']        = 'generated';
            $data['pull_number'] = 11;
            $data['comment_id']  = 10;

            return $data;
        })(json_decode(Schema\Pulls\CreateReplyForReviewComment\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /**
     * @test
     */
    public function operations_httpCode_201_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        $response = new Response(201, ['Content-Type' => 'application/json'], Schema\PullRequestReviewComment::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated/generated/pulls/11/comments/10/replies', Argument::type('array'), Schema\Pulls\CreateReplyForReviewComment\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = await($client->operations()->pulls()->createReplyForReviewComment('generated', 'generated', 11, 10, json_decode(Schema\Pulls\CreateReplyForReviewComment\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /**
     * @test
     */
    public function call_httpCode_404_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(404, ['Content-Type' => 'application/json'], Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated/generated/pulls/11/comments/10/replies', Argument::type('array'), Schema\Pulls\CreateReplyForReviewComment\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\Pulls\CreateReplyForReviewComment::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']       = 'generated';
            $data['repo']        = 'generated';
            $data['pull_number'] = 11;
            $data['comment_id']  = 10;

            return $data;
        })(json_decode(Schema\Pulls\CreateReplyForReviewComment\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /**
     * @test
     */
    public function operations_httpCode_404_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(404, ['Content-Type' => 'application/json'], Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated/generated/pulls/11/comments/10/replies', Argument::type('array'), Schema\Pulls\CreateReplyForReviewComment\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = await($client->operations()->pulls()->createReplyForReviewComment('generated', 'generated', 11, 10, json_decode(Schema\Pulls\CreateReplyForReviewComment\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }
}
