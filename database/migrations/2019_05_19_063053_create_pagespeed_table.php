<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagespeedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagespeed', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('PageSpeedID');
            $table->string('urlReport');

            $table->bigInteger('pagespeedmobiles_id')->unsigned();            
            $table->foreign('pagespeedmobiles_id')->references('PageSpeedMobileID')->on('pagespeedmobiles');

            $table->bigInteger('pagespeeddesktop_id')->unsigned();            
            $table->foreign('pagespeeddesktop_id')->references('PageSpeedDesktopID')->on('pagespeeddesktop');

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
        Schema::dropIfExists('pagespeed');
    }
}
