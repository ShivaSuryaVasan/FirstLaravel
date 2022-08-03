<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTable11sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table11s', function (Blueprint $table) {
            $table->id();
            $table->string('Panchayat_name');
            $table->string('Detail_of_work')->nullable();
            $table->integer('Total_amount_required')->nullable();
            $table->integer('MGNREGS')->nullable();
            $table->integer('Vtied_water_supply')->nullable();
            $table->integer('Vtied_sanitation')->nullable();
            $table->integer('Vunited')->nullable();
            $table->integer('Ltied_water_supply')->nullable();
            $table->integer('Ltied_sanitation')->nullable();
            $table->integer('Lunited')->nullable();
            $table->integer('Dtied_water_supply')->nullable();
            $table->integer('Dtied_sanitation')->nullable();
            $table->integer('Dunited')->nullable();
            $table->string('SBM')->nullable();
            $table->string('Miscellaneous_project')->nullable();
            $table->string('Administrative_permission')->nullable();
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
        Schema::dropIfExists('table11s');
    }
}
