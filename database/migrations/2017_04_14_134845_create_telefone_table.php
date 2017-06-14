<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelefoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefone', function (Blueprint $table) {
            $table->increments('id');
            //$table->char('co_ddd',2);
            $table->char('nu_telefone',15);
            $table->enum('ic_telefone', ['Residencial','Celular','Comercial','Recado']);
            $table->unsignedInteger('membro_id')->nullable();
            $table->unsignedInteger('loja_id')->nullable();
            $table->unsignedInteger('dependente_id')->nullable();
            $table->unsignedInteger('visitante_id')->nullable();
            $table->timestamps();

            $table->foreign('membro_id')->references('id')->on('membro')->onDelete('cascade');
            $table->foreign('loja_id')->references('id')->on('loja')->onDelete('cascade');
            $table->foreign('dependente_id')->references('id')->on('dependente')->onDelete('cascade');
            $table->foreign('visitante_id')->references('id')->on('visitante')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('telefone');
    }
}
