<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visita', function (Blueprint $table) {
            $table->increments('id');
            $table->date('dt_visita');
            $table->unsignedInteger('fk_visitante_id');
            $table->timestamps();

            $table->foreign('fk_visitante_id')->references('id')->on('visitante')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visita');
    }
}
