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
            $table->unsignedInteger('sessao_id');
            $table->unsignedInteger('membro_id');
            $table->unsignedInteger('cargo_id');

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
