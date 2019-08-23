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
            $table->integer('potencia_id')          ->unsigned();
            $table->string('co_titulo',10);
            $table->string('no_loja',50);
            $table->smallInteger('nu_loja');
            $table->enum('ic_rito', [
                'ESCOCÊS', 'BRASILEIRO','YORK','MODERNO','ADONHIRAMITA','EMULAÇÃO ','SCHRÖDER',
                'MEMPHIS-MISRAÏM','ESCOCÊS RETIFICADO'
            ]);

            $table->date('dt_fundacao')             ->nullable();
            $table->string('nu_telefone',15)        ->nullable();
            $table->string('email',200)             ->nullable();

            $table->char('sg_uf',2)                 ->nullable();
			$table->string('no_municipio',50)       ->nullable();
			$table->string('no_bairro',20)          ->nullable();
			$table->string('no_logradouro',100)     ->nullable();
			$table->integer('nu_logradouro')        ->nullable();
			$table->string('de_complemento',20)     ->nullable();
            $table->char('nu_cep',10)               ->nullable();
            $table->unsignedInteger('pais_id')      ->nullable();
            $table->string('cnpj',18)               ->nullable();  

            

            $table->enum('ic_dia_sessao',[
                'SEGUNDA-FEIRA',
                'TERÇA-FEIRA',
                'QUARTA-FEIRA',
                'QUINTA-FEIRA',
                'SEXTA-FEIRA',
                'SÁBADO',
                'DOMINGO',
            ]);
                
            $table->string('de_complemento_dia_sessao',50)   ->nullable();  
            $table->time('hh_inicio_sessao');


            $table->timestamps();

            
            
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
