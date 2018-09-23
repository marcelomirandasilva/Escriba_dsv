<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCerimoniasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cerimonias', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('membro_id');
            $table->unsignedInteger('loja_id')              ->nullable();

            $table->date('dt_cerimonia')                    ->nullable();

            $table->enum('ic_cerimonia',
                            [   
                                'Iniciação',
                                'Elevação',
                                'Exaltação',
                                'Instalação',
                                'Filiação',
                                'Regularização' 
                            ]
                        );




            $table->timestamps();

         });

        Schema::table('cerimonias', function($table){
            $table->foreign('membro_id')    ->references('id')->on('membros')->onDelete('cascade');
            $table->foreign('loja_id')      ->references('id')->on('lojas')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('cerimonias');
    }
}
