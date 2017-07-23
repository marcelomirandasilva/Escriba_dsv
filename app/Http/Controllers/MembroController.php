<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\membro;
use App\Models\Endereco;
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
            //dd($endereco);
            // Dependentes vazios entram na conta. Para evitar problemas com isso
            // o cadastro é feito apenas caso o dependente tenha um nome (o que por
            // // sua vez ativa a obrigatoriedade das outras propriedades)
            // if(isset($dependente['nome']) && $dependente['nome'] != '')
            //     $participante->dependentes()->save(new Dependente($dependente));
             
             // Criar um novo endereço com as informações inseridas
            $membro->enderecos()->save(new Endereco($endereco));
            
        }

       

     
        // // Associar membro ao endereço (chaves estrangeiras)
        //  $endereco->membro()->associate($membro);

        // Salvar o endereço
        //$endereco->save(); 



        // // Cria um novo telefone com as informações inseridas
        // $telefone = new Telefone($request->all());
        // $telefone->loja()->associate($loja);
        // $telefone->save();

        // // Cria um novo email com as informações inseridas
        // $email = new Email($request->all());
        // $email->loja()->associate($loja);
        // $email->save();


/*        if ($loja and $endereco and $telefone and $email) {
            return redirect()->back()->with('sucesso',  $request->co_titulo    .' ' 
                                                        .$request->no_loja      .' Nº ' 
                                                        .$request->nu_loja 
                                                        .' Cadastrada com Sucesso');

        } else {
            return redirect()->back()->with(['erros' => 'Falha ao cadastrar']); 
        }
*/

        

    
         return redirect('/membros/create')->with('sucesso', "Membro cadastrado com sucesso. Código da inscriçao : <span style='font-weight: bold; font-size: 16px'>$membro->id</span><br><a target='_blank' style=' font-weight: bold; text-transform: uppercase' href='".url("/membros")."'>Clique aqui para imprirmir o comprovante de inscrição</a>");

      

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





