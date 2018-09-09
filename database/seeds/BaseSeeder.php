<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Base;

class BaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		DB::table('bases')->insert(['nome'=>'PREFEITURA','endereco' => 'R. Arthur de Oliveira Vecchi, 120 - Centro']);
		DB::table('bases')->insert(['nome'=>'DINÂMICA'	,'endereco' => 'Av. Coelho da Rocha, 1426 - Rocha Sobrinho']);
		DB::table('bases')->insert(['nome'=>'GMM'			,'endereco' => 'R. Arthur Oliveira Vechi, 316 - Centro']);
	}
}

