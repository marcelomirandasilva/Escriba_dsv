<?php

use App\Bibliotecas\Geral;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
	
	$v_acesso 	= "PADRÃO"; //array_rand(pegaValorEnum('users','acesso'),1);   
	$avatar 		= "" ;
															
	return [
		'name' 				=> 	$faker->name,
		'email' 				=> 	$faker->safeEmail,
		'password' 			=> 	bcrypt(str_random(10)),
		'remember_token' 	=> 	str_random(10),
		'acesso'				=>		$v_acesso,
		//'avatar'				=> 	$avatar,
	];
});



$factory->define(App\Models\Membro::class, function(Faker\Generator $faker) {

	$faker = Faker\Factory::create('pt_BR');

	//$foto = "" ;

	// ESTADO CIVIL
	$vetor = pegaValorEnum('membros','ic_estado_civil');
	$v_estado_civil = $vetor[array_rand($vetor,1)];
	
	// DATA CASAMENTO
	if ($v_estado_civil == 'Casado') {
		$v_data_casamento = $faker->date('Y-m-d', '-18 years');
	}else{
		$v_data_casamento = null;
	}

	//SITUACAO
	$vetor = pegaValorEnum('membros','ic_situacao');      
	$v_situacao = $vetor[array_rand($vetor,1)];      

	//GRAU
	$vetor = pegaValorEnum('membros','ic_grau');
	$v_grau = $vetor[array_rand($vetor,1)];

	echo $v_grau ."\n";

	//ESCOLARIDADE
	$vetor = pegaValorEnum('membros','ic_escolaridade');
	$v_escolaridade  = $vetor[array_rand($vetor,1)];
	
/*	$v_dt_iniciacao          = null;
	$v_loja_id_iniciacao     = null;
	$v_dt_elevacao           = null;
	$v_loja_id_elevacao      = null;
	$v_dt_exaltacao          = null;
	$v_loja_id_exaltacao     = null;
	$v_dt_instalacao         = null;
	$v_loja_id_instalacao    = null;*/



	switch ($v_grau) {

	    case 'Aprendiz':
			$v_dt_iniciacao          = $faker->date($format = 'Y-m-d', $max = 'now');
			$v_loja_id_iniciacao     = $faker->numberBetween($min = 1, $max = 5);

        break;

	    case 'Companheiro':
        	$v_dt_iniciacao          = $faker->date($format = 'Y-m-d', $max = 'now');
			$v_loja_id_iniciacao     = $faker->numberBetween($min = 1, $max = 5);
			$v_dt_elevacao           = $faker->date($format = 'Y-m-d', $max = 'now');
			$v_loja_id_elevacao      = $faker->numberBetween($min = 1, $max = 5);
        break;

	    case 'Mestre':
        	$v_dt_iniciacao          = $faker->date($format = 'Y-m-d', $max = 'now');
			$v_loja_id_iniciacao     = $faker->numberBetween($min = 1, $max = 5);
			$v_dt_elevacao           = $faker->date($format = 'Y-m-d', $max = 'now');
			$v_loja_id_elevacao      = $faker->numberBetween($min = 1, $max = 5);
			$v_dt_exaltacao          = $faker->date($format = 'Y-m-d', $max = 'now');
			$v_loja_id_exaltacao     = $faker->numberBetween($min = 1, $max = 5);
	    break;

	    case 'M.Instalado':
	    	$v_dt_iniciacao          = $faker->date($format = 'Y-m-d', $max = 'now');
			$v_loja_id_iniciacao     = $faker->numberBetween($min = 1, $max = 5);
			$v_dt_elevacao           = $faker->date($format = 'Y-m-d', $max = 'now');
			$v_loja_id_elevacao      = $faker->numberBetween($min = 1, $max = 5);
			$v_dt_exaltacao          = $faker->date($format = 'Y-m-d', $max = 'now');
			$v_loja_id_exaltacao     = $faker->numberBetween($min = 1, $max = 5);
			$v_dt_instalacao         = $faker->date($format = 'Y-m-d', $max = 'now');
			$v_loja_id_instalacao    = $faker->numberBetween($min = 1, $max = 5);
        break;
	}


	return [

		'no_membro'             => $faker->name,
		//'im_membro'					=> $foto,
		'co_cim'                => $faker->numberBetween($min = 11111, $max = 9999999),
		'dt_nascimento'         => $faker->date('Y-m-d', '-18 years'),
		'no_naturalidade'			=> $faker->city,
		'no_nacionalidade'		=> $faker->country,
		'nu_cpf'                => $faker->cpf,
		'nu_identidade'         => $faker->rg,
		'dt_emissao_idt'			=> $faker->date('Y-m-d', '-18 years'),
		'no_orgao_emissor_idt'	=> $faker->randomElement(['DETRAN', 'IFP', 'Marinha do Brasil']),
		'nu_titulo_eleitor'		=> $faker->randomNumber(9),
		'dt_emissao_titulo'		=> $faker->date('Y-m-d', '-18 years'),
		'nu_zona_eleitoral'		=> $faker->randomNumber(5),

		'email'  					=> $faker->safeEmail,

		'tel_res'  					=> "(21)".$faker->landline,
		'tel_cel'  					=> "(21)".$faker->cellphone(true, 21),
		'tel_com'  					=> "(21)".$faker->landline,
		'ramal_com'					=> $faker->randomNumber(4),

		'ic_estado_civil'       => $v_estado_civil,

		'dt_casamento'				=> $v_data_casamento,
		'no_profissao'				=> $faker->jobTitle,
		'ic_aposentado'			=> $faker->boolean,
		'no_empregador'			=> $faker->company,
		'no_pai'						=> $faker->name($gender = 'male'),  
		'no_mae'						=> $faker->name($gender = 'female'),  

		'ic_grau'               => $v_grau,


		'ic_situacao'           => $v_situacao, //$faker->randomElement(['Regular','Suspenso','Ativo','Oriente Eterno','Quit Placet']),

		'ic_escolaridade'       => $v_escolaridade,
		'endereco_comercial_id'	=> factory('App\Models\Endereco')->create()->id,
		'endereco_residencial_id'	=> factory('App\Models\Endereco')->create()->id,

	];
});


$factory->define(App\Models\Loja::class, function(Faker\Generator $faker) {

	$faker = Faker\Factory::create('pt_BR');

	return [
		'co_titulo'		=> 'ARLS',
		'no_loja'      => $faker->company,
		'nu_loja'      => $faker->numberBetween($min = 1000, $max = 9000), 
		'dt_fundacao'  => $faker->date($format = 'Y-m-d', $max = 'now'),
		'ic_rito'      => $faker->randomElement(['Escocês', 'Brasileiro','York','Moderno','Adonhiramita','Emulação', 'Schröder','Memphis-Misraïm','Escocês Retificado']),
		'potencia_id'  => App\Models\Potencia::all()->random()->id,
		'email' 			=> 	$faker->safeEmail,
		'nu_telefone'  => "(21) $faker->landline",
		'endereco_id'	=> factory('App\Models\Endereco')->create()->id,
	];
});


$factory->define(App\Models\Endereco::class, function(Faker\Generator $faker) {

	$faker = Faker\Factory::create('pt_BR');



	return [
		'pais_id'			=> App\Models\Pais::all()->random()->id,
		'sg_uf'			 	=> $faker->stateAbbr,
		'no_municipio'	 	=> $faker->city,
		'no_bairro'			=> $faker->cityPrefix,

		'no_logradouro'   => $faker->streetName,
		'nu_logradouro'   => $faker->randomNumber(3),
		'de_complemento'  => $faker->secondaryAddress,
		'nu_cep'          => $faker->randomNumber(5)."-".$faker->randomNumber(3),
		//'ic_tipo_endereco'=> 'Comercial',
		
	];	
	
});


$factory->define(App\Models\Email::class, function(Faker\Generator $faker) {

	$faker = Faker\Factory::create('pt_BR');

	return [
		'email'  => $faker->safeEmail,
	];	
});

$factory->define(App\Models\Telefone::class, function(Faker\Generator $faker) {

	$faker = Faker\Factory::create('pt_BR');

	$v_telefone = array_rand(pegaValorEnum('telefones','ic_telefone'),1);

	if($v_telefone =="Celular" )
	{
		return [

			'nu_telefone'  => "(21) ".$faker->cellphone(true, 21),
			'ic_telefone'  => $v_telefone,

		];	
	}
	else
	{
		return [

			'nu_telefone'  => "(21) $faker->landline",
			'ic_telefone'  => $v_telefone,

		];
	}
});



$factory->define(App\Models\Dependente::class, function(Faker\Generator $faker) {

	$faker = Faker\Factory::create('pt_BR');

	return [
		'no_dependente'         => $faker->name,
		'dt_nascimento'     		=> $faker->date('Y-m-d', '-18 years'),
		'ic_grau_parentesco'		=> $faker->randomElement(['Avós','Bisavós','Bisneto(a)','Companheiro(a)','Cônjuge','Enteado(a)','Ex-esposa','Filho(a)', 'Irmão(ã)','Neto(a)','Pais','Outros']),
	];

});


$factory->define(App\Models\Condecoracao::class, function(Faker\Generator $faker) {

	$faker = Faker\Factory::create('pt_BR');

	$v_ic_condecoracao = array_rand(pegaValorEnum('condecoracoes','ic_condecoracao'),1);

	return [

		'ic_condecoracao'		=> $v_ic_condecoracao,
      'nu_ato'					=> $faker->randomNumber(4),
		'dt_condecoracao' 	=> $faker->date('Y-m-d'),
	];

});	


$factory->define(App\Models\Cerimonia::class, function(Faker\Generator $faker) {
	$faker = Faker\Factory::create('pt_BR');

	$v_ic_cerimonia 	= array_rand(pegaValorEnum('cerimonias','ic_cerimonia'),1);
	$v_loja_id 			= App\Models\Loja::all()->random()->id;

	return [
		'ic_cerimonia'	=> $v_ic_cerimonia,
		'loja_id'		=> $v_loja_id,
      'dt_cerimonia' => $faker->date('Y-m-d'),
	];	

});

$factory->define(App\Models\Sessao::class, function(Faker\Generator $faker) {

	$faker = Faker\Factory::create('pt_BR');

	$vetor1 			= pegaValorEnum('sessoes','ic_grau');
	$v_grau 			= $vetor1[array_rand($vetor1,1)];

	$vetor2 			= pegaValorEnum('sessoes','ic_tipo_sessao');
	$v_tipo_sessao = $vetor2[array_rand($vetor2,1)]."";

	echo $v_tipo_sessao ." ==========="  ."\n";
	return [
		'dt_sessao'			=> $faker->date($format = 'Y-m-d', $max = 'now'),
		'hh_inicio'    	=> $faker->time($format = 'H:i:s', $max = '19:30:00', $min = '19:00:00'),
		'hh_termino'   	=> $faker->time($format = 'H:i:s', $max = '22:30:00', $min = '21:00:00'),
		'ic_tipo_sessao'	=> $v_tipo_sessao,
		'ic_grau'			=> $v_grau,
		'de_sessao'			=> $faker->text($maxNbChars = 100),

	];
});
