<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
	
	protected $table = "cargos";

	protected $primaryKey = 'id';

	protected $fillable =[

		'id',
     	'no_cargo',

	];

	public function membros()
	{
		return $this->belongsToMany('App\Models\Membros', 'cargos_membros')->withPivot('aa_inicio','aa_termino')->withTimestamps();
	}

}
