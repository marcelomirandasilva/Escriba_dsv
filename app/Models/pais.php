<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pais extends Model
{
     protected $table = "pais";

    protected $primaryKey = 'id';

    protected $fillable =[
        'no_pais',
        'no_continente'
    ];
}
