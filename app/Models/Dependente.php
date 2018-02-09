<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dependente extends Model
{
    
	protected $table = "dependentes";

	protected $primaryKey = 'id';

	protected $fillable =[

		'no_dependente',
		'dt_nascimento',
		'ic_grau_parentesco',
		'ic_sexo',
		'ic_mora_junto',
	];


    public function membro()
    {
        return $this->belongsTo('App\Models\Membro', 'membro_id');
    }


}
