<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('empresas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('EmpresaID');
            $table->string('Direccion');
            $table->string('Nombre');
            $table->string('Tipo_contrato');
            $table->string('Usuario');
            $table->string('Contraseña');
            $table->string('Email');
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
        Schema::dropIfExists('empresas');
    }
}
