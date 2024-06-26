<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Perfil;
use Illuminate\Support\Facades\Auth;
use Gate;

class UsuariosController extends Controller
{

    public function login()
    {
        return view('usuarios.login');
    }

    public function autenticar(Request $request)
    {
        $credentials = $request->only(['email', 'password']);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('home.index');
        }

        return back()->withErrors('Pone la wea bien tonto')->onlyInput('email');
    }

}
