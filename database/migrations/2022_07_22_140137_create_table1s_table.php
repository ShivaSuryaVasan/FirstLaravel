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
            $table->string('Panchayat_name');
            $table->string('Hamlet_name');
            $table->string('Block_name')->nullable();
            $table->integer('Ntotal_houses')->nullable();
            $table->integer('Ntotal_shops')->nullable();
            $table->integer('Ntotal_companies')->nullable();
            $table->integer('Npopulation_2011')->nullable();
            $table->integer('Npopulation_current')->nullable();
            $table->unsignedBigInteger('Entered_id');
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
