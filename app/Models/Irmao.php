<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Irmao extends Model
{
    protected $table = "irmao";

    protected $primaryKey = 'id';

    protected $fillable =[
        'no_irmao',
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
        'im_iirmao',
        'ic_situacao',
        'ic_escolaridade',
        'de_profissao',
        'ic_aposentado'
    ];



    public function endereco()
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
