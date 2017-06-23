<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Condecoracao extends Model
{

	protected $table = "condecoracao";

	protected $primaryKey = 'id';

	protected $fillable =[

		'ic_condecoracao',
		'nu_ato',
		'dt_condecoracacao',
		
	];


    public function membro()
    {
        return $this->belongsTo('App\Models\Membro', 'membro_id');
    }


}
