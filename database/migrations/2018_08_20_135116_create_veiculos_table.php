<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVeiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->increments('id');

            $table->char('placa',7);
            $table->string('modelo',50);
            $table->string('cor',50)                        ->nullable();
            $table->integer('ano')                          ->nullable();
            $table->char('renavam',11)                      ->nullable();
            $table->enum('combustivel',['FLEX','GASOLINA','ALCOOL', 'GNV','DIESEL']) ->default('GASOLINA');
            
            $table->integer('secretaria_id')                ->unsigned()->nullable();
            $table->integer('base_id')                      ->unsigned()->nullable();
            
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('veiculos', function($table){
            $table->foreign('secretaria_id')->references('id')->on('secretarias')->onDelete('set null');
            $table->foreign('base_id')->references('id')->on('bases')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('veiculos');
    }
}
