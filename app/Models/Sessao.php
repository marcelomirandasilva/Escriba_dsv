<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sessao extends Model
{
    protected $table = "sessoes";

     protected $fillable =[
        'dt_sessao',
        'hh_inicio',
        'hh_termino',
        'ic_grau',
        'ic_tipo_sessao',
        'de_descricao'
    ];

    /**
     * Relacionamentos
     */

    
}
