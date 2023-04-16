<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHubAE\Operation\Teams;

use ApiClients\Client\GitHubAE\Client;
use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Operation\Teams\AddOrUpdateProjectPermissionsLegacy;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function React\Promise\resolve;

final class AddOrUpdateProjectPermissionsLegacyTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_403_requestContentType_application_json_responseContentType_application_json(): void
    {
        self::expectException(ErrorSchemas\Operation\Teams\AddOrUpdateProjectPermissionsLegacy\Response\Applicationjson\H403::class);
        $response = new Response(403, ['Content-Type' => 'application/json'], Schema\Operation\Teams\AddOrUpdateProjectPermissionsLegacy\Response\Applicationjson\H403::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/teams/13/projects/13', Argument::type('array'), Schema\Teams\AddOrUpdateProjectPermissionsLegacy\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(AddOrUpdateProjectPermissionsLegacy::OPERATION_MATCH, (static function (array $data): array {
            $data['team_id']    = 13;
            $data['project_id'] = 13;

            return $data;
        })(json_decode(Schema\Teams\AddOrUpdateProjectPermissionsLegacy\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /**
     * @test
     */
    public function httpCode_404_requestContentType_application_json_responseContentType_application_json(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(404, ['Content-Type' => 'application/json'], Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/teams/13/projects/13', Argument::type('array'), Schema\Teams\AddOrUpdateProjectPermissionsLegacy\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(AddOrUpdateProjectPermissionsLegacy::OPERATION_MATCH, (static function (array $data): array {
            $data['team_id']    = 13;
            $data['project_id'] = 13;

            return $data;
        })(json_decode(Schema\Teams\AddOrUpdateProjectPermissionsLegacy\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /**
     * @test
     */
    public function httpCode_422_requestContentType_application_json_responseContentType_application_json(): void
    {
        self::expectException(ErrorSchemas\ValidationError::class);
        $response = new Response(422, ['Content-Type' => 'application/json'], Schema\ValidationError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/teams/13/projects/13', Argument::type('array'), Schema\Teams\AddOrUpdateProjectPermissionsLegacy\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(AddOrUpdateProjectPermissionsLegacy::OPERATION_MATCH, (static function (array $data): array {
            $data['team_id']    = 13;
            $data['project_id'] = 13;

            return $data;
        })(json_decode(Schema\Teams\AddOrUpdateProjectPermissionsLegacy\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }
}
