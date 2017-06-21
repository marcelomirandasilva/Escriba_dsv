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
        'nu_cpf',
        'dt_nascimento',
        'ic_estado_civil',
        'dt_iniciacao',
        'fk_loja_iniciacao',
        'dt_elevacao',
        'fk_loja_elevacao',
        'dt_exaltacao',
        'fk_loja_exaltacao',
        'dt_instalacao',
        'fk_loja_instalacao',
        'im_membro',
        'ic_situacao',
        'ic_escolaridade',
        'de_profissao',
        'ic_aposentado',
        
        'dt_filiacao',
        'dt_regularizacao',

        'nu_ato_benemerito',
        'dt_benemerito',

        'nu_ato_grande_benemerito',
        'dt_grande_benemerito',

        'nu_ato_estrela_distincao',
        'dt_estrela_distincao',

        'nu_ato_cruz_perfeicao',
        'dt_cruz_perfeicao',
        
        'nu_ato_comenda_pedro',
        'dt_comenda_pedro',
        
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
    
}
