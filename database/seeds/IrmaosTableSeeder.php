<?php
use Illuminate\Database\Seeder;



class MembrosTableSeeder extends Seeder
{

    public function run()
    {

       // factory(App\Models\Membro::class, 20)->create();

        factory(App\Models\Membro::class, 200)->create()->each(function($membro)
        {
          
             //Criar um endereço
             $membro->endereco()->save(factory(App\Models\Endereco::class)->make());
            // Criar 2 telefones
            $membro->telefone()->saveMany(factory(App\Models\Telefone::class, 2)->make());

            //Cria até 5 dependentes
            $membro->dependente()->saveMany(factory(App\Models\Dependente::class, rand(1, 5))->make());

            // Criar 2 emails
            $membro->email()->saveMany(factory(App\Models\Email::class, 2)->make());
        });
    }
}