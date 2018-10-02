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
        'de_anotacao',
        'email',
        'tel_res',
        'tel_cel',
        'tel_com',
        'ramal_com',
        'endereco_comercial_id',
        'endereco_residencial_id',
    ];



     public function enderecos()
    {
        return $this->hasMany('App\Models\Endereco');
    }

   /* public function telefones()
    {
        return $this->hasMany('App\Models\Telefone');
    }

    public function emails()
    {
        return $this->hasMany('App\Models\Email');
    }
 */
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

    public function cargos()
    {
        return $this->belongsToMany('App\Models\Cargo', 'cargos_membros')->withPivot('aa_inicio','aa_termino')->withTimestamps();
    }

    public function user()
    {
    	return $this->hasOne('App\Models\User');
    }

    public function sessoes()
    {
        return $this->belongsToMany('App\Models\Sessoes', 'membros_sessoes')->withPivot('cargo_id');
    }

    /* public function endereco_residencial()
	{
		return $this->hasOne('App\Models\Endereco');
    }
    
    public function endereco_comercial()
	{
		return $this->hasOne('App\Models\Endereco');
	} */
    
    
}
