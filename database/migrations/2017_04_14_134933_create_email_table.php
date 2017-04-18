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
        Schema::dropIfExists('email');
    }
}
