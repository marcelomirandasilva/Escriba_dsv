<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Cerimonia extends Model
{
	
	protected $table = "cerimonias";

	protected $primaryKey = 'id';

	protected $fillable =[


        'membro_id',
        
	    'dt_iniciacao',
        'loja_id_iniciacao',

        'dt_elevacao',
        'loja_id_elevacao',

        'dt_exaltacao',
        'loja_id_exaltacao',

        'dt_instalacao',
        'loja_id_instalacao',

        'dt_filiacao',
        'dt_regularizacao',


		
	];


    public function membro()
    {
        return $this->belongsTo('App\Models\Membro', 'membro_id');
    }


    public function lojas()
    {
        return $this->hasMany('App\Models\Loja');
    }

}
