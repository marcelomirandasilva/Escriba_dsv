<?php

use App\helpers\geral;

use Faker\Generator as Faker;

$factory->define(App\Models\Posto::class, function (Faker $faker) {

    $faker = (new \Faker\Factory())::create('pt_BR');
       
    return [
        'nome'          => $faker->company,   
        'endereco'      => $faker->streetName ." , " .$faker->buildingNumber,      
        'cnpj'          => $faker->cnpj(false), //regexify('[0-9]{14}'),   
        'gasolina'      => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 5) ,   
        'alcool'        => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 5) ,   
        'diesel'        => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 5) ,   
        'gnv'           => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 5) ,   
    ];
});
