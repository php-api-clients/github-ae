<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHubAE\Operation\Orgs;

use ApiClients\Client\GitHubAE\Client;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function React\Async\await;
use function React\Promise\resolve;

final class UpdateWebhookConfigForOrgTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function call_httpCode_200_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], Schema\WebhookConfig::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PATCH', '/orgs/generated/hooks/7/config', Argument::type('array'), Schema\Orgs\UpdateWebhookConfigForOrg\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\Orgs\UpdateWebhookConfigForOrg::OPERATION_MATCH, (static function (array $data): array {
            $data['org']     = 'generated';
            $data['hook_id'] = 7;

            return $data;
        })(json_decode(Schema\Orgs\UpdateWebhookConfigForOrg\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /**
     * @test
     */
    public function operations_httpCode_200_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], Schema\WebhookConfig::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PATCH', '/orgs/generated/hooks/7/config', Argument::type('array'), Schema\Orgs\UpdateWebhookConfigForOrg\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = await($client->operations()->orgs()->updateWebhookConfigForOrg('generated', 7, json_decode(Schema\Orgs\UpdateWebhookConfigForOrg\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }
}
