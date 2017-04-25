<?php

use Illuminate\Database\Seeder;

class LojaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loja')->insert([
            'co_titulo'   => 'ARLS',
            'no_loja'     => 'PIONEIROS DO PROGRESSO',
            'nu_loja'     => 1731,
            'dt_fundacao' => '01/01/1960',
            'co_potencia' => 'GOB'
        ]);
    }
}
