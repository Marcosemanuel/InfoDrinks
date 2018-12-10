<?php

use Illuminate\Database\Seeder;

class TabuleiroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Tabuleiros::class, 30)
        	->create();
    }
}
