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
            
            $table->enum('ic_estado_civil', [
                                                'Solteiro',
                                                'Casado', 
                                                'Divorciado',
                                                'Viúvo',
                                                'Separado',
                                                'União estável'
                                            ])              ->nullable();

            $table->enum('ic_grau', [
                                        'PF',
                                        'AP', 
                                        'CM',
                                        'MM',
                                        'MI'
                                    ]);


            $table->date('dt_iniciacao')                    ->nullable();
            $table->unsignedInteger('fk_loja_iniciacao')    ->nullable();

            $table->date('dt_elevacao')                     ->nullable();
            $table->unsignedInteger('fk_loja_elevacao')     ->nullable();

            $table->date('dt_exaltacao')                    ->nullable();
            $table->unsignedInteger('fk_loja_exaltacao')    ->nullable();

            $table->date('dt_instalacao')                   ->nullable();
            $table->unsignedInteger('fk_loja_instalacao')   ->nullable();

            $table->binary('im_irmao')                      ->nullable();

            $table->enum('ic_situacao', [
                'Regular',
                'Suspenso', 
                'XXXXXXXXX',
                'YYYYYYYYY',
                'ZZZZZZZZZ'
                                        ]);


            $table->enum('ic_escolaridade', [

                'Fundamental - Incompleto',
                'Fundamental - Completo',
                'Médio - Incompleto',
                'Médio - Completo',
                'Superior - Incompleto',
                'Superior - Completo',
                'Pós-graduação - Incompleto',
                'Pós-graduação - Completo',
                'Mestrado - Incompleto',
                'Mestrado - Completo',
                'Doutorado - Incompleto',
                'Doutorado - Completo'
                                            ])              ->nullable();

            $table->string('de_profissao',50)               ->nullable();
            $table->enum('ic_aposentado',['Não', 'Sim'])    ->nullable();

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
