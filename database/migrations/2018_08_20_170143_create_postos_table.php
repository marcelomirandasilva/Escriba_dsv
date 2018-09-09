<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome',100);
            $table->string('endereco',250)      ->nullable();
            $table->char('cnpj',14)           ->nullable();

            $table->float('gasolina', 5, 3)     ->default(0);
            $table->float('alcool', 5, 3)       ->default(0);
            $table->float('diesel', 5, 3)       ->default(0);
            $table->float('gnv', 5, 3)          ->default(0);

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
        Schema::dropIfExists('postos');
    }
}
