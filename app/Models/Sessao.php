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

    public function membros()
    {
        return $this->belongsToMany('App\Models\Membro', 'membros_sessoes')->withPivot('cargo_id');
    }
    
    public function cargos()
    {
        return $this->belongsToMany('App\Models\Cargo', 'membros_sessoes')->withPivot('cargo_id');
    }
}
