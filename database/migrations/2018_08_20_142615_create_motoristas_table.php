<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotoristasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motoristas', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nome',100);
            $table->string('celular',10)            ->nullable();
            $table->char('cnh',11)                ->nullable();
            $table->string('categoria_cnh',3)       ->nullable();
            $table->date('validade_cnh',11)         ->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('motoristas');
    }
}
