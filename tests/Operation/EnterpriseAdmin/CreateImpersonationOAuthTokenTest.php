<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHubAE\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubAE\Client;
use ApiClients\Client\GitHubAE\Operation\EnterpriseAdmin\CreateImpersonationOAuthToken;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function React\Promise\resolve;

final class CreateImpersonationOAuthTokenTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_201_requestContentType_application_json_responseContentType_application_json(): void
    {
        $response = new Response(201, ['Content-Type' => 'application/json'], Schema\Authorization::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/admin/users/generated_null/authorizations', Argument::type('array'), Schema\EnterpriseAdmin\CreateImpersonationOAuthToken\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(CreateImpersonationOAuthToken::OPERATION_MATCH, (static function (array $data): array {
            $data['username'] = 'generated_null';

            return $data;
        })(json_decode(Schema\EnterpriseAdmin\CreateImpersonationOAuthToken\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /**
     * @test
     */
    public function httpCode_200_requestContentType_application_json_responseContentType_application_json(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], Schema\Authorization::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/admin/users/generated_null/authorizations', Argument::type('array'), Schema\EnterpriseAdmin\CreateImpersonationOAuthToken\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(CreateImpersonationOAuthToken::OPERATION_MATCH, (static function (array $data): array {
            $data['username'] = 'generated_null';

            return $data;
        })(json_decode(Schema\EnterpriseAdmin\CreateImpersonationOAuthToken\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }
}
