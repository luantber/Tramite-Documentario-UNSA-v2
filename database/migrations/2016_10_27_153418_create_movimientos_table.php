<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimientos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tramite_id')->unsigned();
            $table->integer('area_remitente_id')->unsigned();
            $table->integer('area_destino_id')->unsigned();
            $table->integer('empleado_remitente_id')->unsigned()->default(NULL);
            $table->integer('empleado_destino_id')->unsigned()->default(NULL);
            $table->text('comentario');
            $table->timestamps();

            $table->foreign('tramite_id')
                ->references('id')
                ->on('tramites');
            $table->foreign('area_remitente_id')
                ->references('id')
                ->on('areas');
            $table->foreign('area_destino_id')
                ->references('id')
                ->on('areas');    
            $table->foreign('empleado_destino_id')
                ->references('id')
                ->on('empleados');
            $table->foreign('empleado_remitente_id')
                ->references('id')
                ->on('empleados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movimientos');
    }
}
