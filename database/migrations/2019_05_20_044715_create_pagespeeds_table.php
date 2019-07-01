<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagespeedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagespeeds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('pagespeedMobile_id');
            $table->foreign('pagespeedMobile_id')->references('id')->on('pagespeedMobiles');
            $table->unsignedBigInteger('pagespeedDesktop_id');
            $table->foreign('pagespeedDesktop_id')->references('id')->on('pagespeedDesktops');
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
        Schema::dropIfExists('pagespeeds');
    }
}
