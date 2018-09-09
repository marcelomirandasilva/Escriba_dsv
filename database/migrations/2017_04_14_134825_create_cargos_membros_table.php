<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargosMembrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargos_membros', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('membro_id');
            $table->unsignedInteger('cargo_id');
            $table->smallinteger('aa_inicio')->nullable();
            $table->smallinteger('aa_termino')->nullable();

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
        Schema::dropIfExists('cargos_membros');
    }
}
