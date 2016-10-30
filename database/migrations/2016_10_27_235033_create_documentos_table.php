<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tramite_id')->unsigned()->nullable()->default(NULL);
            $table->integer('tipo_documento_id')->unsigned()->nullable()->default(NULL);
            $table->boolean('entregado');
            $table->string('nombre');            
            $table->timestamps();
            
            $table->foreign('tramite_id')
                ->references('id')
                ->on('tramites');
            
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documentos');
    }
}
