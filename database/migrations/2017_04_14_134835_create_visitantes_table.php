<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitantes', function (Blueprint $table) {
            $table->increments('id');


            $table->string('no_visitante',100);
            $table->char('co_cim',10);

            $table->date('dt_nascimento')           ->nullable();
            $table->char('ic_estado_civil',1)       ->nullable();

            $table->enum('ic_grau',['AM','CM','MM','MI']);
            $table->integer('loja_id')->unsigned();
            
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
        Schema::dropIfExists('visitantes');
    }
}
