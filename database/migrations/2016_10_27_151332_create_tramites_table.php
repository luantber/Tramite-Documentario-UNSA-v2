<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTramitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tramites', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('area_id')->unsigned()->nullable()->default(NULL);
            $table->integer('empleado_id')->unsigned()->nullable()->default(NULL);
            $table->integer('persona_id')->unsigned()->nullable()->default(NULL);
            $table->integer('tipo_tramite_id')->unsigned()->nullable()->default(NULL);
            $table->integer('estado_tramite_id')->unsigned()->nullable()->default(NULL);
            $table->string('nro_expediente');
            $table->text('asunto');
            $table->integer('prioridad');
            $table->integer('aceptado');
            $table->timestamps();

            $table->foreign('area_id')
                ->references('id')
                ->on('areas');

            $table->foreign('empleado_id')
                ->references('id')
                ->on('empleados')->onDelete('cascade')->onUpdate('cascade');
                

            $table->foreign('persona_id')
                ->references('id')
                ->on('users');

            $table->foreign('tipo_tramite_id')
                ->references('id')
                ->on('tipo_tramites');

            $table->foreign('estado_tramite_id')
                ->references('id')
                ->on('estado_tramites');


        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tramites');
    }
}
