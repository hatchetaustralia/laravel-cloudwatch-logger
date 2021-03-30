<?php

namespace Hatchet\LaravelCloudwatchLogger\Tests;

use Orchestra\Testbench\TestCase;
use Hatchet\LaravelCloudWatchLogger\LaravelCloudWatchLoggerServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelCloudWatchLoggerServiceProvider::class];
    }

    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
