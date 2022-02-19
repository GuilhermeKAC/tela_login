<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use App\Models\Usuario;

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
        return view('index', compact('usuario'));
    }

    public function store(Request $request)
    {

        $email = $request->email;
        $password = $request->password;
        $usuario = new Usuario();
        $usuario->email = $email;
        $usuario->password = $password;
        $usuario->save();
        
    }
}
