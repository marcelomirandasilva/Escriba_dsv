<?php

use App\helpers\geral;
use App\Models\Base;
use App\Models\Abastecimento;
use App\Models\Posto;
use App\Models\Veiculo;

use Faker\Generator as Faker;

$factory->define(App\Models\Abastecimento::class, function (Faker $faker) {

    //$ff             = pegaValorEnum('veiculos','combustivel');
    
    $v_veiculo      = Veiculo::all()->random()->id;
    $veiculo        = Veiculo::find($v_veiculo);

    $v_posto        = Posto::all()->random()->id;

    switch ($veiculo->combustivel) {
        case "DIESEL":
            $v              = Posto::find($v_posto);
            $v_valor        = $v->diesel;
            $v_combustivel  = "DIESEL";
            break;

        case "GASOLINA":
            $v              = Posto::find($v_posto);
            $v_valor        = $v->gasolina;
            $v_combustivel  = "GASOLINA";
            break;

        case "ALCOOL":
            $v              = Posto::find($v_posto);
            $v_valor        = $v->alcool;
            $v_combustivel  = "ALCOOL";
            break;

        case "GNV":
            $v              = Posto::find($v_posto);
            $v_valor        = $v->gnv;
            $v_combustivel  = "GNV";
            break;

        case "FLEX":
            $v              = Posto::find($v_posto);
            $v_valor        = $v->gasolina;
            $v_combustivel  = "GASOLINA";
            break;
    };
       
        
    $faker = (new \Faker\Factory())::create();
    $faker->addProvider(new \Faker\Provider\Fakecar($faker));

    return [
        'veiculo_id'        => $v_veiculo,
        'posto_id'          => $v_posto,
        'qtd'               => $faker->randomFloat(2,  5,  45),
        'valor'             => $v_valor, 
        'combustivel'       => $v_combustivel, 
    
    ];
});
