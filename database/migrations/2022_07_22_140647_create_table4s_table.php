<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTable4sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table4s', function (Blueprint $table) {
            $table->id();
            $table->string('Panchayat_name',10);
            $table->string('Hamlet_name',10);
            $table->string('School_name',10)->nullable();
            $table->string('S_has_toilet',10)->nullable();
            $table->integer('Bstudent_toilet',10)->nullable();
            $table->integer('Gstudent_toilet',10)->nullable();
            $table->integer('Ntotal',10)->nullable();
            $table->integer('N_In_use',10)->nullable();
            $table->integer('N_Not_in_use',10)->nullable();
            $table->integer('Required_unit',10)->nullable();
            $table->integer('Estimate',10)->nullable();
            $table->string('Anganwadi_name',10)->nullable();
            $table->string('A_has_toilet',10)->nullable();
            $table->string('A_is_toilet_use',10)->nullable();
            $table->integer('Toilet_required',10)->nullable();
            $table->string('P_has_toilet',10)->nullable();
            $table->string('P_is_toilet_use',10)->nullable();
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
        Schema::dropIfExists('table4s');
    }
}
