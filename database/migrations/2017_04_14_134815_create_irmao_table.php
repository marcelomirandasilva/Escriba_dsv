<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIrmaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('irmao', function (Blueprint $table) {
            $table->increments('id');

            $table->string('no_irmao',100);
            $table->char('co_cim',10);
            $table->char('nu_cpf',11)                       ->nullable();
            $table->date('dt_nascimento')                   ->nullable();
            $table->char('ic_estado_civil',1)               ->nullable();

            $table->date('dt_iniciacao')                    ->nullable();
            $table->unsignedInteger('fk_loja_iniciacao')    ->nullable();

            $table->date('dt_elevacao')                     ->nullable();
            $table->unsignedInteger('fk_loja_elevacao')     ->nullable();

            $table->date('dt_exaltacao')                    ->nullable();
            $table->unsignedInteger('fk_loja_exaltacao')    ->nullable();

            $table->date('dt_instalacao')                   ->nullable();
            $table->unsignedInteger('fk_loja_instalacao')   ->nullable();

            $table->binary('im_irmao')                      ->nullable();
            $table->char('ic_situacao',1);
            $table->char('ic_escolaridade',1)               ->nullable();
            $table->string('de_profissao',50)               ->nullable();
            $table->char('ic_aposentado',1);

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
        Schema::dropIfExists('irmao');
    }
}
