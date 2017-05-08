<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class endereco extends Model
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
            'de_complemennto',
            'ic_tipo_endereco',

     ];


    public function pais()
    {
    	return $this->belongsTo('App\Models\Pais', "fk_pais_id");
    }

    public function municipio()
    {
    	return $this->belongsTo('App\Models\municipio', 'fk_municipio_id');
    }

    public function uf()
    {
    	return $this->belongsTo('App\Models\uf', 'fk_uf_id');
    }

    public function bairro()
    {
    	return $this->belongsTo('App\Models\bairro', 'fk_bairro_id');
    }

    public function irmao()
    {
    	return $this->belongsTo('App\Models\irmao', 'fk_irmao_id');
    }

    public function loja()
    {
    	return $this->belongsTo('App\Models\loja', 'fk_loja_id');
    }

}
