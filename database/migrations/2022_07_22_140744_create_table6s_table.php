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
            $table->string('Panchayat_name');
            $table->integer('Nhamelet');
            $table->string('Block_name')->nullable();
            $table->integer('Nschool')->nullable();
            $table->integer('SToilet_in_school')->nullable();
            $table->integer('Nanganwadi')->nullable();
            $table->integer('AToilet_in_anganwadi')->nullable();
            $table->integer('Ngovernment')->nullable();
            $table->integer('GToilet_in_government')->nullable();
            $table->integer('Other_public_places')->nullable();
            $table->integer('PToilet_in_places')->nullable();
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
