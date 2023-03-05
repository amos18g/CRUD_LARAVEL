<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    
    public function create() {
        return view('auth.register');
    }

    public function store(){

        $user = User::create(request(['name', 'email', 'password']));//los parametros que enviara el usuario

        auth()->login($user);//al registrarse se iniciara la sesion del usuario
        return redirect()->to('/');

    }
}
