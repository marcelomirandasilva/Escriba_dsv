<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membro', function (Blueprint $table) {
            $table->increments('id');

            $table->string('no_membro',50);
            $table->char('co_cim',10);
            $table->date('dt_nascimento')                   ->nullable();
            $table->string('no_naturalidade',20);
            $table->string('no_nacionalidade',20);

            //-----------------------------DOCUMENTOS----------------------            
            $table->char('nu_cpf',11)                       ->nullable();

            $table->string('nu_identidade',10)              ->nullable();
            $table->date('dt_emissao_idt')                  ->nullable();
            $table->string('no_orgao_emissor_idt',10)       ->nullable();

            $table->string('nu_titulo_eleitor',10)          ->nullable();
            $table->date('dt_emissao_titulo')               ->nullable();
            $table->integer('nu_zona_eleitoral')            ->nullable();
            //------------------------------------------------------------
            

            $table->enum('ic_estado_civil', [
                                                'Solteiro',
                                                'Casado', 
                                                'Divorciado',
                                                'Viúvo',
                                                'Separado',
                                                'União estável'
                                            ])              ->nullable();

            $table->date('dt_casamento')                    ->nullable();

            //-----------------------------PROFISSIONAL----------------------            
            $table->string('no_profissao',50)               ->nullable();
            $table->enum('ic_aposentado',['Não', 'Sim'])    ->nullable();
            $table->string('no_empregador',50)              ->nullable();
            //----------------------------------------------------------------            

            $table->string('no_pai',50)                     ->nullable();
            $table->string('no_mae',50)                     ->nullable();



            $table->enum('ic_grau', [
                                        'Candidato',
                                        'Aprendiz', 
                                        'Companheiro',
                                        'Mestre',
                                        'M.Instalado'
                                    ]);


            $table->date('dt_iniciacao')                    ->nullable();
            $table->unsignedInteger('loja_id_iniciacao')    ->nullable();

            $table->date('dt_elevacao')                     ->nullable();
            $table->unsignedInteger('loja_id_elevacao')     ->nullable();

            $table->date('dt_exaltacao')                    ->nullable();
            $table->unsignedInteger('loja_id_exaltacao')    ->nullable();

            $table->date('dt_instalacao')                   ->nullable();
            $table->unsignedInteger('loja_id_instalacao')   ->nullable();

            $table->date('dt_filiacao')                     ->nullable();
            $table->date('dt_regularizacao')                ->nullable();

            $table->integer('nu_ato_benemerito')            ->nullable();
            $table->date('dt_benemerito')                   ->nullable();

            $table->integer('nu_ato_grande_benemerito')     ->nullable();
            $table->date('dt_grande_benemerito')            ->nullable();

            $table->integer('nu_ato_estrela_distincao')     ->nullable();
            $table->date('dt_estrela_distincao')            ->nullable();

            $table->integer('nu_ato_cruz_perfeicao')        ->nullable();
            $table->date('dt_cruz_perfeicao')               ->nullable();

            $table->integer('nu_ato_comenda_pedro')         ->nullable();
            $table->date('dt_comenda_pedro')                ->nullable();


            $table->binary('im_membro')                      ->nullable();

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

            
            $table->timestamps();

            $table->foreign('loja_id_iniciacao')->references('id')->on('loja')->onDelete('cascade');
            $table->foreign('loja_id_elevacao')->references('id')->on('loja')->onDelete('cascade');
            $table->foreign('loja_id_exaltacao')->references('id')->on('loja')->onDelete('cascade');
            $table->foreign('loja_id_instalacao')->references('id')->on('loja')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('membro');
    }
}
