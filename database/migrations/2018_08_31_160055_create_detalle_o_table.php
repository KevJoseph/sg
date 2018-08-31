<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleOTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_o', function (Blueprint $table) {
            $table->string('cod_o')->primary();
            $table->string('cod_enc');
            $table->string('fecha');
            $table->string('hora');
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
        Schema::dropIfExists('detalle_o');
    }
}
