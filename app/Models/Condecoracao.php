<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Condecoracao extends Model
{

	protected $table = "condecoracoes";

	protected $primaryKey = 'id';

	protected $fillable =[

        'membro_id',
        'ic_condecoracao',
        'nu_ato',
        'dt_condecoracao'
	
	];


    public function membro()
    {
        return $this->belongsTo('App\Models\Membro', 'membro_id');
    }


}
