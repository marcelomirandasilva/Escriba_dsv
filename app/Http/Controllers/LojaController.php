<?php

namespace App\Http\Controllers;

use App\Bibliotecas\Geral;

use App\Models\Loja;
use App\Models\Pais;
use App\Models\Potencia;
use App\Models\Endereco;
use App\Models\Telefone;
use App\Models\Email;
use DB;

use Illuminate\Http\Request;


class LojaController extends Controller
{
    //cria a loja para ser usada em todas as rotas
    private $loja;
    
    public function __construct(Loja $loja)
    {
        $this->loja = $loja; 
        
        // todas as rotas aqui serão antes autenticadas
        $this->middleware('auth');
    }


   public function index()
    {
        $lojas = $this->loja->all();
        return view('lojas.lista', compact('lojas'));
    }


    public function create()
    {
        $titulo = "Cadastro de Lojas";

        $potencias  = Potencia::all()->sortBy('no_potencia');
        $paises     = Pais::all()->sortBy('nome');        

        $ritos      =  pegaValorEnum('lojas','ic_rito') ;

        //dd($ritos);

        return view('lojas.create_edit',compact('potencias','paises','ritos','titulo'));
    }


    public function store(Request $request)
    {

        if(trim($request->co_titulo) == null)
        {
            $request->merge([
                'co_titulo' => "ARLS"
            ]);

        }else{
            $request->merge([
                'co_titulo'  => strtoupper($request->co_titulo),
            ]);
        };

        $request->merge([
            'dt_fundacao'       => $this->inverterData($request->input('dt_fundacao')),
            'ic_tipo_endereco'  => 'Loja',
            'sg_uf'             => strtoupper($request->sg_uf),
        ]);


        // Validar dados do formulário
        $this->validar($request);

        $busca_loja = DB::table('lojas')
                     ->select(DB::raw('count(*) as count'))
                     ->where('no_loja', '=', $request->no_loja )
                     ->where([
                                ['nu_loja', '=', $request->nu_loja],
                                ['no_loja', '=', $request->no_loja],
                            ])
                     ->get();

        //verifica se já existe uma loja com o mesmo nome e numero, porém, com o id diferente(o mesmo id significa a loja que está sendo alterada)
        if ($busca_loja[0]->count > 0 ){

            //se encontrar alguma loja na busca acima retorna erro informando
            return redirect()->back()->withInput()->with('ja_existe', 'A '
                                                        .$request->co_titulo    .' ' 
                                                        .$request->no_loja      .' Nº ' 
                                                        .$request->nu_loja 
                                                        .' Já existe!');
        }


        

        

        // Criar uma nova loja
        $loja = new Loja($request->all());

        // Salvar no banco para obter o ID
        $loja->save();



        // Criar um novo endereço com as informações inseridas
        $endereco = new Endereco($request->all());

      

        // Associar loja ao endereço (chaves estrangeiras)
         $endereco->loja()->associate($loja);

        // Salvar o endereço
        $endereco->save(); 

        // Cria um novo telefone com as informações inseridas
        $telefone = new Telefone($request->all());
        $telefone->loja()->associate($loja);
        $telefone->save();

        // Cria um novo email com as informações inseridas
        $email = new Email($request->all());
        $email->loja()->associate($loja);
        $email->save();


        if ($loja and $endereco and $telefone and $email) {
            return redirect()->back()->with('sucesso',  $request->co_titulo    .' ' 
                                                        .$request->no_loja      .' Nº ' 
                                                        .$request->nu_loja 
                                                        .' Cadastrada com Sucesso');

        } else {
            return redirect()->back()->with(['erros' => 'Falha ao cadastrar']); 
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $loja = $this->loja->find($id);

        if( $this->loja->find($id-1))
            { $anterior = $this->loja->find($id-1); }
        else
            { $anterior = $this->loja->find($id); }

        if( $this->loja->find($id+1))
            { $proximo = $this->loja->find($id+1); }
        else
            { $proximo = $this->loja->find($id); }


        return view('lojas.show',compact('loja','anterior','proximo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $potencias  = Potencia::all()->sortBy('no_potencia');
        $paises     = Pais::all()->sortBy('nome');        
        $ritos      = pegaValorEnum('lojas','ic_rito') ;

        $loja = $this->loja->find($id);
        //dd($loja);

        $edita = true;

        $titulo = "Edição da Loja: {$loja->co_titulo} {$loja->no_loja} N°{$loja->nu_loja}";

  


        return view('lojas.create_edit',compact('potencias','paises','ritos','loja', 'titulo','edita'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
       // Validar dados do formulário
        //$this->validar($request);

        //verifica se já existe uma loja com o mesmo nome e numero, porém, com o id diferente(o mesmo id significa a loja que está sendo alterada)
        $busca_loja = DB::table('lojas')
                     ->select(DB::raw('count(*) as count'))
                     ->where('no_loja', '=', $request->no_loja )
                     ->where([
                                ['nu_loja', '=', $request->nu_loja],
                                ['no_loja', '=', $request->no_loja],
                                ['id',      '<>', $id],
                            ])
                     ->get();

        
        //se encontrar alguma loja na busca acima retorna erro informando
        if ($busca_loja[0]->count > 0 ){

            return redirect()->back()->with('ja_existe', 'A '
                                                        .$request->co_titulo    .' ' 
                                                        .$request->no_loja      .' Nº ' 
                                                        .$request->nu_loja 
                                                        .' Já existe!');
        }

        $dadosFormulario = $request->all();

        $loja = $this->loja->find($id);
        
        $status1 = $loja->update($dadosFormulario);

        $status2 = $loja->endereco->update($dadosFormulario);

        // $loja->endereco()->associate($request->input('pais_id'));

        $status3 = $loja->endereco->update($dadosFormulario);

        
        
        $status4 = $loja->telefone->update($dadosFormulario);
        $status5 = $loja->email->update($dadosFormulario);

        //dd($dadosFormulario);

        if ($status1 and $status2 and $status3 and $status4 and $status5) {
             return redirect()->back()->with('sucesso',  $request->co_titulo    .' ' 
                                                        .$request->no_loja      .' Nº ' 
                                                        .$request->nu_loja 
                                                        .' Alterada com Sucesso');
        } else {
            //return redirect(back); 
            return redirect('lojas.edit', $id)->whith(['erros' => 'Falha ao editar']); 
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $loja = Loja::findOrFail($id);
        $loja->delete();

        return redirect('lojas');

    }

    /**
     * Formatar a data para o padrão americano
     */

    protected function inverterData($data)
    {
        return implode("-", array_reverse(explode("/", $data)));
    }

    protected function validar($request)
    {
        // Validar
        $this->validate($request, [
            'co_titulo'     => 'required|min:3|max:10',
            'no_loja'       => 'required|min:3|max:50',
            'nu_loja'       => 'required|numeric',
            'potencia_id'   => 'required',
            'ic_rito'       => 'required',
            'dt_fundacao'   => 'date',
            
            //email
            'de_email'      => 'email',

            //telefone
            'nu_telefone'   => 'min:9|max:15',

            //endereço
            'nu_cep'        => 'min:10|max:10',
            'sg_uf'         => 'alpha|min:2|max:2',
            'no_municipio'  => 'min:3|max:50',
            'no_bairro'     => 'min:3|max:20',
            'no_logradouro' => 'min:3|max:100',
            'nu_logradouro' => 'numeric',
            'de_complemento'=> 'min:3|max:20',
        ]);
    }


    /* ========================================AJAX====================================== */

    function nova_ajax(Request $request)
    {
        if( trim($request->co_titulo) == "")
        {
            $request->merge([
                'co_titulo' => "ARLS"
            ]);
        }else{
            $request->merge([
                'co_titulo'  => strtoupper($request->co_titulo),
            ]);
        };

        

        // Validar dados do formulário
        $validacao = $this->validate($request, [
            'co_titulo'     => 'required|min:3|max:10',
            'no_loja'       => 'required|min:3|max:50',
            'nu_loja'       => 'required|numeric',
            'potencia_id'   => 'required',
        ]);

        // if ($validacao->fails()) {
        //     return response()->json($validator->messages(), 200);
        // } 

        $busca_loja = DB::table('lojas')
                     ->select(DB::raw('count(*) as count'))
                     ->where('no_loja', '=', $request->no_loja )
                     ->where([
                                ['nu_loja', '=', $request->nu_loja],
                                ['no_loja', '=', $request->no_loja],
                            ])
                     ->get();

        //verifica se já existe uma loja com o mesmo nome e numero, porém, com o id diferente(o mesmo id significa a loja que está sendo alterada)
        if ($busca_loja[0]->count > 0 ){

            //se encontrar alguma loja na busca acima retorna erro informando
             return 'A '.$request->co_titulo    .' ' 
                        .$request->no_loja      .' Nº ' 
                        .$request->nu_loja 
                        .' Já existe!';
        }

        // Criar uma nova loja
        $loja = new Loja($request->all());

        // Salvar no banco para obter o ID
        $loja->save();

         // Criar um novo endereço com as informações inseridas
        $endereco = new Endereco($request->all());
    

        // Associar loja ao endereço (chaves estrangeiras)
         $endereco->loja()->associate($loja);

        // Salvar o endereço
        $endereco->save(); 

        // Cria um novo telefone com as informações inseridas
        $telefone = new Telefone($request->all());
        $telefone->loja()->associate($loja);
        $telefone->save();

        // Cria um novo email com as informações inseridas
        $email = new Email($request->all());
        $email->loja()->associate($loja);
        $email->save();


        return  $loja;

    }




}


