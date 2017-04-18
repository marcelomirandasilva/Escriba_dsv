<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FkTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('irmao', function($table){
            $table->foreign('fk_loja_iniciacao')->references('id')->on('loja');
            $table->foreign('fk_loja_elevacao')->references('id')->on('loja');
            $table->foreign('fk_loja_exaltacao')->references('id')->on('loja');
            $table->foreign('fk_loja_instalacao')->references('id')->on('loja');
        });



        Schema::table('dependente', function($table){

            $table->foreign('fk_id_irmao')->references('id')->on('irmao');
        });


        Schema::table('email', function($table){

            $table->foreign('fk_id_irmao')->references('id')->on('irmao');
            $table->foreign('fk_id_loja')->references('id')->on('loja');
            $table->foreign('fk_id_dependente')->references('id')->on('dependente');
            $table->foreign('fk_id_visitante')->references('id')->on('visitante');
        });

        Schema::table('endereco', function($table){

            $table->foreign('fk_id_pais')->references('id')->on('pais');
            $table->foreign('fk_id_uf')->references('id')->on('uf');
            $table->foreign('fk_id_municipio')->references('id')->on('municipio');
            $table->foreign('fk_id_bairro')->references('id')->on('bairro');
            $table->foreign('fk_id_irmao')->references('id')->on('irmao');
            $table->foreign('fk_id_loja')->references('id')->on('loja');
            $table->foreign('fk_id_visitante')->references('id')->on('visitante');
        });

        Schema::table('ocupacao_cargo', function($table){
            $table->foreign('fk_id_irmao')->references('id')->on('irmao');
            $table->foreign('fk_id_cargo')->references('id')->on('cargo');
        });

        Schema::table('presenca_sessao', function($table){
            $table->foreign('fk_id_sessao')->references('id')->on('sessao');
            $table->foreign('fk_id_irmao')->references('id')->on('irmao');
            $table->foreign('fk_id_cargo')->references('id')->on('cargo');
        });


        Schema::table('telefone', function($table){
            $table->foreign('fk_id_irmao')->references('id')->on('irmao');
            $table->foreign('fk_id_loja')->references('id')->on('loja');
            $table->foreign('fk_id_dependente')->references('id')->on('dependente');
            $table->foreign('fk_id_visitante')->references('id')->on('visitante');
        });

        Schema::table('visita', function($table){
            $table->foreign('fk_id_visitante')->references('id')->on('visitante');
        });


        Schema::table('visitante', function($table){
            $table->integer('fk_id_loja')->unsigned();
            $table->foreign('fk_id_loja')->references('id')->on('loja');


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
