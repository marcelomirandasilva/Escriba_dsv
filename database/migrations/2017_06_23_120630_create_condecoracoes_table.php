<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCondecoracoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condecoracoes', function (Blueprint $table) {
            
            $table->increments('id');
            $table->unsignedInteger('membro_id');
            
            /*$table->enum('ic_condecoracao',['Honorário',
                                            'Remido',
                                            'Emérito',
                                            'Benemérito',
                                            'Grande Benemérito',
                                            'Maçom Notável',
                                            'Estrela da Distinção Maçônica',
                                            'Cruz da Perfeição Maçônica',
                                            'Comenda Dom Pedro I']);


            $table->integer('nu_ato')                        ->nullable();
            $table->date('dt_condecoracao')                ->nullable();
*/


            $table->date('dt_honorario')               ->nullable();
            $table->date('dt_remido')                  ->nullable();
            $table->date('dt_emerito')                 ->nullable();
            $table->date('dt_benemerito')              ->nullable();
            $table->date('dt_g_benemerito')            ->nullable();
            $table->date('dt_estrela_dis_mac')         ->nullable();
            $table->date('dt_cruz_perf')               ->nullable();
            $table->date('dt_com_dom_pedro')           ->nullable();

            $table->unsignedInteger('ato_honorario')        ->nullable();
            $table->unsignedInteger('ato_remido')           ->nullable();
            $table->unsignedInteger('ato_emerito')          ->nullable();
            $table->unsignedInteger('ato_benemerito')       ->nullable();
            $table->unsignedInteger('ato_g_Benemerito')     ->nullable();
            $table->unsignedInteger('ato_estrela_dis_mac')  ->nullable();
            $table->unsignedInteger('ato_cruz_perf')        ->nullable();
            $table->unsignedInteger('ato_com_dom_pedro')    ->nullable();





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
            Schema::dropIfExists('condecoracoes');        
        });
    }
}
