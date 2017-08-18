<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Cerimonia extends Model
{
	
	protected $table = "cerimonias";

	protected $primaryKey = 'id';

	protected $fillable =[


        'membro_id',
        'loja_id',
        'dt_cerimonia',
        'ic_cerimonia'

	];


    public function membro()
    {
        return $this->belongsTo('App\Models\Membro', 'membro_id');
    }


    public function loja()
    {
        return $this->hasOne('App\Models\Loja');
    }

}
