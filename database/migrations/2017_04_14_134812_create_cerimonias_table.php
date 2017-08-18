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
