<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArmoniza extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('armoniza', function (Blueprint $table) {
            $table->integer('id_bebida')->unsigned();
            $table->integer('id_petisco')->unsigned();
            $table->foreign("id_bebida")->references("id")->on("bebidas");
            $table->foreign("id_petisco")->references("id")->on("petiscos");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('armoniza');
    }
}
