<?php

namespace App\Http\Controllers;

use App\Models\Motorista;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MotoristaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$users = DB::connection('mysql_sisseg')->select('select * from funcionarios');
        //  dd($users);
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
     * @param  \App\Models\Motorista  $motorista
     * @return \Illuminate\Http\Response
     */
    public function show(Motorista $motorista)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Motorista  $motorista
     * @return \Illuminate\Http\Response
     */
    public function edit(Motorista $motorista)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Motorista  $motorista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Motorista $motorista)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Motorista  $motorista
     * @return \Illuminate\Http\Response
     */
    public function destroy(Motorista $motorista)
    {
        //
    }
}
