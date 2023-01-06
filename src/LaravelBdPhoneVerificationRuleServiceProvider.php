<?php

namespace Nanopkg\LaravelBdPhoneVerificationRule;

use Spatie\LaravelPackageTools\Package;
use Illuminate\Support\Facades\Validator;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Nanopkg\LaravelBdPhoneVerificationRule\Rules\LaravelBdPhoneVerificationRule;

class LaravelBdPhoneVerificationRuleServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-bd-phone-verification-rule');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        $alias = (new LaravelBdPhoneVerificationRule)->__toString();
        if ($alias) {
            Validator::extend($alias, LaravelBdPhoneVerificationRule::class . '@passes', (new LaravelBdPhoneVerificationRule)->message());
        }
    }
}
