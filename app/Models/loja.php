<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class loja extends Model
{
  	protected $table = "loja";

	protected $primaryKey = 'id';

	protected $fillable =[
	    'co_titulo',
	    'no_loja',
	    'nu_loja',
	    'dt_fundacao',
	    'co_potencia',
	    'fk_potencia_id'

	];

	/**
	 * Relacionamentos
	 */

	public function potencia()
	{
		return $this->belongsTo('App\Models\Potencia');
	}

	public function endereco()
	{
		return $this->hasOne('App\Models\endereco');
	}
}
