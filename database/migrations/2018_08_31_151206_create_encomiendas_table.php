<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncomiendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encomiendas', function (Blueprint $table) {
            $table->string('cod_e')->primary();
            $table->string('servicio');
            $table->string('pago');
            $table->string('codc_o');
            $table->string('codc_d');
            $table->foreign('codc_o')->references('cod')->on('clientes');
            $table->foreign('codc_d')->references('cod')->on('clientes');
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
        Schema::dropIfExists('encomiendas');
    }
}
