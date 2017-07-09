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
	
	$v_acesso = array_rand(pegaValorEnum('users','acesso'),1);   

	return [
		'name' 				=> 	$faker->name,
		'email' 			=> 	$faker->safeEmail,
		'password' 			=> 	bcrypt(str_random(10)),
		'remember_token' 	=> 	str_random(10),
		'acesso'			=>	$v_acesso,
	];
});



$factory->define(App\Models\Membro::class, function(Faker\Generator $faker) {

	$faker = Faker\Factory::create('pt_BR');

	// ESTADO CIVIL
	$v_estado_civil = $faker->randomElement(['Solteiro','Casado','Divorciado','Viúvo','Separado','União estável']);

	// DATA CASAMENTO
	if ($v_estado_civil == 'Casado') {
		$v_data_casamento = $faker->date('Y-m-d', '-18 years');
	}else{
		$v_data_casamento = null;
	}

	//SITUACAO
	//$v1 = pegaValorEnum('membro','ic_situacao');      
	$v_situacao = array_rand(pegaValorEnum('membros','ic_situacao'),1);      

	//GRAU
	$v_grau = $faker->randomElement(['Candidato','Aprendiz','Companheiro','Mestre','M.Instalado']);
	
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
		'co_cim'                => $faker->numberBetween($min = 11111, $max = 9999999),
		'dt_nascimento'         => $faker->date('Y-m-d', '-18 years'),
		'no_naturalidade'		=> $faker->city,
		'no_nacionalidade'		=> $faker->country,
		'nu_cpf'                => $faker->cpf,
		'nu_identidade'         => $faker->rg,
		'dt_emissao_idt'		=> $faker->date('Y-m-d', '-18 years'),
		'no_orgao_emissor_idt'	=> $faker->randomElement(['DETRAN', 'IFP', 'Marinha do Brasil']),
		'nu_titulo_eleitor'		=> $faker->randomNumber(9),
		'dt_emissao_titulo'		=> $faker->date('Y-m-d', '-18 years'),
		'nu_zona_eleitoral'		=> $faker->randomNumber(5),


		'ic_estado_civil'       => $v_estado_civil,

		'dt_casamento'			=> $v_data_casamento,
		'no_profissao'			=> $faker->jobTitle,
		'ic_aposentado'			=> $faker->boolean,
		'no_empregador'			=> $faker->company,
		'no_pai'				=> $faker->name($gender = 'male'),  
		'no_mae'				=> $faker->name($gender = 'female'),  

		'ic_grau'               => $v_grau,


		/*'dt_iniciacao'          =>$v_dt_iniciacao,
		'loja_id_iniciacao'     =>$v_loja_id_iniciacao,
		'dt_elevacao'           =>$v_dt_elevacao,
		'loja_id_elevacao'      =>$v_loja_id_elevacao,
		'dt_exaltacao'          =>$v_dt_exaltacao,
		'loja_id_exaltacao'     =>$v_loja_id_exaltacao,
		'dt_instalacao'         =>$v_dt_instalacao,
		'loja_id_instalacao'    =>$v_loja_id_instalacao,*/



		'ic_situacao'           => $v_situacao, //$faker->randomElement(['Regular','Suspenso','Ativo','Oriente Eterno','Quit Placet']),

		'ic_escolaridade'       => $faker->randomElement(['Fundamental - Incompleto','Fundamental - Completo',
																			'Médio - Incompleto','Médio - Completo',
																			'Superior - Incompleto','Superior - Completo',
																			'Pós-graduação - Incompleto','Pós-graduação - Completo',
																			'Mestrado - Incompleto','Mestrado - Completo',
																			'Doutorado - Incompleto','Doutorado - Completo'
																		]),
		'ic_aposentado'         => $faker->randomElement($array = array ('Não', 'Sim')),
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
	];
});


$factory->define(App\Models\Endereco::class, function(Faker\Generator $faker) {

	$faker = Faker\Factory::create('pt_BR');

	return [
		'no_pais'			=> $faker->country, //App\Models\Pais::all()->random()->id,
		'sg_uf'			 	=> $faker->stateAbbr,
		'no_municipio'	 	=> $faker->city,
		'no_bairro'			=> $faker->cityPrefix,

		'no_logradouro'   => $faker->streetName,
		'nu_logradouro'   => $faker->randomNumber(3),
		'de_complemento'  => $faker->secondaryAddress,
		'nu_cep'          => $faker->randomNumber(5)."-".$faker->randomNumber(3),
		//'ic_tipo_endereco'=> $faker->randomElement(['Residencial','Comercial','Loja']),

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

	if(rand(0,1))
	{
		return [

			'nu_telefone'  => "(21) ".$faker->cellphone(true, 21),
			'ic_telefone'  => "Celular",

		];	
	}
	else
	{
		return [

			'nu_telefone'  => "(21) $faker->landline",
			'ic_telefone'  => "Fixo",

		];
	}
});



$factory->define(App\Models\Dependente::class, function(Faker\Generator $faker) {

	$faker = Faker\Factory::create('pt_BR');

	return [
		'no_dependente'         => $faker->name,
		'dt_nascimento'     	=> $faker->date('Y-m-d', '-18 years'),
		'ic_grau_parentesco'	=> $faker->randomElement(['Avós','Bisavós','Bisneto(a)','Companheiro(a)','Cônjuge','Enteado(a)','Ex-esposa','Filho(a)', 'Irmão(ã)','Neto(a)','Pais','Outros']),
	];

});


$factory->define(App\Models\Condecoracao::class, function(Faker\Generator $faker) {

	$faker = Faker\Factory::create('pt_BR');

	return [


            'dt_honorario'			=> $faker->date('Y-m-d'),
            'dt_remido'				=> $faker->date('Y-m-d'),
            'dt_emerito'			=> $faker->date('Y-m-d'),
            'dt_benemerito'			=> $faker->date('Y-m-d'),
            'dt_g_benemerito'		=> $faker->date('Y-m-d'),
            'dt_estrela_dis_mac'	=> $faker->date('Y-m-d'),
            'dt_cruz_perf'			=> $faker->date('Y-m-d'),
            'dt_com_dom_pedro'		=> $faker->date('Y-m-d'),
            
            'ato_remido'			=> $faker->randomNumber(4),
            'ato_emerito'			=> $faker->randomNumber(4),
            'ato_benemerito'		=> $faker->randomNumber(4),
            'ato_g_Benemerito'		=> $faker->randomNumber(4),
            'ato_estrela_dis_mac'	=> $faker->randomNumber(4),
            'ato_cruz_perf'			=> $faker->randomNumber(4),
            'ato_com_dom_pedro'		=> $faker->randomNumber(4),


	];

});	


$factory->define(App\Models\Cerimonia::class, function(Faker\Generator $faker) {

	$faker = Faker\Factory::create('pt_BR');

	return [

	    'dt_iniciacao'          => $faker->date('Y-m-d'),
		'loja_id_iniciacao'     => $faker->numberBetween($min = 1, $max = 5),
		'dt_elevacao'           => $faker->date('Y-m-d'),
		'loja_id_elevacao'      => $faker->numberBetween($min = 1, $max = 5),
		'dt_exaltacao'          => $faker->date('Y-m-d'),
		'loja_id_exaltacao'     => $faker->numberBetween($min = 1, $max = 5),
		'dt_instalacao'         => $faker->date('Y-m-d'),
		'loja_id_instalacao'    => $faker->numberBetween($min = 1, $max = 5),
	];	

});