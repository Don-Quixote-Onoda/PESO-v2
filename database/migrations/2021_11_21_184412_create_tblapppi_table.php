<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblapppiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblapppi', function (Blueprint $table) {
            $table->increments('AppID', 11);
            $table->string('ASurname', 50);
            $table->string('AFirstName', 50);
            $table->string('AMiddleName', 50);
            $table->string('ASuffix', 5);
            $table->date('ADateOfBirth');
            $table->string('APlaceOfBirth', 100);
            $table->string('AReligion', 25);
            $table->enum('ASex', ['Male', 'Female']);
            $table->string('AStrtVill', 50);
            $table->string('ABrgy', 25);
            $table->string('AMuniCity', 25);
            $table->string('AProvince', 25);
            $table->enum('ACivilStatus', ['Single', 'Married', 'Widowed', 'Separated', 'Live-in']);
            $table->integer('ATin', 9);
            $table->integer('AGsis', );
            $table->string('AEmailAdd')->unique();
            $table->integer('ALandline', 9);
            $table->integer('ACellphone', 11);
            $table->string('ADisability', 25);
            $table->enum('AEmpStatus', ['Employed', 'Unemployed']);
            $table->string('AEmpType', 50);
            $table->string('AActive', 50);
            $table->string('AWilling', 50);
            $table->string('ABeneficiary', 50);
            $table->binary('AESig');


            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblapppi');
    }
}
