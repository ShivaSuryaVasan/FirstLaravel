<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTable10sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table10s', function (Blueprint $table) {
            $table->id();
            $table->string('Panchayat_name');
            $table->string('Hamlet_name');
            $table->string('Block_name')->nullable();
            $table->integer('Nstreet')->nullable();
            $table->integer('Mhouse')->nullable();
            $table->integer('Whome_garden')->nullable();
            $table->integer('WHouse_suction_well')->nullable();
            $table->integer('WHouse_connected_sewage')->nullable();
            $table->integer('WHouse_connected_community')->nullable();
            $table->integer('WHouse_with_amenities')->nullable();
            $table->integer('Whouse_GWMfacilities')->nullable();
            $table->integer('Wplace_with_stagnantwater')->nullable();
            $table->integer('Shouse_without_amenities')->nullable();
            $table->integer('Shome_garden')->nullable();
            $table->integer('Shouse_requiring_septic_tank')->nullable();
            $table->integer('Shouse_connected_sewage')->nullable();
            $table->integer('Shouse_connected_community')->nullable();
            $table->integer('Sother_facilities')->nullable();
            $table->integer('Rsoak_pit')->nullable();
            $table->integer('Rdrainage')->nullable();
            $table->integer('Rcommunity_soak_pit')->nullable();
            $table->integer('Rhorizontal_soak_pit')->nullable();
            $table->integer('Rvertical_soak_pit')->nullable();
            $table->integer('Rwater_stabilization')->nullable();
            $table->integer('Rrenovation_work')->nullable();
            $table->integer('Osoak_pit')->nullable();
            $table->integer('Odrainage')->nullable();
            $table->integer('Ocommunity_soak_pit')->nullable();
            $table->integer('Ohorizontal_soak_pit')->nullable();
            $table->integer('Overtical_soak_pit')->nullable();
            $table->integer('Orenovation_work')->nullable();
            $table->integer('Wsoak_pit')->nullable();
            $table->integer('Wdrainage')->nullable();
            $table->integer('Wcommunity_soak_pit')->nullable();
            $table->integer('Whorizontal_soak_pit')->nullable();
            $table->integer('Wvertical_soak_pit')->nullable();
            $table->integer('Wwater_stabilization')->nullable();
            $table->integer('Wrenovation_work')->nullable();
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
        Schema::dropIfExists('table10s');
    }
}
