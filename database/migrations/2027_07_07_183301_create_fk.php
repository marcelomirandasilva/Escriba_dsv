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

        Schema::table('lojas', function($table){

            $table->foreign('potencia_id')->references('id')->on('potencias')->onDelete('cascade');
        });

        Schema::table('dependentes', function($table){

            $table->foreign('membro_id')->references('id')->on('membros')->onDelete('cascade');
        });

        Schema::table('cargos', function($table){

            //$table->foreign('membro_id')->references('id')->on('membros')->onDelete('cascade');
            //$table->foreign('cargo_id')->references('id')->on('cargos')->onDelete('cascade');
        });

        Schema::table('ocupacao_cargos', function($table){

            $table->foreign('membro_id')->references('id')->on('membros')->onDelete('cascade');
            $table->foreign('cargo_id')->references('id')->on('cargos')->onDelete('cascade');
        });
        

        Schema::table('presenca_sessoes', function($table){
            $table->foreign('sessao_id')->references('id')->on('sessoes')->onDelete('cascade');
            $table->foreign('membro_id')->references('id')->on('membros')->onDelete('cascade');
            $table->foreign('cargo_id')->references('id')->on('cargos')->onDelete('cascade');
        });

        Schema::table('visitantes', function($table){
            $table->foreign('loja_id')->references('id')->on('lojas')->onDelete('cascade');
        });

        Schema::table('visitas', function($table){
            $table->foreign('visitante_id')->references('id')->on('visitantes')->onDelete('cascade');
        });

        Schema::table('telefones', function($table){
            $table->foreign('membro_id')->references('id')->on('membros')->onDelete('cascade');
            $table->foreign('loja_id')->references('id')->on('lojas')->onDelete('cascade');
            $table->foreign('dependente_id')->references('id')->on('dependentes')->onDelete('cascade');
            $table->foreign('visitante_id')->references('id')->on('visitantes')->onDelete('cascade');
        });

        Schema::table('enderecos', function($table){

            $table->foreign('membro_id')->references('id')->on('membros')->onDelete('cascade');
            $table->foreign('loja_id')->references('id')->on('lojas')->onDelete('cascade');
            $table->foreign('visitante_id')->references('id')->on('visitantes')->onDelete('cascade');
        });

        Schema::table('emails', function($table){

            $table->foreign('membro_id')->references('id')->on('membros')->onDelete('cascade');
            $table->foreign('loja_id')->references('id')->on('lojas')->onDelete('cascade');
            $table->foreign('dependente_id')->references('id')->on('dependentes')->onDelete('cascade');
            $table->foreign('visitante_id')->references('id')->on('visitantes')->onDelete('cascade');
        });

        Schema::table('condecoracoes', function($table){
            $table->foreign('membro_id')->references('id')->on('membros')->onDelete('cascade');
        });



        Schema::table('cerimonias', function($table){
            $table->foreign('membro_id')    ->references('id')->on('membros')->onDelete('cascade');
            $table->foreign('loja_id')      ->references('id')->on('lojas')->onDelete('set null');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    
        Schema::disableForeignKeyConstraints();
        
        /*Schema::table('lojas', function($table){

            $table->dropForeign('lojas_potencia_id_foreign');   
        });

        Schema::table('dependentes', function($table){

            $table->dropForeign('dependentes_membro_id_foreign');   
        });

        Schema::table('cargos', function($table){

            $table->dropForeign('cargos_membro_id_foreign');   
        });


        Schema::table('presenca_sessoes', function($table){
            $table->dropForeign('presenca_sessoes_cargo_id_foreign');   
            $table->dropForeign('presenca_sessoes_membro_id_foreign');   
            $table->dropForeign('presenca_sessoes_sessao_id_foreign');   
        });

        Schema::table('visitantes', function($table){
            $table->dropForeign('visitantes_loja_id_foreign');   
        });

        Schema::table('visitas', function($table){
            $table->dropForeign('visitas_visitante_id_foreign');   
        });

        Schema::table('telefones', function($table){
            $table->dropForeign('telefones_dependente_id_foreign');   
            $table->dropForeign('telefones_loja_id_foreign');   
            $table->dropForeign('telefones_membro_id_foreign');   
            $table->dropForeign('telefones_visitante_id_foreign');   
        });

        Schema::table('enderecos', function($table){

            $table->dropForeign('enderecos_loja_id_foreign');   
            $table->dropForeign('enderecos_membro_id_foreign');   
            $table->dropForeign('enderecos_visitante_id_foreign');   
        });

        Schema::table('emails', function($table){

            $table->dropForeign('emails_dependente_id_foreign');
            $table->dropForeign('emails_loja_id_foreign');   
            $table->dropForeign('emails_membro_id_foreign');   
            $table->dropForeign('emails_visitante_id_foreign');   
        });

        Schema::table('condecoracoes', function($table){
            $table->dropForeign('condecoracoes_membro_id_foreign');   
        });


        Schema::table('cerimonias', function($table){
            $table->dropForeign('cerimonias_loja_id_elevacao_foreign');   
            $table->dropForeign('cerimonias_loja_id_exaltacao_foreign');   
            $table->dropForeign('cerimonias_loja_id_iniciacao_foreign');   
            $table->dropForeign('cerimonias_loja_id_instalacao_foreign');   
        });


*/
    }
}