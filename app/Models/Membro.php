<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Membro extends Model
{
    protected $table = "membro";

    protected $primaryKey = 'id';

    protected $fillable =[


        'no_membro',
        'co_cim',
        'dt_nascimento',
        'no_naturalidade',
        'no_nacionalidade',
        'nu_cpf',
        'nu_identidade',
        'dt_emissao_idt',
        'no_orgao_emissor_idt',
        'nu_titulo_eleitor',
        'dt_emissao_titulo',
        'nu_zona_eleitoral',
        'ic_estado_civil',
        'dt_casamento',
        'no_profissao',
        'ic_aposentado',
        'no_empregador',
        'no_pai',
        'no_mae',
        'ic_grau',

     

        'im_membro',
        'ic_situacao',



    ];



    public function enderecos()
    {
        return $this->hasMany('App\Models\Endereco');
    }

    public function telefone()
    {
        return $this->hasMany('App\Models\Telefone');
    }

    public function email()
    {
        return $this->hasMany('App\Models\Email');
    }

    public function dependente()
    {
        return $this->hasMany('App\Models\Dependente');
    }

    public function condecoracao()
    {
        return $this->hasMany('App\Models\Condecoracao');
    }

    public function cerimonia()
    {
        return $this->hasMany('App\Models\Cerimonia');
    }

    
}
