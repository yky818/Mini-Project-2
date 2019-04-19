<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateCarTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $car = factory(\App\Cars::class)->create();

        $result = (isset($car->make) && $car->make != '' )?true:false;
        $this->assertTrue($result );
    }
}
