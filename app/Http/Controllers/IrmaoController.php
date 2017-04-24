<?php

namespace App\Http\Controllers;

use App\Models\irmao;
use Illuminate\Http\Request;

class IrmaoController extends Controller
{

    // todas as rotas aqui serão antes autenticadas
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $irmaos = irmao::get();
        return view('irmaos/lista', ['irmaos' => $irmaos]);
    }

    public function novo()
    {
        return view('irmaos.formulario');
    }

    public function salva(Request $request)
    {

        $irmao = new Irmao();

        $irmao = $irmao->create($request->all());

        \Session::flash('mensagem_sucesso','irmaos cadastrado com sucesso');
        return Redirect::to('irmaos/novo');

    }

    protected function edita($id)
    {
        return "edita o irmão: {$id}";
    }

    protected function exlui($id)
    {

    }
}


