<?php

use Illuminate\Database\Seeder;

class BebidasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//fabrica 20 Bebidas e bota no banca
        factory(App\Bebidas::class, 20)
        	->create();
    }
}
