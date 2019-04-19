<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use \App\User;

class UpdateUserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
      	$user = User::first();
    	$user->name = 'Steve Smith';
    	$user->save();
    	
    	$result = (isset($user->name) && $user->name == 'Steve Smith' )?true:false;
        $this->assertTrue($result);
    }
}
