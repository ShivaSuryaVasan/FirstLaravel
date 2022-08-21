<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTable11sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table11s', function (Blueprint $table) {
            $table->id();
            $table->string('Panchayat_name',10);
            $table->string('Detail_of_work',10)->nullable();
            $table->integer('Total_amount_required',10)->nullable();
            $table->integer('MGNREGS',10)->nullable();
            $table->integer('Vtied_water_supply',10)->nullable();
            $table->integer('Vtied_sanitation',10)->nullable();
            $table->integer('Vunited',10)->nullable();
            $table->integer('Ltied_water_supply',10)->nullable();
            $table->integer('Ltied_sanitation',10)->nullable();
            $table->integer('Lunited',10)->nullable();
            $table->integer('Dtied_water_supply',10)->nullable();
            $table->integer('Dtied_sanitation',10)->nullable();
            $table->integer('Dunited',10)->nullable();
            $table->string('SBM',10)->nullable();
            $table->string('Miscellaneous_project',10)->nullable();
            $table->string('Administrative_permission',10)->nullable();
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
        Schema::dropIfExists('table11s');
    }
}
