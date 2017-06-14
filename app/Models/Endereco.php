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
        'pais_id',

    ];


    public function pais()
    {
    	return $this->belongsTo('App\Models\Pais');
    }

    
    public function membro()
    {
    	return $this->belongsTo('App\Models\Membro', 'membro_id');
    }

    public function loja()
    {
    	return $this->belongsTo('App\Models\Loja', 'loja_id');
    }

}
