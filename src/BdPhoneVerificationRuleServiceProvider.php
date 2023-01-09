<?php

namespace Nanopkg\BdPhoneVerificationRule;

use Illuminate\Support\Facades\Validator;
use Nanopkg\BdPhoneVerificationRule\Rules\BdPhoneVerificationRule;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

/**
 * Class BdPhoneVerificationRuleServiceProvider
 *
 * @author IQBAL HASAN <iqbalhasan.dev@gmail.com>
 *
 * @link https://iqbalhasan.dev Author Homepage
 *
 * @version 1.0.0
 *
 * @license LICENSE The MIT License
 */
class BdPhoneVerificationRuleServiceProvider extends PackageServiceProvider
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
        $alias = (new BdPhoneVerificationRule)->__toString();
        if ($alias) {
            Validator::extend($alias, BdPhoneVerificationRule::class.'@passes', (new BdPhoneVerificationRule)->message());
        }
    }
}
