<?php
use Illuminate\Database\Seeder;


class MembroTableSeeder extends Seeder
{

    public function run()
    {

        factory(App\Models\Membro::class, 50)->create()->each(function($membro)
        {
          
             //Criar um endereço
            $membro->enderecos()->save(factory(App\Models\Endereco::class)->make());
            
            // Criar 2 telefones
            $membro->telefones()->saveMany(factory(App\Models\Telefone::class, 2)->make());

            //Cria até 5 dependentes
            $membro->dependentes()->saveMany(factory(App\Models\Dependente::class, rand(1, 5))->make());

            // Criar 2 emails
            $membro->emails()->saveMany(factory(App\Models\Email::class, 2)->make());

            // Criar 4 condecorações
            $membro->condecoracoes()->saveMany(factory(App\Models\Condecoracao::class, 4)->make());

            // Cria cerimonia
            //$membro->cerimonia()->save(factory(App\Models\Cerimonia::class)->make());
        });
    }
}