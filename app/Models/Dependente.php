<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dependente extends Model
{
    
	protected $table = "dependente";

	protected $primaryKey = 'id';

	protected $fillable =[

		'no_dependente',
		'dt_nascimento',
		'ic_grau_parentesco',
	];


    public function irmao()
    {
        return $this->belongsTo('App\Models\Membro', 'membro_id');
    }


}
