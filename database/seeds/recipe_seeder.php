<?php

use Illuminate\Database\Seeder;

class recipe_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\recipe::create(['recipe_name'=>"briyani"]);
         factory(\App\recipe::class,20)->create();
    }
}
