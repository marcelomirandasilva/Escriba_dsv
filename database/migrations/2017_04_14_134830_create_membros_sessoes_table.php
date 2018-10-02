<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembrosSessoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membros_sessoes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('sessao_id');
            $table->unsignedInteger('membro_id');
            $table->unsignedInteger('cargo_id');

            $table->timestamps();

        });
        
        Schema::table('membros_sessoes', function($table){
            $table->foreign('sessao_id')->references('id')->on('sessoes')->onDelete('cascade');
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
        Schema::dropIfExists('membros_sessoes');
    }
}
