<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class SecretariaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		$secretariaID = DB::table('secretarias')->insertGetId(['nome'=>'Controladoria Geral do Município'  														,'sigla' => 'CGM']);
		$secretariaID = DB::table('secretarias')->insertGetId(['nome'=>'Instituto de Previdência - Mesquitaprev' 												,'sigla' => 'PREV']); 
		$secretariaID = DB::table('secretarias')->insertGetId(['nome'=>'Procuradoria Geral do Município' 															,'sigla' => 'PGM']); 
		$secretariaID = DB::table('secretarias')->insertGetId(['nome'=>'Secretaria Municipal de Assistência Social'												,'sigla' => 'SEMAS']);
		$secretariaID = DB::table('secretarias')->insertGetId(['nome'=>'Secretaria Municipal de Educação' 															,'sigla' => 'SEMED']);
		$secretariaID = DB::table('secretarias')->insertGetId(['nome'=>'Secretaria Municipal de Esporte, Cultura, Lazer e Turismo' 						,'sigla' => 'SEMCELT']);
		$secretariaID = DB::table('secretarias')->insertGetId(['nome'=>'Secretaria Municipal de Meio Ambiente e Urbanismo'									,'sigla' => 'SEMMURB']);
		$secretariaID = DB::table('secretarias')->insertGetId(['nome'=>'Secretaria Municipal de Obras, Serviços Públicos e Defesa Civil'					,'sigla' => 'SEMOSPDEC']);
		$secretariaID = DB::table('secretarias')->insertGetId(['nome'=>'Secretaria Municipal de Saúde'																,'sigla' => 'SEMUS']); 
		$secretariaID = DB::table('secretarias')->insertGetId(['nome'=>'Secretaria Municipal de Segurança, Ordem Pública e Cidadania'						,'sigla' => 'SEMSOP']);
		$secretariaID = DB::table('secretarias')->insertGetId(['nome'=>'Secretaria Municipal de Trabalho, Desenvolvimento Econômico e Agricultura' 	,'sigla' => 'SETRADE']); 
		$secretariaID = DB::table('secretarias')->insertGetId(['nome'=>'Secretaria Municipal de Transporte e Trânsito' 										,'sigla' => 'SETRANS']);
		$secretariaID = DB::table('secretarias')->insertGetId(['nome'=>'Secretaria Municipal de Governo, Administração, Planejamento e Fazenda'		,'sigla' => 'SEMGAP']);

	}
}

