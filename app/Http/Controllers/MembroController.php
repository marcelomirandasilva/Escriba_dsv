<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\membro;
use App\Models\Endereco;
use App\Models\pais;
use App\Models\loja;
use App\Models\Telefone;
use App\Models\Email;
use App\Models\Dependente;
use App\Models\Condecoracao;
use App\Models\Cerimonia;

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

        $escolaridade       = pegaValorEnum('membros','ic_escolaridade');                                                   
        $situacao           = pegaValorEnum('membros','ic_situacao');                                                   
        $grau               = pegaValorEnum('membros','ic_grau');                      
        $estado_civil       = pegaValorEnum('membros','ic_estado_civil'); 
        $tipo_telefone      = pegaValorEnum('telefones','ic_telefone'); 
        $sexos              = pegaValorEnum('dependentes','ic_sexo'); 
        $grau_parentesco    = pegaValorEnum('dependentes','ic_grau_parentesco'); 
        

        //orderna os valores dos arrays
        sort($estado_civil);
        //sort($grau);                             
        sort($situacao);
        //sort($escolaridade);
        sort($grau_parentesco);

        $paises     = Pais::all()->sortBy('nome');        

        $lojas      = Loja::all()->sortBy('no_loja');    

        //dd($condecoracoes)   ;

        return view('membros.create',compact(['estado_civil','grau','situacao','escolaridade','aposentado','paises','titulo','grau_parentesco','tipo_telefone','lojas','sexos']));

    }

    public function store(Request $request)
    {


       //dd($request->all());
        


       // Cria um novo membro
        //$membro = new Membro($request->all());
        $membro = new Membro($request->all());

        
        // Verificar se está aposentado
        $membro->ic_aposentado = $request->aposentado ? 1 : 0;


        // Salvar no banco para obter o ID
        $membro->save();

        foreach($request->enderecos as $endereco)
        {
            // Criar um novo endereço com as informações inseridas
            $membro->enderecos()->save(new Endereco($endereco));
        }

        //dd($request->telefones);
        
        
        foreach($request->telefones as $telefone)
        {
                        
            // Criar um novo telefone com as informações inseridas
            $membro->telefones()->save(new Telefone($telefone));
        }

        foreach($request->emails as $email)
        {
            // Criar um novo email com as informações inseridas
            $membro->emails()->save(new Email($email));
        }

       foreach($request->dependentes as $dependente)
        {
            // Criar um novo dependente com as informações inseridas
            $membro->dependentes()->save(new Dependente($dependente));
        }
     

/*
         $cerimonia = new Cerimonia($request->all());

         dd($cerimonia);
*/
        

         $cerimonia = new Cerimonia($request->all());

         $cerimonia->membro()->associate($membro);
         //dd($cerimonia);
         $cerimonia->save();

/*


        $email = new Email($request->all());
        $email->loja()->associate($loja);
        $email->save();



        $membro->cerimoria()->save(new Cerimonia($request->all()));
*/
           


        if ($membro /*and $cerimonia*/) {
            return redirect('/membros/create')->with('sucesso', ' O membro '
                                                        .strtoupper($request->no_membro)    .' CIM Nº ' 
                                                        .$request->nu_cim
                                                        .' foi cadastrado com sucesso'
                                                    );

        } else {
            return redirect('/membros/create')->with(['erros' => 'Falha ao cadastrar']); 
        }
    }

    public function edit($id)
    {
        $membro = $this->membro->find($id);

        $edita = true;
        $titulo = "Edição de Membro";

        $aposentado         = ['Sim','Não'];

        
        $escolaridade       = pegaValorEnum('membros','ic_escolaridade');                                                   
        $situacao           = pegaValorEnum('membros','ic_situacao');                                                   
        $grau               = pegaValorEnum('membros','ic_grau');                      
        $estado_civil       = pegaValorEnum('membros','ic_estado_civil'); 
        $tipo_telefone      = pegaValorEnum('telefones','ic_telefone'); 
        $sexos              = pegaValorEnum('dependentes','ic_sexo'); 
        $grau_parentesco    = pegaValorEnum('dependentes','ic_grau_parentesco'); 
        

        //orderna os valores dos arrays
        sort($estado_civil);
        //sort($grau);                             
        sort($situacao);
        //sort($escolaridade);
        sort($grau_parentesco);

        $paises     = Pais::all()->sortBy('nome');        

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





