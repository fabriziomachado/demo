<?php

namespace Fabriziomachado\Demo\Tests;

use Orchestra\Testbench\TestCase;
use Fabriziomachado\Demo\DemoServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [DemoServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
