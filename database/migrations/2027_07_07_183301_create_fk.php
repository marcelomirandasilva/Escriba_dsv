<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('loja', function($table){

            $table->foreign('potencia_id')->references('id')->on('potencia')->onDelete('cascade');
        });

        Schema::table('dependente', function($table){

            $table->foreign('membro_id')->references('id')->on('membro')->onDelete('cascade');
        });

        Schema::table('cargo', function($table){

            $table->foreign('membro_id')->references('id')->on('membro')->onDelete('cascade');
            //$table->foreign('cargo_id')->references('id')->on('cargo')->onDelete('cascade');
        });


        Schema::table('presenca_sessao', function($table){
            $table->foreign('sessao_id')->references('id')->on('sessao')->onDelete('cascade');
            $table->foreign('membro_id')->references('id')->on('membro')->onDelete('cascade');
            $table->foreign('cargo_id')->references('id')->on('cargo')->onDelete('cascade');
        });

        Schema::table('visitante', function($table){
            $table->foreign('loja_id')->references('id')->on('loja')->onDelete('cascade');
        });

        Schema::table('visita', function($table){
            $table->foreign('visitante_id')->references('id')->on('visitante')->onDelete('cascade');
        });

        Schema::table('telefone', function($table){
            $table->foreign('membro_id')->references('id')->on('membro')->onDelete('cascade');
            $table->foreign('loja_id')->references('id')->on('loja')->onDelete('cascade');
            $table->foreign('dependente_id')->references('id')->on('dependente')->onDelete('cascade');
            $table->foreign('visitante_id')->references('id')->on('visitante')->onDelete('cascade');
        });

        Schema::table('endereco', function($table){

            $table->foreign('membro_id')->references('id')->on('membro')->onDelete('cascade');
            $table->foreign('loja_id')->references('id')->on('loja')->onDelete('cascade');
            $table->foreign('visitante_id')->references('id')->on('visitante')->onDelete('cascade');
        });

        Schema::table('email', function($table){

            $table->foreign('membro_id')->references('id')->on('membro')->onDelete('cascade');
            $table->foreign('loja_id')->references('id')->on('loja')->onDelete('cascade');
            $table->foreign('dependente_id')->references('id')->on('dependente')->onDelete('cascade');
            $table->foreign('visitante_id')->references('id')->on('visitante')->onDelete('cascade');
        });

        Schema::table('condecoracao', function($table){
            $table->foreign('membro_id')->references('id')->on('membro')->onDelete('cascade');
        });


        Schema::table('cerimonia', function($table){
            $table->foreign('loja_id_iniciacao')->references('id')->on('loja')->onDelete('cascade');
            $table->foreign('loja_id_elevacao')->references('id')->on('loja')->onDelete('cascade');
            $table->foreign('loja_id_exaltacao')->references('id')->on('loja')->onDelete('cascade');
            $table->foreign('loja_id_instalacao')->references('id')->on('loja')->onDelete('cascade');

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    
        Schema::table('loja', function($table){

            $table->dropForeign('loja_potencia_id_foreign');   
        });

        Schema::table('dependente', function($table){

            $table->dropForeign('dependente_membro_id_foreign');   
        });

        Schema::table('cargo', function($table){

            $table->dropForeign('cargo_membro_id_foreign');   
        });


        Schema::table('presenca_sessao', function($table){
            $table->dropForeign('presenca_sessao_cargo_id_foreign');   
            $table->dropForeign('presenca_sessao_membro_id_foreign');   
            $table->dropForeign('presenca_sessao_sessao_id_foreign');   
        });

        Schema::table('visitante', function($table){
            $table->dropForeign('visitante_loja_id_foreign');   
        });

        Schema::table('visita', function($table){
            $table->dropForeign('visita_visitante_id_foreign');   
        });

        Schema::table('telefone', function($table){
            $table->dropForeign('telefone_dependente_id_foreign');   
            $table->dropForeign('telefone_loja_id_foreign');   
            $table->dropForeign('telefone_membro_id_foreign');   
            $table->dropForeign('telefone_visitante_id_foreign');   
        });

        Schema::table('endereco', function($table){

            $table->dropForeign('endereco_loja_id_foreign');   
            $table->dropForeign('endereco_membro_id_foreign');   
            $table->dropForeign('endereco_visitante_id_foreign');   
        });

        Schema::table('email', function($table){

            $table->dropForeign('email_dependente_id_foreign');
            $table->dropForeign('email_loja_id_foreign');   
            $table->dropForeign('email_membro_id_foreign');   
            $table->dropForeign('email_visitante_id_foreign');   
        });

        Schema::table('condecoracao', function($table){
            $table->dropForeign('condecoracao_membro_id_foreign');   
        });


        Schema::table('cerimonia', function($table){
            $table->dropForeign('cerimonia_loja_id_elevacao_foreign');   
            $table->dropForeign('cerimonia_loja_id_exaltacao_foreign');   
            $table->dropForeign('cerimonia_loja_id_iniciacao_foreign');   
            $table->dropForeign('cerimonia_loja_id_instalacao_foreign');   
        });



    }
}