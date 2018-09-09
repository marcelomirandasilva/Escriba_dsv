<?php

use App\helpers\geral;
use App\Models\Base;
use App\Models\Secretaria;

use Faker\Generator as Faker;

$factory->define(App\Models\Veiculo::class, function (Faker $faker) {

    //$faker = Faker\Factory::create('pt_BR');

    $ff = pegaValorEnum('veiculos','combustivel');
    $v_combustivel = array_rand($ff,1);
    
    $faker = (new \Faker\Factory())::create();
    $faker->addProvider(new \Faker\Provider\Fakecar($faker));

    return [
        'placa'        => $faker->regexify('[A-Z]{3}[0-9]{4}'),
        'modelo'       => $faker->vehicle,   
        'cor'          => $faker->colorName,
        'ano'          => $faker->year($max = 'now'),
        'renavam'      => $faker->regexify('[0-9]{11}'),
        'combustivel'  => $ff[$v_combustivel],
        'base_id'      => Base::all()->random()->id,
        'secretaria_id'=> Secretaria::all()->random()->id,
    ];
});
