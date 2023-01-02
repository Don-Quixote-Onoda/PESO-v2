<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblapposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblappos', function (Blueprint $table) {
            $table->increments('AppOSID', 11);
            $table->string('AOtherSkills');
            $table->string('AEligEmp', 100);
            $table->foreign('AppID')->references('AppID')->on('tblappi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblappos');
    }
}
