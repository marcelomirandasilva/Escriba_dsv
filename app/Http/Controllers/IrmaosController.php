<?php

namespace App\Http\Controllers;

use App\Models\irmao;
use Illuminate\Http\Request;

class IrmaosController extends Controller
{



    public function index()
    {
        $irmaos = irmao::get();
        return view('irmaos.lista', ['irmaos' => $irmaos]);
    }


    public function novo()
    {
        return view('irmaos.formulario');
    }

    public function salvar(Request $request)
    {

        $irmao = new Irmao();

        $irmao = $irmao->create($request->all());

        \Session::flash('mensagem_sucesso','irmaos cadastrado com sucesso');
        return Redirect::to('irmaos/novo');

    }

    protected function editar($id)
    {

    }
}


