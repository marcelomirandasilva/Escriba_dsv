<?php

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
	return [
	'name' => $faker->name,
	'email' => $faker->safeEmail,
	'password' => bcrypt(str_random(10)),
	'remember_token' => str_random(10),
	];
});

$factory->define(App\Models\Irmao::class, function(Faker\Generator $faker) {

	$faker = Faker\Factory::create('pt_BR');

	return [

		'no_irmao'              => $faker->name,
		'co_cim'                => $faker->numberBetween($min = 11111, $max = 9999999),
		'dt_nascimento'         => $faker->date('Y-m-d', '-18 years'),
		'no_naturalidade'		=> $faker->city,
		'no_nacionalidade'		=> $faker->country,
		'nu_cpf'                => $faker->cpf(false),
		'nu_identidade'         => $faker->rg,
		'dt_emissao_idt'		=> $faker->date('Y-m-d', '-18 years'),
		//'no_orgao_emissor_idt'	=> $faker->randomElement(['DETRAN', 'IFP', 'Marinha do Brasil']),
		'nu_titulo_eleitor'		=> $faker->randomNumber(9),
		'dt_emissao_titulo'		=> $faker->date('Y-m-d', '-18 years'),
		'nu_zona_eleitoral'		=> $faker->randomNumber(5),


		//'ic_estado_civil'       => $faker->randomElement(['Solteiro','Casado','Divorciado','Viúvo','Separado','União estável']),

		'dt_casamento'			=> $faker->date('Y-m-d', '-18 years'),
		'no_profissao'			=> $faker->jobTitle,
		'ic_aposentado'			=> $faker->randomElement(['Não', 'Sim']),
		'no_empregador'			=> $faker->company,
		'no_pai'				=> $faker->name($gender = 'male'),  
		'no_mae'				=> $faker->name($gender = 'female'),  

		'ic_grau'               => $faker->randomElement(['Profano','Aprendiz','Companheiro','Mestre','M.Instalado']),


//		'dt_iniciacao'          =>$faker->date($format = 'Y-m-d', $max = 'now'),
//		'loja_id_iniciacao'     =>$faker->numberBetween($min = 1, $max = 5),
//
//		'dt_elevacao'           =>$faker->date($format = 'Y-m-d', $max = 'now'),
//		'loja_id_elevacao'      =>$faker->numberBetween($min = 1, $max = 5),
//
//		'dt_exaltacao'          =>$faker->date($format = 'Y-m-d', $max = 'now'),
//		'loja_id_exaltacao'     =>$faker->numberBetween($min = 1, $max = 5),
//
//		'dt_instalacao'         =>$faker->date($format = 'Y-m-d', $max = 'now'),
//		'loja_id_instalacao'    =>$faker->numberBetween($min = 1, $max = 5),



		'ic_situacao'           => $faker->randomElement(['Regular','Suspenso','XXXXXXXXX','YYYYYYYYY','ZZZZZZZZZ']),

		'ic_escolaridade'       => $faker->randomElement(['Fundamental - Incompleto','Fundamental - Completo',
																			'Médio - Incompleto','Médio - Completo',
																			'Superior - Incompleto','Superior - Completo',
																			'Pós-graduação - Incompleto','Pós-graduação - Completo',
																			'Mestrado - Incompleto','Mestrado - Completo',
																			'Doutorado - Incompleto','Doutorado - Completo'
																		]),

		'no_profissao'          => $faker->jobTitle,

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
		//'pais_id'			=> 1,
		'pais_id'			=> App\Models\Pais::all()->random()->id,
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
		'de_email'  => $faker->safeEmail,
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