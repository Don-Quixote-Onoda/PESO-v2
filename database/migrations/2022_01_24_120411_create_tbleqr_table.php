<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbleqrTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbleqr', function (Blueprint $table) {
            $table->increments('EstQRID', 11);
            $table->string('EWrkEx', 20);
            $table->string('EReligion', 20);
            $table->enum('ESex', ['Male', 'Female']);
            $table->enum('ECivStatus', ['Single', 'Married', 'No Preference']);
            $table->string('EOtherQual');
            $table->string('EAccDis');
            $table->string('EEdLev', 50);
            $table->string('ECrseMaj', 50);
            $table->string('ELicense', 25);
            $table->string('EElig', 25);
            $table->string('ECert', 100);
            $table->string('ELang', 100);
            $table->string('EPrefRes');
            $table->string('EAcc', 100);
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
        Schema::dropIfExists('tbleqr');
    }
}
