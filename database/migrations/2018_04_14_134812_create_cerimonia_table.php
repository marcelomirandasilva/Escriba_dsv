<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCerimoniaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cerimonia', function (Blueprint $table) {

            $table->increments('id');

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
        Schema::table('cerimonia', function (Blueprint $table) {
            //
        });
    }
}
