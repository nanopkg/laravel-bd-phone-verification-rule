<?php

namespace Nanopkg\LaravelBdPhoneVerificationRule;

use Illuminate\Support\Facades\Validator;
use Nanopkg\LaravelBdPhoneVerificationRule\Rules\LaravelBdPhoneVerificationRule;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

/**
 * Class LaravelBdPhoneVerificationRuleServiceProvider
 *
 * @author IQBAL HASAN <iqbalhasan.dev@gmail.com>
 *
 * @link https://iqbalhasan.dev Author Homepage
 *
 * @version 1.0.0
 *
 * @license LICENSE The MIT License
 */
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
            Validator::extend($alias, LaravelBdPhoneVerificationRule::class.'@passes', (new LaravelBdPhoneVerificationRule)->message());
        }
    }
}
