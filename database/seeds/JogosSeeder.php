<?php

use Illuminate\Database\Seeder;

class JogosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Jogos::class, 30)
        	->create();
    }
}
