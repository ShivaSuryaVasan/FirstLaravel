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
            $table->string('Panchayat_name');
            $table->string('Hamlet_name');
            $table->string('Block_name')->nullable();
            $table->string('School_name')->nullable();
            $table->string('S_has_toilet')->nullable();
            $table->integer('Bstudent_toilet')->nullable();
            $table->integer('Gstudent_toilet')->nullable();
            $table->integer('Ntotal')->nullable();
            $table->integer('N_In_use')->nullable();
            $table->integer('N_Not_in_use')->nullable();
            $table->integer('Required_unit')->nullable();
            $table->integer('Estimate')->nullable();
            $table->string('Anganwadi_name')->nullable();
            $table->string('A_has_toilet')->nullable();
            $table->string('A_is_toilet_use')->nullable();
            $table->integer('Toilet_required')->nullable();
            $table->string('P_has_toilet')->nullable();
            $table->string('P_is_toilet_use')->nullable();
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
