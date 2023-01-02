<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblesdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblesd', function (Blueprint $table) {
            $table->increments('EstID', 11);
            $table->string('EName', 50);
            $table->integer('ETax', 12);
            $table->string('EEmpType', 50);
            $table->string('ETotWrk', 20);
            $table->string('ELneBus', 50);
            $table->string('EAddress', 100);
            $table->string('EBrgy', 50);
            $table->string('EMuniCty', 50);
            $table->string('EProvnce', 50);
            $table->binary('EEsig');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblesd');
    }
}
