<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCondecoracaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('condecoracao', function (Blueprint $table) {
            
            $table->increments('id');
   
            $table->enum('ic_condecoracao',['Honorário',
                                            'Remido',
                                            'Emérito',
                                            'Benemérito',
                                            'Grande Benemérito',
                                            'Maçom Notável',
                                            'Estrela da Distinção Maçônica',
                                            'Cruz da Perfeição Maçônica',
                                            'Comenda Dom Pedro I']);


            $table->integer('nu_ato')                        ->nullable();
            $table->date('dt_condecoracacao')                ->nullable();

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
        Schema::table('condecoracao', function (Blueprint $table) {
            Schema::dropIfExists('condecoracao');        
        });
    }
}
