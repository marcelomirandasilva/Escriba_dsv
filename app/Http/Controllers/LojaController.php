<?php

namespace App\Http\Controllers;

use App\Bibliotecas\Geral;

use App\Models\Loja;
use App\Models\Pais;
use App\Models\Potencia;
use App\Models\Endereco;

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
        $potencias  = Potencia::all()->sortBy('no_potencia');
        $paises     = Pais::all()->sortBy('no_pais');        

        $ritos      =  pegaValorEnum('loja','ic_rito') ;

        //dd($ritos);

        return view('lojas.create',compact('potencias','paises','ritos'));
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
            'dt_fundacao' => $this->inverterData($request->input('dt_fundacao')),
            'ic_tipo_endereco' => 'Loja'
        ]);

        // Validar
        $this->validate($request, [
            'co_titulo'     => 'required',
            'no_loja'       => 'required',
            'nu_loja'       => 'required',
            'potencia_id'   => 'required',
            'ic_rito'       => 'required',
            'dt_fundacao'   => 'date',
            
            'de_email'      => 'email',

        ]);

        // Criar uma nova loja
        $loja = new Loja($request->all());

        // Salvar no banco para obter o ID
        $loja->save();



        // Criar um novo endereço com as informações inseridas
        $endereco = new Endereco($request->all());
        // Obter o Pais
        $pais = Pais::find($request->input('nu_pais'));
        // Associar o país e a loja ao endereço (chaves estrangeiras)
        $endereco->pais()->associate($pais);
        $endereco->loja()->associate($loja);
        // Salvar o endereço
        $endereco->save(); 


        // Cria um novo telefone com as informações inseridas
        $telefone = new Telefone($request->all());


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

        $phone = User::find(1)->phone;

        return view('lojas.show',compact('loja'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        

        $loja = $this->loja->dbplus_find($id);

        dd($loja);



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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Formatar a data para o padrão americano
     */

    protected function inverterData($data)
    {
        return implode("-", array_reverse(explode("/", $data)));
    }
}


