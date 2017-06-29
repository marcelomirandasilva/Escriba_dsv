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


        $titulo = "Cadastro de Membros";

        $aposentado         = ['Sim','Não'];

        $escolaridade       = pegaValorEnum('membro','ic_escolaridade');                                                   
        $situacao           = pegaValorEnum('membro','ic_situacao');                                                   
        $grau               = pegaValorEnum('membro','ic_grau');                      
        $estado_civil       = pegaValorEnum('membro','ic_estado_civil'); 
        $tipo_telefone      = pegaValorEnum('telefone','ic_telefone'); 
        $sexos              = pegaValorEnum('dependente','ic_sexo'); 
        $grau_parentesco    = pegaValorEnum('dependente','ic_grau_parentesco'); 
        

        //orderna os valores dos arrays
        sort($estado_civil);
        //sort($grau);                             
        sort($situacao);
        //sort($escolaridade);
        sort($grau_parentesco);

        $paises     = Pais::all()->sortBy('no_pais');        

        $lojas      = Loja::all()->sortBy('no_loja');    

        //dd($condecoracoes)   ;

        return view('membros.create',compact([   'estado_civil','grau','situacao','escolaridade','aposentado','paises','titulo','grau_parentesco','tipo_telefone','lojas','sexos']));

    }

    public function store(Request $request)
    {


        //dd($request->all());


       // Cria um novo membro
        //$membro = new Membro($request->all());
        $membro = new Membro($request->all());

        // Salvar no banco para obter o ID
        $membro->save();

        
        //Session::flash('mensagem_sucesso','membro cadastrado com sucesso');
        return Redirect::to('membros/create');

    }

    public function edit($id)
    {
        $membro = $this->membro->find($id);

        $edita = true;
        $titulo = "Edição de Membro";

        $aposentado         = ['Sim','Não'];

        
        $escolaridade       = pegaValorEnum('membro','ic_escolaridade');                                                   
        $situacao           = pegaValorEnum('membro','ic_situacao');                                                   
        $grau               = pegaValorEnum('membro','ic_grau');                      
        $estado_civil       = pegaValorEnum('membro','ic_estado_civil'); 
        $tipo_telefone      = pegaValorEnum('telefone','ic_telefone'); 
        $sexos              = pegaValorEnum('dependente','ic_sexo'); 
        $grau_parentesco    = pegaValorEnum('dependente','ic_grau_parentesco'); 
        

        //orderna os valores dos arrays
        sort($estado_civil);
        //sort($grau);                             
        sort($situacao);
        //sort($escolaridade);
        sort($grau_parentesco);

        $paises     = Pais::all()->sortBy('no_pais');        

        $lojas      = Loja::all()->sortBy('no_loja');       

        
        return view('membros.create',compact([ 'estado_civil','grau','situacao','escolaridade','aposentado','paises','titulo','grau_parentesco','tipo_telefone','lojas','sexos','edita','membro']));

        
    }

    public function destroy($id)
    {
        return "exclui o Membro: {$id}";
    }
    public function update(Request $request, $id)
    {

    }
}





