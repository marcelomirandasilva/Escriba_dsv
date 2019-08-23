<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setup extends Model
{
    
    protected $fillable =[

        'id',
        'potencia_id',
        'co_titulo',
        'no_loja',
        'nu_loja',
        'ic_rito',
        'dt_fundacao',
        'nu_telefone',
        'email',
        'sg_uf',
        'no_municipio',
        'no_bairro',
        'no_logradouro',
        'nu_logradouro',
        'de_complemento',
        'nu_cep',
        'pais_id',
        'cnpj',
        'ic_dia_sessao',
        'de_complemento_dia_sessao',
        'hh_inicio_sessao',
    ];
}
