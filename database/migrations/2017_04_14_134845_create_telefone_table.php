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
            $table->char('nu_telefone',11);
            $table->char('ic_tipo_telefone',1);
            $table->unsignedInteger('fk_irmao_id')->nullable();
            $table->unsignedInteger('fk_loja_id')->nullable();
            $table->unsignedInteger('fk_dependente_id')->nullable();
            $table->unsignedInteger('fk_visitante_id')->nullable();
            $table->timestamps();

            $table->foreign('fk_irmao_id')->references('id')->on('irmao')->onDelete('cascade');
            $table->foreign('fk_loja_id')->references('id')->on('loja')->onDelete('cascade');
            $table->foreign('fk_dependente_id')->references('id')->on('dependente')->onDelete('cascade');
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
        Schema::dropIfExists('telefone');
    }
}
