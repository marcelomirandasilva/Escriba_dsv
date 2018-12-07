<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLojasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lojas', function (Blueprint $table) {
            $table->increments('id');

            $table->string('co_titulo',10);
            $table->string('no_loja',50);
            $table->smallInteger('nu_loja');
            $table->enum('ic_rito', [
                                        'Escocês', 'Brasileiro','York','Moderno','Adonhiramita','Emulação ','Schröder',
                                        'Memphis-Misraïm','Escocês Retificado'
                                    ]);

            $table->date('dt_fundacao')         ->nullable();
            $table->string('nu_telefone',15)    ->nullable();
            $table->string('email',200)         ->nullable();

            $table->char('sg_uf',2)                 ->nullable();
			$table->string('no_municipio',50)       ->nullable();
			$table->string('no_bairro',20)          ->nullable();
			$table->string('no_logradouro',100)     ->nullable();
			$table->integer('nu_logradouro')        ->nullable();
			$table->string('de_complemento',20)     ->nullable();
            $table->char('nu_cep',10)               ->nullable();
            $table->unsignedInteger('pais_id')      ->nullable();

          

            $table->integer('potencia_id')      ->unsigned();

            
            $table->timestamps();
        });

        Schema::table('lojas', function($table){
            $table->foreign('potencia_id')->references('id')->on('potencias')->onDelete('cascade');
            $table->foreign('pais_id')->references('id')->on('paises')->onDelete('set null');	
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lojas');
    }
}
