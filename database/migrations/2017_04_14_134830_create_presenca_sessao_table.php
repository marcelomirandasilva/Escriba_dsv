<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresencaSessaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presenca_sessao', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('fk_id_sessao');
            $table->unsignedInteger('fk_id_irmao');
            $table->unsignedInteger('fk_id_cargo');

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
        Schema::dropIfExists('presenca_sessao');
    }
}
