<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblapplTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblappl', function (Blueprint $table) {
            $table->increments('AppLID', 11);
            $table->string('AEng', 10);
            $table->string('AFil', 10);
            $table->string('AOthers', 10);
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
        Schema::dropIfExists('tblappl');
    }
}
