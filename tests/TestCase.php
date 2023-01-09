<?php

namespace Nanopkg\BdPhoneVerificationRule\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Nanopkg\BdPhoneVerificationRule\BdPhoneVerificationRuleServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{

    protected function getPackageProviders($app)
    {
        return [
            BdPhoneVerificationRuleServiceProvider::class,
        ];
    }
}
