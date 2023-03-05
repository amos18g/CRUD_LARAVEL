<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class SessionsController extends Controller
{

    public function create() {
        return view('auth.login');
    }

    public function store() { //autenticar un usuario

        if(auth() -> attempt(request(['email', 'password'])) == false){
            return back()->withErrors([
                'message' => 'El email o la contraseña son incorrectos,
                vuelve a intentar',
            ]);           
        }


        return redirect()->to('/');
    }

    public function destroy() {
        auth() -> logout();

        return redirect() -> to(route('login.index'));

    }
}
