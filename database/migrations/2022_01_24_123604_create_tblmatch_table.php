<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblmatchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblmatch', function (Blueprint $table) {
            $table->increments('MatchID', 11);
            $table->foreign('AppID')->references('AppID')->on('tblappi');
            $table->foreign('EstID')->references('EstID')->on('tblesd');
            $table->foreign('APrefOcc')->references('APrefOcc')->on('tblappjp');
            $table->foreign('ASalary')->references('ASalary')->on('tblappjp');
            $table->foreign('AppLID')->references('AppLID')->on('tblappl');
            $table->foreign('ATerCrs')->references('ATerCrs')->on('tblappeb');
            $table->foreign('ASex')->references('ASex')->on('tblappi');
            $table->foreign('AReligion')->references('AReligion')->on('tblappi');
            $table->foreign('ACivilStatus')->references('ACivilStatus')->on('tblappi');
            $table->foreign('AElig')->references('AElig')->on('tblappli');
            $table->foreign('AppWEID')->references('AppWEID')->on('tblappwe');
            $table->foreign('ADisability')->references('ADisability')->on('tblappi');
            $table->foreign('EPosTitle')->references('EPosTitle')->on('tblepd');
            $table->foreign('EPlace')->references('EPlace')->on('tblevd');
            $table->foreign('ESalary')->references('ESalary')->on('tblevd');
            $table->foreign('EVacCount')->references('EVacCount')->on('tblevd');
            $table->foreign('EWrkEx')->references('EwrkEx')->on('tbleqr');
            $table->foreign('EReligion')->references('EReligion')->on('tbleqr');
            $table->foreign('ESex')->references('ESex')->on('tbleqr');
            $table->foreign('ECivStatus')->references('ECivStatus')->on('tbleqr');
            $table->foreign('EAccDis')->references('EAccDis')->on('tbleqr');
            $table->foreign('EEdLev')->references('EEdLev')->on('tbleqr');
            $table->foreign('ECrseMaj')->references('ECrseMaj')->on('tbleqr');
            $table->foreign('ELicense')->references('ELicense')->on('tbleqr');
            $table->foreign('EElig')->references('EElig')->on('tbleqr');
            $table->foreign('EPrefRes')->references('EPrefRes')->on('tbleqr');
            $table->foreign('ELang')->references('ELang')->on('tbleqr');
            $table->foreign('EAcc')->references('EAcc')->on('tbleqr');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblmatch');
    }
}
