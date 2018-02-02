<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Membro extends Model
{
    protected $table = "membros";

    protected $primaryKey = 'id';

    protected $fillable =[


        'no_membro',
        'co_cim',
        'dt_nascimento',
        'no_naturalidade',
        'no_nacionalidade',
        'no_proponente',
        'nu_cpf',
        'nu_identidade',
        'dt_emissao_idt',
        'no_orgao_emissor_idt',
        'nu_titulo_eleitor',
        'dt_emissao_titulo',
        'nu_zona_eleitoral',
        'ic_estado_civil',
        'ic_escolaridade',
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

    public function telefones()
    {
        return $this->hasMany('App\Models\Telefone');
    }

    public function emails()
    {
        return $this->hasMany('App\Models\Email');
    }

    public function dependentes()
    {
        return $this->hasMany('App\Models\Dependente');
    }

    public function condecoracoes()
    {
        return $this->hasMany('App\Models\Condecoracao');
    }

    public function cerimonias()
    {
        return $this->hasMany('App\Models\Cerimonia');
    }

    
}
