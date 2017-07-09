<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $table = "emails";

	protected $primaryKey = 'id';

	protected $fillable =[

   			'email',
            'membro_id',
            'loja_id',
            'dependente_id',
            'visitante_id',

	];

	public function loja()
    {
    	return $this->belongsTo('App\Models\Loja', 'loja_id');
    }

    public function membro()
    {
        return $this->belongsTo('App\Models\Membro', 'membro_id');
    }
}
