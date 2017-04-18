<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelefoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefone', function (Blueprint $table) {
            $table->increments('id');
            $table->char('co_ddd',2);
            $table->char('nu_telefone',9);
            $table->char('ic_tipo_telefone',1);
            $table->unsignedInteger('fk_id_irmao')->nullable();
            $table->unsignedInteger('fk_id_loja')->nullable();
            $table->unsignedInteger('fk_id_dependente')->nullable();
            $table->unsignedInteger('fk_id_visitante')->nullable();
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
        Schema::dropIfExists('telefone');
    }
}
