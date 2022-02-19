<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use App\Models\Usuario;
use App\Models\Pessoa;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function auth(Request $request)
    {

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return view('/index');
        }
        return view('/index');
    }

    public function index()
    {
        $usuario = Usuario::all();
        $pessoa = Pessoa::all();

        return view('index', compact('usuario', 'pessoa'));
    }

    public function storeUser(Request $request)
    {

        $email = $request->email;
        $password = $request->password;
        $usuario = new Usuario();
        $usuario->email = $email;
        $usuario->password = $password;
        $usuario->save();
    }

    public function storePessoa(Request $request)
    {

        $nome = $request->nome;
        $idade = $request->idade;
        $pessoa = new Pessoa();
        $pessoa->nome = $nome;
        $pessoa->idade = $idade;
        $pessoa->save();
    }
}
