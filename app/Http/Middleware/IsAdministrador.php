<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;

class IsAdministrador
{
    public function handle($request, Closure $next)
    {
        if(Auth::user()->acesso == "ADMINISTRADOR")
        {
            return $next($request);
        }

        return redirect("/login");
    }
}
