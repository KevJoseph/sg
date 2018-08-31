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
            $table->string('fecha');
            $table->string('hora');
            $table->string('estado');
            $table->string('cod_orig');
            $table->foreign('cod_orig')->references('cod_o')->on('detalle_o');
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
