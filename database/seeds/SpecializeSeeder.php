<?php

use Illuminate\Database\Seeder;

class SpecializeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $doctors = factory('App\Specialize', 50)->create();
    }
}
