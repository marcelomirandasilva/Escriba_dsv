<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Funcionario;

class AuthController extends Controller
{
    /**
     * Login
     */

    public function login()
    {
        //testa se o usuário já está logado e redireciona para a home
        if(Auth::user())
        {
            return redirect()->intended('/');
        }
        
        return view('auth.login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect("/");
    }
    

    /**
     * Gerenciar o login quando for enviado via POST
     */

    public function entrar(Request $request)
    {
       	$funcionario_logado = Funcionario::where('email', $request->email)->first();

        
        //dd($funcionario_logado);

        if($funcionario_logado)
        { 
            
            // Testar a senha
        	if(Hash::check($request->password, $funcionario_logado->password))
        	{

                // Logar o usuário
                if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
                {
                    $request->session()->put('funcionario_logado', $funcionario_logado);
                    
                    // Redirecionar para o Painel Principal
                    return redirect()->intended('/');
                }
        	} else {
                return redirect("/login")->withErrors(['erros' => 'Senha não confere']);
        	}
        }else{
            return redirect("/login")->withErrors(['erros' => 'Email não cadastrado']);    
        } 





       /*  // Obter o usuário 
    	$usuario = User::where('email', $request->email)->first();
        
        dd($usuario);
        
        //verifica se o email existe na base
        if($usuario)
        { 
            //dd(bcrypt($request->senha), $usuario->password);
            
            // Testar a senha
        	if(Hash::check($request->senha, $usuario->password))
        	{
                // Logar o usuário
                if(Auth::attempt(['email' => $request->email, 'password' => $request->senha]))
                {
                    // Redirecionar para o Painel Principal
                    //dd("logou");
                    return redirect()->intended('/');
                }

        	} else {
                return redirect("/login")->withErrors(['erros' => 'Senha não confere']);
        	}
        }else{
            return redirect("/login")->withErrors(['erros' => 'Email não cadastrado']);    
        } */
    }
}
