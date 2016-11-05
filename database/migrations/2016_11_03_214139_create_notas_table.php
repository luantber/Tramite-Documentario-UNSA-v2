<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->text('descripcion');
            $table->integer('empleados_id')->unsigned();
            $table->integer('areas_id')->unsigned();
            $table->boolean('personal');
            $table->timestamps();

            $table->foreign('empleados_id')
                ->references('id')
                ->on('empleados');
            $table->foreign('areas_id')
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
        Schema::dropIfExists('notas');
    }
}
