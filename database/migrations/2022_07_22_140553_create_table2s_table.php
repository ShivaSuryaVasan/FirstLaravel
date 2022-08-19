<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTable2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table2s', function (Blueprint $table) {
            $table->id();
            $table->string('Panchayat_name');
            $table->string('Hamlet_name');
            $table->string('Block_name')->nullable();
            $table->integer('Total_houses')->nullable();
            $table->integer('Population')->nullable();
            $table->integer('One_absorb_pit')->nullable();
            $table->integer('Two_absorb_pit')->nullable();
            $table->integer('With_septic_tank')->nullable();
            $table->integer('Without_septic_tank')->nullable();
            $table->integer('Other_options')->nullable();
            $table->integer('Total')->nullable();
            $table->integer('Everybody_uses')->nullable();
            $table->integer('Few_uses')->nullable();
            $table->integer('No_one_use')->nullable();
            $table->integer('No_awarness')->nullable();
            $table->integer('Broken_toilet')->nullable();
            $table->integer('Small_repair')->nullable();
            $table->integer('Totally_broken')->nullable();
            $table->integer('Nhouse_without_toilet')->nullable();
            $table->integer('Already_beneficial_scheme')->nullable();
            $table->integer('Not_enough_space')->nullable();
            $table->integer('Shared_toilet')->nullable();
            $table->integer('Sanitary_facilities')->nullable();
            $table->integer('No_space')->nullable();
            $table->integer('Nsbg_scheme')->nullable();
            $table->integer('Entered_id');
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
        Schema::dropIfExists('table2s');
    }
}
