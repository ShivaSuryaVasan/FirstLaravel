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
            $table->string('Panchayat_name');
            $table->string('Hamlet_name');
            $table->string('Block_name')->nullable();
            $table->string('Health_complexes')->nullable();
            $table->string('Location')->nullable();
            $table->integer('Fully_functional')->nullable();
            $table->integer('Partially_used')->nullable();
            $table->integer('Not_in_use')->nullable();
            $table->integer('Dilapidated_premises')->nullable();
            $table->integer('Totally_dilapidated_premises')->nullable();
            $table->integer('User_group')->nullable();
            $table->integer('Self_help_group')->nullable();
            $table->integer('Village_panchayat')->nullable();
            $table->string('Project')->nullable();
            $table->string('Assessment')->nullable();
            $table->string('Current_status_of_work')->nullable();
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
