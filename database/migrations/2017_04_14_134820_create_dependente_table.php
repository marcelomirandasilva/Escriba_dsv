<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDependenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dependente', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('membro_id');
            $table->string('no_dependente',100);

            $table->date('dt_nascimento')->nullable();
            
            $table->enum('ic_grau_parentesco',[
                            'Avós','Bisavós','Bisneto(a)','Companheiro(a)',
                            'Cônjuge','Enteado(a)','Ex-esposa','Filho(a)',
                            'Irmão(ã)','Neto(a)','Pais','Outros'
                        ]);
            $table->enum('ic_sexo',['Feminino', 'Masculino', 'Outros']);
            $table->boolean('ic_mora_junto');
            
            $table->timestamps();
            $table->foreign('membro_id')->references('id')->on('membro')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dependente');
    }
}
