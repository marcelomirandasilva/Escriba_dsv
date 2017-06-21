<?php

namespace App\Http\Controllers;

use App\Bibliotecas\Geral;

use App\Models\Loja;
use App\Models\Pais;
use App\Models\Potencia;
use App\Models\Endereco;
use App\Models\Telefone;
use App\Models\Email;

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

 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titulo = "Cadastro de Lojas";

        $potencias  = Potencia::all()->sortBy('no_potencia');
        $paises     = Pais::all()->sortBy('no_pais');        

        $ritos      =  pegaValorEnum('loja','ic_rito') ;

        //dd($ritos);

        return view('lojas.create_edit',compact('potencias','paises','ritos','titulo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request->all());                          //pega todos
        //dd($request->only(['no_loja','nu_loja']));    //pega somente os selecionados
        //dd($request->except(['nu_pais']));            //não pega os selecionados
        //dd($request->input(['nu_pais']));             //pega um campo

        $request->merge([
            'dt_fundacao'       => $this->inverterData($request->input('dt_fundacao')),
            'ic_tipo_endereco'  => 'Loja',
            'co_titulo'         => strtoupper($request->co_titulo),
            'sg_uf'             => strtoupper($request->sg_uf),
        ]);


        //dd($request->all());
        // Validar dados do formulário
        $this->validar($request);


        // Criar uma nova loja
        $loja = new Loja($request->all());

        // Salvar no banco para obter o ID
        $loja->save();



        // Criar um novo endereço com as informações inseridas
        $endereco = new Endereco($request->all());

        // Obter o Pais
        $pais = Pais::find($request->input('pais_id'));

        // Associar o país e a loja ao endereço (chaves estrangeiras)
        $endereco->pais()->associate($pais);
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


        return redirect()->back(); 
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
        //dd($proximo);

        echo '<pre>';

        //dd($input);

        echo '</pre>';


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
        $paises     = Pais::all()->sortBy('no_pais');        
        $ritos      = pegaValorEnum('loja','ic_rito') ;

        $loja = $this->loja->find($id);

        $edita = true;

        $titulo = "Edição da Loja: {$loja->co_titulo} {$loja->no_loja} N°{$loja->nu_loja}";

        //dd($loja->endereco->pais_id);


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

        $dadosFormulario = $request->all();

        $loja = $this->loja->find($id);
        
        $status1 = $loja->update($dadosFormulario);

        $status2 = $loja->endereco->update($dadosFormulario);

        // $loja->endereco()->associate($request->input('pais_id'));

        //$status3 = $loja->endereco->update($dadosFormulario);

        
        
        $status4 = $loja->telefone->update($dadosFormulario);
        $status5 = $loja->email->update($dadosFormulario);

        //dd($dadosFormulario);

        if ($status1 or $status2 or $status3 or $status4 or $status5) {
            return redirect('lojas');
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


}


