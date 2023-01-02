<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblepdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblepd', function (Blueprint $table) {
            $table->increments('EstPDID', 11);
            $table->date('EPostDate');
            $table->date('EValUntil');
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
        Schema::dropIfExists('tblepd');
    }
}
