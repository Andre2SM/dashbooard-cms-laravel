<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGtmetrixesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gtmetrixes', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('page_speed_score');
            $table->string('yslow_score');
            $table->string('fully_load_time');
            $table->string('total_page_size');
            $table->string('requests');
            $table->string('screenshot');
            $table->string('url_report');

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
        Schema::dropIfExists('gtmetrixes');
    }
}
