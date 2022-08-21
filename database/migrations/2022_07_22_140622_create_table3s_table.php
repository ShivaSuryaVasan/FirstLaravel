<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTable3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table3s', function (Blueprint $table) {
            $table->id();
            $table->string('Panchayat_name',10);
            $table->string('Hamlet_name',10);
            $table->string('Health_complexes',10)->nullable();
            $table->string('Location',10)->nullable();
            $table->integer('Fully_functional',10)->nullable();
            $table->integer('Partially_used',10)->nullable();
            $table->integer('Not_in_use',10)->nullable();
            $table->integer('Dilapidated_premises',10)->nullable();
            $table->integer('Totally_dilapidated_premises',10)->nullable();
            $table->integer('User_group',10)->nullable();
            $table->integer('Self_help_group',10)->nullable();
            $table->integer('Village_panchayat',10)->nullable();
            $table->string('Project',10)->nullable();
            $table->string('Assessment',10)->nullable();
            $table->string('Current_status_of_work',10)->nullable();
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
        Schema::dropIfExists('table3s');
    }
}
