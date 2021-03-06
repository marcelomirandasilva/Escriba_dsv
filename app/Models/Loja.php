<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loja extends Model
{
  	protected $table = "lojas";

	protected $primaryKey = 'id';

	protected $fillable =[
	    'co_titulo',
	    'no_loja',
	    'nu_loja',
	    'dt_fundacao',
	    'ic_rito',
		 'potencia_id',
		 'endereco_id',
		 'nu_telefone',
		 'email',
		 
		 'pais_id',
		 'sg_uf',
		 'no_municipio',
		 'no_bairro',
		 'no_logradouro',
		 'nu_logradouro',
		 'de_complemento',
		 'nu_cep',

	];

	/**
	 * Relacionamentos
	 */

	public function potencia()
	{
		return $this->belongsTo('App\Models\Potencia');
	}

	public function pais()
	{
		return $this->belongsTo('App\Models\Pais');
	}

/* 	public function endereco()
	{
		return $this->hasOne('App\Models\Endereco');
	} */

	public function telefone()
	{
		return $this->hasOne('App\Models\Telefone');
	}

	public function email()
	{
		return $this->hasOne('App\Models\Email');
	}

	public function membro()
	{
		return $this->belongsTo('App\Models\Membro');
	}

	public function cerimonia()
	{
		return $this->belongsTo('App\Models\Cerimonia');
	}

	public function visitantes()
	{
		return $this->hasMany('App\Models\Visitante');
	}
}
