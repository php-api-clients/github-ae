<?php

declare (strict_types=1);
namespace ApiClients\Tests\Client\GitHubAE\Operation\Projects;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final class DeleteTest extends \WyriHaximus\AsyncTestUtilities\AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_403_responseContentType_application_json()
    {
        self::expectException(ErrorSchemas\Operation\Projects\Delete\Response\Applicationjson\H403::class);
        $response = new \React\Http\Message\Response(403, array('Content-Type' => 'application/json'), Schema\Operation\Projects\Delete\Response\Applicationjson\H403::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('DELETE', '/projects/13', \Prophecy\Argument::type('array'), \Prophecy\Argument::any())->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHubAE\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHubAE\Operation\Projects\Delete::OPERATION_MATCH, (static function (array $data) : array {
            $data['project_id'] = 13;
            return $data;
        })(array()));
    }
    /**
     * @test
     */
    public function httpCode_401_responseContentType_application_json()
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new \React\Http\Message\Response(401, array('Content-Type' => 'application/json'), Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('DELETE', '/projects/13', \Prophecy\Argument::type('array'), \Prophecy\Argument::any())->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHubAE\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHubAE\Operation\Projects\Delete::OPERATION_MATCH, (static function (array $data) : array {
            $data['project_id'] = 13;
            return $data;
        })(array()));
    }
    /**
     * @test
     */
    public function httpCode_410_responseContentType_application_json()
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new \React\Http\Message\Response(410, array('Content-Type' => 'application/json'), Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('DELETE', '/projects/13', \Prophecy\Argument::type('array'), \Prophecy\Argument::any())->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHubAE\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHubAE\Operation\Projects\Delete::OPERATION_MATCH, (static function (array $data) : array {
            $data['project_id'] = 13;
            return $data;
        })(array()));
    }
    /**
     * @test
     */
    public function httpCode_404_responseContentType_application_json()
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new \React\Http\Message\Response(404, array('Content-Type' => 'application/json'), Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('DELETE', '/projects/13', \Prophecy\Argument::type('array'), \Prophecy\Argument::any())->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHubAE\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHubAE\Operation\Projects\Delete::OPERATION_MATCH, (static function (array $data) : array {
            $data['project_id'] = 13;
            return $data;
        })(array()));
    }
}
