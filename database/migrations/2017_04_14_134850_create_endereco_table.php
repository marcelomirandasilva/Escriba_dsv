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
            $table->char('ic_tipo_endereco',1);
            $table->unsignedInteger('fk_id_pais');
            $table->unsignedInteger('fk_id_uf');
            $table->unsignedInteger('fk_id_municipio');
            $table->unsignedInteger('fk_id_bairro');
            $table->unsignedInteger('fk_id_irmao')->nullable();
            $table->unsignedInteger('fk_id_loja')->nullable();
            $table->unsignedInteger('fk_id_visitante')->nullable();


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
        Schema::dropIfExists('endereco');
    }
}
