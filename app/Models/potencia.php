<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Potencia extends Model
{
     protected $table = "potencia";

    protected $primaryKey = 'id';

    protected $fillable =[
        'no_continente',
        'no_potencia'
    ];
}
