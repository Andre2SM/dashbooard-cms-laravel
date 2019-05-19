<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDefectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('defectos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('DefectoID');
            $table->string('detalle');
            $table->string('severidad');
            $table->string('evidencia');
            $table->string('estado');

            $table->bigInteger('sitiosweb_id')->unsigned();            
            $table->foreign('sitiosweb_id')->references('SitioWebID')->on('sitio_webs');

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
        Schema::dropIfExists('defectos');
    }
}
