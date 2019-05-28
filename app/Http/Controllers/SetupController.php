<?php

namespace App\Http\Controllers;

use App\Models\Setup;
use Illuminate\Http\Request;

class SetupController extends Controller
{
    public function index()
    {
        $setup = Setup::find(1);
        $titulo         = "Setup";

        return view('setups.create',compact('setup','titulo'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Setup $setup)
    {
        //
    }

    public function edit(Setup $setup)
    {
        //
    }

    public function update(Request $request, Setup $setup)
    {
        //
    }

}
