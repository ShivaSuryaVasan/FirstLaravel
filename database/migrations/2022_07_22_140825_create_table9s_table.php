<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTable9sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table9s', function (Blueprint $table) {
            $table->id();
            $table->string('Panchayat_name');
            $table->string('Hamlet_name');
            $table->integer('Ncleaner')->nullable();
            $table->string('Cplace_name')->nullable();
            $table->string('Clocation')->nullable();
            $table->string('Cdistance')->nullable();
            $table->string('Slocation')->nullable();
            $table->string('Sdistance')->nullable();
            $table->string('Vlocation')->nullable();
            $table->string('Vdistance')->nullable();
            $table->string('Post_in_panchayat')->nullable();
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
        Schema::dropIfExists('table9s');
    }
}
