<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTable0sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table0s', function (Blueprint $table) {
            $table->id();
            $table->string('Panchayat_name',10);
            $table->string('Hamlet_name',10);
            $table->string('Head_of_household',10)->nullable();
            $table->integer('Door_no',10)->nullable();
            $table->integer('Family_members',10)->nullable();
            $table->string('Is_toilet',10)->nullable();
            $table->string('Is_there_water_facility',10)->nullable();
            $table->integer('Use_Toilet_daily',10)->nullable();
            $table->integer('Year',10)->nullable();
            $table->string('Build_by',10)->nullable();
            $table->integer('One_Absorb_pit',10)->nullable();
            $table->integer('Two_Absorb_pit',10)->nullable();
            $table->string('Soak_pit',10)->nullable();
            $table->string('Gas',10)->nullable();
            $table->string('Usage',10)->nullable();
            $table->string('Has_cavity',10)->nullable();
            $table->string('Disposed_of',10)->nullable();
            $table->string('Is_damaged',10)->nullable();
            $table->string('Faults',10)->nullable();
            $table->integer('Without_Toilet_houses',10)->nullable();
            $table->integer('Without_Toilet_Already_benefited',10)->nullable();
            $table->integer('Not_Enough_space_tobuild_toilet',10)->nullable();
            $table->integer('Shared_Toilet',10)->nullable();
            $table->string('Household_use',10)->nullable();
            $table->integer('Enough_Space_tobuild_toilet',10)->nullable();
            $table->string('Grading_at_home',10)->nullable();
            $table->string('Veg_and_Kitchen_waste',10)->nullable();
            $table->string('Plastic_waste',10)->nullable();
            $table->string('Dry_waste',10)->nullable();
            $table->string('Existing_facilities',10)->nullable();
            $table->string('Management_facilities',10)->nullable();
            $table->string('Has_Livestock',10)->nullable();
            $table->integer('How_many_times',10)->nullable();
            $table->integer('Entered_id',10)->nullable();
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
        Schema::dropIfExists('table0s');
    }
}
