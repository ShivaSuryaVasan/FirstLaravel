<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTable7sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table7s', function (Blueprint $table) {
            $table->id();
            $table->string('Panchayat_name',10);
            $table->integer('Garbage_process',10);
            $table->integer('Nengaged_collectors',10)->nullable();
            $table->integer('Collected_volume',10)->nullable();
            $table->integer('Bio_waste_volume',10)->nullable();
            $table->integer('Flexible_waste',10)->nullable();
            $table->integer('Recycling_waste',10)->nullable();
            $table->integer('Impossible_recycling',10)->nullable();
            $table->integer('Medical_waste',10)->nullable();
            $table->integer('Industrial_waste',10)->nullable();
            $table->integer('Health_waste',10)->nullable();
            $table->integer('Electronic_waste',10)->nullable();
            $table->integer('Contruction_waste',10)->nullable();
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
        Schema::dropIfExists('table7s');
    }
}
