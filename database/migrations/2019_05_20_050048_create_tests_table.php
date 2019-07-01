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
            $table->bigIncrements('id');

            $table->unsignedBigInteger('website_id');
            $table->foreign('website_id')->references('id')->on('websites');

            $table->unsignedBigInteger('pagespeed_id');
            $table->foreign('pagespeed_id')->references('id')->on('pagespeeds');

            $table->unsignedBigInteger('gtmetrix_id');
            $table->foreign('gtmetrix_id')->references('id')->on('gtmetrixes');
            
            $table->string('time_generated');
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
