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
            $table->foreign('fk_loja_iniciacao')->references('id')->on('loja')->onDelete('cascade');
            $table->foreign('fk_loja_elevacao')->references('id')->on('loja')->onDelete('cascade');
            $table->foreign('fk_loja_exaltacao')->references('id')->on('loja')->onDelete('cascade');
            $table->foreign('fk_loja_instalacao')->references('id')->on('loja')->onDelete('cascade');
        });



        Schema::table('dependente', function($table){

            $table->foreign('fk_id_irmao')->references('id')->on('irmao')->onDelete('cascade');
        });


        Schema::table('email', function($table){

            $table->foreign('fk_id_irmao')->references('id')->on('irmao')->onDelete('cascade');
            $table->foreign('fk_id_loja')->references('id')->on('loja')->onDelete('cascade');
            $table->foreign('fk_id_dependente')->references('id')->on('dependente')->onDelete('cascade');
            $table->foreign('fk_id_visitante')->references('id')->on('visitante')->onDelete('cascade');
        });

        Schema::table('endereco', function($table){

            $table->foreign('fk_id_pais')->references('id')->on('pais')->onDelete('cascade');
            $table->foreign('fk_id_uf')->references('id')->on('uf')->onDelete('cascade');
            $table->foreign('fk_id_municipio')->references('id')->on('municipio')->onDelete('cascade');
            $table->foreign('fk_id_bairro')->references('id')->on('bairro')->onDelete('cascade');
            $table->foreign('fk_id_irmao')->references('id')->on('irmao')->onDelete('cascade');
            $table->foreign('fk_id_loja')->references('id')->on('loja')->onDelete('cascade');
            $table->foreign('fk_id_visitante')->references('id')->on('visitante')->onDelete('cascade');
        });

        Schema::table('ocupacao_cargo', function($table){
            $table->foreign('fk_id_irmao')->references('id')->on('irmao')->onDelete('cascade');
            $table->foreign('fk_id_cargo')->references('id')->on('cargo')->onDelete('cascade');
        });

        Schema::table('presenca_sessao', function($table){
            $table->foreign('fk_id_sessao')->references('id')->on('sessao')->onDelete('cascade');
            $table->foreign('fk_id_irmao')->references('id')->on('irmao')->onDelete('cascade');
            $table->foreign('fk_id_cargo')->references('id')->on('cargo')->onDelete('cascade');
        });


        Schema::table('telefone', function($table){
            $table->foreign('fk_id_irmao')->references('id')->on('irmao')->onDelete('cascade');
            $table->foreign('fk_id_loja')->references('id')->on('loja')->onDelete('cascade');
            $table->foreign('fk_id_dependente')->references('id')->on('dependente')->onDelete('cascade');
            $table->foreign('fk_id_visitante')->references('id')->on('visitante')->onDelete('cascade');
        });

        Schema::table('visita', function($table){
            $table->foreign('fk_id_visitante')->references('id')->on('visitante')->onDelete('cascade');
        });


        Schema::table('visitante', function($table){
            $table->integer('fk_id_loja')->unsigned();
            $table->foreign('fk_id_loja')->references('id')->on('loja')->onDelete('cascade');


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
