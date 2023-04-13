<?php

declare (strict_types=1);
namespace ApiClients\Tests\Client\GitHubAE\Operation\Issues;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final class ListForRepoTest extends \WyriHaximus\AsyncTestUtilities\AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_200_responseContentType_application_json()
    {
        $response = new \React\Http\Message\Response(200, array('Content-Type' => 'application/json'), '[' . (Schema\Issue::SCHEMA_EXAMPLE_DATA . ']'));
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated_null/generated_null/issues?milestone=generated_null&assignee=generated_null&creator=generated_null&mentioned=generated_null&labels=generated_null&since=1970-01-01T00:00:00+00:00&state=generated_null&sort=generated_null&direction=generated_null&per_page=13&page=13', \Prophecy\Argument::type('array'), \Prophecy\Argument::any())->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHubAE\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHubAE\Operation\Issues\ListForRepo::OPERATION_MATCH, (static function (array $data) : array {
            $data['owner'] = 'generated_null';
            $data['repo'] = 'generated_null';
            $data['milestone'] = 'generated_null';
            $data['assignee'] = 'generated_null';
            $data['creator'] = 'generated_null';
            $data['mentioned'] = 'generated_null';
            $data['labels'] = 'generated_null';
            $data['since'] = '1970-01-01T00:00:00+00:00';
            $data['state'] = 'generated_null';
            $data['sort'] = 'generated_null';
            $data['direction'] = 'generated_null';
            $data['per_page'] = 13;
            $data['page'] = 13;
            return $data;
        })(array()));
    }
    /**
     * @test
     */
    public function httpCode_301_responseContentType_application_json()
    {
        $response = new \React\Http\Message\Response(301, array('Content-Type' => 'application/json'), Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated_null/generated_null/issues?milestone=generated_null&assignee=generated_null&creator=generated_null&mentioned=generated_null&labels=generated_null&since=1970-01-01T00:00:00+00:00&state=generated_null&sort=generated_null&direction=generated_null&per_page=13&page=13', \Prophecy\Argument::type('array'), \Prophecy\Argument::any())->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHubAE\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHubAE\Operation\Issues\ListForRepo::OPERATION_MATCH, (static function (array $data) : array {
            $data['owner'] = 'generated_null';
            $data['repo'] = 'generated_null';
            $data['milestone'] = 'generated_null';
            $data['assignee'] = 'generated_null';
            $data['creator'] = 'generated_null';
            $data['mentioned'] = 'generated_null';
            $data['labels'] = 'generated_null';
            $data['since'] = '1970-01-01T00:00:00+00:00';
            $data['state'] = 'generated_null';
            $data['sort'] = 'generated_null';
            $data['direction'] = 'generated_null';
            $data['per_page'] = 13;
            $data['page'] = 13;
            return $data;
        })(array()));
    }
    /**
     * @test
     */
    public function httpCode_422_responseContentType_application_json()
    {
        self::expectException(ErrorSchemas\ValidationError::class);
        $response = new \React\Http\Message\Response(422, array('Content-Type' => 'application/json'), Schema\ValidationError::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated_null/generated_null/issues?milestone=generated_null&assignee=generated_null&creator=generated_null&mentioned=generated_null&labels=generated_null&since=1970-01-01T00:00:00+00:00&state=generated_null&sort=generated_null&direction=generated_null&per_page=13&page=13', \Prophecy\Argument::type('array'), \Prophecy\Argument::any())->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHubAE\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHubAE\Operation\Issues\ListForRepo::OPERATION_MATCH, (static function (array $data) : array {
            $data['owner'] = 'generated_null';
            $data['repo'] = 'generated_null';
            $data['milestone'] = 'generated_null';
            $data['assignee'] = 'generated_null';
            $data['creator'] = 'generated_null';
            $data['mentioned'] = 'generated_null';
            $data['labels'] = 'generated_null';
            $data['since'] = '1970-01-01T00:00:00+00:00';
            $data['state'] = 'generated_null';
            $data['sort'] = 'generated_null';
            $data['direction'] = 'generated_null';
            $data['per_page'] = 13;
            $data['page'] = 13;
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
        $browser->request('GET', '/repos/generated_null/generated_null/issues?milestone=generated_null&assignee=generated_null&creator=generated_null&mentioned=generated_null&labels=generated_null&since=1970-01-01T00:00:00+00:00&state=generated_null&sort=generated_null&direction=generated_null&per_page=13&page=13', \Prophecy\Argument::type('array'), \Prophecy\Argument::any())->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHubAE\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHubAE\Operation\Issues\ListForRepo::OPERATION_MATCH, (static function (array $data) : array {
            $data['owner'] = 'generated_null';
            $data['repo'] = 'generated_null';
            $data['milestone'] = 'generated_null';
            $data['assignee'] = 'generated_null';
            $data['creator'] = 'generated_null';
            $data['mentioned'] = 'generated_null';
            $data['labels'] = 'generated_null';
            $data['since'] = '1970-01-01T00:00:00+00:00';
            $data['state'] = 'generated_null';
            $data['sort'] = 'generated_null';
            $data['direction'] = 'generated_null';
            $data['per_page'] = 13;
            $data['page'] = 13;
            return $data;
        })(array()));
    }
}
