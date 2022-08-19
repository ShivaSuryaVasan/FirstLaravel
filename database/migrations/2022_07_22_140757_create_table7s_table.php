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
            $table->string('Panchayat_name');
            $table->string('Block_name')->nullable();
            $table->integer('Garbage_process');
            $table->integer('Nengaged_collectors')->nullable();
            $table->integer('Collected_volume')->nullable();
            $table->integer('Bio_waste_volume')->nullable();
            $table->integer('Flexible_waste')->nullable();
            $table->integer('Recycling_waste')->nullable();
            $table->integer('Impossible_recycling')->nullable();
            $table->integer('Medical_waste')->nullable();
            $table->integer('Industrial_waste')->nullable();
            $table->integer('Health_waste')->nullable();
            $table->integer('Electronic_waste')->nullable();
            $table->integer('Contruction_waste')->nullable();
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
