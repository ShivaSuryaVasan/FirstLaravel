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
            $table->string('Panchayat_name',10);
            $table->string('Hamlet_name',10);
            $table->integer('Total_houses',10)->nullable();
            $table->integer('Population',10)->nullable();
            $table->integer('One_absorb_pit',10)->nullable();
            $table->integer('Two_absorb_pit',10)->nullable();
            $table->integer('With_septic_tank',10)->nullable();
            $table->integer('Without_septic_tank',10)->nullable();
            $table->integer('Other_options',10)->nullable();
            $table->integer('Total',10)->nullable();
            $table->integer('Everybody_uses',10)->nullable();
            $table->integer('Few_uses',10)->nullable();
            $table->integer('No_one_use',10)->nullable();
            $table->integer('No_awarness',10)->nullable();
            $table->integer('Broken_toilet',10)->nullable();
            $table->integer('Small_repair',10)->nullable();
            $table->integer('Totally_broken',10)->nullable();
            $table->integer('Nhouse_without_toilet',10)->nullable();
            $table->integer('Already_beneficial_scheme',10)->nullable();
            $table->integer('Not_enough_space',10)->nullable();
            $table->integer('Shared_toilet',10)->nullable();
            $table->integer('Sanitary_facilities',10)->nullable();
            $table->integer('No_space',10)->nullable();
            $table->integer('Nsbg_scheme',10)->nullable();
            $table->integer('Entered_id',10);
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
