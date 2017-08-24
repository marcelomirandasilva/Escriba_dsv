<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membros', function (Blueprint $table) {
            $table->increments('id');

            $table->string('no_membro',50);
            $table->mediumText('foto')                      ->nullable();
            $table->unsignedInteger('co_cim')               ->nullable();
            $table->date('dt_nascimento')                   ->nullable();
            $table->string('no_naturalidade',20)            ->nullable();
            $table->string('no_nacionalidade',20)           ->nullable();

            //-----------------------------DOCUMENTOS----------------------            
            $table->char('nu_cpf',11)                       ->nullable();

            $table->string('nu_identidade',20)              ->nullable();
            $table->date('dt_emissao_idt')                  ->nullable();
            $table->string('no_orgao_emissor_idt',10)       ->nullable();

            $table->string('nu_titulo_eleitor',10)          ->nullable();
            $table->date('dt_emissao_titulo')               ->nullable();
            $table->unsignedInteger('nu_zona_eleitoral')    ->nullable();
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
            $table->boolean('ic_aposentado')                ->nullable();
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
                                    ])                      ->nullable();




           
            $table->binary('im_membro')                      ->nullable();

            $table->enum('ic_situacao', [
                'Regular Ativo',
                'Regular Inativo', 
                'Irregular',
                'Licenciado',
                'Oriente Eterno',

                                        ])                  ->nullable();


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

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('membros');
    }
}
