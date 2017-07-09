<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessoes', function (Blueprint $table) {
            $table->increments('id');
            $table->date('dt_sessao');
            $table->time('hh_inicio')->nullable();
            $table->time('hh_termino')->nullable();
            $table->enum('ic_grau',['AM','CM','MM','MI']);
            $table->enum('ic_tipo_sessao',['Ordinária,','Extraordinária','Magna']);
            $table->string('de_sessao',60);

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
        Schema::dropIfExists('sessoes');
    }
}
