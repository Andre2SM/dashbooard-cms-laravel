<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagespeedmobilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagespeedmobiles', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('PageSpeedMobileID');
            $table->string('puntaje');
            $table->string('firstContentPaint');
            $table->string('speedMeaningfulPaint');
            $table->string('speedIndex');
            $table->string('firstCPUIdle');
            $table->string('timeToInteractive');
            $table->string('maxPotentialFirstInputDelay');
            $table->string('screenshot');

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
        Schema::dropIfExists('pagespeedmobiles');
    }
}
