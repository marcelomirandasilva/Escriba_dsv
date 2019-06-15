<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSetupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setups', function (Blueprint $table) {
            $table->increments('id');
            
            //$table->integer('loja_id')->unsigned();
            $table->time('hh_inicio_sessao');
            
            $table->enum('dt_semana_sessao',[
                'segunda-feira',
                'terça-feira',
                'quarta-feira',
                'quinta-feira',
                'sexta-feira',
                'sábado',
                'domingo',
            ]);

            $table->enum('dt_frequencia_sessao',[
                'semanal',
                'quinzenal',
                'mensal',
            ]);

            
            $table->timestamps();

            
            
        });

       /*  Schema::table('setups', function($table){
            $table->foreign('loja_id')->references('id')->on('lojas')->onDelete('cascade');
        });   */      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('setups');
    }
}
