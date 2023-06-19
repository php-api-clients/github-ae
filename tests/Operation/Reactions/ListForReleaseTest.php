<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHubAE\Operation\Reactions;

use ApiClients\Client\GitHubAE\Client;
use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function React\Async\await;
use function React\Promise\resolve;

final class ListForReleaseTest extends AsyncTestCase
{
    /** @test */
    public function call_httpCode_404_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(404, ['Content-Type' => 'application/json'], Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated/generated/releases/10/reactions?content=generated&per_page=8&page=4', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\Reactions\ListForRelease::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']      = 'generated';
            $data['repo']       = 'generated';
            $data['release_id'] = 10;
            $data['content']    = 'generated';
            $data['per_page']   = 8;
            $data['page']       = 4;

            return $data;
        })([]));
    }

    /** @test */
    public function operations_httpCode_404_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(404, ['Content-Type' => 'application/json'], Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated/generated/releases/10/reactions?content=generated&per_page=8&page=4', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = await($client->operations()->reactions()->listForRelease('generated', 'generated', 10, 'generated', 8, 4));
    }

    /** @test */
    public function call_httpCode_415_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\Operations\Reactions\CreateForCommitComment\Response\ApplicationJson\UnsupportedMediaType::class);
        $response = new Response(415, ['Content-Type' => 'application/json'], Schema\Operations\Reactions\CreateForCommitComment\Response\ApplicationJson\UnsupportedMediaType::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated/generated/releases/10/reactions?content=generated&per_page=8&page=4', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\Reactions\ListForRelease::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']      = 'generated';
            $data['repo']       = 'generated';
            $data['release_id'] = 10;
            $data['content']    = 'generated';
            $data['per_page']   = 8;
            $data['page']       = 4;

            return $data;
        })([]));
    }

    /** @test */
    public function operations_httpCode_415_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\Operations\Reactions\CreateForCommitComment\Response\ApplicationJson\UnsupportedMediaType::class);
        $response = new Response(415, ['Content-Type' => 'application/json'], Schema\Operations\Reactions\CreateForCommitComment\Response\ApplicationJson\UnsupportedMediaType::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated/generated/releases/10/reactions?content=generated&per_page=8&page=4', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = await($client->operations()->reactions()->listForRelease('generated', 'generated', 10, 'generated', 8, 4));
    }
}
