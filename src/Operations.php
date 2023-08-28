<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE;

final readonly class Operations implements OperationsInterface
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    public function meta(): Operation\Meta
    {
        return new Operation\Meta($this->operators);
    }

    public function enterpriseAdmin(): Operation\EnterpriseAdmin
    {
        return new Operation\EnterpriseAdmin($this->operators);
    }

    public function apps(): Operation\Apps
    {
        return new Operation\Apps($this->operators);
    }

    public function codesOfConduct(): Operation\CodesOfConduct
    {
        return new Operation\CodesOfConduct($this->operators);
    }

    public function emojis(): Operation\Emojis
    {
        return new Operation\Emojis($this->operators);
    }

    public function secretScanning(): Operation\SecretScanning
    {
        return new Operation\SecretScanning($this->operators);
    }

    public function activity(): Operation\Activity
    {
        return new Operation\Activity($this->operators);
    }

    public function gists(): Operation\Gists
    {
        return new Operation\Gists($this->operators);
    }

    public function gitignore(): Operation\Gitignore
    {
        return new Operation\Gitignore($this->operators);
    }

    public function issues(): Operation\Issues
    {
        return new Operation\Issues($this->operators);
    }

    public function licenses(): Operation\Licenses
    {
        return new Operation\Licenses($this->operators);
    }

    public function markdown(): Operation\Markdown
    {
        return new Operation\Markdown($this->operators);
    }

    public function orgs(): Operation\Orgs
    {
        return new Operation\Orgs($this->operators);
    }

    public function actions(): Operation\Actions
    {
        return new Operation\Actions($this->operators);
    }

    public function codeScanning(): Operation\CodeScanning
    {
        return new Operation\CodeScanning($this->operators);
    }

    public function teams(): Operation\Teams
    {
        return new Operation\Teams($this->operators);
    }

    public function migrations(): Operation\Migrations
    {
        return new Operation\Migrations($this->operators);
    }

    public function projects(): Operation\Projects
    {
        return new Operation\Projects($this->operators);
    }

    public function repos(): Operation\Repos
    {
        return new Operation\Repos($this->operators);
    }

    public function reactions(): Operation\Reactions
    {
        return new Operation\Reactions($this->operators);
    }

    public function rateLimit(): Operation\RateLimit
    {
        return new Operation\RateLimit($this->operators);
    }

    public function checks(): Operation\Checks
    {
        return new Operation\Checks($this->operators);
    }

    public function git(): Operation\Git
    {
        return new Operation\Git($this->operators);
    }

    public function pulls(): Operation\Pulls
    {
        return new Operation\Pulls($this->operators);
    }

    public function search(): Operation\Search
    {
        return new Operation\Search($this->operators);
    }

    public function users(): Operation\Users
    {
        return new Operation\Users($this->operators);
    }
}
