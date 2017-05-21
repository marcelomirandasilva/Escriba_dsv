<?php
use Illuminate\Database\Seeder;
//use App\Models\Irmao;
//use App\Models\Endereco;
//use App\Models\Telefone;
//use App\Models\Dependente;
//use App\Models\Email;



class IrmaosTableSeeder extends Seeder
{

    public function run()
    {

       // factory(App\Models\Irmao::class, 20)->create();

        factory(App\Models\Irmao::class, 20)->create()->each(function($irmao)
        {
          
             //Criar um endereço
             $irmao->endereco()->save(factory(App\Models\Endereco::class)->make());
            // Criar 2 telefones
            $irmao->telefone()->saveMany(factory(App\Models\Telefone::class, 2)->make());

            //Cria até 5 dependentes
            $irmao->dependente()->saveMany(factory(App\Models\Dependente::class, rand(1, 5))->make());

            // Criar 2 emails
            $irmao->email()->saveMany(factory(App\Models\Email::class, 2)->make());
        });
    }
}