<?php

namespace App\Http\Controllers;

use App\Models\irmao;
use Illuminate\Http\Request;


class IrmaoController extends Controller
{
    // todas as rotas aqui serão antes autenticadas
    private $irmao;
    public function __construct(Irmao $irmao)
    {
        $this->irmao = $irmao; 
        
        // todas as rotas aqui serão antes autenticadas
        $this->middleware('auth');
    }

    public function index()
    {
        //$irmaos = irmao::get();
        //return view('irmaos/lista', ['irmaos' => $irmaos]);


        $irmaos = $this->irmao->all();

        return view('irmaos\lista', compact('irmaos'));

    }



    public function create()
    {
        $estado_civil   = ['Solteiro','Casado', 'Divorciado','Viúvo','Separado','União estável'];
        $grau           = ['PF','AP', 'CM','MM','MI'];
        $situacao       = ['Regular','Suspenso', 'XXXXXXXXX','YYYYYYYYY','ZZZZZZZZZ'];
        $escolaridade   = ['Fundamental - Incompleto','Fundamental - Completo','Médio - Incompleto','Médio - Completo','Superior - Incompleto','Superior - Completo','Pós-graduação - Incompleto','Pós-graduação - Completo','Mestrado - Incompleto','Mestrado - Completo','Doutorado - Incompleto','Doutorado - Completo'];
        $aposentado     = ['Sim','Não'];







        return view('irmaos.create',compact(['estado_civil','grau','situacao','escolaridade','aposentado']));

    }

    public function store(Request $request)
    {


        $irmao = new Irmao();

        $irmao = $irmao->create($request->all());

        \Session::flash('mensagem_sucesso','irmaos cadastrado com sucesso');
        return Redirect::to('irmaos/create');

    }

    protected function edit($id)
    {
        return "edita o irmão: {$id}";
    }

    protected function destroy($id)
    {

    }
    public function update(Request $request, $id)
    {

    }
}


