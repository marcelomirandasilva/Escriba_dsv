<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $table = "email";

	protected $primaryKey = 'id';

	protected $fillable =[

   			'de_email',
            'ic_tipo_email',
            'irmao_id',
            'loja_id',
            'dependente_id',
            'visitante_id',

	];

	public function loja()
    {
    	return $this->belongsTo('App\Models\Loja', 'loja_id');
    }

}
