<?php

use App\helpers\geral;

use Faker\Generator as Faker;

$factory->define(App\Models\Motorista::class, function (Faker $faker) {
   
    $faker = (new \Faker\Factory())::create('pt_BR');

    $ff = pegaValorEnum('veiculos','combustivel');
    $v_combustivel = array_rand($ff,1);
    
    $faker->addProvider(new \Faker\Provider\Fakecar($faker));

    return [
        'nome'          => $faker->name,   
        'celular'       => $faker->regexify('9[0-9]{4}[0-9]{4}'),   
        'cnh'           => $faker->regexify('[0-9]{11}'),   
        'categoria_cnh' => $faker->regexify('[A-D]{1}'),   
        'validade_cnh'  => $faker->dateTimeBetween($startDate = '-1 years', $endDate = '+1 years', $timezone = null) 
    ];
});


