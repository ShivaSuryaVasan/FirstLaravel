<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\LaratrustSetupTables;

class CreateTable1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table1s', function (Blueprint $table) {
            $table->id();
            $table->string('Panchayat_name',10);
            $table->string('Hamlet_name',10);
            $table->integer('Ntotal_houses',10)->nullable();
            $table->integer('Ntotal_shops',10)->nullable();
            $table->integer('Ntotal_companies',10)->nullable();
            $table->integer('Npopulation_2011',10)->nullable();
            $table->integer('Npopulation_current',10)->nullable();
            $table->unsignedBigInteger('Entered_id',10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table1s');
    }
}
