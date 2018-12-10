<?php

use Illuminate\Database\Seeder;

class MusicasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(App\Musicas::class, 10)
        	->create();
    }
}
