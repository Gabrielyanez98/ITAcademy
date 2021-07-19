<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLigaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liga', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('equipoLocal');
            $table->string('equipoVisitante');
            $table->integer('golesLocal');
            $table->integer('golesVisitante');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('liga');
    }
}
