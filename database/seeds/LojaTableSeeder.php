<?php
use Illuminate\Database\Seeder;


class LojaTableSeeder extends Seeder
{

    public function run()
    {

        factory(App\Models\Loja::class, 50)->create()->each(function($loja)
        {
          
             //Criar um endereço
            //$loja->endereco()->save(factory(App\Models\Endereco::class)->make());

            // Criar 2 telefones
           // $loja->telefone()->save(factory(App\Models\Telefone::class)->make());

            // Criar um email
            //$loja->email()->save(factory(App\Models\Email::class)->make());
        });
    }
}
