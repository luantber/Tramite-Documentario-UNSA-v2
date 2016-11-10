<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermisosCargosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permisos_cargos', function (Blueprint $table) {
            $table->integer('cargo_id')->unsigned();
            $table->boolean('estadisticas');
            $table->boolean('mis_tramites');
            $table->boolean('panel');
            $table->boolean('notas');
            $table->boolean('areas');
            $table->boolean('cargos');
            $table->boolean('usuarios');
            $table->boolean('empleados');
            $table->boolean('tramites');
            //$table->timestamps();

            $table->foreign('cargo_id')
                    ->references('id')
                    ->on('cargos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permisos_cargos');
    }
}
