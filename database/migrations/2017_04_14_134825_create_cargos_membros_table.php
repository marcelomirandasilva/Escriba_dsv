<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargosMembrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargos_membros', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('membro_id');
            $table->unsignedInteger('cargo_id');
            $table->smallinteger('aa_inicio')->nullable();
            $table->smallinteger('aa_termino')->nullable();

            $table->timestamps();

        });

        Schema::table('cargos_membros', function($table){
            $table->foreign('membro_id')->references('id')->on('membros')->onDelete('cascade');
            $table->foreign('cargo_id')->references('id')->on('cargos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cargos_membros');
    }
}
