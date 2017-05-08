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

            $table->string('sg_logradouro',3);
            $table->string('no_logradouro',100);
            $table->integer('nu_logradouro');
            $table->char('nu_cep',8);
            $table->string('de_complemennto',10);

            
            $table->enum('ic_tipo_endereco', ['Residencial','Comercial','Loja']);


            $table->unsignedInteger('fk_pais_id');
            $table->unsignedInteger('fk_uf_id');
            $table->unsignedInteger('fk_municipio_id');
            $table->unsignedInteger('fk_bairro_id');
            $table->unsignedInteger('fk_irmao_id')->nullable();
            $table->unsignedInteger('fk_loja_id')->nullable();
            $table->unsignedInteger('fk_visitante_id')->nullable();


            $table->timestamps();

            $table->foreign('fk_pais_id')->references('id')->on('pais')->onDelete('cascade');
            $table->foreign('fk_uf_id')->references('id')->on('uf')->onDelete('cascade');
            $table->foreign('fk_municipio_id')->references('id')->on('municipio')->onDelete('cascade');
            $table->foreign('fk_bairro_id')->references('id')->on('bairro')->onDelete('cascade');
            $table->foreign('fk_irmao_id')->references('id')->on('irmao')->onDelete('cascade');
            $table->foreign('fk_loja_id')->references('id')->on('loja')->onDelete('cascade');
            $table->foreign('fk_visitante_id')->references('id')->on('visitante')->onDelete('cascade');
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
