<?php

declare (strict_types=1);
namespace ApiClients\Tests\Client\GitHubAE\Operation\Markdown;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final class RenderRawTest extends \WyriHaximus\AsyncTestUtilities\AsyncTestCase
{
    /**
     * @test
     */
    public function t200t6ffaad09c30216c38c8888e6d6757d2f()
    {
        $response = new \React\Http\Message\Response(200, array('Content-Type' => 'text/html'), Schema\Operation\Markdown\RenderRaw\Response\Texthtml\H200::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/markdown/raw', \Prophecy\Argument::type('array'), Schema\Markdown\RenderRaw\Request\Textplain::SCHEMA_EXAMPLE_DATA, Schema\Markdown\RenderRaw\Request\TextxMarkdown::SCHEMA_EXAMPLE_DATA)->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHubAE\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHubAE\Operation\Markdown\RenderRaw::OPERATION_MATCH, (static function (array $data) : array {
            return $data;
        })(json_decode(Schema\Markdown\RenderRaw\Request\Textplain::SCHEMA_EXAMPLE_DATA, true)), (static function (array $data) : array {
            return $data;
        })(json_decode(Schema\Markdown\RenderRaw\Request\TextxMarkdown::SCHEMA_EXAMPLE_DATA, true)));
    }
}
