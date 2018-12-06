<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDependentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dependentes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('membro_id');
            $table->string('no_dependente',100);
            $table->date('dt_nascimento')                                   ->nullable();
            
            $table->enum('ic_grau_parentesco',[
                            'Avós','Bisavós','Bisneto(a)','Esposa','Ex-esposa',
                            'Filho(a)','Enteado(a)','Irmão(ã)','Neto(a)','Pais','Outros'
                        ])                                                  ->nullable();
            $table->enum('ic_sexo',['Feminino', 'Masculino', 'Outros'])     ->nullable();
            $table->boolean('ic_mora_junto')                                ->nullable();
            
            $table->timestamps();
        });

        Schema::table('dependentes', function($table){
            $table->foreign('membro_id')->references('id')->on('membros')->onDelete('cascade');
        });        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dependentes');
    }
}
