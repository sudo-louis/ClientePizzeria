<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ClientesAuth
{
    public function handle($request, Closure $next)
    {
        if (!Auth::guard('clientes')->check()) {
            return redirect('/sesiones/login')->with('error', 'Debe iniciar sesión para acceder a esta página.');
        }

        return $next($request);
    }
}
