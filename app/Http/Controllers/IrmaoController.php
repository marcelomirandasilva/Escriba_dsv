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
        $grau           = ['Profano','Aprendiz', 'Companheiro','Mestre','M. Instalado'];
        $situacao       = ['Regular','Suspenso', 'XXXXXXXXX','YYYYYYYYY','ZZZZZZZZZ'];
        $escolaridade   = ['Fundamental - Incompleto','Fundamental - Completo','Médio - Incompleto','Médio - Completo',
                            'Superior - Incompleto','Superior - Completo','Pós-graduação - Incompleto',
                            'Pós-graduação - Completo','Mestrado - Incompleto','Mestrado - Completo',
                            'Doutorado - Incompleto','Doutorado - Completo'];

        $aposentado     = ['Sim','Não'];

        $tipo_endereco  = ['Residencial','Comercial'];  
        $tipo_logradouro= ['Aeroporto',
                            'Alameda','Área','Avenida','Campo','Chácara','Colônia','Condomínio','Conjunto',
                            'Distrito','Esplanada','Estação','Estrada','Favela','Fazenda','Feira','Jardim',
                            'Ladeira','Lago','Lagoa','Largo','Loteamento','Morro','Núcleo','Parque','Passarela',
                            'Pátio','Praça','Quadra','Recanto','Residencial','Rodovia','Rua','Setor','Sítio','Travessa',
                            'Trecho','Trevo','Vale','Vereda','Via','Viaduto','Viela','Vila'];

        $grau_parentesco  = ['Avós','Bisavós','Bisneto(a)','Companheira','Enteado(a)','Esposa','Ex-esposa','Filho(a)',
                             'Irmão(ã)','Neto(a)','Pais','Outras'];  


        return view('irmaos.create',compact(['estado_civil','grau','situacao','escolaridade','aposentado','tipo_endereco','tipo_logradouro','grau_parentesco']));

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


