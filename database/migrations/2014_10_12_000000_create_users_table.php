<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->enum('acesso', ['ADMINISTRADOR',
                                    'SECRETÁRIO',
                                    'TESOUREIRO',
                                    'CHANCELER',
                                    'VENERÁVEL',
                                    'PADRÃO'])->default('PADRÃO');
                                    
            $table->enum('status',['Ativo','Inativo',])->default('Ativo');
            $table->mediumText('avatar')                          ->nullable();
            /*$table->string('avatar')->default('default.jpg');*/
            $table->string('password');

            //------------------------FOREIGN--------------------------------
            $table->integer('membro_id')   ->nullable()->unsigned();
            //------------------------FOREIGN--------------------------------

            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('users', function($table){
            $table->foreign('membro_id')->references('id')->on('membros')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
