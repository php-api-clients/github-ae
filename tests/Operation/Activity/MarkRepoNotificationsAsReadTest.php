<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHubAE\Operation\Activity;

use ApiClients\Client\GitHubAE\Client;
use ApiClients\Client\GitHubAE\Operation\Activity\MarkRepoNotificationsAsRead;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function React\Promise\resolve;

final class MarkRepoNotificationsAsReadTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_202_requestContentType_application_json_responseContentType_application_json(): void
    {
        $response = new Response(202, ['Content-Type' => 'application/json'], Schema\Operation\Activity\MarkRepoNotificationsAsRead\Response\Applicationjson\H202::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/repos/generated_null/generated_null/notifications', Argument::type('array'), Schema\Activity\MarkRepoNotificationsAsRead\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(MarkRepoNotificationsAsRead::OPERATION_MATCH, (static function (array $data): array {
            $data['owner'] = 'generated_null';
            $data['repo']  = 'generated_null';

            return $data;
        })(json_decode(Schema\Activity\MarkRepoNotificationsAsRead\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }
}
