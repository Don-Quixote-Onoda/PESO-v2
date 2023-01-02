<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblevdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblevd', function (Blueprint $table) {
            $table->increments('EstVDID', 11);
            $table->string('EPosTitle', 25);
            $table->string('EJobDesc');
            $table->string('ENatWork', 50);
            $table->string('EPlace', 100);
            $table->string('ESalary', 50);
            $table->string('EVacCount', 50);
            $table->foreign('EstID')->references('EstID')->on('tblesd');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblevd');
    }
}
