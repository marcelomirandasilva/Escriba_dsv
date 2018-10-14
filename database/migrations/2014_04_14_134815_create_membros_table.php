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
            $table->mediumText('im_membro')                 ->nullable();
            $table->string('co_cim',15)                     ->nullable();
            $table->date('dt_nascimento')                   ->nullable();
            $table->string('no_naturalidade',40)            ->nullable();
            $table->string('no_nacionalidade',40)           ->nullable();
            $table->string('no_proponente',50)              ->nullable();
            $table->text('de_anotacao')                      ->nullable();
            
            //----------------------------CONTATOS------------------------
            $table->string('email',200)                     ->nullable();

            $table->char('tel_res',14)                      ->nullable();
            $table->char('tel_cel',14)                      ->nullable();
            $table->char('tel_com',14)                      ->nullable();
            $table->char('ramal_com',10)                    ->nullable();
            

            //-----------------------------DOCUMENTOS----------------------            
            $table->char('nu_cpf',14)                       ->nullable();

            $table->string('nu_identidade',20)              ->nullable();
            $table->date('dt_emissao_idt')                  ->nullable();
            $table->string('no_orgao_emissor_idt',20)       ->nullable();

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

            // FK
            $table->integer('endereco_residencial_id')    ->nullable()->unsigned();
            $table->integer('endereco_comercial_id')      ->nullable()->unsigned();

            
            $table->timestamps();

        });

       /*  Schema::table('membros', function($table){
            $table->foreign('endereco_comercial_id')->references('id')->on('enderecos')->onDelete('cascade');
            $table->foreign('endereco_residencial_id')->references('id')->on('enderecos')->onDelete('cascade');
        }); */
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
