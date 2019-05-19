<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSitioWebsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sitio_webs', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('SitioWebID');
            $table->string('dominio');

            $table->bigInteger('empresa_id')->unsigned();            
            $table->foreign('empresa_id')->references('EmpresaID')->on('empresas');

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
        Schema::dropIfExists('sitio_webs');
    }
}
