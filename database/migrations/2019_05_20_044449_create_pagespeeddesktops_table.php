<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagespeeddesktopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagespeedDesktops', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('score');
            $table->string('first_content_paint');
            $table->string('speed_meaningful_paint');
            $table->string('speed_index');
            $table->string('first_cpu_idle');
            $table->string('time_to_interactive');
            $table->string('max_potential_First_input_delay');
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
        Schema::dropIfExists('pagespeedDesktops');
    }
}
