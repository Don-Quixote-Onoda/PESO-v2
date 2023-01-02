<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblappeliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblappeli', function (Blueprint $table) {
            $table->increments('AppEID', 11);
            $table->string('AElig', 50);
            $table->float('ARating');
            $table->date('ADateofEx');
            $table->string('AProfLic', 25);
            $table->date('AValidity');
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
        Schema::dropIfExists('tblappeli');
    }
}
