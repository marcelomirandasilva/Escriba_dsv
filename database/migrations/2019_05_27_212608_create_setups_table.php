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
            
            $table->integer('loja_id')                      ->unsigned();
           
            $table->enum('dt_semana_sessao',[
                'segunda-feira',
                'terça-feira',
                'quarta-feira',
                'quinta-feira',
                'sexta-feira',
                'sábado',
                'domingo',
                ]);
                
            $table->string('de_complemento_dt_sessao',18)   ->nullable();  
            $table->time('hh_inicio_sessao');
            $table->string('cnpj',18)                       ->nullable();  

            $table->timestamps();

            
            
        });

        Schema::table('setups', function($table){
            $table->foreign('loja_id')->references('id')->on('lojas')->onDelete('cascade');
        });        
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
