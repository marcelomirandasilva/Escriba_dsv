<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Potencia extends Model
{
     protected $table = "potencias";

    protected $primaryKey = 'id';

    protected $fillable =[
        'no_continente',
        'no_potencia'
    ];

    /**
     * Relacionamentos
     */

    public function lojas()
    {
    	return $this->hasMany('App\Models\Loja');
    }
}
