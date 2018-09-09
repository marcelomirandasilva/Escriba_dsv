<?php

namespace App\Http\Controllers;

use App\Models\Secretaria;
use App\Models\Veiculo;
use App\Models\Base;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Faker\Generator as Faker;


class BaseController extends Controller
{


    public function index()
    {
        $bases = Base::orderBy('nome')->get();

        return view('base.lista',compact('bases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $combustiveis   = pegaValorEnum('veiculos', 'combustivel');
        sort($combustiveis); //ordena os combustíveis

        $secretarias    = Secretaria::orderBy('nome')->get();
        $bases          = Base::orderBy('nome')->get();

        return view('veiculo.create',compact('secretarias','combustiveis','bases'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Veiculo  $veiculo
     * @return \Illuminate\Http\Response
     */
    public function show(Veiculo $veiculo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Veiculo  $veiculo
     * @return \Illuminate\Http\Response
     */
    public function edit(Veiculo $veiculo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Veiculo  $veiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Veiculo $veiculo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Veiculo  $veiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Veiculo $veiculo)
    {
        //
    }
}
