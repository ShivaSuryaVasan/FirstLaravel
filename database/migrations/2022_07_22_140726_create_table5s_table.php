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
            $table->string('Panchayat_name',10);
            $table->string('Hamlet_name',10);
            $table->integer('Ntemple',10)->nullable();
            $table->integer('Toilet_in_temple',10)->nullable();
            $table->string('General_toilet_temple',10)->nullable();
            $table->integer('Nmarket',10)->nullable();
            $table->string('General_toilet_market',10)->nullable();
            $table->integer('Nvao_office',10)->nullable();
            $table->string('General_toilet_VAO_office',10)->nullable();
            $table->integer('Ncooperative_store',10)->nullable();
            $table->string('Toilet_cooperative_store',10)->nullable();
            $table->integer('NVPSN_building',10)->nullable();
            $table->string('General_toilet_VPSN_building',10)->nullable();
            $table->string('Toilet_SHG_building',10)->nullable();
            $table->string('Toilet_community',10)->nullable();
            $table->string('Toilet_Library',10)->nullable();
            $table->string('Toilet_Theater',10)->nullable();
            $table->string('Toilet_bus_shelter',10)->nullable();
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
