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
            $table->string('Panchayat_name');
            $table->string('Hamlet_name');
            $table->string('Head_of_household')->nullable();
            $table->integer('Door_no')->nullable();
            $table->integer('Family_members')->nullable();
            $table->string('Is_toilet')->nullable();
            $table->string('Is_there_water_facility')->nullable();
            $table->integer('Use_Toilet_daily')->nullable();
            $table->integer('Year')->nullable();
            $table->string('Build_by')->nullable();
            $table->integer('One_Absorb_pit')->nullable();
            $table->integer('Two_Absorb_pit')->nullable();
            $table->string('Soak_pit')->nullable();
            $table->string('Gas')->nullable();
            $table->string('Usage')->nullable();
            $table->string('Has_cavity')->nullable();
            $table->string('Disposed_of')->nullable();
            $table->string('Is_damaged')->nullable();
            $table->string('Faults')->nullable();
            $table->integer('Without_Toilet_houses')->nullable();
            $table->integer('Without_Toilet_Already_benefited')->nullable();
            $table->integer('Not_Enough_space_tobuild_toilet')->nullable();
            $table->integer('Shared_Toilet')->nullable();
            $table->string('Household_use')->nullable();
            $table->integer('Enough_Space_tobuild_toilet')->nullable();
            $table->string('Grading_at_home')->nullable();
            $table->string('Veg_and_Kitchen_waste')->nullable();
            $table->string('Plastic_waste')->nullable();
            $table->string('Dry_waste')->nullable();
            $table->string('Existing_facilities')->nullable();
            $table->string('Management_facilities')->nullable();
            $table->string('Has_Livestock')->nullable();
            $table->integer('How_many_times')->nullable();
            $table->integer('Entered_id')->nullable();
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
