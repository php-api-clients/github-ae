<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHubAE\Operation\Activity;

use ApiClients\Client\GitHubAE\Client;
use ApiClients\Client\GitHubAE\Operation\Activity\ListRepoNotificationsForAuthenticatedUser;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function React\Promise\resolve;

final class ListRepoNotificationsForAuthenticatedUserTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_200_responseContentType_application_json(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], '[' . Schema\Thread::SCHEMA_EXAMPLE_DATA . ']');
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated_null/generated_null/notifications?since=1970-01-01T00:00:00+00:00&before=1970-01-01T00:00:00+00:00&all=&participating=&per_page=13&page=13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ListRepoNotificationsForAuthenticatedUser::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']         = 'generated_null';
            $data['repo']          = 'generated_null';
            $data['since']         = '1970-01-01T00:00:00+00:00';
            $data['before']        = '1970-01-01T00:00:00+00:00';
            $data['all']           = false;
            $data['participating'] = false;
            $data['per_page']      = 13;
            $data['page']          = 13;

            return $data;
        })([]));
    }
}
