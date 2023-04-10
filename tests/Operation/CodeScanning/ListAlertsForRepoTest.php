<?php

declare (strict_types=1);
namespace ApiClients\Tests\Client\GitHubAE\Operation\CodeScanning;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final class ListAlertsForRepoTest extends \WyriHaximus\AsyncTestUtilities\AsyncTestCase
{
    /**
     * @test
     */
    public function t200td1f5a9d446c6cec2cf63545e8163e585()
    {
        $response = new \React\Http\Message\Response(200, array('Content-Type' => 'application/json'), '[' . (Schema\CodeScanningAlertItems::SCHEMA_EXAMPLE_DATA . ']'));
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated_null/generated_null/code-scanning/alerts?tool_name=generated_null&tool_guid=&ref=generated_null&state=generated_null&page=13&per_page=13&direction=generated_null&sort=generated_null', \Prophecy\Argument::type('array'), '')->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHubAE\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHubAE\Operation\CodeScanning\ListAlertsForRepo::OPERATION_MATCH, array('owner' => 'generated_null', 'repo' => 'generated_null', 'tool_name' => 'generated_null', 'tool_guid' => null, 'ref' => 'generated_null', 'state' => 'generated_null', 'page' => 13, 'per_page' => 13, 'direction' => 'generated_null', 'sort' => 'generated_null'));
    }
    /**
     * @test
     */
    public function t403td1f5a9d446c6cec2cf63545e8163e585()
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new \React\Http\Message\Response(403, array('Content-Type' => 'application/json'), Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated_null/generated_null/code-scanning/alerts?tool_name=generated_null&tool_guid=&ref=generated_null&state=generated_null&page=13&per_page=13&direction=generated_null&sort=generated_null', \Prophecy\Argument::type('array'), '')->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHubAE\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHubAE\Operation\CodeScanning\ListAlertsForRepo::OPERATION_MATCH, array('owner' => 'generated_null', 'repo' => 'generated_null', 'tool_name' => 'generated_null', 'tool_guid' => null, 'ref' => 'generated_null', 'state' => 'generated_null', 'page' => 13, 'per_page' => 13, 'direction' => 'generated_null', 'sort' => 'generated_null'));
    }
    /**
     * @test
     */
    public function t404td1f5a9d446c6cec2cf63545e8163e585()
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new \React\Http\Message\Response(404, array('Content-Type' => 'application/json'), Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated_null/generated_null/code-scanning/alerts?tool_name=generated_null&tool_guid=&ref=generated_null&state=generated_null&page=13&per_page=13&direction=generated_null&sort=generated_null', \Prophecy\Argument::type('array'), '')->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHubAE\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHubAE\Operation\CodeScanning\ListAlertsForRepo::OPERATION_MATCH, array('owner' => 'generated_null', 'repo' => 'generated_null', 'tool_name' => 'generated_null', 'tool_guid' => null, 'ref' => 'generated_null', 'state' => 'generated_null', 'page' => 13, 'per_page' => 13, 'direction' => 'generated_null', 'sort' => 'generated_null'));
    }
    /**
     * @test
     */
    public function t503td1f5a9d446c6cec2cf63545e8163e585()
    {
        self::expectException(ErrorSchemas\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503::class);
        $response = new \React\Http\Message\Response(503, array('Content-Type' => 'application/json'), Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated_null/generated_null/code-scanning/alerts?tool_name=generated_null&tool_guid=&ref=generated_null&state=generated_null&page=13&per_page=13&direction=generated_null&sort=generated_null', \Prophecy\Argument::type('array'), '')->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHubAE\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHubAE\Operation\CodeScanning\ListAlertsForRepo::OPERATION_MATCH, array('owner' => 'generated_null', 'repo' => 'generated_null', 'tool_name' => 'generated_null', 'tool_guid' => null, 'ref' => 'generated_null', 'state' => 'generated_null', 'page' => 13, 'per_page' => 13, 'direction' => 'generated_null', 'sort' => 'generated_null'));
    }
}
