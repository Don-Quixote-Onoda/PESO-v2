<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblappweTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblappwe', function (Blueprint $table) {
            $table->increments('AppWEID', 11);
            $table->string('ACompNme', 25);
            $table->string('ACompAdd', 50);
            $table->string('AIncluDates', 25);
            $table->enum('AStatus',['Permanent', 'Contractual', 'Part Time', 'Probationary']);
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
        Schema::dropIfExists('tblappwe');
    }
}
