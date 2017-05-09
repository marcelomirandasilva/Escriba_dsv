<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcupacaoCargoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ocupacao_cargo', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('irmao_id');
            $table->unsignedInteger('cargo_id');
            $table->date('dt_posse');

            $table->timestamps();

            $table->foreign('irmao_id')->references('id')->on('irmao')->onDelete('cascade');
            $table->foreign('cargo_id')->references('id')->on('cargo')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ocupacao_cargo');
    }
}
