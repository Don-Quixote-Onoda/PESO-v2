<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblappebTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblappeb', function (Blueprint $table) {
            $table->increments('AppEBID', 11);
            $table->string('AElemSc', 100);
            $table->string('AElemCrs', 100);
            $table->year('AElemYr');
            $table->string('AElemUnd', 100);
            $table->string('AElemAwards', 100);
            $table->string('ASecSc', 100);
            $table->string('ASecCrs', 100);
            $table->year('ASecYr');
            $table->string('ASecUnd', 100);
            $table->string('ASecAwards', 100);
            $table->string('ATerSc', 100);
            $table->string('ATerCrs', 100);
            $table->year('ATerYr');
            $table->string('ATerUnd', 100);
            $table->string('ATerAwards', 100);
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
        Schema::dropIfExists('tblappeb');
    }
}
