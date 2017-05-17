<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $table = "telefone";

	protected $primaryKey = 'id';

	protected $fillable =[
   			'nu_telefone',
            'loja_id',
	];

	public function loja()
    {
    	return $this->belongsTo('App\Models\Loja', 'loja_id');
    }
}

