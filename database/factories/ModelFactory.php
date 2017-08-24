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
	
	$v_acesso 	= array_rand(pegaValorEnum('users','acesso'),1);   
	$avatar 		= "data:image/jpeg;base64,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UmVjdExlZnRsb25nAAAAAAAAAA1jcm9wUmVjdFJpZ2h0bG9uZwAAAAAAAAALY3JvcFJlY3RUb3Bsb25nAAAAAAA4QklNA+0AAAAAABAAj/4bAAEAAgCP/hsAAQACOEJJTQQmAAAAAAAOAAAAAAAAAAAAAD+AAAA4QklNA/IAAAAAAAoAAP///////wAAOEJJTQQNAAAAAAAEAAAAHjhCSU0EGQAAAAAABAAAAB44QklNA/MAAAAAAAkAAAAAAAAAAAEAOEJJTScQAAAAAAAKAAEAAAAAAAAAAjhCSU0D9QAAAAAASAAvZmYAAQBsZmYABgAAAAAAAQAvZmYAAQChmZoABgAAAAAAAQAyAAAAAQBaAAAABgAAAAAAAQA1AAAAAQAtAAAABgAAAAAAAThCSU0D+AAAAAAAcAAA/////////////////////////////wPoAAAAAP////////////////////////////8D6AAAAAD/////////////////////////////A+gAAAAA/////////////////////////////wPoAAA4QklNBAgAAAAAABAAAAABAAACQAAAAkAAAAAAOEJJTQQeAAAAAAAEAAAAADhCSU0EGgAAAAADSwAAAAYAAAAAAAAAAAAAAMgAAADIAAAACwBwAGwAYQBjAGUAaABvAGwAZABlAHIAAAABAAAAAAAAAAAAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAMgAAADIAAAAAAAAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAAAAAAAAAAAEAAAAAEAAAAAAABudWxsAAAAAgAAAAZib3VuZHNPYmpjAAAAAQAAAAAAAFJjdDEAAAAEAAAAAFRvcCBsb25nAAAAAAAAAABMZWZ0bG9uZwAAAAAAAAAAQnRvbWxvbmcAAADIAAAAAFJnaHRsb25nAAAAyAAAAAZzbGljZXNWbExzAAAAAU9iamMAAAABAAAAAAAFc2xpY2UAAAASAAAAB3NsaWNlSURsb25nAAAAAAAAAAdncm91cElEbG9uZwAAAAAAAAAGb3JpZ2luZW51bQAAAAxFU2xpY2VPcmlnaW4AAAANYXV0b0dlbmVyYXRlZAAAAABUeXBlZW51bQAAAApFU2xpY2VUeXBlAAAAAEltZyAAAAAGYm91bmRzT2JqYwAAAAEAAAAA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MTI6Mjc6MjQrMDM6MDAiIHhtcDpNb2RpZnlEYXRlPSIyMDE2LTA2LTAyVDE2OjM1OjE1KzAzOjAwIiB4bXA6TWV0YWRhdGFEYXRlPSIyMDE2LTA2LTAyVDE2OjM1OjE1KzAzOjAwIiBkYzpmb3JtYXQ9ImltYWdlL2pwZWciIHBob3Rvc2hvcDpMZWdhY3lJUFRDRGlnZXN0PSIwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMSIgcGhvdG9zaG9wOkNvbG9yTW9kZT0iMyIgcGhvdG9zaG9wOklDQ1Byb2ZpbGU9IkRpc3BsYXkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6N2M0ZmNkZTYtOTY2OS00MjdiLTgyMmYtZTI4MWQ5ODY4ZmQ5IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkY3N0YxMTc0MDcyMDY4MTFCMDZCODA5ODFDRUZBREVCIiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6Rjc3RjExNzQwNzIwNjgxMUIwNkI4MDk4MUNFRkFERUIiPiA8cGhvdG9zaG9wOkRvY3VtZW50QW5jZXN0b3JzPiA8cmRmOkJhZz4gPHJkZjpsaT54bXAuZGlkOjAxODAxMTc0MDcyMDY4MTE5NUZFOEE0Mzk1MDFFNzUzPC9yZGY6bGk+IDxyZGY6bGk+eG1wLmRpZDpFMTJGMDk0NDhDNjJFMjExQTRFQ0JGRTYyNUU5MzQ0NTwvcmRmOmxpPiA8cmRmOmxpPnhtcC5kaWQ6Rjk3RjExNzQwNzIwNjgxMTk0NTc4QUNGNjMyNTBGNDg8L3JkZjpsaT4gPC9yZGY6QmFnPiA8L3Bob3Rvc2hvcDpEb2N1bWVudEFuY2VzdG9ycz4gPHhtcE1NOkhpc3Rvcnk+IDxyZGY6U2VxPiA8cmRmOmxpIHN0RXZ0OmFjdGlvbj0iY3JlYXRlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDpGNzdGMTE3NDA3MjA2ODExQjA2QjgwOTgxQ0VGQURFQiIgc3RFdnQ6d2hlbj0iMjAxNS0wOC0yNVQxMjoyNzoyNCswMzowMCIgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2giLz4gPHJkZjpsaSBzdEV2dDphY3Rpb249ImNvbnZlcnRlZCIgc3RFdnQ6cGFyYW1ldGVycz0iZnJvbSBpbWFnZS9wbmcgdG8gaW1hZ2UvanBlZyIvPiA8cmRmOmxpIHN0RXZ0OmFjdGlvbj0ic2F2ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6Rjg3RjExNzQwNzIwNjgxMUIwNkI4MDk4MUNFRkFERUIiIHN0RXZ0OndoZW49IjIwMTUtMDgtMjVUMTI6NDY6MzArMDM6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDUzUgTWFjaW50b3NoIiBzdEV2dDpjaGFuZ2VkPSIvIi8+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJzYXZlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDo3YzRmY2RlNi05NjY5LTQyN2ItODIyZi1lMjgxZDk4NjhmZDkiIHN0RXZ0OndoZW49IjIwMTYtMDYtMDJUMTY6MzU6MTUrMDM6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE1IChNYWNpbnRvc2gpIiBzdEV2dDpjaGFuZ2VkPSIvIi8+IDwvcmRmOlNlcT4gPC94bXBNTTpIaXN0b3J5PiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8P3hwYWNrZXQgZW5kPSJ3Ij8+/+IPRElDQ19QUk9GSUxFAAEBAAAPNGFwcGwCEAAAbW50clJHQiBYWVogB98ABgAXABEANgA4YWNzcEFQUEwAAAAA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uer1e56vV7nq9Xuer1e56vV7nq9Xuer1e56vV7nq9Xuer1e56vV7nq9X/9DbY56vV7nq9Xuer1e56vV7nq9Xuer1e56vV7nq9Xuer1e56vV7nq9Xuer1e56vV7nq9Xuer1e56vV7nq9Xuer1e56vV7nq9Xuer1e56vV7nq9Xuer1e56vV//R22Oer1e56vV7nq9Xuer1e56vV7nq9Xuer1e56vV7nq9Xuer1e56vV7nq9Xuer1e56vV7nq9Xuer1e56vV7nq9Xuer1e56vV7nq9Xuer1e56vV7nq9Xuer1f/0ttjnq9Xuer1e56vV7nq9Xuer1e56vV7nq9Xuer1e56vV7nq9Xuer1e56vV7nq9Xuer1e56vV7nq9Xuer1e56vV7nq9Xuer1e56vV7nq9Xuer1e56vV7nq9X/9PbY56vV7nq9Xuer1e56vV7nq9Xuer1e56vV7nq9Xuer1e56vV7nq9Xuer1e56vV7nq9Xuer1e56vV7nq9Xuer1e56vV7nq9Xuer1e56vV7nq9Xuer1e56vV//U22Oer1e56vV7nq9XmINtgKggBrm9z4nQduer1e56vV7nq9Xuer1e56vV7nq9Xuer1e56vV7nq9Xuer1e56vV7nq9Xuer1e56vV7nq9Xuer1e56vV7nq9Xuer1e56vV7nq9Xuer1f/9XbY56vV7nq9Xuer1e56vV7nq9Xuer1e56vV7nq9Xuer1e56vV7nq9Xuer1e56vV7nq9Xuer1e56vV7nq9Xuer1e56vV7nq9Xuer1e56vV7nq9Xuer1e56vV//W22Oer1e56vV7nq9Xuer1e56vV7nq9Xuer1e56vV7nq9Xuer1e56vV7nq9Xuer1e56vV7nq9Xuer1e56vV7nq9Xuer1e56vV7nq9Xuer1e56vV7nq9Xuer1f/19tjnq9Xuer1e56vV7nq9Xuer1e56vV7nq9RV+pXX5co9QcFwDDQKvB8Jk25zMaq7MZV2+XGfBoQdxsdW902seer1Ghp6iCsp4aqmmWemqkWop54iGR43UMrAjuCDcc9Xqz89Xq9z1er3PV6vc9Xq9z1er3PV6vc9Xq9z1eop+cvUjR5d6h0eBYfBHiGWMMdqLM1dH70rSsdrGAg2tCe/wDiNxpoeer1GopaqnrqanrKOdailq0WopqiEhkkjdQyspHcEG456vVI56vV7nq9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" ;
															
	return [
		'name' 				=> 	$faker->name,
		'email' 				=> 	$faker->safeEmail,
		'password' 			=> 	bcrypt(str_random(10)),
		'remember_token' 	=> 	str_random(10),
		'acesso'				=>		$v_acesso,
		'avatar'				=> 	$avatar,
	];
});



$factory->define(App\Models\Membro::class, function(Faker\Generator $faker) {

	$faker = Faker\Factory::create('pt_BR');

	$foto = "data:image/png;base64,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" ;

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
		'foto'						=> $foto,
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


		'ic_estado_civil'       => $v_estado_civil,

		'dt_casamento'				=> $v_data_casamento,
		'no_profissao'				=> $faker->jobTitle,
		'ic_aposentado'			=> $faker->boolean,
		'no_empregador'			=> $faker->company,
		'no_pai'						=> $faker->name($gender = 'male'),  
		'no_mae'						=> $faker->name($gender = 'female'),  

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


	if(rand(0,1))
	{
		return [
			'no_pais'			=> $faker->country, //App\Models\Pais::all()->random()->id,
			'sg_uf'			 	=> $faker->stateAbbr,
			'no_municipio'	 	=> $faker->city,
			'no_bairro'			=> $faker->cityPrefix,

			'no_logradouro'   => $faker->streetName,
			'nu_logradouro'   => $faker->randomNumber(3),
			'de_complemento'  => $faker->secondaryAddress,
			'nu_cep'          => $faker->randomNumber(5)."-".$faker->randomNumber(3),
			'ic_tipo_endereco'=> 'Comercial',
			
		];	
	}	else	{
		return [

			'no_pais'			=> $faker->country, //App\Models\Pais::all()->random()->id,
			'sg_uf'			 	=> $faker->stateAbbr,
			'no_municipio'	 	=> $faker->city,
			'no_bairro'			=> $faker->cityPrefix,

			'no_logradouro'   => $faker->streetName,
			'nu_logradouro'   => $faker->randomNumber(3),
			'de_complemento'  => $faker->secondaryAddress,
			'nu_cep'          => $faker->randomNumber(5)."-".$faker->randomNumber(3),
			'ic_tipo_endereco'=> 'Residencial',
			
		];
	}






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