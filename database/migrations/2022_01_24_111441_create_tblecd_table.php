<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblecdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblecd', function (Blueprint $table) {
            $table->increments('EstCDID', 11);
            $table->string('ETitle', 20);
            $table->string('ECntcPer', 50);
            $table->string('EPos', 25);
            $table->integer('ETelNo', 9);
            $table->integer('EMobNo', 11);
            $table->integer('EFaxNo', 10);
            $table->unique('EEmailAdd');
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
        Schema::dropIfExists('tblecd');
    }
}
