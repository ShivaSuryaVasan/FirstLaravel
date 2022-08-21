<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTable8sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table8s', function (Blueprint $table) {
            $table->id();
            $table->string('Panchayat_name',10);
            $table->integer('Nhouse',10)->nullable();
            $table->integer('Ncleaner',10)->nullable();
            $table->integer('Tgood_condition',10)->nullable();
            $table->integer('Tminor_repair',10)->nullable();
            $table->integer('Tcompletely_damaged',10)->nullable();
            $table->integer('Tneeded',10)->nullable();
            $table->integer('Pgood_condition',10)->nullable();
            $table->integer('Pminor_repair',10)->nullable();
            $table->integer('Pcompletely_damaged',10)->nullable();
            $table->integer('Pneeded',10)->nullable();
            $table->integer('Bgood_condition',10)->nullable();
            $table->integer('Bminor_repair',10)->nullable();
            $table->integer('Bcompletely_damaged',10)->nullable();
            $table->integer('Bneeded',10)->nullable();
            $table->integer('Egood_condition',10)->nullable();
            $table->integer('Eminor_repair',10)->nullable();
            $table->integer('Ecompletely_damaged',10)->nullable();
            $table->integer('Eneeded',10)->nullable();
            $table->string('Other_vehicle',10)->nullable();
            $table->integer('Nexisting_pits',10)->nullable();
            $table->integer('Npits_required',10)->nullable();
            $table->integer('Sgood_condition',10)->nullable();
            $table->integer('Sminor_repair',10)->nullable();
            $table->integer('Scompletely_damaged',10)->nullable();
            $table->integer('Sneeded',10)->nullable();
            $table->integer('Vgood_condition',10)->nullable();
            $table->integer('Vminor_repair',10)->nullable();
            $table->integer('Vcompletely_damaged',10)->nullable();
            $table->string('Is_earthworm',10)->nullable();
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
        Schema::dropIfExists('table8s');
    }
}
