<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
	
	protected $table = "cargos";

	protected $primaryKey = 'id';

	protected $fillable =[

     'no_cargo',

	];



}
