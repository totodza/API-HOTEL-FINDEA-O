<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Habitacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Habitacion', function (Blueprint $table) {
            $table->id();
            $table->string('numero');
            $table->string('piso');
            $table->string('estado');
            $table->unsignedBigInteger('tipodehabitacion_id');
            $table->foreign('tipodehabitacion_id')->references('id')->on('tipodehabitacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
