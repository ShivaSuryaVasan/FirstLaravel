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
            $table->string('Panchayat_name',10);
            $table->string('Hamlet_name',10);
            $table->integer('Nstreet',10)->nullable();
            $table->integer('Mhouse',10)->nullable();
            $table->integer('Whome_garden',10)->nullable();
            $table->integer('WHouse_suction_well',10)->nullable();
            $table->integer('WHouse_connected_sewage',10)->nullable();
            $table->integer('WHouse_connected_community',10)->nullable();
            $table->integer('WHouse_with_amenities',10)->nullable();
            $table->integer('Whouse_GWMfacilities',10)->nullable();
            $table->integer('Wplace_with_stagnantwater',10)->nullable();
            $table->integer('Shouse_without_amenities',10)->nullable();
            $table->integer('Shome_garden',10)->nullable();
            $table->integer('Shouse_requiring_septic_tank',10)->nullable();
            $table->integer('Shouse_connected_sewage',10)->nullable();
            $table->integer('Shouse_connected_community',10)->nullable();
            $table->integer('Sother_facilities',10)->nullable();
            $table->integer('Rsoak_pit',10)->nullable();
            $table->integer('Rdrainage',10)->nullable();
            $table->integer('Rcommunity_soak_pit',10)->nullable();
            $table->integer('Rhorizontal_soak_pit',10)->nullable();
            $table->integer('Rvertical_soak_pit',10)->nullable();
            $table->integer('Rwater_stabilization',10)->nullable();
            $table->integer('Rrenovation_work',10)->nullable();
            $table->integer('Osoak_pit',10)->nullable();
            $table->integer('Odrainage',10)->nullable();
            $table->integer('Ocommunity_soak_pit',10)->nullable();
            $table->integer('Ohorizontal_soak_pit',10)->nullable();
            $table->integer('Overtical_soak_pit',10)->nullable();
            $table->integer('Orenovation_work',10)->nullable();
            $table->integer('Wsoak_pit',10)->nullable();
            $table->integer('Wdrainage',10)->nullable();
            $table->integer('Wcommunity_soak_pit',10)->nullable();
            $table->integer('Whorizontal_soak_pit',10)->nullable();
            $table->integer('Wvertical_soak_pit',10)->nullable();
            $table->integer('Wwater_stabilization',10)->nullable();
            $table->integer('Wrenovation_work',10)->nullable();
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
