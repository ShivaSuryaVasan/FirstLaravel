<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTable5sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table5s', function (Blueprint $table) {
            $table->id();
            $table->string('Panchayat_name');
            $table->string('Hamlet_name');
            $table->integer('Ntemple')->nullable();
            $table->integer('Toilet_in_temple')->nullable();
            $table->string('General_toilet_temple')->nullable();
            $table->integer('Nmarket')->nullable();
            $table->string('General_toilet_market')->nullable();
            $table->integer('Nvao_office')->nullable();
            $table->string('General_toilet_VAO_office')->nullable();
            $table->integer('Ncooperative_store')->nullable();
            $table->string('Toilet_cooperative_store')->nullable();
            $table->integer('NVPSN_building')->nullable();
            $table->string('General_toilet_VPSN_building')->nullable();
            $table->string('Toilet_SHG_building')->nullable();
            $table->string('Toilet_community')->nullable();
            $table->string('Toilet_Library')->nullable();
            $table->string('Toilet_Theater')->nullable();
            $table->string('Toilet_bus_shelter')->nullable();
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
        Schema::dropIfExists('table5s');
    }
}
