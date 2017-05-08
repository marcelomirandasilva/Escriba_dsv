<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class bairro extends Model
{
    //

    /**
	 * Relacionamentos
	 */
    protected $table = "bairro";

    public function enderecos()
    {
    	return $this->hasMany('App\Models\endereco');
    }
}
