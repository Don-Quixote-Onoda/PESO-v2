<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblappjpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblappjp', function (Blueprint $table) {
            $table->increments('AppJPID', 11);
            $table->string('APrefOcc', 100);
            $table->string('APrefLoc', 100);
            $table->string('ASalary', 50);
            $table->string('APassport', 9);
            $table->date('AExpDate');
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
        Schema::dropIfExists('tblappjp');
    }
}
