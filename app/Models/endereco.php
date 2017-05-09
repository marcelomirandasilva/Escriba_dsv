<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    //

    /**
     * Relacionamentos
     */
    protected $table = "endereco";

    protected $fillable =[

        'sg_logradouro',
        'no_logradouro',
        'nu_logradouro',
        'nu_cep',
        'de_complemento',
        'ic_tipo_endereco',
        'sg_uf',
        'no_municipio',
        'no_bairro',

    ];


    public function pais()
    {
    	return $this->belongsTo('App\Models\Pais', "pais_id");
    }

    
    public function irmao()
    {
    	return $this->belongsTo('App\Models\Irmao', 'irmao_id');
    }

    public function loja()
    {
    	return $this->belongsTo('App\Models\Loja', 'loja_id');
    }

}
