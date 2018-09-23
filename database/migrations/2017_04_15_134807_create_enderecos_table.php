<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnderecosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('enderecos', function (Blueprint $table) {
			$table->increments('id');
			
			
			$table->char('sg_uf',2)                 ->nullable();
			$table->string('no_municipio',50)       ->nullable();
			$table->string('no_bairro',20)          ->nullable();
			$table->string('no_logradouro',100)     ->nullable();
			$table->integer('nu_logradouro')        ->nullable();
			$table->string('de_complemento',20)     ->nullable();
			$table->char('nu_cep',10)               ->nullable();
			
			$table->enum('ic_tipo_endereco', ['Residencial','Comercial','Loja']);

			$table->unsignedInteger('pais_id');
			$table->unsignedInteger('membro_id')->nullable();
			$table->unsignedInteger('loja_id')->nullable(); 
			$table->unsignedInteger('visitante_id')->nullable();


			$table->timestamps();
		});

		Schema::table('enderecos', function($table){
			 
			$table->foreign('membro_id')->references('id')->on('membros')->onDelete('cascade');
			$table->foreign('loja_id')->references('id')->on('lojas')->onDelete('cascade');
			$table->foreign('visitante_id')->references('id')->on('visitantes')->onDelete('cascade');
			$table->foreign('pais_id')->references('id')->on('paises')->onDelete('cascade');	
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('enderecos');
	}
}
