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
            $table->unsignedInteger('irmao_id');
            $table->unsignedInteger('cargo_id');

            $table->timestamps();

            $table->foreign('sessao_id')->references('id')->on('sessao')->onDelete('cascade');
            $table->foreign('irmao_id')->references('id')->on('irmao')->onDelete('cascade');
            $table->foreign('cargo_id')->references('id')->on('cargo')->onDelete('cascade');
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
