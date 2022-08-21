<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTable6sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table6s', function (Blueprint $table) {
            $table->id();
            $table->string('Panchayat_name',10);
            $table->integer('Nhamelet',10);
            $table->integer('Nschool',10)->nullable();
            $table->integer('SToilet_in_school',10)->nullable();
            $table->integer('Nanganwadi',10)->nullable();
            $table->integer('AToilet_in_anganwadi',10)->nullable();
            $table->integer('Ngovernment',10)->nullable();
            $table->integer('GToilet_in_government',10)->nullable();
            $table->integer('Other_public_places',10)->nullable();
            $table->integer('PToilet_in_places',10)->nullable();
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
        Schema::dropIfExists('table6s');
    }
}
