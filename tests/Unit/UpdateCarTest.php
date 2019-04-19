<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use \App\Cars;

class UpdateCarTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $car = Cars::orderBy('id', 'DESC')->first();
    	$car->year = 2000;
    	$result = $car->save();
    	
        $this->assertTrue($result);
    }
}
