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

        Schema::table('membro', function($table){
            
        });



        Schema::table('dependente', function($table){

            
        });


        Schema::table('email', function($table){


        });

        Schema::table('endereco', function($table){


        });

        Schema::table('ocupacao_cargo', function($table){

        });

        Schema::table('presenca_sessao', function($table){

        });


        Schema::table('telefone', function($table){

        });

        Schema::table('visita', function($table){

        });


        Schema::table('visitante', function($table){



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
