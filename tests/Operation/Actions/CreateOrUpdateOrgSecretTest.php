<?php

declare (strict_types=1);
namespace ApiClients\Tests\Client\GitHubAE\Operation\Actions;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final class CreateOrUpdateOrgSecretTest extends \WyriHaximus\AsyncTestUtilities\AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_201_requestContentType_application_json_responseContentType_application_json()
    {
        $response = new \React\Http\Message\Response(201, array('Content-Type' => 'application/json'), Schema\EmptyObject::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/orgs/generated_null/actions/secrets/generated_null', \Prophecy\Argument::type('array'), Schema\Actions\CreateOrUpdateOrgSecret\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHubAE\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHubAE\Operation\Actions\CreateOrUpdateOrgSecret::OPERATION_MATCH, (static function (array $data) : array {
            $data['org'] = 'generated_null';
            $data['secret_name'] = 'generated_null';
            return $data;
        })(json_decode(Schema\Actions\CreateOrUpdateOrgSecret\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }
}
