<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email', function (Blueprint $table) {
            $table->increments('id');
            $table->string('de_email',200);
            $table->char('ic_tipo_email',1);
            $table->unsignedInteger('irmao_id')->nullable();
            $table->unsignedInteger('loja_id')->nullable();
            $table->unsignedInteger('dependente_id')->nullable();
            $table->unsignedInteger('visitante_id')->nullable();


            $table->timestamps();
            $table->foreign('irmao_id')->references('id')->on('irmao')->onDelete('cascade');
            $table->foreign('loja_id')->references('id')->on('loja')->onDelete('cascade');
            $table->foreign('dependente_id')->references('id')->on('dependente')->onDelete('cascade');
            $table->foreign('visitante_id')->references('id')->on('visitante')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('email');
    }
}
