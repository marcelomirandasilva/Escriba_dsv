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
		'no_naturalidade'			=> $faker->city,
		'no_nacionalidade'		=> $faker->country,
		'nu_cpf'                => $faker->cpf(false),
		'nu_identidade'         => $faker->rg,
		'dt_emissao_idt'			=> $faker->date('Y-m-d', '-18 years'),
		'no_orgao_emissor_idt'	=> $faker->randomElement(['DETRAN', 'IFP', 'Marinha do Brasil']),
		'nu_titulo_eleitor'		=> $faker->randomNumber(10),
		'dt_emissao_titulo'		=> $faker->date('Y-m-d', '-18 years'),
		'nu_zona_eleitoral'		=> $faker->randomNumber(5),


		'ic_estado_civil'       => $faker->randomElement(['Solteiro','Casado','Divorciado','Viúvo','Separado','União estável']),

		'dt_casamento'				=> $faker->date('Y-m-d', '-18 years'),
		'no_profissao'				=> $faker->jobTitle,
		'ic_aposentado'			=> $faker->randomElement(['Não', 'Sim']),
		'no_empregador'			=> $faker->company,
		'no_pai'						=> $faker->name($gender = 'male'),  
		'no_mae'						=> $faker->name($gender = 'female'),  

		'ic_grau'               => $faker->randomElement(['Profano','Aprendiz','Companheiro','Mestre','M.Instalado']),


		'dt_iniciacao'          =>$faker->date($format = 'Y-m-d', $max = 'now'),
		'loja_id_iniciacao'     =>$faker->numberBetween($min = 1, $max = 5),

		'dt_elevacao'           =>$faker->date($format = 'Y-m-d', $max = 'now'),
		'loja_id_elevacao'      =>$faker->numberBetween($min = 1, $max = 5),

		'dt_exaltacao'          =>$faker->date($format = 'Y-m-d', $max = 'now'),
		'loja_id_exaltacao'     =>$faker->numberBetween($min = 1, $max = 5),

		'dt_instalacao'         =>$faker->date($format = 'Y-m-d', $max = 'now'),
		'loja_id_instalacao'    =>$faker->numberBetween($min = 1, $max = 5),



		'ic_situacao'           => $faker->randomElement(['Regular','Suspenso','XXXXXXXXX','YYYYYYYYY','ZZZZZZZZZ']),

		'ic_escolaridade'       => $faker->randomElement(['Fundamental - Incompleto','Fundamental - Completo',
																			'Médio - Incompleto','Médio - Completo',
																			'Superior - Incompleto','Superior - Completo',
																			'Pós-graduação - Incompleto','Pós-graduação - Completo',
																			'Mestrado - Incompleto','Mestrado - Completo',
																			'Doutorado - Incompleto','Doutorado - Completo'
																		)),

		'no_profissao'          => $faker->jobTitle,

		'ic_aposentado'         => $faker->randomElement($array = array ('Não', 'Sim')),
	];


$factory->define(App\Models\Loja::class, function(Faker\Generator $faker) {

	$faker = Faker\Factory::create('pt_BR');

	return [
		'co_titulo'		=> 'ARLS',
		'no_loja'      => $faker->company,
		'nu_loja'      => $faker->numberBetween($min = 1000, $max = 9000), 
		'dt_fundacao'  => $faker->date($format = 'Y-m-d', $max = 'now'),
		'ic_rito'      => $faker->randomElement(['Escocês', 'Brasileiro','York','Moderno','Adonhiramita','Emulação ','Schröder','Memphis-Misraïm','Escocês Retificado']),
		//'potencia_id'  => rand(1, 193)
	],

$factory->define(App\Models\Pais::class, function(Faker\Generator $faker) {

	$faker = Faker\Factory::create('pt_BR');

	return [
		DB::table('pais')->insert(['no_pais'   => 'Afeganistão','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'África do Sul','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Albânia','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'Alemanha','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'Andorra','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'Angola','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Antiga e Barbuda','no_continente' => 'América']);
		DB::table('pais')->insert(['no_pais'   => 'Arábia Saudita','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Argélia','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Argentina','no_continente' => 'América']);
		DB::table('pais')->insert(['no_pais'   => 'Arménia','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Austrália','no_continente' => 'Oceania']);
		DB::table('pais')->insert(['no_pais'   => 'Áustria','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'Azerbaijão','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Bahamas','no_continente' => 'América']);
		DB::table('pais')->insert(['no_pais'   => 'Bangladexe','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Barbados','no_continente' => 'América']);
		DB::table('pais')->insert(['no_pais'   => 'Barém','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Bélgica','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'Belize','no_continente' => 'América']);
		DB::table('pais')->insert(['no_pais'   => 'Benim','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Bielorrússia','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'Bolívia','no_continente' => 'América']);
		DB::table('pais')->insert(['no_pais'   => 'Bósnia e Herzegovina','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'Botsuana','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Brasil','no_continente' => 'América']);
		DB::table('pais')->insert(['no_pais'   => 'Brunei','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Bulgária','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'Burquina Faso','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Burúndi','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Butão','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Cabo Verde','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Camarões','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Camboja','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Canadá','no_continente' => 'América']);
		DB::table('pais')->insert(['no_pais'   => 'Catar','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Cazaquistão','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Chade','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Chile','no_continente' => 'América']);
		DB::table('pais')->insert(['no_pais'   => 'China','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Chipre','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'Colômbia','no_continente' => 'América']);
		DB::table('pais')->insert(['no_pais'   => 'Comores','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Congo-Brazzaville','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Coreia do Norte','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Coreia do Sul','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Cosovo','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'Costa do Marfim','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Costa Rica','no_continente' => 'América']);
		DB::table('pais')->insert(['no_pais'   => 'Croácia','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'Cuaite','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Cuba','no_continente' => 'América']);
		DB::table('pais')->insert(['no_pais'   => 'Dinamarca','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'Dominica','no_continente' => 'América']);
		DB::table('pais')->insert(['no_pais'   => 'Egito','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Emirados Árabes Unidos','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Equador','no_continente' => 'América']);
		DB::table('pais')->insert(['no_pais'   => 'Eritreia','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Eslováquia','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'Eslovénia','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'Espanha','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'Estado da Palestina','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Estados Unidos','no_continente' => 'América']);
		DB::table('pais')->insert(['no_pais'   => 'Estónia','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'Etiópia','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Fiji','no_continente' => 'Oceania']);
		DB::table('pais')->insert(['no_pais'   => 'Filipinas','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Finlândia','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'França','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'Gabão','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Gâmbia','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Gana','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Geórgia','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Granada','no_continente' => 'América']);
		DB::table('pais')->insert(['no_pais'   => 'Grécia','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'Guatemala','no_continente' => 'América']);
		DB::table('pais')->insert(['no_pais'   => 'Guiana','no_continente' => 'América']);
		DB::table('pais')->insert(['no_pais'   => 'Guiné','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Guiné Equatorial','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Guiné-Bissau','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Haiti','no_continente' => 'América']);
		DB::table('pais')->insert(['no_pais'   => 'Honduras','no_continente' => 'América']);
		DB::table('pais')->insert(['no_pais'   => 'Hungria','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'Iémen','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Ilhas Marechal','no_continente' => 'Oceania']);
		DB::table('pais')->insert(['no_pais'   => 'Índia','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Indonésia','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Irão','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Iraque','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Irlanda','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'Islândia','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'Israel','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Itália','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'Jamaica','no_continente' => 'América']);
		DB::table('pais')->insert(['no_pais'   => 'Japão','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Jibuti','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Jordânia','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Laus','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Lesoto','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Letónia','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'Líbano','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Libéria','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Líbia','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Listenstaine','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'Lituânia','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'Luxemburgo','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'Macedónia','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'Madagáscar','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Malásia','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Maláui','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Maldivas','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Mali','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Malta','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'Marrocos','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Maurícia','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Mauritânia','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'México','no_continente' => 'América']);
		DB::table('pais')->insert(['no_pais'   => 'Mianmar','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Micronésia','no_continente' => 'Oceania']);
		DB::table('pais')->insert(['no_pais'   => 'Moçambique','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Moldávia','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'Mónaco','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'Mongólia','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Montenegro','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'Namíbia','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Nauru','no_continente' => 'Oceania']);
		DB::table('pais')->insert(['no_pais'   => 'Nepal','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Nicarágua','no_continente' => 'América']);
		DB::table('pais')->insert(['no_pais'   => 'Níger','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Nigéria','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Noruega','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'Nova Zelândia','no_continente' => 'Oceania']);
		DB::table('pais')->insert(['no_pais'   => 'Omã','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Países Baixos','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'Palau','no_continente' => 'Oceania']);
		DB::table('pais')->insert(['no_pais'   => 'Panamá','no_continente' => 'América']);
		DB::table('pais')->insert(['no_pais'   => 'Papua Nova Guiné','no_continente' => 'Oceania']);
		DB::table('pais')->insert(['no_pais'   => 'Paquistão','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Paraguai','no_continente' => 'América']);
		DB::table('pais')->insert(['no_pais'   => 'Peru','no_continente' => 'América']);
		DB::table('pais')->insert(['no_pais'   => 'Polónia','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'Portugal','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'Quénia','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Quirguistão','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Quiribáti','no_continente' => 'Oceania']);
		DB::table('pais')->insert(['no_pais'   => 'Reino Unido','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'República Centro-Africana','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'República Checa','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'República Democrática do Congo','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'República Dominicana','no_continente' => 'América']);
		DB::table('pais')->insert(['no_pais'   => 'Roménia','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'Ruanda','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Rússia','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'Salomão','no_continente' => 'Oceania']);
		DB::table('pais')->insert(['no_pais'   => 'Salvador','no_continente' => 'América']);
		DB::table('pais')->insert(['no_pais'   => 'Samoa','no_continente' => 'Oceania']);
		DB::table('pais')->insert(['no_pais'   => 'Santa Lúcia','no_continente' => 'América']);
		DB::table('pais')->insert(['no_pais'   => 'São Cristóvão e Neves','no_continente' => 'América']);
		DB::table('pais')->insert(['no_pais'   => 'São Marinho','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'São Tomé e Príncipe','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'São Vicente e Granadinas','no_continente' => 'América']);
		DB::table('pais')->insert(['no_pais'   => 'Seicheles','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Senegal','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Serra Leoa','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Sérvia','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'Singapura','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Síria','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Somália','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Sri Lanca','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Suazilândia','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Sudão','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Sudão do Sul','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Suécia','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'Suíça','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'Suriname','no_continente' => 'América']);
		DB::table('pais')->insert(['no_pais'   => 'Tailândia','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Taiuã','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Tajiquistão','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Tanzânia','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Timor-Leste','no_continente' => 'Oceania']);
		DB::table('pais')->insert(['no_pais'   => 'Togo','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Tonga','no_continente' => 'Oceania']);
		DB::table('pais')->insert(['no_pais'   => 'Trindade e Tobago','no_continente' => 'América']);
		DB::table('pais')->insert(['no_pais'   => 'Tunísia','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Turcomenistão','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Turquia','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Tuvalu','no_continente' => 'Oceania']);
		DB::table('pais')->insert(['no_pais'   => 'Ucrânia','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'Uganda','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Uruguai','no_continente' => 'América']);
		DB::table('pais')->insert(['no_pais'   => 'Usbequistão','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Vanuatu','no_continente' => 'Oceania']);
		DB::table('pais')->insert(['no_pais'   => 'Vaticano','no_continente' => 'Europa']);
		DB::table('pais')->insert(['no_pais'   => 'Venezuela','no_continente' => 'América']);
		DB::table('pais')->insert(['no_pais'   => 'Vietname','no_continente' => 'Ásia']);
		DB::table('pais')->insert(['no_pais'   => 'Zâmbia','no_continente' => 'África']);
		DB::table('pais')->insert(['no_pais'   => 'Zimbábue','no_continente' => 'África']);
	],

$factory->define(App\Models\Potencia::class, function(Faker\Generator $faker) {

	$faker = Faker\Factory::create('pt_BR');

	return [
		DB::table('potencia')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja da Argentina']);
		DB::table('potencia')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja da Bolivia']);
		DB::table('potencia')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Oriente do Brasil']);
		DB::table('potencia')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja do Estado do  Espírito Santo']);
		DB::table('potencia')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja do Estado de Mato Grosso Do Sul']);
		DB::table('potencia')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja do Estado do  Rio De Janeiro']);
		DB::table('potencia')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja do estado do  Rio Grande do Sul']);
		DB::table('potencia')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja do Estado São Paulo']);
		DB::table('potencia')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja da Chile']);
		DB::table('potencia')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja da Colombia em Barranquilla']);
		DB::table('potencia')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja da Colombia em Bogota']);
		DB::table('potencia')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja da Colombia em Cali']);
		DB::table('potencia')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja da Colombia em Cartagena']);
		DB::table('potencia')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja Oriental da Colombia ‘Francisco de Paula Santander’']);
		DB::table('potencia')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja da Los Andes']);
		DB::table('potencia')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja da Ecuador']);
		DB::table('potencia')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja Simbólica da da Paraguay']);
		DB::table('potencia')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja da Peru']);
		DB::table('potencia')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja da Uruguay']);
		DB::table('potencia')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja da the Republic da Venezuela']);
	],



$factory->define(App\Models\Endereco::class, function(Faker\Generator $faker) {

	$faker = Faker\Factory::create('pt_BR');

	return [
		'sg_uf'			 	=> $faker->stateAbbr,
		'no_municipio'	 	=> $faker->city,
		'no_bairro'			=> $faker->cityPrefix,

		'no_logradouro'   => $faker->streetName,
		'nu_logradouro'   => $faker->randomNumber(3),
		'de_complemento'  => $faker->secondaryAddress,
		'nu_cep'         	=> $faker->randomNumber(5)."-".$faker->randomNumber(3),
		//'ic_tipo_endereco'=> $faker->randomElement(['Residencial','Comercial','Loja']),

	];

});

$factory->define(App\Telefone::class, function(Faker\Generator $faker) {

	$faker = Faker\Models\Factory::create('pt_BR');

	if(rand(0,1))
	{
		return [

			'numero'         => "(21) ".$faker->cellphone(true, 21),
			'tipo_telefone'  => "Celular",

		];	
	}
	else
	{
		return [

			'numero'         => "(21) $faker->landline",
			'tipo_telefone'  => "Fixo",

		];
	}

	

});




