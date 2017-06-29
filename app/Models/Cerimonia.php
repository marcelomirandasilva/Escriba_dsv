<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Cerimonia extends Model
{
	
	protected $table = "cerimonia";

	protected $primaryKey = 'id';

	protected $fillable =[

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

        'loja_id_iniciacao',
        'loja_id_elevacao',
        'loja_id_exaltacao',
        'loja_id_instalacao',

		
	];


    public function membro()
    {
        return $this->belongsTo('App\Models\Membro', 'membro_id');
    }

    // public function lojas()
    // {
    //     return $this->hasMany('App\Models\Loja');
    // }

}
