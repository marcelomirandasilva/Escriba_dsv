<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visitante extends Model
{
	protected $table = "visitantes";
	protected $primaryKey = 'id';

	protected $fillable =[
		'no_visitante',
		'co_cim',
		'loja_id',
		'ic_grau'
	];


	public function sessoes()
	{
		return $this->belongsToMany('App\Models\Sessao', 'membros_sessoes')->withPivot('cargo_id');
	}

	public function loja()
	{
		return $this->belongsTo('App\Models\Loja', 'loja_id');
	}
}
