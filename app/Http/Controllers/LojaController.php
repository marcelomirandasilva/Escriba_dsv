<?php

namespace App\Http\Controllers;

use App\Models\loja;
use App\Models\Pais;
use App\Models\Potencia;
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

        return view('lojas.create',compact('potencias','paises'));
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

        // Validar

        // $this->validate($request, [
        //     'nome' => 'required',
        //     ''
        // ]);

        $nova_loja = new Loja($request->all );

        $nova_loja->save();


        // Obter o Pais
        $pais = Pais::find($request->input('nu_pais'));

        // Obter a uf
        $uf = Uf::find($request->input('nu_uf'));

        // Obter o Municipio
        $Municipio = Municipio::find($request->input('nu_municipio'));

        // Obter o Bairro
        $bairro = Bairro::find($request->input('nu_bairro'));


        $endereco->pais()->save($pais);
        $endereco->uf()->save($uf);
        $endereco->municipio()->save($municipio);
        $endereco->bairro()->save($bairro);
        
    
              
/*

        if ($inclui) {
            return redirect('lojas');
        } else {
            return redirect()->back();
        }
  */     

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
        //
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
}
