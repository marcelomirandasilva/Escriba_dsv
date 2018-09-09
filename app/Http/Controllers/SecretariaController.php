<?php

namespace App\Http\Controllers;

use App\Models\Secretaria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SecretariaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $secretarias = DB::connection('mysql_sisseg')->select('select * from secretarias');
        $obj = (object)$secretarias;

        // dd($obj);

        return view('secretaria.lista',compact('obj','usuario_logado'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Secretaria  $secretaria
     * @return \Illuminate\Http\Response
     */
    public function show(Secretaria $secretaria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Secretaria  $secretaria
     * @return \Illuminate\Http\Response
     */
    public function edit(Secretaria $secretaria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Secretaria  $secretaria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Secretaria $secretaria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Secretaria  $secretaria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Secretaria $secretaria)
    {
        //
    }
}
