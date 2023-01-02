<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblapptvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblapptv', function (Blueprint $table) {
            $table->increments('AppTVID', 11);
            $table->string('ACourse', 50);
            $table->string('ADuration', 50);
            $table->string('ATraIns', 50);
            $table->string('ACertRec', 50);
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
        Schema::dropIfExists('tblapptv');
    }
}
