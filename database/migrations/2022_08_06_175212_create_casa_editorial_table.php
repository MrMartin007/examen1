<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasaEditorialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casa_editorial', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_casa');
            $table->string('numero_registro');
            $table->string('direccion');
            $table->string('numro_telefono');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('casa_editorial');
    }
}
