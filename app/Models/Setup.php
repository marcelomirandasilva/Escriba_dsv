<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setup extends Model
{
    
    protected $fillable =[
        'id',
        'loja_id',
        'dt_semana_sessao',
        'de_complemento_dt_sessao',
        'hh_inicio_sessao',
        'cnpj',
    ];
}
