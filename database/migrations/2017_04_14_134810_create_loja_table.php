<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLojaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loja', function (Blueprint $table) {
            $table->increments('id');

            $table->string('co_titulo',10);
            $table->string('no_loja',50);
            $table->smallInteger('nu_loja');
            $table->enum('ic_rito', [
                                        'Escocês', 'Brasileiro','York','Moderno','Adonhiramita','Emulação ','Schröder',
                                        'Memphis-Misraïm','Escocês Retificado'
                                    ]);

            $table->date('dt_fundacao');
           
            // FK
            $table->integer('potencia_id')->unsigned();
            
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
        Schema::dropIfExists('loja');
    }
}
