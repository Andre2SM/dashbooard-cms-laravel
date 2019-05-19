<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGtmetrixTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gtmetrix', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('GTMetrixID');
            $table->integer('PageSpeedScore');
            $table->integer('YSlowScore');
            $table->string('FullyLoadedTime');
            $table->string('TotalPageSize');
            $table->string('Request');
            $table->string('Screenshot');
            $table->string('urlReport');

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
        Schema::dropIfExists('gtmetrix');
    }
}
