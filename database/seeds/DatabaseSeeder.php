<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
  		//sempre que criar um novo seeder atualizar este arquiv.

  		// alem disso os seeder's devem ser chamadas respeitando o relacionamento entre as tabelas
  		// por exemplo, se tem um relacionamento entre bebiba e cliente e o cliente tem um]
  		// chave estrangeira para o id de bebida, bebidas tem que ser criado primeiro. OU seja, ]
  		// chamar a funcao call(Bebidas), em seguida, chamar a funcao call(cliente).

        $this->call(UsersTableSeeder::class);
        $this->call(BebidasSeeder::class);
        $this->call(ComentariosSeeder::class);
        $this->call(JogosSeeder::class);
        $this->call(PetiscosSeeder::class);
        $this->call(TabuleiroSeeder::class);
        $this->call(MusicasSeeder::class);



        //quando atualizar este arquivo usar o seguinte comando:  composer dump-autoload
    }
}
