<?php

use Illuminate\Database\Seeder;
use App\Cars;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Cars::class, 50)->create();
    }
}