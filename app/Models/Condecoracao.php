<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Condecoracao extends Model
{

	protected $table = "condecoracoes";

	protected $primaryKey = 'id';

	protected $fillable =[

            'dt_honorario',
            'dt_remido',
            'dt_emerito',
            'dt_benemerito',
            'dt_g_benemerito',
            'dt_estrela_dis_mac',
            'dt_cruz_perf',
            'dt_com_dom_pedro',
            'ato_honorario',
            'ato_remido',
            'ato_emerito',
            'ato_benemerito',
            'ato_g_Benemerito',
            'ato_estrela_dis_mac',
            'ato_cruz_perf',
            'ato_com_dom_pedro',
		
	];


    public function membro()
    {
        return $this->belongsTo('App\Models\Membro', 'membro_id');
    }


}
