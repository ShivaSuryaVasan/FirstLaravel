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
            $table->string('Panchayat_name',10);
            $table->string('Hamlet_name',10);
            $table->integer('Ncleaner',10)->nullable();
            $table->string('Cplace_name',10)->nullable();
            $table->string('Clocation',10)->nullable();
            $table->string('Cdistance',10)->nullable();
            $table->string('Slocation',10)->nullable();
            $table->string('Sdistance',10)->nullable();
            $table->string('Vlocation',10)->nullable();
            $table->string('Vdistance',10)->nullable();
            $table->string('Post_in_panchayat',10)->nullable();
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
