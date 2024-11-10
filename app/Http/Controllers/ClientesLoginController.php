<?php

namespace App\Http\Controllers;

use App\Models\ClientesLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClientesLoginController extends Controller
{
    public function index(){
        return view('/sesiones/register');
    }

    public function mostrar(){
        return view('/sesiones/login');
    }

    public function registrar(Request $request) {

        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'password' => 'required|max:255',
        ]);

        $cliente = ClientesLogin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($cliente);

        return redirect()->intended('/sesiones/login');
    }

    public function login(Request $request) {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
    
        if (Auth::guard('clientes')->attempt($credentials)) {
            return redirect()->intended('/pagina/index');
        }
    
        return back()->withErrors([
            'email' => 'Las credenciales no coinciden con nuestros registros.',
        ]);
    }    

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/sesiones/login')->with('success', 'Sesión cerrada correctamente.');
    }
}