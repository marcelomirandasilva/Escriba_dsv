<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class endereco extends Model
{
    //

    /**
     * Relacionamentos
     */

    public function pais()
    {
    	return $this->belongsTo('App\Models\Pais', "fk_pais_id");
    }

    public function municipio()
    {
    	return $this->belongsTo('App\Models\municipio');
    }

    public function uf()
    {
    	return $this->belongsTo('App\Models\uf');
    }

    public function bairro()
    {
    	return $this->belongsTo('App\Models\Pais');
    }

    public function irmao()
    {
    	return $this->belongsTo('App\Models\irmao');
    }

    public function irmao()
    {
    	return $this->belongsTo('App\Models\irmao');
    }

    public function loja()
    {
    	return $this->belongsTo('App\Models\loja');
    }

}
