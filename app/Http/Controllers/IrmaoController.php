<?php

namespace App\Http\Controllers;

use App\Models\irmao;
use App\Models\pais;
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

        //orderna os valores dos arrays
        sort($estado_civil);
        //sort($grau);                             
        sort($situacao);
        //sort($escolaridade);
        sort($grau_parentesco);

        $titulo = "Cadastro de Irmaõs";

        $paises     = Pais::all()->sortBy('no_pais');        



        return view('irmaos.create',compact([   'estado_civil','grau','situacao',
                                                'escolaridade','aposentado','paises',
                                                'titulo','grau_parentesco','tipo_telefone'
                                            ]));

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
        $edita = true;

        $titulo = "Edição do Irmão: {$irmao->no_irmao} {$irmao->nu_cim}";

        //return view('lojas.create_edit',compact('potencias','paises','ritos','loja', 'titulo','edita'));

        return "edita o irmão: {$id}";
    }

    protected function destroy($id)
    {
        return "exclui o irmão: {$id}";
    }
    public function update(Request $request, $id)
    {

    }
}


