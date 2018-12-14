<?php
use Illuminate\Database\Seeder;


class LojaTableSeeder extends Seeder
{

    public function run()
    {

        DB::table('lojas')->insert([
            'co_titulo'     => 'ARLS',
            'no_loja'       => 'Pioneiros do Progresso',
            'nu_loja'       => 1731,
            'dt_fundacao'   =>  '1968-11-07',
            'sg_uf'         => 'RJ',
            'no_municipio'  => 'Rio de Janeiro',
            'no_bairro'     => 'Centro',
            'no_logradouro' => 'Rua do Lavradio',
            'nu_logradouro' => '97',
            'de_complemento'=> 'Templo 7',
            'nu_cep'        => '20230-070',
            'pais_id'       => 26,
            'potencia_id'   => 1
        
        ]);

        /* factory(App\Models\Loja::class, 50)->create()->each(function($loja)
        {
                     
           
        }); */
    }
}
