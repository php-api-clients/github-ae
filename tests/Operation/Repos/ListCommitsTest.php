<?php

declare (strict_types=1);
namespace ApiClients\Tests\Client\GitHubAE\Operation\Repos;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final class ListCommitsTest extends \WyriHaximus\AsyncTestUtilities\AsyncTestCase
{
    /**
     * @test
     */
    public function t200td1f5a9d446c6cec2cf63545e8163e585()
    {
        $response = new \React\Http\Message\Response(200, array('Content-Type' => 'application/json'), '[' . (Schema\Commit::SCHEMA_EXAMPLE_DATA . ']'));
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated_null/generated_null/commits?sha=generated_null&path=generated_null&author=generated_null&committer=generated_null&since=1970-01-01T00:00:00+00:00&until=1970-01-01T00:00:00+00:00&per_page=13&page=13', \Prophecy\Argument::type('array'), '')->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHubAE\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHubAE\Operation\Repos\ListCommits::OPERATION_MATCH, array('owner' => 'generated_null', 'repo' => 'generated_null', 'sha' => 'generated_null', 'path' => 'generated_null', 'author' => 'generated_null', 'committer' => 'generated_null', 'since' => '1970-01-01T00:00:00+00:00', 'until' => '1970-01-01T00:00:00+00:00', 'per_page' => 13, 'page' => 13));
    }
    /**
     * @test
     */
    public function t500td1f5a9d446c6cec2cf63545e8163e585()
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new \React\Http\Message\Response(500, array('Content-Type' => 'application/json'), Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated_null/generated_null/commits?sha=generated_null&path=generated_null&author=generated_null&committer=generated_null&since=1970-01-01T00:00:00+00:00&until=1970-01-01T00:00:00+00:00&per_page=13&page=13', \Prophecy\Argument::type('array'), '')->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHubAE\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHubAE\Operation\Repos\ListCommits::OPERATION_MATCH, array('owner' => 'generated_null', 'repo' => 'generated_null', 'sha' => 'generated_null', 'path' => 'generated_null', 'author' => 'generated_null', 'committer' => 'generated_null', 'since' => '1970-01-01T00:00:00+00:00', 'until' => '1970-01-01T00:00:00+00:00', 'per_page' => 13, 'page' => 13));
    }
    /**
     * @test
     */
    public function t400td1f5a9d446c6cec2cf63545e8163e585()
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new \React\Http\Message\Response(400, array('Content-Type' => 'application/json'), Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated_null/generated_null/commits?sha=generated_null&path=generated_null&author=generated_null&committer=generated_null&since=1970-01-01T00:00:00+00:00&until=1970-01-01T00:00:00+00:00&per_page=13&page=13', \Prophecy\Argument::type('array'), '')->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHubAE\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHubAE\Operation\Repos\ListCommits::OPERATION_MATCH, array('owner' => 'generated_null', 'repo' => 'generated_null', 'sha' => 'generated_null', 'path' => 'generated_null', 'author' => 'generated_null', 'committer' => 'generated_null', 'since' => '1970-01-01T00:00:00+00:00', 'until' => '1970-01-01T00:00:00+00:00', 'per_page' => 13, 'page' => 13));
    }
    /**
     * @test
     */
    public function t400te721a100ec95fd3067a83a0920ca7a5e()
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new \React\Http\Message\Response(400, array('Content-Type' => 'application/scim+json'), Schema\ScimError::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated_null/generated_null/commits?sha=generated_null&path=generated_null&author=generated_null&committer=generated_null&since=1970-01-01T00:00:00+00:00&until=1970-01-01T00:00:00+00:00&per_page=13&page=13', \Prophecy\Argument::type('array'), '')->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHubAE\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHubAE\Operation\Repos\ListCommits::OPERATION_MATCH, array('owner' => 'generated_null', 'repo' => 'generated_null', 'sha' => 'generated_null', 'path' => 'generated_null', 'author' => 'generated_null', 'committer' => 'generated_null', 'since' => '1970-01-01T00:00:00+00:00', 'until' => '1970-01-01T00:00:00+00:00', 'per_page' => 13, 'page' => 13));
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
        $browser->request('GET', '/repos/generated_null/generated_null/commits?sha=generated_null&path=generated_null&author=generated_null&committer=generated_null&since=1970-01-01T00:00:00+00:00&until=1970-01-01T00:00:00+00:00&per_page=13&page=13', \Prophecy\Argument::type('array'), '')->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHubAE\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHubAE\Operation\Repos\ListCommits::OPERATION_MATCH, array('owner' => 'generated_null', 'repo' => 'generated_null', 'sha' => 'generated_null', 'path' => 'generated_null', 'author' => 'generated_null', 'committer' => 'generated_null', 'since' => '1970-01-01T00:00:00+00:00', 'until' => '1970-01-01T00:00:00+00:00', 'per_page' => 13, 'page' => 13));
    }
    /**
     * @test
     */
    public function t409td1f5a9d446c6cec2cf63545e8163e585()
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new \React\Http\Message\Response(409, array('Content-Type' => 'application/json'), Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated_null/generated_null/commits?sha=generated_null&path=generated_null&author=generated_null&committer=generated_null&since=1970-01-01T00:00:00+00:00&until=1970-01-01T00:00:00+00:00&per_page=13&page=13', \Prophecy\Argument::type('array'), '')->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHubAE\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHubAE\Operation\Repos\ListCommits::OPERATION_MATCH, array('owner' => 'generated_null', 'repo' => 'generated_null', 'sha' => 'generated_null', 'path' => 'generated_null', 'author' => 'generated_null', 'committer' => 'generated_null', 'since' => '1970-01-01T00:00:00+00:00', 'until' => '1970-01-01T00:00:00+00:00', 'per_page' => 13, 'page' => 13));
    }
}
