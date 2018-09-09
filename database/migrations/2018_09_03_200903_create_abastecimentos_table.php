<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbastecimentosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('abastecimentos', function (Blueprint $table) {
			$table->increments('id');

			$table->integer('veiculo_id')                ->unsigned();
			$table->integer('posto_id')                  ->unsigned();

			$table->float('qtd', 5, 3);
			$table->float('valor', 5, 3);
        	$table->string('combustivel',10)					->default('GASOLINA');

			$table->softDeletes();
			$table->timestamps();
		});

		Schema::table('abastecimentos', function($table){
            $table->foreign('veiculo_id')->references('id')->on('veiculos')->onDelete('cascade');
            $table->foreign('posto_id')->references('id')->on('postos')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('abastecimentos');
	}
}
