# [READONLY-SUBSPLIT] github-ae


![Continuous Integration](https://github.com/php-api-clients/github-ae/workflows/Continuous%20Integration/badge.svg)
[![Latest Stable Version](https://poser.pugx.org/api-clients/github-ae/v/stable.png)](https://packagist.org/packages/api-clients/github-ae)
[![Total Downloads](https://poser.pugx.org/api-clients/github-ae/downloads.png)](https://packagist.org/packages/api-clients/github-ae)
[![Code Coverage](https://scrutinizer-ci.com/g/php-api-clients/github-ae/badges/coverage.png?b==v0.1.x)](https://scrutinizer-ci.com/g/php-api-clients/github-ae/?branch=v0.1.x)
[![License](https://poser.pugx.org/api-clients/github-ae/license.png)](https://packagist.org/packages/api-clients/github-ae)

Non-Blocking first GitHub AE client, this is a read only sub split, see [`github-root`](https://github.com/php-api-clients/github-root) for the root package.

## Usage

```php
use React\Http\Browser;
use ApiClients\Client\GitHubAE\BearerToken;
use ApiClients\Client\GitHubAE\Client;

use function React\Async\async;

$client = new Client(new BearerToken('YOUR_TOKEN_HERE'), new Browser());

// The client is using react/async internally to provide a non-promise API.
// As such you're expected to use it inside a fiber, the async call here is
// added to demonstrate and documented that requirement. The rest of the
// examples assume you have already wrapped in a fiber 0 or more levels up
// in your code such as a command bus executer or your HTTP server.
async(static function () {
    // Make API calls using the call method
    $client->call('METHOD /path/to/{the}/operation', ['array' => 'with', 'paramters' => 'for', 'the' => 'operation']);
    // Make API calls using the operations objects
    $client->operations()->group()->operation(array: 'with', paramters: 'for', the: 'operation');
})();
```

## Supported operations


### meta/root

GitHub API Root

Using the `call` method:
```php
$client->call('GET /');
```

Operations method:
```php
$client->operations()->meta()->root();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/meta/meta#root-endpoint).


### enterprise-admin/list-global-webhooks

List global webhooks

Using the `call` method:
```php
$client->call('GET /admin/hooks', [
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->listGlobalWebhooks(        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/enterprise-admin#list-global-webhooks).


### enterprise-admin/create-global-webhook

Create a global webhook

Using the `call` method:
```php
$client->call('POST /admin/hooks');
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->createGlobalWebhook();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/enterprise-admin#create-a-global-webhook).


### enterprise-admin/get-global-webhook

Get a global webhook

Using the `call` method:
```php
$client->call('GET /admin/hooks/{hook_id}', [
        'hook_id' => 7,
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->getGlobalWebhook(        hook_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/enterprise-admin#get-a-global-webhook).


### enterprise-admin/delete-global-webhook

Delete a global webhook

Using the `call` method:
```php
$client->call('DELETE /admin/hooks/{hook_id}', [
        'hook_id' => 7,
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->deleteGlobalWebhook(        hook_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/enterprise-admin#delete-a-global-webhook).


### enterprise-admin/update-global-webhook

Update a global webhook

Using the `call` method:
```php
$client->call('PATCH /admin/hooks/{hook_id}', [
        'hook_id' => 7,
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->updateGlobalWebhook(        hook_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/enterprise-admin#update-a-global-webhook).


### enterprise-admin/ping-global-webhook

Ping a global webhook

Using the `call` method:
```php
$client->call('POST /admin/hooks/{hook_id}/pings', [
        'hook_id' => 7,
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->pingGlobalWebhook(        hook_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/enterprise-admin#ping-a-global-webhook).


### enterprise-admin/list-public-keys

List public keys

Using the `call` method:
```php
$client->call('GET /admin/keys', [
        'since' => 'generated',
        'per_page' => 8,
        'page' => 4,
        'direction' => 'generated',
        'sort' => 'generated',
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->listPublicKeys(        since: 'generated',
        per_page: 8,
        page: 4,
        direction: 'generated',
        sort: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/enterprise-admin#list-public-keys).


### enterprise-admin/delete-public-key

Delete a public key

Using the `call` method:
```php
$client->call('DELETE /admin/keys/{key_ids}', [
        'key_ids' => 'generated',
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->deletePublicKey(        key_ids: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/enterprise-admin#delete-a-public-key).


### enterprise-admin/create-org

Create an organization

Using the `call` method:
```php
$client->call('POST /admin/organizations');
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->createOrg();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/enterprise-admin#create-an-organization).


### enterprise-admin/update-org-name

Update an organization name

Using the `call` method:
```php
$client->call('PATCH /admin/organizations/{org}', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->updateOrgName(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/enterprise-admin#update-an-organization-name).


### enterprise-admin/list-pre-receive-environments

List pre-receive environments

Using the `call` method:
```php
$client->call('GET /admin/pre-receive-environments', [
        'per_page' => 8,
        'page' => 4,
        'direction' => 'generated',
        'sort' => 'generated',
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->listPreReceiveEnvironments(        per_page: 8,
        page: 4,
        direction: 'generated',
        sort: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/enterprise-admin#list-pre-receive-environments).


### enterprise-admin/create-pre-receive-environment

Create a pre-receive environment

Using the `call` method:
```php
$client->call('POST /admin/pre-receive-environments');
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->createPreReceiveEnvironment();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/enterprise-admin#create-a-pre-receive-environment).


### enterprise-admin/get-pre-receive-environment

Get a pre-receive environment

Using the `call` method:
```php
$client->call('GET /admin/pre-receive-environments/{pre_receive_environment_id}', [
        'pre_receive_environment_id' => 26,
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->getPreReceiveEnvironment(        pre_receive_environment_id: 26,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/enterprise-admin#get-a-pre-receive-environment).


### enterprise-admin/delete-pre-receive-environment

Delete a pre-receive environment

Using the `call` method:
```php
$client->call('DELETE /admin/pre-receive-environments/{pre_receive_environment_id}', [
        'pre_receive_environment_id' => 26,
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->deletePreReceiveEnvironment(        pre_receive_environment_id: 26,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/enterprise-admin#delete-a-pre-receive-environment).


### enterprise-admin/update-pre-receive-environment

Update a pre-receive environment

Using the `call` method:
```php
$client->call('PATCH /admin/pre-receive-environments/{pre_receive_environment_id}', [
        'pre_receive_environment_id' => 26,
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->updatePreReceiveEnvironment(        pre_receive_environment_id: 26,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/enterprise-admin#update-a-pre-receive-environment).


### enterprise-admin/start-pre-receive-environment-download

Start a pre-receive environment download

Using the `call` method:
```php
$client->call('POST /admin/pre-receive-environments/{pre_receive_environment_id}/downloads', [
        'pre_receive_environment_id' => 26,
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->startPreReceiveEnvironmentDownload(        pre_receive_environment_id: 26,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/enterprise-admin#start-a-pre-receive-environment-download).


### enterprise-admin/start-pre-receive-environment-download

Start a pre-receive environment download

Using the `call` method:
```php
$client->call('STREAM /admin/pre-receive-environments/{pre_receive_environment_id}/downloads', [
        'pre_receive_environment_id' => 26,
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->startPreReceiveEnvironmentDownloadStreaming(        pre_receive_environment_id: 26,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/enterprise-admin#start-a-pre-receive-environment-download).


### enterprise-admin/get-download-status-for-pre-receive-environment

Get the download status for a pre-receive environment

Using the `call` method:
```php
$client->call('GET /admin/pre-receive-environments/{pre_receive_environment_id}/downloads/latest', [
        'pre_receive_environment_id' => 26,
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->getDownloadStatusForPreReceiveEnvironment(        pre_receive_environment_id: 26,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/enterprise-admin#get-the-download-status-for-a-pre-receive-environment).


### enterprise-admin/get-download-status-for-pre-receive-environment

Get the download status for a pre-receive environment

Using the `call` method:
```php
$client->call('STREAM /admin/pre-receive-environments/{pre_receive_environment_id}/downloads/latest', [
        'pre_receive_environment_id' => 26,
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->getDownloadStatusForPreReceiveEnvironmentStreaming(        pre_receive_environment_id: 26,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/enterprise-admin#get-the-download-status-for-a-pre-receive-environment).


### enterprise-admin/list-personal-access-tokens

List personal access tokens

Using the `call` method:
```php
$client->call('GET /admin/tokens', [
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->listPersonalAccessTokens(        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/enterprise-admin#list-personal-access-tokens).


### enterprise-admin/delete-personal-access-token

Delete a personal access token

Using the `call` method:
```php
$client->call('DELETE /admin/tokens/{token_id}', [
        'token_id' => 8,
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->deletePersonalAccessToken(        token_id: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/enterprise-admin#delete-a-personal-access-token).


### enterprise-admin/delete-user

Delete a user

Using the `call` method:
```php
$client->call('DELETE /admin/users/{username}', [
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->deleteUser(        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/enterprise-admin#delete-a-user).


### enterprise-admin/create-impersonation-o-auth-token

Create an impersonation OAuth token

Using the `call` method:
```php
$client->call('POST /admin/users/{username}/authorizations', [
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->createImpersonationOAuthToken(        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/enterprise-admin#create-an-impersonation-oauth-token).


### enterprise-admin/delete-impersonation-o-auth-token

Delete an impersonation OAuth token

Using the `call` method:
```php
$client->call('DELETE /admin/users/{username}/authorizations', [
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->deleteImpersonationOAuthToken(        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/enterprise-admin#delete-an-impersonation-oauth-token).


### apps/get-authenticated

Get the authenticated app

Using the `call` method:
```php
$client->call('GET /app');
```

Operations method:
```php
$client->operations()->apps()->getAuthenticated();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/apps#get-the-authenticated-app).


### apps/create-from-manifest

Create a GitHub App from a manifest

Using the `call` method:
```php
$client->call('POST /app-manifests/{code}/conversions', [
        'code' => 'generated',
]);
```

Operations method:
```php
$client->operations()->apps()->createFromManifest(        code: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/apps#create-a-github-app-from-a-manifest).


### apps/get-webhook-config-for-app

Get a webhook configuration for an app

Using the `call` method:
```php
$client->call('GET /app/hook/config');
```

Operations method:
```php
$client->operations()->apps()->getWebhookConfigForApp();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/apps#get-a-webhook-configuration-for-an-app).


### apps/update-webhook-config-for-app

Update a webhook configuration for an app

Using the `call` method:
```php
$client->call('PATCH /app/hook/config');
```

Operations method:
```php
$client->operations()->apps()->updateWebhookConfigForApp();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/apps#update-a-webhook-configuration-for-an-app).


### apps/list-webhook-deliveries

List deliveries for an app webhook

Using the `call` method:
```php
$client->call('GET /app/hook/deliveries', [
        'cursor' => 'generated',
        'redelivery' => ,
        'per_page' => 8,
]);
```

Operations method:
```php
$client->operations()->apps()->listWebhookDeliveries(        cursor: 'generated',
        redelivery: ,
        per_page: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/apps#list-deliveries-for-an-app-webhook).


### apps/get-webhook-delivery

Get a delivery for an app webhook

Using the `call` method:
```php
$client->call('GET /app/hook/deliveries/{delivery_id}', [
        'delivery_id' => 11,
]);
```

Operations method:
```php
$client->operations()->apps()->getWebhookDelivery(        delivery_id: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/apps#get-a-delivery-for-an-app-webhook).


### apps/redeliver-webhook-delivery

Redeliver a delivery for an app webhook

Using the `call` method:
```php
$client->call('POST /app/hook/deliveries/{delivery_id}/attempts', [
        'delivery_id' => 11,
]);
```

Operations method:
```php
$client->operations()->apps()->redeliverWebhookDelivery(        delivery_id: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/apps#redeliver-a-delivery-for-an-app-webhook).


### apps/list-installation-requests-for-authenticated-app

List installation requests for the authenticated app

Using the `call` method:
```php
$client->call('GET /app/installation-requests', [
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->apps()->listInstallationRequestsForAuthenticatedApp(        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/apps#list-installation-requests-for-the-authenticated-app).


### apps/list-installations

List installations for the authenticated app

Using the `call` method:
```php
$client->call('GET /app/installations', [
        'since' => '1970-01-01T00:00:00+00:00',
        'outdated' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->apps()->listInstallations(        since: '1970-01-01T00:00:00+00:00',
        outdated: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/apps#list-installations-for-the-authenticated-app).


### apps/get-installation

Get an installation for the authenticated app

Using the `call` method:
```php
$client->call('GET /app/installations/{installation_id}', [
        'installation_id' => 15,
]);
```

Operations method:
```php
$client->operations()->apps()->getInstallation(        installation_id: 15,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/apps#get-an-installation-for-the-authenticated-app).


### apps/delete-installation

Delete an installation for the authenticated app

Using the `call` method:
```php
$client->call('DELETE /app/installations/{installation_id}', [
        'installation_id' => 15,
]);
```

Operations method:
```php
$client->operations()->apps()->deleteInstallation(        installation_id: 15,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/apps#delete-an-installation-for-the-authenticated-app).


### apps/create-installation-access-token

Create an installation access token for an app

Using the `call` method:
```php
$client->call('POST /app/installations/{installation_id}/access_tokens', [
        'installation_id' => 15,
]);
```

Operations method:
```php
$client->operations()->apps()->createInstallationAccessToken(        installation_id: 15,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/apps/#create-an-installation-access-token-for-an-app).


### apps/suspend-installation

Suspend an app installation

Using the `call` method:
```php
$client->call('PUT /app/installations/{installation_id}/suspended', [
        'installation_id' => 15,
]);
```

Operations method:
```php
$client->operations()->apps()->suspendInstallation(        installation_id: 15,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/apps#suspend-an-app-installation).


### apps/unsuspend-installation

Unsuspend an app installation

Using the `call` method:
```php
$client->call('DELETE /app/installations/{installation_id}/suspended', [
        'installation_id' => 15,
]);
```

Operations method:
```php
$client->operations()->apps()->unsuspendInstallation(        installation_id: 15,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/apps#unsuspend-an-app-installation).


### apps/delete-authorization

Delete an app authorization

Using the `call` method:
```php
$client->call('DELETE /applications/{client_id}/grant', [
        'client_id' => 'generated',
]);
```

Operations method:
```php
$client->operations()->apps()->deleteAuthorization(        client_id: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/apps#delete-an-app-authorization).


### apps/check-token

Check a token

Using the `call` method:
```php
$client->call('POST /applications/{client_id}/token', [
        'client_id' => 'generated',
]);
```

Operations method:
```php
$client->operations()->apps()->checkToken(        client_id: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/apps#check-a-token).


### apps/delete-token

Delete an app token

Using the `call` method:
```php
$client->call('DELETE /applications/{client_id}/token', [
        'client_id' => 'generated',
]);
```

Operations method:
```php
$client->operations()->apps()->deleteToken(        client_id: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/apps#delete-an-app-token).


### apps/reset-token

Reset a token

Using the `call` method:
```php
$client->call('PATCH /applications/{client_id}/token', [
        'client_id' => 'generated',
]);
```

Operations method:
```php
$client->operations()->apps()->resetToken(        client_id: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/apps#reset-a-token).


### apps/reset-authorization

Reset an authorization

Using the `call` method:
```php
$client->call('POST /applications/{client_id}/tokens/{access_token}', [
        'client_id' => 'generated',
        'access_token' => 'generated',
]);
```

Operations method:
```php
$client->operations()->apps()->resetAuthorization(        client_id: 'generated',
        access_token: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/apps#reset-an-authorization).


### apps/get-by-slug

Get an app

Using the `call` method:
```php
$client->call('GET /apps/{app_slug}', [
        'app_slug' => 'generated',
]);
```

Operations method:
```php
$client->operations()->apps()->getBySlug(        app_slug: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/apps/#get-an-app).


### codes-of-conduct/get-all-codes-of-conduct

Get all codes of conduct

Using the `call` method:
```php
$client->call('GET /codes_of_conduct');
```

Operations method:
```php
$client->operations()->codesOfConduct()->getAllCodesOfConduct();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/codes-of-conduct/codes-of-conduct#get-all-codes-of-conduct).


### codes-of-conduct/get-conduct-code

Get a code of conduct

Using the `call` method:
```php
$client->call('GET /codes_of_conduct/{key}', [
        'key' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codesOfConduct()->getConductCode(        key: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/codes-of-conduct/codes-of-conduct#get-a-code-of-conduct).


### emojis/get

Get emojis

Using the `call` method:
```php
$client->call('GET /emojis');
```

Operations method:
```php
$client->operations()->emojis()->get();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/emojis/emojis#get-emojis).


### enterprise-admin/get-announcement

Get the global announcement banner

Using the `call` method:
```php
$client->call('GET /enterprise/announcement');
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->getAnnouncement();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/enterprise-admin/announcement#get-the-global-announcement-banner).


### enterprise-admin/remove-announcement

Remove the global announcement banner

Using the `call` method:
```php
$client->call('DELETE /enterprise/announcement');
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->removeAnnouncement();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/enterprise-admin/announcement#remove-the-global-announcement-banner).


### enterprise-admin/set-announcement

Set the global announcement banner

Using the `call` method:
```php
$client->call('PATCH /enterprise/announcement');
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->setAnnouncement();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/enterprise-admin/announcement#set-the-global-announcement-banner).


### enterprise-admin/get-license-information

Get license information

Using the `call` method:
```php
$client->call('GET /enterprise/settings/license');
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->getLicenseInformation();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/enterprise-admin#get-license-information).


### enterprise-admin/get-all-stats

Get all statistics

Using the `call` method:
```php
$client->call('GET /enterprise/stats/all');
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->getAllStats();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/enterprise-admin#get-statistics).


### enterprise-admin/get-comment-stats

Get comment statistics

Using the `call` method:
```php
$client->call('GET /enterprise/stats/comments');
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->getCommentStats();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/enterprise-admin#get-comment-statistics).


### enterprise-admin/get-gist-stats

Get gist statistics

Using the `call` method:
```php
$client->call('GET /enterprise/stats/gists');
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->getGistStats();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/enterprise-admin#get-gist-statistics).


### enterprise-admin/get-hooks-stats

Get hooks statistics

Using the `call` method:
```php
$client->call('GET /enterprise/stats/hooks');
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->getHooksStats();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/enterprise-admin#get-hooks-statistics).


### enterprise-admin/get-issue-stats

Get issue statistics

Using the `call` method:
```php
$client->call('GET /enterprise/stats/issues');
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->getIssueStats();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/enterprise-admin#get-issues-statistics).


### enterprise-admin/get-milestone-stats

Get milestone statistics

Using the `call` method:
```php
$client->call('GET /enterprise/stats/milestones');
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->getMilestoneStats();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/enterprise-admin#get-milestone-statistics).


### enterprise-admin/get-org-stats

Get organization statistics

Using the `call` method:
```php
$client->call('GET /enterprise/stats/orgs');
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->getOrgStats();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/enterprise-admin#get-organization-statistics).


### enterprise-admin/get-pages-stats

Get pages statistics

Using the `call` method:
```php
$client->call('GET /enterprise/stats/pages');
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->getPagesStats();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/enterprise-admin#get-pages-statistics).


### enterprise-admin/get-pull-request-stats

Get pull request statistics

Using the `call` method:
```php
$client->call('GET /enterprise/stats/pulls');
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->getPullRequestStats();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/enterprise-admin#get-pull-requests-statistics).


### enterprise-admin/get-repo-stats

Get repository statistics

Using the `call` method:
```php
$client->call('GET /enterprise/stats/repos');
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->getRepoStats();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/enterprise-admin#get-repository-statistics).


### enterprise-admin/get-user-stats

Get users statistics

Using the `call` method:
```php
$client->call('GET /enterprise/stats/users');
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->getUserStats();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/enterprise-admin#get-users-statistics).


### enterprise-admin/get-github-actions-permissions-enterprise

Get GitHub Actions permissions for an enterprise

Using the `call` method:
```php
$client->call('GET /enterprises/{enterprise}/actions/permissions', [
        'enterprise' => 'generated',
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->getGithubActionsPermissionsEnterprise(        enterprise: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#get-github-actions-permissions-for-an-enterprise).


### enterprise-admin/set-github-actions-permissions-enterprise

Set GitHub Actions permissions for an enterprise

Using the `call` method:
```php
$client->call('PUT /enterprises/{enterprise}/actions/permissions', [
        'enterprise' => 'generated',
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->setGithubActionsPermissionsEnterprise(        enterprise: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#set-github-actions-permissions-for-an-enterprise).


### enterprise-admin/list-selected-organizations-enabled-github-actions-enterprise

List selected organizations enabled for GitHub Actions in an enterprise

Using the `call` method:
```php
$client->call('GET /enterprises/{enterprise}/actions/permissions/organizations', [
        'enterprise' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->listSelectedOrganizationsEnabledGithubActionsEnterprise(        enterprise: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#list-selected-organizations-enabled-for-github-actions-in-an-enterprise).


### enterprise-admin/set-selected-organizations-enabled-github-actions-enterprise

Set selected organizations enabled for GitHub Actions in an enterprise

Using the `call` method:
```php
$client->call('PUT /enterprises/{enterprise}/actions/permissions/organizations', [
        'enterprise' => 'generated',
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->setSelectedOrganizationsEnabledGithubActionsEnterprise(        enterprise: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#set-selected-organizations-enabled-for-github-actions-in-an-enterprise).


### enterprise-admin/enable-selected-organization-github-actions-enterprise

Enable a selected organization for GitHub Actions in an enterprise

Using the `call` method:
```php
$client->call('PUT /enterprises/{enterprise}/actions/permissions/organizations/{org_id}', [
        'enterprise' => 'generated',
        'org_id' => 6,
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->enableSelectedOrganizationGithubActionsEnterprise(        enterprise: 'generated',
        org_id: 6,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#enable-a-selected-organization-for-github-actions-in-an-enterprise).


### enterprise-admin/disable-selected-organization-github-actions-enterprise

Disable a selected organization for GitHub Actions in an enterprise

Using the `call` method:
```php
$client->call('DELETE /enterprises/{enterprise}/actions/permissions/organizations/{org_id}', [
        'enterprise' => 'generated',
        'org_id' => 6,
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->disableSelectedOrganizationGithubActionsEnterprise(        enterprise: 'generated',
        org_id: 6,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#disable-a-selected-organization-for-github-actions-in-an-enterprise).


### enterprise-admin/get-allowed-actions-enterprise

Get allowed actions for an enterprise

Using the `call` method:
```php
$client->call('GET /enterprises/{enterprise}/actions/permissions/selected-actions', [
        'enterprise' => 'generated',
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->getAllowedActionsEnterprise(        enterprise: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#get-allowed-actions-for-an-enterprise).


### enterprise-admin/set-allowed-actions-enterprise

Set allowed actions for an enterprise

Using the `call` method:
```php
$client->call('PUT /enterprises/{enterprise}/actions/permissions/selected-actions', [
        'enterprise' => 'generated',
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->setAllowedActionsEnterprise(        enterprise: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#set-allowed-actions-for-an-enterprise).


### enterprise-admin/list-self-hosted-runner-groups-for-enterprise

List self-hosted runner groups for an enterprise

Using the `call` method:
```php
$client->call('GET /enterprises/{enterprise}/actions/runner-groups', [
        'enterprise' => 'generated',
        'visible_to_organization' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->listSelfHostedRunnerGroupsForEnterprise(        enterprise: 'generated',
        visible_to_organization: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#list-self-hosted-runner-groups-for-an-enterprise).


### enterprise-admin/create-self-hosted-runner-group-for-enterprise

Create a self-hosted runner group for an enterprise

Using the `call` method:
```php
$client->call('POST /enterprises/{enterprise}/actions/runner-groups', [
        'enterprise' => 'generated',
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->createSelfHostedRunnerGroupForEnterprise(        enterprise: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#create-self-hosted-runner-group-for-an-enterprise).


### enterprise-admin/get-self-hosted-runner-group-for-enterprise

Get a self-hosted runner group for an enterprise

Using the `call` method:
```php
$client->call('GET /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}', [
        'enterprise' => 'generated',
        'runner_group_id' => 15,
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->getSelfHostedRunnerGroupForEnterprise(        enterprise: 'generated',
        runner_group_id: 15,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#get-a-self-hosted-runner-group-for-an-enterprise).


### enterprise-admin/delete-self-hosted-runner-group-from-enterprise

Delete a self-hosted runner group from an enterprise

Using the `call` method:
```php
$client->call('DELETE /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}', [
        'enterprise' => 'generated',
        'runner_group_id' => 15,
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->deleteSelfHostedRunnerGroupFromEnterprise(        enterprise: 'generated',
        runner_group_id: 15,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#delete-a-self-hosted-runner-group-from-an-enterprise).


### enterprise-admin/update-self-hosted-runner-group-for-enterprise

Update a self-hosted runner group for an enterprise

Using the `call` method:
```php
$client->call('PATCH /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}', [
        'enterprise' => 'generated',
        'runner_group_id' => 15,
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->updateSelfHostedRunnerGroupForEnterprise(        enterprise: 'generated',
        runner_group_id: 15,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#update-a-self-hosted-runner-group-for-an-enterprise).


### enterprise-admin/list-self-hosted-runners-in-group-for-enterprise

List self-hosted runners in a group for an enterprise

Using the `call` method:
```php
$client->call('GET /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/runners', [
        'enterprise' => 'generated',
        'runner_group_id' => 15,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->listSelfHostedRunnersInGroupForEnterprise(        enterprise: 'generated',
        runner_group_id: 15,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#list-self-hosted-runners-in-a-group-for-an-enterprise).


### enterprise-admin/set-self-hosted-runners-in-group-for-enterprise

Set self-hosted runners in a group for an enterprise

Using the `call` method:
```php
$client->call('PUT /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/runners', [
        'enterprise' => 'generated',
        'runner_group_id' => 15,
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->setSelfHostedRunnersInGroupForEnterprise(        enterprise: 'generated',
        runner_group_id: 15,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#set-self-hosted-runners-in-a-group-for-an-enterprise).


### enterprise-admin/add-self-hosted-runner-to-group-for-enterprise

Add a self-hosted runner to a group for an enterprise

Using the `call` method:
```php
$client->call('PUT /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/runners/{runner_id}', [
        'enterprise' => 'generated',
        'runner_group_id' => 15,
        'runner_id' => 9,
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->addSelfHostedRunnerToGroupForEnterprise(        enterprise: 'generated',
        runner_group_id: 15,
        runner_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#add-a-self-hosted-runner-to-a-group-for-an-enterprise).


### enterprise-admin/remove-self-hosted-runner-from-group-for-enterprise

Remove a self-hosted runner from a group for an enterprise

Using the `call` method:
```php
$client->call('DELETE /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/runners/{runner_id}', [
        'enterprise' => 'generated',
        'runner_group_id' => 15,
        'runner_id' => 9,
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->removeSelfHostedRunnerFromGroupForEnterprise(        enterprise: 'generated',
        runner_group_id: 15,
        runner_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#remove-a-self-hosted-runner-from-a-group-for-an-enterprise).


### enterprise-admin/list-self-hosted-runners-for-enterprise

List self-hosted runners for an enterprise

Using the `call` method:
```php
$client->call('GET /enterprises/{enterprise}/actions/runners', [
        'enterprise' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->listSelfHostedRunnersForEnterprise(        enterprise: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#list-self-hosted-runners-for-an-enterprise).


### enterprise-admin/list-runner-applications-for-enterprise

List runner applications for an enterprise

Using the `call` method:
```php
$client->call('GET /enterprises/{enterprise}/actions/runners/downloads', [
        'enterprise' => 'generated',
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->listRunnerApplicationsForEnterprise(        enterprise: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#list-runner-applications-for-an-enterprise).


### enterprise-admin/create-registration-token-for-enterprise

Create a registration token for an enterprise

Using the `call` method:
```php
$client->call('POST /enterprises/{enterprise}/actions/runners/registration-token', [
        'enterprise' => 'generated',
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->createRegistrationTokenForEnterprise(        enterprise: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#create-a-registration-token-for-an-enterprise).


### enterprise-admin/create-remove-token-for-enterprise

Create a remove token for an enterprise

Using the `call` method:
```php
$client->call('POST /enterprises/{enterprise}/actions/runners/remove-token', [
        'enterprise' => 'generated',
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->createRemoveTokenForEnterprise(        enterprise: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#create-a-remove-token-for-an-enterprise).


### enterprise-admin/get-self-hosted-runner-for-enterprise

Get a self-hosted runner for an enterprise

Using the `call` method:
```php
$client->call('GET /enterprises/{enterprise}/actions/runners/{runner_id}', [
        'enterprise' => 'generated',
        'runner_id' => 9,
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->getSelfHostedRunnerForEnterprise(        enterprise: 'generated',
        runner_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#get-a-self-hosted-runner-for-an-enterprise).


### enterprise-admin/delete-self-hosted-runner-from-enterprise

Delete a self-hosted runner from an enterprise

Using the `call` method:
```php
$client->call('DELETE /enterprises/{enterprise}/actions/runners/{runner_id}', [
        'enterprise' => 'generated',
        'runner_id' => 9,
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->deleteSelfHostedRunnerFromEnterprise(        enterprise: 'generated',
        runner_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#delete-self-hosted-runner-from-an-enterprise).


### enterprise-admin/get-audit-log

Get the audit log for an enterprise

Using the `call` method:
```php
$client->call('GET /enterprises/{enterprise}/audit-log', [
        'enterprise' => 'generated',
        'phrase' => 'generated',
        'after' => 'generated',
        'before' => 'generated',
        'order' => 'generated',
        'page' => 4,
        'per_page' => 8,
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->getAuditLog(        enterprise: 'generated',
        phrase: 'generated',
        after: 'generated',
        before: 'generated',
        order: 'generated',
        page: 4,
        per_page: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/enterprise-admin#get-the-audit-log-for-an-enterprise).


### secret-scanning/list-alerts-for-enterprise

List secret scanning alerts for an enterprise

Using the `call` method:
```php
$client->call('GET /enterprises/{enterprise}/secret-scanning/alerts', [
        'enterprise' => 'generated',
        'state' => 'generated',
        'secret_type' => 'generated',
        'resolution' => 'generated',
        'before' => 'generated',
        'after' => 'generated',
        'sort' => 'generated',
        'direction' => 'generated',
        'per_page' => 8,
]);
```

Operations method:
```php
$client->operations()->secretScanning()->listAlertsForEnterprise(        enterprise: 'generated',
        state: 'generated',
        secret_type: 'generated',
        resolution: 'generated',
        before: 'generated',
        after: 'generated',
        sort: 'generated',
        direction: 'generated',
        per_page: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/secret-scanning/secret-scanning#list-secret-scanning-alerts-for-an-enterprise).


### activity/get-feeds

Get feeds

Using the `call` method:
```php
$client->call('GET /feeds');
```

Operations method:
```php
$client->operations()->activity()->getFeeds();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/activity#get-feeds).


### gists/list

List gists for the authenticated user

Using the `call` method:
```php
$client->call('GET /gists', [
        'since' => '1970-01-01T00:00:00+00:00',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->gists()->list(        since: '1970-01-01T00:00:00+00:00',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/gists/gists#list-gists-for-the-authenticated-user).


### gists/create

Create a gist

Using the `call` method:
```php
$client->call('POST /gists');
```

Operations method:
```php
$client->operations()->gists()->create();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/gists/gists#create-a-gist).


### gists/list-public

List public gists

Using the `call` method:
```php
$client->call('GET /gists/public', [
        'since' => '1970-01-01T00:00:00+00:00',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->gists()->listPublic(        since: '1970-01-01T00:00:00+00:00',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/gists/gists#list-public-gists).


### gists/list-starred

List starred gists

Using the `call` method:
```php
$client->call('GET /gists/starred', [
        'since' => '1970-01-01T00:00:00+00:00',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->gists()->listStarred(        since: '1970-01-01T00:00:00+00:00',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/gists/gists#list-starred-gists).


### gists/get

Get a gist

Using the `call` method:
```php
$client->call('GET /gists/{gist_id}', [
        'gist_id' => 'generated',
]);
```

Operations method:
```php
$client->operations()->gists()->get(        gist_id: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/gists/gists#get-a-gist).


### gists/delete

Delete a gist

Using the `call` method:
```php
$client->call('DELETE /gists/{gist_id}', [
        'gist_id' => 'generated',
]);
```

Operations method:
```php
$client->operations()->gists()->delete(        gist_id: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/gists/gists#delete-a-gist).


### gists/update

Update a gist

Using the `call` method:
```php
$client->call('PATCH /gists/{gist_id}', [
        'gist_id' => 'generated',
]);
```

Operations method:
```php
$client->operations()->gists()->update(        gist_id: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/gists/gists#update-a-gist).


### gists/list-comments

List gist comments

Using the `call` method:
```php
$client->call('GET /gists/{gist_id}/comments', [
        'gist_id' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->gists()->listComments(        gist_id: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/gists/comments#list-gist-comments).


### gists/create-comment

Create a gist comment

Using the `call` method:
```php
$client->call('POST /gists/{gist_id}/comments', [
        'gist_id' => 'generated',
]);
```

Operations method:
```php
$client->operations()->gists()->createComment(        gist_id: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/gists/comments#create-a-gist-comment).


### gists/get-comment

Get a gist comment

Using the `call` method:
```php
$client->call('GET /gists/{gist_id}/comments/{comment_id}', [
        'gist_id' => 'generated',
        'comment_id' => 10,
]);
```

Operations method:
```php
$client->operations()->gists()->getComment(        gist_id: 'generated',
        comment_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/gists/comments#get-a-gist-comment).


### gists/delete-comment

Delete a gist comment

Using the `call` method:
```php
$client->call('DELETE /gists/{gist_id}/comments/{comment_id}', [
        'gist_id' => 'generated',
        'comment_id' => 10,
]);
```

Operations method:
```php
$client->operations()->gists()->deleteComment(        gist_id: 'generated',
        comment_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/gists/comments#delete-a-gist-comment).


### gists/update-comment

Update a gist comment

Using the `call` method:
```php
$client->call('PATCH /gists/{gist_id}/comments/{comment_id}', [
        'gist_id' => 'generated',
        'comment_id' => 10,
]);
```

Operations method:
```php
$client->operations()->gists()->updateComment(        gist_id: 'generated',
        comment_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/gists/comments#update-a-gist-comment).


### gists/list-commits

List gist commits

Using the `call` method:
```php
$client->call('GET /gists/{gist_id}/commits', [
        'gist_id' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->gists()->listCommits(        gist_id: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/gists/gists#list-gist-commits).


### gists/list-forks

List gist forks

Using the `call` method:
```php
$client->call('GET /gists/{gist_id}/forks', [
        'gist_id' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->gists()->listForks(        gist_id: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/gists/gists#list-gist-forks).


### gists/fork

Fork a gist

Using the `call` method:
```php
$client->call('POST /gists/{gist_id}/forks', [
        'gist_id' => 'generated',
]);
```

Operations method:
```php
$client->operations()->gists()->fork(        gist_id: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/gists/gists#fork-a-gist).


### gists/check-is-starred

Check if a gist is starred

Using the `call` method:
```php
$client->call('GET /gists/{gist_id}/star', [
        'gist_id' => 'generated',
]);
```

Operations method:
```php
$client->operations()->gists()->checkIsStarred(        gist_id: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/gists/gists#check-if-a-gist-is-starred).


### gists/star

Star a gist

Using the `call` method:
```php
$client->call('PUT /gists/{gist_id}/star', [
        'gist_id' => 'generated',
]);
```

Operations method:
```php
$client->operations()->gists()->star(        gist_id: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/gists/gists#star-a-gist).


### gists/unstar

Unstar a gist

Using the `call` method:
```php
$client->call('DELETE /gists/{gist_id}/star', [
        'gist_id' => 'generated',
]);
```

Operations method:
```php
$client->operations()->gists()->unstar(        gist_id: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/gists/gists#unstar-a-gist).


### gists/get-revision

Get a gist revision

Using the `call` method:
```php
$client->call('GET /gists/{gist_id}/{sha}', [
        'gist_id' => 'generated',
        'sha' => 'generated',
]);
```

Operations method:
```php
$client->operations()->gists()->getRevision(        gist_id: 'generated',
        sha: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/gists/gists#get-a-gist-revision).


### gitignore/get-all-templates

Get all gitignore templates

Using the `call` method:
```php
$client->call('GET /gitignore/templates');
```

Operations method:
```php
$client->operations()->gitignore()->getAllTemplates();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/gitignore/gitignore#get-all-gitignore-templates).


### gitignore/get-template

Get a gitignore template

Using the `call` method:
```php
$client->call('GET /gitignore/templates/{name}', [
        'name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->gitignore()->getTemplate(        name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/gitignore/gitignore#get-a-gitignore-template).


### apps/list-repos-accessible-to-installation

List repositories accessible to the app installation

Using the `call` method:
```php
$client->call('GET /installation/repositories', [
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->apps()->listReposAccessibleToInstallation(        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/apps#list-repositories-accessible-to-the-app-installation).


### apps/revoke-installation-access-token

Revoke an installation access token

Using the `call` method:
```php
$client->call('DELETE /installation/token');
```

Operations method:
```php
$client->operations()->apps()->revokeInstallationAccessToken();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/apps#revoke-an-installation-access-token).


### issues/list

List issues assigned to the authenticated user

Using the `call` method:
```php
$client->call('GET /issues', [
        'labels' => 'generated',
        'since' => '1970-01-01T00:00:00+00:00',
        'collab' => ,
        'orgs' => ,
        'owned' => ,
        'pulls' => ,
        'filter' => 'generated',
        'state' => 'generated',
        'sort' => 'generated',
        'direction' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->issues()->list(        labels: 'generated',
        since: '1970-01-01T00:00:00+00:00',
        collab: ,
        orgs: ,
        owned: ,
        pulls: ,
        filter: 'generated',
        state: 'generated',
        sort: 'generated',
        direction: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/issues/issues#list-issues-assigned-to-the-authenticated-user).


### licenses/get-all-commonly-used

Get all commonly used licenses

Using the `call` method:
```php
$client->call('GET /licenses', [
        'featured' => ,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->licenses()->getAllCommonlyUsed(        featured: ,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/licenses/licenses#get-all-commonly-used-licenses).


### licenses/get

Get a license

Using the `call` method:
```php
$client->call('GET /licenses/{license}', [
        'license' => 'generated',
]);
```

Operations method:
```php
$client->operations()->licenses()->get(        license: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/licenses/licenses#get-a-license).


### markdown/render

Render a Markdown document

Using the `call` method:
```php
$client->call('POST /markdown');
```

Operations method:
```php
$client->operations()->markdown()->render();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/markdown/markdown#render-a-markdown-document).


### markdown/render-raw

Render a Markdown document in raw mode

Using the `call` method:
```php
$client->call('POST /markdown/raw');
```

Operations method:
```php
$client->operations()->markdown()->renderRaw();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/markdown/markdown#render-a-markdown-document-in-raw-mode).


### meta/get

Get GitHub AE meta information

Using the `call` method:
```php
$client->call('GET /meta');
```

Operations method:
```php
$client->operations()->meta()->get();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/meta/meta#get-github-meta-information).


### activity/list-notifications-for-authenticated-user

List notifications for the authenticated user

Using the `call` method:
```php
$client->call('GET /notifications', [
        'since' => '1970-01-01T00:00:00+00:00',
        'before' => '1970-01-01T00:00:00+00:00',
        'all' => ,
        'participating' => ,
        'page' => 4,
        'per_page' => 8,
]);
```

Operations method:
```php
$client->operations()->activity()->listNotificationsForAuthenticatedUser(        since: '1970-01-01T00:00:00+00:00',
        before: '1970-01-01T00:00:00+00:00',
        all: ,
        participating: ,
        page: 4,
        per_page: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/activity#list-notifications-for-the-authenticated-user).


### activity/mark-notifications-as-read

Mark notifications as read

Using the `call` method:
```php
$client->call('PUT /notifications');
```

Operations method:
```php
$client->operations()->activity()->markNotificationsAsRead();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/activity#mark-notifications-as-read).


### activity/get-thread

Get a thread

Using the `call` method:
```php
$client->call('GET /notifications/threads/{thread_id}', [
        'thread_id' => 9,
]);
```

Operations method:
```php
$client->operations()->activity()->getThread(        thread_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/activity#get-a-thread).


### activity/mark-thread-as-read

Mark a thread as read

Using the `call` method:
```php
$client->call('PATCH /notifications/threads/{thread_id}', [
        'thread_id' => 9,
]);
```

Operations method:
```php
$client->operations()->activity()->markThreadAsRead(        thread_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/activity#mark-a-thread-as-read).


### activity/get-thread-subscription-for-authenticated-user

Get a thread subscription for the authenticated user

Using the `call` method:
```php
$client->call('GET /notifications/threads/{thread_id}/subscription', [
        'thread_id' => 9,
]);
```

Operations method:
```php
$client->operations()->activity()->getThreadSubscriptionForAuthenticatedUser(        thread_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/activity#get-a-thread-subscription-for-the-authenticated-user).


### activity/set-thread-subscription

Set a thread subscription

Using the `call` method:
```php
$client->call('PUT /notifications/threads/{thread_id}/subscription', [
        'thread_id' => 9,
]);
```

Operations method:
```php
$client->operations()->activity()->setThreadSubscription(        thread_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/activity#set-a-thread-subscription).


### activity/delete-thread-subscription

Delete a thread subscription

Using the `call` method:
```php
$client->call('DELETE /notifications/threads/{thread_id}/subscription', [
        'thread_id' => 9,
]);
```

Operations method:
```php
$client->operations()->activity()->deleteThreadSubscription(        thread_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/activity#delete-a-thread-subscription).


### meta/get-octocat

Get Octocat

Using the `call` method:
```php
$client->call('GET /octocat', [
        's' => 'generated',
]);
```

Operations method:
```php
$client->operations()->meta()->getOctocat(        s: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/meta/meta#get-octocat).


### orgs/list

List organizations

Using the `call` method:
```php
$client->call('GET /organizations', [
        'since' => 5,
        'per_page' => 8,
]);
```

Operations method:
```php
$client->operations()->orgs()->list(        since: 5,
        per_page: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/orgs#list-organizations).


### orgs/get

Get an organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->orgs()->get(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/orgs#get-an-organization).


### orgs/update

Update an organization

Using the `call` method:
```php
$client->call('PATCH /orgs/{org}', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->orgs()->update(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/orgs#update-an-organization).


### actions/get-github-actions-permissions-organization

Get GitHub Actions permissions for an organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/actions/permissions', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->getGithubActionsPermissionsOrganization(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#get-github-actions-permissions-for-an-organization).


### actions/set-github-actions-permissions-organization

Set GitHub Actions permissions for an organization

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/actions/permissions', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->setGithubActionsPermissionsOrganization(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#set-github-actions-permissions-for-an-organization).


### actions/list-selected-repositories-enabled-github-actions-organization

List selected repositories enabled for GitHub Actions in an organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/actions/permissions/repositories', [
        'org' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->actions()->listSelectedRepositoriesEnabledGithubActionsOrganization(        org: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#list-selected-repositories-enabled-for-github-actions-in-an-organization).


### actions/set-selected-repositories-enabled-github-actions-organization

Set selected repositories enabled for GitHub Actions in an organization

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/actions/permissions/repositories', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->setSelectedRepositoriesEnabledGithubActionsOrganization(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#set-selected-repositories-enabled-for-github-actions-in-an-organization).


### actions/enable-selected-repository-github-actions-organization

Enable a selected repository for GitHub Actions in an organization

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/actions/permissions/repositories/{repository_id}', [
        'org' => 'generated',
        'repository_id' => 13,
]);
```

Operations method:
```php
$client->operations()->actions()->enableSelectedRepositoryGithubActionsOrganization(        org: 'generated',
        repository_id: 13,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#enable-a-selected-repository-for-github-actions-in-an-organization).


### actions/disable-selected-repository-github-actions-organization

Disable a selected repository for GitHub Actions in an organization

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/actions/permissions/repositories/{repository_id}', [
        'org' => 'generated',
        'repository_id' => 13,
]);
```

Operations method:
```php
$client->operations()->actions()->disableSelectedRepositoryGithubActionsOrganization(        org: 'generated',
        repository_id: 13,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#disable-a-selected-repository-for-github-actions-in-an-organization).


### actions/get-allowed-actions-organization

Get allowed actions for an organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/actions/permissions/selected-actions', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->getAllowedActionsOrganization(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#get-allowed-actions-for-an-organization).


### actions/set-allowed-actions-organization

Set allowed actions for an organization

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/actions/permissions/selected-actions', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->setAllowedActionsOrganization(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#set-allowed-actions-for-an-organization).


### actions/get-github-actions-default-workflow-permissions-organization

Get default workflow permissions for an organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/actions/permissions/workflow', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->getGithubActionsDefaultWorkflowPermissionsOrganization(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#get-default-workflow-permissions).


### actions/set-github-actions-default-workflow-permissions-organization

Set default workflow permissions for an organization

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/actions/permissions/workflow', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->setGithubActionsDefaultWorkflowPermissionsOrganization(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#set-default-workflow-permissions).


### actions/list-self-hosted-runner-groups-for-org

List self-hosted runner groups for an organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/actions/runner-groups', [
        'org' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->actions()->listSelfHostedRunnerGroupsForOrg(        org: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#list-self-hosted-runner-groups-for-an-organization).


### actions/create-self-hosted-runner-group-for-org

Create a self-hosted runner group for an organization

Using the `call` method:
```php
$client->call('POST /orgs/{org}/actions/runner-groups', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->createSelfHostedRunnerGroupForOrg(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#create-a-self-hosted-runner-group-for-an-organization).


### actions/get-self-hosted-runner-group-for-org

Get a self-hosted runner group for an organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/actions/runner-groups/{runner_group_id}', [
        'org' => 'generated',
        'runner_group_id' => 15,
]);
```

Operations method:
```php
$client->operations()->actions()->getSelfHostedRunnerGroupForOrg(        org: 'generated',
        runner_group_id: 15,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#get-a-self-hosted-runner-group-for-an-organization).


### actions/delete-self-hosted-runner-group-from-org

Delete a self-hosted runner group from an organization

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/actions/runner-groups/{runner_group_id}', [
        'org' => 'generated',
        'runner_group_id' => 15,
]);
```

Operations method:
```php
$client->operations()->actions()->deleteSelfHostedRunnerGroupFromOrg(        org: 'generated',
        runner_group_id: 15,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#delete-a-self-hosted-runner-group-from-an-organization).


### actions/update-self-hosted-runner-group-for-org

Update a self-hosted runner group for an organization

Using the `call` method:
```php
$client->call('PATCH /orgs/{org}/actions/runner-groups/{runner_group_id}', [
        'org' => 'generated',
        'runner_group_id' => 15,
]);
```

Operations method:
```php
$client->operations()->actions()->updateSelfHostedRunnerGroupForOrg(        org: 'generated',
        runner_group_id: 15,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#update-a-self-hosted-runner-group-for-an-organization).


### actions/add-self-hosted-runner-to-group-for-org

Add a self-hosted runner to a group for an organization

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/actions/runner-groups/{runner_group_id}/runners/{runner_id}', [
        'org' => 'generated',
        'runner_group_id' => 15,
        'runner_id' => 9,
]);
```

Operations method:
```php
$client->operations()->actions()->addSelfHostedRunnerToGroupForOrg(        org: 'generated',
        runner_group_id: 15,
        runner_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#add-a-self-hosted-runner-to-a-group-for-an-organization).


### actions/list-self-hosted-runners-for-org

List self-hosted runners for an organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/actions/runners', [
        'org' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->actions()->listSelfHostedRunnersForOrg(        org: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#list-self-hosted-runners-for-an-organization).


### actions/list-runner-applications-for-org

List runner applications for an organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/actions/runners/downloads', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->listRunnerApplicationsForOrg(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#list-runner-applications-for-an-organization).


### actions/create-registration-token-for-org

Create a registration token for an organization

Using the `call` method:
```php
$client->call('POST /orgs/{org}/actions/runners/registration-token', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->createRegistrationTokenForOrg(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#create-a-registration-token-for-an-organization).


### actions/create-remove-token-for-org

Create a remove token for an organization

Using the `call` method:
```php
$client->call('POST /orgs/{org}/actions/runners/remove-token', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->createRemoveTokenForOrg(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#create-a-remove-token-for-an-organization).


### actions/get-self-hosted-runner-for-org

Get a self-hosted runner for an organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/actions/runners/{runner_id}', [
        'org' => 'generated',
        'runner_id' => 9,
]);
```

Operations method:
```php
$client->operations()->actions()->getSelfHostedRunnerForOrg(        org: 'generated',
        runner_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#get-a-self-hosted-runner-for-an-organization).


### actions/delete-self-hosted-runner-from-org

Delete a self-hosted runner from an organization

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/actions/runners/{runner_id}', [
        'org' => 'generated',
        'runner_id' => 9,
]);
```

Operations method:
```php
$client->operations()->actions()->deleteSelfHostedRunnerFromOrg(        org: 'generated',
        runner_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#delete-a-self-hosted-runner-from-an-organization).


### actions/list-org-secrets

List organization secrets

Using the `call` method:
```php
$client->call('GET /orgs/{org}/actions/secrets', [
        'org' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->actions()->listOrgSecrets(        org: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#list-organization-secrets).


### actions/get-org-public-key

Get an organization public key

Using the `call` method:
```php
$client->call('GET /orgs/{org}/actions/secrets/public-key', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->getOrgPublicKey(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#get-an-organization-public-key).


### actions/get-org-secret

Get an organization secret

Using the `call` method:
```php
$client->call('GET /orgs/{org}/actions/secrets/{secret_name}', [
        'org' => 'generated',
        'secret_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->getOrgSecret(        org: 'generated',
        secret_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#get-an-organization-secret).


### actions/create-or-update-org-secret

Create or update an organization secret

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/actions/secrets/{secret_name}', [
        'org' => 'generated',
        'secret_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->createOrUpdateOrgSecret(        org: 'generated',
        secret_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#create-or-update-an-organization-secret).


### actions/delete-org-secret

Delete an organization secret

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/actions/secrets/{secret_name}', [
        'org' => 'generated',
        'secret_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->deleteOrgSecret(        org: 'generated',
        secret_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#delete-an-organization-secret).


### actions/list-selected-repos-for-org-secret

List selected repositories for an organization secret

Using the `call` method:
```php
$client->call('GET /orgs/{org}/actions/secrets/{secret_name}/repositories', [
        'org' => 'generated',
        'secret_name' => 'generated',
        'page' => 4,
        'per_page' => 8,
]);
```

Operations method:
```php
$client->operations()->actions()->listSelectedReposForOrgSecret(        org: 'generated',
        secret_name: 'generated',
        page: 4,
        per_page: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#list-selected-repositories-for-an-organization-secret).


### actions/set-selected-repos-for-org-secret

Set selected repositories for an organization secret

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/actions/secrets/{secret_name}/repositories', [
        'org' => 'generated',
        'secret_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->setSelectedReposForOrgSecret(        org: 'generated',
        secret_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#set-selected-repositories-for-an-organization-secret).


### actions/add-selected-repo-to-org-secret

Add selected repository to an organization secret

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/actions/secrets/{secret_name}/repositories/{repository_id}', [
        'org' => 'generated',
        'secret_name' => 'generated',
        'repository_id' => 13,
]);
```

Operations method:
```php
$client->operations()->actions()->addSelectedRepoToOrgSecret(        org: 'generated',
        secret_name: 'generated',
        repository_id: 13,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#add-selected-repository-to-an-organization-secret).


### actions/remove-selected-repo-from-org-secret

Remove selected repository from an organization secret

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/actions/secrets/{secret_name}/repositories/{repository_id}', [
        'org' => 'generated',
        'secret_name' => 'generated',
        'repository_id' => 13,
]);
```

Operations method:
```php
$client->operations()->actions()->removeSelectedRepoFromOrgSecret(        org: 'generated',
        secret_name: 'generated',
        repository_id: 13,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#remove-selected-repository-from-an-organization-secret).


### orgs/get-audit-log

Get the audit log for an organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/audit-log', [
        'org' => 'generated',
        'phrase' => 'generated',
        'after' => 'generated',
        'before' => 'generated',
        'order' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->orgs()->getAuditLog(        org: 'generated',
        phrase: 'generated',
        after: 'generated',
        before: 'generated',
        order: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/orgs#get-audit-log).


### code-scanning/list-alerts-for-org

List code scanning alerts for an organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/code-scanning/alerts', [
        'org' => 'generated',
        'tool_name' => 'generated',
        'tool_guid' => ,
        'before' => 'generated',
        'after' => 'generated',
        'state' => 'generated',
        'severity' => 'generated',
        'page' => 4,
        'per_page' => 8,
        'direction' => 'generated',
        'sort' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codeScanning()->listAlertsForOrg(        org: 'generated',
        tool_name: 'generated',
        tool_guid: ,
        before: 'generated',
        after: 'generated',
        state: 'generated',
        severity: 'generated',
        page: 4,
        per_page: 8,
        direction: 'generated',
        sort: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/code-scanning/code-scanning#list-code-scanning-alerts-for-an-organization).


### teams/external-idp-group-info-for-org

Get an external group

Using the `call` method:
```php
$client->call('GET /orgs/{org}/external-group/{group_id}', [
        'org' => 'generated',
        'group_id' => 8,
]);
```

Operations method:
```php
$client->operations()->teams()->externalIdpGroupInfoForOrg(        org: 'generated',
        group_id: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#external-idp-group-info-for-an-organization).


### teams/list-external-idp-groups-for-org

List external groups in an organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/external-groups', [
        'org' => 'generated',
        'page' => 4,
        'display_name' => 'generated',
        'per_page' => 8,
]);
```

Operations method:
```php
$client->operations()->teams()->listExternalIdpGroupsForOrg(        org: 'generated',
        page: 4,
        display_name: 'generated',
        per_page: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#list-external-idp-groups-for-an-organization).


### orgs/list-webhooks

List organization webhooks

Using the `call` method:
```php
$client->call('GET /orgs/{org}/hooks', [
        'org' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->orgs()->listWebhooks(        org: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/orgs#list-organization-webhooks).


### orgs/create-webhook

Create an organization webhook

Using the `call` method:
```php
$client->call('POST /orgs/{org}/hooks', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->orgs()->createWebhook(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/orgs#create-an-organization-webhook).


### orgs/get-webhook

Get an organization webhook

Using the `call` method:
```php
$client->call('GET /orgs/{org}/hooks/{hook_id}', [
        'org' => 'generated',
        'hook_id' => 7,
]);
```

Operations method:
```php
$client->operations()->orgs()->getWebhook(        org: 'generated',
        hook_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/orgs#get-an-organization-webhook).


### orgs/delete-webhook

Delete an organization webhook

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/hooks/{hook_id}', [
        'org' => 'generated',
        'hook_id' => 7,
]);
```

Operations method:
```php
$client->operations()->orgs()->deleteWebhook(        org: 'generated',
        hook_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/orgs#delete-an-organization-webhook).


### orgs/update-webhook

Update an organization webhook

Using the `call` method:
```php
$client->call('PATCH /orgs/{org}/hooks/{hook_id}', [
        'org' => 'generated',
        'hook_id' => 7,
]);
```

Operations method:
```php
$client->operations()->orgs()->updateWebhook(        org: 'generated',
        hook_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/orgs#update-an-organization-webhook).


### orgs/get-webhook-config-for-org

Get a webhook configuration for an organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/hooks/{hook_id}/config', [
        'org' => 'generated',
        'hook_id' => 7,
]);
```

Operations method:
```php
$client->operations()->orgs()->getWebhookConfigForOrg(        org: 'generated',
        hook_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/orgs#get-a-webhook-configuration-for-an-organization).


### orgs/update-webhook-config-for-org

Update a webhook configuration for an organization

Using the `call` method:
```php
$client->call('PATCH /orgs/{org}/hooks/{hook_id}/config', [
        'org' => 'generated',
        'hook_id' => 7,
]);
```

Operations method:
```php
$client->operations()->orgs()->updateWebhookConfigForOrg(        org: 'generated',
        hook_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/orgs#update-a-webhook-configuration-for-an-organization).


### orgs/list-webhook-deliveries

List deliveries for an organization webhook

Using the `call` method:
```php
$client->call('GET /orgs/{org}/hooks/{hook_id}/deliveries', [
        'org' => 'generated',
        'hook_id' => 7,
        'cursor' => 'generated',
        'redelivery' => ,
        'per_page' => 8,
]);
```

Operations method:
```php
$client->operations()->orgs()->listWebhookDeliveries(        org: 'generated',
        hook_id: 7,
        cursor: 'generated',
        redelivery: ,
        per_page: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/orgs#list-deliveries-for-an-organization-webhook).


### orgs/get-webhook-delivery

Get a webhook delivery for an organization webhook

Using the `call` method:
```php
$client->call('GET /orgs/{org}/hooks/{hook_id}/deliveries/{delivery_id}', [
        'org' => 'generated',
        'hook_id' => 7,
        'delivery_id' => 11,
]);
```

Operations method:
```php
$client->operations()->orgs()->getWebhookDelivery(        org: 'generated',
        hook_id: 7,
        delivery_id: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/orgs#get-a-webhook-delivery-for-an-organization-webhook).


### orgs/redeliver-webhook-delivery

Redeliver a delivery for an organization webhook

Using the `call` method:
```php
$client->call('POST /orgs/{org}/hooks/{hook_id}/deliveries/{delivery_id}/attempts', [
        'org' => 'generated',
        'hook_id' => 7,
        'delivery_id' => 11,
]);
```

Operations method:
```php
$client->operations()->orgs()->redeliverWebhookDelivery(        org: 'generated',
        hook_id: 7,
        delivery_id: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/orgs#redeliver-a-delivery-for-an-organization-webhook).


### orgs/ping-webhook

Ping an organization webhook

Using the `call` method:
```php
$client->call('POST /orgs/{org}/hooks/{hook_id}/pings', [
        'org' => 'generated',
        'hook_id' => 7,
]);
```

Operations method:
```php
$client->operations()->orgs()->pingWebhook(        org: 'generated',
        hook_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/orgs#ping-an-organization-webhook).


### apps/get-org-installation

Get an organization installation for the authenticated app

Using the `call` method:
```php
$client->call('GET /orgs/{org}/installation', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->apps()->getOrgInstallation(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/apps#get-an-organization-installation-for-the-authenticated-app).


### orgs/list-app-installations

List app installations for an organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/installations', [
        'org' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->orgs()->listAppInstallations(        org: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/orgs#list-app-installations-for-an-organization).


### issues/list-for-org

List organization issues assigned to the authenticated user

Using the `call` method:
```php
$client->call('GET /orgs/{org}/issues', [
        'org' => 'generated',
        'labels' => 'generated',
        'since' => '1970-01-01T00:00:00+00:00',
        'filter' => 'generated',
        'state' => 'generated',
        'sort' => 'generated',
        'direction' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->issues()->listForOrg(        org: 'generated',
        labels: 'generated',
        since: '1970-01-01T00:00:00+00:00',
        filter: 'generated',
        state: 'generated',
        sort: 'generated',
        direction: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/issues/issues#list-organization-issues-assigned-to-the-authenticated-user).


### orgs/list-members

List organization members

Using the `call` method:
```php
$client->call('GET /orgs/{org}/members', [
        'org' => 'generated',
        'filter' => 'generated',
        'role' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->orgs()->listMembers(        org: 'generated',
        filter: 'generated',
        role: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/orgs#list-organization-members).


### orgs/check-membership-for-user

Check organization membership for a user

Using the `call` method:
```php
$client->call('GET /orgs/{org}/members/{username}', [
        'org' => 'generated',
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->orgs()->checkMembershipForUser(        org: 'generated',
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/orgs#check-organization-membership-for-a-user).


### orgs/remove-member

Remove an organization member

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/members/{username}', [
        'org' => 'generated',
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->orgs()->removeMember(        org: 'generated',
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/orgs#remove-an-organization-member).


### orgs/get-membership-for-user

Get organization membership for a user

Using the `call` method:
```php
$client->call('GET /orgs/{org}/memberships/{username}', [
        'org' => 'generated',
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->orgs()->getMembershipForUser(        org: 'generated',
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/orgs#get-organization-membership-for-a-user).


### orgs/set-membership-for-user

Set organization membership for a user

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/memberships/{username}', [
        'org' => 'generated',
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->orgs()->setMembershipForUser(        org: 'generated',
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/orgs#set-organization-membership-for-a-user).


### orgs/remove-membership-for-user

Remove organization membership for a user

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/memberships/{username}', [
        'org' => 'generated',
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->orgs()->removeMembershipForUser(        org: 'generated',
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/orgs#remove-organization-membership-for-a-user).


### migrations/list-for-org

List organization migrations

Using the `call` method:
```php
$client->call('GET /orgs/{org}/migrations', [
        'org' => 'generated',
        'exclude' => ,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->migrations()->listForOrg(        org: 'generated',
        exclude: ,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/migrations/orgs#list-organization-migrations).


### migrations/start-for-org

Start an organization migration

Using the `call` method:
```php
$client->call('POST /orgs/{org}/migrations', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->migrations()->startForOrg(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/migrations/orgs#start-an-organization-migration).


### migrations/get-status-for-org

Get an organization migration status

Using the `call` method:
```php
$client->call('GET /orgs/{org}/migrations/{migration_id}', [
        'org' => 'generated',
        'migration_id' => 12,
        'exclude' => ,
]);
```

Operations method:
```php
$client->operations()->migrations()->getStatusForOrg(        org: 'generated',
        migration_id: 12,
        exclude: ,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/migrations/orgs#get-an-organization-migration-status).


### migrations/download-archive-for-org

Download an organization migration archive

Using the `call` method:
```php
$client->call('GET /orgs/{org}/migrations/{migration_id}/archive', [
        'org' => 'generated',
        'migration_id' => 12,
]);
```

Operations method:
```php
$client->operations()->migrations()->downloadArchiveForOrg(        org: 'generated',
        migration_id: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/migrations/orgs#download-an-organization-migration-archive).


### migrations/download-archive-for-org

Download an organization migration archive

Using the `call` method:
```php
$client->call('STREAM /orgs/{org}/migrations/{migration_id}/archive', [
        'org' => 'generated',
        'migration_id' => 12,
]);
```

Operations method:
```php
$client->operations()->migrations()->downloadArchiveForOrgStreaming(        org: 'generated',
        migration_id: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/migrations/orgs#download-an-organization-migration-archive).


### migrations/delete-archive-for-org

Delete an organization migration archive

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/migrations/{migration_id}/archive', [
        'org' => 'generated',
        'migration_id' => 12,
]);
```

Operations method:
```php
$client->operations()->migrations()->deleteArchiveForOrg(        org: 'generated',
        migration_id: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/migrations/orgs#delete-an-organization-migration-archive).


### migrations/unlock-repo-for-org

Unlock an organization repository

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/migrations/{migration_id}/repos/{repo_name}/lock', [
        'org' => 'generated',
        'migration_id' => 12,
        'repo_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->migrations()->unlockRepoForOrg(        org: 'generated',
        migration_id: 12,
        repo_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/migrations/orgs#unlock-an-organization-repository).


### migrations/list-repos-for-org

List repositories in an organization migration

Using the `call` method:
```php
$client->call('GET /orgs/{org}/migrations/{migration_id}/repositories', [
        'org' => 'generated',
        'migration_id' => 12,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->migrations()->listReposForOrg(        org: 'generated',
        migration_id: 12,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/migrations/orgs#list-repositories-in-an-organization-migration).


### orgs/list-outside-collaborators

List outside collaborators for an organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/outside_collaborators', [
        'org' => 'generated',
        'filter' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->orgs()->listOutsideCollaborators(        org: 'generated',
        filter: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/orgs#list-outside-collaborators-for-an-organization).


### orgs/convert-member-to-outside-collaborator

Convert an organization member to outside collaborator

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/outside_collaborators/{username}', [
        'org' => 'generated',
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->orgs()->convertMemberToOutsideCollaborator(        org: 'generated',
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/orgs#convert-an-organization-member-to-outside-collaborator).


### orgs/remove-outside-collaborator

Remove outside collaborator from an organization

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/outside_collaborators/{username}', [
        'org' => 'generated',
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->orgs()->removeOutsideCollaborator(        org: 'generated',
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/orgs#remove-outside-collaborator-from-an-organization).


### projects/list-for-org

List organization projects

Using the `call` method:
```php
$client->call('GET /orgs/{org}/projects', [
        'org' => 'generated',
        'state' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->projects()->listForOrg(        org: 'generated',
        state: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/projects/projects#list-organization-projects).


### projects/create-for-org

Create an organization project

Using the `call` method:
```php
$client->call('POST /orgs/{org}/projects', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->projects()->createForOrg(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/projects/projects#create-an-organization-project).


### repos/list-for-org

List organization repositories

Using the `call` method:
```php
$client->call('GET /orgs/{org}/repos', [
        'org' => 'generated',
        'type' => 'generated',
        'direction' => 'generated',
        'sort' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listForOrg(        org: 'generated',
        type: 'generated',
        direction: 'generated',
        sort: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/repos#list-organization-repositories).


### repos/create-in-org

Create an organization repository

Using the `call` method:
```php
$client->call('POST /orgs/{org}/repos', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->createInOrg(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/repos#create-an-organization-repository).


### teams/list

List teams

Using the `call` method:
```php
$client->call('GET /orgs/{org}/teams', [
        'org' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->teams()->list(        org: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#list-teams).


### teams/create

Create a team

Using the `call` method:
```php
$client->call('POST /orgs/{org}/teams', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->teams()->create(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#create-a-team).


### teams/get-by-name

Get a team by name

Using the `call` method:
```php
$client->call('GET /orgs/{org}/teams/{team_slug}', [
        'org' => 'generated',
        'team_slug' => 'generated',
]);
```

Operations method:
```php
$client->operations()->teams()->getByName(        org: 'generated',
        team_slug: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#get-a-team-by-name).


### teams/delete-in-org

Delete a team

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/teams/{team_slug}', [
        'org' => 'generated',
        'team_slug' => 'generated',
]);
```

Operations method:
```php
$client->operations()->teams()->deleteInOrg(        org: 'generated',
        team_slug: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#delete-a-team).


### teams/update-in-org

Update a team

Using the `call` method:
```php
$client->call('PATCH /orgs/{org}/teams/{team_slug}', [
        'org' => 'generated',
        'team_slug' => 'generated',
]);
```

Operations method:
```php
$client->operations()->teams()->updateInOrg(        org: 'generated',
        team_slug: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#update-a-team).


### teams/list-discussions-in-org

List discussions

Using the `call` method:
```php
$client->call('GET /orgs/{org}/teams/{team_slug}/discussions', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'pinned' => 'generated',
        'direction' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->teams()->listDiscussionsInOrg(        org: 'generated',
        team_slug: 'generated',
        pinned: 'generated',
        direction: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#list-discussions).


### teams/create-discussion-in-org

Create a discussion

Using the `call` method:
```php
$client->call('POST /orgs/{org}/teams/{team_slug}/discussions', [
        'org' => 'generated',
        'team_slug' => 'generated',
]);
```

Operations method:
```php
$client->operations()->teams()->createDiscussionInOrg(        org: 'generated',
        team_slug: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#create-a-discussion).


### teams/get-discussion-in-org

Get a discussion

Using the `call` method:
```php
$client->call('GET /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'discussion_number' => 17,
]);
```

Operations method:
```php
$client->operations()->teams()->getDiscussionInOrg(        org: 'generated',
        team_slug: 'generated',
        discussion_number: 17,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#get-a-discussion).


### teams/delete-discussion-in-org

Delete a discussion

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'discussion_number' => 17,
]);
```

Operations method:
```php
$client->operations()->teams()->deleteDiscussionInOrg(        org: 'generated',
        team_slug: 'generated',
        discussion_number: 17,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#delete-a-discussion).


### teams/update-discussion-in-org

Update a discussion

Using the `call` method:
```php
$client->call('PATCH /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'discussion_number' => 17,
]);
```

Operations method:
```php
$client->operations()->teams()->updateDiscussionInOrg(        org: 'generated',
        team_slug: 'generated',
        discussion_number: 17,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#update-a-discussion).


### teams/list-discussion-comments-in-org

List discussion comments

Using the `call` method:
```php
$client->call('GET /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'discussion_number' => 17,
        'direction' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->teams()->listDiscussionCommentsInOrg(        org: 'generated',
        team_slug: 'generated',
        discussion_number: 17,
        direction: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#list-discussion-comments).


### teams/create-discussion-comment-in-org

Create a discussion comment

Using the `call` method:
```php
$client->call('POST /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'discussion_number' => 17,
]);
```

Operations method:
```php
$client->operations()->teams()->createDiscussionCommentInOrg(        org: 'generated',
        team_slug: 'generated',
        discussion_number: 17,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#create-a-discussion-comment).


### teams/get-discussion-comment-in-org

Get a discussion comment

Using the `call` method:
```php
$client->call('GET /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'discussion_number' => 17,
        'comment_number' => 14,
]);
```

Operations method:
```php
$client->operations()->teams()->getDiscussionCommentInOrg(        org: 'generated',
        team_slug: 'generated',
        discussion_number: 17,
        comment_number: 14,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#get-a-discussion-comment).


### teams/delete-discussion-comment-in-org

Delete a discussion comment

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'discussion_number' => 17,
        'comment_number' => 14,
]);
```

Operations method:
```php
$client->operations()->teams()->deleteDiscussionCommentInOrg(        org: 'generated',
        team_slug: 'generated',
        discussion_number: 17,
        comment_number: 14,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#delete-a-discussion-comment).


### teams/update-discussion-comment-in-org

Update a discussion comment

Using the `call` method:
```php
$client->call('PATCH /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'discussion_number' => 17,
        'comment_number' => 14,
]);
```

Operations method:
```php
$client->operations()->teams()->updateDiscussionCommentInOrg(        org: 'generated',
        team_slug: 'generated',
        discussion_number: 17,
        comment_number: 14,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#update-a-discussion-comment).


### reactions/list-for-team-discussion-comment-in-org

List reactions for a team discussion comment

Using the `call` method:
```php
$client->call('GET /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}/reactions', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'discussion_number' => 17,
        'comment_number' => 14,
        'content' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->reactions()->listForTeamDiscussionCommentInOrg(        org: 'generated',
        team_slug: 'generated',
        discussion_number: 17,
        comment_number: 14,
        content: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reactions/reactions#list-reactions-for-a-team-discussion-comment).


### reactions/create-for-team-discussion-comment-in-org

Create reaction for a team discussion comment

Using the `call` method:
```php
$client->call('POST /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}/reactions', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'discussion_number' => 17,
        'comment_number' => 14,
]);
```

Operations method:
```php
$client->operations()->reactions()->createForTeamDiscussionCommentInOrg(        org: 'generated',
        team_slug: 'generated',
        discussion_number: 17,
        comment_number: 14,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reactions/reactions#create-reaction-for-a-team-discussion-comment).


### reactions/delete-for-team-discussion-comment

Delete team discussion comment reaction

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}/reactions/{reaction_id}', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'discussion_number' => 17,
        'comment_number' => 14,
        'reaction_id' => 11,
]);
```

Operations method:
```php
$client->operations()->reactions()->deleteForTeamDiscussionComment(        org: 'generated',
        team_slug: 'generated',
        discussion_number: 17,
        comment_number: 14,
        reaction_id: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reactions/reactions#delete-team-discussion-comment-reaction).


### reactions/list-for-team-discussion-in-org

List reactions for a team discussion

Using the `call` method:
```php
$client->call('GET /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'discussion_number' => 17,
        'content' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->reactions()->listForTeamDiscussionInOrg(        org: 'generated',
        team_slug: 'generated',
        discussion_number: 17,
        content: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reactions/reactions#list-reactions-for-a-team-discussion).


### reactions/create-for-team-discussion-in-org

Create reaction for a team discussion

Using the `call` method:
```php
$client->call('POST /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'discussion_number' => 17,
]);
```

Operations method:
```php
$client->operations()->reactions()->createForTeamDiscussionInOrg(        org: 'generated',
        team_slug: 'generated',
        discussion_number: 17,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reactions/reactions#create-reaction-for-a-team-discussion).


### reactions/delete-for-team-discussion

Delete team discussion reaction

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions/{reaction_id}', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'discussion_number' => 17,
        'reaction_id' => 11,
]);
```

Operations method:
```php
$client->operations()->reactions()->deleteForTeamDiscussion(        org: 'generated',
        team_slug: 'generated',
        discussion_number: 17,
        reaction_id: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reactions/reactions#delete-team-discussion-reaction).


### teams/unlink-external-idp-group-from-team-for-org

Remove the connection between an external group and a team

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/teams/{team_slug}/external-groups', [
        'org' => 'generated',
        'team_slug' => 'generated',
]);
```

Operations method:
```php
$client->operations()->teams()->unlinkExternalIdpGroupFromTeamForOrg(        org: 'generated',
        team_slug: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#unlink-external-idp-group-team-connection).


### teams/link-external-idp-group-to-team-for-org

Update the connection between an external group and a team

Using the `call` method:
```php
$client->call('PATCH /orgs/{org}/teams/{team_slug}/external-groups', [
        'org' => 'generated',
        'team_slug' => 'generated',
]);
```

Operations method:
```php
$client->operations()->teams()->linkExternalIdpGroupToTeamForOrg(        org: 'generated',
        team_slug: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#link-external-idp-group-team-connection).


### teams/list-members-in-org

List team members

Using the `call` method:
```php
$client->call('GET /orgs/{org}/teams/{team_slug}/members', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'role' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->teams()->listMembersInOrg(        org: 'generated',
        team_slug: 'generated',
        role: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#list-team-members).


### teams/get-membership-for-user-in-org

Get team membership for a user

Using the `call` method:
```php
$client->call('GET /orgs/{org}/teams/{team_slug}/memberships/{username}', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->teams()->getMembershipForUserInOrg(        org: 'generated',
        team_slug: 'generated',
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#get-team-membership-for-a-user).


### teams/add-or-update-membership-for-user-in-org

Add or update team membership for a user

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/teams/{team_slug}/memberships/{username}', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->teams()->addOrUpdateMembershipForUserInOrg(        org: 'generated',
        team_slug: 'generated',
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#add-or-update-team-membership-for-a-user).


### teams/remove-membership-for-user-in-org

Remove team membership for a user

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/teams/{team_slug}/memberships/{username}', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->teams()->removeMembershipForUserInOrg(        org: 'generated',
        team_slug: 'generated',
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#remove-team-membership-for-a-user).


### teams/list-projects-in-org

List team projects

Using the `call` method:
```php
$client->call('GET /orgs/{org}/teams/{team_slug}/projects', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->teams()->listProjectsInOrg(        org: 'generated',
        team_slug: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#list-team-projects).


### teams/check-permissions-for-project-in-org

Check team permissions for a project

Using the `call` method:
```php
$client->call('GET /orgs/{org}/teams/{team_slug}/projects/{project_id}', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'project_id' => 10,
]);
```

Operations method:
```php
$client->operations()->teams()->checkPermissionsForProjectInOrg(        org: 'generated',
        team_slug: 'generated',
        project_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#check-team-permissions-for-a-project).


### teams/add-or-update-project-permissions-in-org

Add or update team project permissions

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/teams/{team_slug}/projects/{project_id}', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'project_id' => 10,
]);
```

Operations method:
```php
$client->operations()->teams()->addOrUpdateProjectPermissionsInOrg(        org: 'generated',
        team_slug: 'generated',
        project_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#add-or-update-team-project-permissions).


### teams/remove-project-in-org

Remove a project from a team

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/teams/{team_slug}/projects/{project_id}', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'project_id' => 10,
]);
```

Operations method:
```php
$client->operations()->teams()->removeProjectInOrg(        org: 'generated',
        team_slug: 'generated',
        project_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#remove-a-project-from-a-team).


### teams/list-repos-in-org

List team repositories

Using the `call` method:
```php
$client->call('GET /orgs/{org}/teams/{team_slug}/repos', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->teams()->listReposInOrg(        org: 'generated',
        team_slug: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#list-team-repositories).


### teams/check-permissions-for-repo-in-org

Check team permissions for a repository

Using the `call` method:
```php
$client->call('GET /orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->teams()->checkPermissionsForRepoInOrg(        org: 'generated',
        team_slug: 'generated',
        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams/#check-team-permissions-for-a-repository).


### teams/add-or-update-repo-permissions-in-org

Add or update team repository permissions

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->teams()->addOrUpdateRepoPermissionsInOrg(        org: 'generated',
        team_slug: 'generated',
        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams/#add-or-update-team-repository-permissions).


### teams/remove-repo-in-org

Remove a repository from a team

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->teams()->removeRepoInOrg(        org: 'generated',
        team_slug: 'generated',
        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams/#remove-a-repository-from-a-team).


### teams/list-child-in-org

List child teams

Using the `call` method:
```php
$client->call('GET /orgs/{org}/teams/{team_slug}/teams', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->teams()->listChildInOrg(        org: 'generated',
        team_slug: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#list-child-teams).


### projects/get-card

Get a project card

Using the `call` method:
```php
$client->call('GET /projects/columns/cards/{card_id}', [
        'card_id' => 7,
]);
```

Operations method:
```php
$client->operations()->projects()->getCard(        card_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/projects/cards#get-a-project-card).


### projects/delete-card

Delete a project card

Using the `call` method:
```php
$client->call('DELETE /projects/columns/cards/{card_id}', [
        'card_id' => 7,
]);
```

Operations method:
```php
$client->operations()->projects()->deleteCard(        card_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/projects/cards#delete-a-project-card).


### projects/update-card

Update an existing project card

Using the `call` method:
```php
$client->call('PATCH /projects/columns/cards/{card_id}', [
        'card_id' => 7,
]);
```

Operations method:
```php
$client->operations()->projects()->updateCard(        card_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/projects/cards#update-a-project-card).


### projects/move-card

Move a project card

Using the `call` method:
```php
$client->call('POST /projects/columns/cards/{card_id}/moves', [
        'card_id' => 7,
]);
```

Operations method:
```php
$client->operations()->projects()->moveCard(        card_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/projects/cards#move-a-project-card).


### projects/get-column

Get a project column

Using the `call` method:
```php
$client->call('GET /projects/columns/{column_id}', [
        'column_id' => 9,
]);
```

Operations method:
```php
$client->operations()->projects()->getColumn(        column_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/projects/columns#get-a-project-column).


### projects/delete-column

Delete a project column

Using the `call` method:
```php
$client->call('DELETE /projects/columns/{column_id}', [
        'column_id' => 9,
]);
```

Operations method:
```php
$client->operations()->projects()->deleteColumn(        column_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/projects/columns#delete-a-project-column).


### projects/update-column

Update an existing project column

Using the `call` method:
```php
$client->call('PATCH /projects/columns/{column_id}', [
        'column_id' => 9,
]);
```

Operations method:
```php
$client->operations()->projects()->updateColumn(        column_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/projects/columns#update-a-project-column).


### projects/list-cards

List project cards

Using the `call` method:
```php
$client->call('GET /projects/columns/{column_id}/cards', [
        'column_id' => 9,
        'archived_state' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->projects()->listCards(        column_id: 9,
        archived_state: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/projects/cards#list-project-cards).


### projects/create-card

Create a project card

Using the `call` method:
```php
$client->call('POST /projects/columns/{column_id}/cards', [
        'column_id' => 9,
]);
```

Operations method:
```php
$client->operations()->projects()->createCard(        column_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/projects/cards#create-a-project-card).


### projects/move-column

Move a project column

Using the `call` method:
```php
$client->call('POST /projects/columns/{column_id}/moves', [
        'column_id' => 9,
]);
```

Operations method:
```php
$client->operations()->projects()->moveColumn(        column_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/projects/columns#move-a-project-column).


### projects/get

Get a project

Using the `call` method:
```php
$client->call('GET /projects/{project_id}', [
        'project_id' => 10,
]);
```

Operations method:
```php
$client->operations()->projects()->get(        project_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/projects/projects#get-a-project).


### projects/delete

Delete a project

Using the `call` method:
```php
$client->call('DELETE /projects/{project_id}', [
        'project_id' => 10,
]);
```

Operations method:
```php
$client->operations()->projects()->delete(        project_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/projects/projects#delete-a-project).


### projects/update

Update a project

Using the `call` method:
```php
$client->call('PATCH /projects/{project_id}', [
        'project_id' => 10,
]);
```

Operations method:
```php
$client->operations()->projects()->update(        project_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/projects/projects#update-a-project).


### projects/list-collaborators

List project collaborators

Using the `call` method:
```php
$client->call('GET /projects/{project_id}/collaborators', [
        'project_id' => 10,
        'affiliation' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->projects()->listCollaborators(        project_id: 10,
        affiliation: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/projects/collaborators#list-project-collaborators).


### projects/add-collaborator

Add project collaborator

Using the `call` method:
```php
$client->call('PUT /projects/{project_id}/collaborators/{username}', [
        'project_id' => 10,
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->projects()->addCollaborator(        project_id: 10,
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/projects/collaborators#add-project-collaborator).


### projects/remove-collaborator

Remove user as a collaborator

Using the `call` method:
```php
$client->call('DELETE /projects/{project_id}/collaborators/{username}', [
        'project_id' => 10,
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->projects()->removeCollaborator(        project_id: 10,
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/projects/collaborators#remove-project-collaborator).


### projects/get-permission-for-user

Get project permission for a user

Using the `call` method:
```php
$client->call('GET /projects/{project_id}/collaborators/{username}/permission', [
        'project_id' => 10,
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->projects()->getPermissionForUser(        project_id: 10,
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/projects/collaborators#get-project-permission-for-a-user).


### projects/list-columns

List project columns

Using the `call` method:
```php
$client->call('GET /projects/{project_id}/columns', [
        'project_id' => 10,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->projects()->listColumns(        project_id: 10,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/projects/columns#list-project-columns).


### projects/create-column

Create a project column

Using the `call` method:
```php
$client->call('POST /projects/{project_id}/columns', [
        'project_id' => 10,
]);
```

Operations method:
```php
$client->operations()->projects()->createColumn(        project_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/projects/columns#create-a-project-column).


### rate-limit/get

Get rate limit status for the authenticated user

Using the `call` method:
```php
$client->call('GET /rate_limit');
```

Operations method:
```php
$client->operations()->rateLimit()->get();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/rate-limit/rate-limit#get-rate-limit-status-for-the-authenticated-user).


### repos/get

Get a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->get(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/repos#get-a-repository).


### repos/delete

Delete a repository

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->delete(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/repos#delete-a-repository).


### repos/update

Update a repository

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->update(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/repos/repos#update-a-repository).


### actions/list-artifacts-for-repo

List artifacts for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/artifacts', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->actions()->listArtifactsForRepo(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#list-artifacts-for-a-repository).


### actions/get-artifact

Get an artifact

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/artifacts/{artifact_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'artifact_id' => 11,
]);
```

Operations method:
```php
$client->operations()->actions()->getArtifact(        owner: 'generated',
        repo: 'generated',
        artifact_id: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#get-an-artifact).


### actions/delete-artifact

Delete an artifact

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/actions/artifacts/{artifact_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'artifact_id' => 11,
]);
```

Operations method:
```php
$client->operations()->actions()->deleteArtifact(        owner: 'generated',
        repo: 'generated',
        artifact_id: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#delete-an-artifact).


### actions/download-artifact

Download an artifact

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/artifacts/{artifact_id}/{archive_format}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'artifact_id' => 11,
        'archive_format' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->downloadArtifact(        owner: 'generated',
        repo: 'generated',
        artifact_id: 11,
        archive_format: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#download-an-artifact).


### actions/download-artifact

Download an artifact

Using the `call` method:
```php
$client->call('STREAM /repos/{owner}/{repo}/actions/artifacts/{artifact_id}/{archive_format}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'artifact_id' => 11,
        'archive_format' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->downloadArtifactStreaming(        owner: 'generated',
        repo: 'generated',
        artifact_id: 11,
        archive_format: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#download-an-artifact).


### actions/get-job-for-workflow-run

Get a job for a workflow run

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/jobs/{job_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'job_id' => 6,
]);
```

Operations method:
```php
$client->operations()->actions()->getJobForWorkflowRun(        owner: 'generated',
        repo: 'generated',
        job_id: 6,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#get-a-job-for-a-workflow-run).


### actions/download-job-logs-for-workflow-run

Download job logs for a workflow run

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/jobs/{job_id}/logs', [
        'owner' => 'generated',
        'repo' => 'generated',
        'job_id' => 6,
]);
```

Operations method:
```php
$client->operations()->actions()->downloadJobLogsForWorkflowRun(        owner: 'generated',
        repo: 'generated',
        job_id: 6,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#download-job-logs-for-a-workflow-run).


### actions/download-job-logs-for-workflow-run

Download job logs for a workflow run

Using the `call` method:
```php
$client->call('STREAM /repos/{owner}/{repo}/actions/jobs/{job_id}/logs', [
        'owner' => 'generated',
        'repo' => 'generated',
        'job_id' => 6,
]);
```

Operations method:
```php
$client->operations()->actions()->downloadJobLogsForWorkflowRunStreaming(        owner: 'generated',
        repo: 'generated',
        job_id: 6,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#download-job-logs-for-a-workflow-run).


### actions/list-repo-organization-secrets

List repository organization secrets

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/organization-secrets', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->actions()->listRepoOrganizationSecrets(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/actions/secrets#list-repository-organization-secrets).


### actions/get-github-actions-permissions-repository

Get GitHub Actions permissions for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/permissions', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->getGithubActionsPermissionsRepository(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#get-github-actions-permissions-for-a-repository).


### actions/set-github-actions-permissions-repository

Set GitHub Actions permissions for a repository

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/actions/permissions', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->setGithubActionsPermissionsRepository(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#set-github-actions-permissions-for-a-repository).


### actions/get-allowed-actions-repository

Get allowed actions for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/permissions/selected-actions', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->getAllowedActionsRepository(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#get-allowed-actions-for-a-repository).


### actions/set-allowed-actions-repository

Set allowed actions for a repository

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/actions/permissions/selected-actions', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->setAllowedActionsRepository(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#set-allowed-actions-for-a-repository).


### actions/list-self-hosted-runners-for-repo

List self-hosted runners for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/runners', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->actions()->listSelfHostedRunnersForRepo(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#list-self-hosted-runners-for-a-repository).


### actions/list-runner-applications-for-repo

List runner applications for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/runners/downloads', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->listRunnerApplicationsForRepo(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#list-runner-applications-for-a-repository).


### actions/create-registration-token-for-repo

Create a registration token for a repository

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/actions/runners/registration-token', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->createRegistrationTokenForRepo(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#create-a-registration-token-for-a-repository).


### actions/create-remove-token-for-repo

Create a remove token for a repository

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/actions/runners/remove-token', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->createRemoveTokenForRepo(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#create-a-remove-token-for-a-repository).


### actions/get-self-hosted-runner-for-repo

Get a self-hosted runner for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/runners/{runner_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'runner_id' => 9,
]);
```

Operations method:
```php
$client->operations()->actions()->getSelfHostedRunnerForRepo(        owner: 'generated',
        repo: 'generated',
        runner_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#get-a-self-hosted-runner-for-a-repository).


### actions/delete-self-hosted-runner-from-repo

Delete a self-hosted runner from a repository

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/actions/runners/{runner_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'runner_id' => 9,
]);
```

Operations method:
```php
$client->operations()->actions()->deleteSelfHostedRunnerFromRepo(        owner: 'generated',
        repo: 'generated',
        runner_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#delete-a-self-hosted-runner-from-a-repository).


### actions/list-workflow-runs-for-repo

List workflow runs for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/runs', [
        'owner' => 'generated',
        'repo' => 'generated',
        'actor' => 'generated',
        'branch' => 'generated',
        'event' => 'generated',
        'status' => 'generated',
        'created' => '1970-01-01T00:00:00+00:00',
        'check_suite_id' => 14,
        'head_sha' => 'generated',
        'per_page' => 8,
        'page' => 4,
        'exclude_pull_requests' => ,
]);
```

Operations method:
```php
$client->operations()->actions()->listWorkflowRunsForRepo(        owner: 'generated',
        repo: 'generated',
        actor: 'generated',
        branch: 'generated',
        event: 'generated',
        status: 'generated',
        created: '1970-01-01T00:00:00+00:00',
        check_suite_id: 14,
        head_sha: 'generated',
        per_page: 8,
        page: 4,
        exclude_pull_requests: ,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#list-workflow-runs-for-a-repository).


### actions/get-workflow-run

Get a workflow run

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/runs/{run_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'run_id' => 6,
        'exclude_pull_requests' => ,
]);
```

Operations method:
```php
$client->operations()->actions()->getWorkflowRun(        owner: 'generated',
        repo: 'generated',
        run_id: 6,
        exclude_pull_requests: ,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#get-a-workflow-run).


### actions/delete-workflow-run

Delete a workflow run

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/actions/runs/{run_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'run_id' => 6,
]);
```

Operations method:
```php
$client->operations()->actions()->deleteWorkflowRun(        owner: 'generated',
        repo: 'generated',
        run_id: 6,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#delete-a-workflow-run).


### actions/list-workflow-run-artifacts

List workflow run artifacts

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/runs/{run_id}/artifacts', [
        'owner' => 'generated',
        'repo' => 'generated',
        'run_id' => 6,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->actions()->listWorkflowRunArtifacts(        owner: 'generated',
        repo: 'generated',
        run_id: 6,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#list-workflow-run-artifacts).


### actions/get-workflow-run-attempt

Get a workflow run attempt

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/runs/{run_id}/attempts/{attempt_number}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'run_id' => 6,
        'attempt_number' => 14,
        'exclude_pull_requests' => ,
]);
```

Operations method:
```php
$client->operations()->actions()->getWorkflowRunAttempt(        owner: 'generated',
        repo: 'generated',
        run_id: 6,
        attempt_number: 14,
        exclude_pull_requests: ,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#get-a-workflow-run-attempt).


### actions/list-jobs-for-workflow-run-attempt

List jobs for a workflow run attempt

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/runs/{run_id}/attempts/{attempt_number}/jobs', [
        'owner' => 'generated',
        'repo' => 'generated',
        'run_id' => 6,
        'attempt_number' => 14,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->actions()->listJobsForWorkflowRunAttempt(        owner: 'generated',
        repo: 'generated',
        run_id: 6,
        attempt_number: 14,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#list-jobs-for-a-workflow-run-attempt).


### actions/download-workflow-run-attempt-logs

Download workflow run attempt logs

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/runs/{run_id}/attempts/{attempt_number}/logs', [
        'owner' => 'generated',
        'repo' => 'generated',
        'run_id' => 6,
        'attempt_number' => 14,
]);
```

Operations method:
```php
$client->operations()->actions()->downloadWorkflowRunAttemptLogs(        owner: 'generated',
        repo: 'generated',
        run_id: 6,
        attempt_number: 14,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#download-workflow-run-attempt-logs).


### actions/download-workflow-run-attempt-logs

Download workflow run attempt logs

Using the `call` method:
```php
$client->call('STREAM /repos/{owner}/{repo}/actions/runs/{run_id}/attempts/{attempt_number}/logs', [
        'owner' => 'generated',
        'repo' => 'generated',
        'run_id' => 6,
        'attempt_number' => 14,
]);
```

Operations method:
```php
$client->operations()->actions()->downloadWorkflowRunAttemptLogsStreaming(        owner: 'generated',
        repo: 'generated',
        run_id: 6,
        attempt_number: 14,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#download-workflow-run-attempt-logs).


### actions/cancel-workflow-run

Cancel a workflow run

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/actions/runs/{run_id}/cancel', [
        'owner' => 'generated',
        'repo' => 'generated',
        'run_id' => 6,
]);
```

Operations method:
```php
$client->operations()->actions()->cancelWorkflowRun(        owner: 'generated',
        repo: 'generated',
        run_id: 6,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#cancel-a-workflow-run).


### actions/list-jobs-for-workflow-run

List jobs for a workflow run

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/runs/{run_id}/jobs', [
        'owner' => 'generated',
        'repo' => 'generated',
        'run_id' => 6,
        'filter' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->actions()->listJobsForWorkflowRun(        owner: 'generated',
        repo: 'generated',
        run_id: 6,
        filter: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#list-jobs-for-a-workflow-run).


### actions/download-workflow-run-logs

Download workflow run logs

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/runs/{run_id}/logs', [
        'owner' => 'generated',
        'repo' => 'generated',
        'run_id' => 6,
]);
```

Operations method:
```php
$client->operations()->actions()->downloadWorkflowRunLogs(        owner: 'generated',
        repo: 'generated',
        run_id: 6,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#download-workflow-run-logs).


### actions/download-workflow-run-logs

Download workflow run logs

Using the `call` method:
```php
$client->call('STREAM /repos/{owner}/{repo}/actions/runs/{run_id}/logs', [
        'owner' => 'generated',
        'repo' => 'generated',
        'run_id' => 6,
]);
```

Operations method:
```php
$client->operations()->actions()->downloadWorkflowRunLogsStreaming(        owner: 'generated',
        repo: 'generated',
        run_id: 6,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#download-workflow-run-logs).


### actions/delete-workflow-run-logs

Delete workflow run logs

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/actions/runs/{run_id}/logs', [
        'owner' => 'generated',
        'repo' => 'generated',
        'run_id' => 6,
]);
```

Operations method:
```php
$client->operations()->actions()->deleteWorkflowRunLogs(        owner: 'generated',
        repo: 'generated',
        run_id: 6,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#delete-workflow-run-logs).


### actions/re-run-workflow

Re-run a workflow

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/actions/runs/{run_id}/rerun', [
        'owner' => 'generated',
        'repo' => 'generated',
        'run_id' => 6,
]);
```

Operations method:
```php
$client->operations()->actions()->reRunWorkflow(        owner: 'generated',
        repo: 'generated',
        run_id: 6,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#re-run-a-workflow).


### actions/get-workflow-run-usage

Get workflow run usage

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/runs/{run_id}/timing', [
        'owner' => 'generated',
        'repo' => 'generated',
        'run_id' => 6,
]);
```

Operations method:
```php
$client->operations()->actions()->getWorkflowRunUsage(        owner: 'generated',
        repo: 'generated',
        run_id: 6,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#get-workflow-run-usage).


### actions/list-repo-secrets

List repository secrets

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/secrets', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->actions()->listRepoSecrets(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#list-repository-secrets).


### actions/get-repo-public-key

Get a repository public key

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/secrets/public-key', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->getRepoPublicKey(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#get-a-repository-public-key).


### actions/get-repo-secret

Get a repository secret

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/secrets/{secret_name}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'secret_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->getRepoSecret(        owner: 'generated',
        repo: 'generated',
        secret_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#get-a-repository-secret).


### actions/create-or-update-repo-secret

Create or update a repository secret

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/actions/secrets/{secret_name}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'secret_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->createOrUpdateRepoSecret(        owner: 'generated',
        repo: 'generated',
        secret_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#create-or-update-a-repository-secret).


### actions/delete-repo-secret

Delete a repository secret

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/actions/secrets/{secret_name}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'secret_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->deleteRepoSecret(        owner: 'generated',
        repo: 'generated',
        secret_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#delete-a-repository-secret).


### actions/list-repo-workflows

List repository workflows

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/workflows', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->actions()->listRepoWorkflows(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#list-repository-workflows).


### actions/get-workflow

Get a workflow

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/workflows/{workflow_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'workflow_id' => ,
]);
```

Operations method:
```php
$client->operations()->actions()->getWorkflow(        owner: 'generated',
        repo: 'generated',
        workflow_id: ,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#get-a-workflow).


### actions/disable-workflow

Disable a workflow

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/actions/workflows/{workflow_id}/disable', [
        'owner' => 'generated',
        'repo' => 'generated',
        'workflow_id' => ,
]);
```

Operations method:
```php
$client->operations()->actions()->disableWorkflow(        owner: 'generated',
        repo: 'generated',
        workflow_id: ,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#disable-a-workflow).


### actions/create-workflow-dispatch

Create a workflow dispatch event

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/actions/workflows/{workflow_id}/dispatches', [
        'owner' => 'generated',
        'repo' => 'generated',
        'workflow_id' => ,
]);
```

Operations method:
```php
$client->operations()->actions()->createWorkflowDispatch(        owner: 'generated',
        repo: 'generated',
        workflow_id: ,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#create-a-workflow-dispatch-event).


### actions/enable-workflow

Enable a workflow

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/actions/workflows/{workflow_id}/enable', [
        'owner' => 'generated',
        'repo' => 'generated',
        'workflow_id' => ,
]);
```

Operations method:
```php
$client->operations()->actions()->enableWorkflow(        owner: 'generated',
        repo: 'generated',
        workflow_id: ,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#enable-a-workflow).


### actions/list-workflow-runs

List workflow runs for a workflow

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/workflows/{workflow_id}/runs', [
        'owner' => 'generated',
        'repo' => 'generated',
        'workflow_id' => ,
        'actor' => 'generated',
        'branch' => 'generated',
        'event' => 'generated',
        'status' => 'generated',
        'created' => '1970-01-01T00:00:00+00:00',
        'check_suite_id' => 14,
        'head_sha' => 'generated',
        'per_page' => 8,
        'page' => 4,
        'exclude_pull_requests' => ,
]);
```

Operations method:
```php
$client->operations()->actions()->listWorkflowRuns(        owner: 'generated',
        repo: 'generated',
        workflow_id: ,
        actor: 'generated',
        branch: 'generated',
        event: 'generated',
        status: 'generated',
        created: '1970-01-01T00:00:00+00:00',
        check_suite_id: 14,
        head_sha: 'generated',
        per_page: 8,
        page: 4,
        exclude_pull_requests: ,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#list-workflow-runs).


### actions/get-workflow-usage

Get workflow usage

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/workflows/{workflow_id}/timing', [
        'owner' => 'generated',
        'repo' => 'generated',
        'workflow_id' => ,
]);
```

Operations method:
```php
$client->operations()->actions()->getWorkflowUsage(        owner: 'generated',
        repo: 'generated',
        workflow_id: ,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/actions#get-workflow-usage).


### issues/list-assignees

List assignees

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/assignees', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->issues()->listAssignees(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/issues/assignees#list-assignees).


### issues/check-user-can-be-assigned

Check if a user can be assigned

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/assignees/{assignee}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'assignee' => 'generated',
]);
```

Operations method:
```php
$client->operations()->issues()->checkUserCanBeAssigned(        owner: 'generated',
        repo: 'generated',
        assignee: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/issues/assignees#check-if-a-user-can-be-assigned).


### repos/list-autolinks

List all autolinks of a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/autolinks', [
        'owner' => 'generated',
        'repo' => 'generated',
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listAutolinks(        owner: 'generated',
        repo: 'generated',
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/repos/autolinks#list-all-autolinks-of-a-repository).


### repos/create-autolink

Create an autolink reference for a repository

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/autolinks', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->createAutolink(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/repos/autolinks#create-an-autolink-reference-for-a-repository).


### repos/get-autolink

Get an autolink reference of a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/autolinks/{autolink_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'autolink_id' => 11,
]);
```

Operations method:
```php
$client->operations()->repos()->getAutolink(        owner: 'generated',
        repo: 'generated',
        autolink_id: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/repos/autolinks#get-an-autolink-reference-of-a-repository).


### repos/delete-autolink

Delete an autolink reference from a repository

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/autolinks/{autolink_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'autolink_id' => 11,
]);
```

Operations method:
```php
$client->operations()->repos()->deleteAutolink(        owner: 'generated',
        repo: 'generated',
        autolink_id: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/repos/autolinks#delete-an-autolink-reference-from-a-repository).


### repos/list-branches

List branches

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/branches', [
        'owner' => 'generated',
        'repo' => 'generated',
        'protected' => ,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listBranches(        owner: 'generated',
        repo: 'generated',
        protected: ,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/branches/branches#list-branches).


### repos/get-branch

Get a branch

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/branches/{branch}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getBranch(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/branches/branches#get-a-branch).


### repos/get-branch-protection

Get branch protection

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/branches/{branch}/protection', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getBranchProtection(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/branches/branch-protection#get-branch-protection).


### repos/update-branch-protection

Update branch protection

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/branches/{branch}/protection', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->updateBranchProtection(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/branches/branch-protection#update-branch-protection).


### repos/delete-branch-protection

Delete branch protection

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/branches/{branch}/protection', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->deleteBranchProtection(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/branches/branch-protection#delete-branch-protection).


### repos/get-admin-branch-protection

Get admin branch protection

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/branches/{branch}/protection/enforce_admins', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getAdminBranchProtection(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/branches/branch-protection#get-admin-branch-protection).


### repos/set-admin-branch-protection

Set admin branch protection

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/branches/{branch}/protection/enforce_admins', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->setAdminBranchProtection(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/branches/branch-protection#set-admin-branch-protection).


### repos/delete-admin-branch-protection

Delete admin branch protection

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/branches/{branch}/protection/enforce_admins', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->deleteAdminBranchProtection(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/branches/branch-protection#delete-admin-branch-protection).


### repos/get-pull-request-review-protection

Get pull request review protection

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/branches/{branch}/protection/required_pull_request_reviews', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getPullRequestReviewProtection(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/branches/branch-protection#get-pull-request-review-protection).


### repos/delete-pull-request-review-protection

Delete pull request review protection

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/branches/{branch}/protection/required_pull_request_reviews', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->deletePullRequestReviewProtection(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/branches/branch-protection#delete-pull-request-review-protection).


### repos/update-pull-request-review-protection

Update pull request review protection

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/branches/{branch}/protection/required_pull_request_reviews', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->updatePullRequestReviewProtection(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/branches/branch-protection#update-pull-request-review-protection).


### repos/get-commit-signature-protection

Get commit signature protection

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/branches/{branch}/protection/required_signatures', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getCommitSignatureProtection(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/branches/branch-protection#get-commit-signature-protection).


### repos/create-commit-signature-protection

Create commit signature protection

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/branches/{branch}/protection/required_signatures', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->createCommitSignatureProtection(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/branches/branch-protection#create-commit-signature-protection).


### repos/delete-commit-signature-protection

Delete commit signature protection

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/branches/{branch}/protection/required_signatures', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->deleteCommitSignatureProtection(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/branches/branch-protection#delete-commit-signature-protection).


### repos/get-status-checks-protection

Get status checks protection

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getStatusChecksProtection(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/branches/branch-protection#get-status-checks-protection).


### repos/remove-status-check-protection

Remove status check protection

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->removeStatusCheckProtection(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/branches/branch-protection#remove-status-check-protection).


### repos/update-status-check-protection

Update status check protection

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->updateStatusCheckProtection(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/branches/branch-protection#update-status-check-protection).


### repos/get-all-status-check-contexts

Get all status check contexts

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks/contexts', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getAllStatusCheckContexts(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/branches/branch-protection#get-all-status-check-contexts).


### repos/set-status-check-contexts

Set status check contexts

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks/contexts', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->setStatusCheckContexts(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/branches/branch-protection#set-status-check-contexts).


### repos/add-status-check-contexts

Add status check contexts

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks/contexts', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->addStatusCheckContexts(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/branches/branch-protection#add-status-check-contexts).


### repos/remove-status-check-contexts

Remove status check contexts

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks/contexts', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->removeStatusCheckContexts(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/branches/branch-protection#remove-status-check-contexts).


### repos/get-access-restrictions

Get access restrictions

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/branches/{branch}/protection/restrictions', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getAccessRestrictions(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/branches/branch-protection#get-access-restrictions).


### repos/delete-access-restrictions

Delete access restrictions

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/branches/{branch}/protection/restrictions', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->deleteAccessRestrictions(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/branches/branch-protection#delete-access-restrictions).


### repos/get-apps-with-access-to-protected-branch

Get apps with access to the protected branch

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/apps', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getAppsWithAccessToProtectedBranch(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/branches/branch-protection#list-apps-with-access-to-the-protected-branch).


### repos/set-app-access-restrictions

Set app access restrictions

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/apps', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->setAppAccessRestrictions(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/branches/branch-protection#set-app-access-restrictions).


### repos/add-app-access-restrictions

Add app access restrictions

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/apps', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->addAppAccessRestrictions(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/branches/branch-protection#add-app-access-restrictions).


### repos/remove-app-access-restrictions

Remove app access restrictions

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/apps', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->removeAppAccessRestrictions(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/branches/branch-protection#remove-app-access-restrictions).


### repos/get-teams-with-access-to-protected-branch

Get teams with access to the protected branch

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/teams', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getTeamsWithAccessToProtectedBranch(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/branches/branch-protection#list-teams-with-access-to-the-protected-branch).


### repos/set-team-access-restrictions

Set team access restrictions

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/teams', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->setTeamAccessRestrictions(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/branches/branch-protection#set-team-access-restrictions).


### repos/add-team-access-restrictions

Add team access restrictions

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/teams', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->addTeamAccessRestrictions(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/branches/branch-protection#add-team-access-restrictions).


### repos/remove-team-access-restrictions

Remove team access restrictions

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/teams', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->removeTeamAccessRestrictions(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/branches/branch-protection#remove-team-access-restrictions).


### repos/get-users-with-access-to-protected-branch

Get users with access to the protected branch

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/users', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getUsersWithAccessToProtectedBranch(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/branches/branch-protection#list-users-with-access-to-the-protected-branch).


### repos/set-user-access-restrictions

Set user access restrictions

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/users', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->setUserAccessRestrictions(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/branches/branch-protection#set-user-access-restrictions).


### repos/add-user-access-restrictions

Add user access restrictions

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/users', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->addUserAccessRestrictions(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/branches/branch-protection#add-user-access-restrictions).


### repos/remove-user-access-restrictions

Remove user access restrictions

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/users', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->removeUserAccessRestrictions(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/branches/branch-protection#remove-user-access-restrictions).


### checks/create

Create a check run

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/check-runs', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->checks()->create(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/checks/runs#create-a-check-run).


### checks/get

Get a check run

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/check-runs/{check_run_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'check_run_id' => 12,
]);
```

Operations method:
```php
$client->operations()->checks()->get(        owner: 'generated',
        repo: 'generated',
        check_run_id: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/checks/runs#get-a-check-run).


### checks/update

Update a check run

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/check-runs/{check_run_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'check_run_id' => 12,
]);
```

Operations method:
```php
$client->operations()->checks()->update(        owner: 'generated',
        repo: 'generated',
        check_run_id: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/checks/runs#update-a-check-run).


### checks/list-annotations

List check run annotations

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/check-runs/{check_run_id}/annotations', [
        'owner' => 'generated',
        'repo' => 'generated',
        'check_run_id' => 12,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->checks()->listAnnotations(        owner: 'generated',
        repo: 'generated',
        check_run_id: 12,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/checks/runs#list-check-run-annotations).


### checks/rerequest-run

Rerequest a check run

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/check-runs/{check_run_id}/rerequest', [
        'owner' => 'generated',
        'repo' => 'generated',
        'check_run_id' => 12,
]);
```

Operations method:
```php
$client->operations()->checks()->rerequestRun(        owner: 'generated',
        repo: 'generated',
        check_run_id: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/checks/runs#rerequest-a-check-run).


### checks/create-suite

Create a check suite

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/check-suites', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->checks()->createSuite(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/checks/suites#create-a-check-suite).


### checks/set-suites-preferences

Update repository preferences for check suites

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/check-suites/preferences', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->checks()->setSuitesPreferences(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/checks/suites#update-repository-preferences-for-check-suites).


### checks/get-suite

Get a check suite

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/check-suites/{check_suite_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'check_suite_id' => 14,
]);
```

Operations method:
```php
$client->operations()->checks()->getSuite(        owner: 'generated',
        repo: 'generated',
        check_suite_id: 14,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/checks/suites#get-a-check-suite).


### checks/list-for-suite

List check runs in a check suite

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/check-suites/{check_suite_id}/check-runs', [
        'owner' => 'generated',
        'repo' => 'generated',
        'check_suite_id' => 14,
        'check_name' => 'generated',
        'status' => 'generated',
        'filter' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->checks()->listForSuite(        owner: 'generated',
        repo: 'generated',
        check_suite_id: 14,
        check_name: 'generated',
        status: 'generated',
        filter: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/checks/runs#list-check-runs-in-a-check-suite).


### checks/rerequest-suite

Rerequest a check suite

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/check-suites/{check_suite_id}/rerequest', [
        'owner' => 'generated',
        'repo' => 'generated',
        'check_suite_id' => 14,
]);
```

Operations method:
```php
$client->operations()->checks()->rerequestSuite(        owner: 'generated',
        repo: 'generated',
        check_suite_id: 14,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/checks/suites#rerequest-a-check-suite).


### code-scanning/list-alerts-for-repo

List code scanning alerts for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/code-scanning/alerts', [
        'owner' => 'generated',
        'repo' => 'generated',
        'tool_name' => 'generated',
        'tool_guid' => ,
        'ref' => 'generated',
        'state' => 'generated',
        'severity' => 'generated',
        'page' => 4,
        'per_page' => 8,
        'direction' => 'generated',
        'sort' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codeScanning()->listAlertsForRepo(        owner: 'generated',
        repo: 'generated',
        tool_name: 'generated',
        tool_guid: ,
        ref: 'generated',
        state: 'generated',
        severity: 'generated',
        page: 4,
        per_page: 8,
        direction: 'generated',
        sort: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/code-scanning/code-scanning#list-code-scanning-alerts-for-a-repository).


### code-scanning/get-alert

Get a code scanning alert

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/code-scanning/alerts/{alert_number}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'alert_number' => 12,
]);
```

Operations method:
```php
$client->operations()->codeScanning()->getAlert(        owner: 'generated',
        repo: 'generated',
        alert_number: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/code-scanning/code-scanning#get-a-code-scanning-alert).


### code-scanning/update-alert

Update a code scanning alert

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/code-scanning/alerts/{alert_number}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'alert_number' => 12,
]);
```

Operations method:
```php
$client->operations()->codeScanning()->updateAlert(        owner: 'generated',
        repo: 'generated',
        alert_number: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/code-scanning/code-scanning#update-a-code-scanning-alert).


### code-scanning/list-alert-instances

List instances of a code scanning alert

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/code-scanning/alerts/{alert_number}/instances', [
        'owner' => 'generated',
        'repo' => 'generated',
        'alert_number' => 12,
        'ref' => 'generated',
        'page' => 4,
        'per_page' => 8,
]);
```

Operations method:
```php
$client->operations()->codeScanning()->listAlertInstances(        owner: 'generated',
        repo: 'generated',
        alert_number: 12,
        ref: 'generated',
        page: 4,
        per_page: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/code-scanning/code-scanning#list-instances-of-a-code-scanning-alert).


### code-scanning/list-recent-analyses

List code scanning analyses for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/code-scanning/analyses', [
        'owner' => 'generated',
        'repo' => 'generated',
        'tool_name' => 'generated',
        'tool_guid' => ,
        'ref' => 'generated',
        'sarif_id' => 'generated',
        'page' => 4,
        'per_page' => 8,
        'direction' => 'generated',
        'sort' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codeScanning()->listRecentAnalyses(        owner: 'generated',
        repo: 'generated',
        tool_name: 'generated',
        tool_guid: ,
        ref: 'generated',
        sarif_id: 'generated',
        page: 4,
        per_page: 8,
        direction: 'generated',
        sort: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/code-scanning/code-scanning#list-code-scanning-analyses-for-a-repository).


### code-scanning/get-analysis

Get a code scanning analysis for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/code-scanning/analyses/{analysis_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'analysis_id' => 11,
]);
```

Operations method:
```php
$client->operations()->codeScanning()->getAnalysis(        owner: 'generated',
        repo: 'generated',
        analysis_id: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/code-scanning/code-scanning#get-a-code-scanning-analysis-for-a-repository).


### code-scanning/delete-analysis

Delete a code scanning analysis from a repository

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/code-scanning/analyses/{analysis_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'analysis_id' => 11,
        'confirm_delete' => ,
]);
```

Operations method:
```php
$client->operations()->codeScanning()->deleteAnalysis(        owner: 'generated',
        repo: 'generated',
        analysis_id: 11,
        confirm_delete: ,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/code-scanning/code-scanning#delete-a-code-scanning-analysis-from-a-repository).


### code-scanning/upload-sarif

Upload an analysis as SARIF data

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/code-scanning/sarifs', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codeScanning()->uploadSarif(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/code-scanning/code-scanning#upload-an-analysis-as-sarif-data).


### code-scanning/get-sarif

Get information about a SARIF upload

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/code-scanning/sarifs/{sarif_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'sarif_id' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codeScanning()->getSarif(        owner: 'generated',
        repo: 'generated',
        sarif_id: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/code-scanning/code-scanning#get-information-about-a-sarif-upload).


### repos/codeowners-errors

List CODEOWNERS errors

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/codeowners/errors', [
        'owner' => 'generated',
        'repo' => 'generated',
        'ref' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->codeownersErrors(        owner: 'generated',
        repo: 'generated',
        ref: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/repos#list-codeowners-errors).


### repos/list-collaborators

List repository collaborators

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/collaborators', [
        'owner' => 'generated',
        'repo' => 'generated',
        'permission' => 'generated',
        'affiliation' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listCollaborators(        owner: 'generated',
        repo: 'generated',
        permission: 'generated',
        affiliation: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/collaborators/collaborators#list-repository-collaborators).


### repos/check-collaborator

Check if a user is a repository collaborator

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/collaborators/{username}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->checkCollaborator(        owner: 'generated',
        repo: 'generated',
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/collaborators/collaborators#check-if-a-user-is-a-repository-collaborator).


### repos/add-collaborator

Add a repository collaborator

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/collaborators/{username}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->addCollaborator(        owner: 'generated',
        repo: 'generated',
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/collaborators/collaborators#add-a-repository-collaborator).


### repos/remove-collaborator

Remove a repository collaborator

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/collaborators/{username}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->removeCollaborator(        owner: 'generated',
        repo: 'generated',
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/collaborators/collaborators#remove-a-repository-collaborator).


### repos/get-collaborator-permission-level

Get repository permissions for a user

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/collaborators/{username}/permission', [
        'owner' => 'generated',
        'repo' => 'generated',
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getCollaboratorPermissionLevel(        owner: 'generated',
        repo: 'generated',
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/collaborators/collaborators#get-repository-permissions-for-a-user).


### repos/list-commit-comments-for-repo

List commit comments for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/comments', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listCommitCommentsForRepo(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/commits/comments#list-commit-comments-for-a-repository).


### repos/get-commit-comment

Get a commit comment

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/comments/{comment_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'comment_id' => 10,
]);
```

Operations method:
```php
$client->operations()->repos()->getCommitComment(        owner: 'generated',
        repo: 'generated',
        comment_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/commits/comments#get-a-commit-comment).


### repos/delete-commit-comment

Delete a commit comment

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/comments/{comment_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'comment_id' => 10,
]);
```

Operations method:
```php
$client->operations()->repos()->deleteCommitComment(        owner: 'generated',
        repo: 'generated',
        comment_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/commits/comments#delete-a-commit-comment).


### repos/update-commit-comment

Update a commit comment

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/comments/{comment_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'comment_id' => 10,
]);
```

Operations method:
```php
$client->operations()->repos()->updateCommitComment(        owner: 'generated',
        repo: 'generated',
        comment_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/commits/comments#update-a-commit-comment).


### reactions/list-for-commit-comment

List reactions for a commit comment

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/comments/{comment_id}/reactions', [
        'owner' => 'generated',
        'repo' => 'generated',
        'comment_id' => 10,
        'content' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->reactions()->listForCommitComment(        owner: 'generated',
        repo: 'generated',
        comment_id: 10,
        content: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reactions/reactions#list-reactions-for-a-commit-comment).


### reactions/create-for-commit-comment

Create reaction for a commit comment

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/comments/{comment_id}/reactions', [
        'owner' => 'generated',
        'repo' => 'generated',
        'comment_id' => 10,
]);
```

Operations method:
```php
$client->operations()->reactions()->createForCommitComment(        owner: 'generated',
        repo: 'generated',
        comment_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reactions/reactions#create-reaction-for-a-commit-comment).


### reactions/delete-for-commit-comment

Delete a commit comment reaction

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/comments/{comment_id}/reactions/{reaction_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'comment_id' => 10,
        'reaction_id' => 11,
]);
```

Operations method:
```php
$client->operations()->reactions()->deleteForCommitComment(        owner: 'generated',
        repo: 'generated',
        comment_id: 10,
        reaction_id: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reactions/reactions#delete-a-commit-comment-reaction).


### repos/list-commits

List commits

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/commits', [
        'owner' => 'generated',
        'repo' => 'generated',
        'sha' => 'generated',
        'path' => 'generated',
        'author' => 'generated',
        'committer' => 'generated',
        'since' => '1970-01-01T00:00:00+00:00',
        'until' => '1970-01-01T00:00:00+00:00',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listCommits(        owner: 'generated',
        repo: 'generated',
        sha: 'generated',
        path: 'generated',
        author: 'generated',
        committer: 'generated',
        since: '1970-01-01T00:00:00+00:00',
        until: '1970-01-01T00:00:00+00:00',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/commits/commits#list-commits).


### repos/list-branches-for-head-commit

List branches for HEAD commit

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/commits/{commit_sha}/branches-where-head', [
        'owner' => 'generated',
        'repo' => 'generated',
        'commit_sha' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->listBranchesForHeadCommit(        owner: 'generated',
        repo: 'generated',
        commit_sha: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/commits/commits#list-branches-for-head-commit).


### repos/list-comments-for-commit

List commit comments

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/commits/{commit_sha}/comments', [
        'owner' => 'generated',
        'repo' => 'generated',
        'commit_sha' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listCommentsForCommit(        owner: 'generated',
        repo: 'generated',
        commit_sha: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/commits/comments#list-commit-comments).


### repos/create-commit-comment

Create a commit comment

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/commits/{commit_sha}/comments', [
        'owner' => 'generated',
        'repo' => 'generated',
        'commit_sha' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->createCommitComment(        owner: 'generated',
        repo: 'generated',
        commit_sha: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/commits/comments#create-a-commit-comment).


### repos/list-pull-requests-associated-with-commit

List pull requests associated with a commit

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/commits/{commit_sha}/pulls', [
        'owner' => 'generated',
        'repo' => 'generated',
        'commit_sha' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listPullRequestsAssociatedWithCommit(        owner: 'generated',
        repo: 'generated',
        commit_sha: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/commits/commits#list-pull-requests-associated-with-a-commit).


### repos/get-commit

Get a commit

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/commits/{ref}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'ref' => 'generated',
        'page' => 4,
        'per_page' => 8,
]);
```

Operations method:
```php
$client->operations()->repos()->getCommit(        owner: 'generated',
        repo: 'generated',
        ref: 'generated',
        page: 4,
        per_page: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/commits/commits#get-a-commit).


### checks/list-for-ref

List check runs for a Git reference

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/commits/{ref}/check-runs', [
        'owner' => 'generated',
        'repo' => 'generated',
        'ref' => 'generated',
        'check_name' => 'generated',
        'status' => 'generated',
        'app_id' => 6,
        'filter' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->checks()->listForRef(        owner: 'generated',
        repo: 'generated',
        ref: 'generated',
        check_name: 'generated',
        status: 'generated',
        app_id: 6,
        filter: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/checks/runs#list-check-runs-for-a-git-reference).


### checks/list-suites-for-ref

List check suites for a Git reference

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/commits/{ref}/check-suites', [
        'owner' => 'generated',
        'repo' => 'generated',
        'ref' => 'generated',
        'app_id' => 6,
        'check_name' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->checks()->listSuitesForRef(        owner: 'generated',
        repo: 'generated',
        ref: 'generated',
        app_id: 6,
        check_name: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/checks/suites#list-check-suites-for-a-git-reference).


### repos/get-combined-status-for-ref

Get the combined status for a specific reference

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/commits/{ref}/status', [
        'owner' => 'generated',
        'repo' => 'generated',
        'ref' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->getCombinedStatusForRef(        owner: 'generated',
        repo: 'generated',
        ref: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/commits/statuses#get-the-combined-status-for-a-specific-reference).


### repos/list-commit-statuses-for-ref

List commit statuses for a reference

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/commits/{ref}/statuses', [
        'owner' => 'generated',
        'repo' => 'generated',
        'ref' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listCommitStatusesForRef(        owner: 'generated',
        repo: 'generated',
        ref: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/commits/statuses#list-commit-statuses-for-a-reference).


### repos/compare-commits

Compare two commits

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/compare/{basehead}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'basehead' => 'generated',
        'page' => 4,
        'per_page' => 8,
]);
```

Operations method:
```php
$client->operations()->repos()->compareCommits(        owner: 'generated',
        repo: 'generated',
        basehead: 'generated',
        page: 4,
        per_page: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/commits/commits#compare-two-commits).


### repos/get-content

Get repository content

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/contents/{path}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'path' => 'generated',
        'ref' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getContent(        owner: 'generated',
        repo: 'generated',
        path: 'generated',
        ref: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/repos#get-repository-content).


### repos/create-or-update-file-contents

Create or update file contents

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/contents/{path}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'path' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->createOrUpdateFileContents(        owner: 'generated',
        repo: 'generated',
        path: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/repos#create-or-update-file-contents).


### repos/delete-file

Delete a file

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/contents/{path}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'path' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->deleteFile(        owner: 'generated',
        repo: 'generated',
        path: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/repos#delete-a-file).


### repos/list-contributors

List repository contributors

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/contributors', [
        'owner' => 'generated',
        'repo' => 'generated',
        'anon' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listContributors(        owner: 'generated',
        repo: 'generated',
        anon: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/repos#list-repository-contributors).


### repos/list-deployments

List deployments

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/deployments', [
        'owner' => 'generated',
        'repo' => 'generated',
        'sha' => 'generated',
        'ref' => 'generated',
        'task' => 'generated',
        'environment' => ,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listDeployments(        owner: 'generated',
        repo: 'generated',
        sha: 'generated',
        ref: 'generated',
        task: 'generated',
        environment: ,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/deployments/deployments#list-deployments).


### repos/create-deployment

Create a deployment

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/deployments', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->createDeployment(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/deployments/deployments#create-a-deployment).


### repos/get-deployment

Get a deployment

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/deployments/{deployment_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'deployment_id' => 13,
]);
```

Operations method:
```php
$client->operations()->repos()->getDeployment(        owner: 'generated',
        repo: 'generated',
        deployment_id: 13,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/deployments/deployments#get-a-deployment).


### repos/delete-deployment

Delete a deployment

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/deployments/{deployment_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'deployment_id' => 13,
]);
```

Operations method:
```php
$client->operations()->repos()->deleteDeployment(        owner: 'generated',
        repo: 'generated',
        deployment_id: 13,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/deployments/deployments#delete-a-deployment).


### repos/list-deployment-statuses

List deployment statuses

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/deployments/{deployment_id}/statuses', [
        'owner' => 'generated',
        'repo' => 'generated',
        'deployment_id' => 13,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listDeploymentStatuses(        owner: 'generated',
        repo: 'generated',
        deployment_id: 13,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/deployments/statuses#list-deployment-statuses).


### repos/create-deployment-status

Create a deployment status

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/deployments/{deployment_id}/statuses', [
        'owner' => 'generated',
        'repo' => 'generated',
        'deployment_id' => 13,
]);
```

Operations method:
```php
$client->operations()->repos()->createDeploymentStatus(        owner: 'generated',
        repo: 'generated',
        deployment_id: 13,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/deployments/statuses#create-a-deployment-status).


### repos/get-deployment-status

Get a deployment status

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/deployments/{deployment_id}/statuses/{status_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'deployment_id' => 13,
        'status_id' => 9,
]);
```

Operations method:
```php
$client->operations()->repos()->getDeploymentStatus(        owner: 'generated',
        repo: 'generated',
        deployment_id: 13,
        status_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/deployments/statuses#get-a-deployment-status).


### repos/create-dispatch-event

Create a repository dispatch event

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/dispatches', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->createDispatchEvent(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/repos#create-a-repository-dispatch-event).


### repos/get-all-environments

List environments

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/environments', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->getAllEnvironments(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/deployments/environments#list-environments).


### repos/get-environment

Get an environment

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/environments/{environment_name}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'environment_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getEnvironment(        owner: 'generated',
        repo: 'generated',
        environment_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/deployments/environments#get-an-environment).


### repos/create-or-update-environment

Create or update an environment

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/environments/{environment_name}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'environment_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->createOrUpdateEnvironment(        owner: 'generated',
        repo: 'generated',
        environment_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/deployments/environments#create-or-update-an-environment).


### repos/delete-an-environment

Delete an environment

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/environments/{environment_name}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'environment_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->deleteAnEnvironment(        owner: 'generated',
        repo: 'generated',
        environment_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/deployments/environments#delete-an-environment).


### repos/list-deployment-branch-policies

List deployment branch policies

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies', [
        'owner' => 'generated',
        'repo' => 'generated',
        'environment_name' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listDeploymentBranchPolicies(        owner: 'generated',
        repo: 'generated',
        environment_name: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/deployments/branch-policies#list-deployment-branch-policies).


### repos/create-deployment-branch-policy

Create a deployment branch policy

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies', [
        'owner' => 'generated',
        'repo' => 'generated',
        'environment_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->createDeploymentBranchPolicy(        owner: 'generated',
        repo: 'generated',
        environment_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/deployments/branch-policies#create-deployment-branch-policy).


### repos/get-deployment-branch-policy

Get a deployment branch policy

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies/{branch_policy_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'environment_name' => 'generated',
        'branch_policy_id' => 16,
]);
```

Operations method:
```php
$client->operations()->repos()->getDeploymentBranchPolicy(        owner: 'generated',
        repo: 'generated',
        environment_name: 'generated',
        branch_policy_id: 16,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/deployments/branch-policies#get-deployment-branch-policy).


### repos/update-deployment-branch-policy

Update a deployment branch policy

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies/{branch_policy_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'environment_name' => 'generated',
        'branch_policy_id' => 16,
]);
```

Operations method:
```php
$client->operations()->repos()->updateDeploymentBranchPolicy(        owner: 'generated',
        repo: 'generated',
        environment_name: 'generated',
        branch_policy_id: 16,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/deployments/branch-policies#update-deployment-branch-policy).


### repos/delete-deployment-branch-policy

Delete a deployment branch policy

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies/{branch_policy_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'environment_name' => 'generated',
        'branch_policy_id' => 16,
]);
```

Operations method:
```php
$client->operations()->repos()->deleteDeploymentBranchPolicy(        owner: 'generated',
        repo: 'generated',
        environment_name: 'generated',
        branch_policy_id: 16,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/deployments/branch-policies#delete-deployment-branch-policy).


### activity/list-repo-events

List repository events

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/events', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->activity()->listRepoEvents(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/activity#list-repository-events).


### repos/list-forks

List forks

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/forks', [
        'owner' => 'generated',
        'repo' => 'generated',
        'sort' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listForks(        owner: 'generated',
        repo: 'generated',
        sort: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/repos#list-forks).


### repos/create-fork

Create a fork

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/forks', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->createFork(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/repos#create-a-fork).


### git/create-blob

Create a blob

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/git/blobs', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->git()->createBlob(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/git#create-a-blob).


### git/get-blob

Get a blob

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/git/blobs/{file_sha}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'file_sha' => 'generated',
]);
```

Operations method:
```php
$client->operations()->git()->getBlob(        owner: 'generated',
        repo: 'generated',
        file_sha: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/git#get-a-blob).


### git/create-commit

Create a commit

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/git/commits', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->git()->createCommit(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/git#create-a-commit).


### git/get-commit

Get a commit object

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/git/commits/{commit_sha}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'commit_sha' => 'generated',
]);
```

Operations method:
```php
$client->operations()->git()->getCommit(        owner: 'generated',
        repo: 'generated',
        commit_sha: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/git#get-a-commit).


### git/list-matching-refs

List matching references

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/git/matching-refs/{ref}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'ref' => 'generated',
]);
```

Operations method:
```php
$client->operations()->git()->listMatchingRefs(        owner: 'generated',
        repo: 'generated',
        ref: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/git#list-matching-references).


### git/get-ref

Get a reference

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/git/ref/{ref}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'ref' => 'generated',
]);
```

Operations method:
```php
$client->operations()->git()->getRef(        owner: 'generated',
        repo: 'generated',
        ref: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/git#get-a-reference).


### git/create-ref

Create a reference

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/git/refs', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->git()->createRef(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/git#create-a-reference).


### git/delete-ref

Delete a reference

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/git/refs/{ref}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'ref' => 'generated',
]);
```

Operations method:
```php
$client->operations()->git()->deleteRef(        owner: 'generated',
        repo: 'generated',
        ref: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/git#delete-a-reference).


### git/update-ref

Update a reference

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/git/refs/{ref}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'ref' => 'generated',
]);
```

Operations method:
```php
$client->operations()->git()->updateRef(        owner: 'generated',
        repo: 'generated',
        ref: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/git#update-a-reference).


### git/create-tag

Create a tag object

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/git/tags', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->git()->createTag(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/git#create-a-tag-object).


### git/get-tag

Get a tag

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/git/tags/{tag_sha}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'tag_sha' => 'generated',
]);
```

Operations method:
```php
$client->operations()->git()->getTag(        owner: 'generated',
        repo: 'generated',
        tag_sha: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/git#get-a-tag).


### git/create-tree

Create a tree

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/git/trees', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->git()->createTree(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/git#create-a-tree).


### git/get-tree

Get a tree

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/git/trees/{tree_sha}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'tree_sha' => 'generated',
        'recursive' => 'generated',
]);
```

Operations method:
```php
$client->operations()->git()->getTree(        owner: 'generated',
        repo: 'generated',
        tree_sha: 'generated',
        recursive: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/git#get-a-tree).


### repos/list-webhooks

List repository webhooks

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/hooks', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listWebhooks(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/webhooks/repos#list-repository-webhooks).


### repos/create-webhook

Create a repository webhook

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/hooks', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->createWebhook(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/webhooks/repos#create-a-repository-webhook).


### repos/get-webhook

Get a repository webhook

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/hooks/{hook_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'hook_id' => 7,
]);
```

Operations method:
```php
$client->operations()->repos()->getWebhook(        owner: 'generated',
        repo: 'generated',
        hook_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/webhooks/repos#get-a-repository-webhook).


### repos/delete-webhook

Delete a repository webhook

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/hooks/{hook_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'hook_id' => 7,
]);
```

Operations method:
```php
$client->operations()->repos()->deleteWebhook(        owner: 'generated',
        repo: 'generated',
        hook_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/webhooks/repos#delete-a-repository-webhook).


### repos/update-webhook

Update a repository webhook

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/hooks/{hook_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'hook_id' => 7,
]);
```

Operations method:
```php
$client->operations()->repos()->updateWebhook(        owner: 'generated',
        repo: 'generated',
        hook_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/webhooks/repos#update-a-repository-webhook).


### repos/get-webhook-config-for-repo

Get a webhook configuration for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/hooks/{hook_id}/config', [
        'owner' => 'generated',
        'repo' => 'generated',
        'hook_id' => 7,
]);
```

Operations method:
```php
$client->operations()->repos()->getWebhookConfigForRepo(        owner: 'generated',
        repo: 'generated',
        hook_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/webhooks/repo-config#get-a-webhook-configuration-for-a-repository).


### repos/update-webhook-config-for-repo

Update a webhook configuration for a repository

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/hooks/{hook_id}/config', [
        'owner' => 'generated',
        'repo' => 'generated',
        'hook_id' => 7,
]);
```

Operations method:
```php
$client->operations()->repos()->updateWebhookConfigForRepo(        owner: 'generated',
        repo: 'generated',
        hook_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/webhooks/repo-config#update-a-webhook-configuration-for-a-repository).


### repos/list-webhook-deliveries

List deliveries for a repository webhook

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/hooks/{hook_id}/deliveries', [
        'owner' => 'generated',
        'repo' => 'generated',
        'hook_id' => 7,
        'cursor' => 'generated',
        'redelivery' => ,
        'per_page' => 8,
]);
```

Operations method:
```php
$client->operations()->repos()->listWebhookDeliveries(        owner: 'generated',
        repo: 'generated',
        hook_id: 7,
        cursor: 'generated',
        redelivery: ,
        per_page: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/webhooks/repo-deliveries#list-deliveries-for-a-repository-webhook).


### repos/get-webhook-delivery

Get a delivery for a repository webhook

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/hooks/{hook_id}/deliveries/{delivery_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'hook_id' => 7,
        'delivery_id' => 11,
]);
```

Operations method:
```php
$client->operations()->repos()->getWebhookDelivery(        owner: 'generated',
        repo: 'generated',
        hook_id: 7,
        delivery_id: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/webhooks/repo-deliveries#get-a-delivery-for-a-repository-webhook).


### repos/redeliver-webhook-delivery

Redeliver a delivery for a repository webhook

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/hooks/{hook_id}/deliveries/{delivery_id}/attempts', [
        'owner' => 'generated',
        'repo' => 'generated',
        'hook_id' => 7,
        'delivery_id' => 11,
]);
```

Operations method:
```php
$client->operations()->repos()->redeliverWebhookDelivery(        owner: 'generated',
        repo: 'generated',
        hook_id: 7,
        delivery_id: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/webhooks/repo-deliveries#redeliver-a-delivery-for-a-repository-webhook).


### repos/ping-webhook

Ping a repository webhook

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/hooks/{hook_id}/pings', [
        'owner' => 'generated',
        'repo' => 'generated',
        'hook_id' => 7,
]);
```

Operations method:
```php
$client->operations()->repos()->pingWebhook(        owner: 'generated',
        repo: 'generated',
        hook_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/webhooks/repos#ping-a-repository-webhook).


### repos/test-push-webhook

Test the push repository webhook

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/hooks/{hook_id}/tests', [
        'owner' => 'generated',
        'repo' => 'generated',
        'hook_id' => 7,
]);
```

Operations method:
```php
$client->operations()->repos()->testPushWebhook(        owner: 'generated',
        repo: 'generated',
        hook_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/webhooks/repos#test-the-push-repository-webhook).


### apps/get-repo-installation

Get a repository installation for the authenticated app

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/installation', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->apps()->getRepoInstallation(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/apps#get-a-repository-installation-for-the-authenticated-app).


### repos/list-invitations

List repository invitations

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/invitations', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listInvitations(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/collaborators/invitations#list-repository-invitations).


### repos/delete-invitation

Delete a repository invitation

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/invitations/{invitation_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'invitation_id' => 13,
]);
```

Operations method:
```php
$client->operations()->repos()->deleteInvitation(        owner: 'generated',
        repo: 'generated',
        invitation_id: 13,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/collaborators/invitations#delete-a-repository-invitation).


### repos/update-invitation

Update a repository invitation

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/invitations/{invitation_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'invitation_id' => 13,
]);
```

Operations method:
```php
$client->operations()->repos()->updateInvitation(        owner: 'generated',
        repo: 'generated',
        invitation_id: 13,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/collaborators/invitations#update-a-repository-invitation).


### issues/list-for-repo

List repository issues

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/issues', [
        'owner' => 'generated',
        'repo' => 'generated',
        'milestone' => 'generated',
        'assignee' => 'generated',
        'creator' => 'generated',
        'mentioned' => 'generated',
        'labels' => 'generated',
        'since' => '1970-01-01T00:00:00+00:00',
        'state' => 'generated',
        'sort' => 'generated',
        'direction' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->issues()->listForRepo(        owner: 'generated',
        repo: 'generated',
        milestone: 'generated',
        assignee: 'generated',
        creator: 'generated',
        mentioned: 'generated',
        labels: 'generated',
        since: '1970-01-01T00:00:00+00:00',
        state: 'generated',
        sort: 'generated',
        direction: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/issues/issues#list-repository-issues).


### issues/create

Create an issue

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/issues', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->issues()->create(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/issues/issues#create-an-issue).


### issues/list-comments-for-repo

List issue comments for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/issues/comments', [
        'owner' => 'generated',
        'repo' => 'generated',
        'direction' => 'generated',
        'since' => '1970-01-01T00:00:00+00:00',
        'sort' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->issues()->listCommentsForRepo(        owner: 'generated',
        repo: 'generated',
        direction: 'generated',
        since: '1970-01-01T00:00:00+00:00',
        sort: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/issues/comments#list-issue-comments-for-a-repository).


### issues/get-comment

Get an issue comment

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/issues/comments/{comment_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'comment_id' => 10,
]);
```

Operations method:
```php
$client->operations()->issues()->getComment(        owner: 'generated',
        repo: 'generated',
        comment_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/issues/comments#get-an-issue-comment).


### issues/delete-comment

Delete an issue comment

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/issues/comments/{comment_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'comment_id' => 10,
]);
```

Operations method:
```php
$client->operations()->issues()->deleteComment(        owner: 'generated',
        repo: 'generated',
        comment_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/issues/comments#delete-an-issue-comment).


### issues/update-comment

Update an issue comment

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/issues/comments/{comment_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'comment_id' => 10,
]);
```

Operations method:
```php
$client->operations()->issues()->updateComment(        owner: 'generated',
        repo: 'generated',
        comment_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/issues/comments#update-an-issue-comment).


### reactions/list-for-issue-comment

List reactions for an issue comment

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/issues/comments/{comment_id}/reactions', [
        'owner' => 'generated',
        'repo' => 'generated',
        'comment_id' => 10,
        'content' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->reactions()->listForIssueComment(        owner: 'generated',
        repo: 'generated',
        comment_id: 10,
        content: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reactions/reactions#list-reactions-for-an-issue-comment).


### reactions/create-for-issue-comment

Create reaction for an issue comment

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/issues/comments/{comment_id}/reactions', [
        'owner' => 'generated',
        'repo' => 'generated',
        'comment_id' => 10,
]);
```

Operations method:
```php
$client->operations()->reactions()->createForIssueComment(        owner: 'generated',
        repo: 'generated',
        comment_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reactions/reactions#create-reaction-for-an-issue-comment).


### reactions/delete-for-issue-comment

Delete an issue comment reaction

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/issues/comments/{comment_id}/reactions/{reaction_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'comment_id' => 10,
        'reaction_id' => 11,
]);
```

Operations method:
```php
$client->operations()->reactions()->deleteForIssueComment(        owner: 'generated',
        repo: 'generated',
        comment_id: 10,
        reaction_id: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reactions/reactions#delete-an-issue-comment-reaction).


### issues/list-events-for-repo

List issue events for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/issues/events', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->issues()->listEventsForRepo(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/issues/events#list-issue-events-for-a-repository).


### issues/get-event

Get an issue event

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/issues/events/{event_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'event_id' => 8,
]);
```

Operations method:
```php
$client->operations()->issues()->getEvent(        owner: 'generated',
        repo: 'generated',
        event_id: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/issues/events#get-an-issue-event).


### issues/get

Get an issue

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/issues/{issue_number}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'issue_number' => 12,
]);
```

Operations method:
```php
$client->operations()->issues()->get(        owner: 'generated',
        repo: 'generated',
        issue_number: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/issues/issues#get-an-issue).


### issues/update

Update an issue

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/issues/{issue_number}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'issue_number' => 12,
]);
```

Operations method:
```php
$client->operations()->issues()->update(        owner: 'generated',
        repo: 'generated',
        issue_number: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/issues/issues#update-an-issue).


### issues/add-assignees

Add assignees to an issue

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/issues/{issue_number}/assignees', [
        'owner' => 'generated',
        'repo' => 'generated',
        'issue_number' => 12,
]);
```

Operations method:
```php
$client->operations()->issues()->addAssignees(        owner: 'generated',
        repo: 'generated',
        issue_number: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/issues/assignees#add-assignees-to-an-issue).


### issues/remove-assignees

Remove assignees from an issue

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/issues/{issue_number}/assignees', [
        'owner' => 'generated',
        'repo' => 'generated',
        'issue_number' => 12,
]);
```

Operations method:
```php
$client->operations()->issues()->removeAssignees(        owner: 'generated',
        repo: 'generated',
        issue_number: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/issues/assignees#remove-assignees-from-an-issue).


### issues/check-user-can-be-assigned-to-issue

Check if a user can be assigned to a issue

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/issues/{issue_number}/assignees/{assignee}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'issue_number' => 12,
        'assignee' => 'generated',
]);
```

Operations method:
```php
$client->operations()->issues()->checkUserCanBeAssignedToIssue(        owner: 'generated',
        repo: 'generated',
        issue_number: 12,
        assignee: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/issues/assignees#check-if-a-user-can-be-assigned-to-a-issue).


### issues/list-comments

List issue comments

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/issues/{issue_number}/comments', [
        'owner' => 'generated',
        'repo' => 'generated',
        'issue_number' => 12,
        'since' => '1970-01-01T00:00:00+00:00',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->issues()->listComments(        owner: 'generated',
        repo: 'generated',
        issue_number: 12,
        since: '1970-01-01T00:00:00+00:00',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/issues/comments#list-issue-comments).


### issues/create-comment

Create an issue comment

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/issues/{issue_number}/comments', [
        'owner' => 'generated',
        'repo' => 'generated',
        'issue_number' => 12,
]);
```

Operations method:
```php
$client->operations()->issues()->createComment(        owner: 'generated',
        repo: 'generated',
        issue_number: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/issues/comments#create-an-issue-comment).


### issues/list-events

List issue events

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/issues/{issue_number}/events', [
        'owner' => 'generated',
        'repo' => 'generated',
        'issue_number' => 12,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->issues()->listEvents(        owner: 'generated',
        repo: 'generated',
        issue_number: 12,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/issues/events#list-issue-events).


### issues/list-labels-on-issue

List labels for an issue

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/issues/{issue_number}/labels', [
        'owner' => 'generated',
        'repo' => 'generated',
        'issue_number' => 12,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->issues()->listLabelsOnIssue(        owner: 'generated',
        repo: 'generated',
        issue_number: 12,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/issues/labels#list-labels-for-an-issue).


### issues/set-labels

Set labels for an issue

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/issues/{issue_number}/labels', [
        'owner' => 'generated',
        'repo' => 'generated',
        'issue_number' => 12,
]);
```

Operations method:
```php
$client->operations()->issues()->setLabels(        owner: 'generated',
        repo: 'generated',
        issue_number: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/issues/labels#set-labels-for-an-issue).


### issues/add-labels

Add labels to an issue

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/issues/{issue_number}/labels', [
        'owner' => 'generated',
        'repo' => 'generated',
        'issue_number' => 12,
]);
```

Operations method:
```php
$client->operations()->issues()->addLabels(        owner: 'generated',
        repo: 'generated',
        issue_number: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/issues/labels#add-labels-to-an-issue).


### issues/remove-all-labels

Remove all labels from an issue

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/issues/{issue_number}/labels', [
        'owner' => 'generated',
        'repo' => 'generated',
        'issue_number' => 12,
]);
```

Operations method:
```php
$client->operations()->issues()->removeAllLabels(        owner: 'generated',
        repo: 'generated',
        issue_number: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/issues/labels#remove-all-labels-from-an-issue).


### issues/remove-label

Remove a label from an issue

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/issues/{issue_number}/labels/{name}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'issue_number' => 12,
        'name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->issues()->removeLabel(        owner: 'generated',
        repo: 'generated',
        issue_number: 12,
        name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/issues/labels#remove-a-label-from-an-issue).


### issues/lock

Lock an issue

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/issues/{issue_number}/lock', [
        'owner' => 'generated',
        'repo' => 'generated',
        'issue_number' => 12,
]);
```

Operations method:
```php
$client->operations()->issues()->lock(        owner: 'generated',
        repo: 'generated',
        issue_number: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/issues/issues#lock-an-issue).


### issues/unlock

Unlock an issue

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/issues/{issue_number}/lock', [
        'owner' => 'generated',
        'repo' => 'generated',
        'issue_number' => 12,
]);
```

Operations method:
```php
$client->operations()->issues()->unlock(        owner: 'generated',
        repo: 'generated',
        issue_number: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/issues/issues#unlock-an-issue).


### reactions/list-for-issue

List reactions for an issue

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/issues/{issue_number}/reactions', [
        'owner' => 'generated',
        'repo' => 'generated',
        'issue_number' => 12,
        'content' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->reactions()->listForIssue(        owner: 'generated',
        repo: 'generated',
        issue_number: 12,
        content: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reactions/reactions#list-reactions-for-an-issue).


### reactions/create-for-issue

Create reaction for an issue

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/issues/{issue_number}/reactions', [
        'owner' => 'generated',
        'repo' => 'generated',
        'issue_number' => 12,
]);
```

Operations method:
```php
$client->operations()->reactions()->createForIssue(        owner: 'generated',
        repo: 'generated',
        issue_number: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reactions/reactions#create-reaction-for-an-issue).


### reactions/delete-for-issue

Delete an issue reaction

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/issues/{issue_number}/reactions/{reaction_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'issue_number' => 12,
        'reaction_id' => 11,
]);
```

Operations method:
```php
$client->operations()->reactions()->deleteForIssue(        owner: 'generated',
        repo: 'generated',
        issue_number: 12,
        reaction_id: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reactions/reactions#delete-an-issue-reaction).


### issues/list-events-for-timeline

List timeline events for an issue

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/issues/{issue_number}/timeline', [
        'owner' => 'generated',
        'repo' => 'generated',
        'issue_number' => 12,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->issues()->listEventsForTimeline(        owner: 'generated',
        repo: 'generated',
        issue_number: 12,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/issues/timeline#list-timeline-events-for-an-issue).


### repos/list-deploy-keys

List deploy keys

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/keys', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listDeployKeys(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/deploy-keys#list-deploy-keys).


### repos/create-deploy-key

Create a deploy key

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/keys', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->createDeployKey(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/deploy-keys#create-a-deploy-key).


### repos/get-deploy-key

Get a deploy key

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/keys/{key_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'key_id' => 6,
]);
```

Operations method:
```php
$client->operations()->repos()->getDeployKey(        owner: 'generated',
        repo: 'generated',
        key_id: 6,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/deploy-keys#get-a-deploy-key).


### repos/delete-deploy-key

Delete a deploy key

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/keys/{key_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'key_id' => 6,
]);
```

Operations method:
```php
$client->operations()->repos()->deleteDeployKey(        owner: 'generated',
        repo: 'generated',
        key_id: 6,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/deploy-keys#delete-a-deploy-key).


### issues/list-labels-for-repo

List labels for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/labels', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->issues()->listLabelsForRepo(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/issues/labels#list-labels-for-a-repository).


### issues/create-label

Create a label

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/labels', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->issues()->createLabel(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/issues/labels#create-a-label).


### issues/get-label

Get a label

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/labels/{name}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->issues()->getLabel(        owner: 'generated',
        repo: 'generated',
        name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/issues/labels#get-a-label).


### issues/delete-label

Delete a label

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/labels/{name}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->issues()->deleteLabel(        owner: 'generated',
        repo: 'generated',
        name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/issues/labels#delete-a-label).


### issues/update-label

Update a label

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/labels/{name}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->issues()->updateLabel(        owner: 'generated',
        repo: 'generated',
        name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/issues/labels#update-a-label).


### repos/list-languages

List repository languages

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/languages', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->listLanguages(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/repos#list-repository-languages).


### repos/enable-lfs-for-repo

Enable Git LFS for a repository

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/lfs', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->enableLfsForRepo(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/repos#enable-git-lfs-for-a-repository).


### repos/disable-lfs-for-repo

Disable Git LFS for a repository

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/lfs', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->disableLfsForRepo(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/repos#disable-git-lfs-for-a-repository).


### licenses/get-for-repo

Get the license for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/license', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->licenses()->getForRepo(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/licenses/licenses#get-the-license-for-a-repository).


### repos/merge-upstream

Sync a fork branch with the upstream repository

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/merge-upstream', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->mergeUpstream(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/branches/branches#sync-a-fork-branch-with-the-upstream-repository).


### repos/merge

Merge a branch

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/merges', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->merge(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/branches/branches#merge-a-branch).


### issues/list-milestones

List milestones

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/milestones', [
        'owner' => 'generated',
        'repo' => 'generated',
        'state' => 'generated',
        'sort' => 'generated',
        'direction' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->issues()->listMilestones(        owner: 'generated',
        repo: 'generated',
        state: 'generated',
        sort: 'generated',
        direction: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/issues/milestones#list-milestones).


### issues/create-milestone

Create a milestone

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/milestones', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->issues()->createMilestone(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/issues/milestones#create-a-milestone).


### issues/get-milestone

Get a milestone

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/milestones/{milestone_number}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'milestone_number' => 16,
]);
```

Operations method:
```php
$client->operations()->issues()->getMilestone(        owner: 'generated',
        repo: 'generated',
        milestone_number: 16,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/issues/milestones#get-a-milestone).


### issues/delete-milestone

Delete a milestone

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/milestones/{milestone_number}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'milestone_number' => 16,
]);
```

Operations method:
```php
$client->operations()->issues()->deleteMilestone(        owner: 'generated',
        repo: 'generated',
        milestone_number: 16,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/issues/milestones#delete-a-milestone).


### issues/update-milestone

Update a milestone

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/milestones/{milestone_number}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'milestone_number' => 16,
]);
```

Operations method:
```php
$client->operations()->issues()->updateMilestone(        owner: 'generated',
        repo: 'generated',
        milestone_number: 16,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/issues/milestones#update-a-milestone).


### issues/list-labels-for-milestone

List labels for issues in a milestone

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/milestones/{milestone_number}/labels', [
        'owner' => 'generated',
        'repo' => 'generated',
        'milestone_number' => 16,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->issues()->listLabelsForMilestone(        owner: 'generated',
        repo: 'generated',
        milestone_number: 16,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/issues/labels#list-labels-for-issues-in-a-milestone).


### activity/list-repo-notifications-for-authenticated-user

List repository notifications for the authenticated user

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/notifications', [
        'owner' => 'generated',
        'repo' => 'generated',
        'since' => '1970-01-01T00:00:00+00:00',
        'before' => '1970-01-01T00:00:00+00:00',
        'all' => ,
        'participating' => ,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->activity()->listRepoNotificationsForAuthenticatedUser(        owner: 'generated',
        repo: 'generated',
        since: '1970-01-01T00:00:00+00:00',
        before: '1970-01-01T00:00:00+00:00',
        all: ,
        participating: ,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/activity#list-repository-notifications-for-the-authenticated-user).


### activity/mark-repo-notifications-as-read

Mark repository notifications as read

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/notifications', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->activity()->markRepoNotificationsAsRead(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/activity#mark-repository-notifications-as-read).


### repos/get-pages

Get a GitHub AE Pages site

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/pages', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getPages(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/pages#get-a-github-pages-site).


### repos/update-information-about-pages-site

Update information about a GitHub AE Pages site

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/pages', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->updateInformationAboutPagesSite(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/pages#update-information-about-a-github-pages-site).


### repos/create-pages-site

Create a GitHub AE Pages site

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/pages', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->createPagesSite(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/pages#create-a-github-pages-site).


### repos/delete-pages-site

Delete a GitHub AE Pages site

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/pages', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->deletePagesSite(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/pages#delete-a-github-pages-site).


### repos/list-pages-builds

List GitHub AE Pages builds

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/pages/builds', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listPagesBuilds(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/pages#list-github-pages-builds).


### repos/request-pages-build

Request a GitHub AE Pages build

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/pages/builds', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->requestPagesBuild(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/pages#request-a-github-pages-build).


### repos/get-latest-pages-build

Get latest Pages build

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/pages/builds/latest', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getLatestPagesBuild(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/pages#get-latest-pages-build).


### repos/get-pages-build

Get GitHub AE Pages build

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/pages/builds/{build_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'build_id' => 8,
]);
```

Operations method:
```php
$client->operations()->repos()->getPagesBuild(        owner: 'generated',
        repo: 'generated',
        build_id: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/pages#get-github-pages-build).


### projects/list-for-repo

List repository projects

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/projects', [
        'owner' => 'generated',
        'repo' => 'generated',
        'state' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->projects()->listForRepo(        owner: 'generated',
        repo: 'generated',
        state: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/projects/projects#list-repository-projects).


### projects/create-for-repo

Create a repository project

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/projects', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->projects()->createForRepo(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/projects/projects#create-a-repository-project).


### pulls/list

List pull requests

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/pulls', [
        'owner' => 'generated',
        'repo' => 'generated',
        'head' => 'generated',
        'base' => 'generated',
        'direction' => 'generated',
        'state' => 'generated',
        'sort' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->pulls()->list(        owner: 'generated',
        repo: 'generated',
        head: 'generated',
        base: 'generated',
        direction: 'generated',
        state: 'generated',
        sort: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/pulls/pulls#list-pull-requests).


### pulls/create

Create a pull request

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/pulls', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->pulls()->create(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/pulls/pulls#create-a-pull-request).


### pulls/list-review-comments-for-repo

List review comments in a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/pulls/comments', [
        'owner' => 'generated',
        'repo' => 'generated',
        'sort' => 'generated',
        'direction' => 'generated',
        'since' => '1970-01-01T00:00:00+00:00',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->pulls()->listReviewCommentsForRepo(        owner: 'generated',
        repo: 'generated',
        sort: 'generated',
        direction: 'generated',
        since: '1970-01-01T00:00:00+00:00',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/pulls/comments#list-review-comments-in-a-repository).


### pulls/get-review-comment

Get a review comment for a pull request

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/pulls/comments/{comment_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'comment_id' => 10,
]);
```

Operations method:
```php
$client->operations()->pulls()->getReviewComment(        owner: 'generated',
        repo: 'generated',
        comment_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/pulls/comments#get-a-review-comment-for-a-pull-request).


### pulls/delete-review-comment

Delete a review comment for a pull request

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/pulls/comments/{comment_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'comment_id' => 10,
]);
```

Operations method:
```php
$client->operations()->pulls()->deleteReviewComment(        owner: 'generated',
        repo: 'generated',
        comment_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/pulls/comments#delete-a-review-comment-for-a-pull-request).


### pulls/update-review-comment

Update a review comment for a pull request

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/pulls/comments/{comment_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'comment_id' => 10,
]);
```

Operations method:
```php
$client->operations()->pulls()->updateReviewComment(        owner: 'generated',
        repo: 'generated',
        comment_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/pulls/comments#update-a-review-comment-for-a-pull-request).


### reactions/list-for-pull-request-review-comment

List reactions for a pull request review comment

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/pulls/comments/{comment_id}/reactions', [
        'owner' => 'generated',
        'repo' => 'generated',
        'comment_id' => 10,
        'content' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->reactions()->listForPullRequestReviewComment(        owner: 'generated',
        repo: 'generated',
        comment_id: 10,
        content: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reactions/reactions#list-reactions-for-a-pull-request-review-comment).


### reactions/create-for-pull-request-review-comment

Create reaction for a pull request review comment

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/pulls/comments/{comment_id}/reactions', [
        'owner' => 'generated',
        'repo' => 'generated',
        'comment_id' => 10,
]);
```

Operations method:
```php
$client->operations()->reactions()->createForPullRequestReviewComment(        owner: 'generated',
        repo: 'generated',
        comment_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reactions/reactions#create-reaction-for-a-pull-request-review-comment).


### reactions/delete-for-pull-request-comment

Delete a pull request comment reaction

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/pulls/comments/{comment_id}/reactions/{reaction_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'comment_id' => 10,
        'reaction_id' => 11,
]);
```

Operations method:
```php
$client->operations()->reactions()->deleteForPullRequestComment(        owner: 'generated',
        repo: 'generated',
        comment_id: 10,
        reaction_id: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reactions/reactions#delete-a-pull-request-comment-reaction).


### pulls/get

Get a pull request

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/pulls/{pull_number}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'pull_number' => 11,
]);
```

Operations method:
```php
$client->operations()->pulls()->get(        owner: 'generated',
        repo: 'generated',
        pull_number: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/pulls/pulls#get-a-pull-request).


### pulls/update

Update a pull request

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/pulls/{pull_number}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'pull_number' => 11,
]);
```

Operations method:
```php
$client->operations()->pulls()->update(        owner: 'generated',
        repo: 'generated',
        pull_number: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/pulls/pulls#update-a-pull-request).


### pulls/list-review-comments

List review comments on a pull request

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/pulls/{pull_number}/comments', [
        'owner' => 'generated',
        'repo' => 'generated',
        'pull_number' => 11,
        'direction' => 'generated',
        'since' => '1970-01-01T00:00:00+00:00',
        'sort' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->pulls()->listReviewComments(        owner: 'generated',
        repo: 'generated',
        pull_number: 11,
        direction: 'generated',
        since: '1970-01-01T00:00:00+00:00',
        sort: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/pulls/comments#list-review-comments-on-a-pull-request).


### pulls/create-review-comment

Create a review comment for a pull request

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/pulls/{pull_number}/comments', [
        'owner' => 'generated',
        'repo' => 'generated',
        'pull_number' => 11,
]);
```

Operations method:
```php
$client->operations()->pulls()->createReviewComment(        owner: 'generated',
        repo: 'generated',
        pull_number: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/pulls/comments#create-a-review-comment-for-a-pull-request).


### pulls/create-reply-for-review-comment

Create a reply for a review comment

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/pulls/{pull_number}/comments/{comment_id}/replies', [
        'owner' => 'generated',
        'repo' => 'generated',
        'pull_number' => 11,
        'comment_id' => 10,
]);
```

Operations method:
```php
$client->operations()->pulls()->createReplyForReviewComment(        owner: 'generated',
        repo: 'generated',
        pull_number: 11,
        comment_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/pulls/comments#create-a-reply-for-a-review-comment).


### pulls/list-commits

List commits on a pull request

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/pulls/{pull_number}/commits', [
        'owner' => 'generated',
        'repo' => 'generated',
        'pull_number' => 11,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->pulls()->listCommits(        owner: 'generated',
        repo: 'generated',
        pull_number: 11,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/pulls/pulls#list-commits-on-a-pull-request).


### pulls/list-files

List pull requests files

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/pulls/{pull_number}/files', [
        'owner' => 'generated',
        'repo' => 'generated',
        'pull_number' => 11,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->pulls()->listFiles(        owner: 'generated',
        repo: 'generated',
        pull_number: 11,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/pulls/pulls#list-pull-requests-files).


### pulls/check-if-merged

Check if a pull request has been merged

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/pulls/{pull_number}/merge', [
        'owner' => 'generated',
        'repo' => 'generated',
        'pull_number' => 11,
]);
```

Operations method:
```php
$client->operations()->pulls()->checkIfMerged(        owner: 'generated',
        repo: 'generated',
        pull_number: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/pulls/pulls#check-if-a-pull-request-has-been-merged).


### pulls/merge

Merge a pull request

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/pulls/{pull_number}/merge', [
        'owner' => 'generated',
        'repo' => 'generated',
        'pull_number' => 11,
]);
```

Operations method:
```php
$client->operations()->pulls()->merge(        owner: 'generated',
        repo: 'generated',
        pull_number: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/pulls/pulls#merge-a-pull-request).


### pulls/list-requested-reviewers

Get all requested reviewers for a pull request

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/pulls/{pull_number}/requested_reviewers', [
        'owner' => 'generated',
        'repo' => 'generated',
        'pull_number' => 11,
]);
```

Operations method:
```php
$client->operations()->pulls()->listRequestedReviewers(        owner: 'generated',
        repo: 'generated',
        pull_number: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/pulls/review-requests#get-all-requested-reviewers-for-a-pull-request).


### pulls/request-reviewers

Request reviewers for a pull request

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/pulls/{pull_number}/requested_reviewers', [
        'owner' => 'generated',
        'repo' => 'generated',
        'pull_number' => 11,
]);
```

Operations method:
```php
$client->operations()->pulls()->requestReviewers(        owner: 'generated',
        repo: 'generated',
        pull_number: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/pulls/review-requests#request-reviewers-for-a-pull-request).


### pulls/remove-requested-reviewers

Remove requested reviewers from a pull request

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/pulls/{pull_number}/requested_reviewers', [
        'owner' => 'generated',
        'repo' => 'generated',
        'pull_number' => 11,
]);
```

Operations method:
```php
$client->operations()->pulls()->removeRequestedReviewers(        owner: 'generated',
        repo: 'generated',
        pull_number: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/pulls/review-requests#remove-requested-reviewers-from-a-pull-request).


### pulls/list-reviews

List reviews for a pull request

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/pulls/{pull_number}/reviews', [
        'owner' => 'generated',
        'repo' => 'generated',
        'pull_number' => 11,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->pulls()->listReviews(        owner: 'generated',
        repo: 'generated',
        pull_number: 11,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/pulls/reviews#list-reviews-for-a-pull-request).


### pulls/create-review

Create a review for a pull request

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/pulls/{pull_number}/reviews', [
        'owner' => 'generated',
        'repo' => 'generated',
        'pull_number' => 11,
]);
```

Operations method:
```php
$client->operations()->pulls()->createReview(        owner: 'generated',
        repo: 'generated',
        pull_number: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/pulls/reviews#create-a-review-for-a-pull-request).


### pulls/get-review

Get a review for a pull request

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'pull_number' => 11,
        'review_id' => 9,
]);
```

Operations method:
```php
$client->operations()->pulls()->getReview(        owner: 'generated',
        repo: 'generated',
        pull_number: 11,
        review_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/pulls/reviews#get-a-review-for-a-pull-request).


### pulls/update-review

Update a review for a pull request

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'pull_number' => 11,
        'review_id' => 9,
]);
```

Operations method:
```php
$client->operations()->pulls()->updateReview(        owner: 'generated',
        repo: 'generated',
        pull_number: 11,
        review_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/pulls/reviews#update-a-review-for-a-pull-request).


### pulls/delete-pending-review

Delete a pending review for a pull request

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'pull_number' => 11,
        'review_id' => 9,
]);
```

Operations method:
```php
$client->operations()->pulls()->deletePendingReview(        owner: 'generated',
        repo: 'generated',
        pull_number: 11,
        review_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/pulls/reviews#delete-a-pending-review-for-a-pull-request).


### pulls/list-comments-for-review

List comments for a pull request review

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}/comments', [
        'owner' => 'generated',
        'repo' => 'generated',
        'pull_number' => 11,
        'review_id' => 9,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->pulls()->listCommentsForReview(        owner: 'generated',
        repo: 'generated',
        pull_number: 11,
        review_id: 9,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/pulls/reviews#list-comments-for-a-pull-request-review).


### pulls/dismiss-review

Dismiss a review for a pull request

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}/dismissals', [
        'owner' => 'generated',
        'repo' => 'generated',
        'pull_number' => 11,
        'review_id' => 9,
]);
```

Operations method:
```php
$client->operations()->pulls()->dismissReview(        owner: 'generated',
        repo: 'generated',
        pull_number: 11,
        review_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/pulls/reviews#dismiss-a-review-for-a-pull-request).


### pulls/submit-review

Submit a review for a pull request

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}/events', [
        'owner' => 'generated',
        'repo' => 'generated',
        'pull_number' => 11,
        'review_id' => 9,
]);
```

Operations method:
```php
$client->operations()->pulls()->submitReview(        owner: 'generated',
        repo: 'generated',
        pull_number: 11,
        review_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/pulls/reviews#submit-a-review-for-a-pull-request).


### pulls/update-branch

Update a pull request branch

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/pulls/{pull_number}/update-branch', [
        'owner' => 'generated',
        'repo' => 'generated',
        'pull_number' => 11,
]);
```

Operations method:
```php
$client->operations()->pulls()->updateBranch(        owner: 'generated',
        repo: 'generated',
        pull_number: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/pulls/pulls#update-a-pull-request-branch).


### repos/get-readme

Get a repository README

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/readme', [
        'owner' => 'generated',
        'repo' => 'generated',
        'ref' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getReadme(        owner: 'generated',
        repo: 'generated',
        ref: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/repos#get-a-repository-readme).


### repos/get-readme-in-directory

Get a repository README for a directory

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/readme/{dir}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'dir' => 'generated',
        'ref' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getReadmeInDirectory(        owner: 'generated',
        repo: 'generated',
        dir: 'generated',
        ref: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/repos#get-a-repository-directory-readme).


### repos/list-releases

List releases

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/releases', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listReleases(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/releases/releases#list-releases).


### repos/create-release

Create a release

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/releases', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->createRelease(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/releases/releases#create-a-release).


### repos/get-release-asset

Get a release asset

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/releases/assets/{asset_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'asset_id' => 8,
]);
```

Operations method:
```php
$client->operations()->repos()->getReleaseAsset(        owner: 'generated',
        repo: 'generated',
        asset_id: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/releases/assets#get-a-release-asset).


### repos/delete-release-asset

Delete a release asset

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/releases/assets/{asset_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'asset_id' => 8,
]);
```

Operations method:
```php
$client->operations()->repos()->deleteReleaseAsset(        owner: 'generated',
        repo: 'generated',
        asset_id: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/releases/assets#delete-a-release-asset).


### repos/update-release-asset

Update a release asset

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/releases/assets/{asset_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'asset_id' => 8,
]);
```

Operations method:
```php
$client->operations()->repos()->updateReleaseAsset(        owner: 'generated',
        repo: 'generated',
        asset_id: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/releases/assets#update-a-release-asset).


### repos/get-latest-release

Get the latest release

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/releases/latest', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getLatestRelease(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/releases/releases#get-the-latest-release).


### repos/get-release-by-tag

Get a release by tag name

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/releases/tags/{tag}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'tag' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getReleaseByTag(        owner: 'generated',
        repo: 'generated',
        tag: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/releases/releases#get-a-release-by-tag-name).


### repos/get-release

Get a release

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/releases/{release_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'release_id' => 10,
]);
```

Operations method:
```php
$client->operations()->repos()->getRelease(        owner: 'generated',
        repo: 'generated',
        release_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/releases/releases#get-a-release).


### repos/delete-release

Delete a release

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/releases/{release_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'release_id' => 10,
]);
```

Operations method:
```php
$client->operations()->repos()->deleteRelease(        owner: 'generated',
        repo: 'generated',
        release_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/releases/releases#delete-a-release).


### repos/update-release

Update a release

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/releases/{release_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'release_id' => 10,
]);
```

Operations method:
```php
$client->operations()->repos()->updateRelease(        owner: 'generated',
        repo: 'generated',
        release_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/releases/releases#update-a-release).


### repos/list-release-assets

List release assets

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/releases/{release_id}/assets', [
        'owner' => 'generated',
        'repo' => 'generated',
        'release_id' => 10,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listReleaseAssets(        owner: 'generated',
        repo: 'generated',
        release_id: 10,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/releases/assets#list-release-assets).


### repos/upload-release-asset

Upload a release asset

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/releases/{release_id}/assets', [
        'owner' => 'generated',
        'repo' => 'generated',
        'release_id' => 10,
        'name' => 'generated',
        'label' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->uploadReleaseAsset(        owner: 'generated',
        repo: 'generated',
        release_id: 10,
        name: 'generated',
        label: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/releases/assets#upload-a-release-asset).


### reactions/list-for-release

List reactions for a release

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/releases/{release_id}/reactions', [
        'owner' => 'generated',
        'repo' => 'generated',
        'release_id' => 10,
        'content' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->reactions()->listForRelease(        owner: 'generated',
        repo: 'generated',
        release_id: 10,
        content: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reactions/reactions#list-reactions-for-a-release).


### reactions/create-for-release

Create reaction for a release

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/releases/{release_id}/reactions', [
        'owner' => 'generated',
        'repo' => 'generated',
        'release_id' => 10,
]);
```

Operations method:
```php
$client->operations()->reactions()->createForRelease(        owner: 'generated',
        repo: 'generated',
        release_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reactions/reactions#create-reaction-for-a-release).


### reactions/delete-for-release

Delete a release reaction

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/releases/{release_id}/reactions/{reaction_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'release_id' => 10,
        'reaction_id' => 11,
]);
```

Operations method:
```php
$client->operations()->reactions()->deleteForRelease(        owner: 'generated',
        repo: 'generated',
        release_id: 10,
        reaction_id: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reactions/reactions#delete-a-release-reaction).


### secret-scanning/list-alerts-for-repo

List secret scanning alerts for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/secret-scanning/alerts', [
        'owner' => 'generated',
        'repo' => 'generated',
        'state' => 'generated',
        'secret_type' => 'generated',
        'resolution' => 'generated',
        'page' => 4,
        'per_page' => 8,
]);
```

Operations method:
```php
$client->operations()->secretScanning()->listAlertsForRepo(        owner: 'generated',
        repo: 'generated',
        state: 'generated',
        secret_type: 'generated',
        resolution: 'generated',
        page: 4,
        per_page: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/secret-scanning/secret-scanning#list-secret-scanning-alerts-for-a-repository).


### secret-scanning/get-alert

Get a secret scanning alert

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/secret-scanning/alerts/{alert_number}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'alert_number' => 12,
]);
```

Operations method:
```php
$client->operations()->secretScanning()->getAlert(        owner: 'generated',
        repo: 'generated',
        alert_number: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/secret-scanning/secret-scanning#get-a-secret-scanning-alert).


### secret-scanning/update-alert

Update a secret scanning alert

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/secret-scanning/alerts/{alert_number}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'alert_number' => 12,
]);
```

Operations method:
```php
$client->operations()->secretScanning()->updateAlert(        owner: 'generated',
        repo: 'generated',
        alert_number: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/secret-scanning/secret-scanning#update-a-secret-scanning-alert).


### secret-scanning/list-locations-for-alert

List locations for a secret scanning alert

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/secret-scanning/alerts/{alert_number}/locations', [
        'owner' => 'generated',
        'repo' => 'generated',
        'alert_number' => 12,
        'page' => 4,
        'per_page' => 8,
]);
```

Operations method:
```php
$client->operations()->secretScanning()->listLocationsForAlert(        owner: 'generated',
        repo: 'generated',
        alert_number: 12,
        page: 4,
        per_page: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/secret-scanning/secret-scanning#list-locations-for-a-secret-scanning-alert).


### activity/list-stargazers-for-repo

List stargazers

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/stargazers', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->activity()->listStargazersForRepo(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/activity#list-stargazers).


### repos/get-code-frequency-stats

Get the weekly commit activity

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/stats/code_frequency', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getCodeFrequencyStats(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/metrics/statistics#get-the-weekly-commit-activity).


### repos/get-commit-activity-stats

Get the last year of commit activity

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/stats/commit_activity', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getCommitActivityStats(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/metrics/statistics#get-the-last-year-of-commit-activity).


### repos/get-contributors-stats

Get all contributor commit activity

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/stats/contributors', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getContributorsStats(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/metrics/statistics#get-all-contributor-commit-activity).


### repos/get-participation-stats

Get the weekly commit count

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/stats/participation', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getParticipationStats(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/metrics/statistics#get-the-weekly-commit-count).


### repos/get-punch-card-stats

Get the hourly commit count for each day

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/stats/punch_card', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getPunchCardStats(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/metrics/statistics#get-the-hourly-commit-count-for-each-day).


### repos/create-commit-status

Create a commit status

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/statuses/{sha}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'sha' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->createCommitStatus(        owner: 'generated',
        repo: 'generated',
        sha: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/commits/statuses#create-a-commit-status).


### activity/list-watchers-for-repo

List watchers

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/subscribers', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->activity()->listWatchersForRepo(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/activity#list-watchers).


### activity/get-repo-subscription

Get a repository subscription

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/subscription', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->activity()->getRepoSubscription(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/activity#get-a-repository-subscription).


### activity/set-repo-subscription

Set a repository subscription

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/subscription', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->activity()->setRepoSubscription(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/activity#set-a-repository-subscription).


### activity/delete-repo-subscription

Delete a repository subscription

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/subscription', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->activity()->deleteRepoSubscription(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/activity#delete-a-repository-subscription).


### repos/list-tags

List repository tags

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/tags', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listTags(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/repos#list-repository-tags).


### repos/download-tarball-archive

Download a repository archive (tar)

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/tarball/{ref}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'ref' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->downloadTarballArchive(        owner: 'generated',
        repo: 'generated',
        ref: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/repos#download-a-repository-archive).


### repos/download-tarball-archive

Download a repository archive (tar)

Using the `call` method:
```php
$client->call('STREAM /repos/{owner}/{repo}/tarball/{ref}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'ref' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->downloadTarballArchiveStreaming(        owner: 'generated',
        repo: 'generated',
        ref: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/repos#download-a-repository-archive).


### repos/list-teams

List repository teams

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/teams', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listTeams(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/repos#list-repository-teams).


### repos/get-all-topics

Get all repository topics

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/topics', [
        'owner' => 'generated',
        'repo' => 'generated',
        'page' => 4,
        'per_page' => 8,
]);
```

Operations method:
```php
$client->operations()->repos()->getAllTopics(        owner: 'generated',
        repo: 'generated',
        page: 4,
        per_page: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/repos#get-all-repository-topics).


### repos/replace-all-topics

Replace all repository topics

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/topics', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->replaceAllTopics(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/repos#replace-all-repository-topics).


### repos/transfer

Transfer a repository

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/transfer', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->transfer(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/repos#transfer-a-repository).


### repos/download-zipball-archive

Download a repository archive (zip)

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/zipball/{ref}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'ref' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->downloadZipballArchive(        owner: 'generated',
        repo: 'generated',
        ref: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/repos#download-a-repository-archive).


### repos/download-zipball-archive

Download a repository archive (zip)

Using the `call` method:
```php
$client->call('STREAM /repos/{owner}/{repo}/zipball/{ref}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'ref' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->downloadZipballArchiveStreaming(        owner: 'generated',
        repo: 'generated',
        ref: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/repos#download-a-repository-archive).


### repos/create-using-template

Create a repository using a template

Using the `call` method:
```php
$client->call('POST /repos/{template_owner}/{template_repo}/generate', [
        'template_owner' => 'generated',
        'template_repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->createUsingTemplate(        template_owner: 'generated',
        template_repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/repos#create-a-repository-using-a-template).


### search/code

Search code

Using the `call` method:
```php
$client->call('GET /search/code', [
        'q' => 'generated',
        'sort' => 'generated',
        'order' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->search()->code(        q: 'generated',
        sort: 'generated',
        order: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/search/search#search-code).


### search/commits

Search commits

Using the `call` method:
```php
$client->call('GET /search/commits', [
        'q' => 'generated',
        'sort' => 'generated',
        'order' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->search()->commits(        q: 'generated',
        sort: 'generated',
        order: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/search/search#search-commits).


### search/issues-and-pull-requests

Search issues and pull requests

Using the `call` method:
```php
$client->call('GET /search/issues', [
        'q' => 'generated',
        'sort' => 'generated',
        'order' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->search()->issuesAndPullRequests(        q: 'generated',
        sort: 'generated',
        order: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/search/search#search-issues-and-pull-requests).


### search/labels

Search labels

Using the `call` method:
```php
$client->call('GET /search/labels', [
        'repository_id' => 13,
        'q' => 'generated',
        'sort' => 'generated',
        'order' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->search()->labels(        repository_id: 13,
        q: 'generated',
        sort: 'generated',
        order: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/search/search#search-labels).


### search/repos

Search repositories

Using the `call` method:
```php
$client->call('GET /search/repositories', [
        'q' => 'generated',
        'sort' => 'generated',
        'order' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->search()->repos(        q: 'generated',
        sort: 'generated',
        order: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/search/search#search-repositories).


### search/topics

Search topics

Using the `call` method:
```php
$client->call('GET /search/topics', [
        'q' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->search()->topics(        q: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/search/search#search-topics).


### search/users

Search users

Using the `call` method:
```php
$client->call('GET /search/users', [
        'q' => 'generated',
        'sort' => 'generated',
        'order' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->search()->users(        q: 'generated',
        sort: 'generated',
        order: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/search/search#search-users).


### teams/get-legacy

Get a team (Legacy)

Using the `call` method:
```php
$client->call('GET /teams/{team_id}', [
        'team_id' => 7,
]);
```

Operations method:
```php
$client->operations()->teams()->getLegacy(        team_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams/#get-a-team-legacy).


### teams/delete-legacy

Delete a team (Legacy)

Using the `call` method:
```php
$client->call('DELETE /teams/{team_id}', [
        'team_id' => 7,
]);
```

Operations method:
```php
$client->operations()->teams()->deleteLegacy(        team_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams/#delete-a-team-legacy).


### teams/update-legacy

Update a team (Legacy)

Using the `call` method:
```php
$client->call('PATCH /teams/{team_id}', [
        'team_id' => 7,
]);
```

Operations method:
```php
$client->operations()->teams()->updateLegacy(        team_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams/#update-a-team-legacy).


### teams/list-discussions-legacy

List discussions (Legacy)

Using the `call` method:
```php
$client->call('GET /teams/{team_id}/discussions', [
        'team_id' => 7,
        'direction' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->teams()->listDiscussionsLegacy(        team_id: 7,
        direction: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#list-discussions-legacy).


### teams/create-discussion-legacy

Create a discussion (Legacy)

Using the `call` method:
```php
$client->call('POST /teams/{team_id}/discussions', [
        'team_id' => 7,
]);
```

Operations method:
```php
$client->operations()->teams()->createDiscussionLegacy(        team_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#create-a-discussion-legacy).


### teams/get-discussion-legacy

Get a discussion (Legacy)

Using the `call` method:
```php
$client->call('GET /teams/{team_id}/discussions/{discussion_number}', [
        'team_id' => 7,
        'discussion_number' => 17,
]);
```

Operations method:
```php
$client->operations()->teams()->getDiscussionLegacy(        team_id: 7,
        discussion_number: 17,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#get-a-discussion-legacy).


### teams/delete-discussion-legacy

Delete a discussion (Legacy)

Using the `call` method:
```php
$client->call('DELETE /teams/{team_id}/discussions/{discussion_number}', [
        'team_id' => 7,
        'discussion_number' => 17,
]);
```

Operations method:
```php
$client->operations()->teams()->deleteDiscussionLegacy(        team_id: 7,
        discussion_number: 17,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#delete-a-discussion-legacy).


### teams/update-discussion-legacy

Update a discussion (Legacy)

Using the `call` method:
```php
$client->call('PATCH /teams/{team_id}/discussions/{discussion_number}', [
        'team_id' => 7,
        'discussion_number' => 17,
]);
```

Operations method:
```php
$client->operations()->teams()->updateDiscussionLegacy(        team_id: 7,
        discussion_number: 17,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#update-a-discussion-legacy).


### teams/list-discussion-comments-legacy

List discussion comments (Legacy)

Using the `call` method:
```php
$client->call('GET /teams/{team_id}/discussions/{discussion_number}/comments', [
        'team_id' => 7,
        'discussion_number' => 17,
        'direction' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->teams()->listDiscussionCommentsLegacy(        team_id: 7,
        discussion_number: 17,
        direction: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#list-discussion-comments-legacy).


### teams/create-discussion-comment-legacy

Create a discussion comment (Legacy)

Using the `call` method:
```php
$client->call('POST /teams/{team_id}/discussions/{discussion_number}/comments', [
        'team_id' => 7,
        'discussion_number' => 17,
]);
```

Operations method:
```php
$client->operations()->teams()->createDiscussionCommentLegacy(        team_id: 7,
        discussion_number: 17,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#create-a-discussion-comment-legacy).


### teams/get-discussion-comment-legacy

Get a discussion comment (Legacy)

Using the `call` method:
```php
$client->call('GET /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}', [
        'team_id' => 7,
        'discussion_number' => 17,
        'comment_number' => 14,
]);
```

Operations method:
```php
$client->operations()->teams()->getDiscussionCommentLegacy(        team_id: 7,
        discussion_number: 17,
        comment_number: 14,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#get-a-discussion-comment-legacy).


### teams/delete-discussion-comment-legacy

Delete a discussion comment (Legacy)

Using the `call` method:
```php
$client->call('DELETE /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}', [
        'team_id' => 7,
        'discussion_number' => 17,
        'comment_number' => 14,
]);
```

Operations method:
```php
$client->operations()->teams()->deleteDiscussionCommentLegacy(        team_id: 7,
        discussion_number: 17,
        comment_number: 14,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#delete-a-discussion-comment-legacy).


### teams/update-discussion-comment-legacy

Update a discussion comment (Legacy)

Using the `call` method:
```php
$client->call('PATCH /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}', [
        'team_id' => 7,
        'discussion_number' => 17,
        'comment_number' => 14,
]);
```

Operations method:
```php
$client->operations()->teams()->updateDiscussionCommentLegacy(        team_id: 7,
        discussion_number: 17,
        comment_number: 14,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#update-a-discussion-comment-legacy).


### teams/list-members-legacy

List team members (Legacy)

Using the `call` method:
```php
$client->call('GET /teams/{team_id}/members', [
        'team_id' => 7,
        'role' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->teams()->listMembersLegacy(        team_id: 7,
        role: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#list-team-members-legacy).


### teams/get-member-legacy

Get team member (Legacy)

Using the `call` method:
```php
$client->call('GET /teams/{team_id}/members/{username}', [
        'team_id' => 7,
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->teams()->getMemberLegacy(        team_id: 7,
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#get-team-member-legacy).


### teams/add-member-legacy

Add team member (Legacy)

Using the `call` method:
```php
$client->call('PUT /teams/{team_id}/members/{username}', [
        'team_id' => 7,
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->teams()->addMemberLegacy(        team_id: 7,
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#add-team-member-legacy).


### teams/remove-member-legacy

Remove team member (Legacy)

Using the `call` method:
```php
$client->call('DELETE /teams/{team_id}/members/{username}', [
        'team_id' => 7,
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->teams()->removeMemberLegacy(        team_id: 7,
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#remove-team-member-legacy).


### teams/get-membership-for-user-legacy

Get team membership for a user (Legacy)

Using the `call` method:
```php
$client->call('GET /teams/{team_id}/memberships/{username}', [
        'team_id' => 7,
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->teams()->getMembershipForUserLegacy(        team_id: 7,
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#get-team-membership-for-a-user-legacy).


### teams/add-or-update-membership-for-user-legacy

Add or update team membership for a user (Legacy)

Using the `call` method:
```php
$client->call('PUT /teams/{team_id}/memberships/{username}', [
        'team_id' => 7,
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->teams()->addOrUpdateMembershipForUserLegacy(        team_id: 7,
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#add-or-update-team-membership-for-a-user-legacy).


### teams/remove-membership-for-user-legacy

Remove team membership for a user (Legacy)

Using the `call` method:
```php
$client->call('DELETE /teams/{team_id}/memberships/{username}', [
        'team_id' => 7,
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->teams()->removeMembershipForUserLegacy(        team_id: 7,
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#remove-team-membership-for-a-user-legacy).


### teams/list-projects-legacy

List team projects (Legacy)

Using the `call` method:
```php
$client->call('GET /teams/{team_id}/projects', [
        'team_id' => 7,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->teams()->listProjectsLegacy(        team_id: 7,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams/#list-team-projects-legacy).


### teams/check-permissions-for-project-legacy

Check team permissions for a project (Legacy)

Using the `call` method:
```php
$client->call('GET /teams/{team_id}/projects/{project_id}', [
        'team_id' => 7,
        'project_id' => 10,
]);
```

Operations method:
```php
$client->operations()->teams()->checkPermissionsForProjectLegacy(        team_id: 7,
        project_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams/#check-team-permissions-for-a-project-legacy).


### teams/add-or-update-project-permissions-legacy

Add or update team project permissions (Legacy)

Using the `call` method:
```php
$client->call('PUT /teams/{team_id}/projects/{project_id}', [
        'team_id' => 7,
        'project_id' => 10,
]);
```

Operations method:
```php
$client->operations()->teams()->addOrUpdateProjectPermissionsLegacy(        team_id: 7,
        project_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams/#add-or-update-team-project-permissions-legacy).


### teams/remove-project-legacy

Remove a project from a team (Legacy)

Using the `call` method:
```php
$client->call('DELETE /teams/{team_id}/projects/{project_id}', [
        'team_id' => 7,
        'project_id' => 10,
]);
```

Operations method:
```php
$client->operations()->teams()->removeProjectLegacy(        team_id: 7,
        project_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams/#remove-a-project-from-a-team-legacy).


### teams/list-repos-legacy

List team repositories (Legacy)

Using the `call` method:
```php
$client->call('GET /teams/{team_id}/repos', [
        'team_id' => 7,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->teams()->listReposLegacy(        team_id: 7,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams/#list-team-repositories-legacy).


### teams/check-permissions-for-repo-legacy

Check team permissions for a repository (Legacy)

Using the `call` method:
```php
$client->call('GET /teams/{team_id}/repos/{owner}/{repo}', [
        'team_id' => 7,
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->teams()->checkPermissionsForRepoLegacy(        team_id: 7,
        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams/#check-team-permissions-for-a-repository-legacy).


### teams/add-or-update-repo-permissions-legacy

Add or update team repository permissions (Legacy)

Using the `call` method:
```php
$client->call('PUT /teams/{team_id}/repos/{owner}/{repo}', [
        'team_id' => 7,
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->teams()->addOrUpdateRepoPermissionsLegacy(        team_id: 7,
        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#add-or-update-team-repository-permissions-legacy).


### teams/remove-repo-legacy

Remove a repository from a team (Legacy)

Using the `call` method:
```php
$client->call('DELETE /teams/{team_id}/repos/{owner}/{repo}', [
        'team_id' => 7,
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->teams()->removeRepoLegacy(        team_id: 7,
        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams/#remove-a-repository-from-a-team-legacy).


### teams/list-child-legacy

List child teams (Legacy)

Using the `call` method:
```php
$client->call('GET /teams/{team_id}/teams', [
        'team_id' => 7,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->teams()->listChildLegacy(        team_id: 7,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams/#list-child-teams-legacy).


### users/get-authenticated

Get the authenticated user

Using the `call` method:
```php
$client->call('GET /user');
```

Operations method:
```php
$client->operations()->users()->getAuthenticated();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/users/users#get-the-authenticated-user).


### users/update-authenticated

Update the authenticated user

Using the `call` method:
```php
$client->call('PATCH /user');
```

Operations method:
```php
$client->operations()->users()->updateAuthenticated();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/users/users#update-the-authenticated-user).


### users/list-followers-for-authenticated-user

List followers of the authenticated user

Using the `call` method:
```php
$client->call('GET /user/followers', [
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->users()->listFollowersForAuthenticatedUser(        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/users/followers#list-followers-of-the-authenticated-user).


### users/list-followed-by-authenticated-user

List the people the authenticated user follows

Using the `call` method:
```php
$client->call('GET /user/following', [
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->users()->listFollowedByAuthenticatedUser(        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/users/followers#list-the-people-the-authenticated-user-follows).


### users/check-person-is-followed-by-authenticated

Check if a person is followed by the authenticated user

Using the `call` method:
```php
$client->call('GET /user/following/{username}', [
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->users()->checkPersonIsFollowedByAuthenticated(        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/users/followers#check-if-a-person-is-followed-by-the-authenticated-user).


### users/follow

Follow a user

Using the `call` method:
```php
$client->call('PUT /user/following/{username}', [
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->users()->follow(        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/users/followers#follow-a-user).


### users/unfollow

Unfollow a user

Using the `call` method:
```php
$client->call('DELETE /user/following/{username}', [
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->users()->unfollow(        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/users/followers#unfollow-a-user).


### users/list-gpg-keys-for-authenticated-user

List GPG keys for the authenticated user

Using the `call` method:
```php
$client->call('GET /user/gpg_keys', [
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->users()->listGpgKeysForAuthenticatedUser(        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/users/gpg-keys#list-gpg-keys-for-the-authenticated-user).


### users/create-gpg-key-for-authenticated-user

Create a GPG key for the authenticated user

Using the `call` method:
```php
$client->call('POST /user/gpg_keys');
```

Operations method:
```php
$client->operations()->users()->createGpgKeyForAuthenticatedUser();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/users/gpg-keys#create-a-gpg-key-for-the-authenticated-user).


### users/get-gpg-key-for-authenticated-user

Get a GPG key for the authenticated user

Using the `call` method:
```php
$client->call('GET /user/gpg_keys/{gpg_key_id}', [
        'gpg_key_id' => 10,
]);
```

Operations method:
```php
$client->operations()->users()->getGpgKeyForAuthenticatedUser(        gpg_key_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/users/gpg-keys#get-a-gpg-key-for-the-authenticated-user).


### users/delete-gpg-key-for-authenticated-user

Delete a GPG key for the authenticated user

Using the `call` method:
```php
$client->call('DELETE /user/gpg_keys/{gpg_key_id}', [
        'gpg_key_id' => 10,
]);
```

Operations method:
```php
$client->operations()->users()->deleteGpgKeyForAuthenticatedUser(        gpg_key_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/users/gpg-keys#delete-a-gpg-key-for-the-authenticated-user).


### apps/list-installations-for-authenticated-user

List app installations accessible to the user access token

Using the `call` method:
```php
$client->call('GET /user/installations', [
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->apps()->listInstallationsForAuthenticatedUser(        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/apps#list-app-installations-accessible-to-the-user-access-token).


### apps/list-installation-repos-for-authenticated-user

List repositories accessible to the user access token

Using the `call` method:
```php
$client->call('GET /user/installations/{installation_id}/repositories', [
        'installation_id' => 15,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->apps()->listInstallationReposForAuthenticatedUser(        installation_id: 15,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/apps#list-repositories-accessible-to-the-user-access-token).


### apps/add-repo-to-installation-for-authenticated-user

Add a repository to an app installation

Using the `call` method:
```php
$client->call('PUT /user/installations/{installation_id}/repositories/{repository_id}', [
        'installation_id' => 15,
        'repository_id' => 13,
]);
```

Operations method:
```php
$client->operations()->apps()->addRepoToInstallationForAuthenticatedUser(        installation_id: 15,
        repository_id: 13,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/apps#add-a-repository-to-an-app-installation).


### apps/remove-repo-from-installation-for-authenticated-user

Remove a repository from an app installation

Using the `call` method:
```php
$client->call('DELETE /user/installations/{installation_id}/repositories/{repository_id}', [
        'installation_id' => 15,
        'repository_id' => 13,
]);
```

Operations method:
```php
$client->operations()->apps()->removeRepoFromInstallationForAuthenticatedUser(        installation_id: 15,
        repository_id: 13,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/apps#remove-a-repository-from-an-app-installation).


### issues/list-for-authenticated-user

List user account issues assigned to the authenticated user

Using the `call` method:
```php
$client->call('GET /user/issues', [
        'labels' => 'generated',
        'since' => '1970-01-01T00:00:00+00:00',
        'filter' => 'generated',
        'state' => 'generated',
        'sort' => 'generated',
        'direction' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->issues()->listForAuthenticatedUser(        labels: 'generated',
        since: '1970-01-01T00:00:00+00:00',
        filter: 'generated',
        state: 'generated',
        sort: 'generated',
        direction: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/issues/issues#list-user-account-issues-assigned-to-the-authenticated-user).


### users/list-public-ssh-keys-for-authenticated-user

List public SSH keys for the authenticated user

Using the `call` method:
```php
$client->call('GET /user/keys', [
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->users()->listPublicSshKeysForAuthenticatedUser(        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/users/keys#list-public-ssh-keys-for-the-authenticated-user).


### users/create-public-ssh-key-for-authenticated-user

Create a public SSH key for the authenticated user

Using the `call` method:
```php
$client->call('POST /user/keys');
```

Operations method:
```php
$client->operations()->users()->createPublicSshKeyForAuthenticatedUser();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/users/keys#create-a-public-ssh-key-for-the-authenticated-user).


### users/get-public-ssh-key-for-authenticated-user

Get a public SSH key for the authenticated user

Using the `call` method:
```php
$client->call('GET /user/keys/{key_id}', [
        'key_id' => 6,
]);
```

Operations method:
```php
$client->operations()->users()->getPublicSshKeyForAuthenticatedUser(        key_id: 6,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/users/keys#get-a-public-ssh-key-for-the-authenticated-user).


### users/delete-public-ssh-key-for-authenticated-user

Delete a public SSH key for the authenticated user

Using the `call` method:
```php
$client->call('DELETE /user/keys/{key_id}', [
        'key_id' => 6,
]);
```

Operations method:
```php
$client->operations()->users()->deletePublicSshKeyForAuthenticatedUser(        key_id: 6,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/users/keys#delete-a-public-ssh-key-for-the-authenticated-user).


### orgs/list-memberships-for-authenticated-user

List organization memberships for the authenticated user

Using the `call` method:
```php
$client->call('GET /user/memberships/orgs', [
        'state' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->orgs()->listMembershipsForAuthenticatedUser(        state: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/orgs#list-organization-memberships-for-the-authenticated-user).


### orgs/get-membership-for-authenticated-user

Get an organization membership for the authenticated user

Using the `call` method:
```php
$client->call('GET /user/memberships/orgs/{org}', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->orgs()->getMembershipForAuthenticatedUser(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/orgs#get-an-organization-membership-for-the-authenticated-user).


### orgs/update-membership-for-authenticated-user

Update an organization membership for the authenticated user

Using the `call` method:
```php
$client->call('PATCH /user/memberships/orgs/{org}', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->orgs()->updateMembershipForAuthenticatedUser(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/orgs#update-an-organization-membership-for-the-authenticated-user).


### migrations/list-for-authenticated-user

List user migrations

Using the `call` method:
```php
$client->call('GET /user/migrations', [
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->migrations()->listForAuthenticatedUser(        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/migrations/users#list-user-migrations).


### migrations/start-for-authenticated-user

Start a user migration

Using the `call` method:
```php
$client->call('POST /user/migrations');
```

Operations method:
```php
$client->operations()->migrations()->startForAuthenticatedUser();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/migrations/users#start-a-user-migration).


### migrations/get-archive-for-authenticated-user

Download a user migration archive

Using the `call` method:
```php
$client->call('GET /user/migrations/{migration_id}/archive', [
        'migration_id' => 12,
]);
```

Operations method:
```php
$client->operations()->migrations()->getArchiveForAuthenticatedUser(        migration_id: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/migrations/users#download-a-user-migration-archive).


### migrations/list-repos-for-authenticated-user

List repositories for a user migration

Using the `call` method:
```php
$client->call('GET /user/migrations/{migration_id}/repositories', [
        'migration_id' => 12,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->migrations()->listReposForAuthenticatedUser(        migration_id: 12,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/migrations/users#list-repositories-for-a-user-migration).


### orgs/list-for-authenticated-user

List organizations for the authenticated user

Using the `call` method:
```php
$client->call('GET /user/orgs', [
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->orgs()->listForAuthenticatedUser(        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/orgs#list-organizations-for-the-authenticated-user).


### projects/create-for-authenticated-user

Create a user project

Using the `call` method:
```php
$client->call('POST /user/projects');
```

Operations method:
```php
$client->operations()->projects()->createForAuthenticatedUser();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/projects/projects#create-a-user-project).


### repos/list-for-authenticated-user

List repositories for the authenticated user

Using the `call` method:
```php
$client->call('GET /user/repos', [
        'direction' => 'generated',
        'since' => '1970-01-01T00:00:00+00:00',
        'before' => '1970-01-01T00:00:00+00:00',
        'visibility' => 'generated',
        'affiliation' => 'generated',
        'type' => 'generated',
        'sort' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listForAuthenticatedUser(        direction: 'generated',
        since: '1970-01-01T00:00:00+00:00',
        before: '1970-01-01T00:00:00+00:00',
        visibility: 'generated',
        affiliation: 'generated',
        type: 'generated',
        sort: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/repos#list-repositories-for-the-authenticated-user).


### repos/create-for-authenticated-user

Create a repository for the authenticated user

Using the `call` method:
```php
$client->call('POST /user/repos');
```

Operations method:
```php
$client->operations()->repos()->createForAuthenticatedUser();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/repos#create-a-repository-for-the-authenticated-user).


### repos/list-invitations-for-authenticated-user

List repository invitations for the authenticated user

Using the `call` method:
```php
$client->call('GET /user/repository_invitations', [
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listInvitationsForAuthenticatedUser(        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/collaborators/invitations#list-repository-invitations-for-the-authenticated-user).


### repos/decline-invitation-for-authenticated-user

Decline a repository invitation

Using the `call` method:
```php
$client->call('DELETE /user/repository_invitations/{invitation_id}', [
        'invitation_id' => 13,
]);
```

Operations method:
```php
$client->operations()->repos()->declineInvitationForAuthenticatedUser(        invitation_id: 13,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/collaborators/invitations#decline-a-repository-invitation).


### repos/accept-invitation-for-authenticated-user

Accept a repository invitation

Using the `call` method:
```php
$client->call('PATCH /user/repository_invitations/{invitation_id}', [
        'invitation_id' => 13,
]);
```

Operations method:
```php
$client->operations()->repos()->acceptInvitationForAuthenticatedUser(        invitation_id: 13,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/collaborators/invitations#accept-a-repository-invitation).


### activity/list-repos-starred-by-authenticated-user

List repositories starred by the authenticated user

Using the `call` method:
```php
$client->call('GET /user/starred', [
        'sort' => 'generated',
        'direction' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->activity()->listReposStarredByAuthenticatedUser(        sort: 'generated',
        direction: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/activity#list-repositories-starred-by-the-authenticated-user).


### activity/check-repo-is-starred-by-authenticated-user

Check if a repository is starred by the authenticated user

Using the `call` method:
```php
$client->call('GET /user/starred/{owner}/{repo}', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->activity()->checkRepoIsStarredByAuthenticatedUser(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/activity#check-if-a-repository-is-starred-by-the-authenticated-user).


### activity/star-repo-for-authenticated-user

Star a repository for the authenticated user

Using the `call` method:
```php
$client->call('PUT /user/starred/{owner}/{repo}', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->activity()->starRepoForAuthenticatedUser(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/activity#star-a-repository-for-the-authenticated-user).


### activity/unstar-repo-for-authenticated-user

Unstar a repository for the authenticated user

Using the `call` method:
```php
$client->call('DELETE /user/starred/{owner}/{repo}', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->activity()->unstarRepoForAuthenticatedUser(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/activity#unstar-a-repository-for-the-authenticated-user).


### activity/list-watched-repos-for-authenticated-user

List repositories watched by the authenticated user

Using the `call` method:
```php
$client->call('GET /user/subscriptions', [
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->activity()->listWatchedReposForAuthenticatedUser(        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/activity#list-repositories-watched-by-the-authenticated-user).


### teams/list-for-authenticated-user

List teams for the authenticated user

Using the `call` method:
```php
$client->call('GET /user/teams', [
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->teams()->listForAuthenticatedUser(        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/teams#list-teams-for-the-authenticated-user).


### users/list

List users

Using the `call` method:
```php
$client->call('GET /users', [
        'since' => 5,
        'per_page' => 8,
]);
```

Operations method:
```php
$client->operations()->users()->list(        since: 5,
        per_page: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/users/users#list-users).


### users/get-by-username

Get a user

Using the `call` method:
```php
$client->call('GET /users/{username}', [
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->users()->getByUsername(        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/users/users#get-a-user).


### activity/list-events-for-authenticated-user

List events for the authenticated user

Using the `call` method:
```php
$client->call('GET /users/{username}/events', [
        'username' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->activity()->listEventsForAuthenticatedUser(        username: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/activity#list-events-for-the-authenticated-user).


### activity/list-org-events-for-authenticated-user

List organization events for the authenticated user

Using the `call` method:
```php
$client->call('GET /users/{username}/events/orgs/{org}', [
        'username' => 'generated',
        'org' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->activity()->listOrgEventsForAuthenticatedUser(        username: 'generated',
        org: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/activity#list-organization-events-for-the-authenticated-user).


### users/list-followers-for-user

List followers of a user

Using the `call` method:
```php
$client->call('GET /users/{username}/followers', [
        'username' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->users()->listFollowersForUser(        username: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/users/followers#list-followers-of-a-user).


### users/list-following-for-user

List the people a user follows

Using the `call` method:
```php
$client->call('GET /users/{username}/following', [
        'username' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->users()->listFollowingForUser(        username: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/users/followers#list-the-people-a-user-follows).


### users/check-following-for-user

Check if a user follows another user

Using the `call` method:
```php
$client->call('GET /users/{username}/following/{target_user}', [
        'username' => 'generated',
        'target_user' => 'generated',
]);
```

Operations method:
```php
$client->operations()->users()->checkFollowingForUser(        username: 'generated',
        target_user: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/users/followers#check-if-a-user-follows-another-user).


### gists/list-for-user

List gists for a user

Using the `call` method:
```php
$client->call('GET /users/{username}/gists', [
        'username' => 'generated',
        'since' => '1970-01-01T00:00:00+00:00',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->gists()->listForUser(        username: 'generated',
        since: '1970-01-01T00:00:00+00:00',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/gists/gists#list-gists-for-a-user).


### users/list-gpg-keys-for-user

List GPG keys for a user

Using the `call` method:
```php
$client->call('GET /users/{username}/gpg_keys', [
        'username' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->users()->listGpgKeysForUser(        username: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/users/gpg-keys#list-gpg-keys-for-a-user).


### users/get-context-for-user

Get contextual information for a user

Using the `call` method:
```php
$client->call('GET /users/{username}/hovercard', [
        'username' => 'generated',
        'subject_type' => 'generated',
        'subject_id' => 'generated',
]);
```

Operations method:
```php
$client->operations()->users()->getContextForUser(        username: 'generated',
        subject_type: 'generated',
        subject_id: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/users/users#get-contextual-information-for-a-user).


### apps/get-user-installation

Get a user installation for the authenticated app

Using the `call` method:
```php
$client->call('GET /users/{username}/installation', [
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->apps()->getUserInstallation(        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/apps#get-a-user-installation-for-the-authenticated-app).


### users/list-public-keys-for-user

List public keys for a user

Using the `call` method:
```php
$client->call('GET /users/{username}/keys', [
        'username' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->users()->listPublicKeysForUser(        username: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/users/keys#list-public-keys-for-a-user).


### orgs/list-for-user

List organizations for a user

Using the `call` method:
```php
$client->call('GET /users/{username}/orgs', [
        'username' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->orgs()->listForUser(        username: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/orgs#list-organizations-for-a-user).


### projects/list-for-user

List user projects

Using the `call` method:
```php
$client->call('GET /users/{username}/projects', [
        'username' => 'generated',
        'state' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->projects()->listForUser(        username: 'generated',
        state: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/projects/projects#list-user-projects).


### repos/list-for-user

List repositories for a user

Using the `call` method:
```php
$client->call('GET /users/{username}/repos', [
        'username' => 'generated',
        'direction' => 'generated',
        'type' => 'generated',
        'sort' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listForUser(        username: 'generated',
        direction: 'generated',
        type: 'generated',
        sort: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/repos#list-repositories-for-a-user).


### activity/list-repos-starred-by-user

List repositories starred by a user

Using the `call` method:
```php
$client->call('GET /users/{username}/starred', [
        'username' => 'generated',
        'sort' => 'generated',
        'direction' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->activity()->listReposStarredByUser(        username: 'generated',
        sort: 'generated',
        direction: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/activity#list-repositories-starred-by-a-user).


### activity/list-repos-watched-by-user

List repositories watched by a user

Using the `call` method:
```php
$client->call('GET /users/{username}/subscriptions', [
        'username' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->activity()->listReposWatchedByUser(        username: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/activity#list-repositories-watched-by-a-user).


### enterprise-admin/suspend-user

Suspend a user

Using the `call` method:
```php
$client->call('PUT /users/{username}/suspended', [
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->suspendUser(        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/enterprise-admin#suspend-a-user).


### enterprise-admin/unsuspend-user

Unsuspend a user

Using the `call` method:
```php
$client->call('DELETE /users/{username}/suspended', [
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->enterpriseAdmin()->unsuspendUser(        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/reference/enterprise-admin#unsuspend-a-user).


### meta/get-zen

Get the Zen of GitHub

Using the `call` method:
```php
$client->call('GET /zen');
```

Operations method:
```php
$client->operations()->meta()->getZen();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/github-ae@latest/rest/meta/meta#get-the-zen-of-github).


