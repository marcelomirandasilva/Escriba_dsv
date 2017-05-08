<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class bairro extends Model
{
    //

    /**
	 * Relacionamentos
	 */

    public function enderecos()
    {
    	return $this->hasMany('App\Models\endereco');
    }
}
