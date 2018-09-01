<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleDTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_d', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cod_enc');
            $table->string('destino');
            $table->string('estado');
            $table->foreign('cod_enc')->references('cod_e')->on('encomiendas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_d');
    }
}
