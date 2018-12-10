<?php

use Illuminate\Database\Seeder;

class PetiscosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     	 factory(App\Petiscos::class, 20)
        	->create();
    }
}
