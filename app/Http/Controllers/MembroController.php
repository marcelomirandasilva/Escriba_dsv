<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\membro;
use App\Models\pais;
use App\Models\loja;
use Illuminate\Http\Request;


class MembroController extends Controller
{
    // todas as rotas aqui serão antes autenticadas
    private $membro;
    public function __construct(membro $membro)
    {
        $this->membro = $membro; 
        
        // todas as rotas aqui serão antes autenticadas
        $this->middleware('auth');
    }

    public function index()
    {
        //$membros = membro::get();
        //return view('membros/lista', ['membros' => $membros]);


        $membros = $this->membro->all();

        return view('membros\lista', compact('membros'));

    }



    public function create()
    {
        $estado_civil   = ['Solteiro','Casado', 'Divorciado','Viúvo','Separado','União estável'];
        $grau           = ['Aprendiz', 'Companheiro','Mestre','M. Instalado','Candidato'];
        $situacao       = ['Regular','Suspenso', 'Orietnte Eterno','YYYYYYYYY','ZZZZZZZZZ'];
        $escolaridade   = ['Fundamental - Incompleto','Fundamental - Completo','Médio - Incompleto','Médio - Completo',
                            'Superior - Incompleto','Superior - Completo','Pós-graduação - Incompleto',
                            'Pós-graduação - Completo','Mestrado - Incompleto','Mestrado - Completo',
                            'Doutorado - Incompleto','Doutorado - Completo'];

        $aposentado     = ['Sim','Não'];


        $grau_parentesco  = ['Avós','Bisavós','Bisneto(a)','Companheira','Enteado(a)','Esposa','Ex-esposa','Filho(a)',
                             'Irmão(ã)','Neto(a)','Pais','Outras'];  


        $tipo_telefone    = pegaValorEnum('telefone','ic_telefone'); 

        $sexos      = pegaValorEnum('dependente','ic_sexo'); 

        //orderna os valores dos arrays
        sort($estado_civil);
        //sort($grau);                             
        sort($situacao);
        //sort($escolaridade);
        sort($grau_parentesco);

        $titulo = "Cadastro de Membros";

        $paises     = Pais::all()->sortBy('no_pais');        

        $lojas      = Loja::all()->sortBy('no_loja');       

        return view('membros.create',compact([   'estado_civil','grau','situacao','escolaridade','aposentado','paises',
                                                 'titulo','grau_parentesco','tipo_telefone','lojas','sexos'
                                             ]));

    }

    public function store(Request $request)
    {


        $membro = new membro();

        $membro = $membro->create($request->all());

        Session::flash('mensagem_sucesso','membro cadastrado com sucesso');
        return Redirect::to('membros/create');

    }

    public function edit($id)
    {
        $membro = $this->membro->find($id);

        $edita = true;
        $titulo = "Edição de Membro: {$membro->no_membro} {$membro->nu_cim}";

        $estado_civil       = ['Solteiro','Casado', 'Divorciado','Viúvo','Separado','União estável'];
        $grau               = ['Aprendiz', 'Companheiro','Mestre','M. Instalado','Candidato'];
        $situacao           = ['Regular','Suspenso', 'Orietnte Eterno','YYYYYYYYY','ZZZZZZZZZ'];
        $escolaridade       = ['Fundamental - Incompleto','Fundamental - Completo','Médio - Incompleto','Médio - Completo',
                            'Superior - Incompleto','Superior - Completo','Pós-graduação - Incompleto',
                            'Pós-graduação - Completo','Mestrado - Incompleto','Mestrado - Completo',
                            'Doutorado - Incompleto','Doutorado - Completo'];

        $aposentado         = ['Sim','Não'];


        $grau_parentesco    = ['Avós','Bisavós','Bisneto(a)','Companheira','Enteado(a)','Esposa','Ex-esposa','Filho(a)',
                             'Irmão(ã)','Neto(a)','Pais','Outras'];  

        $tipo_telefone      = pegaValorEnum('telefone','ic_telefone'); 
        $sexos              = pegaValorEnum('dependente','ic_sexo'); 

        //orderna os valores dos arrays
        sort($estado_civil);
        //sort($grau);                             
        sort($situacao);
        //sort($escolaridade);
        sort($grau_parentesco);

      
        $paises     = Pais::all()->sortBy('no_pais');        

        $lojas      = Loja::all()->sortBy('no_loja');       

 
        
        return view('membros.create',compact([ 'estado_civil','grau','situacao','escolaridade','aposentado','paises','titulo',
                                                'grau_parentesco','tipo_telefone','lojas','sexos','edita','membro'
                                            ]));

        
    }

    public function destroy($id)
    {
        return "exclui o Membro: {$id}";
    }
    public function update(Request $request, $id)
    {

    }
}


