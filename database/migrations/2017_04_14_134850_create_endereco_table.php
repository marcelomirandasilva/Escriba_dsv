<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnderecoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('endereco', function (Blueprint $table) {
            $table->increments('id');
            
            $table->char('sg_uf',2);
            $table->string('no_municipio',50);
            $table->string('no_bairro',20);
            $table->string('no_logradouro',100);
            $table->integer('nu_logradouro');
            $table->string('de_complemento',20);
            $table->char('nu_cep',10);
            
            $table->enum('ic_tipo_endereco', ['Residencial','Comercial','Loja']);

            $table->unsignedInteger('pais_id');
            $table->unsignedInteger('irmao_id')->nullable();
            $table->unsignedInteger('loja_id')->nullable();
            $table->unsignedInteger('visitante_id')->nullable();


            $table->timestamps();

            // CHAVES ESTRANGEIRAS
            $table->foreign('pais_id')->references('id')->on('pais')->onDelete('cascade');
            $table->foreign('irmao_id')->references('id')->on('irmao')->onDelete('cascade');
            $table->foreign('loja_id')->references('id')->on('loja')->onDelete('cascade');
            $table->foreign('visitante_id')->references('id')->on('visitante')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('endereco');
    }
}
