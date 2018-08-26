<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCnaturalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cnatural', function (Blueprint $table) {
            $table->string('nombre', 100);
            $table->string('apellido', 100);
            $table->string('cod_cn')->primary();
            $table->foreign('cod_cn')->references('cod')->on('clientes');
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
        Schema::dropIfExists('cnatural');
    }
}
