<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHubAE\Internal\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubAE\Client;
use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function json_encode;
use function React\Promise\resolve;

/** @covers \ApiClients\Client\GitHubAE\Internal\Operation\EnterpriseAdmin\DeletePreReceiveEnvironment */
final class DeletePreReceiveEnvironmentTest extends AsyncTestCase
{
    /** @test */
    public function call_httpCode_422_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\Operations\EnterpriseAdmin\DeletePreReceiveEnvironment\Response\ApplicationJson\UnprocessableEntity::class);
        $response = new Response(422, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\Operations\EnterpriseAdmin\DeletePreReceiveEnvironment\Response\ApplicationJson\UnprocessableEntity::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('DELETE', '/admin/pre-receive-environments/26', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\EnterpriseAdmin\DeletePreReceiveEnvironment::OPERATION_MATCH, (static function (array $data): array {
            $data['pre_receive_environment_id'] = 26;

            return $data;
        })([]));
    }

    /** @test */
    public function operations_httpCode_422_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\Operations\EnterpriseAdmin\DeletePreReceiveEnvironment\Response\ApplicationJson\UnprocessableEntity::class);
        $response = new Response(422, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\Operations\EnterpriseAdmin\DeletePreReceiveEnvironment\Response\ApplicationJson\UnprocessableEntity::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('DELETE', '/admin/pre-receive-environments/26', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->enterpriseAdmin()->deletePreReceiveEnvironment(26);
    }

    /** @test */
    public function call_httpCode_204_empty(): void
    {
        $response = new Response(204, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('DELETE', '/admin/pre-receive-environments/26', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\EnterpriseAdmin\DeletePreReceiveEnvironment::OPERATION_MATCH, (static function (array $data): array {
            $data['pre_receive_environment_id'] = 26;

            return $data;
        })([]));
    }

    /** @test */
    public function operations_httpCode_204_empty(): void
    {
        $response = new Response(204, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('DELETE', '/admin/pre-receive-environments/26', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->enterpriseAdmin()->deletePreReceiveEnvironment(26);
        self::assertArrayHasKey('code', $result);
        self::assertSame(204, $result['code']);
    }
}
