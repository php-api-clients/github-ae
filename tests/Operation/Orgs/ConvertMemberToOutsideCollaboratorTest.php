<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHubAE\Operation\Orgs;

use ApiClients\Client\GitHubAE\Client;
use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
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

final class ConvertMemberToOutsideCollaboratorTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function call_httpCode_202_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        $response = new Response(202, ['Content-Type' => 'application/json'], Schema\Operations\Gists\CheckIsStarred\Response\ApplicationJson\NotFound::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/orgs/generated/outside_collaborators/generated', Argument::type('array'), Schema\Orgs\ConvertMemberToOutsideCollaborator\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\Orgs\ConvertMemberToOutsideCollaborator::OPERATION_MATCH, (static function (array $data): array {
            $data['org']      = 'generated';
            $data['username'] = 'generated';

            return $data;
        })(json_decode(Schema\Orgs\ConvertMemberToOutsideCollaborator\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /**
     * @test
     */
    public function operations_httpCode_202_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        $response = new Response(202, ['Content-Type' => 'application/json'], Schema\Operations\Gists\CheckIsStarred\Response\ApplicationJson\NotFound::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/orgs/generated/outside_collaborators/generated', Argument::type('array'), Schema\Orgs\ConvertMemberToOutsideCollaborator\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = await($client->operations()->orgs()->convertMemberToOutsideCollaborator('generated', 'generated', json_decode(Schema\Orgs\ConvertMemberToOutsideCollaborator\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /**
     * @test
     */
    public function call_httpCode_404_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(404, ['Content-Type' => 'application/json'], Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/orgs/generated/outside_collaborators/generated', Argument::type('array'), Schema\Orgs\ConvertMemberToOutsideCollaborator\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\Orgs\ConvertMemberToOutsideCollaborator::OPERATION_MATCH, (static function (array $data): array {
            $data['org']      = 'generated';
            $data['username'] = 'generated';

            return $data;
        })(json_decode(Schema\Orgs\ConvertMemberToOutsideCollaborator\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /**
     * @test
     */
    public function operations_httpCode_404_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(404, ['Content-Type' => 'application/json'], Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/orgs/generated/outside_collaborators/generated', Argument::type('array'), Schema\Orgs\ConvertMemberToOutsideCollaborator\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = await($client->operations()->orgs()->convertMemberToOutsideCollaborator('generated', 'generated', json_decode(Schema\Orgs\ConvertMemberToOutsideCollaborator\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /**
     * @test
     */
    public function call_httpCode_204_requestContentType_application_json_empty(): void
    {
        $response = new Response(204, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/orgs/generated/outside_collaborators/generated', Argument::type('array'), Schema\Orgs\ConvertMemberToOutsideCollaborator\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\Orgs\ConvertMemberToOutsideCollaborator::OPERATION_MATCH, (static function (array $data): array {
            $data['org']      = 'generated';
            $data['username'] = 'generated';

            return $data;
        })(json_decode(Schema\Orgs\ConvertMemberToOutsideCollaborator\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /**
     * @test
     */
    public function operations_httpCode_204_requestContentType_application_json_empty(): void
    {
        $response = new Response(204, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/orgs/generated/outside_collaborators/generated', Argument::type('array'), Schema\Orgs\ConvertMemberToOutsideCollaborator\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = await($client->operations()->orgs()->convertMemberToOutsideCollaborator('generated', 'generated', json_decode(Schema\Orgs\ConvertMemberToOutsideCollaborator\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
        self::assertArrayHasKey('code', $result);
        self::assertSame(204, $result['code']);
    }

    /**
     * @test
     */
    public function call_httpCode_403_requestContentType_application_json_empty(): void
    {
        $response = new Response(403, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/orgs/generated/outside_collaborators/generated', Argument::type('array'), Schema\Orgs\ConvertMemberToOutsideCollaborator\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\Orgs\ConvertMemberToOutsideCollaborator::OPERATION_MATCH, (static function (array $data): array {
            $data['org']      = 'generated';
            $data['username'] = 'generated';

            return $data;
        })(json_decode(Schema\Orgs\ConvertMemberToOutsideCollaborator\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /**
     * @test
     */
    public function operations_httpCode_403_requestContentType_application_json_empty(): void
    {
        $response = new Response(403, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/orgs/generated/outside_collaborators/generated', Argument::type('array'), Schema\Orgs\ConvertMemberToOutsideCollaborator\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = await($client->operations()->orgs()->convertMemberToOutsideCollaborator('generated', 'generated', json_decode(Schema\Orgs\ConvertMemberToOutsideCollaborator\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
        self::assertArrayHasKey('code', $result);
        self::assertSame(403, $result['code']);
    }
}
