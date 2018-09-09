<?php

use App\helpers\geral;

use Faker\Generator as Faker;

$factory->define(App\Models\Base::class, function (Faker $faker) {

    $faker = (new \Faker\Factory())::create('pt_BR');
       
    return [
        'nome'          => $faker->company,   
        'endereco'      => $faker->streetName ." , " .$faker->buildingNumber,      
    ];
});
