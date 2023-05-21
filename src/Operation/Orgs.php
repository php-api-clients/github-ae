<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operation;

use ApiClients\Client\GitHubAE\Hydrators;
use ApiClients\Client\GitHubAE\Operator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;
use React\Promise\PromiseInterface;

use function array_key_exists;

final class Orgs
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function list(int $since, int $perPage): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\List_::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\List_::class] = new Operator\Orgs\List_($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Organizations());
        }

        return $this->operator[Operator\Orgs\List_::class]->call($since, $perPage);
    }

    public function get(string $org): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\Get::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\Get::class] = new Operator\Orgs\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org());
        }

        return $this->operator[Operator\Orgs\Get::class]->call($org);
    }

    public function update(string $org, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\Update::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\Update::class] = new Operator\Orgs\Update($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org());
        }

        return $this->operator[Operator\Orgs\Update::class]->call($org, $params);
    }

    public function getAuditLog(string $org, string $phrase, string $after, string $before, string $order, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\GetAuditLog::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\GetAuditLog::class] = new Operator\Orgs\GetAuditLog($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀AuditLog());
        }

        return $this->operator[Operator\Orgs\GetAuditLog::class]->call($org, $phrase, $after, $before, $order, $perPage, $page);
    }

    public function listWebhooks(string $org, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\ListWebhooks::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ListWebhooks::class] = new Operator\Orgs\ListWebhooks($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks());
        }

        return $this->operator[Operator\Orgs\ListWebhooks::class]->call($org, $perPage, $page);
    }

    public function createWebhook(string $org, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\CreateWebhook::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\CreateWebhook::class] = new Operator\Orgs\CreateWebhook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks());
        }

        return $this->operator[Operator\Orgs\CreateWebhook::class]->call($org, $params);
    }

    public function getWebhook(string $org, int $hookId): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\GetWebhook::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\GetWebhook::class] = new Operator\Orgs\GetWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId());
        }

        return $this->operator[Operator\Orgs\GetWebhook::class]->call($org, $hookId);
    }

    public function deleteWebhook(string $org, int $hookId): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\DeleteWebhook::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\DeleteWebhook::class] = new Operator\Orgs\DeleteWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId());
        }

        return $this->operator[Operator\Orgs\DeleteWebhook::class]->call($org, $hookId);
    }

    public function updateWebhook(string $org, int $hookId, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\UpdateWebhook::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\UpdateWebhook::class] = new Operator\Orgs\UpdateWebhook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId());
        }

        return $this->operator[Operator\Orgs\UpdateWebhook::class]->call($org, $hookId, $params);
    }

    public function getWebhookConfigForOrg(string $org, int $hookId): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\GetWebhookConfigForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\GetWebhookConfigForOrg::class] = new Operator\Orgs\GetWebhookConfigForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Config());
        }

        return $this->operator[Operator\Orgs\GetWebhookConfigForOrg::class]->call($org, $hookId);
    }

    public function updateWebhookConfigForOrg(string $org, int $hookId, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\UpdateWebhookConfigForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\UpdateWebhookConfigForOrg::class] = new Operator\Orgs\UpdateWebhookConfigForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Config());
        }

        return $this->operator[Operator\Orgs\UpdateWebhookConfigForOrg::class]->call($org, $hookId, $params);
    }

    public function listWebhookDeliveries(string $org, int $hookId, string $cursor, bool $redelivery, int $perPage): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\ListWebhookDeliveries::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ListWebhookDeliveries::class] = new Operator\Orgs\ListWebhookDeliveries($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries());
        }

        return $this->operator[Operator\Orgs\ListWebhookDeliveries::class]->call($org, $hookId, $cursor, $redelivery, $perPage);
    }

    public function getWebhookDelivery(string $org, int $hookId, int $deliveryId): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\GetWebhookDelivery::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\GetWebhookDelivery::class] = new Operator\Orgs\GetWebhookDelivery($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId());
        }

        return $this->operator[Operator\Orgs\GetWebhookDelivery::class]->call($org, $hookId, $deliveryId);
    }

    public function redeliverWebhookDelivery(string $org, int $hookId, int $deliveryId): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\RedeliverWebhookDelivery::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\RedeliverWebhookDelivery::class] = new Operator\Orgs\RedeliverWebhookDelivery($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId🌀Attempts());
        }

        return $this->operator[Operator\Orgs\RedeliverWebhookDelivery::class]->call($org, $hookId, $deliveryId);
    }

    public function pingWebhook(string $org, int $hookId): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\PingWebhook::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\PingWebhook::class] = new Operator\Orgs\PingWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Pings());
        }

        return $this->operator[Operator\Orgs\PingWebhook::class]->call($org, $hookId);
    }

    public function listAppInstallations(string $org, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\ListAppInstallations::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ListAppInstallations::class] = new Operator\Orgs\ListAppInstallations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Installations());
        }

        return $this->operator[Operator\Orgs\ListAppInstallations::class]->call($org, $perPage, $page);
    }

    public function listMembers(string $org, string $filter, string $role, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\ListMembers::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ListMembers::class] = new Operator\Orgs\ListMembers($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Members());
        }

        return $this->operator[Operator\Orgs\ListMembers::class]->call($org, $filter, $role, $perPage, $page);
    }

    public function checkMembershipForUser(string $org, string $username): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\CheckMembershipForUser::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\CheckMembershipForUser::class] = new Operator\Orgs\CheckMembershipForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username());
        }

        return $this->operator[Operator\Orgs\CheckMembershipForUser::class]->call($org, $username);
    }

    public function removeMember(string $org, string $username): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\RemoveMember::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\RemoveMember::class] = new Operator\Orgs\RemoveMember($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username());
        }

        return $this->operator[Operator\Orgs\RemoveMember::class]->call($org, $username);
    }

    public function getMembershipForUser(string $org, string $username): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\GetMembershipForUser::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\GetMembershipForUser::class] = new Operator\Orgs\GetMembershipForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Memberships🌀Username());
        }

        return $this->operator[Operator\Orgs\GetMembershipForUser::class]->call($org, $username);
    }

    public function setMembershipForUser(string $org, string $username, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\SetMembershipForUser::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\SetMembershipForUser::class] = new Operator\Orgs\SetMembershipForUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Memberships🌀Username());
        }

        return $this->operator[Operator\Orgs\SetMembershipForUser::class]->call($org, $username, $params);
    }

    public function removeMembershipForUser(string $org, string $username): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\RemoveMembershipForUser::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\RemoveMembershipForUser::class] = new Operator\Orgs\RemoveMembershipForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Memberships🌀Username());
        }

        return $this->operator[Operator\Orgs\RemoveMembershipForUser::class]->call($org, $username);
    }

    public function listOutsideCollaborators(string $org, string $filter, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\ListOutsideCollaborators::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ListOutsideCollaborators::class] = new Operator\Orgs\ListOutsideCollaborators($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OutsideCollaborators());
        }

        return $this->operator[Operator\Orgs\ListOutsideCollaborators::class]->call($org, $filter, $perPage, $page);
    }

    public function convertMemberToOutsideCollaborator(string $org, string $username, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\ConvertMemberToOutsideCollaborator::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ConvertMemberToOutsideCollaborator::class] = new Operator\Orgs\ConvertMemberToOutsideCollaborator($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OutsideCollaborators🌀Username());
        }

        return $this->operator[Operator\Orgs\ConvertMemberToOutsideCollaborator::class]->call($org, $username, $params);
    }

    public function removeOutsideCollaborator(string $org, string $username): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\RemoveOutsideCollaborator::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\RemoveOutsideCollaborator::class] = new Operator\Orgs\RemoveOutsideCollaborator($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OutsideCollaborators🌀Username());
        }

        return $this->operator[Operator\Orgs\RemoveOutsideCollaborator::class]->call($org, $username);
    }

    public function listMembershipsForAuthenticatedUser(string $state, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\ListMembershipsForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ListMembershipsForAuthenticatedUser::class] = new Operator\Orgs\ListMembershipsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Memberships🌀Orgs());
        }

        return $this->operator[Operator\Orgs\ListMembershipsForAuthenticatedUser::class]->call($state, $perPage, $page);
    }

    public function getMembershipForAuthenticatedUser(string $org): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\GetMembershipForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\GetMembershipForAuthenticatedUser::class] = new Operator\Orgs\GetMembershipForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Memberships🌀Orgs🌀Org());
        }

        return $this->operator[Operator\Orgs\GetMembershipForAuthenticatedUser::class]->call($org);
    }

    public function updateMembershipForAuthenticatedUser(string $org, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\UpdateMembershipForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\UpdateMembershipForAuthenticatedUser::class] = new Operator\Orgs\UpdateMembershipForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Memberships🌀Orgs🌀Org());
        }

        return $this->operator[Operator\Orgs\UpdateMembershipForAuthenticatedUser::class]->call($org, $params);
    }

    public function listForAuthenticatedUser(int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\ListForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ListForAuthenticatedUser::class] = new Operator\Orgs\ListForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Orgs());
        }

        return $this->operator[Operator\Orgs\ListForAuthenticatedUser::class]->call($perPage, $page);
    }

    public function listForUser(string $username, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\ListForUser::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ListForUser::class] = new Operator\Orgs\ListForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Orgs());
        }

        return $this->operator[Operator\Orgs\ListForUser::class]->call($username, $perPage, $page);
    }
}
