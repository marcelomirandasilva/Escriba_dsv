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
            $table->unsignedInteger('fk_irmao_id');
            $table->string('no_dependente',100);
            $table->date('dt_nascimento')->nullable();
            $table->char('ic_grau_parentesco',1);

            $table->timestamps();
            $table->foreign('fk_irmao_id')->references('id')->on('irmao')->onDelete('cascade');
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
