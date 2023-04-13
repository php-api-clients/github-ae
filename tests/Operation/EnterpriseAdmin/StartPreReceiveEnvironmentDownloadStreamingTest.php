<?php

declare (strict_types=1);
namespace ApiClients\Tests\Client\GitHubAE\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final class StartPreReceiveEnvironmentDownloadStreamingTest extends \WyriHaximus\AsyncTestUtilities\AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_202_responseContentType_application_json()
    {
        $response = new \React\Http\Message\Response(202, array('Content-Type' => 'application/json'), Schema\PreReceiveEnvironmentDownloadStatus::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/admin/pre-receive-environments/13/downloads', \Prophecy\Argument::type('array'), \Prophecy\Argument::any())->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHubAE\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHubAE\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming::OPERATION_MATCH, (static function (array $data) : array {
            $data['pre_receive_environment_id'] = 13;
            return $data;
        })(array()));
    }
    /**
     * @test
     */
    public function httpCode_422_responseContentType_application_json()
    {
        self::expectException(ErrorSchemas\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming\Response\Applicationjson\H422::class);
        $response = new \React\Http\Message\Response(422, array('Content-Type' => 'application/json'), Schema\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming\Response\Applicationjson\H422::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/admin/pre-receive-environments/13/downloads', \Prophecy\Argument::type('array'), \Prophecy\Argument::any())->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHubAE\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHubAE\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming::OPERATION_MATCH, (static function (array $data) : array {
            $data['pre_receive_environment_id'] = 13;
            return $data;
        })(array()));
    }
}
