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
            $table->string('Panchayat_name');
            $table->string('Hamlet_name');
            $table->string('Block_name')->nullable();
            $table->integer('Nhouse')->nullable();
            $table->integer('Ncleaner')->nullable();
            $table->integer('Tgood_condition')->nullable();
            $table->integer('Tminor_repair')->nullable();
            $table->integer('Tcompletely_damaged')->nullable();
            $table->integer('Tneeded')->nullable();
            $table->integer('Pgood_condition')->nullable();
            $table->integer('Pminor_repair')->nullable();
            $table->integer('Pcompletely_damaged')->nullable();
            $table->integer('Pneeded')->nullable();
            $table->integer('Bgood_condition')->nullable();
            $table->integer('Bminor_repair')->nullable();
            $table->integer('Bcompletely_damaged')->nullable();
            $table->integer('Bneeded')->nullable();
            $table->integer('Egood_condition')->nullable();
            $table->integer('Eminor_repair')->nullable();
            $table->integer('Ecompletely_damaged')->nullable();
            $table->integer('Eneeded')->nullable();
            $table->string('Other_vehicle')->nullable();
            $table->integer('Nexisting_pits')->nullable();
            $table->integer('Npits_required')->nullable();
            $table->integer('Sgood_condition')->nullable();
            $table->integer('Sminor_repair')->nullable();
            $table->integer('Scompletely_damaged')->nullable();
            $table->integer('Sneeded')->nullable();
            $table->integer('Vgood_condition')->nullable();
            $table->integer('Vminor_repair')->nullable();
            $table->integer('Vcompletely_damaged')->nullable();
            $table->string('Is_earthworm')->nullable();
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
