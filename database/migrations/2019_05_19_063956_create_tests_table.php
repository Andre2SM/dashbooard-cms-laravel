<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('TestID');
            $table->string('TimeGenerated');

            $table->bigInteger('sitiosweb_id')->unsigned();            
            $table->foreign('sitiosweb_id')->references('SitioWebID')->on('sitio_webs');

            $table->bigInteger('pagespeed_id')->unsigned();            
            $table->foreign('pagespeed_id')->references('PageSpeedID')->on('pagespeed');
            
            $table->bigInteger('gtmetrix_id')->unsigned();            
            $table->foreign('gtmetrix_id')->references('GTMetrixID')->on('gtmetrix');

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
        Schema::dropIfExists('tests');
    }
}
