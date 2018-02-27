<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ocupacao_cargo extends Model
{
   protected $table = "ocupacao_cargos";

	protected $primaryKey = 'id';

	protected $fillable =[
	    'aa_inicio',
	    'aa_termino',
	];
}
