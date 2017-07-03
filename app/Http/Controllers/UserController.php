<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;


class UserController extends Controller
{
    public function perfil(){

    	return view('users.perfil',array('User' => Auth::user() ) );
    }

}
