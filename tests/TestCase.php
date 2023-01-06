<?php

namespace Nanopkg\LaravelBdPhoneVerificationRule\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Nanopkg\LaravelBdPhoneVerificationRule\LaravelBdPhoneVerificationRuleServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Nanopkg\\LaravelBdPhoneVerificationRule\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelBdPhoneVerificationRuleServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-bd-phone-verification-rule_table.php.stub';
        $migration->up();
        */
    }
}