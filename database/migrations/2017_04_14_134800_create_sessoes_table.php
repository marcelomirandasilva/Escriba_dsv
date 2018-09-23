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
            $table->enum('ic_grau',['Aprendiz','Companheiro','Mestre']);
            $table->enum('ic_tipo_sessao',[
            
                            'Ordinária – Regular',
                            'Ordinária – Instrução',
                            'Ordinária – Administrativa',
                            'Ordinária – Finanças',
                            'Ordinária – Filiação de Maçons',
                            'Ordinária – Regularizações de Maçons',
                            'Ordinária – Eleições da administração e de membro do Ministério Público',
                            'Ordinária – Eleições dos deputados federais e estaduais e de seus suplentes',
                            'Ordinária – Banquete Ritualístico',
                            'Ordinária – Admissão de membros honorários.',

                            'Magna - Iniciação',
                            'Magna – Elevação',
                            'Magna – Exaltação',
                            'Magna – Posse',
                            'Magna – Instalação',
                            'Magna - Sagração de estandarte',
                            'Magna – Regularização de Loja',
                            'Magna – Sagração de Templo',


                            'Magna Pública – Adoção de Lowtons',
                            'Magna Pública – Consagração e de exaltação matrimonial',
                            'Magna Pública – Pompas fúnebres',
                            'Magna Pública – Conferências, palestras ou festivas',
                            'Magna Pública – Cívico-cultural',

                            'Extraordinária - Eleições de Grão-Mestre Geral, de Grão-Mestre Adjunto, de Grão-Mestre Estadual e de Grão do Distrito Federal e seus adjuntos',
                            'Extraordinária – Conselho de Família',
                            'Extraordinária – Concessão de placet ex officio',
                            'Extraordinária – Alteração de estatutos',
                            'Extraordinária – Mudança de Rito',
                            'Extraordinária – Mudança de Oriente',
                            'Extraordinária – Mudança de Título Distintivo',
                            'Extraordinária – Fusão ou incorporação de Lojas',
                        ]);


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
