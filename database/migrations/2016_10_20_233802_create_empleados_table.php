<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->timestamps();
            $table->integer("id_persona");
            $table->integer("id_area");
            $table->integer("id_cargo")->unsigned();
            $table->integer("id_estado");
            $table->boolean('activo');

            //$table->foreign('id_cargo')->references('id')->on('cargos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
